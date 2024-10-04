<template>
    <div class="header-nav">
      <button v-for="tab in tabs" :key="tab" class="tab-btn">
        {{ tab }}
      </button>
      <button class="log-activity">Log Activity</button>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        tabs: ['List', 'Settings', 'Customer', 'Member', 'Partner', 'Referral']
      };
    }
  };
  </script>
  
  <style scoped>
  .header-nav {
    display: flex;
    justify-content: space-between;
    padding: 1rem;
    background-color: #222;
  }
  .tab-btn {
    color: white;
    padding: 0.5rem;
  }
  .log-activity {
    background-color: #007bff;
    color: white;
    padding: 0.5rem 1rem;
  }
  </style>
  