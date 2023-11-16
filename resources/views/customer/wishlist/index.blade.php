<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if($wishlistItems->isEmpty())
            <p>Your wishlist is empty.</p>
            @else
            <ul>
                @foreach($wishlistItems as $wishlistItem)
                <li>{{ $wishlistItem->product->product_name }} - {{ $wishlistItem->product->price }}</li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
</x-app-layout>