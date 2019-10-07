<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg lisp_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>LISP</h2>
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
                        <a class="nav-link active overview" id="over-tab" data-toggle="tab" href="#over" role="tab" aria-controls="over" aria-selected="true">LISP</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="parent1-tab" data-toggle="tab" href="#parent1" role="tab" aria-controls="parent1" aria-selected="false">Ease of Use</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub1-tab" data-toggle="tab" href="#sub1" role="tab" aria-controls="sub1" aria-selected="false">EIDs</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="parent4-tab" data-toggle="tab" href="#parent4" role="tab" aria-controls="parent4" aria-selected="false">Decentralization</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="parent2-tab" data-toggle="tab" href="#parent2" role="tab" aria-controls="parent2" aria-selected="false">Scalability</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub2-tab" data-toggle="tab" href="#sub2" role="tab" aria-controls="sub2" aria-selected="false">Multicast</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub3-tab" data-toggle="tab" href="#sub3" role="tab" aria-controls="sub3" aria-selected="false">IPv6 Addressing</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub4-tab" data-toggle="tab" href="#sub4" role="tab" aria-controls="sub4" aria-selected="false">Sharding</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="parent3-tab" data-toggle="tab" href="#parent3" role="tab" aria-controls="parent3" aria-selected="false">Security</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub5-tab" data-toggle="tab" href="#sub5" role="tab" aria-controls="sub5" aria-selected="false">Crypto-EIDs</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub6-tab" data-toggle="tab" href="#sub6" role="tab" aria-controls="sub6" aria-selected="false">Encryption</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub7-tab" data-toggle="tab" href="#sub7" role="tab" aria-controls="sub7" aria-selected="false">Privacy</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub8-tab" data-toggle="tab" href="#sub8" role="tab" aria-controls="sub8" aria-selected="false">SafeNet</a>
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
                      <p>LISP (Location Identifier Separation Protocol) is a protocol designed by a small group of Cisco engineers who are responsible for many of the protocols that power today’s Internet. It provides important advancements to the Network Layer, and many necessary features for ease of use, decentralization, security, scalability, and for secure access schemes for hybrid networks. Some of the below features are fully integrated, and others are being deployed through the <a href="./roadmap">TAO Framework</a>.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="parent1" role="tabpanel" aria-labelledby="parent1-tab">
                    <div class="titleCol">
                      <h3>Ease of Use</h3>
                      <p>Imagine if your phone number changed every time you changed location, this is how IP (Internet Protocol) addresses work in their current form. Alternatively, LISP provides a unique End Point Identifier (EID), that allows one to have a consistent address, even when roaming between networks.</p>
                      <p>This means that genuine peer-to-peer connectivity is possible, because you are always accessible at one address, and remain so even when you are mobile. LISP enables you to remotely access your staking node from anywhere, while your node is busy working at home. This greatly increases the usability of your <a href="./wallet">Nexus Wallet</a>.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub1" role="tabpanel" aria-labelledby="sub1-tab">
                    <div class="titleCol">
                      <h3>EIDs</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>EIDs replace your IP address which in a standard network contains the identifier and the location. With LISP, the EID becomes the identifier, while the RLOC (Routing Locator) becomes the location. This decoupling enables a device to freely roam between networks, as only the RLOC changes, not the EID.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="parent4" role="tabpanel" aria-labelledby="parent4-tab">
                    <div class="titleCol">
                      <h3>Decentralization</h3>
                      <p>Peer Discovery is a concept that is required for an effective and truly decentralized network. Nodes must be available to their peers by being able to accept incoming connection requests. Though this is not a novel concept, it is seldom achieved as the node or a device is usually behind a NAT (Network Address Translator), which generally leads to only 10% of peers being accessible or discovered. LISP handles NAT traversal differently to software such as UPnP, resulting in higher levels of node availability. Therefore, the Nexus network will rely less on ‘seed nodes’ to relay messages, creating a distributed network topology.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="parent2" role="tabpanel" aria-labelledby="parent2-tab">
                    <div class="titleCol">
                      <h3>Scalability</h3>
                      <p>LISP supports Multicast and IPv6 Crypto-EIDs which provide additional scaling and security to the network, making it a very attractive feature for blockchain applications and the emerging IoT industry.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub2" role="tabpanel" aria-labelledby="sub2-tab">
                    <div class="titleCol">
                      <h3>Multicast</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>Even though Multicast is a well established protocol, not all routers provide it natively. This is due to the agreement between many ISPs to route each others’ traffic, where there are no incentives to forward multicast traffic. The LISP Overlay solves this with a technique called ‘head end forwarding’, which is consistent and operable across the entire global network regardless of the nuances of the underlay.</p>
                      <p>Multicast is important for blockchain scaling, because it routes packets in constant time O(1). This can be likened to a speaker making one speech to an entire group of people, whereas Unicast, the speaker tells one person, who tells the next person, and so on.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub3" role="tabpanel" aria-labelledby="sub3-tab">
                    <div class="titleCol">
                      <h3>IPv6 Addressing</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>Most Internet devices use IPv4 addressing (the Internet equivalent of phone numbers), which is limited to around 4 billion devices. To accommodate the growth of Internet-connected devices, IPv6 was developed, though even decades later it still has not been widely adopted. LISP is able to use IPv6 as an overlay, since it does not suffer from the compatibility issues of underlay devices. The capacity of IPv6 is 2^128 devices, providing ample capacity for the growth of IoT devices.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub4" role="tabpanel" aria-labelledby="sub4-tab">
                    <div class="titleCol">
                      <h3>Sharding</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>Another crucial use case for LISP is its role in the sharding of data within the <a href="./3dc">3D Chain</a>, where it will be used to translate database indexes into usable and routable IPs. This will result in the network becoming one entirely accessible global database.</p>
                      <p>This means that components of the blockchain, such as transactions and blocks, will receive their own unique EID enabling any node to retrieve data without having to make complex ‘lookups’, or manage many states. This will be similar to typing ‘0xf8ea48fac8’ into your web browser, and in response receiving the data associated with this key.</p>
                      <p>In practical applications, nodes will only have to store a small portion of the ledger, and won’t have to undertake long and arduous synchronization processes. This is imperative to scaling, as normal computers are unable to run a full node as the blockchain grows. This was the main factor of the Bitcoin block size debate, which resulted in very small block sizes, and an increasingly unscalable network.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="parent3" role="tabpanel" aria-labelledby="parent3-tab">
                    <div class="titleCol">
                      <h3>Security</h3>
                      <p>The Internet was designed as an open system with few security parameters, which has resulted in many people experiencing hacks, IP spoofing, MITM (Man-In-The-Middle) and DoS attacks. Though openness is one of the cornerstones of the Internet today, security can be improved through the use of the LISP Overlay.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub5" role="tabpanel" aria-labelledby="sub5-tab">
                    <div class="titleCol">
                      <h3>Crypto-EIDs</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>An EID is a form of identity on the network layer. This is critical to security, as an EID is linked to a Signature Chain, that can be cryptographically associated with reputation on the ledger. This creates an elevated layer of trust to the Internet, as one can verify with certainty that their peer is who they claim to be.</p>
                      <p>Crypto-EIDs don’t rely on any trusted third party for verification, as they can be proven in a decentralized manner on the ledger. Therefore, having to verify a new IP or a new device will no longer be necessary, as the identity of the device can be easily verified by both the network and ledger layers.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub6" role="tabpanel" aria-labelledby="sub6-tab">
                    <div class="titleCol">
                      <h3>Encryption</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>LISP supports ‘data plane’ encryption for any device (including IoT devices) to communicate over the underlay, meaning that one benefits from encryption at the level of LISP and at the Nexus application layer. </p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub7" role="tabpanel" aria-labelledby="sub7-tab">
                    <div class="titleCol">
                      <h3>Privacy</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>Similar to choosing when to answer your cell-phone, or to respond to a message, LISP provides options of how to interact with other users. This resonates with the Internet’s model of ‘openness’, while simultaneously protecting rights of privacy.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub8" role="tabpanel" aria-labelledby="sub8-tab">
                    <div class="titleCol">
                      <h3>SafeNet</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>When using the SafeNet, challenges of the old Internet will be a thing of the past, creating a more transparent and authentic Internet where sources are able to build reputation, peers are verifiable, and information is freely exchanged. It will take time to come to fruition, though we believe these innovations and many more will change the way we interact with the Internet.</p>
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
