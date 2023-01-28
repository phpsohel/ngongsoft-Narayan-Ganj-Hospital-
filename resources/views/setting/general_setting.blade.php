@extends('layout.main')
<!-- Theme style -->
@section('content')
@if(Session::has('success'))
toastr.success("{{ Session('success')}}")
@endif()
<style>
    .dt-buttons.btn-group.flex-wrap button {
        margin: 5px;
        background: #209dc3;
    }
</style>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="row">
                        <div class="col-md-12">
                            <div class=""> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="modal fade" id="modal-lg">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title text-center">Add Member</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-danger">The field labels marked with * are required input fields.</p>
                                <form action="{{route('member.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name<span style="color:red;"> *</span></label>
                                                    <input type="text" name="member_name" class="form-control" id="exampleInputEmail1">
                                                    @if($errors->has('member_name'))

                                                    <span style="color:red;">{{ $errors->first('member_name') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Father's Name<span style="color:red;"> *</span></label>

                                                    <input type="text" name="father_name" value="{{ old('father_name') }}" class="form-control" id="exampleInputEmail1" placeholder="">
                                                    @if($errors->has('father_name'))
                                                    <span style="color:red;">{{ $errors->first('father_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Mother's Name<span style="color:red;"> *</span></label>
                                                    <input type="text" name="mother_name" value="{{ old('mother_name') }}" class="form-control" id="exampleInputEmail1" placeholder="">

                                                    @if($errors->has('mother_name'))
                                                    <span style="color:red;">{{ $errors->first('mother_name') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Address<span style="color:red;"> *</span></label>
                                                    <input type="text" name="address" value="{{ old('address') }}" class="form-control" id="exampleInputEmail1" placeholder="">
                                                    @if($errors->has('address'))
                                                    <span style="color:red;">{{ $errors->first('address') }}</span>
                                                    @endif


                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Permanent Address<span style="color:red;"> *</span></label>
                                                    <input type="text" name="permanent_address" value="{{ old('permanent_address') }}" class="form-control" id="exampleInputEmail1">
                                                    @if($errors->has('permanent_address'))
                                                    <span style="color:red;">{{ $errors->first('permanent_address') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Date of Birth<span style="color:red;"> *</span></label>
                                                    <input type="date" name="birth" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('birth'))
                                                    <span style="color:red;">{{ $errors->first('birth') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Education Qualification<span style="color:red;"> *</span></label>
                                                    <input type="text" name="education" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('education'))
                                                    <span style="color:red;">{{ $errors->first('education') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Company Name<span style="color:red;"> *</span></label>

                                                    <input type="text" name="company_name" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('company_name'))
                                                    <span style="color:red;">{{ $errors->first('company_name') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Designation<span style="color:red;"> *</span></label>

                                                    <input type="text" name="designation" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('designation'))
                                                    <span style="color:red;">{{ $errors->first('designation') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Company Address<span style="color:red;"> *</span></label>
                                                    <input type="text" name="company_address" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('company_address'))
                                                    <span style="color:red;">{{ $errors->first('company_address') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Phone<span style="color:red;"> *</span></label>
                                                    <input type="text" name="phone" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('phone'))
                                                    <span style="color:red;">{{ $errors->first('phone') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Email<span style="color:red;"> *</span></label>
                                                    <input type="email" name="email" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('email'))
                                                    <span style="color:red;">{{ $errors->first('email') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Blood<span style="color:red;"> *</span></label>
                                                    <input type="text" name="blood" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('blood'))
                                                    <span style="color:red;">{{ $errors->first('blood') }}</span>
                                                    @endif

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">NID NO<span style="color:red;"> *</span></label>

                                                    <input type="number" name="nid" class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('nid'))
                                                    <span style="color:red;">{{ $errors->first('nid') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputPassword1">Payment Status:</label>
                                                <select class="form-control" name="payment_status">
                                                    <option value="1">Paid</option>
                                                    <option value="0">UnPaid</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleInputPassword1">Juridiction of Factory:</label>
                                                <select class="form-control" name="cbc_type">
                                                    <option value="1">CBC-N</option>
                                                    <option value="2">CBC-S</option>
                                                    <option value="3">CBC-E</option>
                                                    <option value="4">CBC-W</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Upload Your Photo<span style="color:red;"> *</span></label>
                                                    <input id="image" type="file" name="photo" class="form-control" id="exampleInputPassword1">

                                                    <img id="showImage" src="{{ asset('image/no_image.jpg') }}" alt="" width="100px;">
                                                    @if($errors->has('photo'))
                                                    <span style="color:red;">{{ $errors->first('photo') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            </div>
                                            <div class="card-footer">
                                                <label for=""></label>
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <div type="" class=""></div>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div class="container">
    <section class="content-header">
        <div class="container-fluid">
            <div class="card">
                <h3 class="text-center p-4">General Setting </h3>
                <hr>
                @if($general_setting->id ?? '')
                    <form action="{{route('setting.update', $general_setting->id)}}" method="POST" enctype="multipart/form-data">
                @else
                <form action="{{route('setting.store')}}" method="POST" enctype="multipart/form-data">
                @endif
                    @csrf
                    <div class="card-body">
                        <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="exampleInputPassword1">Company Logo<span style="color:red;"> *</span></label>
                                 <input id="image" type="file" name="site_logo" class="form-control" id="exampleInputPassword1">
                                 <img id="showImage" src="{{ asset('image/no_image.jpg') }}" alt="" width="100px;">
                                 @if($errors->has('photo'))
                                 <span style="color:red;">{{ $errors->first('site_logo') }}</span>
                                 @endif
                             </div>
                         </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Site Title<span style="color:red;"> *</span></label>
                                    <input type="text" name="site_title" value="{{ $general_setting->site_title ?? '' }}" class="form-control" id="exampleInputEmail1">

                                    @if($errors->has('site_title'))
                                    <span style="color:red;">{{ $errors->first('site_title') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address <span style="color:red;"> *</span></label>
                                    <input type="text" name="address" value="{{ $general_setting->address ?? '' }}"class="form-control" id="exampleInputEmail1" placeholder="">
                                    @if($errors->has('address'))
                                    <span style="color:red;">{{ $errors->first('address') }}</span>

                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Phone <span style="color:red;"> *</span></label>
                                    <input type="number" name="phone" value="{{ $general_setting->phone ?? '' }}" class="form-control" id="exampleInputEmail1" placeholder="">

                                    @if($errors->has('phone'))
                                    <span style="color:red;">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email<span style="color:red;"> *</span></label>
                                    <input type="email" name="email" value="{{ $general_setting->email ?? '' }}" class="form-control" id="exampleInputPassword1">

                                    @if($errors->has('email'))
                                    <span style="color:red;">{{ $errors->first('email') }}</span>
                                    @endif

                                </div>
                            </div>

                            <div class="col-md-6">
                            </div>
                            <div class="card-footer">
                                <label for=""></label>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>
    </div>
</section>
@endsection
