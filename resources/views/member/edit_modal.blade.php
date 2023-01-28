<div class="modal fade" id="edit_member{{$garment->id}}">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Edit Member</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-danger">The field labels marked with * are required input fields.</p>
                <form action="{{route('garments.update', $garment->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name<span style="color:red;"> *</span></label>
                                    <input type="text" name="name" value="{{ $garment->name ?? ''}}" required class="form-control" id="exampleInputEmail1">

                                    @if($errors->has('name'))
                                    <span style="color:red;">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email<span style="color:red;"> *</span></label>
                                    <input type="email" name="email" value="{{ $garment->email ?? ''}}" required class="form-control" id="exampleInputPassword1">



                                    @if($errors->has('email'))
                                    <span style="color:red;">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone<span style="color:red;"> *</span></label>
                                    <input type="text" name="phone" value="{{ $garment->phone ?? ''}}" required class="form-control" id="exampleInputPassword1">



                                    @if($errors->has('phone'))
                                    <span style="color:red;">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Licence No<span style="color:red;"> *</span></label>
                                    <input type="text" name="licence_no" value="{{ $garment->licence_no ?? ''}}" required class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('licence_no'))
                                    <span style="color:red;">{{ $errors->first('licence_no') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address<span style="color:red;"> *</span></label>
                                    <input type="text" name="address" value="{{ $garment->address ?? ''}}" required value="{{ old('address') }}" class="form-control" id="exampleInputEmail1" placeholder="">



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
