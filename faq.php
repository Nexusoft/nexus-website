<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg faq_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>Frequently Asked Qustions</h2>
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
                        <a class="nav-link active" id="parent1-tab" data-toggle="tab" href="#parent1" role="tab" aria-controls="parent1" aria-selected="false">Nexus</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="parent2-tab" data-toggle="tab" href="#parent2" role="tab" aria-controls="parent2" aria-selected="false">Cryptocurrency</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="parent3-tab" data-toggle="tab" href="#parent3" role="tab" aria-controls="parent3" aria-selected="false">Nexus Wallet</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="parent4-tab" data-toggle="tab" href="#parent4" role="tab" aria-controls="parent4" aria-selected="false">Technology</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="parent5-tab" data-toggle="tab" href="#parent5" role="tab" aria-controls="parent5" aria-selected="false">Stake</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="parent6-tab" data-toggle="tab" href="#parent6" role="tab" aria-controls="parent6" aria-selected="false">Mine</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="parent7-tab" data-toggle="tab" href="#parent7" role="tab" aria-controls="parent7" aria-selected="false">Community</a>
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
                  <div class="intro-Wrapper customTab tab-pane fade h6-dark<?php echo isset($_REQUEST['s'])?'':' active show';?>" id="parent1" role="tabpanel" aria-labelledby="parent1-tab">
                    <div class="headingCol customSpace textJustify">
                      <h5>1. What is Nexus?</h5>
                      <p>nex·us /ˈneksəs/ a connection or series of connections linking two or more things.</p>
                      <h6 class="textCenter">MISSION</h6>
                      <p><em>Developing open-source blockchain to support decentralization, innovative applications and responsible values.</em></p>
                      <h6 class="textCenter">VISION</h6>
                      <p><em>Nexus is a peer-to-peer network, cryptocurrency, and contract technology that serves as an alternative to our current systems. It was built by a small group of innovative software architects, and is operated by a global decentralized community. Together, we envision a world in which there is greater trust and connection to one another.</em></p>
                    </div>
                    <div class="headingCol customSpace textJustify">
                      <h5>2. Was Nexus an ICO?</h5>
                      <p>No, Nexus is one of the few blockchains which was created from scratch, and mined into existence (like Bitcoin).</p>
                    </div>
                    <div class="headingCol customSpace textJustify">
                      <h5>3. How is Nexus funded?</h5>
                      <p>The Nexus Embassies are funded by a portion of each NXS block that is mined. The NXS automatically transfers into ‘Keys’ which are allocated between the Embassies.</p>
                    </div>
                    <div class="headingCol customSpace textJustify">
                      <h5>4. What is the economic model of Nexus?</h5>
                      <p>The first NXS block was mined on September 23rd of 2014 at 16:20:00 GMT – 7. The total supply as of 26th January 2019, is 78% of the September 2024 target of 78 million NXS. Please read more below</p>
                      <p class="textCenter"><a class="btn btn-primary" href=economics>Economics</a></p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade<?php echo $_REQUEST['s']=='parent2'?' active show':'';?>" id="parent2" role="tabpanel" aria-labelledby="parent2-tab">
                    <div  class="headingCol customSpace textJustify">
                      <h5>1. What is NXS?</h5>
                      <p>Cryptocurrency is an important faucet to Nexus, which is why we have our own native currency called ‘NXS’. This currency is the backbone of our ecosystem because it pays miners to build blocks, and gives regular users income for simply holding their coins at a rate of return between 0.5% and 3.0% per annum.</p>
                      <p>NXS features include:</p>
                      <ul>
                      <li><b>Cost</b>: 0.01NXS per transaction.</li>
                      <li><b>Speed</b>: 50 seconds per confirmation. Payments received are spendable within 1 confirmation, though it is recommended to wait for at least 3 to 6 confirmations for extra security.</li>
                      <li><b>Borderless</b>: Transactions can be sent globally from wallet to wallet.</li>
                      <li><b>Security</b>: Together, quantum resistance is provided by signature chains, hashing algorithms such as Argon2 and SK, and Lattice-Based Cryptography such as Falcon.</li>
                      <li><strong>Decentralized</strong>: The issuance of NXS is independent of a central bank or government, and the supply is regulated by mathematics. The creation of NXS has zero debt or interest associated with its distribution and is backed by the physical resources that are required to mine it.</li>
                      </ul>
                    </div>
                    <div class="headingCol customSpace textJustify">
                      <h5>2. How can obtain NXS?</h5>
                      <p>There are three ways to obtain NXS:</p>
                      <ol>
                      <li> NXS can be purchased </li>
                      </ol>
                      <p>The following digital currency exchanges list NXS, which is tradeable between both digital currencies (e.g. BTC, ETH) and fiat currencies (e.g. USD, EUR, GBP).</p>
                      <ul>
                      <li>Binance</li>
                      <li>Bittrex</li>
                      <li>Upbit</li>
                      <li>Coinspot</li>
                      <li>BC Bitcoin (UK Broker)</li>
                      </ul>
                      <p class="textCenter"><a class="btn btn-primary" href="./buy-nxs">Purchase</a></p>
                      <p class="textCenter">
                      </p><ol start="2">
                      <li> NXS can be earned through Staking</li>
                      </ol>
                      <p>Staking is anenergy efficient form of mining that provides security to the Nexus Blockchain.<span>NXS can only be staked inside the official Nexus Wallet when in ‘staking mode’ and with a continuous internet connection (24 hours a day, 7 days a week).<span>This ownership represents a ‘stake’ in the sense of an interest in something.In return, ‘stakers’ are rewarded for providing security to the network, and<span>can earn a ‘stake rate’ of between 0.5% and 3.0% per year on their NXS holdings.<br></p>
                      <p class="textCenter"><b></b></p>
                      <p class="textCenter"><a class="btn btn-primary" href="./stake">Stake</a></p>
                      <p class="textCenter"><b></b></p>
                      <ol start="3">
                      <li> NXS can be earned through Mining </li>
                      </ol>
                      <p>Mining is a process in which a computer program is run by high-performance hardware to process transactions and provide security to the Nexus Blockchain. In return, miners earn newly created NXS. <br> </p>
                      <p class="textCenter"><a class="btn btn-primary" href="./mine">Mine</a></p> 
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="parent3" role="tabpanel" aria-labelledby="parent3-tab">
                    <div class="headingCol customSpace textJustify">
                      <h5>1. Where can I download the Nexus Wallet?</h5>
                      <p>The wallet can be downloaded from the following page</p>
                      <p class="textCenter"><a href="./wallet" class="btn btn-primary">Nexus Wallet</a></p>
                    </div>
                    <div class="headingCol customSpace textJustify">
                      <h5>2. I need help with my Nexus Wallet, who should I contact?</h5>
                      <p>If you have any specific wallet or general enquiries, please join one of our community channels (Slack or Telegram), and post a message asking for help.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="parent4" role="tabpanel" aria-labelledby="parent4-tab">
                    <div class="headingCol customSpace textJustify">
                      <h5>1. What are Nexus’ most notable innovations?</h5>
                      <p class="mb-0"style="font-weight: 600"><b>Seven Layer Software Stack</b></p>
                      <p>To the best of our knowledge, Nexus is the only blockchain that uses a seven-layered software stack that includes a 64-bit register-based contract engine.&nbsp;The architecture powers decentralized applications or ‘Dapps’.&nbsp;Each layer is designated to carry out a specialized process independently of one another, providing additional functionality to the existing Internet stack, the OSI model.&nbsp;Please visit the <a href="./software-stack">Nexus Software Stack</a> page for more details.</p>


                      <p class="mb-0"style="font-weight: 600"><b>Network Overlays</b></p>
                      <p>The Network is responsible for the end-to-end communication between nodes, handling the relaying and receiving of ledger level data. To advance the functionality of the Network Layer, we are the only blockchain to use the LISP Overlay. It provides many necessary features for ease of use, decentralization, security, scalability, and&nbsp;for secure access schemes for hybrid networks. The LISP Overlay provides IPv6 functionality to the network, which allows the user to control&nbsp; their IP address through cryptography.&nbsp;LISP creates better connectivity between peers, as the overlay functions as a layer of ‘elevated trust’ to the internet when combined with the ledger (blockchain) which increases the safety, reliability, and security of online experience.&nbsp;</p>
                      <p class="textCenter"><a class="btn btn-primary" href="./lisp">LISP</a></p>
                      
                      <p class="mb-0"style="font-weight: 600"><b>Lower Level Library</b></p>
                      <p>The Lower Level Library (LLL) is the foundation of Nexus from which everything else is built upon. Written in C++ code, it is modular which means that developers can plug new types of processing into the engine and retain high levels of performance. It includes the following protocols:</p>
                      <ul>
                      <li>LLC (Lower Level Cryptography)</li>
                      <li>LLP (Lower Level Protocol)</li>
                      <li>LLD (Lower Level Database)</li>
                      </ul>
