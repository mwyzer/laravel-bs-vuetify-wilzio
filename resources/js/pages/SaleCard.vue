<template>
    <div :class="`card text-light ${theme} h-100`">
      <div class="card-body">
        <h5 class="card-title">TOP {{ title }}</h5>
        <div class="d-flex justify-content-between mb-3">
          <div v-if="extraData">
            <div class="d-flex">
              <div class="mr-3">
                <label class="form-label">Periode</label>
                <select class="form-select">
                  <option>{{ extraData.period }}</option>
                </select>
              </div>
              <div>
                <label class="form-label">Saldo</label>
                <select class="form-select">
                  <option>{{ extraData.balance }}</option>
                </select>
              </div>
            </div>
          </div>
        </div>
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
      data: Array,
      extraData: Object
    }
  };
  </script>
  
  <style scoped>
  /* Optional styles for list items or card */
  </style>
  