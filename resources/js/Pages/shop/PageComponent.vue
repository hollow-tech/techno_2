<template lang="">
    <section class="page">
        <div class="page__container">
            <div class="page__inner">
                <div class="page__detail detail-page">
                    <div class="detail-page__discount discount">
                        <div class="discount__item">Trade-in</div>
                        <div class="discount__item">0 - 0 - 24</div>
                        <div class="discount__item_green">
                            {{ product.discount }}%
                        </div>
                    </div>
                    <h1 class="detail-page__name">{{ product.title }}</h1>
                    <div class="detail-page__blocks detail-blocks">
                        <div class="detail-blocks__gallery">
                            <div class="detail-blocks__rate">
                                <img
                                    src="../../../../public/adminlte/dist/img/../../../../public/adminlte/dist/img/images/star.svg"
                                    alt="star"
                                />
                                {{ product.rate }}
                                <span>({{ product.comments }})</span>
                            </div>
                            <div class="detail-blocks__images images">
                                <div class="catalog__list">
                                    <img
                                        class="catalog__arrow_up"
                                        src="../../../../public/adminlte/dist/img/images/page/arrow.svg"
                                        alt=""
                                    />
                                    <ul class="detail-blocks__catalog catalog">
                                        <li class="catalog__item">
                                            <img
                                                src="../../../../public/adminlte/dist/img/images/page/view-1.webp"
                                                alt="view-1"
                                            />
                                        </li>
                                        <li class="catalog__item">
                                            <img
                                                src="../../../../public/adminlte/dist/img/images/page/view-2.webp"
                                                alt=""
                                            />
                                        </li>
                                        <li class="catalog__item">
                                            <img
                                                src="../../../../public/adminlte/dist/img/images/page/view-3.webp"
                                                alt=""
                                            />
                                        </li>
                                        <li class="catalog__item">
                                            <img
                                                src="../../../../public/adminlte/dist/img/images/page/view-4.webp"
                                                alt=""
                                            />
                                        </li>
                                        <li class="catalog__item">
                                            <img
                                                src="../../../../public/adminlte/dist/img/images/page/view-5.webp"
                                                alt=""
                                            />
                                        </li>
                                    </ul>
                                    <img
                                        class="catalog__arrow_down"
                                        src="../../../../public/adminlte/dist/img/images/page/arrow.svg"
                                        alt=""
                                    />
                                </div>
                                <div class="images__image_main">
                                    <img
                                        :src="getImageUrl(product.image)"
                                        alt="product-photo"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="detail-blocks__content content">
                            <div class="content-block">
                                <div class="content-block__colors colors">
                                    <div class="colors__title">
                                        <span>Цвет: </span>
                                        {{ product.color }}
                                    </div>
                                    <div class="colors__types">
                                        <img
                                            src="./../../../../public/adminlte/dist/img/images/page/type-1.webp"
                                            alt=""
                                        />
                                        <img
                                            src="./../../../../public/adminlte/dist/img/images/page/type-2.webp"
                                            alt=""
                                        />
                                        <img
                                            src="./../../../../public/adminlte/dist/img/images/page/type-3.webp"
                                            alt=""
                                        />
                                        <img
                                            src="./../../../../public/adminlte/dist/img/images/page/type-4.webp"
                                            alt=""
                                        />
                                    </div>
                                </div>
                                <div class="content-block__memory memory">
                                    <div class="memory__title">
                                        Объем памяти
                                    </div>
                                    <div class="memory__types">
                                        <span>128GB</span>
                                        <span>256GB</span>
                                        <span>512GB</span>
                                    </div>
                                </div>
                                <div class="content-block__desc desc">
                                    <div class="desc__title">Описание</div>
                                    <div class="desc__names">
                                        <ul class="desc__list">
                                            <li class="desc__item">
                                                <div>Модельный год</div>
                                                <div class="desc__dot"></div>
                                                <div>
                                                    {{ product.year }}
                                                </div>
                                            </li>
                                            <li class="desc__item">
                                                <div>
                                                    Диагональ дисплея, дюйм
                                                </div>
                                                <div class="desc__dot"></div>
                                                <div>
                                                    {{ product.screen_size }}
                                                </div>
                                            </li>
                                            <li class="desc__item">
                                                <div>Разрешение дисплея</div>
                                                <div class="desc__dot"></div>
                                                <div>
                                                    {{
                                                        product.screen_definition
                                                    }}
                                                </div>
                                            </li>
                                            <li class="desc__item">
                                                <div>Тип матрицы</div>
                                                <div class="desc__dot"></div>
                                                <div>
                                                    {{ product.screen_type }}
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page__aside aside">
                    <div class="aside__number">
                        <div class="aside__artikul">Артикул: 257402</div>
                        <div class="aside__guarantee">Гарантия низкой цены</div>
                    </div>
                    <div class="aside__price">
                        {{ product.price }} ₸

                        <span>699 990 ₸</span>
                    </div>
                    <div class="aside__bonus">
                        до <span>20 999</span> бонусов
                        <img
                            src="../../../../public/adminlte/dist/img/images/aside/question.svg"
                            alt=""
                        />
                    </div>
                    <div class="aside__credit credit">
                        <div class="credit__item">
                            <span>В кредит</span>
                            <span>12 451 ₸ x 60 мес</span>
                        </div>
                        <div class="credit__item">
                            <span>В рассрочку</span>
                            <span>34 999 ₸ x 12 мес</span>
                        </div>
                    </div>

                    <form @submit.prevent="submitForm" method="POST">
                        <input type="hidden" name="_token" :value="csrfToken" />
                        <input type="hidden" name="id" v-model="product.id" />
                        <input type="hidden" name="product_id" v-model="product.id" />
                        <input
                            type="hidden"
                            name="title"
                            v-model="product.title"
                        />
                        <input
                            type="hidden"
                            name="price"
                            v-model="product.price"
                        />
                        <input type="hidden" v-model="product.discount" />
                        <input type="hidden" v-model="product.image" />
                        <button class="aside__btn" type="submit">
                            Добавить в корзину
                        </button>
                    </form>

                    <div class="aside__info">
                        Самовывоз: 30 мая <span>из 2 магазинов</span>
                    </div>
                    <div class="aside__delivery">
                        Доставка: <span>31 мая</span>
                    </div>
                    <div class="aside__inform">Сообщить о снижении цены</div>
                    <div class="aside__buttons buttons-aside">
                        <a href="#" class="buttons-aside__item">Сравнить</a>
                        <a href="#" class="buttons-aside__item">В избранное</a>
                        <a href="#" class="buttons-aside__item">Поделиться</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import FooterComponentVue from "./FooterComponent.vue";
