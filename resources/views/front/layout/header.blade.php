<nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">
            <strong>SAMP-CP</strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link">Home <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            @if( !$user )
            <form class="form-inline" method="POST" action="{{ URL::route("page.login") }}">
                <div class="waves-effect waves-light">
                    <input class="form-control" name="username" type="text" placeholder="Benutzername">
                </div>
                <div class="waves-effect waves-light">
                    <input class="form-control" name="password" type="password" placeholder="Passwort">
                </div>
                <?php echo csrf_field(); ?>
                <button type="submit" class="btn btn-info btn-sm">
                    Einloggen
                </button>
            </form>
            @else
                <p>Hallo {{ $user->username }}</p>
            @endif
        </div>
    </div>
</nav>
<div id="carousel-example-1" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active view hm-black-light" style="background-image: url('{{ URL::asset("assets/front/img/1.jpg") }}'); background-repeat: no-repeat; background-size: cover;">
            <div class="full-bg-img flex-center white-text">
                <ul class="animated fadeIn col-md-12">
                    <li>
                        <h1 class="h1-responsive">Servername UCP</h1></li>
                    <p>Aktuell spielen <strong>156165</strong> Leute auf unserem Server</p><br>
                    <li>
                        <a target="_blank" href="#" class="btn btn-info btn-lg" rel="nofollow"><i class="fa fa-gamepad" aria-hidden="true"></i> Mit SAMP verbinden</a>
                        <a target="_blank" href="#" class="btn btn-info btn-lg" rel="nofollow"><i class="fa fa-comments-o" aria-hidden="true"></i> Mit Teamspeak verbinden</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<br>