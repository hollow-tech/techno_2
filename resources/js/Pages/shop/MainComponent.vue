<template>
    <HeaderComponent />
    <main class="main">
        <div class="main__container">
            <!-- <section class="main-sliders">
                <sliderVue class="bslider-main" />
                <blockSliderVue class="aside-slider"></blockSliderVue>
            </section> -->

            <div class="main-categories categories-btns">
                <div class="main-categories__btns categories-btns">
                    <ul class="categories-btns__list">
                        <li class="categories-btns__item active">
                            <a class="categories-btns__link active" href="#"
                                >Популярные</a
                            >
                        </li>
                        <li class="categories-btns__item">
                            <a class="categories-btns__link" href="#"
                                >AirbaFresh</a
                            >
                        </li>
                        <li class="categories-btns__item">
                            <a class="categories-btns__link" href="#"
                                >Хранение продуктов</a
                            >
                        </li>
                        <li class="categories-btns__item">
                            <a class="categories-btns__link" href="#"
                                >Красота и здоровье</a
                            >
                        </li>
                        <li class="categories-btns__item">
                            <a class="categories-btns__link" href="#"
                                >Бассейны</a
                            >
                        </li>
                        <li class="categories-btns__item">
                            <a class="categories-btns__link" href="#"
                                >Компьютеры и ноутбуки</a
                            >
                        </li>
                    </ul>
                </div>

                <ul class="main-categories__products">
                    <li
                        v-for="product in products"
                        :key="product.id"
                        class="main-categories__product product"
                    >
                        <Link :href="`/products/${product.id}`">
                            <div>
                                <div class="product__discount">0 - 0 - 12</div>
                                <div class="product__img">
                                    <img
                                        :src="getImageUrl(product.image)"
                                        alt=""
                                    />
                                </div>
                                <div class="product__content">
                                    <div class="product__name">
                                        {{ product.title }}
                                    </div>
                                    <div class="product__model"></div>
                                    <div class="product__rate rate">
                                        <span class="rate__icon">
                                            <img
                                                src="../../../../public/adminlte/dist/img/images/star.svg"
                                                alt="star"
                                            />
                                        </span>
                                        <span class="rate__number">{{
                                            product.rate
                                        }}</span>
                                        <span class="rate__comments"
                                            >({{ product.comments }})</span
                                        >
                                    </div>
                                    <div class="product__price">
                                        {{ product.price }}
                                    </div>
                                </div>
                            </div>
                        </Link>
                        <div class="product__btn">
                            <form action="" method="POST">
                                <input
                                    type="hidden"
                                    name="product_id"
                                    value=""
                                />
                                <input type="hidden" name="title" value="" />
                                <input type="hidden" name="price" value="" />
                                <input type="hidden" name="discount" value="" />
                                <input type="hidden" name="image" value="" />
                                <input
                                    type="hidden"
                                    name="quantity"
                                    value="1"
                                />
                                <button class="product__link" type="submit">
                                    В корзину
                                </button>
                            </form>
                            <span class="product__favorite"
                                ><img src="" alt=""
                            /></span>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="about-us">
                <h1 class="about-us__title">Интернет магазин TECHNODOM.KZ</h1>
                <div class="about-us__inner">
                    <div class="about-us__intro">
                        <p class="about-us__intro_bold">
                            Интернет-магазин TECHNODOM является одним из
                            проектов компании «ТЕХНОДОМ» – лидера национальной
                            сети магазинов электробытовой и компьютерной техники
                            Республики Казахстан. Если вы ищете лучший интернет
                            магазин в Казахстане – он находится по адресу
                            www.technodom.kz.
                        </p>
                        <p>
                            Главная цель онлайн-магазина TECHNODOM – улучшение
                            качества жизни клиентов. Совмещение технологий
                            нового уровня и тенденций розничной торговли
                            позволяют нам радовать покупателя возможностью
                            максимально комфортного и доступного приобретения
                            товаров через большой интернет магазин техники.
                        </p>
                    </div>
                    <div class="about-us__text">
                        <p class="about-us__paragraph">
                            Как известно, время – деньги, поэтому относиться к
                            нему нужно экономно. А купить в интернет-магазине ту
                            или иную электробытовую и компьютерную технику
                            всегда можно быстро: главное, чтобы было из чего
                            выбирать. Ассортимент товаров, который предлагает
                            наш интернет-магазин бытовой техники, электроники и
                            цифровой техники, насчитывает более 60 000
                            наименований товаров!
                        </p>
                        <p class="about-us__paragraph">
                            Пролистывая предложения множества интернет-магазинов
                            Казахстана, вы непременно остановите свой выбор на
                            страницах TECHNODOM, потому что это интернет-магазин
                            бытовой техники высокого качества! Наша компания
                            гарантирует лучшие предложения низких цен и высокий
                            профессиональный уровень обслуживания. Независимо от
                            текущего местонахождения, Вы имеете возможность
                            заказать товар в дешевом интернет-магазине. Реальная
                            экономия бюджета и времени – это удобно и выгодно!
                        </p>
                        <p class="about-us__paragraph">
                            Какие еще преимущества предлагает наш недорогой
                            интернет-магазин в Петропавловске, Усть-Каменогорске
                            или Экибастузе? Наличие предлагаемого товара на
                            складе. Это очень важно, т.к. в большинстве случаев
                            совершить покупку нужно очень быстро. Необходимость
                            найти внушающий доверие интернет-магазин, доставка
                            из которого не заставит себя долго ждать, бывает
                            разная. Чаще всего – это внезапный выход из строя
                            старой бытовой техники или электроники. В такой
                            ситуации размеренно выбирать интернет-магазины с
                            бесплатной доставкой просто нет времени. Замена
                            мобильного телефона или ноутбука, к примеру, требует
                            максимальной оперативности. Наш интернет-магазин
                            телефонов готов предложить вам не только быстрое
                            оформление заказа и удобную доставку, но и огромный
                            выбор качественных современных средств связи и
                            коммуникации от самых авторитетных брендов. В их
                            числе Apple, Samsung, Sony, Huawei, Oppo, Vivo,
                            Honor, OnePlus и другие.
                        </p>
                        <p class="about-us__paragraph">
                            Интернет-магазин сотовых телефонов TECHNODOM готов к
                            взаимовыгодному продуктивному сотрудничеству с
                            клиентами из разных регионов страны! <br />
                            Единая ценовая политика и повсеместная доступность
                            ассортимента товаров нашего магазина предоставляет
                            всем покупателям абсолютно равные возможности. Вы
                            можете посетить наш интернет-магазин в Нур-Султане
                            (Астане) и приобрести любое понравившееся мобильное
                            устройство по очень привлекательной цене. Если вы
                            проживаете в Актобе, Шымкенте или в Павлодаре,
                            интернет-магазин сотовых TECHNODOM так же рад
                            удовлетворить любые потребительские запросы!
                        </p>
                        <p class="about-us__paragraph">
                            Еще один плюс, который вы получаете, выбирая лучший
                            интернет-магазин Казахстана – это бесплатная
                            доставка товаров общей стоимостью свыше 10 тысяч
                            тенге. Необходимо выбрать и приобрести новую
                            стиральную машину, вместительный холодильник,
                            компактную микроволновую печь или самую
                            технологичную модель современного пылесоса?
                            TECHNODOM – тот интернет-магазин, в котором
                            бесплатная доставка является реально действующей
                            услугой!
                        </p>
                        <p class="about-us__paragraph">
                            Если ассортимент, цены и обслуживание нравится, то
                            клиенты выбирают бытовые интернет-магазины раз и
                            надолго. Фактор «своего» магазина очень обязывает,
                            поэтому цены интернет-магазины стараются сделать
                            максимально привлекательными. Наша торговая площадка
                            доступна для покупательской аудитории с разным
                            уровнем достатка. Хотите заказать качественную
                            встраиваемую технику? К вашему вниманию сотни
                            позиций! Духовки, вытяжки, посудомоечные машины –
                            все это можно купить недорого в интернет-магазине
                            как в Костанае, так и в Уральске и других населенных
                            пунктах Казахстана. Интернет-магазин электроники
                            TECHNODOM обеспечивает доставку товара 7 дней в
                            неделю!
                        </p>
                        <p class="about-us__paragraph">
                            Совершать покупки в нашем интернет-магазине дешево и
                            удобно. Клиент сам может выбрать, каким образом ему
                            удобнее рассчитаться. Сервисы интернет-магазина в
                            Атырау, как и в других городах страны, делают
                            доступными различные способы оплаты. В том числе
                            посредством платежных карт систем VISA и MasterCard.
                            В подтверждение оплаты магазин выдает фискальный
                            чек.
                        </p>
                        <p class="about-us__paragraph">
                            Если Вы предпочитаете посещать официальные
                            интернет-магазины на русском языке, предлагаем стать
                            постоянным клиентом TECHNODOM! Такой статус
                            гарантирует дополнительные преимущества, в том
                            числе, лояльную систему скидок. Часто набираете в
                            поисковике «kz интернет-магазин в Караганде»?
                            Заходите на www.technodom.kz! Мы рады обеспечить вас
                            качественной электробытовой и компьютерной техникой
                            и порадовать высоким уровнем обслуживания.
                        </p>
                        <p class="about-us__paragraph">
                            Низкие цены, удобную доставку, круглосуточный сервис
                            и качественные товары интернет-магазин TECHNODOM
                            обеспечивает для всех!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <FooterComponent />
