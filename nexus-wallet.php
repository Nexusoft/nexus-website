<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg wallet_bg">
      <canvas class="background"></canvas>
      <div class="container">
          <div class="bannerText">
            <h2>Nexus Wallet</h2>
          </div>
      </div>
    </div>
  </section>
  <!-- bannerSection ends -->

  <!-- nexus layout start -->
  <section>
    <div class="nexwallSection">
      <div class="container">
        <div class="download-area">
          <div class="headingCol text-center">
            <!-- <h2>NEXUS TRITIUM WALLET</h2> -->
            <div class="tagLine ">Available for Mac, Windows and Linux devices.</div>
          </div>
          <div class="downloadEntry">
            <div class="row">
              <div class="col-md-6">
                <div class="macImg">
                  <img src="images/mac-screen.png" alt="mac-screen" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="download-buttons text-center">
                  <div class="heading mb-3">
                    <h6 class="themeColor" style="font-size:16px">Download the Latest version: v2.0.7</h6>
                  </div>
                  <div class="items">
                    <a href="https://github.com/Nexusoft/NexusInterface/releases/download/v2.0.7/nexus_wallet-MacOSX-2.0.7.dmg" class="btn btn-primary">
                      <span class="icon">
                        <img src="images/download-icon.svg" alt="download-icon" />
                        <img src="images/download-icon-blue.svg" alt="download-icon" class="blue-icon"/>
                      </span>
                      <span>MAC</span>
                    </a>
                  </div>
                  <div class="items">
                    <a href="https://github.com/Nexusoft/NexusInterface/releases/download/v2.0.7/nexus_wallet-setup-Win-2.0.7.exe" class="btn btn-primary">
                      <span class="icon">
                        <img src="images/download-icon.svg" alt="download-icon" />
                        <img src="images/download-icon-blue.svg" alt="download-icon" class="blue-icon"/>
                      </span>
                      <span>WINDOWS</span>
                    </a>
                  </div>
                  <div class="items">
                    <a href="https://github.com/Nexusoft/NexusInterface/releases/download/v2.0.7/nexus_wallet-Linux-2.0.7.AppImage" class="btn btn-primary">
                      <span class="icon">
                        <img src="images/download-icon.svg" alt="download-icon" />
                        <img src="images/download-icon-blue.svg" alt="download-icon" class="blue-icon"/>
                      </span>
                      <span>LINUX</span>
                    </a>
                  </div>
                  <div class="items">
                    <a href="./wallet-guide?s=download" class="btn btn-outline-secondary text-capitalize">Verify Installer's Integrity</a>
                  </div>
                  <div class="items">
                    <a href="./wallet-guide" class="btn btn-outline-secondary text-capitalize">Wallet Guide</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="login-area">
          <div class="headingCol text-center">
            <h6>Login To Your Wallet</h6>
          </div>
          <div class="summary-area text-justify">
            <p>You are able to access your Nexus Wallet by a <a href=signature-chains>Decentralized Login System</a>, anywhere, anytime, by simply downloading the application and logging in (via username, password, and pin). A huge advantage of the Nexus Wallet is that users no longer have the burden of storing private keys on a hard drive or hardware wallet, or rely on third party custodian services. A wallet.dat file for key storage (a common necessity in legacy blockchain systems) is no longer required.</p>
          </div>
        </div>
        <div class="wallet-features-area">
          <div class="headingCol text-center">
            <h6>Wallet Features</h6>
          </div>
          <div class="fea-section">
            <div class="row">
              <div class="col-md-6">
                <div class="entrySection">
                  <div class="entry-text">
                    <span class="img-box">
                      <img src="images/market-data.svg" alt="market-data" />
                    </span>
                    <h5>Market Data</h5>
                    <p>View live market data from Bittrex and Binance, monitor market liquidity, and view the history of past market trends.</p>
                  </div>
                </div>
              </div>
              <!-- <div class="col-md-1"></div> -->
              <div class="col-md-6">
                <div class="entrySection">
                  <div class="entry-text">
                    <span class="img-box">
                      <img src="images/addressbook.svg" alt="addressbook" />
                    </span>
                    <h5>Address Book</h5>
                    <p>Save contacts within a comprehensive Address Book. Store details on your contacts such as: NXS address, email address, phone number and time zone.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="entrySection">
                  <div class="entry-text">
                    <span class="img-box">
                      <img src="images/transactiondetails.svg" alt="transactiondetails" />
                    </span>
                    <h5>Transaction Details</h5>
                    <p>Search, filter, and export transactions as a *.CSV file, or view your transaction history as a live graph.</p>
                  </div>
                </div>
              </div>
              <!-- <div class="col-md-1"></div> -->
              <div class="col-md-6">
                <div class="entrySection">
                  <div class="entry-text">
                    <span class="img-box">
                      <img src="images/softwareupdates.svg" alt="softwareupdates" />
                    </span>
                    <h5>Seamless Software Updates</h5>
                    <p>Download software updates as simply as you do with a smartphone. Checking into GitHub to see the most up to date version is no longer necessary.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="module-area text-center">
          <div class="headingCol">
            <h6>Modules</h6>
          </div>
          <div class="text-justify">
            <p>The Nexus Wallet provides a platform to easily install and create modules which give access to features such as Contracts, Tokens, and Assets. Building a Nexus module is as easy as developing a web page; you do not need any specialist blockchain programming skills. Modules can be built using other available APIs, or the APIs provided through Nexus.</p>
          </div>
          <div class="buton mt-3">
            <a href="https://nexusoft.github.io/nw-modules-documentation/" class="btn btn-primary capitalize">Develop</a>
          </div>
        </div>
        <div class="custom-area text-center">
          <div class="headingCol">
            <h6>Customizable Skins</h6>
          </div>
          <div class="skinWrapper">
            <p class="text-center">Design your own skin or import others made by the Nexus community.</p>
            <div class="row">
              <div class="col-md-6 col-lg-3">
                <div class="skinBlock">
                  <img src="images/screenshot-from.jpg" alt="screenshot-from" />
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="skinBlock">
                  <img src="images/screenshot-global.png" alt="screenshot-global" />
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="skinBlock">
                  <img src="images/screenshot-green-global.png" alt="screenshot-green-global" />
                </div>
              </div>
              <div class="col-md-6 col-lg-3">
                <div class="skinBlock">
                  <img src="images/screenshot-pink-global.png" alt="screenshot-pink-global" />
                </div>
              </div>
            </div>
            <div class="themeBtn">
              <div class="btn-areas">
                <a href="https://github.com/KenCorma/Nexus-Wallet-Themes" class="btn btn-primary capitalize">Skin Repository</a>
              </div>
              <div class="btn-areas">
                <a href="https://github.com/Nexusoft/NexusInterface/blob/master/docs/Themes.md" class="btn btn-primary capitalize">Design Your Own Skin</a>
              </div>
            </div>
          </div>
        </div>
        <div class="stacking-area text-center">
          <div class="headingCol">
            <h6>Staking</h6>
          </div>
          <div class="text-justify">
            <p>Help secure the network by staking with your Wallet. Minimum requirements are a continuous internet connection (24 hours a day, 7 days a week), and a balance in your Wallet. In return, you can earn a stake rate between 0.5% and 3.0% per year, which deposits every time you receive a new trust transaction.</p>
          </div>
          <div class="buton mt-3">
            <a href="./stake" class="btn btn-primary capitalize">Stake</a>
          </div>
        </div>
        <div class="security-area" style="margin-top:50px;">
          <div class="headingCol text-center">
            <h6>Security</h6>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="entrySection">
                <div class="entry-text">
                  <span class="img-box">
                    <img src="images/security-b.svg" alt="security-b" />
                  </span>
                  <h5>Signature Chains</h5>
                  <p><a href="javascript:;" class="themeColor">  <a href=signature-chains>Signature Chains</a> provide higher security through the use of a PIN, Password Recovery, Decentralized Login System, Quantum Resistance, Reversible Transactions and the future use of Password Managers and Biometrics.</p>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-1"></div> -->
            <div class="col-md-6">
              <div class="entrySection">
                <div class="entry-text">
                  <span class="img-box">
                    <img src="images/pin.svg" alt="pin" />
                  </span>
                  <h5>Pin</h5>
                  <p>A PIN is requested every time a transaction is created, much like using a bank card. This makes it more difficult to hack into someone’s account, similar to Two-Factor Authentication (2FA).</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="entrySection">
                <div class="entry-text">
                  <span class="img-box">
                    <img src="images/passwordrecovery.svg" alt="passwordrecovery" />
                  </span>
                  <h5>Password Recovery</h5>
                  <p>The wallet also has a password recovery system, in which users can set up a 'recovery phrase’ (either 10, 20 or 100 words). The master seed phrase provides extra assurance, enabling one to recover their Nexus Account in the event that it is compromised, or the password has been forgotten.</p>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-1"></div> -->
            <div class="col-md-6">
              <div class="entrySection">
                <div class="entry-text">
                  <span class="img-box">
                    <img src="images/security-3.svg" alt="security-3" />
                  </span>
                  <h5>Decentralized Login System</h5>
                  <p>You are able to access your Nexus Wallet anywhere, anytime, by simply downloading the application and logging in (via username, password, and pin). Users no longer have the burden of storing private keys.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="entrySection">
                <div class="entry-text">
                  <span class="img-box">
                    <img src="images/shield-2.svg" alt="shield-2" />
                  </span>
                  <h5>Quantum Resistance</h5>
                  <p>The key pair to your wallet is also changed with every transaction, and the public key is hidden until it is used. The result of this is a high security standard with support for multiple signature schemes such as FALCON.</p>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-1"></div> -->
            <div class="col-md-6">
              <div class="entrySection">
                <div class="entry-text">
                  <span class="img-box">
                    <img src="images/reversibletransactions.svg" alt="reversibletransactions" />
                  </span>
                  <h5>Reversible Transactions</h5>
                  <p>Transactions are required to be claimed (signatures are required from both sender and receiver). The result is a two-step validation process which prevents users from losing funds if accidentally sent to non-existent accounts.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="entrySection">
                <div class="entry-text">
                  <span class="img-box">
                    <img src="images/password-2.svg" alt="password-2" />
                  </span>
                  <h5>Password Managers</h5>
                  <p>To prevent attacks on your Sigchain through methods such as keyloggers, we designed the architecture to support hardware password managers such as the Zamek Hardware Password Manager.</p>
                </div>
              </div>
            </div>
            <!-- <div class="col-md-1"></div> -->
            <div class="col-md-6">
              <div class="entrySection">
                <div class="entry-text">
                  <span class="img-box">
                    <img src="images/biometrics.svg" alt="biometrics" />
                  </span>
                  <h5>Biometrics</h5>
                  <p>In the future, we envision the use of biometrics for the generation of usernames, or as a secondary secret that can be used to improve the security of a Sigchain.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="protect-area text-center">
          <div class="headingCol">
            <h6>Protecting Your Wallet</h6>
          </div>
          <div class="text-justify">
            <p>Your Wallet is the safest place to store your NXS. If coins are stored on an exchange or other custodial wallet, then the risk of coins being lost or stolen increases. To ensure you maintain ownership, we recommend that NXS is held in a password protected (encrypted) Nexus Wallet, or a recovery enabled Signature Chain. Remember: your wallet, your crypto. If your coins are stored somewhere else, they are not yours.</p>
            <p>Nexus is an open source technology, licensed under an MIT agreement (<a href="https://github.com/Nexusoft/LLL-TAO/blob/master/COPYING.MD" class="themeColor">click here</a> to view license). You are the sole custodian of your coins, meaning there is no one that can recover your coins or encryption passwords if they are lost. In the case of technical difficulties, the Nexus Community will be happy to help with Wallet related queries.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- nexus layout close -->

  <?php
  require_once("./footer.php");
  ?>
