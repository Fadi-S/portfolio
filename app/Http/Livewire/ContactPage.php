<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactPage extends Component
{
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $subject;
    public $body;

    protected $rules = [
        'first_name' => 'required|max:32',
        'last_name' => 'required|max:32',
        'email' => 'required|email',
        'phone' => 'nullable|numeric',
        'subject' => 'required|min:10|max:120',
        'body' => 'required|min:50|max:1500',
    ];

    public function render()
    {
        return view('livewire.contact-page')
            ->layout('components.layout');
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function submit()
    {
        $validated = $this->validate();
        Contact::create($validated);

        session()->flash('success', [
            'title' => 'Message sent successfully!',
            'message' => 'You will be contacted soon.',
        ]);

        $this->clearForm();
    }

    private function clearForm()
    {
        $this->first_name = '';
        $this->last_name = '';
        $this->email = '';
        $this->phone = '';
        $this->subject = '';
        $this->body = '';
    }
}
