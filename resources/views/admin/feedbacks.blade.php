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
            width: 100%;
            margin: auto;
            margin-top: 30px;
            border-collapse: collapse;
            text-align: center;
            table-layout: fixed;
            width: max-content;
            column-gap: 10px
        }

        .table th,
        .table td {
            padding: 15px 25px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            overflow-wrap: break-word;
            
        }
        .table .description-column {
         white-space: pre-wrap;
         max-width: 250px;
         color: white;
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
                    <h2>Customer Feedback</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="tt">Newest Sn.</th>
                                <th class="tt">Customer Name</th>
                                <th class="tt">Email</th>
                                <th class="tt">Subject</th>
                                <th class="tt">Message</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                   $rowcount=1;
                            @endphp
                            @foreach($data as $data)

                            <tr>
                                <td>{{$rowcount++}}</td>
                                <td>{{$data->name}}</td>
                                <td>{{$data->email}}</td>
                                <td>{{$data->subject}}</td>
                                <td class="description-column">{{$data->message}}</td>
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