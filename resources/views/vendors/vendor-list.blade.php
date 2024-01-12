@extends('layout.app')
@section('content')
@section('title'){{'Vendor Companies'}} @endsection


<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">Vendor Companies</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">Vendor</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Companies</li>
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

    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 page-title-wrapper">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search align-self-center">
                <div class="inner-page-title pt-1">Vendor Companies</div>
            </div>

            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-end">
                <button class="btn btn-info me-1">
                    Upload Vendor Companies
                </button>
                <button class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#createModal">
                    Create Vendor Company
                </button>
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-8">
            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                <thead>
                <tr>
                    <th>Company Category</th>
                    <th>Company Name</th>
                    <th>Office Address</th>
                    <th>Website Name</th>
                    <th>Business Currency</th>
                    <th class="no-content">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Raw Material Vendor</td>
                    <td>Alif Enterprise</td>
                    <td>Mirpur, Dhaka, Bangladesh</td>
                    <td><a href="#">www.example.com</a></td>
                    <td>BDT</td>
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
                    <td>Finish Good Vendor</td>
                    <td>Hossain Appreals</td>
                    <td>Banani, Dhaka, Bangladesh</td>
                    <td>--</td>
                    <td>BDT</td>
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
                    <td>Others</td>
                    <td>Fakir Textile</td>
                    <td>Mirpur, Dhaka, Bangladesh</td>
                    <td><a href="#">www.example.com</a></td>
                    <td>USD</td>
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
                    <td>Raw Material Vendor</td>
                    <td>Hasan Enterprise</td>
                    <td>Mirpur, Dhaka, Bangladesh</td>
                    <td>--</td>
                    <td>BDT</td>
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
                <h5 class="modal-title">Create Vendor Company</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="vendorCategory" class="form-control tom-select" required>
                                <option selected disabled>Choose Vendor Category *</option>
                                <option>Raw Material Vendor</option>
                                <option>Finish Good Vendor</option>
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

<!-- Edit Modal -->
<div class="modal fade inputForm-modal" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header" id="editModalLabel">
                <h5 class="modal-title">Edit Vendor Company</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="vendorCategory" id="vendorCategory" class="form-control tom-select" required>
                                <option disabled selected>Choose Vendor Category *</option>
                                <option>Raw Material Vendor</option>
                                <option>Finish Good Vendor</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="text" name="companyName" class="form-control" id="companyName" placeholder="Company Name *" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <textarea name="officeAddress" class="form-control" id="officeAddress" placeholder="Office Address *" required></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="url" name="website" class="form-control" id="website" placeholder="Website URL">
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
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Update Vendor</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- CONTENT AREA -->

@endsection
