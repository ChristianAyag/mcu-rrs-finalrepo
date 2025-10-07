<button {{ $attributes->merge([
    'type' => 'submit',
    'class' => 'inline-flex items-center px-4 py-2 bg-orangeyellow text-primary hover:bg-primary hover:text-orangeyellow
                rounded-md uppercase tracking-widest focus:outline-none transition ease-in-out duration-200'
]) }}>
    {{ $slot }}
</button>