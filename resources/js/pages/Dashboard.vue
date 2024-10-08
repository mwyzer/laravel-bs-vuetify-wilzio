<template>
  <div class="d-flex">
    <!-- Sidebar -->
    <Sidebar class="sidebar-fixed-left" />

    <!-- Main Content -->
    <div class="flex-grow-1 p-3" style="margin-left: 0px;">
      <!-- Stat Cards -->
      <div class="row mb-4">
        <div class="col-lg-3 col-md-6" v-for="card in statCards" :key="card.title">
          <StatCard :title="card.title" :today="card.today" :month="card.month" :color="card.color" />
        </div>
      </div>

      <!-- Chart Harian and Log Harian side by side -->
      <div class="row mb-4">
        <div class="col-lg-6">
          <div class="card p-4 mb-4">
            <h5 class="card-title">Chart Harian</h5>
            <LineChart :chart-data="chartDataHarian" :chart-options="chartOptions" />
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card p-4 mb-4">
            <h5 class="card-title">Log Harian</h5>
            <LogTable :logs="logHarian" />
          </div>
        </div>
      </div>

      <!-- Chart Bulanan and Deposit Berhasil side by side -->
      <div class="row">
        <div class="col-lg-6">
          <div class="card p-4 mb-4">
            <h5 class="card-title">Chart Bulanan</h5>
            <BarChart :chart-data="chartDataBulanan" :chart-options="chartOptions" />
          </div>
        </div>
        <div class="col-lg-6">
          <div class="card p-4 mb-4">
            <h5 class="card-title">Deposit Berhasil</h5>
            <LogTable :logs="depositBerhasil" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Sidebar from "../components/Sidebar.vue";
import StatCard from "../components/StatCard.vue";
// import LineChart from "../components/LineChart.vue";
// import BarChart from "../components/BarChart.vue";
import LogTable from "../components/LogTable.vue";

export default {
  components: {
    Sidebar,
    StatCard,
    // LineChart,
    // BarChart,
    LogTable,
  },
  data() {
    return {
      statCards: [
      { title: 'Total Income', today: 'Rp 15.894.332', month: 'Rp 345.894.332', color: 'success' },
        { title: 'Tagihan Provider', today: 'Rp 1.894.332', month: 'Rp 24.504.112', color: 'danger' },
        { title: 'Deposit Saldo', today: 'Rp 78.894.332', month: 'Rp 532.834.241', color: 'primary' },
        { title: 'Wilzio PayLater', today: 'Rp 15.894.332', month: 'Rp 345.894.332', color: 'warning' },
        { title: 'Income Voucher', today: 'Rp 15.894.332 / 365 Pcs', month: 'Rp 345.894.332 / 11.253 Pcs', color: 'purple' },
        { title: 'Income Broadband', today: 'Rp 11.894.332 / 5 Org', month: 'Rp 25.894.332 / 32 Org', color: 'info' },
        { title: 'Income Dedicated', today: 'Rp 11.894.332 / 5 Org', month: 'Rp 25.894.332 / 32 Org', color: 'indigo' },
      ],
      chartDataHarian: {
        labels: ['1 Sep', '2 Sep', '3 Sep', '4 Sep', '5 Sep', '6 Sep', '7 Sep', '8 Sep', '9 Sep', '10 Sep'],
        datasets: [
          {
            label: 'Total Income',
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            data: [1200000, 1500000, 1100000, 1400000, 1800000, 2000000, 1300000, 1600000, 1750000, 1900000],
            fill: true,
          },
        ],
      },
      chartDataBulanan: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [
          {
            label: 'Monthly Income',
            backgroundColor: 'rgba(153, 102, 255, 0.2)',
            borderColor: 'rgba(153, 102, 255, 1)',
            data: [50000000, 60000000, 70000000, 80000000, 90000000, 85000000, 75000000, 95000000, 105000000, 115000000, 120000000],
            fill: true,
          },
        ],
      },
      chartOptions: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: 'Income Chart',
          },
        },
        scales: {
          y: {
            beginAtZero: true,
          },
        },
      },
      logHarian: [
        { time: '11:21 AM', customer: 'Jansen Udaau', type: 'Voucher', amount: '2 Org', profit: 'Rp 150.000' },
        { time: '10:42 AM', customer: 'Stefanus Lugan', type: 'Dedicated', amount: '5 Org', profit: 'Rp 45.000' },
      ],
      depositBerhasil: [
        { time: '09:10 AM', customer: 'Adam Rahman', type: 'Deposit', amount: 'Rp 500.000', status: 'Berhasil' },
        { time: '08:45 AM', customer: 'Lily Kristina', type: 'Deposit', amount: 'Rp 1.000.000', status: 'Berhasil' },
      ],
    };
  },
};
</script>

<style scoped>
.sidebar-fixed-left {
  margin-left: 0px;
}
.card {
  margin-bottom: 1.5rem;
}
</style>
