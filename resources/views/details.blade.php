@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row" style="margin-top: 80px">
            <div class="col-lg-12">
                <div class="card card">
                    <div class="card-header">
                        <form action="{{url('/search')}}" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="col-lg-6 input-group">
                                <input type="text" class="form-control" name="search"  placeholder="Search Animal" value="{{ old('search') }}"><span class="input-group-btn">
                                    <button type="submit" class="btn btn-primary"><span class=""><i class="material-icons">search</i></span>
                                    </button></span>
                            </div>
                        </form>
                    </div>
                    <div class="panel-body">
                        <div class="col-lg-3">
                            <div class="panel" style="padding: 20px;border-color: #2a88bd;border-style: solid;width: 300px; height: 300px;">
                                <img src="{{URL::asset('/images/cow1-green.png')}}" alt="header pic" style="width: 50px; height: 50px; padding: 100px">
                            </div>
                        </div>
                        <div class="col-lg-5" style="padding-left:80px ">
                            <div>
                                <h6 style="color: teal">ANIMAL DETAILS:</h6>
                                @include('includes.messagebox')
                                @foreach($data as $dat)
                                <p><span>Name:  </span><span style="color: #1b6d85"><strong>{{$dat->animalname}}</strong></span></p>
                                    <p><span>Animal No:</span><span style="color: #1b6d85"><strong>{{$dat->animalno}}</strong></span></p>
                                    <p><span>Herd:  </span><span style="color: #1b6d85"><strong>{{$dat->herd}}</strong></span></p>
                                    <p><span>status:  </span><span style="color: #1b6d85"><strong>{{$dat->status}}</strong></span></p>
                                    <p><span>Production: </span><span style="color: #1b6d85"><strong>{{$dat->status}}</strong></span></p>
                                    <p><span>Age:  </span><span style="color: #1b6d85"><strong>{{$dat->animalname}}</strong></span></p>
                                    @endforeach

                            </div>
                        </div>
                        <div class="col-lg-4">
                            <p style="color: teal">ACTION:</p>
                            <a href="#">
                                <div class="col-md-4 btn btn" style="background-color:#4FC3F7" data-toggle="tooltip" title="MOVE TO NEW HERD">
                                    <div class="panel-body">
                                        <img src="{{URL::asset('/images/move.png')}}" alt="header pic" style="width: 40px; height: 40px;"><span></span>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="col-md-4 btn btn" style="background-color: #BB8FCE; margin-left: 10px" data-toggle="tooltip" title="ADD MILK">
                                    <div class="panel-body">
                                        <img src="{{URL::asset('/images/milkp.png')}}" alt="header pic" style="width: 40px; height: 40px;"><span></span>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="col-md-4 btn btn" style="background-color:#7FB3D5; margin-left: 10px" data-toggle="tooltip" title="ADD BREEDING">
                                    <div class="panel-body">
                                        <img src="{{URL::asset('/images/breedings.png')}}" alt="header pic" style="width: 40px; height: 40px;"><span></span>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="col-md-4 btn btn" style="background-color: #F8C471; margin-left: 10px" data-toggle="tooltip" title="ADD HEALTH">
                                    <div class="panel-body">
                                        <img src="{{URL::asset('/images/health.png')}}" alt="header pic" style="width: 40px; height: 40px;"><span></span>
                                    </div>
                                </div>
                            </a>
                            <a href="#">
                                <div class="col-md-4 btn btn" style="background-color:#82E0AA; margin-left: 10px" data-toggle="tooltip" title="CHANGE ANIMAL STATUS">
                                    <div class="panel-body">
                                        <img src="{{URL::asset('/images/modify.png')}}" alt="header pic" style="width: 40px; height: 40px;"><span></span>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection