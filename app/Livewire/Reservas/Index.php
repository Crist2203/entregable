<?php

namespace App\Livewire\Reservas;

use App\Models\Reserva;
use Illuminate\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    #[Layout('layouts.app')]
    public function render(): View
    {
        $reservas = Reserva::paginate();

        return view('livewire.reserva.index', compact('reservas'))
            ->with('i', $this->getPage() * $reservas->perPage());
    }

    public function delete(Reserva $reserva)
    {
        $reserva->delete();

        return $this->redirectRoute('reservas.index', navigate: true);
    }
}
