<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 90}">
    <div class="header-body border-top-0 box-shadow-none">
        <div class="header-container container container-xl-custom">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="Porto" width="162" height="50" src="/images/logo-light.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-effect-1 order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li>
                                            <a class="nav-link {{ Request::is("/") ? "active" : "" }}" href="/">
                                                Home
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link {{ Request::is("pages/about") ? "active" : "" }}" href="{{ route('page','about') }}">
                                                About Us
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ Request::is("pages/services") ? "active" : "" }}" href="{{ route('page','services') }}">
                                                IT Services
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="nav-link {{ Request::is("pages/services") ? "active" : "" }}" href="{{ route('page','services') }}">Overview</a>
                                                </li>
                                                <li>
                                                    <a class="nav-link {{ Request::is("services/*") ? "active" : "" }}" href="{{ route('service','Cloud Services') }}">Cloud Services</a>
                                                </li>
                                                <li>
                                                    <a class="nav-link {{ Request::is("services/*") ? "active" : "" }}" href="{{ route('service','Tech Support') }}">Tech Support</a>
                                                </li>
                                                <li>
                                                    <a class="nav-link {{ Request::is("services/*") ? "active" : "" }}" href="{{ route('service','Data Security') }}">Data Security</a>
                                                </li>
                                                <li>
                                                    <a class="nav-link {{ Request::is("services/*") ? "active" : "" }}" href="{{ route('service','Software Development') }}">Software Development</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="demo-it-services-blog.html">
                                                Blog
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="demo-it-services-careers.html">
                                                Careers
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="demo-it-services-contact.html">
                                                Contact
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="d-none d-sm-inline-flex order-1 order-lg-2 ms-2">
                            <ul class="header-extra-info d-flex">
                                <li class="d-flex flex-column">
                                    <span class="d-block font-weight-semibold text-color-dark text-2 line-height-3">SALES</span>
                                    <a href="tel:+6281254197359" class="font-weight-bold text-color-primary text-5">+6281254197359</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>