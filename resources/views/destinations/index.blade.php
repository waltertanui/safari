@extends('layouts.dashboard')

@section('title', 'Destinations')

@section('content')
<div class="container-fluid py-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="h3">Popular Destinations in Kenya</h1>
    </div>

    <ul class="nav nav-tabs mb-4" id="destinationTabs" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="safari-tab" data-bs-toggle="tab" data-bs-target="#safari" type="button" role="tab" aria-controls="safari" aria-selected="true">Safari Destinations</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="beach-tab" data-bs-toggle="tab" data-bs-target="#beach" type="button" role="tab" aria-controls="beach" aria-selected="false">Beach Destinations</button>
        </li>
    </ul>

    <div class="tab-content" id="destinationTabsContent">
        <!-- Safari Destinations Tab -->
        <div class="tab-pane fade show active" id="safari" role="tabpanel" aria-labelledby="safari-tab">
            <div class="row">
                <!-- Masai Mara -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1547970810-dc1eac37d174?w=500&h=500" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="Masai Mara">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Masai Mara National Reserve</h5>
                                    <p class="card-text">Home to the Great Migration and incredible year-round wildlife viewing.</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-primary me-2"></i>Big Five Wildlife</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Maasai Culture</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Hot Air Balloon Safaris</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Amboseli -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1612196808214-b8e1d6145a8c?w=500&h=500" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="Amboseli">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Amboseli National Park</h5>
                                    <p class="card-text">Famous for elephants against the backdrop of Mount Kilimanjaro.</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-primary me-2"></i>Elephant Herds</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Mt. Kilimanjaro Views</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Bird Watching</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lake Nakuru -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1516953953850-0a5f0a3a640b?w=500&h=500" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="Lake Nakuru">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Lake Nakuru National Park</h5>
                                    <p class="card-text">Famous for its flamingos and diverse bird species.</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-primary me-2"></i>Flamingo Viewing</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Bird Watching</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Game Drives</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tsavo -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1549366021-9f761d450615?w=500&h=500" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="Tsavo">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Tsavo National Park</h5>
                                    <p class="card-text">Kenya's largest park known for its red elephants and diverse landscapes.</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-primary me-2"></i>Red Elephants</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Volcanic Landscapes</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Mzima Springs</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Beach Destinations Tab -->
        <div class="tab-pane fade" id="beach" role="tabpanel" aria-labelledby="beach-tab">
            <div class="row">
                <!-- Diani Beach -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f?w=500&h=500" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="Diani Beach">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Diani Beach</h5>
                                    <p class="card-text">Award-winning white sand beach with crystal clear waters.</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-primary me-2"></i>White Sand Beaches</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Water Sports</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Coral Reefs</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Watamu -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1505881502353-a1986add3762?w=500&h=500" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="Watamu">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Watamu</h5>
                                    <p class="card-text">Beautiful coastal town with pristine beaches and marine parks.</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-primary me-2"></i>Marine National Park</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Turtle Watching</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Snorkeling</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lamu Island -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1504467307663-2da37b13a0aa?w=500&h=500" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="Lamu">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Lamu Island</h5>
                                    <p class="card-text">UNESCO World Heritage site with rich Swahili culture.</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-primary me-2"></i>Historic Old Town</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Dhow Sailing</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Cultural Experience</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Malindi -->
                <div class="col-md-6 mb-4">
                    <div class="card shadow">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1559494007-9f5847c49d94?w=500&h=500" class="img-fluid h-100 w-100" style="object-fit: cover;" alt="Malindi">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Malindi</h5>
                                    <p class="card-text">Coastal resort town with Italian influence and beautiful beaches.</p>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-check text-primary me-2"></i>Vasco da Gama Pillar</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Marine National Park</li>
                                        <li><i class="fas fa-check text-primary me-2"></i>Deep Sea Fishing</li>
                                    </ul>
                                    <a href="#" class="btn btn-primary">Explore More</a>
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
    // Gallery data for each destination
    const galleryData = {
        'masai-mara': {
            title: 'Masai Mara National Reserve Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1547970810-dc1eac37d174', caption: 'Stunning savannah landscape'},
                {src: 'https://images.unsplash.com/photo-1549366021-9f761d450615', caption: 'Lion pride on the hunt'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Wildebeest migration'},
                {src: 'https://images.unsplash.com/photo-1516953953850-0a5f0a3a640b', caption: 'Maasai village cultural experience'},
                {src: 'https://images.unsplash.com/photo-1504467307663-2da37b13a0aa', caption: 'Hot air balloon safari'},
                {src: 'https://images.unsplash.com/photo-1535941339077-2dd1c7963098', caption: 'Sunset over the Mara'}
            ]
        },
        'amboseli': {
            title: 'Amboseli National Park Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1612196808214-b8e1d6145a8c', caption: 'Elephants with Mt. Kilimanjaro backdrop'},
                {src: 'https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f', caption: 'Elephant herd crossing the plains'},
                {src: 'https://images.unsplash.com/photo-1505881502353-a1986add3762', caption: 'Giraffes at sunset'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Acacia trees on the savannah'},
                {src: 'https://images.unsplash.com/photo-1549366021-9f761d450615', caption: 'Wildlife at the watering hole'}
            ]
        },
        'lake-nakuru': {
            title: 'Lake Nakuru National Park Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1516953953850-0a5f0a3a640b', caption: 'Flamingos at the lake shore'},
                {src: 'https://images.unsplash.com/photo-1504467307663-2da37b13a0aa', caption: 'Rhino sanctuary'},
                {src: 'https://images.unsplash.com/photo-1535941339077-2dd1c7963098', caption: 'Bird watching paradise'},
                {src: 'https://images.unsplash.com/photo-1547970810-dc1eac37d174', caption: 'Baboon troop'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Lake Nakuru panorama'}
            ]
        },
        'tsavo': {
            title: 'Tsavo National Park Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1549366021-9f761d450615', caption: 'Red elephants of Tsavo'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Mzima Springs'},
                {src: 'https://images.unsplash.com/photo-1535941339077-2dd1c7963098', caption: 'Volcanic landscapes'},
                {src: 'https://images.unsplash.com/photo-1547970810-dc1eac37d174', caption: 'Cheetah on the hunt'},
                {src: 'https://images.unsplash.com/photo-1516953953850-0a5f0a3a640b', caption: 'Tsavo wilderness'}
            ]
        },
        'diani': {
            title: 'Diani Beach Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f', caption: 'White sand beaches'},
                {src: 'https://images.unsplash.com/photo-1559494007-9f5847c49d94', caption: 'Crystal clear waters'},
                {src: 'https://images.unsplash.com/photo-1505881502353-a1986add3762', caption: 'Beach resort'},
                {src: 'https://images.unsplash.com/photo-1504467307663-2da37b13a0aa', caption: 'Water sports activities'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Coral reef snorkeling'}
            ]
        },
        'watamu': {
            title: 'Watamu Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1505881502353-a1986add3762', caption: 'Pristine beaches'},
                {src: 'https://images.unsplash.com/photo-1559494007-9f5847c49d94', caption: 'Marine National Park'},
                {src: 'https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f', caption: 'Turtle watching'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Snorkeling adventures'},
                {src: 'https://images.unsplash.com/photo-1504467307663-2da37b13a0aa', caption: 'Coastal sunset'}
            ]
        },
        'lamu': {
            title: 'Lamu Island Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1504467307663-2da37b13a0aa', caption: 'Historic Old Town'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Traditional dhow sailing'},
                {src: 'https://images.unsplash.com/photo-1535941339077-2dd1c7963098', caption: 'Swahili architecture'},
                {src: 'https://images.unsplash.com/photo-1559494007-9f5847c49d94', caption: 'Cultural festivals'},
                {src: 'https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f', caption: 'Lamu beaches'}
            ]
        },
        'malindi': {
            title: 'Malindi Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1559494007-9f5847c49d94', caption: 'Malindi beaches'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Vasco da Gama Pillar'},
                {src: 'https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f', caption: 'Marine National Park'},
                {src: 'https://images.unsplash.com/photo-1505881502353-a1986add3762', caption: 'Deep sea fishing'},
                {src: 'https://images.unsplash.com/photo-1504467307663-2da37b13a0aa', caption: 'Italian influence in architecture'}
            ]
        }
    };

    // Update all "Explore More" buttons to open the gallery
    document.addEventListener('DOMContentLoaded', function() {
        // Masai Mara
        document.querySelectorAll('.btn-primary').forEach(function(button, index) {
            button.setAttribute('data-bs-toggle', 'modal');
            button.setAttribute('data-bs-target', '#galleryModal');
            
            // Determine which destination this button belongs to
            let destinationKey = '';
            const cardTitle = button.closest('.card-body').querySelector('.card-title').textContent.trim();
            
            if (cardTitle.includes('Masai Mara')) destinationKey = 'masai-mara';
            else if (cardTitle.includes('Amboseli')) destinationKey = 'amboseli';
            else if (cardTitle.includes('Lake Nakuru')) destinationKey = 'lake-nakuru';
            else if (cardTitle.includes('Tsavo')) destinationKey = 'tsavo';
            else if (cardTitle.includes('Diani')) destinationKey = 'diani';
            else if (cardTitle.includes('Watamu')) destinationKey = 'watamu';
            else if (cardTitle.includes('Lamu')) destinationKey = 'lamu';
            else if (cardTitle.includes('Malindi')) destinationKey = 'malindi';
            
            button.setAttribute('data-destination', destinationKey);
        });
        
        // Handle gallery modal opening
        $('#galleryModal').on('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const destinationKey = button.getAttribute('data-destination');
            const galleryInfo = galleryData[destinationKey];
            
            // Update modal title
            document.getElementById('galleryModalLabel').textContent = galleryInfo.title;
            
            // Clear previous gallery
            const galleryContainer = document.querySelector('.gallery-container');
            galleryContainer.innerHTML = '';
            
            // Add images to gallery
            galleryInfo.images.forEach(function(image) {
                const col = document.createElement('div');
                col.className = 'col-md-4 mb-4';
                
                col.innerHTML = `
                    <div class="card gallery-card">
                        <img src="${image.src}" class="card-img-top gallery-img" alt="${image.caption}">
                        <div class="card-body">
                            <p class="card-text">${image.caption}</p>
                        </div>
                    </div>
                `;
                
                galleryContainer.appendChild(col);
            });
        });
    });
