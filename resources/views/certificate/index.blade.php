<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('List of Certficates') }}
        </h2>


    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 ">
                {{-- Table certificate --}}
                <div class="relative overflow-x-auto overflow-y-hidden sm:rounded-lg min-h-screen">
                    <div class="flex items-center justify-between pb-4">
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" id="table-search" class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 outline-0 focus:ring-offset-0" placeholder="Search for a certificate number or a client">
                        </div>
                        <div>
                            <a href="{{ route('certificates.create') }}" class="text-white bg-indigo-500 hover:bg-indigo-700 font-medium rounded-lg text-sm px-4 py-2.5">Create certificate</a>
                        </div>
                    </div>
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 overflow-y-hidden">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Certificate number
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Customer
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Created at
                                </th>
                                {{-- <th scope="col" class="px-6 py-3">
                                    With qr code
                                </th> --}}
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($certificates as $certificate)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 overflow-y-hidden">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    #000{{ $certificate->id }}
                                </th>
                                <td class="px-6 py-4">
                                    <a href="{{ route('customers.show', $certificate->customer->id) }}">{{ $certificate->customer->name }}</a>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $certificate->created_at }}
                                </td>
                                {{-- <td class="px-6 py-4">
                                    @if($certificate->qrcode === 1)
                                    <span class="bg-green-100 text-green-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Yes</span>
                                    @else
                                    <span class="bg-red-100 text-red-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">No</span>
                                    @endif
                                </td> --}}
                                <td class="px-6 py-4">
                                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown-certificate-{{ $certificate->id }}" class="text-white bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                                        Options 
                                        <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div id="dropdown-certificate-{{ $certificate->id }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                        {{-- <li>
                                            <a href="{{ route('certificates.showLabel', $certificate->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">View label</a>
                                        </li> --}}
                                        <li>
                                            <a href="{{ route('certificates.showCertficate', $certificate->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">View certificate</a>
                                        </li>
                                        {{-- <li>
                                            <a href="{{ route('certificates.edit', $certificate->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li> --}}
                                        {{-- <li>
                                            <a href="{{ route('certificates.edit', $certificate->id) }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Re-send certificate</a>
                                        </li> --}}
                                        <li>
                                            <form action="{{ route('certificates.destroy', $certificate->id)}}" method="post" class="w-full">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" href="{{ route('certificates.destroy', $certificate->id) }}" class="block px-4 py-2 text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white w-full text-left">Delete</button>
                                              </form>
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
