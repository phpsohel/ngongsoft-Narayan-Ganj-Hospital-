@extends('layout.main')
@section('content')
    {{-- Start Message Alert--}}
        @if(session()->has('success'))
            <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('success') }}</div>
        @endif
    {{-- End Message Alert--}}
    <section class="content">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create_member"><i class="fa-regular fa-plus"></i> Add Worker</button>
                        <br>
                        <br>
                        <h1>All Worker </h1>
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
                                <h4 class="modal-title text-center">Add Worker</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p class="text-danger">The field labels marked with * are required input fields.</p>
                                <form action="{{ route('workers.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Garments Name</label>
                                                    <select name="garment_id" id="" class="form-control">
                                                        @foreach($garments as $key => $garment)
                                                            <option value="{{ $garment->id }}">{{ $garment->name ?? '' }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
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
                                                    <label for="exampleInputPassword1">Designation<span style="color:red;"> *</span></label>

                                                    <input type="text" name="designation" required class="form-control" id="exampleInputPassword1">

                                                    @if($errors->has('designation'))
                                                    <span style="color:red;">{{ $errors->first('designation') }}</span>

                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">NID No<span style="color:red;"> *</span></label>
                                                    <input type="text" name="nid_no" class="form-control" id="exampleInputEmail1" placeholder="">


                                                    @if($errors->has('address'))
                                                    <span style="color:red;">{{ $errors->first('address') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Gender</label>
                                                    <select name="gender" id="" class="form-control">
                                                        <option value="1">Male</option>
                                                        <option value="2">Female</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Blood Group</label>
                                                    <input type="text" name="blood_group" class="form-control" id="exampleInputEmail1">

                                                </div>
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
                                            <th>Garments Name</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Designation</th>
                                            <th>NID No</th>
                                            <th>Blood Group</th>
                                            <th>Gender</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $i = 0;
                                    @endphp
                                    <tbody>
                                        @foreach( $workers as $worker)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{ $worker->garments->name ?? ''}}</td>
                                            <td>{{ $worker->name ?? ''}}</td>
                                            <td>{{ $worker->email ?? ''}}</td>
                                            <td>{{ $worker->phone ?? ''}}</td>
                                            <td>{{ $worker->designation ?? ''}}</td>
                                            <td>{{ $worker->nid_no ?? ''}}</td>
                                            <td>{{ $worker->blood_group ?? ''}}</td>
                                            <td>
                                                @if($worker->gender == '1')
                                                    <a href="" class="text-success">Male</a>
                                                @else
                                                <a href="" class="text-danger">Female</a>
                                                @endif
                                            </td>
                                            <td>
                                                <button type="button" class="open-EditUnitDialog btn btn-link" data-toggle="modal" data-target="#edit_worker{{$worker->id}}"><i class="fa-solid fa-pen-to-square" style="color:#7c5cc4"></i></button>

                                                <button type="button" class="open-EditUnitDialog btn btn-link"  data-toggle="modal" data-target="">
                                                    <a href="" class="text-danger"><i class="fa-solid fa-eye" style="color:#7c5cc4"></i>
                                                    </a>
                                                </button>
                                                <button type="button" class="open-EditUnitDialog btn btn-link" data-toggle="modal">
                                                    <a id="delete" href="{{ route('workers.delete', $worker->id) }}" class="text-danger"><i class="fa-solid fa-trash-can"></i>
                                                    </a>
                                                </button>
                                            </td>
                                        </tr>
                                        @include('worker.edit_modal')
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
