@foreach($models as $key=>$model)
    <tr id="id-{{ $model->id }}">
        <td>{{  $models->firstItem()+$key }}.</td>
        <td>{!! $model->question !!}</td>
        <td>{!! $model->answer !!}</td>
        <td>
            @if($model->status)
                <span class="label label-success">Active</span>
            @else
                <span class="label label-danger">In-Active</span>
            @endif
        </td>
        <td>{{ date('d, F-Y h:i a', strtotime($model->created_at)) }}</td>
        <td width="250px">
            <a href="{{route('faq.edit', $model->id)}}" data-toggle="tooltip" data-placement="top" title="Edit FAQ" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
            {{-- <a href="{{route('partner.show', $model->slug)}}" data-toggle="tooltip" data-placement="top" title="Show Partner" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Show</a> --}}
            <button class="btn btn-danger btn-sm delete" data-toggle="tooltip" data-placement="top" title="Delete FAQ" data-slug="{{ $model->id }}" data-del-url="{{ route('faq.destroy', $model->id) }}"><i class="fa fa-trash"></i> Delete</button>
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