<template>
  <div id="container-fluid">
    <div class="container">
      <div class="row">
        <!-- Logo -->
        <div id="logo" class="col-md-3">
          <router-link to="/" class="text-decoration-none text-white">
            <h2 class="bg-info p-5 mb-0">
              <span>TEXTILE</span>
              <hr class="m-0 bg-white">
              <span>EXPORT</span>
            </h2>
          </router-link>
        </div>
        <div class="col-md-9 my-auto">
          <b-navbar toggleable="lg" type="dark" variant="">
            <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
            <b-collapse id="nav-collapse" is-nav>
              <b-navbar-nav class="mx-auto">
                <b-nav-item class="text-uppercase mr-5">
                  <router-link class="text-decoration-none" to="/">Home</router-link>
                </b-nav-item>
                <b-nav-item class="text-uppercase mr-5">
                  <router-link class="text-decoration-none" to="/about">About</router-link>
                </b-nav-item>
                <b-nav-item class="text-uppercase mr-5">
                  <router-link class="text-decoration-none" to="/services">Services</router-link>
                </b-nav-item>
                <b-nav-item class="text-uppercase mr-5">
                  <router-link class="text-decoration-none" to="/products">Products</router-link>
                </b-nav-item>
                <b-nav-item class="text-uppercase mr-5">
                  <router-link class="text-decoration-none" to="/blog">Blog</router-link>
                </b-nav-item>
                <b-nav-item class="text-uppercase mr-5">
                  <router-link class="text-decoration-none" to="/contacts">Contacts</router-link>
                </b-nav-item>
              </b-navbar-nav>
            </b-collapse>
          </b-navbar>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'TopNav',
}
</script>

<style scoped>
.nav-item a {
  color: #fff;
}
.nav-item a:hover, .nav-item a.router-link-exact-active {
  color: sandybrown;
}
</style>
