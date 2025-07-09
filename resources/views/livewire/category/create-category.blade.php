<div>
    <form wire:submit="save" method="POST">
        @csrf
        <div>
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
            <input type="text" id="name"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="Enter name" wire:model="name" />
                {{ $name }}
        </div>
        <div>
            @error('name') <span class="text-red-800">{{ $message }}</span> @enderror
        </div>
        <div class="mt-6">
            <label for="display_order" class="block mb-2 text-sm font-medium text-gray-900">Display Order</label>
            <select name="display_order" id="display_order"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                wire:model="display_order">
                <option value="0">Pick a column</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
        </div>
        <div class="mt-0">
            @error('display_order') <span class="text-red-800">{{ $message }}</span> @enderror
        </div>
        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mt-6">Submit</button>
    </form>
</div>
