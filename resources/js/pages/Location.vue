<template>
  <div class="d-flex">
    <!-- Sidebar -->
    <Sidebar />

    <!-- Main Content -->
    <div class="flex-grow-1 p-3 bg-dark text-white">
      <!-- Top Bar with Statistics -->
      <div class="row g-4 mb-4">
        <StatCard title="Stok Sekarat" count="4 Lokasi" bgColor="bg-danger" />
        <StatCard title="Stok Kurang" count="12 Lokasi" bgColor="bg-warning" />
        <StatCard title="Stok Aman" count="24 Lokasi" bgColor="bg-info" />
        <StatCard title="Flash Sale" count="7 Lokasi" bgColor="bg-danger" />
        <StatCard title="Jenis Layanan" count="Voucher (VC) 37 Lokasi" bgColor="bg-success" />
      </div>

      <!-- Filters and Grid -->
      <div class="card bg-secondary p-4">
        <div class="filter-section d-flex align-items-center justify-content-between bg-primary p-3">
    <!-- Search Bar -->
    <div class="input-group search-bar me-3">
      <span class="input-group-text bg-dark text-white">
        <i class="fas fa-search"></i>
      </span>
      <input
        type="text"
        class="form-control bg-dark text-white"
        placeholder="Cari Lokasi"
        v-model="searchQuery"
      />
    </div>

    <!-- Filter Options -->
    <div class="filters d-flex">
      <select class="form-select me-2 bg-dark text-white" v-model="selectedSort">
        <option value="normal">Urutkan: Normal</option>
        <option value="new-location">Urutkan: New Location</option>
      </select>

      <select class="form-select me-2 bg-dark text-white" v-model="selectedVoucher">
        <option value="semua">Stock Voucher: Semua</option>
        <option value="sekarat">Stock Sekarat</option>
        <option value="kurang">Stock Kurang</option>
        <option value="aman">Stock Aman</option>
      </select>

      <select class="form-select me-2 bg-dark text-white" v-model="selectedServiceType">
        <option value="semua">Jenis Layanan: Semua</option>
        <option value="vc">Voucher (VC)</option>
        <option value="bd">Boardband (BD)</option>
        <option value="dc">Dedicated (DC)</option>
      </select>

      <select class="form-select me-2 bg-dark text-white" v-model="selectedFlashSaleStatus">
        <option value="semua">Flash Sale Status: Semua</option>
        <option value="active">Active</option>
        <option value="inactive">Inactive</option>
      </select>
    </div>

    <!-- Total Locations and Actions -->
    <div class="location-actions d-flex align-items-center">
      <div class="total-locations text-white me-3">
        <h5>Total Lokasi: <strong>{{ totalLocations }}</strong></h5>
      </div>

      <button class="btn btn-dark me-2" @click="resetFilters">
        <i class="fas fa-sync"></i> Reset Filter
      </button>

      <button class="btn btn-success">
        <i class="fas fa-plus-circle"></i> Tambah Lokasi
      </button>
    </div>
  </div>

        <!-- Locations Grid -->
        <!-- <div class="row row-cols-1 row-cols-md-6 g-4">
          <LocationCard
            v-for="location in filteredLocations"
            :key="location.id"
            :location="location"
          />
        </div> -->
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
      searchQuery: '',
      selectedSort: 'normal',
      selectedVoucher: 'semua',
      selectedServiceType: 'semua',
      locations: [
        { id: 1, name: 'JABRIEL', region: 'Pura Sajau', vc: true, bd: false, dc: true },
        { id: 2, name: 'SHAFF', region: 'KP. Devisi 2', vc: true, bd: false, dc: true },
        { id: 3, name: 'WESLYCAMP', region: 'KLK. Pura Sejau', vc: true, bd: true, dc: false },
        { id: 4, name: 'AGGELOS', region: 'KP. Devisi 1', vc: true, bd: true, dc: true },
        // Add more locations here...
      ],
    };
  },
  computed: {
    filteredLocations() {
      return this.locations.filter((location) => {
        const matchesSearch = location.name.toLowerCase().includes(this.searchQuery.toLowerCase());
        const matchesVoucher =
          this.selectedVoucher === 'semua' ||
          (this.selectedVoucher === 'stok-sekarat' && location.stok === 'sekarat') ||
          (this.selectedVoucher === 'stok-kurang' && location.stok === 'kurang') ||
          (this.selectedVoucher === 'stok-aman' && location.stok === 'aman');
        const matchesServiceType =
          this.selectedServiceType === 'semua' ||
          (this.selectedServiceType === 'vc' && location.vc) ||
          (this.selectedServiceType === 'bd' && location.bd) ||
          (this.selectedServiceType === 'dc' && location.dc);

        return matchesSearch && matchesVoucher && matchesServiceType;
      });
    },
  },
};
</script>

<style scoped>
.card {
  background-color: #2c2c54;
  color: white;
}

input.form-control {
  background-color: #2c2c54;
  color: white;
  border: none;
}

select.form-select {
  background-color: #2c2c54;
  color: white;
  border: none;
}

.card .btn-success {
  background-color: #4CAF50;
}

.row-cols-md-6 .col {
  display: flex;
  justify-content: center;
}
</style>
