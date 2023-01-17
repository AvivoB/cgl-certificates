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



                <div>
                    <h2 class="text-lg text-blue-700">1. Choose or create a client</h2>
                </div>
                <div class="flex flex-row py-6">
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
                    <div class="w-1/4 flex justify-end">
                        <!-- Modal toggle -->
                        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
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
                        <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Selected customer</span>
                        <div class="font-bold">Customer : <span id="client_name" class="font-medium"></span></div>
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
                        <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path></svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">SVG, PNG, JPG or GIF (MAX. 800x400px)</p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div> 

                    <div>
                        <h2 class="text-lg text-blue-700">4. Choose the options</h2>
                        <div class="flex flex-row py-6">
                            <label class="relative inline-flex items-center mb-4 cursor-pointer">
                                <input type="checkbox" value="send-certificate-by-email" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Send the certificate by email to the client</span>
                            </label>
                            <label class="relative inline-flex items-center mb-4 cursor-pointer">
                                <input type="checkbox" value="activate-qr-code" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Activate the QR code for this certificate?</span>
                            </label>
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
</x-app-layout>
