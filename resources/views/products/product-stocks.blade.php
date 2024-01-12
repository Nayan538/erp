@extends('layout.app')
@section('content')
@section('title'){{'Product Stocks'}} @endsection


<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">Product Stocks</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">Product</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Stocks</li>
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
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-sm-5">
                                <select name="vendorId" class="form-control form-control-sm tom-select" required>
                                    <option disabled selected>Choose Vendor</option>
                                    <option>Alif Enterprise</option>
                                    <option>Hossain Traders</option>
                                </select>
                            </div>
                            <div class="col-sm-5">
                                <select name="itemId" class="form-control form-control-sm tom-select" required>
                                    <option disabled selected>Choose Product Item</option>
                                    <option>Collar Sticker</option>
                                    <option>Nylon</option>
                                    <option>Silk</option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-outline-info">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 text-end">
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
                        <div class="col-6">
                            <div class="summary-list summary-income">

                                <div class="summery-info">

                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-database"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path></svg>
                                    </div>

                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>Total Stock Qty <span class="summary-count"> 75,345.00 </span></h6>
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="col-6">
                            <div class="summary-list summary-profit">

                                <div class="summery-info">

                                    <div class="w-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                                    </div>

                                    <div class="w-summary-details">

                                        <div class="w-summary-info">
                                            <h6>Total Stock Price <span class="summary-count">$37,515,45.00</span></h6>
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
                <div class="inner-page-title pt-1">Product Stocks</div>
            </div>

            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-end">
                <button class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#createModal">
                    Create Stock
                </button>
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-8">
            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                <thead>
                <tr>
                    <th>Batch No</th>
                    <th>Vendor Name</th>
                    <th>Item Name</th>
                    <th>Quantity</th>
                    <th>Cost Price</th>
                    <th class="no-content">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>B1001</td>
                    <td>Alif Enterprise</td>
                    <td>Wool</td>
                    <td>34 Pcs</td>
                    <td>$ 4,500</td>
                    <td>
                        <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2 text-success"
                           data-toggle="tooltip" data-placement="top" title="Edit"
                           data-bs-toggle="modal" data-bs-target="#editModal">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="javascript:void(0);" onclick="return confirm('Are you sure?')" class="action-btn btn-view bs-tooltip me-2 text-danger"
                           data-toggle="tooltip" data-placement="top" title="Delete">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>B1002</td>
                    <td>Alif Enterprise</td>
                    <td>Silk</td>
                    <td>23 Pcs</td>
                    <td>$ 2,300</td>
                    <td>
                        <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2 text-success"
                           data-toggle="tooltip" data-placement="top" title="Edit"
                           data-bs-toggle="modal" data-bs-target="#editModal">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="javascript:void(0);" onclick="return confirm('Are you sure?')" class="action-btn btn-view bs-tooltip me-2 text-danger"
                           data-toggle="tooltip" data-placement="top" title="Delete">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>B1003</td>
                    <td>Chowdhury Traders</td>
                    <td>Nylon</td>
                    <td>25 KG</td>
                    <td>$ 1,50,596</td>
                    <td>
                        <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2 text-success"
                           data-toggle="tooltip" data-placement="top" title="Edit"
                           data-bs-toggle="modal" data-bs-target="#editModal">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="javascript:void(0);" onclick="return confirm('Are you sure?')" class="action-btn btn-view bs-tooltip me-2 text-danger"
                           data-toggle="tooltip" data-placement="top" title="Delete">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Create Modal -->
<div class="modal fade inputForm-modal" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header" id="createModalLabel">
                <h5 class="modal-title">Create Stock</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="text" name="lotNo" disabled="disabled" value="B1001" class="form-control" placeholder="Batch No *" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <select name="vendorId" class="form-control tom-select" required>
                                    <option selected disabled="disabled">Choose Vendor Company *</option>
                                    <option>Alif Corporation</option>
                                    <option>Hossain Traders</option>
                                    <option>Akbar Traders</option>
                                </select>
                                <button class="btn btn-info" type="button" title="Add New Company" data-bs-toggle="modal" data-bs-target="#createVendorModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <select name="itemId" class="form-control tom-select" required>
                                    <option selected disabled>Choose Product Item *</option>
                                    <option>Cotton</option>
                                    <option>Silk</option>
                                    <option>Wool</option>
                                    <option>Nylon</option>
                                </select>
                                <button class="btn btn-info" type="button" title="Add New Product Item" data-bs-toggle="modal" data-bs-target="#createProductModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="number" name="quantity" class="form-control" placeholder="Stock Quantity *">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="number" name="costPrice" class="form-control" placeholder="Cost Price *">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Save Stock</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade inputForm-modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header" id="editModalLabel">
                <h5 class="modal-title">Edit Stock</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="text" name="lotNo" id="lotNo" disabled="disabled" class="form-control" placeholder="Batch No *" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="vendorId" id="vendorId" class="form-control tom-select" required>
                                <option selected disabled="disabled">Choose Vendor *</option>
                                <option>Alif Enterprise</option>
                                <option>Chowdhury Traders</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="itemId" id="itemId" class="form-control tom-select" required>
                                <option selected disabled>Choose Product Item *</option>
                                <option>Cotton</option>
                                <option>Silk</option>
                                <option>Wool</option>
                                <option>Nylon</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="number" name="quantity" id="quantity" class="form-control" placeholder="Stock Quantity *">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="number" name="costPrice" id="costPrice" class="form-control" placeholder="Cost Price *">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Update Stock</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Create Vendor Modal -->
<div class="modal fade inputForm-modal" id="createVendorModal" tabindex="-1" role="dialog" aria-labelledby="createVendorModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header" id="createVendorModalLabel">
                <h5 class="modal-title">Create Vendor Company</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#createModal">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="vendorCategory" class="form-control tom-select" required>
                                <option selected disabled="disabled">Choose Vendor Category *</option>
                                <option>Raw Material Vendor</option>
                                <option>Chemical Supplier</option>
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
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect"  data-bs-toggle="modal" data-bs-target="#createModal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Save Vendor Company</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Create Product Modal -->
<div class="modal fade inputForm-modal" id="createProductModal" tabindex="-1" role="dialog" aria-labelledby="createProductModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header" id="createProductModalLabel">
                <h5 class="modal-title">Create Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#createModal">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
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
                            <select name="productCategoryId" class="form-control tom-select" required>
                                <option disabled selected>Choose Product Category</option>
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
                            <select name="unitId" class="form-control tom-select" required>
                                <option disabled selected>Choose Product Unit *</option>
                                <option>Pcs</option>
                                <option>Kg</option>
                                <option>QuM</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-toggle="modal" data-bs-target="#createModal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Save Product</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- CONTENT AREA -->

@endsection
