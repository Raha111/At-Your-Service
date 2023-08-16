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
            max-width: 100%;
            overflow-y: auto;
        }
        .div_center h2{
            font-size: 2rem;
            font-weight: 400;
            color: white;
            margin: 20px;
            margin-bottom: 50px;
        }
        .b{
            width: 100%;
            height: 100px;
        }
        .search{
           width: 23%;
           float: left;
           margin-bottom: -25px;
        }
        .sort{
            margin-left: 58%;
            width: 30%;
            float: left;
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
            width: 100%;
            margin: auto;
            margin-top: 110px;
            border-collapse: collapse;
            text-align: center;
            table-layout: fixed;
            width: max-content;
        }

        .table th,
        .table td {
            padding: 15px 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            overflow-wrap: break-word;
        }
        .table .description-column {
         white-space: pre-wrap;
         max-width: 130px;
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
                {{session()->get('message')}}
            </div>
            @endif
            <div class="content-wrapper">
                <div class="div_center">
                    <h2>Requested Services</h2>
                    <div class="b">
                    <div class="search">
                        <form action="{{url('search')}}" method="get">
                            <input type="text" name="search" placeholder="Search">
                            <input type="submit" value="Search" class="btn btn-outline-primary">
                        </form>
                    </div>
                    <div class="sort">
                        <form action="{{url('sort')}}" method="get">
                            <select name="sort_by">
                                <option value="new">Newest</option>
                                <option value="date">Sort by Date</option>

                            </select>
                            <input type="submit" value="Sort" class="btn btn-outline-primary" >
                        </form>
                    </div>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="tt">Order ID</th>
                                <th class="tt">Customer Name</th>
                                <th class="tt">Email</th>
                                <th class="tt">Contact Number</th>
                                <th class="tt">Service</th>
                                <th class="tt">Date</th>
                                <th class="tt">Time</th>
                                <th class="tt">Address</th>
                                <th class="tt">Details</th>
                                <th class="tt">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($data as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->phone}}</td>
                                <td>{{$data->service}}</td>
                                <td>{{$data->date_column}}</td>
                                <td>{{$data->time_column}}</td>
                                <td>{{$data->Address}}</td>
                                <td class="description-column">{{$data->details}}</td>
                                <td>
                                    <a onclick="return confirm('Do you want to assign worker to this request?')" class="btn btn-outline-success" href="{{url('/assign',$data->id)}}">Assign</a>
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