<script setup>
import { ref, onMounted } from 'vue';
import ApexCharts from 'apexcharts';

const chartOptions = ref({
  chart: {
    height: "100%",
    maxWidth: "100%",
    type: "area",
    fontFamily: "Inter, sans-serif",
    dropShadow: { enabled: false },
    toolbar: { show: false },
  },
  tooltip: { enabled: true, x: { show: false } },
  fill: {
    type: "gradient",
    gradient: {
      opacityFrom: 0.55,
      opacityTo: 0,
      shade: "#1C64F2",
      gradientToColors: ["#1C64F2"],
    },
  },
  dataLabels: { enabled: false },
  stroke: { width: 6 },
  grid: {
    show: false,
    strokeDashArray: 4,
    padding: { left: 2, right: 2, top: 0 },
  },
  series: [
    {
      name: "New Users", // 👈 This name will appear in the legend
      data: [6500, 6418, 6456, 6526, 6356, 6456],
      color: "#1A56DB",
    },
  ],
  xaxis: {
    categories: [
      "01 Feb",
      "02 Feb",
      "03 Feb",
      "04 Feb",
      "05 Feb",
      "06 Feb",
      "07 Feb",
    ],
    labels: { show: false },
    axisBorder: { show: false },
    axisTicks: { show: false },
  },
  yaxis: { show: false },
  legend: {
    show: true, // 👈 Ensures the legend is visible
    position: "bottom", // Options: top, bottom, left, right
    horizontalAlign: "center",
    fontSize: "14px",
    labels: { colors: "#333" },
    markers: { width: 12, height: 12 },
  },
});

onMounted(() => {
  const chartElement = document.getElementById("area-chart");

  if (chartElement) {
    const chart = new ApexCharts(chartElement, chartOptions.value);
    chart.render();
  }
});
</script>

<template>
  <div id="area-chart" class="w-full h-[250px]"></div>
</template>
