<template>
  <footer class="w-full pt-12 footer-bg">
    <FooterTop></FooterTop>
  </footer>
</template>

<script>
import FooterTop from './FooterTop'

export default {
  name: 'Footer',
  components: {
    FooterTop
  }
}
</script>

<style>
.footer-bg {
  background-color: #303030;
}
</style>