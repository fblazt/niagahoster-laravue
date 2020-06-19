<template>
  <main class="pt-40">
    <MainFirstArticle></MainFirstArticle>
    <MainSecondArticle></MainSecondArticle>
    <MainThirdArticle></MainThirdArticle>
    <MainFourthArticle></MainFourthArticle>
    <MainFifthArticle></MainFifthArticle>
    <MainSixthArticle></MainSixthArticle>
  </main>
</template>

<script>
import MainFirstArticle from './MainFirstArticle'
import MainSecondArticle from './MainSecondArticle'
import MainThirdArticle from './MainThirdArticle'
import MainFourthArticle from './MainFourthArticle'
import MainFifthArticle from './MainFifthArticle'
import MainSixthArticle from './MainSixthArticle'

export default {
  name: 'Main',
  components: {
    MainFirstArticle,
    MainSecondArticle,
    MainThirdArticle,
    MainFourthArticle,
    MainFifthArticle,
    MainSixthArticle
  }
}
</script>

<style>

</style>