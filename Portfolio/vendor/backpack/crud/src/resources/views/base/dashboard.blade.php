@extends(backpack_view('blank'))


@section('content')

        <section id="landing-page" class="landing-page" style="background-image:url({{url('img/back5.jpg')}})">
        <div class="container">
          <div class="main-message">
            <h2>Khadija Amardoul</h2>
            <h3>Web Developer</h3>
            <p>Html . CSS . JavaScript . PHP . Laravel</p>
            <div class="intro-btn">
              <div class="cta">
                <a href="#contact" class="btn">Get In Touch</a>
              </div>
              <div class="cta">
                <a href="#projects" class="btn">My Projects</a>
              </div>
            </div>
            <div>
              <a href="#about" class="scroll-down">
                <i class="fa fa-chevron-down" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
      </section>

        
      <div id=about class="about-section" >
      <div class="about-image">
        <img src="{{asset('img/aboutvec3.png')}}" alt="">
      </div>
        <div class="inner-container">
            <h1>About me</h1>
            <p class="text">
            Hi! I am Khadija Amardoul, a web designer/developer focused on crafting great web experiences. Designing and Coding have been my passion since the days I started working with computers but I found myself into web design/development since i joined Youcode. I enjoy creating beautifully designed, intuitive and functional websites.
            </p>
           
                @foreach ($skill as $skl)
                
                    <div class="skills__data">
                        <div class="skills__names">
                           
                            <span class="skills__name">{{$skl->skill_name}}</span>
                        </div>
                        <div class="skills__bar " style="width: {{$skl->percentage.'%'}}; ">

                        </div>
                        <div>
                            <span class="skills__percentage">{{$skl->percentage.'%'}}</span>
                        </div>
                    </div>
                    @endforeach
            <!-- </div> -->

            <a href="{{ url('/contact') }}" class="btn tm-btn-secondary">Contact me</a>
        </div>
    </div>
     <!-- ----------------Services-section---------------------- -->
     <div class="services-section" style="background-image:url({{url('img/10.jpg')}})">
      <div class="inner-width">
        <h1 class="section-title">Our Services</h1>
        <div class="border"></div>
        <div class="services-container">

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-paint-brush"></i>
            </div>
            <div class="service-title">Web Designs</div>
            <div class="service-desc">
            We offer the full spectrum of services to help your get the result you want.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-code"></i>
            </div>
            <div class="service-title">Web Development</div>
            <div class="service-desc">
            We offer the full spectrum of services to help your get the result you want.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-brush"></i>
            </div>
            <div class="service-title">Responsive Designs</div>
            <div class="service-desc">
            We offer the full spectrum of services to help your get the result you want.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-object-ungroup"></i>
            </div>
            <div class="service-title">Edit Sections</div>
            <div class="service-desc">
            We offer the full spectrum of services to help your get the result you want.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-database"></i>
            </div>
            <div class="service-title">Databases</div>
            <div class="service-desc">
            We offer the full spectrum of services to help your get the result you want.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
            <i class="fab fa-wordpress"></i>
            </div>
            <div class="service-title">Wordpress</div>
            <div class="service-desc">
            We offer the full spectrum of services to help your get the result you want.
            </div>
          </div>
        </div>
      </div>
    </div>

        <!--===== SKILLS =====-->
       
        <!--===== WORK =====-->
        <section class="project-section">
        <div class="project-container">
      
        <h2>RECENTLY DONE PROJECT</h2>
        <p>Some of my awesomen stuffs here</p>
      
        <main id=projects class=main1>
        @foreach ($work as $wrk)
        <div class="singleBlog">
          <img src="{{Storage::disk('local')->url($wrk->image)}}" alt="">
          <div class="blogContent">
          <a href=" {{$wrk->url_link}} "   target="_blank"><p class=para>{{$wrk->work_name}} </p>
            </a>
            
          </div>
        </div>
        @endforeach
        </main>
</div>


    <footer>
        <div class="footer-nav">
          <a href="#" class="footer-nav-link">Home</a>
          <a href="#about" class="footer-nav-link">About</a>
          <a href="#services" class="footer-nav-link">Services</a>
          <a href="projects" class="footer-nav-link">Projects</a>
          <a href="#contact" class="footer-nav-link">Contact</a>
        </div>
        <div class="footer-coded-by">
          <p>
            <i class="fas fa-code"></i> with 🤍 by Khadija amardoul &copy; 2020
          </p>
          <p>Built with pure HTML, CSS and JavaScript</p>
        </div>
        <div class="footer-social">
          <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="https://github.com/douja-amr" target="_blank"><i class="fab fa-github"></i></a>
        </div>
      </footer>
@endsection