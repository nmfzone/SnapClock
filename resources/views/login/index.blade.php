<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,300italic,400italic,600italic'>
    <link rel="stylesheet" type="text/css" href='http://fonts.googleapis.com/css?family=Raleway:300,400,600,300italic,400italic,600italic'>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <link rel="stylesheet" type="text/css" href="css/timezone.css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<section class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <a href=""><img src="images/logo.png" alt="TimeZone"></a>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="loginCont">
                <div class="login">
                    <h2 class="text-center">Sign In Karyawan</h2>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form action="{{ route('login.store') }}" role="form" method="POST" class="mt20">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="text" class="form-control" required="" value="{{ old('username') }}" placeholder="Username Karyawan" name="username" />
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock icon-lock"></i></span>
                            <input type="password" class="form-control" required="" placeholder="Password" name="password" />
                        </div>
                        <small class="pull-right"><a data-toggle="modal" href="#resetPassword"><i class="fa fa-unlock"></i> Lupa Password</a></small>
                        <button type="input" name="submit" class="btn btn-login btn-icon"><i class="fa fa-sign-in"></i> Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<section id="footer-default">
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt30 mb20">
                <a href=""><img src="images/logo.png"></a>
            </div>
            <div class="col-md-12">
                <p>
                     <a href="http://codecanyon.net/item/timezone-employee-management-time-clock/6682629?ref=Luminary"></a>
                     <i class="fa fa-circle-thin"></i>
                </p>
            </div>
        </div>
    </div>
</section>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/webcamjs/webcam.min.js" type="text/javascript"></script>
<script src="js/custom.js" type="text/javascript"></script>
</body>
</html>