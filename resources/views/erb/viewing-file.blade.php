@section('title','Viewing File')
<x-erb-layout>
    <main class="xl:ml-[335px] max-xl:ml-auto p-4 max-md:p-2">
        <h2 class="max-xl:hidden text-left bg-[#f2f2f2] shadow-lg p-[35px] rounded-[30px] font-medium text-[28px]">
            VIEWING FILES
        </h2>

        <div class="w-full mx-auto my-8 px-4 py-6 bg-white rounded-lg border-2 border-gray">
            <h1 class="text-primary text-2xl max-md:text-lg font-semibold mb-4">List of Submitted Files</h1>

            <h2 class="text-primary text-xl max-md:text-base font-medium">
                Reviewer: 
                <span class="font-semibold">
                    {{ $reviewer->user_Fname ?? 'Unknown' }} {{ $reviewer->user_Lname ?? '' }}
                </span>
            </h2>

            <div class="mt-6 space-y-4 max-h-80 overflow-y-auto">
                @forelse($files as $file)
                    <div class="p-3 border border-darkgray bg-lightgray flex justify-between items-center rounded-lg">
                        <div>
                            <h3 class="font-medium">
                                {{ $file->form->form_name ?? 'No Form Name' }}
                            </h3>
                            <p class="text-sm text-gray-600">
                                {{ $file->file_name }}
                            </p>
                        </div>

                        <div>
                            <a href="{{ asset('storage/' . $file->file_path) }}" target="_blank">
                                <button type="button" class="bg-secondary hover:bg-primary text-primary hover:text-secondary px-3 py-1.5 uppercase tracking-widest rounded-md duration-200">
                                    View
                                </button>
                            </a>
                        </div>
                    </div>
                @empty
                    <p class="text-gray-500 italic">No uploaded files found for this reviewer.</p>
                @endforelse
            </div>
        </div>

        <div class="mt-8">
            <a href="{{ route('erb.view-reviews') }}"
                class="bg-secondary hover:bg-primary text-lg max-xl:text-base text-primary hover:text-secondary uppercase tracking-widest px-4 py-2 rounded-md duration-200">
                Back
            </a>
        </div>
    </main>
</x-erb-layout>
