<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class ArticleCreate extends Component
{
    #[Validate('required|min:4|max:20')]
    public $title;
    #[Validate('required|min:0')]
    public $price;
    #[Validate('required|min:10|max:50')]
    public $description;


    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve avere almeno 4 caratteri',
            'title.max' => 'Il titolo non può avere più di 20 caratteri',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.min' => 'Il prezzo deve essere almeno €0',
            'description.required' => 'La descrizione è obbligatoria',
            'description.min' => 'La descrizione deve avere almeno 10 caratteri',
            'description.max' => 'La descrizione non può avere più di 50 caratteri',
        ];
    }
    public function store()
    {
        $this->validate();
        Article::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'user_id' => Auth::user()->id
        ]);

        session()->flash('success', 'Articolo creato correttamente!');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.article-create');
    }
}
