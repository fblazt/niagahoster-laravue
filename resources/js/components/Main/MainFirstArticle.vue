<template>
  <article class="flex flex-col">
    <section class="container mx-auto p-4 flex flex-col md:flex-row justify-between items-center">
      <div class="md:w-1/2">
        <h1 class="text-4xl"><b>PHP Hosting</b></h1>
        <h2 class="mb-2 text-3xl">Cepat, handal, penuh dengan modul PHP yang anda butuhkan</h2>
        <ul>
          <li class="mt-3">
            <i class="fas fa-check-circle fa-lg text-green-500"></i>
            <span>Solusi PHP untuk performa query yang lebih cepat.</span>
          </li>
          <li class="mt-3">
            <i class="fas fa-check-circle fa-lg text-green-500"></i>
            <span>Konsumsi memori yang lebih rendah.</span>
          </li>
          <li class="mt-3">
            <i class="fas fa-check-circle fa-lg text-green-500"></i>
            <span>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</span>
          </li>
          <li class="mt-3">
            <i class="fas fa-check-circle fa-lg text-green-500"></i>
            <span>Fitur enkripsi ionCube dan Zend Guard Loaders</span>
          </li>
        </ul>
      </div>
      <div class="md:w-1/2">
        <img src="/assets/svg/illustration banner PHP hosting-01.svg" alt="PHP Hosting" class="w-full md:w-3/4 float-right">
      </div>
    </section>
    <hr class="w-full">
    <section class="container mx-auto p-4 flex flex-col md:flex-row justify-center items-center">
      <div class="mx-6 h-64 w-56 text-center">
        <div class="h-full w-full flex flex-col justify-center items-center">
          <img src="/assets/svg/icon PHP Hosting_zendguard.svg" alt="Zenguard" class="h-40">
          <p class="mt-3">PHP Zend Guard Loader</p>
        </div>
      </div>
      <div class="mx-6 h-64 w-56 text-center">
        <div class="h-full w-full flex flex-col justify-center items-center">
          <img src="/assets/svg/icon PHP Hosting_composer.svg" alt="Composer" class="h-40">
          <p class="mt-3">PHP Composer</p>
        </div>
      </div>
      <div class="mx-6 h-64 w-56 text-center">
        <div class="h-full w-full flex flex-col justify-center items-center">
          <img src="/assets/svg/icon PHP Hosting_ioncube.svg" alt="ionCube" class="h-40">
          <p class="mt-3">PHP ionCube Loader</p>
        </div>
      </div>
    </section>
  </article>
</template>

<script>
export default {
  name: 'MainFirstArticle'
}
</script>

<style>

</style>