<template>
    <div class="provider-postpaid">
      <!-- Header Section -->
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h5>Beranda Pascabayar</h5>
        <div>
          <button class="btn btn-warning btn-sm mr-2">Atur Penyedia</button>
          <button class="btn btn-success btn-sm">Tambah Nomor</button>
        </div>
      </div>
  
      <!-- Filters Section -->
      <div class="filters d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex">
          <div class="form-group mr-3">
            <input type="text" class="form-control form-control-sm" placeholder="Cari Nomor, Lokasi, or Pemegang" />
          </div>
          <div class="form-group mr-3">
            <select class="form-control form-control-sm">
              <option selected>Status Semua</option>
              <option>Terpasang</option>
              <option>Stand By</option>
              <option>Bermasalah</option>
            </select>
          </div>
          <div class="form-group mr-3">
            <select class="form-control form-control-sm">
              <option selected>Nomor Semua</option>
            </select>
          </div>
          <div class="form-group mr-3">
            <select class="form-control form-control-sm">
              <option selected>Penyedia Semua</option>
            </select>
          </div>
          <div class="form-group mr-3">
            <select class="form-control form-control-sm">
              <option selected>Lokasi Semua</option>
            </select>
          </div>
          <div class="form-group mr-3">
            <select class="form-control form-control-sm">
              <option selected>Pemegang Semua</option>
            </select>
          </div>
        </div>
        <div>
          <button class="btn btn-info btn-sm">Reset Filter</button>
        </div>
      </div>
  
      <!-- Statistics Section -->
      <div class="stats d-flex justify-content-between align-items-center mb-3">
        <div class="d-flex align-items-center">
          <span class="badge badge-danger mr-2">Total</span>
          <span class="badge badge-danger">51</span>
        </div>
        <div class="d-flex">
          <div class="mr-3">
            <span class="badge badge-primary">Terpasang</span>
            <span class="badge badge-primary">45</span>
          </div>
          <div class="mr-3">
            <span class="badge badge-warning">Stand By</span>
            <span class="badge badge-warning">3</span>
          </div>
          <div class="mr-3">
            <span class="badge badge-danger">Bermasalah</span>
            <span class="badge badge-danger">3</span>
          </div>
        </div>
      </div>
  
      <!-- Data Table Section -->
      <table class="table table-hover table-sm">
        <thead>
          <tr>
            <th>Nomor</th>
            <th>Penyedia</th>
            <th>Lokasi</th>
            <th>Posisi</th>
            <th>Pemegang</th>
            <th>Status</th>
            <th>Limit</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>0811-5409-864</td>
            <td>Kartu Halo</td>
            <td>JABRIEL</td>
            <td>ISP-01</td>
            <td>Idam</td>
            <td><span class="badge badge-primary">Terpasang</span></td>
            <td>Rp 1.000.000</td>
          </tr>
          <tr>
            <td>0843-2311-211</td>
            <td>Im3 Postpaid</td>
            <td>GUDANG</td>
            <td>ISP-02</td>
            <td>Natanel</td>
            <td><span class="badge badge-warning">Stand By</span></td>
            <td>Rp 1.500.000</td>
          </tr>
          <tr>
            <td>0856-7544-098</td>
            <td>XL Prioritas</td>
            <td>GUDANG</td>
            <td>ISP-01</td>
            <td>Surang</td>
            <td><span class="badge badge-danger">Bermasalah</span></td>
            <td>Rp 2.000.000</td>
          </tr>
          <tr>
            <td>0811-8765-112</td>
            <td>Kartu Halo</td>
            <td>WESLYCAMP</td>
            <td>ISP-01</td>
            <td>Likbok</td>
            <td><span class="badge badge-primary">Terpasang</span></td>
            <td>Rp 500.000</td>
          </tr>
        </tbody>
      </table>
  
      <!-- Pagination Section -->
      <nav>
        <ul class="pagination justify-content-center">
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">...</a></li>
          <li class="page-item"><a class="page-link" href="#">98</a></li>
        </ul>
      </nav>
    </div>
  </template>
  
  <script>
  export default {
    name: 'ProviderPostpaid',
  };
  </script>
  
  <style scoped>
  .table th, .table td {
    vertical-align: middle;
  }
  .badge-primary {
    background-color: #007bff;
  }
  .badge-warning {
    background-color: #ffc107;
  }
  .badge-danger {
    background-color: #dc3545;
  }
  </style>
  