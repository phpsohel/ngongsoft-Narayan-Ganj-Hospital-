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

                    <a id="click_print" type="button" class="btn btn-default btn-sm ml-3"><i class="dripicons-print"></i> Print</a>
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
                                    <img src="{{asset('member_image/'. $show->photo ?? '')}}" style="height: 140px; width: 140px" alt="{{$show->member_name ?? ''}} ">
                                    <h4 style="margin-top:10px;">({{ $show->member_name ?? '' }})</h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-bordered">
                            <tr>
                                <th>Member Name:</th>
                                <td style="text-align: center;">
                                    <h4 class="">{{$show->member_name ?? ''}}</h4>
                                </td>
                                <th>Father Name :</th>
                                <td style="text-align: center;">{{ $show->father_name ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Mother's Name:</th>
                                <td style="text-align: center;">{{$show->mother_name ?? ''}}</td>
                                <th>Address:</th>
                                <td style="text-align: center;">{{$show->address ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Permanent Address:</th>
                                <td style="text-align: center;">{{$show->permanent_address ?? ''}}</td>
                                <th>Date of Birth:</th>
                                <td style="text-align: center;">{{ $show->birth ?? ''}}</td>

                            </tr>
                            <tr>
                                <th>Education Qualification:</th>
                                <td style="text-align: center;">{{ $show->education ?? '' }}</td>
                                <th>Company Name:</th>
                                <td style="text-align: center;">{{ $show->company_name ?? '' }}</td>
                            </tr>
                            <tr>
                                <th>Designation:</th>
                                <td style="text-align: center;">{{ $show->designation ?? '' }}</td>

                                <th>Company Address :</th>

                                <td style="text-align: center;">{{ $show->company_address ?? '' }}</td>

                            </tr>
                            <tr>
                                <th>Phone:</th>
                                <td style="text-align: center;">{{ $show->phone ?? ''}}</td>
                                <th>Email:</th>
                                <td style="text-align: center;">{{ $show->email ?? ''}}</td>
                            </tr>
                            <tr>
                                <th>Blood:</th>
                                <td style="text-align: center;">{{ $show->blood ?? '' }}</td>
                                <th>NID:</th>
                                <td style="text-align: center;">{{ $show->nid }}</td>
                            </tr>
                            <tr>
                                <th>Juridiction of Factory:</th>
                                <td style="text-align: center;">
                                    @if($show->cbc_type == '1')
                                    <p class="text-primary"> CBC -N</p>
                                    @elseif($show->cbc_type == '2')
                                    <p class="text-primary"> CBC -S</p>
                                    @elseif($show->cbc_type == '3')

                                    <p class="text-primary"> CBC -E</p>

                                    @elseif($show->cbc_type == '4')
                                    <p class="text-primary"> CBC -W</p>
                                    @endif
                                </td>
                                <th>Payment Status:</th>

                                <td style="text-align: center;">
                                    @if($show->payment_status == '1')
                                    <p class="text-primary"> Paid</p>
                                    @else
                                    <p class="text-danger">Unpaid</p>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Application Status:</th>
                                <td style="text-align: center;">
                                    @if($show->payment_status == '1')
                                    <p class="text-success"> Approve</p>
                                    @elseif($show->payment_status == '2')
                                    <p class="text-primary">Pending</p>
                                    @else
                                    <p class="text-danger">Reject</p>
                                    @endif
                                </td>
                                <th> </th>
                                <td style="text-align: center;"></td>
                            </tr>
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
