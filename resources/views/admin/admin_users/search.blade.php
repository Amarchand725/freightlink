@foreach ($models as $key=>$model)
    <h2 class="accordion-header">
        <button class="accordion-button collapsed" data-bs-target="#faqsTwo-{{ $model->id }}" type="button" data-bs-toggle="collapse">
            <h4 class="user_txt">{{  $models->firstItem()+$key }}. {{ $model->name }} </h4>
        </button>
    </h2>
    <div id="faqsTwo-{{ $model->id }}" class="accordion-collapse collapse" data-bs-parent="#faq-group-2">
        <div class="accordion-body">
            <form class="form-inline" action="{{ route('admin.users.update', $model->id) }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-lg-3" style="position: relative;">
                        <div class="file-drop-area" >
                            <img id="preview" src="{{ asset('public/admin/images/users') }}/{{ $model->image }}" alt="folder-icon"
                                class="img-fluid">
                            <input id="img_input" class="file-input" name="image" type="file" accept="image/*" accept="application/pdf">
                            <span style="color:red">{{ $errors->first('image') }}</span>
                        </div>
                        <div class=" row">
                            <div class="col-8 m-lg-4">
                                <button type="button" class="btn btn-primary buttons_green">Upload Icon</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 faq_inpt">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="colFormLabelSm"
                                        class="col-sm-4 col-form-label col-form-label-sm">Full Name:</label>
                                    <div class="col-sm-8">
                                        <input type="name"
                                            class="form-control form-control-sm"
                                            id="colFormLabelSm"
                                            name="last_name"
                                            value="{{ $model->last_name }}"
                                            placeholder="Michael Sephton-Poultney">
                                        <span style="color: red">{{ $errors->first('last_name') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="colFormLabelSm"
                                        class="col-sm-3 col-form-label col-form-label-sm">Username:
                                        </label>
                                    <div class="col-sm-9">
                                        <input type="text"
                                            class="form-control form-control-sm"
                                            id="colFormLabelSm"
                                            name="name"
                                            value="{{ $model->name }}"
                                            placeholder="Enter user name">
                                        <span style="color: red">{{ $errors->first('name') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">
                                        Title:
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control form-control-sm" 
                                            id="colFormLabelSm"
                                            name="title"
                                            value="{{ $model->title }}"
                                            placeholder="Managing Director">
                                        <span style="color: red">{{ $errors->first('title') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">password:
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="password" class="form-control form-control-sm" 
                                            id="colFormLabelSm"
                                            name="password"
                                            placeholder="gdy342t3yfgdi2">
                                        <span style="color: red">{{ $errors->first('password') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">Email:
                                    </label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control form-control-sm" 
                                            id="colFormLabelSm"
                                            name="email"
                                            value="{{ $model->email }}"
                                            placeholder="michael@freightlink.com">
                                        <span style="color: red">{{ $errors->first('email') }}</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">
                                        Mobile:
                                    </label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control form-control-sm" 
                                            id="colFormLabelSm"
                                            name="mobile"
                                            value="{{ $model->phone }}"
                                            placeholder="13324532">
                                        <span style="color: red">{{ $errors->first('mobile') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="colFormLabelSm" class="col-sm-4 col-form-label col-form-label-sm">
                                        Status:
                                    </label>
                                    <div class="col-sm-8">
                                        <select name="status" id="" class="form-control">
                                            <option value="1" {{ $model->status==1?'selected':'' }}>Active</option>
                                            <option value="0" {{ $model->status==0?'selected':'' }}>In-Active</option>
                                        </select>
                                        <span style="color: red">{{ $errors->first('mobile') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3 more">
                                    <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm">Linked Offices:
                                    </label>
                                    <div class="col-sm-6 link_a">
                                        <input type="text" name="offices[]" class="form-control" placeholder="Enter office">
                                    </div>
                                    <div class="col-sm-1 link_a">
                                        <button type="button" class="btn btn-success buttons_green add-more">Add</button>
                                    </div>
                                </div>
                                @if($model->offices)
                                    <?php $offices = json_decode($model->offices) ?>
                                    @foreach ($offices as $office)
                                        <div class="row mb-3 added-more">
                                            <label for="colFormLabelSm" class="col-sm-3 col-form-label col-form-label-sm"></label>
                                            <div class="col-sm-6 link_a">
                                                <input type="text" name="offices[]" value="{{ $office }}" class="form-control" placeholder="Enter office">
                                            </div>
                                            <div class="col-sm-1 link_a">
                                                <button type="button" class="btn btn-danger remove">Remove</button>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                            <div class="col-md-6"> </div>
                            <div class="col-md-12 d-flex justify-content-end">
                                <button class="btn btn-primary buttons_green ">
                                    Save Changes
                                </button>
                            </div>
                        </div>  
                    </div>
                </div>
            </form>
        </div>
    </div>
@endforeach
<div class="col-md-12 d-flex justify-content-end">
    Displying {{$models->firstItem()}} to {{$models->lastItem()}} of {{$models->total()}} records
    <div class="d-flex justify-content-center">
        {!! $models->links('pagination::bootstrap-4') !!}
    </div>
</div>