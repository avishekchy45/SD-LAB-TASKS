<?php

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\ImageModel;

if (!function_exists('helperupload')) {
    function helperupload(request $req)
    {
        // $this->validate($req, [
        //     'filename' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
        // ]);
        $images = $req->file('filename');
        foreach ($images as $originalImage) {
            $name_ext = $originalImage->getClientOriginalName();
            $name_ext_arr = explode(".", $name_ext);
            $only_ext = end($name_ext_arr);
            $name = time() . rand() . "." . $only_ext;

            $Image = Image::make($originalImage);
            $Path = public_path() . '/images/';
            $Image->save($Path . $name);

            $obj = new ImageModel();
            $obj->alttext = "IMAGE";
            $obj->filename = $name;
            $obj->save();
        }
        return back()->with('successmsg', 'Your images has been successfully Uploaded');
    }
}
