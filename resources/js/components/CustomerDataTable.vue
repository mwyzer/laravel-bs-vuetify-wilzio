<template>
  <table class="data-table">
    <thead>
      <tr>
        <th v-for="column in columns" :key="column" @click="sortColumn(column)">
          {{ column }}
        </th>
      </tr>
    </thead>
    <tbody>
      <tr v-for="row in sortedData" :key="row.id">
        <td>{{ row.name }}</td>
        <td>{{ row.customer }}</td>
        <td>{{ row.location }}</td>
        <!-- Update the status class binding to use kebab-case for status names -->
        <td><span :class="['status', `status-${row.status.toLowerCase().replace(/ /g, '-')}`]">{{ row.status }}</span></td>
        <td>{{ row.saldo }}</td>
        <td>{{ row.tagihan }}</td>
        <td>{{ row.lastTransaction }}</td>
      </tr>
    </tbody>
  </table>
</template>


<script>
export default {
  props: {
    data: Array,
  },
  data() {
    return {
      // Updated columns to exclude 'WhatsApp'
      columns: ['Nama & ID', 'Customer', 'Lokasi', 'Status', 'Saldo', 'Tagihan', 'Trx Terakhir'],
      sortKey: '',
      sortAsc: true,
    };
  },
  computed: {
    sortedData() {
      return [...this.data].sort((a, b) => {
        if (this.sortKey) {
          const result = a[this.sortKey] > b[this.sortKey] ? 1 : -1;
          return this.sortAsc ? result : -result;
        }
        return this.data;
      });
    },
  },
  methods: {
    sortColumn(column) {
      if (this.sortKey === column) {
        this.sortAsc = !this.sortAsc;
      } else {
        this.sortKey = column;
        this.sortAsc = true;
      }
    },
  },
};
</script>

<style scoped>
.data-table {
  width: 100%;
  border-collapse: collapse;
  color: #fff;
}

.data-table th,
.data-table td {
  padding: 0.5rem;
  border: 1px solid #444;
}

.status {
  padding: 0.25rem 0.5rem;
  border-radius: 5px;
}

.status.aktif { background-color: #4caf50; }
.status-di-blokir{ background-color: #f44336; }
.status-non-aktif{ background-color: #9e9e9e; }
</style>
