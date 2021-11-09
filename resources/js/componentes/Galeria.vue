<template>
    <div class="col-12">

        <!-- Blog -->
        <section class="box blog">
            <div>
                <div class="row">
                    <div class="col-9 col-12-medium">
                        <div class="content">

                            <!-- Featured Post -->
                            <article class="box post">
                                <header>
                                    <h3><a href="#">Estruturas</a></h3>
                                    <p>With a smaller subtitle that attempts to elaborate</p>
                                    <!-- <ul class="meta">
                                        <li class="icon fa-clock">15 minutes ago</li>
                                        <li class="icon fa-comments"><a href="#">8</a></li>
                                    </ul> -->
                                </header>

                                <div class="container">
                                    <div class="mySlides">
                                        <div class="numbertext">1 / 6</div>
                                        <div class="image-gallery" style="background-image: url('/public/images/estrutura/Biblioteca.png')">

                                        </div>
                                    </div>

                                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                                    <a class="next" onclick="plusSlides(1)">❯</a>

                                    <div class="caption-container">
                                        <p id="caption"> Interno </p>
                                    </div>

                                    <div class="row">
                                        <div class="column">
                                            <img class="demo cursor" src="/public/images/segmentos/segmento_infantil.png" style="width:100%"
                                                onclick="currentSlide(1)" alt="The Woods">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="/public/images/segmentos/segmento_infantil.png" style="width:100%"
                                                onclick="currentSlide(2)" alt="Cinque Terre">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="/public/images/segmentos/segmento_infantil.png" style="width:100%"
                                                onclick="currentSlide(3)" alt="Mountains and fjords">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="/public/images/segmentos/segmento_infantil.png" style="width:100%"
                                                onclick="currentSlide(4)" alt="Northern Lights">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="/public/images/segmentos/segmento_infantil.png" style="width:100%"
                                                onclick="currentSlide(5)" alt="Nature and sunrise">
                                        </div>
                                        <div class="column">
                                            <img class="demo cursor" src="/public/images/segmentos/segmento_infantil.png" style="width:100%"
                                                onclick="currentSlide(6)" alt="Snowy Mountains">
                                        </div>
                                    </div>
                                </div>
                            </article>

                        </div>
                    </div>
                    <div class="col-3 col-12-medium">
                        <div class="sidebar">

                            <!-- Archives -->
                            <ul class="divided">
                                <li>
                                    <article class="box post-summary">
                                        <h3><a href="#">A Subheading</a></h3>
                                        <ul class="meta">
                                            <li class="icon fa-clock">6 hours ago</li>
                                            <li class="icon fa-comments"><a href="#">34</a></li>
                                        </ul>
                                    </article>
                                </li>
                                <li>
                                    <article class="box post-summary">
                                        <h3><a href="#">Another Subheading</a></h3>
                                        <ul class="meta">
                                            <li class="icon fa-clock">9 hours ago</li>
                                            <li class="icon fa-comments"><a href="#">27</a></li>
                                        </ul>
                                    </article>
                                </li>
                                <li>
                                    <article class="box post-summary">
                                        <h3><a href="#">And Another</a></h3>
                                        <ul class="meta">
                                            <li class="icon fa-clock">Yesterday</li>
                                            <li class="icon fa-comments"><a href="#">184</a></li>
                                        </ul>
                                    </article>
                                </li>
                                <li>
                                    <article class="box post-summary">
                                        <h3><a href="#">And Another</a></h3>
                                        <ul class="meta">
                                            <li class="icon fa-clock">2 days ago</li>
                                            <li class="icon fa-comments"><a href="#">286</a></li>
                                        </ul>
                                    </article>
                                </li>
                                <li>
                                    <article class="box post-summary">
                                        <h3><a href="#">And One More</a></h3>
                                        <ul class="meta">
                                            <li class="icon fa-clock">3 days ago</li>
                                            <li class="icon fa-comments"><a href="#">8,086</a></li>
                                        </ul>
                                    </article>
                                </li>
                            </ul>
                            <a href="#" class="button alt">Ver Mais</a>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
    export default {
        name: "Galeria",

    }

</script>

<style scoped>

.image-gallery{
    width: 100%;
    height: 450px;
    background-color: #152445;
}

/* FROM W3SCHOOL */
/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}
</style>
