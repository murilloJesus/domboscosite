<template>

    <div class="col-3 col-12-medium">
        <div class="sidebar">

            <!-- Sidebar -->

            <!-- Recent Posts -->
            <section>
                <h2 class="major"><span>Colegio</span></h2>
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
                <!-- <a href="#" class="button alt">Continue Lendo</a> -->
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
                        desc: "Despertar, envolver, descobrir.",
                        source: "/public/images/historia/historia.jpeg",
                        text: [
                            `A Educação Infantil é uma fase muito importante na formação do aluno. Brincar é a principal tarefa dos pequenos, pois é na brincadeira que descobrem o mundo à sua volta, comunicam-se e se conectam em um ambiente social.`,
                            `O nosso Colégio tem um ambiente de  aprendizagem agradável para que seu filho possa desenvolver suas capacidades e estímulos imaginativos, além de ser acolhedor.`
                        ]
                    },
                    {
                        name: "Missão, Visão, Valores",
                        desc: "Autonomia, observação e desenvolver.",
                        source: "/public/images/historia/missao.png",
                        text: [
                            `Nos Anos Iniciais do Ensino Fundamental (1º ao 5º ano), os estudantes aprendem usando a criatividade e a imaginação. Respeitar o tempo e as características de cada aluno é essencial.`,
                            `Em nosso colégio aplicamos o trabalho em grupo, a solução colaborativa de situações-problema e a promoção da criatividade para, dessa forma, melhorar a capacidade de decisão e a capacidade de desenvolver saberes, considerando seu próprio cotidiano.`
                        ]
                    },
                    {
                        name: "Proposta Pedagogica",
                        desc: "Independência, reflexão e raciocínio.",
                        source: "/public/images/historia/proposta-pedagogica.webp",
                        text: [
                            `É no período dos Anos Finais em que os alunos passam por grandes mudanças físicas, emocionais e psicológicas.`,
                            `Assim, para que o aprendizado seja significativo e divertido, oferecemos uma extensa variedade de gêneros textuais, distribuídos nas diversas disciplinas. Isso favorece o letramento no ambiente educativo. Com atividades que contemplam métodos para “aprender a aprender”, desenvolvendo a interdisciplinaridade, fortalecendo a qualidade do ensino e concretizando a aprendizagem como um ato de interação entre autor, professor, aluno, família e escola.`
                        ]
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
