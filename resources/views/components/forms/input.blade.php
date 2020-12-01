<div>
    <label class="mt-2 block">
        <span class="text-gray-700">{{ $label }}</span>
        <input name="{{ $name }}" class="mt-1 block w-full" type="{{ $type }}"/>
        @error($name)
            <p class="text-xs text-alert mt-1">{{ $message }}</p>
        @enderror
    </label>
</div>
