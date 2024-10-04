<template>
    <div class="filters">
      <input type="text" placeholder="Cari Nomor, Lokasi or Pemegang" />
      <div v-for="filter in filters" :key="filter.label" class="filter-group">
        <label>{{ filter.label }}</label>
        <select v-model="filter.value">
          <option v-for="option in filter.options" :key="option" :value="option">{{ option }}</option>
        </select>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        filters: [
          { label: 'Nomor', options: ['Semua', '0811-5409-864', 'SID 98877211'], value: 'Semua' },
          { label: 'Provider', options: ['Semua', 'Pascabayar', 'Metro'], value: 'Semua' },
          { label: 'Penyedia', options: ['Semua', 'Kartu Halo', 'Telkom'], value: 'Semua' },
          { label: 'Lokasi', options: ['Semua', 'JABRIEL', 'GUDANG'], value: 'Semua' },
          { label: 'LB', options: ['Semua', 'Tidak', 'Iya'], value: 'Semua' },
          { label: 'Pemegang', options: ['Semua', 'Idam', 'Natanel'], value: 'Semua' },
          { label: 'Status', options: ['Semua', 'Terpasang', 'Bermasalah', 'Stand By'], value: 'Semua' },
        ],
      };
    },
  };
  </script>
  
  <style scoped>
  .filters {
    display: flex;
    flex-direction: column;
    padding: 1rem;
  }
  
  .filter-group {
    margin-bottom: 0.5rem;
  }
  
  select {
    padding: 0.25rem;
  }
  </style>
  