<div class="space-y-6">
    
    <div>
        <x-input-label for="usuario_id" :value="__('Usuario Id')"/>
        <x-text-input wire:model="form.usuario_id" id="usuario_id" name="usuario_id" type="text" class="mt-1 block w-full" autocomplete="usuario_id" placeholder="Usuario Id"/>
        @error('form.usuario_id')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="servicio_id" :value="__('Servicio Id')"/>
        <x-text-input wire:model="form.servicio_id" id="servicio_id" name="servicio_id" type="text" class="mt-1 block w-full" autocomplete="servicio_id" placeholder="Servicio Id"/>
        @error('form.servicio_id')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="fecha_reserva" :value="__('Fecha Reserva')"/>
        <x-text-input wire:model="form.fecha_reserva" id="fecha_reserva" name="fecha_reserva" type="text" class="mt-1 block w-full" autocomplete="fecha_reserva" placeholder="Fecha Reserva"/>
        @error('form.fecha_reserva')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="estado" :value="__('Estado')"/>
        <x-text-input wire:model="form.estado" id="estado" name="estado" type="text" class="mt-1 block w-full" autocomplete="estado" placeholder="Estado"/>
        @error('form.estado')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>