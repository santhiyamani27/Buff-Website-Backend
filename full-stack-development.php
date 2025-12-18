<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Full Stack Development - Buff Institute</title>

    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
    <style>
      body {
        font-family: "Poppins", sans-serif;
        background-color: #f8f9fa;
      }

      /* Navbar Styles */
      .navbar {
        background-color: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        padding: 0.75rem 0;
      }
      .navbar-brand {
        font-weight: 700;
        font-size: 1.8rem;
      }
      .nav-link {
        color: #333;
        font-weight: 500;
      }
      .nav-link:hover {
        color: #2e8fff;
      }
      .navbar .btn-outline-primary {
        border-color: #6a11cb;
        color: #6a11cb;
      }
      .navbar .btn-outline-primary:hover {
        background-color: #6a11cb;
        color: #fff;
      }
      .contact-info {
        text-align: right;
      }
      .contact-info small {
        font-size: 0.8rem;
        display: block;
      }
      .contact-info a {
        font-size: 1.1rem;
        font-weight: 600;
        color: #333;
        text-decoration: none;
      }
      .speak-call {
        color: #2e8fff !important;
      }
      .speak-call:hover {
        color: #6c2b0f !important;
      }
      .enquiry {
        color: #2e8fff;
        border: 1px solid #2e8fff;
        margin-left: 40px;
      }
      .enquiry:hover {
        background-color: #2e8fff;
        color: white;
      }

      /* Hero Section Styles */
      .hero-section {
        background: linear-gradient(135deg, #7a7ee0, #9c84dc);
        color: white;
        padding: 100px 0;
        text-align: center;
      }
      .hero-section h1 {
        font-size: 3.5rem;
        font-weight: 700;
      }
      .hero-section p {
        font-size: 1.25rem;
        margin-bottom: 30px;
      }
      .hero-stats {
        display: flex;
        justify-content: center;
        gap: 3rem;
        margin: 40px 0;
      }
      .hero-stats .stat {
        text-align: center;
      }
      .hero-stats .stat h3 {
        font-size: 2.5rem;
        font-weight: 700;
        margin: 0;
      }
      .hero-stats .stat span {
        font-size: 1rem;
        opacity: 0.9;
      }
      .btn-success-custom {
        background-color: #28a745;
        border-color: #28a745;
        padding: 12px 30px;
        font-size: 1.1rem;
        font-weight: 600;
        border-radius: 50px;
      }
      .btn-success-custom:hover {
        background-color: #218838;
        border-color: #1e7e34;
      }
      .btn-free-demo {
        background: linear-gradient(90deg, #20c997, #00c6ff);
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        padding: 12px 30px;
        border: none;
        border-radius: 6px;
        cursor: pointer;
      }

      /* Main Content Styles */
      .section-padding {
        padding: 80px 0;
      }
      .section-title {
        font-weight: 700;
        margin-bottom: 40px;
      }
      .content-card {
        background: #fff;
        border: 1px solid #e9ecef;
        border-radius: 15px;
        box-shadow: 0 4px 25px rgba(0, 0, 0, 0.07);
        padding: 30px;
      }
      .sticky-card {
        position: sticky;
        top: 100px;
      }
      .info-list {
        list-style: none;
        padding: 0;
      }
      .info-list li {
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        font-size: 1.05rem;
      }
      .info-list i {
        margin-right: 15px;
        font-size: 1.3rem;
        color: #2575fc;
      }

      /* Highlights Section */
      .highlight-item {
        background-color: #ffffff;
        border: 1px solid #e0e0e0;
        border-radius: 10px;
        padding: 15px 20px;
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        transition: all 0.3s ease;
      }
      .highlight-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
      }
      .highlight-item i {
        color: #6a11cb;
        margin-right: 15px;
        font-size: 1.2rem;
      }

      /* Curriculum Section */
      .curriculum-module {
        background: #fff;
        border: 1px solid #e9ecef;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 20px;
      }
      .curriculum-module h5 {
        font-weight: 600;
      }

      /* Opportunities Section */
      .opportunity-tag,
      .audience-tag {
        background-color: #e9f5ff;
        border: 1px solid #cce5ff;
        color: #004085;
        padding: 10px 20px;
        border-radius: 50px;
        text-align: center;
        font-weight: 500;
        margin-bottom: 15px;
      }
      .audience-tag {
        background-color: #fff3cd;
        border-color: #ffeeba;
        color: #856404;
      }
      ul {
        color: gray;
      }
      ul li a {
        color: gray;
        text-decoration: none;
      }

      /* Footer Styles */
      footer {
        background-color: #eff6ff;
        color: #adb5bd;
        padding: 60px 0 20px 0;
      }
      footer h5 {
        color: rgb(17 24 39);
        margin-bottom: 20px;
        font-weight: 600;
      }
      footer a {
        color: #9ca3af;
        text-decoration: none;
        display: block;
        margin-bottom: 10px;
      }
      footer a:hover {
        color: #0d6efd;
      }
      .footer-bottom {
        border-top: 1px solid #343a40;
        padding-top: 20px;
        margin-top: 40px;
      }

      /* Responsive Adjustments */
      @media (max-width: 991.98px) {
        .navbar-brand {
          font-size: 1.5rem;
        }
        .contact-info {
          text-align: left;
          margin-top: 10px;
        }
        .hero-section h1 {
          font-size: 2.5rem;
        }
        .sticky-card {
          position: static;
          margin-top: 30px;
        }
      }
      @media (max-width: 767.98px) {
        .hero-stats {
          flex-direction: column;
          gap: 1.5rem;
        }
      }
    </style>
  </head>
  <body>
    <!-- Header & Navigation -->
    <header class="sticky-top">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.html">
            <img src="./assets/images/logo/logo.svg" alt="buff" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="coursesDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Courses
                </a>
                <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
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
                    <a class="dropdown-item" href="web-design.html"
                      >Web Design</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="digital-marketing.html"
                      >DigitaL Marketing</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="full-stack-development.html"
                      >Full Stack Development</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="coursesDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Bootcamp
                </a>
                <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
                  <li>
                    <a class="dropdown-item" href="uxui-workshop.html"
                      >UX UI Workshop</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="uxui-bootcamp.html"
                      >UX UI Bootcamp</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="coursesDropdown"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  More
                </a>
                <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
                  <li>
                    <a class="dropdown-item" href="placements.html"
                      >Placements</a
                    >
                  </li>
                  <li>
                    <a class="dropdown-item" href="student-work.html"
                      >Student Portfolio</a
                    >
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
              </li>
            </ul>
            <div class="d-flex align-items-center flex-wrap">
              <div class="contact-info me-3">
                <small>Speak To Us</small>
                <a href="tel:88706 22270" class="speak-call">
                  <img src="./assets/images/logo/call.svg" alt="enquiry" />
                  88706 22270</a
                >
              </div>
              <a href="#" class="btn enquiry">Enquire Now</a>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main>
      <!-- Hero Section -->
      <section class="hero-section">
        <div class="container">
          <h1>Full Stack Development</h1>
          <p>Become a Professional Graphic Designer with Buff Institute</p>
          <div class="hero-stats">
            <div class="stat">
              <h3>10 Months</h3>
              <span>Duration</span>
            </div>
            <div class="stat">
              <h3>22+</h3>
              <span>Projects</span>
            </div>
            <div class="stat">
              <h3>2800+</h3>
              <span>Students</span>
            </div>
          </div>
          <a href="#" class="btn btn-free-demo">Book Free Demo</a>
        </div>
      </section>

      <!-- Main Content Section -->
      <section class="section-padding">
        <div class="container">
          <div class="row">
            <!-- Left Column: Course Details -->
            <div class="col-lg-8">
              <div class="mb-5">
                <h2 class="section-title">What You'll Learn</h2>
                <p>
                  Complete web development covering frontend, backend,
                  databases, and deployment with modern frameworks.
                </p>
              </div>

              <!-- Curriculum -->
              <div class="mb-5">
                <h2 class="section-title">Course Curriculum</h2>
                <div class="curriculum-module">
                  <h5>Module 1: Web Development Foundations</h5>
                  <p class="m-2 small">
                    HTML5, CSS3, JavaScript fundamentals, and responsive design
                  </p>
                  <p>25 lessons</p>
                </div>
                <div class="curriculum-module">
                  <h5>Module 2: Frontend Frameworks</h5>
                  <p class="mb-0 small">
                    Master React.js, Vue.js, and modern frontend development
                  </p>
                  <p>30 lessons</p>
                </div>
                <div class="curriculum-module">
                  <h5>Module 3: Backend Development</h5>
                  <p class="mb-0 small">
                    Server-side programming with Node.js, Python, and database
                    integration
                  </p>
                  <p>32 lessons</p>
                </div>
                <div class="curriculum-module">
                  <h5>Module 4: Database Design & Management</h5>
                  <p class="mb-0 small">
                    SQL, NoSQL databases, and data modeling best practices
                  </p>
                  <p>18 lessons</p>
                </div>
                <div class="curriculum-module">
                  <h5>Module 5: API Development & Testing</h5>
                  <p class="mb-0 small">
                    RESTful APIs, GraphQL, testing, and documentation
                  </p>
                  <p>22 lessons</p>
                </div>
                <div class="curriculum-module">
                  <h5>Module 6: Deployment & DevOps</h5>
                  <p class="mb-0 small">
                    Cloud deployment, containerization, and CI/CD pipelines
                  </p>
                  <p>24 lessons</p>
                </div>
                <div class="curriculum-module">
                  <h5>Module 7: Real Projects & Portfolio</h5>
                  <p class="mb-0 small">
                    Build production-ready applications and professional
                    portfolio
                  </p>
                  <p>20 lessons</p>
                </div>
              </div>
            </div>

            <!-- Right Column: Sticky Card -->
            <div class="col-lg-4">
              <div class="content-card sticky-card">
                <ul class="info-list">
                  <li>
                    <i class="bi bi-calendar-check"></i> 4 Months Duration
                  </li>
                  <li>
                    <i class="bi bi-patch-question"></i> Certificate of
                    Completion
                  </li>
                  <li><i class="bi bi-infinity"></i> Lifetime Access</li>
                  <li>
                    <i class="bi bi-person-check"></i> Job Placement Support
                  </li>
                </ul>
                <div class="d-grid gap-2 mt-4">
                  <button class="btn btn-primary btn-lg">
                    Download Brochure
                  </button>
                  <button class="btn btn-free-demo">Book Free Demo</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-6 mb-4">
            <h5>Follow Us</h5>
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">LinkedIn</a>
            <a href="#">Youtube</a>
            <a href="#">Twitter</a>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <h5>Quick Links</h5>
            <a href="#">Home</a>
            <a href="#">Courses</a>
            <a href="#">About</a>
            <a href="#">Placement</a>
            <a href="#">Contact Us</a>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <h5>Certification Courses</h5>
            <a href="#">Graphic Design</a>
            <a href="#">UX UI Design</a>
            <a href="#">Web Design</a>
            <a href="#">Digital Marketing</a>
            <a href="#">Full Stack Development</a>
          </div>
          <div class="col-lg-3 col-md-6 mb-4">
            <h5>Our Branches</h5>
            <a href="#">Buff Chennai</a>
            <a href="#">Buff Coimbatore</a>
            <a href="#">Buff Madurai</a>
            <a href="#">Buff Nagercoil</a>
            <a href="#">Apply For Franchise</a>
          </div>
        </div>
      </div>

      <div class="container-fluid bg-dark">
        <div class="col-lg-12">
          <div
            class="footer-bottom d-flex justify-content-between align-items-center flex-wrap"
          >
            <p class="mb-0">
              &copy; 2024 All Rights Reserved By Buff Institute Of Design Pvt
              Ltd.
            </p>
            <a href="#" class="pb-3">Privacy Policy | Terms of use </a>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
