<template>
    <div class="row justify-content-center">
        <div class="col-11">
            <article class="about">
                <div class="alert alert-danger" v-if="hasErrors">{{ errorMessage }}</div>

                <home-title>Sobre mim</home-title>

                <section class="about__text" v-html="text"></section>
            </article>
        </div>
    </div>
</template>

<script>
    import HomeTitle from '@/components/Base/AppTitle';
    import aboutMe from './data/about.json';

    export default {
        name: 'app-home',

        components: {
            HomeTitle
        },

        data() {
            return {
                text: '',
                errorMessage: 'Houve um erro ao recuperar os dados.',
                hasErrors: false
            };
        },

        mounted() {
            this.text = aboutMe.text;

            if (!this.text) {
                this.hasErrors = true;
            }
        }
    }
</script>

<style lang="scss" scoped>
    .about {
      background-color: white;

      &__text {
        padding: 0.5rem;
        @extend .text-justify;
      }
    }
</style>