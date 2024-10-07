<template>
    <div>
      <h2>Log Income</h2>
      <table>
        <thead>
          <tr>
            <th>Time</th>
            <th>Customer</th>
            <th>Type</th>
            <th>Amount</th>
            <th>Profit</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="log in logData" :key="log.id">
            <td>{{ log.time }}</td>
            <td>{{ log.customer }}</td>
            <td>{{ log.type }}</td>
            <td>{{ log.amount }}</td>
            <td>{{ log.profit }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      logData: Array,
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
  