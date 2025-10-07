@props(['disabled' => false])

<select @disabled($disabled) {{ $attributes->merge(['class' => 'rounded-md']) }}>
    <option value="" disabled selected>-- Select College --</option>
    <option value="cas">College of Arts and Sciences</option>
    <option value="ioe">Institute of Education</option>
    <option value="sbm">School of Business and Management</option>
    <option value="medical">Medical Related Courses</option>
</select>