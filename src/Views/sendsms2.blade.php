@extends('laravel-bulk-sms::layout')

@section('content')



<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">
{{--                @if ($errors->any())--}}
{{--                    <div class="alert alert-danger">--}}
{{--                        <ul>--}}
{{--                            @foreach ($errors->all() as $error)--}}
{{--                                <li>{{ $error }}</li>--}}
{{--                            @endforeach--}}
{{--                        </ul>--}}
{{--                    </div>--}}
{{--                @endif--}}
                <form method="post" action="{{url('technohive-sendsms')}}">
                    {{csrf_token()}}
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>
                                    Enter Mobile Number
                                </label>
                                <input type="text" name="phone_number" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>
                                    Message
                                </label>
                                <textarea class="form-control" name="text_message" rows="2" required></textarea>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input type="submit" class="btn btn-success">
                            </div>
                        </div>
                    </div>
                </form>
            </div>







        </div> <!-- /container -->

    </div> <!-- /main-inner -->

</div> <!-- /main -->




@endsection