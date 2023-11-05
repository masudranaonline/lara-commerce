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
            <div class=" border-bottom p-6 bg-white shadow-sm sm:rounded mt-2">
                <div class=" border-b-2">
                    <p>Order <span>#4654654654654</span></p>
                    <p>Placed on 05 Nov 2023</p>
                </div>
                <div class="flex justify-between p-4">
                    <img class=" h-24" src="frontend/asset/img/bag.jpg" alt="">
                    <h4>Lorem ipsum dolor sit amet.</h4>
                    <p>Quantity <span>1</span></p>
                    <a href="">Delivered</a>
                    <h5>Delivered on 05 Nov 2023</h5>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
