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
                        <a class="nav-link subMenu" id="sub6-tab" data-toggle="tab" href="#sub6" role="tab" aria-controls="sub6" aria-selected="false">Asset Management</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub7-tab" data-toggle="tab" href="#sub7" role="tab" aria-controls="sub7" aria-selected="false">Token Protocols</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub8-tab" data-toggle="tab" href="#sub8" role="tab" aria-controls="sub8" aria-selected="false">TAO Name System (TNS)</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub9-tab" data-toggle="tab" href="#sub9" role="tab" aria-controls="sub9" aria-selected="false">Lower Level Library</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub10-tab" data-toggle="tab" href="#sub10" role="tab" aria-controls="sub10" aria-selected="false">Hybrid Networks</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub11-tab" data-toggle="tab" href="#sub11" role="tab" aria-controls="sub11" aria-selected="false">Locator Identifier Separation Protocol</a>
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
            	        <p class="customText"><h3 style="text-align: center">"The blockchain is a verification system, not a computation engine"</h3></p>

                        <p class="customText textJustify">
                            The design of Tritium is based on information gathered from many discussions with Fortune 10 to Fortune 500 companies, developers, and community volunteers over the past two years. Through our research we’ve found that most projects built on Ethereum do not use the Ethereum Virtual Machine (EVM) for its turing completeness, i.e. its ability to do universal computation. What businesses require from blockchain technology are contracts that function more like real world actions between people, with the addition of an immutable data layer capable of managing rights and ownership.
                        </p>

                        <p class="customText textJustify">
                            Therefore, we have developed an easily accessible and versatile Software Stack where data can be operated on, its ownership transferred between users, and whereby conditions define the behavior of actions. Our design not only provides numerous ready-made contract functionalities through elegant design, it is also able to scale with the growing demand of smart contracts.
                        </p>
                      </div>
                  </div>

                  <!-- register based contract engine. -->
                  <div class="customTab tab-pane fade" id="sub1" role="tabpanel" aria-labelledby="sub1-tab">
                    <div class="titleCol">
                      <h3>Register Based Contract Engine</h3>
                    </div>
                      <p class="customText textJustify">
                          A register is the fastest storage medium inside your computer’s CPU (Central Processing Unit), that the processor uses to cache data in between calculations. This has become a more desirable architecture for computer design as an improvement to a much older architecture called a ‘stack’.
                     </p>

                        <p class="customText textJustify">
Our contract engine follows this architecture as an improvement to other blockchain-powered virtual machines such as the EVM (Ethereum Virtual Machine) that still use the older stack architecture. The improved efficiency gained through the use of registers makes developing on Nexus not only easier, but also much more efficient and scalable.
                      </p>
                  </div>

                  <!-- API -->
                  <div class="customTab tab-pane fade" id="sub2" role="tabpanel" aria-labelledby="sub2-tab">
                    <div class="titleCol">
                      <h3>Application Programming Interface</h3>
                    </div>
                    <p class="customText textJustify">
                        Our <a href=software-stack?s=api>Application Programming Interface</a> (API) is for developers to build Decentralized Applications (DApps) and Hybrid Networks. The API can be used for the recording of Supply Chains, Digital Asset Licensing, Financial Assets, Records, Licenses, Certificates, and Securitized Token Offerings (STOs). </p>

                        <p class="customText textJustify">
To add flexibility, a developer can make non-standard API calls with custom conditions to provide additional functionality to the DApp that is unavailable through the standard API. This can be further augmented with Domain-Specific Languages on the lower API layer.
                    </p>
                  </div>

                  <!-- conditional contracts -->
                  <div class="customTab tab-pane fade" id="sub3" role="tabpanel" aria-labelledby="sub3-tab">
                    <div class="titleCol">
                      <h3>Conditional Contracts</h3>
                    </div>
                    <p class="customText textJustify">
                        A basic Nexus contract is comprised of three layers: data <a href=software-stack?s=register>(Registers)</a>, programmable actions <a href=software-stack?s=operation>(Operations)</a>, and accounts <a href=signature-chains>(Signature Chains)</a>. Together, these layers verify the information of a system or Decentralized Application (DApp), following logic that closely relates to agreements and contracts between people.
                        </p>

                        <p class="customText textJustify">
