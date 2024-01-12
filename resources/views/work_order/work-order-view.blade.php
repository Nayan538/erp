@extends('layout.app')
@section('content')
@section('title'){{'View Work Order'}} @endsection

<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">View Work Order</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">Work Order</a></li>
                            <li class="breadcrumb-item active" aria-current="page">View Order</li>
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
                                                        <h3 class="in-heading align-self-center">M. M. Associates Limited</h3>
                                                    </div>
                                                    <p class="inv-street-addr mt-3">M. M. Associates Limited</p>
                                                    <p class="inv-email-address">info@mmassociates.com</p>
                                                    <p class="inv-email-address">8801293942422</p>
                                                </div>

                                                <div class="col-sm-6 text-sm-end">
                                                    <p class="inv-list-number mt-sm-3 pb-sm-2 mt-4"><span class="inv-title">WO No : </span> <span class="inv-number">#WO-1001</span></p>
                                                    <p class="inv-created-date mt-sm-5 mt-3"><span class="inv-title">WO Date : </span> <span class="inv-date">20 Dec 2022</span></p>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="inv--detail-section inv--customer-detail-section">

                                            <div class="row">

                                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 align-self-center">
                                                    <p class="inv-to">Invoice To</p>
                                                </div>

                                                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 align-self-center order-sm-0 order-1 text-sm-end mt-sm-0 mt-5">
                                                    <h6 class=" inv-title">Invoice From</h6>
                                                </div>

                                                <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4">
                                                    <p class="inv-customer-name">Hossain Enterprise</p>
                                                    <p class="inv-street-addr">Mohakhali, Dhaka, BD</p>
                                                    <p class="">hossain@henterprise.com</p>
                                                    <p class="">88032353467</p>
                                                </div>

                                                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-12 order-sm-0 order-1 text-sm-end">
                                                    <p class="inv-customer-name">M. M. Associates Limited</p>
                                                    <p class="inv-street-addr">Mirpur, Dhaka, BD </p>
                                                    <p class="">info@mmassociates.com</p>
                                                    <p class="">880129234111</p>
                                                </div>

                                            </div>

                                        </div>

                                        <div class="inv--product-table-section">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="">
                                                    <tr>
                                                        <th scope="col">S.No</th>
                                                        <th scope="col">Product Items</th>
                                                        <th class="text-end" scope="col">Qty</th>
                                                        <th class="text-end" scope="col">Rate</th>
                                                        <th class="text-end" scope="col">Amount</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>Nylon</td>
                                                        <td class="text-end">154 PCs</td>
                                                        <td class="text-end">$ 156.00</td>
                                                        <td class="text-end">$ 120546.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>Collar Sticker</td>
                                                        <td class="text-end">346 PCs</td>
                                                        <td class="text-end">$ 444.00</td>
                                                        <td class="text-end">$ 343345.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>Polyester</td>
                                                        <td class="text-end">154 PCs</td>
                                                        <td class="text-end">$ 156.00</td>
                                                        <td class="text-end">$ 657567.00</td>
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
                                                            <div class="col-sm-8 col-7 mt-3">
                                                                <h4 class="">Grand Total : </h4>
                                                            </div>
                                                            <div class="col-sm-4 col-5 mt-3">
                                                                <h4 class="">$ 3480.00</h4>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="inv--note">

                                            <div class="row mt-4">
                                                <div class="col-sm-12 col-12 order-sm-0 order-1">
                                                    <p>Note: Thank you for doing Business with us.</p>
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
                                    <a href="javascript:void(0);" class="btn btn-secondary btn-print  action-print">Print</a>
                                </div>
                                <div class="col-xl-12 col-md-3 col-sm-6">
                                    <a href="src/example.pdf" download="" class="btn btn-success btn-download">Download</a>
                                </div>
                                <div class="col-xl-12 col-md-3 col-sm-6">
                                    <a href="work-order-edit.php" class="btn btn-dark btn-edit">Edit</a>
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
