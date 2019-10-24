<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg apps_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>Decentralized Applications</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- bannerSection ends -->

  <!-- middle layput start -->
  <section>
    <div class="colSpace">
      <div class="container">
        <div class="customInner" style="max-width:800px;margin:auto;">
          <div class="headingCol customSpace">
	    <p class="customTest textCenter"><h3>"The blockchain is a verification system, not a computation engine"</h3></p>
            <p class="customText textJustify">The design of Nexus is based on business discussions with Fortune 10 to Fortune 500 companies over the last two years. Through our research we’ve found that most projects built on Ethereum do not use the Ethereum Virtual Machine (EVM) for its turing completeness, i.e. its ability to do universal computation. What businesses require from blockchain technology are contracts that function more like real world actions between people, with the addition of an immutable data layer capable of managing rights and ownership.</p>
            <p class="customText textJustify">Therefore, we have developed an easily accessible and versatile contract engine where data can be operated on, its ownership transferred between users, and whereby conditions can define the behavior of actions. Our design not only provides numerous ready-made contract functionalities through elegant design, it is also able to scale effectively.</p>            
            <p class="customText textJustify">A basic Nexus contract is comprised of three layers: data (<a href=software-stack?s=sub5>Registers</a>), programmable actions, (<a href=software-stack?s=sub4>Operations</a>), and accounts (<a href=signature-chains>Signature Chains</a>). Together, the layers verify the information of a system or Decentralized Application (DApp), following logic that closely relates to agreements and contracts between people. We have followed this approach for the primary reason that we believe the potential of smart contracts cannot be realized with existing language design options, but rather requires a new architecture. This is in direct contrast to Solidity which closely resembles Javascript, or Web Assembly (WASM), both of which were designed for web development rather than designing secure financial contracts.</p>
            <p class="customText textJustify">Our Application Programming Interface (API) provides direct access for DApp developers to build with our Contracts, enabling them to use features such as Tokens and Assets for the recording of immutable information on the blockchain. To add flexibility, a DApp developer can make non-standard API calls with custom conditions to provide additional functionality to the DApp that is unavailable through the standard API. This can be further augmented with Domain-Specific Languages on the lower API layer.</p>
          </div>
          <div class="btnRow" style="margin: 65px 0 80px">
            <a href="./software-stack" class="btn btn-primary">Software Stack</a>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- middle layput close -->

    <?php
    require_once("./footer.php");
    ?>
