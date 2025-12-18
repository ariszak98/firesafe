@props(['type' => 'text'])

<label type="{{ $type }}" {{ $attributes->merge([
    'class' => 'block text-sm/6 font-medium text-gray-900'
    ])}} >
    {{ $slot }}
</label>