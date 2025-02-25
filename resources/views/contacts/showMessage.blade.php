<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Message Detail') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700">
                    <div class="mb-4">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            {{ $message->subject }}
                        </h3>
                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            From: {{ $message->name }} ({{ $message->email }})
                        </p>
                    </div>
                    <div class="mb-4">
                        <p class="text-gray-700">
                            {{ $message->message }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
