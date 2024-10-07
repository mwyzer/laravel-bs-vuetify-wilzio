<template>
  <div class="min-max-deposit">
    <h3 class="text-center">Min & Max Deposit</h3>
    <div class="deposit-fields">
      <div class="form-group">
        <label for="min-deposit">Minimal Deposit</label>
        <input type="text" id="min-deposit" v-model="minDeposit" class="form-control" readonly />
      </div>
      <div class="form-group">
        <label for="max-deposit">Maksimal Deposit</label>
        <input type="text" id="max-deposit" v-model="maxDeposit" class="form-control" readonly />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      minDeposit: "Rp 10.000",
      maxDeposit: "Rp 2.000.000",
    };
  },
};
</script>

<style scoped>
.min-max-deposit {
  max-width: 400px;
  margin: 0 auto;
  padding: 40px;
  background-color: #1e1e1e;
  border-radius: 10px;
  box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
  color: white;
}

.deposit-fields {
  margin-top: 20px;
}

.form-group {
  margin-bottom: 20px;
}

.form-control {
  background-color: #333;
  color: white;
  border: none;
  padding: 10px;
  border-radius: 5px;
  font-size: 1rem;
}

h3 {
  margin-bottom: 20px;
  font-size: 1.5rem;
  color: white;
}
</style>
