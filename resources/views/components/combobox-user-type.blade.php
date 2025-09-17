@props(['disabled' => false])

<select @disabled($disabled) {{ $attributes->merge(['class' => 'rounded-md border-gray-300']) }}>
    <option value="" disabled selected>-- Choose type of user --</option>
    <option value="Reviewer">Reviewer</option>
    <option value="IACUC Admin">IACUC Admin</option>
    <option value="ERB Admin">ERB Admin</option>
    <option value="Superadmin">Superadmin</option>
</select>