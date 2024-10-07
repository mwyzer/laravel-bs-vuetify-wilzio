<template>
    <div :class="`card text-light ${theme} h-100`">
      <div class="card-body">
        <h5 class="card-title">TOP {{ title }}</h5>
        <ul class="list-group list-group-flush">
          <li
            v-for="(item, index) in data"
            :key="index"
            class="list-group-item d-flex justify-content-between align-items-center bg-dark text-light"
          >
            <div>
              {{ item.rank }}. {{ item.name }}
            </div>
            <span>{{ item.amount }}</span>
          </li>
        </ul>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      title: String,
      theme: String,
      data: Array
    }
  };
  </script>
  
  <style scoped>
  /* You can add custom card styles if needed */
  </style>
  