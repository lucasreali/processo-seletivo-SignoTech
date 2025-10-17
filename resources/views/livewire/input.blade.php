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
        class="border rounded-md border-gray-200 py-1 px-2 shadow outline-none"
        placeholder="{{ $placeholder }}"
        @if($required) required @endif
    >

    @error($name)
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
