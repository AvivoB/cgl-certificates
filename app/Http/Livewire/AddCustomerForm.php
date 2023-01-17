<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;

class AddCustomerForm extends Component
{

    public $name;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $country;


    public function render()
    {
        return view('livewire.add-customer-form');
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

        $user_created = Customer::create($validatedData);

        return response()->json_encode($user_created);
    }
}
