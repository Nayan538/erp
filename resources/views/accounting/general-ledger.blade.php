@extends('layout.app')
@section('content')
@section('title'){{'General Ledger'}} @endsection

<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">General Ledger</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">Accounting</a></li>
                            <li class="breadcrumb-item active" aria-current="page">General Ledger</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </header>
    </div>
</div>
<!--  END BREADCRUMBS  -->

<!-- CONTENT AREA -->
<div class="row layout-top-spacing">

    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
        <div class="invoice-actions-btn mt-3 mb-3 p-3">
            <div class="invoice-action-btn">
                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-5">
                                <input name="reportFrom" value="" id="reportFrom" class="form-control form-control-sm datepicker flatpickr flatpickr-input active" type="text" placeholder="From Date">
                            </div>
                            <div class="col-sm-5">
                                <input name="reportTo" value="" id="reportTo" class="form-control form-control-sm datepicker flatpickr flatpickr-input active" type="text" placeholder="To Date">
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-outline-info">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 text-end">
                        <button class="btn btn-outline-success">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
                            Download Report
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="summary layout-spacing ">
                <div class="widget-content widget-content-area p-4">
                    <h3 class="">Summary</h3>
                    <div class="order-summary">
                        <div class="row">
                            <div class="col-4">
                                <div class="summary-list summary-income">

                                    <div class="summery-info">

                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                        </div>

                                        <div class="w-summary-details">

                                            <div class="w-summary-info">
                                                <h6>Credit Total <span class="summary-count">$92,600 </span></h6>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-4">
                                <div class="summary-list summary-profit">

                                    <div class="summery-info">

                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                        </div>

                                        <div class="w-summary-details">

                                            <div class="w-summary-info">
                                                <h6>Debit Total <span class="summary-count">$37,515</span></h6>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-4">
                                <div class="summary-list summary-expenses">

                                    <div class="summery-info">

                                        <div class="w-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                        </div>
                                        <div class="w-summary-details">

                                            <div class="w-summary-info">
                                                <h6>Net Balance <span class="summary-count">$55,085</span></h6>
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


    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 page-title-wrapper">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search align-self-center">
                <div class="inner-page-title pt-1">General Ledger</div>
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-8">
            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                <thead>
                <tr>
                    <th>Date</th>
                    <th>Details</th>
                    <th>Debit</th>
                    <th>Credit</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>12 Jun 2022</td>
                    <td>Material Purchase</td>
                    <td>$ 2,000</td>
                    <td>--</td>
                </tr>
                <tr>
                    <td>11 Aug 2022</td>
                    <td>Goods Sale</td>
                    <td>--</td>
                    <td>$ 12,000</td>
                </tr>
                <tr>
                    <td>23 Sep 2022</td>
                    <td>Nylon Sale</td>
                    <td>--</td>
                    <td>$ 2,12,000</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- CONTENT AREA -->

@endsection