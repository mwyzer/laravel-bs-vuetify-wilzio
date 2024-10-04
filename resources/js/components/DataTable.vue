<template>
    <table class="data-table">
      <thead>
        <tr>
          <th>Name & ID</th>
          <th>Customer</th>
          <th>WhatsApp</th>
          <th>Location</th>
          <th>Status</th>
          <th>Balance</th>
          <th>Billing</th>
          <th>Last Transaction</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in customers" :key="item.id">
          <td>{{ item.name }}</td>
          <td>{{ item.customerType }}</td>
          <td><a :href="item.whatsappLink">WhatsApp</a></td>
          <td>{{ item.location }}</td>
          <td :class="item.status">{{ item.status }}</td>
          <td>{{ item.balance }}</td>
          <td>{{ item.billing }}</td>
          <td>{{ item.lastTransaction }}</td>
        </tr>
      </tbody>
    </table>
  </template>
  
  <script>
  export default {
    data() {
      return {
        customers: [
          {
            id: 1,
            name: 'Andy Kuzon',
            customerType: 'Pelanggan',
            whatsappLink: '#',
            location: 'JABRIEL',
            status: 'active',
            balance: 'Rp 3,211,472',
            billing: 'Rp 211,472',
            lastTransaction: '28/08/2023'
          },
          // More customer data
        ]
      };
    }
  };
  </script>
  
  <style scoped>
  .data-table {
    width: 100%;
    border-collapse: collapse;
  }
  .data-table th, .data-table td {
    padding: 0.5rem;
    border: 1px solid #ddd;
  }
  .data-table th {
    background-color: #343a40;
    color: white;
  }
  .active { color: #28a745; }
  .blocked { color: #dc3545; }
  </style>
  