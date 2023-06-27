<template lang="">
    <div class="cart-logo">
        <Link class="cart-logo__link" :href="`/`"
            ><img
                src="../../../../public/adminlte/dist/img/images/logo.png"
                alt="logo"
            />
        </Link>
    </div>
    <section class="cart">
        <div class="cart__title">Корзина Technodom</div>
        <div class="cart__wrapper">
            <div class="cart__container">
                <ul>
                    <li v-for="item in cartItems" :key="item.id">
                        <p class="cart__empty" v-if="cartItems.length === 0">
                            Корзина пуста
                        </p>

                        <div class="cart__inner" v-else>
                            <div class="cart__product product-cart">
                                <div class="product-cart__discount">
                                    <span>Trade-in </span>
                                    <span>0 - 0 - 24 </span>
                                    <span
                                        class="product-cart__discount_green"
                                        >{{ item.discount }}</span
                                    >
                                </div>
                                <div class="product-cart__block">
                                    <input
                                        class="product-cart__checkbox"
                                        type="checkbox"
                                    />
                                    <div class="product-cart__img">
                                        <img
                                            :src="getImageUrl(item.image)"
                                            alt=""
                                        />
                                    </div>
                                    <div class="product-cart__desc">
                                        <div class="product-cart__name">
                                            {{ item.title }}
                                        </div>
                                        <div class="product-cart__price">
                                            {{ item.price }} ₸
                                        </div>
                                        <div class="product-cart__bonus">
                                            до <span>+ 19 999</span> бонусов
                                        </div>
                                    </div>
                                </div>
                                <div class="product-cart__amount">
                                    <a href="#" class="product-cart__favorite"
                                        >В избранное</a
                                    >
                                    <div class="product-cart__number">
                                        <form
                                            @submit.prevent="
                                                deleteForm(item.id)
                                            "
                                            method="DELETE"
                                            v-if="item.quantity < 2"
                                        >
                                            <button
                                                class="cart__delete"
                                                type="submit"
                                            >
                                                <img
                                                    src="../../../../public/adminlte/dist/img/images/cart/trash.svg"
                                                    alt=""
                                                />
                                            </button>
                                        </form>
                                        <button
                                            @click="decreaseQty(item.id)"
                                            v-else
                                            class="minus-btn"
                                        >
                                            -
                                        </button>

                                        <span>{{ item.quantity }}</span>
                                        <button
                                            @click="increaseQty(item.id)"
                                            class="plus-btn"
                                        >
                                            +
                                        </button>
                                        <!-- Add this line -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cart__aside aside">
                <div class="aside__price">
                    <span>Сумма к оплате</span>
                    <span>{{ formattedTotalPrice }} ₸</span>
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

                <div>
                    <div v-for="item in cartItems" :key="item.id">
                        <form
                            @submit.prevent="checkoutForm(item)"
                            method="POST"
                        >
                            <input
                                type="hidden"
                                name="title"
                                :value="item.title"
                            />
                            <input
                                type="hidden"
                                name="quantity"
                                :value="item.quantity"
                            />
                            <input
                                type="hidden"
                                name="price"
                                :value="formattedTotalPrice"
                            />
                            <button
                                v-if="item.isFirst"
                                class="aside__btn"
                                type="submit"
                            >
                                Оформить заказ
                            </button>
                        </form>
                    </div>
                </div>

                <div class="aside__inform">
                    Оформляя заказ, вы подтверждаете свое согласие с нашими
                    <a href="#">условиями покупки</a> в интернет-магазине
                </div>
            </div>
        </div>
    </section>
