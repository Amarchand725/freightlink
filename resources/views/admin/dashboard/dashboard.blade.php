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
                        <h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/log-in.png') }}" alt="truck" class="IMG-FLUID"> &nbsp; Log In Record
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
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Company Name">
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Region</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Country</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Network</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <button class="btn btn-primary buttons_green  ">Search</button>
                        </div>
                    </div>
                    <div class="row">
                    <div class="mb-3 col">
                    </div>
                    <div class="mb-3 col">
                    </div>
                    <div class="mb-3 col">
                        <select id="disabledSelect" class="form-select">
                            <option>Date Range</option>
                        </select>
                    </div>
                    <div class="mb-3 col">
                        <select id="disabledSelect" class="form-select">
                            <option>Date Range</option>
                        </select>
                    </div>
                    <div class="mb-3 col">
                        <button class="btn btn-primary buttons_green  ">Search</button>
                    </div>
                    </div>
                </form>
            </div>
            <!-- End Left side columns -->
        </div>
      
        <div class="d-flex justify-content-center ">
            <table class="table table-borderless table-responsive">
                <tbody>
                    <tr class="top_head">
                        <td>User Name</td>
                        <td>Company Name</td>
                        <td>Last Login</td>
                    </tr>
                    <tr class="para_txt">
                        <td>John Doe</td>
                        <td>ABC Logistics</td>
                        <td>4 May 2021</td>
                        <td>10</td>
                    </tr>
                    <tr class="para_txt">
                        <td>John Doe</td>
                        <td>ABC Logistics</td>
                        <td>4 May 2021</td>
                    <td>10</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-end">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center ">
                    <li class="page-item disabled ">
                        <a class="text-black" href="#" tabindex="-1"><small>Previous Page</small> </a>
                    </li>
                    <li class="page-item">
                        <a class="text-black" href="#"> &nbsp; <small>Next Page</small></a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <br>
    <div class="search-bar search_bt">
        <div class="row" style="background: #FCFCFC;">
            <div class="col-lg-12 mrl_head">
                <div class="row py-2" style="background: #FCFCFC; ">
                    <div class="col-lg-8 mrl_head">
                        <h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/log-in.png') }}" alt="truck" class="IMG-FLUID"> &nbsp; Expiring Members
                        </h4>
                    </div>
                    <div class="col-lg-4 mt-2 brd_crmbs ">
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item  active"><a href="#">7D</a></li>
                                <li class="breadcrumb-item " aria-current="page">30D</li>
                                <li class="breadcrumb-item " aria-current="page">6M</li>
                                <li class="breadcrumb-item " aria-current="page">1Y</li>
                                <li class="breadcrumb-item " aria-current="page">YTD</li>
                                <li class="breadcrumb-item " aria-current="page">Clear</li>
                            </ol>
                        </nav>
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
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Company Name">
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Region</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Country</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Network</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <button class="btn btn-primary buttons_green  ">Search</button>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="mb-3 col">
                        </div>
                        <div class="mb-3 col">
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Date Range</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Date Range</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <button class="btn btn-primary buttons_green  ">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    
    <div class="d-flex justify-content-center ">
        <table class="table table-borderless table-responsive">
            <tbody>
                <tr class="top_head">
                    <td>Company Name</td>
                    <td>Country</td>
                    <td>City</td>
                    <td>Expiry Date</td>
                </tr>
                <tr class="para_txt">
                    <td>ABC Logistics</td>
                    <td>Country</td>
                    <td>City</td>
                    <td><a href="#">1 January 2022</a></td>
                </tr>
                <tr class="para_txt">
                    <td>ABC Logistics</td>
                    <td>Country</td>
                    <td>City</td>
                    <td><a href="#">1 January 2022</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    
        <div class="d-flex justify-content-end">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center ">
                    <li class="page-item disabled ">
                        <a class="text-black" href="#" tabindex="-1"><small>Previous Page</small> </a>
                    </li>
                    <li class="page-item">
                        <a class="text-black" href="#"> &nbsp; <small>Next Page</small></a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <br>
    <div class="search-bar search_bt">
        <div class="row" style="background: #FCFCFC;">
            <div class="col-lg-12 mrl_head">
                <div class="row py-2" style="background: #FCFCFC; ">
                    <div class="col-lg-8 mrl_head">
                        <h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/log-in.png') }}" alt="truck" class="IMG-FLUID"> &nbsp; Expired Members
                        </h4>
                    </div>
                    <div class="col-lg-4 mt-2 brd_crmbs ">
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item  active"><a href="#">7D</a></li>
                                <li class="breadcrumb-item " aria-current="page">30D</li>
                                <li class="breadcrumb-item " aria-current="page">6M</li>
                                <li class="breadcrumb-item " aria-current="page">1Y</li>
                                <li class="breadcrumb-item " aria-current="page">YTD</li>
                                <li class="breadcrumb-item " aria-current="page">Clear</li>
                            </ol>
                        </nav>
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
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Company Name">
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Region</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Country</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Network</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <button class="btn btn-primary buttons_green  ">Search</button>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="mb-3 col">
                        </div>
                        <div class="mb-3 col">
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Date Range</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Date Range</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <button class="btn btn-primary buttons_green  ">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Left side columns -->
        </div>
    
        <div class="d-flex justify-content-center ">
            <table class="table table-borderless table-responsive">
                <tbody>
                    <tr class="top_head">
                        <td>Company Name</td>
                        <td>Country</td>
                        <td>City</td>
                        <td>Expiry Date</td>
                    </tr>
                    <tr class="para_txt">
                        <td>ABC Logistics</td>
                        <td>Country</td>
                        <td>City</td>
                        <td class="text-danger">1 January 2022</td>
                    </tr>
                    <tr class="para_txt">
                        <td>ABC Logistics</td>
                        <td>Country</td>
                        <td>City</td>
                        <td class="text-danger">1 January 2022</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        <div class="d-flex justify-content-end">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center ">
                    <li class="page-item disabled ">
                        <a class="text-black" href="#" tabindex="-1"><small>Previous Page</small> </a>
                    </li>
                    <li class="page-item">
                        <a class="text-black" href="#"> &nbsp; <small>Next Page</small></a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>

    <br>
    <div class="search-bar search_bt">
        <div class="row" style="background: #FCFCFC;">
            <div class="col-lg-12 mrl_head">
                <div class="row py-2" style="background: #FCFCFC; ">
                    <div class="col-lg-8 mrl_head">
                        <h4> 
                            <img src="{{ asset('public/admin/assets/img/frieght-imgs/log-in.png') }}" alt="truck" class="IMG-FLUID">
                             &nbsp; 
                            Departed Companies
                        </h4>
                    </div>
                    <div class="col-lg-4 mt-2 brd_crmbs ">
                        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                            aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item  active"><a href="#">7D</a></li>
                                <li class="breadcrumb-item " aria-current="page">30D</li>
                                <li class="breadcrumb-item " aria-current="page">6M</li>
                                <li class="breadcrumb-item " aria-current="page">1Y</li>
                                <li class="breadcrumb-item " aria-current="page">YTD</li>
                                <li class="breadcrumb-item " aria-current="page">Clear</li>
                            </ol>
                        </nav>
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
                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                placeholder="Company Name">
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Region</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Country</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Network</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <button class="btn btn-primary buttons_green  ">Search</button>
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="mb-3 col">
                        </div>
                        <div class="mb-3 col">
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Date Range</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <select id="disabledSelect" class="form-select">
                                <option>Date Range</option>
                            </select>
                        </div>
                        <div class="mb-3 col">
                            <button class="btn btn-primary buttons_green  ">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Left side columns -->
        </div>
    
        <div class="d-flex justify-content-center ">
            <table class="table table-borderless table-responsive">
                <tbody>
                    <tr class="top_head">
                        <td>Company Name</td>
                        <td>Country</td>
                        <td>City</td>
                        <td>Expiry Date</td>
                    </tr>
                    <tr class="para_txt">
                        <td>ABC Logistics</td>
                        <td>Country</td>
                        <td>City</td>
                        <td class="text-danger">1 January 2022</td>
                    </tr>
                    <tr class="para_txt">
                        <td>ABC Logistics</td>
                        <td>Country</td>
                        <td>City</td>
                        <td class="text-danger">1 January 2022</td>
                    </tr>
                </tbody>
            </table>
        </div>
    
        <div class="d-flex justify-content-end">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center ">
                    <li class="page-item disabled ">
                        <a class="text-black" href="#" tabindex="-1"><small>Previous Page</small> </a>
                    </li>
    
                    <li class="page-item">
                        <a class="text-black" href="#"> &nbsp; <small>Next Page</small></a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
</main>
@endsection

@push('js')
@endpush