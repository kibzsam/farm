 <div class="col-md-3 ScrollStyle" style="height: 600px">
        <div class="card">
            <div class="card-header" style="background-color: #3498DB;color: white">
                <a href=""><i class="large material-icons mdi mdi-account circle" style="font-size: 60px; margin-right: 10px; background-color: white" data-toggle="tooltip" title="Change Profile Pic"></i></a><span>Profile</span>
            </div>
            <div class="panel-body" style="font-size: 15px; font-family: Candara">
                <p><span><strong><i class="material-icons">face</i>    </strong></span> <span>{{Auth::user()->name}}</span></p>
                <p><span><strong><i class="material-icons">email</i>   </strong></span><span>{{Auth::user()->email}}</span></p>
                <p><span><strong><i class="material-icons">info</i> EN: </strong></span><span>{{Auth::user()->employee_no}}</span></p>
                <p><span><strong><i class="material-icons">phone</i>  </strong></span><span>0{{Auth::user()->mobile_no}}</span><span><button class="btn btn-raised btn-sm btn-info mdi mdi-pencil" style="margin-left: 130px" data-toggle="tooltip" title="EDIT PROFILE"></button></span>
                </p>
            </div>
        </div>
        <div>
            <div class="card">
                <ul class="nav nav-pills nav-stacked " style="max-width: 310px;">
                    <li class="active"><a href="javascript:void(0)" style="background-color:#3498DB"><h5>Dairy Farm Management</h5></a></li>
                    <li><a href="{{url('/record1')}}">Herd Management</a></li>
                    <li><a href="{{url('/breeding')}}">Breeding  Management</a></li>
                    <li class=""><a href="{{url('/production')}}">Production Management</a></li>
                    <li class=""><a href="javascript:void(0)">Health Management</a></li>
                    <li class=""><a href="javascript:void(0)">Calves Management</a></li>
                    <li class=""><a href="javascript:void(0)">Expenditure and Sales Management</a></li>
                </ul>
            </div>
        </div>
</div>
