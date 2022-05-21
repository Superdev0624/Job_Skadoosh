<script src="{{ URL::asset('/assets/js/frontend.header.js') }}"></script>
<header>
    <!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
              <div class="header-block-area">
                <!-- Site logo Start -->
                <div class="logo">  <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/skadoosh.png') }}" alt="skadoosh" width="300"></a> </div>
                <!-- Site logo end -->

                <!-- Main menu start -->
                <nav class="mainmenu">
                  <ul id="navigation">
                    <li><a href="{{ url('') }}" class="nav_login_credential">Find Talent</a></li>
                    <li><a href="{{ url('') }}" class="nav_login_credential">Find Work</a></li>
                  </ul>
                </nav>
                <!-- Main menu end --> 
                <div class="header-right">
                    <div class="header-search-btn"><input type="text" class="form-control" placeholder="Search.."></div>      

                    <div class="cities-dropdown">
                        <button class="btn btn-locations dropdown-toggle"><i class="fa fa-globe"></i> Cities </button>
                        <div class="cities-list">
                          <ul>
                            @foreach($cities as $city)                                         
                                <li><a class="text-black text-left text-nowrap text-capitalize" href="{{ route('show.jobs.by.city', ['city'=> \Str::of($city)->kebab()]) }}">{{ $city }}</a></li>               
                            @endforeach 
                         </ul>
                       </div>     
                    </div>
                </div>

                <div class="mobile-menu-wrapper">
                    <input type="checkbox" class="menu-check">
                    <div class="menu-icon"><div></div></div>
                    <nav class="menu">
                        <div>
                            <div class="nav-mobile"></div>
                        </div>
                    </nav> 
                </div>  

               </div>  
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
