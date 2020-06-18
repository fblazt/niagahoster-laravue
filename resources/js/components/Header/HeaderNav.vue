<template>
  <div>
    <div class="px-2 py-1 md:hidden border border-solid border-black rounded">
      <button @click="NavOpen = !NavOpen" type="button">
        <i v-if="!NavOpen" class="fas fa-bars"></i>
        <i v-if="NavOpen" class="fas fa-times"></i>
      </button>
    </div>
    <nav :class="NavOpen ? 'block' : 'hidden'" class="md:flex">
      <ul class="flex" :class="NavOpen ? 'flex-col' : ''">
        <li>
          <a href="#" class="px-4 hover:text-blue-500">Hosting</a>
        </li>
        <li>
          <a href="#" class="px-4 hover:text-blue-500">Domain</a>
        </li>
        <li>
          <a href="#" class="px-4 hover:text-blue-500">Server</a>
        </li>
        <li>
          <a href="#" class="px-4 hover:text-blue-500">Website</a>
        </li>
        <li>
          <a href="#" class="px-4 hover:text-blue-500">Afiliasi</a>
        </li>
        <li>
          <a href="#" class="px-4 hover:text-blue-500">Promo</a>
        </li>
        <li>
          <a href="#" class="px-4 hover:text-blue-500">Pembayaran</a>
        </li>
        <li>
          <a href="#" class="px-4 hover:text-blue-500">Review</a>
        </li>
        <li>
          <a href="#" class="px-4 hover:text-blue-500">Kontak</a>
        </li>
        <li>
          <a href="#" class="px-4 hover:text-blue-500">Blog</a>
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
export default {
  name: 'HeaderNav',
  data() {
    return {
      NavOpen: false
    }
  }
}
</script>

<style>

</style>