@props(['disabled' => false])

<select @disabled($disabled) {{ $attributes->merge(['class' => 'w-50 border-gray-300 mt-0']) }}>
    <option value="" disabled selected>-- Choose one --</option>
    <option value="ERB">ERB</option>
    <option value="IACUC">IACUC</option>
    <option value="ERB/IACUC">ERB/IACUC</option>
</select>