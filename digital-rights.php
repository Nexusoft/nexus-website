<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg drights_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>Digital Rights Management</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
  <!-- bannerSection ends -->

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
                        <a class="nav-link active overview" id="over-tab" data-toggle="tab" href="#over" role="tab" aria-controls="over" aria-selected="true">Digital Rights management</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub1-tab" data-toggle="tab" href="#sub1" role="tab" aria-controls="sub1" aria-selected="false">Asset API</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub2-tab" data-toggle="tab" href="#sub2" role="tab" aria-controls="sub2" aria-selected="false">Royalties</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub3-tab" data-toggle="tab" href="#sub3" role="tab" aria-controls="sub3" aria-selected="false">Digital Watermarking</a>
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
                  <div class="intro-Wrapper customTab tab-pane fade show active" id="over" role="tabpanel" aria-labelledby="over-tab">
                    <div class="headingCol">
                      <p>The Nexus API supports the development of DApps for the licensing and watermarking of any digital asset registered on Nexus. These assets can be tokenized to represent partial ownership, enabling the automatic payment of royalties to token holders.</p>
                      <p>This provides technology for Digital Rights Management, creating true peer-to-peer exchange to replace traditional distribution channels. Peer-to peer exchange provides consumers with greater levels of transparency, creators a greater say as to how their work is used, and the opportunity for them to be more fairly rewarded. Digital assets include, but are not limited to:</p>
                      <ul>
                        <li>Music , Audio Books, E-books</li>
                        <li>Graphics & Photography</li>
                        <li>Film, TV Shows</li>
                        <li>Games, Software and Apps</li>
                      </ul><br>
                      <p>When a digital asset is recorded on Nexus it is witnessed by a distributed consensus on the blockchain, making the proving of asset ownership easy, and introducing the added functionality of digital licensing. Licenses are an agreement between a digital asset owner (licensor) and a purchaser (licensee).</p>
                      <p>To see widespread use for blockchain enabled digital licensing, these assets and their ownership will require legal or common law recognition. Fortunately, the future looks promising, given that in some US states such as Arizona [<a href="https://www.coindesk.com/arizonas-governor-signs-latest-blockchain-bill-into-law" target="_blank">Coindesk</a>], a digital signature on the blockchain is already legally recognized.</p>
                      <p>We see the future of digital licensing containing apps that allow anyone to look up a digital asset (using technology like Google’s advanced image search), or an audio file (using technology such as Shazam), to find the available licensing, and with ‘a click of a button’ the license paid and royalties distributed to all of the owners of the asset. This will improve not only the mechanism for these licenses to be paid, but also the accessibility and transparency for the everyday user.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub1" role="tabpanel" aria-labelledby="sub1-tab">
                    <div class="titleCol headingCol">
                      <h3>Asset API</h3>
                      <p>Registers are used to record digital assets, which are recorded to the blockchain with the use of the Asset API. Assets can then be transferred between blockchain accounts by a technology called Signature Chains.</p>
                      <h5>Photographic Asset</h5>
                      <p>
                        <b>Image ID:</b> 108629084398374<br>
                        <b>License Type:</b> Enhanced<br>
                        <b>Image title:</b> Arizona Sunset<br>
                      </p>
                      <p>The above example displays a meta-data format for a photographic asset that is stored in a programmable object register. This format can be augmented with mutable and immutable type specifiers, meaning that a field such as ‘Image Title’ in the example above, could be mutable and able to be modified, while the other fields would remain immutable.</p>
                      <p class="textCenter"><a class="btn btn-primary" href="./software-stack">Software Stack</a></p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub2" role="tabpanel" aria-labelledby="sub2-tab">
                    <div class="titleCol headingCol">
                      <h3>Royalties</h3>
                      <p>Until now, tokens have mostly been used to raise capital in the form of Initial Coin Offerings (ICOs). Conversely, Nexus Tokens can either represent a store of value such as NXS, or represent partial ownership in order to facilitate the payment of shared revenues for any asset.</p>
                      <p>In the case of the creative industry, this tokenization model enables the automatic distribution of royalties to multiple owners of a digital asset. Examples of token holders could be: musicians, models, actors, editors, producers, directors, scriptwriters, songwriters, writers, graphics artists, seed investors, or anyone who had a share in the creation of the digital asset.</p>
                      <p>This will improve the process of distributing revenues to the relevant token holders, in a direct peer-to-peer manner, enforced by mathematics. This is in direct contrast to centralized intermediaries, whom often add both costs and time to facilitate transactions.</p>
                      <!-- <p class="textCenter"><a class="btn btn-primary" href="./token">Tokenization</a></p> -->
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub3" role="tabpanel" aria-labelledby="sub3-tab">
                    <div class="titleCol headingCol">
                      <h3>Digital Watermarking</h3>
                      <p>With traditional methods of copyrighting, once a digital asset has been licensed, it is difficult to track infringement or misuse. Post-purchase, any digital asset (audio, film, text, software) can contain an embedded watermark pertaining to a digital license. Watermarks can then be linked to a contract on the Nexus Blockchain, providing a way for purchasers to prove that the use of a digital asset is within the terms of their license agreement. With the use of a digital watermark reader, this technology can provide evidence of license violation.</p>
                      <p>Though watermarked digital content is not a new innovation, linking watermarks to licenses recorded on a blockchain is. This is a major step towards improving the overall security of watermarked content. In order for this technology to be of benefit to independent content creators, and responsible consumers (those who wish to self-regulate, and ultimately rely less on third parties), compatible media players, photo viewers and websites will need to be capable of verifying these watermarks.</p>
                      <p>In the case of applications that do not support watermark verification, the watermark does not interfere with the quality of the original digital media, maintaining backwards compatibility with all existing media applications. Likewise, a reduction in quality or security will not be experienced by watermark enabled media players. If you would like to view a demonstration application for watermarks, you can find it here on our source code repository:</p>
                      <p class="textCenter"><a class="btn btn-primary" href="https://github.com/Nexusoft/LLL-TAO/tree/merging/apps/watermark">Github-Watermarks</a></p>
                    </div>
                  </div>
                </div>
                <div class="textRight directContainer">
                  <a class="prev directBtn" href="javascript:;">Prev Topic</a>&nbsp;|&nbsp;<a class="next directBtn" href="javascript:;">Next Topic</a>
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
