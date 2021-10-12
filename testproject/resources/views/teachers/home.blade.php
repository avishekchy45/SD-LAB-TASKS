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
        <b>Teacher Home</b>
        <div class="row">
            <div class="col-6 offset-md-3">
                <h2>Add Teacher</h2>
                @if(Session::has('msg'))
                <div class="alert alert-danger" role="alert">
                    {{Session::get('msg')}}
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ URL::to('addteacher')}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Full Name</label>
                        <input type="text" class="form-control" name="name" id="" value="{{ old('name') }}" required>
                        @if ($errors->has('name'))
                        <div class="form-text alert alert-danger"> {{ $errors->first('name') }} </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" id="" aria-describedby="emailHelp" name="email" placeholder="Enter Email" value="{{ old('email') }}" required>
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        @if ($errors->has('email'))
                        <div class="form-text alert alert-danger"> {{ $errors->first('email') }} </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" id="" aria-describedby="" name="birth_date" value="{{ old('birth_date') }}">
                        @if ($errors->has('birth_date'))
                        <div class="form-text alert alert-danger"> {{ $errors->first('birth_date') }} </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="Male" {{ old('gender')=='Male'?'checked':'' }} required>
                            <label class="form-check-label" for="male"> Male </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="Female" {{ old('gender')=='Female'?'checked':'' }}>
                            <label class="form-check-label" for="female"> Female </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="ther" value="Other" {{ old('gender')=='Other'?'checked':'' }}>
                            <label class="form-check-label" for="other"> Other </label>
                        </div>
                        @if ($errors->has('gender'))
                        <div class="form-text alert alert-danger"> {{ $errors->first('gender') }} </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Department</label>
                        <select class="form-control" name="dept" id="">
                            <option value="">SELECT DEPARTMENT</option>
                            @foreach($dept as $dept)
                            <option value="{{ $dept->id }}" {{ old( 'dept' ) == $dept->id?'selected':'' }}>{{ $dept->dept_name }}</option>
                            @endforeach
                        </select>
                        @if ($errors->has('dept'))
                        <div class="form-text alert alert-danger"> {{ $errors->first('dept') }} </div>
                        @endif
                    </div>
                    <div class="form-group text-center">
                        <br><button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ URL::to('listoftea')}}" class="btn btn-primary">List of Teachers</a><br><br>
                    </div>
            </div>
            </form>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>