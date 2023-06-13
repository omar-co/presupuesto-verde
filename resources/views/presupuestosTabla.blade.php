<div>
    <span>{{ $ramoId = $evaluate(fn ($get) => $get('ramo_id')) }}</span>
    <button wire:click.prevent="refreshCatalogTable">Refrescar</button>
    <button wire:click.prevent="$emit('refreshCatalogTable',  '{{$evaluate(fn ($get) => $get('ramo'))}}' )">Emit</button>
</div>
<livewire:presupuestos :ramoId="$evaluate(fn ($get) => $get('ramo'))"></livewire:presupuestos>
@livewire('presupuestos', ['ramoId' => $evaluate(fn ($get) => $get('ramo'))])
