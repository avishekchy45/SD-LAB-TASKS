<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br><a href="{{ URL::to('listofem')}}" class="btn btn-secondary">All Employees</a>
        <a href="/" class="btn btn-secondary">Create New Employee</a><br><br>
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
                <form action="{{ URL::to('updatefinal/'.$data2->id)}}" method="post">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" id="" aria-describedby="" name="name" value="{{ $data2->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" id="" aria-describedby="emailHelp" name="email" value="{{ $data2->email }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Salary</label>
                        <input type="text" class="form-control" id="" aria-describedby="" name="salary" value="{{ $data2->salary }}">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" id="" aria-describedby="" name="dob" value="{{ $data2->date_of_birth }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Department</label>
                        <select class="form-select" aria-label="Default select example" name="dept">
                            <option value="">SELECT DEPARTMENT</option>
                            <option value="CSE" {{$data2->department=='CSE'?'selected':''}}>Computer Science & Engineering</option>
                            <option value="CE" {{$data2->department=='CE'?'selected':''}}>Civil Engineering</option>
                            <option value="ME" {{$data2->department=='ME'?'selected':''}}>Mechanical Engineering</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="active">Active</label>
                        <input type="checkbox" class="form-check-input" id="active" name="status" value="1" {{$data2->active=='1'?'checked':''}}>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" {{$data2->gender=='Male'?'checked':''}}>
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female" {{$data2->gender=='Female'?'checked':''}}>
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="other" {{$data2->gender=='other'?'checked':''}}>
                            <label class="form-check-label" for="other">
                                Other
                            </label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>