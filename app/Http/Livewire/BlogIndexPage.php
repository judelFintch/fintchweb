<?php

namespace App\Http\Livewire;

use App\Support\BlogArticles;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.app')]
#[Title('Blog — Fintch Web')]
class BlogIndexPage extends Component
{
    public function render()
    {
        $articles = collect(BlogArticles::all())
            ->map(fn ($article, $slug) => [...$article, 'slug' => $slug])
            ->values()
            ->all();

        return view('frontend.blog-index', [
            'articles' => $articles,
        ]);
    }
}
