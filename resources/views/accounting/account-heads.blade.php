@extends('layout.app')
@section('content')
@section('title'){{'Account Heads'}} @endsection
<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">
                    <div class="page-title">Account Heads</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="#">Accounting</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Account Heads</li>
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
                <div class="inner-page-title pt-1">Account Heads</div>
            </div>

            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-end">
                <button class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#createModal">
                    Create Head
                </button>
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-lg-8 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-8">
            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                <thead>
                <tr>
                    <th>Head Type</th>
                    <th>Head Title</th>
                    <th>Head Description</th>
                    <th>Head Status</th>
                    <th class="no-content">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Income</td>
                    <td>Product Sale</td>
                    <td>Lorem ipsum dolor sit.</td>
                    <td><span class="badge badge-light-success">Active</span></td>
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
                    <td>Expense</td>
                    <td>Utility Bill</td>
                    <td>Lorem ipsum dolor sit.</td>
                    <td><span class="badge badge-light-danger">Inactive</span></td>
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
                <h5 class="modal-title">Create Account Head</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="text" name="headTitle" class="form-control" placeholder="Account Head Title *" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <textarea name="headDescription" class="form-control" placeholder="Account Head Description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="accountHeadType" class="form-control tom-select" required>
                                <option disabled selected>Choose Head Type *</option>
                                <option>Income</option>
                                <option>Expense</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="accountHeadType" class="form-control tom-select" required>
                                <option selected disabled="disabled">Choose Head Status *</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Save Head</button>
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
                <h5 class="modal-title">Edit Account Head</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="text" name="headTitle" id="headTitle" class="form-control" placeholder="Account Head Title *" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <textarea name="headDescription" id="headDescription" class="form-control" placeholder="Account Head Description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="accountHeadType" class="form-control tom-select" required>
                                <option disabled selected>Choose Head Type *</option>
                                <option>Income</option>
                                <option>Expense</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="accountHeadType" id="accountHeadType" class="form-control tom-select" required>
                                <option selected disabled="disabled">Choose Head Status *</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Update Head</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- CONTENT AREA -->

@endsection