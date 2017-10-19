<template>
    <div class="content conteiner-fluid">
        <app-home></app-home>
    </div>
</template>

<script>
    import AppHome from '@/components/Home/AppHome';

    export default {
        name: "app-content",

        components: {
            AppHome
        }
    }
</script>