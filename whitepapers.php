<?php
require_once("./header.php");
?>
<style>
.page-curl {
  background:white;
	-moz-box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
	-webkit-box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
	box-shadow: 0 0 2px rgba(0, 0, 0, 0.2);
	margin: 50px auto;
  padding: 25px;
  height:95%;
  text-align:center;
  position:relative;
}

.page-curl:before, .page-curl:after {
	background: none;
	bottom: 12px;
	-moz-box-shadow: 0 10px 12px rgba(0, 0, 0, 0.5);
	-webkit-box-shadow: 0 10px 12px rgba(0, 0, 0, 0.5);
	box-shadow: 0 10px 12px rgba(0, 0, 0, 0.5);
	content: "";
	height: 10px;
	left: 12px;
	position: absolute;
	width: 40%;
	z-index: -1;
	-moz-transform: skew(-4deg) rotate(-4deg);
	-webkit-transform: skew(-4deg) rotate(-4deg);
	transform: skew(-4deg) rotate(-4deg);
}

.page-curl:after {
	-moz-transform: skew(4deg) rotate(4deg);
	-webkit-transform: skew(4deg) rotate(4deg);
	transform: skew(4deg) rotate(4deg);
	left: auto;
	right: 12px;
}

.shadow-bottom:before, .shadow-bottom:after {
	top: auto;
	bottom: 12px;
	-moz-box-shadow: 0 10px 12px rgba(0, 0, 0, 0.5);
	-webkit-box-shadow: 0 10px 12px rgba(0, 0, 0, 0.5);
	box-shadow: 0 10px 12px rgba(0, 0, 0, 0.5);
}

.shadow-left:after {
	display: none;
}

.shadow-right:before {
	display: none;
}

.shadow-top-bottom.shadow-left:after {
	display: block;
	bottom: auto;
	top: 15px;
	right: auto;
	left: 12px;
	-moz-box-shadow: 0 -10px 12px rgba(0, 0, 0, 0.5);
	-webkit-box-shadow: 0 -10px 12px rgba(0, 0, 0, 0.5);
	box-shadow: 0 -10px 12px rgba(0, 0, 0, 0.5);
}

.shadow-top-bottom.shadow-right:before {
	display: block;
	bottom: auto;
	top: 15px;
	right: 12px;
	left: auto;
	-moz-box-shadow: 0 -10px 12px rgba(0, 0, 0, 0.5);
	-webkit-box-shadow: 0 -10px 12px rgba(0, 0, 0, 0.5);
	box-shadow: 0 -10px 12px rgba(0, 0, 0, 0.5);
}
</style>
  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg whitepaper_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>White Papers</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- bannerSection ends -->
  <div class="row ">
          <div class="col-md-12">
            <div class="headingCol">
              <!-- <h2 class="innerText">NEXUS WHITE PAPERS</h2> -->
              <!-- <p class="innerText">There are three ways to obtain NXS:</p> -->
            </div>
          </div>
        </div>
  <!-- middle layput start -->
  <section>
    <div class="colSpace" style="margin-top:25px">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-6 mb-4">
            <div class="page-curl shadow-bottom mb-4  shadow-left headingCol">
              <h4 class="mb-2">Tritium Trust White Paper</h4>
              <p class="innerText mb-4"><small><b>October 12, 2018</b></small></p>
              <!-- <span>Stake</span> -->
              <p class="textJustify">
              The Nexus network operates using three channels for producing valid blocks and minting new NXS currency – two Proof-of-Work channels and one Proof-of-Stake channel. Tritium Trust represents the first in a series of releases implementing the Tritium protocol on the Nexus network. Through these changes, Nexus has laid the groundwork for future releases of the TAO (Tritium, Amine and Obsidian) framework to include a Trust and Reputation system as well as Trust Locks integral to the three dimensional chain.
              </p>
              <div class="getBtn">
                <a href="./files/tritium/NexusStakingWithTritiumTrust.pdf" target="_blank" class="btn btn-primary">Read</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 mb-4">
            <div class="page-curl shadow-bottom mb-4  shadow-right headingCol">
              <h4 class="mb-2"><span>Tritium White Paper</span></h4>
              <p class="innerText mb-4"><small><b>May 29, 2018</b></small></p>
              <p class="textJustify">
              The Tritium Protocol is the first of three updates of the TAO Framework (Tritium, Amine and Obsidian). The key architecture of the Tritium upgrade is the seven Layered Software Stack that creates a register based contract engine. By creating a clear distinction between each of these functional components, each layer can be developed and improved independent of one another, processing can be shared across multiple layers, and the integration challenges can be minimized for anyone who chooses to build on this system.
              </p>
              <div class="getBtn">
                <a href="./files/tritium/Nexus-Tritium-White-Paper.pdf" target="_blank" class="btn btn-primary">Read</a>
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
