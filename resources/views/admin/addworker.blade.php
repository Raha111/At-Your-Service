<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>AYS Admin</title>
    <!-- plugins:css -->
    @include ('admin.css')
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->

    <style>
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .div_center h2{
            font-size: 2rem;
            font-weight: 400;
            color: white;
            margin: 30px;
        }
        .adds{
            border-radius: 20px;
            margin: 10px;
            padding: 10px 20px;
            width: 30%;
            border: none;
        }
        .adds1{
            padding: 10px;
        }
        .btn1{
            border-radius: 20px;
            margin: 30px;
            padding: 10px 20px;
            width: 20%;
            background-color: rgb(7, 7, 7);
            border: 1px solid white;
            color: white;
        }
        .ll{
            margin-top: 10px;
            margin-left: -20%;
        }
        .btn1:hover{
            background-color: rgb(204, 224, 230);
            color: black;
        }
         .ss{
            color: white;
            background-color: black; 
        } 
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include ('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('message')}}
                    </div>

                @endif
                <div class="div_center">
                    <h2>Add Service</h2>

                    <form action="{{url('/Add_Worker_Here')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="text" class="adds" name="name" placeholder="Worker name" required><br>
                        <input type="text" class="adds" name="age" placeholder="Age" required><br>
                        <select name="service" class="adds" required>
                            <option value="" selected="">Add Service Here</option>
                            @foreach($service as $service)
                                <option class="ss" value="{{$service->service_name}}">{{$service->service_name}}</option>
                            @endforeach
                        </select>
                        <br>
                        <input type="text" class="adds" name="experience" placeholder="Experience" required><br>
                        <label class="ll" for="file">Add image here</label><br>
                        <input type="file" class="adds1" name="image" required><br>
                        <input type="submit" class="btn1" name="submit" value="Add Worker">
                    </form>
                </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include ('admin.js')
  </body>
</html>