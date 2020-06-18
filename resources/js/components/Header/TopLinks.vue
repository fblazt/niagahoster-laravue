<template>
  <div class="container mx-auto px-4 py-3 hidden lg:flex" :class="PromoBanner ? 'justify-between' : 'justify-end'">
    <div v-if="PromoBanner" class="-mt-3 flex">
      <img src="/assets/images/ribbon.png" alt="Promo">
      <span class="ml-2">Gratis Ebook 9 Cara Cerdas Menggunakan Domain [ <span @click="PromoBanner = !PromoBanner" class="cursor-pointer">x</span> ]</span>
    </div>
    <div>
      <ul class="flex">
        <li>
          <a href="tel:0274-530-5505" class="px-4 text-gray-700 hover:text-gray-600">
            <i class="fas fa-phone-alt"></i>
            <span>0274-5305505</span>
          </a>
        </li>
        <li>
          <a href="#" class="px-4 text-gray-700 hover:text-gray-600">
            <i class="fas fa-comment-alt"></i>
            <span>Live Chat</span>
          </a>
        </li>
        <li>
          <a href="#" class="px-4 text-gray-700 hover:text-gray-600">
            <i class="fas fa-user-circle"></i>
            <span>Member Area</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  name: 'TopLinks',
  data() {
    return {
      PromoBanner: true
    }
  }
}
</script>

<style>

</style>