<?php

namespace App\Http\Controllers\Admin\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        // TODO: Implement __invoke() method.
        $data = $request->validated();

        $post = $this->service->update($data, $post);


        return view('admin.post.show', compact('post'));

    }
}
