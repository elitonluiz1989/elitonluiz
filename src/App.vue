<template>
  <div id="app">
      <app-header></app-header>

      <app-home></app-home>

      <app-projects></app-projects>

      <app-footer></app-footer>
  </div>
</template>

<script>
    import AppHeader from './components/App/AppHeader';
    import AppFooter from './components/App/AppFooter';

    import AppHome from '@/components/Home/AppHome';
    import AppProjects from '@/components/Projects/AppProjects';

    export default {
      name: 'app',

      components: {
          AppHeader,
          AppFooter,
          AppHome,
          AppProjects
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
