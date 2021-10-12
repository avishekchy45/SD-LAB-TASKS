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
    @if(Session::has('msg'))
    <div class="alert alert-danger" role="alert">
        {{Session::get('msg')}}
    </div>
    @endif
    <b>Dashboard</b>
    <h4> Your Role : {{ Session('userrole') }}</h4>
    <h4> Your e-mail : {{ Session('username') }}</h4>
</body>

</html>