<?php

namespace App\Livewire;

use App\Diplome\PSC1;
use App\Livewire\Forms\CertificateForm;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;

class CertificateGenerator extends Component
{
    public CertificateForm $form;

    public function generate()
    {
        $this->form->resetValidation();
        $this->form->validate();

        $pdf = new PSC1(
            firstname: $this->form->firstname,
            lastname: $this->form->lastname,
            city: $this->form->city,
            birthdate: Carbon::parse($this->form->birthdate)->translatedFormat('d F Y'),
            date: Carbon::parse($this->form->date)->translatedFormat('d F Y'),
            code: $this->form->code
        );

        $fileName = Str::of("{$this->form->firstname}-{$this->form->lastname}-{$this->form->code}.pdf")->slug();

        Storage::put('diplome.pdf', $pdf->render());

        return Storage::download('diplome.pdf', $fileName);
    }

    public function render()
    {
        return view('livewire.certificate-generator');
    }

    public function mount()
    {
        $this->form->date = today()->format('Y-m-d');
    }
}
