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
                            <form action="" id="AddProductForm">
                                @csrf
                                <div class="card-body">
                                    <div class="row">

                                        <div class="errorMessage">
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Name<span style="color:red;"> *</span></label>
                                                <input type="text" id="name" name="name"  class="form-control" id="exampleInputEmail1">

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
                                        {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Upload Your Photo</label>
                                        <input type="file" id="photo" name="photo" class="form-control" id="exampleInputPassword1">
                                    </div>
                                </div> --}}
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
                <div class="row">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">SL</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Address</th>
                                <th scope="col">Licence No</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i =0;
                            ?>
                            @foreach ($garments as $garment)
                                <tr>
                                    <td>{{ ++$i}}</td>
                                    <td>{{ $garment->name ?? ''}}</td>
                                    <td>{{ $garment->email ?? ''}}</td>
                                    <td>{{ $garment->phone ?? ''}}</td>
                                    <td>{{ $garment->address ?? ''}}</td>
                                    <td>{{ $garment->licence_no ?? ''}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary update_data" 
                                            data-id ='{{$garment->id}}'
                                            data-name ='{{$garment->name}}'
                                            data-price ='{{$garment->price}}'
                                            data-email ='{{$garment->email}}'
                                            data-licence_no ='{{$garment->licence_no}}'
                                            >Edit</a>

                                        <a href="" class="btn btn-success">View</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            {{ $garments->links() }}


                        </tbody>
                        

                    </table>

                </div>
            </div>
        </section>
    </div>


<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

{{-- @endsection --}}
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function(){
        $(".add_data").click(function(e){
            e.preventDefault;
            let name = $('#name').val();
            let email = $('#email').val();
            let phone = $('#phone').val();
            let address = $('#address').val();
            let licence_no = $('#licence_no').val();
           // console.log(name,email,phone,licence_no);
           $.ajax({
                type:'POST',
                url:"{{ route('ajax_crud.store')}}",
                data:{name:name,email:email, phone:phone,address:address,licence_no:licence_no},
                success: function(res){
                    if(res.status == 'success'){
                        $('.table').load(location.href+' .table');
                    }
                },
                error: function(err){
                    let error = err.responseJSON;
                    $.each(error.errors, function(index, value){
                        $('.errorMessage').append('<span clss="text-danger">'+value+'</span>'+'<br>');
                    });
                }
           });
        })
        //Data Update
        $(document).click('.update_data', function(){
            let id = $(this).data('id');
            // let name = $(this).data('name');
            // let email = $(this).data('email');
            // let phone = $(this).data('phone');
            // let address = $(this).data('address');
            // let licence_no = $(this).data('licence_no');
            $.ajax({
                type:'GET',
                url:"{{ route('ajax_crud.update')}}",
                data:{id:id},
                success: function(data){

                }

            });
            // $('#update_id').val('id');
            // $('#update_name').val('name');
            // $('#update_email').val('email');
            // $('#update_phone').val('phone');
            // $('#update_address').val('address');
            // $('#update_licence_no').val('licence_no');

        });


    });

    // $(document).ready(function() {
    //     $(".add_data").click(function(e){
    //         alert('ok');
    //         e.preventDefault();

    //         var _token = $("input[name='_token']").val();
    //         var name = $("input[name='name']").val();
    //         var email = $("input[name='email']").val();
    //         var phone = $("input[name='phone']").val();
    //         var licence_no = $("textarea[name='licence_no']").val();

    //         $.ajax({
    //             url:"{{ route('ajax_crud.store') }}",
    //             method:'POST',
    //             data:{_token:_token, name:name, email:email, phone:phone, licence_no:licence_no},
    //             success: function(data) {
    //                 if($.isEmptyObject(data.error)){
    //                 alert(data.success);
    //             }else{
    //                 printErrorMsg(data.error);
    //             }
    //         }
    //     });

    // });


    // $(document).ready(function() {

    //     $(document).click('.add_data', function(e) {
    //         e.preventDefault();
    //         let name = $("#name").val();
    //         let email = $("#email").val();
    //         console.log(name + email);
    //         $.ajax({
    //             method: 'POST',
    //             url:{{ route('ajax_crud.store') }},
    //             data:{
    //                 name:name,
    //                 email:email,
    //             },
    //             success: function(res){

    //             },
    //             error: function(err){
    //                 let error = err.responseJSON;
    //                 $.each(error.errors, function(index, value){
    //                     $('.errorMessage').append('<span class="text-danger">' +value+'</span>')


    //                 })
    //             }

    //         });
    //     })
    // });
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
</body>
</html>

