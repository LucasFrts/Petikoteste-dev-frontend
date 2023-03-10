<template>
    <div>
        <NavbarVue :active="active"/> 
        <div class="container-fluid pd-top">
            <div class="main-page-padd" v-for="(card, index) in data" :key="index">
                <CardAdvertisement :main-text="card.mainText" :background="card.background" :button="card.button" :sub-text="card.subText" :invert="card.invert" :img="card.img"/>
            </div>
            
        </div>
    </div>    
</template>
<script>
import NavbarVue from '../util/Navbar.vue'
import CardAdvertisement from '../util/CardAdvertisement.vue'
export default {
    name:"HomeComponent",
    components:{NavbarVue, CardAdvertisement},
    props:{
    active:{
      type:String,
    }
    },
    data(){
        return{
            data:[
                {mainText:"Faça Seu Cadastro", subText:"Trabalhe com os melhores do mercado de pallets.", button:"Cadastre-se", invert:false, img:"/img/pallet1-png.png", background:"#fff"},
                {mainText:"Diversos Materiais, Tamanhos e Qualidades!", subText:"98% de recomendação entre usuários", invert:true, img:"/img/pallet2-png.png"}
            ],
        }   
    }

}
</script>
<style scoped>

</style>