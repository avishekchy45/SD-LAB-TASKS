<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    public function newupload($alttext, $filename)
    {
        // Do something with $request
        $obj = new ImageModel();
        $obj->filename = $filename;
        $obj->alttext = $alttext;
        $obj->save();
    }
    use HasFactory;
}