</template>
<script>
import axios from "axios";
import { Link } from "@inertiajs/inertia-vue3";
import sliderVue from "../slider.vue";
import blockSliderVue from "../blockSlider.vue";
import FooterComponent from "./FooterComponent.vue";
import HeaderComponent from "./HeaderComponent.vue";

export default {
    components: {
        Link,
        sliderVue,
        blockSliderVue,
        FooterComponent,
        HeaderComponent,
    },
    props: {
        products: {
            type: Object,
            required: true,
        },
    },

    methods: {
        getImageUrl(image) {
            return `../../../../public/adminlte/dist/img/images/${image}`;
        },
    },
};
</script>
<style lang="css">
/* ================================ */
/* main */

a {
    text-decoration: none;
    color: #000;
}

.main {
    padding: 50px 0;
    background-color: #f7f7f7;
}

.main-sliders {
    display: flex;
}

.bslider-main {
    margin-right: 15px;
    width: 70%;
    height: 100%;
}

.aside-slider {
    width: 30%;
    height: 100%;
}
/* aside-slider */

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

/* ./main */

/* categories */

.main__categories {
}
.categories-btns {
    padding: 30px 0;
}
.categories-btns__list {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
}

.categories-btns__item {
    display: flex;
    justify-content: center;
    align-items: center;

    font-size: 14px;
    font-weight: 600;
    background: #fff;
    padding: 12px 16px;
    border-radius: 10px;
    border: 1px solid rgb(189, 175, 175);
}

