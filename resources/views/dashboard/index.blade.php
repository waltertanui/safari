@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Welcome to Kenya Safari Tours</h1>
    </div>
    
    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Tours</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['total_tours'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-route fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Active Tours</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['active_tours'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-hiking fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Destinations</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['destinations'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-map-marker-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Upcoming Safaris</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $stats['upcoming_safaris'] }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Featured Destinations</h6>
                    <a href="{{ route('destinations.index') }}" class="btn btn-sm btn-primary">View All</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Masai Mara -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="position-relative destination-card">
                                <img src="https://images.unsplash.com/photo-1547970810-dc1eac37d174" class="img-fluid rounded" alt="Masai Mara">
                                <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                                    <h6 class="text-white mb-0">Masai Mara</h6>
                                    <small class="text-white-50">Wildlife Safari</small>
                                </div>
                                <div class="position-absolute top-0 end-0 m-2">
                                    <span class="badge bg-primary">Popular</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Diani Beach -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="position-relative destination-card">
                                <img src="https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f" class="img-fluid rounded" alt="Diani Beach">
                                <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                                    <h6 class="text-white mb-0">Diani Beach</h6>
                                    <small class="text-white-50">Coastal Paradise</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Amboseli -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="position-relative destination-card">
                                <img src="https://images.unsplash.com/photo-1612196808214-b8e1d6145a8c" class="img-fluid rounded" alt="Amboseli">
                                <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                                    <h6 class="text-white mb-0">Amboseli</h6>
                                    <small class="text-white-50">Kilimanjaro Views</small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Lamu Island -->
                        <div class="col-md-3 col-sm-6 mb-4">
                            <div class="position-relative destination-card">
                                <img src="https://images.unsplash.com/photo-1504467307663-2da37b13a0aa" class="img-fluid rounded" alt="Lamu Island">
                                <div class="position-absolute bottom-0 start-0 w-100 p-3" style="background: linear-gradient(to top, rgba(0,0,0,0.8), transparent);">
                                    <h6 class="text-white mb-0">Lamu Island</h6>
                                    <small class="text-white-50">Cultural Heritage</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- New section for upcoming tours -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header">
                    <h6 class="m-0 font-weight-bold text-primary">Upcoming Safari Tours</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Tour Name</th>
                                    <th>Destination</th>
                                    <th>Start Date</th>
                                    <th>Duration</th>
                                    <th>Available Spots</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Masai Mara Adventure</td>
                                    <td>Masai Mara</td>
                                    <td>June 15, 2023</td>
                                    <td>5 days</td>
                                    <td>8</td>
                                    <td><span class="badge bg-success">Booking Open</span></td>
                                </tr>
                                <tr>
                                    <td>Coastal Explorer</td>
                                    <td>Diani Beach</td>
                                    <td>July 2, 2023</td>
                                    <td>7 days</td>
                                    <td>4</td>
                                    <td><span class="badge bg-warning text-dark">Almost Full</span></td>
                                </tr>
                                <tr>
                                    <td>Amboseli Safari</td>
                                    <td>Amboseli</td>
                                    <td>June 28, 2023</td>
                                    <td>4 days</td>
                                    <td>12</td>
                                    <td><span class="badge bg-success">Booking Open</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .destination-card {
        transition: transform 0.3s;
        height: 200px;
        overflow: hidden;
        border-radius: 10px;
    }
    
    .destination-card img {
        height: 100%;
        width: 100%;
        object-fit: cover;
    }
    
    .destination-card:hover {
        transform: translateY(-5px);
    }
    
    .badge.bg-primary {
        background-color: #e67e22 !important;
    }
    
    .text-primary {
        color: #e67e22 !important;
    }
</style>
@endsection