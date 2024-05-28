@extends('layouts.appdashboard')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 my-4">
                <h1 class="text-center">SIJAJAN Dashboard</h1>
                <p class="text-center">Welcome to Food Made With Love. Manage your orders, menu, customers, and more.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title mb-0">Orders</h5>
                                <p class="card-text">Manage all orders</p>
                            </div>
                            <i class="fas fa-shopping-basket fa-3x"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-black">View Details <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title mb-0">Menu</h5>
                                <p class="card-text">Update and add new items</p>
                            </div>
                            <i class="fas fa-utensils fa-3x"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-black">View Details <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title mb-0">Customers</h5>
                                <p class="card-text">View customer information</p>
                            </div>
                            <i class="fas fa-users fa-3x"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-black">View Details <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card bg-info text-white">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="card-title mb-0">Reports</h5>
                                <p class="card-text">View sales reports</p>
                            </div>
                            <i class="fas fa-chart-bar fa-3x"></i>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-black">View Details <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
