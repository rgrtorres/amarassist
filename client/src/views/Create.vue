<template>
  <b-card>
    <b-card-body>
        <b-card-title>Adicionar contato</b-card-title>
    
        <b-form @submit="createContact()">
            <b-form-group
                id="input-group-1"
                label="Nome:"
                label-for="input-1"
                class="mb-2"
            >
                <b-form-input
                id="input-1"
                v-model="contact.name"
                type="text"
                required
            />
            </b-form-group>

            <b-form-group
                id="input-group-2"
                label="Endereço de e-mail:"
                label-for="input-2"
                class="mb-2"
            >
                <b-form-input
                id="input-2"
                v-model="contact.email"
                type="email"
                required
                />
            </b-form-group>

            <b-form-group
                id="input-group-3"
                label="Número de telefone:"
                label-for="input-3"
                class="mb-2"
            >
                <b-form-input
                id="input-3"
                v-model="contact.phone_number"
                type="tel"
                required
                />
            </b-form-group>

            <b-form-group
                id="input-group-4"
                label="CEP:"
                label-for="input-4"
                class="mb-2"
            >
                <b-form-input
                id="input-3"
                v-model="contact.postal_code"
                type="text"
                required
                />
            </b-form-group>

            <div class="d-flex gap-2">
                <router-link to="/">
                    <b-button type="button" class="mt-3" variant="dark" block>Voltar</b-button>
                </router-link>

                <b-button type="submit" class="mt-3" variant="primary" block>Salvar</b-button>
            </div>
        </b-form>
    </b-card-body>
  </b-card>
</template>

<script>
import api from '@/services/api';

export default {
  name: 'create-contact',
  data() {
    return {
      contact: {},
    }
  },
  methods: {
      async createContact() {
        await api.post('/books', this.contact);

        this.$router.push('/');
      }
  }
}
</script>
