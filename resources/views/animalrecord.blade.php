@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="margin-top: 40px">
        <div class="row">
            @include('includes.moke')
            <div class="col-md-9 ScrollStyle" style="height: 600px">
                <div class="card card-default">
                    <div class="card-header" style="background-color: #BB8FCE;color: white"><img src="{{URL::asset('/images/cow-white.png')}}" alt="header pic" style="color:black;width: 40px; height: 40px">
                        <img src="{{URL::asset('/images/cow-white.png')}}" alt="header pic" style="color:black;width: 40px; height: 40px">
                        <h4>Animal Record</h4>
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
                <div class="card ">
                        <div class="card-header">
                            <h5 class="card-header">Enter your dairy animal details here(Important!!)</h5>
                        </div>
                        <div class="panel-body">
                            @include('includes.messagebox')
                            <form class="form-group" role="form" method="POST" action="{{ url('/animalrecord') }}">
                                {{ csrf_field() }}

                                <!..animal..!>
                            <div class="col-sm-3">
                                <div class="form-group">
                                    @if ($errors->has('animal'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('animal') }}</strong>
                                    </span>
                                    @endif
                                        <div class="form-group">
                                            <label for="animal">Animal</label>
                                            <select id="animal" name="animal" class="form-control" value="{{ old('animal') }}"  required>
                                                <option class="disable" value="">SELECT ANIMAL</option>
                                                <option value="Cow">Cow</option>
                                                <option value="Goat">Goat</option>
                                                <option value="Sheep">Sheep</option>
                                                <option value="Camel">Camel</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                                <!..animal..!>

                                <!..animal number..!>
                            <div class="col-sm-3">
                                <div class="form-group{{ $errors->has('animalno') ? ' has-error' : '' }}">
                                    <label for="animalno" class="control-label">Animal Number</label>
                                    <input id="animalno" type="number" class="form-control " name="animalno" value="{{ old('animalno') }}" required autofocus>
                                    @if ($errors->has('animalno'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('animalno') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                                <!..animal number..!>

                                <!..animal name..!>
                            <div class="col-sm-3">
                                <div class="form-group{{ $errors->has('animalname') ? ' has-error' : '' }}">
                                    <label for="animalname" class="control-label">Name</label>
                                    <input id="animalname" type="text" class="form-control " name="animalname" value="{{ old('animalname') }}" required autofocus>
                                    @if ($errors->has('animalname'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('animalname') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                                <!..animal name..!>

                                <!..animal type..!>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        @if ($errors->has('animaltype'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('animaltype') }}</strong>
                                    </span>
                                        @endif
                                        <div class="form-group ">
                                            <label for="animaltype">Animal Type</label>
                                            <select id="animaltype" name="animaltype" class="form-control"  required>
                                                <option class="disable" value="">SELECT TYPE</option>
                                                <option  value="Bull">Bull</option>
                                                <option  value="Bull">Heifer</option>
                                                <option  value="Dam">Cow</option>
                                                <option  value="Calf">Calf</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!..animal type..!>
                                <!..animal breed..!>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        @if ($errors->has('breed'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('breed') }}</strong>
                                    </span>
                                        @endif
                                        <div class="form-group">
                                            <label for="breed">Breed</label>
                                            <select id="breed" name="breed" class="form-control" required>
                                                <option class="disable" value="{{ old('breed') }}">SELECT BREED</option>
                                                <option value="Freshian">Freshian</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Guensey">Guensey</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!..animal breed..!>

                                   <!..animal gender..!>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label for="breed">Gender</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="gender" value="Male" required>
                                               Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="gender" value="Female">
                                               Female
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    $().button('toggle');
                                </script>
                                <!..animal gender..!>

                                <!..animal herd.!>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        @if ($errors->has('herd'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('herd') }}</strong>
                                    </span>
                                        @endif
                                        <div class="form-group">
                                            <label for="herd">Herd</label>
                                            <select id="herd" name="herd" class="form-control" required>
                                                <option class="disable" value="{{ old('herd') }}">SELECT HERD</option>
                                                @foreach($herd as $herds)
                                                    <option class="" value="{{$herds->herdname}}">{{$herds->herdname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!..animal herd..!>
                                <!..Date of Birth..!>
                                <div class="col-sm-3">
                                    <div class="form-group{{ $errors->has('birthdate') ? ' has-error' : '' }}">
                                        <label for="birthdate" class="control-label">Date of Birth</label>
                                        <input id="birthdate" type="date" class="form-control " name="birthdate" value="{{ old('birthdate') }}">
                                        @if ($errors->has('birhtdate'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('birthdate') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <!..Date of birth..!>
                                <!..Date of Purchase..!>
                                <div class="col-sm-3">
                                    <div class="form-group{{ $errors->has('purchasedate') ? ' has-error' : '' }}">
                                        <label for="purchasedate" class="control-label">Date of Purchase</label>
                                        <input id="purchasedate" type="date" class="form-control " name="purchasedate" value="{{ old('purchasedate') }}" >
                                        @if ($errors->has('purchasedate'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('purchasedate') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <!..Date of birth..!>
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-raised btn-sm " style="background-color: #3498DB; color: white">
                                     Save Record
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                <div>

                    <!..END OF THE ANIMAL RECORD FORM.>

                    <div class="card card-block ScrollStyle card-responsive" style="height: 300px">

                        <!..display animal records..!>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.js"></script>
                        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
                        <div class="table-responsive">
                            <table id="grid-basic" class="table">
                                <thead class="thead-default">
                                <tr class="">
                                    <th data-column-id="id" class="text-center" data-type="numeric" data-order="asc">ID</th>
                                    <th data-column-id="animal">Animal</th>
                                    <th data-column-id="animalno" >Animal No</th>
                                    <th data-column-id="animalname" >Name</th>
                                    <th data-column-id="animaltype" >Type</th>
                                    <th data-column-id="animalage" >Age</th>
                                    <th data-column-id="herd">Herd</th>
                                    <th data-column-id="gender">Gender</th>
                                    <th data-column-id="birthdate" >BirthDate</th>
                                    <th data-column-id="purchasedate">PurchaseDate</th>
                                    <th data-column-id="breed">Breed</th>
                                    <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->animal}}</td>
                                        <td>{{$item->animalno}}</td>
                                        <td>{{$item->animalname}}</td>
                                        <td>{{$item->animaltype}}</td>
                                        <td>{{$item->animalage}}</td>
                                        <td>{{$item->herd}}</td>
                                        <td>{{$item->gender}}</td>
                                        <td>{{$item->birthdate}}</td>
                                        <td>{{$item->purchasedate}}</td>
                                        <td>{{$item->breed}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                        <script>
                            $(document).ready(function(){
                                $('[data-toggle="tooltip"]').tooltip();
                            });
                        </script>

                        <!..display animal records..!>
                        <!..Edit modal..!>
                        <div class="modal modal-fade" tabindex="-1" id="edit" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header" style="color:teal">
                                        <div class="">
                                            <span onclick="document.getElementById('edit').style.display='none'" class="close">&times;</span>
                                        </div>
                                        <h4 class="modal-title">Edit Animal Record</h4>
                                    </div>
                                    <div class="modal-body">
                                        <form class="form-group" action="{{url('/edit_animal')}}" method = "POST">
                                            {{ csrf_field() }}
                                            <div class="container">
                                                <div><input class="form-control" type="hidden" id="id" name="id" ></div>
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="form-group col-sm-4">
                                                            <label for="animal" class="control-label">Animal</label>
                                                            <select id="animal1" name="animal1" class="form-control"   required>
                                                                <option class="disable" value="">SELECT ANIMAL</option>
                                                                <option value="Cow">Cow</option>
                                                                <option value="Goat">Goat</option>
                                                                <option value="Sheep">Sheep</option>
                                                                <option value="Camel">Camel</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label class="control-label">Animal Number</label>
                                                            <input class="form-control" id="no" type="number"  name="animalno" required>
                                                        </div>
                                                        </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group col-sm-4">
                                                            <label class="control-label">Animal name</label>
                                                            <input class="form-control" id="name" type="text"  name="animalname" required>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label class="control-label">Animal Type</label>
                                                            <select id="type" name="animaltype" class="form-control" required>
                                                                <option class="disable" value="">TYPE</option>
                                                                <option value="Bull">Bull</option>
                                                                <option value="Heifer">Heifer</option>
                                                                <option value="Calf">Calf</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group col-sm-4">
                                                            <label class="control-label">Animal Age</label>
                                                            <input class="form-control" id="animal_age" type="text"  name="animalage" required readonly>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label for="herd" class="control-label">Herd</label>
                                                            <select id="Herd" name="herd" class="form-control" required>
                                                                <option class="disable" value="{{ old('herd') }}">SELECT HERD</option>
                                                                @foreach($herd as $herds)
                                                                    <option class="" value="{{$herds->herdname}}">{{$herds->herdname }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group col-sm-4">
                                                            <label class="control-label">Birth date</label>
                                                            <input class="form-control" id="birth" type="date"  name="birthdate" required>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label class="control-label">Purchase date</label>
                                                            <input class="form-control" id="purchase" type="date"  name="purchasedate" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="form-group col-sm-4">
                                                            <label class="control-label">Breed</label>
                                                            <select id="animalbreed" name="breed" class="form-control"   required>
                                                                <option class="disable" value="">SELECT BREED</option>
                                                                <option value="Freshian">Freshian</option>
                                                                <option value="Jersey">Jersey</option>
                                                                <option value="Gunsey">Gunsey</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="breed">Gender</label>
                                                                <div id="gender" class="radio">
                                                                    <label>
                                                                        <input  type="radio" name="gender" value="Male">
                                                                        Male
                                                                    </label>
                                                                </div>
                                                                <div class="radio">
                                                                    <label>
                                                                        <input   type="radio" name="gender" value="Female">
                                                                        Female
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn btn-primary btn-raised" type="submit">Save</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="">
                                            <button onclick="document.getElementById('edit').style.display='none'" type="button" class="btn btn-warning btn-raised">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            $("#grid-basic").bootgrid({
                                formatters: {
                                    "actions": function(column, row)
                                    {
                                        return "<button id=\"button-edit \" onclick=\"document.getElementById('edit').style.display='block'\" data-id=\""+ row.id +"\" data-animal=\""+ row.animal +"\" data-animal_no=\""+ row.animalno+"\" data-animal_name=\""+ row.animalname +"\" data-animal_herd=\""+ row.herd + "\" data-gender=\""+ row.gender + "\" data-animal_type=\"" + row.animaltype + "\" data-animal_age=\""
                                                + row.animalage + "\" data-birth=\""+ row.birthdate + "\" data-purchase=\""+ row.purchasedate +"\" data-breed=\""+ row.breed +"\" class=\"btn btn-raised btn-sm btn-info edit\" data-toggle=\"tooltip\" title=\"EDIT\"><span class=\"mdi mdi-pencil\"></span></button> " +
                                                "<button onclick=\"document.getElementById('delete').style.display='block'\" data-animal_no=\"" + row.animalno + "\" data-animal_name=\""
                                                + row.animalname + "\" data-id=\"" + row.id + "\" class=\"btn btn-raised btn-sm btn-warning delete\" data-toggle=\"tooltip\" title=\"DELETE\"><span class=\"mdi mdi-delete\"></span></button>";
                                    }
                                }}).on("loaded.rs.jquery.bootgrid",function () {
                                $(this).find(".edit").click(function () {
                                    $('#id').val($(this).data("id"));
                                    $('#animal1').val($(this).data("animal"));
                                    $('#no').val($(this).data("animal_no"));
                                    $('#name').val($(this).data("animal_name"));
                                    $('#type').val($(this).data("animal_type"));
                                    $('#Herd').val($(this).data("animal_herd"));
                                    $('#animal_age').val($(this).data("animal_age"));
                                    $('#gender').val($(this).data("gender"));
                                    $('#birth').val($(this).data("birth"));
                                    $('#purchase').val($(this).data("purchase"));
                                    $('#animalbreed').val($(this).data("breed"));
                                });
                                $(this).find(".delete").click(function (e) {
                                    $('#animal_id').val($(this).data("id"));
                                    $('#a_name').html($(this).data("animal_name") +" "+ $(this).data("animal_no"));
                                });
                            });
                        </script>
                        <!..Edit modal..!>

                        <!..Delete modal..!>
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
                                    <form class="form group" action="{{url('/delete_animal')}}" method="POST">
                                        {{ csrf_field() }}
                                        <input class="form-control" type="hidden" id="animal_id" name="del_id">
                                        <div class="container">
                                            <p>Are you sure, you want to delete <span id ="a_name"></span> ?</p>
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
                        <!.. Delete modal..!>
                        <!.. Display animal record..!>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
