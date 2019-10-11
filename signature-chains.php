<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg signature_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>Signature Chains</h2>
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
                        <a class="nav-link active overview" id="over-tab" data-toggle="tab" href="#over" role="tab" aria-controls="over" aria-selected="true">Signature Chains</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="parent1-tab" data-toggle="tab" href="#parent1" role="tab" aria-controls="parent1" aria-selected="false">Speed & Scalability</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub1-tab" data-toggle="tab" href="#sub1" role="tab" aria-controls="sub1" aria-selected="false">UTxO</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub2-tab" data-toggle="tab" href="#sub2" role="tab" aria-controls="sub2" aria-selected="false">Pruning</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="parent2-tab" data-toggle="tab" href="#parent2" role="tab" aria-controls="parent2" aria-selected="false">Secure Digital Identity</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="parent3-tab" data-toggle="tab" href="#parent3" role="tab" aria-controls="parent3" aria-selected="false">Quantum Resistance</a>
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
                      <p>Nexus is accessible through technology we built called ‘Signature Chains’, 
                        a decentralized blockchain account that allows you to login from any computer with a username, password, 
                        and pin, without the need for a wallet.dat file or constantly rescanning the database. 
                        They are comparable to a personal blockchain that allows decentralized access through a login system, removing the need to store a private key.
                        Sigchains deterministically create a mathematical ‘lock’ that only your login credentials can unlock.</p>
                      <p>Sigchains provide the foundation for features such as digital identity and managing assets, whilst maintaining pseudo-anonymity 
                        for privacy. In our opinion, they are a very important step for mainstream adoption across all blockchain use cases. 
                        Contrarily, legacy blockchain designs rely on the safe keeping of the private key. This renders these systems susceptible to human error, 
                        boding for the need for complex hardware designed specifically to store private keys securely. 
                        Though these devices are a step towards user friendliness, they are still at risk of being lost or stolen, 
                        and therefore are not a reliable replacement for authorization systems.</p>
                      <p>Fundamentally, a Sigchain decouples the private key from the user account, therefore one is unbound by the possession or security 
                        of a single private key. The private key becomes obsolete when the next transaction is generated, producing higher levels of security 
                        compared to the continual reuse of a private key, as is the case with other blockchain technologies.
                        Additional benefits are the efficiency gained by reducing the requirement of storing a large amount of signatures on disk, and 
                        the ability to use a variety of key types such as FALCON for increased 
                        <a href="./quantum-resistance">Quantum Resistance</a>.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="parent1" role="tabpanel" aria-labelledby="parent1-tab">
                    <div class="titleCol">
                      <h3>Speed & Scalability</h3>
                      <p>Sigchains use an account based model that replaces the clunky UTxO (Unspent Transaction Output) architecture that Bitcoin introduced. 
                        Sigchains contain all user data on a unique chain, and provide higher levels of scalability, as only one signature is required to be 
                        verified per transaction.</p>
                      <p>Along with Sigchains, Nexus transactions are decoupled from the block, which means that only a single hash or ‘proof’ per transaction 
                        is required in the block level data, rather than the entire transaction itself. This results in the accommodation of approximately 31,728 
                        transactions per 2 MB block. Together, these innovations produce lightweight blocks and efficient transaction processing, 
                        without the requirement of off chain (Layer 2) scaling solutions.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub1" role="tabpanel" aria-labelledby="sub1-tab">
                    <div class="titleCol">
                      <h3>UTxO</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>UTxO is an architecture envisioned by Satoshi Nakamoto in the Bitcoin whitepaper under Section 9, ‘Splitting and Combining Value’ [<a href="https://bitcoin.org/bitcoin.pdf" target="">Bitcoin Whitepaper</a>]. In this architecture, outputs contain a given value, such as 0.5 BTC, which then become inputs to another. The following diagram illustrates this model:</p>
                      <p><a href="images/signature-chains/figure4.png"><img src="images/signature-chains/figure4.png" width="300" height="162" alt="" style="display: block; margin-left: auto; margin-right: auto;"></a></p>
                      <p class="textCenter">Source: <a href="https://steemit.com/eos/@iang/the-message-is-the-medium">Steemit</a></p>
                      <p>These outputs are then ‘split and combined’ into more outputs in the next transaction as shown in the example in the diagram above: 50 BTC is split into two outputs of 0.5 BTC and 49.5 BTC, respectively. Though this architecture provides the benefit of privacy, it does not scale very well due to the need for many exhaustive cryptographic operations to move even a small amount of coins. This is because the minimum transaction amount per input is 0.00000001, which could result in the requirement for thousands of inputs, each of which would require a signature verification, increasing the size of the transaction. A notable example of this is:</p>
                      <p><a href="https://www.blockchain.com/btc/tx/bb41a757f405890fb0f5856228e23b715702d714d59bf2b1feb70d8b2b4e3e08">The largest Bitcoin transaction ever made</a></p>
                      <p>As you can see from the above link, this transaction that consumed an entire Bitcoin block, was only moving 0.05569 BTC. If this were a common occurrence, Bitcoin would only be able to process 1 transaction every ten minutes. This is not the only example of the limitations of the UTxO model, which not only creates inefficiency, but serves as a unique attack vector to any chain that employs it.</p>
                      <p><a href="https://www.reddit.com/r/litecoin/comments/9ncqse/what_should_we_do_about_the_50_of_litecoins_utxo/">50% of Litecoin’s UTXO is unspendable</a></p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub2" role="tabpanel" aria-labelledby="sub2-tab">
                    <div class="titleCol">
                      <h3>Pruning</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>A Signature Chain is named as such due to it being a chain of signatures and public keys, all linked together through the next hash and previous transaction hash. Since this is a consistent chain of events that cannot be altered, it provides additional scaling benefits by requiring only two signatures to verify an entire sigchain: the first and last transaction. This means that all the signatures in between can be discarded along with the public keys, saving a large amount of storage space without sacrificing security. This is because a Sigchain is an immutable chain of transactions A valid signature at the head transaction of the chain proves that the entire chain is valid, as it locks the entire sigchain from modification.</p>
                      <p>Usually, this signature is the largest part of the transaction, therefore removing the need to save it on disk improves the scalability of the Nexus Blockchain. In Bitcoin, the average input size is 186 bytes, with the signature consuming 146 of these bytes, resulting in 77% of the Bitcion blockchain being comprised of signatures stored on disk. As you can see, signature chaining has a huge impact on combating blockchain bloat.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="parent2" role="tabpanel" aria-labelledby="parent2-tab">
                    <div class="titleCol">
                      <h3>Secure Digital Identity</h3>
                      <p>An End Point Identifier (EID) is similar to an Internet Protocol (IP) address, and is a form of identity on the network layer. Through the use of LISP (<a href="https://nexusearth.com/lisp/">Location Identifier Separation Protocol</a>), the EID becomes the identifier, while the RLOC (Routing Locator) becomes the location. This decoupling enables a device to freely roam between networks as only the RLOC changes, not the EID. This is contrary to how the Internet currently functions, where both the identifier and location are bound together in a single IP address.</p>
                      <p>This is a critical security feature, as an EID can be linked to a Sigchain which makes the network identifier cryptographically associated with the Ledger. EIDs, Sigchains and the use of reputation combined create an elevated layer of trust to the Internet, as one can verify with certainty that the other party is who they claim to be without the need for third party services like Certificate Authorities (CA). A reduction in fraud, hacking, fake accounts, and identity theft for both consumers and service providers is envisioned as a result of this technology.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="parent3" role="tabpanel" aria-labelledby="parent3-tab">
                    <div class="titleCol">
                      <h3>Quantum Resistance</h3>
                      <p>Sigchains increase resistance to attack by both classical and theoretical quantum computers. This is achieved by decoupling the identity of the account from the cryptography associated with it, similar to how LISP decouples the identifier and the location. This enables the architectural advantage of changing the key pair that is used to access the Sigchain with every transaction, and hiding the public key until it is used. When an individual creates a transaction on the network, they claim ownership by revealing the public key of the NextHash (the hash of the public key) by producing a valid signature from the <b>one time use private key</b>. This significantly reduces the time window for an attack to take place, naturally increasing the required computing power to successfully hijack a signature chain with MITM (Man in the Middle) attacks. Please see <a href="https://nexusearth.com/quantum-resistance/">Quantum Resistance</a> for more information.</p>
                      <p>Since the account identity is decoupled from the cryptography, a Sigchain supports multiple signature schemes such as FALCON or Brainpool. Since FALCON is still under study and assessment by NIST (National Institute of Standards and Technology), it is generally recommended that it is only used in production in what is termed a ‘hybrid signature scheme’, which means that you don’t rely solely on the security of FALCON for the security of the system. In our implementation, a Sigchain acts like a hybrid signature scheme, making use of FALCON safe for our production environment.</p>
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
