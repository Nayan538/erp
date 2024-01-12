@extends('layout.app')
@section('content')
@section('title'){{'Add Income'}} @endsection

<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">Add Income</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">Accounting</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Add Income</li>
                        </ol>
                    </nav>

                </div>
            </div>
        </header>
    </div>
</div>
<!--  END BREADCRUMBS  -->

<div class="row invoice layout-top-spacing layout-spacing">

    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 page-title-wrapper">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search align-self-center">
                <div class="inner-page-title pt-1">Add Income</div>
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="doc-container">

            <div class="row">
                <div class="col-xl-12">

                    <div class="invoice-detail-body">

                            <div class="invoice-detail-header">

                                <div class="invoice-address-company">
                                    <div class="invoice-address-company-fields">

                                        <div class="form-group row">
<!--                                            <div class="col-md-4 col-sm-12">-->
<!--                                                <label for="accountHeadType" class="col-form-label col-form-label-sm">Account Head Type *</label>-->
<!--                                                <select name="accountHeadType" id="accountHeadType" class="form-control form-control-sm tom-select">-->
<!--                                                    <option selected disabled>Choose Head Type</option>-->
<!--                                                    <option>Income</option>-->
<!--                                                    <option>Expense</option>-->
<!--                                                </select>-->
<!--                                            </div>-->
                                            <div class="col-md-4 col-sm-12">
                                                <label for="accountHead" class="col-form-label col-form-label-sm">Account Head *</label>
                                                <select name="accountHead" id="accountHead" class="form-control form-control-sm tom-select">
                                                    <option selected disabled>Choose Account Head</option>
                                                    <option>Utility Bill</option>
                                                    <option>Product Sale</option>
                                                    <option>Snacks Bill</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label for="trxAmount" class="col-form-label col-form-label-sm">Transaction Amount *</label>
                                                <input name="trxAmount" value="" id="trxAmount" class="form-control form-control-sm flatpickr flatpickr-input active" type="text" placeholder="0.00">
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label for="cashAccount" class="col-form-label col-form-label-sm">Cash Account *</label>
                                                <select name="cashAccount" id="cashAccount" class="form-control form-control-sm tom-select" required>
                                                    <option disabled selected>Choose Cash Account</option>
                                                    <option>BRAC Bank / 151 220 220 737 4001</option>
                                                    <option>Nagad / 01242334545</option>
                                                    <option>bKash / 01258345894</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-12 col-sm-12">
                                                <label for="trxRemark" class="col-form-label col-form-label-sm">Transaction Remarks *</label>
                                                <textarea name="trxRemark" id="trxRemark" class="form-control form-control-sm" placeholder="Transaction Remarks ..."></textarea>
                                            </div>
                                        </div>
<!--                                        <div class="form-group row mt-2">-->
<!--                                        </div>-->

                                    </div>

                                </div>

                            </div>


                        </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="text-end mt-4">
                        <a href="javascript:void(0);" class="btn btn-success">Save Income</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- CONTENT AREA -->

@endsection
