<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $customer->name }}
        </h2>


    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 ">
                <div class="w-full">
                    <div class="p-4 rounded-md border-2 border-blue-200 bg-blue-50">
                        <span class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 w-64">Customer N° #000{{ $customer->id }}</span>
                        <div class="font-bold">Name : <span id="client_name" class="font-medium">{{ $customer->name }}</span></div>
                        <div class="font-bold">E-mail : <span id="email" class="font-medium">{{ $customer->email }}</span></div>
                        <div class="font-bold">Phone : <span id="phone" class="font-medium">{{ $customer->phone }}</span></div>
                        <div class="font-bold">Address : <span id="address" class="font-medium">{{ $customer->address }} {{ $customer->city }}, {{ $customer->country }}</span></div>
                        <input type="hidden" name="customer_id" value="{{ $customer->id }}">
                    </div>
                </div>
                <div class="relative overflow-x-auto overflow-y-hidden sm:rounded-lg min-h-screen pt-4">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 overflow-y-hidden">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Certificat number
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Created at
                                </th>
                                {{-- <th scope="col" class="px-6 py-3">
                                    With QR CODE
                                </th> --}}
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customer->certificates as $certificate)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 overflow-y-hidden">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    #000{{ $certificate->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ Carbon\Carbon::parse($certificate->created_at)->format('d-m-Y') }}
                                </td>
                                {{-- <td class="px-6 py-4">
                                    @if($certificate->qrcode === 1)
                                    <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Yes</span>
                                    @else
                                    <span class="bg-red-100 text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">No</span>
                                    @endif
                                </td> --}}
                                <td class="px-6 py-4">
                                    <button id="option-customer-{{ $certificate->id }}" data-dropdown-toggle="dropdown-customer-{{ $certificate->id }}" class="text-white bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                        Options 
                                        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdown-customer-{{ $certificate->id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Re-send certificate</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete</a>
                                        </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
