<?php

namespace App\Livewire\Forms;

use App\Models\Reserva;
use Livewire\Form;

class ReservaForm extends Form
{
    public ?Reserva $reservaModel;
    
    public $usuario_id = '';
    public $servicio_id = '';
    public $fecha_reserva = '';
    public $estado = '';

    public function rules(): array
    {
        return [
			'usuario_id' => 'required',
			'servicio_id' => 'required',
			'fecha_reserva' => 'required',
			'estado' => 'required',
        ];
    }

    public function setReservaModel(Reserva $reservaModel): void
    {
        $this->reservaModel = $reservaModel;
        
        $this->usuario_id = $this->reservaModel->usuario_id;
        $this->servicio_id = $this->reservaModel->servicio_id;
        $this->fecha_reserva = $this->reservaModel->fecha_reserva;
        $this->estado = $this->reservaModel->estado;
    }

    public function store(): void
    {
        $this->reservaModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->reservaModel->update($this->validate());

        $this->reset();
    }
}
