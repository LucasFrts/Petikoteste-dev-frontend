<template>
    <div>
        <NavbarVue :active="active"/> 
        <div class="container-fluid pd-top">
            <CardAdvertisement :main-text="data.mainText" :background="data.background"  :sub-text="data.subText" :invert="data.invert" :img="data.img"/>
            <div class="container">
                <h2 class="mb-4">Quem Somos?</h2>
                <p class="text-justify">
                    A nossa empresa é uma das pioneiras no ramo de fabricação e venda de pallets, atuando no mercado há mais de 22 anos. Desde o início, nossa principal missão tem sido fornecer produtos de qualidade e serviços excepcionais aos nossos clientes.
                </p>
                <p class="text-justify">
                    Com uma equipe experiente e dedicada, estamos sempre buscando inovação e aprimoramento em nossos processos de fabricação, garantindo que cada pallet que produzimos seja construído com materiais duráveis e resistentes, capazes de suportar cargas pesadas e manter a integridade dos produtos transportados.
                </p>
                <p class="text-justify">
                    Nossa empresa se destaca pela preocupação com o meio ambiente e a sustentabilidade, utilizando madeira proveniente de fontes renováveis e materiais reciclados em nossos produtos sempre que possível.
                </p>
                <p class="text-justify">
                    Ao longo dos anos, desenvolvemos uma ampla variedade de pallets que atendem a diferentes necessidades e especificações, como pallets de madeira, metal e plástico. Além disso, também oferecemos serviços personalizados de fabricação para atender às demandas específicas de nossos clientes.
                </p>
                <p class="text-justify">
                    Nosso compromisso com a qualidade, o atendimento ao cliente e a entrega pontual fazem da nossa empresa uma referência no mercado de pallets. Agradecemos a confiança e a parceria de nossos clientes ao longo desses anos e estamos sempre empenhados em superar suas expectativas.
                </p>
            </div>
        </div>
    </div>    
</template>
<script>
import NavbarVue from '../util/Navbar.vue'
import CardAdvertisement from '../util/CardAdvertisement.vue';
export default {
    name:"AboutComponent",
    components:{NavbarVue, CardAdvertisement},
    props:{
    active:{
      type:String,
    }
    },
    data(){
        return{
            data:{mainText:"Nosso trabalho é dar qualidade ao seu trabalho!", subText:"A 22 anos no mercado, a Palleteria se esforça em trazer os melhores resultados para você.", img:"/img/grupo-pessoas.jpg", invert:true, background:"#fff"}
        }
    }

}
</script>
<style scoped>
h2{
    font-weight: 600;
    font-size: 2rem;
    margin-top:2rem;
}
p {
    margin-top: 0;
    font-size: 18px;
    margin-bottom: 20px;
    font-weight: 700;
}
.text-justify{
    text-justify: justify !important;
}
</style>