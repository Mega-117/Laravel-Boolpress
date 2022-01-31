<template>
  <div>
    <h1>pagina contatti</h1>
    <form @submit.prevent="onSubmit" v-if="!formSubmit">
      <div>
        <label for="name" class="form-label">Nome</label>
        <input
          type="text"
          name="name"
          id="name"
          class="form-control"
          v-model="form.name"
        />
      </div>
      <div>
        <label for="mail" class="form-label">Mail</label>
        <input
          type="text"
          name="mail"
          id="mail"
          class="form-control"
          v-model="form.mail"
        />
      </div>
      <div>
        <label for="message" class="form-label">Messaggio</label>
        <textarea
          name="message"
          id="message"
          cols="30"
          rows="10"
          class="form-control"
          v-model="form.message"
        ></textarea>
      </div>
      <div>
        <button type="submit" class="btn btn-primary my-3">
          Invia messaggio
        </button>
      </div>
    </form>
    <div class="alert alert-success" v-else>
      Messaggio inviato correttamente
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      formSubmit: false,
      form: {
        name: "",
        mail: "",
        message: "",
      },
    };
  },
  methods: {
    onSubmit() {
      axios.post("/api/contacts", this.form).then((resp) => {
        this.formSubmit = true;
      });
    },
  },
};
</script>

<style>
</style>