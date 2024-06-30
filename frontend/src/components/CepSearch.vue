<template>
  <div
    class="cep-search text-center row align-items-center justify-content-center mx-0"
  >
    <h1>Pesquisar CEP</h1>
    <!-- <input class="input" type="text" v-model="cep" placeholder="Digite o CEP" /> -->
    <form
      class="mb-3 col-6 mx-auto row align-items-end row g-3 needs-validation"
      novalidate
      action="javascript:void(0)"
    >
      <div class="col">
        <label for="cepSearch" class="form-label"> Digite o CEP </label>
        <!-- add regex to validate cep -->
        <input
          type="input"
          class="form-control"
          id="cepSearch"
          v-model="cep"
          placeholder="Digite o CEP"
          required
          pattern="\d{5}-\d{3}"
        />
        <div class="invalid-feedback">Por favor, digite um CEP válido.</div>
      </div>
      <div class="col">
        <button type="submit" class="btn btn-outline-primary">Pesquisar</button>
      </div>
    </form>
    <div v-if="address">
      <p>Endereço: {{ address }}</p>
    </div>
    <div>
      <button type="button" class="btn btn-outline-success" @click="goHome">
        Voltar
      </button>
    </div>
  </div>
</template>

<script lang="ts" setup>
import { onMounted, ref } from "vue";
import { useRouter } from "vue-router";

const router = useRouter();

const cep = ref("");
const address = ref("");

const searchCep = async (zipCode: string) => {
  const response = await fetch(`http://localhost:8000?cep=${zipCode}`);
  const data = await response.json();
  if (data.address) {
    address.value = data.address;
    // reset input and validation
    cep.value = "";
    const form = document.querySelector(".needs-validation") as HTMLFormElement;
    form.classList.remove("was-validated");
  } else {
    address.value = "CEP não encontrado";
  }
};

const mask = (value: string) => {
  return value
    .replace(/\D/g, "")
    .slice(0, 8)
    .replace(/^(\d{5})(\d)/, "$1-$2");
};

onMounted(() => {
  // add mask to input
  const input = document.getElementById("cepSearch") as HTMLInputElement;
  input.addEventListener("input", () => {
    input.value = mask(input.value);
  });
  const forms = document.querySelectorAll(".needs-validation");
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event: Event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        } else {
          const zipCode = cep.value.replace(/\D/g, "");
          searchCep(zipCode);
        }
        form.classList.add("was-validated");
      },
      false
    );
  });
});

const goHome = () => {
  router.push({ name: "home" });
};
</script>
<style scoped>
.cep-search {
  min-height: 100vh;
}
</style>
