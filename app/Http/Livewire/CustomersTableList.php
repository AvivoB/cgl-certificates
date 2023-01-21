<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CustomersTableList extends Component
{

     // Variables for customer research
     protected $queryString = ['search'];
     public $customers;
     public $search;

    public function render()
    {
        $search = $this->search;
        $this->customers = Customer::where(function ($query) use ($search) {
            $query->where('name', 'like', '%' . $search . '%')
                ->orWhere('email', 'like', '%' . $search . '%')
                ->orWhere('phone', 'like', '%' . $search . '%')
                ->orWhere('address', 'like', '%' . $search . '%')
                ->orWhere('city', 'like', '%' . $search . '%')
                ->orWhere('country', 'like', '%' . $search . '%');
       })->get();
       
        return view('livewire.customers-table-list');
    }
}
