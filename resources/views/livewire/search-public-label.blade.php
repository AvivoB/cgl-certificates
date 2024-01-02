<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 ">
                {{-- Table certificate --}}
                <div class="relative overflow-x-auto overflow-y-hidden sm:rounded-lg min-h-screen">
                    <div class="flex items-center justify-between pb-4 w-full">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                            </div>
                            <input type="text" wire:model="search" id="table-search" class="w-full block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 outline-0 focus:ring-offset-0" placeholder="Search for a label number">
                        </div>
                    </div>
                    <div>
                        {{-- Afficher les résultats --}}
                        @if(!$isLoading)
                            <div>
                                @foreach($labels as $label)
                                    <div class="text-3xl py-12 text-green-400 text-center">We have found a result that matches your search.</div>
                                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 overflow-y-hidden">
                                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                            <tr>
                                                <th scope="col" class="px-6 py-3">
                                                    label number
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Created at
                                                </th>
                                                <th scope="col" class="px-6 py-3">
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($labels as $label)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600 overflow-y-hidden">
                                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                    {{ $label->label_num }}
                                                </th>
                                                <td class="px-6 py-4">
                                                    {{ Carbon\Carbon::parse($label->created_at)->format('d-m-Y') }}
                                                </td>
                                                <td class="px-6 py-4 flex flex-row">
                                                    <a href="{{ route('labels.showLabel', $label->id) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                        <svg fill="none" class="w-5 mr-3" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75l3 3m0 0l3-3m-3 3v-7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                          </svg>
                                                        Download
                                                    </a>               
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                @endforeach
                            </div>
                        @endif

                        @if($search == '')
                            <div class="text-3xl py-12 text-center">Search here for your label using the number</div>
                            <p>To find your label in our database, search by the number on the label.
                                <br>
                                As soon as a search result appears, you can download the label and check its conformity.</p>
                        @endif

                        @if($search != '' && empty($labels))
                            <div class="text-3xl text-red-400 py-12 text-center">No results found</div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
