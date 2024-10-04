<template>
    <div class="d-flex">
      <!-- Sidebar -->
      <Sidebar />
  
      <!-- Main Content -->
      <div class="flex-grow-1 p-3">
        <!-- Stat Cards Row -->
        <div class="row">
          <StatCard title="Total Income" count="Rp 15.894.332" description="Today" bgColor="success" />
          <StatCard title="Tagihan Provider" count="Rp 1.894.332" description="Today" bgColor="danger" />
          <StatCard title="Deposit Saldo" count="Rp 78.894.332" description="Today" bgColor="primary" />
          <StatCard title="Wilzio PayLater" count="Rp 15.894.332" description="Today" bgColor="warning" />
        </div>
  
        <!-- Chart Section -->
        <div class="card p-4">
          <h5>Chart Harian</h5>
          <Chart />
        </div>
  
        <!-- Log Table Section -->
        <div class="card mt-4 p-4">
          <h5>Log Income</h5>
          <LogTable />
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import Sidebar from "../components/Sidebar.vue";
  import StatCard from "../components/StatCard.vue";
  import Chart from "../components/Chart.vue";
  import LogTable from "../components/LogTable.vue";
  
  
  export default {
      components: {
      Sidebar,
      StatCard,
      Chart,
      LogTable,
    },
      data() {
          return {
              user: JSON.parse(localStorage.getItem('user')) ?? [],
          }
      },
  };
  </script>
  
  <style scoped>
  .card {
      margin-bottom: 1.5rem;
      border: 1px solid #35495e;
  }
  
  .card-title {
      color: #35495e;
  }
  
  .text-primary {
      color: #42b983 !important;
  }
  
  .bg-alert-success {
      background: linear-gradient(to right, #42b983, #5f7081);
  }
  
  .navbar-brand {
      background: linear-gradient(to right, #42b983, #5f7081);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      font-size: 1.5rem;
      font-weight: bold;
  }
  </style>
  