.categories-btns__item.active {
    border-color: #fc6b3f;
}

.categories-btns__link.active {
    color: #fc6b3f;
}

.main-categories__products {
    width: 100%;
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.main-categories__product {
    padding: 15px;
}

/* ./categories */

/* about-us */
.about-us {
    width: 100%;
    padding: 50px 0;
}
.about-us__title {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 50px;
}

.about-us__inner {
    padding: 40px;
    background: #fff;
}

.about-us__intro {
    margin-bottom: 50px;
    display: flex;
    gap: 60px;
    font-style: 12px;
    line-height: 1.5;
}
.about-us__intro_bold {
    font-weight: 700;
}

.about-us__paragraph {
    margin-bottom: 40px;
}
/* ./about-us */

@media (max-width: 1210px) {
    .aside-slider {
        display: none;
    }

    .bslider-main {
        width: 100%;
    }
}

@media (max-width: 1024px) {
    .product {
        flex: 0 1 32%;
    }
    .slider {
        width: 750px;
    }
}
@media (max-width: 900px) {
    .product {
        max-width: 230px;
    }

    .slider {
        width: 700px;
        height: 350px;
    }
}

@media (max-width: 768px) {
    .product {
        flex: 0 1 33%;
    }
    .slider {
        width: 600px;
        height: 250px;
    }

    .categories-btns a {
        font-size: 12px;
    }
}

@media (max-width: 610px) {
    .product {
        flex: 0 1 25%;
    }
    .slider {
        width: 450px;
        height: 250px;
    }
}

@media (max-width: 512px) {
    .product {
        flex: 0 1 48%;
    }

    .slider {
        width: 410px;
        height: 180px;
    }
    .main {
        padding: 15px 0;
    }
}

@media (max-width: 425px) {
    .main {
        padding: 15px 0;
    }

    .product {
        flex: 0 1 48%;
    }

    .categories-btns {
        padding: 10px 0;
    }

    .slider {
        max-width: 380px;
    }

    .main-sliders {
        display: flex;
        flex-direction: column;
    }

    .sliders__aside {
        display: none;
    }

    .main-categories__product {
        gap: 5px;
    }

    .main-categories__product {
        width: 100%;
    }

    .about-us {
        margin: 0;
        width: 100%;
        padding: 15px 0;
    }
    .about-us__title {
        font-size: 16px;
        text-align: center;
    }

    .about-us__intro {
        display: flex;
        flex-direction: column;
    }
}

@media (max-width: 380px) {
    .slider {
        width: 350px;
        height: 160px;
    }

    .main-categories__products {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100%;
    }

    .product {
        max-width: 350px;
    }
}
</style>