</script>

<style>
    .gallery-card {
        transition: transform 0.3s;
        height: 100%;
    }
    
    .gallery-card:hover {
        transform: translateY(-5px);
    }
    
    .gallery-img {
        height: 200px;
        object-fit: cover;
    }
    
    .modal-xl {
        max-width: 90%;
    }
</style>

    <!-- Image Gallery Modal -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-labelledby="galleryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="galleryModalLabel">Destination Gallery</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row gallery-container">
                            <!-- Gallery images will be loaded here dynamically -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Gallery data for each destination
    const galleryData = {
        'masai-mara': {
            title: 'Masai Mara National Reserve Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1547970810-dc1eac37d174', caption: 'Stunning savannah landscape'},
                {src: 'https://images.unsplash.com/photo-1549366021-9f761d450615', caption: 'Lion pride on the hunt'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Wildebeest migration'},
                {src: 'https://images.unsplash.com/photo-1516953953850-0a5f0a3a640b', caption: 'Maasai village cultural experience'},
                {src: 'https://images.unsplash.com/photo-1504467307663-2da37b13a0aa', caption: 'Hot air balloon safari'},
                {src: 'https://images.unsplash.com/photo-1535941339077-2dd1c7963098', caption: 'Sunset over the Mara'}
            ]
        },
        'amboseli': {
            title: 'Amboseli National Park Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1612196808214-b8e1d6145a8c', caption: 'Elephants with Mt. Kilimanjaro backdrop'},
                {src: 'https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f', caption: 'Elephant herd crossing the plains'},
                {src: 'https://images.unsplash.com/photo-1505881502353-a1986add3762', caption: 'Giraffes at sunset'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Acacia trees on the savannah'},
                {src: 'https://images.unsplash.com/photo-1549366021-9f761d450615', caption: 'Wildlife at the watering hole'}
            ]
        },
        'lake-nakuru': {
            title: 'Lake Nakuru National Park Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1516953953850-0a5f0a3a640b', caption: 'Flamingos at the lake shore'},
                {src: 'https://images.unsplash.com/photo-1504467307663-2da37b13a0aa', caption: 'Rhino sanctuary'},
                {src: 'https://images.unsplash.com/photo-1535941339077-2dd1c7963098', caption: 'Bird watching paradise'},
                {src: 'https://images.unsplash.com/photo-1547970810-dc1eac37d174', caption: 'Baboon troop'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Lake Nakuru panorama'}
            ]
        },
        'tsavo': {
            title: 'Tsavo National Park Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1549366021-9f761d450615', caption: 'Red elephants of Tsavo'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Mzima Springs'},
                {src: 'https://images.unsplash.com/photo-1535941339077-2dd1c7963098', caption: 'Volcanic landscapes'},
                {src: 'https://images.unsplash.com/photo-1547970810-dc1eac37d174', caption: 'Cheetah on the hunt'},
                {src: 'https://images.unsplash.com/photo-1516953953850-0a5f0a3a640b', caption: 'Tsavo wilderness'}
            ]
        },
        'diani': {
            title: 'Diani Beach Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f', caption: 'White sand beaches'},
                {src: 'https://images.unsplash.com/photo-1559494007-9f5847c49d94', caption: 'Crystal clear waters'},
                {src: 'https://images.unsplash.com/photo-1505881502353-a1986add3762', caption: 'Beach resort'},
                {src: 'https://images.unsplash.com/photo-1504467307663-2da37b13a0aa', caption: 'Water sports activities'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Coral reef snorkeling'}
            ]
        },
        'watamu': {
            title: 'Watamu Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1505881502353-a1986add3762', caption: 'Pristine beaches'},
                {src: 'https://images.unsplash.com/photo-1559494007-9f5847c49d94', caption: 'Marine National Park'},
                {src: 'https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f', caption: 'Turtle watching'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Snorkeling adventures'},
                {src: 'https://images.unsplash.com/photo-1504467307663-2da37b13a0aa', caption: 'Coastal sunset'}
            ]
        },
        'lamu': {
            title: 'Lamu Island Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1504467307663-2da37b13a0aa', caption: 'Historic Old Town'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Traditional dhow sailing'},
                {src: 'https://images.unsplash.com/photo-1535941339077-2dd1c7963098', caption: 'Swahili architecture'},
                {src: 'https://images.unsplash.com/photo-1559494007-9f5847c49d94', caption: 'Cultural festivals'},
                {src: 'https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f', caption: 'Lamu beaches'}
            ]
        },
        'malindi': {
            title: 'Malindi Gallery',
            images: [
                {src: 'https://images.unsplash.com/photo-1559494007-9f5847c49d94', caption: 'Malindi beaches'},
                {src: 'https://images.unsplash.com/photo-1516426122078-c23e76319801', caption: 'Vasco da Gama Pillar'},
                {src: 'https://images.unsplash.com/photo-1590523741831-ab7e8b8f9c7f', caption: 'Marine National Park'},
                {src: 'https://images.unsplash.com/photo-1505881502353-a1986add3762', caption: 'Deep sea fishing'},
                {src: 'https://images.unsplash.com/photo-1504467307663-2da37b13a0aa', caption: 'Italian influence in architecture'}
            ]
        }
    };

    // Update all "Explore More" buttons to open the gallery
    document.addEventListener('DOMContentLoaded', function() {
        // Masai Mara
        document.querySelectorAll('.btn-primary').forEach(function(button, index) {
            button.setAttribute('data-bs-toggle', 'modal');
            button.setAttribute('data-bs-target', '#galleryModal');
            
            // Determine which destination this button belongs to
            let destinationKey = '';
            const cardTitle = button.closest('.card-body').querySelector('.card-title').textContent.trim();
            
            if (cardTitle.includes('Masai Mara')) destinationKey = 'masai-mara';
            else if (cardTitle.includes('Amboseli')) destinationKey = 'amboseli';
            else if (cardTitle.includes('Lake Nakuru')) destinationKey = 'lake-nakuru';
            else if (cardTitle.includes('Tsavo')) destinationKey = 'tsavo';
            else if (cardTitle.includes('Diani')) destinationKey = 'diani';
            else if (cardTitle.includes('Watamu')) destinationKey = 'watamu';
            else if (cardTitle.includes('Lamu')) destinationKey = 'lamu';
            else if (cardTitle.includes('Malindi')) destinationKey = 'malindi';
            
            button.setAttribute('data-destination', destinationKey);
        });
        
        // Handle gallery modal opening
        $('#galleryModal').on('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const destinationKey = button.getAttribute('data-destination');
            const galleryInfo = galleryData[destinationKey];
            
            // Update modal title
            document.getElementById('galleryModalLabel').textContent = galleryInfo.title;
            
            // Clear previous gallery
            const galleryContainer = document.querySelector('.gallery-container');
            galleryContainer.innerHTML = '';
            
            // Add images to gallery
            galleryInfo.images.forEach(function(image) {
                const col = document.createElement('div');
                col.className = 'col-md-4 mb-4';
                
                col.innerHTML = `
                    <div class="card gallery-card">
                        <img src="${image.src}" class="card-img-top gallery-img" alt="${image.caption}">
                        <div class="card-body">
                            <p class="card-text">${image.caption}</p>
                        </div>
                    </div>
                `;
                
                galleryContainer.appendChild(col);
            });
        });
    });
</script>

<style>
    .gallery-card {
        transition: transform 0.3s;
        height: 100%;
    }
    
    .gallery-card:hover {
        transform: translateY(-5px);
    }
    
    .gallery-img {
        height: 200px;
        object-fit: cover;
    }
    
    .modal-xl {
        max-width: 90%;
    }
</style>
@endsection