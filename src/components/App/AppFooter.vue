<template>
    <div class="footer container-fluid">
        <div class="row justify-content-sm-center">
            <div class="col-12 col-md col-xl-6">
                <div class="row">
                    <contact-telephones :class="'col-12'"></contact-telephones>

                    <contact-emails :class="'col-12'"></contact-emails>

                    <contact-social :class="'col-12'" horizontal></contact-social>
                </div>
            </div>

            <div class="footer__separator font-weight-bold text-center text-white col-12 d-md-none">. . .</div>

            <contact-send-email :class="'col-12 col-sm-8 col-md col-xl-5'"></contact-send-email>
        </div>
    </div>
</template>

<script>
    import ContactEmails from '@/components/Contact/ContactEmails';
    import ContactSendEmail from '@/components/Contact/ContactSendEmail';
    import ContactSocial from '@/components/Contact/ContactSocial';
    import ContactTelephones from '@/components/Contact/ContactTelephones';

    export default {
        name: "app-footer",

        components: {
            ContactEmails,
            ContactSendEmail,
            ContactSocial,
            ContactTelephones
        }
    }
</script>

<style lang="scss" scoped>
    .footer {
        background-color: #222;
        padding-top: 1rem;

        &__separator {
          padding: 0.5rem 0;
          word-spacing: 0.5rem;
        }
    }
</style>