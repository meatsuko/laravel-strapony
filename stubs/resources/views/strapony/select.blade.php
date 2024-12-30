@props([
'label' => null,
'required' => false,

'keyvalue' => 'id',
'keytitle' => 'name',

'options' => [],
'items' => null,

'class' => null,
'placeholder' => 'Выберите из списка',
])

<?php

$model = $attributes->whereStartsWith('wire:model')->first();
?>

<div wire:ignore class="{{ $class }}">
	<style>
		.ts-dropdown,
		.ts-dropdown.form-control,
		.ts-dropdown.form-select {
			z-index: 100;
		}
	</style>

	<?php if ($label): ?>
		<label class="form-label @if($required) {{ 'required' }} @endif">{{ $label }}</label>
	<?php endif; ?>

	<select class="form-select"
		{{ $attributes }}


		x-data="{
		tomSelectInstance: null,
		options: {{ collect($options) }},
		items: [{{ $items }}],
 
		renderTemplate(data, escape) {

			@if($slot)
			return `{{ addslashes($slot) }}`;
			@endif

			return `<div><span class='dropdown-item-indicator'></span>${escape(data.{{ $keytitle }})}</div>`;
		}
	}"
		x-init="tomSelectInstance = new TomSelect($refs.input, {
        copyClassesToDropdown: false,
        controlInput: '<input>',
        
		valueField: '{{ $keyvalue }}',
		labelField: '{{ $keytitle }}',
		searchField: '{{ $keytitle }}',

		options: options,

		// items: items,
		@if (! empty($items) && ! $attributes->has('multiple'))
			placeholder: undefined,
		@endif

		render: {
			option: renderTemplate,
			item: renderTemplate
		}    		
	});"
		x-ref="input"
		x-cloak
		placeholder="{{ $placeholder }}">
		@foreach($options as $option)
		<option value="{{ $option[$keyvalue] }}">{{ $option[$keytitle] }}</option>
		@endforeach
	</select>
</div>