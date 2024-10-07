<template>
    <div class="d-flex">
      <!-- Sidebar Section -->
      <Sidebar />
  
      <!-- Main Content Section -->
      <main role="main" class="main-content flex-grow-1 px-4">
        <!-- Header with Buttons -->
        <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
          <div class="btn-group">
            <button class="btn btn-primary">TOP List</button>
            <button class="btn btn-secondary">Lokasi</button>
            <button class="btn btn-secondary">Customer</button>
          </div>
          <button class="btn btn-primary">Log Activity</button>
        </div>
  
        <!-- Dashboard Cards Section -->
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4" v-for="(data, index) in dashboardData" :key="index">
            <DashboardCard
              :title="data.title"
              :theme="data.theme"
              :period="data.period"
              :extraData="data.extraData"
              :listItems="data.items"
            />
          </div>
        </div>
      </main>
    </div>
  </template>
  
  <script>
    import Sidebar from '../components/Sidebar.vue';
    import DashboardCard from './DashboardCard.vue'; // Reuse card component
    // Import Sidebar component
  
  export default {
    components: {
        Sidebar, DashboardCard
    },
    data() {
      return {
        dashboardData: [
          {
            title: "Lokasi",
            theme: "bg-primary",
            period: "Sep 2023",
            extraData: { balance: "Semua" },
            items: [
              { rank: 1, name: "JABRIEL", location: "Pura Saju", amount: "Rp 45.121.343" },
              { rank: 2, name: "GLORY", location: "KP Central", amount: "Rp 21.454.000" },
              { rank: 3, name: "AGELOS", location: "KP Devisi 1", amount: "Rp 13.446.565" }
            ]
          },
          {
            title: "Member",
            theme: "bg-purple",
            period: "Sep 2023",
            extraData: { balance: "Semua" },
            items: [
              { rank: 1, name: "Andy Kuzon", id: "6404041601870003", amount: "Rp 45.121.343" },
              { rank: 2, name: "Reheila Sambo", id: "6404041201900002", amount: "Rp 21.454.000" },
              { rank: 3, name: "Karim Usat", id: "6404041201900772", amount: "Rp 13.446.565" }
            ]
          },
          {
            title: "Mitra",
            theme: "bg-orange",
            period: "Sep 2023",
            extraData: { balance: "Semua" },
            items: [
              { rank: 1, name: "Andy Kuzon", id: "6404041601870003", amount: "Rp 45.121.343" },
              { rank: 2, name: "Reheila Sambo", id: "6404041201900002", amount: "Rp 21.454.000" },
              { rank: 3, name: "Karim Usat", id: "6404041201900772", amount: "Rp 13.446.565" }
            ]
          },
          {
            title: "Pelanggan",
            theme: "bg-success",
            period: "Sep 2023",
            extraData: { status: "Semua" },
            items: [
              { rank: 1, name: "Andy Kuzon", id: "6404041601870003", amount: "Rp 45.121.343" },
              { rank: 2, name: "Reheila Sambo", id: "6404041201900002", amount: "Rp 21.454.000" },
              { rank: 3, name: "Karim Usat", id: "6404041201900772", amount: "Rp 13.446.565" }
            ]
          },
          {
            title: "Metode Pembayaran",
            theme: "bg-info",
            period: "Sep 2023",
            extraData: null,
            items: [
              { rank: 1, name: "Transfer Bank & E-Money", amount: "Rp 45.121.343" },
              { rank: 2, name: "Payment Gateway", amount: "Rp 21.454.000" },
              { rank: 3, name: "Setor Tunai", amount: "Rp 13.446.565" }
            ]
          }
        ]
      };
    }
  };
  </script>
  
  <style scoped>
  .sidebar {
    height: 100vh;
    width: 250px;
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
  }
  
  .main-content {
    margin-left: 250px;
    padding-top: 20px;
    flex-grow: 1;
  }
  
  body {
    background-color: #1e1e2d;
  }
  
  .card-title {
    font-size: 1.25rem;
    font-weight: bold;
  }
  </style>
  