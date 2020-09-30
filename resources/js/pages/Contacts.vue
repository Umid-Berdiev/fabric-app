<template>
  <!-- contact -->
	<!---728x90--->
  <div class="contact-data py-5"> 
    <div class="container">
      <h2>Get In Touch</h2>
      <div class="contact-form">
        <form @submit.prevent="sendMsg">
          <div class="row">
            <div class="col-md-6">
              <label for="userName">YOUR NAME</label>
              <input required id="userName" name="userName" v-model="fields.userName" type="text" class="form-control">
              <label for="userEmail">YOUR E-MAIL</label>
              <input required id="userEmail" name="userEmail" v-model="fields.userEmail" type="email" class="form-control">
            </div>
            <div class="col-md-6">					    	
              <label for="userMsg">YOUR MESSAGE</label>
              <textarea required id="userMsg" class="form-control" name="userMsg" v-model="fields.userMsg" rows="4"></textarea>
            </div>
            <div class="col-auto ml-auto mt-3">
              <button type="submit" class="btn btn-sm btn-primary px-3">
                <b-spinner v-if="isLoading" small type="grow"></b-spinner> Submit
              </button>
            </div>
          </div>
        </form>
      </div>
      <!---728x90--->
      <div class="content_bottom row">
        <div class="col-3">
          <h2>Location</h2>
          <p>small industry zone,</p>
          <p>Arganchi Guliston MFY,</p>
          <p>Yukarichirchik district,</p>
          <p>Tashkent region, Uzbekistan</p>
          <p>Phone:(+998) 97 770 44 66</p>
          <!-- <p>Fax: (000) 000 00 00 0</p> -->
          <p>Email: <span><a href="mailto:info@textile-export.uz">info@textile-export.uz</a></span></p>
          <p>Follow on: <span><a href="#">Facebook</a></span>, <span><a href="#">Twitter</a></span></p>
        </div>
        <div class="col-9">
          <h2>Find Us Here</h2>
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57081.40899946041!2d69.44794671747769!3d41.24416754398909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae5760ec0254a1%3A0x9358ba99d9bfc1ee!2sKolkhoz%20Pravda%2C%20Uzbekistan!5e0!3m2!1sen!2s!4v1601298427964!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </div>		
  <!-- contact -->
</template>

<script>
export default {
  name:'Contacts',
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
.contact-form input[type="text"], .contact-form input[type="email"], .contact-form textarea {
  border:1px solid #007bff;
  outline:none;
  color:#C5C5C5;
}
.map iframe {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	width: 100%;
	height:210px;
	border: none;
	line-height: 0;
	overflow: hidden;
}
.contact-data h2 {
	color: #007bff;
	font-size: 20px;
	text-transform: uppercase;
	padding: 15px 0;
	font-weight: 600;
	border-bottom: 1px solid rgba(245, 238, 243, 0.15);
	margin-bottom: 10px;
}
</style>
