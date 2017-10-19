<template>
    <div class="row justify-content-center">
        <div class="col-11 col-md-10 col-lg-9 col-xl-8">
            <article class="about">
                <home-title :class="'about__title'">Sobre mim</home-title>

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
                text: aboutMe.text
            };
        }
    }
</script>

<style lang="scss" scoped>
    .about {
      background-color: white;

      &__title {
        width: 40% !important;
        margin-left: 5%;
      }

      &__text {
        padding: 0.5rem;
        @extend .text-justify;
        @include media-breakpoint-up(md) {
          padding-right: 20%;
          padding-left: 20%;
        }
      }
    }
</style>