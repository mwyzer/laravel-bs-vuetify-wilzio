<template>
    <div>
      <h2>Deposit Log</h2>
      <table>
        <thead>
          <tr>
            <th>Time</th>
            <th>Customer</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="deposit in depositData" :key="deposit.id">
            <td>{{ deposit.time }}</td>
            <td>{{ deposit.customer }}</td>
            <td>{{ deposit.amount }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      depositData: Array,
    },
  };
  </script>
  
  <style scoped>
  table {
    width: 100%;
    border-collapse: collapse;
  }
  
  th, td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
  }
  </style>
  