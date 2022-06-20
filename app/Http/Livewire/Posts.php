<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\WithPagination;
use Livewire\Component;

class Posts extends Component
{
    use withPagination;

    public function render()
    {
        $posts = Post::with(['user', 'category'])->orderBy('id', 'desc')->paginate(5);
        return view('livewire.posts', [
            'posts' => $posts
        ]);
    }
}
