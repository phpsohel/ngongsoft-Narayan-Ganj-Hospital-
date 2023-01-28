<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Registration Form')</title>
    <link rel="icon" href="{{ asset('image/2022-12-27 logocewa.png') }}" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css">

    <!-- toaster -->
    <link rel="stylesheet" href="{{asset('admin/toaster/css/toastr.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin/auth/css/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin/auth/css/dist/adminlte.min.css')}}">

</head>
<body class="hold-transition login-page" style="background-image:url('{{asset('image/bg.jpg')}}');height: 100%!important;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('message') }}</div>
                @endif

                <div class="mt-4 p-4" style="">
                    <h1 class="text-center mb-4 text-white border"> <b>Registration Form!</b> </h1>
                    <div class="input-group rounded  mb-4">
                      <div class="card">
                          <form action="{{route('register_form.store')}}" method="POST" enctype="multipart/form-data">
                              @csrf
                              <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Upload Your Photo<span style="color:red;"> *</span></label>
                                            <input id="image" type="file" name="photo" class="form-control" id="exampleInputPassword1">
                                        </div>
                                    </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Name<span style="color:red;"> *</span></label>
                                              <input type="text" name="member_name" class="form-control" id="exampleInputEmail1">
                                              @if($errors->has('member_name'))

                                              <span style="color:red;">{{ $errors->first('member_name') }}</span>
                                              @endif

                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Father's Name<span style="color:red;"> *</span></label>

                                              <input type="text" name="father_name" value="{{ old('father_name') }}" class="form-control" id="exampleInputEmail1" placeholder="">
                                              @if($errors->has('father_name'))
                                              <span style="color:red;">{{ $errors->first('father_name') }}</span>
                                              @endif
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Mother's Name<span style="color:red;"> *</span></label>
                                              <input type="text" name="mother_name" value="{{ old('mother_name') }}" class="form-control" id="exampleInputEmail1" placeholder="">

                                              @if($errors->has('mother_name'))
                                              <span style="color:red;">{{ $errors->first('mother_name') }}</span>
                                              @endif

                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Address<span style="color:red;"> *</span></label>
                                              <input type="text" name="address" value="{{ old('address') }}" class="form-control" id="exampleInputEmail1" placeholder="">
                                              @if($errors->has('address'))
                                              <span style="color:red;">{{ $errors->first('address') }}</span>
                                              @endif


                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="exampleInputEmail1">Permanent Address<span style="color:red;"> *</span></label>
                                              <input type="text" name="permanent_address" value="{{ old('permanent_address') }}" class="form-control" id="exampleInputEmail1">
                                              @if($errors->has('permanent_address'))
                                              <span style="color:red;">{{ $errors->first('permanent_address') }}</span>
                                              @endif

                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Date of Birth<span style="color:red;"> *</span></label>
                                              <input type="date" name="birth" class="form-control" id="exampleInputPassword1">
                                              @if($errors->has('birth'))
                                              <span style="color:red;">{{ $errors->first('birth') }}</span>
                                              @endif

                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Education Qualification<span style="color:red;"> *</span></label>
                                              <input type="text" name="education" class="form-control" id="exampleInputPassword1">
                                              @if($errors->has('education'))
                                              <span style="color:red;">{{ $errors->first('education') }}</span>
                                              @endif

                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Company Name<span style="color:red;"> *</span></label>

                                              <input type="text" name="company_name" class="form-control" id="exampleInputPassword1">
                                              @if($errors->has('company_name'))
                                              <span style="color:red;">{{ $errors->first('company_name') }}</span>
                                              @endif

                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Designation<span style="color:red;"> *</span></label>

                                              <input type="text" name="designation" class="form-control" id="exampleInputPassword1">
                                              @if($errors->has('designation'))
                                              <span style="color:red;">{{ $errors->first('designation') }}</span>
                                              @endif

                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Company Address<span style="color:red;"> *</span></label>
                                              <input type="text" name="company_address" class="form-control" id="exampleInputPassword1">
                                              @if($errors->has('company_address'))
                                              <span style="color:red;">{{ $errors->first('company_address') }}</span>
                                              @endif

                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Phone<span style="color:red;"> *</span></label>
                                              <input type="number" name="phone" class="form-control" id="exampleInputPassword1">
                                              @if($errors->has('phone'))
                                              <span style="color:red;">{{ $errors->first('phone') }}</span>
                                              @endif

                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Email<span style="color:red;"> *</span></label>
                                              <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                                              @if($errors->has('email'))
                                              <span style="color:red;">{{ $errors->first('email') }}</span>
                                              @endif
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">Blood<span style="color:red;"> *</span></label>
                                              <input type="text" name="blood" class="form-control" id="exampleInputPassword1">
                                              @if($errors->has('blood'))
                                              <span style="color:red;">{{ $errors->first('blood') }}</span>
                                              @endif

                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <div class="form-group">
                                              <label for="exampleInputPassword1">NID NO<span style="color:red;"> *</span></label>

                                              <input type="number" name="nid" class="form-control" id="exampleInputPassword1">
                                              @if($errors->has('nid'))
                                              <span style="color:red;">{{ $errors->first('nid') }}</span>
                                              @endif
                                          </div>
                                      </div>
                                      <div class="col-md-4">
                                          <label for="exampleInputPassword1">Juridiction of Factory:</label>
                                          <select class="form-control" name="cbc_type">
                                              <option value="1">CBC-N</option>
                                              <option value="2">CBC-S</option>
                                              <option value="3">CBC-E</option>
                                              <option value="4">CBC-W</option>
                                          </select>
                                      </div>
                                      <div class="col-md-4"></div>
                                      <div class="col-md-4"></div>
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                        </div>
                                  </div>
                              </div>
                          </form>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('admin/auth/js/jquery/jquery.min.js')}}"></script>
    <!-- Toaster -->
    <script src="{{ asset('admin/toaster/js/toastr.min.js')}}"></script>
</body>
</html>

