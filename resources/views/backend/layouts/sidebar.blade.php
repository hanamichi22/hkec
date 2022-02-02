<aside id="sidebar-left" class="sidebar-left">
				
    <div class="sidebar-header">
        <div class="sidebar-toggle d-none d-md-flex" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
            
                <ul class="nav nav-main">
                    <li>
                        <a class="nav-link" href="/home">
                            <i class="bx bx-home-alt" aria-hidden="true"></i>
                            <span>Home</span>
                        </a>                        
                    </li>
                    <li class="nav-group-label">Master Data</li>
                    <li>
                        <a class="nav-link" href="/mdatlet">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <span>Atlet</span>
                        </a>                        
                    </li>
                    <li>
                        <a class="nav-link" href="/mdcountry">
                            <i class="fas fa-flag" aria-hidden="true"></i>
                            <span>Country</span>
                        </a>                        
                    </li>
                    <li>
                        <a class="nav-link" href="/sponsors">
                            <i class="bi bi-pen" aria-hidden="true"></i>
                            <span>Sponsor</span>
                        </a>                        
                    </li>
                </ul>
            </nav>

            

        </div>

        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                        sidebarLeft = document.querySelector('#sidebar-left .nano-content');
                    
                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>
        

    </div>

</aside>