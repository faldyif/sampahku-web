<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>SampahKu</title>
	<!-- <img src="{{ url ('public/img')}}/logo.png">  -->

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ url('assets/admin') }}/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ url('assets/admin') }}/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ url('assets/admin') }}/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ url('assets/admin') }}/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ url('assets/admin') }}/css/pe-icon-7-stroke.css" rel="stylesheet" />


    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script>
      window.SampahKu = <?php echo json_encode([
          'csrfToken' => csrf_token(),
      ]); ?>
  </script>
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{ url('assets/admin') }}/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->




    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    SampahKu
                </a>
            </div>

            <ul class="nav">
                <!-- <li class="active">
                    <a href="{{ url('/admin')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li> -->
                <li>
                    <a href="{{ url('/admin/user') }}">
                        <i class="pe-7s-user"></i>
                        <p>User</p>
                    </a>
                </li>
								<li>
                    <a href="{{ url('/admin/trash') }}">
                        <i class="pe-7s-trash"></i>
                        <p>Tempat Sampah</p>
                    </a>
                </li>
								<!-- <li>
                    <a href="{{ url('/admin/trashType') }}">
                        <i class="pe-7s-science"></i>
                        <p>Tipe Tempat Sampah</p>
                    </a>
                </li> -->

                <li>
                    <a href="{{ url('/admin/reward') }}">
                        <i class="pe-7s-star"></i>
                        <p>Reward</p>
                    </a>
                </li>
								<li>
                    <a href="{{ url('/admin/rewardHistory') }}">
                        <i class="pe-7s-note2"></i>
                        <p>Reward History</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/story') }}">
                        <i class="pe-7s-phone"></i>
                        <p>Story</p>
                    </a>
                </li>
								<li>
                    <a href="{{ url('/admin/pointHistory') }}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Point History</p>
                    </a>
                </li>

                <li>
                    <a href="{{ url('/admin/userTrueReport') }}">
                        <i class="pe-7s-map-marker"></i>
                        <p>True Report</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('/admin/userFalseReport') }}">
                        <i class="pe-7s-attention"></i>
                        <p>False Report</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="{{ url('/admin') }}">Sampah-Ku
                        <i class="pe-7s-rocket"></i>
                        <p></p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="{{url('admin/inc')}}" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                       
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
								<!-- @if (Auth::guest())
										<li><a href="{{ route('login') }}">Login</a></li>
										<li><a href="{{ route('register') }}">Register</a></li>
								@else -->

										<!-- <li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
														{{ Auth::user()->name }} <span class="caret"></span>
			
										<a href="{{ route('logout') }}"
												onclick="event.preventDefault();
																 document.getElementById('logout-form').submit();">
												Keluar
										</a>
										<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
												{{ csrf_field() }}
										</form>
            </li>
			<li class="separator hidden-lg hidden-md"></li>
			@endif -->
						<a href="{{ url('/logout') }}"
							onclick="event.preventDefault();
											 document.getElementById('logout-form').submit();"--><i class="fa fa-fw fa-power-off"></i> Logout</a>
							<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
							{{ csrf_field() }}
<!-- </ul> -->
					</form>
					</a>
                </div>
            </div>
        </nav>
        <div class="content">
						@yield('content')
        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{ url('assets/admin') }}/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="{{ url('assets/admin') }}/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="{{ url('assets/admin') }}/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="{{ url('assets/admin') }}/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ url('assets/admin') }}/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{ url('assets/admin') }}/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{ url('assets/admin') }}/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
