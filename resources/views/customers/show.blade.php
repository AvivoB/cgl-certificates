<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
        </h2>


    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 ">
                <div class="w-full">
                    <div id="selected-customer" class="p-4 my-4 rounded-md border-2 border-blue-200 bg-blue-50">
                        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 w-64">Customer N° #000{{ $customer->id }}</span>
                        <div class="font-bold">Name : <span id="client_name" class="font-medium">{{ $customer->name }}</span></div>
                        <div class="font-bold">E-mail : <span id="email" class="font-medium">{{ $customer->email }}</span></div>
                        <div class="font-bold">Phone : <span id="phone" class="font-medium">{{ $customer->phone }}</span></div>
                        <div class="font-bold">Address : <span id="address" class="font-medium">{{ $customer->address }} {{ $customer->city }}, {{ $customer->country }}</span></div>
                        <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
