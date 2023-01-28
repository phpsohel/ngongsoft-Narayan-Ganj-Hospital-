
@extends('layout.main')
@section('title', 'SMS')
@section('content')
<div class="row p-4">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <div class="card card-danger">
            <div class="card-body">
               <form action="{{ route('sms.send')}}" method="post">
                @csrf
                 <div class="form-group">
                     <label for="exampleInputEmail1">Garments Name</label>
                     <select name="garments_id" id="" class="form-control">
                        <option value="">All </option>
                         @foreach ($garments as $garment )
                         <option value="{{ $garment->id }}">{{ $garment->name ??'' }}</option>
                         @endforeach
                     </select>
                 </div>
                 <div class="form-group">
                     <label for="exampleInputEmail1">Message</label>
                     <textarea name="message" id="" cols="20" rows="5" class="form-control"></textarea>
                 </div>
                 <div class="form-group">
                     <label></label>
                     <div class="input-group">
                         <button type="submit" class="btn btn-primary">Send</button>
                     </div>
                 </div>

               </form>
            </div>
        </div>
    </div>
    <div class="col-md-2"></div>

    <!-- /.col (right) -->
</div>

@endsection

