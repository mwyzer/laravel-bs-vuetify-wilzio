<template>
    <div class="d-flex">
      <!-- Sidebar section -->
      <Sidebar />
  
      <!-- Main Content Section -->
      <main role="main" class="main-content flex-grow-1 px-4">
        <!-- Tabs Section -->
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link" :class="{ active: activeTab === 'List' }" href="#" @click.prevent="setActiveTab('List')">List</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" :class="{ active: activeTab === 'Tagihan' }" href="#" @click.prevent="setActiveTab('Tagihan')">Tagihan</a>
          </li>
          <li class="nav-item position-relative">
            <a class="nav-link" :class="{ active: activeTab === 'Atur' }" href="#" @click.prevent="toggleSlideMenu">Atur</a>
  
            <!-- Slide Menu for Atur Options -->
            <transition name="slide">
              <div v-if="showSlideMenu" class="slide-menu">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link" :class="{ active: activeSubTab === 'Pascabayar' }" href="#" @click.prevent="setActiveSubTab('Pascabayar')">Pascabayar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" :class="{ active: activeSubTab === 'Prabayar' }" href="#" @click.prevent="setActiveSubTab('Prabayar')">Prabayar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" :class="{ active: activeSubTab === 'Metro' }" href="#" @click.prevent="setActiveSubTab('Metro')">Metro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" :class="{ active: activeSubTab === 'Satelit' }" href="#" @click.prevent="setActiveSubTab('Satelit')">Satelit</a>
                  </li>
                </ul>
              </div>
            </transition>
          </li>
        </ul>
  
        <!-- Dynamic Content Section Based on Tabs -->
        <div class="tab-content mt-4">
          <!-- Content for Main Tab 'List' -->
          <div v-if="activeTab === 'List'">
            <ProviderList />
          </div>
  
          <!-- Content for Main Tab 'Tagihan' -->
          <div v-if="activeTab === 'Tagihan'">
            <ProviderBills />
          </div>
  
          <!-- Content for Sub-tabs under 'Atur' -->
          <div v-if="activeTab === 'Atur' && activeSubTab === 'Pascabayar'">
            <ProviderPostpaid />
          </div>
          <div v-if="activeTab === 'Atur' && activeSubTab === 'Prabayar'">
            <ProviderPrepaid />
          </div>
          <div v-if="activeTab === 'Atur' && activeSubTab === 'Metro'">
            <ProviderMetro />
          </div>
          <div v-if="activeTab === 'Atur' && activeSubTab === 'Satelit'">
            <ProviderSatellite />
          </div>
        </div>
      </main>
    </div>
  </template>
  
  <script>
  // Import necessary components
  import Sidebar from '../components/Sidebar.vue';
  import ProviderList from './ProviderList.vue';
  import ProviderBills from './ProviderBills.vue';
  import ProviderPostpaid from './ProviderPostpaid.vue';
  import ProviderPrepaid from './ProviderPrepaid.vue';
  import ProviderMetro from './ProviderMetro.vue';
  import ProviderSatellite from './ProviderSatellite.vue';
  
  export default {
    components: {
      Sidebar,
      ProviderList,
      ProviderBills,
      ProviderPostpaid,
      ProviderPrepaid,
      ProviderMetro,
      ProviderSatellite,
    },
    data() {
      return {
        activeTab: 'List', // Default main tab
        activeSubTab: '', // Default sub-tab under 'Atur'
        showSlideMenu: false, // Controls whether the slide menu is shown
      };
    },
    methods: {
      toggleSlideMenu() {
        this.activeTab = 'Atur';
        this.showSlideMenu = !this.showSlideMenu;
      },
      setActiveTab(tabName) {
        this.activeTab = tabName;
        this.showSlideMenu = false; // Close the slide menu when switching to a different tab
      },
      setActiveSubTab(subTabName) {
        this.activeSubTab = subTabName;
      }
    }
  };
  </script>
  
  <style scoped>
  /* Slide-in Menu for Atur Sub-tabs */
  .slide-menu {
    position: absolute;
    right: 0;
    top: 100%;
    width: 200px;
    background-color: #007bff;
    color: white;
    padding: 20px;
    z-index: 10;
  }
  
  .slide-enter-active, .slide-leave-active {
    transition: transform 0.3s ease;
  }
  
  .slide-enter {
    transform: translateX(100%);
  }
  
  .slide-leave-to {
    transform: translateX(100%);
  }
  
  .nav-tabs .nav-link.active,
  .nav-pills .nav-link.active {
    background-color: #007bff;
    color: white;
  }
  
  .tab-content {
    margin-top: 20px;
  }
  
  .nav-tabs .nav-link {
    cursor: pointer;
  }
  
  </style>
  