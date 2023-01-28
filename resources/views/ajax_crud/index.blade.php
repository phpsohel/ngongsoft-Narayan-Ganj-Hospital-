@extends('layout.main')
@section('content')
@if(Session::has('success'))
toastr.success("{{ Session('success')}}")
@endif()
@if(session()->has('message'))
<div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('message') }}</div>
@endif

<section class="content">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_member"><i class="fa-regular fa-plus"></i> Add Garments</button>
                    <br>
                    <br>
                    <h1>All Garments </h1>
                </div>
                <div class="col-sm-6" style=""></div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="modal fade" id="create_member">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title text-center">Add Garments</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p class="text-danger">The field labels marked with * are required input fields.</p>
                            <form action="" method="POST" id="AddProductForm">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name<span style="color:red;"> *</span></label>
                                                <input type="text" id="name" name="name" required class="form-control" id="exampleInputEmail1">

                                                @if($errors->has('name'))
                                                <span style="color:red;">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Email<span style="color:red;"> *</span></label>
                                                <input type="email" id="email" name="email" required class="form-control" id="exampleInputPassword1">



                                                @if($errors->has('email'))
                                                <span style="color:red;">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Phone<span style="color:red;"> *</span></label>
                                                <input type="text" id="phone" name="phone" required class="form-control" id="exampleInputPassword1">



                                                @if($errors->has('phone'))
                                                <span style="color:red;">{{ $errors->first('phone') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Licence No<span style="color:red;"> *</span></label>
                                                <input type="text" id="licence_no" name="licence_no" required class="form-control" id="exampleInputPassword1">


                                                @if($errors->has('licence_no'))
                                                <span style="color:red;">{{ $errors->first('licence_no') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Address<span style="color:red;"> *</span></label>
                                                <input type="text" id="address" name="address" required value="{{ old('address') }}" class="form-control" id="exampleInputEmail1" placeholder="">



                                                @if($errors->has('address'))
                                                <span style="color:red;">{{ $errors->first('address') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputPassword1">Upload Your Photo</label>
                                                <input type="file" id="photo" name="photo" class="form-control" id="exampleInputPassword1">
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
                        <div class="modal-footer justify-content-between">
                            <div type="" class=""></div>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<script>
    // $(document).ready(function(){
    //     $(document).on('click','.add_data', function(e){
    //         e.preventDefault();
    //         let name = $('#name').val();
    //         let email = $('#email').val();
    //         let phone = $('#phone').val();
    //         let address = $('#address').val();
    //         let licence_no = $('#licence_no').val();
    //         $.ajax(){
    //             method:"POST",
    //             url:"{{ route('ajax_crud.store') }}",
    //             data:{
    //                 name:name,
    //                 email:email,
    //                 phone:phone,
    //                 address:address,
    //                 licence_no:licence_no,
    //             },
    //             success:function(success){
    //                 console.log(success);
    //             },
    //             error:function(eroor){
    //                     console.log(eroor);

    //             }

    //         }
    //     });

    // });
</script>
@endsection

