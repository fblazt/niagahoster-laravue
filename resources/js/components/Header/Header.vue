<template>
  <header class="w-full fixed flex flex-col bg-white font-roboto">
    <TopLinks></TopLinks>
    <hr class="w-screen hidden lg:block">
    <div class="container mx-auto p-4 flex flex-row justify-between items-center">
      <HeaderNavLogo></HeaderNavLogo>
      <HeaderNav></HeaderNav>
    </div>
    <hr class="w-screen">
  </header>
</template>

<script>
import TopLinks from './TopLinks'
import HeaderNavLogo from './HeaderNavLogo';
import HeaderNav from './HeaderNav';

export default {
  components: {
    TopLinks,
    HeaderNavLogo,
    HeaderNav
  }
}
</script>

<style>

</style>