@section('title', 'Submitted Documents')
<x-erb-layout>
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            SUBMITTED DOCUMENTS
        </h2>

        <div class="w-full mx-auto my-8 px-4 py-6 bg-white rounded-lg border-2 border-gray">
            <h1 class="text-primary text-2xl font-semibold mb-4">Submission Details</h1>
            <h2 class="text-primary text-xl font-medium">
                User: <span class="text-blue-600">{{ $piFiles->user_Fname }}</span>
            </h2>

            <div class="max-sm:text-sm mt-6 space-y-4 h-64 overflow-y-auto">
                @forelse($piFiles->researchFiles as $file)
                    <div class="p-3 border border-darkgray bg-lightgray flex justify-between items-center rounded-lg">
                        <div>
                            <h3 class="font-medium text-lg">Form: {{ $file->form?->form_name ?? 'N/A' }}</h3>
                            <p class="text-gray-700">Document: {{ $file->file_name }}</p>
                            <p class="text-gray-500 text-sm">Submitted: {{ $file->submitted_at ?? 'N/A' }}</p>
                        </div>
                        <div class="right">
                            <a href="{{ asset('storage/' . $file->file_path) }}" target="_blank">
                                <button type="button" class="bg-secondary hover:bg-primary text-primary hover:text-secondary px-3 py-1.5 uppercase tracking-widest rounded-md duration-200">
                                    View
                                </button>
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500">No submitted documents found.</p>
                @endforelse
            </div>
        </div>

        <div class="mt-8">
            <a href="{{ url('/erb/research-records') }}"
                class="bg-secondary hover:bg-primary text-lg max-xl:text-base text-primary hover:text-secondary uppercase tracking-widest px-4 py-2 rounded-md duration-200">
                Back
            </a>
        </div>
    </main>
</x-erb-layout>
