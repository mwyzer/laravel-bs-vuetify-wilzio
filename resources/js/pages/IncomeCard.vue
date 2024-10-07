<template>
    <div :class="['income-card', bgColor]">
      <i :class="icon"></i>
      <div class="income-details">
        <p>{{ title }}</p>
        <h2>{{ today }}</h2>
        <h3>{{ month }}</h3>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      title: String,
      today: String,
      month: String,
      icon: String,
      bgColor: String,
    },
  };
  </script>
  
  <style scoped>
  .income-card {
    display: flex;
    align-items: center;
    padding: 20px;
    color: #fff;
    border-radius: 10px;
    width: 200px;
    height: 100px;
  }
  
  .income-details {
    margin-left: 10px;
  }
  
  p {
    font-size: 14px;
    margin: 0;
  }
  
  h2 {
    font-size: 18px;
    margin: 0;
  }
  
  h3 {
    font-size: 14px;
    margin: 0;
  }
  </style>
  