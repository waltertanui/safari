@extends('layouts.dashboard')

@section('title', 'Book Now')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Book Your Safari</h1>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-body">
                    <form>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Select Tour</label>
                                <select class="form-select" required>
                                    <option value="">Choose a tour...</option>
                                    <option>Masai Mara Safari - 3 Days</option>
                                    <option>Amboseli National Park - 2 Days</option>
                                    <option>Tsavo East & West - 4 Days</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Number of People</label>
                                <input type="number" class="form-control" min="1" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Start Date</label>
                                <input type="date" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Special Requirements</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h5 class="card-title">Booking Information</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="fas fa-info-circle text-primary me-2"></i>All prices are per person</li>
                        <li class="mb-2"><i class="fas fa-info-circle text-primary me-2"></i>50% deposit required</li>
                        <li class="mb-2"><i class="fas fa-info-circle text-primary me-2"></i>Free cancellation up to 7 days before</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection