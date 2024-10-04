<template>
    <div class="dashboard">
      <HeaderNav />
      <SummaryCards />
      <Filters />
      <DataTable />
      <Pagination />
    </div>
  </template>
  
  <script>
  import HeaderNav from '@/components/HeaderNav.vue';
  import SummaryCards from '@/components/SummaryCards.vue';
  import Filters from '@/components/Filters.vue';
  import DataTable from '@/components/DataTable.vue';
  import Pagination from '@/components/Pagination.vue';
  
  export default {
    components: {
      HeaderNav,
      SummaryCards,
      Filters,
      DataTable,
      Pagination
    }
  };
  </script>
  
  <style>
  .dashboard {
    background-color: #2c2f33;
    color: white;
    padding: 1rem;
  }
  </style>
  