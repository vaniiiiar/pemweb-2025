@php
  use App\Models\PageConfig;
  $config = PageConfig::first();
@endphp

<main>
<section class="banner bg-tertiary position-relative overflow-hidden">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="block text-center text-lg-start pe-0 pe-xl-5">
          <h1 class="text-capitalize mb-4">{{ $config->title ?? 'Welcome to GymZone' }}</h1>
          <p class="mb-4">{{ $config->detail ?? 'Your premier fitness destination' }}</p>
          <a href="#contact" class="btn btn-primary">Get Started <span class="ms-2 fas fa-arrow-right"></span></a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="ps-lg-5 text-center">
          <img loading="lazy" decoding="async"
            src="{{ asset('storage/' . ($config->image ?? 'default-gym.jpg')) }}"
            alt="GymZone Fitness Center" 
            class="img-fluid rounded shadow-lg w-75"
            style="max-height: 400px; object-fit: cover;">
        </div>
      </div>
    </div>
  </div>
  <div class="has-shapes">
    <!-- SVG shapes remain the same -->
  </div>
</section>

<section id="contact" class="section py-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 mb-5 mb-lg-0">
        <div class="section-title pt-4">
          <p class="text-danger text-uppercase fw-bold mb-3">Get In Touch</p>
          <h1>Contact GymZone</h1>
          <p>Have questions about our facilities, classes, or membership options? Our team is ready to help you start your fitness journey.</p>
          
          <div class="mt-5">
            <div class="d-flex mb-4">
              <div class="me-4 text-danger">
                <i class="fas fa-map-marker-alt fa-2x"></i>
              </div>
              <div>
                <h4 class="h5">Our Location</h4>
                <p>123 Fitness Street, Gym District<br>Jakarta, Indonesia 12345</p>
              </div>
            </div>
            
            <div class="d-flex mb-4">
              <div class="me-4 text-danger">
                <i class="fas fa-phone-alt fa-2x"></i>
              </div>
              <div>
                <h4 class="h5">Call Us</h4>
                <p>+62 123 4567 890<br>+62 987 6543 210</p>
              </div>
            </div>
            
            <div class="d-flex">
              <div class="me-4 text-danger">
                <i class="fas fa-envelope fa-2x"></i>
              </div>
              <div>
                <h4 class="h5">Email Us</h4>
                <p>info@gymzone.com<br>support@gymzone.com</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="col-lg-7">
        <div class="contact-form bg-white p-5 rounded shadow">
          <h3 class="mb-4">Send Us a Message</h3>
          <form>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" placeholder="Your name" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder="Your email" required>
              </div>
            </div>
            
            <div class="mb-3">
              <label for="subject" class="form-label">Subject</label>
              <select class="form-select" id="subject" required>
                <option value="" selected disabled>Select a topic</option>
                <option value="membership">Membership Inquiry</option>
                <option value="personal-training">Personal Training</option>
                <option value="group-classes">Group Classes</option>
                <option value="feedback">Feedback/Suggestions</option>
                <option value="other">Other Questions</option>
              </select>
            </div>
            
            <div class="mb-3">
              <label for="message" class="form-label">Your Message</label>
              <textarea class="form-control" id="message" rows="5" placeholder="How can we help you?" required></textarea>
            </div>
            
            <button type="submit" class="btn btn-danger btn-lg">Send Message <i class="ms-2 fas fa-paper-plane"></i></button>
          </form>
        </div>
      </div>
    </div>
    
    <div class="row mt-5">
      <div class="col-12">
        <div class="gym-map rounded overflow-hidden shadow-lg">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.8195613507824!3d-6.194741395493371!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTEnNDEuMSJTIDEwNsKwNDknMTAuMyJF!5e0!3m2!1sen!2sid!4v1620000000000!5m2!1sen!2sid" 
            width="100%" 
            height="400" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>
</main>

@push('styles')
<style>
    .contact-form {
        background: white;
    }
    .contact-form .form-control, 
    .contact-form .form-select {
        border-radius: 0;
        border: 1px solid #ddd;
        padding: 10px 15px;
    }
    .contact-form .form-control:focus, 
    .contact-form .form-select:focus {
        border-color: #dc3545;
        box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
    }
    .gym-map {
        border: 5px solid white;
    }
    .section-title h1 {
        font-size: 2.5rem;
        font-weight: 700;
        color: #333;
    }
</style>
@endpush