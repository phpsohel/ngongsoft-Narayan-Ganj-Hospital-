<div class="modal fade" id="sms_send">

    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Send SMS</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- <p class="text-danger">The field labels marked with * are required input fields.</p> --}}
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1">Message</label>
                                <textarea name="" id="" cols="20" rows="5" class="form-control"></textarea>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="card-footer">
                                <label for=""></label>
                                <button type="submit" class="btn btn-primary">Send Message</button>
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
