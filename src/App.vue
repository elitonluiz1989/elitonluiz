<template>
  <div id="app">
      <app-header></app-header>

      <app-home :id="'inicio'"></app-home>

      <app-projects :id="'projetos'"></app-projects>

      <app-about :id="'sobre'"></app-about>

      <app-footer :id="'contato'"></app-footer>
  </div>
</template>

<script>
    import AppHeader from './components/App/AppHeader';
    import AppFooter from './components/App/AppFooter';

    import AppHome from '@/components/Home/AppHome';
    import AppProjects from '@/components/Projects/AppProjects';
    import AppAbout from '@/components/About/AppAbout';

    export default {
      name: 'app',

      components: {
          AppHeader,
          AppFooter,
          AppHome,
          AppProjects,
          AppAbout
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
