@extends('layouts.admin.app')
@section('title', $page_title)

@section('content')
    <main id="main" class="main">
        <div class="search-bar search_bt">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <i class="bi bi-search"></i>
                <input type="text" name="query" placeholder="Member Search" title="Member Search">
                <button type="submit " title="Search"></button>
            </form>
        </div>

        <section class="section dashboard">
            <div class="row">
                <!-- Left side columns -->
                <div class="col-lg-12 frm_st">
                    <form action="">
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
                                <button class="btn btn-primary buttons_green  ">&nbsp; &nbsp; Search &nbsp; &nbsp;</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End Left side columns -->
            </div>
            <hr>
            <div class="row" style="background: #FCFCFC;">
                <div class="col-lg-8 mrl_head">
                    <h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/truck-logo.png') }}" alt="truck" class="IMG-FLUID"> MRL Global Logistics</h4>
                <div class="d-flex justify-content-center">
                        <img src="{{ asset('public/admin/assets/img/frieght-imgs/blogger-logo.png') }}" alt="blogger" class="img-fluid" style="width: 160px; margin-right: 30px;">
                        <table class="table table-borderless table-responsive">
                            <tbody>
                                <tr>
                                    <th scope="row">Address:</th>
                                    <td>68 Circular Rd, Singapore
                                    049422</td>
                                </tr>
                                <tr>
                                    <th scope="row">Website:</th>
                                    <td>www.freightise.com</td>
                                </tr>
                                <tr>
                                    <th scope="row">Enrollment Date:</th>
                                    <td>1 January 2021</td>
                                </tr>
                                <tr>
                                    <th scope="row">Expiry Date:</th>
                                    <td>1 January 2021</td>
                                </tr>
                            </tbody>
                        </table>
                </div>
                </div>
                <div class="col-lg-4">
                    <span>&nbsp;</span> <br>
                    <span class="act_mem"><a href="#">Active Member</a></span>
                </div>
            </div>
            
            <div class="row py-4" style="background: #FCFCFC; " >
                <div class="col-lg-12 mrl_head">
                    <h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/networsk.png') }}" alt="truck" class="IMG-FLUID"> Networks
                    </h4>
                    <div class="d-flex justify-content-center">
                    <img src="{{ asset('public/admin/assets/img/frieght-imgs/confirm-img.png') }}" alt="confirm" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="row py-4" style="background: #FCFCFC; ">
                <div class="col-lg-12 mrl_head">
                    <h4> <img src="{{ asset('public/admin/assets/img/frieght-imgs/company-logo.png') }}" alt="truck" class="IMG-FLUID"> Company Profile
                    </h4>
                    <div class="d-flex justify-content-center">
                        <p>
                            Lorem ipsum dolor sit amet. In necessitatibus repellat quo Quis placeat non obcaecati exercitationem quo ipsa
                            voluptatum. Et fuga officiis qui itaque cumque aut similique impedit cum voluptas laboriosam ex quos dolorum. Lorem
                            ipsum dolor sit amet. In necessitatibus repellat quo Quis placeat non obcaecati exercitationem quo ipsa voluptatum.
                            Lorem ipsum dolor sit amet. In necessitatibus repellat quo Quis placeat non obcaecati exercitationem quo ipsa
                            voluptatum. Et fuga officiis qui itaque cumque aut similique impedit cum voluptas laboriosam ex quos dolorum.
                            
                            Lorem ipsum dolor sit amet. In necessitatibus repellat quo Quis placeat non obcaecati exercitationem quo ipsa
                            voluptatum.Lorem ipsum dolor sit amet. In necessitatibus repellat quo Quis placeat non obcaecati exercitationem quo ipsa
                            voluptatum. Et fuga officiis qui itaque cumque aut similique impedit cum voluptas laboriosam ex quos dolorum.
                            
                            Lorem ipsum dolor sit amet. In necessitatibus repellat quo Quis placeat non obcaecati exercitationem quo ipsa
                            voluptatum.Lorem ipsum dolor sit amet. In necessitatibus repellat quo Quis placeat non obcaecati exercitationem quo ipsa
                            voluptatum. Et fuga officiis qui itaque cumque aut similique impedit cum voluptas laboriosam ex quos dolorum. Lorem
                            ipsum dolor sit amet. In necessitatibus repellat quo Quis placeat non obcaecati exercitationem quo ipsa voluptatum.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- user avatar sec -->
        <section class="user_sec ">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12  ">
                    <div class="row ">
                        <div class="col-lg-3 col-sm-4 ">
                            <img src="{{ asset('public/admin/assets/img/frieght-imgs/messages-3.jpg') }}" alt="img" class="img-fluid">
                        </div>
                        <div class="col-lg-9 ">
                        <h2>Michael Sephton-Poultney</h2>
                        <span class="span_green">Managing Director</span>
                            <div>
                                    <i class="fa fa-envelope" aria-hidden="true"> </i> <span class="ml-3">michael@freightlinknetworks.com</span>
                            </div>
                            <div>
                                <i class="fa fa-phone" aria-hidden="true"> </i> <span class="ml-3">+27 83 649 1037</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 ">
                    <div class="row ">
                        <div class="col-lg-3   col-sm-4 ">
                            <img src="{{ asset('public/admin/assets/img/frieght-imgs/messages-3.jpg') }}" alt="img" class="img-fluid">
                        </div>
                        <div class="col-lg-9">
                            <h2>Michael Sephton-Poultney</h2>
                            <span class="span_green">Managing Director</span>
                            <div>
                                <i class="fa fa-envelope" aria-hidden="true"> </i> 
                                <span class="ml-3">michael@freightlinknetworks.com</span>
                            </div>
                            <div>
                                <i class="fa fa-phone" aria-hidden="true"> </i> <span class="ml-3">+27 83 649 1037</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pb-5"></div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 ">
                    <div class="row ">
                        <div class="col-lg-3  col-sm-4  ">
                            <img src="{{ asset('public/admin/assets/img/frieght-imgs/messages-3.jpg') }}" alt="img" class="img-fluid">
                        </div>
                        <div class="col-lg-9">
                            <h2>Michael Sephton-Poultney</h2>
                            <span class="span_green">Managing Director</span>
                            <div>
                                <i class="fa fa-envelope" aria-hidden="true"></i> 
                                <span class="ml-3">michael@freightlinknetworks.com</span>
                            </div>
                            <div>
                                <i class="fa fa-phone" aria-hidden="true"> </i> <span class="ml-3">+27 83 649 1037</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 ">
                    <div class="row ">
                        <div class="col-lg-3   col-sm-4 ">
                            <img src="{{ asset('public/admin/assets/img/frieght-imgs/messages-3.jpg') }}" alt="img" class="img-fluid">
                        </div>
                        <div class="col-lg-9">
                            <h2>Michael Sephton-Poultney</h2>
                            <span class="span_green">Managing Director</span>
                            <div>
                                <i class="fa fa-envelope" aria-hidden="true"></i> 
                                <span class="ml-3">michael@freightlinknetworks.com</span>
                            </div>
                            <div>
                                <i class="fa fa-phone" aria-hidden="true"> </i> <span class="ml-3">+27 83 649 1037</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- user ends -->
    </main>
@endsection