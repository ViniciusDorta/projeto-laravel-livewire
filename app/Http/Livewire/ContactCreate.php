<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactCreate extends Component
{
    public $name;
    public $email;
    public $phone;

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'phone' => 'required',
    ];

    public function create()
    {
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone
        ]);
    }

    public function render()
    {
        return view('livewire.contact-create');
    }
}
