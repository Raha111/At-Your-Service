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
            padding: 15px 30px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        .tt {
            background-color: #f2f2f2;
        }
        .search{
            margin: 30px;
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
                    <h2>Workers</h2>
                    <div class="search">
                        <form action="{{url('search-worker')}}" method="get">
                            <input type="text" name="search" placeholder="Search">
                            <input type="submit" value="Search" class="btn btn-outline-primary">
                        </form>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="tt">Worker ID</th>
                                <th class="tt">Worker Name</th>
                                <th class="tt">Age</th>
                                <th class="tt">Service</th>
                                <th class="tt">Experience</th>
                                <th class="tt">Status</th>
                                <th class="tt">Image</th>
                                <th class="tt">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $data)
                            <tr>
                                <td style="color: azure">{{$data->id}}</td>
                                <td>{{$data->w_name}}</td>
                                <td>{{$data->w_age}}</td>
                                <td>{{$data->service}}</td>
                                <td style="color: rgb(71, 170, 251)">{{$data->experience}}</td>
                                <td>{{$data->status}}</td>
                                <td>
                                    <img src="/worker/{{$data->image}}" height="250px" width="250px">
                                </td>
                                <td>
                                    <a onclick="return confirm('Are You Sure You Want To Delete This Worker?')" class="btn btn-danger" href="{{url('/delete_worker',$data->id)}}">Delete</a>
                                </td>
                              </tr>

                              @empty
                              <tr>
                                <td colspan="10">
                                    No Data found
                                </td>
                              </tr>
                            @endforelse
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