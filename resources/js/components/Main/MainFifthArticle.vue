<template>
  <article class="w-full">
    <div class="container mx-auto p-4">
      <h2 class="text-3xl text-center">Semua Paket Hosting Sudah Termasuk</h2>
    </div>
    <div class="container mx-auto p-4">
      <div class="w-full flex flex-col md:flex-row flex-wrap justify-between">
        <div class="w-full md:w-1/2 md:pr-4">
          <p class="text-xl leading-8">Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda</p>
          <ul class="mt-8">
            <li class="mt-3">
              <i class="fas fa-check-circle fa-lg text-green-500"></i>
              <span>Install Laravel <b>1 klik</b> dengan Softaculous Installer.</span>
            </li>
            <li class="mt-3">
              <i class="fas fa-check-circle fa-lg text-green-500"></i>
              <span>Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json,</b> dan <b>fileinfo.</b></span>
            </li>
            <li class="mt-3">
              <i class="fas fa-check-circle fa-lg text-green-500"></i>
              <span>Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstal packages pilihan Anda.</span>
            </li>
          </ul>
          <p class="mt-6 text-sm">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
          <button type="button" class="mt-6 px-5 py-3 border border-solid border-blue-500 rounded-full bg-blue-500 text-white hover:border-blue-600 hover:bg-blue-600"><b>Pilih Hosting Anda</b></button>
        </div>
        <div class="w-3/4 md:w-1/2 mx-auto pt-2 md:pt-0 md:pl-4">
          <img src="/assets/svg/illustration banner support laravel hosting.svg" alt="Laravel Support">
        </div>
      </div>
    </div>
    <hr class="w-full">
  </article>
</template>

<script>
export default {
  name: 'MainFifthArticle'
}
</script>

<style>

</style>