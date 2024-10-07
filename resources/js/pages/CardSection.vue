<template>
    <div class="p-4 bg-gray-900">
      <!-- Cards Section -->
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        <DashboardCard 
          title="Total Income"
          today="Rp 15.894.332"
          thisMonth="Rp 345.894.332"
          icon="fas fa-chart-bar"
          color="bg-green-500"
        />
        <!-- Repeat for other cards like Tagihan Provider, Deposit Saldo, Wilzio PayLater, etc. -->
      </div>
    </div>
  </template>
  
  <script>
  import DashboardCard from './components/DashboardCard.vue';
  
  export default {
    components: {
      DashboardCard
    }
  }
  </script>
  