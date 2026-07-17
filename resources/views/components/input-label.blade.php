@props(['value'])

<label {{ $attributes->merge(['class' => 'block text-lg font-bold font-head text-purple-700']) }}>
    {{ $value ?? $slot }}
</label>
