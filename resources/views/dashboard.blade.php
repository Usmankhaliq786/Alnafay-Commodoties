<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl leading-tight font-semibold text-gray-800 dark:text-gray-200">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <!-- Cards for metrics -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                <!-- Website Visits Card -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Website Visits
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            12,345
                        </dd>
                    </div>
                </div>

                <!-- Users Card -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            New Users
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            123
                        </dd>
                    </div>
                </div>

                <!-- Users per Day Card -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Users per Day
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            45
                        </dd>
                    </div>
                </div>

                <!-- Other Metric Card -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <dt class="text-sm font-medium text-gray-500 truncate">
                            Other Metric
                        </dt>
                        <dd class="mt-1 text-3xl font-semibold text-gray-900">
                            789
                        </dd>
                    </div>
                </div>
            </div>

            <!-- Area Graph for Website Performance -->
            {{-- <div class="bg-white overflow-hidden shadow rounded-lg">
                <div class="px-4 py-5 sm:p-6">
                    <!-- Replace with your chart component -->
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        Website Performance
                    </h3>
                    <div class="mt-2 text-base text-gray-500">
                        <p>This area graph represents website performance over time.</p>
                        <!-- Static representation of a chart -->
                        <div class="mt-3">
                            <!-- Your chart will go here. Use a package like ApexCharts or Chart.js -->
                            <!-- Example: <x-apex-area-chart :data="$data" /> -->
                            <!-- Ensure you have the necessary chart components built and available -->
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</x-app-layout>
