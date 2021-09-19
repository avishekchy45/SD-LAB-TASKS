<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <b>Student Home</b>
        <div class="row">
            <div class="col-6 offset-md-3">
                <h2>Update Student</h2>
                @if(Session::has('msg'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('msg')}}
                </div>
                @endif
                <form action="{{ URL::to('updatefinal/'.$data2->id)}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" name="name" id="" value="{{ $data2->NAME }}">
                    </div>
                    <div class="form-group">
                        <label for="">Department</label>
                        <select class="form-control" name="dept" id="">
                            <option value="">SELECT TYPE</option>
                            <option value="CSE" {{$data2->department=='CSE'?'selected':''}}>CSE</option>
                            <option value="EEE" {{$data2->department=='EEE'?'selected':''}}>EEE</option>
                            <option value="MATH" {{$data2->department=='MATH'?'selected':''}}>MATH</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <br><button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ URL::to('listofstu')}}" class="btn btn-primary">List of students</a><br>
                    </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>