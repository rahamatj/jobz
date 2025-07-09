<div>
    <div>
        <form wire:submit.prevent="save" method="POST">
            @csrf
            <div class="mt-6">
                <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900">Category</label>
                <select name="category_id" id="category_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    wire:model="category_id">
                    <option value="0">Pick a category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mt-0">
                @error('category_id') <span class="text-red-800">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                <input wire:model="title" type="text" id="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Enter title" />

            </div>
            <div>
                @error('title') <span class="text-red-800">{{ $message }}</span> @enderror
            </div>
            <div>
                <label for="company" class="block mb-2 text-sm font-medium text-gray-900">Company</label>
                <input type="text" id="company"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Enter company" wire:model="company" />
            </div>
            <div>
                @error('company') <span class="text-red-800">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Enter email" wire:model="email" />
            </div>
            <div>
                @error('email') <span class="text-red-800">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900">Phone Number</label>
                <input type="text" id="phone_number"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Enter phone number" wire:model="phone_number" />
            </div>
            <div>
                @error('phone_number') <span class="text-red-800">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="website" class="block mb-2 text-sm font-medium text-gray-900">Website</label>
                <input type="text" id="website"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Enter website" wire:model="website" />
            </div>
            <div>
                @error('website') <span class="text-red-800">{{ $message }}</span> @enderror
            </div>

            <div wire:ignore>
                <label for="applicationDeadline" class="block mb-2 text-sm font-medium text-gray-900">Application
                    Deadline</label>
                <input datepicker id="applicationDeadline" type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Select date" name="applicationDeadline" datepicker-format="yyyy-mm-dd">
            </div>
            <div>
                @error('applicationDeadline') <span class="text-red-800">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="vacancy" class="block mb-2 text-sm font-medium text-gray-900">Vacancy</label>
                <input type="number" id="vacancy"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Enter vacancy" wire:model="vacancy" />
            </div>
            <div>
                @error('vacancy') <span class="text-red-800">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="experience" class="block mb-2 text-sm font-medium text-gray-900">Experience</label>
                <input type="number" id="experience"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Enter experience" wire:model="experience" />
            </div>
            <div>
                @error('experience') <span class="text-red-800">{{ $message }}</span> @enderror
            </div>

            <div wire:ignore>
                <label for="published" class="block mb-2 text-sm font-medium text-gray-900">Published</label>
                <input datepicker id="published" type="text"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Select date" wire:model="published" name="published" datepicker-format="yyyy-mm-dd">
            </div>
            <div>
                @error('published') <span class="text-red-800">{{ $message }}</span> @enderror
            </div>

            <div>
                <label for="salary" class="block mb-2 text-sm font-medium text-gray-900">Salary</label>
                <input type="number" id="salary"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Enter salary" wire:model="salary" />
            </div>
            <div>
                @error('salary') <span class="text-red-800">{{ $message }}</span> @enderror
            </div>

            <div class="mt-6" wire:ignore>
                <div>
                    <label for="requirements" class="block mb-2 text-sm font-medium text-gray-900">Requirements</label>
                    <textarea id="requirements" wire:model="requirements" name="requirements"
                        class="markdown-editor"></textarea>
                </div>
                <div>
                    @error('requirements') <span class="text-red-800">{{ $message }}</span> @enderror
                </div>

                <div>
                    <!-- Modal toggle -->
                    <button data-modal-target="requirementsModal" data-modal-toggle="requirementsModal"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        Preview
                    </button>
                </div>
            </div>

            <div class="mt-6" wire:ignore>
                <div>
                    <label for="responsibilities" class="block mb-2 text-sm font-medium text-gray-900">Responsibilities</label>
                    <textarea id="responsibilities" wire:model="responsibilities" name="responsibilities"
                        class="markdown-editor"></textarea>
                </div>
                <div>
                    @error('responsibilities') <span class="text-red-800">{{ $message }}</span> @enderror
                </div>

                <div>
                    <!-- Modal toggle -->
                    <button data-modal-target="requirementsModal" data-modal-toggle="requirementsModal"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        Preview
                    </button>
                </div>
            </div>

            {{-- <div class="mt-6" wire:ignore>
                <div>
                    <label for="responsibilities"
                        class="block mb-2 text-sm font-medium text-gray-900">Responsibilities</label>
                    <textarea id="responsibilities" wire:model="responsibilities" name="responsibilities"
                        class="markdown-editor"></textarea>
                </div>
                <div>
                    @error('responsibilities') <span class="text-red-800">{{ $message }}</span> @enderror
                </div>

                <div>
                    <!-- Modal toggle -->
                    <button data-modal-target="responsibilitiesModal" data-modal-toggle="responsibilitiesModal"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center preview"
                        type="button">
                        Preview
                    </button>
                </div>
            </div> --}}

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center mt-6">Submit</button>
        </form>

        <!-- Main modal -->

        <div id="requirementsModal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-[100%] md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-1/2 max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow-sm">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Requirements
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="requirementsModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div id="requirementsModalBody" class="p-4 md:p-5 space-y-4"></div>
                </div>
            </div>
        </div>

        {{-- <div id="responsibilitiesModal" tabindex="-1" aria-hidden="true"
            class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-[100%] md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-1/2 max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow-sm">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                        <h3 class="text-xl font-semibold text-gray-900">
                            Responsibilities
                        </h3>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                            data-modal-hide="responsibilitiesModal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div id="responsibilitiesModalBody" class="p-4 md:p-5 space-y-4"></div>
                </div>
            </div>
        </div> --}}

        <script src="https://unpkg.com/easymde/dist/easymde.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>

        <script>

            document.addEventListener('DOMContentLoaded', function () {

                const requirementsModalBody = document.getElementById("requirementsModalBody");

                const requirementsMDE = new EasyMDE({
                    element: document.getElementById("requirements"),
                    toolbar: [
                        "bold",
                        "italic",
                        "strikethrough",
                        "heading",
                        "|",
                        "quote",
                        "unordered-list",
                        "ordered-list",
                        "|",
                        "link",
                        "image",
                        "table",
                        "horizontal-rule",
                        "|",
                        "fullscreen",
                        "|",
                        "guide"
                    ]
                });

                const responsibilitiesMDE = new EasyMDE({
                    element: document.getElementById("responsibilities"),
                    toolbar: [
                        "bold",
                        "italic",
                        "strikethrough",
                        "heading",
                        "|",
                        "quote",
                        "unordered-list",
                        "ordered-list",
                        "|",
                        "link",
                        "image",
                        "table",
                        "horizontal-rule",
                        "|",
                        "fullscreen",
                        "|",
                        "guide"
                    ]
                });

                requirementsMDE.codemirror.on("change", function () {
                    let val = requirementsMDE.value();
                    let md = marked.parse(val);

                    console.log(md);

                    @this.set("requirements", md);

                    // requirementsModalBody.innerHTML = md;
                });

                responsibilitiesMDE.codemirror.on("change", function () {
                    let val = responsibilitiesMDE.value();
                    let md = marked.parse(val);

                    console.log(md);

                    @this.set("responsibilities", md);

                    // requirementsModalBody.innerHTML = md;
                });

                const applicationDeadline = document.getElementById('applicationDeadline');

                applicationDeadline.addEventListener("changeDate", function (e) {
                    @this.set("applicationDeadline", applicationDeadline.value);
                });

                const published = document.getElementById('published');

                published.addEventListener("changeDate", function (e) {
                    @this.set("published", published.value);
                });
            });


        </script>
    </div>
</div>
