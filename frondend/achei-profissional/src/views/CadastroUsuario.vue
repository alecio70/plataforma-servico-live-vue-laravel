<template>
  <h1>Cadastro de Usuário</h1>
  <form @submit.prevent="cadastrar">
    <input type="text" v-model="nome" placeholder="Nome">
    <input type="text" v-model="email" placeholder="Email">
    <input type="text" v-model="servico" placeholder="Serviço">
    <button type="submit">Cadastrar</button>
  </form>
</template>

<script setup>
  import { ref } from 'vue';
  import api from '@/services/api';

  const nome = ref('');
  const email = ref('');
  const servico = ref('');

  const cadastrar = async () => {
    try {
      await api.post('/profissionais', {
        nome: nome.value,
        email: email.value,
        servico: servico.value,
      });

      nome.value = '';
      email.value = '';
      servico.value = '';

    } catch (error) {
      console.error('Erro ao cadastrar profissional:', error);
    }
  }
</script>
