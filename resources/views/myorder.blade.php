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
                    <p>Order <span>#{{ $order['id']}}</span></p>
                        <p>Placed on 05 Nov 2023</p>
                    </div>
                   @foreach($order['order_products'] as $item )
                    <div class="flex justify-between p-4">
                            <img class=" h-24" src="/admin/assets/productimage/{{  $item['product']['image'] }}" alt="">
                            <h4>{{  $item['product']['name'] }}</h4>
                            <p>Quantity <span class="text-red-300">{{  $item['quantity'] }}</span></p>
                            <button href="" class="h-8 px-2 bg-blue-600 text-white font-semibold rounded-sm items-center justify-center hover:bg-blue-700">Delivered</button>
                            <h5>Delivered on 05 Nov 2023</h5>
                    </div>
                   @endforeach
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
