<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assign worker</title>
    <style>
        body{
            background-color: rgb(23, 23, 23);
        }
        .div_center{
            margin-top: 50px;
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
        }

        .table th,
        .table td {
            padding: 15px 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            overflow-wrap: break-word;
            color: white;
        }
        .table th{
            color: black;
        }
        .table .description-column {
         white-space: pre-wrap;
         max-width: 130px;
        }

        .btn-column .btn {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .btn-line {
            white-space: normal;
        }


        .tt {
            background-color: #f2f2f2;
        }
        .success{
            padding: 10px;
            border-radius: 8px;
            border: 1px solid blue;
            text-decoration: none;
            color: blue;
            transition: all 0.3s ease-in-out;
        }
        .success:hover{
            background-color: blue;
            color: white;
        }

    </style>
</head>
<body>
<div class="main">
    <div class="content-wrapper">
        <div class="div_center">
            <h2>Requested Service</h2>
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
                    </tr>
                </thead>
                <tbody>
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
                      </tr>
                </tbody>
            </table>
        </div>

        <div class="div_center">
            <h2>Available Workers</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th class="tt">Worker ID</th>
                        <th class="tt">Worker Name</th>
                        <th class="tt">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($worker as $worker)
                    <tr>
                        <td>{{$worker->id}}</td>
                        <td>{{$worker->w_name}}</td>
                        <td>
                            <a onclick="return confirm('Do you want to assign this worker to this request?')" class="success" href="{{ route('assign-worker', ['orderId' => $data->id, 'workerId' => $worker->id]) }}">Assign Worker</a>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>