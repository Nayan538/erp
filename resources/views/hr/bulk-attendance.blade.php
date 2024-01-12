@extends('layout.app')
@section('content')
@section('title'){{'Bulk Attendance Create'}} @endsection


<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">Bulk Attendance Create</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">Attendance</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Bulk Attendance Create</li>
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
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-8">
                                <select name="departmentId" class="form-control form-control-sm tom-select" required>
                                    <option disabled="disabled" selected>Choose Department *</option>
                                    <option>Sales & Marketing</option>
                                    <option>Production</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <button class="btn btn-outline-info">Search</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row justify-content-end">
                            <div class="col-6">
                                <input name="attendanceDate" value="" id="attendanceDate" class="form-control form-control-sm datepicker flatpickr flatpickr-input active" type="text" placeholder="Choose Attendance Date">
                            </div>
                            <div class="col-4 text-end">
                                <button class="btn btn-primary">Save Record</button>
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
                <div class="inner-page-title pt-1">Create Bulk Attendance</div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-5 text-end">
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
                    <th class="checkbox-column dt-no-sorting">
                        <div class="form-check form-check-primary d-block new-control">
                            <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                            Full Day
                        </div>
                    </th>
                    <th class="checkbox-column dt-no-sorting">
                        <div class="form-check form-check-primary d-block new-control">
                            <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                            Half Day
                        </div>
                    </th>
                    <th class="checkbox-column dt-no-sorting">
                        <div class="form-check form-check-primary d-block new-control">
                            <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                            Leave
                        </div>
                    </th>
                    <th class="checkbox-column dt-no-sorting">
                        <div class="form-check form-check-primary d-block new-control">
                            <input class="form-check-input chk-parent" type="checkbox" id="form-check-default">
                            Absent
                        </div>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Mehedi Hasan</td>
                    <td>Production</td>
                    <td>Manager</td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Maidul Islam</td>
                    <td>Production</td>
                    <td>Ass Manager</td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Delwar Hossain</td>
                    <td>Sales & Marketing</td>
                    <td>Executive</td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Robiul Islam</td>
                    <td>Admin</td>
                    <td>Chief Executive</td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                    <td class="checkbox-column">
                        <div class="form-check form-check-primary d-block">
                            <input class="form-check-input child-chk" type="checkbox" id="form-check-default">
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<!-- CONTENT AREA -->

@endsection
