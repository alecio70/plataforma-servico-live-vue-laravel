<template>
  <div>
    <h1>Lista de Profissionais</h1>
    <ul>
      <li v-for="profissional in profissionais" :key="profissional.id">
        {{ profissional.nome }} - {{ profissional.servico }}

      </li>
    </ul>
  </div>
</template>

<script setup>
import { ref } from 'vue';

  const profissionais = ref([
    { id: 1, nome: 'Carlos Silva', servico: 'Eletricista'},
    { id: 2, nome: 'Ana Pereira', servico: 'Manicure'},
    { id: 3, nome: 'João Souza', servico: 'Encanador'}
  ])
</script>
