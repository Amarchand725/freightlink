@foreach($models as $key=>$model)
    <tr id="id-{{ $model->id }}">
        <td>{{  $models->firstItem()+$key }}.</td>
        <td style="text-align: justify;">{!! $model->announcement !!}</td>
        <td>{{ date('d, F-Y', strtotime($model->date)) }}</td>
        <td>
            @if($model->status)
                <span class="label label-success">Active</span>
            @else 
                <span class="label label-danger">In-Active</span>
            @endif
        </td>
        <td width="250px">
            <a href="{{route('announcement.edit', $model->id)}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Announcement" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
            <button class="btn btn-danger btn-sm delete" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete Announcement" data-slug="{{ $model->id }}" data-del-url="{{ route('announcement.destroy', $model->id) }}"><i class="fa fa-trash"></i> Delete</button>
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