@extends('admin.layouts.app')

@section('content')
    {{-- Page Title Start --}}
    <div class="flex justify-between items-center mb-6">
        <h4 class="text-slate-900 dark:text-slate-200 text-lg font-medium">Service Create</h4>

        <div class="md:flex hidden items-center gap-2.5 text-sm font-semibold">
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.dashboard') }}" class="text-sm font-medium text-slate-700 dark:text-slate-400">Samay
                    Shakti Astrology</a>
            </div>

            <div class="flex items-center gap-2">
                <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400">Service</a>
            </div>

            <div class="flex items-center gap-2">
                <i class="mgc_right_line text-lg flex-shrink-0 text-slate-400 rtl:rotate-180"></i>
                <a href="#" class="text-sm font-medium text-slate-700 dark:text-slate-400"
                    aria-current="page">Create</a>
            </div>
        </div>
    </div>
    {{-- Page Title End --}}

    {{-- Flash Messages --}}
    @if (Session::has('success'))
        <div class="mb-4 p-4 bg-green-100 border border-green-400 text-green-700 rounded-lg">
            <p>{{ Session::get('success') }}</p>
        </div>
    @endif

    @if (Session::has('error'))
        <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded-lg">
            <p>{{ Session::get('error') }}</p>
        </div>
    @endif

    <div class="row">
        <div class="card shadow p-4">
            <div class="card-body" style="position: relative;">
                {{-- Loading Overlay --}}
                <div id="loadingOverlay" class="absolute inset-0 bg-white bg-opacity-90 flex flex-col items-center justify-center z-50 rounded-lg" style="display: none;">
                    <div class="animate-spin rounded-full h-12 w-12 border-b-2 border-primary mb-4"></div>
                    <p class="text-gray-700 font-medium">Uploading file, please wait...</p>
                    <p class="text-sm text-gray-500 mt-2">Do not close or refresh this page</p>
                </div>

                <form id="serviceForm" action="{{route('admin.service.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="service" class="text-gray-800 text-sm font-medium inline-block mb-2">
                            Service Name
                        </label>
                        <input type="text" class="form-input @error('service') border-danger @enderror" id="service" name="service" aria-describedby="serviceHelp"
                            placeholder="Enter Service Name" value="{{ old('service') }}">
                        @error('service')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="service_hn" class="text-gray-800 text-sm font-medium inline-block mb-2">
                            Service Name in Hindi <a href="https://translate.google.com/?hl=en&sl=en&tl=hi&op=translate" target="_blank" class="text-primary">(For Hindi Typing)</a>
                        </label>
                        <input type="text" class="form-input @error('service_hn') border-danger @enderror" id="service_hn" name="service_hn" aria-describedby="serviceHelp"
                            placeholder="Enter Service Name in Hindi" value="{{ old('service_hn') }}">
                        @error('service_hn')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="serviceOrder" class="text-gray-800 text-sm font-medium inline-block mb-2">
                            Service Order
                        </label>
                        <input type="number" class="form-input @error('service_order') border-danger @enderror" id="serviceOrder" name="service_order"
                            aria-describedby="serviceHelp" placeholder="Enter Service Order" value="{{ old('service_order') }}">
                        @error('service_order')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="serviceFile" class="text-gray-800 text-sm font-medium inline-block mb-2">Choose
                            Service</label>
                        <input type="file" class="form-input @error('service_file') border border-danger p-3 @enderror" id="serviceFile" name="service_file"
                            accept="image/jpg,image/jpeg,image/png,image/webp">
                        @error('service_file')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                        <div id="imagePreview" class="mt-4" style="display: none;">
                            <img id="previewImage" src="" alt="Preview"
                                class="max-w-full h-auto rounded-lg shadow-md" style="max-height: 400px;">
                        </div>
                    </div>
                    <button type="submit" id="submitBtn" class="btn bg-primary text-white">
                        <span id="submitText">Submit</span>
                        <span id="submitSpinner" class="hidden">
                            <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                            </svg>
                            Uploading...
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Image preview functionality
        document.getElementById('serviceFile').addEventListener('change', function(e) {
            const file = e.target.files[0];
            const previewContainer = document.getElementById('imagePreview');
            const previewImage = document.getElementById('previewImage');

            if (file) {
                // Check if file is an image
                if (file.type.startsWith('image/')) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        previewContainer.style.display = 'block';
                    };

                    reader.readAsDataURL(file);
                } else {
                    alert('Please select a valid image file.');
                    previewContainer.style.display = 'none';
                }
            } else {
                previewContainer.style.display = 'none';
            }
        });

        // Form submission with progress indicator
        const serviceForm = document.getElementById('serviceForm');
        
        /**
         * Why remove event listener after submission?
         * 1. Prevents memory leaks - Event listeners hold references to DOM elements and functions
         * 2. Avoids duplicate handlers - If form doesn't reload, prevents multiple handlers
         * 3. Clean state management - Ensures handler only runs once per submission
         * 4. Best practice - Always clean up event listeners when they're no longer needed
         * 
         * Note: In this case, page reloads after submission, so listener is automatically cleaned.
         * However, removing it explicitly is still good practice for edge cases and code clarity.
         */
        const handleFormSubmit = function(e) {
            const form = this;
            const loadingOverlay = document.getElementById('loadingOverlay');
            const submitBtn = document.getElementById('submitBtn');
            const submitText = document.getElementById('submitText');
            const submitSpinner = document.getElementById('submitSpinner');

            // Prevent form submission if file is not selected
            const fileInput = document.getElementById('serviceFile');
            if (!fileInput.files || fileInput.files.length === 0) {
                e.preventDefault();
                return false;
            }

            // Show loading overlay
            loadingOverlay.style.display = 'flex';
            
            // Disable submit button and show spinner
            submitBtn.disabled = true;
            submitText.classList.add('hidden');
            submitSpinner.classList.remove('hidden');

            // Remove event listener after form submission starts
            // This prevents memory leaks and ensures clean state
            serviceForm.removeEventListener('submit', handleFormSubmit);

            // Form will submit normally, overlay will remain until page reloads
        };

        serviceForm.addEventListener('submit', handleFormSubmit);
    </script>
@endsection
