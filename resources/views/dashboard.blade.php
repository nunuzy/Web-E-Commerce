<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex m-7">
        <div class="mx-auto rounded-xl shadow-md overflow-hidden">
            <div class="align-middlep-8">
                <img class="h-full w-full object-cover md:w-96" src="storage/img/mediagrafindo.jpg">
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="flex m-6">

                    <a href="{{ route('Product') }}/1">
                        <div class="flex mx-5 group w-auto border border-indigo-500
                                    border-opacity-25 cursor-pointer rounded-lg select-none
                                    overflow-hidden space-y-1 hover:bg-white hover:shadow-lg hover:border-transparent">
                            <div class="md:flex-shrink-0">
                                <img class="h-48 w-full object-cover md:w-48" src="storage/img/brosur.png">
                            </div>
                            <div class="m-4">
                                <p class="font-semibold text-lg text-indigo-600 group-hover:text-gray-900">Brosur</p>
                                <p class="text-indigo-500 group-hover:text-gray-500">Create a new project from a variety of starting templates.</p>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('Product') }}/2">
                        <div class="flex mx-5 group w-auto border border-indigo-500
                                border-opacity-25 cursor-pointer rounded-lg select-none
                                overflow-hidden space-y-1 hover:bg-white hover:shadow-lg hover:border-transparent">
                            <div class="md:flex-shrink-0">
                                <img class="h-48 w-full object-cover md:w-48" src="storage/img/xbanner.jpeg">
                            </div>
                                <div class="m-4">
                                <p class="font-semibold text-lg text-indigo-600 group-hover:text-gray-900">X-Banner</p>
                                <p class="text-indigo-500 group-hover:text-gray-500">Create a new project from a variety of starting templates.</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="flex m-6">
                    <div class="flex mx-5 group w-3/6 border border-indigo-500
                            border-opacity-25 cursor-pointer rounded-lg select-none
                            overflow-hidden space-y-1 hover:bg-white hover:shadow-lg hover:border-transparent">
                            <div class="md:flex-shrink-0">
                                <img class="h-full w-full object-cover md:w-48" src="storage/img/banner1.jpg">
                            </div>
                            <div class="m-4">
                                <p class="font-semibold text-lg text-indigo-600 group-hover:text-gray-900">Banner</p>
                                <p class="text-indigo-500 group-hover:text-gray-500">Create a new project from a variety of starting templates.</p>
                            </div>
                    </div>
                    <div class="flex mx-5 group w-3/6 border border-indigo-500
                            border-opacity-25 cursor-pointer rounded-lg select-none
                            overflow-hidden space-y-1 hover:bg-white hover:shadow-lg hover:border-transparent">
                            <div class="md:flex-shrink-0">
                                <img class="h-full w-full object-cover md:w-48" src="storage/img/nota.jpg">
                            </div>
                            <div class="m-4">
                                <p class="font-semibold text-lg text-indigo-600 group-hover:text-gray-900">Nota</p>
                                <p class="text-indigo-500 group-hover:text-gray-500">Create a new project from a variety of starting templates.</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
