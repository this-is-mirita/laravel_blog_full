<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;
use App\Models\User;

class DeleteController extends Controller
{
    public function __invoke(User $user)
    {
        // TODO: Implement __invoke() method.
        $user->delete();
        return redirect()->route('admin.user.index');
    }
}
