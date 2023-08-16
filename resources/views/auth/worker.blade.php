<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AYS-Worker</title>
    <link rel="stylesheet" href="{{ asset('assets/css/r.css') }}">
    <style>
        .section{
            margin-top: 200px;
        }
        .p1{
            width: 18%;
            min-width: 220px;
            padding: 30px 12px;
            border: 1px solid #cce7d0;
            border-radius: 35px;
            cursor: pointer;
            background-color: #efefefe2;
            box-shadow: 20px 20px 30px rgba(0, 0, 0, 0.02);
            margin: 15px 0px;
            transition: width 0.5s ease;
            text-align: center;
        }

        .p1:hover{
            box-shadow: 20px 20px 30px rgba(4, 4, 73, 0.07);
            width: 19%;
        }
        .p1 img{
            margin-top: 5px;
            width: 60%;
            border-radius: 40%;
        }
        .p1 h1{
            margin: 10px;
            padding: 5px;
            font-weight: 600;
            font-size: 24px;
        }
        .p1 h3{
            padding: 5px;
            margin: 5px;
            font-family: sans-serif;
            font-size: 20px;
        }
        .exp{
            color: rgb(51, 53, 153);
        }
        .image{
            margin-top: -350px;
            margin-right: 50px;
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
    <section class="section">
        <div class="p1">
            <img src="/worker/{{$worker->image}}">
            <div class="desc">
                <h1>Name: {{$worker->w_name}}</h1>
                <h3>Age: {{$worker->w_age}}</h3>
                <h3>Service: {{$worker->service}}</h3>
                <h3 class="exp">Experience: {{$worker->experience}}</h3>
            </div>
        </div>
      
      </section>
      <div class="image">
        <img src="{{ asset('assets/images/undraw_coffee_break_h3uu.svg')}}"  height="350px">
      </div>
</body>
</html>