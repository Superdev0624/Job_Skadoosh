<script src="{{ URL::asset('/assets/js/frontend.header.js') }}"></script>
<header>
    <!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo mt-2">
                            <a href="{{ url('/') }}"><img src="{{ asset('assets/img/logo/skadoosh.png') }}" alt="skadoosh" width="300"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9 d-flex justify-content-between mt-3">
                            <div class="f-left nav_visible">
                                <a href="{{ url('') }}" class="nav_login_credential">Find Talent</a>
                                <a href="{{ url('') }}" class="nav_login_credential">Find Work</a>
                            </div>
    
                            <div class="f-right">
                                <a href="{{ url('/nx/login') }}" class="nav_login_credential">Log In</a>
                                <a href="{{ url('/nx/signup') }}" class="nav_signup_credential">Sign Up</a>
                                <!-- <a href="{{ url('/') }}" class="btn nav_top_btn_second"><i class="fa fa-globe"></i> Region Website <i class="fa fa-caret-down"></i></a> -->
                                <!-- <div class="header-btn d-none f-right d-lg-block">                                 
                                    <div class="popover__wrapper mt-0">                                            
                                        <a href="#">                                                               
                                            <h2 class="btn btn-locations mb-0"><i class="fa fa-globe"></i> Cities <i class="fa fa-caret-down"></i></h2>                                                                        
                                        </a>                                                                       
                                        <div class="popover__content locations">                                   
                                            <div class="w-100">                                                    
                                                @foreach($cities as $city)                                         
                                                    <p><a class="text-black text-left text-nowrap text-capitalize" href="{{ route('show.jobs.by.city', ['city'=> \Str::of($city)->kebab()]) }}">{{ $city }}</a></p>               
                                                @endforeach                                                        
                                            </div>                                                                 
                                        </div>                                                                     
                                    </div>                                                                         
                                </div> -->
                            </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
