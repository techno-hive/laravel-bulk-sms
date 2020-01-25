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


                </div>

                <!-- /row -->

                <div class="row">

                    <div class="span6">

                        <div class="widget">

                            <div class="widget-header">
                                <i class="icon-star"></i>
                                <h3>Group SMS</h3>
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
                                <h3>Bulk Numbers Message</h3>
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