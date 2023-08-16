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
        }
        .div_center h2{
            font-size: 2rem;
            font-weight: 400;
            color: white;
            margin: 10px;
        }
        .adds{
            border-radius: 20px;
            margin: 10px;
            padding: 10px 20px;
            width: 30%;
            border: none;
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
        .content-wrapper{
            background-color: rgb(22, 23, 23);
        }
        .btn1:hover{
            background-color: rgb(204, 224, 230);
            color: black;
        }
        .table {
            width: 50%;
            margin: auto;
            margin-top: 30px;
            border-collapse: collapse;
            text-align: center;
        }

        .table th,
        .table td {
            padding: 15px 50px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .tt {
            background-color: #f2f2f2;
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
            @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{session()->get('message')}}
            </div>
            @endif
            <div class="content-wrapper">
                <div class="div_center">
                    <h2>Services</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="tt">Service</th>
                                <th class="tt">Service Charge</th>
                                <th class="tt">Edit</th>
                                <th class="tt">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $data)
                            <tr>
                                <td>{{$data->service_name}}</td>
                                <td>{{$data->service_charge}} Tk</td>
                                <td>
                                    <a class="btn btn-outline-success" href="{{url('/edit_service',$data->id)}}">Edit</a>
                                </td>
                                <td>
                                    <a onclick="return confirm('Are You Sure You Want To Delete This Service?')" class="btn btn-danger" href="{{url('/delete_service',$data->id)}}">Delete</a>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include ('admin.js')
  </body>
</html>