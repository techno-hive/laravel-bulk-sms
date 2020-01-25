@extends('laravel-bulk-sms::layout')

@section('content')


<!-- "extra": {
        "branch-alias": {
            "dev-master": "0.8-dev"
        },
        "laravel": {
            "providers": [
                "TechnoHiveKenya\\LaravelBulkSMS\\BulkSmsServiceProvider"
            ],
            "aliases": {
                "BulkSMS": "TechnoHiveKenya\\LaravelBulkSMS\\Facades\\BulkSMSFacade"
            }
        }
    }, -->

<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">

                <div class="span12">

                    <div class="info-box">
                        <div class="row-fluid stats-box">
                            <div class="span4">
                                <div class="stats-box-title">Vizitor</div>
                                <div class="stats-box-all-info"><i class="icon-user" style="color:#3366cc;"></i> 555K</div>
                                <div class="wrap-chart"><div id="visitor-stat" class="chart" style="padding: 0px; position: relative;"><canvas id="bar-chart1" class="chart-holder" height="150" width="325"></canvas></div></div>
                            </div>

                            <div class="span4">
                                <div class="stats-box-title">Likes</div>
                                <div class="stats-box-all-info"><i class="icon-thumbs-up"  style="color:#F30"></i> 66.66</div>
                                <div class="wrap-chart"><div id="order-stat" class="chart" style="padding: 0px; position: relative;"><canvas id="bar-chart2" class="chart-holder" height="150" width="325"></canvas></div></div>
                            </div>

                            <div class="span4">
                                <div class="stats-box-title">Orders</div>
                                <div class="stats-box-all-info"><i class="icon-shopping-cart" style="color:#3C3"></i> 15.55</div>
                                <div class="wrap-chart">

                                    <div id="user-stat" class="chart" style="padding: 0px; position: relative;"><canvas id="bar-chart3" class="chart-holder" height="150" width="325"></canvas></div>

                                </div>
                            </div>
                        </div>


                    </div>


                </div>
            </div>

            <!-- /row -->

            <div class="row">

                <div class="span6">

                    <div class="widget">

                        <div class="widget-header">
                            <i class="icon-star"></i>
                            <h3>Some Stats</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <canvas id="pie-chart" class="chart-holder" height="250" width="538"></canvas>
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->




                </div> <!-- /span6 -->


                <div class="span6">

                    <div class="widget">

                        <div class="widget-header">
                            <i class="icon-list-alt"></i>
                            <h3>Another Chart</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <canvas id="bar-chart" class="chart-holder" height="250" width="538"></canvas>
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->

                </div> <!-- /span6 -->

            </div> <!-- /row -->







        </div> <!-- /container -->

    </div> <!-- /main-inner -->

</div> <!-- /main -->




@endsection