<template>
  <main class="pt-40">
    <MainFirstArticle></MainFirstArticle>
    <MainSecondArticle></MainSecondArticle>
    <MainThirdArticle></MainThirdArticle>
  </main>
</template>

<script>
import MainFirstArticle from './MainFirstArticle'
import MainSecondArticle from './MainSecondArticle'
import MainThirdArticle from './MainThirdArticle'

export default {
  name: 'Main',
  components: {
    MainFirstArticle,
    MainSecondArticle,
    MainThirdArticle
  }
}
</script>

<style>

</style>