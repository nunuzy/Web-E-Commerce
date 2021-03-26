<div class="flex m-7">
        <div class="mx-auto rounded-xl shadow-md overflow-hidden">
            <div class="align-middlep-8">
                <img class="h-full w-full object-cover md:w-96" src="storage/img/mediagrafindo.jpg">
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class=" bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="m-10 grid gap-12 grid-cols-3">
                    @foreach ($products as $product)
                    <a href="{{ route('Product') }}/{{ $product->id }}">
                        <div class="mt-1 group w-80 border border-indigo-500
                                    border-opacity-25 cursor-pointer rounded-lg select-none
                                    overflow-hidden space-y-1 hover:bg-white hover:shadow-lg hover:border-transparent">
                            <div class="md:flex-shrink-0">
                                <img class="h-52 w-80 object-cover" src="storage/img/{{ $product->photo_path }}">
                            </div>
                            <div class="m-4">
                                <p class="font-semibold text-lg text-center text-indigo-600 group-hover:text-gray-900">{{ $product->title }}</p>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
</div>


