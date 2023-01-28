     
             <div class="modal fade" id="edit-role{{ $role->id }}">
                 <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                         <div class="modal-header">
                             <h4 class="modal-title text-center">Edit Role </h4>
                             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                             </button>
                         </div>
                         <div class="modal-body">
                             <p class="text-danger">The field labels marked with * are required input fields.</p>
                             <form action="{{ route('role.roleupdate', $role->id)}}" method="POST">
                                 @csrf
                                 <div class="card-body">
                                     <div class="row">
                                         <div class="col-md-12">
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">Name<span style="color:red;"> *</span></label>
                                                 <input type="text" name="name" value="{{ $role->name ?? '' }}" class="form-control" id="exampleInputEmail1">
                                                 @if($errors->has('name'))
                                                 <span style="color:red;">{{ $errors->first('name') }}</span>
                                                 @endif
                                             </div>
                                         </div>
                                         <div class="col-md-12">
                                             <div class="form-group">
                                                 <label for="exampleInputEmail1">Description</label>
                                                 <textarea name="description" value="" id="" cols="30" rows="5" class="form-control">{{ $role->description ?? '' }}</textarea>
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
     
