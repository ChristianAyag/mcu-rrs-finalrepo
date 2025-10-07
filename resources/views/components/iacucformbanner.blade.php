<div class="flex items-center mt-2">
    <!-- Logo -->
    <img src="{{ asset('images/MCU-ERBLOGO.png') }}" 
         alt="MCUERB Logo" 
         class="ml-7 w-1.5/5 h-20">

    <!-- Left text -->
    <div class="flex-1 px-2 ml-20 mt-4 text-left">
        <p class="text-sm font-arial font-bold">{{ $slot }}</p>
    </div>
</div>