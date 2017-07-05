
<header>
    <div class="navbar navbar-fixed-top" Style="background-color: #FDFEFE; border-bottom-color:#4DB6AC; solid-color:2px;">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle btn-sm mdi mdi-menu" data-toggle="collapse" data-target=".navbar-responsive-collapse" style="background-color:#8E44AD; color: white;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color:#8E44AD;height:80px;">
                    <h3><strong>Campus</strong></h3><h4>Chatroom</h4>
                </a>
            </div>
            <div class="navbar-collapse collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#" class="btn btn-primary btn-lg" style="color: #8E44AD" role="button" data-toggle="tooltip" title="User Profile">
                            <span class="glyphicon glyphicon-user" aria-hidden="true"></span></a>
                    </li>
                    <li><a href="{{route('logout')}}" class="btn btn-default"  role="button" data-toggle="tooltip" title="Logout">
                            <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a>
                    </li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control col-sm-8" placeholder="Search">
                    </div>
                </form>

            </div>
        </div>
    </div>

</header>