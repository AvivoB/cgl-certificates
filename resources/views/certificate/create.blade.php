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
                <form action="" method="post">
                @csrf

                <div>
                    <h2 class="text-lg">Customer</h2>
                </div>
                <div class="relative">
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
                <div id="selected-customer" class="w-1/3 p-4 my-4 uppercase rounded-md border-2 border-indigo-100 flex flex-col justify-between hidden">
                    <div class="font-bold">Customer : <span id="client_name" class="font-medium"></span></div>
                    <div class="font-bold">Address : <span id="address" class="font-medium"></span></div>
                    <div class="font-bold">Phone : <span id="phone" class="font-medium"></span></div>
                    <div class="font-bold">E-mail : <span id="email" class="font-medium"></span></div>
                    <input type="hidden" name="customer_id" id="customer_id">
                </div>



                <div class="flex flex-row">
                    <div class="flex flex-col w-full px-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="name@flowbite.com" required>
                    </div>
                    <div class="flex flex-col w-full px-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="name@flowbite.com" required>
                    </div>
                </div>
                <div class="flex flex-row">
                    <div class="flex flex-col w-full px-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="name@flowbite.com" required>
                    </div>
                    <div class="flex flex-col w-full px-2">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                        <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="name@flowbite.com" required>
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

		const span_client_name = document.querySelector('#client_name');
		const span_address = document.querySelector('#address');
		const span_phone = document.querySelector('#phone');
		const span_email = document.querySelector('#email');
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
					span_address.textContent = element.address;
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
