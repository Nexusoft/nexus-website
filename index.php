<?php
require_once("./header.php");
?>
<style>
/* .btn-aqua-transparent {
  background: url(./images/button.png);
  background-size:cover;
  border: none!important;
  color: white!important;
}

.btn-aqua-transparent:hover {
  border: none!important;
  opacity:0.9;
  color: aqua!important;
} */

.btn-aqua-transparent {
  background: rgba(0, 250, 255, 0.3);
  border: 1px solid #eee!important;
  color: white!important;
}

.order-md-last {
  perspective: 1000px;
}
.windowImg {
  transform-style: preserve-3d;
}
.windowImg img {
  transition: transform 1s;
  transform: rotateY(0deg) translateY(10px);
}
.skewed .windowImg img{
  transform: rotateY(-35deg) translateY(10px);
}
.windowImg img:hover{
  transform: rotateY(0deg) translateY(10px);
}

.verticalMiddle {
  display:flex;
  align-items:center;
}

.icon-itemss li a img { transition: all .2s ease-in-out; }
.icon-itemss li a img:hover { transform: scale(1.1); }
</style>
  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection homepage">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerContent">
              <h1>Universal Blockchain</h1>
              <p>Developing open-source technology to support decentralization, innovative applications and responsible values, to build a world where there is greater trust and connection between one another.</p>
              <div class="bannerbtns">
                <a href="./whitepapers" class="btn btn-aqua-transparent">white papers</a>
                <a href="./what-nexus" class="btn btn-aqua-transparent">new to nexus?</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- bannerSection ends -->

  <!-- NexusIntro section starts -->
  <section>
    <div class="nexusSection colSpace">
      <div class="container">
        <div class="row justify-content-center verticalMiddle">
          <div class="col-md-6 text-center">
            <div class="content-area whiteBg">
              <div class="titleCol">
                <h3 >What is Tritium?</h3>
              </div>
              <p class="textJustify">The Tritium upgrade transforms the Nexus blockchain into a seven-layered software stack with a revolutionary register-based contract engine, that processes 2k to 25k contracts per second. Tritium is designed to be scalable, decentralized, and easy-to-use.</p>
            </div>
            <div class="btnRow">
              <a href="./what-tritium" class="btn btn-primary">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="chainImg text-center">
              <img src="images/d-apps.svg" width="140" alt="chain" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- NexusIntro section ends-->
 <!-- nexusCryptocurrency section starts -->
 <section>
  <div class="currencyCol colSpace_bg bg-gray ">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
        </div>
        <div class="col-md-6 text-center">
          <div class="content-area whiteBg">
            <div class="titleCol">
              <h3>Cryptocurrency</h3>
            </div>
          <p class="textJustify">
          Cryptocurrency is an important facet to Nexus, which is why we have our own native currency called ‘NXS’. This currency is the backbone of our ecosystem as it rewards miners to build blocks, and provides a reward rate to stakers of between 0.5% to 3.0 per annum for securing the network.
         </p>
          </div>
          <div class="icon-itemss">
            <ul>
              <li>
                <div class="whiteBox">
                  <a href="./quantum-resistance">
                    <span class="icon">
                      <img src="images/shield-2.svg" alt="shield-2" />
                    </span>
                    <span class="text">Security</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="whiteBox">
                  <a href="./stake">
                    <span class="icon">
                      <img src="images/bitcoin-2.svg" alt="bitcoin-2"/>
                    </span>
                    <span class="text">&nbsp;Stake&nbsp;</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="whiteBox">
                  <a href="./mine">
                    <span class="icon">
                      <img src="images/mining.svg" alt="transaction-fee" />
                    </span>
                    <span class="text">&nbsp;Mine&nbsp;</span>
                  </a>
                </div>
              </li>
              <li>
                <div class="whiteBox">
                  <a href="./economics">
                    <span class="icon">
                      <img src="images/economics.svg" alt="staking" />
                    </span>
                    <span class="text">Economics</span>
                  </a>
                </div>
              </li>
            </ul>
          </div>
          <div class="btnRow">
            <a href="./cryptocurrency" class="btn btn-primary">Read More</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>
