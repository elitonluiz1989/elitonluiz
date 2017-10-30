<template>
    <div class="about container-fluid">
        <article class="row justify-content-center">
            <header class="about__title col-11 col-sm-2">
                <h3>Sobre mim</h3>
            </header>

            <section class="about__text col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5" v-html="text"></section>
        </article>
    </div>
</template>

<script>
    import aboutMe from './data/about.json';

    export default {
        name: 'app-about',

        data() {
            return {
                text: aboutMe.text
            };
        }
    }
</script>

<style lang="scss" scoped>
  .about {
    $about-color: #5a0096;
    background-color: $about-color;
    padding-top: 1rem;
    padding-bottom: 3rem;
    @extend .text-white;

    @include media-breakpoint-up(lg) {
      padding-top: 2rem;
      padding-bottom: 5rem;
    }

    &__title {
      background-color: white;
      padding: 0.5rem 0;
      color: $about-color;
      @extend .text-center;

      @include media-breakpoint-up(sm) {
        height: 8rem;
        margin-top: 2rem;
        padding-top: 2rem;
      }

      @include media-breakpoint-up(lg) {
        max-width: 8rem;
      }
    }

    &__text {
      padding: 1rem;
      @extend .text-justify;
    }
  }
</style>