<?php

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\ImageModel;

if (!function_exists('helperupload')) {
    function helperupload($originalImage)
    {
        // $this->validate($req, [
        //     'filename' => 'image|required|mimes:jpeg,png,jpg,gif,svg'
        // ]);

        $name_ext = $originalImage->getClientOriginalName();
        $name_ext_arr = explode(".", $name_ext);
        $only_ext = end($name_ext_arr);
        $name = time() . rand() . "." . $only_ext;
        return ($name);
        // return back()->with('successmsg', 'Your images has been successfully Uploaded');
    }
}
