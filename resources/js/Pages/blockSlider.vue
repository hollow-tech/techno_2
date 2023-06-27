<template>
    <div id="myCarouse2" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarouse2" data-slide-to="0" class="active"></li>
            <li data-target="#myCarouse2" data-slide-to="1"></li>
            <li data-target="#myCarouse2" data-slide-to="2"></li>
        </ol>

        <!-- Slides -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    src="../../../public/adminlte/dist/img/images/main-slide-1.png"
                    alt="Image 1"
                    class="d-block w-100"
                />
                <div class="carousel-caption">
                    <h3>Slide 1</h3>
                    <p>Some description for slide 1</p>
                </div>
            </div>
            <div class="carousel-item">
                <img
                    src="../../../public/adminlte/dist/img/images/main-slide-1.png"
                    alt="Image 2"
                    class="d-block w-100"
                />
                <div class="carousel-caption">
                    <h3>Slide 2</h3>
                    <p>Some description for slide 2</p>
                </div>
            </div>
            <div class="carousel-item">
                <img
                    src="../../../public/adminlte/dist/img/images/main-slide-1.png"
                    alt="Image 3"
                    class="d-block w-100"
                />
                <div class="carousel-caption">
                    <h3>Slide 3</h3>
                    <p>Some description for slide 3</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a
            class="carousel-control-prev"
            href="#myCarouse2"
            role="button"
            data-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a
            class="carousel-control-next"
            href="#myCarouse2"
            role="button"
            data-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</template>

<script>
import axios from "axios";
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
    },
    props: {
        data: {
            type: Object,
            required: true,
        },
    },
    methods: {
        getImageUrl(image) {
            return `/adminlte/dist/img/images/${image}`;
        },
    },
};
</script>

<style>
/* asda? */

.carousel {
    position: relative;
}

.carousel.pointer-event {
    -ms-touch-action: pan-y;
    touch-action: pan-y;
}

.carousel-inner {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.carousel-inner::after {
    display: block;
    clear: both;
    content: "";
}

.carousel-item {
    position: relative;
    display: block;
    float: left;
    width: 100%;
    margin-right: -100%;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    transition: -webkit-transform 0.6s ease;
    transition: transform 0.6s ease;
    transition: transform 0.6s ease, -webkit-transform 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
    .carousel-item {
        transition: none;
    }
}

.carousel-item.active,
.carousel-item-next,
.carousel-item-prev {
    display: block;
}

.carousel-item-next:not(.carousel-item-left),
.active.carousel-item-right {
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
}

.carousel-item-prev:not(.carousel-item-right),
.active.carousel-item-left {
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
}

.carousel-fade .carousel-item {
    opacity: 0;
    transition-property: opacity;
    -webkit-transform: none;
    transform: none;
}

.carousel-fade .carousel-item.active,
.carousel-fade .carousel-item-next.carousel-item-left,
.carousel-fade .carousel-item-prev.carousel-item-right {
    z-index: 1;
    opacity: 1;
}

.carousel-fade .active.carousel-item-left,
.carousel-fade .active.carousel-item-right {
    z-index: 0;
    opacity: 0;
    transition: opacity 0s 0.6s;
}

@media (prefers-reduced-motion: reduce) {
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        transition: none;
    }
}

.carousel-control-prev,
.carousel-control-next {
    position: absolute;
    top: 0;
    bottom: 0;
    z-index: 1;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: center;
    justify-content: center;
    width: 15%;
    padding: 0;
    color: #fff;
    text-align: center;
    background: none;
    border: 0;
    opacity: 0.5;
    transition: opacity 0.15s ease;
}

@media (prefers-reduced-motion: reduce) {
    .carousel-control-prev,
    .carousel-control-next {
        transition: none;
    }
}

.carousel-control-prev:hover,
.carousel-control-prev:focus,
.carousel-control-next:hover,
.carousel-control-next:focus {
    color: #fff;
    text-decoration: none;
    outline: 0;
    opacity: 0.9;
}

.carousel-control-prev {
    left: 0;
}

.carousel-control-next {
    right: 0;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    display: inline-block;
    width: 20px;
    height: 20px;
    background: 50% / 100% 100% no-repeat;
}

.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
}

.carousel-indicators {
    position: absolute;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 15;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-pack: center;
    justify-content: center;
    padding-left: 0;
    margin-right: 15%;
    margin-left: 15%;
    list-style: none;
}

.carousel-indicators li {
    box-sizing: content-box;
    -ms-flex: 0 1 auto;
    flex: 0 1 auto;
    width: 30px;
    height: 3px;
    margin-right: 3px;
    margin-left: 3px;
    text-indent: -999px;
    cursor: pointer;
    background-color: #fff;
    background-clip: padding-box;
    border-top: 10px solid transparent;
    border-bottom: 10px solid transparent;
    opacity: 0.5;
    transition: opacity 0.6s ease;
}

@media (prefers-reduced-motion: reduce) {
    .carousel-indicators li {
        transition: none;
    }
}

.carousel-indicators .active {
    opacity: 1;
}

.carousel-caption {
    display: none;
    position: absolute;
    right: 15%;
    bottom: 20px;
    left: 15%;
    z-index: 10;
    padding-top: 20px;
    padding-bottom: 20px;
    color: #fff;
    text-align: center;
}

/* slider end */
.product {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-radius: 8px;
    background-color: #fff;
    padding: 10px;
    flex: 0 1 19%;
}

.product__discount {
    width: max-content;
    padding: 5px;
    background-color: #fc6b3f;
    border-radius: 5px;
    color: #fff;
    font-size: 12px;
}
.product__img {
    width: 100%;
    display: flex;
    justify-content: center;
}

.product__img img {
    height: 140px;
    width: 140px;
}

.product__img_inner {
    height: 140px;
    width: 140px;
}

.product__name {
    line-height: 2;
}
.product__model {
    margin-bottom: 20px;
}
.product__rate {
    margin-bottom: 10px;
    display: flex;
    gap: 5px;
}

.rate__icon img {
    height: 20px;
    margin-top: -4px;
}
.rate__number {
    font-weight: 700;
}
.rate__comments {
    color: rgb(150, 148, 148);
}
.product__price {
    margin-bottom: 15px;
    font-size: 16px;
    font-weight: 700;
    line-height: 24px;
}

.product__btn {
    display: flex;
}

.product__link {
    cursor: pointer;
    display: block;
    padding: 10px;
    background-color: #2196f3;
    color: #fff;
    max-width: 150px;
    text-align: center;
    border-radius: 8px;
    font-size: 16px;
    font-weight: 700;
    margin-right: 10px;
}

.disabled {
    background-color: #fff;
    color: #2196f3;
}

.product__favorite img {
    cursor: pointer;
    height: 25px;
    margin-top: 5px;
}
</style>
