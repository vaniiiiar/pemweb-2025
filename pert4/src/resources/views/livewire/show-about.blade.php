<div>
    <!-- Hero Section -->
    <section class="gym-about-hero position-relative overflow-hidden py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h1 class="display-4 fw-bold text-white mb-4">Our Fitness Story</h1>
                    <p class="lead text-white mb-4">At GymZone, we're more than just a gym - we're a community committed to transforming lives through fitness.</p>
                    <div class="d-flex">
                        <a href="#our-mission" class="btn btn-danger btn-lg me-3">Our Mission</a>
                        <a href="#our-team" class="btn btn-outline-light btn-lg">Meet Our Team</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('images/gym-about-hero.jpg') }}" alt="GymZone Fitness Center" class="img-fluid rounded-3 shadow-lg">
                </div>
            </div>
        </div>
        <div class="gym-about-overlay"></div>
    </section>

    <!-- Our Story Section -->
    <section class="py-5 bg-white">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="display-5 fw-bold mb-4">Our Journey</h2>
                    <div class="gym-divider mx-auto mb-4"></div>
                    <p class="lead mb-5">Founded in 2015, GymZone started as a small fitness studio with a big vision. Today, we've grown into Jakarta's premier fitness destination, serving over 5,000 members with state-of-the-art facilities and personalized training programs.</p>
                    
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="p-4 bg-light rounded-3 h-100">
                                <h3 class="text-danger">5+</h3>
                                <p class="mb-0">Years Experience</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-4 bg-light rounded-3 h-100">
                                <h3 class="text-danger">50+</h3>
                                <p class="mb-0">Certified Trainers</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="p-4 bg-light rounded-3 h-100">
                                <h3 class="text-danger">5000+</h3>
                                <p class="mb-0">Happy Members</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section id="our-mission" class="py-5 bg-light">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <img src="{{ asset('images/gym-mission.jpg') }}" alt="GymZone Mission" class="img-fluid rounded-3 shadow">
                </div>
                <div class="col-lg-6">
                    <h2 class="display-5 fw-bold mb-4">Our Mission & Values</h2>
                    <div class="gym-divider mb-4"></div>
                    <div class="d-flex mb-4">
                        <div class="me-4 text-danger">
                            <i class="fas fa-dumbbell fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="h5">Empower Through Fitness</h4>
                            <p class="mb-0">We believe fitness should be accessible to everyone, regardless of age or fitness level.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="me-4 text-danger">
                            <i class="fas fa-heartbeat fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="h5">Holistic Approach</h4>
                            <p class="mb-0">We focus on physical, mental, and emotional wellbeing through comprehensive programs.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="me-4 text-danger">
                            <i class="fas fa-users fa-2x"></i>
                        </div>
                        <div>
                            <h4 class="h5">Community First</h4>
                            <p class="mb-0">Our members are family. We foster a supportive, non-intimidating environment.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="our-team" class="py-5 bg-white">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Meet Our Expert Team</h2>
                    <div class="gym-divider mx-auto mb-4"></div>
                    <p class="lead">Our certified trainers bring expertise, passion, and personalized attention to help you achieve your goals.</p>
                </div>
            </div>
            <div class="row g-4">
                @foreach([
                    ['name' => 'Alex Johnson', 'role' => 'Head Trainer', 'bio' => 'Specializes in strength training and bodybuilding with 10+ years experience.', 'image' => 'trainer1.jpg'],
                    ['name' => 'Sarah Miller', 'role' => 'Yoga Instructor', 'bio' => '500-hour certified yoga teacher with holistic wellness approach.', 'image' => 'trainer2.jpg'],
                    ['name' => 'Mike Chen', 'role' => 'HIIT Specialist', 'bio' => 'Creates high-energy workouts that maximize results in minimal time.', 'image' => 'trainer3.jpg'],
                    ['name' => 'David Wilson', 'role' => 'Nutrition Coach', 'bio' => 'Helps members optimize their diet for performance and results.', 'image' => 'trainer4.jpg']
                ] as $trainer)
                <div class="col-lg-3 col-md-6">
                    <div class="card border-0 shadow-sm h-100">
                        <img src="{{ asset('images/team/' . $trainer['image']) }}" class="card-img-top" alt="{{ $trainer['name'] }}">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-1">{{ $trainer['name'] }}</h5>
                            <p class="text-danger small mb-3">{{ $trainer['role'] }}</p>
                            <p class="card-text small">{{ $trainer['bio'] }}</p>
                        </div>
                        <div class="card-footer bg-transparent border-0 text-center">
                            <a href="#" class="btn btn-sm btn-outline-danger">View Profile</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Facilities Section -->
    <section class="py-5 bg-light">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">World-Class Facilities</h2>
                    <div class="gym-divider mx-auto mb-4"></div>
                    <p class="lead">We invest in premium equipment and spaces to enhance your workout experience.</p>
                </div>
            </div>
            <div class="row g-4">
                @foreach([
                    ['title' => 'Strength Training', 'icon' => 'fas fa-dumbbell'],
                    ['title' => 'Cardio Zone', 'icon' => 'fas fa-running'],
                    ['title' => 'Group Classes', 'icon' => 'fas fa-users'],
                    ['title' => 'Recovery Lounge', 'icon' => 'fas fa-spa'],
                    ['title' => 'Olympic Lifting', 'icon' => 'fas fa-weight-hanging'],
                    ['title' => 'Functional Training', 'icon' => 'fas fa-fire']
                ] as $facility)
                <div class="col-md-4 col-6">
                    <div class="p-4 bg-white rounded-3 text-center h-100">
                        <i class="{{ $facility['icon'] }} text-danger fa-2x mb-3"></i>
                        <h5 class="h6 mb-0">{{ $facility['title'] }}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-5 bg-danger text-white">
        <div class="container py-4">
            <div class="row align-items-center">
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <h3 class="h2 mb-3">Ready to Start Your Fitness Journey?</h3>
                    <p class="lead mb-0">Join GymZone today and experience the difference of personalized fitness.</p>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a href="/membership" class="btn btn-light btn-lg px-4">Become a Member</a>
                </div>
            </div>
        </div>
    </section>
</div>

@push('styles')
<style>
    .gym-about-hero {
        background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                    url('{{ asset("images/gym-banner.jpg") }}');
        background-size: cover;
        background-position: center;
        min-height: 60vh;
        display: flex;
        align-items: center;
    }
    
    .gym-divider {
        width: 80px;
        height: 3px;
        background: #dc3545;
    }
    
    .gym-about-overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 20%;
        background: white;
        clip-path: polygon(0 70%, 100% 0, 100% 100%, 0% 100%);
    }
    
    .card-img-top {
        height: 250px;
        object-fit: cover;
    }
</style>
@endpush