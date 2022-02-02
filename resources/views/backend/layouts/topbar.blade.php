<header class="header header-nav-menu header-nav-links">
    <div class="logo-container">
        <a href="{{ asset('templateadmin/') }}/../" class="logo">
            {{-- <img src="{{ asset('template/img/logohkendurance.png') }}" class="logo-image" width="50" height="124" alt="Porto Admin" /><img src="{{ asset('templateadmin/') }}/img/logo-default.png" class="logo-image-mobile" width="90" height="41" alt="Porto Admin" /> --}}
            <label for="" style="font-size: 24px; font-weight:bold;">HK ENDURANCE</label>
        </a>
        <button class="btn header-btn-collapse-nav d-lg-none" data-toggle="collapse" data-target=".header-nav">
            <i class="fas fa-bars"></i>
        </button>

        <!-- start: header nav menu -->
        {{-- <div class="header-nav collapse">
            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 header-nav-main-square">
                <nav>
                    <ul class="nav nav-pills" id="mainNav">
                        <li class="">
                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-default.html">
                                Dashboard
                            </a>    
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ asset('templateadmin/') }}/#">
                                Layouts
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/index.html">
                                        Landing Page
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-default.html">
                                        Default
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-modern.html">
                                        Modern
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="nav-link">
                                        Boxed
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-boxed.html">
                                                Static Header
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-boxed-fixed-header.html">
                                                Fixed Header
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="nav-link">
                                        Horizontal Menu Header
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-header-menu.html">
                                                Pills
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-header-menu-stripe.html">
                                                Stripe
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-header-menu-top-line.html">
                                                Top Line
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-dark.html">
                                        Dark
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-dark-header.html">
                                        Dark Header
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-two-navigations.html">
                                        Two Navigations
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="nav-link">
                                        Tab Navigation
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-tab-navigation-dark.html">
                                                Tab Navigation Dark
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-tab-navigation.html">
                                                Tab Navigation Light
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-tab-navigation-boxed.html">
                                                Tab Navigation Boxed
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-light-sidebar.html">
                                        Light Sidebar
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-left-sidebar-collapsed.html">
                                        Left Sidebar Collapsed
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-left-sidebar-scroll.html">
                                        Left Sidebar Scroll
                                    </a>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="nav-link">
                                        Left Sidebar Big Icons
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-left-sidebar-big-icons.html">
                                                Left Sidebar Big Icons Dark
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-left-sidebar-big-icons-light.html">
                                                Left Sidebar Big Icons Light
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="nav-link">
                                        Left Sidebar Panel
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-left-sidebar-panel.html">
                                                Left Sidebar Panel Dark
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-left-sidebar-panel-light.html">
                                                Left Sidebar Panel Light
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="nav-link">
                                        Left Sidebar Sizes
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-sidebar-sizes-xs.html">
                                                Left Sidebar XS
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-sidebar-sizes-sm.html">
                                                Left Sidebar SM
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-sidebar-sizes-md.html">
                                                Left Sidebar MD
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/layouts-square-borders.html">
                                        Square Borders
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ asset('templateadmin/') }}/#">
                                Pages
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/pages-signup.html">
                                        Sign Up
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/pages-signin.html">
                                        Sign In
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/pages-recover-password.html">
                                        Recover Password
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/pages-lock-screen.html">
                                        Locked Screen
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/pages-user-profile.html">
                                        User Profile
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/pages-session-timeout.html">
                                        Session Timeout
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/pages-calendar.html">
                                        Calendar
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/pages-timeline.html">
                                        Timeline
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/pages-media-gallery.html">
                                        Media Gallery
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/pages-invoice.html">
                                        Invoice
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/pages-blank.html">
                                        Blank Page
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/pages-404.html">
                                        404
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/pages-500.html">
                                        500
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/pages-log-viewer.html">
                                        Log Viewer
                                    </a>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/pages-search-results.html">
                                        Search Results
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-mega">
                            <a class="nav-link dropdown-toggle" href="{{ asset('templateadmin/') }}/#">UI Elements</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="dropdown-mega-content">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <ul class="dropdown-mega-sub-nav">
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-typography.html">
                                                            Typography
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/#">
                                                            Icons <span class="mega-sub-nav-toggle toggled float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-1"></span>
                                                        </a>
                                                        <ul class="dropdown-mega-sub-nav mega-sub-nav-sub-menu-1 collapse in">
                                                            <li>
                                                                <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-icons-elusive.html">
                                                                    Elusive
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-icons-font-awesome.html">
                                                                    Font Awesome
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-icons-line-icons.html">
                                                                    Line Icons
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-icons-meteocons.html">
                                                                    Meteocons
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-icons-box-icons.html">
                                                                    Box Icons
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-tabs.html">
                                                            Tabs
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-cards.html">
                                                            Cards
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <ul class="dropdown-mega-sub-nav">
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-widgets.html">
                                                            Widgets
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-portlets.html">
                                                            Portlets
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-buttons.html">
                                                            Buttons
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-alerts.html">
                                                            Alerts
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-notifications.html">
                                                            Notifications
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-modals.html">
                                                            Modals
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-lightbox.html">
                                                            Lightbox
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-progressbars.html">
                                                            Progress Bars
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <ul class="dropdown-mega-sub-nav">
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-sliders.html">
                                                            Sliders
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-carousels.html">
                                                            Carousels
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-accordions.html">
                                                            Accordions
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-toggles.html">
                                                            Toggles
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-nestable.html">
                                                            Nestable
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-tree-view.html">
                                                            Tree View
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-scrollable.html">
                                                            Scrollable
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-grid-system.html">
                                                            Grid System
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-3">
                                                <ul class="dropdown-mega-sub-nav">
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-charts.html">
                                                            Charts
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/#">
                                                            Animations <span class="mega-sub-nav-toggle toggled float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-2"></span>
                                                        </a>
                                                        <ul class="dropdown-mega-sub-nav mega-sub-nav-sub-menu-2 collapse">
                                                            <li>
                                                                <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-animations-appear.html">
                                                                    Appear
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-animations-hover.html">
                                                                    Hover
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/#">
                                                            Loading <span class="mega-sub-nav-toggle toggled float-right" data-toggle="collapse" data-target=".mega-sub-nav-sub-menu-3"></span>
                                                        </a>
                                                        <ul class="dropdown-mega-sub-nav mega-sub-nav-sub-menu-3 collapse">
                                                            <li>
                                                                <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-loading-overlay.html">
                                                                    Overlay
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-loading-progress.html">
                                                                    Progress
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link" href="{{ asset('templateadmin/') }}/ui-elements-extra.html">
                                                            Extra
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="{{ asset('templateadmin/') }}/#" class="nav-link dropdown-toggle">More</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/#">
                                        Maps
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/maps-google-maps.html">
                                                Basic
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/maps-google-maps-builder.html">
                                                Map Builder
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/maps-vector.html">
                                                Vector
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/extra-ajax-made-easy.html">
                                        Ajax
                                    </a>            
                                </li>
                                <li class="dropdown">
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/#">
                                        eCommerce
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/ecommerce-dashboard.html">
                                                Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/ecommerce-products-list.html">
                                                Products List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/ecommerce-products-form.html">
                                                Products Form
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/ecommerce-category-list.html">
                                                Categories List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/ecommerce-category-form.html">
                                                Category Form
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/ecommerce-coupons-list.html">
                                                Coupons List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/ecommerce-coupons-form.html">
                                                Coupons Form
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/ecommerce-orders-list.html">
                                                Orders List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/ecommerce-orders-detail.html">
                                                Orders Detail
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/ecommerce-customers-list.html">
                                                Customers List
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/ecommerce-customers-form.html">
                                                Customers Form
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/mailbox-folder.html">
                                        Mailbox
                                        <span class="float-right badge badge-primary">182</span>
                                    </a>            
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/#">
                                        Forms
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/forms-basic.html">
                                                Basic
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/forms-advanced.html">
                                                Advanced
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/forms-validation.html">
                                                Validation
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/forms-layouts.html">
                                                Layouts
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/forms-wizard.html">
                                                Wizard
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/forms-code-editor.html">
                                                Code Editor
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/#">
                                        Tables
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/tables-basic.html">
                                                Basic
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/tables-advanced.html">
                                                Advanced
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/tables-responsive.html">
                                                Responsive
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/tables-editable.html">
                                                Editable
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/tables-ajax.html">
                                                Ajax
                                            </a>
                                        </li>
                                        <li>
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/tables-pricing.html">
                                                Pricing
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-submenu">
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/#">
                                        Menu Levels
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <a class="nav-link">
                                                First Level
                                            </a>
                                        </li>
                                        <li class="dropdown-submenu">
                                            <a class="nav-link" href="{{ asset('templateadmin/') }}/#">
                                                Second Level
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="nav-link">
                                                        Second Level Link #1
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="nav-link">
                                                        Second Level Link #2
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/#">
                                                        Third Level
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="nav-link">
                                                                Third Level Link #1
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a class="nav-link">
                                                                Third Level Link #2
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler">
                                        Front-End <span class="tip tip-dark">hot</span><em class="not-included">(Not Included)</em>
                                    </a>            
                                </li>
                                <li>
                                    <a class="nav-link" href="{{ asset('templateadmin/') }}/extra-changelog.html">
                                        Changelog
                                    </a>            
                                </li>
                        
                    </ul>
                </nav>
            </div>
        </div> --}}
        <!-- end: header nav menu -->
    </div>

    <!-- start: search & user box -->
    <div class="header-right">

        <a class="btn search-toggle d-none d-md-inline-block d-xl-none" data-toggle-class="active" data-target=".search"><i class="bx bx-search"></i></a>
        {{-- <form action="pages-search-results.html" class="search search-style-1 nav-form d-none d-xl-inline-block">
            <div class="input-group">
                <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                <span class="input-group-append">
                    <button class="btn btn-default" type="submit"><i class="bx bx-search"></i></button>
                </span>
            </div>
        </form> --}}

        {{-- <span class="separator"></span>
        <a class="dropdown-language nav-link" href="{{ asset('templateadmin/') }}/#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ asset('templateadmin/') }}/img/blank.gif" class="flag flag-us" alt="English" /> EN
            <i class="fas fa-chevron-down"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownLanguage">
            <a class="dropdown-item" href="{{ asset('templateadmin/') }}/#"><img src="{{ asset('templateadmin/') }}/img/blank.gif" class="flag flag-us" alt="English" /> English</a>
            <a class="dropdown-item" href="{{ asset('templateadmin/') }}/#"><img src="{{ asset('templateadmin/') }}/img/blank.gif" class="flag flag-es" alt="English" /> Español</a>
            <a class="dropdown-item" href="{{ asset('templateadmin/') }}/#"><img src="{{ asset('templateadmin/') }}/img/blank.gif" class="flag flag-fr" alt="English" /> Française</a>
        </div>
    
        <span class="separator"></span> --}}

        <ul class="notifications">
            {{-- <li>
                <a href="{{ asset('templateadmin/') }}/#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                    <i class="bx bx-task"></i>
                    <span class="badge">3</span>
                </a>

                <div class="dropdown-menu notification-menu large">
                    <div class="notification-title">
                        <span class="float-right badge badge-default">3</span>
                        Tasks
                    </div>

                    <div class="content">
                        <ul>
                            <li>
                                <p class="clearfix mb-1">
                                    <span class="message float-left">Generating Sales Report</span>
                                    <span class="message float-right text-dark">60%</span>
                                </p>
                                <div class="progress progress-xs light">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                </div>
                            </li>

                            <li>
                                <p class="clearfix mb-1">
                                    <span class="message float-left">Importing Contacts</span>
                                    <span class="message float-right text-dark">98%</span>
                                </p>
                                <div class="progress progress-xs light">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                </div>
                            </li>

                            <li>
                                <p class="clearfix mb-1">
                                    <span class="message float-left">Uploading something big</span>
                                    <span class="message float-right text-dark">33%</span>
                                </p>
                                <div class="progress progress-xs light mb-1">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li> --}}
            {{-- <li>
                <a href="{{ asset('templateadmin/') }}/#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                    <i class="bx bx-envelope"></i>
                    <span class="badge">4</span>
                </a>

                <div class="dropdown-menu notification-menu">
                    <div class="notification-title">
                        <span class="float-right badge badge-default">230</span>
                        Messages
                    </div>

                    <div class="content">
                        <ul>
                            <li>
                                <a href="{{ asset('templateadmin/') }}/#" class="clearfix">
                                    <span class="image image-as-text">JD</span>
                                    <span class="title">Joseph Doe</span>
                                    <span class="message">Lorem ipsum dolor sit.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('templateadmin/') }}/#" class="clearfix">
                                    <span class="image image-as-text bg-secondary">JJ</span>
                                    <span class="title">Joseph Junior</span>
                                    <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('templateadmin/') }}/#" class="clearfix">
                                    <span class="image image-as-text bg-tertiary">MD</span>
                                    <span class="title">Monica Doe</span>
                                    <span class="message">Lorem ipsum dolor sit.</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('templateadmin/') }}/#" class="clearfix">
                                    <span class="image image-as-text bg-quaternary">RD</span>
                                    <span class="title">Robert Doe</span>
                                    <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                </a>
                            </li>
                        </ul>

                        <hr />

                        <div class="text-right">
                            <a href="{{ asset('templateadmin/') }}/#" class="view-more">View All</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <a href="{{ asset('templateadmin/') }}/#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                    <i class="bx bx-bell"></i>
                    <span class="badge">3</span>
                </a>

                <div class="dropdown-menu notification-menu">
                    <div class="notification-title">
                        <span class="float-right badge badge-default">3</span>
                        Alerts
                    </div>

                    <div class="content">
                        <ul>
                            <li>
                                <a href="{{ asset('templateadmin/') }}/#" class="clearfix">
                                    <div class="image">
                                        <i class="bx bx-dislike bg-danger"></i>
                                    </div>
                                    <span class="title">Server is Down!</span>
                                    <span class="message">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('templateadmin/') }}/#" class="clearfix">
                                    <div class="image">
                                        <i class="bx bx-lock-alt bg-warning"></i>
                                    </div>
                                    <span class="title">User Locked</span>
                                    <span class="message">15 minutes ago</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ asset('templateadmin/') }}/#" class="clearfix">
                                    <div class="image">
                                        <i class="bx bx-wifi bg-success"></i>
                                    </div>
                                    <span class="title">Connection Restaured</span>
                                    <span class="message">10/10/2017</span>
                                </a>
                            </li>
                        </ul>

                        <hr />

                        <div class="text-right">
                            <a href="{{ asset('templateadmin/') }}/#" class="view-more">View All</a>
                        </div>
                    </div>
                </div>
            </li> --}}
        </ul>

        <span class="separator"></span>

        <div id="userbox" class="userbox">
            <a href="{{ asset('templateadmin/') }}/#" data-toggle="dropdown">
                <span class="profile-picture profile-picture-as-text">JD</span>
                <div class="profile-info profile-info-no-role" data-lock-name="{{ Auth::user()->name }}" data-lock-email="{{ Auth::user()->email }}">
                    <span class="name">Hi, <strong class="font-weight-semibold">{{ Auth::user()->name }}</strong></span>
                </div>
                
                <i class="fas fa-chevron-down text-color-dark"></i>
            </a>

            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li>
                        <a role="menuitem" tabindex="-1" href="/logout"><i class="bx bx-log-out"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end: search & user box -->
</header>
