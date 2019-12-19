@extends('laravelbulksms.layout')

@section('content')



<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">
                <form method="post" action="sendsms">
                    {{csrf_token()}}
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>
                                    Enter Mobile Number
                                </label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label>
                                    Message
                                </label>
                                <textarea class="form-control" rows="2"></textarea>
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