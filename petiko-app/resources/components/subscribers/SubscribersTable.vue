<template>
  <div class="card container">
    <table class="table table-striped">
      <thead>
        <tr>
          <th v-for="column in tHeader" :key="column" scope="col">
            {{ column }}
          </th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="(item, index) in data" :key="item.id">
          <td v-for="content in item" :key="`${content}${index}`">
            {{ content | formatterMask }}
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
export default {
  filters: {
    formatterMask(value) {
        const regex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/
        if(regex.test(value)){
            return value
        }else{
            if (value.length >= 11) {
              return value
                .replace(/\D/g, "")
                .replace(/(\d{11})(\d+)/g, "$1")
                .replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
            } else if(value.length <= 10){
              return value
                .replace(/\D/g, "")
                .replace(/(\d{10})(\d+)/g, "$1")
                .replace(/^(\d{2})(\d{4,5})(\d{4})$/, "($1) $2-$3");
            }
        }
    },
  },
  data() {
    return {
      tHeader: ["id", "CPF", "Telefone", "E-mail"],
      data: [
        {
          id: "1",
          CPF: "01234567895",
          Telefone: "9896552211",
          Email: "josefelipe@outlook.com",
        },
        {
          id: "2",
          CPF: "15462122452",
          Telefone: "9698109262",
          Email: "lmrfreitas9@gmail.com",
        },
        {
          id: "3",
          CPF: "12354488852",
          Telefone: "6552122356",
          Email: "rafaelalmeida@outlook.com",
        },
        {
          id: "4",
          CPF: "74582100025",
          Telefone: "4588842225",
          Email: "ricardoguimaraes@gmail.com",
        },
        {
          id: "5",
          CPF: "84652144552",
          Telefone: "5468122254",
          Email: "guilherme.profissional@outlook.com",
        },
        {
          id: "6",
          CPF: "08645214855",
          Telefone: "5468422356",
          Email: "netshows@netshows.com",
        },
      ],
    };
  },
};
</script>
<style scoped>
.card {
  margin-top: 30px;
  padding: 1rem;
  max-width: 90%;
}
</style>