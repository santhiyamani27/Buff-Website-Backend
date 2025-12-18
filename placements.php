<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Placement - Buff Institute | 98% Job Placement Success Rate</title>
    <link rel="icon" type="image/x-icon" href="./assets/images/logo/buff-fav.jpeg" />

    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Font Awesome for Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    />

    <!-- Animate on Scroll (AOS) Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />

    <style>
      /* --- Custom Styles --- */
      body {
        font-family: "Poppins", sans-serif;
        color: #333;
        background-color: #f8f9fa;
      }

      :root {
        --primary-blue: #0065ff;
        --secondary-blue: #0052cc;
        --light-blue: #e6f0ff;
        --text-dark: #212529;
        --text-light: #6c757d;
      }

      /* --- Animations --- */
      @keyframes slide {
        from {
          transform: translateX(0);
        }
        to {
          transform: translateX(-100%);
        }
      }

      /* --- Navigation --- */
      :root {
        --primary-blue: #0d6efd;
        --text-dark: #212529;
        --text-muted: #6c757d;
      }

      body {
        font-family: "Poppins", sans-serif;
        background-color: #f8f9fa;
      }

      /* Navbar Styling */
      .navbar {
        background-color: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        padding-top: 1rem;
        padding-bottom: 1rem;
      }

      .navbar-brand {
        font-weight: 700;
        font-size: 1.8rem;
        color: var(--primary-blue);
        line-height: 1;
      }

      .brand-subtitle {
        font-size: 0.7rem;
        color: var(--text-dark);
        display: block;
        font-weight: 400;
        letter-spacing: 0.5px;
      }

      .nav-link {
        color: var(--text-dark);
        font-weight: 500;
        margin-right: 15px;
        transition: color 0.3s;
      }

      .nav-link:hover {
        color: var(--primary-blue);
      }

      /* Phone Section in Navbar */
      .speak-to-us {
        text-align: right;
        margin-right: 20px;
        line-height: 1.2;
      }

      .speak-label {
        font-size: 0.8rem;
        color: var(--text-dark);
        display: block;
      }

      .speak-number {
        font-weight: 700;
        color: var(--primary-blue);
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 5px;
      }

      /* Enquire Button */
      .btn-enquire {
        border: 2px solid var(--primary-blue);
        color: var(--primary-blue);
        font-weight: 600;
        padding: 8px 20px;
        border-radius: 5px;
        transition: all 0.3s;
      }

      .btn-enquire:hover {
        background-color: var(--primary-blue);
        color: white;
      }

      /* Modal Customization */
      .modal-header {
        border-bottom: none;
        padding-bottom: 0;
      }

      .modal-title {
        font-weight: 700;
      }

      .modal-footer {
        border-top: none;
        justify-content: center;
        padding-top: 0;
        padding-bottom: 1.5rem;
      }

      .btn-submit {
        background-color: var(--primary-blue);
        color: white;
        width: 100%;
        padding: 10px;
        font-weight: 600;
        border: none;
      }

      .btn-submit:hover {
        background-color: #0b5ed7;
      }

      /* Dropdown hover behavior for desktop */
      @media (min-width: 992px) {
        .dropdown:hover .dropdown-menu {
          display: block;
          margin-top: 0;
        }
      }

      /* --- Hero Section --- */
      .hero {
        background: url('./assets/images/placements/Dev.jpg')
            no-repeat center center;
        background-size: cover;
        color: #fff;
        padding: 12rem 0 8rem 0;
        position: relative;
      }
      .hero h1 {
        font-weight: 800;
        font-size: 3.5rem;
      }
      .hero p {
        font-size: 1.1rem;
        max-width: 600px;
        margin: 1.5rem auto;
      }
      .stats-card {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 1rem;
        padding: 2rem;
        backdrop-filter: blur(10px);
      }
      .stat-number {
        font-size: 3rem;
        font-weight: 700;
        color: #fff;
      }
      .stat-label {
        font-size: 1rem;
        color: rgba(255, 255, 255, 0.8);
      }

      /* --- General Section Styling --- */
      section {
        padding: 6rem 0;
      }
      .section-title {
        font-weight: 700;
        color: var(--primary-blue);
        font-size: 2.5rem;
        margin-bottom: 1rem;
      }
      .section-subtitle {
        color: var(--text-light);
        max-width: 700px;
        margin: 0 auto 3rem auto;
      }

      /* --- Placement Process Section --- */
      .process-card {
        background: #fff;
        border-radius: 1rem;
        padding: 2rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        border: 1px solid #eee;
      }
      .process-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 82, 204, 0.1);
      }
      .process-number {
        background-color: var(--light-blue);
        color: var(--primary-blue);
        width: 50px;
        height: 50px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 1.5rem;
        margin-bottom: 1rem;
      }
      .process-card h3 {
        font-weight: 600;
        font-size: 1.2rem;
        color: var(--text-dark);
      }
      .process-card p {
        color: var(--text-light);
        font-size: 0.9rem;
      }

      /* --- Companies Section --- */
      .companies-section {
        background-color: #fff;
      }
      .logos {
        overflow: hidden;
        padding: 40px 0;
        white-space: nowrap;
        position: relative;
      }
      .logos:before,
      .logos:after {
        position: absolute;
        top: 0;
        width: 150px;
        height: 100%;
        content: "";
        z-index: 2;
      }
      .logos:before {
        left: 0;
        background: linear-gradient(to left, rgba(255, 255, 255, 0), white);
      }
      .logos:after {
        right: 0;
        background: linear-gradient(to right, rgba(255, 255, 255, 0), white);
      }
      .logos-slide {
        display: inline-block;
        animation: 35s slide infinite linear;
      }
      .logos-slide img {
        height: 50px;
        margin: 0 40px;
        /* filter: grayscale(100%); */
        opacity: 0.7;
        transition: all 0.3s;
      }
      .logos-slide img:hover {
        filter: grayscale(0%);
        opacity: 1;
      }

      /* --- Testimonials & Other Cards --- */
      .testimonial-card,
      .industry-card,
      .salary-card {
        background: #dfedfd;
        border-radius: 1rem;
        padding: 2rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        height: 100%;
      }
      .testimonial-card-1,
      .industry-card,
      .salary-card {
        background: #fff;
        border-radius: 1rem;
        padding: 2rem;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease;
        height: 100%;
      }
      .testimonial-card:hover,
      .industry-card:hover,
      .salary-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 82, 204, 0.1);
      }
      .testimonial-card .initial {
        width: 60px;
        height: 60px;
        background-color: var(--primary-blue);
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        font-weight: 600;
      }
      .testimonial-card h5 {
        font-weight: 600;
      }
      .testimonial-card .salary-increase {
        font-weight: 700;
        color: #28a745;
      }
      .course-chip {
        background-color: var(--light-blue);
        color: var(--primary-blue);
        padding: 0.3rem 0.8rem;
        border-radius: 50px;
        font-size: 0.8rem;
        font-weight: 600;
      }

      .industry-card i {
        font-size: 2.5rem;
        color: var(--primary-blue);
      }
      .industry-card .percentage {
        font-weight: 600;
        color: #0d6efd;
      }
      .salary-card {
        /* background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue)); */
        background-color: #fff;
        color: #0d6efd;
      }
      .salary-card .lpa {
        font-size: 2.2rem;
        font-weight: 700;
      }
      .salary-card .growth {
        /* background: rgba(255,255,255,0.2); */
        padding: 0.2rem 0.6rem;
        border-radius: 50px;
        font-size: 0.9rem;
        color: #28a745;
      }

      /* --- Placement Support Section --- */
      .support-list .list-group-item {
        border: none;
        padding-left: 0;
        font-size: 1.1rem;
        font-weight: 500;
      }
      .support-list .list-group-item i {
        color: var(--secondary-blue);
        margin-right: 1rem;
      }
      .placement-form-card {
        background: linear-gradient(
          135deg,
          var(--secondary-blue),
          var(--primary-blue)
        );
        color: #fff;
        border-radius: 1rem;
        padding: 2.5rem;
        box-shadow: 0 10px 30px rgba(0, 82, 204, 0.2);
      }
      .placement-form-card h3 {
        font-weight: 700;
      }
      .placement-form-card .btn-light {
        font-weight: 600;
        padding: 0.8rem 2rem;
        border-radius: 0.5rem;
        color: var(--primary-blue);
        width: 100%;
      }

      /* Comprehensive Placement Support */

      .main-title {
        color: #0d2a57; /* A dark blue color */
        font-weight: 700;
      }

      .feature-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 2.5rem;
        opacity: 0; /* Initially hidden for animation */
      }

      .feature-icon {
        flex-shrink: 0;
        width: 48px;
        height: 48px;
        background-color: #0d6efd; /* Bootstrap primary blue */
        border-radius: 0.75rem; /* Rounded corners */
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 1.5rem;
        color: white;
        font-size: 1.5rem;
        box-shadow: 0 4px 15px rgba(13, 110, 253, 0.2);
      }

      .feature-content h5 {
        font-weight: 600;
        color: #212529;
      }

      .feature-content p {
        color: #6c757d;
        font-size: 0.95rem;
        line-height: 1.6;
      }

      .placement-card {
        background-color: #0d6efd;
        border-radius: 1.5rem;
        padding: 2.5rem;
        color: white;
        box-shadow: 0 10px 30px rgba(13, 110, 253, 0.3);
        opacity: 0; /* Initially hidden for animation */
      }

      .placement-card h3 {
        font-weight: 700;
        margin-bottom: 2rem;
      }

      .info-box {
        background-color: rgba(255, 255, 255, 0.15);
        padding: 1.5rem;
        border-radius: 1rem;
        margin-bottom: 1rem;
      }

      .info-box h6 {
        font-weight: 600;
        margin-bottom: 0.25rem;
        font-size: 1rem;
      }

      .info-box p {
        margin: 0;
        font-size: 0.9rem;
        opacity: 0.9;
      }

      .btn-apply {
        background-color: white;
        color: #0d6efd;
        font-weight: 600;
        padding: 0.85rem 1.5rem;
        border-radius: 0.75rem;
        transition: all 0.3s ease;
        width: 100%;
        margin-top: 1rem;
        border: none;
      }

      .btn-apply:hover {
        background-color: #f0f0f0;
        color: #0a58ca;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      }

      /* --- FAQs --- */
      .accordion-item {
        margin-bottom: 1rem;
        border: 1px solid #eee;
        border-radius: 0.5rem !important;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      }
      .accordion-button {
        font-weight: 600;
        color: var(--text-dark);
      }
      .accordion-button:not(.collapsed) {
        background-color: var(--light-blue);
        color: var(--primary-blue);
        box-shadow: none;
      }
      .accordion-button:focus {
        box-shadow: none;
      }

      /* --- Final CTA --- */
      .final-cta {
        background: linear-gradient(
          135deg,
          var(--primary-blue),
          var(--secondary-blue)
        );
        color: #fff;
        border-radius: 2rem;
      }
      .final-cta .btn-light,
      .final-cta .btn-outline-light {
        padding: 0.8rem 2rem;
        font-weight: 600;
        border-radius: 0.5rem;
        margin: 0 0.5rem;
      }
      .final-cta .btn-light {
        color: var(--primary-blue);
      }

      /* --- Footer --- */
      footer {
        background-color: #eff6ff;
        color: #adb5bd;
        padding-top: 60px;
      }
      footer h5 {
        color: rgb(17 24 39);
        font-weight: 600;
        margin-bottom: 20px;
      }
      footer a {
        color: #9ca3af;
        text-decoration: none;
        transition: color 0.3s;
      }
      footer a:hover {
        color: #0d6efd;
      }
      .footer-links li {
        margin-bottom: 10px;
      }
      .footer-bottom {
        border-top: 1px solid #343a40;
        padding: 20px 0;
        margin-top: 40px;
      }

      /* --- Responsive Adjustments --- */
      @media (max-width: 991.98px) {
        .hero h1 {
          font-size: 2.8rem;
        }
        .navbar-collapse {
          background: #fff;
          padding: 1rem;
          border-radius: 0.5rem;
          margin-top: 1rem;
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        .navbar.scrolled .navbar-collapse .nav-link,
        .navbar-collapse .nav-link {
          color: var(--text-dark) !important;
        }
      }
      @media (max-width: 767.98px) {
        section {
          padding: 4rem 0;
        }
        .hero {
          padding: 10rem 0 4rem 0;
        }
        .hero h1 {
          font-size: 2.2rem;
        }
        .section-title {
          font-size: 2rem;
        }
        .stat-number {
          font-size: 2rem;
        }
        .stats-card .col-6 {
          margin-bottom: 2rem;
        }
        .header-contact {
          display: none;
        }
      }

      /* whatsapp section */
      .whatsapp-fab {
        position: fixed;
        bottom: 20px;
        width: 50px;
        height: 50px;
        background-color: #25d366;
        color: #fff;
        border-radius: 50%;
        text-align: center;
        font-size: 24px;
        box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.4);
        z-index: 1000;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        transition: transform 0.2s;
      }
      .whatsapp-fab:hover {
        transform: scale(1.1);
        color: #fff;
      }
      .whatsapp-fab.left {
        left: 20px;
      }
      .whatsapp-fab.right {
        right: 20px;
      }

    </style>
  </head>
  <body>
  <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="index.html">
          <img
            src="./assets/images/logo/logo.svg"
            alt="buff"
            class="img-fluid"
          />
        </a>

        <!-- Mobile Toggle -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto align-items-center">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>

            <!-- Dropdowns -->
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                >Courses</a
              >
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="graphic-design.html"
                    >Graphic Design</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="ux-ui-design.html"
                    >UX/UI Design</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="web-design.html">Web Design</a>
                </li>
                <li>
                  <a
                    class="dropdown-item"
                    href="video-editing-and-animation.html"
                    >Video Editing & Animation</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="master-design-tech.html"
                    >Master of Design Technology</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="upcoming-batch.html"
                >Upcoming Batches</a
              >
            </li>

            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                >More</a
              >
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="placements.html">Placements</a>
                </li>
                <li>
                  <a class="dropdown-item" href="student-work.html"
                    >Student Portfolio</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="#">Events</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Blogs</a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>

          <!-- Right Side Actions -->
          <div
            class="d-flex align-items-center flex-column flex-lg-row mt-3 mt-lg-0 gap-3"
          >
            <div class="speak-to-us d-none d-lg-block">
              <span class="speak-label">Speak To Us</span>
              <a href="tel:88706 22270" class="speak-number">
                <i class="fa-solid fa-phone-volume"></i> 88706 22270
              </a>
            </div>

            <!-- Mobile only phone display -->
            <div class="d-lg-none mb-2">
              <a href="tel:88706 22270" class="speak-number">
                <i class="fa-solid fa-phone-volume"></i> 88706 22270
              </a>
            </div>

            <button
              class="btn btn-enquire"
              data-bs-toggle="modal"
              data-bs-target="#enquireModal"
            >
              Enquire Now
            </button>
          </div>
        </div>
      </div>
    </nav>

    <main>
      <!-- Hero Section -->
      <section class="hero text-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <h1 data-aos="fade-up">Your Dream Job Awaits You</h1>
              <p data-aos="fade-up" data-aos-delay="100">
                98% placement success rate with guaranteed job placement
                support. Join 500+ students who have landed their dream careers
                at top companies.
              </p>
            </div>
          </div>
          <div
            class="row mt-5 justify-content-center"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <div class="col-lg-10">
              <div class="stats-card">
                <div class="row">
                  <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <div class="stat-number" data-target="98">0</div>
                    <div class="stat-label">Placement Rate</div>
                  </div>
                  <div class="col-6 col-md-3 mb-4 mb-md-0">
                    <div class="stat-number" data-target="500">0</div>
                    <div class="stat-label">Students Placed</div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="stat-number" data-target="50">0</div>
                    <div class="stat-label">Partner Companies</div>
                  </div>
                  <div class="col-6 col-md-3">
                    <div class="stat-number" data-target="300">0</div>
                    <div class="stat-label">Avg Salary Boost</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Proven Placement Process Section -->
      <section class="placement-process">
        <div class="container text-center">
          <!-- Main Title -->
          <div class="text-center mb-5 animate__animated animate__fadeInDown">
            <h1 class="main-title">
              Our Proven <span class="text-primary">Placement Process</span>
            </h1>
          </div>
          <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
            A comprehensive 360-degree approach to ensure your career success
            from day one of your course.
          </p>
          <div class="row">
            <!-- Process items will be dynamically generated here for brevity or can be hardcoded -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="process-card text-start">
                <div class="process-number">1</div>
                <h3>Profile Building</h3>
                <p>
                  Professional resume creation, LinkedIn optimization, and
                  portfolio development with industry experts.
                </p>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-4"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="process-card text-start">
                <div class="process-number">2</div>
                <h3>Skill Assessment</h3>
                <p>
                  Comprehensive evaluation of technical and soft skills with
                  personalized improvement roadmap.
                </p>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-4"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="process-card text-start">
                <div class="process-number">3</div>
                <h3>Interview Preparation</h3>
                <p>
                  Mock interviews, technical rounds practice, and communication
                  skills training with industry professionals.
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="process-card text-start">
                <div class="process-number">4</div>
                <h3>Company Matching</h3>
                <p>
                  Strategic placement in companies that align with your skills,
                  interests, and career goals.
                </p>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-4"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="process-card text-start">
                <div class="process-number">5</div>
                <h3>Interview Coordination</h3>
                <p>
                  Direct coordination with HR teams and scheduling of interviews
                  with our partner companies.
                </p>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-4"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="process-card text-start">
                <div class="process-number">6</div>
                <h3>Offer Negotiation</h3>
                <p>
                  Professional guidance in salary negotiation and offer
                  evaluation to maximize your career benefits.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Student's Placement records -->
      <section class="placement-process">
        <div class="container text-center">
          <!-- Main Title -->
          <div class="text-center mb-5 animate__animated animate__fadeInDown">
            <h1 class="main-title">
              Our Proven <span class="text-primary">Student Placement Record</span>
            </h1>
          </div>
          <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
          </p>
          <div class="row">
            <!-- Process items will be dynamically generated here for brevity or can be hardcoded -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="process-card text-start">
               <img src="./assets/images/placements/p-1.webp" alt="p-1" class="img-fluid" />
              </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="process-card text-start">
               <img src="./assets/images/placements/p-2.webp" alt="p-2" class="img-fluid" />
              </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="process-card text-start">
               <img src="./assets/images/placements/p-3.webp" alt="p-3" class="img-fluid" />
              </div>
            </div>

            </div>

            <div class="row">
            <!-- Process items will be dynamically generated here for brevity or can be hardcoded -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="process-card text-start">
               <img src="./assets/images/placements/p-4.webp" alt="p-4" class="img-fluid" />
              </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="process-card text-start">
               <img src="./assets/images/placements/p-5.webp" alt="p-5" class="img-fluid" />
              </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="process-card text-start">
               <img src="./assets/images/placements/p-6.webp" alt="p-6" class="img-fluid" />
              </div>
            </div>

          </div>

           <a href="placement-record.html" class="btn btn-primary mt-5"
                ><i class="bi bi-headset me-2"></i>See More Success Story</a
              >

        </div>
      </section>

      <!-- Top Companies Section -->
      <section class="companies-section">
        <div class="container text-center">
          <!-- Main Title -->
          <div class="text-center mb-5 animate__animated animate__fadeInDown">
            <h1 class="main-title">
              Our <span class="text-primary">Students Placed in Top Companies</span>
            </h1>
          </div>
          <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
            We've partnered with 50+ top companies across various industries to
            provide you with the best career opportunities.
          </p>
          <div class="logos" data-aos="fade-up" data-aos-delay="200">
            <div class="logos-slide">
              <img src="./assets/images/company-logo/Acelogo.svg-fill-1.svg" alt="Company 1" />
              <img src="./assets/images/company-logo/AD3-Technologies-Logo-White-Text.png" alt="Company 2" />
              <img src="./assets/images/company-logo/annalect_logo_400x113.webp" alt="Company 3" />
              <img src="./assets/images/company-logo/AZ logo.webp" alt="Company 4" />
              <img src="./assets/images/company-logo/Brand-story-870x493.png" alt="Company 5" />
              <img src="./assets/images/company-logo/brandstory.webp" alt="Company 6" />
              <img src="./assets/images/company-logo/govreports.png" alt="Company 7" />
            </div>
            <!-- <div class="logos-slide">
              <img src="./assets/images/company-logo/elevatoz-logo.png" alt="Company 1" />
              <img src="./assets/images/company-logo/euroland_ir.png" alt="Company 2" />
              <img
                src="./assets/images/company-logo/firsthublogo.webp"
                alt="Company 3"
              />
              <img
                src="./assets/images/company-logo/XylemLogoNew.webp"
                alt="Company 4"
              />
              <img src="./assets/images/company-logo/valuehealth.png" alt="Company 5" />
              <img src="./assets/images/company-logo/vitaeinternational.jpg" alt="Company 6" />
              <img src="./assets/images/company-logo/throughbitlogo.png" alt="Company 7" />
            </div> -->
          </div>
        </div>
      </section>

      <!-- Industry Cards Section -->
      <section class="industry-cards">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 mb-4" data-aos="fade-up">
              <div class="industry-card text-center">
                <i class="bi bi-display"></i>
                <h3 class="h5 fw-bold mt-3">Tech & Software</h3>
                <p class="percentage">65% Placements</p>
                <p class="text-muted small">
                  IT companies, startups, and enterprise software.
                </p>
              </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
              <div class="industry-card text-center">
                <i class="bi bi-display"></i>
                <h3 class="h5 fw-bold mt-3">Design Agencies</h3>
                <p class="percentage">25% Placements</p>
                <p class="text-muted small">
                  Creative agencies, design studios, and consultancies.
                </p>
              </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
              <div class="industry-card text-center">
                <i class="bi bi-cart3"></i>
                <h3 class="h5 fw-bold mt-3">E-commerce</h3>
                <p class="percentage">10% Placements</p>
                <p class="text-muted small">
                  Online marketplaces, retail, and consumer goods.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Student Success Stories Section -->
      <section class="testimonials bg-light">
        <div class="container text-center">
          <!-- Main Title -->
          <div class="text-center mb-5 animate__animated animate__fadeInDown">
            <h1 class="main-title">
              Student <span class="text-primary">Success Stories</span>
            </h1>
          </div>
          <p class="section-subtitle" data-aos="fade-up" data-aos-delay="100">
            Real stories from our students who transformed their careers and
            achieved their dreams.
          </p>
          <div
            id="testimonialCarousel"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-lg-4 mb-4">
                    <div class="testimonial-card text-start">
                      <div class="d-flex align-items-center mb-3">
                        <div class="initial">T</div>
                        <div class="ms-3">
                          <h5>Thriambakesh</h5>
                          <p class="text-primary mb-0 small">
                           Front End Developer
                          </p>
                        </div>
                      </div>
                      <p class="salary-increase">100% salary increase</p>
                      <p class="text-primary small">Placed in 2 weeks</p>
                      <p>
                       "I studied in BUFF creative college for 3 months in the course Front End Development . Just wanted to give a huge thank you to my mentor, Sandhiya Ma'am. Your way of explaining code line by line and helping out with all our doubts was just brilliant. You made a real difference in how I learned, and I really appreciate it!"
                      </p>
                      <span class="course-chip">Front - End Development</span>
                    </div>
                  </div>
                  <div class="col-lg-4 mb-4">
                    <div class="testimonial-card text-start">
                      <div class="d-flex align-items-center mb-3">
                        <div class="initial">M</div>
                        <div class="ms-3">
                          <h5>Menaka</h5>
                          <p class="text-primary mb-0 small">
                            ux/ui designer & development at Soft Suave
                          </p>
                        </div>
                      </div>
                      <p class="salary-increase">150% salary increase</p>
                      <p class="text-primary small">Placed in 1 weeks</p>
                      <p>
                        ""Buff Creative College gave me the perfect start in UI/UX Design and Development. Supportive Mentors, practical lessons, real-world projects, and career guidance made learning exciting and industry-ready.The environment here is very friendly and motivating. You can openly discuss ideas, get feedback, and improve your portfolio."
                      </p>
                      <span class="course-chip">Advanced UI/UX Design</span>
                    </div>
                  </div>
                  <div class="col-lg-4 mb-4">
                    <div class="testimonial-card text-start">
                      <div class="d-flex align-items-center mb-3">
                        <div class="initial">R</div>
                        <div class="ms-3">
                          <h5>Rahul Krishnan</h5>
                          <p class="text-primary mb-0 small">
                             Visual Designer
                          </p>
                        </div>
                      </div>
                      <p class="salary-increase">180% salary increase</p>
                      <p class="text-primary small">Placed in 1 week</p>
                      <p>
                        "I'm currently pursuing Diploma in Visual Design and Technology In this Institute, This place helps me to learn the design skills with the help of friendly faculty who are always there to give many professional tips which help me in the time of my Research and I also learned lot of new skill which helps me to build my portfolio better."
                      </p>
                      <span class="course-chip"> Visual Designer</span>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Add more carousel items as needed -->
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#testimonialCarousel"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#testimonialCarousel"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </section>

      <!-- Salary Insights Section -->
      <section class="salary-insights bg-primary">
        <div class="container text-center">
          <h2 class="section-title text-white" data-aos="fade-up">
            Salary Insights
          </h2>
          <p
            class="section-subtitle text-white"
            data-aos="fade-up"
            data-aos-delay="100"
          >
            Competitive packages and career growth opportunities across
            different experience levels.
          </p>
          <div class="row">
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up">
              <div class="salary-card">
                <p class="lpa">₹2.2 – 6 LPA </p>
                <p>Graphic Designer</p>
                <p class="growth">
                  <i class="bi bi-arrow-up-right"></i> 1-3 years experience
                </p>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-3 mb-4"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              <div class="salary-card">
                <p class="lpa">₹3.5–10 LPA </p>
                <p>UX/UI Designers</p>
                <p class="growth">
                  <i class="bi bi-arrow-up-right"></i>2-5 years experience
                </p>
              </div>
            </div>
            <div
              class="col-md-6 col-lg-3 mb-4"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="salary-card">
                <p class="lpa">₹3–7 LPA </p>
                <p>Video Editors & Animators</p>
                <p class="growth">
                  <i class="bi bi-arrow-up-right"></i>3-5 years experience
                </p>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up">
              <div class="salary-card">
                <p class="lpa">₹2 – 8 LPA </p>
                <p>Web Designers</p>
                <p class="growth">
                  <i class="bi bi-arrow-up-right"></i> 1-3 years experience
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="container py-5">
        <!-- Main Title -->
        <div class="text-center mb-5 animate__animated animate__fadeInDown">
          <h1 class="main-title">
            Comprehensive <span class="text-primary">Placement Support</span>
          </h1>
        </div>

        <div class="row align-items-center justify-content-center g-5">
          <!-- Left Column: What You Get -->
          <div class="col-lg-7 col-md-12">
            <h2 class="mb-5 fw-bold animate__animated animate__fadeInLeft">
              What You Get
            </h2>

            <!-- Feature List -->
            <div id="feature-list">
              <div class="feature-item">
                <div class="feature-icon">
                  <i class="bi bi-file-earmark-text"></i>
                </div>
                <div class="feature-content">
                  <h5>Resume & Portfolio Review</h5>
                  <p>
                    Professional optimization of your application documents with
                    industry best practices.
                  </p>
                </div>
              </div>
              <div class="feature-item">
                <div class="feature-icon"><i class="bi bi-mic"></i></div>
                <div class="feature-content">
                  <h5>Mock Interviews</h5>
                  <p>
                    Practice sessions with industry experts simulating real
                    interview scenarios.
                  </p>
                </div>
              </div>
              <div class="feature-item">
                <div class="feature-icon"><i class="bi bi-code-slash"></i></div>
                <div class="feature-content">
                  <h5>Technical Skill Assessment</h5>
                  <p>
                    Comprehensive evaluation and improvement of your technical
                    competencies.
                  </p>
                </div>
              </div>
              <div class="feature-item">
                <div class="feature-icon"><i class="bi bi-chat-dots"></i></div>
                <div class="feature-content">
                  <h5>Soft Skills Training</h5>
                  <p>
                    Communication, presentation, and interpersonal skills
                    development.
                  </p>
                </div>
              </div>
              <div class="feature-item">
                <div class="feature-icon"><i class="bi bi-people"></i></div>
                <div class="feature-content">
                  <h5>Industry Networking</h5>
                  <p>
                    Direct connections with hiring managers and industry
                    professionals.
                  </p>
                </div>
              </div>
              <div class="feature-item">
                <div class="feature-icon"><i class="bi bi-cash-coin"></i></div>
                <div class="feature-content">
                  <h5>Salary Negotiation</h5>
                  <p>
                    Expert guidance in compensation discussion and offer
                    evaluation.
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Right Column: Placement Card -->
          <div class="col-lg-5 col-md-8">
            <img src="./assets/images/placements/January Post.png" width="500" height="600" />
          </div>
        </div>
      </div>

      <script>
        // JavaScript to add staggered animations on load
        document.addEventListener("DOMContentLoaded", function () {
          const features = document.querySelectorAll(".feature-item");
          const placementCard = document.querySelector(".placement-card");
          let delay = 200; // ms

          // Animate feature items with a delay
          features.forEach((feature, index) => {
            setTimeout(() => {
              feature.style.opacity = 1;
              feature.classList.add("animate__animated", "animate__fadeInUp");
            }, delay * (index + 1));
          });

          // Animate the main placement card
          setTimeout(() => {
            placementCard.style.opacity = 1;
          }, 200);
        });
      </script>

      <!-- FAQs Section -->
      <section class="faqs">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
              <!-- Main Title -->
          <div class="text-center mb-5 animate__animated animate__fadeInDown">
            <h1 class="main-title">
              Placement <span class="text-primary">FAQs</span>
            </h1>
              <div
                class="accordion mt-5"
                id="faqAccordion"
                data-aos="fade-up"
                data-aos-delay="100"
              >
                <!-- FAQ Item 1 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseOne"
                      aria-expanded="true"
                      aria-controls="collapseOne"
                    >
                      What is your placement guarantee?
                    </button>
                  </h2>
                  <div
                    id="collapseOne"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingOne"
                    data-bs-parent="#faqAccordion"
                  >
                    <div class="accordion-body text-start">
                      We offer a 98% placement success rate with dedicated
                      support until you are placed. While we cannot legally
                      "guarantee" a job, our robust process and industry
                      connections ensure that our students have the best
                      possible opportunities.
                    </div>
                  </div>
                </div>
                <!-- FAQ Item 2 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseTwo"
                      aria-expanded="false"
                      aria-controls="collapseTwo"
                    >
                      What is the average salary package?
                    </button>
                  </h2>
                  <div
                    id="collapseTwo"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingTwo"
                    data-bs-parent="#faqAccordion"
                  >
                    <div class="accordion-body text-start">
                      The average salary package varies depending on the course
                      and your prior experience. However, our students see an
                      average salary boost of up to 300%. Please refer to the
                      Salary Insights section for more details.
                    </div>
                  </div>
                </div>
                <!-- FAQ Item 3 -->
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button
                      class="accordion-button collapsed"
                      type="button"
                      data-bs-toggle="collapse"
                      data-bs-target="#collapseThree"
                      aria-expanded="false"
                      aria-controls="collapseThree"
                    >
                      How long does the placement process take?
                    </button>
                  </h2>
                  <div
                    id="collapseThree"
                    class="accordion-collapse collapse"
                    aria-labelledby="headingThree"
                    data-bs-parent="#faqAccordion"
                  >
                    <div class="accordion-body text-start">
                      On average, students get placed within 1-3 months of
                      course completion. Some students even receive offers
                      before finishing the course.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Final CTA -->
      <section class="py-5">
        <div class="container">
          <div class="final-cta p-5 text-center" data-aos="zoom-in">
            <h2 class="fw-bold">Your Dream Career is Just One Step Away</h2>
            <p class="my-4">
              Join our proven placement program and guarantee your career
              success. With 98% placement rate and lifetime support, your future
              is secure with us.
            </p>
            <div>
              <!-- <a href="#" class="btn btn-light"
                ><i class="bi bi-eye-fill me-2"></i>View Courses</a
              > -->
              <a href="contact.html" class="btn btn-outline-light"
                ><i class="bi bi-headset me-2"></i>Talk to Counselor</a
              >
            </div>
          </div>
        </div>
      </section>
    </main>

     <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <h5>Follow Us</h5>
            <ul class="list-unstyled footer-links">
              <li>
                <a
                  href="https://www.facebook.com/buffcoimbatore/"
                  target="_blank"
                  >Facebook</a
                >
              </li>
              <li>
                <a
                  href="https://www.instagram.com/buff_coimbatore/?hl=en"
                  target="_blank"
                  >Instagram</a
                >
              </li>
              <li>
                <a
                  href="https://www.linkedin.com/company/buffcoimbatore/?viewAsMember=true"
                  target="_blank"
                  >LinkedIn</a
                >
              </li>
              <li>
                <a
                  href=" https://www.youtube.com/@Buff_Coimbatore"
                  target="_blank"
                  >Youtube</a
                >
              </li>
              <li>
                <a
                  href="https://www.behance.net/buffcoimbatoreUIUX"
                  target="_blank"
                  >Behance</a
                >
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <h5>Quick Links</h5>
            <ul class="list-unstyled footer-links">
              <li><a href="index.html">Home</a></li>
              <li><a href="about.html">About</a></li>
              <li>
                <a href="master-design-tech.html">Courses</a>
              </li>
              <li><a href="placements.html">Placement</a></li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <h5>Certification Courses</h5>
            <ul class="list-unstyled footer-links">
              <li>
                <a href="graphic-design.html" target="_blank">Graphic Design</a>
              </li>
              <li>
                <a href="ux-ui-design.html" target="_blank">UX/UI Design</a>
              </li>
              <li><a href="web-design.html" target="_blank">Web Design</a></li>
              <li><a href="video-editing-and-animation.html" target="_blank">Video Editing & Animation</a></li>
              <li>
                <a href="master-design-tech.html"
                  >Master of Design & Technology</a
                >
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <h5>Our Branches</h5>
            <ul class="list-unstyled footer-links">
              <li><a href="#">Buff Chennai</a></li>
              <li><a href="#">Buff Coimbatore</a></li>
              <li><a href="#">Buff Madurai</a></li>
              <li><a href="#">Buff Nagercoil</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="container-fluid bg-dark">
        <div class="col-lg-12">
          <div
            class="footer-bottom d-flex justify-content-between align-items-center flex-wrap"
          >
            <p class="mb-0">
              &copy; 2025 All Rights Reserved By Buff Institute Of Design Pvt
              Ltd.
            </p>
            <p>
              <a href="privacy-policy.html"
                >Privacy Policy
                <span
                  ><a href="terms-and-conditions.html">
                    | Terms of use
                  </a></span
                ></a
              >
            </p>
          </div>
        </div>
      </div>
    </footer>

     <!-- WhatsApp FABs -->
    <a
      href="https://wa.me/918870622270"
      class="whatsapp-fab left"
      target="_blank"
      ><i class="fab fa-whatsapp"></i
    ></a>
    <a href="tel:8870622270" class="whatsapp-fab right" target="_blank"
      ><i class="fa-solid fa-phone"></i>
    </a>
    
    <!-- Modal Form -->
    <div class="modal fade" id="enquireModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Enquire Now</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form id="enquireForm">
              <div class="mb-3">
                <label class="form-label">Full Name *</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter your full name"
                  required
                />
              </div>
              <div class="mb-3">
                <label class="form-label">Phone Number *</label>
                <input
                  type="tel"
                  class="form-control"
                  placeholder="Enter your phone number"
                  required
                />
              </div>
              <div class="mb-3">
                <label class="form-label">Select Course *</label>
                <select class="form-select" required>
                  <option value="" selected disabled>Choose a course</option>
                  <option value="Graphic Design">Graphic Design</option>
                  <option value="UX UI Design">UX/UI Design</option>
                  <option value="Web Design">Web Design</option>
                  <option value="Video Editing & Animation">
                    Video Editing & Animation
                  </option>
                  <option value="master of design & technology">
                    Master of Design & Technology
                  </option>
                </select>
              </div>
              <div class="mb-4">
                <label class="form-label">Preferred Learning Mode *</label>
                <select class="form-select" required>
                  <option value="" selected disabled>
                    Preferred Learning Mode
                  </option>
                  <option value="Online">Online</option>
                  <option value="Offline">Offline</option>
                </select>
              </div>
              <button type="submit" class="btn btn-submit">
                Submit Enquiry
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      // Initialize AOS
      AOS.init({
        duration: 800,
        once: true,
      });

      // Sticky header on scroll
      const navbar = document.querySelector(".navbar");
      window.onscroll = () => {
        if (window.scrollY > 50) {
          navbar.classList.add("scrolled");
        } else {
          navbar.classList.remove("scrolled");
        }
      };

      // Counter up animation
      function animateCounters() {
        const counters = document.querySelectorAll(".stat-number");
        const speed = 200; // The lower the slower

        counters.forEach((counter) => {
          const updateCount = () => {
            const target = +counter.getAttribute("data-target");
            const count = +counter.innerText;

            const inc = target / speed;

            if (count < target) {
              counter.innerText = Math.ceil(count + inc);
              setTimeout(updateCount, 1);
            } else {
              counter.innerText =
                target + (counter.innerText.includes("%") ? "%" : "+");
              if (target === 98) counter.innerText = target + "%";
              if (target === 500) counter.innerText = target + "+";
              if (target === 50) counter.innerText = target + "+";
              if (target === 300) counter.innerText = target + "%";
            }
          };
          updateCount();
        });
      }

      // Intersection Observer to trigger counter animation
      const statsSection = document.querySelector(".stats-card");
      let hasAnimated = false;

      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting && !hasAnimated) {
              animateCounters();
              hasAnimated = true;
              observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: 0.5,
        }
      );

      if (statsSection) {
        observer.observe(statsSection);
      }
    </script>
  </body>
</html>
