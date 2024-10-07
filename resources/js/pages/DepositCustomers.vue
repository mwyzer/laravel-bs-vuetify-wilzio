<template>
    <div class="content">
      <h3>Customer Sub-Menu</h3>
      <div class="d-flex justify-content-between mb-4">
        <button class="btn btn-info">Total Customers</button>
        <button class="btn btn-secondary">New Customers</button>
        <button class="btn btn-dark">Inactive Customers</button>
      </div>
  
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">Customer 1</a>
        <a href="#" class="list-group-item list-group-item-action">Customer 2</a>
        <a href="#" class="list-group-item list-group-item-action">Customer 3</a>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'Customer',
  };
  </script>
  
  <style scoped>
  .content {
    padding: 20px;
  }
  </style>
  