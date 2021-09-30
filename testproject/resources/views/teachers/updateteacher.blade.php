<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <b>Teacher Home</b>
        <div class="row">
            <div class="col-6 offset-md-3">
                <h2>Update Teacher</h2>
                @if(Session::has('msg'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('msg')}}
                </div>
                @endif
                <form action="{{ URL::to('updateteacher/'.$tea->id)}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" name="name" id="" value="{{ $tea->name }}">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" id="" aria-describedby="emailHelp" name="email" placeholder="Enter Email" value="{{ $tea->email }}">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" id="" aria-describedby="" name="dob" value="{{ $tea->birth_date }}">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" {{$tea->gender=='Male'?'checked':''}}>
                            <label class="form-check-label" for="male"> Male </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female" {{$tea->gender=='Female'?'checked':''}}>
                            <label class="form-check-label" for="female"> Female </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="Other" {{$tea->gender=='Other'?'checked':''}}>
                            <label class="form-check-label" for="other"> Other </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <br><button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ URL::to('listoftea')}}" class="btn btn-primary">List of Teachers</a><br>
                    </div>
            </div>
            </form>
        </div>
    </div>
</body>

</html>