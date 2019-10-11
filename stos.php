<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg stos_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>Securitized Token Offerings</h2>
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
                        <a class="nav-link active overview" id="over-tab" data-toggle="tab" href="#over" role="tab" aria-controls="over" aria-selected="true">STOs</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub1-tab" data-toggle="tab" href="#sub1" role="tab" aria-controls="sub1" aria-selected="false">Capital Raising</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub2-tab" data-toggle="tab" href="#sub2" role="tab" aria-controls="sub2" aria-selected="false">Crowdfunding</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub3-tab" data-toggle="tab" href="#sub3" role="tab" aria-controls="sub3" aria-selected="false">Patent Funding</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub4-tab" data-toggle="tab" href="#sub4" role="tab" aria-controls="sub4" aria-selected="false">Voting</a>
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
                    <div class="titleCol">
                      <p class="customText textJustify">Initial Coin Offerings (ICOs) are considered securities, as the value of these tokens are based on the performance of the company that they represent. However, unlike traditional public shares that provide dividends, ICOs do not offer a direct link to the revenues of a company. Conversely, Nexus Securitized Tokens can represent partial ownership of a company, and the automated payment of dividends to token holders. There are two models that can be used for paying dividends on Nexus, which are both described below:</p>
                      <ol class="customText">
                        <li>The pay out of dividends would be executed by an officer making a single manual NXS transaction to the company registration address. The funds would then be automatically distributed to the token holders. Therefore, this approach relies on the trust of the officer to accurately reflect the total dividend. However, it replaces the requirement of the company to keep a record of all the token holders. This model will most likely be used by companies hosting a Securitized Token Offering (STO) that wish to pay dividends in the near term, since it is more similar to the traditional process, with the key difference that this system functions with only a small amount manual administration.</li>
                        <li>Dividends can be paid out to token holders as revenue is generated, with a percentage of tokens reserved by the company for operating costs. This would ensure that investors receive their dividends daily, and would put a cap on the total operating expenses that the company is able to claim. We envision this method being adopted in the future, if supported by investors. This method is completely automated and trustless, being that it does not rely on any manual administration. It also has the additional benefit of ensuring transparent financing and operations of a company, to create a closer relationship between the company and its investors.</li>
                      </ol>
                      <p class="customText textJustify">We envision that STOs will create greater trust with regards to raising capital on a blockchain, by providing higher levels of accountability and transparency compared to other blockchain based funding mechanisms such as ICOs, and will provide many new methods of raising funds for various projects.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub1" role="tabpanel" aria-labelledby="sub1-tab">
                    <div class="titleCol">
                      <h3>Capital Raising</h3>
                      <p class="customText textJustify">For the purpose of capital raising, a company registration would be published as an asset on Nexus, with the relevant documents hosted off-chain, such as bylaws or a business plan. The integrity of these documents is ensured through a ‘checksum’ or ‘fingerprint’, included in the registration of the asset. The asset would then be tokenized in order to raise capital from investors, dividing the shared ownership of the company. Nexus Securitized Tokens can also be used to facilitate the distribution of dividend payments from the future revenues of the company. Unlike traditional public shares, token dividends are paid out to holders automatically by either of the aforementioned methods, requiring very little administration.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub2" role="tabpanel" aria-labelledby="sub2-tab">
                    <div class="titleCol">
                      <h3>Crowdfunding</h3>
                      <p class="customText textJustify">Similarly, other forms of fundraising can be facilitated by Royalties Tokens. For example, artists that wish to crowdfund for a music album (registered as an asset on the blockchain) can issue tokens pertaining to the ownership of the album. Tokens could then be used to give rights to future revenues of the album, ensuring that supporters are rewarded for their investment. Today, creatives raising funds usually have to deal with large businesses, often receiving a less favorable deal than they would like. We envision that this new form of crowdfunding could benefit many different people looking for funding for their projects.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub3" role="tabpanel" aria-labelledby="sub3-tab">
                    <div class="titleCol">
                      <h3>Patent Funding</h3>
                      <p class="customText textJustify">Tokenization can also be utilized for the purpose of patent funding and future dividend payouts. An inventor can register a patent on the blockchain (registered as an asset), with fields for the ‘checksums’ of documents such as detailed schematics, business plans, and manufacturing processes. A token issuance linked to this patent would then be made available for sale to investors, with each token representing rights to the revenue of the patent. Similar to company Securitized Tokens, the automatic dispersal of patent dividends is facilitated by either of the two aforementioned options for distribution. This will make the process of patent funding much easier for inventors, while investors will have transparency and assurance that their ownership is valid. Until the time that blockchain patents gain legal recognition, patent registration will still require administration from patent offices.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub4" role="tabpanel" aria-labelledby="sub4-tab">
                    <div class="titleCol">
                      <h3>Voting</h3>
                      <p class="customText textJustify">With Tritium++, tokens will be capable of being used for the purpose of voting, similarly to shares with voting power of a public company. This is important as it is becoming more evident that there are flaws within current shareholder voting structures, with new research coming to light that reveals:</p>
                      <p class="customText textJustify">“Since 2003, there have been about 75% more shareholder proposals rejected by a margin of one percent of shares outstanding than proposals that were approved by a similarly narrow margin. As a result, there is a large and discontinuous drop in the density of voting results on these proposals exactly at the majority threshold of each proposal. These anomalies in the distribution of voting results reveal that there are substantial effects of vote rigging on the success rate of shareholder proposals.” <a target="_blank" href="https://corpgov.law.harvard.edu/2017/01/04/are-shareholder-votes-rigged/">[1]</a></p>
                      <p class="customText textJustify">Though our consensus mechanism can go only so far in relieving the above symptoms and psychological tendencies inherent to some, we believe mathematics and cryptography can help improve the condition of our current voting systems.</p>
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
