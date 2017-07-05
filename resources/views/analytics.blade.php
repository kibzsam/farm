@extends('layouts.app')
@section('content')
    <div class="container" style="margin-top: 50px;margin-left: 200px">
        <div class="row ScrollStyle">
            <div class="col-lg-10 ">
                <div class="card card-block ">
                    <a href="#" class="grid ">
                        <div class="col-md-4 btn btn-raised" style="background-color: #4FC3F7;color: white; height: 130px;text-align: center;" >
                            <div class="panel-body">
                                <img src="{{URL::asset('/images/charts.png')}}" alt="header pic" style="width: 60px; height: 60px">
                                <img src="{{URL::asset('/images/breedings.png')}}" alt="header pic" style="width: 60px; height: 60px"><span></span>
                                <h6>Breeding Analysis</h6>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="grid ">
                        <div class="col-md-4 btn btn-raised" style="background-color: #BB8FCE;color: white;height: 130px;text-align: center;" >
                            <div class="panel-body">
                                <img src="{{URL::asset('/images/cow-white.png')}}" alt="header pic" style="width: 60px; height: 60px"><span></span>
                                <p>animals</p>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="grid">
                        <div class="col-md-4 btn btn-raised" style="background-color: #73C6B6  ;color: white;height: 130px;text-align: center;" >
                            <div class="panel-body">
                                <img src="{{URL::asset('/images/milkp.png')}}" alt="header pic" style="width: 60px; height: 60px">
                                <img src="{{URL::asset('/images/charts.png')}}" alt="header pic" style="width: 60px; height: 60px"><span></span>
                                <h6>Milk Analysis</h6>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="grid">
                        <div class="col-md-4 btn btn-raised" style="background-color: #7FB3D5  ;color: white; height: 130px;text-align: center;" >
                            <div class="panel-body">
                                <img src="{{URL::asset('/images/charts.png')}}" alt="header pic" style="width: 70px; height: 70px"><span></span>
                                <h6>General Reports</h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="card card-block">
                    <div class="card-heading">
                        <h5 style="color: #8E44AD">*****General Analytics*****</h5>
                    </div>
                    <div class="panel-body">


                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection