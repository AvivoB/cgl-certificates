<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;
use Livewire\WithPagination;

class CustomersTableList extends Component
{
    use WithPagination;

     // Variables for customer research
     protected $queryString = ['search'];
     public $search;

    public function render()
    {
        $search = $this->search;
       
        return view('livewire.customers-table-list', ['customers' => Customer::where(function ($query) use ($search) {
                                                            $query->where('name', 'like', '%' . $search . '%')
                                                                ->orWhere('email', 'like', '%' . $search . '%')
                                                                ->orWhere('phone', 'like', '%' . $search . '%')
                                                                ->orWhere('address', 'like', '%' . $search . '%')
                                                                ->orWhere('city', 'like', '%' . $search . '%')
                                                                ->orWhere('country', 'like', '%' . $search . '%')
                                                                ->orWhere('id', 'like', '%' . $search . '%');
                                                        })->paginate(10)
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
