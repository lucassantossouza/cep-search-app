<template>
  <div class="home">
    <h1>Bem-vindo ao teste TradeUp</h1>
    <p>Tente pesquisar um CEP</p>
    <div>
      <img src="@/assets/logo.png" alt="Logo TradeUp" />
    </div>
    <button class="btn btn-outline-success" @click="goToCepSearch">
      Pesquisar CEP
    </button>
  </div>
</template>

<script lang="ts" setup>
import { useRouter } from "vue-router";

const router = useRouter();

const goToCepSearch = () => {
  router.push("/cep-search");
};
</script>

<style scoped>
.home {
  text-align: center;
  padding: 20px;
}

button {
  margin-top: 20px;
}
</style>
