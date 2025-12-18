@props(['type' => 'text'])

<div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
    <form 
        type="{{ $type }}" 
        {{ $attributes->merge([
            'class' => 'space-y-6'
        ]) }} >
        @csrf

        {{ $slot }}

    </form>
</div>