We have followed this approach for the primary reason that smart contracts cannot be realized with existing language designs, they require a new architecture. This is in direct contrast to EOS’ use of Web Assembly (WASM), which was designed for web development rather than building secure financial applications.
</p>

                        <p class="customText textJustify">
Conditional Contracts allow a user to set requirements in order for a contract to be fulfilled, such as contract time expiration, the decentralized exchange of an asset, or a non-custodial escrow services.
                    </p>
                  </div>

                  <!-- decentralized login system. -->
                  <div class="customTab tab-pane fade<?php echo $_REQUEST['s']=='sub4'?' active show':'';?>" id="sub4" role="tabpanel" aria-labelledby="sub4-tab">
                    <div class="titleCol">
                      <h3>Decentralized Login System</h3>
                    </div>
                      <p class="customText textJustify">
                          A major benefit of using cryptocurrencies is the security gained through the use of public key cryptography. Though this is a vast improvement to centralized login systems, this benefit comes with the drawback of key management. In order to manage these keys, most cryptocurrencies use a database storage file called a ‘wallet.dat’ that keeps a record of all the keys that have been / will be used to access funds.                 </p>

                        <p class="customText textJustify">
We believe that the adoption of blockchain technology will always be limited if relying on such a model, due to the inconvenience of having to make regular wallet backups, loss or theft of hard drives, and the risk of sending funds to unspendable addresses.
These systems are susceptible to human error, boding for the need for complex hardware designed specifically to store private keys securely.
Though these devices are a step towards user friendliness, they are still at risk of being lost or stolen, and therefore are not a reliable replacement for authorization systems.
                        </p>

                        <p class="customText textJustify">
Therefore, we developed a decentralized login system: <a href=signature-chains>Signature Chains</a>. This technology still uses public key cryptography, but rather than maintaining the keys on disk or the cloud, they are stored in ‘mathematical hyperspace’. Signature Chains support the <a href=wallet>Nexus Wallet</a>, making it accessible from any computer simply by logging in with your credentials (username, password and pin).
                        </p>

                        <p class="customText textJustify">
Signature Chains can be integrated with various security measures such as biometrics and hardware password managers.
We view this approach as being fundamental to the adoption of blockchain by the general public, while it also improves current security standards.
                        </p>

                        <p class="customText textJustify">
