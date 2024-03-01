<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class SearchArticles extends Component
{
    public $articles = [];
    public $search = "Search for articles";

    public function render()
    {
        if ($this->search == "Search for articles") {
            $this->articles = Article::all();
        } else {
            $this->articles = Article::where('title', 'like', '%' . $this->search . '%')->orWhere('description', 'like', '%' . $this->search . '%')->get();
        }
        return view('livewire.search-articles');
    }
}
