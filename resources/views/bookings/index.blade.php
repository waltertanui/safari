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
                    <form id="bookingForm" onsubmit="sendEmail(event)">
                        @csrf
                        <div class="mb-3">
                            <label for="full_name" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="full_name" name="full_name" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>

                        <div class="mb-3">
                            <label for="tour" class="form-label">Tour Package</label>
                            <select class="form-control" id="tour" name="tour" required>
                                <option value="">Select a tour</option>
                                <option value="Big Five Safari">Big Five Safari</option>
                                <option value="Great Migration">Great Migration</option>
                                <option value="Beach & Safari">Beach & Safari</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="people" class="form-label">Number of People</label>
                            <input type="number" class="form-control" id="people" name="people" min="1" required>
                        </div>

                        <div class="mb-3">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" name="phone" required>
                        </div>

                        <div class="mb-3">
                            <label for="requirements" class="form-label">Special Requirements</label>
                            <textarea class="form-control" id="requirements" name="requirements" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit Booking</button>
                    </form>

                    <script>
                        function sendEmail(e) {
                            e.preventDefault();
                            const form = e.target;
                            const submitBtn = form.querySelector('button[type="submit"]');
                            
                            // Show loading state
                            submitBtn.disabled = true;
                            submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2"></span>Sending...';
                            
                            const templateParams = {
                                to_name: 'Safari Admin',
                                from_name: form.full_name.value,
                                from_email: form.email.value,
                                tour: form.tour.value,
                                people: form.people.value,
                                start_date: form.start_date.value,
                                phone: form.phone.value,
                                requirements: form.requirements.value || 'None specified'
                            };

                            emailjs.send('service_6hvw06c', 'template_2jof1xr', templateParams)
                                .then(function() {
                                    // Success message
                                    const successAlert = document.createElement('div');
                                    successAlert.className = 'alert alert-success mt-3';
                                    successAlert.innerHTML = 'Booking submitted successfully! We will contact you shortly.';
                                    form.appendChild(successAlert);
                                    form.reset();
                                    
                                    // Remove alert after 5 seconds
                                    setTimeout(() => successAlert.remove(), 5000);
                                })
                                .catch(function(error) {
                                    // Error message
                                    const errorAlert = document.createElement('div');
                                    errorAlert.className = 'alert alert-danger mt-3';
                                    errorAlert.innerHTML = 'Failed to send booking. Please try again.';
                                    form.appendChild(errorAlert);
                                    console.error('EmailJS Error:', error);
                                    
                                    // Remove alert after 5 seconds
                                    setTimeout(() => errorAlert.remove(), 5000);
                                })
                                .finally(() => {
                                    // Reset button state
                                    submitBtn.disabled = false;
                                    submitBtn.innerHTML = 'Submit Booking';
                                });
                        }
                    </script>
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