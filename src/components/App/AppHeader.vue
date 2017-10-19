<template>
    <div class="header container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="header__title">{{ title }}</h1>
            </div>

            <nav class="col-12 col-md-6">
                <ul class="header__nav nav nav-fill">
                    <li class="nav-item" v-for="item in mainNav">
                        <a class="nav-link" :href="item.url" v-text="item.title"></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

</template>

<script>
    export default {
        name: 'app-header',

        data() {
            return {
                mainNav: [
                    {
                        url: '#inicio',
                        title: 'Início'
                    },
                    {
                        url: '#skills',
                        title: 'Skills'
                    },
                    {
                        url: '#projetos',
                        title: 'Projetos'
                    },
                    {
                        url: '#contato',
                        title: 'Contato'
                    }
                ],
                title: 'Eliton Luiz'
            };
        }
    }
</script>

<style lang="scss" scoped>
    .header {
        $header-nav-color: $main-bg-color;
        background-color: $header-nav-color;

        &__title {
            color: white;
            @extend .text-center;
        }

        &__nav a {
            margin-top: 0.4rem;
            color: white;

            &:hover {
                background-color: white;
                border-radius: .5rem;
                color: $header-nav-color;
            }
        }
    }
</style>