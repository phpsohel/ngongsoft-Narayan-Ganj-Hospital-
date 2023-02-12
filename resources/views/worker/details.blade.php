@extends('layout.main')
@section('content')
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<style>
     .buttons-print {
        margin: 5px;
        background: #2196f3;

     }

    @media print {
        * {
            font-size: 12px;
            line-height: 20px;
        }

        td,
        th {
            padding: 5px 0;
        }

        .hidden-print {
            display: none !important;
        }

        @page {
            margin: 0;
        }

        body {
            margin: 0.5cm;
            margin-bottom: 1.6cm;
        }
    }
</style>
<body>
    <br>
    <div id="data">
        <div class="container">
            <br>
            <div class="row">
                <br>
                <div class="col-md-2" style="text-align: right;">
                    {{-- <img src="{{url('public/images/pfi .png')}}" alt="">--}}
                </div>
                <div class="col-md-8" style="text-align: left;">
                </div>
                <div class="col-md-2 hidden-print" style="text-align: left;">

                    <a id="click_print" type="button" class="btn btn-secondary buttons-print" style="color:#fff;"><i class="dripicons-print"></i> Print</a>

                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-6" style="text-align: right;">
                </div>
                <div class="col-md-12">
                    <br>
                    <br>
                </div>
                <div class="col-md-12" id="table_print">
                    <table class="table table-bordered">
                        <thead style=" background-color: #ffffff;">
                            <tr class="">
                                <th class="text-center" colspan="5">
                                    <img src="{{asset('image/2023-02-12 nrb-e1672919570541-300x273.png')}}" style="width: 140px" alt="">
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered">
                            <tr>
                                <th> Garments Name:</th>
                                <td style="text-align: center;">{{$show->garments->name ?? ''}}</td>
                                <th> Name:</th>
                                <td style="text-align: center;">{{$show->name ?? ''}}</td>

                            </tr>
                            <tr>
                                <th>Email :</th>
                                <td style="text-align: center;">{{ $show->email ?? ''}}</td>
                                 <th>Phone:</th>
                                 <td style="text-align: center;">{{$show->phone ?? ''}}</td>

                            </tr>
                            <tr>
                                <th>Designation:</th>
                                <td style="text-align: center;">{{$show->designation ?? ''}}</td>

                                <th>NID No:</th>
                                <td style="text-align: center;">{{$show->nid_no ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Blood Group:</th>
                                <td style="text-align: center;">{{$show->blood_group ?? ''}}</td>
                                <th>Gender</th>
                                <td style="text-align: center;">
                                    @if($show->gender == 1)
                                        Male
                                        @else
                                        Female
                                    @endif
                                </td>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{asset('public/js/PrintJs.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
        $('#click_print').click(function() {
            $('#table_print').printThis();
        })

    </script>
</body>
</html>
@endsection
