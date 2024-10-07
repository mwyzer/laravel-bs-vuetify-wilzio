<template>
    <div class="provider-list">
      <!-- Filters Section -->
      <div class="filters">
        <div class="filter-row">
          <select class="form-control" v-model="selectedNomor">
            <option value="Semua">Nomor Semua</option>
            <!-- Add more options dynamically based on your data -->
          </select>
  
          <select class="form-control" v-model="selectedProvider">
            <option value="Semua">Provider Semua</option>
            <!-- Add more options dynamically based on your data -->
          </select>
  
          <select class="form-control" v-model="selectedPenyedia">
            <option value="Semua">Penyedia Semua</option>
            <!-- Add more options dynamically based on your data -->
          </select>
  
          <select class="form-control" v-model="selectedLokasi">
            <option value="Semua">Lokasi Semua</option>
            <!-- Add more options dynamically based on your data -->
          </select>
  
          <select class="form-control" v-model="selectedLb">
            <option value="Semua">LB Semua</option>
            <!-- Add more options dynamically based on your data -->
          </select>
  
          <select class="form-control" v-model="selectedPemegang">
            <option value="Semua">Pemegang Semua</option>
            <!-- Add more options dynamically based on your data -->
          </select>
  
          <select class="form-control" v-model="selectedStatus">
            <option value="Semua">Status Semua</option>
            <!-- Add more options dynamically based on your data -->
          </select>
  
          <button class="btn btn-primary reset-filter" @click="resetFilters">Reset Filter</button>
        </div>
      </div>
  
      <!-- Table Section -->
      <div class="table-responsive">
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Nomor</th>
              <th>Provider</th>
              <th>Penyedia</th>
              <th>Lokasi</th>
              <th>LB</th>
              <th>Posisi</th>
              <th>Pemegang</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="provider in filteredProviders" :key="provider.nomor">
              <td>{{ provider.nomor }}</td>
              <td>{{ provider.provider }}</td>
              <td>{{ provider.penyedia }}</td>
              <td>{{ provider.lokasi }}</td>
              <td>{{ provider.lb }}</td>
              <td>{{ provider.posisi }}</td>
              <td>{{ provider.pemegang }}</td>
              <td>
                <span :class="statusClass(provider.status)">
                  {{ provider.status }}
                </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
  
      <!-- Pagination -->
      <div class="pagination">
        <button class="btn btn-link" @click="prevPage" :disabled="currentPage === 1">Previous</button>
        <span>{{ currentPage }}</span>
        <button class="btn btn-link" @click="nextPage" :disabled="currentPage === totalPages">Next</button>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        selectedNomor: 'Semua',
        selectedProvider: 'Semua',
        selectedPenyedia: 'Semua',
        selectedLokasi: 'Semua',
        selectedLb: 'Semua',
        selectedPemegang: 'Semua',
        selectedStatus: 'Semua',
        currentPage: 1,
        perPage: 10,
        providers: [
          {
            nomor: '0811-5409-864',
            provider: 'Pascabayar',
            penyedia: 'Kartu Halo',
            lokasi: 'JABRIEL',
            lb: 'Tidak',
            posisi: 'ISP-01',
            pemegang: 'Idam',
            status: 'Terpasang',
          },
          {
            nomor: 'SID 988277211',
            provider: 'Metro',
            penyedia: 'Telkom',
            lokasi: 'GUDANG',
            lb: 'Iya',
            posisi: 'ISP-02',
            pemegang: 'Natanel',
            status: 'Stand By',
          },
          {
            nomor: 'KITP 44252611',
            provider: 'Satelit',
            penyedia: 'Star - TLKM',
            lokasi: 'GUDANG',
            lb: 'Tidak',
            posisi: 'ISP-01',
            pemegang: 'Surang',
            status: 'Bermasalah',
          },
          {
            nomor: '0811-5409-864',
            provider: 'Prabayar',
            penyedia: 'Kartu Byu',
            lokasi: 'WESLYCAMP',
            lb: 'Tidak',
            posisi: 'ISP-01',
            pemegang: 'Likbok',
            status: 'Terpasang',
          },
        ],
      };
    },
    computed: {
      filteredProviders() {
        // Filter the providers based on selected filter options
        return this.providers.filter((provider) => {
          return (
            (this.selectedNomor === 'Semua' || provider.nomor.includes(this.selectedNomor)) &&
            (this.selectedProvider === 'Semua' || provider.provider === this.selectedProvider) &&
            (this.selectedPenyedia === 'Semua' || provider.penyedia === this.selectedPenyedia) &&
            (this.selectedLokasi === 'Semua' || provider.lokasi === this.selectedLokasi) &&
            (this.selectedLb === 'Semua' || provider.lb === this.selectedLb) &&
            (this.selectedPemegang === 'Semua' || provider.pemegang === this.selectedPemegang) &&
            (this.selectedStatus === 'Semua' || provider.status === this.selectedStatus)
          );
        }).slice((this.currentPage - 1) * this.perPage, this.currentPage * this.perPage);
      },
      totalPages() {
        return Math.ceil(this.providers.length / this.perPage);
      },
    },
    methods: {
      resetFilters() {
        this.selectedNomor = 'Semua';
        this.selectedProvider = 'Semua';
        this.selectedPenyedia = 'Semua';
        this.selectedLokasi = 'Semua';
        this.selectedLb = 'Semua';
        this.selectedPemegang = 'Semua';
        this.selectedStatus = 'Semua';
      },
      prevPage() {
        if (this.currentPage > 1) {
          this.currentPage--;
        }
      },
      nextPage() {
        if (this.currentPage < this.totalPages) {
          this.currentPage++;
        }
      },
      statusClass(status) {
        return {
          'badge-success': status === 'Terpasang',
          'badge-warning': status === 'Stand By',
          'badge-danger': status === 'Bermasalah',
        };
      },
    },
  };
  </script>
  
  <style scoped>
  .filters {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
  }
  .filter-row {
    display: flex;
    gap: 10px;
  }
  .table {
    width: 100%;
    margin-bottom: 1rem;
    background-color: transparent;
  }
  .badge-success {
    color: white;
    background-color: #28a745;
  }
  .badge-warning {
    color: white;
    background-color: #ffc107;
  }
  .badge-danger {
    color: white;
    background-color: #dc3545;
  }
  .pagination {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  </style>
  