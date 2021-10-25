<template>
    <section class="box highlight">
        <ul class="special">
            <li
                v-for="(item, index) in depoimentos"
                :key="index"
                :class="item.name === actived.name ? 'actived' : ''">
                <a
                    href="javascript: void(0);"
                    :style="`background-image: url('${item.source}')`"
                    @click="actived = item"></a>
            </li>
        </ul>
        <header>
            <h2>Depoimentos</h2>
            <p>
                {{actived.name}}
            </p>
        </header>
        <p class="text">
            {{actived.text}}
        </p>
    </section>
</template>

<script>
    export default {
        name: "Depoimentos",
        data: () => {
          return {
              actived: {},
              depoimentos: [
                  {
                    source: "/public/images/depoimentos/depoimentos_0.png",
                    name: "Juliana Paes - mãe do Theo",
                    text: `“Estamos amando a escola, melhor escolha que fiz para meu filho, ele vem desenvolver muito tanto na educação como pessoal.”`
                  },
                  {
                    source: "/public/images/depoimentos/depoimentos_1.jpg",
                    name: "Danila Oliveira - mãe de Izadora",
                    text: `“Esse colégio é sensacional, minha filha diariamente está motivada e apaixonada pelo estudo e pela escola. Parabéns a toda equipe por cuidar e despertar o saber em nossos filhos!” `
                  },
                  {
                    source: "/public/images/depoimentos/depoimentos_2.png",
                    name: "Marina Harder - mãe da Manuella",
                    text: `“Minha filha está desde 2019 e sem sombra de dúvidas foi a melhor escolha de colégio.” `
                  },
                  {
                    source: "/public/images/depoimentos/depoimentos_3.png",
                    name: "Luciana Portela - mãe da Giullia",
                    text: `“Minha filha estuda há anos neste colégio e sempre foi a nossa segunda casa. Total confiança e segurança. Gratidão sempre!”`
                  },
              ]
          }
        },
        created() {
            this.actived = this.depoimentos[Math.floor(Math.random() * (this.depoimentos.length -1))]
        }
    }

</script>

<style scoped>
    a {
        width: 135px;
        height: 135px;
        border-radius: 100%;
        background-position: center;
        background-size: cover;
    }

    .actived {
        top: -1em;
    }

    .text {
        font-size: 1.3em;
        height: 30px;
    }

    @media screen and (max-width: 736px) {
        a {
            width: 74px;
            height: 74px;
        }
        .text {
            font-size: 1.1em;
        }
    }
</style>
