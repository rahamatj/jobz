<x-layouts.admin title="Categories">
    <table id="pagination-table">
        <thead>
            <tr>
                <th>
                    <span class="flex items-center">
                        Category Name
                    </span>
                </th>
                <th>
                    <span class="flex items-center">
                        Display Order
                    </span>
                </th>
                <th>
                    <span class="flex items-center">
                        Actions
                    </span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td class="font-medium text-gray-900 whitespace-nowrap">{{ $category->name }}</td>
                    <td>{{ $category->display_order }}</td>
                    <td>
                        <a href="{{ route('admin.categories.edit', $category) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" wire:navigate>Edit</a>
                        <a href="{{ route('admin.categories.delete', $category) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline" wire:navigate>Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-layouts.admin>