<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Search</title>

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
<body class="hold-transition login-page" style="background-image:url('{{asset('image/shipping.jpg')}}');height: 100%!important;background-size: cover;">
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="mt-4 p-4" style="">
                    <h1 class="text-center mb-4 text-white"> <b>Search Track Shipment?</b> </h1>
                    @php
                    $item = App\Models\Container::first();
                    @endphp
                    <div class="input-group rounded  mb-4">
                        <input type="search" style="border-radius: 30px!important; padding: 25px 30px;" class="form-control rounded bl_number" value="{{$item->bl_number ?? ''}}" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                    </div>

                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-12">
                <div class="card" id="bl_table_append">
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('admin/auth/js/jquery/jquery.min.js')}}"></script>

    <!-- Toaster -->
    <script src="{{ asset('admin/toaster/js/toastr.min.js')}}"></script>

    <script>
        $(document).on('keyup', '.bl_number', function() {

            var bl_number = $(this).val();

            //console.log(bl_number);
            $.ajax({
                type: 'get'
                , url: "{{ route('admin.getblnumber') }}"
                , dataType: 'HTML'
                , data: {
                    bl_number: bl_number
                }
                , 'global': false
                , asyn: true
                , success: function(data) {

                    $("#bl_table_append").html(data)

                    //console.log(data)
                }
                , error: function(response) {
                    //console.log(response);
                }
            });
        });

    </script>

</body>
</html>
