<div x-show="activeTab === 'tab1'" class="py-4">
    <h1 class="text-2xl font-bold text-gray-800">
        {{ $seller->name }}
    </h1>
    <h1 class="text-2xl font-bold text-gray-800">
        {{ $seller->email }}
    </h1>
    <h1 class="text-2xl font-bold text-gray-800">
        id number: {{ $seller->id_number ?? "data not provided"}}
    </h1>
    <h1 class="text-2xl font-bold text-gray-800">
        phone number: {{ $seller->phone_number ?? "data not provided"}}
    </h1>
    <h1 class="text-2xl font-bold text-gray-800">
        address: {{ $seller->address ?? "data not provided"}}
    </h1>
    <h1 class="text-2xl font-bold text-gray-800">
        campus role: {{ $seller->campus_role ?? "data not provided"}}
    </h1>
</div>