<div class="flex items-center border">
    <!-- Logo -->
    <img src="{{ asset('images/MCU-ERBLOGO.png') }}" 
         alt="MCUERB Logo" 
         class="w-2/5 h-20 pb-4 border-r">

    <!-- Right text -->
    <div class="flex-1 px-2 text-right">
        <p class="text-sm font-sans">{{ $slot }}</p>
        <p class="text-sm font-sans">01/22/2025</p>
    </div>
</div>