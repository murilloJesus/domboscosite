<template>
    <section class="carousel slide carousel-fade">
            <div class="carousel-inner">
                <div id="banner" class="carousel-item active" v-for="(item, index) in banners" :key="index">
                    <div class="content">
                        <h2>{{item.header}}</h2>
                        <p>{{item.text}}</p>
                        <a href="#main" class="button scrolly">{{item.link}}</a>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
    </section>
</template>

<script>
import { reactive } from '@vue/reactivity'
    export default {
        name: "Banner",
        setup(){
            const banners = reactive([
                {
                    header: `Welcome to TXT by HTML5 UP`,
                    text: `A free responsive site template built on HTML5, CSS3, and some other stuff`,
                    link: `Alright let's go`,
                    image: `/images/banner.webp`
                },
                {
                    header: `Welcome to TXT by HTML5 UP 2`,
                    text: `A free responsive site template built on HTML5, CSS3, and some other stuff 9`,
                    link: `Alright let's go2`,
                    image: `/images/banner2.jpeg`
                },
            ])


            return {
                banners
            }
        }
    }

</script>

<style>

</style>
