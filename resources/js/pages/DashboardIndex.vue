<template>
  <div class="d-flex">
    <!-- Sidebar (Optional, based on your design) -->
    <Sidebar />

    <!-- Main Content -->
    <div class="flex-grow-1 p-3" style="margin-left: 0px;">
      <!-- Chart Harian and Log Income side by side -->
      <div class="row mb-4">
        <div class="col-lg-8">
          <div class="card p-4 mb-4">
            <h5 class="card-title">Chart Harian</h5>
            <LineChart :data="chartHarianData" />
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card p-4 mb-4">
            <h5 class="card-title">Log Income</h5>
            <LogTable :logs="logIncomeData" />
          </div>
        </div>
      </div>

      <!-- Chart Bulanan and Deposit Berhasil side by side -->
      <div class="row mb-4">
        <div class="col-lg-8">
          <div class="card p-4 mb-4">
            <h5 class="card-title">Chart Bulanan</h5>
            <BarChart :data="chartBulananData" />
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card p-4 mb-4">
            <h5 class="card-title">Deposit Berhasil</h5>
            <LogTable :logs="depositBerhasilData" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { LineChart, BarChart } from 'vue-chartkick';
import 'chartkick/chart.js'; // Import chart.js
import Sidebar from './Sidebar.vue'; // Import your sidebar component
import LogTable from './LogTable.vue'; // Import your table component

export default {
  components: {
    Sidebar,
    LineChart,
    BarChart,
    LogTable,
  },
  data() {
    return {
      chartHarianData: [
        ["1 Sep", 500000], ["2 Sep", 1000000], ["3 Sep", 1500000], ["4 Sep", 1200000],
        ["5 Sep", 1400000], ["6 Sep", 1700000], ["7 Sep", 1300000], ["8 Sep", 1600000]
      ],
      chartBulananData: [
        ["Jan", 50000000], ["Feb", 55000000], ["Mar", 60000000], ["Apr", 70000000],
        ["May", 75000000], ["Jun", 80000000], ["Jul", 85000000], ["Aug", 90000000]
      ],
      logIncomeData: [
        { time: "11:21 AM", customer: "Jansen Udaau", type: "Voucher", amount: "2 Org", profit: "Rp 150.000" },
        { time: "10:42 AM", customer: "Stefanus Lugan", type: "Dedicated", amount: "5 Org", profit: "Rp 45.000" },
        { time: "09:38 AM", customer: "Kristoper Jasen", type: "Voucher", amount: "3 Pcs", profit: "Rp 45.000" },
        { time: "07:18 AM", customer: "Hamid Rahmad", type: "Voucher", amount: "3 Pcs", profit: "Rp 245.000" }
      ],
      depositBerhasilData: [
        { time: "11:43 AM", customer: "Suardi Artono", type: "Deposit", amount: "Rp 230.000", status: "Berhasil" },
        { time: "07:42 AM", customer: "Frengky Simbolon", type: "Deposit", amount: "Rp 120.000", status: "Berhasil" },
        { time: "09:38 PM", customer: "Alfan Stepani", type: "Deposit", amount: "Rp 569.000", status: "Berhasil" },
        { time: "07:18 PM", customer: "Jansen Udaau", type: "Deposit", amount: "Rp 3.000.000", status: "Berhasil" }
      ],
    };
  },
};
</script>

<style scoped>
.card {
  margin-bottom: 1.5rem;
}
</style>
