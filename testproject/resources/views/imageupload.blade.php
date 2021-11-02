<html lang="en">

<head>
    <title>Laravel Image Intervention</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <h3 class="jumbotron">Laravel Image Intervention </h3>
        @if(Session::has('successmsg'))
        <div class="alert alert-success" role="alert">
            {{Session::get('successmsg')}}
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
        <form method="post" action="{{ URL::to('uploadconfirm')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <input type="file" name="filename" class="form-control" accept="image/*" id="image">
                    <img src="#" alt="" id="preview" width="145px" height="145px"/>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success" style="margin-top:10px">Upload Image</button>
                </div>
            </div>
        </form>
    </div>
    <div class="container">
        @if($images)
            @foreach ($images as $image)
                <img src="{{ asset('images/'. $image->filename) }}" alt="{{ $image->alttext }}" width="145px" height="145px">
            @endforeach
        @endif
    </div>
    <script>
        image.onchange = evt => {
            const [file] = image.files
            if (file) {
                preview.src = URL.createObjectURL(file)
            }
        }
    </script>
</body>

</html>