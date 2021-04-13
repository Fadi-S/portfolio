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
    public $captcha;

    protected $rules = [
        'first_name' => 'required|max:32',
        'last_name' => 'required|max:32',
        'email' => 'required|email',
        'phone' => 'nullable|numeric',
        'subject' => 'required|min:10|max:120',
        'body' => 'required|min:50|max:1500',
        'captcha' => 'required',
    ];

    public function render()
    {
        return view('livewire.contact-page')
            ->layout('components.layout');
    }

    public function updatedCaptcha($token)
    {
        $response = \Http::post('https://www.google.com/recaptcha/api/siteverify?secret=' . config('app.recaptcha_secret') . '&response=' . $token);
        $this->captcha = $response->json()['score'];

        if ($this->captcha > 0.3) {
            $this->submit();
        } else {
            session()->flash('success', 'Google thinks you are a bot, please refresh and try again');
        }
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
