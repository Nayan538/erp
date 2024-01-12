@extends('layout.app')
@section('content')
@section('title'){{'Staff Payrolls'}} @endsection


<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">Staff Payrolls</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">Staff</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Payrolls</li>
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
                <div class="inner-page-title pt-1">Payroll Records</div>
            </div>

            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-end">
                <button class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#createModal">
                    Create Payroll Record
                </button>
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-8">
            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                <thead>
                <tr>
                    <th>Staff Name</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Designation Start</th>
                    <th>Designation End</th>
                    <th>Current Salary</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Khairul Islam</td>
                    <td>Sales</td>
                    <td>Manager</td>
                    <td>10 Jan 2022</td>
                    <td>--</td>
                    <td>$ 50,000</td>
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
                    <td>Hasan Masud</td>
                    <td>Marketing</td>
                    <td>Chief Executive</td>
                    <td>01 Sep 2021</td>
                    <td>20 Nov 2022</td>
                    <td>$ 70,000</td>
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
<div class="modal fade inputForm-modal" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">

            <div class="modal-header" id="createModalLabel">
                <h5 class="modal-title">Create Staff Payroll</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="staffId" class="form-control tom-select" required>
                                <option disabled selected>Choose Staff</option>
                                <option>Hasan Mahmud</option>
                                <option>Khairul Islam</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-sm-12">
                            <select name="departmentId" class="form-control tom-select" required>
                                <option disabled="disabled" selected>Choose Department</option>
                                <option>Sales</option>
                                <option>Marketing</option>
                                <option>Production</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="designationId" id="designationId" class="form-control tom-select" required>
                                <option disabled="disabled" selected>Choose Designation *</option>
                                <option>General Manager</option>
                                <option>HR Admin</option>
                                <option>Chief Executive</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-sm-12">
                            <input name="designationStart" value="" class="form-control datepicker flatpickr flatpickr-input active" type="text" placeholder="Select Start Date..">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input name="designationEnd" value="" class="form-control datepicker flatpickr flatpickr-input active" type="text" placeholder="Select End Date..">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="number" name="currentSalary" class="form-control" placeholder="Current Salary *" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Save Payroll</button>
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
                <h5 class="modal-title">Edit Staff Payroll</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="staffId" id="staffId" class="form-control tom-select" required>
                                <option disabled="disabled" selected>Choose Staff *</option>
                                <option>Hasan Mahmud</option>
                                <option>Khairul Islam</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-sm-12">
                            <select name="departmentId" id="departmentId" class="form-control tom-select" required>
                                <option disabled="disabled" selected>Choose Department</option>
                                <option>Sales</option>
                                <option>Marketing</option>
                                <option>Production</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <select name="designationId" id="designationId" class="form-control tom-select" required>
                                <option disabled="disabled" selected>Choose Designation</option>
                                <option>General Manager</option>
                                <option>HR Admin</option>
                                <option>Chief Executive</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-sm-12">
                            <input name="designationStart" value="" id="designationStart" class="form-control datepicker flatpickr flatpickr-input active" type="text" placeholder="Select Start Date..">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input name="designationEnd" value="" id="designationEnd" class="form-control datepicker flatpickr flatpickr-input active" type="text" placeholder="Select End Date..">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input type="number" name="currentSalary" id="currentSalary" class="form-control" placeholder="Current Salary *" required>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Update Payroll</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- CONTENT AREA -->

@endsection