<template>
    <div class="provider-satelit">
      <!-- Header Stats Section -->
      <div class="d-flex justify-content-between mb-4">
        <div class="stat-card bg-success text-white">
          <h5>Satelit</h5>
          <p>Total: 6</p>
          <p>Terpasang: 3</p>
          <p>Stand By: 2</p>
          <p>Bermasalah: 1</p>
        </div>
      </div>
  
      <!-- Actions Section -->
      <div class="actions mb-4 d-flex justify-content-between">
        <button class="btn btn-warning">Atur Penyedia</button>
        <button class="btn btn-success">Tambah Nomor</button>
      </div>
  
      <!-- Filter Section -->
      <div class="filter-section d-flex justify-content-between mb-4">
        <input type="text" class="form-control w-50" placeholder="Cari Nomor, Lokasi or Pemegang" />
        <button class="btn btn-secondary">Reset Filter</button>
      </div>
  
      <!-- Filters Dropdown -->
      <div class="d-flex justify-content-between mb-4">
        <div class="form-group">
          <label for="nomor">Nomor</label>
          <select id="nomor" class="form-control">
            <option>Semua</option>
          </select>
        </div>
  
        <div class="form-group">
          <label for="penyedia">Penyedia</label>
          <select id="penyedia" class="form-control">
            <option>Semua</option>
          </select>
        </div>
  
        <div class="form-group">
          <label for="lokasi">Lokasi</label>
          <select id="lokasi" class="form-control">
            <option>Semua</option>
          </select>
        </div>
  
        <div class="form-group">
          <label for="status">Status</label>
          <select id="status" class="form-control">
            <option>Semua</option>
          </select>
        </div>
      </div>
  
      <!-- Table Section -->
      <div class="table-responsive">
        <table class="table table-bordered table-hover text-white">
          <thead class="bg-dark">
            <tr>
              <th>Nomor</th>
              <th>Penyedia</th>
              <th>Lokasi</th>
              <th>Posisi</th>
              <th>Pemegang</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(item, index) in items" :key="index">
              <td>{{ item.nomor }}</td>
              <td>{{ item.penyedia }}</td>
              <td>{{ item.lokasi }}</td>
              <td>{{ item.posisi }}</td>
              <td>{{ item.pemegang }}</td>
              <td>
                <span :class="['badge', statusClass(item.status)]">{{ item.status }}</span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
  
      <!-- Pagination -->
      <div class="d-flex justify-content-end">
        <ul class="pagination">
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">...</a></li>
        </ul>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        items: [
          { nomor: 'TST - SID 988277211', penyedia: 'Star-TLKM', lokasi: 'JABRIEL', posisi: 'ISP-01', pemegang: 'Idam', status: 'Terpasang' },
          { nomor: 'SLK - SID 988277211', penyedia: 'OneWeb', lokasi: 'GUDANG', posisi: 'ISP-02', pemegang: 'Natanel', status: 'Stand By' },
          { nomor: 'OWB - SID 988277211', penyedia: 'Ubiqu', lokasi: 'GUDANG', posisi: 'ISP-01', pemegang: 'Surang', status: 'Bermasalah' }
        ]
      };
    },
    methods: {
      statusClass(status) {
        switch (status) {
          case 'Terpasang':
            return 'badge-success';
          case 'Stand By':
            return 'badge-warning';
          case 'Bermasalah':
            return 'badge-danger';
          default:
            return '';
        }
      }
    }
  };
  </script>
  
  <style scoped>
  .provider-satelit {
    background-color: #1e1e2d;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  
  .stat-card {
    flex: 1;
    padding: 20px;
    border-radius: 10px;
    text-align: center;
  }
  
  .actions {
    gap: 20px;
  }
  
  .filter-section {
    gap: 10px;
  }
  
  .table {
    margin-top: 20px;
  }
  
  .badge {
    padding: 10px;
    font-size: 12px;
  }
  
  .pagination .page-item .page-link {
    background-color: #333;
  }
  
  .pagination .page-item.active .page-link {
    background-color: #007bff;
  }
  </style>
  