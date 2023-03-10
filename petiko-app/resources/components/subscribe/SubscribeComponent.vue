<template>
    <div>
        <NavbarVue :active="active"/> 
        <div class="container-fluid pd-top">
            <SubscribeForm/>
        </div>
    </div>    
</template>
<script>
import NavbarVue from '../util/Navbar.vue'
import SubscribeForm from "./SubscribeForm.vue"
export default {
    name:"SubscribeComponent",
    components:{NavbarVue, SubscribeForm},
    props:{
    active:{
      type:String,
    }
    },

}
</script>
<style scoped>

</style>