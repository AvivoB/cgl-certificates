<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit certificate')  }} {{ $certificate->id }}
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

                
                <form action="{{ route('certificates.update', $certificate->id) }}" method="post" enctype="multipart/form-data" id="image-upload">
                    @csrf

                    <div>
                        <h2 class="text-lg text-blue-700">1. Edit the certificate information</h2>
                    </div>
                    <div>

                        
                        <div class="flex flex-row w-full px-2 py-3 items-center">
                            <label for="text_certificate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/4">Edit certificate type information</label>
                            <input type="text" id="text_certificate" name="text_certificate" value="{{ $dataCertificate->text_certificate }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>
                    
                        <h2 class="text-md text-center text-blue-700">Certificate Data</h2>
                        <div class="flex flex-wrap py-3">
                            <div class="flex flex-col w-1/2 lg:w-1/3 px-2">
                                <div class="w-1/2 flex flex-row items-center">
                                    <input type="text" value="{{ $dataCertificate->jewel_weight_title }}" id="jewel_weight_title" name="jewel_weight_title" class="bg-white w-24 border-0 border-b border-gray-900 mb-2 text-sm font-medium text-gray-900 dark:text-white block p-2.5 focus:ring-0">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight</label>
                                </div>
                                <input type="text" id="jewel_weight" value="{{ $dataCertificate->jewel_weight }}" name="jewel_weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                            </div>
                            <div class="flex flex-col w-1/2 lg:w-1/3 px-2">
                                <div class="w-1/2 flex flex-row items-center">
                                    <input type="text" id="diamond_weight_title" value="{{ $dataCertificate->diamond_weight_title }}" name="diamond_weight_title" class="bg-white w-24 border-0 border-b border-gray-900 mb-2 text-sm font-medium text-gray-900 dark:text-white block p-2.5 focus:ring-0">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight</label>
                                </div>
                                <input type="text" id="diamond_weight" value="{{ $dataCertificate->diamond_weight }}" name="diamond_weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                            </div>
                            <div class="flex flex-col w-1/2 lg:w-1/3 px-2">
                                <div class="w-1/2 flex flex-row items-center">
                                    <input type="text" id="gemstone_weight_title" value="{{ $dataCertificate->gemstone_weight_title }}" name="gemstone_weight_title" class="bg-white w-24 border-0 border-b border-gray-900 mb-2 text-sm font-medium text-gray-900 dark:text-white block p-2.5 focus:ring-0">
                                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Weight</label>
                                </div>
                                <input type="text" id="gemstone_weight" value="{{ $dataCertificate->gemstone_weight }}" name="gemstone_weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                            </div>
                        </div>
                        {{-- Fin diamond data --}}
                        {{-- center diamond --}}
                    
                        <div class="py-4">
                            <div class="w-1/2 flex flex-row items-center">
                                <h2 class="text-md text-center text-blue-700 pr-2">Center</h2>
                                <input type="text" id="center" name="center" value="{{ $dataCertificate->center }}" class="bg-white border-0 border-b border-blue-700 text-blue-700 text-md block p-2.5 focus:ring-0">
                            </div>
                            <div class="flex flex-wrap py-3">
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="center_cut_shape" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut and Shape</label>
                                    <input type="text" id="center_cut_shape" value="{{ $dataCertificate->center_cut_shape }}" name="center_cut_shape" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="total_weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Weight</label>
                                    <input type="text" id="total_weight" value="{{ $dataCertificate->total_weight }}" name="total_weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                                    <input type="text" id="quantity" value="{{ $dataCertificate->quantity }}" name="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="Cut/Pol/Sym" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut / Pol / Sym</label>
                                    <input type="text" id="Cut/Pol/Sym" value="{{ $dataCertificate->Cut }}" name="Cut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="Measurement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Measurement</label>
                                    <input type="text" id="Measurement" value="{{ $dataCertificate->Measurement }}"  name="Measurement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="Color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
                                    <input type="text" id="Color" name="Color" value="{{ $dataCertificate->Color }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="Clarity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clarity</label>
                                    <input type="text" id="Clarity" name="Clarity" value="{{ $dataCertificate->Clarity }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                            </div>
                        </div>
                        {{-- Fin center diamond --}}
                        {{-- 3) Other diamond --}}
                        <div class="py-4">
                            <div class="w-1/2 flex flex-row items-center">
                                <h2 class="text-md text-center text-blue-700 pr-2">Other</h2>
                                <input type="text" id="other_1" value="{{ $dataCertificate->other_1 }}" name="other_1" class="bg-white border-0 border-b border-blue-700 text-blue-700 text-md block p-2.5 focus:ring-0">
                            </div>
                            <div class="flex flex-wrap py-3">
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_1_cut_and_shape" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut and Shape</label>
                                    <input type="text" id="other_1_cut_and_shape" value="{{ $dataCertificate->other_1_cut_and_shape }}" name="other_1_cut_and_shape" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_1_total_weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Weight</label>
                                    <input type="text" id="other_1_total_weight" value="{{ $dataCertificate->other_1_total_weight }}" name="other_1_total_weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_1_quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                                    <input type="text" id="other_1_quantity" value="{{ $dataCertificate->other_1_quantity }}" name="other_1_quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_1_Cut/Pol/Sym" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut / Pol / Sym</label>
                                    <input type="text" id="other_1_Cut/Pol/Sym" value="{{ $dataCertificate->other_1_Cut }}" name="other_1_Cut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_1_Color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
                                    <input type="text" id="other_1_Color" value="{{ $dataCertificate->other_1_Color }}" name="other_1_Color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_1_Clarity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clarity</label>
                                    <input type="text" id="other_1_Clarity" value="{{ $dataCertificate->other_1_Clarity }}" name="other_1_Clarity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                            </div>
                        </div>
                        {{-- Fin 3) Other diamond --}}
                        {{-- 2) Other diamond --}}
                        <div class="py-4">
                            <div class="w-1/2 flex flex-row items-center">
                                <h2 class="text-md text-center text-blue-700 pr-2">Other</h2>
                                <input type="text" id="other_2" name="other_2" value="{{ $dataCertificate->other_2 }}" class="bg-white border-0 border-b border-blue-700 text-blue-700 text-md block p-2.5 focus:ring-0">
                            </div>
                            <div class="flex flex-wrap py-3">
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_2_cut_and_shape" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut and Shape</label>
                                    <input type="text" id="other_2_cut_and_shape" value="{{ $dataCertificate->other_2_cut_and_shape }}" name="other_2_cut_and_shape" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_2_total_weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Weight</label>
                                    <input type="text" id="other_2_total_weight" value="{{ $dataCertificate->other_2_total_weight }}" name="other_2_total_weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_2_quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                                    <input type="text" id="other_2_quantity" value="{{ $dataCertificate->other_2_quantity }}" name="other_2_quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_2_Cut/Pol/Sym" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut / Pol / Sym</label>
                                    <input type="text" id="other_2_Cut/Pol/Sym" value="{{ $dataCertificate->other_2_Cut }}" name="other_2_Cut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_2_Color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
                                    <input type="text" id="other_2_Color" value="{{ $dataCertificate->other_2_Color }}" name="other_2_Color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_2_Clarity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clarity</label>
                                    <input type="text" id="other_2_Clarity" value="{{ $dataCertificate->other_2_Clarity }}" name="other_2_Clarity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                            </div>
                        </div>
                        {{-- Fin 2) Other diamond --}}
                        <div class="py-4">
                            <div class="w-1/2 flex flex-row items-center">
                                <h2 class="text-md text-center text-blue-700 pr-2">Other</h2>
                                <input type="text" id="other_3" value="{{ $dataCertificate->other_3 }}" name="other_3" class="bg-white border-0 border-b border-blue-700 text-blue-700 text-md block p-2.5 focus:ring-0">
                            </div>
                            <div class="flex flex-wrap py-3">
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_3_cut_and_shape" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut and Shape</label>
                                    <input type="text" id="other_3_cut_and_shape" value="{{ $dataCertificate->other_3_cut_and_shape }}" name="other_3_cut_and_shape" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_3_total_weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Weight</label>
                                    <input type="text" id="other_3_total_weight" value="{{ $dataCertificate->other_3_total_weight }}" name="other_3_total_weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_3_quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
                                    <input type="text" id="other_3_quantity" value="{{ $dataCertificate->other_3_quantity }}" name="other_3_quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_3_Cut/Pol/Sym" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut / Pol / Sym</label>
                                    <input type="text" id="other_3_Cut/Pol/Sym" value="{{ $dataCertificate->other_3_Cut }}" name="other_3_Cut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_3_Color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
                                    <input type="text" id="other_3_Color" value="{{ $dataCertificate->other_3_Color }}" name="other_3_Color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                                <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
                                    <label for="other_3_Clarity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clarity</label>
                                    <input type="text" id="other_3_Clarity" value="{{ $dataCertificate->other_3_Clarity }}" name="other_3_Clarity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                </div>
                            </div>
                        </div>
                        <div class="py4">
                            <div class="flex flex-row w-full px-2 py-3 items-center">
                                <label for="text_certificate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white w-1/4">Est price</label>
                                <input type="text" id="est_price" value="{{ $dataCertificate->est_price }}" name="est_price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                            </div>
                        </div>
                        {{-- Fin 3) Other diamond --}}
                    </div>

                    <div class="pt-6">
                        <h2 class="text-lg text-blue-700">3. Update photos to the certificate</h2>
                    </div>
                    {{-- Image Upload --}}
                    <div class="flex items-center justify-center w-full py-6">
                        <div x-data="dataFileDnD()" class="relative flex flex-col p-4 text-gray-400 border border-gray-200 rounded-lg w-full">
                            <div x-ref="dnd"
                                class="relative flex flex-col text-gray-400 border border-gray-200 border-dashed rounded-lg cursor-pointer">
                                <input accept="*" type="file" name="images[]" multiple
                                    class="absolute inset-0 z-10 w-full h-full p-0 m-0 outline-none opacity-0 cursor-pointer"
                                    @change="addFiles($event)"
                                    @dragover="$refs.dnd.classList.add('border-blue-400'); $refs.dnd.classList.add('ring-4'); $refs.dnd.classList.add('ring-inset');"
                                    @dragleave="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                    @drop="$refs.dnd.classList.remove('border-blue-400'); $refs.dnd.classList.remove('ring-4'); $refs.dnd.classList.remove('ring-inset');"
                                    title="" />
                        
                                <div class="flex flex-col items-center justify-center py-16 text-center">
                                    <svg class="w-6 h-6 mr-1 text-current-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    <p class="m-0">Drag your files here or click in this area to add images.</p>
                                </div>
                            </div>
                        
                            <template x-if="files.length > 0">
                                <div class="grid grid-cols-2 gap-4 mt-4 md:grid-cols-6" @drop.prevent="drop($event)"
                                    @dragover.prevent="$event.dataTransfer.dropEffect = 'move'">
                                    <template x-for="(_, index) in Array.from({ length: files.length })">
                                        <div class="relative flex flex-col items-center overflow-hidden text-center bg-gray-100 border rounded cursor-move select-none"
                                            style="padding-top: 100%;" @dragstart="dragstart($event)" @dragend="fileDragging = null"
                                            :class="{'border-blue-600': fileDragging == index}" draggable="true" :data-index="index">
                                            <button class="absolute top-0 right-0 z-50 p-1 bg-white rounded-bl focus:outline-none" type="button" @click="remove(index)">
                                                <svg class="w-4 h-4 text-gray-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                </svg>
                                            </button>
                                            <template x-if="files[index].type.includes('audio/')">
                                                <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                                </svg>
                                            </template>
                                            <template x-if="files[index].type.includes('application/') || files[index].type === ''">
                                                <svg class="absolute w-12 h-12 text-gray-400 transform top-1/2 -translate-y-2/3"
                                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                                </svg>
                                            </template>
                                            <template x-if="files[index].type.includes('image/')">
                                                <img class="absolute inset-0 z-0 object-cover w-full h-full border-4 border-white preview"
                                                    x-bind:src="loadFile(files[index])" />
                                            </template>
                                            <template x-if="files[index].type.includes('video/')">
                                                <video
                                                    class="absolute inset-0 object-cover w-full h-full border-4 border-white pointer-events-none preview">
                                                    <fileDragging x-bind:src="loadFile(files[index])" type="video/mp4">
                                                </video>
                                            </template>
                        
                                            <div class="absolute bottom-0 left-0 right-0 flex flex-col p-2 text-xs bg-white bg-opacity-50">
                                                <span class="w-full font-bold text-gray-900 truncate"
                                                    x-text="files[index].name">Loading</span>
                                                <span class="text-xs text-gray-900" x-text="humanFileSize(files[index].size)">...</span>
                                            </div>
                        
                                            <div class="absolute inset-0 z-40 transition-colors duration-300" @dragenter="dragenter($event)"
                                                @dragleave="fileDropping = null"
                                                :class="{'bg-blue-200 bg-opacity-80': fileDropping == index && fileDragging != index}">
                                            </div>
                                        </div>
                                    </template>
                                </div>
                            </template>
                        </div>
                    </div> 

                    <div>
                        {{-- <h2 class="text-lg text-blue-700">4. Choose the options</h2> --}}
                        <div class="flex flex-row items-center justify-between">
                            {{-- <div class="flex flex-col py-6">
                                <label class="relative lg:flex-row inline-flex items-center mb-4 cursor-pointer">
                                    <input type="checkbox" name="send-by-email" value="send-certificate-by-email" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Send the certificate by email to the client</span>
                                </label>
                                <label class="relative inline-flex items-center mb-4 cursor-pointer">
                                    <input type="checkbox" name="qrcode" value="activate-qr-code" class="sr-only peer">
                                    <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                    <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Activate the QR code for this certificate?</span>
                                </label>
                            </div> --}}
                            <div>
                                <button type="submit" class="text-white bg-green-500 hover:bg-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                                    Update certificat
                                    <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
    <script src="https://unpkg.com/create-file-list"></script>
    <script>
        function dataFileDnD() {
            return {
                files: [],
                fileDragging: null,
                fileDropping: null,
                humanFileSize(size) {
                    const i = Math.floor(Math.log(size) / Math.log(1024));
                    return (
                        (size / Math.pow(1024, i)).toFixed(2) * 1 +
                        " " +
                        ["B", "kB", "MB", "GB", "TB"][i]
                    );
                },
                remove(index) {
                    let files = [...this.files];
                    files.splice(index, 1);
        
                    this.files = createFileList(files);
                },
                drop(e) {
                    let removed, add;
                    let files = [...this.files];
        
                    removed = files.splice(this.fileDragging, 1);
                    files.splice(this.fileDropping, 0, ...removed);
        
                    this.files = createFileList(files);
        
                    this.fileDropping = null;
                    this.fileDragging = null;
                },
                dragenter(e) {
                    let targetElem = e.target.closest("[draggable]");
        
                    this.fileDropping = targetElem.getAttribute("data-index");
                },
                dragstart(e) {
                    this.fileDragging = e.target
                        .closest("[draggable]")
                        .getAttribute("data-index");
                    e.dataTransfer.effectAllowed = "move";
                },
                loadFile(file) {
                    const preview = document.querySelectorAll(".preview");
                    const blobUrl = URL.createObjectURL(file);
        
                    preview.forEach(elem => {
                        elem.onload = () => {
                            URL.revokeObjectURL(elem.src); // free memory
                        };
                    });
        
                    return blobUrl;
                },
                addFiles(e) {
                    const files = createFileList([...this.files], [...e.target.files]);
                    this.files = files;
                    this.form.formData.files = [...files];
                },

            };
        }
        
        </script>
</x-app-layout>
