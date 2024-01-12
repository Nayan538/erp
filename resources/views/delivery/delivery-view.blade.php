@extends('layout.app')
@section('content')
@section('title'){{'View Delivery Challan'}} @endsection

<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">View Delivery Challan</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">Delivery</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Challan</li>
                        </ol>
                    </nav>

                </div>
            </div>
        </header>
    </div>
</div>
<!--  END BREADCRUMBS  -->

<div class="row invoice layout-top-spacing layout-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="doc-container">

            <div class="row">

                <div class="col-xl-9">

                    <div class="invoice-container">
                        <div class="invoice-inbox">

                            <div id="ct" class="">

                                <div class="invoice-00001">
                                    <div class="content-section">

                                        <div class="inv--head-section inv--detail-section">

                                            <div class="row">

                                                <div class="col-sm-6 col-12 mr-auto">
                                                    <div class="d-flex">
                                                        <img class="company-logo" src="src/assets/img/mm-associates-logo.png" alt="company">
                                                        <h3 class="in-heading align-self-center">TERP Textile</h3>
                                                    </div>
                                                    <p class="inv-street-addr mt-3">M. M. Associates Limited</p>
                                                    <p class="inv-email-address">info@mmassociates.com</p>
                                                    <p class="inv-email-address">(880) 123 456 789</p>
                                                </div>

                                                <div class="col-sm-6 text-sm-end">
                                                    <p class="inv-list-number mt-sm-3 pb-sm-2 mt-4"><span class="inv-title">Delivery No : </span> <span class="inv-number">#D-1001</span></p>
                                                    <p class="inv-due-date mt-sm-5 mt-3"><span class="inv-title">Delivery Against : Work Order</span></p>
                                                    <p class="inv-due-date"><span class="inv-title">Order No : #WO-1001</span></p>
                                                    <p class="inv-created-date"><span class="inv-title">Delivery Date : </span> <span class="inv-date">20 Dec 2022</span></p>
                                                    <p class="inv-due-date"><span class="inv-title">Delivery Status : Pending</span></p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="inv--detail-section inv--customer-detail-section">

                                            <div class="row">

                                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                    <p class="inv-to">Logistics Information</p>
                                                </div>

                                                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 text-sm-end mt-sm-0 mt-5">
                                                    <h6 class="inv-to">Driver Information</h6>
                                                </div>

                                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                    <p class="inv-customer-name">SA Paribahan</p>
                                                    <p class="">Hasan Mahmud</p>
                                                    <p class="inv-street-addr">Mirpur, Dhaka, Bangladesh</p>
                                                    <p class="inv-email-address">(128) 666 070</p>
                                                </div>

                                                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 order-sm-0 order-1 text-sm-end">
                                                    <p class="inv-customer-name">Hossain Abdullah</p>
                                                    <p class="inv-street-addr">8801325436567</p>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="inv--product-table-section">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="">
                                                    <tr>
                                                        <th scope="col">S.No</th>
                                                        <th scope="col">Product Item</th>
                                                        <th class="text-end" scope="col">Qty</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Nylon</td>
                                                        <td class="text-end">154 PCs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Collar Sticker</td>
                                                        <td class="text-end">346 PCs</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Polyester</td>
                                                        <td class="text-end">154 PCs</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="inv--total-amounts">

                                            <div class="row mt-4">
                                                <div class="col-sm-5 col-12 order-sm-0 order-1">
                                                </div>
                                                <div class="col-sm-7 col-12 order-sm-1 order-0">
                                                    <div class="text-sm-end">
                                                        <div class="row">
                                                            <div class="col-sm-8 col-7">
                                                                <p class="">Total Qty :</p>
                                                            </div>
                                                            <div class="col-sm-4 col-5">
                                                                <p class="">3155</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>


                        </div>

                    </div>

                </div>

                <div class="col-xl-3">

                    <div class="invoice-actions-btn">

                        <div class="invoice-action-btn">

                            <div class="row">
                                <div class="col-xl-12 col-md-3 col-sm-6">
                                    <a href="javascript:void(0);" class="btn btn-secondary btn-print action-print">Print</a>
                                </div>
                                <div class="col-xl-12 col-md-3 col-sm-6">
                                    <a href="javascript:void(0);" download="" class="btn btn-success btn-download">Download</a>
                                </div>
                                <div class="col-xl-12 col-md-3 col-sm-6">
                                    <a href="delivery-edit.php" class="btn btn-dark btn-edit">Edit</a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</div>

<!-- CONTENT AREA -->

@endsection
