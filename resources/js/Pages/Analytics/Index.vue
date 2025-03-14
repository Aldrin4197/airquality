<template>
    <div class="py-12">
      <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Chart Component -->
          <Chart1 />
  
          <!-- Other Column -->
          <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
            <h2 class="text-lg font-semibold text-gray-900 dark:text-white">Other Content</h2>
            <p class="text-gray-600 dark:text-gray-400">You can put other elements here...</p>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import Chart from "@/Components/Chart1.vue"; // Import the Chart component
  
  export default {
    components: {
      Chart,
    },
  };
  </script>
  