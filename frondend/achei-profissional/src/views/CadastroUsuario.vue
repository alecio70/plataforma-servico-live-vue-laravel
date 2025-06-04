<template>
  <h1>Cadastro de Usuário</h1>
  <form @submit.prevent="cadastrar">
    <input type="text" v-model="nome" placeholder="Nome">
    <input type="text" v-model="email" placeholder="Email">
    <input type="password" v-model="senha" placeholder="Senha">
    <button type="submit">Cadastrar</button>
  </form>
</template>

<script setup>
import { ref } from 'vue';

  const nome = ref('')
  const email = ref('')
  const senha = ref('')

  const cadastrar = () =>  {
    console.log({
      nome: nome.value,
      email: email.value,
      senha: senha.value
    })
  }
</script>
