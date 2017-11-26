<template>
    <div class="col">
        <form class="send-email container text-white" :action="formAction" @submit.prevent="sendEmail" ref="form">
            <h2>Envie uma mensagem</h2>

            <form-message :message="formMessageText" :show="showFormMessage" :error="hasMessageError"></form-message>

            <div class="form-group row">
                <label :class="contactSendEmailStyles.label" for="sender-name">Nome</label>

                <div :class="contactSendEmailStyles.name">
                    <input id="sender-name" class="form-control" type="text" v-model="name" @keyup="removeInputStatus">
                </div>
            </div>

            <div class="form-group row">
                <label :class="contactSendEmailStyles.label" for="sender-email">E-mail</label>

                <div :class="contactSendEmailStyles.email">
                    <input id="sender-email" class="form-control" type="text" v-model="email" @keyup="removeInputStatus">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-12">
                    <textarea id="sender-message" class="form-control" v-model="message" @keyup="removeInputStatus"></textarea>
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
    import FormMessage from './FormMessage';

    export default {
        name: "contact-send-email",

        components: {
            FormMessage
        },

        data() {
            return {
                emails: Emails,
                formAction: '/api/mail/send',
                name: '',
                email: '',
                message: '',
                showFormMessage: false,
                hasMessageError: false,
                formMessageText: '',
                errorMessages:  {
                    name: 'Insira seu nome.',
                    email: 'Insira seu e-mail.',
                    message: 'Preencha o campo de texto.'
                }
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
        },

        mounted() {
            this.$http.get('/api/mail/')
                .then(response => {
                    console.log(response.body)
                }, err => {
                    console.log(err)
                });
        },

        methods: {
            formMessage() {
                this.showFormMessage = true;

                let scrollTo = $(this.$refs.form).offset().top;

                $('html, body').animate({scrollTop: scrollTo}, 500);
            },

            formMessageError(id) {
                this.hasMessageError = true;
                this.formMessageText = this.errorMessages[id];

                let element = document.getElementById('sender-' + id);
                element.classList.add('is-invalid');
                element.focus();

                this.formMessage();
            },

            removeInputStatus(evt) {
                let keyCode = evt.which || evt.keyCode;

                if (keyCode !== 13) {
                    evt.target.classList.remove('is-invalid');
                }
            },

            sendEmail() {
                if (this.name === '') {
                    this.formMessageError('name');
                } else if (this.email === '') {
                    this.formMessageError('email');
                } else if (!this.validateEmail()) {
                    this.formMessageError('email');
                } else if (this.message === '') {
                    this.formMessageError('message');
                } else {
                    this.$http.post('/api/mail/send/', {
                        name: this.name,
                        email: this.email,
                        message: this.message
                    })
                        .then(response => {
                            console.log(response);

                            this.hasMessageError = false;
                            this.formMessageText = 'E-mail enviado.';
                            this.formMessage();
                        }, err => {
                            console.log(err)

                            this.hasMessageError = true;
                            this.formMessageText = 'Houve um erro no envio do e-mail.';
                            this.formMessage();
                        })
                }

            },

            validateEmail() {
                return /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/.test(this.email);
            }
        }
    }
</script>

<style lang="scss" scoped>
  .send-email {
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