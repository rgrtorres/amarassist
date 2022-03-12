<template>
  <div id="app">
    <Navbar />

    <b-container class="mt-5 mb-5">
      <router-view/>
    </b-container>
  </div>
</template>

<script>
import Navbar from '@/components/Navbar.vue'

export default {
  components: {
    Navbar
  }
}
</script>
