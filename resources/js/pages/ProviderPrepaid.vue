<template>
    <div class="provider-prepaid">
      <!-- Header Stats Section -->
      <div class="d-flex justify-content-between mb-4">
        <div class="stat-card bg-info text-white">
          <h5>Prabayar</h5>
          <p>Total: 30</p>
          <p>Terpasang: 20</p>
          <p>Stand By: 10</p>
          <p>Bermasalah: 10</p>
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
              <th>Sisa Pulsa</th>
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
              <td>{{ item.sisaPulsa }}</td>
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
          { nomor: '0811-5409-864', penyedia: 'Kartu Byu', lokasi: 'JABRIEL', posisi: 'ISP-01', pemegang: 'Idam', status: 'Terpasang', sisaPulsa: 'Rp 200.000' },
          { nomor: '0843-2311-211', penyedia: 'Kartu Im3', lokasi: 'GUDANG', posisi: 'ISP-02', pemegang: 'Natanel', status: 'Stand By', sisaPulsa: 'Rp 500.000' },
          { nomor: '0856-7544-098', penyedia: 'Kartu Orbit', lokasi: 'GUDANG', posisi: 'ISP-01', pemegang: 'Surang', status: 'Bermasalah', sisaPulsa: 'Rp 140.000' },
          { nomor: '0811-8765-112', penyedia: 'Kartu XL', lokasi: 'WESLYCAMP', posisi: 'ISP-01', pemegang: 'Likbok', status: 'Terpasang', sisaPulsa: 'Rp 65.000' }
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
  .provider-prepaid {
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
    color: white;
  }
  
  .pagination .page-item.active .page-link {
    background-color: #007bff;
    color: white;
  }
  </style>
  