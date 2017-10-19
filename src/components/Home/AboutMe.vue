<template>
    <article class="about">
        <div class="alert alert-danger" v-if="hasErrors">{{ errorMessage }}</div>

        <section class="about__text">{{ about.text }}</section>
    </article>
</template>

<script>
    import aboutMe from './data/about.json';

    export default {
        name: 'AboutMe',

        data() {
            return {
                about: null,
                errorMessage: 'Houve um erro ao recuperar os dados.',
                hasErrors: false
            };
        },

        mounted() {
            this.about = aboutMe;

            if (!this.about) {
                this.hasErrors = true;
            }
        }
    }
</script>

<style lang="scss" scoped></style>