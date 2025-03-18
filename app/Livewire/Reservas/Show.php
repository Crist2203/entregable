<?php

namespace App\Livewire\Reservas;

use App\Livewire\Forms\ReservaForm;
use App\Models\Reserva;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public ReservaForm $form;

    public function mount(Reserva $reserva)
    {
        $this->form->setReservaModel($reserva);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.reserva.show', ['reserva' => $this->form->reservaModel]);
    }
}
