<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg quantum_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>Quantum Resistance</h2>
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
                        <a class="nav-link active overview" id="over-tab" data-toggle="tab" href="#over" role="tab" aria-controls="over" aria-selected="true">Quantum Resistance</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub1-tab" data-toggle="tab" href="#sub1" role="tab" aria-controls="sub1" aria-selected="false">Classic vs Quantum Computer</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub2-tab" data-toggle="tab" href="#sub2" role="tab" aria-controls="sub2" aria-selected="false">Signature Chains</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub3-tab" data-toggle="tab" href="#sub3" role="tab" aria-controls="sub3" aria-selected="false">Key Management</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub4-tab" data-toggle="tab" href="#sub4" role="tab" aria-controls="sub4" aria-selected="false">Falcon</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub5-tab" data-toggle="tab" href="#sub5" role="tab" aria-controls="sub5" aria-selected="false">Argon2</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub6-tab" data-toggle="tab" href="#sub6" role="tab" aria-controls="sub6" aria-selected="false">Keccak</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub7-tab" data-toggle="tab" href="#sub7" role="tab" aria-controls="sub7" aria-selected="false">Cryptographic Redundancy</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub8-tab" data-toggle="tab" href="#sub8" role="tab" aria-controls="sub8" aria-selected="false">Inherited Security Flaws</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub9-tab" data-toggle="tab" href="#sub9" role="tab" aria-controls="sub9" aria-selected="false">Security Considerations</a>
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
                      <p>With the rise in the power of classical computers and the emergence of quantum computers, public keys are becoming increasingly vulnerable. Most cryptocurrency addresses are created by hashing or obscuring the public key. Though, when a user makes a transaction the public key is revealed on the blockchain. In the realm of classical computing there is little risk with this method. However, a quantum computer running Shor’s algorithm could break most public key cryptography in little to no time, resulting in funds being stolen. Though most conjectures range from five to ten years before security could begin to break, Nexus has prepared by integrating a number of cryptographic innovations that support increased levels of quantum resistance.</p>
                      <p>We have developed an architecture called Signature Chains that enhance the security of existing DSA (Digital Signature Algorithm), by hashing the public key until it is used while changing the key pair with every transaction. We have also integrated the following cryptographic functions: FALCON (a second round contender for the NIST Post-Quantum cryptography competition), Argon2 (winner of the password hashing competition, and a superior alternative to S-Crypt or B-Crypt), and Keccak (winner of the SHA3 competition).</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub1" role="tabpanel" aria-labelledby="sub1-tab">
                    <div class="titleCol headingCol">
                      <h3>Classic vs Quantum Computer</h3>
                      <p>Classical computing uses an array of transistors. These transistors form the heart of your computer (the CPU). Each transistor is capable of being either on or off, and these states are used to represent the numerical values 1 and 0. Binary digits’ (bits) number of states depends on the number of transistors available, according to the formula (2^n) + 1, with n being the number of transistors. Classical computers can only be in one of these states at any one time, so the speed of your computer is limited to how fast it can change state.</p>
                      <p>Quantum computers on the other hand, use what are termed quantum bits or ‘qubits’ which are represented by the quantum spin of electrons or photons. These particles are placed into a state called superposition, allowing the qubit to assume a value of 1 and 0 simultaneously, generally resulting in an exponential increase in computational power over their classical counterparts.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub2" role="tabpanel" aria-labelledby="sub2-tab">
                    <div class="titleCol headingCol">
                      <h3>Signature Chains</h3>
                      <p>Nexus is accessible through technology we designed called Signature Chains, a decentralized blockchain account that allows you to login from any computer with a username, password, and pin. They are comparable to a personal blockchain that allows decentralized access through a login system, removing the need to store a private key. Sigchains deterministically create a mathematical ‘lock’ that only your login credentials can unlock.</p>
                      <p>Fundamentally, a Sigchain decouples the private key from the user account, therefore one is unbound by the possession or security of a single private key. When one creates a transaction on the network, they claim ownership by revealing the public key of the NextHash (the hash of your public key) and produce a signature from the one time use private key. The private key becomes obsolete when the next transaction is generated, producing higher levels of security compared to the continual reuse of a private key, as is the case with other blockchain technologies. The future use of biometric username generation will strengthen your credentials and Signature Chain access.</p>
                      <p class="textCenter"><a class="btn btn-primary" href="./signature-chains">Signature Chains</a></p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub3" role="tabpanel" aria-labelledby="sub3-tab">
                    <div class="titleCol headingCol">
                      <h3>Key Management</h3>
                      <p>Signature Chains decouple keys from the user account, meaning that at any time, you are able to change the type of key that your account uses. This gives users the option to use Post-Quantum cryptography such as FALCON, or the option to use more time-tested Brainpool curves. If any flaws were to be found in either of these cryptographic schemes, your account would be safe using a signature chain. These safeguards are important in order to protect systems over time, as ongoing crypto-analysis are always finding vulnerabilities and attack vectors that will begin to break once secure cryptographic standards (eg. SHA1).</p>
                      <p class="textCenter"><a href="https://bitcoinwhoswho.com/blog/2017/09/13/are-your-bitcoins-safe-large-bitcoin-collider-finds-another-private-key/">Large Bitcoin Collider Finds Another Bitcoin Private Key</a></p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub4" role="tabpanel" aria-labelledby="sub4-tab">
                    <div class="titleCol headingCol">
                      <h3>Falcon</h3>
                      <p>Complemented with this is the use of FALCON (Fast-Fourier Lattice-Based Compact-Signatures Over NTRU) as an optional setting, that uses Lattice Based cryptography to ensure the security of accounts in the post-quantum age. The computational requirements are at least 1/40th of Elliptic Curve Digital Signature Algorithm (ECDSA), which means you can verify signatures much faster than ECDSA. However, the downside is that it requires about 1.5kb for both the public key and signature. Though Falcon is based on aged and proven mathematics (NTRU lattices), it has not undergone as much crypto-analysis as Elliptic Curve Cryptography (ECC) or Rivest Shamir Adleman (RSA).</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub5" role="tabpanel" aria-labelledby="sub5-tab">
                    <div class="titleCol headingCol">
                      <h3>Argon2</h3>
                      <p>Is an open source password hashing function we have integrated for key and username generation. Argon2 is a memory-hard password hashing algorithm with variable complexity which means it can control how many seconds it takes to generate a key or username. This drastically increases the time and resources it takes an offline hacker to brute-force a Signature Chain. Because the time to generate an Argon2 hash is bound by memory latency, a specialized ‘password cracking’ device has no advantage over a general purpose CPU.</p>
                      <p>Our default Argon2 settings requires at least 0.3 – 0.5 seconds to generate a new key, meaning one is only able to try two to three passwords per second. Combining this with a minimum requirement of at least 8 alphanumeric [a-Z, 0-9] characters per password, even if the username and PIN were known by the attacker, the time required to crack the password would be in the order of 5 million years.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub6" role="tabpanel" aria-labelledby="sub6-tab">
                    <div class="titleCol headingCol">
                      <h3>Keccak</h3>
                      <p>Due to the recommendation from NIST (National Institute for Standards in Technology), the bit requirement for symmetric encryption schemes and hash functions must be at least twice the size for equivalent quantum resistance (eg. 512 vs 256). This recommendation inspires our standard hash: 256-bits for registers, 512-bit for transactions, and 1024-bit for blocks for equivalent 128-bit, 256-bit, and 512-bit quantum resistance respectively.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub7" role="tabpanel" aria-labelledby="sub7-tab">
                    <div class="titleCol headingCol">
                      <h3>Cryptographic Redundancy</h3>
                      <p>We do not rely on the security of only one cryptographic function for the security of the entire system, and treat every public key as disposable once used. This means our security uses many different layers of redundancy to provide protection, in the event that one of them becomes vulnerable. Relying on a single private key for security is a ticking time bomb, though this approach is largely used by most blockchain applications.</p>
                      <p class="textCenter"><a href="https://medium.com/@neha/cryptographic-vulnerabilities-in-iota-9a6a9ddc4367">Cryptographic Flaws found in IOTA</a></p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub8" role="tabpanel" aria-labelledby="sub8-tab">
                    <div class="titleCol headingCol">
                      <h3>Inherited Security Flaws</h3>
                      <p>The copy/paste mentality of source code used to create many cryptocurrency projects today has led to the pervasion of many security flaws. Below is one such example that created a pandemonium for hundreds of projects that inherited a flaw from Zcoin.</p>
                      <p class="textCenter"><a href="https://micky.com.au/expert-warning-fatal-flaw-embedded-in-all-privacy-coins/">Fatal Flaws may be embedded in all Privacy Coins</a></p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub9" role="tabpanel" aria-labelledby="sub9-tab">
                    <div class="titleCol">
                      <h3>Security Considerations</h3>
                      <p>Nexus offers post quantum cryptography as an optional feature to users, as at the moment ECC is still considered safe. Our optional safeguards provide adequate levels of resistance against attacks using a quantum computer. The following will describe a MITM (Main-In-The-Middle) attack, which is the only known attack able to penetrate a signature chain if the user has not opted in to use FALCON (post quantum cryptography).</p>
                      <p>A MITM attack can be described as someone eavesdropping on node communication, and at the same time, relaying information to other nodes, masquerading as the sender. In order for this type of attack to take place, an attacker would need to control the sigchain of every single node that the user is connected to (i.e to compromise the private keys of all connected nodes). This is because Nexus records a hash in a sigchain’s crypto object register, that is a hash of the certificate being used for SSL/TLS (Secure Socket Layer / Transport Layer Security). This means that the attacker has further difficulty pretending to be a remote node, because the blockchain acts as a certificate authority (CA).</p>
                      <p>On top of verifying certificates, nodes require additional authentication before the network will accept their transactions. The authentication message is signed by another key in the crypto object register, which can be facilitated by FALCON or Brainpool. In order to successfully authenticate a connection as a MITM attacker, the attacker would need to gain access to all the remote node’s authentication keys. </p>
                      <p><em>Note: * It is important to note that a replay attack would not work in this case, due to the authentication message containing a random session Nonce and timestamp that even if intercepted cannot be used to fake authentication.</em></p>
                      <p>Now, we will detail the steps of an attempted attack, assuming the user has not configured their account to use FALCON, and that the attacker is using a 3,800 qubit quantum computer.</p>
                      <ol class="customText">
                        <li>The MITM attacker needs to first: brute force a user's certificate key or wait until the user's node sends it out in a key exchange. They cannot create their own self-signed certificate as in a normal MITM attack, since the blockchain acts as a certificate authority (CA).</li>
                        <li>The attacker now needs to brute force the user's authentication hash or again wait for an authentication message, and attempt to break the authentication key. Breaking this key would enable the attacker to forge authentication messages, and thus pretend to be a node that the user is connected to and trusts.</li>
                        <li>The attacker would then need to break the remote node's authentication key (assuming they can forge signatures on every open connection which is 16+ nodes, and that the remote node is not already using FALCON).</li>
                        <li>The attacker would then need to wait for the user to create a transaction, i.e for them to reveal their public key, and in less than 200ms, break this public key in order to forge transactions.</li>
                      </ol>
                      <p>This is a requirement, because to successfully hijack a user’s account, the attacker would need to capture the transaction before it was broadcast, brute force the sender’s public key to obtain its private key, and then broadcast a forged transaction to take over this user’s account, all in less than 200ms.</p>
                      <h5>Why is the attack window only 200ms?</h5>
                      <p>The network considers the most valid transaction the one that nodes receive first. With the internet round trip time taking roughly 200ms, this is your upper bound of packet propagation time. Therefore, in order to create a conflicting transaction that could hijack a user’s signature chain, the attacker would need their ‘attack’ transaction to propagate over the network before the user’s transaction. The window is only 200ms as the users transaction begins to propagate at the time that the users public key is revealed, making it highly improbable that any computer, including a quantum computer, could ever break a user’s public key.</p>
                      <p>We believe that even when ECC is being used instead of FALCON, the likelihood of a successful attack even by a quantum computer is very unlikely. However, users that wish to move away from ECC and switch to FALCON can do so with a click of a button, and with little risk to their previous transactions. This is because the keys that have already been used in our Signature Chain architecture, no longer have any use, and therefore can not be attacked.</p>
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
