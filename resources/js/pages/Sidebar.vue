<template>
    <div class="d-flex flex-column flex-shrink-0 bg-primary text-white vh-100 p-3">
      <hr>
      <ul class="nav nav-pills flex-column mb-auto">
        <li v-for="link in links" :key="link.name" class="nav-item">
          <router-link :to="link.route" class="nav-link text-white">
            <i :class="link.icon" class="me-2"></i> {{ link.name }}
          </router-link>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        links: [
          { name: "Dashboard", route: "/dashboard", icon: "bi bi-house" },
          { name: "Lokasi", route: "/lokasi", icon: "bi bi-geo-alt" },
          { name: "Provider", route: "/provider", icon: "bi bi-wifi" },
          { name: "Customer", route: "/customer", icon: "bi bi-people" },
          { name: "Penjualan", route: "/penjualan", icon: "bi bi-cart" },
          { name: "Deposit", route: "/deposit", icon: "bi bi-wallet" },
          { name: "PayLater", route: "/paylater", icon: "bi bi-credit-card" },
          { name: "Rekening", route: "/rekening", icon: "bi bi-bank" },
          { name: "Gift", route: "/gift", icon: "bi bi-gift" },
        ],
      };
    },
  };
  </script>
  
  <style scoped>
  .nav-link.active {
    background-color: #0056b3;
  }
  </style>
  