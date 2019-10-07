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
                        <a class="nav-link active overview" id="over-tab" data-toggle="tab" href="#over" role="tab" aria-controls="over" aria-selected="true">Three-Dimensional Chain</a>
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
                  <h4>Menu<span><img src="images/list.svg" alt="..."></span></h4>
                </div>
                <div class="contentWrapper tab-content" id="myTabContent">
                    <div class="intro-Wrapper customTab tab-pane fade<?php echo isset($_REQUEST['s'])?'':' active show';?>" id="over" role="tabpanel" aria-labelledby="over-tab">
                        <p>Nexus is implementing an architecture that is a promising candidate to solving the ‘Blockchain Trilemma’, an opinion that only two of the three qualities, Security, Decentralization and Scalability, are achievable concurrently. We
                            call it the ‘Three Dimensional Chain (3DC)’ which transforms the Ledger into a multi-layered processing system, in order to scale the protocol securely with a high degree of decentralization. It chains together cryptographic
                            primitives into a three dimensional immutable object (a 3D block), and has three core dimensions: reputation channels (X), immutability or authenticity (Y), and time (Z). This architecture is being deployed through the
                            <span>
                            <a href="./roadmap" class="bluetext">TAO framework.</a>
                            </span>
                        </p>
                        <p>Fundamental to the scaling of contract processing is the seven layered Nexus
                            <span>
                            <a href="./software-stack" class="bluetext">Software Stack</a>
                            </span> set to be released with the Tritium upgrade,
                            which introduces the first iteration of the 3DC as the Ledger Layer.
                        </p>
                    </div>
                    <div class="customTab tab-pane fade<?php echo $_REQUEST['s']=='scalability'?' active show':'';?>" id="scalability" role="tabpanel" aria-labelledby="scalability-tab">
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
                            <p>Why is this important to avoid? <span><a href="https://www.reddit.com/r/litecoin/comments/9ncqse/what_should_we_do_about_the_50_of_litecoins_utxo/" class="bluetext">50% of Litecoin’s UTXO is unspendable</a></span></p>
                            <p>
                            As a move away from Legacy Blockchain architecture, Nexus has designed and implemented an architecture named Signature Chains,which act as personal user-level blockchains that contain all of your data as one unique chain.
                            This architecture provides higher scaling characteristics, as only one signature needs to be verified per transaction.
                            Conversely, a single UTXO transaction could contain 1000’s of inputs (and therefore require 1000’s of signature verifications),
                            in order to transact even a small amount of coins (< 0.00001). Additionally, Signature Chains don’t require wallet files, as they are accessible by login credentials (username, password and pin). This verifies authenticity
                                and identity of individuals (through reputation) on the network, without sacrificing privacy. 
                            </p>
                            <p class="innerText"><span><a href="./signature-chains" class="btn btn-primary">Signature Chains</a></span></p>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="sub2" role="tabpanel" aria-labelledby="sub2-tab">
                        <div class="titleCol">
                            <h3>Aggregation</h3>
                        </div>
                        <div class="des text-justify">
                            <p>Transactions in legacy blockchains are not only referenced in a block, they are also transported with it.
                                Though this does contain some positive characteristics for processing, it limits scale as transactions require transport twice, once when created, and again when the block itself is broadcast.
                                In order to combat this inefficiency, the Tritium protocol stores the transaction object separately from the block object, and references its txid inside the block. This is the first form of ‘Aggregation’,that means
                                that a single reference can represent the entire transaction,which reduces the data that is transported in blocks.
                                This results in better levels of scaling, and improved security by lowering the probability of successful Finney attacks on the network.</p>
                            <p class="textCenter">What’s a Finney Attack? <span><a href="JavaScript:void(0)" class="bluetext">Hal Finney Discovered it in 2011</a></span></p>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="sub3" role="tabpanel" aria-labelledby="sub3-tab">
                        <div class="titleCol">
                            <h3>Computational Sharding</h3>
                        </div>
                        <div class="des text-justify">
                            <p>
                                Computational Sharding is necessary for the division of work between specific types of nodes, to create ‘lanes’ which process data in parallel comparable to multiple lanes of a highway. Though computational Sharding is
                                powerful, it can be insecure if implemented incorrectly. The reason is that a ‘shard’ is easier to dominate than an entire network, as it is smaller. The way to resolve this is through the use of a multi-layered ledger
                                (explained in Security) inherent in the 3DC. Layers of consensus allow the shards below to be smaller in size than those above, and ensure that conflicts can be resolved to prevent attacks.
                            </p>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="sub4" role="tabpanel" aria-labelledby="sub4-tab">
                        <div class="titleCol">
                            <h3>Data Sharding</h3>
                        </div>
                        <div class="des text-justify">
                            <p>Data Sharding is the division of data to be stored between many nodes. This can be thought of as having many warehouses to store packages (data) after they have been transported (computation). Due to every object being
                              ‘verifiable’ by its index hash, the 3DC can provide Data Sharding with limited trust in remote nodes.</p>
                            <p>The difficulty is, how is the state of so many objects and shards managed? The use of LISP solves this problem. The method by which the 3DC performs Data Sharding, a ‘network’ is created that exists everywhere, where
                              instead of ‘IP’ addresses, you have ‘Hashes’. This could be compared to typing in a txid in your web browser, and receiving that transaction. Using LISP in this manner, we would enable the browser (or LLP in network
                              terms) to open a connection to a hash, which would point to the group of nodes that held that particular piece of data.</p>
                            <p>The end result of this is, a user can login to their node that has never communicated with the network before, generate their ‘genesis-id’ from their username and open a connection to this hash, which would then use the
                              existing internet to route to the node that contained this particular piece of data. The beauty of this is that the network itself doesn’t need to add superfluous data synchronization across nodes to know where data is
                              held. Nodes use the overlay to route requests to other nodes, resulting in IP addresses as hashes of data that exists in the wonderful world of Nexus.</p>
                            <p>Data sharding is an essential facet of the 3DC in order to achieve long-term scalability. Amine will provide the opportunity for nodes to run in ‘shard mode’, lowering their disk and memory usage even when the network
                              is experiencing high load. Data sharding in Obsidian will extend to critical network functions, resulting in nodes being required to store only a portion of the entire chain. </p>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="sub5" role="tabpanel" aria-labelledby="sub5-tab">
                        <div class="titleCol">
                            <h3>Multicast</h3>
                        </div>
                        <div class="des text-justify">
                            <p>Additional to the cryptographic structures, the Internet, must be capable of routing efficiently. We utilize what is termed ‘IP Multicast’ which allows a single broadcast of a message to be initiated by a node, rather
                              than every node needing to replicate the message as it is verified. This can be likened to a public speaker broadcasting a message to an audience (multicast), rather than having a one-on-one conversation (unicast), where
                              the message is gossiped from one person to the next. You can imagine how this would not only improve the scalability, but also the integrity of the message (as gossip doesn’t always reflect the original conversation).
                              Packets and transactions will route in constant time no matter how many nodes are part of the system. </p>
                            <p class="innerText"><span><a href="./lisp" class="btn btn-primary">LISP</a></span></p>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="sub6" role="tabpanel" aria-labelledby="sub6-tab">
                        <div class="titleCol">
                            <h3>Lower Level Library (LLL)</h3>
                        </div>
                        <div class="des text-justify">
                            <p>The LLL is the foundation of the TAO Framework, which powers many of the protocol’s subsystems. It includes three core components.</p>
                            <p>The Lower Level Database (LLD) is Nexus’ fast and modular storage engine, which to the best of our knowledge, is capable of outperforming most existing embedded database engines. Our average results are around 0.33
                              seconds for 100k writes and reads to disk (one then the other). This rivals other storage engines such as Google’s LevelDB.</p>
                            <img class="collapseImg" src="images/speed-img.png" alt="speed-img">
                            <p>The Lower Level Protocol (LLP) is a fundamental component of the Network Layer, a light and fast protocol that allows a developer to customize their packet design and message interpretation. It gains scalability through
                              simplicity, and is capable of managing a large number of concurrent connections.</p>
                            <p>The Lower Level Cryptography (LLC) is a light and efficient library that contains many useful cryptographic functions such as Post-Quantum Cryptography, AES and Argon2. The library provides an easily accessible set of
                              high performance cryptographic functions to ensure maximum scaling potential. An example would be our benchmarks of FALCON (used in the TAO) that verified 150k signatures/s on a consumer grade apple laptop, where ECDSA
                              (used in Bitcoin, Ethereum, etc.) performed only 4k signatures/s.</p>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade<?php echo $_REQUEST['s']=='security'?' active show':'';?>" id="security" role="tabpanel" aria-labelledby="security-tab">
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

                    <div class="customTab tab-pane fade" id="sub7" role="tabpanel" aria-labelledby="sub7-tab">
                        <div class="titleCol">
                            <h3>Trust and Weight</h3>
                        </div>
                        <div class="des text-justify">
                            <p>Trust is defined as the total time a specific user (Signature Chain) has been contributing to the network. This time is measured by the consistency and availability of a node to validate transaction data.</p>
                            <p>Weight is defined as the real time resource contribution that a given node has provided for a one time transaction process. This can be measured in computing cycles through Proof-of-Work (PoW) or other resources such as
                            ‘Stake’ that incurs a cost to provide.</p>
                            <p class="innerText"><span><a href="./trust" class="btn btn-primary">Trust</a></span></p>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="sub8" role="tabpanel" aria-labelledby="sub8-tab">
                        <div class="titleCol">
                            <h3>pBFT + Reputation Channels (L1)</h3>
                        </div>
                        <div class="des text-justify">
                            <p>As transactions are received by the network, nodes start verifying them immediately. The transaction speed of L1 channels will vary based on the risk that a merchant wishes to assume, ranging from sub-second speeds to five
                            seconds. For higher value transactions, it will be recommended that they receive additional weight from validation on the next consensus layer: L2, reducing transaction speed to 15 seconds plus.</p>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="sub9" role="tabpanel" aria-labelledby="sub9-tab">
                        <div class="titleCol">
                            <h3>pBFT + PoS Trust Network (L2)</h3>
                        </div>
                        <div class="des text-justify">
                            <p>
                                As an extension to the existing Proof-of-Stake system, L2 will form the second layer of consensus above L1. The L2 layer ensures safety and liveness, cross-shard communication, and resolves conflicts from the L1 layer. It
                                represents the horizontal chaining of L1 channels, and is a major step towards a truly decentralized and scalable ledger.
                            </p>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="sub10" role="tabpanel" aria-labelledby="sub10-tab">
                        <div class="titleCol">
                            <h3>Decentralized Mining Pool (L3)</h3>
                        </div>
                        <div class="des text-justify">
                            <p>This layer will use PoW based mining shares computed from the work performed by the nodes of L2. Consensus will be determined by the largest value of shares + Trust, in order to reach a final agreement on the most valid 3D
                            block.</p>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="sub11" role="tabpanel" aria-labelledby="sub11-tab">
                        <div class="titleCol">
                            <h3>Checking and Balancing</h3>
                        </div>
                        <div class="des text-justify">
                            <p>In order to have the highest degree of security, decisions cannot be concentrated in one form, as this creates the ability for ‘coercion’. If there is only one form of cost that provides security, the system can be easily
                                dominated due to limited ‘checking and balancing’. Bitcoin is a prime example of a victim that is suffering from resource domination or ‘centralization’.</p>
                            <p class="innerText"><span><a href="JavaScript:void(0)" class="bluetext">Bitcoin Hashrate Distribution</a></span></p>
                            <p>As can be seen from the link above, four organizations control more than 51% of Bitcoin’s hashrate, meaning, that the entire security of Bitcoin is reliant on them and the decisions that they make. This situation is an
                                example of centralization resulting from resource domination, which has lead to proposed solutions such as UASF (User Activated Soft Fork) and multiple Bitcoin forks such as Bitcoin Cash, Bitcoin SV, Bitcoin Gold, etc.</p>
                            <img class="collapseImg" src="images/graph.png" alt="graph">
                            <p>Though promising, UASF was unable to reach a level where it could be effective, as the required percentage of miner’s consent was too high.</p>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade<?php echo $_REQUEST['s']=='decentralization'?' active show':'';?>" id="decentralization" role="tabpanel" aria-labelledby="decentralization-tab">
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

                    <div class="customTab tab-pane fade" id="sub12" role="tabpanel" aria-labelledby="sub12-tab">
                        <div class="titleCol">
                            <h3>L1 Reputation Channels</h3>
                        </div>
                        <div class="des text-justify">
                            <P>L1 Reputation channels are designed to require a low amount of resources in comparison to the L2 and L3 layers. This is to enable the use of smaller mobile devices which in turn will provide higher levels of
                            decentralization. This is possible as the L2 consensus layer above adds weight to ensure the security of the channels below. Reputation is the final ingredient that the 3DC employs to maintain security while achieving high
                            levels of decentralization. It is aggregated through all three layers of the 3DC, to quantify the ‘validity’ of the 3D block.</P>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="sub13" role="tabpanel" aria-labelledby="sub13-tab">
                        <div class="titleCol">
                            <h3>Decentralized Staking Pool (L2)</h3>
                        </div>
                        <div class="des text-justify">
                            <P>The L2 layer is the core of the 3DC that manages data aggregation and contract processing. This layer also receives shares from the miners on the L3 layer above, in order to accumulate their work and reward the miners
                                collectively. The more shares that are included from the L3 layer, the greater the accumulated Weight and Trust will be for the given 3D block. Therefore, the 3DC incentivises L2 validators to include as many shares as
                                possible to ensure that their 3D block is accepted as the most valid in the 3D chain.</P>
                            <P>The L2 layer is driven by a ‘Proof-of-Stake’ weighting, that identifies all nodes in the consensus process as contributors, and therefore produces a higher degree of decentralization compared to existing Proof-of-Stake (PoS)
                                protocols. The 3DC will require a lower minimum balance in order to stake with than the current PoS protocol.</P>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="sub14" role="tabpanel" aria-labelledby="sub14-tab">
                        <div class="titleCol">
                            <h3>Decentralized Mining Pool (L3)</h3>
                        </div>
                        <div class="des text-justify">
                            <p>
                                Instead of miners having the authority to determine the next block by finding the winning hash, mining will become a group-wide activity forming the L3 layer of the 3DC. Miners who submit hashes to the network perform work
                                that locks the L2 cross links. This provides the infrastructure for a more decentralized consensus process, while also inheriting the positive properties that mining offers.
                            </p>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="sub15" role="tabpanel" aria-labelledby="sub15-tab">
                        <div class="titleCol">
                            <h3>Peer Discovery</h3>
                        </div>
                        <div class="des text-justify">
                            <P>Any blockchain relies on the ability of nodes to connect directly (peer-to-peer) to maintain a decentralized and evenly distributed topology. Therefore, nodes must be able to be discovered by their peers, by being able to
                                accept connection requests. Though this is not a novel concept, it is pivotal to peer-to-peer networks and yet is seldom achievable, due to the need for NAT (Network Address Translator) traversal logic which is why Bitcoin has
                                only a meager 10% of nodes that are discoverable.</P>
                            <P>Alternatively, Nexus uses the LISP Overlay for ‘NAT traversal’ to maintain higher levels of node availability. LISP uses static Endpoint Identifiers (EIDs) that can even be reached when roaming between different networks
                                (WiFi, cell towers, etc.). This gives nodes higher levels of mobility, allowing them to be located anywhere on the internet, behind NATs in residential environments, in cloud providers, and behind mobile carriers while still
                                being discoverable. </P>
                        </div>
                    </div>

                    <div class="customTab tab-pane fade" id="sub16" role="tabpanel" aria-labelledby="sub16-tab">
                        <div class="titleCol">
                            <h3>Reputation Incentive Structures</h3>
                        </div>
                        <div class="des text-justify">
                            <P>Reputation is an important requirement for the functioning of decentralized systems, in order to create a healthy global network. We will implement reputation on all three layers of the 3DC, as a secondary component to Weight
                                to improve the overall Byzantine Fault Tolerance. Of equal importance, reputation can improve the decentralization through incentive structures facilitated through variable rewards to nodes that have earned a higher
                                reputation. Longer term contributors to a system can be awarded a higher reputation, and therefore a higher return for their contribution, giving rise to a long standing view of Nexus that:</P>
                            <P CLASS="textCenter">“Not everyone has money, but everyone has time”</P>
                            <P class="innerText"><span><a href="./trust" class="btn btn-primary">Trust</a></span></P>
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
