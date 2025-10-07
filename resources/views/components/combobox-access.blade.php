@props(['disabled' => false])

<select @disabled($disabled) {{ $attributes->merge(['class' => 'w-50 border-gray-300 mt-0']) }}>
    <option value="" disabled selected>-- Choose role --</option>
    <option value="admin" name="role">Admin</option>
    <option value="superadmin" name="role">Superadmin</option>
    <option value="reviewer" name="role">Reviewer</option>
</select>