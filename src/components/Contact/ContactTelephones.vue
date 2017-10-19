<template>
    <div class="col">
        <ul class="contact__list list-unstyled justify-content-end" :class="contactStyles.list">
            <li class="contact__list-item" v-if="vertical">
                <span class="contact__list-content">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </span>
            </li>

            <li class="contact__list-item" v-for="phone in telephones">
                <a class="contact__list-content" :href="whatsappUrl + phone.number" v-if="phone.whatsapp">
                    <i class="fa fa-whatsapp" aria-hidden="true" v-if="phone.whatsapp"></i>
                    {{ phone.number | phoneFormat }}
                </a>

                <span class="contact__list-content" v-if="!phone.whatsapp">
                    <i class="fa fa-phone" aria-hidden="true" v-if="!phone.whatsapp && horizontal"></i>
                    {{ phone.number | phoneFormat }}
                </span>
            </li>
        </ul>
    </div>
</template>

<script>
    import ContactCommon from './assets/js/ContactCommon';
    import Telephones from './data/telephones';

    export default {
        name: "contact-telephones",

        data() {
            return {
                telephones: Telephones,
                whatsappUrl: 'whatsapp://send?phone='
            };
        },

        filters: {
            phoneFormat(value) {
                if (!value) return '';

                value = String(value);
                let formatted = '(' + value.substr(0, 2) + ') ' + value.substr(2, 5) + '-' + value.substr(7, 10);


                return formatted;
            }
        },

        mixins: [ContactCommon]
    }
</script>

<style lang="scss">
    @import "./assets/scss/_contact.scss";
</style>