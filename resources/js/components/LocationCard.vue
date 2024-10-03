<template>
    <div class="col">
      <div class="card bg-primary text-white h-100">
        <div class="card-body d-flex flex-column align-items-center">
          <h5 class="card-title">{{ location.name }}</h5>
          <p class="card-text">{{ location.region }}</p>
          <div class="d-flex justify-content-around w-100">
            <span v-if="location.vc" class="badge bg-success">VC</span>
            <span v-if="location.bd" class="badge bg-warning">BD</span>
            <span v-if="location.dc" class="badge bg-danger">DC</span>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      location: Object,
    },
  };
  </script>
  