@extends('layout.app')
@section('content')
@section('title'){{'Attendance Records'}} @endsection


<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">Attendance Records</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">HR</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Attendance Records</li>
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

    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 page-title-wrapper">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search align-self-center">
                <div class="inner-page-title pt-1">Attendance Records</div>
            </div>
            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-end">
                <a href="../bulk-attendance" class="btn btn-info me-1">
                    Create Bulk Attendance
                </a>
                <button class="btn btn-primary me-1" data-bs-toggle="modal" data-bs-target="#createModal">
                    Create Attendance
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
                    <th>Attendance Date</th>
                    <th>Status</th>
                    <th>Entry Time</th>
                    <th>Exit Time</th>
                    <th class="no-content">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Mehedi Hasan</td>
                    <td>12 Dec 2022</td>
                    <td>Full Day</td>
                    <td>10:00 AM</td>
                    <td>06:00 PM</td>
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
                    <td>Shipon Modal</td>
                    <td>12 Dec 2022</td>
                    <td>Full Day</td>
                    <td>10:12 AM</td>
                    <td>06:03 PM</td>
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
                    <td>Hafizur Rahman</td>
                    <td>12 Dec 2022</td>
                    <td>Half Day</td>
                    <td>01:00 AM</td>
                    <td>06:23 PM</td>
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
                    <td>Masud Alam</td>
                    <td>12 Dec 2022</td>
                    <td>Absent</td>
                    <td>--</td>
                    <td>--</td>
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
                <h5 class="modal-title">Create Attendance Record</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="staffId" class="form-control tom-select" required>
                                <option disabled="disabled" selected>Choose Staff *</option>
                                <option>Admond Gray (880123456785)</option>
                                <option>Michel Von (880123456785)</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input name="attendanceDate" value="" class="form-control datepicker flatpickr flatpickr-input active" type="text" placeholder="Select Attendance Date..">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="attendanceTypeId" class="form-control tom-select" required>
                                <option disabled="disabled" selected>Choose Status *</option>
                                <option>Full Day</option>
                                <option>Half Day</option>
                                <option>Absent</option>
                                <option>Leave</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-sm-12">
                            <input type="time" name="entryTime" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="time" name="exitTime" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Save Attendance</button>
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
                <h5 class="modal-title">Edit Attendance Record</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"><svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg></button>
            </div>
            <form action="#" method="post">
                <div class="modal-body">
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="staffId" class="form-control tom-select" id="staffId" required>
                                <option disabled="disabled" selected>Choose Staff *</option>
                                <option>Admond Gray (880123456785)</option>
                                <option>Michel Von (880123456785)</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <input name="attendanceDate" value="" id="attendanceDate" class="form-control datepicker flatpickr flatpickr-input active" type="text" placeholder="Select Attendance Date..">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-12">
                            <select name="attendanceTypeId" id="attendanceTypeId" class="form-select" required>
                                <option disabled="disabled" selected>Choose Status *</option>
                                <option>Full Day</option>
                                <option>Half Day</option>
                                <option>Absent</option>
                                <option>Leave</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-md-6 col-sm-12">
                            <input type="time" name="entryTime" id="entryTime" class="form-control">
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <input type="time" name="exitTime" id="exitTime" class="form-control">
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light-danger mt-2 mb-2 btn-no-effect" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary mt-2 mb-2 btn-no-effect">Update Attendance</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- CONTENT AREA -->

@endsection
