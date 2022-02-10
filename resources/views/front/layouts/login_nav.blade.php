<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': false, 'stickyEnableOnMobile': false, 'stickyStartAt': 70, 'stickyChangeLogo': false, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0 box-shadow-none">
        <div class="header-container header-container-md container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/"><img alt="Porto" width="100" height="80" data-sticky-width="50" data-sticky-height="40"  src="{{ asset('template/') }}/img/logohkendurance.png"></a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-line header-nav-bottom-line header-nav-bottom-line-no-transform header-nav-bottom-line-active-text-dark header-nav-bottom-line-effect-1 order-2 order-lg-1">
                            <div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle active" href="/">
                                                Home
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/#apaituhkec">Apa itu HKEC 123 </a></li>
                                                <li><a class="dropdown-item" href="/#mengapahkec">Mengapa HKEC 123</a></li>
                                                <li><a class="dropdown-item" href="/#galleryandpublikasi">Galery & Publikasi</a></li>
                                                <li><a class="dropdown-item" href="/#sponsorandpartner">Sponsor & Partner</a></li>
                                                <li><a class="dropdown-item" href="/#3box">Pra Event & Promosi</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Series
                                            </a>
                                            <ul class="dropdown-menu">
                                                {{-- <li><a class="dropdown-item" href="/series/list_peserta_negara">The Lombok Series</a></li> --}}
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">The Lombok Series</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="#">Leg</a></li>
                                                        <ul class="dropdown-submenu">
                                                            <li><a class="dropdown-item" href="/home/praeventdanpromosi/swim">Renang</a></li>
                                                            <li><a class="dropdown-item" href="/home/praeventdanpromosi/cycle">Sepeda</a></li>
                                                            <li><a class="dropdown-item" href="home/praeventdanpromosi/run">Lari</a></li>
                                                        </ul>
                                                        <li><a class="dropdown-item" href="/home/praeventdanpromosi/swim">Negara Peserta</a></li>
                                                        
                                                    </ul>
                                                    {{-- <a class="dropdown-item" href="#">The Lombok Series</a>
                                                    <a class="dropdown-item" href="#">Triathlon</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="/home/praeventdanpromosi/swim">Renang</a></li>
                                                        <li><a class="dropdown-item" href="/home/praeventdanpromosi/cycle">Sepeda</a></li>
                                                        <li><a class="dropdown-item" href="home/praeventdanpromosi/run">Lari</a></li>
                                                    </ul> --}}
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Protokol
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="/protokol/video">Video</a></li>
                                                <li><a class="dropdown-item" href="#">Deskripsi</a></li>
                                                <li><a class="dropdown-item" href="#">Foto Kegiatan Menjalankan Protkol</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Pra Event & Promosi
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Sponsorship</a></li>
                                                <li><a class="dropdown-item" href="#">Pra Event</a></li>
                                                <li><a class="dropdown-item" href="#">Publikasi</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex">
                                <a href="#" class="header-nav-features-toggle text-decoration-none" data-focus="headerSearch"><i class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown header-nav-features-dropdown-mobile-fixed" id="headerTopSearchDropdown">
                                    <form role="search" action="page-search-results.html" method="get">
                                        <div class="simple-search input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                                            <button class="btn" type="submit">
                                                <i class="fas fa-search header-nav-top-icon text-color-dark"></i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>