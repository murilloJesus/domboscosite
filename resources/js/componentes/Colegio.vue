<template>

    <div class="col-3 col-12-medium">
        <div class="sidebar">
            <!-- Recent Posts -->
            <section>
                <h2 class="major"><span>Colégio</span></h2>
                <ul class="divided">
                    <li v-for="(item, index) in segmentos" :key="index">
                        <article class="box post-summary" >
                            <h4><a
                                :class="actived.name == item.name ? 'active' : '' "
                                @click="set_actived(item)"
                                href="javascript: void(0)">{{item.name}}</a></h4>
                        </article>
                    </li>
                </ul>
            </section>

        </div>
    </div>
    <div class="col-9 col-12-medium">
        <div class="content" ref="content">
            <!-- Content -->
            <article class="box post">
                <header>
                    <h3><a href="#">{{actived.name}}</a></h3>
                    <p v-if="actived.desc">{{actived.desc}}</p>
                    <!-- <ul class="meta">
                        <li class="icon fa-clock">15 minutes ago</li>
                        <li class="icon fa-comments"><a href="#">8</a></li>
                    </ul> -->
                </header>
                <a
                    v-if="actived.source"
                    :style="`background-image: url('${actived.source}')`"
                    href="#"
                    class="image featured parallax"
                ></a>
                <p
                v-for="(text, t_index) in actived.text"
                :key="t_index"
                class="paragraph">
                    {{text}}
                </p>
                <a :href="actived.see_more" v-if="actived.see_more" class="button alt">Continue Lendo</a>
            </article>
        </div>
    </div>

</template>

<script>
    export default {
        name: "Content",
        data: () => {
            return {
                actived: {},
                segmentos: [
                    {
                        name: "História",
                        desc: false,
                        source: "/public/images/historia/historia.jpeg",
                        text: [
                            `O Colégio DOM BOSCO nasce em 2009 com a denominação “Múltiplo Educação Infantil”, atendendo ao segmento da Educação Infantil, tendo o afeto e a educação humanizada como principais pilares em sua prática, conquistando uma ascensão constante e surpreendente, o que nada mais foi do que o resultado e um excelente trabalho desenvolvido.`,
                            ],
                        see_more: "/colegio#historia"
                    },
                    {
                        name: "Missão, Visão e Valores",
                        desc: false,
                        source: false,
                        text: [
                            `VISÃO: Ser uma instituição educacional de referência, promovendo a excelência humana e acadêmica de uma sociedade.`,
                            `MISSÃO: Através de uma educação de qualidade, íntegra e inovadora,  promover a formação de cidadãos autônomos, criativos, cooperativos, resilientes e com competência para gerar transformações sociais, tecnológicas e ecológicas.`,
                            `VALORES:
                                Respeito
                                Comprometimento
                                Pertencimento
                                Empatia
                                Criatividade
                                `
                        ]
                    },
                    {
                        name: "Premiações",
                        desc: false,
                        source: "/public/images/historia/missao.jpeg",
                        text: [
                        ]
                    },
                    {
                        name: "Proposta Pedagógica",
                        desc: "Educação Infantil.",
                        source: "/public/images/historia/proposta-pedagogica.webp",
                        text: [
                            `A Educação Infantil do Colégio Dom Bosco busca incentivar nas crianças, por meio de brincadeiras e de interações, o gosto pela descoberta, além de valorizar suas experiências individuais e coletivas.`,
                            `Esta etapa de ensino tem como objetivo principal estimular o desenvolvimento integral das crianças de 0 a 5 anos, garantindo a cada uma o acesso aos processos de construção de conhecimentos e à aprendizagem de diferentes linguagens, bem como o direito às artes, à brincadeira, à convivência, à confiança, à cultura, à dignidade, à liberdade, à proteção, ao respeito, à saúde e à interação com outras crianças.`
                        ],
                        see_more: "/proposta-pedagogica"
                    },
                    {
                        name: "Infraestrutura",
                        desc: false,
                        source: false,
                        text: [
                            `Para ampliar a oportunidade de exposição das crianças à língua inglesa, o Período Integral e Bilíngue é a opção que mais se aproxima dos padrões internacionais.`,
                            `O objetivo deste projeto é reduzir as lacunas na educação básica escolar brasileira no que diz respeito à língua inglesa, tornando-a um elemento de formação permanente para os nossos alunos.`
                        ]
                    }
                ]
            }
        },
        created(){
            this.actived = this.segmentos[0]
        },
        methods: {
            set_actived(item){
                this.actived = item;
                $([document.documentElement, document.body]).animate({
                    scrollTop: $(this.$refs.content).offset().top - this.size_of_menu()
                }, 2000);
            }
        }
    }

</script>

<style scoped>
.parallax {
    min-height: 250px;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.active {
    color: #0a58ca;
}

.paragraph {
    text-indent: 1em;
    font-size: 1.3em;
}

@media screen and (max-width: 736px) {
    .text {
        font-size: 1.1em;
    }
}
</style>
