@extends('layouts.app')
@section('content')
<div class="container-fluid" style="margin-top: 40px">
    <div class="row">
        @include('includes.moke')
        <div class="col-md-9">
            <a href="{{url('=analytics')}}" class="grid ">
                <div class="col-md-2 btn btn-raised" style="background-color: #4FC3F7;color: white; height: 130px;text-align: center;" >
                    <div class="panel-body">
                        <img src="{{URL::asset('/images/charts.png')}}" alt="header pic" style="width: 60px; height: 60px"><span></span>
                        <h6>Analytics</h6>
                    </div>
                </div>
            </a>
            <a href="{{url('/animal_details')}}" class="grid ">
                <div class="col-md-2 btn btn-raised" style="background-color: #BB8FCE;color: white;height: 130px;text-align: center;" >
                    <div class="panel-body">
                        <img src="{{URL::asset('/images/cow-white.png')}}" alt="header pic" style="width: 60px; height: 60px"><span></span>
                        <h6>{{$count}}</h6>
                       <p>animals</p>
                    </div>
                </div>
            </a>
            <a href="{{url('/production')}}" class="grid">
                <div class="col-md-4 btn btn-raised" style="background-color: #73C6B6  ;color: white;height: 130px;text-align: center;" >
                    <div class="panel-body">
                        <img src="{{URL::asset('/images/milkp.png')}}" alt="header pic" style="width: 60px; height: 60px"><span><h6>Milk Production</h6></span>
                    </div>
                </div>
            </a>
            <a href="{{url('/breeding')}}" class="grid">
                <div class="col-md-4 btn btn-raised" style=" background-color: #7FB3D5  ;color: white; height: 130px;text-align: center;" >
                    <div class="panel-body">
                        <img src="{{URL::asset('/images/cow-white.png')}}" alt="header pic" style="width: 60px; height: 60px">
                        <img src="{{URL::asset('/images/cow-white.png')}}" alt="header pic" style="width: 60px; height: 60px"><span></span>
                        <h6>Breeding</h6>
                    </div>
                </div>
            </a>
            <a href="#" class="grid ">
                <div class="col-md-3 btn btn-raised" style="background-color:#82E0AA;color: white; height: 130px;text-align: center;" >
                    <div class="panel-body">
                        <img src="{{URL::asset('/images/feed.png')}}" alt="header pic" style="width: 60px; height: 60px"><span></span>
                        <h6>Feed Ratio</h6>
                    </div>
                </div>
            </a>
            <a href="#" class="grid ">
                <div class="col-md-2 btn btn-raised" style="background-color: #F8C471;color: white;height: 130px;text-align: center;" >
                    <div class="panel-body">
                        <img src="{{URL::asset('/images/heat.png')}}" alt="header pic" style="width: 60px; height: 60px"><span></span>
                        <p>Heat</p>
                    </div>
                </div>
            </a>
            <a href="#" class="grid ">
                <div class="col-md-2 btn btn-raised" style="background-color: #F1948A  ;color: white;height: 130px;text-align: center;" >
                    <div class="panel-body">
                        <img src="{{URL::asset('/images/health.png')}}" alt="header pic" style="width: 60px; height: 60px"><span></span>
                        <h6>Animal Health</h6>
                    </div>
                </div>
            </a>
            <a href="#" class="grid ">
                <div class="col-md-3 btn btn-raised" style="background-color: #F7DC6F;color: white; height: 130px;text-align: center;" >
                    <div class="panel-body">
                        <img src="{{URL::asset('/images/community.png')}}" alt="header pic" style="width: 60px; height: 60px"><span></span>
                        <h6>Support community</h6>
                    </div>
                </div>

            </a>
            <a href="#" class="grid ">
                <div class="col-md-2 btn btn-raised" style="background-color: #D7BDE2;color: white; height: 130px;text-align: center;" >
                    <div class="panel-body">
                        <img src="{{URL::asset('/images/settings.png')}}" alt="header pic" style="width: 60px; height: 60px"><span></span>
                        <h6>settings</h6>
                    </div>
                </div>
            </a>
        </div>
    </div>

</div>
@endsection
