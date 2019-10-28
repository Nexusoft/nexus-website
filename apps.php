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
              <h2>What is Tritium?</h2>
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
                        <a class="nav-link active overview" id="over-tab" data-toggle="tab" href="#over" role="tab" aria-controls="over" aria-selected="true">Tritium Protocol</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub1-tab" data-toggle="tab" href="#sub1" role="tab" aria-controls="sub1" aria-selected="false">Register-Based Contract Engine</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub2-tab" data-toggle="tab" href="#sub2" role="tab" aria-controls="sub2" aria-selected="false">Application Programming Interface</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub3-tab" data-toggle="tab" href="#sub3" role="tab" aria-controls="sub3" aria-selected="false">Conditional Contracts</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub4-tab" data-toggle="tab" href="#sub4" role="tab" aria-controls="sub4" aria-selected="false">Decentralized Login System</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub5-tab" data-toggle="tab" href="#sub5" role="tab" aria-controls="sub5" aria-selected="false">Decentralized Exchange</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub6-tab" data-toggle="tab" href="#sub6" role="tab" aria-controls="sub6" aria-selected="false">Tokenization Protocols</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub7-tab" data-toggle="tab" href="#sub7" role="tab" aria-controls="sub7" aria-selected="false">TAO Name System (TNS)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub8-tab" data-toggle="tab" href="#sub8" role="tab" aria-controls="sub8" aria-selected="false">Lower Level Library</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub9-tab" data-toggle="tab" href="#sub9" role="tab" aria-controls="sub9" aria-selected="false">Hybrid Networks</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub10-tab" data-toggle="tab" href="#sub10" role="tab" aria-controls="sub10" aria-selected="false">Locator Identifier Separation Protocol</a>
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

                  <!-- introduction -->
                  <div class="intro-Wrapper customTab tab-pane fade<?php echo isset($_REQUEST['s'])?'':' active show';?>" id="over" role="tabpanel" aria-labelledby="over-tab">
                      <div class="headingCol customSpace">
            	        <p class="customText textCenter"><h3>"The blockchain is a verification system, not a computation engine"</h3></p>

                        <p class="customText textJustify">
                            The design of Nexus is based on information gathered from many discussions with Fortune 10 to Fortune 500 companies, developers, and community volunteers over the past two years. Through our research we’ve found that most projects built on Ethereum do not use the Ethereum Virtual Machine (EVM) for its turing completeness, i.e. its ability to do universal computation. What businesses require from blockchain technology are contracts that function more like real world actions between people, with the addition of an immutable data layer capable of managing rights and ownership.
                        </p>

                        <p class="customText textJustify">
                            Therefore, we have developed an easily accessible and versatile software stack where data can be operated on, its ownership transferred between users, and whereby conditions define the behavior of actions. Our design not only provides numerous ready-made contract functionalities through elegant design, it is also able to scale with the growing demand of smart contracts.
                        </p>
                      </div>
                  </div>

                  <!-- register based contract engine. -->
                  <div class="customTab tab-pane fade" id="sub1" role="tabpanel" aria-labelledby="sub1-tab">
                      <p class="customText textJustify">
                          A register is the fastest storage medium inside your computer’s CPU (Central Processing Unit), that the processor uses to cache data in between calculations. This has become a more desirable architecture for computer design as an improvement to a much older architecture called a ‘stack’. Our contract engine follows this architecture as an improvement compared to other blockchain-powered virtual machines such as the EVM (Ethereum Virtual Machine) that still use the older stack architecture. The improved efficiency gained through the use of registers makes developing on Nexus not only easier, but also much more efficient and scalable.
                      </p>
                  </div>

                  <!-- API -->
                  <div class="customTab tab-pane fade" id="sub2" role="tabpanel" aria-labelledby="sub2-tab">
                    <p class="customText textJustify">
                        Our Application Programming Interface (API) provides direct access for developers to build on Nexus, enabling features such as Tokens and Assets. To add flexibility, a developer can make non-standard API calls with custom conditions to provide additional functionality to the DApp that is unavailable through the standard API. This can be further augmented with Domain-Specific Languages on the lower API layer.
                    </p>
                  </div>

                  <!-- conditional contracts -->
                  <div class="customTab tab-pane fade" id="sub3" role="tabpanel" aria-labelledby="sub3-tab">
                    <p class="customText textJustify">
                        A basic Nexus contract is comprised of three layers: data (Registers), programmable actions, (Operations), and accounts (Signature Chains). Together, these layers verify the information of a system or Decentralized Application (DApp), following logic that closely relates to agreements and contracts between people. We have followed this approach for the primary reason that smart contracts cannot be realized with existing language designs, they require a new architecture. This is in direct contrast to Ethereum’s language Solidity, which closely resembles Javascript, or EOS’ use of Web Assembly (WASM), both of which were designed for web development rather than building secure financial applications.
                    </p>
                  </div>

                  <!-- decentralized login system. -->
                  <div class="customTab tab-pane fade<?php echo $_REQUEST['s']=='sub4'?' active show':'';?>" id="sub4" role="tabpanel" aria-labelledby="sub4-tab">
                      <p class="customText textJustify">
                          A major benefit of using cryptocurrencies is the security gained through the use of public key cryptography. Though this is a vast improvement to centralized login systems, this benefit comes with the drawback of key management. In order to manage these keys, most cryptocurrencies use a database storage file called a ‘wallet.dat’ that keeps a record of all the keys that have been / will be used to access your funds. We believe that the adoption of blockchain technology will always be limited if relying on such a model, such as lost hard drives, funds sent to unspendable addresses, or backups that were not up-to-date. Therefore we developed a new key management system: Signature Chains. This technology still uses public key cryptography, but rather than maintaining the keys on disk or the cloud, they are stored in ‘mathematical hyperspace’ meaning that with your login credentials, you are able to access your Nexus Wallet from any computer. This is synonymous to a decentralized login system, that can be integrated with various security measures such as biometrics and hardware password managers. We believe this approach is fundamental to the adoption of blockchain by the general public, while also improving current security standards.
                      </p>
                 </div>

                 <!-- decentralized exchange -->
                 <div class="customTab tab-pane fade" id="sub5" role="tabpanel" aria-labelledby="sub5-tab">
                     <p class="customText textJustify">
                         Assets and tokens hosted on Tritium fulfill the requirement of managing and storing ownership rights, and also provide another unique utility: decentralized exchange. Through the intelligent use of conditional contracts, without custodian services, anyone is able to transact between different tokens and assets. There is no authority that designates the process of listing, and there are no other parties involved in the exchange other than the buyer and the seller.
                     </p>
                 </div>

                 <!-- tokenization protocols -->
                 <div class="customTab tab-pane fade" id="sub6" role="tabpanel" aria-labelledby="sub6-tab">
                     <p class="customText textJustify">
                         Some believe that our future societies will use tokenization for many purposes. This is a novel idea, especially considering that the current use of tokens has been limited to speculative assets. Alternatively, Tritium provides many uses of tokens that will produce value across many industries. The most prominent protocol is the use of fungible tokens for the division of ownership of assets and companies, that on the blockchain enforce ‘revenue splits’ based on token allocation. This provides utility to joint projects, with transparent and accountable revenue splits, for the distribution of profits earned from such a venture. Token protocols have the capability, with the correct utility and technology, to create more decentralized and responsible social systems.
                     </p>
                 </div>

                 <!-- TAO name system. -->
                 <div class="customTab tab-pane fade" id="sub7" role="tabpanel" aria-labelledby="sub7-tab">
                     <p class="customText textJustify">
                         The TAO Name System is similar to DNS (Domain Name System), allowing users to create and exchange names with one another that point to different objects. These names can resolve to register addresses such as assets and tokens, or become aliases for user identification. They simplify the use of our technology by reducing the complexity of sending transactions, requiring as little as a username and account name to send funds to another user (eg. send to paul:savings). This greatly simplifies the user experience of managing digital assets. Entries can also point to IP addresses for remote services wishing to explore blockchain based DNS functionality.
                     </p>
                 </div>

                 <!-- lower level library -->
                 <div class="customTab tab-pane fade" id="sub8" role="tabpanel" aria-labelledby="sub8-tab">
                     <p class="customText textJustify">
                         The Lower Level Library (LLL) is a high-performance ‘Template Library’ designed to power emerging-web technologies. Most web technology today is clunky, centralized, and over-engineered as a result of decades of development. The LLL is simple, powerful, and lightweight. It contains three main components: Cryptography (LLC), Database (LLD), and Protocol (LLP). The Cryptography component contains Quantum Resistant cryptography, the Database component out performs Google’s LevelDB, and the Protocol component handles well over 450k requests per second. The LLL is the foundation to the TAO framework, while being able to support other web technologies with high reliability, performance, and extensibility.
                     </p>
                 </div>

                 <!-- hybrid networks -->
                 <div class="customTab tab-pane fade" id="sub9" role="tabpanel" aria-labelledby="sub9-tab">
                     <p class="customText textJustify">
                         The demand for privacy has created a growing divide between public systems like Bitcoin, and private systems like Hyper Ledger or Quorum. The combination of these two architectures is what we term ‘Hybrid’, whereby the public network generates security and decentralization, and the private network provides autonomy, privacy, and isolation. A Hybrid Network is an ideal choice for any individual, company, or large enterprise wishing to manage their own private network, without the added complexity of worrying about system or network security and protection of critical user data.
                     </p>
                 </div>

                 <!-- LISP -->
                 <div class="customTab tab-pane fade" id="sub10" role="tabpanel" aria-labelledby="sub10-tab">
                     <p class="customText textJustify">
                     Tritium runs on the Locator Identifier Separation Protocol (LISP) overlay, designed by team member Dino Farinacci who is the first Fellow (the most senior rank or title one can achieve in engineering) of Cisco. This overlay is responsible for network scaling through multicast, identification through a static EID (Endpoint Identifiers), and authentication by using these identifiers. Through IPv6, it provides ample capacity for the emerging IoT industry. It will be used in a critical capacity with the release of Amine, which uses the Network (IP) layer to shard data and assign identifiers to data segments for management of the distributed database, without the loss of security or privacy.
                     </p>
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
