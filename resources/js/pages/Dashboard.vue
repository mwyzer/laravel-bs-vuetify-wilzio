<template>
    <div class="d-flex vh-100">
      <!-- Sidebar -->
      <Sidebar />
  
      <!-- Main Content -->
      <div class="flex-grow-1 p-3 bg-light">
        <!-- Top Bar with Statistics -->
        <div class="row g-4 mb-4">
          <StatCard title="Stock Sekarat" count="4 Lokasi" bgColor="bg-danger" />
          <StatCard title="Stock Kurang" count="12 Lokasi" bgColor="bg-warning" />
          <StatCard title="Stock Aman" count="24 Lokasi" bgColor="bg-info" />
          <StatCard title="Flash Sale" count="7 Lokasi" bgColor="bg-danger" />
          <StatCard title="Jenis Layanan" count="Voucher (VC) 37 Lokasi" bgColor="bg-success" />
        </div>
  
        <!-- Filters and Grid -->
        <div class="card p-4 h-100">
          <div class="d-flex justify-content-between mb-4">
            <div>
              <input type="text" class="form-control" placeholder="Cari Lokasi">
            </div>
            <div class="d-flex">
              <select class="form-select me-2">
                <option value="normal">Normal</option>
              </select>
              <select class="form-select me-2">
                <option value="semua">Semua</option>
              </select>
              <button class="btn btn-success">Tambah Lokasi</button>
            </div>
          </div>
          <!-- Locations Grid -->
          <div class="row row-cols-1 row-cols-md-6 g-4">
            <LocationCard v-for="location in locations" :key="location.id" :location="location" />
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import Sidebar from '../components/Sidebar.vue';
  import StatCard from '../components/StatCard.vue';
  import LocationCard from '../components/LocationCard.vue';
  
  export default {
    components: { Sidebar, StatCard, LocationCard },
    data() {
      return {
        locations: [
          { id: 1, name: 'JABRIEL', region: 'Pura Sajau', vc: true, bd: false, dc: true },
          { id: 2, name: 'SHAFF', region: 'KP. Devisi 2', vc: true, bd: false, dc: true },
          // Add more locations here...
        ],
      };
    },
  };
  </script>
  
  <style scoped>
  .card {
    background-color: #f8f9fa;
  }
  </style>
  