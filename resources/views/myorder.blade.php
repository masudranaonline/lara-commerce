<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("My Orders!") }}
                </div>

            </div>
            @foreach ($orders as $order )
                <div class=" border-bottom p-6 bg-white shadow-sm sm:rounded mt-2">
                    <div class=" border-b-2">
                    <p>Order <span>#{{ $order->id}}</span></p>
                        <p>Placed on 05 Nov 2023</p>
                    </div>
                   @if ($order->order_product_mapping )
                    <div class="flex justify-between p-4">
                        {{-- @foreach ($order_product_mapping as $product) --}}

                            <img class=" h-24" src="/admin/assets/productimage/" alt="">
                            <h4>.{{  $order->order_product_mapping->product->name }}</h4>
                            <p>Quantity <span class="text-red-300">{{ $order->order_product_mapping->quantity }}</span></p>
                            <a href="" class="border bg-red-100 rounded-lg h-8 p-1 text-sm">Delivered</a>
                            <h5>Delivered on 05 Nov 2023</h5>

                        {{-- @endfore   ach --}}
                    </div>
                   @endif
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
