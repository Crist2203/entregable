<?php

namespace App\Livewire\Forms;

use App\Models\Servicio;
use Livewire\Form;

class ServicioForm extends Form
{
    public ?Servicio $servicioModel;
    
    public $nombre = '';
    public $descripcion = '';
    public $precio = '';

    public function rules(): array
    {
        return [
			'nombre' => 'required|string',
			'descripcion' => 'required|string',
			'precio' => 'required',
        ];
    }

    public function setServicioModel(Servicio $servicioModel): void
    {
        $this->servicioModel = $servicioModel;
        
        $this->nombre = $this->servicioModel->nombre;
        $this->descripcion = $this->servicioModel->descripcion;
        $this->precio = $this->servicioModel->precio;
    }

    public function store(): void
    {
        $this->servicioModel->create($this->validate());

        $this->reset();
    }

    public function update(): void
    {
        $this->servicioModel->update($this->validate());

        $this->reset();
    }
}
