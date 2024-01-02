<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Update label ') }} {{ $label->label_num }}
        </h2>


    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 ">
                {{-- Form to create certificate --}}
                @if ($errors->any())
                <div class="p-4 my-3 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-gray-800 dark:text-red-400" role="alert">
                    Please fill in all the fields
                </div>
                @endif

                
                <form action="{{ route('labels.update', $label->id) }}" method="post" enctype="multipart/form-data" id="image-upload">
                    @csrf

                    <div>
                        <h2 class="text-lg text-blue-700">Update the label information</h2>
                    </div>
                    <div class="py-4 flex flex-wrap">
                        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                            <label for="shape_stone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Shape of the stone</label>
                            <input type="text" id="shape_stone" value="{{ $labelData->shape_stone }}" name="shape_stone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>
                        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                            <label for="weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight</label>
                            <input type="text" id="weight" value="{{ $labelData->weight }}" name="weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>
                        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                            <label for="color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
                            <input type="text" id="color" value="{{ $labelData->color }}" name="color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>
                        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                            <label for="clarity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clarity</label>
                            <input type="text" id="clarity" value="{{ $labelData->clarity }}" name="clarity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>
                    </div>
                    <div>
                        <button type="submit" class="text-white bg-green-500 hover:bg-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                            Update label
                            <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
