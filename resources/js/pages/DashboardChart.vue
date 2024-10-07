<template>
    <div>
      <canvas id="chart"></canvas>
    </div>
  </template>
  
  <script>
  import { Chart as ChartJS } from 'chart.js';
  
  export default {
    props: {
      data: Array,
    },
    mounted() {
      const ctx = document.getElementById('chart').getContext('2d');
      new ChartJS(ctx, {
        type: 'line',
        data: {
          labels: this.data.map(item => item.label),
          datasets: [
            {
              label: 'Income',
              data: this.data.map(item => item.value),
              borderColor: 'rgba(75, 192, 192, 1)',
              fill: false,
            },
          ],
        },
      });
    },
  };
  </script>
  