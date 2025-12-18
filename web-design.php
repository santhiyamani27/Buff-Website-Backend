<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Web Design Course - Buff Institute</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="./assets/images/logo/buff-fav.jpeg"
    />

    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
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
        background: linear-gradient(90deg, #3d81f6 0%, #6167f1 100%);
        border-color: linear-gradient(90deg, #3d81f6 0%, #6167f1 100%);
        padding: 12px 30px;
        font-size: 1.1rem;
        font-weight: 600;
        color: white;
      }
      .btn-success-custom:hover {
        background: linear-gradient(90deg, #3d81f6 0%, #6167f1 100%);
        border-color: linear-gradient(90deg, #3d81f6 0%, #6167f1 100%);
        color: white;
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
        background-color: #eff6ff;
        border: 1px solid skyblue;
        border-radius: 10px;
        padding: 15px 20px;
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        transition: all 0.3s ease;
        color: #1d4ed8;
        font-weight: 500;
      }
      .highlight-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
      }
      .highlight-item i {
        color: #2e8fff;
        margin-right: 15px;
        font-size: 1.2rem;
      }
      /* Opportunities Section */
      .Opportunities {
        background-color: #eff6ff;
        border: 1px solid skyblue;
        border-radius: 10px;
        padding: 15px 20px;
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        transition: all 0.3s ease;
        color: #1d4ed8;
        font-weight: 500;
      }
      .Opportunities:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
      }
      .Opportunities i {
        color: #1d4ed8;
        margin-right: 15px;
        font-size: 1.2rem;
      }

      /* Join Section */
      .join {
        border: 1px solid #bf89ec;
        border-radius: 10px;
        padding: 15px 20px;
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        transition: all 0.3s ease;
        color: #7227b4;
        font-weight: 600;
      }
      .join:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
      }

      /* Why Buff Institute? Section */
      .buff-institute {
        background-color: #fff7ed;
        border: 1px solid #fed7aa;
        border-radius: 10px;
        padding: 4px 20px;
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        transition: all 0.3s ease;
        color: #c64d1b;
        font-weight: 500;
      }
      .buff-institute:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
      }
      .buff-institute i {
        color: #fa9247;
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
      <section class="hero-section">
        <div class="container">
          <h1>Web Design Course</h1>
          <p>Become a Professional Web Designer with Buff Institute</p>
          <div class="hero-stats">
            <div class="stat">
              <h3>2 Months</h3>
              <span>Duration</span>
            </div>
            <div class="stat">
              <h3>10+</h3>
              <span>Projects</span>
            </div>
            <div class="stat">
              <h3>1400+</h3>
              <span>Students</span>
            </div>
          </div>
          <button
            class="btn btn-success-custom"
            data-bs-toggle="modal"
            data-bs-target="#enquireModal"
          >
            Book Free Demo
          </button>
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
                  Buff Institute's Web Design Course empowers you with the
                  technical and creative skills to design responsive and
                  engaging websites. Learn to blend UI/UX, code, and design
                  tools to build modern websites from scratch.
                </p>
              </div>

              <!-- Highlights -->
              <div class="mb-5">
                <h3 class="mb-4 fw-semibold">Course Highlights</h3>
                <div class="row">
                  <div class="col-md-6">
                    <div class="highlight-item">
                      <i class="bi bi-clock"></i> 2 Months Duration
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="highlight-item">
                      <i class="bi bi-briefcase"></i>
                      Responsive Website Projects
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="highlight-item">
                      <i class="bi bi-file-earmark-text"></i>
                      HTML, CSS, and Bootstrap Training
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="highlight-item">
                      <i class="bi bi-lightbulb"></i>
                      UI/UX Integration
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="highlight-item">
                      <i class="bi bi-code-slash"></i> WordPress CMS Training
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="highlight-item">
                      <i class="bi bi-patch-check"></i> Portfolio Website
                      Creation 100% Placement Assistance
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="highlight-item">
                      <i class="bi bi-patch-check"></i>100% Placement Assistance
                    </div>
                  </div>
                </div>
              </div>

              <!-- Curriculum -->
              <div class="mb-5">
                <h2 class="section-title">Course Curriculum</h2>
                <div class="curriculum-module">
                  <h5>Module 1: Introduction to Web Design</h5>
                  <p class="m-2 small">
                    Understand web design foundations and how design works for
                    the web.
                  </p>
                  <ul class="mt-2">
                    <li><a href="#">Web Design vs Web Development</a></li>
                    <li><a href="#">Basic Web Layouts</a></li>
                    <li><a href="#">Website Goals & User Flow</a></li>
                    <li>
                      <a href="#">Web Design Process</a>
                    </li>
                  </ul>
                </div>
                <div class="curriculum-module">
                  <h5>Module 2: HTML & CSS Fundamentals</h5>
                  <p class="mb-0 small">
                    Learn how to structure and style websites using front-end
                    technologies.
                  </p>
                  <ul class="mt-2">
                    <li><a href="#">HTML Tags, Forms, Tables</a></li>
                    <li><a href="#">CSS Styling, Positioning, Flexbox</a></li>
                    <li><a href="#">Fonts, Icons, and Responsive Grids</a></li>
                    <li><a href="#">Live Website Structure Practice</a></li>
                  </ul>
                </div>
                <div class="curriculum-module">
                  <h5>Module 3: Responsive Design with Bootstrap</h5>
                  <p class="mb-0 small">
                    Create mobile-friendly websites using the Bootstrap
                    framework.
                  </p>
                  <ul class="mt-2">
                    <li><a href="#">Bootstrap Grid System</a></li>
                    <li><a href="#">Navbar, Cards, and Components</a></li>
                    <li><a href="#">Responsive Breakpoints</a></li>
                    <li><a href="#">Bootstrap Utilities & Customization</a></li>
                  </ul>
                </div>
                <div class="curriculum-module">
                  <h5>Module 4: UI Integration & Web Aesthetics</h5>
                  <p class="mb-0 small">
                    Bring in design principles and tools into the development
                    workflow.
                  </p>
                  <ul class="mt-2">
                    <li><a href="#">UI Design to Code</a></li>
                    <li><a href="#">Using Figma for Layouts</a></li>
                    <li>
                      <a href="#">Typography & Color in Web Design</a>
                    </li>
                    <li><a href="#">Wireframe to Browser Implementation</a></li>
                  </ul>
                </div>
                <div class="curriculum-module">
                  <h5>
                    Module 5: Introduction to JavaScript for Web Designers
                  </h5>
                  <p class="mb-0 small">
                    Add interactivity and behavior to your website.
                  </p>
                  <ul class="mt-2">
                    <li><a href="#">JavaScript Basics</a></li>
                    <li><a href="#">DOM Manipulation</a></li>
                    <li><a href="#">Simple Forms & Validations</a></li>
                    <li><a href="#">Sliders, Popups & Animations</a></li>
                  </ul>
                </div>
                <div class="curriculum-module">
                  <h5>Module 6: WordPress CMS Mastery</h5>
                  <p class="mb-0 small">
                    Design websites using drag-and-drop website builders and
                    themes.
                  </p>
                  <ul class="mt-2">
                    <li><a href="#">WordPress Setup & Hosting</a></li>
                    <li><a href="#">Theme Customization</a></li>
                    <li><a href="#">Page Builders (Elementor/Divi)</a></li>
                    <li>
                      <a href="#"
                        >Blog, Portfolio, and Business Site Creation</a
                      >
                    </li>
                  </ul>
                </div>
                <div class="curriculum-module">
                  <h5>Module 7: SEO Basics for Web Designers</h5>
                  <p class="mb-0 small">
                    Learn how to optimize your designs for better search
                    performance.
                  </p>
                  <ul class="mt-2">
                    <li><a href="#">On-Page SEO Techniques</a></li>
                    <li><a href="#">Meta Tags & Alt Text</a></li>
                    <li><a href="#">Speed Optimization</a></li>
                    <li><a href="#">Mobile-Friendly Test</a></li>
                  </ul>
                </div>
                <div class="curriculum-module">
                  <h5>Module 8: Portfolio & Real Website Projects</h5>
                  <p class="mb-0 small">
                    Build a live portfolio and host it professionally.
                  </p>
                  <ul class="mt-2">
                    <li><a href="#">Create Your Personal Website</a></li>
                    <li><a href="#">Real Client Web Projects</a></li>
                    <li><a href="#">Hosting & Domain Setup</a></li>
                    <li><a href="#">Resume & Interview Skills</a></li>
                  </ul>
                </div>
              </div>

              <!-- Opportunities -->
              <div class="mb-5">
                <h2 class="section-title text-left mt-5">
                  Career Opportunities
                </h2>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="Opportunities text-success border-success">
                      Web Designer
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="Opportunities text-success border-success">
                      Front-End Developer
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="Opportunities text-success border-success">
                      UI/UX Web Designer
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="Opportunities text-success border-success">
                      WordPress Designer
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="Opportunities text-success border-success">
                      Freelance Web Consultant
                    </div>
                  </div>
                </div>
              </div>

              <!-- Who can join -->
              <div class="mb-5">
                <h2 class="section-title text-left mt-5">Who Can Join?</h2>
                <div class="row">
                  <div class="col-md-6 col-sm-6">
                    <div class="join">Beginners in Web Design</div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="join">College Students</div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="join">Graphic Designers Upgrading to Web</div>
                  </div>
                  <div class="col-md-6 col-sm-6">
                    <div class="join">Freelancers & Creatives</div>
                  </div>
                </div>
              </div>

              <!-- Why Buff Institute? -->
              <div class="mb-5">
                <h2 class="section-title text-left mt-5">
                  Why Buff Institute?
                </h2>
                <div class="row">
                  <div class="col-md-12 col-sm-6">
                    <div class="buff-institute">
                      <span style="color: orange; font-size: 40px"
                        >&#9734;</span
                      >
                      &nbsp; Expert Front-End Mentors
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-6">
                    <div class="buff-institute">
                      <span style="color: orange; font-size: 40px"
                        >&#9734;</span
                      >
                      &nbsp; Hands-On Web Projects
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-6">
                    <div class="buff-institute">
                      <span style="color: orange; font-size: 40px"
                        >&#9734;</span
                      >
                      &nbsp; UI + Code + CMS Training
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-6">
                    <div class="buff-institute">
                      <span style="color: orange; font-size: 40px"
                        >&#9734;</span
                      >
                      &nbsp; Freelancing & Career Support
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-6">
                    <div class="buff-institute">
                      <span style="color: orange; font-size: 40px"
                        >&#9734;</span
                      >
                      &nbsp; Portfolio with Hosting Guidance
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Right Column: Sticky Card -->
            <div class="col-lg-4">
              <div class="content-card sticky-card">
                <ul class="info-list">
                  <li>
                    <i class="bi bi-calendar-check"></i> 2 Months Duration
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
                    <a
                      href="./assets/brochure/UXUI Design  & Development.pdf"
                      class="nav-link text-white"
                      >Download Brochure</a
                    >
                  </button>
                  <button
                    class="btn btn-success-custom"
                    data-bs-toggle="modal"
                    data-bs-target="#enquireModal"
                  >
                    Enroll Now
                  </button>
                </div>
              </div>
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
              <li>
                <a href="video-editing-and-animation.html" target="_blank"
                  >Video Editing & Animation</a
                >
              </li>
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

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
