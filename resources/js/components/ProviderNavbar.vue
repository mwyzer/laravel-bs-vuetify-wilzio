<template>
    <nav class="navbar">
      <button v-for="tab in tabs" :key="tab">{{ tab }}</button>
    </nav>
  </template>
  
  <script>
  export default {
    data() {
      return {
        tabs: ['Tagihan', 'Atur', 'Pascabayar', 'Prabayar', 'Metro', 'Satelit'],
      };
    },
  };
  </script>
  
  <style scoped>
  .navbar {
    display: flex;
    background-color: #333;
    padding: 1rem;
  }
  
  button {
    margin-right: 1rem;
    color: #fff;
    background: none;
    border: none;
    cursor: pointer;
  }
  </style>
  