<?php

namespace App\Http\Livewire;

use App\Models\Label;
use Livewire\Component;
use Livewire\WithPagination;

class LabelTableList extends Component
{
    use WithPagination;

    // Variables for customer research
    protected $queryString = ['search'];
    public $search;

   public function render()
   {
       $search = $this->search;
       
       return view('livewire.label-table-list', ['labels' => Label::where(function ($query) use ($search) {
               $query->where('label_num', 'like', '%' . $search . '%');
           })->orderBy('id', 'DESC')->paginate(10)
       ]);
   }

   /**
    *  Livewire Lifecycle Hook
    */
   public function updatingsearch(): void
   {
       $this->gotoPage(1);
   }
}
