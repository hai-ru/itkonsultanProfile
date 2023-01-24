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
                                                {{__('navigation.home')}}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link {{ Request::is("pages/about") ? "active" : "" }}" href="{{ route('page','about') }}">
                                                {{__('navigation.about')}}
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle {{ Request::is("pages/services") ? "active" : "" }}" href="{{ route('page','services') }}">
                                                {{__('navigation.services')}}
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="nav-link {{ Request::is("pages/services") ? "active" : "" }}" href="{{ route('page','services') }}">{{__('navigation.overview')}}</a>
                                                </li>
                                                <li>
                                                    <a class="nav-link {{ Request::is("services/*") ? "active" : "" }}" href="{{ route('service','Software Development') }}">{{__('navigation.softdev')}}</a>
                                                </li>
                                                <li>
                                                    <a class="nav-link {{ Request::is("services/*") ? "active" : "" }}" href="{{ route('service','Internet of Things') }}">{{__('navigation.iot')}}</a>
                                                </li>
                                                <li>
                                                    <a class="nav-link {{ Request::is("services/*") ? "active" : "" }}" href="{{ route('service','Cloud Services') }}">{{__('navigation.cloud')}}</a>
                                                </li>
                                                <li>
                                                    <a class="nav-link {{ Request::is("services/*") ? "active" : "" }}" href="{{ route('service','Tech Support') }}">{{__('navigation.support')}}</a>
                                                </li>
                                                <li>
                                                    <a class="nav-link {{ Request::is("services/*") ? "active" : "" }}" href="{{ route('service','Data Security') }}">{{__('navigation.security')}}</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="nav-link {{ Request::is("blog") ? "active" : "" }}" href="{{ route('blog') }}">
                                                {{__('navigation.blog')}}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link {{ Request::is("careers") ? "active" : "" }}" href="{{ route('careers') }}">
                                                {{__('navigation.careers')}}
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link {{ Request::is("contact") ? "active" : "" }}" href="{{ route('contact') }}">
                                                {{__('navigation.contact')}}
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
                                    <span class="d-block font-weight-semibold text-color-dark text-2 line-height-3">{{__('navigation.no_label')}}</span>
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