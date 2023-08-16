<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYS-Our Services</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="{{ asset('assets/css/rr.css') }}">
  </head>
<body>
  @include('sweetalert::alert')
  <header>
		<div class="navbar">
			<nav>
				<img src="{{ asset('assets/images/my_logo2-removebg-preview.png')}}" alt="logo" class="logo">
			<ul>
				<li><a href="{{ route('user.homepage') }}">HOME</a></li>
				<li><a href="#why">ABOUT US</a></li>
				<li class="dropdown">
					<a>SERVICES</a>
                    <div class="dropdown-content">
                        <a href="/services">All services</a>
                        <a href="/requested">Requested services</a>
                        <a href="/history">History</a>
                    </div>
				</li> 
				<li class="active"><a href="/contact">CONTACT US</a>
				</li>
       <li class="dropdown u" id="ctn1">
					<a>{{$user->username}}</a>
					<div class="dropdown-content">
              <a href="/logout">Logout</a>
					</div>
				</li> 
			</ul>
			</nav>
		</div>
	</header>
  
  <section class="swiper">
    <div class="heading">
      <h1 data-aos="fade" data-aos-duration="500">Contact Us</h1>
      <h4 data-aos="fade-up" data-aos-delay="100" data-aos-duration="500">We would love to hear from you</h4>
    </div>
  </section>

  <div class="content">
    <div class="map">
      <h2 data-aos="fade-left" data-aos-duration="1000">Our Location on Maps</h2>
      <hr>
      <iframe data-aos="zoom-in-up" data-aos-duration="1000" data-aos-delay="500" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58403.659585444155!2d90.32108080955516!3d23.81046437886341!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0c1c61277db%3A0xc7d18838730e2e59!2sMirpur%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1688219582401!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
      <div class="left-content">
        <h4>About our office</h4>
        <p data-aos="slide-up" data-aos-duration="500">Lorem ipsum dolor sit amet, consectetur adipisic elit. Sed voluptate nihil eumester consectetur similiqu consectetur.<br><br>Lorem ipsum dolor sit amet, consectetur adipisic elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti.</p><br>
        <p class="p" data-aos="slide-up" data-aos-duration="500">join our social media platform</p>
        <ul class="social-icons" data-aos="slide-up" data-aos-duration="1000" data-aos-delay="200">
          <li><a href="#"><i class="fa-brands fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
        </ul>
      </div>
  </div>

  <div class="content2">
    <div class="left">
      <div class="form-wrapper">
        <div class="contact-heading" data-aos="zoom-in-down" data-aos-duration="500">
            <h1>Send Us A Message <span>.</span></h1>
            <p class="text">reach us via : <a href="rubaiyaraktinraha@gmail.com">AYS@gmail.com</a></p>
        </div>
        <form action="{{url('/feedback')}}" method="post" class="contact-form" data-aos="slide-up" data-aos-duration="1000" data-aos-delay="500">
            @csrf
            <div class="input-wrap">
                <input class="contact-input" autocomplete="off" name="name" type="text" required>
                <label>Name</label>
                <i class="icon fa-solid fa-address-card"></i>
            </div>
            <div class="input-wrap">
                <input class="contact-input" autocomplete="off" name="email" type="email" required>
                <label>Email</label>
                <i class="icon fa-solid fa-envelope"></i>
            </div>
            <div class="input-wrap w-100">
                <input class="contact-input" autocomplete="off" type="text" name="subject" required>
                <label for="address">Subject</label>
                <i class="icon fa-solid fa-circle-info"></i>
            </div>
            <div class="input-wrap textarea w-100">
                <textarea class="contact-input" autocomplete="off" type="text" name="message" required></textarea>
                <label for="Message">Message</label>
                <i class="icon fa-solid fa-message"></i>
            </div>
            <div class="btn-wrap w-100" data-aos="fade" data-aos-delay="800" data-aos-duration="500">
                <input type="submit" value="Send Message" class="btn">
            </div>
            <br>
        </form>
    </div>
    </div>

    <div class="right" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500">
      <img src="/assets/images/undraw_new_message_re_fp03.svg" alt="">
    </div>
  </div>

  <footer>
    <div class="last">
    <div class="col">
        <img src="assets/images/my_logo2-removebg-preview.png" width="150px">
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
        <a href="#">-> About Us</a>
        <a href="#">-> Privacy Policy</a>
        <a href="#">-> Service Information</a>
        <a href="#">-> Terms & Conditions</a>
        <a href="#">-> Contact Us</a>
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js" integrity="sha512-fD9DI5bZwQxOi7MhYWnnNPlvXdp/2Pj3XSTRrFs5FQa4mizyGLnJcN6tuvUS6LbmgN1ut+XGSABKvjN0H6Aoow==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    const inputs = document.querySelectorAll(".contact-input");

    inputs.forEach((ipt) => {
        ipt.addEventListener("focus", () => {
            ipt.parentNode.classList.add("focus");
            ipt.parentNode.classList.add("not-empty");
        });
        ipt.addEventListener("blur", () => {
            if (ipt.value == ""){
                ipt.parentNode.classList.remove("not-empty");
            }
            ipt.parentNode.classList.remove("focus");
        });
    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>