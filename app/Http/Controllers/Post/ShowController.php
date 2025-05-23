<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;

class ShowController extends Controller
{
    public function __invoke(Post $post)
    {
        $date = Carbon::parse($post->created_at);

        // получаем посты с такой же категорией потом условие чтоб не выдало в рекомендации
        // наш же пост ставим условие
        $relatedPosts = Post::where('category_id',$post->category_id)
            ->where('id', '!=', $post->id)
            ->get()
            ->take(3);

        return view('post.show', compact('post', 'date', 'relatedPosts'));
    }
}
