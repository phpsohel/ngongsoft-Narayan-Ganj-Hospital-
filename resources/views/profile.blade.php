@extends('layout.main')
@section('title', 'Profile')
<!-- Theme style -->
@section('content')
<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card card-danger">
            <div class="card-body">
                <h2 class="text-center">Change Password</h2>
                <div class="form-group">
                    <label>Old Password:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-signature"></i></span>
                        </div>
                        <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                    </div>
                </div>
                <div class="form-group">
                    <label>New Password:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa-solid fa-signature"></i></span>
                        </div>
                        <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask>
                    </div>
                </div>
                <div class="form-group">
                    <label>Confirm Password:</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-phone"></i></span>
                        </div>
                        <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask>
                    </div>
                </div>
                <div class="form-group">
                    <label></label>
                    <div class="input-group">
                        <a href="" class="btn btn-primary">Update Password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>

    <!-- /.col (right) -->
</div>

@endsection
