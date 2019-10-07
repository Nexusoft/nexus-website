<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg nxscurrencyCol">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>Cryptocurrency</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- bannerSection ends -->

  <!-- NXS currencySection starts -->
  <section>
    <div class="nxsInfo">
      <div class="container">
        <div class="row spaceCol">
          <div class="col-md-12">
            <div class="headingCol">
              <h2></h2>
              <!-- <p class="textJustify">Cryptocurrency is an important faucet to Nexus which is why we have our own native currency called ‘NXS’. This currency is the backbone of our ecosystem as it pays miners to build blocks, and provides regular holders a rate of return between 0.5% and 3.0% per annum.</p> -->
              <p class="textJustify">Cryptocurrency is an important facet to Nexus, which is why we have our own native currency called ‘NXS’. This currency is the backbone of our ecosystem as it rewards miners to build blocks, and provides a reward rate to ‘stakers’ of between 0.5% to 3.0 per annum for securing the network.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <div class="nxsCont">
              <div class="nxsImg">
                <img src="images/shield-2.svg" alt="shield-2">
              </div>
              <h2>Security</h2>
              <span>Post-Quantum <br>Cryptography</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="nxsCont">
              <div class="nxsImg">
                <img src="images/speedometer-2.svg" alt="speedometer-2">
              </div>
              <h2>Speed</h2>
              <span>50 seconds</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="nxsCont">
              <div class="nxsImg">
                <img src="images/bet-2.svg" alt="bet-2">
              </div>
              <h2>Transaction Fee</h2>
              <span>0.01 NXS per Kilobyte <br>(the fee is burned)</span>
            </div>
          </div>
          <div class="col-md-3">
            <div class="nxsCont">
              <div class="nxsImg">
                <img src="images/bitcoin-2.svg" alt="bitcoin-2">
              </div>
              <h2>Stake Reward</h2>
              <span>Earn 0.5% to 3.0% annual return on NXS holdings</span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="nxsbtn">
              <p class="textJustify">The creation of NXS is very different to the issuance of tokens via Initial Coin Offerings (ICOs), which are produced at zero cost. Instead, the process of creating NXS requires mining (similar to that of Bitcoin) or staking, which gives a base value to the currency being backed by the physical resources required to create each individual coin.</p>
              <a href="./economics" class="btn btn-primary">Economics</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- NXS currencySection ends -->


  <!-- Getnxs Section starts -->
  <section>
    <div class="colSpace">
      <div class="container">
        <div class="row ">
          <div class="col-md-12">
            <div class="headingCol">
              <!-- <h2>GET NXS</h2> -->
              <p class="innerText">There are three ways to obtain NXS:</p>
            </div>
          </div>
        </div>
        <div class="row spaceCol">
          <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
            <div class="obtainCol">
              <div class="icon-row">
                <img src="images/commerce-and-shopping.svg" alt="commerce-and-shopping" />
              </div>
              <!-- <span>Purchase</span> -->
              <div class="purchasingImg">
                <img src="images/pur-img1.png" alt="pur-img1">
                <img src="images/pur-img2.png" alt="pur-img2">
                <!-- <img src="images/pur-img3.png" alt="pur-img3"> -->
              </div>
              <div class="getBtn">
                <a href="./buy-nxs" class="btn btn-primary">Purchase</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
            <div class="obtainCol">
              <div class="icon-row">
                <img src="images/growth-3.svg" alt="growth-3" />
              </div>
              <!-- <span>Stake</span> -->
              <p class="textJustify">
              Staking is an energy efficient form of mining that provides security to the Nexus Blockchain through holding NXS inside the Nexus Wallet. In return, stakers are rewarded between 0.5% and 3.0% per year on their holdings.
              </p>
              <div class="getBtn">
                <a href="./stake" class="btn btn-primary">Stake</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
            <div class="obtainCol">
              <div class="icon-row">
                <img src="images/mining.svg" alt="mining.svg" />
              </div>
              <!-- <span>Mine</span> -->
              <p class="textJustify">
                Mining is a process in which a computer program is
                run by high-performance hardware to process transactions
                and provide security to the Nexus Blockchain. In return, miners earn newly created NXS.
              </p>
              <div class="getBtn">
                <a href="./mine" class="btn btn-primary">Mine</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Getnxs Section ends -->

  <?php
  require_once("./footer.php");
  ?>
