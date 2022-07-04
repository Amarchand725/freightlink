@foreach($models as $key=>$model)
    <tr id="id-{{ $model->slug }}">
        <td>{{  $models->firstItem()+$key }}.</td>
        <td>
            @if($model->white_bg_logo)
                <img src="{{ asset('public/admin/images/networks/'.$model->white_bg_logo) }}" alt="" style="width:60%;">
            @else
                <img src="{{ asset('public/admin/images/partners/no-photo1.jpg') }}" style="width:60%;">
            @endif
        </td>
        <td>
            <span class="dot" style="background-color:{{ $model->color }}"></span>
        </td>
        <td>{!! $model->title??'N/A' !!}</td>
        <td>{!! \Illuminate\Support\Str::limit($model->description,60) !!}</td>
        <td>
            @if($model->status)
                <span class="label label-success">Active</span>
            @else
                <span class="label label-danger">In-Active</span>
            @endif
        </td>
        <td>{{ date('d, F-Y h:i a', strtotime($model->created_at)) }}</td>
        <td width="250px">
            <a href="{{route('network.edit', $model->id)}}" data-toggle="tooltip" data-placement="top" title="Edit Network" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
            {{-- <a href="{{route('partner.show', $model->slug)}}" data-toggle="tooltip" data-placement="top" title="Show Partner" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Show</a> --}}
            <button class="btn btn-danger btn-sm delete" data-toggle="tooltip" data-placement="top" title="Delete Network" data-slug="{{ $model->slug }}" data-del-url="{{ route('network.destroy', $model->slug) }}"><i class="fa fa-trash"></i> Delete</button>
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