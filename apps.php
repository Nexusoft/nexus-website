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
            <p class="customText textJustify">Nexus is a seven layered architecture that powers decentralized applications or ‘Dapps’. Our API provides direct access to develop with features such as Contracts, Tokens, and Assets, without the need for specialist programming knowledge.</p>
            <p class="customText textJustify">From our research, we found an interesting common ground between most projects built on Ethereum: developers do not use the Ethereum Virtual Machine (EVM) for its turing completeness, they abstract away from it, relying only on the EVM for storing data, proving ownership, and to manage accounts or tokens. These types of virtual machines are comparable to placing everything in one space, with the intention of programming all interactions as one would program a universal computer. Though this design is important for modern day computers, systems such as blockchains benefit more from simplicity and elegance in order to scale effectively. </p>            
            <p class="customText textJustify">Nexus Contracts are the culmination of this research, designed to feel like ‘actual’ real world contracts between people. A basic contract is composed of objects (Registers), users (Sigchains), and actions (Operations). These actions are filtered through the use of ‘programmable conditions’ that define a more complex contract between two or more users. All the layers together form the foundation of the Dapp following the philosophy: “A blockchain is a verification system, not a computation engine.”</p>
            <p class="customText textJustify">Developers can build Dapps simply in any language using our API, avoiding unnecessary mistakes being made. If a Dapp developer wishes, they can make non-standard API calls with custom conditions to provide additional functionality to the Dapp that is unavailable through the standard API. This can be further augmented with Domain Specific Languages on the lower API layer.</p>
            <p class="customText textJustify">Applications on Nexus will be easily accessible through the technology we built called <a href="./signature-chains" target="_blank">Signature Chains</a>, a decentralized blockchain login system that is authorized by a username, password, and pin. We believe this is an important step to a wider adoption of the technology.</p>
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
