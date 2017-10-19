<template>
    <div class="col">
        <form class="send-email conteiner" action="">
            <h2>Envie uma mensagem</h2>

            <div class="form-group row">
                <label :class="contactSendEmailStyles.label" for="sender-name">Nome</label>

                <div :class="contactSendEmailStyles.name">
                    <input id="sender-name" class="form-control" type="text">
                </div>
            </div>

            <div class="form-group row">
                <label :class="contactSendEmailStyles.label" for="sender-email">E-mail</label>

                <div :class="contactSendEmailStyles.email">
                    <input id="sender-email" class="form-control" type="email">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <textarea class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12 text-center">
                    <button class="btn btn-default" type="reset">Limpar</button>

                    <button class="btn btn-success" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    import Emails from './data/emails';

    export default {
        name: "contact-send-email",

        data() {
            return {
                emails: Emails,
            };
        },

        computed: {
            contactSendEmailStyles() {
                return {
                    label: 'col-12 col-lg-3 col-form-label',
                    name: 'col-12 col-lg-8',
                    email: 'col-12 col-lg-9'
                };
            }
        }
    }
</script>

<style lang="scss" scoped>
    .send-email {
        color: white;
        margin-top: 2rem;
        padding: 0.5rem;
        @include media-breakpoint-up(md) {
            margin-top: 0;
        }

        h2 {
            font-size: 1.4rem;
          @include media-breakpoint-up(lg) {
            margin-bottom: 2rem;
          }
        }

        textarea {
            min-height: 10rem;
            margin-top: 1rem;
        }

        .btn + .btn {
            margin-left: 1rem;
        }
    }
</style>