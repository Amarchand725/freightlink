@foreach($models as $key=>$model)
    <tr id="id-{{ $model->id }}">
        <td>{{  $models->firstItem()+$key }}.</td>
        <td>{!! $model->name??'N/A' !!}</td>
        <td>{!! $model->company_name??'N/A' !!}</td>
        <td>{!! $model->email??'N/A' !!}</td>
        <td>{!! $model->country??'N/A' !!}</td>
        <td>{!! $model->city??'N/A' !!}</td>
        <td>
            @if($model->status)
                <span class="label label-success">Active</span>
            @else
                <span class="label label-danger">In-Active</span>
            @endif
        </td>
        <td>{{ date('d, F-Y h:i a', strtotime($model->created_at)) }}</td>
        <td width="250px">
            <a href="{{route('user.show', $model->id)}}" data-toggle="tooltip" data-placement="top" title="Show Company" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Show</a>
            <button class="btn btn-danger btn-sm delete" data-toggle="tooltip" data-placement="top" title="Delete Company" data-slug="{{ $model->id }}" data-del-url="{{ route('user.destroy', $model->id) }}"><i class="fa fa-trash"></i> Delete</button>
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