<template lang="">
    <header class="header">
        <div class="header__container">
            <div class="header__topbar topbar">
                <div class="topbar__left">
                    <div class="topbar__map">
                        <a href="#"
                            ><img
                                src="../../../../public/adminlte/dist/img/images/map.svg"
                                alt="map"
                            />
                            Алматы</a
                        >
                    </div>
                    <div class="topbar__shops"><a href="#">Магазины</a></div>
                </div>
                <div class="topbar__right">
                    <div class="topbar__hours">
                        <span class="topbar__phone">
                            <img
                                src="../../../../public/adminlte/dist/img/images/phone.svg"
                                alt="phone"
                            />
                            1717</span
                        >
                        с 08:00 до 00:00
                    </div>
                    <div class="topbar__lang">
                        <a href="#" class="topbar__btn_active">Рус</a>
                        <a href="#">Қаз</a>
                    </div>
                </div>
            </div>
            <nav class="header__nav nav">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a class="nav__logo" href=""
                            ><img
                                src="../../../../public/adminlte/dist/img/images/logo.png"
                                alt="logo"
                        /></a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__catalog">Каталог</a>
                    </li>
                    <li class="nav__item">
                        <input
                            class="nav__input"
                            placeholder="Я хочу найти"
                            type="text"
                        />
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link"
                            ><img
                                src="../../../../public/adminlte/dist/img/images/favorite-nav.svg"
                                alt=""
                            /><br />
                            <span>Избранное</span></a
                        >
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link"
                            ><img
                                src="../../../../public/adminlte/dist/img/images/compare-nav.svg"
                                alt=""
                            /><br />
                            <span>Сравнить</span></a
                        >
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <img
                                src="../../../../public/adminlte/dist/img/images/cart-nav.svg"
                                alt=""
                            />
                            <br />
                            <span>Корзина</span></a
                        >
                    </li>

                    <li class="nav__item">
                        <a href="#" class="nav__link">
                            <img
                                src="../../../../public/adminlte/dist/img/images/user-nav.svg"
                                alt="user"
                            />
                            <br />
                            <span>Вход</span></a
                        >
                    </li>
                </ul>
            </nav>
            <div class="header__burger">
                <a href="#open" class="icon-menu"><span></span></a>
            </div>
        </div>
    </header>
</template>
<script>
export default {};
</script>
<style lang="css" scoped>
a {
    text-decoration: none;
    color: #000;
}

/* header */
.header {
    width: 100%;
    padding: 5px 0;
}
.header__container {
}

