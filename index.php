<?php 

include 'header.php';
?>
    <!--Slider Start-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/BANNER.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Donate For Syllet</h3>
              <p>40 Lakh People Stranded In Sylhet, Sunamganj Flood</p>
              <button type="button" class="btn btn-primary nav_btn" onclick="document.location='donate-for-syllet.php'">Donate Now</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/banner2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Do You have more than your needs?</h3>
              <p>There are a large number of people who refuse to purchase basic necessities.</p>
              <button type="button" class="btn btn-primary nav_btn" onclick="document.location='moneycheckout.php'">Donate Now</button>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/banner1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h3>Share some Happiness</h3>
              <p>Be kind whenever possible.It is always possible</p>
              <button type="button" class="btn btn-primary nav_btn" onclick="document.location='moneycheckout.php'">Donate Now</button>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!---slider Finish-->
    <!--service Section-->
    <div class="container" id="service_main">
      <div class="section_heading">
        <h2>Our Programs</h2>
      </div>

       <div class="row gx-5">
        <div class="col">
          <div class="p-3 contact_icon_cus">
            <div class="feature-content-con">
              <div class="feature-icon-con">
                <i class="fas fa-utensils"></i>
              </div>
              <div class="feature-discription-con">
                  <h3>Donate Food</h3>
                  <!-- <p>Do not waste your food.There are lot's of people who can't buy food properly.</p> -->
              </div>
              <div class="mission-button">
                <button type="button" class="btn btn-primary btn-prog" onclick="document.location='food.php'">Learn More</button>
              </div>
          </div>
          </div>
        </div>

        <div class="col">
          <div class="p-3 contact_icon_cus">
            <div class="feature-content-con">
              <div class="feature-icon-con">
                <i class="fas fa-tshirt"></i>
              </div>
              <div class="feature-discription-con">
                  <h3>Donate Cloths</h3>
                  <!-- <p>The old or new clothes sometimes we throw away can be the solution to their problem.You can also donate those clothes if you want.</p> -->
              </div>
              <div class="mission-button">
                <button type="button" class="btn btn-primary btn-prog" onclick="document.location='cloth.php'">Learn More</button>
              </div>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="p-3 contact_icon_cus">
            <div class="feature-content-con">
              <div class="feature-icon-con">
                <i class="fas fa-hand-holding-usd"></i>
              </div>
              <div class="feature-discription-con">
                  <h3>Donate Money</h3>
                  <!-- <p>Lorem ipsum dolor sapiente dolore quas ea rerum excepturi velit quibusdam pariatur.</p> -->
                </div>
                <div class="mission-button">
                  <button type="button" class="btn btn-primary btn-prog" onclick="document.location='money.php'">Learn More</button>
                </div>
          </div>
          </div>
        </div>

       </div>
    </div>
    <!---service finish-->

    <!-- Mission abd vission -->


    <div class="container" id="mission-main">
      <div class="section_heading">
        <h2>Our Misssion And Vission</h2>
      </div>
      <div class="container mission_cus">
      <div class="row gx-5">

        <div class="col mission-left ">
          <div class="mission-left-con">
              <img class="mv_im1 img-fluid img-thumbnail" src="images/cha-childrens1-1-1.jpg">
              <img class="mv_im2 img-fluid img-thumbnail" src="images/eid.jpg" style="width:270px;">
              <div class="mission_box_wrapper shadow-lg">
                <div class="row">
                  <div class="col-2 mission_box_left">
                    <i class="fa-solid fa-heart"></i>
                  </div>
                  <div class="col-10 mission_box_right">
                    <h3>Years of Experience</h3>
                    <p>Donate to the Charity</p>
                  </div>
                </div>
              </div>
          </div>
        </div>


          <div class="col mission-right ">
            <h3> Our Mission </h3>
            <p> Donation website is a cheerful system where users can help someone who need some helping hands. This system belief in reducing the poverty in our society and spread our happiness with another human.</p>

            <h3 style="margin-top:25px"> Our vission </h3>
            <p> There are many poor people around us who need help. DropTop website is formed to serve some social activity services. By these services the poverty people who need help they will be benefited. Our mission is to build and sustainable system where people can help someone or can get service from it. Initially we are providing donating cloths, food and money. We achieve this by ensuring that our field crew adheres to the highest moral standards and shares our enthusiasm for the cause.</p>
        
          <div class="mission-button">
             <a type="button" class="btn btn-primary nav_btn " href="#service_main">Donate Now</a>
          </div>
         </div>
        </div>

      </div>
    </div>
      

    <!-- Mission abd vission END -->

    <!---Volunteer Section-->
    <section class="volunteer_main">
      <div class="section_heading">
        <h2 style="color: white;">Our Respected Volunteers</h2>
      </div>
      <div class="container px-4">
        <div class="row gx-4">
          <div class="col">
           <div class="p-1 sv_shadow">
            <img class="img-fluid img-thumbnail" src="images/abir.jpg" alt="">

      <table class="table cus_table">
          <tr>
          <td><strong><i class="far fa-user"></i></strong></td>
          <td><h5> Abir Azmyne</h5></td>
          </tr>
          <tr>
          <td><strong><i class="far fa-building"></i></strong></td>
          <td>Chandrabindu</td>
          </tr>

          <tr>
          <td><strong><i class="fas fa-fire"></i></i></strong></td>
          <td>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          </td>
          </tr>
      </table>
          </div>
          </div>
  
          <div class="col">
            <div class="p-1 sv_shadow">
              <img class="img-fluid img-thumbnail" src="images/kashem.jpg" alt="">
        <table class="table cus_table">
                <tr>
            <td><strong><i class="far fa-user"></i></strong></td>
            <td><h5> Abdullah Bin Kasem</h5></td>
            </tr>
            <tr>
            <td><strong><i class="far fa-building"></i></strong></td>
            <td>CIS Drop Box</td>
            </tr>
            <tr>
          <td><strong><i class="fas fa-fire"></i></i></strong></td>
          <td>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          </td>
          </tr>
        </table>
          </div>
          </div>

          <div class="col">
            <div class="p-1 sv_shadow">
              <img class="img-fluid img-thumbnail" src="images/sejim.jpg" alt="">
              
          <table class="table cus_table">
            <tr>
            <td><strong><i class="far fa-user"></i></strong></td>
            <td><h5> Sejim Rahman</h5></td>
            </tr>
            <tr>
            <td><strong><i class="far fa-building"></i></strong></td>
            <td>Chandrabindu</td>
            </tr>
            <tr>
          <td><strong><i class="fas fa-fire"></i></i></strong></td>
          <td>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          </td>
          </tr>
        </table>
          </div>
          </div>

          <div class="col">
            <div class="p-1 sv_shadow">
              <img class="img-fluid img-thumbnail " src="images/Rahman.jpg" alt="">
          <table class="table cus_table">
            <tr>
            <td><strong><i class="far fa-user"></i></strong></td>
            <td><h5> Ashikur Rahman</h5></td>
            </tr>
            <tr>
            <td><strong><i class="far fa-building"></i></strong></td>
            <td>Rangpur Dropbox</td>
            </tr>
            <tr>
          <td><strong><i class="fas fa-fire"></i></i></strong></td>
          <td>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          </td>
          </tr>
          </table>
          </div>
          </div>
  
        </div>
      </div >
      <a href="Volunteer/index.php" class="btn btn-primary nav_btn primary_white">Volunteer Login</a>
  </div>
    </section>
  
      <!--Volunteer Section End-->

    <!-- Our Gallery start -->
    <section class="activites_main">
      <div class="section_heading">
        <h2>Recent Activities</h2>
      </div>
    <div class="container px-4">
      <div class="row gx-4">
        <div class="col">
         <div class="p-0  shadow-lg activity_box">
          <div style="padding: 15px 15px 5px 15px;">
           <img class="img-fluid img-thumbnail" src="images/chandrabindueid.jpg" alt="">
           <div class="rec_act_con">
          <h4> EID Program 2022</h4>
          <table class="table cus_table">
            <tr>
            <td><strong><i class="far fa-building"></i></strong></td>
            <td>Chandrabindu</td>
            </tr>
            <tr>
            <td><strong><i class="fas fa-map-marker-alt"></i></strong></td>
            <td>Jessore Badshafaysal School Stedium</td>
            </tr>
           </table>
          <p>About 100 families get food donation from Chandrabindu Fellowship Bangladesh. </p>
         </div>
        </div>
        </div>
        </div>
        <div class="col activity_box">
          <div class="p-0  shadow-lg activity_box">
            <div style="padding: 15px 15px 5px 15px;">
            <img class="img-fluid img-thumbnail" src="images/event-pic-2.jpg" alt="">
            <div class="rec_act_con">
           <h4>Trying to quench thirst in summer</h4>
           <table class="table cus_table">
            <tr>
            <td><strong><i class="far fa-building"></i></strong></td>
            <td>Chandrabindu</td>
            </tr>
            <tr>
            <td><strong><i class="fas fa-map-marker-alt"></i></strong></td>
            <td>Jessore,Bangladesh</td>
            </tr>
           </table>
           <p>These laboring people eke out a living with great difficulty in temperatures of around 40° Celsius and scorching heat.It is a small offering from us for them.</p>
          </div>
            </div>
         </div>
        </div>
        <div class="col activity_box">
          <div class="p-0  shadow-lg activity_box">
            <div style="padding: 15px 15px 5px 15px;">
            <img class="img-fluid img-thumbnail" src="images/event-pic-3.jpg" alt="">
            <div class="rec_act_con">
           <h4>Eid gift distribution By Ashar Duar</h4>
           <table class="table cus_table">
            <tr>
            <td><strong><i class="far fa-building"></i></strong></td>
            <td>Ashar Duar</td>
            </tr>
            <tr>
            <td><strong><i class="fas fa-map-marker-alt"></i></strong></td>
            <td>Jessore,Bangladesh</td>
            </tr>
           </table>           
           <p>A small effort to spread Eid joy among everyone. Distribution of Eid gifts to the poor people of the village by Ashar Duar.</p>
          </div>
          </div>
         </div>
        </div>
        </div>
      </div>
      <div style="margin-top:60px; text-align: center;">
        <button type="button" class="btn btn-primary nav_btn" onclick="document.location='recentactivity.php'">View More Activities</button>
      </div>
    </div>
  </section>
    <!-- Our Gallery end -->

    <!-- Upcoming Events start -->
    <section class="events_main" id="event_main">
      <div class="section_heading">
        <h2>Upcoming Events</h2>
      </div>
      <div class="container px-4">
        <div class="row gx-5">
          <div class="col">
           <div class="p-0">
             <div  class="events_wrap">
              <div class="events_image">
                <img class="img-fluid img-thumbnail" src="images/child.jpg" alt="">
              </div>
              <div class="events_info">
                <h4>Child Education</h4>
                <p style="margin-bottom:0px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                 </p>
              </div>
                  <div style="clear:both"></div>
             </div>
             <div  class="events_wrap">
              <div class="events_image">
                <img class="img-fluid img-thumbnail" src="images/flood.jpg" alt="">
              </div>
              <div class="events_info">
                <h4>Flood Donation</h4>
                <p style="margin-bottom:0px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                 </p>
              </div>
                  <div style="clear:both"></div>
             </div>
           </div>
          </div>
          <div class="col">
            <div class="p-0">
              <div  class="events_wrap">
                <div class="events_image">
                  <img class="img-fluid img-thumbnail" src="images/zakat.jpg" alt="">
                </div>
                <div class="events_info">
                  <h4>Zakat Donation</h4>
                  <p style="margin-bottom:0px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                   </p>
                </div>
                    <div style="clear:both"></div>
               </div>
               <div  class="events_wrap">
                <div class="events_image">
                  <img class="img-fluid img-thumbnail" src="images/biddha.jpg" alt="">
                </div>
                <div class="events_info">
                  <h4>Briddhashram Project</h4>
                  <p style="margin-bottom:0px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                   </p>
                </div>
                    <div style="clear:both"></div>
               </div>
            </div>
          </div>
        </div>
        <div style="margin-top:60px; text-align: center;">
          <a type="button" class="btn btn-primary nav_btn " href="#event_main">View More Events</a>
        </div>
      </div>
  </section>
    <!-- Upcoming Events end -->
    <?php 
      include 'footer.php';
    ?>
