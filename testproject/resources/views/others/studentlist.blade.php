<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-md-3">
                <h2>Student List</h2>
                <table class="table table-primary table-stripe">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Name</td>
                            <td>Department</td>
                        </tr>
                    </thead>
                    <tbody>
                        @if($data)
                            @foreach($data as $value)
                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->full_name}}</td>
                                    <td>{{$value->department}}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="3">No Student Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
</body>

</html>