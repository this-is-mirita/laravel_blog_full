<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
class DeleteController extends Controller
{
    public function __invoke(Post $post)
    {

        // TODO: Implement __invoke() method.
        auth()->user()->likedPosts()->detach($post->id);
        return redirect()->route('personal.liked.index');
    }
}
