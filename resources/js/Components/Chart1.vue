<template>
    <div class="max-w-sm w-full bg-white rounded-lg shadow-sm dark:bg-gray-800 p-4 md:p-6">
      <div class="flex justify-between mb-5">
        <div>
          <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">$12,423</h5>
          <p class="text-base font-normal text-gray-500 dark:text-gray-400">Sales this week</p>
        </div>
        <div class="flex items-center px-2.5 py-0.5 text-base font-semibold text-green-500 dark:text-green-500 text-center">
          23%
          <svg class="w-3 h-3 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13V1m0 0L1 5m4-4 4 4"/>
          </svg>
        </div>
      </div>
      <div ref="chart"></div>
    </div>
  </template>
  
  <script>
  import ApexCharts from "apexcharts";
  
  export default {
    mounted() {
      const options = {
        dataLabels: {
          enabled: true,
          style: {
            cssClass: 'text-xs text-white font-medium'
          },
        },
        grid: {
          show: false,
          strokeDashArray: 4,
          padding: {
            left: 16,
            right: 16,
            top: -26
          },
        },
        series: [
          {
            name: "Developer Edition",
            data: [150, 141, 145, 152, 135, 125],
            color: "#1A56DB",
          },
          {
            name: "Designer Edition",
            data: [64, 41, 76, 41, 113, 173],
            color: "#7E3BF2",
          },
        ],
        chart: {
          height: "100%",
          maxWidth: "100%",
          type: "area",
          fontFamily: "Inter, sans-serif",
          dropShadow: {
            enabled: false,
          },
          toolbar: {
            show: false,
          },
        },
        tooltip: {
          enabled: true,
          x: { show: false },
        },
        legend: { show: true },
        fill: {
          type: "gradient",
          gradient: {
            opacityFrom: 0.55,
            opacityTo: 0,
            shade: "#1C64F2",
            gradientToColors: ["#1C64F2"],
          },
        },
        stroke: {
          width: 6,
        },
        xaxis: {
          categories: ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'],
          labels: { show: false },
          axisBorder: { show: false },
          axisTicks: { show: false },
        },
        yaxis: {
          show: false,
          labels: {
            formatter: function (value) {
              return '$' + value;
            }
          }
        },
      };
  
      const chart = new ApexCharts(this.$refs.chart, options);
      chart.render();
    }
  };
  </script>
  