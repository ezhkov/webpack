<template>
    <header class="site-header" :class="{'menu-visible': menuVisible}">
        <div class="site-header__left">
            <a href="#" class="site-header__menu" @click.prevent="toggleMenu">
                <span class="site-header__burger"><i></i></span>
                <transition name="scale" mode="out-in">
                    <span v-if="!menuVisible" key="menu">Меню</span>
                    <span v-else key="hide">Скрыть</span>
                </transition>
            </a>
            <a href="/" class="site-header__logo"><img src="/static/img/logo.svg" alt="Логотип"></a>
        </div>
        <div class="site-header__right">
            <a href="#" class="site-header__item" @click.prevent="toggleSearchPopup">
                <span class="site-header__icon"><svg width="14" height="14"><use xlink:href="#search"></use></svg></span>Поиск по сайту</a>
            <a href="#" class="site-header__item">
                <span class="site-header__icon"><svg width="14" height="16"><use xlink:href="#pin"></use></svg></span>{{pageData.city.name}}</a>
            <a :href="`tel:${pageData.phone.raw}`" class="site-header__item">
                <span class="site-header__icon"><svg width="17" height="16"><use xlink:href="#phone"></use></svg></span><span v-html="pageData.phone.formatted"></span></a>
            <a href="#" class="site-header__item" @click.prevent="toggleAuthPopup">
                <span class="site-header__icon"><svg width="14" height="16"><use xlink:href="#user"></use></svg></span>Константинопольский К. К.</a>
        </div>
        <nav class="header__nav">
            <div class="wrapper">
                <div class="header-nav__inner">
                    <div class="header-nav__column">
                        <div class="header-nav__section">
                            <div class="header-nav__subheader">Продукты</div>
                            <ul class="header-nav__subnav">
                                <li class="header-nav__item">
                                    <a href="#" class="header-nav__link">Авто</a>
                                </li>
                                <li class="header-nav__item">
                                    <a href="#" class="header-nav__link">Имущество</a>
                                </li>
                                <li class="header-nav__item">
                                    <a href="#" class="header-nav__link">Здоровье</a>
                                </li>
                                <li class="header-nav__item">
                                    <a href="#" class="header-nav__link">Комплексные</a>
                                </li>
                            </ul>
                        </div>
                        <div class="header-nav__section">
                            <div class="header-nav__actions">
                                <a href="#" class="action-button action-button--primary"><svg width="26" height="18"><use xlink:href="#send"></use></svg>Активировать полис</a>
                                <a href="#" class="action-button"><svg width="22" height="18"><use xlink:href="#money"></use></svg>Купить полис</a>
                            </div>
                        </div>
                    </div>
                    <div class="header-nav__column header-nav__column--middle">
                        <div class="header-nav__section">
                            <div class="header-nav__subheader">Компания</div>
                            <div class="header-nav__row">
                                <div class="header-nav__subcol">
                                    <ul class="header-nav__subnav">
                                        <li class="header-nav__item">
                                            <a href="#" class="header-nav__link">О компании</a>
                                        </li>
                                        <li class="header-nav__item">
                                            <a href="#" class="header-nav__link">Руководство</a>
                                        </li>
                                        <li class="header-nav__item">
                                            <a href="#" class="header-nav__link">Отчётность</a>
                                        </li>
                                        <li class="header-nav__item">
                                            <a href="#" class="header-nav__link">Вакансии</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="header-nav__subcol">
                                    <ul class="header-nav__subnav">
                                        <li class="header-nav__item">
                                            <a href="#" class="header-nav__link">Обратная связь</a>
                                        </li>
                                        <li class="header-nav__item">
                                            <a href="#" class="header-nav__link">Новости</a>
                                        </li>
                                        <li class="header-nav__item">
                                            <a href="#" class="header-nav__link">Пользовательская информация</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <a class="" href="#">Корпоративным клиентам</a>
                    </div>
                    <div class="header-nav__column">
                        <div class="header-nav__section">
                            <div class="header-nav__subheader">Страховой случай</div>
                            <div class="header-nav__actions">
                                <a href="#" class="action-button"><svg width="18" height="22"><use xlink:href="#shield"></use></svg>Заявить о страховом случае</a>
                            </div>
                        </div>
                        <div class="header-nav__section">
                            <div class="header-nav__subheader">Вопросы</div>
                            <div class="header-nav__actions">
                                <a href="#" class="action-button"><svg width="20" height="20"><use xlink:href="#message"></use></svg>Задать вопрос</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</template>

