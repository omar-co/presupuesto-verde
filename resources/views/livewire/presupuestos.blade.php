<div>
    <button wire:click.prevent="actualiza({{ $ramoId }})" class="btn btn-primary">Actualizar</button>
    Ramo ID: {{ $ramoId }}
    {{ $this->table }}
</div>


