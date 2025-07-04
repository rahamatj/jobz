<section class="mt-10 mb-10 space-x-10 w-3/4 mx-auto">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 text-center mb-10">Discover Jobs Across Popular
        Category &
        Industry</h5>
    <div class="flex m-10">
        <div class="flex justify-center w-1/3">
            <ul>
                @foreach ($categories1 as $category)
                    <li><a href="{{ route('category.jobs', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="flex justify-center w-1/3">
            <ul>
                @foreach ($categories2 as $category)
                    <li><a href="{{ route('category.jobs', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>

        <div class="flex justify-center w-1/3">
            <ul>
                @foreach ($categories3 as $category)
                    <li><a href="{{ route('category.jobs', ['category' => $category->id]) }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</section>