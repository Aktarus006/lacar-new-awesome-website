<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;

class DocumentController extends Controller
{
    public function __construct()
    {
    }

    public function show($id)
    {
        $doc = Document::where('id', $id)->firstOrFail();
        $file = json_decode($doc->file)[0];
        $file_path = Voyager::image($file->download_link);

        return redirect($file_path);
    }
}
