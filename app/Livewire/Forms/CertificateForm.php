<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CertificateForm extends Form
{
    #[Validate('required|date')]
    public $date = '';

    #[Validate('required', as: 'prénom')]
    public $firstname = '';

    #[Validate('required', as: 'nom')]
    public $lastname = '';

    #[Validate('required', as: 'ville')]
    public $city = '';

    #[Validate('required|date', as: 'date de naissance')]
    public $birthdate = '';

    #[Validate('required')]
    public $code = '';
}