<!-- nexusCryptocurrency section ends -->

  <!-- nexusWallet section starts -->
  <section>
    <div class="walletSection colSpace">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6  order-md-last wow" data-wow-delay="0.2s">
            <div class="windowImg text-center">
              <img src="images/wallet-img.jpg" alt="wallet" />
            </div>
          </div>
          <div class="col-md-6 text-center">
            <div class="content-area whiteBg">
              <div class="titleCol">
                <h3>Nexus Wallet</h3>
              </div>
              <p class="textJustify">The Nexus Wallet is a secure desktop application that you can login to from any computer without having to store your private keys.  The Wallet allows you to send and receive NXS, view transaction history, and stake. It  also features a platform to install and create modules for DApps, and an interface that can be customized with your own skins.</p>
            </div>
            <div class="btnRow">
              <a href="./wallet" class="btn btn-primary">Read More</a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- nexusWallet section starts -->

  <!-- identitySection starts -->
  <section>
    <div class="identitySection colSpace_bg">
      <div class="container">
        <div class="row justify-content-md-end">
          <div class="col-lg-6">
            <div class="content-area coloredBg">
              <div class="titleCol">
                <h3>Login to your Digital Identity</h3>
              </div>
              <div class="des">
                <p class="textJustify">
                DApps built on Nexus will be accessible through a technology we designed called Signature Chains, a decentralized blockchain account that allows you to login to Nexus DApps  from any computer with a username, password, and pin. A sigchain is a personal blockchain account that provides the foundation to  build a digital identity and to manage assets.
                </p>
              </div>
            </div>
            <div class="btnRow">
              <a href="./digital-identity" class="btn btn-white">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- identitySection starts -->

  <!-- chain layout start -->
  <section>
    <div class="chainsection colSpace">
      <div class="container">
        <div class="row justify-content-center verticalMiddle">
          <div class="col-md-6 text-center">
            <div class="content-area whiteBg">
              <div class="titleCol">
                <h3>Quantum Resistance</h3>
              </div>
              <p class="textJustify">Nexus has integrated a number of cryptographic innovations that support increased levels of quantum resistance: Nexus Signature Chains, FALCON, Argon2 and Keccak.</p>
            </div>
            <div class="btnRow">
              <a href="./quantum-resistance" class="btn btn-primary">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="chainImg text-center">
              <img src="images/qr.svg" width="130" alt="chain" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- chain layout close -->

  <!-- management layout start -->
  <section>
    <div class="colSpace_bg manageSection">
      <div class="container">
        <div class="row justify-content-md-end verticalMiddle">
          <div class="col-lg-6">
            <div class="content-area">
              <div class="titleCol">
                <h3>Three-Dimensional Chain</h3>
              </div>
              <div class="des">
                <p class="textJustify">The Three-Dimensional Chain (3DC) transforms the ledger into a multi-layered processing system, in order to scale securely and maintain a high degree of decentralization. It is a promising candidate for solving the Blockchain Trilemma.</p>
              </div>
            </div>
            <div class="icon-itemss">
              <ul>
                <li>
                  <a href="./3dc?s=scalability">
                    <div class="whiteBox">
                      <span class="icon">
                        <img src="images/scalabilty.svg" alt="scalabilty" />
                      </span>
                      <span class="text">Scalability</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./3dc?s=security">
                    <div class="whiteBox">
                      <span class="icon">
                        <img src="images/security.svg" alt="security" />
                      </span>
                      <span class="text">Security</span>
                    </div>
                  </a>
                </li>
                <li>
                  <a href="./3dc?s=decentralization">
                    <div class="whiteBox">
                      <span class="icon">
                        <img src="images/decentalization.svg" alt="decentalization" />
                      </span>
                      <span class="text">Decentralization </span>
                    </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="btnRow">
              <a href="./3dc" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- management layout close -->

  <!-- roadmap layout start
  <section>
    <div class="colSpace">
      <div class="container">
        <div class="serviceBlock">
          <div class="form-row">
            <div class="col-md-4 ">
              <div class="wrapperContent wow fadeInUp" data-wow-delay="0.0s">
                <div class="imgBlock">
                  <img src="images/enterprise.png" alt="enterprise" />
                </div>
                <div class="entryContent whiteBg">
                  <p>Hybrid Networks improve organizational efficiency, providing a wide range of practical applications. Read more about our technology here.</p>
                  <a href="https://nexusearth.com/hybrid-blockchain/" class="btn btn-primary">Enterprise</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="wrapperContent wow fadeInUp" data-wow-delay="0.2s">
                <div class="imgBlock">
                  <img src="images/developer.jpg" alt="developer" />
                </div>
                <div class="entryContent whiteBg">
                  <p>Our roadmap shows the progress made in each of the core features of the TAO Framework which includes the deployment of the Three-Dimensional Chain (3DC) architecture.</p>
                  <a href="./roadmap" class="btn btn-primary">Roadmap</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="wrapperContent wow fadeInUp" data-wow-delay="0.4s">
                <div class="imgBlock">
                  <img src="images/news.png" alt="news" />
                </div>
                <div class="entryContent whiteBg">
                  <p>Read our latest newsletter and articles here.</p>
                  <a href="https://nexusearth.com/nexus_news/" class="btn btn-primary">News</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  roadmap layout close -->
<?php
require_once("./footer.php");
?>
