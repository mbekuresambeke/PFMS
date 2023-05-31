<?php

namespace App\Http\Livewire;

use Livewire\Component;
// use App\Models\Contact;

class DebtForm extends Component
{

    public $name;
    public $email;
    public $phone;

    public function submit()
    {
        Contact::create([
            'rentAmount' =>$this->rentAmount,
            'utilityAmount' =>$this->utilityAmount,
            'creditCardAmount' =>$this->creditCardAmount,
            'loanAmount' =>$this->loanAmount,
        ]);

        $this->reset();
    }

    public function render()
    {


        return view('livewire.debt-form');
    }
}
