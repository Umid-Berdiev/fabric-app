<template>
  <!-- footer -->
	<div class="footer">
		<b-container class="align-items-start">
      <b-row>
        <b-col md="4">
          <b-col class="border-bottom text-left mb-5">
            <h3>Keep connected</h3>
          </b-col>
          <div class="social">
            <ul>
              <li>
                <a href="https://facebook.com/textile-export">
                  <img src="/images/social-icons/Facebook.png" alt="facebook-image">
                </a>
              </li>
              <li>
                <a href="https://twitter.com/textile-export">
                  <img src="/images/social-icons/Twitter.png" alt="twitter-image">
                </a>
              </li>
              <li>
                <a href="https://instagram.com/textile-export">
                  <img src="/images/social-icons/Instagram.png" alt="instagram-image">
                </a>
              </li>
              <li>
                <a href="https://linkedin.com/textile-export">
                  <img src="/images/social-icons/Linkedin.png" alt="linkedin-image">
                </a>
              </li>
            </ul>
          </div>
        </b-col>
        <b-col md="4">
          <b-col class="border-bottom text-left mb-5">
            <h3>Say hello</h3>
          </b-col>
            <b-form>
              <b-form-group>
                <b-form-input
                  id="name"
                  v-model="form.name"
                  required
                  placeholder="Name"
                />
              </b-form-group>
              <b-form-group>
                <b-form-input
                  id="email"
                  v-model="form.email"
                  type="email"
                  required
                  placeholder="Email"
                />
              </b-form-group>
              <b-form-group>
                <b-form-textarea
                  id="textarea"
                  v-model="form.message"
                  placeholder="Message..."
                  rows="5"
                />
              </b-form-group>
            <b-button class="float-right" type="submit">Submit</b-button>
          </b-form>
        </b-col>
        <b-col md="4" class="text-left">
          <b-col class="border-bottom text-left mb-5">
            <h3>Our office</h3>
          </b-col>
          <b-icon-phone font-scale="2"></b-icon-phone>
          <span>+(998) 98-765-4321</span>
          <p>E-mail: <a href="#">info@textile-export.uz</a></p>
          <p>A.Temur st.17, Tashkent, Uzbekistan</p>
        </b-col>
      </b-row>
		</b-container>
		<b-container class="justify-content-start">
      <b-row>
				© 2020 Textile Export. All Rights Reserved
      </b-row>
		</b-container>
	</div>
<!-- footer -->
</template>

<script>
import { BIconPhone } from 'bootstrap-vue'

export default {
  name: 'Footer',
  components: { BIconPhone },
  data() {
    return {
      form: {
        name: '',
        email: '',
        message: ''
      },
    }
  }
}
</script>

<style scoped>
.footer{
	background:#f7f7f7;
	padding:3em 0;
}
.social {
	/* background:#5c5c5c; */
	padding: 1.5em 1em;
}
.social ul {
	padding: 0;
	margin:0;
}
.social ul li {
	display: inline-block;
	padding: 0em 0.5em;
}
.social img {
  width: 30px;
	height: 30px;
}

</style>
