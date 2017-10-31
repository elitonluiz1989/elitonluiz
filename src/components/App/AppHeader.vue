<template>
    <div id="header" class="header container-fluid fixed-top">
        <div class="row justify-content-center">
            <nav class="header__nav navbar navbar-expand-md bg-faded w-100 col-md-12 col-lg-10 col-xl-9">
                <a class="navbar-brand" href="#">
                    <img class="header__logo" src="../../../static/img/logo25x25.png">
                    <span>{{ title }}</span>
                    <span class="header__subtitle">Programador PHP</span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button>

                <div class="collapse navbar-collapse justify-content-end" id="header-nav">
                    <ul class="navbar-nav">
                        <li class="nav-item" v-for="item in mainNav">
                            <a class="nav-link" :href="baseUrl + item.url" @click="jumpToItem">{{ item.title }}</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

</template>

<script>
    import sessionScroll from "../../assets/js/sessionScroll";

    export default {
        name: 'app-header',

        data() {
            return {
                baseUrl: window.location.origin + '/',
                mainNav: [
                    {
                        url: 'inicio',
                        title: 'Início'
                    },
                    {
                        url: 'projetos',
                        title: 'Projetos'
                    },
                    {
                        url: 'sobre',
                        title: 'Sobre'
                    },
                    {
                        url: 'contato',
                        title: 'Contato'
                    }
                ],
                title: 'Eliton Luiz'
            };
        },

        methods: {
           jumpToItem(evt) {
               evt.preventDefault();

               let origin = window.location.origin + '/';
               let session = evt.target.href.replace(origin, '');

               sessionScroll(session);
           }
        }
    }
</script>

<style lang="scss" scoped>
  .header {
    background-color: $header-bg-color;

    &__logo {
      width: 25px;
      height: 25px;
      margin-top: -5px;
    }

    &__subtitle {
      margin-left: 0.45rem;
      color: #111;
      font-size: 0.6em;

      @include media-breakpoint-up(sm) {
        font-size: 0.8rem;
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
        @extend .text-white;
      }

      .navbar-brand {
        margin-left: $navbar-margin;
      }

      .navbar-nav  {
        background-color: rgba(0, 0, 0, .4);
        @extend .text-center;

        @include media-breakpoint-up(md) {
          background-color: transparent;

          a{
            width: 7rem;

            &:hover {
              background-color: #333;
              border-radius: .5rem;
              color: $header-bg-color !important;
            }
          }
        }
      }
    }
  }
</style>