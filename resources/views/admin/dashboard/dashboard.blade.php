@extends('layouts.admin.app')
@section('title', $page_title)

@push('css')
@endpush

@section('content')
<main id="main" class="main">
    <div class="search-bar search_bt">
        <div class="row" style="background: #FCFCFC;">
            <div class="col-lg-12 mrl_head">
                <div class="row py-2" style="background: #FCFCFC; ">
                    <div class="col-lg-8 mrl_head">
                        <h4> 
                            <img src="{{ asset('public/admin/assets/img/frieght-imgs/log-in.png') }}" alt="truck" class="IMG-FLUID"> &nbsp; Log In Record
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12 frm_st">
                <form class="">
                    <div class="row">
                        <div class="mb-3 col">
                            <input type="text" class="form-control" id="login_search" placeholder="Search">
                            <input type="hidden" class="form-control" id="login_search_url" value="{{ route('search_login') }}">
                            <input type="hidden" id="status" value="All">
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Left side columns -->
        </div>
      
        <div class="d-flex justify-content-center ">
            <table class="table table-borderless table-responsive">
                <thead>
                    <tr class="top_head">
                        <th>S.No#</th>
                        <th>User Name</th>
                        <th>Company Name</th>
                        <th>Last Login</th>
                    </tr>
                </thead>
                <tbody id="login-records">
                    @foreach ($login_users as $key=>$login)
                        <?php $user = App\Models\User::where('id', $login->login_id)->first(); ?>
                        <tr>
                            <td>{{ $login_users->firstItem()+$key }}.</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->company_name }}</td>
                            <td>{{ date('d, F-Y h:i a', strtotime($user->created_at)) }}</td>
                        </tr>
                    @endforeach
                    <tr>
                        <td colspan="8">
                            Displying {{$login_users->firstItem()}} to {{$login_users->lastItem()}} of {{$login_users->total()}} records
                            <div class="d-flex justify-content-center">
                                {!! $login_users->links('pagination::bootstrap-4') !!}
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <br>
    <div class="search-bar search_bt">
        <div class="row" style="background: #FCFCFC;">
            <div class="col-lg-12 mrl_head">
                <div class="row py-2" style="background: #FCFCFC; ">
                    <div class="col-lg-8 mrl_head">
                        <h4> 
                            <img src="{{ asset('public/admin/assets/img/frieght-imgs/log-in.png') }}" alt="truck" class="IMG-FLUID"> &nbsp; Expired Members
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section class="section dashboard">
        <div class="row">
            <!-- Left side columns -->
            <div class="col-lg-12 frm_st">
                <form class="">
                    <div class="row">
                        <div class="mb-3 col">
                            <input type="text" class="form-control" id="expired_search"
                                placeholder="search...">
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Left side columns -->
        </div>
    
        <div class="d-flex justify-content-center ">
            <table class="table table-borderless table-responsive">
                <thead>
                    <tr class="top_head">
                        <th>SNo#</th>
                        <th>Company Name</th>
                        <th>Country</th>
                        <th>City</th>
                        <th>Expiry Date</th>
                    </tr>
                </thead>
                <tbody id="expired-members">
                    @foreach ($models as $key=>$model)
                        <tr class="para_txt">
                            <td>{{ $models->firstItem()+$key }}.</td>
                            <td>{{ $model->name }}</td>
                            <td>{{ $model->country }}</td>
                            <td>{{ $model->city }}</td>
                            <td class="text-danger">{{ date('d, F-Y', strtotime($model->expire_date)) }}</td>
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
                </tbody>
            </table>
        </div>
    </section>
</main>
@endsection

@push('js')
    <script>
        $('#login_search').keyup((function(e) {
            var search = $(this).val();
            var status = $('#status').val();
            var pageurl = $('#page_url').val();
            var page = 1;
            fetchAll(pageurl, page, search, status);
        }));

        $(document).on('click', '.pagination a', function(event){
            event.preventDefault();
            var search = $('#search').val();
            var status = $('#status').val();
            var pageurl = $('#page_url').val();
            var page = $(this).attr('href').split('page=')[1];
            fetchAll(pageurl, page, search, status);
        });

        function fetchAll(pageurl, page, search, status){
            $.ajax({
                url:pageurl+'?page='+page+'&search='+search+'&status='+status,
                type: 'get',
                success: function(response){
                    $('#body').html(response);
                }
            });
        }
    </script>
@endpush