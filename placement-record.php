<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
      Home - Buff Institute | Leading Creative Education in Coimbatore
    </title>
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

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap"
      rel="stylesheet"
    />

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

      /* --- Form Styles --- */
      .enquiry-form {
        background: rgba(255, 255, 255, 0.05);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 2.5rem;
        border-radius: 20px;
        box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
      }
      .form-controls,
      .form-selects {
        background-color: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
      }
      .form-control::placeholder {
        color: rgba(255, 255, 255, 0.5);
      }
      .form-control:focus,
      .form-select:focus {
        background-color: rgba(255, 255, 255, 0.15);
        border-color: #38bdf8;
        color: #fff;
        box-shadow: 0 0 0 0.25rem rgba(56, 189, 248, 0.25);
      }

      /* Fix select arrow color */
      .form-select {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='m2 5 6 6 6-6'/%3e%3c/svg%3e");
      }

      .form-select option {
        background-color: #1e293b; /* Dark bg for dropdown items */
        color: white;
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
      <!-- Student's Placement records -->
      <section class="placement-process">
        <div class="container text-center">
          <!-- Main Title -->
          <div class="text-center mb-5 animate__animated animate__fadeInDown">
            <h1 class="main-title">
              Our Proven
              <span class="text-primary">Student Placement Record</span>
            </h1>
          </div>
          <p
            class="section-subtitle"
            data-aos="fade-up"
            data-aos-delay="100"
          ></p>
          <div class="row">
            <!-- Process items will be dynamically generated here for brevity or can be hardcoded -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="process-card text-start">
                <img
                  src="./assets/images/placements/p-1.webp"
                  alt="p-1"
                  class="img-fluid"
                />
              </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="process-card text-start">
                <img
                  src="./assets/images/placements/p-2.webp"
                  alt="p-2"
                  class="img-fluid"
                />
              </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="process-card text-start">
                <img
                  src="./assets/images/placements/p-3.webp"
                  alt="p-3"
                  class="img-fluid"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <!-- Process items will be dynamically generated here for brevity or can be hardcoded -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="process-card text-start">
                <img
                  src="./assets/images/placements/p-4.webp"
                  alt="p-4"
                  class="img-fluid"
                />
              </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="process-card text-start">
                <img
                  src="./assets/images/placements/p-5.webp"
                  alt="p-5"
                  class="img-fluid"
                />
              </div>
            </div>

            <div class="col-md-6 col-lg-4" data-aos="fade-up">
              <div class="process-card text-start">
                <img
                  src="./assets/images/placements/p-6.webp"
                  alt="p-6"
                  class="img-fluid"
                />
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

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        // 1. Array of courses to cycle through
        const courses = [
          "UX/UI Design",
          "Web Design",
          "Graphic Design",
          "Video Editing",
          "Animation",
        ];

        // 2. Select the element
        const element = document.getElementById("course-name");
        let currentIndex = 0;

        // 3. The change function
        const changeText = () => {
          // Add the 'hidden' class to trigger fade out/slide down
          element.classList.add("hidden");

          // Wait for the CSS transition to finish (500ms) before swapping text
          setTimeout(() => {
            // Update index
            currentIndex = (currentIndex + 1) % courses.length;

            // Change text content
            element.textContent = courses[currentIndex];

            // Remove 'hidden' class to trigger fade in/slide up
            element.classList.remove("hidden");
          }, 500); // Matches the CSS transition time
        };

        // 4. Set interval to 2000ms (2 seconds)
        setInterval(changeText, 2000);
      });
    </script>

    <!-- Optional: Simple script to handle form submission for demo purposes -->
    <script>
      document
        .getElementById("enquireForm")
        .addEventListener("submit", function (e) {
          e.preventDefault();
          // In a real scenario, you would send this data to a server
          alert("Thank you for your enquiry! We will contact you shortly.");

          // Close the modal
          const modalEl = document.getElementById("enquireModal");
          const modal = bootstrap.Modal.getInstance(modalEl);
          modal.hide();

          // Reset form
          this.reset();
        });
    </script>
  </body>
</html>
