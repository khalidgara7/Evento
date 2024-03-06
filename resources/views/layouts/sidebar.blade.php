


<!-- sidebar @s -->
<div class="nk-sidebar is-light nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        <div class="nk-sidebar-brand">
            <a href="{{ url('/index') }}" class="logo-link nk-sidebar-logo">
                <img class="logo-light logo-img" src="{{ asset('images/logo.png') }}"
                     srcset="{{ asset('images/logo2x.png 2x') }}" alt="logo">
                <img class="logo-dark logo-img" src="{{ asset('images/logo-dark.png') }}"
                     srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                <img class="logo-small logo-img logo-img-small" src="{{ asset('images/logo-small.png') }}"
                     srcset="./images/logo-small2x.png 2x" alt="logo-small">
            </a>
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none"
               data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
        </div>
    </div><!-- .nk-sidebar-element -->
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-content">
            <div class="nk-sidebar-menu" data-simplebar>
                <ul class="nk-menu">
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Dashboards</h6>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ url('/index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-presentation"></em></span>
                            <span class="nk-menu-text">Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-folder-list"></em>
                                        </span>
                            <span class="nk-menu-text">Documents</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ url('/document-saved') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Saved</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('/document-drafts') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Drafts</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item has-sub">
                        <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-edit"></em>
                                        </span>
                            <span class="nk-menu-text">Editor</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="{{ url('/document-editor') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">New</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('/document-editor-generate') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Generate</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="{{ url('/document-editor-edit') }}" class="nk-menu-link">
                                    <span class="nk-menu-text">Edit</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ url('/templates') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-layers"></em>
                                        </span>
                            <span class="nk-menu-text">Templates</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ url('/history') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-clock"></em>
                                        </span>
                            <span class="nk-menu-text">History</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ url('/pricing-plans') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-sign-usdc"></em>
                                        </span>
                            <span class="nk-menu-text">Pricing Plans</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ url('/profile') }}" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-user"></em>
                                        </span>
                            <span class="nk-menu-text">Profile</span>
                        </a>
                    </li>
                    <li class="nk-menu-item">
                        <a href="{{ url('/payment') }}" target="_blank" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <em class="icon ni ni-wallet"></em>
                                        </span>
                            <span class="nk-menu-text">Payments</span>
                        </a>
                    </li>
                    <li class="nk-menu-heading">
                        <h6 class="overline-title text-primary-alt">Return to</h6>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ url('/index') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-dashlite-alt"></em></span>
                            <span class="nk-menu-text">Main Dashboard</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                    <li class="nk-menu-item">
                        <a href="{{ url('/components') }}" class="nk-menu-link">
                            <span class="nk-menu-icon"><em class="icon ni ni-layers-fill"></em></span>
                            <span class="nk-menu-text">All Components</span>
                        </a>
                    </li><!-- .nk-menu-item -->
                </ul><!-- .nk-menu -->
            </div><!-- .nk-sidebar-menu -->
        </div><!-- .nk-sidebar-content -->
    </div><!-- .nk-sidebar-element -->
</div>
<!-- sidebar @e -->
