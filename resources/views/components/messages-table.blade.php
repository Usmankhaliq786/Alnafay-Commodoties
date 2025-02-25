<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 sm:rounded-lg">
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-4 text-center">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-4 text-center">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-4 text-center">
                                    Subject
                                </th>
                                <th scope="col" class="px-6 py-4 text-center">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($messages as $message)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-700">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white text-center">
                                    {{ $message->name }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 text-center">
                                    {{ $message->email }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 text-center">
                                    {{ $message->subject }}
                                </td>
                                <td class="px-6 py-4 text-sm font-medium text-center">
                                    <a href="{{ route('message.show', $message) }}" class="inline-block text-gray-900 bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 transition duration-150 ease-in-out">
                                        View Message
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if($messages->isEmpty())
                <div class="text-center text-gray-500 py-6">
                    No messages to display.
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
