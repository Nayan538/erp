@extends('layout.app')
@section('content')
@section('title'){{'Client Accounts'}} @endsection


<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">Client Accounts</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">Client</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Accounts</li>
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
                <div class="inner-page-title pt-1">Client Accounts</div>
            </div>

            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-end">
                <button class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#createModal">
                    Create Client Account
                </button>
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-8">
            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                <thead>
                <tr>
                    <th>Company Name</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Designation</th>
                    <th>Mobile No</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Artisan</td>
                    <td>Shaun</td>
                    <td>Park</td>
                    <td>Manager</td>
                    <td>+88012224567</td>
                    <td>mail@example.com</td>
                    <td class="text-center">
                        <div class="action-btns">
                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2 text-success"
                               data-toggle="tooltip" data-placement="top" title="Edit"
                               data-bs-toggle="modal" data-bs-target="#editModal">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="javascript:void(0);" onclick="return confirm('Are you sure?')" class="action-btn btn-view bs-tooltip me-2 text-danger"
                               data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Plus Point</td>
                    <td>Arnold</td>
                    <td>Donald</td>
                    <td>Manager</td>
                    <td>+88012224567</td>
                    <td>mail@example.com</td>
                    <td class="text-center">
                        <div class="action-btns">
                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2 text-success"
                               data-toggle="tooltip" data-placement="top" title="Edit"
                               data-bs-toggle="modal" data-bs-target="#editModal">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="javascript:void(0);" onclick="return confirm('Are you sure?')" class="action-btn btn-view bs-tooltip me-2 text-danger"
                               data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Zara Man</td>
                    <td>Black</td>
                    <td>Adam</td>
                    <td>General Manager</td>
                    <td>+88012224567</td>
                    <td>mail@example.com</td>
                    <td class="text-center">
                        <div class="action-btns">
                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2 text-success"
                               data-toggle="tooltip" data-placement="top" title="Edit"
                               data-bs-toggle="modal" data-bs-target="#editModal">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="javascript:void(0);" onclick="return confirm('Are you sure?')" class="action-btn btn-view bs-tooltip me-2 text-danger"
                               data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Fabrilife</td>
                    <td>Don</td>
                    <td>Corlione</td>
                    <td>Accountant</td>
                    <td>+88012224567</td>
                    <td>mail@example.com</td>
                    <td class="text-center">
                        <div class="action-btns">
                            <a href="javascript:void(0);" class="action-btn btn-edit bs-tooltip me-2 text-success"
                               data-toggle="tooltip" data-placement="top" title="Edit"
                               data-bs-toggle="modal" data-bs-target="#editModal">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="javascript:void(0);" onclick="return confirm('Are you sure?')" class="action-btn btn-view bs-tooltip me-2 text-danger"
                               data-toggle="tooltip" data-placement="top" title="Delete">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- Create Modal -->
<div class="modal fade inputForm-modal" id="createModal" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header" id="createModalLabel">
                <h5 class="modal-title">Create Client Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                </button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <div class="input-group">
                                <select name="clientId" class="form-control tom-select" required>
                                    <option disabled selected>Choose Client Company *</option>
                                    <option>Alif Corporation</option>
                                    <option>Hossain Traders</option>
                                    <option>Akbar Traders</option>
                                </select>
                                <button class="btn btn-info" type="button" title="Add New Company" data-bs-toggle="modal" data-bs-target="#createClientModal">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="firstName" class="form-control" placeholder="First Name *" required>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="lastName" class="form-control" placeholder="Last Name *" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="text" name="designation" class="form-control" placeholder="Designation *" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="mobileNo" class="form-control" placeholder="Mobile No *" required>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="email" name="email" class="form-control" placeholder="Email Address *" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="password" name="password" class="form-control" placeholder="Type Password *" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Save Account</button>
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
                <h5 class="modal-title">Edit Client Account</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="clientId" id="clientId" class="form-control tom-select" required>
                                <option selected disabled="disabled">Choose Client Company *</option>
                                <option>Alif Corporation</option>
                                <option>Hossain Traders</option>
                                <option>Akbar Traders</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="firstName" id="firstName" class="form-control" placeholder="First Name *" required>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Last Name *" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="text" name="designation" id="designation" class="form-control" placeholder="Designation *" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-sm-12">
                            <input type="text" name="mobileNo" id="mobileNo" class="form-control" placeholder="Mobile No *" required>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email Address *" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="password" name="password" id="password" class="form-control" placeholder="*type password if you wish to change">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Update Account</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- Create Client Modal -->
<div class="modal fade inputForm-modal" id="createClientModal" tabindex="-1" role="dialog" aria-labelledby="createClientModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header" id="createClientModalLabel">
                <h5 class="modal-title">Create Client Company</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true" data-bs-toggle="modal" data-bs-target="#createClientModal">
                    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="clientCategory" class="form-control tom-select" required>
                                <option selected disabled="disabled">Choose Company Category *</option>
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
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-toggle="modal" data-bs-target="#createModal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Save Client Company</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- CONTENT AREA -->

@endsection
