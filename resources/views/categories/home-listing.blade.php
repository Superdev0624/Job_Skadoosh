<!-- Hero Area Start-->
<link rel="stylesheet" href="{{ asset('assets/css/home-listing.css') }}">
<section class="main-hero">                                                                                                                          
    <div class="container main-bg">                                                                                                                  
        <!-- Section Tittle -->                                                                                                                      
        <div class="row">                                                                                                                            
        <div id="" class="col-lg-6 bg-img-header"> </div>                                                                                            
            <div class="col-lg-8 col-xl-6 col-md-10">                                                                                                
                <div class="wrap-inner">                                                                                                             
                    <span class="job-m">                                                                                                             
                        <a href="#">{{ $newJobsToday }} new jobs</a> added today                                                                     
                    </span>                                                                                                                          
                    <h1>Land Your Dream Job in  Animation, VFX, or Gaming  Industry</h1>                                                             
                    <p>Skadoosh.gg is a job platform to land your next dream job or kick start your new career in animation, vfx, or the gaming indus
try.</p>                                                                                                                                             
                    <!-- <form class="subscribe-form" action="{{ route('subscribe') }}" method="POST">                                         
                    <form class="subscribe-form" action="#" method="POST">                                                                           
                        @csrf                                                                                                                        
                        <div class="row align-items-center mb-2 subscribe-form-inner">                                                               
                            <div>Receive a</div>                                                                                                     
                            <div class="mr-2 ml-2">                                                                                                  
                                <select class="form-control form-control-sm" name="frequency" id="frequency">                                        
                                    <option value="1">Daily</option>                                                                                 
                                    <option value="7">Weekly</option>                                                                                
                                </select>                                                                                                            
                            </div>                                                                                                                   
                            <div>emails of Job Finder</div>                                                                                          
                        </div>                                                                                                                       
                        <div class="search">                                                                                                         
                            <input  class="search-txt" type="text" name="email" placeholder="Enter Your Email Here" required>                        
                            <button type="submit" class="btn search-btn">                                                                            
                                Find a Job                                                                                                           
                            </button>                                                                                                                
                        </div>                                                                                                                       
                    </form>-->
                    <div class="find_type">
                        <button type="button" href="{{ url('') }}" class="btn work-btn">                                                                            
                            Find Work                                                                                                           
                        </button>
                        <button type="button" href="{{ url('') }}" class="btn talent-btn">                                                                            
                            Find Talent                                                                                                           
                        </button>
                    </div> 
                    <div class="category_intro"></div>
                </div>                                                                                                                               
            </div>                                                                                                                                   

        </div>                                                                                                                                       
    </div>                                                                                                                                           
</section> 
<!-- Hero Area End-->
