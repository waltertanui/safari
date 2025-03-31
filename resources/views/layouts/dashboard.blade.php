<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kenya Safari & Beach Tours - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fc;
        }
        
        .hero-section {
            background-image: url('https://images.unsplash.com/photo-1516426122078-c23e76319801');
            background-size: cover;
            background-position: center;
            height: 200px;
            position: relative;
            border-radius: 10px;
            margin-bottom: 20px;
        }
        
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.4);
            border-radius: 10px;
            display: flex;
            align-items: center;
            padding: 0 30px;
        }
        
        .hero-text {
            color: white;
        }
        
        .safari-logo {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 8px;
        }
        
        .card {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .sidebar-profile {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }
        
        .sidebar-profile img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            object-fit: cover;
            border: 3px solid rgba(255,255,255,0.2);
        }
        
        /* New color scheme */
        .bg-dark {
            background-color: #e67e22 !important;
        }
        
        .btn-primary {
            background-color: #e67e22;
            border-color: #e67e22;
        }
        
        .btn-primary:hover {
            background-color: #d35400;
            border-color: #d35400;
        }
        
        .text-primary {
            color: #e67e22 !important;
        }
        
        .border-left-primary {
            border-left: 4px solid #e67e22;
        }
        
        .border-left-success {
            border-left: 4px solid #3498db;
        }
        
        .border-left-info {
            border-left: 4px solid #9b59b6;
        }
        
        .border-left-warning {
            border-left: 4px solid #f1c40f;
        }
        
        .list-group-item.active, .list-group-item:hover {
            background-color: #f1c40f!important;
        }
    </style>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-dark border-right" id="sidebar-wrapper">
            <div class="sidebar-heading d-flex align-items-center py-3">
                <div class="safari-logo-container me-2 d-flex align-items-center justify-content-center">
                    <i class="fas fa-lion fa-2x text-white"></i>
                </div>
                <div class="site-title">
                    <span class="text-white fw-bold">Kenya</span>
                    <span class="text-warning">Tours</span>
                </div>
            </div>
            
            
            
            <div class="list-group list-group-flush">
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt me-2"></i> Dashboard
                </a>
                <a href="{{ route('tours.index') }}" class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('tours.*') ? 'active' : '' }}">
                    <i class="fas fa-route me-2"></i> Safari Tours
                </a>
                <a href="{{ route('destinations.index') }}" class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('destinations.*') ? 'active' : '' }}">
                    <i class="fas fa-map-marker-alt me-2"></i> Destinations
                </a>
                <a href="#" class="list-group-item list-group-item-action bg-dark text-white">
                    <i class="fas fa-umbrella-beach me-2"></i> Beach Getaways
                </a>
                <a href="{{ route('bookings.index') }}" class="list-group-item list-group-item-action bg-dark text-white {{ request()->routeIs('bookings.*') ? 'active' : '' }}">
                    <i class="fas fa-calendar-check me-2"></i> Book Now
                </a>
            </div>
        </div>

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary rounded-circle p-2" id="menu-toggle">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="d-flex align-items-center">
                        <span class="text-muted me-3">
                            <i class="fas fa-clock me-1"></i>
                            {{ date('l, F j, Y') }}
                        </span>
                        <div class="dropdown">
                            <button class="btn btn-light rounded-circle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-bell"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                <li><a class="dropdown-item" href="#">New booking request</a></li>
                                <li><a class="dropdown-item" href="#">Tour update available</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="container-fluid p-4">
                @if(request()->routeIs('dashboard'))
                <div class="hero-section">
                    <div class="hero-overlay">
                        <div class="hero-text">
                            <h2>Welcome to Kenya Safari & Beach Tours</h2>
                            <p>Discover the magic of Kenya's wildlife and coastal paradise</p>
                        </div>
                    </div>
                </div>
                @endif
                
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>