<div class="modal fade" id="edit_member{{$worker->id}}">
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
                <form action="{{route('garments.update', $worker->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Garments Name<span style="color:red;"> *</span></label>
                                    <select name="garment_id" id="" class="form-control">
                                        @foreach($garments as $key => $garment)
                                        <option value="{{ $garment->id }}" {{ $garment->id == $worker->garment_id ? 'Selected': ''}}>{{ $garment->name ?? '' }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Name<span style="color:red;"> *</span></label>
                                    <input type="text" name="name" required value="{{ $worker->name ?? '' }}" class="form-control" id="exampleInputEmail1">


                                    @if($errors->has('name'))
                                    <span style="color:red;">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Email<span style="color:red;"> *</span></label>
                                    <input type="email" name="email" required value="{{ $worker->name ?? '' }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('email'))
                                    <span style="color:red;">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Phone<span style="color:red;"> *</span></label>
                                    <input type="text" name="phone" required value="{{ $worker->name ?? '' }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('phone'))
                                    <span style="color:red;">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Deesignation<span style="color:red;"> *</span></label>

                                    <input type="text" name="designation" required value="{{ $worker->name ?? '' }}" class="form-control" id="exampleInputPassword1">


                                    @if($errors->has('designation'))
                                    <span style="color:red;">{{ $errors->first('designation') }}</span>

                                    @endif
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NID No<span style="color:red;"> *</span></label>
                                    <input type="text" name="nid_no" value="{{ $worker->name ?? '' }}" class="form-control" id="exampleInputEmail1" placeholder="">



                                    @if($errors->has('address'))
                                    <span style="color:red;">{{ $errors->first('address') }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Gender</label>
                                    <select name="gender" id="" class="form-control">
                                        <option value="1" selected>Male</option>

                                        <option value="2" selected>Female</option>

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
