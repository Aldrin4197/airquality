<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Table1 from '@/Components/Table1.vue';
import Chart from '@/Components/Chart.vue';
</script>

<template>

    <Head title="Node Management" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
                Node Management
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-gray-800">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        Welcome to the Node Management Page!
                    </div>
                    <div>
                        <Table1 />
                    </div>
                </div>
            </div>
        </div>
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Left Column -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Parameter #1</h2>
                        <Chart />
                    </div>

                    <!-- Right Column -->
                    <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                        <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Parameter #2</h2>
                        <Chart />
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
