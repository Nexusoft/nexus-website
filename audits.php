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

              <h2>Audits</h2>

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

            </div>

          </div>

        </div>

  <!-- middle layput start -->

  <section>

    <div class="colSpace" style="margin-top:25px">

      <div class="container">

        <div class="row">

          <div class="col-md-3">
          </div>

          <div class="col-md-6 col-lg-6 mb-4">

            <div class="page-curl shadow-bottom mb-4  shadow-left headingCol">

              <h4 class="mb-2">ISE Assessment</h4>

              <p class="innerText mb-4"><small><b>October 31, 2019</b></small></p>

              <!-- <span>Stake</span> -->

              <p class="textJustify">

Nexus engaged Independent Security Evaluators (ISE) to evaluate the security posture of the Nexus daemon and Nexus
Interface, two key components in the Nexus platform. ISE performed a white box vulnerability assessment to discover
vulnerabilities within the Nexus daemon and Interface that could lead to the compromise of cryptocurrency assets or
user information, disruption of service, or leveraging Nexus’s functionality for other attacks. This report represents the
results of that assessment.

              </p>

              <div class="getBtn">

                <a href="./files/tritium/NexusAuditReport.pdf" target="_blank" class="btn btn-primary">Read</a>

              </div>

            </div>

          </div>

          <div class="col-md-3">
          </div>

        </div>

      </div>

    </div>

  </section>

    <!-- middle layput close -->



    <?php

    require_once("./footer.php");

    ?>

