<?php
namespace App\Http\Controllers;
use App\Animal_record;
use App\Production;
use Illuminate\Http\Request;
Class ProductionController extends Controller {
    public function ProductionView(Request $request){
        $p=$request->user()->id;
        $precords=Production::query()->where('user_id','=',$p)->get();
        return view('production',['precords'=>$precords]);
    }

    // Production data store function
    public function storeProduction (Request $request){         //stores breeding records
        $user=$request->user()->id;
        $production=new Production();
        $production->fill([
            'amount'=>$request->amount,
            'animals_milked'=>$request->animals_milked,
            'average'=>$request->average,
            'milk_date'=>$request->milk_date,
        ]);
       $production->user()->associate($user);// associate production to authenticated user
        $production->save();
        $message='Successfully recorded';
        return redirect()->back()->with('message',$message);
    }

    //function for editing Production
    public function edit_production(Request $request){         //edit breeding record
        $p=$request['id'];
        $breededit=Production::query()->where('id','=',$p);
        $breededit->update([
            'amount'=>$request->amount,
            'animals_milked'=>$request->animals_milked,
            'average'=>$request->average,
            'milk_date'=>$request->milk_date,
        ]);
        $message='record successfully edited';
        return redirect()->back()->with('message',$message);
    }

    // Function for deleting a Production record
    public function delete_production(Request $request){      //delete breeding record
        $q=$request['id1'];
        $prodelete=Production::query()->where('id','=',$q);
        $prodelete->delete();
        $message='Record Deleted';
        return redirect()->back()->with('message',$message);
    }

}
