@extends('layout.app')
@section('content')
@section('title'){{'Edit PO Received'}} @endsection


<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">Edit PO Received</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">PO Received</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                <div class="inner-page-title pt-1">Edit PO Received</div>
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
<!--                                    <h6>Basic Information</h6>-->
                                    <div class="invoice-address-company-fields">

                                        <div class="form-group row">
                                            <div class="col-md-4 col-sm-12">
                                                <label for="orderNo" class="col-form-label col-form-label-sm">Order No*</label>
                                                <select name="orderNo" id="orderNo" class="form-control form-control-sm tom-select">
                                                    <option disabled>Choose Order No</option>
                                                    <option selected>PO-1001</option>
                                                    <option>PO-1002</option>
                                                    <option>PO-1003</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label for="deliveryDate" class="col-form-label col-form-label-sm">Delivery Date *</label>
                                                <input name="deliveryDate" value="" id="deliveryDate" class="form-control form-control-sm datepicker flatpickr flatpickr-input active" type="text" placeholder="Select Delivery Date..">
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label for="deliveryStatus" class="col-form-label col-form-label-sm">Delivery Status *</label>
                                                <select name="deliveryStatus" id="deliveryStatus" class="form-control form-control-sm tom-select">
                                                    <option>Pending</option>
                                                    <option>Processing</option>
                                                    <option>Completed</option>
                                                    <option>Cancelled</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 col-sm-12">
                                                <label for="logisticsId" class="col-form-label col-form-label-sm">Logistics *</label>
                                                <select name="logisticsId" id="logisticsId" class="form-control form-control-sm tom-select">
                                                    <option selected disabled>Choose Logistics Company</option>
                                                    <option>SA Paribahan</option>
                                                    <option>Janani Parcel</option>
                                                    <option>Sundharban Courier</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label for="driverId" class="col-form-label col-form-label-sm">Driver Name *</label>
                                                <select name="driverId" id="driverId" class="form-control form-control-sm tom-select">
                                                    <option selected disabled>Choose Driver Name</option>
                                                    <option>Hasan Mahmud</option>
                                                    <option>Manik Mia</option>
                                                    <option>Yeasin Hazari</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>

                                </div>

                            </div>


                        </div>

                    <div class="invoice-actions-btn">

                        <div class="invoice-action-btn">
                            <h6>Product Items</h6>

                            <div class="invoice-detail-items">

                                <div class="">
                                    <table class="table table-bordered item-table">
                                        <thead>
                                        <tr>
                                            <th width="5%">SL</th>
                                            <th>Product Item</th>
                                            <th>Delivery Quantity</th>
                                            <th>Unit</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Nylon</td>
                                            <td>
                                                <input type="text" name="productItems['qty'][]" class="form-control form-control-sm" value="250" placeholder="Delivery Quantity (ex: 123)">
                                            </td>
                                            <td>KGs</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Silk</td>
                                            <td>
                                                <input type="text" name="productItems['qty'][]" class="form-control form-control-sm" value="150" placeholder="Delivery Quantity (ex: 123)">
                                            </td>
                                            <td>PCs</td>
                                        </tr>
                                        </tbody>
                                    </table>

                                    <p class="text-info delivery-item-note"><span>NOTE:</span> System will not allow you to deliver more than what is Ordered!</p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="text-end mt-4">
                        <a href="javascript:void(0);" class="btn btn-success">Save Delivery</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

<!-- CONTENT AREA -->
@endsection