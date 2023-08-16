<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{ asset('assets/css/c.css') }}">
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form"><br><br><br><br><br>
            <img class="tt" src="{{ asset('assets/img/check-mark.svg') }}" alt="">
            <h3 class="title">Your Request has been Received</h3>
            <p style="font-size: 1.2rem; margin-bottom: 10px;">We'll review your request and get to in no time</p>
            <p style="color: red;">* plz pay after completion of service !</p>
            <br><br><br><br><br><br>
             
          </form>
          <form action="#" class="sign-up-form">
            <h2 class="title">Your Booking</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" value="{{$order->name}}" readonly />
            </div>
            <div class="input-field">
              <i class="fas fa-tools"></i>
              <input type="service" placeholder="service" value="{{$order->service}}" readonly/>
            </div>
            <div class="input-field">
              <i class="fas fa-map-marker-alt"></i>
              <input type="address" placeholder="address" value="{{$order->Address}}" readonly />
            </div>
            <div class="input-field">
              <i class="far fa-calendar-alt"></i>
              <input type="date" placeholder="date" value="{{$order->date_column}}" readonly/>
            </div>
            <div class="input-field">
              <i class="far fa-clock"></i>
              <input type="time" placeholder="time" value="{{$order->time_column}}" readonly/>
            </div>
            <div class="input-field">
              <i class="fas fa-inbox"></i>
              <input type="details" placeholder="details" value="{{$order->details}}" readonly/>
            </div>
            <input type="button" class="btn" value="Cancel Order" onclick="cancelOrder({{ $order->id }})" />

            <input type="button" class="btn1" value="Home page" onclick="goToHomePage()" />

             <div class="social-media">
              <!-- <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a> -->
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content"><br><br>
            <h3>Want to Review your Request???</h3><br>
            <button class="btn transparent" id="sign-up-btn">
              Review
            </button>
          </div>
          <img src="{{ asset('assets/img/undraw_season_change_f99v.svg') }}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <br><br><h3>We Thank You for Choosing Us</h3>
            <p>
              
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Go back
            </button>
          </div>
          <img src="{{ asset('assets/img/ss-removebg-preview.png') }}" class="image" alt="" />
        </div>
      </div>
    </div>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script> -->
    <script>
        const sign_in_btn = document.querySelector("#sign-in-btn");
        const sign_up_btn = document.querySelector("#sign-up-btn");
        const container = document.querySelector(".container");

        sign_up_btn.addEventListener("click", () => {
        container.classList.add("sign-up-mode");
        });

        sign_in_btn.addEventListener("click", () => {
        container.classList.remove("sign-up-mode");
        });

    </script>

    <script>
       function cancelOrder(orderId) {
            if (confirm('Are You Sure You Want To Cancel The Order?')) {
                window.location.href = "/cancel_order/" + orderId;
            }
        }
      
        function goToHomePage() {
          window.location.href = "{{ route('user.homepage') }}";
        }
      </script>
  </body>
</html>

