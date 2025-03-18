<?php

namespace App\Livewire\Reservas;

use App\Livewire\Forms\ReservaForm;
use App\Models\Reserva;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public ReservaForm $form;

    public function mount(Reserva $reserva)
    {
        $this->form->setReservaModel($reserva);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('reservas.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.reserva.create');
    }
}