import HeaderComponentVue from "./HeaderComponent.vue";
import axios from "axios";
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,

        HeaderComponentVue,
        FooterComponentVue,
    },
    props: {
        product: {
            type: Object,
            required: true,
        },
    },

    data() {
        return {
            cartItems: [],
        };
    },
    methods: {
        getImageUrl(image) {
            // Assuming `product.image` contains the image filename or relative path
            return `/adminlte/dist/img/images/${image}`;
        },
        submitForm() {
            // Use Inertia to send the data to the Laravel backend
            this.$inertia
                .post("/cart", {
                    _token: this.csrfToken,
                    id: this.product.id,
                    product_id: this.product.id,
                    title: this.product.title,
                    price: this.product.price,
                    discount: this.product.discount,
                    image: this.product.image,
                })
                .then(() => {
                    // Handle the success response, if needed
                })
                .catch((error) => {
                    // Handle any errors that occur during the form submission
                    console.error(error);
                });
        },
    },
};
</script>
<style lang="css" scoped>
.page {
    margin-bottom: 30px;
}
.page__inner {
    display: flex;
}

.page__detail {
    padding: 10px;
    background-color: #fff;
    width: 816px;
    margin-right: 15px;
}

.discount {
    display: flex;
    gap: 15px;
    margin-bottom: 15px;
}

.discount__item {
    padding: 5px;
    background: #f48012;
    color: #fff;
    border-radius: 5px;

    font-weight: 700;
}
.discount__item_green {
    padding: 5px;
    background: #73be6f;
    color: #fff;
    border-radius: 5px;

    font-weight: 700;
}

.discount__page__name {
    color: #212427;
    font-size: 18px;
    font-family: "Montserrat", sans-serif;
    line-height: 24px;
    font-weight: 600;
}

.detail-page__blocks {
    margin-top: 40px;
    display: flex;
}

.detail-blocks__gallery {
    position: relative;
    width: 50%;
}
.detail-blocks__rate {
    position: absolute;
    right: 20px;
    color: #000;
    font-weight: 700;
    display: inline-block;
    border: 1px solid #9dabb8;
    padding: 3px;
    border-radius: 5px;
    gap: 5px;
}

.detail-blocks__rate img {
    width: 16px;
}

.detail-blocks__rate span {
    color: #9dabb8;
}

.detail-blocks__content {
}

.content {
    width: 100%;
}

.detail-blocks__images {
}
.detail-blocks__catalog {
}
.catalog {
}
.catalog__item {
    width: 56px;
    padding: 8px;
    border: 1px solid #9dabb8;
    border-radius: 5px;
    margin-bottom: 10px;
}

.catalog__item img {
    width: 38px;
}

.catalog__arrow_up {
    cursor: pointer;
    width: 20px;
    margin-left: 18px;
    margin-top: 10px;
    margin-bottom: 10px;
}

