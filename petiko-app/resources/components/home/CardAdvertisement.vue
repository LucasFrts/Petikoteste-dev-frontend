<template>
  <div class="container-fluid ">
    <div
      :class="{ 'flex-row-reverse': invert }"
      :style="{ backgroundColor: background }"
      class="d-flex row  justify-content-between"
    >
      <div class="container item col-md-6 col-sm-12">
        <div class="text">{{ mainText }}</div>
        <div v-show="subText != undefined" class="text-small">
          {{ subText }}
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
      <div class="container item col-md-6 col-sm-12">
        <div class="zoom-image">
          <img style="width: 100%" :src="img" alt="Imagem" :id="img" />
          <div class="lupa" id="lupa"></div>
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
  width: 50%;
  align-items: center;
  display: flex;
  flex-wrap: wrap;
  align-content: center;
  align-items: center;
  text-align: center;
}
.text {
  width: 100%;
  font-size: 3rem;
  font-weight: 900;
  text-shadow: 2px 2px 2px #552900f5, 0 0 1px rgb(46, 14, 1);
}
.text-small {
  width: 100%;
  font-size: 1.5rem;
  font-weight: 800;
}
.spacing {
  margin: 15px;
  padding: 15px;
}
.btn{
    padding: 0.7rem 11rem;
    font-size: large;
    font-weight: bold;
}
@media(max-width: 900px){
    .item {
  width: 80%;
  align-items: center;
  display: flex;
  flex-wrap: wrap;
  align-content: center;
  align-items: center;
  text-align: center;
}
}
@media(max-width: 600px){
    .item {
  width: 80%;
  padding:5rem;
  align-items: center;
  display: flex;
  flex-wrap: wrap;
  align-content: center;
  align-items: center;
  text-align: center;
}
}

</style>