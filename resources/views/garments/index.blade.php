@extends('layout.main')
@section('content')
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('success') }}
    </div>
    @endif
    @if(session()->has('danger'))
    <div class="alert alert-danger alert-dismissible text-center">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('danger') }}
    </div>
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
                                <form action="{{route('garments.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name<span style="color:red;"> *</span></label>
                                                    <input type="text" name="name" required class="form-control" id="exampleInputEmail1">

                                                    @if($errors->has('name'))
                                                    <span style="color:red;">{{ $errors->first('name') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Email<span style="color:red;"> *</span></label>
                                                    <input type="email" name="email" required class="form-control" id="exampleInputPassword1">

                                                    @if($errors->has('email'))
                                                    <span style="color:red;">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Phone<span style="color:red;"> *</span></label>
                                                    <input type="text" name="phone" required class="form-control" id="exampleInputPassword1">

                                                    @if($errors->has('phone'))
                                                    <span style="color:red;">{{ $errors->first('phone') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Licence No<span style="color:red;"> *</span></label>
                                                    <input type="text" name="licence_no" required class="form-control" id="exampleInputPassword1">
                                                    @if($errors->has('licence_no'))
                                                    <span style="color:red;">{{ $errors->first('licence_no') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Address<span style="color:red;"> *</span></label>
                                                    <input type="text" name="address" required value="{{ old('address') }}" class="form-control" id="exampleInputEmail1" placeholder="">

                                                    @if($errors->has('address'))
                                                    <span style="color:red;">{{ $errors->first('address') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            {{-- <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Upload Your Photo</label>
                                                    <input  type="file" name="photo" class="form-control" id="exampleInputPassword1">
                                                </div>
                                            </div> --}}
                                            <div class="col-md-6"></div>
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

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Sl</th>
                                            {{-- <th>Photo</th> --}}

                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Hotline</th>
                                            <th>Address</th>
                                            <th>licence No</th>

                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @php
                                    $i = 0;
                                    @endphp
                                    <tbody>
                                        @foreach( $garments as $garment)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            {{-- <td><img src="{{ asset('/public/image/2023-01-08 back.jpg') }}" alt="" style="width:150px"></td> --}}

                                            <td>{{ $garment->name ?? ''}}</td>
                                            <td>{{ $garment->email ?? ''}}</td>
                                            <td>{{ $garment->phone ?? ''}}</td>
                                            <td>+2295848484</td>
                                            <td>{{ $garment->address ?? ''}}</td>
                                            <td>{{ $garment->licence_no ?? ''}}</td>
                                            <td>
                                                @if($garment->status == '1')
                                                    <a href="" class="text-success">Active</a>
                                                @else
                                                <a href="" class="text-danger">Inactive</a>
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="open-EditUnitDialog btn btn-link" data-toggle="modal" data-target="#edit_garments{{ $garment->id }}"><i class="fa-solid fa-pen-to-square" style="color:#7c5cc4"></i></button>
                                                <button type="button" class="open-EditUnitDialog btn btn-link"  data-toggle="modal" data-target="">
                                                    <a href="" class="text-danger"><i class="fa-solid fa-eye" style="color:#7c5cc4"></i>
                                                    </a>
                                                </button>
                                                <button type="button" class="open-EditUnitDialog btn btn-link" data-toggle="modal">
                                                    <a id="delete" href="{{ route('garments.delete', $garment->id) }}" class="text-danger"><i class="fa-solid fa-trash-can"></i>
                                                    </a>
                                                </button>

                                            </td>
                                        </tr>
                                        @include('garments.edit_modal')
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
