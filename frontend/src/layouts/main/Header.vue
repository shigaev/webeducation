<template>
    <header>
        <div class="container-xl">
            <nav class="nav-menu">
                <div class="nav-logo">logo</div>
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
                <div class="nav-auth">
                    Sign in
                    <div class="nav-sign-in">
                        <div>Registration</div>
                        <div>Authorization</div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</template>

<script>
export default {
    name: "Header"
}
</script>

<style lang="scss" scoped>
header {
    box-shadow: 0 2px 5px #0000002e;
    z-index: 2;

    .nav-menu {
        position: relative;
        display: flex;
        justify-content: space-between;
        padding: 1rem 0;

        @media screen and (max-width: 468px) {
            flex-direction: column;
            position: absolute;
            background-color: #ffffff;
            width: 100%;
            height: 100%;
            left: 0;
        }

        .nav-logo {

        }

        .nav-list {
            display: flex;
            list-style: none;
            margin: 0 auto;
            max-width: 600px;

            @media screen and (max-width: 468px) {
                flex-direction: column;
            }

            .nav-list__item {
                padding: 0 10px;

                .nav-list__link {

                }
            }
        }

        .nav-auth {
            .nav-sign-in {
                position: absolute;
                right: 0;
                background-color: #ffffff;
                padding: 0.6rem;
                box-shadow: 0 10px 25px 10px #0000001f;
                border-radius: 3px;
            }
        }
    }
}
</style>