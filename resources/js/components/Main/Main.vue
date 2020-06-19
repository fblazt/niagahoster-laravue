<template>
  <main class="pt-40">
    <MainFirstArticle></MainFirstArticle>
    <MainSecondArticle></MainSecondArticle>
    <MainThirdArticle></MainThirdArticle>
    <MainFourthArticle></MainFourthArticle>
    <MainFifthArticle></MainFifthArticle>
  </main>
</template>

<script>
import MainFirstArticle from './MainFirstArticle'
import MainSecondArticle from './MainSecondArticle'
import MainThirdArticle from './MainThirdArticle'
import MainFourthArticle from './MainFourthArticle'
import MainFifthArticle from './MainFifthArticle'

export default {
  name: 'Main',
  components: {
    MainFirstArticle,
    MainSecondArticle,
    MainThirdArticle,
    MainFourthArticle,
    MainFifthArticle
  }
}
</script>

<style>

</style>