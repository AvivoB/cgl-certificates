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
                                <td class="px-6 py-4 flex flex-row">
                                    <a href="{{ route('certificates.showCertficate', $certificate->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg fill="none" class="w-5 mr-3" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                          </svg>
                                        Download
                                    </a>
            
                                    <form action="{{ route('certificates.destroy', $certificate->id)}}" method="post" class="w-full">
                                        @csrf
                                        @method('DELETE')
                                        {{-- <button  href="{{ route('certificates.destroy', $certificate->id) }}" class="block px-4 py-2 text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white w-full text-left">Delete</button> --}}
                                        <button type="submit" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                            <svg fill="none" class="w-5 mr-3" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                            </svg>
                                            Delete
                                        </button>
                                      </form>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
