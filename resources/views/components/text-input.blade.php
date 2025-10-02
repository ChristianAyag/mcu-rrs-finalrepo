@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'rounded-md border-gray hover:bg-gray duration-200']) }}>