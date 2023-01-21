<div>
    <div class="flex flex-col lg:flex-row py-6">
        <div class="relative w-full">
            <div class="relative">
                <input id="form-search" wire:model.debounce.500ms="searchCustomers" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 pl-9" type="search" placeholder="Search customer...">
                <button class="absolute inset-0 right-auto group" type="submit" aria-label="Search">
                    <svg class="w-4 h-4 shrink-0 fill-current text-slate-400 group-hover:text-slate-500 ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                        <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                    </svg>
                </button>
            </div>

            @if($searchCustomers != '')
            <div class="w-full top-10 z-10 absolute bg-white shadow-lg rounded-sm border border-slate-200" id="list-company">
                @foreach ($customers as $customer)
                <div wire:click="selectCustomer({{ $customer->id }})" class="item-company flex flex-row items-center p-4 text-slate-900 text-sm border-b-2 border-b-slate-100 hover:bg-indigo-100 hover:border-l-4 hover:border-l-indigo-500">
                    <div class="w-1/4 name uppercase font-bold">{{ $customer->name }}</div>
                    <div class="w-1/4 email">{{ $customer->email }}</div>
                    <div class="w-1/4 phone uppercase">{{ $customer->phone }}</div>
                    <div class="w-1/4 address">{{ $customer->address }} {{ $customer->city }}, {{ $customer->country }}</div>
                </div>
                @endforeach
            </div>
            @endif()

        </div>
        <div class="w-full lg:w-1/4 py-3 lg:py-0 flex lg:justify-end">
            <!-- displayform -->
            <button wire:click="displayFormCreateCustomer()" class="flex items-center block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z"></path>
                </svg>
                Add new customer
            </button>
        </div>
    </div>
    <div>
        @if($displayCreateCustomer)
        <div class="flex flex-wrap">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            <div class="py-1 pr-2 w-1/2">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                <input type="text" name="name" wire:model="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
            </div>
            <div class="py-1 pl-2 w-1/2">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input type="email" wire:model="email" placeholder="name@company.com" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
            </div>
            <div class="py-1 pr-2 w-1/2">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Phone</label>
                <input type="text" name="phone" wire:model="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
            </div>
            <div class="py-1 pl-2 w-1/2">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                <input type="text" name="address" wire:model="address" id="address" placeholder="Address" class="my-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" >
            </div>
            <div class="flex flex-row w-1/2">
                <input type="text" name="city" wire:model="city" id="city" placeholder="City" class="w-4/5 m-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                <x-country-list/>
            </div>
            
            <div class="w-full">
                <button type="button" wire:click="save" class="mt-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create customer</button>
            </div>
        </div>
        @endif
    </div>
    @if($userSelected)
    <div id="selected-customer" class="p-4 my-4 rounded-md border-2 border-green-200 bg-green-50">
        <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300 w-64">Selected customer</span>
        <div class="font-bold">Name : <span id="client_name" class="font-medium">{{ $userSelected->name }}</span></div>
        <div class="font-bold">E-mail : <span id="email" class="font-medium">{{ $userSelected->email }}</span></div>
        <div class="font-bold">Phone : <span id="phone" class="font-medium">{{ $userSelected->phone }}</span></div>
        <div class="font-bold">Address : <span id="address" class="font-medium">{{ $userSelected->address }} {{ $userSelected->city }}, {{ $userSelected->country }}</span></div>
        <input type="hidden" name="customer_id" value="{{ $userSelected->id }}">
    </div>
    @endif()
    
    
</div>

