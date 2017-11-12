<template>
    <div class="form-message" :class="formMessageStyles.wrapper">
        <div class="alert" :class="formMessageStyles.message" v-text="message"></div>
    </div>
</template>

<script>
    export default {
        name: "form-message",

        props: {
            message: {
                type: String,
                required: true
            },

            show: {
                type: Boolean,
                default: false
            },

            error: {
                type: Boolean,
                default: false,
            }
        },

        computed: {
            formMessageStyles() {
                return {
                    wrapper: {
                        'form-message--show': this.show
                    },

                    message: {
                        'alert-danger': this.error,
                        'alert-success': !this.error
                    }
                };
            }
        }
    }
</script>

<style lang="scss" scoped>
    .form-message{
        opacity: 0;
        transition: opacity 1s;
        @extend .text-center;

        &--show {
            opacity: 1;
        }
    }
</style>