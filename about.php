<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Buff Institute Of Design</title>
    <link
      rel="icon"
      type="image/x-icon"
      href="./assets/images/logo/buff-fav.jpeg"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

    <!-- Font Awesome for Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    />

    <!-- Animate On Scroll Library CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
    <style>
      :root {
        --primary-blue: #235ce0;
        --secondary-blue: #0d47a1;
        --light-gray: #f8f9fa;
        --text-dark: #212529;
        --text-light: #ffffff;
      }

      body {
        font-family: "Poppins", sans-serif;
        color: var(--text-dark);
      }

      /* --- Navbar --- */
      .navbar {
        background-color: var(--text-light);
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 1rem 0;
      }
      .navbar-brand {
        font-weight: 700;
        font-size: 1.5rem;
        color: var(--primary-blue) !important;
      }
      .navbar-nav .nav-link {
        color: var(--text-dark);
        font-weight: 500;
        margin: 0 0.5rem;
      }
      .navbar-nav .nav-link:hover,
      .navbar-nav .nav-link.active {
        color: var(--primary-blue);
      }
      .contact-info {
        color: var(--primary-blue);
        font-weight: 600;
      }

      /* --- Hero Section --- */
      .hero-section {
        background: linear-gradient(
          to right,
          var(--primary-blue),
          var(--primary-blue)
        );
        color: var(--text-light);
        padding: 120px 0;
        text-align: center;
      }
      .hero-section h1 {
        font-weight: 700;
        font-size: 3.5rem;
      }
      .hero-section p {
        font-size: 1.5rem;
        font-weight: 400;
      }

      /* --- Section Styling --- */
      .section-padding {
        padding: 80px 0;
      }
      .section-title {
        font-weight: 700;
        color: var(--primary-blue);
        margin-bottom: 1rem;
        text-align: center;
      }
      .section-title::after {
        content: "";
        display: block;
        width: 60px;
        height: 4px;
        background-color: var(--primary-blue);
        margin: 10px auto 0;
        border-radius: 2px;
      }
      .section-text {
        color: #555;
        line-height: 1.8;
        font-size: 1.1rem;
        max-width: 1200px;
        margin: 0 auto 3rem auto;
        text-align: left;
      }

      /* --- Vision & Mission Cards --- */
      .info-card {
        background-color: var(--light-gray);
        border-radius: 15px;
        padding: 2rem;
        margin-bottom: 1.5rem;
        border: 1px solid #e0e0e0;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
      }
      .info-card h4 {
        color: var(--primary-blue);
        font-weight: 600;
      }
      .info-card.vision-card {
        background-color: var(--primary-blue);
        color: var(--text-light);
      }
      .info-card.vision-card h4,
      .info-card.vision-card p {
        color: var(--text-light);
      }
      .info-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      }

      /* --- Founder's Section --- */
      .founder-img {
        max-width: 100%;
        border-radius: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      }
      .founder-details {
        padding-left: 2rem;
      }
      .founder-quote {
        background-color: var(--light-gray);
        border-left: 5px solid var(--primary-blue);
        padding: 1rem 1.5rem;
        margin: 1.5rem 0;
        font-style: italic;
      }

      /* --- CTA Section --- */
      .cta-section {
        background: linear-gradient(
          to right,
          var(--primary-blue),
          var(--primary-blue)
        );
        color: var(--text-light);
        padding: 80px 0;
        text-align: center;
        border-radius: 15px;
      }
      .cta-section h2 {
        font-weight: 700;
        margin-bottom: 1rem;
      }
      .btn-cta {
        border: 2px solid var(--text-light);
        color: var(--text-light);
        background: transparent;
        padding: 0.75rem 2rem;
        margin: 0.5rem;
        border-radius: 8px;
        font-weight: 600;
        transition: all 0.3s ease;
      }
      .btn-cta:hover {
        background-color: var(--text-light);
        color: var(--primary-blue);
      }

      /* about */
      .about-student {
        border: 1px solid #0dcaf0;
        border-radius: 20px;
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px,
          rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px,
          rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
      }

      /* --- Responsive Adjustments --- */
      @media (max-width: 991.98px) {
        .navbar {
          padding: 1rem;
        }
        .navbar-nav {
          text-align: center;
          margin-top: 1rem;
        }
        .contact-info,
        .btn-enquire {
          display: none; /* Hide in collapsed navbar for cleaner look */
        }
        .hero-section h1 {
          font-size: 2.5rem;
        }
        .founder-details {
          padding-left: 0;
          margin-top: 2rem;
        }
      }
      @media (max-width: 767.98px) {
        .section-padding {
          padding: 50px 0;
        }
        .footer {
          text-align: left;
        }
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
    </style>
  </head>
  <body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <img src="./assets/images/logo/logo.svg" alt="buff-logo" />
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
              <a class="nav-link active" aria-current="page" href="about.html"
                >About</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Courses
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="graphic-design.html"
                    >Graphic Design</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="ux-ui-design.html"
                    >UI/UX Design</a
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
                    >Master of Design & Technology</a
                  >
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="upcoming-batch.html"
                >Upcoming Batches</a
              >
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
          <div class="d-flex align-items-center">
            <div class="contact-info me-3">
              Speak To Us<br />
              <strong
                ><img src="./assets/images/logo/call.svg" alt="enquire" />
                88706 22270
              </strong>
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

    <!-- Hero Section -->
    <header class="hero-section">
      <div class="container" data-aos="fade-up">
        <h1>Buff Institute Of Design, Coimbatore</h1>
        <p>We Design the Designer!</p>
      </div>
    </header>

    <main>
      <!-- Why Choose Us Section -->
      <section class="section-padding">
        <div class="container">
          <h2 class="section-title" data-aos="fade-up">
            Why Students Choose Buff Coimbatore for Design Career?
          </h2>
          <div class="about-student">
            <p
              class="section-text pt-4"
              data-aos="fade-up"
              data-aos-delay="100"
            >
              Buff Coimbatore is the only institution in Coimbatore that trains
              students in complete Product Design, not just software or
              tool-based learning. We specialize exclusively in UX/UI Design,
              Graphic Design, and Design Education, making us a dedicated center
              for creative and digital skill development. As industry
              requirements evolve, we are expanding into Web Development, Video
              Editing, and Animation, ensuring students gain a holistic and
              future-ready skill set aligned with real industry needs.
            </p>
            <p class="section-text" data-aos="fade-up" data-aos-delay="100">
              Our programs are delivered by the best training team, supported by
              a strong infrastructure, structured placement guidance, and
              continuous career support. Every student receives hands-on
              exposure through internship-based mock projects, helping them
              build confidence, understand industry workflows, and perform
              effectively in interviews.
            </p>
            <p class="section-text" data-aos="fade-up" data-aos-delay="100">
              Buff Coimbatore is a recognized institution committed to
              empowering learners in Multimedia and Design. With deep expertise
              in Graphic Design, UX/UI Design, Animation Design, and Web Design,
              we provide a comprehensive curriculum that blends theory with
              practical application. Our course structure reflects current
              industry standards and emerging trends, preparing students to
              solve real-world creative challenges with professionalism and
              clarity.
            </p>
            <p class="section-text" data-aos="fade-up" data-aos-delay="100">
              Overall, Buff Coimbatore stands as a leading design institute,
              offering an extensive and immersive educational experience that
              equips students for a successful, long-term career in the design
              industry.
            </p>
          </div>
        </div>
      </section>

      <!-- Vision and Mission Section -->
      <section class="section-padding bg-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-6" data-aos="fade-right">
              <div class="info-card vision-card">
                <h4>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="currentColor"
                    class="bi bi-eye-fill me-2"
                    viewBox="0 0 16 16"
                  >
                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                    <path
                      d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"
                    />
                  </svg>
                  Vision
                </h4>
                <p>
                  Shaping the next generation of design leaders, pushing
                  boundaries, and making a meaningful impact in the multimedia
                  industry.
                </p>
              </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
              <div class="info-card">
                <h4>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="24"
                    height="24"
                    fill="currentColor"
                    class="bi bi-check-circle-fill me-2"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"
                    />
                  </svg>
                  Mission
                </h4>
                <p>
                  Empowering creative excellence in Multimedia and Design via
                  extensive education, industry collaborations, and supportive
                  circumstances.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Founder's Message Section -->
      <section class="section-padding">
        <div class="container">
          <h2 class="section-title" data-aos="fade-up">Founder's Message</h2>
          <div class="row align-items-center mt-5">
            <div class="col-md-4" data-aos="fade-right">
              <!-- Placeholder for founder's image -->
              <img
                src="./assets/images/about/founder-message.webp"
                alt="Mr. Udayalingam.M, Founder of Buff Creative College"
                class="founder-img"
              />
              <div class="text-center mt-3">
                <h5 class="mb-0">Mr. Udayalingam. M</h5>
                <p class="text-muted">Founder of Buff Institute Of Design</p>
              </div>
            </div>
            <div class="col-md-8" data-aos="fade-left">
              <div class="founder-details">
                <p>
                  As you begin your journey in the design industry, I want to
                  share some words of motivation and guidance. Remember that
                  creativity learns no boundaries, and the design field offers
                  unlimited opportunities for innovation.
                </p>
                <p>
                  Make sure you stay on top of emerging trends and technologies.
                  Build a network of like-minded individuals, seek feedback from
                  mentors, and share ideas with your team. Don't underestimate
                  your abilities and let your qualities shine through your work.
                </p>
                <div class="founder-quote">
                  "I wish you to have an impactful career with Buff.<span
                    class="text-primary"
                  >
                    Never stop learning."</span
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- CTA Section -->
      <section class="section-padding">
        <div class="container">
          <div class="cta-section" data-aos="zoom-in">
            <h2>Ready to Start Your Creative Journey?</h2>
            <p>
              Join thousands of successful designers who started their careers
              with us.
            </p>
            <div>
              <a href="contact.html" class="btn btn-cta">Contact Us</a>
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

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Animate On Scroll Library JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- Initialize AOS -->
    <script>
      AOS.init({
        duration: 800, // animation duration in milliseconds
        once: true, // whether animation should happen only once - while scrolling down
      });
    </script>
  </body>
</html>