</template>
<script>
import axios from "axios";
import { Link } from "@inertiajs/inertia-vue3";
export default {
    components: {
        Link,
    },
    props: ["cartItems", "formattedTotalPrice"],

    methods: {
        getImageUrl(image) {
            return `/adminlte/dist/img/images/${image}`;
        },

        deleteForm(itemId) {
            this.$inertia
                .delete(`/cartDelete/${itemId}`)
                .then(() => {
                    console.log(`Item with ID ${itemId} deleted successfully.`);
                    // this.$inertia.visit("/cart", { replace: true });
                    // this.getData();
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        increaseQty(itemId) {
            this.$inertia
                .put(`/cartAdd/${itemId}`)
                .then(() => {
                    console.log(
                        `Item with ID ${itemId} increased successfully.`
                    );
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        decreaseQty(itemId) {
            this.$inertia
                .put(`/cartMinus/${itemId}`)
                .then(() => {
                    console.log(
                        `Item with ID ${itemId} increased successfully.`
                    );
                })
                .catch((error) => {
                    console.log(error);
                });
        },
        checkoutForm(item) {
            // Use Inertia to send the data to the Laravel backend
            this.$inertia
                .post("/checkout", {})
                .then(() => {
                    // Handle the success response, if needed
                })
                .catch((error) => {
                    // Handle any errors that occur during the form submission
                    console.error(error);
                });
        },
    },
    mounted() {
        this.cartItems.forEach((item, index) => {
            item.isFirst = index === 0;
        });
    },
};
</script>
<style lang="css">
a {
    text-decoration: none;
}

.cart {
    padding: 50px 0;
}
.cart__container {
    width: 100%;
    display: flex;
    flex-direction: column;
}

.cart__main {
    width: 65%;
}

.cart__wrapper {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
}

.cart__title {
    padding-left: 100px;
    font-size: 24px;
    line-height: 30px;
    font-weight: 600;
    margin-bottom: 10px;
}

.cart__empty {
    font-size: 24px;
    font-weight: 500;
    font-style: italic;
    text-align: center;
}

.cart__content {
    display: flex;
    justify-content: space-between;
}

.cart__inner {
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
}
.cart__product {
}
.product-cart {
}

.product-cart__discount {
    display: flex;
    gap: 5px;
}
.product-cart__discount span {
    border-radius: 5px;
    font-weight: 700;
    display: inline-block;
    color: #fff;
    padding: 5px;
    background-color: #fc6b3f;
}
.product-cart__discount .product-cart__discount_green {
    background-color: rgb(115, 190, 111);
}

.product-cart__block {
    display: flex;
    padding: 30px 0;
    gap: 30px;
}
.product-cart__checkbox {
}
.product-cart__img {
}
.product-cart__img img {
    width: 76px;
}
.product-cart__desc {
}
.product-cart__name {
    margin-bottom: 10px;
}
.product-cart__price {
    margin-bottom: 10px;
    font-size: 20px;
    font-weight: 700;
}
.product-cart__bonus {
}
.product-cart__bonus span {
    color: #2196f3;
    font-weight: 700;
}
.product-cart__amount {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.product-cart__favorite {
    color: #2196f3;
    font-weight: 700;
}

.product-cart__number {
    display: flex;
    gap: 10px;
    align-items: center;
}

.product-cart__number img {
    width: 20px;
}
.product-cart__number span {
    padding: 5px;
    border: 1px solid rgb(128, 128, 128);
    border-radius: 5px;
}

.cart__delete {
    cursor: pointer;
}

/* cart-aside */

.cart__aside {
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
    display: flex;
    justify-content: space-between;
    font-size: 16px;
    line-height: 24px;
    font-weight: 600;
    color: #000;
    font-family: "Montserrat", sans-serif;
    margin-bottom: 20px;
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
}
.credit__item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 15px;
}
.aside__btn {
    font-size: 16px;
    line-height: 22px;
    font-weight: 600;
    width: 100%;
    margin: 0;
    color: #fff;
    background-color: #fc6b3f;
    font-family: "Montserrat", sans-serif;
    text-align: center;
    cursor: pointer;
    border-radius: 8px;
    padding: 10px;
    margin-bottom: 15px;
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

    margin-bottom: 20px;
}

.aside__inform a {
    color: #2196f3;
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

.cart-logo__link {
    padding-left: 40px;
}
.minus-btn {
    font-size: 25px;
    background-color: #fff;
}
.plus-btn {
    background-color: #fff;
    font-size: 25px;
}

@media (max-width: 425px) {
    .cart__content {
        display: flex;
        flex-direction: column;
    }

    .cart__main {
        width: 100%;
        margin-bottom: 20px;
    }

    .cart__aside {
        width: 100%;
    }

    .cart-logo__link {
        display: block;
    }

    .cart-logo__link img {
        width: 200px;
        padding-left: 30px;
    }
}
</style>
