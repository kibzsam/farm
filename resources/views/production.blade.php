@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="margin-top: 40px">
        <div class="row">
            @include('includes.moke')
            <div class="col-lg-9 ScrollStyle" style="height: 600px">
                <div>
                    <h4>Milk Production:</h4>
                </div>
                <div class="card card" style="background-color: #EBF5FB">
                    <div><img src="{{URL::asset('/images/milk.png')}}" alt="header pic"><span><a href="#" class="btn btn-primary btn-raised btn-md">ANALYSIS</a> </span></div>
                </div>
                <div class="card card-default">
                    <div class="card card-header">
                        <h5>Add Milk</h5>
                    </div>
                    <div class="panel-body">
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                        <form class="form-group" role="form" method="POST" action="{{ url('/production') }}">
                            {{ csrf_field() }}
                            @include('includes.messagebox')
                            <div class="col-md-3">
                                <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                    <label for="amount" class="control-label">Amount In (Litres) Milked Each Day</label>
                                    <input id="amount" type="number" class="form-control calculate " name="amount" value="{{ old('amount') }}" required autofocus>
                                    @if ($errors->has('amount'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        <div class="col-md-3">
                            <div class="form-group{{ $errors->has('animals_milked') ? ' has-error' : '' }}">
                                <label for="animals_milked" class="control-label">Animals Milked</label>
                                <input id="animals_milked" type="number" class="form-control calculate " name="animals_milked" value="{{ old('animals_milked') }}" required autofocus>
                                @if ($errors->has('animals_milked'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('animals_milked') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            <div class="col-md-3">
                                <div class="form-group{{ $errors->has('average') ? ' has-error' : '' }}">
                                    <label for="average" class="control-label">Average Milk Per Animal (Litres)</label>
                                    <input id="average" type="number" class="form-control calculate " name="average" value="{{ old('average') }}" readonly required autofocus>
                                    @if ($errors->has('average'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('average') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group{{ $errors->has('milk_date') ? ' has-error' : '' }}">
                                    <label for="milk_date" class="control-label">Milking_Date</label>
                                   <input id="milk_date" type="date" class="form-control datepicker " placeholder="Pick a Milking date" data-date-format="dd-mm-yyyy" name="milk_date" value="{{ old('milk_date') }}" required autofocus>
                                    @if ($errors->has('milk_date'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('milk_date') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-raised btn-sm " style="background-color: #3498DB; color: white">
                                Save Record
                            </button>
                        </div>
                        </form>

                        <!---------------------auto calculation scripting code for auto calculating the average milk per cow----------------------->
                        <script>
                            $(document).ready(function () {

                                //Calculate both inputs value on the fly
                                $('.calculate').keyup(function () {
                                    var Avg = parseFloat($('#amount').val()) / parseFloat($('#animals_milked').val());
                                    $('#average').val(Avg.toFixed());


                                });

                                //Clear both inputs first time when user focus on each inputs and clear value 00
                                $('.calculate').focus(function (event) {
                                    $(this).val("").unbind(event);
                                });

                                //Remove this it's just for example purpose
                                $('.calculate').keypress(function (e) {
                                    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                                        $("#errmsg").html("Digits Only").show().fadeOut("slow");
                                        return false;
                                    }
                                });
                            });
                        </script>
                    </div>
                    <div class="card card-block ScrollStyle card-responsive" style="height: 400px">
                        <div class="card-header"><h5 style="color: #0d3625">Management Panel</h5></div>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.js"></script>
                        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                        <div class="table-responsive">
                            <table id="grid-basic" class="table ">
                                <thead class="thead-default">
                                <tr class="">
                                    <th data-column-id="id"data-order="asc">ID</th>
                                    <th data-column-id="amount">Amount of milk per day</th>
                                    <th data-column-id="animals_milked" >Animals Milked</th>
                                    <th data-column-id="average">Average</th>
                                    <th data-column-id="milk_date">Milk Date</th>
                                    <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($precords as $precord)
                                    <tr>
                                        <td>{{$precord->id}}</td>
                                        <td>{{$precord->amount}}</td>
                                        <td>{{$precord->animals_milked}}</td>
                                        <td>{{$precord->average}}</td>
                                        <td>{{$precord->milk_date}}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-----------------------------------Production Edit Modal-------------------------------------->
                <div class="modal modal" tabindex="-1" id="edit" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="color:teal">
                                <div class="">
                                    <span onclick="document.getElementById('edit').style.display='none'" class="close">&times;</span>
                                </div>
                                <h4 class="modal-title">Edit Bull Register</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-group" action="{{url('/edit_production')}}" method = "POST">
                                    {{ csrf_field() }}
                                    <div class="container">
                                        <div><input class="form-control" type="hidden" id="id" name="id" ></div>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <div class="col-lg-4">
                                                    @if ($errors->has('amount'))
                                                        <span class="help-block">
                                                                        <strong>{{ $errors->first('amount') }}</strong>
                                                                    </span>
                                                    @endif
                                                    <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                                                        <label for="amount1" class="control-label">Amount In (Litres) Milked Each Day</label>
                                                        <input class="form-control edit_calculate" id="amount1" name="amount">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    @if ($errors->has('animals_milked'))
                                                        <span class="help-block">
                                                                        <strong>{{ $errors->first('animals_milked') }}</strong>
                                                                    </span>
                                                    @endif
                                                    <div class="form-group{{ $errors->has('animals_milked') ? ' has-error' : '' }}">
                                                        <label for="animals_milked1" class="control-label">Animals Milked</label>
                                                        <input class="form-control edit_calculate" id="animals_milked1" name="animals_milked">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="col-lg-4">
                                                    @if ($errors->has('average'))
                                                        <span class="help-block">
                                                                        <strong>{{ $errors->first('average') }}</strong>
                                                                    </span>
                                                    @endif
                                                    <div class="form-group{{ $errors->has('average') ? ' has-error' : '' }}">
                                                        <label for="average1" class="control-label">Average Milk Per Animal (Litres) </label>
                                                        <input class="form-control edit_calculate" id="average1" name="average" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    @if ($errors->has('milk_date'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('milk_date') }}</strong>
                                                        </span>
                                                    @endif
                                                    <div class="form-group{{ $errors->has('milk_date') ? ' has-error' : '' }}">
                                                        <label for="milk_date1" class="control-label">Milking Date and Time</label>
                                                        <input class="form-control" id="milk_date1" name="milk_date">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-primary btn-raised" type="submit">Save </button>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="">
                                            <button onclick="document.getElementById('edit').style.display='none'" type="button" class="btn btn-warning btn-raised">Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
               <!--------Script for auto calculation-------->
                <script>
                    $(document).ready(function () {

                        //Calculate both inputs value on the fly
                        $('.edit_calculate').keyup(function () {
                            var Avg = parseFloat($('#amount1').val()) / parseFloat($('#animals_milked1').val());
                            $('#average1').val(Avg.toFixed());


                        });

                        //Clear both inputs first time when user focus on each inputs and clear value 00
                        $('.edit_calculate').focus(function (event) {
                            $(this).val("").unbind(event);
                        });

                        //Remove this it's just for example purpose
                        $('.edit_calculate').keypress(function (e) {
                            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                                $("#errmsg").html("Digits Only").show().fadeOut("slow");
                                return false;
                            }
                        });
                    });
                </script>
                <!----------------end of edit production--------->

                <!-------------------delete production------------------------------------------------------->
                <div class="modal" tabindex="-1" id="delete" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="color:teal">
                                <div class="">
                                    <div class="">
                                        <span onclick="document.getElementById('delete').style.display='none'" class="close">&times;</span>
                                    </div>
                                    <h4>Delete</h4>
                                </div>
                            </div>
                            <form class="form group" action="{{url('/delete_production')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="container">
                                    <div><input class="form-control" type="hidden" id="id1" name="id1"></div>
                                    <p>Are you sure, you want to delete <span></span> ?</p>
                                    <div ><button class="btn btn-warning btn-raised" type="submit"> Delete </button></div>
                                </div>
                            </form>
                            <div class="modal-footer">
                                <div class="">
                                    <button onclick="document.getElementById('delete').style.display='none'" type="button" class="btn btn-info">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-------------------end of delete production------------------------------------------------------->
                <script>
                    $("#grid-basic").bootgrid({
                        formatters: {
                            "actions": function(column, row)
                            {
                                return "<button id=\"button-edit \" onclick=\"document.getElementById('edit').style.display='block'\" data-id=\""+ row.id +"\" data-milk_amount=\""+ row.amount +"\" data-animals_milked=\""+ row.animals_milked+"\" data-average=\""+ row.average +"\" data-milk_date=\""+ row.milk_date+"\" " +
                                    "class=\"btn btn-raised btn-sm btn-primary edit \" data-toggle=\"tooltip\" title=\"EDIT\"><span class=\"mdi mdi-pencil\"></span></button> " +

                                    "<button onclick=\"document.getElementById('delete').style.display='block'\" data-id=\""+ row.id + "\" " +
                                    "class=\"btn btn-raised btn-sm btn-warning delete\" data-toggle=\"tooltip\" title=\"DELETE\"><span class=\"mdi mdi-delete\"></span></button>";
                            }
                        }}).on("loaded.rs.jquery.bootgrid",function () {
                        $(this).find(".edit").click(function () {
                            $('#id').val($(this).data("id"));
                            $('#amount1').val($(this).data("milk_amount"));
                            $('#animals_milked1').val($(this).data("animals_milked"));
                            $('#average1').val($(this).data("average"));
                            $('#milk_date1').val($(this).data("milk_date"));
                        });
                        $(this).find(".delete").click(function () {
                            $('#id1').val($(this).data("id"));
                        });
                    });
                </script>

            </div>
        </div>
    </div>
@endsection
