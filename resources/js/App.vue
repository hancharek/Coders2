<template>
  <div id="app">
    <navbar></navbar>
    <router-view/>
    <app_footer></app_footer>
  </div>
</template>
<script>
import app_footer from './components/footer';
import navbar from './components/navbar';
    export default {
        components:{
            app_footer,
            navbar,
        }
    }
</script>
<style>
  h1, h2, h3, h4, h5, h6, p, input, span, a {
    font-family: 'Rubik', sans-serif !important;
  }
  body {
    background: -webkit-linear-gradient(90deg, rgb(241, 161, 10), rgb(52, 35, 3));
    background: linear-gradient(90deg, rgb(241, 161, 10), rgb(52, 35, 3));
  }
</style>