@extends('admin.layouts.app')

@section('content')

<section class="section">
    <div class="section-header">
        <h1>Dashbaord</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Today Order</h4>
                        </div>
                        <div class="card-body">
                            {{ $total_order }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Today Earning</h4>
                        </div>
                        <div class="card-body">
                            $0
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Today Delivery</h4>
                        </div>
                        <div class="card-body">
                            {{ $total_delivery }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Status</h4>
                        </div>
                        <div class="card-body">
                            0
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-undo"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Order</h4>
                        </div>
                        <div class="card-body">
                            {{ $total_order }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-success">
                        <i class="fas fa-dollar-sign"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Earning</h4>
                        </div>
                        <div class="card-body">
                            $3694
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Users</h4>
                        </div>
                        <div class="card-body">
                            {{ $total_user}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Admin</h4>
                        </div>
                        <div class="card-body">

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Products</h4>
                        </div>
                        <div class="card-body">
                            {{ $total_product}}
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-warning">
                        <i class="fas fa-th-large"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Total Delivery</h4>
                        </div>
                        <div class="card-body">
                            0
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <div class="section-body">
        <div class="row mt-4">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Today New Order</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive table-invoice">
                            <table class="table table-striped" id="dataTable">
                                <thead>
                                    <tr>
                                        <th width="5%">SN</th>
                                        <th width="10%">Customer</th>
                                        <th width="10%">Order Id</th>
                                        <th width="10%">Date</th>
                                        <th width="10%">Quantity</th>
                                        <th width="10%">Amount</th>
                                        <th width="10%">Order Status</th>
                                        <th width="10%">Payment</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


@endsection
