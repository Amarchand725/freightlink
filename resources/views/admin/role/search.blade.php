@foreach($roles as $key=>$model)
    <tr id="id-{{ $model->id }}">
        <td>{{  $roles->firstItem()+$key }}.</td>
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
            <a href="{{route('role.edit', $model->id)}}" data-toggle="tooltip" data-placement="top" title="Edit Partner" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
            <button class="btn btn-danger btn-sm delete" data-toggle="tooltip" data-placement="top" title="Delete Partner" data-slug="{{ $model->id }}" data-del-url="{{ route('role.destroy', $model->id) }}"><i class="fa fa-trash"></i> Delete</button>
        </td>
    </tr>
@endforeach
<tr>
    <td colspan="8">
        Displying {{$roles->firstItem()}} to {{$roles->lastItem()}} of {{$roles->total()}} records
        <div class="d-flex justify-content-center">
            {!! $roles->links('pagination::bootstrap-4') !!}
        </div>
    </td>
</tr>