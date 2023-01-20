<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create certificate') }}
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

                <div>
                    <h2 class="text-lg text-blue-700">1. Choose or create a client</h2>
                </div>
                <div class="flex flex-col lg:flex-row py-6">
                    <div class="relative w-full">
                        <div class="relative">
                            <input id="form-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5 pl-9" type="search" placeholder="Search customer...">
                            <button class="absolute inset-0 right-auto group" type="submit" aria-label="Search">
                                <svg class="w-4 h-4 shrink-0 fill-current text-slate-400 group-hover:text-slate-500 ml-3 mr-2" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 14c-3.86 0-7-3.14-7-7s3.14-7 7-7 7 3.14 7 7-3.14 7-7 7zM7 2C4.243 2 2 4.243 2 7s2.243 5 5 5 5-2.243 5-5-2.243-5-5-5z"></path>
                                    <path d="M15.707 14.293L13.314 11.9a8.019 8.019 0 01-1.414 1.414l2.393 2.393a.997.997 0 001.414 0 .999.999 0 000-1.414z"></path>
                                </svg>
                            </button>
                        </div>
                        <div class="w-full top-10 z-10 absolute bg-white shadow-lg rounded-sm border border-slate-200 hidden" id="list-company">
                            <template id="tpl">
                            <div class="item-company flex flex-row items-center p-4 text-slate-900 text-sm border-b-2 border-b-slate-100 hover:bg-indigo-100 hover:border-l-4 hover:border-l-indigo-500">
                                <div class="w-1/4 name uppercase font-bold"></div>
                                <div class="w-1/4 email"></div>
                                <div class="w-1/4 phone uppercase"></div>
                                <div class="w-1/4 address"></div>
                            </div>
                            </template>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/4 py-3 lg:py-0 flex lg:justify-end">
                        <!-- Modal toggle -->
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="flex items-center block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                            <svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z"></path>
                            </svg>
                            Add new customer
                        </button>
                        
                        <!-- Main modal -->
                        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-md md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Create a new customer</h3>
                                        @livewire('add-customer-form')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="{{ route('certificates.store') }}" method="post" enctype="multipart/form-data" id="image-upload">
                    @csrf

                    
                    <div id="selected-customer" class="w-full p-4 my-4 rounded-md border-2 border-green-200 bg-green-50 flex flex-col justify-between hidden">
                        <span class="bg-green-100 text-green-800 text-xs font-medium mb-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Selected customer</span>
                        <div class="font-bold">Name : <span id="client_name" class="font-medium"></span></div>
                        <div class="font-bold">Address : <span id="address" class="font-medium"></span></div>
                        <div class="font-bold">Phone : <span id="phone" class="font-medium"></span></div>
                        <div class="font-bold">E-mail : <span id="email" class="font-medium"></span></div>
                        <input type="hidden" name="customer_id" id="customer_id">
                    </div>

                    <div>
                        <h2 class="text-lg text-blue-700">2. Enter the certificate information</h2>
                    </div>

                    <div class="flex flex-row py-6">
                        <div class="flex flex-col w-full px-2">
                            <label for="carat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Carat information</label>
                            <input type="text" id="carat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>
                        <div class="flex flex-col w-full px-2">
                            <label for="carat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Carat information</label>
                            <input type="text" id="carat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>
                        <div class="flex flex-col w-full px-2">
                            <label for="carat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Carat information</label>
                            <input type="text" id="carat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                        </div>
                    </div>


                    <div>
                        <h2 class="text-lg text-blue-700">3. Add photos to the certificate</h2>
                    </div>
                    
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
                        <h2 class="text-lg text-blue-700">4. Choose the options</h2>
                        <div class="flex flex-row items-center justify-between">
                            <div class="flex flex-col py-6">
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
                            </div>
                            <div>
                                <button type="submit" class="text-white bg-green-500 hover:bg-green-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center">
                                    Create certificat
                                    <svg aria-hidden="true" class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script>
		const searchinput = document.querySelector("#form-search");
		const listcompany = document.querySelector('#list-company');
		const tpl_company = document.querySelector('#tpl');

		const span_client_name = document.querySelector('span#client_name');
		const span_address = document.querySelector('span#address');
		const span_phone = document.querySelector('span#phone');
		const span_email = document.querySelector('span#email');
		const input_customer_id = document.querySelector('#customer_id');

        const selected_customer = document.querySelector('#selected-customer');


		searchinput.addEventListener('keydown', () => {
			if(searchinput.value.length > 3) {
				handleResponse({{ Js::from(App\Models\Customer::all()) }})
			}
		});

		function handleResponse(data) {
			console.log(data);
			listcompany.innerHTML = "";

			if(searchinput.value.length > 0 && data != []) {
				listcompany.style.display = "block";
			} else {
				listcompany.style.display = 'none';
			}


			for (let i = 0; i < data.length; i++) {
				const element = data[i];

				console.log(element)

				const tpl = tpl_company.content.cloneNode(true);

				// On click in One item set data-id to count var For Loop
				const item = tpl.querySelector('.item-company').dataset.id = i;

				// Add data to list
				const name = tpl.querySelector('.name').textContent = element.name;
				const email = tpl.querySelector('.email').textContent = element.email;
				const phone = tpl.querySelector('.phone').textContent = element.phone;
				const address = tpl.querySelector('.address').textContent = element.address;
                

				// Create list container of items
				listcompany.append(tpl);

				const selectData = document.querySelector('[data-id="'+i+'"]');// 👉️ div

				// When an element is clicked, the fields are filled with the right data
				selectData.addEventListener('click', () => {
					span_client_name.textContent = element.name;
					span_address.textContent = element.address +' '+ element.city +', '+ element.country;
					span_email.textContent = element.email;
					span_phone.textContent = element.phone;
					input_customer_id.value = element.id;
					searchinput.value = '';
					listcompany.style.display = 'none';
                    selected_customer.style.display = 'block';
				});
			}
		}
	</script>
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
                }
            };
        }
        </script>
</x-app-layout>
