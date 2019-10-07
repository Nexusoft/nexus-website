<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg dao_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>DAO Technology</h2>
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
                        <a class="nav-link active overview" id="over-tab" data-toggle="tab" href="#over" role="tab" aria-controls="over" aria-selected="true">DAO Technology</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub1-tab" data-toggle="tab" href="#sub1" role="tab" aria-controls="sub1" aria-selected="false">Proposed Architecture</a>
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
                      <p class="customText textCenter"><em>”The keys are like a castle. To encourage accountability, they have to be cryptographically enforced,<br>and we believe the best way to enforce the keys is by a public vote on their issuance.”</em></p>
                      <p class="customText">With completion of the Tritium++ upgrade, votes will be recorded on the ledger, and keys will be automatically allocated without the requirement for ‘hard coded’ updates to the protocol, i.e. the process will be fully decentralized, streamlined, and automatic. The DAO (Decentralized Autonomous Organization), will govern project funding through real time democratic voting, i.e there will be no scheduled election. You will be able to cast your vote, and weight of vote, by a % spread, at a designated time interval.</p>
                      <p class="customText">The feature will be released as a post-Tritium hard fork. This technology is necessary for a stronger community, consensus-oriented fund allocation, and improvements to the overall governance of the network. The DAO will prevent governance issues such as hard forks (such as Bitcoin vs Bitcoin Cash), and it will create a stronger ecosystem through community participation in decision-making, resulting overall in a more resilient and secure public network.</p>
                      <p class="customText">Post Tritium++, we will also provide localized governance tools for the forming of individual DAOs on the network. This can be facilitated by using Tokens that represent a share or partial ownership of the entity, and therefore voting based on the amount of tokens held, similar to how traditional public companies function.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub1" role="tabpanel" aria-labelledby="sub1-tab">
                    <div class="titleCol">
                      <h3>Capital Raising</h3>
                      <p class="customText">Our proposed DAO architecture has six core groups that determine the results of decisions to be made: L1 Validators, L2 (Trust) Validators, L3 Validators, Ambassadors, Developers, and Enterprises. Each of the individuals in these spheres embody similar expertise and interests, and so therefore together form one vote each, making a requirement of four positive votes to ratify a proposal.</p>
                      <p class="customText">Ambassadors and Developers are groups that obtain a voting weight based on the trust bestowed upon them by the prior four voting groups, meaning that they by default do not have any power over the decisions of the other voting spheres. This blends together concepts from existing governance systems, though encompasses a larger set of values to protect against the possibility of mob rule. The architecture follows the below principles:</p>
                      <ol class="customText">
                        <li>You will be able to abstain, vote, or withdraw your support for a contract (the frequency of voting is yet to be decided). Votes will be weighted by Trust and Stake. Therefore, your power to vote will be determined by your total NXS staked, combined with your Trust. This protects against gaming of the voting system by short term holders of NXS. Likewise, anyone with an adequate amount of Trust, will be able to submit a contract.</li>
                        <li>Voting will be carried out by groups, where the values of people and the resources that they contribute to the network define the group. The first two voting groups will be: Trust (L2) and Ambassador, with more groups being added over time to finally reach the goal of six.</li>
                        <li>The Trust group will decide the percentage of funds allocated to each of the contracts. Voting is zero-sum, meaning that contracts can only gain voting weight by another losing it. You will have a total voting weight, which can be allocated by percentage to the contracts you wish to support. An example would be 25% to the U.K., 25% to AUS, and 50% to the US Embassy.</li>
                        <li>Contracts will become active when they exceed a voting threshold, creating resilience to individual gaming if one voter happens to have a large voting weight.</li>
                        <li>When the round of trust voting has finished, the Ambassadors of the contracts can then vote to either endorse the support for their contract or to redistribute funds to other contracts. This will allow Ambassadors or Embassies to reallocate part of their funds to other contracts, if they choose to do so.</li>
                      </ol>
                      <p class="customText">This is an important step towards the longer term sustainability of our Ecosystem, and the creation of direct accountability of those who are paid to complete work on behalf of the community. In order to fully maintain an active contract, Ambassadors or Embassies will be required to uphold the utmost transparency, accountability, and performance necessary for continued support. Mathematically enforced management of the funds will prevent the mismanagement of funds, corruption, coercion, and complacency that can arise in growing organizations.</p>
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
