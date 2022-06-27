
<!--====================  header area ====================-->
<div class="header-area header-area--default">
    <!-- Header Top Wrap Start -->
    <!-- Header Top Wrap End -->

    <!-- Header Bottom Wrap Start -->
    <div class="header-bottom-wrap header-area--absolute header-sticky">
        <div class="mainheader">
        <div class="container top-nav">
            <div class="row">
            <div class="col-md-5 slogon">
                <p class="mb-0 pt-1 text-white p1">
                une expertise de plus de 20 ans
                </p>
            </div>
            <div class="col-auto ms-auto icons">
                <ul class="nav">
                <li>
                    <a class="me-5 pt-1 text-white nav-link" href="">
                    <i class="fa-solid fa-phone"></i> +212 522 676 768
                    </a>
                </li>
                <li>
                    <a class="px-1 pt-1 text-white nav-link" href="">
                    <i class="fa-solid fa-envelope"></i>
                    </a>
                </li>
                <li>
                    <a class="px-1 pt-1 text-white nav-link" href="">
                    <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a class="px-1 pt-1 text-white nav-link" href="">
                    <i class="fa-brands fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a class="px-1 pt-1 text-white nav-link" href="">
                    <i class="fa-brands fa-youtube"></i>
                    </a>
                </li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="header default-menu-style position-relative">
                <!-- brand logo -->
                <div class="header__logo">
                    <a href="">
                    <img
                    src="{{ asset('vendors/dist/img/white-8.png') }}"
                        class="img-fluid"
                        alt=""
                    />
                    </a>
                </div>

                <!-- header midle box  -->
                <div class="header-midle-box">
                    <div class="header-bottom-wrap d-md-block d-none">
                    <div class="header-bottom-inner">
                        <div class="header-bottom-left-wrap">
                        <!-- navigation menu -->
                        <div class="header__navigation d-none d-lg-block">
                            <nav class="navigation-menu primary--menu">
                            <ul>
                                <li class="has-children has-children--multilevel-submenu">
                                  <a href="#"><span>a propos</span></a>
                                </li>
                                <li class="has-children">
                                  <a href="#" ><span>Prestations</span></a>
                                </li>
                                <li class="has-children">
                                  <a href="#" ><span>Projets</span></a>
                                </li>
                                {{-- <li class="has-children has-children--multilevel-submenu">
                                  <a href="inner-pages/architecture/services.html" ><span>Projets</span></a>
                                    <ul class="submenu">
                                    <li> <a href="inner-pages/architecture/services.html"><span>Services One</span></a> </li>
                                </ul>
                                </li> --}}
                                <li class="has-children">
                                  <a href="#" ><span>Actualites</span></a>
                                </li>
                                <li class="has-children">
                                    <a href="#"><span>Carrière</span></a>
                                </li>
                                <li class="has-children">
                                    <a href="#"><span>Contact</span></a>
                                </li>
                            </ul>
                            </nav>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>

                <div
                    class="mobile-navigation-icon d-block d-lg-none"
                    id="mobile-menu-trigger"
                >
                    <i></i>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- Header Bottom Wrap End -->
    </div>
    </div>
    <!--====================  End of header area  ====================-->
  

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
          <div class="mobile-menu-overlay__header">
            <div class="container-fluid">
              <div class="row align-items-center">
                <div class="col-md-6 col-8">
                  <!-- logo -->
                  <div class="logo">
                    <a href="index.html">
                      <img
                        src="{{ asset('assets/vendors/dist/img/white-8.png') }}"
                        class="img-fluid"
                        alt=""
                      />
                    </a>
                  </div>
                </div>
                <div class="col-md-6 col-4">
                  <!-- mobile menu content -->
                  <div class="mobile-menu-content text-right">
                    <span
                      class="mobile-navigation-close-icon"
                      id="mobile-menu-close-trigger"
                    ></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation">
              <ul>
                <li class="has-children">
                  <a href="index.html">Home</a>
                  <ul class="sub-menu">
                    <li>
                      <a href="architecture.html"
                        ><span>Architecture Home One</span></a
                      >
                    </li>
                    <li>
                      <a href="architecture-02.html"
                        ><span>Architecture Home Two</span></a
                      >
                    </li>
                    <li>
                      <a href="architecture-03.html"
                        ><span>Architecture Home Three</span></a
                      >
                    </li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="inner-pages/architecture/about-us.html"
                    ><span>About</span></a
                  >
                </li>
                <li class="has-children">
                  <a href="inner-pages/architecture/services.html"
                    ><span>Services</span></a
                  >
                  <ul class="sub-menu">
                    <li>
                      <a href="inner-pages/architecture/services.html"
                        ><span>Services One</span></a
                      >
                    </li>
                    <li>
                      <a href="inner-pages/architecture/services-2.html"
                        ><span>Services Two</span></a
                      >
                    </li>
                    <li>
                      <a href="inner-pages/architecture/services-details.html"
                        ><span>Services Details</span></a
                      >
                    </li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="inner-pages/architecture/project.html"
                    ><span>Projects</span></a
                  >
                  <ul class="sub-menu">
                    <li>
                      <a href="inner-pages/architecture/project.html"
                        ><span>Project One</span></a
                      >
                    </li>
                    <li>
                      <a href="inner-pages/architecture/project-2.html"
                        ><span>Project Two</span></a
                      >
                    </li>
                    <li>
                      <a href="inner-pages/architecture/portfolio-single-one.html"
                        ><span>Project Details</span></a
                      >
                    </li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="#"><span>Blog</span></a>
                  <ul class="sub-menu">
                    <li>
                      <a href="inner-pages/architecture/blog-grid.html"
                        ><span>Blog Grid</span></a
                      >
                    </li>
                    <li>
                      <a href="inner-pages/architecture/blog-left-sidebar.html"
                        ><span>Blog left sidebar</span></a
                      >
                    </li>
                    <li>
                      <a href="inner-pages/architecture/blog-right-sidebar.html"
                        ><span>Blog right sidebar</span></a
                      >
                    </li>
                    <li>
                      <a
                        href="inner-pages/architecture/blog-details-full-width.html"
                        ><span>Blog details no sidebar</span></a
                      >
                    </li>
                    <li>
                      <a
                        href="inner-pages/architecture/blog-details-left-sidebar.html"
                        ><span>Blog details left sidebar</span></a
                      >
                    </li>
                    <li>
                      <a
                        href="inner-pages/architecture/blog-details-right-sidebar.html"
                        ><span>Blog details right sidebar</span></a
                      >
                    </li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="#"><span>Pages</span></a>
                  <ul class="sub-menu">
                    <li>
                      <a href="inner-pages/architecture/error-404.html"
                        ><span>Error 404</span></a
                      >
                    </li>
                    <li>
                      <a href="inner-pages/architecture/pricing-package.html"
                        ><span>Pricing Package</span></a
                      >
                    </li>
                    <li>
                      <a href="inner-pages/architecture/clients-logo.html"
                        ><span>Clients Logo</span></a
                      >
                    </li>
                  </ul>
                </li>
                <li class="has-children">
                  <a href="inner-pages/architecture/contact-us.html"
                    ><span>Contact</span></a
                  >
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!--====================  End of mobile menu overlay  ====================-->