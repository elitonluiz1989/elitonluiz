<template>
    <div class="col justify-content-center">
        <ul class="list-unstyled" :class="contactStyles.list">
            <li class="text-center" v-for="(socialLink, socialType) in socialNets" v-if="socialLink">
                <a :class="'social social--' + socialType" :href="socialLink">
                    <div class="social__icon">
                        <i :class="'fa fa-' + socialType" aria-hidden="true"></i>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</template>

<script>
    import ContactCommon from './assets/js/ContactCommon';
    import Social from './data/social';

    export default {
        name: "contact-social",

        data() {
            return {
                socialNets: Social,
            };
        },

        filters: {
            capitalize(value) {
                if (!value) return '';

                value = value.toString();
                return value.charAt(0).toUpperCase() + value.slice(1);
            }
        },

        mixins: [ContactCommon]
    }
</script>

<style lang="scss" scoped>
    ul {
      display: table;
      margin: 0 auto;

      li {
        float: left;
        width: 3rem;
      }
    }

    .social {
        color: white;

        &--facebook:hover {
            color: #007bff;
        }

        &--github:hover {
            color: #bAb092;
        }

        &--google-plus:hover {
            color: #ff0005;
        }

        &--twitter:hover {
            color: #00a6ff;
        }

        &--youtube-play:hover {
            color: #d00;
        }

        &__icon {
            & + & {
                padding-left: 1rem;
            }
        }

        &__title {
            float: left;
            width: 55%;
            padding-left: 0.5rem;
        }
    }
</style>