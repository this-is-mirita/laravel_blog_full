<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class ShowController extends Controller
{
    public function __invoke(Tag $tag)
    {
        // TODO: Implement __invoke() method.
        return view('admin.tag.show', compact('tag'));

    }
}
