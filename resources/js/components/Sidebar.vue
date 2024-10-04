<template>
  <div class="sidebar vh-100">
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
        { name: "Lokasi", route: "/location", icon: "bi bi-geo-alt" },
        { name: "Provider", route: "/provider", icon: "bi bi-wifi" },
        { name: "Customer", route: "/customer", icon: "bi bi-people" },
        { name: "Penjualan", route: "/sale", icon: "bi bi-cart" },
        { name: "Deposit", route: "/deposit", icon: "bi bi-wallet" },
        { name: "PayLater", route: "/paylater", icon: "bi bi-credit-card" },
        { name: "Rekening", route: "/account", icon: "bi bi-bank" },
        { name: "Gift", route: "/gift", icon: "bi bi-gift" },
      ],
    };
  },
};
</script>

<style scoped>
.sidebar {
  width: 220px;
  background-color: black;
  padding: 1rem;
  display: flex;
  flex-direction: column;
}

.title {
  font-size: 1.5rem;
  margin-bottom: 2rem;
  font-weight: bold;
  color: #90caf9;
}

.nav-pills .nav-link {
  padding: 0.75rem;
  font-size: 1rem;
  transition: background-color 0.3s;
}

.nav-pills .nav-link:hover,
.nav-pills .nav-link.active {
  background-color: #1a237e;
}
</style>
