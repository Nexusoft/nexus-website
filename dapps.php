<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg identity_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>DApps</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- bannerSection ends -->

  <!-- middle layput start -->
  <section>
    <div class="colSpace">
      <div class="container">
        <div class="customInner" style="max-width:850px; margin:auto">
          <div class="customSpace">

            <p class="customText textJustify">
                Nexus is built to verify the authenticity of data, being a verification system, not a computation engine. The following five reasons are the most prominent factors why our seven layer software stack improves the developer experience over similar platforms such as Ethereum, EOS, and Waves: Security Model, Automated Key Management, Object Modeling, RESTful API, and Scaling Model. Below we have included a comparison table between other similar platforms, to elucidate the unique qualities of our development environment.
            </p>
            <p style="width: 100%; text-align: center"><img src="images/comparison.png"></p>

            <div class="titleCol"><h3>Security</h3></div>
            <p class="customText textJustify">
                Our security model combines together many different technologies that make Nexus resilient to the evolving threats coming from Quantum Computing, Blockchain, and Security in general. We follow best practices with professional security audits, open source code review, and utilizing modern standards in cryptography such as SHA3. We also provide the option to the end user or developer to use purely Quantum Resistant Cryptography (FALCON) rather than Classical Cryptography Standards (ECDSA).
           </p>

           <div class="titleCol"><h3>Automated Key Management</h3></div>
            <p class="customText textJustify">
              Key management on Nexus is automated via a ‘decentralized authentication system’ we call ‘Signature Chains’. This not only gives the end user a better experience in managing their personal property, it also removes the burden of key management, which often requires third party plugins such as MetaMask. Signature Chains integrate into existing application frameworks that already rely on authorization systems through username and password combinations, and thereby provide DApp developers the ability to integrate blockchain functionality as an elevated layer into existing applications without much architectural modification.
           </p>

           <div class="titleCol"><h3>Object Modelling</h3></div>
            <p class="customText textJustify">
            Our architecture is ‘object oriented’ meaning that immutable data objects can be modified via ‘operations’. Object modeling gives developers access to a toolkit of important functions for managing objects in an application that require some objects to maintain a history and native immutability. Specific fields in objects, however, can be configured as mutable or immutable. This is very useful for applications that rely on a dynamic state, such as the progression of ownership, location, and quantity etc. Immutability on the other hand guarantees that certain states remain unchanged, such as a serial number, even if grouped in an object with many dynamic states.
           </p>

           <div class="titleCol"><h3>RESTful API</h3></div>
            <p class="customText textJustify">
            Contrary to the designs of projects such as Ethereum, EOS, or Cardano, our DApp developer environment is API driven, meaning that as a developer you can integrate blockchain functionality into your apps without being inhibited by the many nuances of using an emerging programming language such as Solidity. This ensures a safer and higher quality production code, while reducing the overall cost of the software.
           </p>

           <div class="titleCol"><h3>Scaling Model</h3></div>
            <p class="customText textJustify">
            Scaling is a requirement, not a feature. The architecture must be able to handle large volumes of contracts, while also maintaining the same, if not higher levels of security. We have partially achieved this through our TAO Framework (3DC), which is currently one-third complete. When fully implemented, it will provide full scalability, security, and decentralization through a globally sharded decentralized consensus network, necessary for the long term sustainability of Nexus.
           </p>
            <p class="innerText"><a href=what-tritium class="btn btn-primary">What is Tritium</a></p>
        </div>
      </div>
    </div>
   </div>
  </section>
    <!-- middle layput close -->

    <?php
    require_once("./footer.php");
    ?>
