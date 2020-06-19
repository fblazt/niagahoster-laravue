<template>
  <article class="container mx-auto p-4">
    <section class="flex flex-col">
      <div class="w-full flex flex-col justify-center items-center">
        <h1 class="text-4xl"><b>Paket Hosting Singapura yang Tepat</b></h1>
        <h2 class="text-3xl">Diskon 40% + Domain dan SSL Gratis untuk Anda</h2>
      </div>
      <div class="w-full mt-16 px-4 flex flex-wrap">
        <div class="w-full sm:w-1/2 md:w-1/4 px-1 md:px-0 py-1">
          <div class="h-auto sm:h-full md:h-auto w-full text-center border border-solid">
            <div id="title" class="py-2 text-2xl"><b>{{ this.hostingPackage[0].hosting_package }}</b></div>
            <hr class="w-full">
            <div id="price" class="py-2">
              <p><strike>Rp 19.900</strike></p>
              <p class="pt-1">
                <span class="text-lg align-top">Rp </span>
                <span class="text-5xl leading-none"><b>{{ this.hostingPackage[0].price.split('.')[0] }}</b></span>
                <span class="text-lg align-top"><b>.{{ this.hostingPackage[0].price.split('.')[1] }}</b></span>
                <span class="text-lg align-top">/bln</span>
              </p>
            </div>
            <hr class="w-full">
            <div id="customer" class="py-2"><b>938</b> Pengguna Terdaftar</div>
            <hr class="w-full">
            <div id="features" class="py-2">
              <ul>
                <li class="py-1"><b>0.5X RESOURCES POWER</b></li>
                <li class="py-1"><b>500 MB</b> Disk Space</li>
                <li class="py-1"><b>Unlimited</b> Bandwith</li>
                <li class="py-1"><b>Unlimited</b> Databases</li>
                <li class="py-1"><b>Instant</b> Backup</li>
                <li class="py-1"><b>Unlimited SSL</b> Gratis Selamanya</li>
              </ul>
            </div>
            <div class="py-4">
              <button class="px-4 py-2 border-2 border-solid border-black rounded-full hover:bg-black hover:text-white"><b>Pilih Sekarang</b></button>
            </div>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/4 px-1 md:px-0 py-1">
          <div class="h-auto sm:h-full md:h-auto w-full text-center border border-solid">
            <div id="title" class="py-2 text-2xl"><b>{{ this.hostingPackage[1].hosting_package }}</b></div>
            <hr class="w-full">
            <div id="price" class="py-2">
              <p><strike>Rp 46.900</strike></p>
              <p class="pt-1">
                <span class="text-lg align-top">Rp </span>
                <span class="text-5xl leading-none"><b>{{ this.hostingPackage[1].price.split('.')[0] }}</b></span>
                <span class="text-lg align-top"><b>.{{ this.hostingPackage[1].price.split('.')[1] }}</b></span>
                <span class="text-lg align-top">/bln</span>
              </p>
            </div>
            <hr class="w-full">
            <div id="customer" class="py-2"><b>4.168</b> Pengguna Terdaftar</div>
            <hr class="w-full">
            <div id="features" class="py-2">
              <ul>
                <li class="py-1"><b>1X RESOURCES POWER</b></li>
                <li class="py-1"><b>Unlimited</b> Disk Space</li>
                <li class="py-1"><b>Unlimited</b> Bandwith</li>
                <li class="py-1"><b>Unlimited</b> POP3 Emai</li> 
                <li class="py-1"><b>Unlimited</b> Databases</li>
                <li class="py-1"><b>10</b> Addon Domains</li>
                <li class="py-1"><b>Instant</b> Backup</li>
                <li class="py-1"><b>Domain Gratis</b> Selamanya</li>
                <li class="py-1"><b>Unlimited SSL</b> Gratis Selamanya</li>
              </ul>
            </div>
            <div class="py-4">
              <button class="px-4 py-2 border-2 border-solid border-black rounded-full hover:bg-black hover:text-white"><b>Pilih Sekarang</b></button>
            </div>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/4 px-1 md:px-0 py-1">
          <div class="h-auto sm:h-full md:h-auto w-full text-center border border-solid border-blue-500">
            <img src="/assets/images/bestseller_ribbon.png" alt="Best Seller" class="absolute w-24 -mt-2 -ml-2">
            <div id="title" class="py-2 bg-blue-500 text-white text-2xl"><b>{{ this.hostingPackage[2].hosting_package }}</b></div>
            <hr class="w-full border-blue-500">
            <div id="price" class="py-2 bg-blue-500 text-white">
              <p><strike>Rp 58.900</strike></p>
              <p class="pt-1">
                <span class="text-lg align-top">Rp </span>
                <span class="text-5xl leading-none"><b>{{ this.hostingPackage[2].price.split('.')[0] }}</b></span>
                <span class="text-lg align-top"><b>.{{ this.hostingPackage[2].price.split('.')[1] }}</b></span>
                <span class="text-lg align-top">/bln</span>
              </p>
            </div>
            <hr class="w-full border-blue-500">
            <div id="customer" class="py-2 bg-blue-600 text-white"><b>10.017</b> Pengguna Terdaftar</div>
            <hr class="w-full border-blue-500">
            <div id="features" class="py-2">
              <ul>
                <li class="py-1"><b>2X RESOURCES POWER</b></li>
                <li class="py-1"><b>Unlimited</b> Disk Space</li>
                <li class="py-1"><b>Unlimited</b> Bandwith</li>
                <li class="py-1"><b>Unlimited</b> POP3 Emai</li> 
                <li class="py-1"><b>Unlimited</b> Databases</li>
                <li class="py-1"><b>Unlimited</b> Addon Domains</li>
                <li class="py-1"><b>Instant</b> Backup & Restore</li>
                <li class="py-1"><b>Domain Gratis</b> Selamanya</li>
                <li class="py-1"><b>Unlimited SSL</b> Gratis Selamanya</li>
                <li class="py-1"><b>Private</b> Name Server</li>
                <li class="py-1"><b>SpamAssasin</b> Mail Protection</li>
              </ul>
            </div>
            <div class="py-4">
              <button class="px-4 py-2 border-2 border-solid border-blue-600 bg-blue-600 text-white rounded-full hover:border-blue-700 hover:bg-blue-700 hover:text-white"><b>Pilih Sekarang</b></button>
            </div>
          </div>
        </div>
        <div class="w-full sm:w-1/2 md:w-1/4 px-1 md:px-0 py-1">
          <div class="h-auto sm:h-full md:h-auto w-full text-center border border-solid">
            <div id="title" class="py-2 text-2xl"><b>{{ this.hostingPackage[3].hosting_package }}</b></div>
            <hr class="w-full">
            <div id="price" class="py-2">
              <p><strike>Rp 109.900</strike></p>
              <p class="pt-1">
                <span class="text-lg align-top">Rp </span>
                <span class="text-5xl leading-none"><b>{{ this.hostingPackage[3].price.split('.')[0] }}</b></span>
                <span class="text-lg align-top"><b>.{{ this.hostingPackage[3].price.split('.')[1] }}</b></span>
                <span class="text-lg align-top">/bln</span>
              </p>
            </div>
            <hr class="w-full">
            <div id="customer" class="py-2"><b>3.552</b> Pengguna Terdaftar</div>
            <hr class="w-full">
            <div id="features" class="py-2">
              <ul>
                <li class="py-1"><b>3X RESOURCES POWER</b></li>
                <li class="py-1"><b>Unlimited</b> Disk Space</li>
                <li class="py-1"><b>Unlimited</b> Bandwith</li>
                <li class="py-1"><b>Unlimited</b> POP3 Emai</li> 
                <li class="py-1"><b>Unlimited</b> Databases</li>
                <li class="py-1"><b>Unlimited</b> Addon Domains</li>
                <li class="py-1"><b>Magic Auto</b> Backup & Restore</li>
                <li class="py-1"><b>Domain Gratis</b> Selamanya</li>
                <li class="py-1"><b>Unlimited SSL</b> Gratis Selamanya</li>
                <li class="py-1"><b>Private</b> Name Server</li>
                <li class="py-1"><b>Prioritas</b> Layanan spanport</li>
                <li class="py-1"><i v-for="item in 5" :key="item.id" class="fas fa-star text-blue-400"></i></li>
                <li class="py-1"><b>SpamExpert</b> Pro Mail Protection</li>
              </ul>
            </div>
            <div class="py-4">
              <button class="px-4 py-2 border-2 border-solid border-black rounded-full hover:bg-black hover:text-white"><b>Diskon 40%</b></button>
            </div>
          </div>
        </div>
      </div>
    </section>
  </article>
</template>

<script>
export default {
  name: 'MainSecondArticle',
  data() {
    return {
      hostingPackage: []
    }
  },
  created() {
    this.loadData()
  },
  methods: {
    loadData() {
      axios
        .get(`${process.env.MIX_API_URL}`)
        .then(response => {this.hostingPackage = response.data})
    }
  }
}
</script>

<style>

</style>