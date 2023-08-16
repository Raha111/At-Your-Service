<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/css/bootstrap.min.css">
        
        <!-- Bootstrap JavaScript (optional) -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/js/bootstrap.bundle.min.js"></script>
    </head>


<body>
    @include('sweetalert::alert')
	<header>
		<div class="navbar">
			<nav>
				<img src="{{ asset('assets/images/my_logo2-removebg-preview.png')}}" alt="logo" class="logo">
			<ul>
				<li class="active"><a href="#">HOME</a></li>
				<li><a href="#why">ABOUT US</a></li>
				<li class="dropdown">
					<a>SERVICES</a>
                    <div class="dropdown-content">
                        <a href="/services">All services</a>
                        <a href="/requested">Requested services</a>
                        <a href="/history">History</a>
                    </div>
				</li> 
				<li><a href="/contact">CONTACT US</a>
				</li>
				{{-- <li class="ctn">{{$user->username}}</li> --}}
                <li class="dropdown" id="ctn1">
					<a>{{$user->username}}</a>
					<div class="dropdown-content u">
                    <a href="/logout">Logout</a>
					</div>
				</li> 
			</ul>
			</nav>
		</div>
	</header>

	<!-- base content -->
    @if(session()->has('message'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{session()->get('message')}}
    </div>
    @endif
	<section id="base1">
		<div class="base">
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
            @endif
			<div class="detel">
                <h1><pre>One-Stop for all your
                     <span>Home</span> services </pre></h1><br>
              <h3>Order<span> any</span> Service, <span>any</span> time</h3>  
              <br>
              <br><br>
              <a href="/services" class="req">Request Service</a>
            </div>  
              <div class="wel" data-aos="zoom-in-up">
                <img src="{{ asset('assets/images/welcome.png') }}" alt="">
              </div>
		</div>
	</section>

	<!-- popular services section -->
	 <section id="popular">
        <h2>Popular Services</h2>
        <div class="pbox" data-aos="slide-up" data-aos-duration="1500" data-aos-delay="100">
            <div class="p1" >
                <img src="https://kitpro.site/hocare/wp-content/uploads/sites/92/2022/06/ac.png">
                <div class="desc">
                    <h4>AC Service</h4>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <h4>$500</h4>
                </div>
            </div>

            <div class="p1">
                <img src="https://kitpro.site/hocare/wp-content/uploads/sites/92/2022/06/plumbing.png">
                <div class="desc">
                    <h4>Plumber</h4>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <h4>$400</h4>
                </div>
            </div>

            <div class="p1">
                <img src="https://kitpro.site/hocare/wp-content/uploads/sites/92/2022/06/electricity.png">
                <div class="desc">
                    <h4>Electrician</h4>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <h4>$600</h4>
                </div>
            </div>

            <div class="p1">
                <img src="https://kitpro.site/hocare/wp-content/uploads/sites/92/2022/06/roof.png">
                <div class="desc">
                    <h4>Home Repair</h4>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <h4>$1500</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- why us section -->
    <section class="why" id="why">
        <h2>Why Choose Us</h2>
        <div class="mainbody">
            <div class="grids" data-aos="zoom-in-up" data-aos-duration="1500" data-aos-delay="100">
                <div class="b1">
                    <img src="https://cdn-marketplacexyz.s3.ap-south-1.amazonaws.com/sheba_xyz/images/png/usp_mask.png" alt="">
                    <h3>Ensuring mask</h3>
                </div>
                <div class="b1">
                    <img src="https://cdn-marketplacexyz.s3.ap-south-1.amazonaws.com/sheba_xyz/images/png/usp_24_7.png" alt="">
                    <h3>24/7 services</h3>
                </div>
                <div class="b1">
                    <img src="https://cdn-marketplacexyz.s3.ap-south-1.amazonaws.com/sheba_xyz/images/png/usp_sanitized.png" alt="">
                    <h3>Quality Service</h3>
                </div>
                <div class="b1">
                    <img src="https://cdn-marketplacexyz.s3.ap-south-1.amazonaws.com/sheba_xyz/images/png/usp_gloves.png" alt="">
                    <h3>Ensuring gloves</h3>
                </div>
            </div>
            <div data-aos="zoom-in-down" data-aos-duration="2000" data-aos-delay="300">
            <img src="https://s3.ap-south-1.amazonaws.com/cdn-marketplacexyz/sheba_xyz/images/webp/why-choose-us.webp" class="tt">
            </div>
        </div>
    </section>

	 <!-- description section -->
	 <section class="description">
        <div class="a">
            <div class="d1" data-aos="slide-up" data-aos-duration="1000" data-aos-delay="100">
                <h3>15,000 + </h3>
                <h4>Service Providers</h4>
            </div>
            <div class="d2" data-aos="flip-down" data-aos-duration="1000" data-aos-delay="300">
                <h3>2,00,000 + </h3>
                <h4>Order Served</h4>
            </div>
            <div class="d3" data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="500">
                <h3>1,00,000 + </h3>
                <h4>5 Star Received </h4>
            </div>
        </div>
    </section>

    <!-- how it works -->

    <section id="hiw" >
        <h3>How it Works</h3>
        <img src="https://static.wixstatic.com/media/dd7758_d8ba5a0df7df4b37a1dc5a85dbdb64ba~mv2.png/v1/fill/w_1918,h_332,al_c,q_90,enc_auto/dd_PNG.png" data-aos="zoom-in" data-aos-duration="2000" data-aos-delay="300">
    </section>

    <footer>
        <div class="last">
        <div class="col">
            <img src="{{ asset('assets/images/my_logo2-removebg-preview.png')}}" width="150px">
            <p>Lorem ipsum dolor sit amet consectetur</p>
            <div class="follow">
                <h4>Follow Us</h4>
                <div class="icon" data-aos="flip-down" data-aos-duration="2000" data-aos-delay="300">
                    <a href="#" class="it"><ion-icon name="logo-facebook"></ion-icon></a>
                    <a href="#"class="it"><ion-icon name="logo-instagram" ></ion-icon></a>
                    <a href="#" class="it"><ion-icon name="logo-twitter"></ion-icon></a>
                    <a href="#" class="it"><ion-icon name="logo-youtube" ></ion-icon></a>
                </div>
            </div>
        </div>

        <div class="col" data-aos="zoom-in-up" data-aos-duration="2000" data-aos-delay="500">
            <h4>Explore</h4>
            <a href="#"><i class="fa-solid fa-arrow-right"></i> About Us</a>
            <a href="#"><i class="fa-solid fa-arrow-right"></i> Privacy Policy</a>
            <a href="#"><i class="fa-solid fa-arrow-right"></i> Service Information</a>
            <a href="#"><i class="fa-solid fa-arrow-right"></i> Terms & Conditions</a>
            <a href="#"><i class="fa-solid fa-arrow-right"></i> Contact Us</a>
        </div>

        <div class="col" data-aos="zoom-in-down" data-aos-duration="2000" data-aos-delay="700">
            <h4>Contact</h4>
            <pre><ion-icon name="call-outline" class="i"></ion-icon>   +659826125</pre>
            <pre><ion-icon name="mail-outline" class="i"></ion-icon>   ayservice@gmail.com</pre>
            <pre><ion-icon name="location-outline" class="i"></ion-icon>   28 Benin, Bashundhara,
      Dhaka,Bangladesh</pre>
        </div>
    </div>
        <div class="copy">
            <p>Copyright © 2023 AYS | Powered by At Your Service</p>
        </div>
    </footer>

    <script>
        document.addEventListener('scroll', () => {
            const navbar = document.querySelector('nav');
            if (window.scrollY > 0) {
                navbar.style.backgroundColor = 'white';
                navbar.style.opacity = '0.98';
            } else {
                navbar.style.backgroundColor = 'rgb(231, 246, 246)';
                navbar.style.opacity = '1';
            }
        });
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>
</html>