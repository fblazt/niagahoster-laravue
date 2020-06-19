<template>
  <article class="container mx-auto p-4">
    <div class="flex flex-col justify-center items-center">
      <h2 class="text-3xl">Semua Paket Hosting Sudah Termasuk</h2>
      <div class="w-full mt-8 flex flex-row flex-wrap">
        <div class="w-full sm:w-1/2 md:w-1/3 px-4 py-6 sm:py-10" v-for="item in 6" :key="item.id">
          <HostingFeatures
          :iconPath="iconPath[(item-1)]"
          :iconTitle="iconTitle[(item-1)]"
          :iconDesc="iconDesc[(item-1)]"></HostingFeatures>
        </div>
      </div>
      <hr class="w-32 mt-16 border-2 border-gray-400">
    </div>
  </article>
</template>

<script>
import HostingFeatures from './MainFourthArticleItems'

export default {
  name: 'MainFourthArticle',
  data() {
    return {
      iconPath: ['/assets/svg/icon PHP Hosting_PHP Semua Versi.svg', 
                '/assets/svg/icon PHP Hosting_My SQL.svg', 
                '/assets/svg/icon PHP Hosting_CPanel.svg', 
                '/assets/svg/icon PHP Hosting_garansi uptime.svg', 
                '/assets/svg/icon PHP Hosting_InnoDB.svg', 
                '/assets/svg/icon PHP Hosting_My SQL remote.svg'],
      iconTitle: ['PHP Semua Versi', 
                'MySQL Versi 5.6', 
                'Panel Hosting cPanel', 
                'Garansi Uptime 99.9%', 
                'Database InnoDB Unlimited', 
                'Wildcard Remote MySQL'],
      iconDesc: ['Pilih mulai dari versi PHP 5.4 s/d PHP 7. Ubah sesuka Anda!', 
                'Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur.', 
                'Kelola website dengan panel canggih yang familiar di hati Anda.', 
                'Data center yang mendukung kelangsungan website Anda 24/7.', 
                'Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.', 
                'Mendukung s/d 25 max_user_connections dan 100 max_connections.']
    }
  },
  components: {
    HostingFeatures
  }
}
</script>

<style>

</style>