<template>
    <div>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li
                    v-for="(slide, index) in slides"
                    :key="index"
                    :data-target="'#myCarousel'"
                    :data-slide-to="index"
                    :class="{ active: index === 0 }"
                ></li>
            </ol>

            <!-- Slides -->
            <div class="carousel-inner">
                <div
                    v-for="(slide, index) in slides"
                    :key="index"
                    :class="{ 'carousel-item': true, active: index === 0 }"
                >
                    <img :src="slide.image" :alt="slide.alt" />
                </div>
            </div>

            <!-- Controls -->
            <a
                class="carousel-control-prev"
                href="#myCarousel"
                role="button"
                data-slide="prev"
            >
                <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                ></span>
                <span class="sr-only">Previous</span>
            </a>
            <a
                class="carousel-control-next"
                href="#myCarousel"
                role="button"
                data-slide="next"
            >
                <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                ></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            slides: [
                {
                    image: "/adminlte/dist/img/images/main-slide-1.png",
                    alt: "Image 1",
                },
                {
                    image: "/adminlte/dist/img/images/main-slide-2.png",
                    alt: "Image 2",
                },
                {
                    image: "/adminlte/dist/img/images/main-slide-3.png",
                    alt: "Image 3",
                },
            ],
        };
    },
};
</script>

<style>
.carousel-inner img {
    width: 100%;
    height: 100%;
}

.carousel {
    width: 100%;
    height: 100%;
}
</style>
