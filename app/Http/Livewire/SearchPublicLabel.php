<?php

namespace App\Http\Livewire;

use App\Models\Label;
use Livewire\Component;

class SearchPublicLabel extends Component
{

    // Variables for customer research
    protected $queryString = ['search'];
    public $search;
    public $labels = [];
    public $isLoading = false;


    public function updatedSearch()
    {
        // Mettez le chargement à true lorsqu'une nouvelle recherche commence
        $this->isLoading = true;
        // Effectuez la recherche
        $this->labels = Label::where('label_num', '=', $this->search)->get();
        // Mettez le chargement à false après avoir récupéré les résultats
        $this->isLoading = false;
    }

    public function render()
    {
        return view('livewire.search-public-label');
    }
}
