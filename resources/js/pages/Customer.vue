<template>
    <div class="dashboard-container">
      <!-- Sidebar on the Left -->
      <Sidebar />
  
      <!-- Main Content -->
      <div class="main-content">
        <!-- Navigation and Header -->
        <CustomerNav />
  
        <!-- Summary Cards -->
        <CustomerSummaryCards />
  
        <!-- Filters and Data Table -->
        <CustomerFilters @reset="resetFilters" />
        <CustomerDataTable :data="data" />
  
        <!-- Pagination -->
        <div class="pagination">1 2 3 ... 98</div>
      </div>
    </div>
  </template>
  
  <script>
  import Sidebar from '../components/Sidebar.vue';
  import CustomerNav from '../components/CustomerNav.vue';
  import CustomerSummaryCards from '../components/CustomerSummaryCards.vue';
  import CustomerFilters from '../components/CustomerFilters.vue';
  import CustomerDataTable from '../components/CustomerDataTable.vue';
  
  export default {
    components: {
      Sidebar,
      CustomerNav,
      CustomerSummaryCards,
      CustomerFilters,
      CustomerDataTable,
    },
    data() {
      return {
        data: [
          {
            id: '6404041601870003',
            name: 'Andy Kuzon',
            customer: 'Pelanggan KTP',
            location: 'JABRIEL',
            status: 'Aktif',
            saldo: 'Deposit Rp 3.211.472',
            tagihan: 'Hutang Rp 211.472',
            lastTransaction: '28/08/2023 09:34 AM',
          },
          // Add more data entries as needed
        ],
      };
    },
    methods: {
      resetFilters() {
        // Reset filter logic here
      },
    },
  };
  </script>
  
  <style scoped>
  .dashboard-container {
    display: flex;
  }
  
  .main-content {
    flex-grow: 1;
    padding: 1rem;
    background-color: #1e1e1e;
    color: #fff;
  }
  
  .pagination {
    margin-top: 1rem;
    text-align: center;
  }
  
  /* Additional Styles for Consistency */
  .dashboard-container {
    background-color: #2e3b4e;
  }
  
  .main-content {
    padding: 1.5rem;
  }
  
  .pagination {
    background-color: #1e1e1e;
    padding: 0.5rem 0;
    color: #9da3a8;
  }
  
  .pagination a {
    color: #9da3a8;
    margin: 0 0.25rem;
    text-decoration: none;
  }
  
  .pagination a:hover {
    color: #007bff;
  }
  </style>
  