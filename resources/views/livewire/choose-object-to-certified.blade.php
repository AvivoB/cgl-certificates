<div>

    <select wire:model="ObjectType" class="m-1 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option value="" selected>Choose certificate type</option>
        <option value="One 14K Yellow gold ring (14K stamped), set with  XXXX diamonds.">One 14K Yellow gold ring (14K stamped), set with  XXXX diamonds.</option>
        <option value="One 14K White gold ring ( 14K stamped ), set with XXXX diamonds.">One 14K White gold ring ( 14K stamped ), set with XXXX diamonds.</option>
        <option value="One 18K Yellow gold ring (18K stamped), set with  XXXX diamonds.">One 18K Yellow gold ring (18K stamped), set with  XXXX diamonds.</option>
        <option value="One 18K White gold ring (18K stamped), set with  XXXX diamonds.">One 18K White gold ring (18K stamped), set with  XXXX diamonds.</option>
        <option value="One 14K Yellow Bracelet gold ( 14K stamped), set with XXXX diamonds.">One 14K Yellow Bracelet gold ( 14K stamped), set with XXXX diamonds.</option>
        <option value="One 14K White Bracelet gold ( 14K stamped), set with XXXX diamonds.">One 14K White Bracelet gold ( 14K stamped), set with XXXX diamonds.</option>
        <option value="One 18K Yellow Bracelet gold (18K stamped), set with XXXX diamonds.">One 18K Yellow Bracelet gold (18K stamped), set with XXXX diamonds.</option>
        <option value="One 18K White Bracelet gold (18K stamped), set with XXXX diamonds.">One 18K White Bracelet gold (18K stamped), set with XXXX diamonds.</option>
        <option value="One 14K Yellow gold pendent (14K stamped), set with XXXX diamonds.">One 14K Yellow gold pendent (14K stamped), set with XXXX diamonds.</option>
        <option value="One 14K White gold pendent (14K stamped), set with XXXX diamonds.">One 14K White gold pendent (14K stamped), set with XXXX diamonds.</option>
        <option value="One 18K Yellow gold pendent (18K stamped), set with  XXXX diamonds.">One 18K Yellow gold pendent (18K stamped), set with  XXXX diamonds.</option>
        <option value="One 18K White gold pendent (18K stamped), set with XXXX diamonds.">One 18K White gold pendent (18K stamped), set with XXXX diamonds.</option>
        <option value="One 14K Yellow gold earings (14K stamped), set with XXXX diamonds.">One 14K Yellow gold earings (14K stamped), set with XXXX diamonds.</option>
        <option value="One 14K White gold earings (14K stamped), set with XXXX diamonds.">One 14K White gold earings (14K stamped), set with XXXX diamonds.</option>
        <option value="One 18K Yellow gold earings (18K stamped), set with XXXX diamonds.">One 18K Yellow gold earings (18K stamped), set with XXXX diamonds.</option>
        <option value="One 18K White gold earings (18K stamped), set with XXXX diamonds.">One 18K White gold earings (18K stamped), set with XXXX diamonds.</option>
        <option value="One 14K Yellow gold Tennis Bracelet (14K stamped), set with XXXX diamonds.">One 14K Yellow gold Tennis Bracelet (14K stamped), set with XXXX diamonds.</option>
        <option value="One 14K White gold Tennis Bracelet (14K stamped), set with XXXX diamonds.">One 14K White gold Tennis Bracelet (14K stamped), set with XXXX diamonds.</option>
        <option value="One 18K Yellow gold Tennis Bracecet (18K stamped), set with XXXX diamonds.">One 18K Yellow gold Tennis Bracecet (18K stamped), set with XXXX diamonds.</option>
        <option value="One 18K White gold Tennis Bracelet (18K stamped), set with XXXX diamonds.">One 18K White gold Tennis Bracelet (18K stamped), set with XXXX diamonds.</option>
        <option value="One 14K Yellow gold Internity Ring (14K stamped), set with XXXX diamonds.">One 14K Yellow gold Internity Ring (14K stamped), set with XXXX diamonds.</option>
        <option value="One 14K White gold Internity Ring (14K stamped), set with XXXX diamonds.">One 14K White gold Internity Ring (14K stamped), set with XXXX diamonds.</option>
        <option value="One 18K Yellow gold Internity Ring (18K stamped), set with XXXX diamonds.">One 18K Yellow gold Internity Ring (18K stamped), set with XXXX diamonds.</option>
        <option value="One 18K White gold Internity Ring (18K stamped), set with XXXX diamonds.">One 18K White gold Internity Ring (18K stamped), set with XXXX diamonds.</option>
    </select>

    <div class="flex flex-col w-full px-2 py-3">
        <label for="text_certificate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Edit certificate type information</label>
        <input  wire:model="textCertificate" type="text" id="text_certificate" name="text_certificate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
    </div>

    <h2 class="text-md text-center text-blue-700">Diamond Data</h2>
    <div class="flex flex-wrap py-3">
        <div class="flex flex-col w-1/2 lg:w-1/3 px-2">
            <label for="jewel_weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jewel Weight</label>
            <input type="text" id="jewel_weight" name="jewel_weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/3 px-2">
            <label for="diamond_weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diamond Weight</label>
            <input type="text" id="diamond_weight" name="diamond_weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/3 px-2">
            <label for="gemstone_weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gemstone Weight</label>
            <input type="text" id="gemstone_weight" name="gemstone_weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
    </div>
    {{-- Fin diamond data --}}
    {{-- center diamond --}}
    <h2 class="text-md text-center text-blue-700">Center Diamond</h2>
    <div class="flex flex-wrap py-3">
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="center_cut_shape" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut and Shape</label>
            <input type="text" id="center_cut_shape" name="center_cut_shape" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="total_weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Weight</label>
            <input type="text" id="total_weight" name="total_weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
            <input type="text" id="quantity" name="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="Cut/Pol/Sym" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut / Pol / Sym</label>
            <input type="text" id="Cut/Pol/Sym" name="Cut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="Measurement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Measurement</label>
            <input type="text" id="Measurement" name="Measurement" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="Color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
            <input type="text" id="Color" name="Color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="Clarity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clarity</label>
            <input type="text" id="Clarity" name="Clarity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
    </div>
    {{-- Fin center diamond --}}
    {{-- 3) Other diamond --}}
    <h2 class="text-md text-center text-blue-700">Other Diamonds</h2>
    <div class="flex flex-wrap py-3">
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_1_cut_and_shape" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut and Shape</label>
            <input type="text" id="other_1_cut_and_shape" name="other_1_cut_and_shape" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_1_total_weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Weight</label>
            <input type="text" id="other_1_total_weight" name="other_1_total_weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_1_quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
            <input type="text" id="other_1_quantity" name="other_1_quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_1_Cut/Pol/Sym" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut / Pol / Sym</label>
            <input type="text" id="other_1_Cut/Pol/Sym" name="other_1_Cut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_1_Color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
            <input type="text" id="other_1_Color" name="other_1_Color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_1_Clarity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clarity</label>
            <input type="text" id="other_1_Clarity" name="other_1_Clarity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
    </div>
    {{-- Fin 3) Other diamond --}}
    {{-- 2) Other diamond --}}
    <h2 class="text-md text-center text-blue-700">Other Diamonds</h2>
    <div class="flex flex-wrap py-3">
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_2_cut_and_shape" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut and Shape</label>
            <input type="text" id="other_2_cut_and_shape" name="other_2_cut_and_shape" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_2_total_weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Weight</label>
            <input type="text" id="other_2_total_weight" name="other_2_total_weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_2_quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
            <input type="text" id="other_2_quantity" name="other_2_quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_2_Cut/Pol/Sym" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut / Pol / Sym</label>
            <input type="text" id="other_2_Cut/Pol/Sym" name="other_2_Cut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_2_Color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
            <input type="text" id="other_2_Color" name="other_2_Color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_2_Clarity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clarity</label>
            <input type="text" id="other_2_Clarity" name="other_2_Clarity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
    </div>
    {{-- Fin 2) Other diamond --}}
    <h2 class="text-md text-center text-blue-700">Other Diamonds</h2>
    <div class="flex flex-wrap py-3">
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_3_cut_and_shape" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut and Shape</label>
            <input type="text" id="other_3_cut_and_shape" name="other_3_cut_and_shape" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_3_total_weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Weight</label>
            <input type="text" id="other_3_total_weight" name="other_3_total_weight" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_3_quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
            <input type="text" id="other_3_quantity" name="other_3_quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_3_Cut/Pol/Sym" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cut / Pol / Sym</label>
            <input type="text" id="other_3_Cut/Pol/Sym" name="other_3_Cut" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_3_Color" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Color</label>
            <input type="text" id="other_3_Color" name="other_3_Color" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="flex flex-col w-1/2 lg:w-1/4 py-2 px-2">
            <label for="other_3_Clarity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Clarity</label>
            <input type="text" id="other_3_Clarity" name="other_3_Clarity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
    </div>
    {{-- Fin 3) Other diamond --}}
</div>
