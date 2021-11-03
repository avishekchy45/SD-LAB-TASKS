<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                <h1 class="text-center">Dashboard</h1><br>
                <p class="text-center"> Your Role : {{ Session('userrole') }}</p>
                <p class="text-center"> Your e-mail : {{ Session('username') }}</p>
            </div>
        </div>
    </div>
</body>

</html>