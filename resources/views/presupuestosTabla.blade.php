<div class="flex justify-center mb-5">
    <button
        wire:click.prevent="refreshCatalogTable({{$evaluate(fn ($get) =>
$get('ramo_id') . ', "' . $get('modalidad_id') . '",' . $get('programa_presupuestario_id') . ', ' . $get('tipo_contribucion') . ', ' . $get('form_id')
)}})"
        class="rounded-md bg-primary-400 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-primary-300
        focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-600">
        Actualizar Programas presupuestales
    </button>
</div>
<livewire:presupuestos></livewire:presupuestos>
