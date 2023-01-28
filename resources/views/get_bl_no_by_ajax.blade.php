@if(!empty($item))

<div class="table-responsive">
    <table id="table_id" class="table table-bordered table-striped text-nowrap">
        <thead class="m-4">
            <tr>
                <th class="text-center" colspan="4">
                    <h4><b>Shipping Information</b></h4>
                </th>
            </tr>
            <tr>
                <th scope="col"> <b> BL Number</b></th>
                <th scope="col">{{$item->bl_number ?? ''}}</th>
                <th><b>Container No</b></th>
                <th>{{$item->container_no ?? ''}}</th>
            </tr>
            <tr>
                <th> <b>C.Size</b></th>
                <th>{{$item->c_size ?? ''}}</th>
                <th><b>Seal No</b></th>
                <th>{{$item->seal_no ?? ''}}</th>
            </tr>
            <tr>
                <th> <b> Vessel Name </b></th>
                <th>{{$item->vessel_name ?? ''}}</th>
                <th><b>Voyage</b></th>
                <th>{{$item->voyage ?? ''}}</th>
            </tr>
            <tr>
                <th> <b> Place of Receipt </b></th>
                <th>{{$item->place_receipt ?? ''}}</th>
                <th><b>Place of Loading</b></th>
                <th>{{$item->place_loading ?? ''}}</th>
            </tr>
            <tr>
                <th> <b> Port of Discharge </b></th>
                <th>{{$item->port_discharge ?? ''}}</th>
                <th><b>Final Destination </b></th>
                <th>{{$item->final_destination ?? ''}}</th>
            </tr>
            <tr>
                <th> <b> Comidity </b></th>
                <th>{{$item->comidity ?? ''}}</th>
                <th><b>ETD </b></th>
                <th>{{$item->etd ?? ''}}</th>
            </tr>
            <tr>
                <th><b>ETA</b></th>
                <th>{{$item->eta ?? ''}}</th>
                <th> <b> Shipped on Board </b></th>
                <th>{{$item->shipped_board ?? ''}}</th>
            </tr>
            <tr>
                <th> <b> BL Type </b></th>
                <th>{{$item->bl_type ?? ''}}</th>
                <th><b></b></th>
                <th></th>
            </tr>
            <tr>
                <th class="text-center" colspan="4">
                    <h4><b>Latest Tracking Update</b></h4>
                </th>
            </tr>
            <tr>
                <th><b>Issue Date </b></th>
                <th>{{$item->issue_date ?? ''}}</th>
                <th> <b> Location </b></th>
                <th>{{$item->location ?? ''}}</th>
            </tr>
            <tr>
                <th> <b> Status </b></th>
                <th>{{$item->status ?? ''}}</th>
                <th> <b> ETA </b></th>
                <th>{{$item->eta ?? ''}}</th>
            </tr>
        </thead>
    </table>
</div>
@else
{{-- <div class="text-danger">Sorry Your Given Number is Not Found!</div> --}}
@endif
