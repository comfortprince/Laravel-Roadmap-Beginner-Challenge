<x-app-layout x-data="">
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Categories') }}
            </h2>
            <x-primary-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'category.create')">
                Create Category
            </x-primary-button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session()->has('success'))
                <div class="text-green-600 bg-green-600 p-4 border-red-400">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if ($categories)
                        <table class="w-full bg-white dark:bg-gray-800 shadow rounded-lg">
                            <thead class="w-full bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 uppercase text-sm">
                                <tr>
                                    <th class="py-3 px-6 text-left">Category Name</th>
                                    <th class="py-3 px-6 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700 dark:text-gray-200 text-sm font-light">
                                @foreach ($categories as $category)
                                    <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                                        <td class="py-3 px-6 text-left whitespace-nowrap font-medium">
                                            {{ ucfirst($category->name) }}
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <x-primary-button>
                                                Edit
                                            </x-primary-button>
                                            <x-danger-button>
                                                Delete
                                            </x-danger-button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        {{ __("No categories to display.") }}
                    @endif
                </div>
            </div>
        </div>
    </div>

    <x-modal 
        name="category.create"
        :show="$errors->any()"
    >
        <div class="p-4">
            <h3 class="font-semibold text-lg text-center text-gray-800 dark:text-gray-200 pb-3">
                Add Category
            </h3>
            <form 
                action="{{ route('category.store') }}" 
                method="post"
                class="flex flex-col items-center gap-2"
            >
                @csrf
                @method('POST')

                <x-text-input 
                    id="name"
                    name="name"
                    type="text"
                    value="{{ old('name') }}"
                    placeholder="Name"
                    required/>
                
                @error('name')
                    <div class="text-sm text-red-600 dark:text-red-400 space-y-1">
                        {{ $message }} 
                    </div>
                @enderror

                <x-primary-button>
                    Create Category
                </x-primary-button>
            </form>
        </div>
    </x-modal>
</x-app-layout>
