<template>
    <div class="col">
      <div :class="['card', bgColor, 'text-white']">
        <div class="card-body">
          <h5 class="card-title">{{ title }}</h5>
          <h3 class="card-text">{{ count }}</h3>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      title: String,
      count: String,
      bgColor: String,
    },
  };
  </script>
  