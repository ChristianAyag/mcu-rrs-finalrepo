<div class="flex items-center">
    <!-- Logo -->
    <img src="{{ asset('images/MCU-ERBLOGO.png') }}" 
         alt="MCUERB Logo" 
         class="ml-7 w-1.5/5 h-20">

    <!-- Left text -->
    <div class="flex-1 px-2 ml-2 mt-2 text-left">
        <p class="text-xs font-arial">{{ $slot }}</p>
    </div>
</div>