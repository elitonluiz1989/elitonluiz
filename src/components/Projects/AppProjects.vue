<template>
    <div class="projects container-fluid">
        <div class="row">
            <header class="projects__header col-12 col-sm-4 col-md-3 col-xl-2">
                <h4>Meus projetos</h4>
            </header>
        </div>

        <div class="row justify-content-center">
            <div class="project col-12 col-sm-6 col-lg-4 col-xl-3" v-for="project in projects">
                <a :href="project.url" class="d-block" target="_blank">
                    <img :src="project.img" :alt="project.title">
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    import Projects from './data/projects';

    export default {
        name: 'app-projects',

        data() {
            return {
                projects: Projects
            };
        }
    }
</script>

<style lang="scss" scoped>
    .projects {
      background-color: #fcfcfc;

      @include media-breakpoint-up(sm) {
        padding-bottom: 5rem;
      }

      &__header {
        background-color: white;
        padding: 1rem 0 1rem 2rem;
        color: #656565;

        @include media-breakpoint-up(sm) {
          background-color: #333;
          color: white;
          border: 1px solid #ddd;
          margin: 1rem 0 1rem 2rem;
          padding: 0.5rem 1rem;
        }

        @include media-breakpoint-up(lg) {
          margin-left: 6rem;
          text-align: center;
        }
      }

      .project {
        padding-bottom: 1rem;

        @media (min-width: 400px) and (max-width: 499px) {
          max-width: 70%;
        }

        @media (min-width: 500px) and (max-width: 575px) {
          max-width: 60%;
        }

        @media (max-width: 575px) {
          padding-right: 0 !important;
          padding-left: 0 !important;
        }

        a {
          border-width: 1px 0;
          border-style: solid;
          border-color: #333;

          @media (min-width: 400px) {
            border-right-width: 1px;
            border-left-width: 1px;
          }
        }
      }

      img {
        width: 100%;
      }
    }
</style>