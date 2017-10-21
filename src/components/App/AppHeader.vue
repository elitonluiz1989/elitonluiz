<template>
    <div class="header container-fluid">
        <div class="row justify-content-center">
            <nav class="header__nav navbar navbar-light navbar-expand-sm bg-faded w-100 col-md-11 col-lg-10 col-xl-9">
                <a class="navbar-brand" href="#">{{ title }}<br><small class="header__subtitle">Programador PHP</small></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="header-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item" v-for="item in mainNav">
                            <a class="nav-link" :href="item.url">{{ item.title }}</a>
                        </li>
                    </ul>
                </div>
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
    background-color: $header-bg-color;

    &__title {
      @extend .text-white;

      @include media-breakpoint-only(sm) {
        margin-left: 10%;
      }
    }

    &__subtitle {
      color: #111;
      margin-left: 30%;

      @include media-breakpoint-up(sm) {
        margin-left: 30%;
      }
    }

    &__nav {
      $navbar-margin: 1rem;
      padding-right: 0;
      padding-left: 0;

      button {
        border-color: white !important;
        margin-right: $navbar-margin;
        @extend .text-white;
      }

      a {
        margin-top: 0.4rem;
        @extend .text-white;

        &:hover {
          background-color: white;
          border-radius: .5rem;
          color: $header-bg-color;
        }
      }

      .navbar-brand {
        margin-left: $navbar-margin;
      }

      .navbar-nav  {
        background-color: rgba(0, 0, 0, .4);
        @extend .text-center;

        @include media-breakpoint-up(md) {
          background-color: transparent;
        }
      }
    }
  }
</style>