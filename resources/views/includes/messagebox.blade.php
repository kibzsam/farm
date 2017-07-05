@if(count($errors)>0)
    <div class="row">
        <div class="col-lg-5 alert alert-success alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@if(Session::has('message'))
    <div class="row">
        <div class=" col-lg-5 alert alert-success alert-lg alert-dismissable fade in">
            <a href="#" class="close" data-dismiss="alert" aria-label="close"><span>&times</span></a>
            {{ Session::get('message') }}
        </div>
    </div>
@endif