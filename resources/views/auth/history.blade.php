<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AYS-Our Services</title>
    <link rel="stylesheet" href="{{ asset('assets/css/r.css') }}">
    <style>
          footer{
      margin-top: 330px;
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
      background-color: rgb(8, 42, 126);
      color: white;
      padding: 20px;
      width: 100%;
      margin-bottom: -20px;
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
				<li class="dropdown active">
					<a >SERVICES</a>
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

  <div class="heading">    <h2>Completed Services</h2> </div>

  <section class="section">
    <div class="table">
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
            <th class="tt">Order_id</th>
            <th class="tt">Service</th>
            <th class="tt">Date</th>
            <th class="tt">Time</th>
            <th class="tt">Address</th>
            <th class="tt">Details</th>
            <th class="tt">Status</th>

        </tr>
      </thead>
      <tbody>
        
        @foreach($data as $datam)
        <tr>
            @php
            $rowNumber = 1;
            @endphp
            <td>{{$rowNumber++}}</td>
            <td>{{$datam->service}}</td>
            <td>{{$datam->date_column}}</td>
            <td>{{$datam->time_column}}</td>
            <td>{{$datam->Address}}</td>
            <td class="description-column">{{$datam->details}}</td>
            <td class="status" style="color: blue">{{ ucfirst($datam->status) }}</td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  </section>
  <div class="image">
    <img src="{{ asset('assets/images/undraw_to_do_list_re_9nt7.svg')}}"  height="350px">
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
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  
</body>
</html>