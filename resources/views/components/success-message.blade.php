{{-- @if (session('success-message'))
<div x-data="{open: true}" x-show="open" x-init="setTimeout(() => open = false, 3000)"
    class="fixed z-[500] right-4 max-w-xl p-6 mx-auto bg-white border-t-4 border-blue-500 rounded-md shadow dark:border-blue-400 dark:bg-gray-800"
    role="alert">
    <div class="flex items-center">
        <div>

            <p class="text-sm text-gray-500 dark:text-gray-400">
                {{ session('success-message') }}
            </p>
        </div>
    </div>
</div>
@endif --}}
@if (session('success-message'))
    <div x-data="{open: true}" x-show="open" x-init="setTimeout(() => open = false, 3000)" aria-live="assertive" class="fixed z-[500] right-4 inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start">
        <div class="w-full flex flex-col items-center space-y-4 sm:items-end">
        <div class="max-w-sm w-full bg-green-100 shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="p-4">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                <!-- Heroicon name: outline/check-circle -->
                <svg class="h-6 w-6 text-green-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                </div>
                <div class="ml-3 w-0 flex-1 pt-0.5">
                <p class="text-sm font-medium text-gray-900">{{ session('success-message') }}</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endif
@if (session('danger-message'))
    <div x-data="{open: true}" x-show="open" x-init="setTimeout(() => open = false, 3000)" aria-live="assertive" class="fixed z-[500] right-4 inset-0 flex items-end px-4 py-6 pointer-events-none sm:p-6 sm:items-start">
        <div class="w-full flex flex-col items-center space-y-4 sm:items-end">
        <div class="max-w-sm w-full bg-red-100 shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5 overflow-hidden">
            <div class="p-4">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                <!-- Heroicon name: outline/check-circle -->
                <svg class="h-6 w-6 text-red-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                </div>
                <div class="ml-3 w-0 flex-1 pt-0.5">
                <p class="text-sm font-medium text-gray-900">{{ session('danger-message') }}</p>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@endif