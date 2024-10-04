<template>
    <div id="app">
      <Navbar />
      <Filters />
      <DataTable />
    </div>
  </template>
  
  <script>
  import Navbar from './components/Navbar.vue';
  import Filters from './components/Filters.vue';
  import DataTable from './components/DataTable.vue';
  
  export default {
    components: {
      Navbar,
      Filters,
      DataTable,
    },
  };
  </script>
  
  <style>
  #app {
    font-family: Arial, sans-serif;
  }
  </style>
  