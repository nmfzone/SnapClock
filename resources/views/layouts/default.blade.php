<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable 1</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/googlefonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fullcalendar.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datetimepicker.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/timezone.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}" />

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <section class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <a href=""><img src="{{ asset('images/logo.png') }}" alt="TimeZone"></a>
                </div>

                <div class="col-md-6 text-right">
                    tanggal
                </div>
            </div>
        </div>
    </section>

    <div class="navbar navbar-inverse" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">variable 2</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Dashboard</a></li>
                    <li><a href="index.php?page=calendar">Kalender</a></li>
                    <li><a href="index.php?page=time">Timesheet</a></li>
                    <li><a href="index.php?page=tasks">Task</a></li>
                    <li><a href="index.php?page=inbox">Pesan</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pegawai</a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?page=activeEmployees">Pegawai Aktif</a></li>
                            <li><a href="index.php?page=inactiveEmployees">Pegawai Non Aktif</a></li>

                            <li><a href="index.php?page=newEmployee">Pegawai Baru</a></li>

                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Setting</a>
                        <ul class="dropdown-menu">
                            <li><a href="index.php?page=notices"></a></li>
                            <li><a href="index.php?page=businessDocs"></a></li>
                            <li><a href="index.php?page=reports"></a></li>

                            <li><a href="index.php?page=timeCards"></a></li>
                            <li><a href="index.php?page=siteSettings"></a></li>

                        </ul>
                    </li>


                    <li class="dropdown user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <span>Sugeng</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="" alt="Avatar" />
                                <p>
                                    <br />
                                    <small></small>
                                    <small></small>
                                </p>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="index.php?page=myProfile" class="btn btn-default"><i class="fa fa-user"></i> </a>
                                </div>
                                <div class="pull-right">
                                    <a data-toggle="modal" href="#signOut" class="btn btn-default"><i class="fa fa-sign-out"></i> </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="modal fade" id="signOut" tabindex="-1" role="dialog" aria-labelledby="signOut" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <p class="lead"></p>
                </div>
                <div class="modal-footer">
                    <a href="index.php?action=logout" class="btn btn-success btn-icon-alt"> <i class="fa fa-sign-out"></i></a>
                    <button type="button" class="btn btn-default btn-icon" data-dismiss="modal"><i class="fa fa-times-circle"></i> </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>

    <section id="footer-default">
        <div class="container">
            <div class="footer-nav">
                <a href="index.php"></a>
                <i class="fa fa-circle-thin"></i>
                <a href="index.php?page=calendar"></a>
                <i class="fa fa-circle-thin"></i>
                <a href="index.php?page=tasks"></a>
                <i class="fa fa-circle-thin"></i>
                <a href="index.php?page=inbox"></a>
                <i class="fa fa-circle-thin"></i>
                <a href="index.php?page=time"></a>
                <i class="fa fa-circle-thin"></i>
                <a href="index.php?page=myProfile"></a>
                <i class="fa fa-circle-thin"></i>
                <a data-toggle="modal" href="#signOut"></a>
            </div>
            <div class="row">
                <div class="col-md-12 mb20">
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

    <script src="{{ asset('js/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/moment-with-locales.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>

    @yield('script')
</body>
</html>