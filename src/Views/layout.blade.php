<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Reports - Bootstrap Admin Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link href="{{('laravelbulksms/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{('laravelbulksmsJ')}}" rel="stylesheet">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="{{('laravelbulksms/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{('laravelbulksms/css/style.css')}}" rel="stylesheet">

    <link href="{{('laravelbulksms/css/pages/reports.css')}}" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<div class="navbar navbar-fixed-top">

    <div class="navbar-inner">

        <div class="container">

            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>

            <a class="brand" href="{{url('technohive-dashboard')}}">
                TechnoHive Bulk SMS
            </a>

            <div class="nav-collapse">
                <ul class="nav pull-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-cog"></i>
                            Account
                            <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="javascript:;">Settings</a></li>
                            <li><a href="javascript:;">Help</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i>
                            EGrappler.com
                            <b class="caret"></b>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="javascript:;">Profile</a></li>
                            <li><a href="javascript:;">Logout</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="navbar-search pull-right">
                    <input type="text" class="search-query" placeholder="Search">
                </form>

            </div><!--/.nav-collapse -->

        </div> <!-- /container -->

    </div> <!-- /navbar-inner -->

</div> <!-- /navbar -->





<div class="subnavbar">

    <div class="subnavbar-inner">

        <div class="container">

            <ul class="mainnav">

                <li>
                    <a href="{{url('technohive-dashboard')}}">
                        <i class="icon-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>




                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-long-arrow-down"></i>
                        <span>Send SMS</span>
                        <b class="caret"></b>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="{{url('technohive-sendsms')}}">Single SMS</a></li>
                        <li><a href="{{url('technohive-sendbulk')}}">Bulk SMS</a></li>

                    </ul>
                </li>
                <li class="active">
                    <a href="{{url('technohive-sendsms')}}">
                        <i class="icon-list-alt"></i>
                        <span>Send SMS</span>
                    </a>
                </li>

                <li>
                    <a href="guidely.html">
                        <i class="icon-facetime-video"></i>
                        <span>App Tour</span>
                    </a>
                </li>


                <li>
                    <a href="charts.html">
                        <i class="icon-bar-chart"></i>
                        <span>Charts</span>
                    </a>
                </li>


                <li>
                    <a href="shortcodes.html">
                        <i class="icon-code"></i>
                        <span>Shortcodes</span>
                    </a>
                </li>

                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-long-arrow-down"></i>
                        <span>Drops</span>
                        <b class="caret"></b>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a href="icons.html">Icons</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <li><a href="pricing.html">Pricing Plans</a></li>
                        <li><a href="login.html">Login</a></li>
                        <li><a href="signup.html">Signup</a></li>
                        <li><a href="error.html">404</a></li>
                    </ul>
                </li>

            </ul>

        </div> <!-- /container -->

    </div> <!-- /subnavbar-inner -->

</div> <!-- /subnavbar -->


@yield('content')

<div class="extra">

    <div class="extra-inner">

        <div class="container">

            <div class="row">
                <div class="span3">
                    <h4>
                        About Free Admin Template</h4>
                    <ul>
                        <li><a href="javascript:;">EGrappler.com</a></li>
                        <li><a href="javascript:;">Web Development Resources</a></li>
                        <li><a href="javascript:;">Responsive HTML5 Portfolio Templates</a></li>
                        <li><a href="javascript:;">Free Resources and Scripts</a></li>
                    </ul>
                </div>
                <!-- /span3 -->
                <div class="span3">
                    <h4>
                        Support</h4>
                    <ul>
                        <li><a href="javascript:;">Frequently Asked Questions</a></li>
                        <li><a href="javascript:;">Ask a Question</a></li>
                        <li><a href="javascript:;">Video Tutorial</a></li>
                        <li><a href="javascript:;">Feedback</a></li>
                    </ul>
                </div>
                <!-- /span3 -->
                <div class="span3">
                    <h4>
                        Something Legal</h4>
                    <ul>
                        <li><a href="javascript:;">Read License</a></li>
                        <li><a href="javascript:;">Terms of Use</a></li>
                        <li><a href="javascript:;">Privacy Policy</a></li>
                    </ul>
                </div>
                <!-- /span3 -->
                <div class="span3">
                    <h4>
                        Open Source jQuery Plugins</h4>
                    <ul>
                        <li><a href="">Open Source jQuery Plugins</a></li>
                        <li><a href="">HTML5 Responsive Tempaltes</a></li>
                        <li><a href="">Free Contact Form Plugin</a></li>
                        <li><a href="">Flat UI PSD</a></li>
                    </ul>
                </div>
                <!-- /span3 -->
            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /extra-inner -->

</div> <!-- /extra -->




<div class="footer">

    <div class="footer-inner">

        <div class="container">

            <div class="row">

                <div class="span12">
                    &copy; 2013 <a href="#">Bootstrap Responsive Admin Template</a>.
                </div> <!-- /span12 -->

            </div> <!-- /row -->

        </div> <!-- /container -->

    </div> <!-- /footer-inner -->

</div> <!-- /footer -->


<script src="{{('laravelbulksms/js/jquery-1.7.2.min.js')}}"></script>
<script src="{{('laravelbulksms/js/excanvas.min.js')}}"></script>
<script src="{{('laravelbulksms/js/chart.min.js')}}" type="text/javascript"></script>
<script src="{{('laravelbulksms/js/bootstrap.js')}}"></script>
<script src="{{('laravelbulksms/js/base.js')}}"></script>
<script>

    var pieData = [
        {
            value: 30,
            color: "#F38630"
        },
        {
            value: 50,
            color: "#E0E4CC"
        },
        {
            value: 100,
            color: "#69D2E7"
        }

    ];

    var myPie = new Chart(document.getElementById("pie-chart").getContext("2d")).Pie(pieData);

    var barChartData = {
        labels: ["January", "February", "March", "April", "May", "June", "July"],
        datasets: [
            {
                fillColor: "rgba(220,220,220,0.5)",
                strokeColor: "rgba(220,220,220,1)",
                data: [65, 59, 90, 81, 56, 55, 40]
            },
            {
                fillColor: "rgba(151,187,205,0.5)",
                strokeColor: "rgba(151,187,205,1)",
                data: [28, 48, 40, 19, 96, 27, 100]
            }
        ]

    }

    var myLine = new Chart(document.getElementById("bar-chart").getContext("2d")).Bar(barChartData);
    var myLine = new Chart(document.getElementById("bar-chart1").getContext("2d")).Bar(barChartData);
    var myLine = new Chart(document.getElementById("bar-chart2").getContext("2d")).Bar(barChartData);
    var myLine = new Chart(document.getElementById("bar-chart3").getContext("2d")).Bar(barChartData);

</script>


</body>

</html>
