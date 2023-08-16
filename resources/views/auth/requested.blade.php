<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYS-Our Services</title>
    <link rel="stylesheet" href="{{ asset('assets/css/r.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
      .btnn1{
        border: 2px solid rgb(25, 25, 185);
        color: rgb(23, 23, 126);
        padding: 5px;
        border-radius: 8px;
      }
      .btnn1:hover{
        background-color: white;
        color: blue;
      }
      footer{
        margin-top: 320px;
        text-align: center;
        width: 100%;
      }
      .icons{
        margin: auto;
        width: 80%;
        background-color: rgb(8, 42, 126);
        padding: 15px 0 0 0;
        border-start-start-radius: 10px;
        border-start-end-radius: 10px;
      }
      .it{
        color: white;
        font-size: 25px;
        padding: 10px 20px;
      }
      .it:hover{
        color: aliceblue;
        font-size: 26px;
      }
      .link{
        background-color: rgb(8, 41, 126);
        color: white;
        padding: 20px;
        width: 100%;
        margin-bottom: -20px;
      }
      .a{
        color: rgb(37, 94, 207);
      }
      .table{
        float: left;
      }
      .image{
        float: left;
        margin-left: 60%;
      }
    </style>
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
					<a class="a" >SERVICES</a>
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

  <div class="heading">    <h2>Requested Services</h2> </div>
<div class="co">
  <section class="section">
    <div class="table">
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
            {{-- <th class="tt">Order_id</th> --}}
            <th class="tt">Service</th>
            <th class="tt">Date</th>
            <th class="tt">Time</th>
            <th class="tt">Address</th>
            <th class="tt">Status</th>
            <th class="tt">Worker-ID</th>
            <th class="tt">Action</th>
            <th class="tt">Worker-Details</th>
        </tr>
      </thead>
      <tbody>
        @php
            $rowNumber = 1;
        @endphp
        @foreach($data as $datam)
        <tr>
            {{-- <td>{{$rowNumber++}}</td> --}}
            <td>{{$datam->service}}</td>
            <td>{{$datam->date_column}}</td>
            <td>{{$datam->time_column}}</td>
            <td>{{$datam->Address}}</td>
            <td class="status" style="color: {{ $datam->status === 'requested' ? 'blue' : ($datam->status === 'Assigned' ? 'green' : '') }}">{{ ucfirst($datam->status) }}</td>
            <td>{{ $datam->w_id ? $datam->w_id : 'Not Assigned' }}</td>
            <td>
                <a onclick="confirmation(event)" class="btnn" href="{{url('/cancel_order',$datam->id)}}">Cancel</a>
            </td>
            @if ($datam->w_id)
                <td>
                    <a class="btnn1" href="{{ url('/see-worker', $datam->w_id) }}">See
                </td>
            @endif

          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  </section>
  <div class="image">
    <img src="{{ asset('assets/images/undraw_wait_in_line_o2aq.svg')}}"  height="350px">
  </div>

</div>

  <footer>
    <div class="icons">
      <a href="#" class="it"><ion-icon name="logo-facebook"></ion-icon></a>
      <a href="#"class="it"><ion-icon name="logo-instagram" ></ion-icon></a>
      <a href="#" class="it"><ion-icon name="logo-twitter"></ion-icon></a>
      <a href="#" class="it"><ion-icon name="logo-youtube" ></ion-icon></a>
    </div>
    <div class="link">
      <p>Copyright © 2023 AYS | Powered by At Your Service</p>
    </div>
  </footer>

  <script>
    function confirmation(ev) {
      ev.preventDefault();
      var urlToRedirect = ev.currentTarget.getAttribute('href');  
      console.log(urlToRedirect); 
      swal({
          title: "Are you sure to cancel this Request",
          text: "You will not be able to revert this!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willCancel) => {
          if (willCancel) {             
              window.location.href = urlToRedirect;             
          }  

      });     
  }
</script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>