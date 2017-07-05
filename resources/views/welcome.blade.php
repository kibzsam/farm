@extends('layouts.app')
@section('content')
    <div class="container-fluid" style="margin-top:23px">
        <div class="row">
            <div class="card card" style="width: 100%;background-color: #3498DB;">
                <img src="{{URL::asset('/images/2.jpg')}}" alt="header pic" style="width:100%; height: 380px; margin-top: 0px">
            </div>
            <div class="card card col-md-4">
                <div class="card-header " style="background-color: #BB8FCE;"><i class="large material-icons" style="color: white; font-size: 80px;padding-left: 100px">invert_colors</i><h5 style="color: white; padding-left: 70px"><strong>About Prime Farm</strong></h5></div>
                <div class="card-body" style="font-size:15px; padding: 10px; font-family: 'averta',HelveticaNeue,'Helvetica Neue',Helvetica,Helvetica,Arial,'Lucida Grande',sans-serif;">
                    <p>Prime Farm is a Dairy management system which is aimed at enabling the dairy farmer manage his dairy animals in an efficient way.
                        Prime Farm Software is aimed at enabling the Farmer to manage dairy farm records by offering good storage and analytics of dairy data.
                    </p>
                </div>

            </div>
            <div class="card card-raised col-md-4">
                <div class="card-header" style="background-color: #85C1E9;"><i class="material-icons" style="font-size: 80px;color: white; padding-left: 110px">stars</i><h5 style="color: white; padding-left: 115px"><strong>Analysis</strong></h5></div>
                <div class="card-body" style="font-size:15px; padding: 10px; font-family: 'averta',HelveticaNeue,'Helvetica Neue',Helvetica,Helvetica,Arial,'Lucida Grande',sans-serif;">
                    <p>Prime Farm Dairy Management Software offers fully optimized analytics to enable the farmer have a clear view on the dairy farm progress.
                        The Analytics show the Milk Production,Sales and Expenditure and Profit progress inform of Graphs and PieCharts
                    </p>
                </div>

            </div>
            <div class="card card col-md-4">
                <div class="card-header " style="background-color:#A2D9CE "><i class="large material-icons" style="color: white; font-size: 80px;padding-left: 100px">group_work</i><h5 style="color: white; padding-left: 70px"><strong>Data and Records</strong></h5></div>
                <div class="card-body" style="font-size:15px; padding: 10px; font-family: 'averta',HelveticaNeue,'Helvetica Neue',Helvetica,Helvetica,Arial,'Lucida Grande',sans-serif;">
                <p>Prime Farm enables the Farmer to efficiently record data and edit the data whenever necessary.Integrity and Accessibility of data is what
                    we value most and for that reason Prime Farm is designed to offer high levels of security of the farmers' data and records.
                </p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="footer">

            </div>
        </div>
    </div>

@endsection