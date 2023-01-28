@extends('layout.main')

@section('content')
@if(Session::has('success'))
toastr.success("{{ Session('success')}}")
@endif()
<style>
    .dt-buttons.btn-group.flex-wrap button {
        margin: 5px;
        background: #209dc3;
    }

</style>
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4> Permission</h4>
                    </div>
                    <form action="{{ route('role.permission-store', $role->id) }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered permission-table">
                                    <thead>
                                        <tr>
                                            <th colspan="5" class="text-center"> Permission ({{ $role->name ?? ''}})</th>
                                        </tr>
                                        <tr>
                                            <th colspan=""></th>
                                            <th colspan="">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="select_all">
                                                    <label for="select_all">All</label>
                                                </div>
                                            </th>
                                            <th>
                                                @foreach ($permissions as $permission)
                                        <tr>
                                            <td></td>
                                            <td class="">
                                                <div class="icheckbox_square-blue checked" aria-checked="false" aria-disabled="false">
                                                    <div class="checkbox">
                                                        <input type="checkbox" value="{{ $permission->id ?? '' }}" id="" name="permission_name[]" @foreach ($rolePermissions as $rolePermission ) {{  $permission->id == $rolePermission->id ? 'Checked' : '' }} @endforeach />
                                                        <label for="products-index">{{ $permission->name ?? '' }}</label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
