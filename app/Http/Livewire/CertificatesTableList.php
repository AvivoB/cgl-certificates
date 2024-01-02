<?php

namespace App\Http\Livewire;

use App\Models\Certificate;
use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class CertificatesTableList extends Component
{
    use WithPagination;

     // Variables for customer research
     protected $queryString = ['search'];
     public $search;

    public function render()
    {
        $search = $this->search;
        
        return view('livewire.certificates-table-list', ['certificates' => Certificate::where(function ($query) use ($search) {
                $query->where('id', 'like', '%' . $search . '%');
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
