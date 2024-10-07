<template>
    <div class="content">
      <h3>List Sub-Menu</h3>
      <div class="d-flex justify-content-between mb-4">
        <button class="btn btn-primary">Butuh Verifikasi</button>
        <button class="btn btn-warning">Proses Bayar</button>
        <button class="btn btn-success">Deposit Saldo</button>
      </div>
  
      <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">Item 1</a>
        <a href="#" class="list-group-item list-group-item-action">Item 2</a>
        <a href="#" class="list-group-item list-group-item-action">Item 3</a>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'List',
  };
  </script>
  
  <style scoped>
  .content {
    padding: 20px;
  }
  </style>
  