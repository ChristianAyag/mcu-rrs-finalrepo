@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium mt-2 text-[15px] max-sm:text-[13px] text-[var(--primary)]']) }}>
    {{ $value ?? $slot }}
</label>