<template>
    <div class="filters">
      <input type="text" placeholder="Search..." class="search-input" />
      <div v-for="filter in filters" :key="filter.name" class="filter">
        <label>{{ filter.label }}</label>
        <select>
          <option v-for="option in filter.options" :key="option">{{ option }}</option>
        </select>
      </div>
      <button class="reset-btn">Reset Filter</button>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        filters: [
          { name: 'customer', label: 'Customer', options: ['All', 'Member', 'Partner'] },
          { name: 'location', label: 'Location', options: ['All', 'Location 1', 'Location 2'] },
          { name: 'status', label: 'Status', options: ['All', 'Active', 'Blocked'] }
        ]
      };
    }
  };
  </script>
  
  <style scoped>
  .filters {
    display: flex;
    gap: 1rem;
    align-items: center;
  }
  .search-input {
    padding: 0.5rem;
    flex: 1;
  }
  .filter select {
    padding: 0.5rem;
  }
  .reset-btn {
    padding: 0.5rem 1rem;
    background-color: #007bff;
    color: white;
  }
  </style>
  