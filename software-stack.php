<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg stack_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>Software Stack</h2>
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
                        <a class="nav-link active overview" id="over-tab" data-toggle="tab" href="#over" role="tab" aria-controls="over" aria-selected="true">Software Stack</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub1-tab" data-toggle="tab" href="#sub1" role="tab" aria-controls="sub1" aria-selected="false">Interface</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub2-tab" data-toggle="tab" href="#sub2" role="tab" aria-controls="sub2" aria-selected="false">Logical</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub3-tab" data-toggle="tab" href="#sub3" role="tab" aria-controls="sub3" aria-selected="false">API</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub4-tab" data-toggle="tab" href="#sub4" role="tab" aria-controls="sub4" aria-selected="false">Operation</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub5-tab" data-toggle="tab" href="#sub5" role="tab" aria-controls="sub5" aria-selected="false">Register</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub6-tab" data-toggle="tab" href="#sub6" role="tab" aria-controls="sub6" aria-selected="false">Ledger</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub7-tab" data-toggle="tab" href="#sub7" role="tab" aria-controls="sub7" aria-selected="false">Network</a>
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
                    <div class="titleCol">
                      <p>The Nexus architecture is designed as a seven-layered software stack that includes a 64-bit register-based contract engine. Each layer is designated to carry out a specialized process independently of one another, providing additional functionality to the existing Internet stack, the OSI model.</p>
                      <p><a href="images/chain-1.jpg"><img src="images/chain-1.jpg" alt="" style="display: block; margin: auto"></a></p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub1" role="tabpanel" aria-labelledby="sub1-tab">
                    <div class="titleCol">
                      <h3>Interface</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>The interface is the user space, i.e the buttons used to interact with the Dapp. This layer can be accompanied by various technologies from AR/VR to mobile interfaces. Our official Interface Layer, provides a platform for developers to build modules and applications that embed directly into the Nexus Wallet.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub2" role="tabpanel" aria-labelledby="sub2-tab">
                    <div class="titleCol">
                      <h3>Logical</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>This is the first layer of the developer application space which forms the logic of most applications. This layer interacts directly with the API below it, and provides functionality that does not depend on direct access to the blockchain. An example of this could be simple requests such as: ‘Send a message to this user if another user completed this event.’ We postulate that in the future this layer will also be driven by AI systems.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub3" role="tabpanel" aria-labelledby="sub3-tab">
                    <div class="titleCol">
                      <h3>API</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>This layer provides an interface that allows developers to gain direct access to blockchain functionality. It is based on a simple verb and noun semantics, and accepts a wide variety of encoding. It is the gateway into the blockchain, that can be used without direct access to the lower levels of the software stack, making development on Nexus as easy as developing a web application.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade<?php echo $_REQUEST['s']=='sub4'?' active show':'';?>" id="sub4" role="tabpanel" aria-labelledby="sub4-tab">
                    <div class="titleCol">
                      <h3>Operation</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>Operations are instructions or actions that give registers context, and define more complex contract logic. A contract is an object containing: a register pre-state (the register that is being operated on that was passed upwards from the Register Layer), a primitive operation (only one primitive operation per contract), and a set of conditions (any amount of conditional operations).</p>
                    </div>
                    <div class="heading mt-4">
                      <h5>Primitive Operations</h5>  
                      <p>The current iteration of the Operations Layer contains 16 primitive operations, and 54 conditional operations and types. The primitive operations can be best described as the actions taking place on the register such as: WRITE, DEBIT, TRANSFER, APPEND, etc. These actions themselves cause the register to change its state in some way or form, including its movement from one signature chain to another.</p>
                    </div>
                    <div class="heading mt-4">
                      <h5>Conditional Contracts</h5>
                      <p>Conditional Contracts are an agreement between participating parties, outlining a set of requirements that must be met for a transaction to complete. They are the building blocks that allow users to engage with one another, such as contract expiration, or the exchanging of items. More advanced forms of non-custodial escrow or arbitration are also possible. Conditional statements have no limit to their complexity, being capable of handling groups of groups of conditions that together evaluate to either true or false. In the case the conditions return true, this allows the recipient of the transaction to claim their funds or object (depending on if this was a TRANSFER or DEBIT). In the case that the recipient is unable to satisfy the conditions, after a period of time set by the sender, the transaction will be redeemable.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade<?php echo $_REQUEST['s']=='sub5'?' active show':'';?>" id="sub5" role="tabpanel" aria-labelledby="sub5-tab">
                    <div class="titleCol">
                      <h3>Register</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>Registers are a data storage system that maintain an immutable record and history, including current and previous states, therefore they can be used to record the state of applications. The ownership of a register can be transferred between Sigchains, and thus perform as Assets, Tokens or simple objects, such as a crypto kitty. A register can also be owned by a token, creating partial ownership of the asset it represents. The Register Layer consists of three main components: Object Registers, State Registers, and a 64-bit Register Based Virtual Machine for condition execution.</p>
                    </div>
                    <div class="heading mt-4">
                      <h5>Object Registers</h5>
                      <p>Object Registers are programmable type-safe objects recorded with a predetermined structure which describes an asset, token, or programmer’s object. They can be used for a wide variety of purposes including company shares, digital assets, certificates, data files, and accounts. Data fields inside the object carry specifiers that define whether the field can be mutable, making the object itself able to enforce certain fields to have read-only or write access.<br>An example of this can be seen below:</p>
                      <p><a style="text-decoration:underline" href="">Photographic Asset</a><br>
                          Image ID: 108629084398374<br>
                          License Type: Enhanced <br>
                          Image Title: Arizona Sunset 
                      </p>
                      <p>The above example displays a meta-data format for a photographic asset that is stored in a programmable object register. This format can be augmented with mutable and immutable type specifiers, meaning that a field such as ‘Image Title’ in the example above, could be mutable and able to be modified, while the other fields would remain immutable.</p>
                    </div>
                    <div class="heading mt-4">
                      <h5>State Register</h5>
                      <p>A state register is a simple register that can store data in any sequence without an enforced format by the Ledger. These would be used by a Dapp to record an immutable state. State Registers have two forms: RAW and APPEND. A RAW register is bound by its initial size, and can be written to at any time, while an APPEND register can only have data appended to its state, keeping the original contents immutable.</p>
                    </div>
                    <div class="heading mt-4">
                      <h5>Virtual Machine</h5>
                      <p>Conditional Statements are processed on top of the Virtual Machine which uses 64-bit registers to maintain the state of temporary condition variables as they are processed. The VM increases the efficiency of conditional statements, as it doesn’t carry the overhead of ‘pushing and popping’ from the stack as do other VMs. This part of the Register Layer is responsible for the incredible speed of conditional execution, requiring only 50 nanoseconds on average per instruction.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub6" role="tabpanel" aria-labelledby="sub6-tab">
                    <div class="titleCol">
                      <h3>Ledger</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>The Ledger is responsible for ensuring all data is formed under consensus and is immutable by nature. It manages ownership between parties using cryptographic primitives such as hashing, digital signatures, and consensus protocols. It is composed of signature chains for user-level states, and the proposed architecture of the Three-Dimensional Chain (3DC) for the global state, the latter of which is under development through the TAO framework.</p>
                    </div>
                    <div class="heading mt-4">
                      <h5>Signature Chains</h5>
                      <p>A <a href="./signature-chains">Signature Chain</a> is a decentralized blockchain account that allows you to login from any computer with a username, password, and pin, without the need for wallet.dat files or constantly rescanning the database. They are comparable to a personal blockchain that allows decentralized access through the login system, removing the need to store private keys. Sigchains deterministically create a mathematical 'lock' that only your login credentials can unlock. </p>
                      <p>Fundamentally, a Signature Chain decouples the private key from the account, therefore one is not bound by possession or security of this single private key. The private key becomes obsolete when the next transaction is generated, producing higher levels of security compared to the continual reuse of a private key, as is the case with other blockchain technologies. Other benefits come from the efficiency gained by reducing the requirement of storing a large amount of signatures on disk, and the ability to use a variety of key types such as FALCON for increased <a href="">Quantum Resistance</a>.</p>
                    </div>
                    <div class="heading mt-4">
                      <h5>Consensus</h5>
                      <p>Two Proof of Work (PoW) channels (Prime and Hashing) and one Proof of Stake (PoS) channel are used to secure the network. Consensus is balanced between all three channels as it is based on collective chain weight, providing a higher resistance to 51% attacks compared to single algorithm blockchains. As the TAO framework is developed, these three forms of consensus will become the three layers of the <a href="">3DC</a>.</p>
                    </div>
                    <div class="heading mt-4">
                      <h5>Reputation</h5>
                      <p>Nexus implements a reputation mechanism called ‘Trust’ that records the consistent time that a node contributes to the validation process. Trust decreases three times faster than it accrues and translates into a variable stake reward of between 0.5% to 3% per annum. Trust also benefits the Network Layer, where nodes can determine the reputation or reliability of the nodes they are talking to, increasing security against Sybil Attacks.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub7" role="tabpanel" aria-labelledby="sub7-tab">
                    <div class="titleCol">
                      <h3>Network</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>The Network is responsible for the end-to-end communication between nodes, handling the relaying and receiving of ledger level data. Nexus augments this layer by using ‘overlays’ which provide IPv6 functionality to the network, which allows the user to control their IP address through cryptography.</p>
                    </div>
                    <div class="heading mt-4">
                      <h5>Overlays</h5>
                      <p>Our overlay of choice is LISP (Location Indicator Separation Protocol). This creates better connectivity between peers as the overlay functions as a layer of ‘elevated trust’ to the internet when combined with the ledger (blockchain), which increases the safety, reliability, and security of the online experience.</p>
                    </div>
                    <div class="heading mt-4">
                      <h5>IPv6</h5>
                      <p>The LISP overlay combines IPv6 Crypto EIDs with Signature Chains, enabling a fully encrypted peer-to-peer communication system and identification of the cryptographic keys through the ledger.</p>
                    </div>
                    <div class="heading mt-4">
                      <h5>Multicast</h5>
                      <p>Through the Amine and Obsidian upgrades, we will deploy multicast links for message propagation which will give us higher degrees of scalability (constant time) in comparison to existing blockchain models (exponential time). The significance of constant time routing is that messages relay from edge to edge of the network much faster, even with a large number of connected nodes.</p>
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