.catalog__arrow_down {
    cursor: pointer;
    width: 20px;
    margin-left: 18px;
    margin-top: 10px;
    margin-bottom: 10px;
    transform: rotate(180deg);
}

.images {
    display: flex;
}

.images__image_main {
    margin-top: 50px;
}

.images__image_main img {
    width: 304px;
}

/*page__content*/

.aside-page__colors {
}
.colors {
    padding-left: 10px;
}
.colors__title {
    color: #000;
    font-weight: 700;
    margin-bottom: 20px;
}
.colors__title span {
    color: #8e979f;
}
.colors__types {
    margin-bottom: 20px;
    display: flex;
    gap: 10px;
}
.colors__types img {
    width: 30px;
    padding: 3px;
    border: 1px solid #8e979f;
    border-radius: 5px;
}

.memory {
    padding-left: 10px;
}
.memory__title {
    margin-bottom: 20px;
    font-weight: 700;
    margin-bottom: 20px;
    color: #8e979f;
}
.memory__types span {
    display: inline-block;
    border: 1px solid #8e979f;
    border-radius: 8px;
    padding: 5px;
    margin-bottom: 20px;
    color: #8e979f;
    margin-right: 10px;
}
.desc {
    width: 100%;
}

.desc__title {
    color: #000;
    font-weight: 700;
    margin-bottom: 20px;
}

.desc__item {
    display: flex;
    color: #000;
    margin-bottom: 10px;
}

.desc__dot {
    border-bottom: dotted 3px #8e979f;
    flex: 1 1 auto;
    float: left;
    position: relative;
    display: block;
    height: 12px;
    margin: 0 5px 0 5px;
}

@media (max-width: 425px) {
    .page__inner {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .catalog__list {
        display: none;
    }

    .detail-blocks {
        display: flex;
        flex-direction: column;
        width: 100%;
    }

    .page__detail {
        width: 100%;
    }

    .detail-blocks__gallery {
        width: 100%;
    }

    .content {
        padding: 20px 0;
    }

    .colors__types img {
        width: 60px;
        margin-right: 10px;
    }

    .desc {
        width: 100%;
    }

    .detail-page {
        margin-bottom: 20px;
    }
}
/* aside */
.page__aside {
    width: 33%;
}
.aside {
    background-color: #fff;
    padding: 10px;
}
.aside__number {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}
.aside__artikul {
    color: #000;
}
.aside__guarantee {
    font-size: 10px;
    color: #8e979f;
}
.aside__price {
    font-size: 26px;
    line-height: 32px;
    font-weight: 600;
    color: #000;
    font-family: "Montserrat", sans-serif;
    margin-bottom: 10px;
}

.aside__price span {
    margin-left: 8px;
    margin-top: -8px;
    font-size: 18px;
    line-height: 22px;
    color: #606971;
    text-decoration: line-through;
}

.aside__bonus {
    font-size: 16px;
    line-height: 22px;
    font-weight: 400;
    color: #8e979f;
    margin-bottom: 15px;
}

.aside__bonus span {
    color: #2196f3;
}
.aside__credit {
    color: #000;
    font-size: 14px;
    font-family: "Montserrat", sans-serif;
    line-height: 20px;
}
.credit {
    display: flex;
    flex-direction: column;
    margin-bottom: 20px;
}
.credit__item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 5px;
}
.aside__btn {
    font-size: 16px;
    line-height: 22px;
    font-weight: 600;
    width: 100%;
    margin: 0;
    color: #fff;
    background-color: #2196f3;
    font-family: "Montserrat", sans-serif;
    text-align: center;
    cursor: pointer;
    border-radius: 8px;
    padding: 10px;
    margin-bottom: 15px;
}
/*
.product__btn {
    display: flex;
}

.product__link {
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
} */

.disabled {
    background-color: #fff;
    color: #2196f3;
}

.aside__info {
    font-size: 14px;
    line-height: 24px;
    color: #212427;
    margin-bottom: 5px;
}

.aside__info span {
    color: #2196f3;
}
.aside__delivery {
    font-size: 14px;
    line-height: 24px;
    color: #212427;
    margin-bottom: 5px;
}
.aside__delivery span {
    color: #2196f3;
}
.aside__inform {
    font-size: 14px;
    line-height: 24px;
    font-weight: 400;
    color: #2196f3;
    margin-bottom: 20px;
}
.aside__buttons {
    display: flex;
    gap: 20px;

    margin: 0;
    font-weight: 400;
    font-size: 14px;
    line-height: 24px;
    color: #8e979f;
    white-space: nowrap;
}
.buttons-aside {
}
.buttons-aside__item {
    color: #8e979f;
}

@media (max-width: 425px) {
    .header {
        display: none;
    }
    .page {
        width: 100%;
    }
    .page__aside {
        margin-top: 20px;
        width: 100%;
    }
}
</style>
