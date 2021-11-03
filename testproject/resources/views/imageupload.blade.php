<html lang="en">

<head>
    <title>Laravel Image Intervention</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <style>
        #preview img {
            width: 145;
            height: 145;
            border-radius: 10px;
            box-shadow: 0 0 8px rgba(0, 0, 0, 0.2);
            opacity: 85%;
        }
    </style>
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
        <!-- <form method="post" action="{{ URL::to('uploadconfirm')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <input type="file" name="filename" class="form-control" accept="image/*" id="image">
                    <img src="#" alt="" id="preview" width="145px" height="145px" hidden />
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success" style="margin-top:10px">Upload Image</button>
                </div>
            </div>
        </form> -->
    </div><br>

    <div class="container">
        @if($images)
        @foreach ($images as $image)
        <img src="{{ asset('images/'. $image->filename) }}" alt="{{ $image->alttext }}" width="145px" height="145px">
        @endforeach
        @endif
    </div><br>

    <!-- <script>
        image.onchange = evt => {
            const [file] = image.files
            if (file) {
                preview.hidden = false;
                preview.src = URL.createObjectURL(file)
            }
        }
    </script> -->

    <!-- Multiple Image Upload -->
    <div class="container">
        <form action="/multiupload" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <input type="file" name="filename[]" class="form-control" accept="image/*" id="image" onchange="previewMultiple(event)" multiple>
                </div>
            </div>
            <div class="row">
                <div id="preview" class="form-group col-md-12 preview"></div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <button type="submit" class="btn btn-success" style="margin-top:10px">Upload Image</button>
                </div>
            </div>
        </form>
    </div><br>

    <script>
        function previewMultiple(event) {
            $("div.preview").html("");
            var images = document.getElementById("image");
            var count = images.files.length;
            for (i = 0; i < count; i++) {
                var urls = URL.createObjectURL(event.target.files[i]);
                document.getElementById("preview").innerHTML += ' <img src="' + urls + '"> ';
            }
        }
    </script>

</body>

</html>