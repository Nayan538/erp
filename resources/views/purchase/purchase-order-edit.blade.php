@extends('layout.app')
@section('content')
@section('title'){{'Edit Purchase Order'}} @endsection


<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">Edit Purchase Order</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">Purchase</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Order</li>
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
                <div class="inner-page-title pt-1">Edit Purchase Order</div>
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
                                <h6>Basic Information</h6>
                                <div class="invoice-address-company-fields">

                                    <div class="form-group row">
                                        <div class="col-md-4 col-sm-12">
                                            <label for="vendorId" class="col-form-label col-form-label-sm">Vendor Company *</label>
                                            <div class="input-group">
                                                <select name="vendorId" id="vendorId" class="form-control form-control-sm tom-select">
                                                    <option selected disabled>Choose Vendor Company</option>
                                                    <option>Alif Enterprise</option>
                                                    <option>Hossain Traders</option>
                                                </select>
                                                <button class="btn btn-info" type="button" title="Add New Company" data-bs-toggle="modal" data-bs-target="#createVendorModal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label for="vendorKAM" class="col-form-label col-form-label-sm">Vendor KAM</label>
                                            <select name="vendorKAM" id="vendorKAM" class="form-control form-control-sm tom-select">
                                                <option selected disabled>Choose Vendor KAM</option>
                                                <option>Hasan Mahmud</option>
                                                <option>Khairul Basher</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label for="purchaseKAM" class="col-form-label col-form-label-sm">Purchase KAM</label>
                                            <select name="purchaseKAM" id="purchaseKAM" class="form-control form-control-sm tom-select">
                                                <option selected disabled>Choose Purchase KAM</option>
                                                <option>Masud Alam</option>
                                                <option>Mainul Islam</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4 col-sm-12">
                                            <label for="lotNo" class="col-form-label col-form-label-sm">Batch No</label>
                                            <input type="text" name="lotNo" value="L1001" class="form-control form-control-sm" id="lotNo" disabled="disabled">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label for="purchaseDate" class="col-form-label col-form-label-sm">Purchase Date *</label>
                                            <input name="purchaseDate" value="" id="purchaseDate" class="form-control form-control-sm datepicker flatpickr flatpickr-input active" type="text" placeholder="Select Purchase Date..">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label for="merchandiserId" class="col-form-label col-form-label-sm">PO Status *</label>
                                            <select name="merchandiserId" id="merchandiserId" class="form-control form-control-sm tom-select">
                                                <option>Pending</option>
                                                <option>Processing</option>
                                                <option>Completed</option>
                                                <option>Cancelled</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>


                    </div>

                    <div class="invoice-actions-btn">

                        <div class="invoice-action-btn">
                            <h6>Add Product Items</h6>

                            <div class="invoice-detail-items">

                                <div class="">
                                    <table class="table table-bordered item-table">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Product Item</th>
                                            <th>Rate</th>
                                            <th>Qty</th>
                                            <th>Unit</th>
                                            <th class="text-right">Amount</th>
                                        </tr>
                                        <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="delete-item-row">
                                                <i class="far fa-times-circle text-danger pt-2"></i>
                                            </td>
                                            <td class="description">

                                                <div class="input-group">
                                                    <select name="productItems['itemId'][]" class="form-control form-control-sm tom-select">
                                                        <option disabled selected>Choose Product *</option>
                                                        <option>Nylon</option>
                                                        <option>Silk</option>
                                                        <option>Collar Sticker</option>
                                                        <option>Wool</option>
                                                    </select>
                                                    <button class="btn btn-sm btn-info" type="button" title="Add New Product" data-bs-toggle="modal" data-bs-target="#createModal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="productItems['unitPrice'][]" class="form-control form-control-sm" placeholder="Price">
                                            </td>
                                            <td>
                                                <input type="text" name="productItems['qty'][]" class="form-control form-control-sm" placeholder="Quantity">
                                            </td>
                                            <td>Pcs</td>
                                            <td class="text-right amount">
                                                <span class="editable-amount">
                                                    <span class="currency">$</span>
                                                    <span class="amount">100.00</span>
                                                </span>
                                                <input type="hidden" name="productItems['itemSubTotal'][]" id="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="delete-item-row">
                                                <i class="far fa-times-circle text-danger pt-2"></i>
                                            </td>
                                            <td class="description">

                                                <div class="input-group">
                                                    <select name="productItems['itemId'][]" class="form-control form-control-sm tom-select">
                                                        <option disabled selected>Choose Product *</option>
                                                        <option>Nylon</option>
                                                        <option>Silk</option>
                                                        <option>Collar Sticker</option>
                                                        <option>Wool</option>
                                                    </select>
                                                    <button class="btn btn-sm btn-info" type="button" title="Add New Product" data-bs-toggle="modal" data-bs-target="#createModal">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                                    </button>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" name="productItems['unitPrice'][]" class="form-control form-control-sm" placeholder="Price">
                                            </td>
                                            <td>
                                                <input type="text" name="productItems['qty'][]" class="form-control form-control-sm" placeholder="Quantity">
                                            </td>
                                            <td>Pcs</td>
                                            <td class="text-right amount">
                                                <span class="editable-amount">
                                                    <span class="currency">$</span>
                                                    <span class="amount">100.00</span>
                                                </span>
                                                <input type="hidden" name="productItems['itemSubTotal'][]" id="">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-dark additem">Add Item</button>
                                </div>

                            </div>


                            <div class="invoice-detail-total">

                                <div class="row justify-content-end">

                                    <div class="col-md-4">
                                        <div class="">

                                            <div class="invoice-totals-row invoice-summary-total">

                                                <div class="invoice-summary-label"><strong>Total Quantity</strong></div>

                                                <div class="invoice-summary-value">
                                                    <div class="total-amount">
                                                        4656
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="invoice-totals-row invoice-summary-subtotal">

                                                <div class="invoice-summary-label"><strong>Subtotal</strong></div>

                                                <div class="invoice-summary-value">
                                                    <div class="subtotal-amount">
                                                        <span class="currency">$</span><span class="amount"> 10500.00</span>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <div class="invoice-actions-btn">

                        <div class="invoice-action-btn">
                            <h6>Add Payment Histories</h6>

                            <div class="invoice-detail-total">

                                <div class="row">

                                    <div class="col-sm-12">

                                        <div class="form-group row">
                                            <div class="col-md-4 col-sm-12">
                                                <label for="paymentDate" class="col-form-label col-form-label-sm">Payment Date *</label>
                                                <input name="paymentDate" value="" id="paymentDate" class="form-control form-control-sm datepicker flatpickr flatpickr-input active" type="text" placeholder="Select Payment Date">
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label for="paymentAmount" class="col-form-label col-form-label-sm">Payment Amount *</label>
                                                <input type="text" name="paymentAmount" value="" class="form-control form-control-sm" id="paymentAmount" required placeholder="Enter paid amount">
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label for="conversionRate" class="col-form-label col-form-label-sm">Currency Conversion Rate *</label>
                                                <input type="text" name="conversionRate" value="" class="form-control form-control-sm" id="conversionRate" required placeholder="Conversion Rate">
                                            </div>
                                        </div>
                                        <div class="form-group row mt-2">
                                            <div class="col-md-6 col-sm-12">
                                                <label for="paymentChannel" class="col-form-label col-form-label-sm">Payment Channel *</label>
                                                <select name="paymentChannel" id="paymentChannel" class="form-control form-control-sm tom-select" required>
                                                    <option disabled selected>Choose Payment Channel</option>
                                                    <option>Cash</option>
                                                    <option>Cheque</option>
                                                    <option>Online</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 col-sm-12">
                                                <label for="cashAccount" class="col-form-label col-form-label-sm">Cash Account *</label>
                                                <select name="cashAccount" id="cashAccount" class="form-control form-control-sm tom-select" required>
                                                    <option disabled selected>Choose Cash Account</option>
                                                    <option>BRAC Bank / 151 220 220 737 4001</option>
                                                    <option>Nagad / 01242334545</option>
                                                    <option>bKash / 01258345894</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-12 text-end">
                                                <button class="btn btn-dark addPayment my-4">Add Payment</button>
                                            </div>
                                        </div>
                                    </div>

                                    <hr>
                                    <div class="col-sm-12">
                                        <h6>Payment Histories</h6>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>Payment Date</th>
                                                    <th>Payment Channel</th>
                                                    <th>Cash Account</th>
                                                    <th class="text-right">Amount</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td class="delete-item-row">
                                                        <i class="far fa-times-circle text-danger"></i>
                                                    </td>
                                                    <td>10 Dec 2022</td>
                                                    <td>Cheque</td>
                                                    <td>BRAC Bank / 151 220 220 737 4001</td>
                                                    <td>$ 10000.00</td>
                                                </tr>
                                                <tr>
                                                    <td class="delete-item-row">
                                                        <i class="far fa-times-circle text-danger"></i>
                                                    </td>
                                                    <td>11 Dec 2022</td>
                                                    <td>Cash</td>
                                                    <td>bKash / 01234567899</td>
                                                    <td>$ 1000.00</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                    <div class="text-end mt-4">
                        <a href="javascript:void(0);" class="btn btn-success">Save Purchase Order</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>


