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
  import { ref, onMounted } from 'vue';
  import api from '@/services/api';

  const profissionais = ref([]);

  const ListarProfissionais = async () => {
    try {
      const response = await api.get('/profissionais');
      profissionais.value = response.data;
    } catch (error) {
      console.error('Erro ao buscar profissionais:', error);
    }
  }

  onMounted(() => {
    ListarProfissionais();
  })
</script>
