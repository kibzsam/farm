<?php
namespace App\Http\Controllers;
use App\Animal_record;
use App\breedregister;
use Illuminate\Http\Request;
Class AdetailsController extends Controller{
    public function detailsView(Request $request){
        $search=$request['search'];
        $data= Animal_record::query()->crossJoin('breedregisters')->select('animalname','status','herd')->where('animalname','LIKE',$search)->get();
        $message="SEARCH SOMETHING HERE";
        if (empty($search)){
            $message="SEARCH SOMETHING HERE";

        }
        return view('details',['data'=>$data])->with('message',$message);
    }

}