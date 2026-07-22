<?php

namespace App\Http\Livewire;

use App\Support\BlogArticles;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app')]
class BlogShowPage extends Component
{
    public string $slug;

    public function mount(string $slug): void
    {
        abort_unless(BlogArticles::find($slug) !== null, 404);

        $this->slug = $slug;
    }

    public function render()
    {
        $article = BlogArticles::find($this->slug);

        return view('frontend.blog-show', [
            'article' => $article,
        ])
            ->title($article['title'].' - Fintch Web')
            ->layoutData(['description' => $article['meta_description']]);
    }
}
