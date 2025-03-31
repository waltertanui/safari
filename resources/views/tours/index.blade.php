@extends('layouts.dashboard')

@section('title', 'Tours')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Safari Tours</h1>
        <div>
            <button class="btn btn-outline-primary me-2" id="gridViewBtn" onclick="switchView('grid')">
                <i class="fas fa-th-large"></i>
            </button>
            <button class="btn btn-outline-secondary" id="listViewBtn" onclick="switchView('list')">
                <i class="fas fa-list"></i>
            </button>
        </div>
    </div>

    <!-- Tour Filter Section -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label class="form-label">Destination</label>
                    <select class="form-select">
                        <option value="">All Destinations</option>
                        <option>Masai Mara</option>
                        <option>Amboseli</option>
                        <option>Tsavo</option>
                        <option>Lake Nakuru</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Duration</label>
                    <select class="form-select">
                        <option value="">Any Duration</option>
                        <option>1-3 Days</option>
                        <option>4-7 Days</option>
                        <option>8+ Days</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">Price Range</label>
                    <select class="form-select">
                        <option value="">Any Price</option>
                        <option>Under $200</option>
                        <option>$200 - $500</option>
                        <option>$500+</option>
                    </select>
                </div>
                <div class="col-md-3 mb-3">
                    <label class="form-label">&nbsp;</label>
                    <button class="btn btn-primary d-block w-100">Filter Tours</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Grid View -->
    <div class="row" id="gridView">
        <!-- Masai Mara Tour -->
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1547970810-dc1eac37d174" class="card-img-top" alt="Masai Mara" style="height: 200px; object-fit: cover;">
                    <span class="position-absolute top-0 end-0 badge bg-primary m-2">Best Seller</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">Masai Mara Safari</h5>
                        <div class="tour-rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                            <small class="text-muted">(48)</small>
                        </div>
                    </div>
                    <p class="card-text">Experience the incredible wildlife and stunning landscapes of Masai Mara.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-muted mb-3">
                            <span><i class="far fa-clock me-1"></i> 3 days</span>
                            <span><i class="fas fa-users me-1"></i> Max 12 people</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-primary fw-bold">From $299</span>
                                <small class="text-muted d-block">per person</small>
                            </div>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tourModal" data-tour="masai-mara">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Amboseli Tour -->
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1612196808214-b8e1d6145a8c" class="card-img-top" alt="Amboseli" style="height: 200px; object-fit: cover;">
                    <span class="position-absolute top-0 end-0 badge bg-success m-2">20% Off</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">Amboseli National Park</h5>
                        <div class="tour-rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <small class="text-muted">(36)</small>
                        </div>
                    </div>
                    <p class="card-text">View elephants against the backdrop of Mount Kilimanjaro.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-muted mb-3">
                            <span><i class="far fa-clock me-1"></i> 2 days</span>
                            <span><i class="fas fa-users me-1"></i> Max 8 people</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-primary fw-bold">From $249</span>
                                <small class="text-muted d-block">per person</small>
                            </div>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tourModal" data-tour="amboseli">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tsavo Tour -->
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1549366021-9f761d450615" class="card-img-top" alt="Tsavo" style="height: 200px; object-fit: cover;">
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">Tsavo East & West</h5>
                        <div class="tour-rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <small class="text-muted">(29)</small>
                        </div>
                    </div>
                    <p class="card-text">Discover the red elephants and diverse wildlife of Tsavo.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-muted mb-3">
                            <span><i class="far fa-clock me-1"></i> 4 days</span>
                            <span><i class="fas fa-users me-1"></i> Max 10 people</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-primary fw-bold">From $279</span>
                                <small class="text-muted d-block">per person</small>
                            </div>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tourModal" data-tour="tsavo">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Lake Nakuru Tour -->
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1516953953850-0a5f0a3a640b" class="card-img-top" alt="Lake Nakuru" style="height: 200px; object-fit: cover;">
                    <span class="position-absolute top-0 end-0 badge bg-warning text-dark m-2">New</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">Lake Nakuru Safari</h5>
                        <div class="tour-rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="far fa-star text-warning"></i>
                            <small class="text-muted">(15)</small>
                        </div>
                    </div>
                    <p class="card-text">Witness thousands of flamingos and diverse wildlife at Lake Nakuru.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-muted mb-3">
                            <span><i class="far fa-clock me-1"></i> 2 days</span>
                            <span><i class="fas fa-users me-1"></i> Max 8 people</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-primary fw-bold">From $199</span>
                                <small class="text-muted d-block">per person</small>
                            </div>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tourModal" data-tour="lake-nakuru">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Diani Beach Tour -->
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f" class="card-img-top" alt="Diani Beach" style="height: 200px; object-fit: cover;">
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">Diani Beach Getaway</h5>
                        <div class="tour-rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star-half-alt text-warning"></i>
                            <small class="text-muted">(42)</small>
                        </div>
                    </div>
                    <p class="card-text">Relax on pristine white sand beaches and enjoy water activities.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-muted mb-3">
                            <span><i class="far fa-clock me-1"></i> 5 days</span>
                            <span><i class="fas fa-users me-1"></i> Max 15 people</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-primary fw-bold">From $349</span>
                                <small class="text-muted d-block">per person</small>
                            </div>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tourModal" data-tour="diani">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Lamu Island Tour -->
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1504467307663-2da37b13a0aa" class="card-img-top" alt="Lamu Island" style="height: 200px; object-fit: cover;">
                    <span class="position-absolute top-0 end-0 badge bg-info m-2">Cultural</span>
                </div>
                <div class="card-body d-flex flex-column">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h5 class="card-title mb-0">Lamu Cultural Tour</h5>
                        <div class="tour-rating">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <small class="text-muted">(31)</small>
                        </div>
                    </div>
                    <p class="card-text">Experience the rich Swahili culture and history of Lamu Island.</p>
                    <div class="mt-auto">
                        <div class="d-flex justify-content-between text-muted mb-3">
                            <span><i class="far fa-clock me-1"></i> 4 days</span>
                            <span><i class="fas fa-users me-1"></i> Max 8 people</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <span class="text-primary fw-bold">From $329</span>
                                <small class="text-muted d-block">per person</small>
                            </div>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tourModal" data-tour="lamu">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- List View (Hidden by default) -->
    <div class="row d-none" id="listView">
        <div class="col-12">
            <div class="list-group">
                <!-- Tours will be listed here in list format -->
                <!-- This is just a placeholder for the list view functionality -->
            </div>
        </div>
    </div>
    
    <!-- Pagination -->
    <div class="row mt-4">
        <div class="col-12">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<!-- Tour Details Modal -->
