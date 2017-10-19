<template>
  <div id="app">
      <app-header></app-header>

      <app-content></app-content>

      <app-footer></app-footer>
  </div>
</template>

<script>
    import AppHeader from './components/App/AppHeader';
    import AppContent from './components/App/AppContent';
    import AppFooter from './components/App/AppFooter';

    export default {
      name: 'app',

      components: {
          AppHeader,
          AppContent,
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
        background-color: $main-bg-color !important;
        margin: 0;
    }
</style>
