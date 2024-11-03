<x-app-layout>
    <x-slot name="navigation">
        @include('layouts.guest-navigation')
    </x-slot>

    <div class="bg-white">
        {{-- Hero Section --}}
        <section class="px-3 sm:px-6 lg:px-8 py-12 md:h-[32rem] flex flex-col md:flex-row gap-10">
            <div class="md:h-full md:w-1/2">
                <img 
                    src="https://images.unsplash.com/photo-1709884732294-90379fee354c?q=80&w=1856&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                    alt="Landing page hero image"
                    class="object-cover object-center h-full"
                >
            </div>
            <div class="md:h-full md:w-1/2 flex flex-col justify-end">
                <div>
                    2022.11.25
                </div>
                <div class="text-4xl font-semibold pb-2 pt-3">
                    How jewellery makes you poor.
                </div>
            </div>
        </section>

        {{-- Body Section --}}
        <section class="px-3 sm:px-6 lg:px-8 py-2">
            <div class="mb-6 pl-2 text-4xl roboto-regular border-l-4 border-gray-600">
                Recent Posts
            </div>

            <div class="grid md:grid-cols-3 gap-12">
                <div>
                    <div class="h-60">
                        <img 
                            src="https://images.unsplash.com/photo-1709884732294-90379fee354c?q=80&w=1856&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                            alt="image name"
                            class="h-full w-full object-cover object-center"
                        >
                    </div>
                    <div>
                        <div class="mt-2">
                            2022.11.25
                        </div>
                        <h2 class="text-2xl font-semibold my-2">
                            How jewellery makes you poor.
                        </h2>
                        <div class="mt-4">
                            <x-primary-button type="button">
                                <a href="">
                                    READ MORE
                                </a>
                            </x-primary-button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="h-60">
                        <img 
                            src="https://plus.unsplash.com/premium_photo-1661963063875-7f131e02bf75?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                            alt="image name"
                            class="h-full w-full object-cover object-center"
                        >
                    </div>
                    <div>
                        <div class="mt-2">
                            2022.11.25
                        </div>
                        <h2 class="text-2xl font-semibold my-2">
                            This secret known only by chickens is save your marriage.
                        </h2>
                        <div class="mt-4">
                            <x-primary-button type="button">
                                <a href="">
                                    READ MORE
                                </a>
                            </x-primary-button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="h-60">
                        <img 
                            src="https://plus.unsplash.com/premium_photo-1661889099855-b44dc39e88c9?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                            alt="image name"
                            class="h-full w-full object-cover object-center"
                        >
                    </div>
                    <div>
                        <div class="mt-2">
                            2022.11.25
                        </div>
                        <h2 class="text-2xl font-semibold my-2">
                            How diving to the ocean flow can end your money troubles.
                        </h2>
                        <div class="mt-4">
                            <x-primary-button type="button">
                                <a href="">
                                    READ MORE
                                </a>
                            </x-primary-button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="h-60">
                        <img 
                            src="https://images.unsplash.com/photo-1709884732294-90379fee354c?q=80&w=1856&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                            alt="image name"
                            class="h-full w-full object-cover object-center"
                        >
                    </div>
                    <div>
                        <div class="mt-2">
                            2022.11.25
                        </div>
                        <h2 class="text-2xl font-semibold my-2">
                            How jewellery makes you poor.
                        </h2>
                        <div class="mt-4">
                            <x-primary-button type="button">
                                <a href="">
                                    READ MORE
                                </a>
                            </x-primary-button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="h-60">
                        <img 
                            src="https://plus.unsplash.com/premium_photo-1661963063875-7f131e02bf75?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                            alt="image name"
                            class="h-full w-full object-cover object-center"
                        >
                    </div>
                    <div>
                        <div class="mt-2">
                            2022.11.25
                        </div>
                        <h2 class="text-2xl font-semibold my-2">
                            This secret known only by chickens is save your marriage.
                        </h2>
                        <div class="mt-4">
                            <x-primary-button type="button">
                                <a href="">
                                    READ MORE
                                </a>
                            </x-primary-button>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="h-60">
                        <img 
                            src="https://plus.unsplash.com/premium_photo-1661889099855-b44dc39e88c9?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" 
                            alt="image name"
                            class="h-full w-full object-cover object-center"
                        >
                    </div>
                    <div>
                        <div class="mt-2">
                            2022.11.25
                        </div>
                        <h2 class="text-2xl font-semibold my-2">
                            How diving to the ocean flow can end your money troubles.
                        </h2>
                        <div class="mt-4">
                            <x-primary-button type="button">
                                <a href="">
                                    READ MORE
                                </a>
                            </x-primary-button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
