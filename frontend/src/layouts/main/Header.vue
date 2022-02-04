<template>
    <header>
        <div class="container-xl">
            <nav class="nav-menu">

                <div class="nav-logo">logo</div>

                <div class="nav-list-wrapper" :class="{active: isActive}" @click="showMobileMenu">
                    <ul class="nav-list">
                        <li class="nav-list__item">
                            <a class="nav-list__link" href="">
                                Home
                            </a>
                        </li>
                        <li class="nav-list__item">
                            <a class="nav-list__link" href="">
                                About
                            </a>
                        </li>
                        <li class="nav-list__item">
                            <a class="nav-list__link" href="">
                                Blog
                            </a>
                        </li>
                        <li class="nav-list__item">
                            <a class="nav-list__link" href="">
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="nav-auth-wrapper">
                    <div class="nav-auth" @click="authShow">
                        Sign in
                        <div class="nav-sign-in" v-if="authActive">
                            <div>Registration</div>
                            <div>Authorization</div>
                        </div>
                    </div>
                    <div class="nav-burger" @click="showMobileMenu">
                        <span class="nav-burger__item"></span>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</template>

<script>
export default {
    name: "Header",
    data() {
        return {
            authActive: false,
            mobileMenuActive: false,
            isActive: false,
        }
    },
    methods: {
        authShow() {
            this.authActive = !this.authActive
            setTimeout(() => {
                document.addEventListener('click', this.watchGlobalClick)
            }, 0)
        },
        watchGlobalClick() {
            this.authActive = !this.authActive
            document.removeEventListener('click', this.watchGlobalClick)
        },
        showMobileMenu() {
            this.isActive = !this.isActive
        }
    },
}
</script>

<style lang="scss" scoped>
header {
    box-shadow: 0 2px 5px #0000002e;
    z-index: 2;

    .nav-menu {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 0;

        .nav-logo {

        }

        .nav-list-wrapper {
            @media screen and (max-width: 468px) {
                background-color: #000000c7;
                overflow: scroll;
                position: fixed;
                display: none;
                height: 100%;
                width: 100%;
                padding: 0;
                z-index: 3;
                left: 0;
                top: 0;
            }

            .nav-list {
                display: flex;
                list-style: none;
                margin: 0 auto;
                max-width: 600px;

                @media screen and (max-width: 468px) {
                    flex-direction: column;
                    background-color: #ffffff;
                    height: 100%;
                    width: 85%;
                    padding: 0;
                    margin: 0;
                }

                .nav-list__item {
                    padding: 0 0.625rem;
                    background-color: #ffffff;

                    @media screen and (max-width: 468px) {
                        border-bottom: 1px solid #ccc;
                        padding: 0.625rem;
                    }

                    .nav-list__link {
                        text-decoration: none;
                        color: #000000;
                        transition: .2s;

                        &:hover {
                            color: #a09e9e;
                        }
                    }
                }
            }
        }

        .nav-list-wrapper.active {
            display: block;
        }

        .nav-auth-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;

            .nav-auth {
                &:hover {
                    cursor: pointer;
                }

                .nav-sign-in {
                    position: absolute;
                    right: 0;
                    top: 30px;
                    background-color: #ffffff;
                    padding: 0.6rem;
                    box-shadow: 0 10px 25px 10px #0000001f;
                    border-radius: 3px;
                    z-index: 3;
                }
            }

            .nav-burger {
                height: 20px;
                width: 30px;
                display: none;
                margin-left: 1.2rem;
                border-top: 2px solid;
                position: relative;

                @media screen and (max-width: 468px) {
                    display: block;
                }

                .nav-burger__item {
                    &::before {
                        content: '';
                        position: absolute;
                        border-top: 2px solid #000000;
                        width: 30px;
                        top: 8px;
                    }

                    &::after {
                        content: '';
                        position: absolute;
                        border-top: 2px solid #000000;
                        width: 30px;
                        top: 17px;
                    }
                }
            }
        }

    }
}
</style>