@extends('layouts.admin.app')
@section('title', $page_title)

@section('content')
	<main id="main" class="main">
		<div class="search-bar search_bt">
			<div class="row" style="background: #FCFCFC;">
				<div class="col-lg-12 mrl_head">
					<div class="row py-2" style="background: #FCFCFC; ">
						<div class="col-lg-8 mrl_head">
							<h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/truck-logo.png') }}" alt="truck" class="IMG-FLUID"> &nbsp; {{ $page_title }} </h4>
						</div>
						<div class="col-lg-4 mt-2 brd_crmbs ">
							<nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
								aria-label="breadcrumb">
								<ol class="breadcrumb">
									<li class="breadcrumb-item active"><a href="#">7D</a></li>
									<li class="breadcrumb-item" aria-current="page">30D</li>
									<li class="breadcrumb-item" aria-current="page">6M</li>
									<li class="breadcrumb-item" aria-current="page">1Y</li>
									<li class="breadcrumb-item" aria-current="page">YTD</li>
									<li class="breadcrumb-item" aria-current="page">Clear</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="section dashboard" style="background: #FCFCFC;">
            <section class="section faq">
                <div class="container">
                    <div class="row" style="background: #FCFCFC;">
                        <div class="col-lg-12 mrl_head">
                            <div class="row " style="background: #FCFCFC; ">
                                <div class="col-lg-12 mrl_head">
                                    <form action="{{ route('announcement.update', $model->id) }}" method="post">
                                        @csrf
                                        @method('put')

                                        <div class="form-group">
                                            <label for="announcement">Announcement</label>
                                            <textarea class="form-control texteditor" name="announcement" id="exampleFormControlTextarea1" rows="8" placeholder="Add announcement">{{ $model->announcement }}</textarea>
                                            <span style="color: red">{{ $errors->first('announcement') }}</span>
                                        </div>
                                        <br />
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select name="status" id="status" class="form-control">
                                                <option value="1" {{ $model->status=='1'?'selected':'' }}>Active</option>
                                                <option value="0" {{ $model->status=='0'?'selected':'' }}>In-Active</option>
                                            </select>
                                            <span style="color: red">{{ $errors->first('announcement') }}</span>
                                        </div>
                                        <div class="pt-5 d-flex justify-content-end ">
                                            <button type="submit" class="btn btn-primary buttons_green ">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
	</main>
</section>
@endsection

@push('js')
    <script>
        $(document).ready(function() {
		if ($(".texteditor").length > 0) {
			tinymce.init({
				selector: "textarea.texteditor",
				theme: "modern",
				height: 150,
				plugins: [
					"advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
					"searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
					"save table contextmenu directionality emoticons template paste textcolor"
				],
				toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",

			});
		}
	});
    </script>
@endpush
