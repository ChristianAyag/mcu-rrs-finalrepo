@section('title', 'Submit Tickets')
<x-student-layout>
    <main class="xl:ml-[335px] max-xl:ml-auto p-4">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            SUBMIT TICKETS
        </h2>
        <br>

        <div class="p-6 max-md:p-0 space-y-10">
            <form action="{{ route('student.tickets.store') }}" method="POST" class="p-6 rounded border-2 border-gray shadow-md space-y-4">
                @csrf

                <!-- Hidden: current user -->
                <input type="hidden" name="User_ID" value="{{ auth()->user()->user_ID }}">

                <!-- Subject -->
                <div class="mt-1">
                    <label for="subject" class="block font-medium">Subject</label>
                    <input type="text" id="subject" name="Ticket_Subject" class="w-full mt-1 p-2 border border-gray rounded" required>
                </div>

                <!-- Category -->
                <div class="mt-1">
                    <label for="category" class="block font-medium">Category</label>
                    <select name="User_Concern" id="category" class="w-full max-sm:text-sm mt-1 p-2 border border-gray rounded" required>
                        <option value="" disabled selected>-- Choose one --</option>
                        <option value="Applying for Amendments">Applying for Amendments</option>
                        <option value="Research Review Update">Research Review Update</option>
                        <option value="Clarification Inquiries">Clarification Inquiries</option>
                    </select>
                </div>

                <!-- Description -->
                <div class="mt-1">
                    <label for="description" class="block font-medium">Description</label>
                    <textarea name="Ticket_Description" id="description" rows="10"
                        class="w-full mt-1 p-2 border border-gray rounded resize-none" required></textarea>
                </div>

                <!-- Submit button -->
                <button type="submit"
                    class="bg-secondary hover:bg-primary text-primary tracking-widest hover:text-secondary px-4 py-2 rounded duration-200">
                    SUBMIT
                </button>
            </form>
        </div>

        @if(session('success'))
            <script>
                alert("✅ {{ session('success') }}");
            </script>
        @endif
    </main>
</x-student-layout>