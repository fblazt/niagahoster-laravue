<template>
  <main class="pt-40">
    <MainFirstArticle></MainFirstArticle>
    <MainSecondArticle></MainSecondArticle>
  </main>
</template>

<script>
import MainFirstArticle from './MainFirstArticle'
import MainSecondArticle from './MainSecondArticle'

export default {
  name: 'Main',
  components: {
    MainFirstArticle,
    MainSecondArticle
  }
}
</script>

<style>

</style>