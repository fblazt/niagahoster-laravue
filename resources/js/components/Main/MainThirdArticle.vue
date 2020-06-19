<template>
  <article class="container mx-auto p-4">
    <div class="flex flex-col justify-center items-center">
      <h2 class="text-3xl">Powerful dengan Limit PHP yang Lebih Besar</h2>
      <div class="w-full mt-8 flex flex-row flex-wrap justify-center">
        <div class="w-full md:w-2/5 px-4 py-1">
          <ul class="w-full border border-solid">
            <li class="p-2 flex items-center text-center">
              <i class="fas fa-check-circle fa-lg text-green-500"></i>
              <span class="mx-auto">max execution time 300s</span>
            </li>
            <hr class="w-full">
            <li class="p-2 flex items-center text-center bg-gray-200">
              <i class="fas fa-check-circle fa-lg text-green-500"></i>
              <span class="mx-auto">max execution time 300s</span>
            </li>
            <hr class="w-full">
            <li class="p-2 flex items-center text-center">
              <i class="fas fa-check-circle fa-lg text-green-500"></i>
              <span class="mx-auto">php memory limit 1024 MB</span>
            </li>
          </ul>
        </div>
        <div class="w-full md:w-2/5 px-4 py-1">
          <ul class="w-full border border-solid">
            <li class="p-2 flex items-center text-center">
              <i class="fas fa-check-circle fa-lg text-green-500"></i>
              <span class="mx-auto">post max size 128 MB</span>
            </li>
            <hr class="w-full">
            <li class="p-2 flex items-center text-center bg-gray-200">
              <i class="fas fa-check-circle fa-lg text-green-500"></i>
              <span class="mx-auto">upload max filesize 128 MB</span>
            </li>
            <hr class="w-full">
            <li class="p-2 flex items-center text-center">
              <i class="fas fa-check-circle fa-lg text-green-500"></i>
              <span class="mx-auto">max input vars 2500</span>
            </li>
          </ul>
        </div>
      </div>
      <hr class="w-32 mt-16 border-2 border-gray-400">
    </div>
  </article>
</template>

<script>
export default {

}
</script>

<style>

</style>