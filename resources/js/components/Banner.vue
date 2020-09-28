<template>
  <b-container fluid class="banner">
    <b-container class="justify-content-start">
      <b-navbar toggleable="lg" type="dark" variant="">
        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
        <b-collapse id="nav-collapse" is-nav>
          <b-navbar-nav>
            <b-nav-item>
              <router-link to="/">Home</router-link>
            </b-nav-item>
            <b-nav-item>
              <router-link to="/about">About</router-link>
            </b-nav-item>
            <b-nav-item>
              <router-link to="/services">Services</router-link>
            </b-nav-item>
            <b-nav-item>
              <router-link to="/products">Products</router-link>
            </b-nav-item>
            <b-nav-item>
              <router-link to="/contacts">Contacts</router-link>
            </b-nav-item>
          </b-navbar-nav>
        </b-collapse>
      </b-navbar>
      <div class="clearfix"></div>
      <section v-show="this.$route.path == '/'">
        <!-- Swiper -->
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <h1>Cum sociis natoque penatibus et magnis dis parturient montes.</h1>
              <p>Duis eget metus nunc. Donec at mollis magna, at faucibus magna. Nunc eget metus purus. Integer id molestie nunc. Nunc vulputate imperdiet arcu, at vulputate lectus congue eget. Duis rutrum ut velit eu pharetra. Vestibulum a lectus metus. Sed venenatis a turpis non lobortis.</p>	
            </div>
            <div class="swiper-slide">
              <h1>Cum sociis natoque penatibus et magnis dis parturient montes.</h1>
              <p>Duis eget metus nunc. Donec at mollis magna, at faucibus magna. Nunc eget metus purus. Integer id molestie nunc. Nunc vulputate imperdiet arcu, at vulputate lectus congue eget. Duis rutrum ut velit eu pharetra. Vestibulum a lectus metus. Sed venenatis a turpis non lobortis.</p>	
            </div>
            <div class="swiper-slide">
              <h1>Cum sociis natoque penatibus et magnis dis parturient montes.</h1>
              <p>Duis eget metus nunc. Donec at mollis magna, at faucibus magna. Nunc eget metus purus. Integer id molestie nunc. Nunc vulputate imperdiet arcu, at vulputate lectus congue eget. Duis rutrum ut velit eu pharetra. Vestibulum a lectus metus. Sed venenatis a turpis non lobortis.</p>	
            </div>
            <div class="swiper-slide">
              <h1>Cum sociis natoque penatibus et magnis dis parturient montes.</h1>
              <p>Duis eget metus nunc. Donec at mollis magna, at faucibus magna. Nunc eget metus purus. Integer id molestie nunc. Nunc vulputate imperdiet arcu, at vulputate lectus congue eget. Duis rutrum ut velit eu pharetra. Vestibulum a lectus metus. Sed venenatis a turpis non lobortis.</p>	
            </div>
            <div class="swiper-slide">
              <h1>Cum sociis natoque penatibus et magnis dis parturient montes.</h1>
              <p>Duis eget metus nunc. Donec at mollis magna, at faucibus magna. Nunc eget metus purus. Integer id molestie nunc. Nunc vulputate imperdiet arcu, at vulputate lectus congue eget. Duis rutrum ut velit eu pharetra. Vestibulum a lectus metus. Sed venenatis a turpis non lobortis.</p>	
            </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination"></div>
        </div>
      </section>
    </b-container>
  </b-container>
</template>

<script>
import Swiper from 'swiper';
import 'swiper/swiper-bundle.min.css'

export default {
  name: 'Banner',
  data() {
    return {
      swiper: null,
    }
  },
  methods: {
    // 
  },
  mounted() {
    this.swiper = new Swiper('.swiper-container', {
      centeredSlides: true,
      autoplay: {
        delay: 2000,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });

  }
}
</script>

<style scoped>
.banner {
  background: url(/static/banner.jpg) no-repeat center fixed;
  background-size: cover;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  -ms-background-size: cover;
  text-align: left;
  min-height: 100px;
}

.nav-item:hover, .nav-item .nuxt-link-exact-active {
  /* border: 2px solid #000; */
  text-decoration: none;
  color: red;
}
.nav-item a {
  text-decoration: none;
  color: #000;
}
.nav-item {
  font-size: 1.2em;
  display: block;
  padding: 0.5em 1em;
  margin: 0 13px;
  text-transform: uppercase;
  border: 2px solid rgba(255, 255, 255, 0);
  transition: .5s all;
  -webkit-transition: .5s all;
  -moz-transition: .5s all;
  -o-transition: .5s all;
  -ms-transition: .5s all;
}

.swiper-container {
  max-width: 50vw;
}

.swiper-slide h1 {
	color: #000;
	font-size: 2.5em;
	font-weight: 400;
	margin: 1em 0em;
	font-family: 'Lobster', cursive;
}
</style>
