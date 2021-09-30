<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="">
                <h2>Teacher List</h2>
                <a href="{{ URL::to('teacher')}}" class="btn btn-primary">Add Teacher</a><br><br>
                @if(Session::has('msg'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('msg')}}
                </div>
                @endif
                <table class="table table-primary table-stripe">
                    <thead>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Birh Date</th>
                        <th>Gender</th>
                        <th>Department</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @if($tea->count())
                        @foreach($tea as $value)
                        <tr>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->email}}</td>
                            <td>{{$value->birth_date}}</td>
                            <td>{{$value->gender}}</td>
                            <td>{{$value->dept_name}}</td>
                            <td>
                                <a href="{{ URL::to('editteacher/'.$value->id)}}" class="btn btn-warning btn-sm">Update</a>
                                <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal{{$value->id}}">Delete</a>
                                <!-- Button to Open the Modal -->
                                <!-- The Modal -->
                                <div class="modal" id="myModal{{$value->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">

                                            <!-- Modal Header -->
                                            <div class="modal-header">
                                                <h4 class="modal-title">Delete?</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="modal-body">
                                                Delete {{$value->name}}?
                                            </div>

                                            <!-- Modal footer -->
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                                <a href="{{ URL::to('deleteteacher/'.$value->id)}}" class="btn btn-danger btn-sm">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr class="text-center">
                            <td colspan="7">No Teacher Found</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>