<script>
  export default {
    props: ['page-data'],
    data() {
      return {
        menuVisible: false,
      }
    },
    methods: {
      toggleAuthPopup() {
        this.$emit('showmodal', 'auth');
      },
      toggleSearchPopup() {
        this.$emit('showmodal', 'search');
      },
      toggleMenu() {
        this.menuVisible = !this.menuVisible;
      }
    },
    components: {}
  }
</script>

<style lang="scss">
    @import "../css/base/variables";
    @import "../css/base/fonts";
    .site-header {
        background: $cWhite;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        padding-left: 4rem;
        padding-right: 4rem;
        align-items: center;
        height: 8rem;
        text-transform: uppercase;
        position: relative;
        box-shadow: 0 1px 0 0 rgba(0,0,0,0.05);
        z-index: 100;
    }

    .site-header__left {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        height: 100%;
    }

    .site-header__right {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        height: 100%;
    }

    .site-header__item {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        font-size: 1.2rem;
        line-height: 2.4rem;
        font-variant-numeric: lining-nums;
        margin-left: 4rem;
    }

    .site-header__icon {
        margin-right: 1.6rem;
        stroke: $cBrand;
        svg {
            display: block;
        }
    }

    .site-header__logo {
        margin-right: 4rem;
        margin-left: 10.4rem;
    }

    %menubar {
        content:'';
        width: 100%;
        height: 0.2rem;
        border-radius: 0.1rem;
        background: $cBrand;
        position: absolute;
        left: 0;
        transition: opacity 0.3s, visibility 0.3s, transform 0.3s, top 0.3s, bottom 0.3s;
    }

    .site-header__menu {
        height: 4rem;
        box-sizing: border-box;
        padding: 0.7rem 4.5rem 0.9rem 0;
        @include meta;
        font-size: 1.2rem;
        line-height: 2.4rem;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        position: absolute;
    }

    .site-header__burger {
        width: 1.6rem;
        height: 1.2rem;
        margin-right: 0.8rem;
        position: relative;
        margin-top: -2px;
        &:after, &:before, i {
            @extend %menubar;
        }
        &:after {
            bottom: 0;
        }
        &:before {
            top: 0;
        }
        i {
            top: 50%;
            transform: translateY(-50%);
        }
        .menu-visible & {
            i {
                opacity: 0;
                visibility: hidden;
            }
            &:after {
                transform: rotate(45deg);
                bottom: 5px;

            }
            &:before {
                transform: rotate(-45deg);
                top: 5px;
            }
        }
    }

    .header__nav {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: #fff;
        transition: opacity 0.5s, transform 0.5s, visibility 0.5s;
        opacity: 0;
        visibility: hidden;
        transform: translateY(3rem);
        box-shadow: 0 10px 10px 0 rgba(0,0,0,0.05);
        .menu-visible & {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        .action-button {
            background: #F7F7F7;
            &:hover {
                background: #f0f0f0;
            }
        }
        &:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            box-shadow: 0 -1px 0 0 rgba(0,0,0,0.05);
        }
    }

    .header-nav__inner {
        margin-left: 7rem;
        margin-right: 7rem;
        display: flex;
        text-transform: none;
        padding-top: 6.4rem;
        padding-bottom: 6.4rem;
    }

    .header-nav__subheader {
        @include meta;
        font-size: 2.4rem;
        line-height: 2.4rem;
        color: #262626;
        letter-spacing: -0.3px;
    }
    .header-nav__item {
        @include meta;
        color: #595959;
        +.header-nav__item {
            margin-top: 1.6rem;
        }
    }

    .header-nav__column {
        width: calc(33% + 7.2rem);
        box-sizing: border-box;
        padding-left: 7.2rem;
        padding-right: 7.2rem;
        flex-grow: 1;
        &:first-child {
            width: calc(33% - 3.6rem);
            padding-left: 0;
            border-right: 1px solid rgba(#A0A0A0, 0.24);
        }
        &:last-child {
            padding-right: 0;
            width: 33%;
            border-left: 1px solid rgba(#A0A0A0, 0.24);
        }
    }

    .header-nav__column--middle {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .header-nav__subnav {
        margin-top: 3.2rem;
    }

    .header-nav__row {
        display: flex;
        align-items: flex-start;
    }

    .header-nav__subcol {
        width: 50%;
    }

    .header-nav__section + .header-nav__section {
        margin-top: 4rem;
    }

    .header-nav__actions {
        display: flex;
        flex-direction: column;
    }

</style>
