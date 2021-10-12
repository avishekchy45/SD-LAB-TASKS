<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <b>Dashboard</b>
    <h4> Your Role : {{ Session('userrole') }}</h4>
    <h4> Your e-mail : {{ Session('username') }}</h4>

</body>

</html>