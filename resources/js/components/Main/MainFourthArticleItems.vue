<template>
  <div class="flex flex-col justify-center items-center">
    <img :src="iconPath" alt="" class="w-20">
    <h4 class="text-xl"><b>{{ iconTitle }}</b></h4>
    <p class="text-center">{{ iconDesc }}</p>
  </div>
</template>

<script>
export default {
  name: 'MainFourthArticleItems',
  props: ['iconPath', 'iconTitle', 'iconDesc']
}
</script>

<style>

</style>