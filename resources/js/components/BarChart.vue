<template>
    <div>
      <bar-chart :chart-data="chartData" :chart-options="chartOptions"></bar-chart>
    </div>
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  import { Bar } from 'vue-chartjs';
  import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    BarElement,
    CategoryScale,
    LinearScale,
  } from 'chart.js';
  
  ChartJS.register(Title, Tooltip, Legend, BarElement, CategoryScale, LinearScale);
  
  export default defineComponent({
    name: 'BarChart',
    props: ['chartData', 'chartOptions'],
    components: {
      BarChart: Bar,
    },
  });
  </script>
  
  <style scoped>
  .bar-chart-container {
    width: 100%;
    max-width: 800px;
    margin: auto;
  }
  </style>
  