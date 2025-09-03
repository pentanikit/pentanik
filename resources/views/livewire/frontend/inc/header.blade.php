
<div>
    <div class="sidebar-overlay" :class="cartSummaryOpened ? 'show' : ''"></div>
    <!-- Header Start -->
    <div class="header-main-area">
        <div class="header" id="header">
            <div class="container-fluid position-relative">
                <div class="header-wrapper">
                    <!-- ham menu -->
                    <i class="fa-sharp fa-solid fa-bars-staggered ham__menu" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample"></i>

                    <!-- logo -->
                    <div class="header-menu-wrapper align-items-center d-flex">
                        <div class="logo-wrapper">
                            <a href="{{ url('/') }}" class="normal-logo" id="normal-logo">
                                <img src="{{ uploadedFile(settings('header_logo')) }}" alt="...">
                            </a>
                        </div>

                        <div class="menu-list-wrapper d-flex align-items-center position-relative">
                            <button class="search-toggle--btn">
                                <i class="fa-solid fa-magnifying-glass text--black"></i>
                            </button>
                            <ul class="main-menu">
                                <li>
                                    <a class="active menu-item" href="{{ route('shop') }}" id="v-pills-menu-tab"><i
                                            class="fa-solid fa-bars"></i> Products</a>

                                    <!-- item 1 -->
                                    <!--style="font-size:18px; line-height:20px"-->
                                    <ul class="sub-menu" id="sub-menu-v-pills-menu-tab">
                                       
                                        <li class="sub-menu-item" id="1">
                                            
                                            <!--style="text-transform: capitalize;font-size:18px;line-height:15px"-->
                                        
                                            <a href="https://pentanik.com/tv">Television</a>
                                        </li>
                                       
                                           <li class="sub-menu-item"  id="2">
                                        
                                            <a href="https://pentanik.com/pentanik-ac-price-in-bangladesh"> Air Conditioner</a>
                                        </li>
                                        
                                              <li class="sub-menu-item" >
                                        
                                            <a href="https://pentanik.com/home-appliances">  Home Appliances</a>
                                        </li>
                                              </li>
                                        
                                              <li class="sub-menu-item">
                                        
                                            <a href="#"> Others</a>
                                        </li>
                                       
                                       
                                       
                                        <span class="inner-menu" id="inner-menu-1">
                                            <ul class="inner-items-wrap">
                                               <!--style="text-transform: capitalize;font-size:18px; line-height:15px"-->
                                                <li class="inner-item">
                                                    <a href="https://pentanik.com/regular-pentanik-tv"  >
                                                       Regular Model
                                                    </a>
                                                </li>
                                                      <li class="inner-item">
                                                    <a href="https://pentanik.com/trending-pentanik-tv" >
                                                       Special Model
                                                    </a>
                                                </li>
                                                
                                                      <li class="inner-item">
                                                    <a href="https://pentanik.com/pentanik-premium-tv">
                                                       Premium Model
                                                    </a>
                                                </li>
                                            
                                            </ul>
                                        </span>
                                        
                                        
                                        <span class="inner-menu" id="inner-menu-2">
                                            <ul class="inner-items-wrap">
                                               
                                                <li class="inner-item">
                                                    <a href=""  >
                                                       Inverter
                                                    </a>
                                                </li>
                                                      <li class="inner-item">
                                                    <a href="https://pentanik.com/pentanik-ac-price-in-bangladesh">
                                                      Non-Inverter
                                                    </a>
                                                </li>
                                                
                                     
                                            
                                            </ul>
                                        </span>
                                      
                                      
                                     
                                    </ul>
                                    <!--  -->
                                </li>
                                
                                <li>   <a href="https://pentanik.com/tv"> <i class="fa-solid fa-tv me-2"></i> Television</a> </li>
                                <li><a href="https://pentanik.com/pentanik-interactive-flat-panel-price-in-bangladesh"> <i class=" me-2"></i>Smart Board</a></li>
                                
                                <li><a href="{{ route('about.us') }}">About</a></li>
                                <li><a href="{{ route('blog') }}">Blog</a></li>
                            </ul>

                            <form action="{{ route('shop') }}" class="search--form">
                                <input class="header--input" name="query" placeholder="Search..." autocomplete="off" value="{{ request('query') }}">
                                <button class="search--btn">
                                    <i class="fa-solid fa-magnifying-glass text--black"></i>
                                </button>
                            </form>
                        </div>

                    </div>
                    <!-- / logo -->

                    <ul class="login-lng d-flex align-items-center gap--24">
                        <li><a href="https://pentanik.com/contact-us" class="fw--600 fs--16">Contact</a></li>
                        <li>
                            <a class="login--btn" href="{{ route('login') }}"><i
                                    class="fa-solid fa-users fs--18"></i></a>
                        </li>
                        <li class="position-relative">
                            <button class="cart--btn" @click="cartSummaryOpened = true"><i
                                    class="fa-solid fa-cart-shopping fs--18 text--white"></i></button>
                            <span class="count--item position-absolute">{{ $cartCount }}</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Header section End -->

    <!-- Sidebar mobile menu wrap Start-->
    <div class="offcanvas offcanvas-start text-bg-light" tabindex="-1" id="offcanvasExample">
        <div class="offcanvas-header">
            <div class="logo">
                <div class="align-items-center d-flex">
                    <div class="logo-wrapper">
                        <a href="{{ url('/') }}" class="normal-logo" id="offcanvas-logo-normal">
                            <img src="{{ uploadedFile(settings('header_logo')) }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            @auth
            <div class="user-info">
                <div class="user-thumb">
                    <a href="{{ url('/') }}">
                        <img src="{{ profilePic() }}" alt="Pic">
                    </a>
                </div>
                <a href="{{ route('customer.dashboard') }}">
                    <h4>{{ auth()->user()->name }}</h4>
                </a>
            </div>
            @endauth

            <ul class="sidebar-menu-list">
                <li class="sidebar-menu-list__item">
                    <a href="{{ url('/') }}" class="sidebar-menu-list__link active">
                        <span class="icon"><i class="fa-solid fa-border-all"></i></span>
                        <span class="text">Home</span>
                    </a>
                </li>



                <li class="sidebar-menu-list__item has-dropdown">
            
                    <a href="" target="_blank" class="sidebar-menu-list__link">
                                Television
                    </a>
                 
                    <div class="sidebar-submenu">
                        <ul class="sidebar-submenu-list">
                          
                            <li class="sidebar-submenu-list__item">
                                <a href="https://pentanik.com/regular-pentanik-tv" target="_blank"
                                    class="sidebar-submenu-list__link">
                                    Regular Model
                                </a>
                            </li>
                            
                                 <li class="sidebar-submenu-list__item">
                                <a href="https://pentanik.com/pentanik-premium-tv" target="_blank"
                                    class="sidebar-submenu-list__link">
                                    Premium Model
                                </a>
                            </li>
                            
                                 <li class="sidebar-submenu-list__item">
                                <a href="https://pentanik.com/trending-pentanik-tv" target="_blank"
                                    class="sidebar-submenu-list__link">
                                    Special Model
                                </a>
                            </li>
                            
                            <li class="sidebar-submenu-list__item">
                                <a href="https://pentanik.com/tv"
                                    class="sidebar-submenu-list__link">
                                   All Television
                                </a>
                            </li>
                        
                        </ul>
                    </div>
             
                </li>
                
                      <li class="sidebar-menu-list__item has-dropdown">
            
                    <a href="https://pentanik.com/pentanik-ac-price-in-bangladesh" target="_blank" class="sidebar-menu-list__link">
                                Air Conditioner
                    </a>
                 
                    <div class="sidebar-submenu">
                        <ul class="sidebar-submenu-list">
                          
                            <li class="sidebar-submenu-list__item">
                                <a href="" target="_blank"
                                    class="sidebar-submenu-list__link">
                                     Inverter
                                </a>
                            </li>
                            
                                 <li class="sidebar-submenu-list__item">
                                <a href="https://pentanik.com/pentanik-ac-price-in-bangladesh" target="_blank"
                                    class="sidebar-submenu-list__link">
                                    Non-Inverter
                                </a>
                            </li>
                            
                        
                        
                        </ul>
                    </div>
             
                </li>
                
                
                 <li class="sidebar-menu-list__item ">
            
                    <a href="https://pentanik.com/home-appliances" target="_blank" class="sidebar-menu-list__link">
                                Home Appliances
                    </a>
                 
                    
             
                </li>
                
                
             
                
                <li class="sidebar-menu-list__item ">
            
                    <a href="https://pentanik.com/pentanik-interactive-flat-panel-price-in-bangladesh" target="_blank" class="sidebar-menu-list__link">
                                Smart Board
                    </a>
                </l>
                    
                    
                  <li class="sidebar-menu-list__item ">
            
                    <a href="" target="_blank" class="sidebar-menu-list__link">
                                Others
                    </a>
                 
                 
                    
             
                </li>
                
                <li class="sidebar-menu-list__item ">
            
                    <a href="https://pentanik.com/about-us" target="_blank" class="sidebar-menu-list__link">
                                About us
                    </a>
                 
                    
             
                </li>
                
                
                <li class="sidebar-menu-list__item ">
            
                    <a href="https://pentanik.com/blog" target="_blank" class="sidebar-menu-list__link">
                                Blog
                    </a>
                 
                    
             
                </li>
                
                          <li class="sidebar-menu-list__item ">
            
                    <a href="https://pentanik.com/contact-us" target="_blank" class="sidebar-menu-list__link">
                                Contact Us
                    </a>
                 
                    
             
                </li>
                
                
                
   
                
                
     
                
               


                @auth
                <li class="sidebar-menu-list__item has-dropdown">
                    <a href="javascript:void(0)" class="sidebar-menu-list__link">
                        <span class="icon"><i class="fa-solid fa-gears"></i></span>
                        <span class="text">Setting</span>
                    </a>
                    <div class="sidebar-submenu">
                        <ul class="sidebar-submenu-list">
                            <li class="sidebar-submenu-list__item">
                                <a href="{{ route('customer.profile') }}" class="sidebar-submenu-list__link">Profile
                                    Setting</a>
                            </li>
                            <li class="sidebar-submenu-list__item">
                                <a href="{{ route('customer.profile') }}" class="sidebar-submenu-list__link">Change
                                    Password </a>
                            </li>

                        </ul>
                    </div>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</div>
