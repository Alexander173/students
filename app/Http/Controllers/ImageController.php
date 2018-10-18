<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Http\Requests\ImageRequest;
use App\Models\Image;
use App\Models\Student;

class ImageController extends Controller
{
    public function store(ImageRequest $request, Student $student)
    {
        $extension = $request->file('photo')->getClientOriginalExtension();
        $file = $request->file('photo');

        $name_file = date('Y-m-d H') . '_' . $student->first_name . '_' . $student->id . '.' . $extension;

        Storage::putFileAs("public/img_lk/", $file, $name_file);
        Image::create(['student_id' => $student->id, 'img_src' => $name_file]);

        return back();
    }

    public function update(ImageRequest $request, Student $student, Image $image)
    {
        $extension = $request->file('photo')->getClientOriginalExtension();
        $file = $request->file('photo');

        $name_file = date('Y-m-d H') . '_' . $student->first_name . '_' . $student->id . '.' . $extension;

        Storage::delete('public/img_lk/'.$image->img_src);
        Storage::putFileAs("public/img_lk", $file, $name_file);
        $image->update(['img_src' => $name_file]);

        return back();
    }
}