</b></p>

                     <p class="mb-0"style="font-weight: 600"><b>Three Mining Channels</b></p>
                      <p>Two Proof of Work (PoW) channels (Prime and Hashing) and one Proof of Stake (PoS) channel are used to secure the network. Consensus is balanced between all three channels as it is based on collective chain weight,&nbsp; providing a higher resistance to 51% attacks compared to single algorithm blockchains. As the TAO framework is developed, these three forms of consensus will become the three layers of the 3DC.</p>
                     <p class="mb-0"style="font-weight: 600"><b>Trust</b></p>
                      <p>Nexus implements a reputation mechanism called ‘trust’ that records the consistent time that a node contributes to the validation process. Trust decreases three times faster than it accrues and translates into a variable stake reward of between 0.5% to 3% per annum.&nbsp; Trust also benefits the Network layer, where nodes can determine the reputation or reliability of the nodes they are talking to, increasing security against ‘Sybil Attacks’.</p>
                      <p class="textCenter">&nbsp;<a href="./trust" class="btn btn-primary">Trust</a></p>
                      <p class="mb-0"style="font-weight: 600"><b>Signature Chains</b></p>
                      <p>Nexus is accessible through technology we designed called ‘Signature Chains’,&nbsp;a decentralized blockchain account that allows&nbsp;you to login from any computer with a username, password, and pin, without the need for a wallet.dat file or constantly rescanning the database. They are comparable to a personal blockchain that allows decentralized access through a login system, removing the need to store a private key.&nbsp;Sigchains deterministically create a mathematical ‘lock’ that only your login credentials can unlock.</p>
                      <p class="textCenter">&nbsp;<a href="./signature-chains" class="btn btn-primary">Signature Chains</a></p>
                      <p class="mb-0"style="font-weight: 600"><b>Contracts</b></p>
                      <p>Nexus Contracts facilitate the function of intermediaries and are governed solely by the mathematics and code that runs on our 64-bit Register Virtual Machine.</p>
                      <p>From our research, we found an interesting common ground between most projects built on Ethereum: developers do not use the Ethereum Virtual Machine (EVM) for its turing completeness, they abstract away from it, relying only on the EVM for storing data, proving ownership, and to manage accounts or tokens. These types of virtual machines are comparable to placing everything in one space, with the intention of programming all interactions as one would program a universal computer. Though this design is important for modern day computers, systems such as blockchains benefit more from simplicity and elegance in order to scale effectively.&nbsp;</p>
                      <p>Nexus Contracts are the culmination of this research, designed to feel like ‘actual’ real world contracts between people. A basic contract is composed of objects (Registers), users (Sigchains), and actions (Operations). These actions are filtered through the use of ‘programmable conditions’ that define a more complex contract between two or more users. All the layers together form the foundation of the Dapp following the philosophy: “A blockchain is a verification system, not a computation engine.”</p>
                     
                    <p class="mb-0"style="font-weight: 600"><b>API Integration</b></p>
                      <p>The Nexus wallet provides a HTTP powered API. This layer provides an interface that allows developers to gain direct access to blockchain functionality. It is based on a simple verb and noun semantics, and accepts a wide variety of encoding. It is the gateway into the blockchain, that can be used without direct access to the lower levels of the software stack, making development on Nexus as easy as developing a web application.</p>
                      <p>Developers can build Dapps simply in any language using our API, avoiding unnecessary mistakes being made. If a Dapp developer wishes, they can make non-standard API calls with custom conditions to provide additional functionality to the Dapp that is unavailable through the standard API. This can be further augmented with Domain Specific Languages on the lower API layer.&nbsp;We hope this will reduce the learning curve associated with developing contracts, therefore stimulating the growth the developer community. An SDK in Python is currently available.</p>
                      <p></p>
                    <p class="mb-0"style="font-weight: 600"><b>Modules and Applications</b></p>
                      <p>The Nexus Wallet has a modular architecture that provides a platform for developers to build modules and applications that embed directly into it, as extensions to the standard logical and interface layers of the software stack.</p>
                      <p></p>
                    <p class="mb-0"style="font-weight: 600"><b>Hybrid Blockchain</b></p>
                      <p>Hybrid blockchain combines the benefits of a public blockchain, private blockchain, and private database. Benefits of a hybrid blockchain include: scalability, privacy, automation and high levels of security.</p>
                      <p></p>
                     <p class="mb-0"style="font-weight: 600"><b>Three-Dimensional Chain</b></p>
                      <p>The Three Dimensional Chain (3DC) transforms the ledger into a multi-layered processing system, in order to scale securely and maintain a high degree of decentralization. It is a promising candidate for solving the ‘Blockchain Trilemma’, an opinion that only two of the three qualities, Security, Decentralization and Scalability, are achievable concurrently.&nbsp;It chains together cryptographic primitives into a multi-dimensional immutable object, and has three core dimensions: pBFT + reputation channels <b>(X)</b>, immutability or authenticity <b>(Y)</b>, and time <b>(Z)</b>. The upgrades of Amine and Obsidian will add another layer of transaction processing ‘L2’ and ‘L3’, to the base layer ‘L1’. </p>
                      <p class="textCenter">&nbsp;<a href="./3dc" class="btn btn-primary">3DC</a></p>
                    </div>

                    <div class="headingCol customSpace textJustify">
                      <h5>2. Is there a roadmap for Nexus?</h5>
                      <p>Yes, please click <a href="./roadmap">here</a> to view our roadmap – the Nexus TAO Framework.</p>
                    </div>

                    <div class="headingCol customSpace textJustify">
                      <h5>3. What is Tritium, Amine, Obsidian and the TAO?</h5>
                      <p>Each letter represents one of the three upgrades of the TAO Framework which includes the deployment of the Three-Dimensional Chain (3DC). Each consensus upgrade corresponds to the addition of a transaction level lock which will transform transaction processing into a multi-dimensional process. </p>
                      <p>
                      </p><ul>
                      <li><b>Tritium (T)</b> – L1 </li>
                      <li><b>Amine (A)</b> – L2</li>
                      <li><b>Obsidian (O)</b> – L3</li>
                      </ul>
                    </div>

                    <div class="headingCol customSpace textJustify">
                      <h5>4. How does Nexus reach consensus?</h5>
                      <p>Nexus is unique among blockchain technology in that we use three channels to secure the network: two Proof of Work (PoW) channels (Prime and Hashing) and one Proof of Stake (PoS) channel. Consensus is balanced between all three channels as it is based on collective chain weight, providing a higher resistance to 51% attacks compared to single algorithm blockchains. As the TAO framework is developed, these three forms of consensus will become the three layers of the <a href="./3dc">3DC</a>.</p>
                      <p>Nexus can respond to an increased hashrate in the space of one block, while each of the channels scales independently of the other. This stabilizes block time at ~50 seconds and ensures no single channel can monopolize block production. Every 20 minutes, the Nexus protocol automatically creates a checkpoint. This prevents blocks from being created or modified prior to this checkpoint, thus protecting the chain from malicious attempts to introduce an alternate chain.<br></p>
                    </div>

                    <div class="headingCol customSpace textJustify">
                      <h5>5. What is Trust?</h5>  
                      <p>Nexus implements a reputation mechanism called ‘Trust’ that records the consistent time that a node contributes to the validation process. Trust decreases three times faster than it accrues and translates into a variable stake reward of between 0.5% to 3% per annum.&nbsp; Trust also benefits the Network layer, where nodes can determine the reputation or reliability of the nodes they are talking to, increasing security against ‘Sybil Attacks’.</p>
                      <p class="textCenter mt-4 mb-4"><a class="btn btn-primary" href="./trust">Trust</a></p>
                    </div>

                    <div class="headingCol customSpace textJustify">
                      <h5>6. Does Nexus have smart contracts? What is a smart contract? </h5>
                      <p class="mb-0"><b>Does Nexus have smart contracts?</b></p>
                      <p>Yes, the Nexus architecture has a 64-bit register-based Virtual Machine for contract processing. &nbsp;</p>
                      <p class="textCenter mt-4 mb-4"><a class="btn btn-primary" href="./software-stack">Software Stack</a>&nbsp;<a class="btn btn-primary" href="./apps">Decentralized Applications</a></p>
                      <p></p>
                      <p class="mb-0"><b>What is a smart contract?</b></p>
                      <p>Smart Contracts are self-executing. Their design is to enforce the terms and conditions of a contract through programmable logic, reducing the need for third party intermediaries such as brokers and banks. Smart Contracts are an additional layer of processing above the ledger layer, i.e what is known as ‘the blockchain’, and are comparable to small computer programs that hold a state of information. The calculations of the contract are carried out by the processing nodes of a blockchain, which change the state of the information. Given that the calculations or processing is carried out by distributed consensus, the state of a Smart Contract is immutable.</p>
                      <p>Bitcoin was introduced with built-in Smart Contract functionality, which it calls ‘scripts’. Ethereum augmented these capabilities into its ‘Turing Complete Smart Contracts’, through a custom programming language called Solidity, which is then compiled into assembly language that is run on the Ethereum Virtual Machine (EVM).&nbsp;</p>
                      <p>Though very capable, Ethereum has experienced some issues in regards to security, performance, and ease-of-use, largely because of its Turing complete and 256-bit native design. Some notable cases include the $75m DAO hack on Ethereum, and the $286m Parity bug. Vulnerabilities existed due to the large complexity of a Turing complete system, and the resulting difficulty of resolving bugs in a protocol written in immutable code.</p>
                      <p>The complexity of operations that support universal computation or Turing complete designs also limit scalability. A universal system has a higher degree of complexity, and can not therefore compete with technology that is designed for more specialized tasks. An example of this observation would be the comparison between a CPU (Central Processing Unit) with an ASIC (Application Specific Integrated Circuit) in the mining of cryptocurrency. A CPU can’t compete against a SHA256 miner, as its complexity and design is geared to support universal general computation, not specialized computation. A similar conclusion could be drawn when a comparison is made between the system design of Ethereum (universal), and Nexus (specialized).</p>
                      <p></p>
                    </div>
                    <div class="headingCol customSpace textJustify">
                      <h5>7. Why are quantum computers a threat to blockchain technology, and is NXS quantum resistant?</h5>
                      <p>Classical computing uses an array of transistors. These transistors form the heart of your computer (the CPU). Each transistor is capable of being either on or off, and these states are used to represent the numerical values 1 and 0. Binary digits’ (bits) number of states depends on the number of transistors available, according to the formula (2^n) + 1, with <i>n</i> being the number of transistors. Classical computers can only be in one of these states at any one time, so the speed of your computer is limited to how fast it can change state.</p>
                      <p>Quantum computers on the other hand, use what are termed quantum bits or ‘qubits’ which are represented by the quantum spin of electrons or photons. These particles are placed into a state called superposition, allowing the qubit to assume a value of 1 and 0 simultaneously, generally resulting in an exponential increase in computational power over their classical counterparts.</p>
                      <p>With the rise in the power of classical computers and the emergence of quantum computers, public keys are becoming increasingly vulnerable. Most cryptocurrency addresses are created by hashing or obscuring the public key, however, once a user transfers funds from this address, the public key is then revealed on the blockchain. In the realm of classical computing there is little risk with this method. However, a Quantum Computer running Shor’s algorithm could break most public key cryptography in little to no time at all, resulting&nbsp;in funds being stolen.&nbsp;Though most conjectures range from five to ten years before security could begin to break, Nexus has prepared by integrating a number of cryptographic innovations that support increased levels of quantum resistance. </p>
                      <p>We have developed an&nbsp;architecture called <a href="./signature-chains">Signature Chains</a>&nbsp;that enhance the security of existing DSA (Digital Signature Algorithm), by hashing the public key until it is used while changing the key pair with every transaction.&nbsp;We have also integrated the following cryptographic functions: FALCON (a second round contender for the NIST Post-Quantum cryptography competition), Argon2 (winner of the password hashing competition, and a superior alternative to S-Crypt or B-Crypt), and Keccak (winner of the SHA3 competition).</p>
                      <p></p>
                      <p class="textCenter mt-4 mb-4"><a class="btn btn-primary" href="./quantum-resistance">Quantum Resistance</a></p>
                    </div>
                    <div class="headingCol customSpace textJustify">
                      <h5>8. What are the scaling issues facing Blockchain?</h5>  
                      <p> </p>
                      <p>The fundamental issue of scaling comes down to what is termed the ‘Blockchain Trilemma’, an opinion that only two of the three qualities,&nbsp;Security, Decentralization and Scalability, &nbsp;are achievable concurrently.&nbsp;</p>
                      <p>Please read the&nbsp;<a href="./3dc">The Three Dimensional Chain</a>&nbsp;for details on how&nbsp;Nexus is implementing an architecture that is a promising candidate to solving the ‘Blockchain Trilemma’,&nbsp;and&nbsp;<a href="https://hackernoon.com/the-ethereum-blockchain-size-has-exceeded-1tb-and-yes-its-an-issue-2b650b5f4f62">The Ethereum Blockchain is over 1TB</a>&nbsp;for further reading.</p>
                      <p>
                      </p><p></p>
                      <p>&nbsp;</p>
                    </div>
                    <div class="headingCol customSpace textJustify">
                      <h5>9. How does Nexus intend to solve the scaling challenges facing blockchain? What is the 3-Dimensional Blockchain (3DC)?</h5>  
                      <p>Please read the&nbsp;<a href="./3dc">The Three Dimensional Chain</a>&nbsp;for details on how&nbsp;Nexus is implementing an architecture that is a promising candidate for solving the ‘Blockchain Trilemma’.</p>
                    </div>
                    <div class="headingCol customSpace textJustify">
                      <h5>10. What is LISP?</h5>  
                      <p>To advance the functionality of the Network Layer, Nexus uses the LISP (Locator Identifier Separation Protocol) Overlay. It&nbsp;is a protocol designed by a small group of Cisco engineers who are responsible for many of the protocols that power today’s Internet. LISP provides important advancements to the Network Layer, and many necessary features for ease of use, decentralization, security, scalability, and&nbsp;for secure access schemes for hybrid networks.&nbsp;Nexus is the only blockchain which uses LISP.&nbsp;Some of the below features are fully integrated, and others are being deployed through the <a href="./roadmap">TAO Framework</a>.</p>
                      <p class="textCenter mt-4 mb-4"><a class="btn btn-primary" href="./lisp">LISP</a></p>
                      <p></p>
                    </div>
                    <div class="headingCol customSpace textJustify">
                      <h5>11. What is the Nexus 'Hybrid Blockchain’?</h5>  
                      <p>Hybrid by definition means a combination of two different elements, to result in something new. Our Hybrid technology combines properties of public and private systems, to provide enterprise ready blockchain networks. This is achieved by using the public blockchain network to provide higher levels of immutability, access control schemes, and custom validation algorithms.</p>
                      <p>The Nexus Hybrid Blockchain has the following properties and features:&nbsp;</p>
                      <ul>
                      <li>The existing system or application gains the security properties of the hybrid blockchain</li>
                      <li>The private blockchain gains the security parameters of the public blockchain</li>
                      <li>The potential to comply with GDPR, similar to that of a private database or Cloud service</li>
                      <li>Permissioned access schemes supported by LISP (Location-ID Separation Protocol) forming a VPN (Virtual Private Network)</li>
                      <li>Semi-permissioned access scheme to create tiers of data access between users, service providers, and partners to form an ecosystem</li>
                      </ul>
                      <p class="textCenter mt-4 mb-4">&nbsp;</p>
                    </div>
                    <div class="headingCol customSpace textJustify">
                      <h5>12. What are the limitations of the current infrastructure of the Internet?</h5>  
                      <p>Today the Internet relies on both large cables that run across the ocean floor, and geosynchronous satellites. The main drawbacks resulting from the state of the current Internet infrastructure are as follows: </p>
                      <ul>
                      <li>4 billion people are without Internet connection.</li>
                      <li>Unreliability in some areas due to natural disasters.</li>
                      <li>Intercontinental cables and geosynchronous satellites cost millions of dollars to build, deploy and maintain, and are therefore owned and managed by governments and large corporations.</li>
                      <li>‘Command and Control’ operation and telemetry systems rely on centralized organizations for satellite management.</li>
                      <li>ISPs usually have a monopoly over a particular service area, leading to higher service fees and lack of incentive for quality.</li>
                      <li>Increased censorship and the ‘throttling’ of information due to lack of ‘Net Neutrality’.</li>
                      </ul>
                    </div>
                    <div class="headingCol customSpace textJustify">
                      <h5>13. How will Nexus improve the current internet?</h5>  
                      <p>Some organizations have deployed cube satellites into LEO (Lower Earth Orbit), however their models are dependent on centralized ownership and management. One of our longer term visions, is to tokenize satellite ownership, whereby token holders will be entitled to the revenue earned and voting rights, in order to facilitate decentralized ownership and management. When you combine this with affordable antennas and local area mesh networks, we envision the beginning of a new Internet. </p>
                      <p>We welcome all parties whom would like to become a part of this collaborative economy, to connect with us.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade<?php echo $_REQUEST['s']=='parent5'?' active show':'';?>" id="parent5" role="tabpanel" aria-labelledby="parent5-tab">
                    <div class="headingCol customSpace textJustify">
                      <h5>1. Can I stake NXS? </h5>
                      <p>Yes. Staking is anenergy efficient form of mining that provides security to the Nexus Blockchain.NXS can only be staked inside the official Nexus Wallet when in ‘staking mode’ and with a continuous internet connection (24 hours a day, 7 days a week)<span>.This ownership represents a ‘stake’ in the sense of an interest in something.In return, ‘stakers’ are rewarded for providing security to the network, andcan earn a ‘stake rate’ of between 0.5% and 3.0% per year on their NXS holdings.</p>
                      <p class="textCenter"><a class="btn btn-primary" href="./stake"><b>Stake</b></a></p>
                    </div>

                    <div class="headingCol customSpace textJustify">
                      <h5>2. Is there a minimum amount of NXS required to stake?</h5>
                      <p>It is possible to stake with any amount of NXS and earn stake rewards at a rate of 0.5%. However, to grow your stake rate and reach the maximum of 3.0%, your node must find a Proof of Stake block at least every 72 hours. As of the 6th of June 2019 it takes around 10,000 NXS to do this.</p>
                      <p>Similar to other forms of mining, ‘Proof of Stake’ mining has a level of ‘difficulty’. As more people successfully stake on the network, the difficulty of mining Proof of Stake blocks increases. This increases the amount of NXS required to find at least one block every 72 hours and increase the stake rate. While difficulty reduces the frequency of mining stake blocks, a larger balance of NXS in your wallet will increase the frequency. Thus, if you are not finding blocks within the 72 hour requirement, and wish to increase your stake rate, the easiest way to do so is to increase your balance.</p>
                    </div> 

                    <div class="headingCol customSpace textJustify">
                      <h5>3. How do I begin Staking?</h5>
                      <p>Please see the Section of the Wallet guide ‘Enable Staking’.</p>
                      <p class="textCenter"><a class="btn btn-primary" href="./wallet-guide">Wallet Guide</a> </p>
                    </div>

                    <div class="headingCol customSpace textJustify">
                      <h5>4. What is a Genesis transaction ?</h5>
                      <p>Genesis is the process by which a wallet creates a trust key to use for staking.This is the first step for staking a new wallet.When it creates a new trust key, the Genesis transaction will transfer your wallet balance to that key for staking. This has no impact on your wallet balance.After the trust key is created, the wallet will no longer stake Genesis, and will instead stake Trust transactions.</p>
                      <ul>
                        <li>Balance must have a minimum coin age of 3 days (72 hours) before the wallet will begin attempting to create a Genesis transaction.</li>
                        <li>The Genesis transaction takes longer to generate than subsequent Trust transactions. For lower balances, it may stake for multiple weeks before you see this.</li>
                        <li>The Genesis reward pays the base 0.5% annual stake rate based on the average age of the balance in your wallet. Therefore, how long it takes to generate does not penalize you. If it takes twice as long, the reward will be twice as much.</li>
                      </ul>
                    </div>

                    <div class="headingCol customSpace textJustify">
                      <h5>5. I have not received a Trust transaction in a few days, is that normal?</h5>
                      <p>There is no set time period in which it finds a new block.It is not at all unusual to go a period of time without a Trust transaction.</p>
                      <ul>
                        <li>Trust transactions are more frequent if you have a higher balance.</li>
                        <li>Trust transaction frequency increases somewhat as trust weight and block weight increase.</li>
                        <li>Stake reward is based on your stake rate and the time it takes to mine a block. If it takes 2 days to generate a Trust transaction, then your stake reward is twice the size it would be if it only took 1 day. Thus, the frequency of stake rewards does not impact your overall earnings from staking, with the exception of the 72 hour requirement.</li>
                        <li>As long as you find at least one Proof of Stake block which generates a Trust transaction within the 72 hour requirement, your trust and stake rate will increase. If it takes longer than 72 hours, trust and stake rate decay at a rate of 3:1. In other words, you lose 3 days of increase for every 1 day it exceeds 72 hours between blocks.</li>
                        <li>If you turn off your wallet, or otherwise go a long time between stake transactions, it is possible for your trust and stake rate to decay back to the beginning. The staking metrics will display 0.5% stake rate, 1.11% trust weight, and 100% block weight. This means your trust and stake rate have fully decayed to the minimum. These values will not change until you mine a new Proof of Stake block.</li>
                      </ul>
                    </div>

                    <div class="headingCol customSpace textJustify">
                      <h5>6. What are stake rate, trust weight, block weight, and stake weight?</h5>
                      <p>These items affect the size and frequency of staking rewards after you receive your initial Genesis transaction. </p>
                      <p><b>Stake Rate – </b>This value represents your current annual NXS rate of return (%). The rate starts at 0.5%, and can increase to 3.0% after 12 months of consistent staking. The rate increase is non linear, slowing in terms of its increase over time. It takes several weeks of consistent staking to reach 1.0%, and around four months to reach 2.0%. With this rate, you can calculate the average amount of NXS you can expect to receive over time for staking.</p>
                      <p><b>Trust Weight</b> – An indication of how much the network trusts your node. It starts at 1.11% and increases in a non-linear manner like stake rate does. Your level of trust increases your stake weight (below), thus increasing your chances of mining stake blocks and receiving staking rewards. It becomes easier to maintain trust as this value increases.</p>
                      <ul>
                        <li>For new wallets staking Genesis, trust weight is based on coin age with a maximum of 11%.</li>
                        <li>After Genesis, trust weight is a measure of the overall trust score you have accrued. It is displayed as a percentage of the maximum possible trust score.</li>
                        <li>The time investment needed to build trust increases network security.</li>
                        <li>Trust score takes 84 days of successful staking to reach 50% trust weight, and 345 days to reach 100%.</li>
                      </ul>
                      <p><b>Block Weight</b> – Upon receipt of a Genesis transaction, this value will begin increasing slowly, reaching 100% in 3 days time. Every time you receive a staking transaction, the block weight resets. </p>
                      <ul>
                        <li>Your wallet must mine a stake block and generate a transaction before it reaches 100% for trust weight and stake rate to keep increasing.</li>
                        <li>If your block weight reaches 100%, it will stay at 100% and both your trust weight and stake rate will begin to decay.</li>
                      </ul>
                      <p class="mt-2 mb-0"><b>What happens when my Block Weight reaches 100%?</b></p>
                      <ul>
                        <li>Trust weight and stake rate will begin to decay.</li>
                        <li>Without a transaction they will eventually decay back to the start.</li>
                        <li>Generating a new Trust transaction resets block weight, and trust weight/ stake rate continue increasing from their current values.</li>
                        <li>Trust decays at a 3:1 rate to which it was gained. For a new key, it takes 1 day for 3 days of trust to decay. An established key holds onto trust much longer. A 3-month key takes a full month to decay completely, for example.</li>
                        <li>Establishing a new trust key is not immediate, by design. The network does not give away trust for free. You may see staking values decay back to the start multiple times before it manages to generate transactions frequently enough to keep going.</li>
                        <li>If it decays back to the start, the wallet will display minimal trust weight of 1.11% with stake rate 0.5% and block weight 100% until it generates a transaction. This is normal. It is not stuck.</li>
                      </ul>
                      <p><b>Stake Weight</b> – The higher your stake weight, the greater your chance of receiving a transaction. The exact value is derived from your trust weight and block weight</p>
                      <ul>
                        <li>Stake weight is a derivative value calculated from trust weight and block weight. It indicates their combined impact on chances to generate a staking transaction.</li>
                        <li>The value will change as trust weight and block weight change.</li>
                        <li>It is for display only as a metric, and is not directly used. Trust weight and block weight values are used.</li>
                      </ul>
                      <p class="mt-2 mb-0"><b>What affects block production in staking?</b></p>
                      <ul>
                        <li>For new wallets staking Genesis, total balance and trust weight calculated from coin age.</li>
                        <li>For wallets after Genesis, total balance, block weight, and trust weight calculated from trust score.</li>
                      </ul>
                    </div> 

                  </div>
                  <div class="customTab tab-pane fade" id="parent6" role="tabpanel" aria-labelledby="parent6-tab">
                    <div class="headingCol customSpace textJustify">
                      <h5>1. Can I mine NXS?</h5>
                      <p>Yes, two Proof of Work (PoW) channels (Prime and Hashing) and one Proof of Stake (PoS) channel are used to secure the network. Consensus is balanced between all three channels, making the network more resistant to 51% attacks.The prime algorithm is optimized for use by your computer’s central processing unit (CPU), while the hashing algorithm runs optimally on the graphics processing unit (GPU).</p>
                      <p class="mt-2 mb-0"><strong>Prime Mining Channel</strong></p>
                      <p>This mining channel looks for a special prime cluster of a set length. This type of calculation is resistant to ASIC mining, allowing for greater decentralization. This is most often performed using the CPU.</p>
                      <p class="mt-2 mb-0"><strong>Hashing Channel</strong></p>
                      <p>This channel utilizes the more traditional method of hashing. This process adds a random nonce, hashes the data, and compares the resultant hash against a predetermined format set by the difficulty. This is most often performed using a GPU.</p>
                      <p>Please learn more on the following webpage:</p>
                      <p class="textCenter"><a class="btn btn-primary" href="./mine">Mine</a></p>
                    </div>

                    <div class="headingCol customSpace textJustify">
                      <h5>2. How do I mine NXS?</h5>
                      <p>As outlined above, there are two types of mining and 1 proof of stake. Each type of mining uses a different component of your computer to find blocks, the CPU or the GPU. Nexus supports CPU and GPU mining on Windows and Linux. There are also third-party macOS builds available.</p>
                      <p>Please follow the instructions below for the relevant type of miner.</p>
                      <p class="mb-0"><strong>Prime Mining:</strong></p>
                      <p>Almost every CPU is capable of mining blocks on this channel. The most effective method of mining is to join a mining pool and receive a share of the rewards based on the contribution you make. To create your own mining facility, you need the CPU mining software, and a NXS address. This address cannot be on an exchange. You create an address when you install your Nexus wallet. You can find the related steps under How Do I Install the Nexus Wallet?</p>
                      <p>Please download the relevant miner from the <a href="./mine">Mine</a> page. Note that there are two different miner builds available: the prime solo miner and the prime pool miner. This guide will walk you through installing the pool miner only.</p>
                      <p><strong>Step 1</strong> – Extract the archive file to a folder.</p>
                      <p><strong>Step 2</strong> – Open the <code>miner.conf</code> file. You can use the default host and port, but these may be changed to a pool of your choice. You will need to change the value of nxs_address to the address found in your wallet. <code>Sieve_threads</code> is the number of CPU threads you want to use to find primes. <code>Ptest_threads</code> is the number of CPU threads you want to test the primes found by the sieve. As a general rule, the number of threads used for the sieve should be 75% of the threads used for testing.</p>
                      <p>It is also recommended to add the following line to the options found in the .conf file:</p>
                      <p><code>"experimental" : "true"</code></p>
                      <p>This option enables the miner to use an improved sieve algorithm which will enable your miner to find primes at a faster rate.</p>
                      <p><strong>Step 3</strong> – Run the nexus_cpuminer.exe file. For more information on pools and settings, please see the <a href="./mine">Mine</a> page.</p>
                      <p class="mb-0"><strong>Hashing:</strong></p>
                      <p>The GPU is a dedicated processing unit housed on-board your graphics card. The GPU is able to perform certain tasks extremely well, unlike your CPU, which is designed for parallel processing. Nexus supports both AMD and Nvidia GPU mining, and works best on the newer models. Officially, Nexus does not support GPU pool mining, but there are 3rd party miners with this capability.</p>
                      <p>The latest software for the Nvidia miner can be found <a href="../miners/SKMiner-v.0.1.3_optimized_by_Mumus.rar">here</a>. The latest software for the AMD miner can be found <a href="https://github.com/HappinessInAutism/skminer-amd/releases/tag/1.1">here</a>. The AMD miner is a third party miner. This guide will walk you through the Nvidia miner.</p>
                      <p><strong>Step 1</strong> – Close your wallet. Navigate to <code>%appdata%\Nexus</code> (<code>~/Library/Application Support/Nexus</code> on macOS) and open the <code>nexus.conf</code> file. Depending on your wallet, you may or may not have this file. If not, please create a new txt file and save it as <code>nexus.conf</code></p>
                      <p>You will need to add the following lines before restarting your wallet:</p>
                      <ul>
                      <li><code>llpallowip=127.0.0.1:9325</code></li>
                      <li><code>mining=1</code></li>
                      </ul>
                      <p><strong>Step 2</strong> – Extract the files into a new folder.</p>
                      <p><strong>Step 3</strong> – Run the <code>nexus.bat</code> file. This will run the miner and deposit any rewards for mining a block into the account on your wallet.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="parent7" role="tabpanel" aria-labelledby="parent7-tab">
                    <div class="headingCol customSpace textJustify">
                      <h5>1. What are the ‘responsible values’ that Nexus supports?</h5>
                      <p>The Nexus community is the foundation for the strength, diversity and resilience of Nexus. Together, we provide ideas and resources that are crucial to the health of the network. Whether you trade, mine or stake NXS, develop applications to sell or share, or exchange ideas in one of our community channels, you are a part of the community. We are a diverse network of individuals who advocate the following principles:</p>
                      <p class="mb-0"><b>Responsibility &amp; Independence</b></p>
                      <p>Decentralized Systems have the ability to provide choices to become more independent from existing systems, which are often centralized and reliant on outdated processes.</p>
                      <p class="mb-0"><b>Decentralization &amp; Meritocracy</b></p>
                      <p>Decentralization of power and resources is fundamental to building the foundations of a meritocracy, where people are rewarded proportional to their merit.</p>
                      <p class="mb-0"><b>Information &amp; Exchange</b></p>
                      <p>The technology of Nexus is developed for people to have free access to information and exchange, creating the possibility for more novelty.</p>
                      <p class="mb-0"><b>Honesty &amp; Transparency</b></p>
                      <p>Honesty nurtures trust between people, allowing us to be more effective as a group, whilst transparency cultivates integrity.</p>
                      <p class="mb-0"><b>Community &amp; Collaboration</b></p>
                      <p>Respecting ourselves and others encourages greater cooperation, collaboration and growth, to build stronger relationships and therefore a stronger community.</p>
                      <p>The more people that contribute to a decentralized system, the more secure, resilient and robust it becomes. Each Nexus Wallet is a node, providing security and redundancy to the network, operated by individuals who are a part of the greater Nexus ecosystem.</p>
                      <p>To learn more about Nexus and to meet our community, please join one of our community channels, which can be found in the footer. Within the channels you will find many helpful and inspirational people.</p>
                    </div>

                    <div class="headingCol customSpace textJustify">
                      <h5>2. How can I join the community? (Community Channels)</h5>
                      <p>To learn more about Nexus and to meet our community, please join one of our community channels, which can be found in the footer.</p>
                    </div>

                    <div class="headingCol customSpace textJustify">
                      <h5>3. What are Nexus Working Groups?</h5>
                      <p>Nexus has adopted the <i>Internet Engineering Task Force’s (IETF)</i> time-tested open process through Working Groups. Our Working Group model connects a decentralized collection of people who work together to set standards or develop new components of our technology. The groups are open to anyone who would like to contribute to the research and development of Nexus.</p>
                      <p>Here, you can learn about the layers of the Nexus architecture that matter most to you, and design functions and features with our developers. A consistent connection between developers and users ensures the standards of the Nexus architecture are defined through consensus.</p>
                      <p class="mb-0"><b>The current Nexus Working Groups are:</b></p>
                      <ul>
                        <li>Designs-wg: Set higher level standards for the Nexus Architecture. (Registers, Objects, API)</li>
                        <li>Use cases-wg: Discuss functionality for different sectors</li>
                        <li>Economics-wg: Discuss topics that affect the entire economic model</li>
                        <li>Communications-wg: Write content for the website, WIKI, and social media</li>
                        <li>Website-wg: Develop the standards and design of the Nexus Website</li>
                        <li>Graphics-wg: Develop graphics to support the Nexus Brand</li>
                        <li>Social-wg: Discuss and design Decentralized Voting Structures</li>
                        <li>Translations-wg: Translate content for the website</li>
                      </ul>
                      <p>Please join one of our community channels to get involved in Nexus working groups.<br></p>
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
