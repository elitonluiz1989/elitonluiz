<template>
    <main class="home container-fluid">
        <div class="row justify-content-center">
            <div class="text-white col-12 col-sm-9">
                <p class="text-center">Desenvolvo sites responsíveis, utilizando de tecnologias atuais como:</p>
                <p class="text-center"><span class="badge" v-for="skill in skills">{{ skill }}</span></p>
            </div>
        </div>
    </main>
</template>

<script>
    import Skills from './data/skills';

    export default {
        name: "app-home",

        data() {
            return {
                skills: Skills
            };
        }
    }
</script>

<style lang="scss" scoped>
  .home {
    $home-padding: 5rem;
    background-color: $header-bg-color;
    padding-top: $home-padding + 2rem;
    padding-bottom: $home-padding;

    @include media-breakpoint-up(lg) {
      $home-lg-padding: 5rem;
      padding-top: $home-lg-padding;
      padding-bottom: $home-lg-padding;
    }

    .badge {
      background-color: white;
      padding: 0.3rem;
      color: $header-bg-color;
    }

    .badge + .badge {
      margin-left: 0.5rem;
    }
  }
</style>