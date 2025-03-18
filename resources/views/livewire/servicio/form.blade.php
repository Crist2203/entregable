<div class="space-y-6">
    
    <div>
        <x-input-label for="nombre" :value="__('Nombre')"/>
        <x-text-input wire:model="form.nombre" id="nombre" name="nombre" type="text" class="mt-1 block w-full" autocomplete="nombre" placeholder="Nombre"/>
        @error('form.nombre')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="descripcion" :value="__('Descripcion')"/>
        <x-text-input wire:model="form.descripcion" id="descripcion" name="descripcion" type="text" class="mt-1 block w-full" autocomplete="descripcion" placeholder="Descripcion"/>
        @error('form.descripcion')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>
    <div>
        <x-input-label for="precio" :value="__('Precio')"/>
        <x-text-input wire:model="form.precio" id="precio" name="precio" type="text" class="mt-1 block w-full" autocomplete="precio" placeholder="Precio"/>
        @error('form.precio')
            <x-input-error class="mt-2" :messages="$message"/>
        @enderror
    </div>

    <div class="flex items-center gap-4">
        <x-primary-button>Submit</x-primary-button>
    </div>
</div>