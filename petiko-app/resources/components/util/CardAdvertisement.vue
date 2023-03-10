<template>
  <div class="container-fluid">
    <div
      :class="{ 'flex-row-reverse': invert }"
      :style="{ backgroundColor: background }"
      class="d-flex row justify-content-between"
    >
      <div class="item col-md-6 col-sm-12">
        <div class="container">
          <div class="text-field">
            <div class="text">{{ mainText }}</div>
            <div v-show="subText != undefined" class="text-small">
              {{ subText }}
            </div>
          </div>
          <div class="container-fluid">
            <div
              v-if="button != undefined"
              class="d-flex flex-row justify-content-center spacing"
            >
              <a href="/Subscribe" class="d-flex btn btn-danger">
                {{ button }}
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="item col-md-6 col-sm-12">
        <div class="container">
          <div class="zoom-image">
            <img style="width: 100%" :src="img" alt="Imagem" :id="img" />
            <div class="lupa" id="lupa"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: {
    mainText: {
      type: String,
      required: true,
    },
    subText: {
      type: [String, undefined],
    },
    invert: {
      type: Boolean,
      default: false,
    },
    background: {
      type: String,
      default: "#fff7df",
    },
    img: {
      type: String,
      required: true,
    },
    button: {
      type: [String, undefined],
    },
  },
};
</script>
<style scoped>
.text-camp {
  padding: 4rem;
  width: 80%;
}
.item {
  align-items: center;
  display: flex;
  flex-wrap: wrap;
  align-content: flex-end;
  align-items: center;
  text-align: center;
}
.text {
  width: 100%;
  font-size: 3rem;
  font-weight: bolder;
  font-family: 'Baloo 2', 'cursive' !important;
}
.text-small {
  width: 100%;
  font-size: 1.5rem;
  font-weight: 800;
  font-family: 'Montserrat', 'sans-serif' !important;
}
.spacing {
  margin: 15px;
  padding: 15px;
}
.text-field{
    padding:1rem;
}
.btn {
  padding: 0.7rem 11rem;
  font-size: large;
  font-weight: bold;
}
.container {
  padding-left: 1.5rem;
  padding-right: 1.5rem;
}
@media (max-width: 600px) {
  .btn {
    padding: 0.5rem 1.5rem;
    font-size: large;
    font-weight: bolder;
  }
  .text {
    width: 100%;
    font-size: 2.5rem;
    font-weight: bolder;
  }
  .text-small {
    width: 100%;
    font-size: 1rem;
    font-weight: 800;
  }
}
@media (min-width: 601px) {
  .btn {
    padding: 0.7rem 5rem;
    font-size: large;
    font-weight: bolder;
  }
  .text {
    width: 100%;
    font-size: 3.1rem;
    font-weight: bolder;
  }
  .text-small {
    width: 100%;
    font-size: 1.2rem;
    font-weight: 800;
  }
}
@media (min-width: 900px) {
  .btn {
    padding: 0.7rem 5rem;
    font-size: large;
    font-weight: bolder;
  }

  .text {
    width: 100%;
    font-size: 3rem;
    font-weight: bolder;
  }
  .text-small {
    width: 100%;
    font-size: 1.1rem;
    font-weight: 800;
  }
  .item {
    align-items: center;
    display: flex;
    flex-wrap: wrap;
    align-content: center;
    align-items: center;
    text-align: center;
  }
}
</style>