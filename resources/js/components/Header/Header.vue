<template>
  <header class="w-full fixed z-50 flex flex-col bg-white font-roboto">
    <TopLinks></TopLinks>
    <hr class="w-screen hidden lg:block">
    <div class="container mx-auto p-4 flex flex-col md:flex-row md:justify-between md:items-center">
      <div class="w-full flex flex-row justify-between items-center">
        <HeaderNavLogo></HeaderNavLogo>
        <button @click="navOpen = !navOpen" class="md:hidden text-blue-600">
          <i v-if="!navOpen" class="fas fa-bars fa-2x"></i>
          <i v-if="navOpen" class="fas fa-times fa-2x"></i>
        </button>
      </div>
      <nav :class="navOpen ? 'block' : 'hidden'" class="md:block">
        <ul class="flex flex-col md:flex-row">
          <li class="mt-3 py-2 text-xl text-white border-b rounded-md bg-blue-300 md:mt-0 md:py-0 md:text-base md:text-black md:border-none md:rounded-none md:bg-transparent">
            <a href="#" class="px-4 hover:text-blue-500">Hosting</a>
          </li>
          <li class="mt-3 py-2 text-xl text-white border-b rounded-md bg-blue-300 md:mt-0 md:py-0 md:text-base md:text-black md:border-none md:rounded-none md:bg-transparent">
            <a href="#" class="px-4 hover:text-blue-500">Domain</a>
          </li>
          <li class="mt-3 py-2 text-xl text-white border-b rounded-md bg-blue-300 md:mt-0 md:py-0 md:text-base md:text-black md:border-none md:rounded-none md:bg-transparent">
            <a href="#" class="px-4 hover:text-blue-500">Server</a>
          </li>
          <li class="mt-3 py-2 text-xl text-white border-b rounded-md bg-blue-300 md:mt-0 md:py-0 md:text-base md:text-black md:border-none md:rounded-none md:bg-transparent">
            <a href="#" class="px-4 hover:text-blue-500">Website</a>
          </li>
          <li class="mt-3 py-2 text-xl text-white border-b rounded-md bg-blue-300 md:mt-0 md:py-0 md:text-base md:text-black md:border-none md:rounded-none md:bg-transparent">
            <a href="#" class="px-4 hover:text-blue-500">Afiliasi</a>
          </li>
          <li class="mt-3 py-2 text-xl text-white border-b rounded-md bg-blue-300 md:mt-0 md:py-0 md:text-base md:text-black md:border-none md:rounded-none md:bg-transparent">
            <a href="#" class="px-4 hover:text-blue-500">Promo</a>
          </li>
          <li class="mt-3 py-2 text-xl text-white border-b rounded-md bg-blue-300 md:mt-0 md:py-0 md:text-base md:text-black md:border-none md:rounded-none md:bg-transparent">
            <a href="#" class="px-4 hover:text-blue-500">Pembayaran</a>
          </li>
          <li class="mt-3 py-2 text-xl text-white border-b rounded-md bg-blue-300 md:mt-0 md:py-0 md:text-base md:text-black md:border-none md:rounded-none md:bg-transparent">
            <a href="#" class="px-4 hover:text-blue-500">Review</a>
          </li>
          <li class="mt-3 py-2 text-xl text-white border-b rounded-md bg-blue-300 md:mt-0 md:py-0 md:text-base md:text-black md:border-none md:rounded-none md:bg-transparent">
            <a href="#" class="px-4 hover:text-blue-500">Kontak</a>
          </li>
          <li class="mt-3 py-2 text-xl text-white border-b rounded-md bg-blue-300 md:mt-0 md:py-0 md:text-base md:text-black md:border-none md:rounded-none md:bg-transparent">
            <a href="#" class="px-4 hover:text-blue-500">Blog</a>
          </li>
        </ul>
      </nav>
    </div>
    <hr class="w-screen">
  </header>
</template>

<script>
import TopLinks from './TopLinks'
import HeaderNavLogo from './HeaderNavLogo'

export default {
  name: 'Header',
  data() {
    return {
      navOpen: false
    }
  },
  components: {
    TopLinks,
    HeaderNavLogo
  }
}
</script>

<style>

</style>