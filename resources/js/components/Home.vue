<template>
  <div>
    <Header></Header>
    <Main></Main>
    <Footer></Footer>
  </div>
</template>

<script>
import Header from './Header/Header';
import Main from './Main/Main';
import Footer from './Footer/Footer';

export default {
  name: 'Home',
  components: {
    Header,
    Main,
    Footer
  }
}
</script>

<style>

</style>