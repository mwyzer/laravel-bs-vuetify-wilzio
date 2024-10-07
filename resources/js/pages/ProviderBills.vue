<template>
    <div class="provider-bills">
      <!-- Header Stats Section -->
      <div class="row mb-4">
        <div class="col-md-2">
          <div class="stat-card bg-danger text-white">
            <h5>Pascabayar</h5>
            <p>Hari ini: Rp 1.432.900</p>
            <p>Bulan ini: Rp 23.653.655</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="stat-card bg-info text-white">
            <h5>Prabayar</h5>
            <p>Hari ini: Rp 1.432.900</p>
            <p>Bulan ini: Rp 23.653.655</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="stat-card bg-purple text-white">
            <h5>Metro</h5>
            <p>Hari ini: Rp 1.432.900</p>
            <p>Bulan ini: Rp 23.653.655</p>
          </div>
        </div>
        <div class="col-md-2">
          <div class="stat-card bg-success text-white">
            <h5>Satelit</h5>
            <p>Hari ini: Rp 1.432.900</p>
            <p>Bulan ini: Rp 23.653.655</p>
          </div>
        </div>
      </div>
  
      <!-- Search and Filter Section -->
      <div class="filter-section mb-4 d-flex justify-content-between">
        <input type="text" class="form-control w-50" placeholder="Cari Nomor, Lokasi or Pemegang" />
        <button class="btn btn-secondary">Reset Filter</button>
      </div>
  
      <!-- Filters Dropdown Section -->
      <div class="row mb-4">
        <div class="col-md-2">
          <label for="nomor">Nomor</label>
          <select id="nomor" class="form-control">
            <option>Semua</option>
          </select>
        </div>
  
        <div class="col-md-2">
          <label for="provider">Provider</label>
          <select id="provider" class="form-control">
            <option>Semua</option>
          </select>
        </div>
  
        <div class="col-md-2">
          <label for="penyedia">Penyedia</label>
          <select id="penyedia" class="form-control">
            <option>Semua</option>
          </select>
        </div>
  
        <div class="col-md-2">
          <label for="lokasi">Lokasi</label>
          <select id="lokasi" class="form-control">
            <option>Semua</option>
          </select>
        </div>
  
        <div class="col-md-2">
          <label for="pemegang">Pemegang</label>
          <select id="pemegang" class="form-control">
            <option>Semua</option>
          </select>
        </div>
  
        <div class="col-md-2">
          <label for="status">Status</label>
          <select id="status" class="form-control">
            <option>Semua</option>
          </select>
        </div>
      </div>
  
      <!-- Total Stats Section -->
      <div class="total-section mb-4 d-flex justify-content-between align-items-center">
        <div>
          <h4>Total</h4>
          <p>Nomor: 2,641</p>
          <p>Tgh Hari ini: Rp 12.332.456</p>
          <p>Tgh Bulan ini: Rp 162.643.000</p>
        </div>
        <button class="btn btn-primary">Chart Tagihan</button>
      </div>
  
      <!-- Table Section -->
      <div class="table-responsive">
        <table class="table table-bordered table-hover text-white">
          <thead class="bg-dark">
            <tr>
              <th>Nomor</th>
              <th>Provider</th>
              <th>Penyedia</th>
              <th>Lokasi</th>
              <th>Pemegang</th>
              <th>Status</th>
              <th>Tgh Hari ini</th>
              <th>Tgh Bulan ini</th>
            </tr>
          </thead>
          <tbody>
            <tr v-for="(item, index) in items" :key="index">
              <td>{{ item.nomor }}</td>
              <td>{{ item.provider }}</td>
              <td>{{ item.penyedia }}</td>
              <td>{{ item.lokasi }}</td>
              <td>{{ item.pemegang }}</td>
              <td>
                <span :class="['badge', statusClass(item.status)]">{{ item.status }}</span>
              </td>
              <td>{{ item.tghHariIni }}</td>
              <td>{{ item.tghBulanIni }}</td>
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
          {
            nomor: '0811-5409-864',
            provider: 'Pascabayar',
            penyedia: 'Kartu Halo',
            lokasi: 'JABRIEL',
            pemegang: 'Idam',
            status: 'Terpasang',
            tghHariIni: 'Rp 6.123.442',
            tghBulanIni: 'Rp 15.221.633'
          },
          {
            nomor: 'SID 988277211',
            provider: 'Metro',
            penyedia: 'Telkom',
            lokasi: 'GUDANG',
            pemegang: 'Natanel',
            status: 'Stand By',
            tghHariIni: 'Rp 6.123.442',
            tghBulanIni: 'Rp 15.221.633'
          },
          {
            nomor: 'KITP 44252611',
            provider: 'Satelit',
            penyedia: 'Star - TLKM',
            lokasi: 'GUDANG',
            pemegang: 'Surang',
            status: 'Bermasalah',
            tghHariIni: 'Rp 6.123.442',
            tghBulanIni: 'Rp 15.221.633'
          },
          {
            nomor: '0811-5409-864',
            provider: 'Prabayar',
            penyedia: 'Kartu Byu',
            lokasi: 'WESLYCAMP',
            pemegang: 'Likbok',
            status: 'Terpasang',
            tghHariIni: 'Rp 6.123.442',
            tghBulanIni: 'Rp 15.221.633'
          }
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
  .provider-bills {
    background-color: #1e1e2d;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  }
  
  .stat-card {
    padding: 20px;
    border-radius: 10px;
    text-align: center;
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
  