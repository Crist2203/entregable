<?php

namespace App\Livewire\Servicios;

use App\Livewire\Forms\ServicioForm;
use App\Models\Servicio;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Create extends Component
{
    public ServicioForm $form;

    public function mount(Servicio $servicio)
    {
        $this->form->setServicioModel($servicio);
    }

    public function save()
    {
        $this->form->store();

        return $this->redirectRoute('servicios.index', navigate: true);
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.servicio.create');
    }
}
