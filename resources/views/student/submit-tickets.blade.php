@section('title', 'Submit Tickets')
<x-student-layout>
    <main class="ml-[335px] max-2xl:ml-auto p-4">
        <h2 class="max-2xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            SUBMIT TICKETS
        </h2>
        <br>

        <div class="p-6 max-md:p-0 space-y-10">
            <form action="" class="p-6 rounded border-2 border-gray shadow-md space-y-4">
                <!-- Subject -->
                <div class="mt-1">
                    <label for="" class="block font-medium">Subject</label>
                    <input type="text" name="" class="w-full mt-1 p-2 border border-gray rounded">
                </div>

                <!-- Category -->
                <div class="mt-1">
                    <label for="" class="block font-medium">Category</label>
                    <select name="" id="" class="w-full max-sm:text-sm mt-1 p-2 border border-gray rounded">
                        <option value="" disabled selected>-- Choose one --</option>
                        <option value="">1st Category</option>
                    </select>
                </div>

                <!-- State your concern -->
                <div class="mt-1">
                    <label for="" class="block font-medium">Description</label>
                    <textarea name="" id="" rows="10"
                        class="w-full mt-1 p-2 border border-gray rounded resize-none"></textarea>
                </div>

                <!-- Submit button -->
                <button type="submit"
                    class="bg-secondary hover:bg-primary text-primary tracking-widest hover:text-secondary px-4 py-2 rounded duration-200">
                    SUBMIT
                </button>
            </form>
        </div>
    </main>
</x-student-layout>