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
              <h2>Digital Identity</h2>
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
        <div class="customInner" style="max-width:850px;margin:auto">
          <div class="customSpace">
            <p class="customText textJustify">The Nexus blockchain replaces the requirement for trusted third parties, as every piece of recorded digital information is witnessed by numerous validators. Therefore, credible digital records can be built that can't be forged or stolen. Some examples of digital records may include:</p>
            <ol class="customText textLeft">
              <li>Assets (Titles, Company Registrations, TNS Domains)</li>
              <li>Educational and Professional Certificates</li>
              <li>Employment References</li>
              <li>Landlord References</li>
              <li>Medical Tests</li>
              <li>Licenses</li>
            </ol>
            <p class="customText textJustify">We envision that applications for these services will begin development on or off the public network, including being hosted on sister or hybrid networks as their own self-contained ecosystems.</p>
            <p class="customText textJustify"><b>Signature Chains</b><br>Nexus has designed a technology called Signature Chains, a decentralized blockchain account that allows you to login from any computer with a username, password, and pin. Sigchains replace the need to store the private keys associated with the different applications you have accounts with.</p>
            <p class="customText"><a href="./signature-chains" class="btn btn-primary">Signature Chains</a></p><br>
            <p class="customText textJustify"><b>How do I maintain my online privacy?</b><p>
            <p class="customText textJustify">All accounts on the Nexus blockchain will be pseudo-anonymous, meaning no other person can look up any of your accounts with any personal identifying information such as name, date of birth, or social security number. Your accounts can only be viewed if you give out your username or genesis ID. Furthermore, information such as records and certificates are not revealed on the public network, only a hash reference of the information is recorded within the Asset. </p>
            <p class="customText textJustify"><b>Everytime I send some NXS, the receiver is able to see my NXS balance and token holdings. Is there a way to make this private?</b><p>
            <p class="customText textJustify">Though this is no different to cryptocurrencies like Bitcoin, in the future we will improve privacy through the use of homomorphic encryption. This could be used to obscure any information you wish to keep private, such as an account balance, while still allowing peers to validate the change of state.</p>
            <p class="customText textJustify">One such option that could be developed post Tritium, is using homomorphic encryption to encrypt your stake balance; this would make your staking (savings) account an encrypted private value that could still be verified and operated on. You could then automatically set up a monthly withdraw to a plaintext (current) account, which you would then use for transfers and purchases.</p>
          </div>
          
        </div>
      </div>
    </div>
  </section>
    <!-- middle layput close -->

    <?php
    require_once("./footer.php");
    ?>
