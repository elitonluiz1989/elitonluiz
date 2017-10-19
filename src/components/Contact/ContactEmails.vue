<template>
    <div class="col">
        <ul class="contact__list list-unstyled" :class="contactStyles.list">
            <li class="contact__list-item">
                <span class="contact__list-content">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
            </li>

            <li class="contact__list-item" v-for="email in emails">
                <span class="contact__list-content">{{ email.address }}</span>
            </li>
        </ul>
    </div>
</template>

<script>
    import ContactCommon from './assets/js/ContactCommon';
    import Emails from './data/emails';

    export default {
        name: "contact-emails",

        data() {
            return {
                emails: Emails,
            };
        },

        mixins: [ContactCommon]
    }
</script>

<style lang="scss">
    @import "./assets/scss/_contact.scss";
</style>