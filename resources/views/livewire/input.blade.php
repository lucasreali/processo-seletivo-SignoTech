<div class="flex flex-col gap-1">  
    @if($label)
        <label for="{{ $name }}">
            {{ $label }}
        </label>
    @endif

    <input 
        type="{{ $type }}" 
        id="{{ $id }}"
        name="{{ $name }}"
        wire:model="value"
        class="border-1 rounded-md border-gray-400 py-1 px-2 shadow outline-0"
        placeholder="{{ $placeholder }}"
        @if($required) required @endif
    >

    @error($name)
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
