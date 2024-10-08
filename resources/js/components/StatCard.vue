<template>
  <div :class="['card', `bg-${color}`, 'text-white', 'p-4']">
    <div class="card-body">
      <h5 class="card-title">{{ title }}</h5>
      <p class="card-text">Hari Ini: {{ today }}</p>
      <p class="card-text">Bulan Ini: {{ month }}</p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: String,
    today: String,
    month: String,
    color: String,
  },
};
</script>

<style scoped>
.card {
  border-radius: 10px;
  min-height: 150px;
}
</style>
