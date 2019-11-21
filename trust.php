<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg trust_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>Trust</h2>
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
                        <a class="nav-link active overview" id="over-tab" data-toggle="tab" href="#over" role="tab" aria-controls="over" aria-selected="true">Trust</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub1-tab" data-toggle="tab" href="#sub1" role="tab" aria-controls="sub1" aria-selected="false">Reputation</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub2-tab" data-toggle="tab" href="#sub2" role="tab" aria-controls="sub2" aria-selected="false">Relationships</a>
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
                      <p class="customText textJustify">A public blockchain is often described as ‘trustless’ as it does not require a ‘trusted’ third party. Ironically, trust is still a factor in trustless systems, with trust derived not from a central system but from decentralized consensus. The cost to attack a decentralized consensus mechanism is directly related to its security. To increase security, Nexus implements reputation as a cost, which is related to how much consistent time a staker contributes resources. A mechanism called ‘Trust’ records past work to create a reputation system, which adds another weighting to the security of the Nexus protocol, and is currently implemented on the Nexus Proof-of-Stake (nPoS) channel, and will be used on each of the layers of the <a href="./3dc">3DC</a>.</p>
                      <p class="customText textJustify">The key to a good reputation system lies in the effort required in gaining a reputation versus the comparative ease of losing it. By coupling an economic incentive with greater Trust, such as higher returns on verification, there is a non-trivial cost incurred by loss of reputation.</p>
                      <p class="customText textJustify">A Trust score is defined as the total time a specific user has contributed weight or realtime resources to the network. A Trust score is gradually built over time as one consistently operates a node in an honest, trustworthy, and timely manner to validate transaction data by running a Nexus Wallet on a computer with continuous internet connection (24 hours a day, 7 days a week). In some circumstances, such as when a node goes offline for a significant period of time, the node’s Trust Score will be reduced. Therefore, one has the incentive to operate a node continually and consistently providing security to the Nexus network.</p>
                      <p class="customText textJustify">Nexus currently implements a reputation or Trust-based nPOS protocol that maintains random selection inherent in pure Nakamoto consensus, but also overlays a reputation to each validating node. The reputation of a node combined with their stake produces a weight that determines their probability of finding the next block. In order to provide the proper incentives for validators to gain Trust, the rate of return ranges from 0.5% to 3.0%. Trust in our implementation is gained by consistent block production within a three day moving window. If this time is exceeded, the value of Trust decays at a rate of 3x, which means if a node misses one day of staking, it receives a penalty of three days worth of lost Trust. This mechanism forms a basic foundation for the discernment of the quality of nodes.</p>
                      <p class="customText textJustify">Trust adds a layer of protection against attacks that further increases the Nexus network’s Byzantine Fault Tolerance (BFT). Together with the other two Nexus mining channels, limitations on block frequency, ten-minute decentralized checkpoints, it is very unlikely for an attacker to perform a successful 51% attack, because it would take an enormous amount of resources and time to gain enough Trust from the network, in order to take control of all three channels. Not only does Trust increase the security of the protocol, it also increases its efficiency and therefore its potential to scale.</p>
                      <p class="customText textJustify">Trust supports the viewpoint that “not everyone has money, but everyone has time,” implying that anyone can build Trust if they have some time, as only a minimal amount of hardware and NXS is required to begin building a Trust score.</p>
                      <p class="innerText"><a href="./stake" class="btn btn-primary" style="margin: 10px;">Stake</a><a href="files/tritium/NexusStakingWithTritiumTrust.pdf" class="btn btn-primary">Tritium Trust White Paper</a></p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub1" role="tabpanel" aria-labelledby="sub1-tab">
                    <div class="titleCol">
                      <h3>Reputation</h3>
                      <p class="customText textJustify">Reputation is an important resource to take into consideration when discerning the mathematical truth of a decentralized consensus. With the knowledge we have gained through our current implementations, we plan on extending our current reputation systems into many more areas. Through our architecture named the ‘TAO’ (Tritium, Amine and Obsidian), we are deploying reputation into the primitives of the 3DC, as part of the immutability and authenticity.</p>
                      <p class="customText textJustify">Reputation in Tritium extends beyond Trust Keys, by implementing <a href="./signature-chains">Signature Chains</a>. Signature Chains are a hybrid signature scheme that use hash-linking, and asymmetric cryptography to form a primitive user-level blockchain. This chain contains all the actions of a user, without revealing their actual identity. The result is a transparent ledger of events associated with a given user’s Signature Chain, that can provide the dataset to form more complex reputation systems interpreted from this series of events. The enforcement of reputation on the Ledger Layer is through the 1:3 ratio for staking currently implemented, and the relationship system on the Network Layer.</p>
                      <p class="customText textJustify">Miners will see their reputation improve through consistent actions performed on the mining network as Amine and Obsidian approach release. This will give a similar variable reward model as nPoS, but with the requirement being mining power in order to produce consistent blocks over time. These reputation models will favor nodes with a consistent history, and will penalize nodes that hop from blockchain to blockchain in pursuit of profit. As reputation will be a factor in mining profitability, incentives will align miners to contribute more consistent power to network consensus, providing higher security. Miner reputation could provide greater resistance to 51% attacks, similar to how reputation can improve the pBFT (Practical Byzantine Fault Tolerance) model by 20% or more.</p>
                      <p class="customText textJustify">Today, there are a handful of consensus mechanisms that have been designed to create decentralized networks. Though all of these mechanisms serve to protect against Sybil attacks and double spending, many have a limited ability to capture the reputation of the nodes in the network. Most follow pBFT using stake-based weighting. Though these consensus mechanisms are BFT below 33%, this can be improved through the implementation of a reputation system that utilizes time as an equally available weight, which can extend the security of conventional consensus mechanisms.</p>
                      <p class="customText textJustify">Although decentralized consensus mechanisms are resistant to manipulation, they become vulnerable when one party begins to control at least 33% of nodes for pBFT, or 51% of network computational power for PoW (Proof-of-Work). By studying these threats, we have found that including reputation as a part of the consensus process can improve the pBFT. Further reading on this topic can be found in the link below, which proposes a reputation protocol that claims a 20% increase in fault tolerance.</p>
                    </div>
                    <div class="heading mt-4">
                      <a href="https://eprint.iacr.org/2017/671.pdf">Guru: Universal Reputation Module for Distributed Consensus Protocols</a>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub2" role="tabpanel" aria-labelledby="sub2-tab">
                    <div class="titleCol">
                      <h3>Relationships</h3>
                      <p class="customText textJustify">The current Trust system tolerates byzantine faults through the distribution of validators and implementation of relationships between nodes. With Nexus, reputation is designed as a public indicator of a node’s history whereas relationships are a private indicator of a node’s relationships with other nodes. In this respect, it is easier to prevent a byzantine fault if the probability of an assumed fault is known. In simple terms, this means that a node can more easily discern the difference between a byzantine fault and an honest node based on previously experienced faults.</p>
                      <p class="customText textJustify">We have noticed several benefits of nodes keeping a history of their subjective relationships with one another, that is a private indicator of the quality of data and communication between nodes. This is not suitable for consensus critical rules, but rather for the detection of malicious nodes in a system. The result of this, through some of our basic implementations, is an ability for the network to discourage dishonest behavior without experiencing consensus failures. This allows imperfection in detecting qualities of ‘good and bad’, while detecting potential byzantine faults in advance and the option not to propagate them. If other nodes on the network propagate dishonest blocks and built upon them, they would then be seen as a valid part of the blockchain and a false positive realized. Therefore, nodes detect dishonest blocks and are incentivised to not relay them.</p>
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