<div class="modal fade" id="tourModal" tabindex="-1" aria-labelledby="tourModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tourModalLabel">Tour Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div id="tourCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#tourCarousel" data-bs-slide-to="0" class="active"></button>
                                    <button type="button" data-bs-target="#tourCarousel" data-bs-slide-to="1"></button>
                                    <button type="button" data-bs-target="#tourCarousel" data-bs-slide-to="2"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://images.unsplash.com/photo-1547970810-dc1eac37d174" class="d-block w-100" alt="Tour Image 1" style="height: 400px; object-fit: cover;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://images.unsplash.com/photo-1516426122078-c23e76319801" class="d-block w-100" alt="Tour Image 2" style="height: 400px; object-fit: cover;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://images.unsplash.com/photo-1535941339077-2dd1c7963098" class="d-block w-100" alt="Tour Image 3" style="height: 400px; object-fit: cover;">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#tourCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#tourCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            
                            <div class="mt-4">
                                <h4>Tour Description</h4>
                                <p>Experience the incredible wildlife and stunning landscapes of Kenya's most famous national park. The Masai Mara is renowned for its exceptional population of lions, leopards, cheetahs and the annual migration of zebra, Thomson's gazelle, and wildebeest from the Serengeti every year.</p>
                                
                                <h4 class="mt-4">Itinerary</h4>
                                <div class="accordion" id="accordionItinerary">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Day 1: Arrival and First Game Drive
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionItinerary">
                                            <div class="accordion-body">
                                                <p>Morning pickup from your hotel in Nairobi, followed by a scenic drive to Masai Mara. After lunch at the camp, enjoy an afternoon game drive to spot wildlife. Return to the camp for dinner and overnight stay.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Day 2: Full Day Game Drive
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionItinerary">
                                            <div class="accordion-body">
                                                <p>Early morning game drive to catch predators in action. Return to camp for breakfast, then head out for a full day game drive with packed lunch. Visit the Mara River to possibly witness wildebeest crossing. Return to camp for dinner and overnight.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Day 3: Cultural Visit and Departure
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionItinerary">
                                            <div class="accordion-body">
                                                <p>Early morning game drive followed by breakfast. Optional visit to a Maasai village to learn about their culture. After lunch, depart for Nairobi, arriving in the evening.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Tour Highlights</h5>
                                    <ul class="list-group list-group-flush mb-4">
                                        <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Big Five Wildlife Viewing</li>
                                        <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Professional Safari Guide</li>
                                        <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Comfortable Accommodation</li>
                                        <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> All Meals Included</li>
                                        <li class="list-group-item"><i class="fas fa-check-circle text-success me-2"></i> Transportation in 4x4 Vehicle</li>
                                    </ul>
                                    
                                    <h5>Tour Details</h5>
                                    <ul class="list-unstyled">
                                        <li class="mb-2"><i class="far fa-clock me-2"></i> Duration: 3 days</li>
                                        <li class="mb-2"><i class="fas fa-users me-2"></i> Group Size: Max 12 people</li>
                                        <li class="mb-2"><i class="fas fa-map-marker-alt me-2"></i> Location: Masai Mara</li>
                                        <li class="mb-2"><i class="fas fa-calendar-alt me-2"></i> Available: All year</li>
                                    </ul>
                                    
                                    <div class="d-grid gap-2 mt-4">
                                        <span class="text-center mb-2">
                                            <span class="h4 text-primary">$299</span> per person
                                        </span>
                                        <a href="{{ route('bookings.index') }}" class="btn btn-primary">Book This Tour</a>
                                        <button class="btn btn-outline-primary">Add to Wishlist</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function switchView(viewType) {
        if (viewType === 'grid') {
            document.getElementById('gridView').classList.remove('d-none');
            document.getElementById('listView').classList.add('d-none');
            document.getElementById('gridViewBtn').classList.remove('btn-outline-primary');
            document.getElementById('gridViewBtn').classList.add('btn-primary');
            document.getElementById('listViewBtn').classList.remove('btn-primary');
            document.getElementById('listViewBtn').classList.add('btn-outline-secondary');
        } else {
            document.getElementById('gridView').classList.add('d-none');
            document.getElementById('listView').classList.remove('d-none');
            document.getElementById('gridViewBtn').classList.remove('btn-primary');
            document.getElementById('gridViewBtn').classList.add('btn-outline-secondary');
            document.getElementById('listViewBtn').classList.remove('btn-outline-secondary');
            document.getElementById('listViewBtn').classList.add('btn-primary');
            
            // Populate list view dynamically (simplified for this example)
            const listView = document.getElementById('listView').querySelector('.list-group');
            if (listView.children.length === 0) {
                const tours = [
                    { name: 'Masai Mara Safari', price: '$299', duration: '3 days', image: 'https://images.unsplash.com/photo-1547970810-dc1eac37d174' },
                    { name: 'Amboseli National Park', price: '$249', duration: '2 days', image: 'https://images.unsplash.com/photo-1612196808214-b8e1d6145a8c' },
                    { name: 'Tsavo East & West', price: '$279', duration: '4 days', image: 'https://images.unsplash.com/photo-1549366021-9f761d450615' },
                    { name: 'Lake Nakuru Safari', price: '$199', duration: '2 days', image: 'https://images.unsplash.com/photo-1516953953850-0a5f0a3a640b' },
                    { name: 'Diani Beach Getaway', price: '$349', duration: '5 days', image: 'https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f' },
                    { name: 'Lamu Cultural Tour', price: '$329', duration: '4 days', image: 'https://images.unsplash.com/photo-1504467307663-2da37b13a0aa' }
                ];
                
                tours.forEach(tour => {
                    const item = document.createElement('a');
                    item.href = '#';
                    item.className = 'list-group-item list-group-item-action d-flex gap-3 py-3';
                    item.setAttribute('data-bs-toggle', 'modal');
                    item.setAttribute('data-bs-target', '#tourModal');
                    
                    item.innerHTML = `
                        <img src="${tour.image}" alt="${tour.name}" width="80" height="80" class="rounded flex-shrink-0" style="object-fit: cover;">
                        <div class="d-flex gap-2 w-100 justify-content-between">
                            <div>
                                <h6 class="mb-0">${tour.name}</h6>
                                <p class="mb-0 opacity-75">Duration: ${tour.duration}</p>
                            </div>
                            <small class="text-primary fw-bold">${tour.price}</small>
                        </div>
                    `;
                    
                    listView.appendChild(item);
                });
            }
        }
    }
