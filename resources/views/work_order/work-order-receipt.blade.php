@extends('layout.app')
@section('content')
@section('title'){{'View Money Receipt'}} @endsection


<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">View Money Receipt</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">Work Order</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Money Receipt</li>
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

                                        <div class="inv--head-section inv--detail-section money-receipt-section">

                                            <div class="row">
                                                <div class="col-sm-6 col-12 mr-auto">
                                                    <div class="d-flex">
                                                        <img class="company-logo" src="src/assets/img/mm-associates-logo.png" alt="company">
                                                        <h3 class="in-heading align-self-center">M. M. Associates Limited</h3>
                                                    </div>
                                                    <div class="mt-4">
                                                        <span class="money-receipt-title">Money Receipt - #566</span>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6 text-sm-end">
                                                    <p class="inv-street-addr mt-3">House: 4, Road: 10, Block: A, Mirpur DOHS, Dhaka-1216</p>
                                                    <p class="inv-email-address">info@mmassociates.com</p>
                                                    <p class="inv-email-address">880123435345</p>
                                                </div>
                                            </div>

                                        </div>


                                        <div class="px-5 py-2">
                                            <div class="row">
                                                <div class="col-6 text-dark">
                                                    <strong>Received From: </strong> Alif Enterprise
                                                </div>
                                                <div class="col-6 text-end text-dark">
                                                    <strong>Payment Date: </strong> 12 Dec 2022
                                                </div>
                                            </div>
                                        </div>

                                        <div class="inv--product-table-section money-receipt-section">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead class="">
                                                    <tr>
                                                        <th>Cash Accounts</th>
                                                        <th>Payment Channel</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>BRAC Bank / 1243 3455 343 334</td>
                                                        <td>Cheque</td>
                                                        <td>$ 120546.00</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="inv--note">

                                            <div class="row mt-4">
                                                <div class="col-sm-6 col-6">
                                                    <p class="d-inline-block money-receipt-signature">
                                                        Signature Of The Recipient
                                                    </p>
                                                </div>
                                                <div class="col-sm-6 col-6 text-end text-dark">
                                                    <p class="d-inline-block money-receipt-signature">
                                                        Authorised Signature
                                                    </p>
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
                                    <a href="javascript:void(0);" class="btn btn-success btn-download">Download</a>
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
