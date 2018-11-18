<template>
  <div id="app">
    <app-layout>
      <template slot="menu">
        <app-menu></app-menu>
      </template>
      <template slot="header">
        <app-header></app-header>
      </template>
      <template>
        <router-view></router-view>
      </template>
      <template slot="footer">
        <app-footer></app-footer>
      </template>
    </app-layout>
  </div>
</template>

<script>
  import AppLayout from "@/layouts/AppLayout"
  import AppMenu from "@/views/app/AppMenu"
  import AppHeader from "@/views/app/AppHeader"
  import AppFooter from "@/views/app/AppFooter"
  export default {
    name: 'app',
    components: {
     AppLayout,
     AppMenu,
     AppHeader,
     AppFooter
    }
  }
</script>

<style>
</style>