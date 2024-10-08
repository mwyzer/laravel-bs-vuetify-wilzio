<template>
  <div class="table-responsive">
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th>Time</th>
          <th>Customer</th>
          <th>Type</th>
          <th>Amount</th>
          <th>Status/Profit</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="log in logs" :key="log.time">
          <td>{{ log.time }}</td>
          <td>{{ log.customer }}</td>
          <td>{{ log.type }}</td>
          <td>{{ log.amount }}</td>
          <td>{{ log.status || log.profit }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: {
    logs: Array,
  },
};
</script>

<style scoped>
.table {
  width: 100%;
}
</style>
