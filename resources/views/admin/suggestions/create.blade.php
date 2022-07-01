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
                                    <form action="{{ route('suggestion.store') }}" method="post">
                                        @csrf

                                        <div class="form-group">
                                            <textarea class="form-control texteditor" name="suggestion" id="" rows="8" placeholder="Add suggestion"></textarea>
                                            <span style="color: red">{{ $errors->first('suggestion') }}</span>
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
