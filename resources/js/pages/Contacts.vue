<template>
  <!-- contact -->
	<!---728x90--->
  <div class="contact-data py-5"> 
    <div class="container">
      <h2>Get In Touch</h2>
      <div class="contact-form">
        <form method="post">
          <div class="row">
            <div class="col-md-6">
              <label for="userName">NAME</label>
              <input id="userName" name="userName" type="text" class="form-control">
              <label for="userEmail">E-MAIL</label>
              <input id="userEmail" name="userEmail" type="email" class="form-control">
            </div>
            <div class="col-md-6">					    	
              <label for="userMsg">SUBJECT</label>
              <textarea id="userMsg" class="form-control" name="userMsg" rows="4"></textarea>
            </div>
            <div class="col-auto ml-auto mt-3">
              <button type="submit" class="btn btn-sm btn-primary px-3">Submit</button>
            </div>
          </div>
        </form>
        <div class="clear"></div>
      </div>
      <!---728x90--->
      <div class="content_bottom row">
        <div class="col-3">
          <h2>Location</h2>
          <p>small industry zone,</p>
          <p>Arganchi Guliston MFY,</p>
          <p>Yukori-chirchik district,</p>
          <p>Tashkent region, Uzbekistan</p>
          <p>Phone:(00) 222 666 444</p>
          <p>Fax: (000) 000 00 00 0</p>
          <p>Email: <span><a href="mailto:info@textile-export.uz">info@textile-export.uz</a></span></p>
          <p>Follow on: <span><a href="#">Facebook</a></span>, <span><a href="#">Twitter</a></span></p>
        </div>
        <div class="col-9">
          <h2>Find Us Here</h2>
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d60351.66344107128!2d69.4700960634154!3d41.377963101840834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1600889154365!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
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
      // 
    }
  }
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
