<template>
    <div>
      <line-chart :chart-data="chartData" :chart-options="chartOptions"></line-chart>
    </div>
  </template>
  
  <script>
  import { defineComponent } from 'vue';
  import { Line } from 'vue-chartjs';
  import {
    Chart as ChartJS,
    Title,
    Tooltip,
    Legend,
    LineElement,
    CategoryScale,
    LinearScale,
    PointElement,
  } from 'chart.js';
  
  ChartJS.register(Title, Tooltip, Legend, LineElement, CategoryScale, LinearScale, PointElement);
  
  export default defineComponent({
    name: 'LineChart',
    props: ['chartData', 'chartOptions'],
    components: {
      LineChart: Line,
    },
  });
  </script>
  
  <style scoped>
  .line-chart-container {
    width: 100%;
    max-width: 800px;
    margin: auto;
  }
  </style>
  