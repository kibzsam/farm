<?php
namespace App\Http\Controllers;
use App\Animal_record;
use App\breedregister;
use App\Status;
use Illuminate\Http\Request;
use Carbon\Carbon;
Class BreedingController extends Controller {
    /*this function will retrieve all the Animal no for a particular animal record belonging to the authenticated user and return it in the view as a drop
    dropdown list*/

    public function BreedingView(Request $request){
        $bulla=$request->user()->id;
        $bulls=Animal_record::query()->select('animalno')->where('user_id','=',$bulla)->get();
        $breedingrecord=breedregister::query()->where('user_id','=',$bulla)->cursor();
        $status=Status::query()->select('id','statusname')->get();
        $cd=Animal_record::query()->select('birthdate')->where([
            ['animaltype','=',"calf"],
            ['user_id','=',$bulla]
        ])->get();
        $viewcalf=array();
        foreach ($cd as $dc){
           $r=$dc->birthdate;
           $cdf=Carbon::createFromFormat('Y-m-d', $r)->startOfDay();
           $now=Carbon::now();
           $age=$now->diffInMonths($cdf);
            if($age>=15){
                $viewcalf[]=Animal_record::query()->select('animalname','animalno')->where('birthdate','=',$r)->get()->push($age);
            }
        }

//Fetching animals with unconfirmed status
        $unc=Animal_record::query()->where([
            ['gender','=',"Female"],
            ['user_id','=',$bulla]
        ])->get();
        $served=array();
        foreach($unc as $uncormfimed) {
            $t = $uncormfimed->animalno;
            if (breedregister::query()->where('animalno', '=', $t)) {
                $served = breedregister::query()->where('status', '=', "Served")->get();
            }

        }
// All females ready to be served
        $females=Animal_record::query()->select('birthdate')->where([
            ['gender','=',"Female"],
            ['user_id','=',$bulla]
        ])->get();
        $viewfemales=array();
        foreach ($females as $female){
            $f=$female->birthdate;
            $fd=Carbon::createFromFormat('Y-m-d', $f)->startOfDay();
            $now=Carbon::now();
            $old=$now->diffInMonths($fd);
            if($old>=15){
               $viewfemales[]=Animal_record::query()->select('animalname','animalno','animaltype')->where('birthdate','=',$f)->get()->push($old);
            }
        }

        return view ('breeding',[
            'bulls'=>$bulls,
            'breedingrecords'=>$breedingrecord,
            'viewcalf'=>$viewcalf,
            'viewfemales'=>$viewfemales,
            'status'=>$status,
            'served'=>$served,
        ]);
    }



    // Breeding register Functions
    public function storebreeding (Request $request){         //stores breeding records
        $user=$request->user()->id;
        $ano=$request['animalno1'];
        $animal_record= Animal_record::query()->select('id')->where('animalno','=',$ano)->first();
        $v=$request['status'];
        $t=Status::query()->select('id')->where('statusname','=',$v)->first();
        $status=$t;
        $breedregister=new breedregister();
        $breedregister->fill([
            'animalno'=>$request->animalno1,
            'breedate'=>$request->breedate,
            'bullassigned'=>$request->bullassigned,
            'method'=>$request->method1,
            'status'=>$request->status,
            'calvdate'=>$request->calvdate,
            'comment'=>$request->comment,
        ]);

        $breedregister->user()->associate($user); //associate breeding register  to user field
        $breedregister->animalrecord()->associate($animal_record);
        $breedregister->save();
        $breedregister->status()->attach($status);
        $message='Successfully recorded';
        return redirect()->back()->with('message',$message);
    }
    //function for editing breed
    public function edit_breeding(Request $request){         //edit breeding record
        $p=$request['breed_edit'];
        $breededit=breedregister::query()->where('id','=',$p);
        $breededit->update([
            'animalno'=>$request->animalno,
            'breedate'=>$request->breedate,
            'bullassigned'=>$request->bullassigned,
            'method'=>$request->method1,
            'calvdate'=>$request->calvdate,
            'status'=>$request->status,
            'comment'=>$request->comment
        ]);
        $message='record successfully edited';
        return redirect()->back()->with('message',$message);
    }
    // Function for deleting a bull record
    public function delete_breeding(Request $request){      //delete breeding record
        $q=$request['breed_delete'];
        $breedelete=breedregister::query()->where('id','=',$q);
        $breedelete->delete();
        $message='Record Deleted';
        return redirect()->back()->with('message',$message);
    }
    //ANALYSIS


}