.header__topbar {
}
.topbar {
    padding: 5px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.topbar__left {
    display: flex;
    gap: 20px;
}

.topbar__left a {
    color: #2196f3;
    font-weight: 700;
}
.topbar__map {
    display: flex;
}
.topbar__map img {
    width: 20px;
}

.topbar__shops {
}
.topbar__right {
    display: flex;
    align-items: center;
    gap: 30px;
}
.topbar__hours {
}
.topbar__phone {
    color: #2196f3;
    font-weight: 700;
}

.topbar__phone img {
    width: 20px;
}

.topbar__lang {
    display: flex;
    gap: 10px;
}
.topbar__lang a {
    font-weight: 700;
    padding: 8px 12px;
    border: 1px solid grey;
    border-radius: 30px;
}

.topbar__btn_active {
    color: #2196f3;
    border: 1px solid #2196f3;
}

.nav {
    width: 100%;
}
.nav__list {
    display: flex;
    gap: 55px;

    align-items: center;
}
.nav__item {
    font-weight: 700;
}
.nav__logo {
}

.nav__logo img {
    width: 200px;
}
.nav__catalog {
    padding: 10px;
    background-color: #fc6b3f;
    border-radius: 10px;
    color: #fff;
}

.nav__input {
    width: 300px;
    padding: 5px;
    outline: none;
    border: 1px solid grey;
    background: #f7f7f7;
}

.nav__input::placeholder {
    color: grey;
}

.nav__link {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.nav__link img {
    width: 26px;
}

@media (max-width: 950px) {
    .header {
        padding: 20px 0;
    }

    .header-height {
        height: 100%;
    }
    .topbar {
        display: none;
    }

    .header__nav.nav {
        padding: 10px;
    }

    .nav__logo {
        display: none;
    }

    .nav__catalog {
        display: none;
    }

    .nav__input {
        display: none;
    }

    .nav {
        position: fixed;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: #fff;
        /* padding: 90px 15px 30px 15px; */
        transition: left 0.3s ease 0s;
    }
    .left {
        left: 0;
    }

    .nav a {
        font-size: 24px;
    }

    .nav:before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #fff;
    }

    .nav__list {
        max-width: 425px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        flex-direction: column;
        gap: 30px;
    }

    .header__burger {
        display: flex;
        justify-content: right;
        padding-right: 15px;
    }

    .nav__link img {
        display: none;
    }

    /* burger-icon */

    .icon-menu {
        max-width: 25px;

        display: flex;
        position: relative;
        flex: 0 0 30px;
        height: 18px;
        flex-direction: column;
        justify-content: space-between;
        margin: 0px 0px 0px 20px;
    }
    .icon-menu::before,
    .icon-menu::after {
        content: "";
        background-color: #000;
        height: 2px;
    }
    .icon-menu span {
        height: 2px;
        background-color: #000;
    }

    .close-icon-menu {
        flex: 0 0 30px;
        height: 30px;
        position: relative;
        margin: 0px 0px 0px 20px;
    }
    .close-icon-menu::before,
    .close-icon-menu::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        background-color: #000;
        height: 2px;
    }
    .close-icon-menu::before {
        transform: rotate(45deg);
    }
    .close-icon-menu::after {
        transform: rotate(-45deg);
    }

    .hidden {
        display: none;
    }
}

@media (max-width: 425px) {
    .header {
        padding: 20px 0;
    }

    .header-height {
        height: 100%;
    }
    .topbar {
        display: none;
    }

    .header__nav.nav {
        padding: 10px;
    }

    .nav__logo {
        display: none;
    }

    .nav__catalog {
        display: none;
    }

    .nav__input {
        display: none;
    }

    .nav {
        position: fixed;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: #fff;
        /* padding: 90px 15px 30px 15px; */
        transition: left 0.3s ease 0s;
    }
    .left {
        left: 0;
    }

    .nav a {
        font-size: 24px;
    }

    .nav:before {
        content: "";
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #fff;
    }

    .nav__list {
        max-width: 425px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        flex-direction: column;
        gap: 30px;
    }

    .header__burger {
        display: flex;
        justify-content: right;
        padding-right: 15px;
    }

    .nav__link img {
        display: none;
    }

    /* burger-icon */

    .icon-menu {
        max-width: 25px;

        display: flex;
        position: relative;
        flex: 0 0 30px;
        height: 18px;
        flex-direction: column;
        justify-content: space-between;
        margin: 0px 0px 0px 20px;
    }
    .icon-menu::before,
    .icon-menu::after {
        content: "";
        background-color: #000;
        height: 2px;
    }
    .icon-menu span {
        height: 2px;
        background-color: #000;
    }

    .close-icon-menu {
        flex: 0 0 30px;
        height: 30px;
        position: relative;
        margin: 0px 0px 0px 20px;
    }
    .close-icon-menu::before,
    .close-icon-menu::after {
        content: "";
        position: absolute;
        top: 50%;
        left: 0;
        width: 100%;
        background-color: #000;
        height: 2px;
    }
    .close-icon-menu::before {
        transform: rotate(45deg);
    }
    .close-icon-menu::after {
        transform: rotate(-45deg);
    }

    .hidden {
        display: none;
    }
}

/* ./header */
</style>
