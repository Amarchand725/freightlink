@foreach($models as $key=>$model)
    <tr id="id-{{ $model->slug }}">
        <td>{{  $models->firstItem()+$key }}.</td>
        <td>
            @if($model->image)
                <img class="rounded-circle" src="{{ asset('public/admin/images/partners/'.$model->image) }}" alt="" style="width:50px; height:50px">
            @else
                <img src="{{ asset('public/admin/images/partners/no-photo1.jpg') }}" style="width:50px;">
            @endif
        </td>
        <td>{!! $model->name??'N/A' !!}</td>
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
            <a href="{{route('partner.edit', $model->slug)}}" data-toggle="tooltip" data-placement="top" title="Edit Partner" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
            {{-- <a href="{{route('partner.show', $model->slug)}}" data-toggle="tooltip" data-placement="top" title="Show Partner" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Show</a> --}}
            <button class="btn btn-danger btn-sm delete" data-toggle="tooltip" data-placement="top" title="Delete Partner" data-slug="{{ $model->slug }}" data-del-url="{{ route('partner.destroy', $model->slug) }}"><i class="fa fa-trash"></i> Delete</button>
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