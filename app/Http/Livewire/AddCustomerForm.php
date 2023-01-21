<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;

class AddCustomerForm extends Component
{

    // Variables for the customers creation form
    public $displayCreateCustomer = false;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $country;

    // Variables for customer research
    protected $queryString = ['searchCustomers'];
    public $customers;
    public $searchCustomers;
    public $userSelected;




    public function render()
    {
        $searchCustomers = $this->searchCustomers;
        $this->customers = Customer::where(function ($query) use ($searchCustomers) {
            $query->where('name', 'like', '%' . $searchCustomers . '%')
                ->orWhere('email', 'like', '%' . $searchCustomers . '%')
                ->orWhere('phone', 'like', '%' . $searchCustomers . '%')
                ->orWhere('address', 'like', '%' . $searchCustomers . '%')
                ->orWhere('city', 'like', '%' . $searchCustomers . '%')
                ->orWhere('country', 'like', '%' . $searchCustomers . '%');
       })->get();

        return view('livewire.add-customer-form');
    }


    public function displayFormCreateCustomer()
    {
        $this->displayCreateCustomer = true;
        $this->userSelected = '';
    }

    public function selectCustomer($id)
    {
        $customer = Customer::find($id);
        $this->userSelected = $customer;
        $this->searchCustomers = '';
        $this->displayCreateCustomer = false;
    }

    public function save ()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'phone' => '',
            'address' => '',
            'city' => '',
            'country' => '',
        ]);

        $user_created = Customer::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'city' => $this->city,
            'country' => $this->country,
        ]);


        $this->userSelected = $user_created;
        $this->displayCreateCustomer = false;
    }
}
