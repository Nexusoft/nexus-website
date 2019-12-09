<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg guides_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>Guides</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- bannerSection ends -->

<!-- nexus layout start -->
  <!-- middle layput start -->
    <section>
      <div class="nex-introSection">
        <div class="container">
          <div class="row">
              <div class="col-lg-auto">
                <aside>
                  <div class="leftSideBar customNavBar">
                    <span class="closefilter"><img src="images/close-button.svg"></span>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active overview" id=“asset-tab" data-toggle="tab" href="#intro" role="tab" aria-controls="intro" aria-selected="true">Introduction</a>
                      </li>
                     </ul>
                  </div>
                </aside>
              </div>
              <div class="col-lg">
                <div class="listCol">
                  <h4>Menu<span><img src="images/list.svg" alt="..."></span></h4>
                </div>
                <div class="contentWrapper tab-content" id="myTabContent">
                  <div class="intro-Wrapper customTab tab-pane fade show active" id="intro" role="tabpanel" aria-labelledby="intro-tab">
                    <div class="titleCol">
                        <h3>Introduction</h3>
                    </div>
		  </div>
		</div>
	      </div>
	   </div>
	</div>
     </div>
    </section>
    <!-- middle layput close -->

    <?php
    require_once("./footer.php");
    ?>
