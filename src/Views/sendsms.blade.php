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
                                <h3>Singlekk SMS</h3>
                            </div> <!-- /widget-header -->

                            <div class="widget-content">
                                @if (!empty($errors))
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                <form action="{{url('technohive-sendsms')}}" method="post">
{{--                                    {{csrf_field()}}--}}
                                    <p>
                                        <div class="form-group">
                                            <label>Phone number</label>
                                            <input type="text" required name="phone_number">
                                        </div>
                                        <div class="form-group">
                                            <label>Message</label>
                                            <textarea class="form-control" rows="5"  name="text_message"></textarea>
                                        </div>
                                    </p>
                                    <p>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success">

                                    </div>

                                    </p>

                                    <br>
                                    <br>
                                    <br>


                                </form>
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
                                <form action="" method="post">
                                    {{csrf_field()}}
                                    <p>
                                    <div class="form-group">
                                        <label>Phone Numbers</label>
                                        <textarea  class="textarea" rows="8"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea ></textarea>
                                    </div>
                                    </p>
                                    <p>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-success">

                                    </div>

                                    </p>



                                </form>
                            </div> <!-- /widget-content -->

                        </div> <!-- /widget -->

                    </div> <!-- /span6 -->

                </div> <!-- /row -->







            </div> <!-- /container -->

        </div> <!-- /main-inner -->

    </div> <!-- /main -->




@endsection