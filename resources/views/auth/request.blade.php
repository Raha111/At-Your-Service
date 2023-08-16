<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/stylecontact.css') }}">
    <title>Request Service</title>
</head>
<body>
    <header>
        <div class="container">
            <ul>
                <li>
                    <a href="#" class="logo">
                        <div class="images">
                            <img src="assets/images/my_logo2-removebg-preview.png" alt="">
                        </div>
                        <h2>AYS<span>.</span></h2>
                    </a>
                </li>
                <li>
                    <a href="{{ route('user.homepage') }}" class="nav-link">HOME</a>
                </li>
                <li>
                    <a href="/services" class="nav-link">SERVICES</a>
                </li>
                <li>
                    <span class="nav-link theme-toggle">
                        <i class="fa-solid fa-sun"></i>
                        <i class="fa-solid fa-moon"></i>
                    </span>
                </li>
            </ul>
        </div>
    </header>
    <main>
        <section class="contact">
            <div class="container">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('message')}}
                    </div>

                    @endif
                <div class="left">
                    <div class="form-wrapper">
                        <div class="contact-heading">
                            <h1>Book Your Service <span>.</span></h1>
                            <p class="text">reach us via : <a href="rubaiyaraktinraha@gmail.com">AYS@gmail.com</a></p>
                        </div>
                        <form action="{{url('/book_service')}}" method="post" class="contact-form">
                            @csrf
                            <div class="input-wrap">
                                <input class="contact-input" autocomplete="off" type="text" id="service" name="service" required value="{{$data->service_name}}" readonly>
                                  <i class="icon fa-solid fa-dollar"></i>
                            </div>
                            <div class="input-wrap">
                                <input class="contact-input" autocomplete="off" type="text" id="charge" name="charge" required value="{{$data->service_charge}} Tk" readonly>
                                  <i class="icon fa-solid fa-screwdriver-wrench"></i>
                            </div>
                            <div class="input-wrap">
                                <input class="contact-input" autocomplete="off" name="Name" type="text" required>
                                <label>Name</label>
                                <i class="icon fa-solid fa-address-card"></i>
                            </div>
                            {{-- <div class="input-wrap">
                                <input class="contact-input" autocomplete="off" name="Email" type="email" required>
                                <label>Email</label>
                                <i class="icon fa-solid fa-envelope"></i>
                            </div> --}}
                            <div class="input-wrap">
                                <input class="contact-input" autocomplete="off" name="Phone" type="text" required>
                                <label>Phone</label>
                                <i class="icon fa-solid fa-phone"></i>
                            </div>
                            <div class="input-wrap">
                                <input class="contact-input" autocomplete="off" type="text" id="date" name="date" onfocus="(this.type='date')" onblur="(this.type='text')" required>
                                <label for="date">Date</label>
                                <i class="icon fa-solid fa-calendar-days"></i>
                            </div>
                            <div class="input-wrap">
                                <input class="contact-input" autocomplete="off" type="text" id="time" name="time" onfocus="(this.type='time')" onblur="(this.type='text')" required>
                                <label for="time">Time</label>
                                <i class="icon fa-solid fa-clock"></i>
                            </div>
                            <div class="input-wrap w-100">
                                <input class="contact-input" autocomplete="off" type="text" name="address" required>
                                <label for="address">Address</label>
                                <i class="icon fa-solid fa-location-dot"></i>
                            </div>
                            <div class="input-wrap textarea w-100">
                                <textarea class="contact-input" autocomplete="off" type="text" name="details" required></textarea>
                                <label for="details">Details</label>
                                <i class="icon fa-solid fa-inbox"></i>
                            </div>
                            <div class="btn-wrap w-100">
                                <input type="submit" value="REQUEST SERVICE" class="btn">
                            </div>

                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="image-wrapper">
                        <img src="{{ asset('assets/images/bbb-removebg-preview.png') }}"class="img">
                        
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
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

</body>
</html>