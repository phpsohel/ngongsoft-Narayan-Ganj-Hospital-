{{-- @extends('layout.main')
@section('content')
@if(Session::has('success'))
toastr.success("{{ Session('success')}}")
@endif()
@if(session()->has('message'))
<div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('message') }}</div>
@endif --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="" id="">
                    <div class="modal-dialog ">
                        <form action="" id="update_data">
                            @csrf
                            <input type="hidden" id="update_id">

                            <div class="card-body">
                                <div class="row">

                                    <div class="errorMessage">
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Name<span style="color:red;"> *</span></label>
                                            <input type="text" id="update_name" name="update_name" class="form-control" id="exampleInputEmail1">

                                            @if($errors->has('update_name'))

                                            <span style="color:red;">{{ $errors->first('update_name') }}</span>

                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Email<span style="color:red;"> *</span></label>
                                            <input type="email" id="update_email" name="update_email" required class="form-control" id="exampleInputPassword1">


                                            @if($errors->has('update_email'))
                                            <span style="color:red;">{{ $errors->first('update_email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Phone<span style="color:red;"> *</span></label>
                                            <input type="text" id="update_phone" name="update_phone" required class="form-control" id="exampleInputPassword1">



                                            @if($errors->has('update_phone'))
                                            <span style="color:red;">{{ $errors->first('update_phone') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Licence No<span style="color:red;"> *</span></label>
                                            <input type="text" id="update_licence_no" name="update_licence_no" required class="form-control" id="exampleInputPassword1">


                                            @if($errors->has('update_licence_no'))
                                            <span style="color:red;">{{ $errors->first('update_licence_no') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address<span style="color:red;"> *</span></label>
                                            <input type="text" id="update_address" name="update_address" required value="{{ old('update_address') }}" class="form-control" id="exampleInputEmail1" placeholder="">



                                            @if($errors->has('update_address'))
                                            <span style="color:red;">{{ $errors->first('update_address') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <label for=""></label>
                                        <button type="submit" class="btn btn-primary add_data">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    </div>


    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


</body>
</html>

