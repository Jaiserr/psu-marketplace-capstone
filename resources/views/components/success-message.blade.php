@if (session('success-message'))
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
@endif