<!-- Create Modal -->
<div class="modal fade inputForm-modal" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header" id="createModalLabel">
                <h5 class="modal-title">Create Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="text" name="productName" class="form-control" placeholder="Product Name *" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="productCategoryId" class="form-select" required>
                                <option>Choose Product Category</option>
                                <option>Knit</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <textarea name="productDescription" class="form-control" placeholder="Product Description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="unitId" class="form-select" required>
                                <option>Choose Product Unit *</option>
                                <option>Pcs</option>
                                <option>Kg</option>
                                <option>QuM</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Save Product</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Create Vendor Modal -->
<div class="modal fade inputForm-modal" id="createVendorModal" tabindex="-1" role="dialog" aria-labelledby="createVendorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header" id="createModalLabel">
                <h5 class="modal-title">Create Vendor Company</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="vendorCategory" class="form-select" required>
                                <option>Choose Vendor Category *</option>
                                <option>Knit</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="text" name="companyName" class="form-control" placeholder="Company Name *" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <textarea name="officeAddress" class="form-control" placeholder="Office Address *"
                                      required></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="url" name="website" class="form-control" placeholder="Website URL">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="clientCategory" class="form-control tom-select" required>
                                <option disabled="disabled" selected>Choose Business Currency *</option>
                                <option>BDT</option>
                                <option>USD</option>
                                <option>EUR</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Save Vendor Company</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- CONTENT AREA -->
@endsection
