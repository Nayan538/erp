@extends('layout.app')
@section('content')
@section('title'){{'WO Delivery List'}} @endsection

<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">WO Delivery List</div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item "><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item "><a href="#">WO Delivery</a></li>
                            <li class="breadcrumb-item active" aria-current="page">List</li>
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
                <div class="inner-page-title pt-1">WO Delivery List</div>
            </div>

            <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-end">
                <a href="{{ route('deliveryCreate') }}" class="btn btn-primary me-1">
                    Create WO Delivery
                </a>
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
        <div class="widget-content widget-content-area br-8">
            <table id="zero-config" class="table dt-table-hover" style="width:100%">
                <thead>
                <tr>
                    <th>Delivery No</th>
                    <th>Order No</th>
                    <th>Logistics Company Name</th>
                    <th>Driver Name</th>
                    <th>Delivery Date</th>
                    <th>Delivery Status</th>
                    <th class="no-content">Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>D-1001</td>
                    <td>WO-1001</td>
                    <td>SA Paribahan</td>
                    <td>Hossain Abdullah</td>
                    <td>12 Dec 2022</td>
                    <td class="text-center"><span class="badge badge-success">Completed</span></td>
                    <td>
                        <a href="{{ route('deliveryView') }}" class="bs-tooltip me-2 text-primary"
                           data-toggle="tooltip" data-placement="top" title="View Delivery Challan">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('deliveryEdit') }}" class="action-btn btn-edit bs-tooltip me-2 text-success"
                           data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="javascript:void(0);" onclick="return confirm('Are you sure?')" class="action-btn btn-view bs-tooltip me-2 text-danger"
                           data-toggle="tooltip" data-placement="top" title="Delete">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>D-1002</td>
                    <td>WO-1003</td>
                    <td>Janani Parcel</td>
                    <td>Md Manik</td>
                    <td>13 Dec 2022</td>
                    <td class="text-center"><span class="badge badge-warning">Pending</span></td>
                    <td>
                        <a href="{{ route('deliveryView') }}" class="bs-tooltip me-2 text-primary"
                           data-toggle="tooltip" data-placement="top" title="View Delivery Challan">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="{{ route('deliveryEdit') }}" class="action-btn btn-edit bs-tooltip me-2 text-success"
                           data-toggle="tooltip" data-placement="top" title="Edit">
                            <i class="far fa-edit"></i>
                        </a>
                        <a href="javascript:void(0);" onclick="return confirm('Are you sure?')" class="action-btn btn-view bs-tooltip me-2 text-danger"
                           data-toggle="tooltip" data-placement="top" title="Delete">
                            <i class="far fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td>D-1003</td>
                    <td>WO-1003</td>
                    <td>Sundharban Courier</td>
                    <td>Roni Mollah</td>
                    <td>14 Dec 2022</td>
                    <td class="text-center"><span class="badge badge-info">Processing</span></td>
                    <td>
                        <a href="delivery-view.php" class="bs-tooltip me-2 text-primary"
                           data-toggle="tooltip" data-placement="top" title="View Delivery Challan">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="delivery-edit.php" class="action-btn btn-edit bs-tooltip me-2 text-success"
                           data-toggle="tooltip" data-placement="top" title="Edit">
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

<!-- CONTENT AREA -->

@endsection
