<template>
  <!-- footer -->
	<div class="footer">
		<b-container class="align-items-start">
      <b-row>
        <b-col md="4" class="mb-3">
          <b-col class="border-bottom text-left mb-md-5">
            <h3>Keep connected</h3>
          </b-col>
          <div class="social">
            <ul>
              <li>
                <a href="#">
                  <img src="/images/social-icons/Facebook.png" alt="facebook-image">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="/images/social-icons/Twitter.png" alt="twitter-image">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="/images/social-icons/Instagram.png" alt="instagram-image">
                </a>
              </li>
              <li>
                <a href="#">
                  <img src="/images/social-icons/Linkedin.png" alt="linkedin-image">
                </a>
              </li>
            </ul>
          </div>
        </b-col>
        <b-col md="4" class="mb-3">
          <b-col class="border-bottom text-left mb-md-5">
            <h3>Say hello</h3>
          </b-col>
            <b-form @submit.prevent="sendMsg">
              <b-form-group>
                <b-form-input
                  id="name"
                  v-model="fields.userName"
                  required
                  placeholder="Your name"
                />
              </b-form-group>
              <b-form-group>
                <b-form-input
                  id="email"
                  v-model="fields.userEmail"
                  type="email"
                  required
                  placeholder="Your email"
                />
              </b-form-group>
              <b-form-group>
                <b-form-textarea
                  id="textarea"
                  v-model="fields.userMsg"
                  required
                  placeholder="Your message..."
                  rows="5"
                />
              </b-form-group>
            <b-button class="float-right btn btn-primary" type="submit">
              <b-spinner v-if="isLoading" small type="grow"></b-spinner> Submit
            </b-button>
          </b-form>
        </b-col>
        <b-col md="4" class="text-left mb-3">
          <b-col class="border-bottom text-left mb-md-5">
            <h3>Our contacts</h3>
          </b-col>
          <b-icon-phone font-scale="2"></b-icon-phone>
          <span>(+998) 97 770 44 66</span>
          <p>E-mail: <a href="mailto:info@textile-export.uz">info@textile-export.uz</a></p>
          <p>Address: Uzbekistan, Tashkent region, Yukarichirchik district, Arganchi Guliston MFY, small industrial zone</p>
        </b-col>
      </b-row>
		</b-container>
		<b-container>
      <b-row>
        <b-col>
          © 2020 Textile Export. All Rights Reserved
        </b-col>
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
      fields: {},
      isLoading: false,
    }
  },
  methods: {
    sendMsg() {
      this.isLoading = true
      axios.post("/contact", this.fields)
        .then(response => {
          if(response.data == "OK") {
            this.isLoading = false
            this.fields = {}
            this.makeToast()
          }
        })
        .catch(err => {
          this.isLoading = false
          alert('Error with sending message, please try later!')
        })
    },
    makeToast() {
      this.$bvToast.toast('We\'ll contact you soon!', {
        title: 'Message sent successfully!',
        variant: 'success',
        solid: true,
        toaster: 'b-toaster-top-center'
      })
    }
  },
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
