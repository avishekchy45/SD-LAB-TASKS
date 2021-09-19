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
        <br><a href="{{ URL::to('listofem')}}" class="btn btn-secondary">All Employees</a><br><br>
        <a href="" class="btn btn-secondary">Create New Employee</a><br><br>
        <div class="row">
            <div class="col">
                <form action="{{ URL::to('addemployee')}}" method="post">
                    {{ csrf_field() }}

                    <div class="mb-3">
                        <label for="" class="form-label">Name</label>
                        <input type="text" class="form-control" id="" aria-describedby="" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" class="form-control" id="" aria-describedby="emailHelp" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Salary</label>
                        <input type="text" class="form-control" id="" aria-describedby="" name="salary">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" id="" aria-describedby="" name="dob">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Department</label>
                        <select class="form-select" aria-label="Default select example" name="dept">
                            <option value="" selected>SELECT DEPARTMENT</option>
                            <option value="CSE">Computer Science & Engineering</option>
                            <option value="CE">Civil Engineering</option>
                            <option value="ME">Mechanical Engineering</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-check-label" for="active">Active</label>
                        <input type="checkbox" class="form-check-input" id="active" name="status" value="1">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">
                                Female
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                            <label class="form-check-label" for="other">
                                Other
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>


</body>

</html>