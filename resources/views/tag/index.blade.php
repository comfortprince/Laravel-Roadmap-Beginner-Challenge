<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Tags') }}
            </h2>
            <x-primary-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'create-tag')">
                Create Tag
            </x-primary-button>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (true)
                        <table class="w-full bg-white dark:bg-gray-800 shadow rounded-lg">
                            <thead class="w-full bg-gray-100 dark:bg-gray-700 text-gray-600 dark:text-gray-300 uppercase text-sm">
                                <tr>
                                    <th class="py-3 px-6 text-left">Tag Name</th>
                                    <th class="py-3 px-6 text-left">Tag Design</th>
                                    <th class="py-3 px-6 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-700 dark:text-gray-200 text-sm font-light">
                                <tr class="border-b border-gray-200 dark:border-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600">
                                    <td class="py-3 px-6 text-left whitespace-nowrap font-medium">
                                        {{ __('inspirational') }}
                                    </td>
                                    <td class="py-3 px-6 text-left whitespace-nowrap font-medium">
                                        <span class="p-2 inline-flex justify-center bg-green-400 rounded-3xl font-semibold">
                                            {{ __('inspirational') }}
                                        </span>
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
                            </tbody>
                        </table>
                    @else
                        {{ __("No categories to display.") }}
                    @endif
                </div>
            </div>
        </div>
    </div>

    <x-modal name="create-tag" :show="true">
        <div class="p-4">
            <h3 class="font-semibold text-lg text-start text-gray-800 dark:text-gray-200 pb-3">
                Create Tag
            </h3>
            <form 
                x-bind:action="{{ route('tag.store') }}`" 
                method="post"
                class="flex flex-col items-left gap-2"
            >
                @csrf
                @method('POST')
                
                <div class="flex flex-col gap-2">
                    <x-input-label value="Name"></x-input-label>

                    <x-text-input 
                        type="text" 
                        name="name" 
                        id="name"
                        class="self-start"
                        value="{{ old('name') }}"
                        required
                    />

                    @error('name')
                        <div class="text-sm text-red-600 dark:text-red-400 space-y-1 self-start">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex flex-col gap-2">
                    <x-input-label value="Tag Color"></x-input-label>

                    <x-text-input 
                        type="color" 
                        name="tag_color" 
                        id="tag_color"
                        value="{{ old('tag_color') }}"
                        required
                    />

                    @error('tag_color')
                        <div class="text-sm text-red-600 dark:text-red-400 space-y-1">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <x-primary-button class="self-start">
                    Create Tag
                </x-primary-button>
            </form>
        </div>
    </x-modal>
</x-app-layout>
