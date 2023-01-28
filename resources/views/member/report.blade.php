@extends('layout.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="mt-4 p-4" style="">
                    <h1 class="text-center mb-4"> <b>Select Area</b> </h1>
                    <div class="input-group rounded  mb-4">
                        <select class="form-control  cbc_type " >
                            <option value="0" class="form-control">All</option>
                            <option value="1">CBC-N</option>
                            <option value="2">CBC-S</option>
                            <option value="3">CBC-E</option>
                            <option value="4">CBC-W</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-12">
                <div class="card" id="bl_table_append">
                    {{-- <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Sl</th>
                                <th>Photo </th>
                                <th>Name</th>
                                <th>Father's Name </th>
                                <th>Mother's Name</th>
                                <th>Address</th>
                                <th>Permanent Address</th>
                                <th>Date of Birth</th>
                                <th>Education</th>
                                <th>Company Name</th>
                                <th>Designation</th>
                                <th>Company Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Blood</th>
                                <th>NID</th>
                                <th>Juridiction of Factory</th>
                            </tr>
                        </thead>
                        @php
                        $i = 0;
                        @endphp
                        <tbody>
                            @foreach( $reports as $member)

                            <tr>
                                <td>{{ ++$i}}</td>
                                <td>
                                    <img src="{{ asset('member_image/'.$member->photo ??'') }}" alt="" width="100px;">
                                </td>
                                <td>{{ $member->member_name ?? ''}}</td>
                                <td>{{ $member->father_name ?? ''}}</td>
                                <td>{{ $member->mother_name ?? ''}}</td>
                                <td>{{ $member->address ?? ''}}</td>
                                <td>{{ $member->permanent_address ?? ''}}</td>
                                <td>{{ $member->birth ?? ''}}</td>
                                <td>{{ $member->education ?? ''}}</td>
                                <td>{{ $member->company_name ?? ''}}</td>
                                <td>{{ $member->designation ?? ''}}</td>
                                <td>{{ $member->company_address ?? ''}}</td>
                                <td>{{ $member->phone ?? ''}}</td>
                                <td>{{ $member->email ?? ''}}</td>
                                <td>{{ $member->blood ?? ''}}</td>
                                <td>{{ $member->nid ?? ''}}</td>
                                <td>
                                    @if($member->cbc_type == '1')
                                    <a href="" class="text-success"> CBC -N </a>
                                    @elseif($member->cbc_type == '2')
                                    <a href="" class="text-primary"> CBC -S </a>
                                    @elseif($member->cbc_type == '3')
                                    <a href="" class="text-info"> CBC -E </a>
                                    @elseif($member->cbc_type == '4')
                                    <a href="" class="text-danger"> CBC -W </a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> --}}

                </div>
            </div>
        </div>
    </div>
@endsection
    <!-- jQuery -->
    <script src="{{ asset('admin/auth/js/jquery/jquery.min.js')}}"></script>
    <!-- Toaster -->
    <script src="{{ asset('admin/toaster/js/toastr.min.js')}}"></script>

    <script>
        $(document).on('click', '.cbc_type', function() {
            var id = $(".cbc_type option:selected").val();
            console.log(id);
            $.ajax({
                type: 'get'
                , url: "{{ route('member.search.report') }}"
                , dataType: 'HTML'
                , data: {
                    id:id
                }
                , 'global': false
                , asyn: true
                , success: function(data) {
                    $("#bl_table_append").html(data)
                    console.log(data)
                }
                , error: function(response) {
                    console.log(response);
                }
            });
        });
    </script>
</body>
</html>
