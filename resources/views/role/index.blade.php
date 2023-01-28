@extends('layout.main')
@section('content')
@if(Session::has('success'))
toastr.success("{{ Session('success')}}")
@endif()
<section class="content">
    <div class="container-fluid">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add-role"><i class="fa-regular fa-plus"></i> Add Role</button>
                    <br>
                    <br>
                    <h1>All Role </h1>
                </div>
                <div class="col-sm-6" style=""></div>
            </div>
        </div>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                    $i = 0;
                                @endphp
                                <tbody>
                                    @foreach( $roles as $role)
                                    <tr>
                                        <td>{{ ++$i}}</td>
                                        <td>{{ $role->name ?? ''}}</td>
                                        <td>{{ $role->description ?? ''}}</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

                                                    <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target="#edit-role{{ $role->id }}" style="color: #7c5cc4"><i class="fa-solid fa-pen-to-square"></i> Edit</button>

                                                    <button type="button" class="btn btn-primary dropdown-item" data-toggle="modal" data-target=""><a href="{{ route('role.permission', $role->id) }}" style="color: #7c5cc4"><i class="fa-brands fa-openid"></i> Change Permission</a></button>

                                                    <a href="{{ route('role.destroy',$role->id) }}" id="delete" class="btn btn-primary dropdown-item" style="color: #7c5cc4"><i class="fa-solid fa-trash"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @include('role.edit_modal')
                                    @endforeach
                                </tbody>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
{{-- Add Modal --}}
{{-- ============================ --}}
         <div class="col-md-12">
             <div class="modal fade" id="add-role">
                 <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h4 class="modal-title text-center">Add Role</h4>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         <div class="modal-body">
                             <p class="text-danger">The field labels marked with * are required input fields.</p>
                             <form action="{{route('role.store')}}" method="POST">
                                 @csrf
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">Name<span style="color:red;"> *</span></label>
                                                 <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                                                 @if($errors->has('name'))
                                                 <span style="color:red;">{{ $errors->first('name') }}</span>
                                                 @endif
                                             </div>
                                         </div>
                                         <div class="col-md-12">
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">Description</label>
                                                 <textarea name="description" id="" cols="30" rows="5" class="form-control"></textarea>
                                             </div>
                                         </div>
                                         <div class="card-footer">
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
    </div>
</section>
@endsection