</script>

<style>
    .card {
        transition: transform 0.3s, box-shadow 0.3s;
        border-radius: 10px;
        overflow: hidden;
    }
    
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .tour-rating {
        font-size: 0.8rem;
    }
    
    .badge {
        font-weight: 500;
        padding: 0.5em 0.8em;
    }
    
    .bg-primary {
        background-color: #e67e22 !important;
    }
    
    .text-primary {
        color: #e67e22 !important;
    }
    
    .btn-primary {
        background-color: #e67e22;
        border-color: #e67e22;
    }
    
    .btn-primary:hover {
        background-color: #d35400;
        border-color: #d35400;
    }
    
    .btn-outline-primary {
        color: #e67e22;
        border-color: #e67e22;
    }
    
    .btn-outline-primary:hover {
        background-color: #e67e22;
        border-color: #e67e22;
    }
    
    <!-- Add after the pagination section -->
    
    <!-- Featured Tours Section -->
    <div class="row mt-5">
        <div class="col-12">
            <h3 class="mb-4">Featured Safari Packages</h3>
        </div>
        <div class="col-md-6">
            <div class="card shadow border-0 mb-4">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="https://images.unsplash.com/photo-1523805009345-7448845a9e53" class="img-fluid rounded-start h-100" alt="Big Five Safari" style="object-fit: cover;">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body d-flex flex-column h-100">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Big Five Safari Experience</h5>
                                <span class="badge bg-primary">Premium</span>
                            </div>
                            <p class="card-text">An exclusive 7-day safari adventure to spot all of the Big Five animals in their natural habitat.</p>
                            <div class="mt-auto">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-primary fw-bold">From $899</span>
                                    <a href="#" class="btn btn-sm btn-primary">View Package</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow border-0 mb-4">
                <div class="row g-0">
                    <div class="col-md-5">
                        <img src="https://images.unsplash.com/photo-1516426122078-c23e76319801" class="img-fluid rounded-start h-100" alt="Migration Special" style="object-fit: cover;">
                    </div>
                    <div class="col-md-7">
                        <div class="card-body d-flex flex-column h-100">
                            <div class="d-flex justify-content-between">
                                <h5 class="card-title">Great Migration Special</h5>
                                <span class="badge bg-warning text-dark">Seasonal</span>
                            </div>
                            <p class="card-text">Witness the spectacular wildebeest migration across the Mara River with our special seasonal package.</p>
                            <div class="mt-auto">
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="text-primary fw-bold">From $649</span>
                                    <a href="#" class="btn btn-sm btn-primary">View Package</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Testimonials Section -->
    <div class="row mt-5">
        <div class="col-12">
            <h3 class="mb-4">What Our Travelers Say</h3>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100 border-0">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" class="rounded-circle" width="50" height="50" alt="Sarah J.">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">Sarah Johnson</h6>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="card-text">"Our Masai Mara safari exceeded all expectations. The guides were knowledgeable, we saw all the Big Five, and the accommodations were fantastic. Will definitely book again!"</p>
                    <p class="text-muted mb-0"><small>Masai Mara Safari, April 2023</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100 border-0">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="https://randomuser.me/api/portraits/men/44.jpg" class="rounded-circle" width="50" height="50" alt="Michael T.">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">Michael Thompson</h6>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                    <p class="card-text">"The Amboseli tour was incredible. Seeing elephants with Mt. Kilimanjaro in the background was a photographer's dream. Our guide was patient and made sure we got the best shots."</p>
                    <p class="text-muted mb-0"><small>Amboseli National Park, January 2023</small></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card shadow h-100 border-0">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="flex-shrink-0">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" class="rounded-circle" width="50" height="50" alt="Emma L.">
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">Emma Lewis</h6>
                            <div class="text-warning">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="card-text">"Diani Beach was paradise! The tour was well organized with a perfect balance of activities and relaxation time. The sunset dhow cruise was magical and something I'll never forget."</p>
                    <p class="text-muted mb-0"><small>Diani Beach Getaway, March 2023</small></p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Newsletter Section -->
    <div class="row mt-5">
        <div class="col-12">
            <div class="card shadow border-0 bg-light">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-7">
                            <h4>Subscribe to Our Newsletter</h4>
                            <p class="mb-md-0">Get exclusive offers, wildlife updates, and safari inspiration straight to your inbox.</p>
                        </div>
                        <div class="col-md-5">
                            <form class="row g-2">
                                <div class="col-8">
                                    <input type="email" class="form-control" placeholder="Your email address">
                                </div>
                                <div class="col-4">
                                    <button type="submit" class="btn btn-primary w-100">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Safari Tips Section -->
    <div class="row mt-5 mb-4">
        <div class="col-12">
            <h3 class="mb-4">Safari Travel Tips</h3>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow h-100 border-0">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-camera fa-2x text-primary"></i>
                    </div>
                    <h5 class="card-title">Photography</h5>
                    <p class="card-text">Bring a camera with a good zoom lens and extra batteries for capturing wildlife moments.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow h-100 border-0">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-tshirt fa-2x text-primary"></i>
                    </div>
                    <h5 class="card-title">What to Pack</h5>
                    <p class="card-text">Pack light, neutral-colored clothing, a hat, sunscreen, and insect repellent.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow h-100 border-0">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-cloud-sun fa-2x text-primary"></i>
                    </div>
                    <h5 class="card-title">Best Time</h5>
                    <p class="card-text">The dry seasons (June-October and January-February) offer the best wildlife viewing.</p>
                </div>
            </div>
        </div>
        <div class="col-md-3 mb-4">
            <div class="card shadow h-100 border-0">
                <div class="card-body text-center">
                    <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 80px; height: 80px;">
                        <i class="fas fa-hand-holding-usd fa-2x text-primary"></i>
                    </div>
                    <h5 class="card-title">Tipping</h5>
                    <p class="card-text">Budget for tips: $10-15 per day for guides and $5-10 per day for camp staff.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Update the script to handle dynamic tour data in the modal -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Existing switchView function remains unchanged
        
        // Tour data for dynamic modal content
        const tourData = {
            'masai-mara': {
                title: 'Masai Mara Safari',
                price: '$299',
                duration: '3 days',
                groupSize: 'Max 12 people',
                location: 'Masai Mara National Reserve',
                description: 'Experience the incredible wildlife and stunning landscapes of Kenya\'s most famous national park. The Masai Mara is renowned for its exceptional population of lions, leopards, cheetahs and the annual migration of zebra, Thomson\'s gazelle, and wildebeest from the Serengeti every year.',
                images: [
                    'https://images.unsplash.com/photo-1547970810-dc1eac37d174',
                    'https://images.unsplash.com/photo-1516426122078-c23e76319801',
                    'https://images.unsplash.com/photo-1535941339077-2dd1c7963098'
                ]
            },
            'amboseli': {
                title: 'Amboseli National Park',
                price: '$249',
                duration: '2 days',
                groupSize: 'Max 8 people',
                location: 'Amboseli National Park',
                description: 'Discover the home of the African elephant with breathtaking views of Mount Kilimanjaro. Amboseli offers some of the best opportunities to get close to free-ranging elephants among other wildlife species.',
                images: [
                    'https://images.unsplash.com/photo-1612196808214-b8e1d6145a8c',
                    'https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f',
                    'https://images.unsplash.com/photo-1505881502353-a1986add3762'
                ]
            },
            'tsavo': {
                title: 'Tsavo East & West',
                price: '$279',
                duration: '4 days',
                groupSize: 'Max 10 people',
                location: 'Tsavo National Parks',
                description: 'Explore Kenya\'s largest national park known for its red elephants, diverse landscapes, and abundant wildlife. Tsavo offers a more secluded safari experience away from the crowds.',
                images: [
                    'https://images.unsplash.com/photo-1549366021-9f761d450615',
                    'https://images.unsplash.com/photo-1516426122078-c23e76319801',
                    'https://images.unsplash.com/photo-1516953953850-0a5f0a3a640b'
                ]
            }
        };
        
        // Handle tour modal opening with dynamic content
        $('#tourModal').on('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const tourId = button.getAttribute('data-tour');
            
            if (tourData[tourId]) {
                const tour = tourData[tourId];
                
                // Update modal title
                document.getElementById('tourModalLabel').textContent = tour.title;
                
                // Update carousel images
                const carouselItems = document.querySelectorAll('#tourCarousel .carousel-item img');
                for (let i = 0; i < Math.min(carouselItems.length, tour.images.length); i++) {
                    carouselItems[i].src = tour.images[i];
                }
                
                // Update tour description
                const descriptionElement = document.querySelector('#tourModal .modal-body h4 + p');
                if (descriptionElement) {
                    descriptionElement.textContent = tour.description;
                }
                
                // Update tour details
                const detailElements = document.querySelectorAll('#tourModal .modal-body ul.list-unstyled li');
                if (detailElements.length >= 4) {
                    detailElements[0].innerHTML = `<i class="far fa-clock me-2"></i> Duration: ${tour.duration}`;
                    detailElements[1].innerHTML = `<i class="fas fa-users me-2"></i> Group Size: ${tour.groupSize}`;
                    detailElements[2].innerHTML = `<i class="fas fa-map-marker-alt me-2"></i> Location: ${tour.location}`;
                }
                
                // Update price
                const priceElement = document.querySelector('#tourModal .modal-body .h4.text-primary');
                if (priceElement) {
                    priceElement.textContent = tour.price;
                }
            }
        });
    });
</script>
@endsection