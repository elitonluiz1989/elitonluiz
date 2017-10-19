<template>
    <header class="title">
        <h1>
            <i class="fa fa-hashtag" aria-hidden="true"></i>

            <slot></slot>
        </h1>
    </header>
</template>

<script>
    export default {
        name: "app-title"
    }
</script>

<style lang="scss" scoped>
    .title {
      background-color: #333;
      margin-bottom: 0.5rem;
      width: 70%;

      h1 {
        padding: 0.5rem;
        color: white;
        font-size: 1.6rem;
        @extend .text-center;
      }
    }
</style>