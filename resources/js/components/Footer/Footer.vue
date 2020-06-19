<template>
  <footer class="w-full pt-12 footer-bg">
    <FooterTop></FooterTop>
    <FooterBottom></FooterBottom>
  </footer>
</template>

<script>
import FooterTop from './FooterTop'
import FooterBottom from './FooterBottom'

export default {
  name: 'Footer',
  components: {
    FooterTop,
    FooterBottom
  }
}
</script>

<style>
.footer-bg {
  background-color: #303030;
}
</style>