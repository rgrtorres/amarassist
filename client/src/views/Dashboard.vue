<template>
  <b-card>
    <b-card-body>
      <div class="d-flex justify-content-between align-items-center mb-4">
        <b-card-title>Contatos</b-card-title>

        
        <router-link to="/create">
          <b-button>Adicionar contato</b-button>
        </router-link>
      </div>

      <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                <th scope="col">Ação</th>
            </tr>
        </thead>

        <tbody>
          <tr v-for="contact in contacts" :key="contact.id">
            <b-modal :id="`modal-${contact.id}`" title="Editar contato" hide-footer>
              <b-form @submit="setContactUpdate">
                <b-form-group
                  id="input-group-1"
                  label="Nome:"
                  label-for="input-1"
                  class="mb-2"
                >
                  <b-form-input
                    id="input-1"
                    v-model="contactUpdate.name"
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
                    v-model="contactUpdate.email"
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
                    v-model="contactUpdate.phone_number"
                    type="tel"
                    required
                  />
                </b-form-group>

                <b-form-group
                  id="input-group-3"
                  label="CEP:"
                  label-for="input-3"
                  class="mb-2"
                >
                  <b-form-input
                    id="input-3"
                    v-model="contactUpdate.postal_code"
                    type="text"
                    required
                  />
                </b-form-group>

                <div class="d-flex gap-2">
                  <b-button class="mt-3" variant="danger" block @click="$bvModal.hide(`modal-${contact.id}`)">Cancelar</b-button>
                  <b-button type="submit" class="mt-3" variant="dark" block>Salvar</b-button>
                </div>
              </b-form>
            </b-modal>

            <b-modal :id="`modal-delete-${contact.id}`" title="Confirmar remoção" hide-footer>
              <b-form @submit="setContactDelete(contact.id)">
                <div>Deseja mesmo excluir esse contato?</div>
                <div class="d-flex gap-2">
                  <b-button class="mt-3" variant="danger" block @click="$bvModal.hide(`modal-delete-${contact.id}`)">Cancelar</b-button>
                  <b-button type="submit" class="mt-3" variant="dark" block>Confirmar</b-button>
                </div>
              </b-form>
            </b-modal>

            <th scope="row">{{ contact.id }}</th>
            <td>{{ contact.name }}</td>
            <td>{{ contact.email }}</td>
            <td>{{ contact.phone_number }}</td>
            <td>{{ contact.postal_code }}</td>
            <td>
                <div class="btn-group" role="group" aria-label="Basic example">
                  <b-button @click="getContact(contact.id)" type="button" variant="outline-dark" size="sm">
                      <i class="ri-pencil-line align-middle"></i>
                      editar
                  </b-button>

                  <b-button @click="$bvModal.show(`modal-delete-${contact.id}`)" type="button" variant="outline-dark" size="sm">
                    <i class="ri-delete-bin-line align-middle"></i>
                    remover
                  </b-button>
                </div>
            </td>
          </tr>
        </tbody>
      </table>
    </b-card-body>
  </b-card>
</template>

<script>
import api from '@/services/api';

export default {
  name: 'dashboard-view',
  data() {
    return {
      contactUpdate: {},
      contacts: []
    }
  },
  mounted() {
    this.getAll();
  },
  methods: {
    async getAll() {
      const response = await api.get('/books');
      
      this.contacts = response.data;

      this.getAddress();
    },
    getAddress() {
      this.contacts.map(async (contact, index) => {
        const response = await api.get(`https://viacep.com.br/ws/${contact.postal_code}/json`);
        const address = response.data;
        this.contacts[index].postal_code =  `${address.logradouro}, ${address.localidade} - ${address.uf}`;
      })
    },
    async getContact(id) {
      this.$bvModal.show(`modal-${id}`);

      const response = await api.get(`/books/${id}`);
      this.contactUpdate = response.data;
    },
    async setContactUpdate() {
      const contact = this.contactUpdate;

      await api.put(`/books/${contact.id}`, contact);
      this.$bvModal.hide(`modal-${contact.id}`);

      this.getAll();
    },
    async setContactDelete(id) {
      await api.delete(`/books/${id}`);
      this.getAll();
      this.$bvModal.hide(`modal-delete-${id}`);
    }
  }
}
</script>
