@extends('layout.app')
@section('content')
@section('title'){{'Edit Work Order'}} @endsection


<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">Edit Work Order</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">Work Order</a></li>
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
                <div class="inner-page-title pt-1">Edit Work Order</div>
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
                                            <label for="wOrderNo" class="col-form-label col-form-label-sm">Work Order No</label>
                                            <input type="text" name="wOrderNo" value="W1001" class="form-control form-control-sm" id="wOrderNo" disabled="disabled">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label for="clientId" class="col-form-label col-form-label-sm">Client Company *</label>
                                            <div class="input-group">
                                                <select name="vendorId" id="vendorId" class="form-control form-control-sm tom-select">
                                                    <option selected disabled>Choose Client Company</option>
                                                    <option>Artisan</option>
                                                    <option>Plus Point</option>
                                                </select>
                                                <button class="btn btn-info" type="button" title="Add New Company" data-bs-toggle="modal" data-bs-target="#createClientModal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label for="merchandiserId" class="col-form-label col-form-label-sm">Merchandiser *</label>

                                            <div class="input-group">
                                                <select name="merchandiserId" id="merchandiserId" class="form-control form-control-sm tom-select">
                                                    <option selected disabled>Choose Merchandiser</option>
                                                    <option>Mainul Hasan</option>
                                                    <option>Hasan Shariar</option>
                                                </select>
                                                <button class="btn btn-info" type="button" title="Add New Merchandiser" data-bs-toggle="modal" data-bs-target="#createMerchandiserModal">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--                                    <div class="form-group row mt-2">-->
                                    <!--                                        <div class="col-md-4 col-sm-12">-->
                                    <!--                                            <label for="salesKam" class="col-form-label col-form-label-sm">Sales KAM *</label>-->
                                    <!--                                            <select name="salesKam" id="salesKam" class="form-control form-control-sm tom-select">-->
                                    <!--                                                <option selected disabled>Choose Sales KAM</option>-->
                                    <!--                                                <option>Mainul Hasan</option>-->
                                    <!--                                                <option>Hasan Shariar</option>-->
                                    <!--                                            </select>-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="col-md-4 col-sm-12">-->
                                    <!--                                            <label for="refNo" class="col-form-label col-form-label-sm">Ref No</label>-->
                                    <!--                                            <input type="text" name="refNo" value="" class="form-control form-control-sm" id="refNo" placeholder="Client Ref No / WO No">-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="col-md-4 col-sm-12">-->
                                    <!--                                            <label for="masterLcNo" class="col-form-label col-form-label-sm">Master LC No</label>-->
                                    <!--                                            <input type="text" name="masterLcNo" value="" class="form-control form-control-sm" id="masterLcNo" placeholder="Master LC No">-->
                                    <!--                                        </div>-->
                                    <!--                                        <div class="col-md-4 col-sm-12">-->
                                    <!--                                            <label for="bbLcNo" class="col-form-label col-form-label-sm">Back to Back LC No</label>-->
                                    <!--                                            <input type="text" name="bbLcNo" value="" class="form-control form-control-sm" id="bbLcNo" placeholder="Master LC No">-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <div class="form-group row mt-2">
                                        <div class="col-md-4 col-sm-12">
                                            <label for="orderDate" class="col-form-label col-form-label-sm">Order Date *</label>
                                            <input name="orderDate" value="" id="orderDate" class="form-control form-control-sm datepicker flatpickr flatpickr-input active" type="text" placeholder="Select Order Date..">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label for="deliveryDate" class="col-form-label col-form-label-sm">Delivery Date *</label>
                                            <input name="deliveryDate" value="" id="deliveryDate" class="form-control form-control-sm datepicker flatpickr flatpickr-input active" type="text" placeholder="Select Delivery Date..">
                                        </div>
                                        <div class="col-md-4 col-sm-12">
                                            <label for="conversionRate" class="col-form-label col-form-label-sm">Currency Conversion Rate *</label>
                                            <input name="conversionRate" value="" id="conversionRate" class="form-control form-control-sm" type="text" placeholder="Conversion Rate">
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

                                <div class="table-responsive">
                                    <table class="table table-bordered item-table">
                                        <thead>
                                        <tr class="wrap-table-title">
                                            <th></th>
                                            <th>Product Item</th>
                                            <th>Batch No </th>
                                            <th>Source Type</th>
                                            <th>Source Price</th>
                                            <th>Sale <br> Commission</th>
                                            <th>Sale Price</th>
                                            <th>Profit Margin</th>
                                            <th>Quantity</th>
                                            <th>Unit</th>
                                            <th>Sale Price <br> Sub Total</th>
                                            <th>Commission <br> Sub Total</th>
                                            <th>Gross Profit <br> Sub Total</th>
                                        </tr>
                                        <tr aria-hidden="true" class="mt-3 d-block table-row-hidden"></tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="delete-item-row">
                                                <i class="far fa-times-circle text-danger pt-2"></i>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <select name="productItems['itemId'][]" class="form-control form-control-sm tom-select">
                                                        <option disabled selected>Choose Product Item*</option>
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
                                                <select name="productItems['batchNo'][]" class="form-control form-control-sm">
                                                    <option value="">Choose Batch No *</option>
                                                    <option value="">B1001</option>
                                                    <option value="">B1002</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="productItems['itemId'][]" class="form-control form-control-sm">
                                                    <option value="">Produced</option>
                                                    <option value="">Purchased</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="productItems['sourcePrice'][]" class="form-control form-control-sm" placeholder="0.00">
                                            </td>
                                            <td>
                                                <input type="text" name="productItems['salesCommission'][]" class="form-control form-control-sm" placeholder="%">
                                            </td>
                                            <td>
                                                <input type="text" name="productItems['salePrice'][]" class="form-control form-control-sm" placeholder="0.00">
                                            </td>
                                            <td>
                                                $ 0.00
                                            </td>
                                            <td>
                                                <input type="text" name="productItems['qty'][]" class="form-control form-control-sm" placeholder="Quantity">
                                            </td>
                                            <td>PCs</td>
                                            <td>
                                                $ 100.00
                                                <input type="hidden" name="productItems['salePriceSubTotal'][]" id="salePriceSubTotal">
                                            </td>
                                            <td>
                                                $ 100.00
                                                <input type="hidden" name="productItems['commissionSubTotal'][]" id="commissionSubTotal">
                                            </td>
                                            <td>
                                                $ 100.00
                                                <input type="hidden" name="productItems['grossProfitSubTotal'][]" id="grossProfitSubTotal">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="delete-item-row">
                                                <i class="far fa-times-circle text-danger pt-2"></i>
                                            </td>
                                            <td>
                                                <div class="input-group">
                                                    <select name="productItems['itemId'][]" class="form-control form-control-sm tom-select">
                                                        <option disabled selected>Choose Product Item *</option>
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
                                                <select name="productItems['batchNo'][]" class="form-control form-control-sm">
                                                    <option value="">Choose Batch No *</option>
                                                    <option value="">B1001</option>
                                                    <option value="">B1002</option>
                                                </select>
                                            </td>
                                            <td>
                                                <select name="productItems['itemId'][]" class="form-control form-control-sm">
                                                    <option value="">Produced</option>
                                                    <option value="">Procured</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" name="productItems['sourcePrice'][]" class="form-control form-control-sm" placeholder="0.00">
                                            </td>
                                            <td>
                                                <input type="text" name="productItems['salesCommission'][]" class="form-control form-control-sm" placeholder="%">
                                            </td>
                                            <td>
                                                <input type="text" name="productItems['salePrice'][]" class="form-control form-control-sm" placeholder="0.00">
                                            </td>
                                            <td>
                                                $ 0.00
                                            </td>
                                            <td>
                                                <input type="text" name="productItems['qty'][]" class="form-control form-control-sm" placeholder="Quantity">
                                            </td>
                                            <td>PCs</td>
                                            <td>
                                                $ 100.00
                                                <input type="hidden" name="productItems['salePriceSubTotal'][]" id="salePriceSubTotal">
                                            </td>
                                            <td>
                                                $ 100.00
                                                <input type="hidden" name="productItems['commissionSubTotal'][]" id="commissionSubTotal">
                                            </td>
                                            <td>
                                                $ 100.00
                                                <input type="hidden" name="productItems['grossProfitSubTotal'][]" id="grossProfitSubTotal">
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="text-center">
                                    <button class="btn btn-dark additem mt-4">Add Item</button>
                                </div>

                            </div>


                            <div class="invoice-detail-total">

                                <div class="row justify-content-end">

                                    <div class="col-md-4">
                                        <div class="invoice-totals-row invoice-summary-subtotal">

                                            <div class="invoice-summary-label"><strong>Subtotal</strong></div>

                                            <div class="invoice-summary-value">
                                                <div class="subtotal-amount">
                                                    <span class="currency">$</span><span class="amount">3,345,33.00</span>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="invoice-totals-row invoice-summary-total">

                                            <div class="invoice-summary-label"><strong>Total Quantity</strong></div>

                                            <div class="invoice-summary-value">
                                                4656
                                            </div>

                                        </div>

                                        <div class="invoice-totals-row invoice-summary-total">

                                            <div class="invoice-summary-label"><strong>Total Source Price</strong></div>

                                            <div class="invoice-summary-value">
                                                $ 2,30,809
                                            </div>

                                        </div>

                                        <div class="invoice-totals-row invoice-summary-total">

                                            <div class="invoice-summary-label"><strong>Total Cost Price</strong></div>

                                            <div class="invoice-summary-value">
                                                $ 2,00,809
                                            </div>

                                        </div>

                                        <div class="invoice-totals-row invoice-summary-total">

                                            <div class="invoice-summary-label"><strong>Total Commission</strong></div>

                                            <div class="invoice-summary-value">
                                                $ 10,809
                                            </div>

                                        </div>

                                        <div class="invoice-totals-row invoice-summary-balance-due">

                                            <div class="invoice-summary-label text-dark"><strong>Total</strong></div>

                                            <div class="invoice-summary-value">
                                                <div class="balance-due-amount">
                                                    <span class="currency">$</span><span>2,45,355.00</span>
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
                                                    <td>10000</td>
                                                </tr>
                                                <tr>
                                                    <td class="delete-item-row">
                                                        <i class="far fa-times-circle text-danger"></i>
                                                    </td>
                                                    <td>11 Dec 2022</td>
                                                    <td>Cash</td>
                                                    <td>bKash / 02456768979</td>
                                                    <td>1000</td>
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
                        <a href="javascript:void(0);" class="btn btn-success">Update Work Order</a>
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
                                <option>PCs</option>
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

<!-- Create Modal -->
<div class="modal fade inputForm-modal" id="createClientModal" tabindex="-1" role="dialog" aria-labelledby="createClientModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header" id="createClientModalLabel">
                <h5 class="modal-title">Create Client Company</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="clientCategory" class="form-control tom-select" required>
                                <option disabled="disabled" selected>Choose Company Category *</option>
                                <option>Spinning Mill</option>
                                <option>Fashion House</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="text" name="clientName" class="form-control" placeholder="Client Company Name *" required>
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
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Save Client Company</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Create Modal -->
<div class="modal fade inputForm-modal" id="createMerchandiserModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header" id="createModalLabel">
                <h5 class="modal-title">Create Merchandiser</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="clientId" id="clientId" class="form-control tom-select">
                                <option selected disabled>Choose Client Company *</option>
                                <option>Mazumdar Textile</option>
                                <option>Fakir Textile</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="text" name="merchandiserName" class="form-control" placeholder="Merchandiser Name *" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="text" name="contactNo" class="form-control" placeholder="Contact No *" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <textarea name="address" class="form-control" placeholder="Address"></textarea>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Save Merchandiser</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- CONTENT AREA -->

@endsection
