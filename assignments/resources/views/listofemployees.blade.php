<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Employees</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <br><a href="{{ URL::to('listofem')}}" class="btn btn-secondary">All Employees</a>
        <a href="{{ URL::to('/empform')}}" class="btn btn-secondary">Create New Employee</a><br><br>
        <div class="row">
            <div class="col">
                @if(Session::has('errormsg'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('errormsg')}}
                </div>
                @elseif(Session::has('successmsg'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('successmsg')}}
                </div>
                @endif
                <table class="table table-primary table-stripe">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Salary</th>
                        <th>Date of Birth</th>
                        <th>Department</th>
                        <th>Active</th>
                        <th>Gender</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @if($data->count())
                        @foreach($data as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->salary}}</td>
                            <td>{{$value->date_of_birth}}</td>
                            <td>{{$value->department}}</td>
                            <td>{{$value->active=='1'?'YES':'NO'}}</td>
                            <td>{{$value->gender}}</td>
                            <td>
                                <a href="{{ URL::to('update/'.$value->id)}}" class="btn btn-warning btn-sm">Update</a>
                                <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal{{$value->id}}">Delete</a>
                                <!-- Button to Open the Modal -->
                                <!-- The Modal -->
                                <div class="modal" id="myModal{{$value->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete Confirmation</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                Are you sure you want to Delete {{$value->name}}?
                                            </div>
                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <a href="" class="btn btn-success">No</a>
                                                <a href="{{ URL::to('delete/'.$value->id)}}" class="btn btn-danger">Yes</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr class="text-center">
                            <td colspan="9">No Employee Found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>

</html>