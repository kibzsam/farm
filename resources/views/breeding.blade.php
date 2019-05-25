@extends('layouts.app')
@section('content')
     <div class="container-fluid" style="margin-top: 40px">
        <div class="row">
            @include('includes.moke')
            <div class="col-md-9 ScrollStyle" style="height: 600px">
                <div class="card card-default">
                    <div class="card-header" style=" background-color:#4FC3F7;color: white"><h4>Breeding Record</h4>
                        <span>
                            <img src="{{URL::asset('/images/breedings.png')}}" alt="header pic" style="color:black;width: 40px; height: 40px">
                            <img src="{{URL::asset('/images/cow-white.png')}}" alt="header pic" style="color:black;width: 60px; height: 60px">
                            <img src="{{URL::asset('/images/cow-white.png')}}" alt="header pic" style="color:black;width: 40px; height: 40px">
                        </span>

                    </div>
                    <div class="panel-body">
                    </div>
                </div>

                <!-- Nav tabs -->
                <div class="card card-block">
                    <ul class="nav nav-tabs nav-primary" style="margin-bottom: 15px;">
                        <li><a href="#breeding" class="btn btn-info" data-toggle="tab">BREEDING REGISTER</a></li>
                        <li><a href="#bull" class="btn btn-info" style="background-color: teal;color:white" data-toggle="tab">ANALYSIS</a></li>
                    </ul>
                    <div class="tab-content" id="myTabContent">

                        <!-------------------------------- This is the BULL REGISTER and its content ------------------------------------------------->

                        <div class="tab-pane fade" id="breeding">
                            <div class="card card-block ">
                                <form class="form-group" role="form" method="POST" action="{{ url('/breeding') }}">
                                    {{ csrf_field() }}
                                    @include('includes.messagebox')
                                    <div class="col-lg-12">
                                        <div class="col-lg-3">
                                            @if ($errors->has('animalno1'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('animalno1') }}</strong>
                                    </span>
                                            @endif
                                            <div class="form-group{{ $errors->has('animalno1') ? ' has-error' : '' }}">
                                                <label for="animalno1" class="control-label">Female Number</label>
                                                <select id="animalno1" name="animalno1" class="form-control" required>
                                                    <option class="disable" value="">SELECT</option><span class="caret"></span>
                                                    @foreach($bulls as $bull)
                                                        <option value="{{$bull->animalno}}">{{$bull->animalno}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group{{ $errors->has('breedate') ? ' has-error' : '' }}">
                                                <label for="breedate" class="control-label">Service date</label>
                                                <input id="breedate" type="date" class="form-control " name="breedate" value="{{ old('breedate') }}" data-date="" data-date-format="DD MMMM YYYY" required autofocus>
                                                @if ($errors->has('breedate'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('breedate') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-lg-3">
                                            @if ($errors->has('bullassigned'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('bullassigned') }}</strong>
                                    </span>
                                            @endif
                                            <div class="form-group{{ $errors->has('bullassigned') ? ' has-error' : '' }}">
                                                <label for="bullassigned" class="control-label">Bull assigned</label>
                                                <select id="bullassigned" name="bullassigned" class="form-control" required>
                                                    <option class="disabled" value="">SELECT</option><span class="caret"></span>
                                                    @foreach($bulls as $bull)
                                                        <option value="{{$bull->animalno}}">{{$bull->animalno}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            @if ($errors->has('method'))
                                                <span class="help-block">
                                            <strong>{{ $errors->first('method') }}</strong>
                                        </span>
                                            @endif
                                            <div class="form-group{{ $errors->has('method') ? ' has-error' : '' }}">
                                                <label for="method" class="control-label ">Breeding Method</label>
                                                <select id="method" name="method1" class="form-control" required>
                                                    <option class="disabled" value="">SELECT</option>
                                                    <option  value="Artificial Insemination">Artificial Insemination</option>
                                                    <option  value="Natural Mating">Natural Mating</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="form-group{{ $errors->has('calvdate') ? ' has-error' : '' }}">
                                                <label for="calvdate" class="control-label">Calving Date</label>
                                                <input id="calvdate" type="date" class="form-control " name="calvdate" value="{{ old('calvdate') }}" required autofocus>
                                                @if ($errors->has('calvdate'))
                                                    <span class="help-block">
                                                <strong>{{ $errors->first('calvdate') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                        <!---------------------------Status---------------------------------------------->
                                        <div class="col-lg-3">
                                            @if ($errors->has('status'))
                                                <span class="help-block">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
                                            @endif
                                            <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                                <label for="status" class="control-label">Status</label>
                                                <select id="status" name="status" class="form-control" required>
                                                    <option class="disabled" value="">SELECT</option><span class="caret"></span>
                                                    @foreach($status as $statuses)
                                                        <option value="{{$statuses->statusname}}">{{$statuses->statusname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <!---------------------------Status---------------------------------------------->
                                        <div class="col-lg-3">
                                            <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                                                <label for="comment" class="control-label">Comments</label>
                                                <textarea id="comment" class="form-control " name="comment"  required autofocus></textarea>
                                                @if ($errors->has('comment'))
                                                    <span class="help-block">
                                                <strong>{{ $errors->first('comment') }}</strong>
                                            </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-raised btn-sm " style="background-color: #3498DB; color: white">
                                            Save Record
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <!---------------------------BREEDING BOOTGRID----------------------->
                            <div class="card card-block ScrollStyle card-responsive" style="height: 400px">
                                <div class="card-header"><h5 style="color: #0d3625">Management Panel</h5></div>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.js"></script>
                                <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                                <div class="table-responsive">
                                    <table id="grid-basic" class="table ">
                                        <thead class="thead-default">
                                        <tr class="">
                                            <th data-column-id="id" class="text-center" data-type="numeric" data-order="asc">ID</th>
                                            <th data-column-id="animalno" class="text-center" data-type="numeric" data-order="asc">Animal No</th>
                                            <th data-column-id="breedingdate" >B/Date</th>
                                            <th data-column-id="method">Method</th>
                                            <th data-column-id="bullassigned">Bull</th>
                                            <th data-column-id="calvdate">Calve on</th>
                                            <th data-column-id="status">Status</th>
                                            <th data-column-id="comment">Comment</th>
                                            <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($breedingrecords as $breedingrecord)
                                            <tr>
                                                <td>{{$breedingrecord->id}}</td>
                                                <td>{{$breedingrecord->animalno}}</td>
                                                <td>{{$breedingrecord->breedate}}</td>
                                                <td>{{$breedingrecord->method}}</td>
                                                <td>{{$breedingrecord->bullassigned}}</td>
                                                <td>{{$breedingrecord->calvdate}}</td>
                                                <td>{{$breedingrecord->status}}</td>
                                                <td>{{$breedingrecord->comment}}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!----breeding edit modal------>
                            <div class="modal modal-fade" tabindex="-1" id="update" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="color:teal">
                                            <div class="">
                                                <span onclick="document.getElementById('update').style.display='none'" class="close">&times;</span>
                                            </div>
                                            <h4 class="modal-title">Edit Bull Register</h4>
                                        </div>
                                        <div class="modal-body">
                                            <form class="form-group" action="{{url('/edit_breeding')}}" method = "POST">
                                                {{ csrf_field() }}
                                                <div class="container">
                                                    <div><input class="form-control" type="hidden" id="breed_edit" name="breed_edit" ></div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="col-sm-3">
                                                                @if ($errors->has('animalno'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('animalno') }}</strong>
                                                                    </span>
                                                                @endif
                                                                <div class="form-group{{ $errors->has('animalno') ? ' has-error' : '' }}">
                                                                    <label for="animalno" class="control-label">Female Number</label>
                                                                    <select id="animalno" name="animalno" class="form-control" required>
                                                                        <option class="disable" value="">SELECT</option>
                                                                        @foreach($bulls as $bull)
                                                                            <option value="{{$bull->animalno}}">{{$bull->animalno}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-3">
                                                                <div class="form-group{{ $errors->has('method') ? ' has-error' : '' }}">
                                                                    <label for="method1" class="control-label">Breeding Method</label>
                                                                    <select id="method1" name="method" class="form-control" required>
                                                                        <option class="disabled" value="">SELECT</option>
                                                                        <option  value="Artificial Insemination">Artificial Insemination</option>
                                                                        <option  value="Natural Mating">Natural Mating</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group col-sm-3">
                                                                <label for="bull" class="control-label">Bull</label>
                                                                <select id="bull" class="form-control" name="bullassigned" required>
                                                                    <option class="disabled" value="">SELECT</option>
                                                                    @foreach($bulls as $bull)
                                                                        <option value="{{$bull->animalno}}">{{$bull->animalno}}</option>
                                                                        @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-sm-3">
                                                                <label for="service" class="control-label">Service Date</label>
                                                                <input id="service" class="form-control " name="breedate" type="date" required autofocus>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="form-group col-sm-3">
                                                                <label for="calvdate1" class="control-label">Calv On</label>
                                                                <input id="calvdate1" class="form-control " name="calvdate" type="date" required autofocus>
                                                            </div>
                                                                <div class="form-group col-sm-3">
                                                                    <label for="comment1" class="control-label">Comments</label>
                                                                    <textarea id="comment1" class="form-control " name="comment"  required autofocus></textarea>
                                                                </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="col sm-3">
                                                                <div class="form-group{{ $errors->has('status') ? ' has-error' : '' }}">
                                                                    <label for="status" class="control-label">Status</label>
                                                                    <select id="status1" name="status" class="form-control" required>
                                                                        <option class="disabled" value="">SELECT</option><span class="caret"></span>
                                                                        @foreach($status as $statuses)
                                                                            <option value="{{$statuses->statusname}}">{{$statuses->statusname}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                     </div>
                                                    <button class="btn btn-primary btn-raised" type="submit">Save </button>
                                                </div>

                                        <div class="modal-footer">
                                            <div class="">
                                                <button onclick="document.getElementById('update').style.display='none'" type="button" class="btn btn-warning btn-raised">Cancel</button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                    </div>
                                    </div>
                                </div>
                            </div>

                            <!-----------------Delete bull modal-------------------------->
                            <div class="modal" tabindex="-1" id="remove" role="dialog">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="color:teal">
                                            <div class="">
                                                <div class="">
                                                    <span onclick="document.getElementById('remove').style.display='none'" class="close">&times;</span>
                                                </div>
                                                <h4>Delete</h4>
                                            </div>
                                        </div>
                                        <form class="form group" action="{{url('/delete_breeding')}}" method="POST">
                                            {{ csrf_field() }}
                                            <div class="container">
                                                <div><input class="form-control" type="hidden" id="breed_delete" name="breed_delete"></div>
                                                <p>Are you sure, you want to delete <span></span> ?</p>
                                                <div ><button class="btn btn-warning btn-raised" type="submit"> Delete </button></div>
                                            </div>
                                        </form>
                                        <div class="modal-footer">
                                            <div class="">
                                                <button onclick="document.getElementById('remove').style.display='none'" type="button" class="btn btn-info">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-----------------Delete bull modal-------------------------->
                            <script>
                                $("#grid-basic").bootgrid({
                                    formatters: {
                                        "actions": function(column, row)
                                        {
                                            return "<button id=\"button-edit \" onclick=\"document.getElementById('update').style.display='block'\" data-id=\""+ row.id +"\" data-breed_no=\""+ row.animalno +"\" data-servicedate=\""+ row.breedate+"\" data-method=\""+ row.method +"\" data-bull_assigned=\""+ row.bullassigned+"\" data-calv_date=\""+ row.calvdate+"\" data-comment=\""+ row.comment+"\" data-status=\""+ row.status +"\" " +
                                                "class=\"btn btn-raised btn-sm btn-primary edit \" data-toggle=\"tooltip\" title=\"EDIT\"><span class=\"mdi mdi-pencil\"></span></button> " +

                                                "<button onclick=\"document.getElementById('remove').style.display='block'\" data-id=\""+ row.id + "\" data-bullno=\"" + row.animalno + "\" " +
                                                "class=\"btn btn-raised btn-sm btn-warning delete\" data-toggle=\"tooltip\" title=\"DELETE\"><span class=\"mdi mdi-delete\"></span></button>";
                                        }
                                    }}).on("loaded.rs.jquery.bootgrid",function () {
                                    $(this).find(".edit").click(function () {
                                        $('#breed_edit').val($(this).data("id"));
                                        $('#animalno').val($(this).data("breed_no"));
                                        $('#method1').val($(this).data("method"));
                                        $('#bull').val($(this).data("bull_assigned"));
                                        $('#service').val($(this).data("servicedate"));
                                        $('#calvdate1').val($(this).data("calv_date"));
                                        $('#status1').val($(this).data("status"));
                                        $('#comment1').val($(this).data("comment"));
                                    });
                                    $(this).find(".delete").click(function () {
                                        $('#breed_delete').val($(this).data("id"));
                                        $('#bull_no').html($(this).data("bullno"));
                                    });
                                });
                            </script>


                            <!----------------------------END BREEDING BOOTGRID------------------------------------>

                        </div>
                        <!--------------------. END OF BULL REGISTER  .-------------------------------->


                        <!------------------.--------------  BREEDING REGISTER  .-------------------------------------------------->
                        <div class="tab-pane fade" id="bull">

                        </div>


                        <!---------------------------------- END BREEDING REGISTER-------------------------------------->
                    </div>

                <!------------------------Display Info on Breeding----------->
                <div class="card">
                    <div class="card card ScrollStyle" style="height: 300px">
                        <div class="card-header info"><img src="{{URL::asset('/images/cow-white.png')}}" alt="header pic" style="width: 10px; height: 10px;color: black">
                            <h5>Calf ready for breeding:</h5>
                            <table id="grid-basic" class="table">
                                <thead class="thead" style="background-color: #3498DB;">
                                <tr class="">
                                    <th data-column-id="animalno" style="color:white;" >Animal No</th>
                                    <th data-column-id="Calf Name" style="color:white;">Calf Name</th>
                                    <th data-column-id="Calf Name" style="color:white;">Months Old</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($viewcalf as $viewcalfs)
                                    <tr>
                                        <td><a href="#"><span><img src="{{URL::asset('/images/cow1-blue.png')}}" alt="header pic" style="color:black;width: 30px; height: 30px"></span>{{$viewcalfs[0]->animalno}}</a></td>
                                        <td>{{$viewcalfs[0]->animalname}}</td>
                                        <td>{{$viewcalfs[1]}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>

                            <div class="panel-body">

                            </div>

                        </div>
                    </div>
                    <div class="card card ScrollStyle" style="height: 300px">
                        <div class="card-header info">
                            <h5>Served with unconfirmed Pregnancy Status</h5>
                            <div class="panel-body">
                                <table id="grid-basic" class="table">
                                    <thead class="thead-default" style="background-color:#82E0AA;">
                                    <tr class="">
                                        <th data-column-id="animalno" style="color: white;">Animal No</th>
                                        <th data-column-id="status" style="color: white;">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($served as $serve)
                                        <tr>
                                            <td><a href="#"><span><img src="{{URL::asset('/images/cow1-green.png')}}" alt="header pic" style="color:black;width: 30px; height: 30px"></span>{{$serve->animalno}}</a></td>
                                            <td>{{$serve->status}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card card ScrollStyle"style="height: 300px">
                        <div class="card-header info">
                            <h5>Pregnants to calve in next months</h5>
                            <div class="panel-body">
                                <table id="grid-basic" class="table">
                                    <thead class="thead-default"style="background-color: #F8C471">
                                    <tr class="">
                                        <th data-column-id="animalno" style="color:white;">Animal No</th>
                                        <th data-column-id="monthspregnant" style="color:white;">Months Pregnant</th>
                                        <th data-column-id="calvdate" style="color:white;">Expected to calve on</th>
                                    </tr>
                                    </thead>
                                </table>
                            </div>

                        </div>
                    </div>
                    <div class="card card ScrollStyle" style="height: 300px">
                        <div class="card-header info">
                            <h5>Females ready to be Served</h5>
                            <div class="panel-body">
                                <table id="grid-basic" class="table">
                                    <thead class="thead-default" style="background-color:#BB8FCE;">
                                    <tr class="">
                                        <th data-column-id="animalno" style="color:white;">Animal No</th>
                                        <th data-column-id="monthspregnant" style="color:white;">Animal name</th>
                                        <th data-column-id="monthspregnant" style="color:white;">Animal Type</th>
                                        <th data-column-id="monthspregnant" style="color:white;">Age</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($viewfemales as $female)
                                        <tr>
                                            <td><a href="#"><span><img src="{{URL::asset('/images/cow1-blue.png')}}" alt="header pic" style="color:black;width: 30px; height: 30px"></span>{{$female[0]->animalno}}</a></td>
                                            <td>{{$female[0]->animalname}}</td>
                                            <td>{{$female[0]->animaltype}}</td>
                                            <td>{{$female[1]}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            </div>
        </div>
    @endsection