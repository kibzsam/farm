<?php

namespace App\Http\Controllers;
use App\Animal_record;
use App\Herd;
use Carbon\Carbon;
use Illuminate\Http\Request;
Class AnimalRecordController extends Controller {

    public function store(Request $request)
    {
        // Validate the request...
        $this->validate($request,[
            'animal'=>'required|max:255',
            'animalno'=>'required|max:255',
            'animalname'=>'required|max:255',
            'animaltype'=>'required|max:255',
            'breed'=>'required|max:255',
        ]);

        $animalrecord = new Animal_record;
        // code below will link a record to the authenticated user
        $user=$request->user();
        // code below will calculate the age of an animal automatically
        $b=$request['birthdate'];
        $now=Carbon::now();
        $birth=Carbon::createFromFormat('Y-m-d',$b)->startOfDay();
        $age=$now->diffInMonths($birth);
        $animalrecord->fill([
            'animal'=>$request->animal,
            'animalno'=>$request->animalno,
            'animalname'=>$request->animalname,
            'animaltype'=>$request->animaltype,
            'herd'=>$request->herd,
            'gender'=>$request->gender,
            'animalage'=>$age,
            'birthdate'=>$request->birthdate,
            'purchasedate'=>$request->purchasedate,
            'breed'=>$request->breed
        ]);
        $animalrecord->user()->associate($user);
        $user->animal_records()->save($animalrecord);
        $message='Successfully recorded';

        return redirect()->back()->with('message',$message);

    }
    // Function to query and display all animal record that exist and to display the herd
    public  function index(Request $request){
        $authuser=$request->user()->id;
        $data =Animal_record::query()->where('user_id','=',$authuser)->cursor();
        $herd=Herd::query()->select('herdname')->get();
        return view('animalrecord',['data'=>$data,'herd'=>$herd]);
    }
//Function to edit the animal record
    public function edit_animal(Request $request){
        $pick=$request['id'];
        $edit=Animal_record::query()->where('id','=',$pick);
           $edit->update([
               'animal'=>$request->animal1,
               'animalno'=>$request->animalno,
               'animalname'=>$request->animalname,
               'animaltype'=>$request->animaltype,
               'gender'=>$request->animalsex,
               'gender'=>$request->gender,
               'animalage'=>$request->animalage,
               'birthdate'=>$request->birthdate,
               'purchasedate'=>$request->purchasedate,
               'breed'=>$request->breed]);
        $message='data updated successfuly';
    return redirect()->back()->with('message',$message);
    }
    public function delete_animal(Request $request){
        $pick2=$request['del_id'];
        $delete=Animal_record::query()->where('id','=',$pick2);
        $delete->delete();
        $message='Record successfuly Deleted';
        return redirect()->back()->with('message',$message);
    }


}