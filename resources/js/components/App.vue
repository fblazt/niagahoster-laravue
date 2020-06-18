<template>
  <div id="main-container" class="h-full w-full">
    <router-view></router-view>
  </div>
</template>

<script>
export default {

}
</script>

<style>
@font-face {
  font-family: Montserrat;
  src: url(/assets/fonts/montserrat/Montserrat-Regular.otf);
}
@font-face {
  font-family: Montserrat;
  src: url(/assets/fonts/montserrat/Montserrat-Light.otf);
  font-weight:300;
}
@font-face {
  font-family: Montserrat;
  src: url(/assets/fonts/montserrat/Montserrat-Bold.otf);
  font-weight:bold
}

@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap');

body {
  font-family: Montserrat, 'sans-serif';
}

.font-roboto {
  font-family: Roboto, 'sans-serif';
}


</style>