<template>
    <div>
        <NavbarVue :active="active"/> 
        <div class="container-fluid pd-top">
        <SubscribersTable/>
        </div>
    </div>    
</template>
<script>
import NavbarVue from '../util/Navbar.vue'
import SubscribersTable from './SubscribersTable.vue';
export default {
    name:"SubscribersComponent",
    components:{NavbarVue, SubscribersTable},
    props:{
    active:{
      type:String,
    }
    },

}
</script>
<style scoped>

</style>