Signature Chains are also available for DApp developers to build with, furthering our mission of making blockchain technology more accessible.
Signature Chains are comparable to a personal blockchain, and provide the foundation for features such as Managing Assets, whilst maintaining pseudo-anonymity for privacy.
In our opinion, they are a very important step for mainstream adoption across all blockchain use cases.
                      </p>
                 </div>

                 <!-- decentralized exchange -->
                 <div class="customTab tab-pane fade" id="sub5" role="tabpanel" aria-labelledby="sub5-tab">
                    <div class="titleCol">
                      <h3>Decentralized Exchange</h3>
                    </div>
                     <p class="customText textJustify">
                         Assets and tokens hosted on Tritium fulfill the requirement of managing and storing ownership rights, and also provide another unique utility: decentralized exchange. Through the intelligent use of conditional contracts, without custodian services, anyone is able to transact between different tokens and assets. There is no authority that designates the process of listing, and there are no other parties involved in the exchange other than the buyer and the seller.
                     </p>
                 </div>


                 <!-- assets -->
                 <div class="customTab tab-pane fade" id="sub6" role="tabpanel" aria-labelledby="sub6-tab">
                    <div class="titleCol">
                      <h3>Asset Management</h3>
                    </div>

                    <p class="customText textJustify">
                        Assets are used to create a record of a digital or physical asset on the blockchain, in order to track ownership and facilitate peer-to-peer exchange.
                        The registration of assets can be facilitated by DApps to create many decentralized and automated services.
                        Some examples of assets that can be registered on the Nexus Blockchain include:
                    </p>
                    <p class="customText textJustify" style="font-weight: 600">
                        Digital Assets and Media:
                    </p>
                    <p class="customText textJustify">
                        Music, Audio Books, E-books, Graphics & Photography Film, TV shows, Games, Software and Apps.
                    </p>
                    <p class="customText textJustify" style="font-weight: 600">
                        Supply Chain Certificates (Standards, Authenticity, Quality Assurance, Customs, Titles):
                    </p>
                    <p class="customText textJustify">
                        Agricultural Produce & Fish, Minerals, Timber, Livestock, Electricity, Pharmaceuticals, Electrical Goods and Components, Luxury Goods, Antiques, Art, Branded goods, Customs Records, Cars, Motor Cycles, Boats.
                    </p>
                    <p class="customText textJustify" style="font-weight: 600">
                        Financial Assets:
                    </p>
                    <p class="customText textJustify">
                        Company Registrations and Securitized Tokens, Land Titles.
                    </p>
                    <p class="customText textJustify" style="font-weight: 600">
                        Personal Records, Licenses and Certificates:
                    </p>
                    <p class="customText textJustify">
                        Birth Certificates, Digital Identification, Medical Records, Educational and Professional Certificates, References (Landlord and Employment), Education, Insurance Records, Marriage Certificates, Driving & other Licenses.
                    </p>
                    <p class="customText textJustify" style="font-weight: 600">
                        Intellectual Property:
                    </p>
                    <p class="customText textJustify">
                        Patents, Trademarks, Internet Domains (DNS, TNS).
                    </p>
                    <p class="customText textJustify" style="font-weight: 600">
                        Gaming Assets:
                    </p>
                    <p class="customText textJustify">
                        In Game Tokens, Virtual Assets.
                    </p>
                    <p class="customText textJustify" style="font-weight: 600">
                        Rewards:
                    </p>
                    <p class="customText textJustify">
                        Loyalty Points, Airmiles.
                    </p>
                 </div>

                 <!-- tokens -->
                 <div class="customTab tab-pane fade" id="sub7" role="tabpanel" aria-labelledby="sub7-tab">
                    <div class="titleCol">
                      <h3>Token Protocols</h3>
                    </div>
                    <p class="customText textJustify">
                         Some believe that our future societies will use tokenization for many purposes.
                         This is a novel idea, considering that the current use of tokens has been limited to speculative assets, such as Initial Coin Offerings (ICOs).
                         Conversely, Nexus fungible tokens can facilitate the transparent and automatic payment of Royalties and Dividend payouts.
                    </p>
                    <p class="customText textJustify">
                         Tokens can represent partial ownership or rights to an underlying digital or physical asset.
                         The token allocation determines how the revenue is distributed, and the revenue is paid out to the holders in a direct peer-to-peer manner.
                         This is in direct contrast to current manual systems that are used to facilitate these types of payments, which are often slow and costly to operate.
                    </p>
                    <p class="customText textCenter"><img src="images/split-payments.png" style="width: 80%"></p>
                    <p class="customText textJustify">
                         The diagram above shows the flow of an automatic payment of a shared revenue stream. In this example, the token (called TKN) distribution is 50-25-25. The process follows these steps:
                    </p>
                    <p class="customText textJustify">
                        1. User pays a license fee (here it is 1000NXS) for use of an asset.<br>
                        2. The token holders are notified to claim their percentage of the payment (DEBIT), which is represented by their total token balance divided by the total token supply.<br>
                        3. Each token holder credits their account by proving their right to this payment with their TKN balance.<br>
                     </p>
                     <p class="innerText textCenter"><a href=stos class="btn btn-primary" style="margin: 10px">STOs</a><a href=digital-rights class="btn btn-primary">Digital Rights Management</a></p></p>
                 </div>



                 <!-- TAO name system. -->
                 <div class="customTab tab-pane fade" id="sub8" role="tabpanel" aria-labelledby="sub8-tab">
                    <div class="titleCol">
                      <h3>TAO Name System</h3>
                    </div>
                     <p class="customText textJustify">
                         The TAO Name System (TNS) is similar to Domain Name System (DNS), allowing users to create and exchange names with one another that point to different objects, without having to use large hexadecimal addresses. These names can resolve to register addresses such as assets and tokens, or become aliases for user identification. </p>

                        <p class="customText textJustify">TNS reduces the complexity of sending transactions, as a user only requires a username and account name to send funds to another user (eg. send to paul:savings). Similarly, TNS also simplifies the user experience of managing digital assets. Entries can also point to IP addresses for remote services wishing to explore blockchain based DNS functionality.
                     </p>
                 </div>

                 <!-- lower level library -->
                 <div class="customTab tab-pane fade" id="sub9" role="tabpanel" aria-labelledby="sub9-tab">
                    <div class="titleCol">
                      <h3>Lower Level Library</h3>
                    </div>
                     <p class="customText textJustify">
                         The <a href=3dc?s=lower-level-library>Lower Level Library</a> (LLL) is a high-performance ‘Template Library’ designed to power emerging-web technologies. Most web technology today is clunky, centralized, and over-engineered as a result of decades of development. The LLL is simple, powerful, and lightweight. It contains three main components: Cryptography (LLC), Database (LLD), and Protocol (LLP).</p>

                        <p class="customText textJustify">
