<template>
  <div>
    <Header />
    <router-view></router-view>
    <Footer />

    <!-- Back to top button -->
    <div id="back-top">
      <a href="#">
        <b-icon-arrow-up-circle font-scale="3" variant="secondary"></b-icon-arrow-up-circle>
      </a>
    </div>
  </div>
</template>

<script>
import Header from '../components/Header'
import Footer from '../components/Footer'

export default {
  components: { Header, Footer }, 
}
</script>
