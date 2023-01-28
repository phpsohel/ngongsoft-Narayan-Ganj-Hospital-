@if(!empty($searchs))
<div class="table-responsive">
    <table class="table table-bordered table-striped text-nowrap">
        <thead class="m-4">
            <tr>
                <th class="text-center" colspan="4">
                    <h4><b>Member Report</b></h4>
                </th>
            </tr>
        </thead>
    </table>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
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
                        @foreach( $searchs as $member)
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
                </table>
            </div>
        </div>
    </div>
</div>
@else
<div class="text-danger">Sorry Your Given Number is Not Found!</div>
@endif
<script>
$('#example1').DataTable( {

responsive: true
} );</script>

