<template>
    <main class="home container-fluid">
        <div class="row justify-content-center">
            <div class="home__content col-12 col-sm-9">
                <p>Desenvolvo sites responsíveis, utilizando de tecnologias atuais como:</p>
                <p><span class="badge" v-for="skill in skills">{{ skill }}</span></p>
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
    $home-margin: 1rem;
    background-color: $header-bg-color;

    &__separator {
      background-color: white;
      height: 1px;
      margin-top: $home-margin;
    }

        &__content {
          margin: $home-margin 0;
          @extend .text-white;

          p {
            @extend .text-center;
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
    }
</style>