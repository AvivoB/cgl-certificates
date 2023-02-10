<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ChooseObjectToCertified extends Component
{

    public $ObjectType;
    public $textCertificate;

    public function render()
    {
        return view('livewire.choose-object-to-certified');
    }

    public function updatedObjectType()
    {
        $this->textCertificate = $this->ObjectType;
    }
}
