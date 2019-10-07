<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg blockbg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>Three-Dimensional Chain</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- bannerSection ends -->

  <!-- Three dimension section starts-->
  <section>
    <div class="threeDimension nex-introSection">
      <div class="container">
        <div class="row">
            <div class="col-lg-auto">
                <aside>
                  <div class="leftSideBar customNavBar">
                    <span class="closefilter"><img src="images/close-button.svg"></span>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="over-tab" data-toggle="tab" href="#over" role="tab" aria-controls="over" aria-selected="true">Overview</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="scalability-tab" data-toggle="tab" href="#scalability" role="tab" aria-controls="scalability" aria-selected="false">Scalability</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub1-tab" data-toggle="tab" href="#sub1" role="tab" aria-controls="sub1" aria-selected="false">Signature Chains</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub2-tab" data-toggle="tab" href="#sub2" role="tab" aria-controls="sub2" aria-selected="false">Aggregation</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub3-tab" data-toggle="tab" href="#sub3" role="tab" aria-controls="sub3" aria-selected="false">Computational Sharding</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub4-tab" data-toggle="tab" href="#sub4" role="tab" aria-controls="sub4" aria-selected="false">Data Sharding</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub5-tab" data-toggle="tab" href="#sub5" role="tab" aria-controls="sub5" aria-selected="false">Multicast</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub6-tab" data-toggle="tab" href="#sub6" role="tab" aria-controls="sub6" aria-selected="false">Lower Level Library (LLL)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security" aria-selected="false">Security</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub7-tab" data-toggle="tab" href="#sub7" role="tab" aria-controls="sub7" aria-selected="false">Trust and Weight</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub8-tab" data-toggle="tab" href="#sub8" role="tab" aria-controls="sub8" aria-selected="false">pBFT + Reputation Channels (L1)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub9-tab" data-toggle="tab" href="#sub9" role="tab" aria-controls="sub9" aria-selected="false">pBFT + PoS Trust Network (L2)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub10-tab" data-toggle="tab" href="#sub10" role="tab" aria-controls="sub10" aria-selected="false">Decentralized Mining Pool (L3)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub11-tab" data-toggle="tab" href="#sub11" role="tab" aria-controls="sub11" aria-selected="false">Checking and Balancing</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="decentralization-tab" data-toggle="tab" href="#decentralization" role="tab" aria-controls="decentralization" aria-selected="false">Decentralization</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub12-tab" data-toggle="tab" href="#sub12" role="tab" aria-controls="sub12" aria-selected="false">L1 Reputation Channels</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub13-tab" data-toggle="tab" href="#sub13" role="tab" aria-controls="sub13" aria-selected="false">Decentralized Staking Pool (L2)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub14-tab" data-toggle="tab" href="#sub14" role="tab" aria-controls="sub14" aria-selected="false">Decentralized Mining Pool (L3)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub15-tab" data-toggle="tab" href="#sub15" role="tab" aria-controls="sub15" aria-selected="false">Peer Discovery</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub16-tab" data-toggle="tab" href="#sub16" role="tab" aria-controls="sub16" aria-selected="false">Reputation Incentive Structures</a>
                      </li>
                    </ul>
                  </div>
                </aside>
            </div>
            <div class="col-lg">
                <div class="listCol">
                  <h4>List<span><img src="images/list.svg" alt="..."></span></h4>
                </div>
                <div class="contentWrapper tab-content" id="myTabContent">
                    <div class="intro-Wrapper customTab tab-pane fade show active" id="over" role="tabpanel" aria-labelledby="over-tab">
                        <div class="titleCol">
                            <h3>Overview</h3>
                        </div>
                        <p>Nexus is implementing an architecture that is a promising candidate to solving the ‘Blockchain Trilemma’, an opinion that only two of the three qualities, Security, Decentralization and Scalability, are achievable concurrently. We
                            call it the ‘Three Dimensional Chain (3DC)’ which transforms the Ledger into a multi-layered processing system, in order to scale the protocol securely with a high degree of decentralization. It chains together cryptographic
                            primitives into a three dimensional immutable object (a 3D block), and has three core dimensions: reputation channels (X), immutability or authenticity (Y), and time (Z). This architecture is being deployed through the
                            <span>
                            <a href="JavaScript:void(0)" class="bluetext">TAO framework.</a>
                            </span>
                        </p>
                        <p>Fundamental to the scaling of contract processing is the seven layered Nexus
                            <span>
                            <a href="JavaScript:void(0)" class="bluetext">Software Stack</a>
                            </span> set to be released with the Tritium upgrade,
                            which introduces the first iteration of the 3DC as the Ledger Layer.
                        </p>
                    </div>
                    <div class="customTab tab-pane fade" id="scalability" role="tabpanel" aria-labelledby="scalability-tab">
                        <div class="titleCol">
                            <h3>Scalability</h3>
                        </div>
                        <div class="des text-justify">
                            <p>The architecture of legacy blockchains is comparable to driving a car on a single lane highway –
                            as the volume of cars increases, traffic occurs. Nexus views ‘scalability’ as a requirement, not a feature.
                            Therefore, we design protocols that scale as more nodes join the network, processing unhindered
                            even with the increase of resource requirements. </p>
                            <p>
                            Using ‘Signature Chains’, ‘Aggregation’ and ‘Computational Sharding’,
                            the 3DC creates parallel lanes of transaction processing to produce the L1 layer,
                            the base layer of the 3DC. Data is then stored between many nodes using what we term ‘Data Sharding’,
                            which eliminates the need for synchronizing and storing the entire blockchain. ‘LISP’ (Location Identifier Separation Protocol)
                            and the ‘LLL’ (Lower Level Library) together form the common interface for this,
                            which results in an increase of data storage as more nodes join the network providing longer term scaling potential.
                            </p>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="sub1" role="tabpanel" aria-labelledby="sub1-tab">
                        <div class="titleCol">
                            <h3>Signature Chains</h3>
                        </div>
                        <div class="des text-justify">
                            <p>Nexus transactions no longer use the UTXO (Unspent Tx Outputs) architecture, where you have outputs from one transaction
                            being inputs to another, resulting in a large amount of expensive signature verifications for even small transactions. Though UTXO was an
                            important cornerstone of the Bitcoin architecture, it has proven to be outdated and vulnerable to many different types of attacks and scaling limitations.
                            </p>
                            <p>Why is this important to avoid? <span><a href="JavaScript:void(0)" class="bluetext">50% of Litecoin’s UTXO is unspendable</a></span></p>
                            <p>
                            As a move away from Legacy Blockchain architecture, Nexus has designed and implemented an architecture named Signature Chains,which act as personal user-level blockchains that contain all of your data as one unique chain.
                            This architecture provides higher scaling characteristics, as only one signature needs to be verified per transaction.
                            Conversely, a single UTXO transaction could contain 1000’s of inputs (and therefore require 1000’s of signature verifications),
                            in order to transact even a small amount of coins (< 0.00001). Additionally, Signature Chains don’t require wallet files, as they are accessible by login credentials (username, password and pin). This verifies authenticity
                                and identity of individuals (through reputation) on the network, without sacrificing privacy. 
                            </p>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
                        <div class="titleCol">
                            <h3>Security</h3>
                        </div>
                        <div class="des text-justify">
                            <p>Nexus employs multiple consensus systems that ‘check and balance’ one another. Diversity strengthens the gene pool of the human species, likewise it is an equally important property for the security of a decentralized system. The 3DC
                            is designed as multiple layers of transaction processing or ‘consensus’, and each of the layers aggregate data from the layer below. The nodes performing work on L2, resolve any conflicts in L1 shards, using ‘Stake’ and ‘Trust’ as the
                            ‘Weight’ to determine consensus. In the event that there is a conflict, it is resolved through the validity of data, which is defined as (Trust + Weight). The L3 layer will consolidate hashes from L2 to create the final 3D block.</p>
                            <p>Nexus considers the use of cryptography very seriously, as a flaw in these functions could render the entire network insecure. We only employ well tested and thoroughly peer reviewed cryptography to support increased levels of
                            Quantum Resistance.</p>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="decentralization" role="tabpanel" aria-labelledby="decentralization-tab">
                        <div class="titleCol">
                            <h3>Decentralization</h3>
                        </div>
                        <div class="des text-justify">
                            <p>Many protocols have moved away from PoW due its large energy requirements Its very competitive nature also leads to an increasing amount of resources in order to search for a block, as the traditional model of PoW only rewards the
                            winning miner of each block, which incentivizes miners to pool resources. </p>
                            <p>An alternative is EOS’ Delegated Proof of Stake, though it relies on only twenty-one block producers, yielding a low degree of decentralization. There are several solutions that have been proposed for the scaling of a blockchain:
                            Bitcoin’s Segregated Witness and Lightning Network, and Ethereum’s Plasma. Though promising, both essentially depend on off-chain solutions to provide scaling (a more centralized approach). They create payment channels or ‘side
                            chains’, that rely on a small group of verifiers to recommit updated balances. Younger protocols have proposed multilayered systems, though we are unaware of any designs that place as much emphasis on Decentralization as the 3DC.</p>
                            <p>The 3DC aims to improve decentralization through many methods that include; L1 Reputation Channels, Decentralized Pools on the L2 and L3 layers, Reputation Incentive Structures, and Peer Discovery.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Three dimension section starts-->
  <?php
  require_once("./footer.php");
  ?>
