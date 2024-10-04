<template>
    <div class="summary-cards">
      <div v-for="card in cards" :key="card.title" :class="['card', card.color]">
        <h3>{{ card.title }}</h3>
        <p>{{ card.value }}</p>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        cards: [
          { title: 'Pelanggan', value: 632, color: 'green' },
          { title: 'Member', value: 125, color: 'orange' },
          { title: 'Mitra', value: 45, color: 'purple' },
          { title: 'Saldo', value: 'Rp 921.843.543', color: 'yellow' },
          { title: 'Tagihan', value: 'Rp 711.843.543', color: 'red' }
        ]
      };
    }
  };
  </script>
  
  <style scoped>
  .summary-cards {
    display: flex;
    gap: 1rem;
  }
  .card {
    padding: 1rem;
    border-radius: 0.5rem;
    color: white;
  }
  .green { background-color: #28a745; }
  .orange { background-color: #fd7e14; }
  .purple { background-color: #6f42c1; }
  .yellow { background-color: #ffc107; }
  .red { background-color: #dc3545; }
  </style>
  