<template>
    <div class="chart-filter">
      <label>Chart Type</label>
      <select v-model="chartType">
        <option value="all">All</option>
        <option value="voucher">Voucher</option>
        <option value="broadband">Broadband</option>
      </select>
      <label>Payment</label>
      <select v-model="payment">
        <option value="all">All</option>
        <option value="paid">Paid</option>
        <option value="unpaid">Unpaid</option>
      </select>
      <button @click="applyFilter">Apply</button>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        chartType: 'all',
        payment: 'all',
      };
    },
    methods: {
      applyFilter() {
        this.$emit('apply-filter', { chartType: this.chartType, payment: this.payment });
      },
    },
  };
  </script>
  
  <style scoped>
  .chart-filter {
    display: flex;
    gap: 20px;
    align-items: center;
  }
  
  label {
    font-weight: bold;
  }
  
  select {
    padding: 5px;
  }
  
  button {
    padding: 5px 10px;
    background-color: #28a745;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  </style>
  