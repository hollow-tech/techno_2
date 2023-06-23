<template>
    <div>
        <div
            id="myCarousel"
            class="carousel slide blockSlider"
            data-ride="carousel"
        >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li
                    v-for="(product, index) in products"
                    :key="index"
                    :data-target="'#myCarousel'"
                    :data-slide-to="index"
                    :class="{ active: index === 0 }"
                ></li>
            </ol>

            <!-- Slides -->
            <div class="carousel-inner">
                <div
                    v-for="(product, index) in products"
                    :key="index"
                    :class="{ 'carousel-item': true, active: index === 0 }"
                >
                    <div class="product">
                        <Link :href="`/products/${product.id}`">
                            <div class="swiper-slide">
                                <div class="aside-slider__item">
                                    <div class="aside-slider__product product">
                                        <div class="aside-slider__item">
                                            <div
                                                class="aside-slider__product product"
                                            >
                                                <div class="product__discount">
                                                    0 - 0 - 12
                                                </div>
                                                <div class="product__img">
                                                    <img
                                                        :src="
                                                            getImageUrl(
                                                                product.image
                                                            )
                                                        "
                                                        alt=""
                                                    />
                                                </div>
                                                <div class="product__name">
                                                    {{ product.title }}
                                                </div>
                                                <div
                                                    class="product__model"
                                                ></div>
                                                <div class="product__rate rate">
                                                    <span class="rate__icon"
                                                        ><img
                                                            src="../../../public/adminlte/dist/img/images/star.svg"
                                                            alt="star"
                                                    /></span>
                                                    <span
                                                        class="rate__number"
                                                        >{{
                                                            product.rate
                                                        }}</span
                                                    >
                                                    <span class="rate__comments"
                                                        >({{
                                                            product.comments
                                                        }})</span
                                                    >
                                                </div>
                                                <div class="product__price">
                                                    {{ product.price }}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="product__btn">
                                            <form action="#" method="POST">
                                                <button
                                                    class="product__link"
                                                    type="submit"
                                                >
                                                    В корзину
                                                </button>
                                            </form>
                                            <span class="product__favorite"
                                                ><img
                                                    src="../../../public/adminlte/dist/img/images/favorite.svg"
                                                    alt=""
                                            /></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Link>
                    </div>
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
import axios from "axios";
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
    },

    data() {
        return {
            products: [],
        };
    },
    mounted() {
        axios
            .get("api/products")
            .then((response) => {
                this.products = response.data;
            })
            .catch((error) => {
                console.log(error);
            });
    },
    methods: {
        getImageUrl(image) {
            return `/adminlte/dist/img/images/${image}`;
        },
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

.blockSlider {
    width: 100%;
    height: 100%;
}

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