The Cryptography component contains <a href=quantum-resistance>Quantum Resistant</a> cryptography, the Database component out performs Google’s LevelDB by orders of magnitude, and the Protocol component handles well over 450k requests per second. The LLL is the foundation to the <a href=roadmap>TAO framework</a>, while being able to support other web technologies with high reliability, performance, and extensibility.
                     </p>
                 </div>

                 <!-- hybrid networks -->
                 <div class="customTab tab-pane fade" id="sub10" role="tabpanel" aria-labelledby="sub10-tab">
                    <div class="titleCol">
                      <h3>Hybrid Networks</h3>
                    </div>
                     <p class="customText textJustify">
                         The demand for privacy has created a growing divide between public systems like Bitcoin, and private systems like Hyper Ledger or Quorum. The combination of these two architectures is what we term ‘Hybrid’, whereby the public network generates security and decentralization, and the private network provides autonomy, privacy, and isolation.</p>

                        <p class="customText textJustify">
A Hybrid Network is an ideal choice for any individual, company, or large enterprise wishing to manage their own private network, without the added complexity of worrying about system or network security and protection of critical user data.
                     </p>
                 </div>

                 <!-- LISP -->
                 <div class="customTab tab-pane fade" id="sub11" role="tabpanel" aria-labelledby="sub11-tab">
                    <div class="titleCol">
                      <h3>LISP</h3>
                    </div>
                     <p class="customText textJustify">
                     Tritium runs on the <a href=lisp>Locator Identifier Separation Protocol</a> (LISP) overlay, developed by team member Dino Farinacci who was the first Fellow (the most senior rank or title one can achieve in engineering) of Cisco.</p>

                        <p class="customText textJustify">LISP increases the reliability and security of communication between nodes, and is responsible for network scaling through multicast, identification through a static EID (Endpoint Identifiers), and authentication by using these identifiers.
                       </p>

                        <p class="customText textJustify">Through IPv6 addressing LISP provides ample capacity for the emerging IoT industry. It will be used in a critical capacity with the release of Amine, which uses the Network (IP) layer to shard data and assign identifiers to data segments for management of the distributed database, without the loss of security or privacy.
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
