<template>
  <div>
    <!-- Main Top -->
    <b-container fluid class="p-md-5 py-3" style="background: #f0f0f0;">
      <b-card no-body class="overflow-hidden bg-transparent border-0 m-md-5">
        <b-row no-gutters>
          <b-col md="4">
            <b-card-img src="/images/page1-img1.jpg" alt="Image" class="rounded-0"></b-card-img>
          </b-col>
          <b-col md="8">
            <b-card-body class="py-0">
              <b-card-title>
                <h1>We strive to meet  your everyday textile needs</h1>
              </b-card-title>
              <b-card-text>
                <h4 class="visible-first visible">Sed ut perspiciatis unde omnis iste natus</h4>
                <p>Arror sit voluptatem accusantium doloremque laudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dictasunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia. consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                <a class="btn btn-info" href="#">More</a>                
              </b-card-text>
            </b-card-body>
          </b-col>
        </b-row>
      </b-card>
    </b-container>
    <!-- Main Content Row -->
    <b-container fluid class="py-5">
      <b-card-group deck class="mb-3 mx-md-5">
        <b-card class="border-0 mx-0">
          <b-card-header class="bg-transparent px-0">
            <h2>Who We Are</h2>
          </b-card-header>
          <b-card-body class="px-0">
            <p>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS</p>
            <p>Arror sit voluptatem accusantium doloremque laudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dictasunt explicabo. Nemo enim ipsam voluptatem.</p>
            <a href="#" class="btn btn-secondary">MORE</a>
          </b-card-body>
        </b-card>
        <b-card class="border-0 mx-0">
          <b-card-header class="bg-transparent px-0">
            <h2>Markets We Serve</h2>
          </b-card-header>
          <b-card-body class="px-0">
            <p>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS</p>
            <p>Arror sit voluptatem accusantium doloremque laudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dictasunt explicabo. Nemo enim ipsam voluptatem.</p>
            <a href="#" class="btn btn-secondary">MORE</a>
          </b-card-body>
        </b-card>
      </b-card-group>
      <b-card-group deck class="mb-3 mx-md-5">
        <b-card class="border-0 mx-0">
          <b-card-header class="bg-transparent px-0">
            <h2>Featured Fabrics</h2>
          </b-card-header>
          <b-card-body class="px-0">
            <p>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS</p>
            <p>Arror sit voluptatem accusantium doloremque laudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dictasunt explicabo. Nemo enim ipsam voluptatem.</p>
            <a href="#" class="btn btn-secondary">MORE</a>
          </b-card-body>
        </b-card>
        <b-card class="border-0 mx-0">
          <b-card-header class="bg-transparent px-0">
            <h2>Meet the Team</h2>
          </b-card-header>
          <b-card-body class="px-0">
            <p>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS</p>
            <p>Arror sit voluptatem accusantium doloremque laudantium,totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dictasunt explicabo. Nemo enim ipsam voluptatem.</p>
            <a href="#" class="btn btn-secondary">MORE</a>
          </b-card-body>
        </b-card>
      </b-card-group>
    </b-container>
    <!-- Main Bottom -->
    <b-container fluid id="mainbottom-row" class="py-5 text-white">
      <b-row cols="1" align-h="center" class="my-4">
        <b-col class="text-center">
          <h1 class="text-uppercase display-4 font-weight-normal">Creating</h1>
        </b-col>
        <b-col class="text-center">
          <h1 class="text-uppercase col-12">the best textile solutions</h1>
        </b-col>
        <b-col cols="9" class="text-center">
          <p>Aenean sit amet bibendum ex. Proin mattis tortor ut scelerisque consectetur. Donec sit amet arcu metus. Nam et justo eu ex rutrum imperdiet eu sit amet dui. Morbi ac diam efficitur, condimentum dolor eu, aliquam sapien. Aliquam nisl risus, efficitur et maximus eget, vulputate a est. Quisque sapien neque, vehicula nec mattis ut, tincidunt imperdiet lorem. Sed non nisl risus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas</p>
        </b-col>
        <b-col class="text-center">
          <a href="#" class="btn btn-light font-weight-bold">MORE</a>
        </b-col>
      </b-row>
    </b-container>
    <!-- Bottom -->
    <b-container fluid id="bottom-row" class="text-white">
      <b-row align-h="around" class="p-lg-5 p-3">
        <b-col md="3" class="my-3">
          <img src="/images/icon4.png" alt="icon1" class="float-xl-right my-2">
          <h3 class="float-xl-left">AWARDS AND<br>HISTORY</h3>
        </b-col>
        <b-col md="3" class="my-3 left-border">
          <img src="/images/icon5.png" alt="icon2" class="float-xl-right my-2">
          <h3 class="float-xl-left">VISION AND<br>MISSION</h3>
        </b-col>
        <b-col md="3" class="my-3 left-border">
          <img src="/images/icon6.png" alt="icon3" class="float-xl-right my-2">
          <h3 class="float-xl-left">QUALITY<br>ASSURANCE</h3>
        </b-col>
      </b-row>
    </b-container>
    <!-- Partners row -->
    <b-container>
      <b-list-group horizontal="md" class="justify-content-between py-md-5 py-2">
        <b-list-group-item class="border-0">
          <a href="#">
            <img src="/images/arzootex.png" alt="brand" height="100" class="mw-100">
          </a>
        </b-list-group-item>
        <b-list-group-item class="border-0">
          <a href="#">
            <img src="/images/uztex.png" alt="brand" height="100" class="mw-100">
          </a>
        </b-list-group-item>
        <b-list-group-item class="border-0">
          <a href="#">
            <img src="/images/jizzakhtex.png" alt="brand" height="100" class="mw-100">
          </a>
        </b-list-group-item>
        <b-list-group-item class="border-0">
          <a href="#">
            <img src="/images/mergantex.png" alt="brand" height="100" class="mw-100">
          </a>
        </b-list-group-item>
      </b-list-group>
    </b-container>
  </div>
</template>

<script>
export default {
  name:'Home'
}
</script>

<style scoped>
#mainbottom-row {
  background: url(/images/mainbottomBg.jpg) center center no-repeat;
  background-size: cover;
  background-position: 50%;
  background-attachment: fixed;
}
#bottom-row {
  background: #252525;
}
/* Medium devices (tablets, 768px and up) */
@media (min-width: 768px) {
  .left-border {
    border-left: 1px solid #dee2e6 !important;
  }
}

</style>
