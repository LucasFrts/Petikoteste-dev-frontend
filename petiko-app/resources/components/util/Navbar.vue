<template>
  <div>
    <nav class="navbar navbar-expand-lg bg-pallet">
      <div class="container-fluid d-flex justify-content-between">
        <a class="navbar-brand" href="/">Palleteria</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" :class="{active: active == 'home'}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" :class="{active: active == 'cadastrar'}" href="/Subscribe">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" :class="{active: active == 'inscritos'}" href="/Subscriebers">Inscritos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" :class="{active: active == 'sobre'}" href="/AboutUs">Sobre</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</template>
<script>
export default {
  props:{
    active:{
      type:String,
    }
  }
};
</script>
<style scoped>
.bg-pallet{
  background-color: #F2CF63
}
.nav-link{
  color: #885f12
}
.nav-link:hover{
  color: #533909
}
.active{
  color: #442f08 !important;
}
.active:hover{
  color: #533909 !important;
}
a{
  font-weight: bold;
}
.navbar{
  border-bottom:1px solid #dba6445b ;
}
.navbar-brand{
  padding: 8px !important;
  font-size: 1.25rem
}
</style>