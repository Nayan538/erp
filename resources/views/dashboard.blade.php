@extends('layout.app')
@section('content')
@section('title'){{'Dashboard'}} @endsection

<!--  BEGIN BREADCRUMBS  -->
<div class="secondary-nav">
    <div class="breadcrumbs-container" data-page-heading="Analytics">
        <header class="header navbar navbar-expand-sm">
            <a href="javascript:void(0);" class="btn-toggle sidebarCollapse" data-placement="bottom">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
            </a>
            <div class="d-flex breadcrumb-content">
                <div class="page-header">

                    <div class="page-title">
                    </div>

                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active"><a href="#">Dashboard</a></li>
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
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <div class="inner-page-title pt-1">
                    <img src="src/assets/img/mm-associates-logo.png" width="100" >
                    <h5>M. M. Associates Limited</h5>
<!--                    <p>Savar, Asulia, Dhaka, BD</p>-->
                </div>
            </div>
        </div>
    </div>

    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 page-title-wrapper">
        <div class="row align-items-center">
            <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search align-self-center">
                <div class="inner-page-title pt-1">Dashboard</div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget">

            <div class="widget-heading">
                <h5 class="">Frequent WO Items</h5>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Total Sold</th>
                                <th>Current Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span>Collar Sticker</span></td>
                                <td>2488 PCs</td>
                                <td>789 PCs</td>
                            </tr>
                            <tr>
                                <td><span>Nylon</span></td>
                                <td>5345 PCs</td>
                                <td>34 PCs</td>
                            </tr>
                            <tr>
                                <td><span>Silk</span></td>
                                <td>3443 PCs</td>
                                <td>234 PCs</td>
                            </tr>
                            <tr>
                                <td><span>Wool</span></td>
                                <td>2488 PCs</td>
                                <td>333 PCs</td>
                            </tr>
                            <tr>
                                <td><span>Polyester</span></td>
                                <td>5656 PCs</td>
                                <td>778 PCs</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget">

            <div class="widget-heading">
                <h5 class="">Frequent PO Items</h5>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Total Purchased</th>
                                <th>Current Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span>Nylon</span></td>
                                <td>5345 PCs</td>
                                <td>34 PCs</td>
                            </tr>
                            <tr>
                                <td><span>Wool</span></td>
                                <td>2488 PCs</td>
                                <td>333 PCs</td>
                            </tr>
                            <tr>
                                <td><span>Collar Sticker</span></td>
                                <td>2488 PCs</td>
                                <td>789 PCs</td>
                            </tr>
                            <tr>
                                <td><span>Silk</span></td>
                                <td>3443 PCs</td>
                                <td>234 PCs</td>
                            </tr>
                            <tr>
                                <td>Polyester</td>
                                <td>5656 PCs</td>
                                <td>778 PCs</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget">

            <div class="widget-heading">
                <h5 class="">Latest PO List</h5>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Order No</th>
                            <th>Date</th>
                            <th>Qty</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="#">#PO-1005</a></td>
                            <td>16 Dec 2022</td>
                            <td>566 PCs</td>
                            <td>$ 34,567.00</td>
                        </tr>
                        <tr>
                            <td><a href="#">#PO-1004</a></td>
                            <td>15 Dec 2022</td>
                            <td>536 PCs</td>
                            <td>$ 34,567.00</td>
                        </tr>
                        <tr>
                            <td><a href="#">#PO-1003</a></td>
                            <td>13 Dec 2022</td>
                            <td>156 PCs</td>
                            <td>$ 21,567.00</td>
                        </tr>
                        <tr>
                            <td><a href="#">#PO-1002</a></td>
                            <td>13 Dec 2022</td>
                            <td>346 PCs</td>
                            <td>$ 34,567.00</td>
                        </tr>
                        <tr>
                            <td><a href="#">#PO-1001</a></td>
                            <td>12 Dec 2022</td>
                            <td>346 PCs</td>
                            <td>$ 12,787.00</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget">

            <div class="widget-heading">
                <h5 class="">Latest WO List</h5>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Order No</th>
                            <th>Batch No</th>
                            <th>Qty</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><a href="#">#WO-1005</a></td>
                            <td>B1001</td>
                            <td>566 PCs</td>
                            <td>$ 34,567.00</td>
                        </tr>
                        <tr>
                            <td><a href="#">#WO-1004</a></td>
                            <td>B1002</td>
                            <td>536 PCs</td>
                            <td>$ 14,567.00</td>
                        </tr>
                        <tr>
                            <td><a href="#">#WO-1003</a></td>
                            <td>B1003</td>
                            <td>156 PCs</td>
                            <td>$ 21,567.00</td>
                        </tr>
                        <tr>
                            <td><a href="#">#WO-1002</a></td>
                            <td>B1004</td>
                            <td>336 PCs</td>
                            <td>$ 34,567.00</td>
                        </tr>
                        <tr>
                            <td><a href="#">#WO-1001</a></td>
                            <td>B1005</td>
                            <td>336 PCs</td>
                            <td>$ 34,567.00</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget">

            <div class="widget-heading">
                <h5 class="">Latest Delivery</h5>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Delivery No</th>
                            <th>Delivery Date</th>
                            <th>Order No</th>
                            <th>Logistics</th>
                            <th>Qty</th>
                            <th class="text-center">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>#D-1005</td>
                            <td>17 Dec 2022</td>
                            <td>#PO-1001</td>
                            <td>SA Paribahan</td>
                            <td>566 PCs</td>
                            <td class="text-center"><span class="badge badge-warning">Pending</span></td>
                        </tr>
                        <tr>
                            <td>#D-1004</td>
                            <td>16 Dec 2022</td>
                            <td>#WO-1002</td>
                            <td>Janani Parcel</td>
                            <td>7867 PCs</td>
                            <td class="text-center"><span class="badge badge-info">Processing</span></td>
                        </tr>
                        <tr>
                            <td>#D-1003</td>
                            <td>16 Dec 2022</td>
                            <td>#PO-1002</td>
                            <td>SA Paribahan</td>
                            <td>8889 PCs</td>
                            <td class="text-center"><span class="badge badge-danger">Cancelled</span></td>
                        </tr>
                        <tr>
                            <td>#D-1002</td>
                            <td>15 Dec 2022</td>
                            <td>#WO-1001</td>
                            <td>Rangdhanu Courier</td>
                            <td>1247 PCs</td>
                            <td class="text-center"><span class="badge badge-warning">Pending</span></td>
                        </tr>
                        <tr>
                            <td>#D-1001</td>
                            <td>13 Dec 2022</td>
                            <td>#PO-1003</td>
                            <td>Sundharban Courier</td>
                            <td>235 PCs</td>
                            <td class="text-center"><span class="badge badge-success">Completed</span></td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget">

            <div class="widget-heading">
                <h5 class="">Today's Attendance Report</h5>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Total Employee</th>
                            <th>Present</th>
                            <th>Absent</th>
                            <th>On Leave</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>125</td>
                            <td>110</td>
                            <td>7</td>
                            <td>8</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget">

<!--            <div class="widget-heading">-->
<!--                <h5 class="">Most Leave Taker</h5>-->
<!--            </div>-->

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Most Leave Taker</th>
                            <th>Most Absent</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Hafizur Rahman - 6 days</td>
                            <td>Jahid Hasan - 15 days</td>
                        </tr>
                        <tr>
                            <td>Mollah Ibrahim - 10 days</td>
                            <td>Mainul Islam - 2 days</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- CONTENT AREA -->

@endsection