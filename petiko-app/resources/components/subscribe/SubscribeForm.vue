<template>
  <div class="card container">
    <div id="liveAlertPlaceholder"></div>
    <form @submit.prevent="submitForm">
      <div class="input-group mb-3">
        <span class="input-group-text"
          ><i class="bi bi-person-circle"></i
        ></span>

        <input
          type="text"
          class="form-control"
          placeholder="CPF"
          aria-label="CPF"
          v-model="cpfMask"
          aria-describedby="basic-addon2"
          required
        />
      </div>

      <div class="input-group mb-3">
        <span class="input-group-text"
          ><i class="bi bi-telephone-fill"></i
        ></span>

        <input
          type="text"
          class="form-control"
          placeholder="Telefone"
          v-model="telefoneMask"
          aria-label="Telefone"
          required
        />
      </div>
      <div class="input-group mb-3">
        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
        <input
          type="email"
          class="form-control"
          placeholder="Email"
          name="Email"
          v-model="email"
          required
        />
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Foto</label>
        <input
          class="form-control"
          type="file"
          id="image"
          @change="previewImage"
        />
        <div v-if="imagePreview" class="mt-2">
          <img
            width="200px"
            :src="imagePreview"
            class="img-thumbnail"
            alt="Image preview"
          />
        </div>
      </div>

      <div class="container-fluid d-flex justify-content-center">
        <button type="submit" class="btn btn-danger">Enviar</button>
      </div>
    </form>
    <div
      class="toast align-items-center text-white bg-primary border-0"
      role="alert"
      aria-live="assertive"
      aria-atomic="true"
    >
      <div class="d-flex">
        <div class="toast-body">Hello, world! This is a toast message.</div>
        <button
          type="button"
          class="btn-close btn-close-white me-2 m-auto"
          data-bs-dismiss="toast"
          aria-label="Close"
        ></button>
      </div>
    </div>
  </div>
</template>
<script>
import "bootstrap-icons/font/bootstrap-icons.css";
import axios from "axios";
export default {
  data() {
    return {
      imagePreview: null,
      cpfMask: "",
      telefoneMask: "",
      email: "",
      image: "",
    };
  },
  watch: {
    cpfMask(value) {
      this.cpfMask = value
        .replace(/\D/g, "")
        .replace(/(\d{11})(\d+)/g, "$1")
        .replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
    },
    telefoneMask(value) {
      this.telefoneMask = value
        .replace(/\D/g, "")
        .replace(/(\d{10})(\d+)/g, "$1")
        .replace(/^(\d{2})(\d{4,5})(\d{4})$/, "($1) $2-$3");
    },
  },
  methods: {
    previewImage(event) {
      const img = event.target.files[0];
      const file = img;
      this.image = img;
      const reader = new FileReader();
      reader.onload = (e) => {
        this.imagePreview = e.target.result;
      };
      reader.readAsDataURL(file);
    },
    submitForm() {
      const cpf = this.cpfMask.replace(/\D/g, "");
      const telefone = this.telefoneMask.replace(/\D/g, "");
      const email = this.email;
      const image = this.image;
      const form = new FormData();
      form.append("cpf", cpf);
      form.append("telefone", telefone);
      form.append("email", email);
      form.append("imagem", image);

      axios
        .post("/petiko-submit-form", form)
        .then((response) => {
            console.log(response.data);
            this.alerts(response.data.mensagem, "success");
            this.imagePreview = null
            this.cpfMask = ""
            this.telefoneMask = ""
            this.email = ""
            this.image = ""
            document.getElementById("image").innerHTML = ""
        })
        .catch((error) => {
          console.log(error);
          this.alerts("um erro ocorreu, tente novamente", "danger");
        });
    },
    alerts(message, type) {
      const alertPlaceholder = document.getElementById("liveAlertPlaceholder");
      const alert = (message, type) => {
        const wrapper = document.createElement("div");
        wrapper.innerHTML = [
          `<div class="alert alert-${type} alert-dismissible" role="alert">`,
          `   <div>${message}</div>`,
          '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
          "</div>",
        ].join("");

        alertPlaceholder.append(wrapper);
      };
      alert(message, type)
    },
  },
};
</script>
<style scoped>
.card {
  margin-top: 30px;
  padding: 1rem;
  max-width: 90%;
}
@media (max-width: 600px) {
  .btn {
    padding: 0.5rem 1.5rem;
    font-size: large;
    font-weight: bolder;
  }
}
@media (min-width: 601px) {
  .btn {
    padding: 0.7rem 5rem;
    font-size: large;
    font-weight: bolder;
  }
}
@media (min-width: 900px) {
  .btn {
    padding: 0.7rem 5rem;
    font-size: large;
    font-weight: bolder;
  }
  .card {
    margin-top: 30px;
    padding: 1rem;
    max-width: 70%;
  }
}
</style>