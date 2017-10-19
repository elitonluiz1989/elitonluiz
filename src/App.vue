<template>
  <div id="app">
      <app-header></app-header>

      <app-footer></app-footer>
  </div>
</template>

<script>
    import AppHeader from './components/App/AppHeader';
    import AppFooter from './components/App/AppFooter';

    export default {
      name: 'app',

      components: {
          AppHeader,
          AppFooter
      }
    }
</script>

<style lang="scss">
    html, body {
        min-height: 100%;
        height: 100%;
    }

    body {
        background-color: $main-bg-color;
        margin: 0;
    }
</style>
