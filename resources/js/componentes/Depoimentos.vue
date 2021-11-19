<template>
    <section class="box highlight">
        <h2>Depoimentos</h2>

        <ul class="special">
            <li
                v-for="(item, key) in depoimentos"
                :key="key"
                :class="item.name === actived.name ? 'actived' : ''">
                <a
                    href="javascript: void(0);"
                    :style="`background-image: url('${item.source}'); ${item.style ? item.style : ''}`"
                    @click="index = key"></a>
            </li>
        </ul>
        <header>
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
              index: 0,
              depoimentos: [
                  {
                    source: "/public/images/depoimentos/depoimentos_0.png",
                    name: "Juliana Paes - mãe do Theo",
                    text: `“Estamos amando a escola, melhor escolha que fiz para meu filho, ele vem desenvolver muito tanto na educação como pessoal.”`
                  },
                  {
                    source: "/public/images/depoimentos/depoimentos_1.jpg",
                    name: "Danila Oliveira - mãe da Izadora",
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
                    text: `“Minha filha estuda há anos neste colégio e sempre foi a nossa segunda casa. Total confiança e segurança. Gratidão sempre!”`,
                    style: `background-position-x: -48px;`
                  },
              ]
          }
        },
        mounted() {
            setInterval(() => {
                this.index++
            }, 8000);
        },
        watch: {
            index: function (newV) {
                if(newV > 3) this.index = 0
            }
        },
        computed: {
            actived() {
                return this.depoimentos[this.index]
            }
        },


    }

</script>

<style scoped>

    .special {
        margin-top: 2em;
    }

    a {
        width: 135px;
        height: 135px;
        border-radius: 100%;
        background-position: center;
        background-size: cover;
        opacity: 0.4;
    }

    .actived {
        top: -1em;
    }

    .actived > a {
        opacity: 1 !important;
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
