<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYS-Our Services</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/service.css') }}">
  </head>
<body>

  <header>
		<div class="navbar">
			<nav>
				<img src="{{ asset('assets/images/my_logo2-removebg-preview.png')}}" alt="logo" class="logo">
			<ul>
				<li><a href="{{ route('user.homepage') }}">HOME</a></li>
				<li><a href="#why">ABOUT US</a></li>
				<li class="dropdown">
					<a style="color: rgb(37, 73, 220)">SERVICES</a>
                    <div class="dropdown-content">
                        <a href="/services">All services</a>
                        <a href="/requested">Requested services</a>
                        <a href="/history">History</a>
                    </div>
				</li>   
				<li><a href="/contact">CONTACT US</a>
				</li>
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
  
  <section class="swiper mySwiper">
    <div class="swiper-wrapper">
      @foreach($data as $data)
      <div class="card swiper-slide">
        <div class="card_image">
          <img src="/service/{{$data->image}}" alt="">
        </div>
        <div class="card_content">
          <span class="card_title">{{$data->service_name}}</span>
          <p class="card_text">{{$data->description}}</p>
          <span class="card_name">Service Charge : {{$data->service_charge}} Tk</span>
          <a class="card_btn" href="{{url('/request',$data->id)}}">Request</a>
        </div>
      </div>
      @endforeach

    </div>
    <br>
    <div class="swiper-pagination"></div>

  </section>
 

  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      loop: true,
      autoplay: {
        delay: 1500,
        disableOnInteraction: false,
      },
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 5,
        stretch: 0,
        depth: 400,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
  
</body>
</html>