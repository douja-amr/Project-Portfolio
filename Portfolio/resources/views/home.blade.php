@extends(backpack_view('blank'))


@section('content')
<!-- <div class="container">
    <main class="l-main"> -->
        <!--===== HOME =====-->
        <!-- <section class="home bd-grid" id="home">
            <div class="home__data">
                <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Imad</span><br> Web Developer</h1>

                <a href="{{ url('/contact') }}" class="button">Contact</a>
            </div>

            <div class="home__social">
                <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                <a href="" class="home__social-icon"><i class='bx bxl-behance' ></i></a>
                <a href="" class="home__social-icon"><i class='bx bxl-github' ></i></a>
            </div>

            <div class="home__img">
                <img src="{{asset('img/profil4.png')}}" alt="">
            </div>
        </section> -->
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
            <h1>About Us</h1>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus velit ducimus, enim inventore earum, eligendi nostrum pariatur necessitatibus eius dicta a voluptates sit deleniti autem error eos totam nisi neque voluptates sit deleniti autem error eos totam nisi neque.
            </p>
            <!-- <div class="skills">
                <span>Web Design</span>
                <span>Photoshop & Illustrator</span>
                <span>Coding</span> -->
                @foreach ($skill as $skl)
                
                    <div class="skills__data">
                        <div class="skills__names">
                            <!-- <i class='bx bxs-paint skills__icon'></i> -->
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

            <a href="#tm-section-3" class="btn tm-btn-secondary">Continue...</a>
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
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-code"></i>
            </div>
            <div class="service-title">Web Development</div>
            <div class="service-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-brush"></i>
            </div>
            <div class="service-title">Responsive Designs</div>
            <div class="service-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-object-ungroup"></i>
            </div>
            <div class="service-title">Edit Sections</div>
            <div class="service-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fas fa-database"></i>
            </div>
            <div class="service-title">Databases</div>
            <div class="service-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
            </div>
          </div>

          <div class="service-box">
            <div class="service-icon">
              <i class="fab fa-android"></i>
            </div>
            <div class="service-title">Android</div>
            <div class="service-desc">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.
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
          <a href=" {{'https://'.$wrk->url_link}} "   target="_blank"><p class=para>{{$wrk->work_name}} </p>
            </a>
            
          </div>
        </div>
        @endforeach
        </main>
</div>
        
    
        
            <!-- <div class="work__container bd-grid"> 
               @foreach ($work as $wrk)
                <div class="work__img" >
                  <a href=" {{'https://'.$wrk->url_link}} " target="_blank">
                  <p class="bx bx-link" style="background-color: #12345678;">{{$wrk->work_name}}</p>
                    <img src="{{Storage::disk('local')->url($wrk->image)}}" alt="">
                  </a>
                </div>
                @endforeach 
                  <div class="work__img">
                    <img src="{{asset('img/work2.jpg')}}" alt="">
                </div>
                <div class="work__img">
                    <img src="{{asset('img/work3.jpg')}}" alt="">
                </div>
                <div class="work__img">
                    <img src="{{asset('img/work4.jpg')}}" alt="">
                </div> 
                <div class="work__img">
                    <img src="{{asset('img/work5.jpg')}}" alt="">
                </div>
                <div class="work__img">
                    <img src="{{asset('img/work6.jpg')}}" alt="">
                </div>   -->
            
        <!--===== CONTACT =====-->

        </main>

        </div>

    <!--===== FOOTER =====-->
    <!-- <footer class="footer">
        <p class="footer__title">Imad</p>
        <div class="footer__social">
            <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
            <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            @if (config('backpack.base.show_powered_by') || config('backpack.base.developer_link'))
                <div class="text-muted ml-auto mr-auto">
                  @if (config('backpack.base.developer_link') && config('backpack.base.developer_name'))
                  {{ trans('backpack::base.handcrafted_by') }} <a target="_blank" rel="noopener" href="{{ config('backpack.base.developer_link') }}">{{ config('backpack.base.developer_name') }}</a>.
                  @endif
                  @if (config('backpack.base.show_powered_by'))
                  {{ trans('backpack::base.powered_by') }} <a target="_blank" rel="noopener" href="http://backpackforlaravel.com?ref=panel_footer_link">Backpack for Laravel</a>.
                  @endif
                </div>
            @endif
        </div>
        <p>&#169; 2020 copyright all right reserved</p>
    </footer> -->
    <footer>
        <div class="footer-nav">
          <a href="#landing-page" class="footer-nav-link">Home</a>
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
          <a href="#" target="_blank"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank"><i class="fab fa-dev"></i></a>
          <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
        </div>
      </footer>
@endsection