<template>
  <div class="headerContent">
    <!-- Top -->
    <TopNav />
    <!-- Header -->
    <div v-show="this.$route.path == '/'" class="container-fluid m-0">
      <div class="row justify-content-center" style="height: 75vh;">
        <div class="col-md-5 my-auto text-white text-center">
          <h1 class="text-uppercase text-warning">Welcome!</h1>
          <section>
            <!-- Swiper -->
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <h2 class="text-uppercase">Offering a broad range of textile products</h2>
                  <button class="btn btn-warning text-white">click here!</button>
                </div>
                <div class="swiper-slide">
                  <h2 class="text-uppercase">We are the leaders in the world of textile! </h2>
                  <button class="btn btn-warning text-white">click here!</button>
                </div>
                <div class="swiper-slide">
                  <h2 class="text-uppercase">Delivering the highest  quality fabrics</h2>
                  <button class="btn btn-warning text-white">click here!</button>
                </div>
              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
            </div>
          </section>
        </div>
      </div>
      <div class="row text-white text-center py-3" style="background: rgba(0,0,0,0.5)">
        <article class="col-md-4 border-right">
          <!-- Item title -->
          <h4>Certifications</h4>
          <h4>&amp; environment</h4>
          <!-- Intro Image -->
          <a href="#">
            <img class="introImage" src="/images/icon1.png" alt="">
          </a>
          <div class="item_content">
            <!-- Introtext -->
            <div class="item_introtext">
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
            </div>
            <!-- Read More link -->
            <a class="btn btn-info" href="#">
              MORE
            </a>
          </div>
          <div class="clearfix"></div>
        </article>
        <article class="col-md-4 border-right">
          <!-- Item title -->
          <h4>Fabric</h4> 
          <h4>specifications</h4> 
          <!-- Intro Image -->
          <a href="#">
            <img class="introImage" src="/images/icon2.png" alt="">
          </a>
          <div class="item_content">
            <!-- Introtext -->
            <div class="item_introtext">
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
            </div>
            <!-- Read More link -->
            <a class="btn btn-info" href="#">
              MORE
            </a>
          </div>
          <div class="clearfix"></div>  
        </article>
        <article class="col-md-4">

          <!-- Item title -->
          <h4>Fabric</h4> 
          <h4>innovation</h4>
          <!-- Intro Image -->
          <a href="#">
            <img class="introImage" src="/images/icon3.png" alt="">
          </a>

          <div class="item_content">
            <!-- Introtext -->
            <div class="item_introtext">
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
            </div>
            <!-- Read More link -->
            <!-- Read More link -->
            <a class="btn btn-info" href="#">
              MORE
            </a>
          </div>
          <div class="clearfix"></div>  
        </article>   
      </div>
    </div>
  </div>
</template>

<script>
  import TopNav from './TopNav'
  import Swiper from 'swiper'
  import 'swiper/swiper-bundle.min.css'

  export default {
    name: 'Header',
    components: { TopNav },
    data() {
      return {
        swiper: null
      }
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
  .headerContent {
    background: url(/images/headerBg.webp) center 0 no-repeat;
    background-size: cover;
  }
  .introImage {
    background-color: black;
    border-radius: 50%;
    -webkit-transition: all .3s linear;
    -moz-transition: all .3s linear;
    -o-transition: all .3s linear;
    transition: all .3s linear;
    margin-top: 1rem;
    margin-bottom: 1rem;
  }
  .introImage:hover {
    background-color: #7d625b;
  }
</style>
