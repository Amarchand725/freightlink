@foreach($models as $key=>$model)
    <tr id="id-{{ $model->slug }}">
        <td>{{  $models->firstItem()+$key }}.</td>
        <td>
            @if($model->logo)
                <img class="rounded-circle" src="{{ asset('public/admin/images/companies/'.$model->logo) }}" alt="" style="width:50px; height:50px">
            @else
                <img src="{{ asset('public/admin/images/partners/no-photo1.jpg') }}" style="width:50px;">
            @endif
        </td>
        <td>{!! $model->name??'N/A' !!}</td>
        <td>{!! $model->country??'N/A' !!}</td>
        <td>{!! date('d, M-Y', strtotime($model->expire_date)) !!}</td>
        <td>
            @foreach ($model->hasCompanyNetworks as $company_network)
                <span class="hex2" style="color: {{ $company_network->hasNetwork->color }}; display: flex;" />
            @endforeach
        </td>
        <td width="250px">
            <a href="{{route('company.show', $model->slug)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Show Company" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Show</a>
            <button class="btn btn-danger btn-sm delete" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Company" data-slug="{{ $model->slug }}" data-del-url="{{ route('company.destroy', $model->slug) }}"><i class="fa fa-trash"></i> Delete</button>
        </td>
    </tr>
    @endforeach
    <tr>
    <td colspan="8">
        Displying {{$models->firstItem()}} to {{$models->lastItem()}} of {{$models->total()}} records
        <div class="d-flex justify-content-center">
            {!! $models->links('pagination::bootstrap-4') !!}
        </div>
    </td>
</tr>