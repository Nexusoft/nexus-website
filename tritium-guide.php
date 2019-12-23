<?php
require_once("./header.php");
?>

<style>
ol {
  padding-left:20px;
}
ol li {
  font-size: 14px;
  line-height: 26px;
  font-weight: 500;
}
</style>
  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg wallet-guide-bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="bannerText">
          <h2>Nexus Wallet Guide</h2>
        </div>
      </div>
    </div>
  </section>
  <!-- bannerSection ends -->

  <!-- nexus layout start -->
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
                        <a class="nav-link active overview" id="intro-tab" data-toggle="tab" href="#intro" role="tab" aria-controls="intro" aria-selected="true">Introduction</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="setup-tab" data-toggle="tab" href="#setup" role="tab" aria-controls="setup" aria-selected="false">Wallet Setup</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="download-tab" data-toggle="tab" href="#download" role="tab" aria-controls="download" aria-selected="false">Download</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="install-tab" data-toggle="tab" href="#install" role="tab" aria-controls="install" aria-selected="false">Install</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="terms-tab" data-toggle="tab" href="#terms" role="tab" aria-controls="terms" aria-selected="false">Terms & Conditions</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="bootstrap-tab" data-toggle="tab" href="#bootstrap" role="tab" aria-controls="bootstrap" aria-selected="false">Bootstrap</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" id="functions-tab" data-toggle="tab" href="#functions" role="tab" aria-controls="functions" aria-selected="false">Wallet Functions</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="create-user-tab" data-toggle="tab" href="#create-user" role="tab" aria-controls="create-user" aria-selected="false">Create New User</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="receiving-tab" data-toggle="tab" href="#receiving" role="tab" aria-controls="receiving" aria-selected="false">Receive NXS or Tokens</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sending-tab" data-toggle="tab" href="#sending" role="tab" aria-controls="sending" aria-selected="false">Send NXS or Tokens</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="create-token-tab" data-toggle="tab" href="#create-token" role="tab" aria-controls="create-token" aria-selected="false">Create Token</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="create-account-tab" data-toggle="tab" href="#create-account" role="tab" aria-controls="create-account" aria-selected="false">Create Account</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link" id="staking-tab" data-toggle="tab" href="#staking" role="tab" aria-controls="staking" aria-selected="false">Staking</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="stake-settings-tab" data-toggle="tab" href="#stake-settings" role="tab" aria-controls="stake-settings" aria-selected="false">Stake Settings</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="stake-begin-tab" data-toggle="tab" href="#stake-begin" role="tab" aria-controls="stage-begin" aria-selected="false">Begin Staking</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="stake-amount-tab" data-toggle="tab" href="#stake-amount" role="tab" aria-controls="stake-amount" aria-selected="false">Stake Amount</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="stake-trust-tab" data-toggle="tab" href="#stake-trust" role="tab" aria-controls="stake-trust" aria-selected="false">Building Trust</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="stake-amount-change-tab" data-toggle="tab" href="#stake-amount-change" role="tab" aria-controls="stake-amount-change" aria-selected="false">Changing Stake Amount</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="stake-trust-decay-tab" data-toggle="tab" href="#stake-trust-decay" role="tab" aria-controls="stake-trust-decay" aria-selected="false">Trust Decay</a>
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
                  <div class="intro-Wrapper customTab tab-pane fade show active" id="intro" role="tabpanel" aria-labelledby="intro-tab">
                    <div class="titleCol">
                        <h3>Introduction</h3>
                        <p>If you have any Wallet related issues, or any general questions please join one of the Nexus Community Channels found in the footer, and post a message asking for help. The Nexus community consists of a diverse array of friendly and helpful individuals - one of which will point you in the right direction whatever your query.</p>

                        <h3>Disclaimer and Loss of Password</h3>
                        <p>NXS is a peer-to-peer cryptocurrency that provides fast, low-cost, borderless, and secure transactions without the requirement of a bank or third-party intermediary. You personally own your NXS and Nexus Wallet, they are not owned or governed by a central authority. This is in direct contrast to a bank, in which the money held inside an account is legal property of the bank rather than the account holder. Nexus provides individuals with economic freedom, and with this freedom comes true responsibility for the safety of your own finances.</p>

                        <p>The Nexus Wallet is the safest place to store NXS. If coins are stored on a centralized exchange or a mining pool, then that entity has full custody. Third party custody comes with a multitude of risks. To ensure you maintain ownership, we recommend that NXS is held in the new Tritium Wallet. Nexus is a decentralized organization and our software is licensed under an MIT/X11 open source license. You are the sole custodian of your coins, <strong>we can not help you if you lose or forget your password or PIN.</strong></p>

                        <p><strong>Please make sure to keep your </strong><strong>password and </strong><strong>PIN </strong><strong>extremely safe</strong><strong>.</strong></p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="setup" role="tabpanel" aria-labelledby="setup-tab">
                    <div class="titleCol headingCol">
                        <h2>System Requirements</h2>
                        <p>The Nexus Wallet can be accessed from any Mac, Windows or Linux computer simply by downloading and installing the desktop application. The minimum system requirements are as follows: </p>
                        <ul>
                            <li>Mac OS X Yosemite 10.10 or later</li>
                            <li>Windows 7 or later</li>
                            <li>Linux 64 Bit</li>
                            <li>512MB of RAM (1 GB Recommended)</li>
                            <li>7GB of disk space</li>
                        </ul>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="download" role="tabpanel" aria-labelledby="download-tab">
                    <div class="titleCol headingCol">
                        <h2>Download</h2>
                        <p>Download the <a href=/wallet>Nexus Wallet</a> specific to your type of device.</p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_0.png" /></p>
                        <p>Click on the downward pointing arrow, and then double click on the Nexus Wallet icon.</p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_1.png" /></p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="install" role="tabpanel" aria-labelledby="install-tab">
                    <div class="titleCol headingCol">
                        <h2>Install</h2>
                        <p>Follow the instructions on the pop up box to install. </p>
                        <p>Mac -> Drag the Nexus logo into the Application file. </p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_2.png" /></p>
                        <p>Go to your applications folder and double click on the Nexus Wallet logo.</p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_3.png" /></p>
                        <p>Click Open </p>
                        <p>Windows -> Help from a WIndows user</p>
                        <p>Linux -> Simply click install and type in your password when prompted.</p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_4.png" /></p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="terms" role="tabpanel" aria-labelledby="terms-tab">
                    <div class="titleCol headingCol">
                        <h2>Terms and Conditions</h2>
                        <p>The Nexus Wallet terms are under an MIT/X11 licence. They constitute a legally binding agreement and govern the use of the Nexus Wallet. These terms and conditions must be accepted prior to use:</p>
                        <p>The MIT License (MIT)</p>
                        <p>Copyright 2019 Nexus</p>
                        <p>Permission is hereby granted, free of charge, to any person</p>
                        <p>obtaining a copy of this software and associated documentation files</p>
                        <p>(the "Software"), to deal in the Software without restriction,</p>
                        <p>including without limitation the rights to use, copy, modify, merge,</p>
                        <p>publish, distribute, sublicense, and/or sell copies of the Software,</p>
                        <p>and to permit persons to whom the Software is furnished to do so,</p>
                        <p>subject to the following conditions:</p>
                        <p>The above copyright notice and this permission notice shall be</p>
                        <p>included in all copies or substantial portions of the Software.</p>
                        <p>THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,</p>
                        <p>EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF</p>
                        <p>MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND</p>
                        <p>NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT</p>
                        <p>HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,</p>
                        <p>WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,</p>
                        <p>OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER</p>
                        <p>DEALINGS IN THE SOFTWARE.</p>
                        <p>IMPROPER USE OF THIS SOFTWARE COULD LEAD TO PERMANENT LOSS OF COIN.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="bootstrap" role="tabpanel" aria-labelledby="bootstrap-tab">
                    <div class="titleCol headingCol">
                        <h2>Bootstrap and Synchronize</h2>
                        <p>Before the Wallet can be used, it needs to be synchronized with the Nexus Blockchain. </p>
                        <p>There are two ways in which the Wallet can be synchronized:</p>
                        <ol>
                           <li>Letting the Wallet catch up with blocks on its own by just leaving the Wallet open: <strong>approx 20 - 240 minutes depending on your internet connection and network traffic.</strong></li>
                           <li>‘Bootstrapping’ the Wallet (downloading the recent database): <strong>approx 1 hour depending on your internet connection.</strong> To download the recent database please follow these instructions:</li>
                        </ol>
                        <p>Click the top banner option ‘File’, and click on ‘Download Recent Database’.</p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_5.png" /></p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_6.png" /></p>
                        <p>Click, ‘Yes, let’s bootstrap it’. This will automatically download the database.</p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_7.png" /></p>
                        <p>Please leave the Wallet open while bootstrapping. Selecting the ‘Abort’ option will completely stop any progress which has been made, and is not therefore advised.</p>
                        <p>If the bootstrapping pop up is minimised (by clicking off the pop up), you will be able to see what % of the database has been downloaded displayed in the left hand top corner. </p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_8.png" /></p>
                        <p>When downloading the database is complete, you will see the ‘Decompressing’ box in the left hand top corner.</p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_9.png" /></p>
                        <p>When Decompressing is complete, you will see the ‘Rescanning Wallet’ box in the left hand top corner.</p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_10.png" /></p>
                        <p>When Rescanning is complete, the below box will pop up:</p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_11.png" /></p>
                        <p>Your Wallet will then start to synchronize the last one or two percent of the Nexus Blockchain. You can check this by hovering over the first icon in the right hand corner of the Wallet:</p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_12.png" /></p>
                        <p>Without a fully synchronised Wallet, incoming transactions will not show up, balances will be missing, and you will be unable to send NXS. The Wallet can be thought of as a window to view the blockchain - if your Wallet is behind, and not in sync, it will not display the true status of your Wallet on the blockchain.</p>
                        <p>When your Wallet has fully synchronized you will see a blue tick in the right hand corner of the Wallet. It is now ready to use.</p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_13.png" /></p>
                        <p>It is also important to remember that if you restart your core (when enabling Staking for example) or close your Wallet or if your device loses internet connection for even a minute, then you are likely to see that 'Synchronising 99%' in the top right icon menu again. <strong>Just wait for your device to synchronize.</strong> You DO NOT need to re-download the database again (the database is only for when you initially install your Wallet, or if your Wallet has been closed for a considerable period of time, a year for example).</p>
                        <p>If you open your Wallet and on all pages it says 'Loading/syncing, please wait. If you are waiting for more than 5 minutes, we recommend restarting the Wallet. If that does not solve the problem, then please restart your device.</p>
                    </div>
                  </div>


                  <div class="customTab tab-pane fade" id="functions" role="tabpanel" aria-labelledby="functions-tab">
                    <div class="titleCol headingCol">
                        <h2>Wallet Functions</h2>
                        <p>Your wallet contains lots of gadgets to play with. Refer to this section if you would like to get more familiar with the core functionality.</p>
                    </div>
                  </div>


                  <div class="customTab tab-pane fade" id="create-user" role="tabpanel" aria-labelledby="create-user-tab">
                    <div class="titleCol headingCol">
                        <h2>Create Account</h2>
                        <p>Before creating a new user account, your Wallet must be fully synchronized with the Nexus Blockchain. See <u>Step 4 - Bootstrap and Synchronize</u> if this still needs to be completed. </p>
                        <p>To create your user account, simply choose a username, password, and PIN number. </p>
                        <p>Your password must be at least 8 characters, and the PIN a minimum of 4 digits. </p>
                        <p>When you submit your create new user request, your Wallet must complete a small proof of work that may take up to 30 seconds. Then, it will create your Signature Chain and submit it for processing. <strong>You cannot log in with your new user account until after this processing is complete and your Signature Chain is added to the Nexus Blockchain.</strong> This may happen with the next new block added, or it may take more than one block. </p>
                        <p>Typically, it should take less than 5 minutes, after which you can log into your Wallet and access your new user account. </p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_14.png" /></p>
                        <p>Recommended Security</p>
                        <p><strong>PLEASE DO NOT USE COMMON WORDS FOR YOUR PASSWORD, THIS WILL LEAVE YOU VULNERABLE TO DICTIONARY ATTACKS THAT COULD DRASTICALLY DECREASE THIS RESISTANCE.</strong></p>
                        <p>We therefore recommend that you use a secure random number generator to create your password:</p>
                        <p><strong>$ openssl rand -base64 8</strong></p>
                        <p>xrMBADJZv48=</p>
                        <p>The above password generator will provide very high account security: offline password cracking will take 50 billion years to break the password/pin combination. </p>
                        <p>Security Considerations</p>
                        <p>The security of your account is very important. This section will compare the security of your account (based on SigChain technology) in comparison to the old legacy UTXO architecture.</p>
                        <p>Sect571r1 (legacy private keys) are generated in 1.56ms, whereas to generate one key in a SigChain takes 500ms, being 319x more difficult to break at equivalent password entropy.</p>
                        <p>The current resistance is 7.7291×10¹⁷¹ iterations to iterate and guess all private keys, with it taking 1.56ms per key, the time to mine all keys would be 1.2057×10¹⁶⁹ seconds. </p>
                        <p>The following command can be issued if you have openssl installed: </p>
                        <p><strong>$ openssl rand -base64 32</strong></p>
                        <p><strong>This will generate a long string such as:</strong></p>
                        <p>F/DRfiUbRvtZmZi+BQgUouzHTmckhv0oJdNaNpZvA7k=</p>
                        <p>This uses 32 characters, in base64, making brute force resistance 64^32 or 6.277101735×10⁵⁷ which would become around 3.138550868×10⁵⁷ seconds to break this password if your PIN was known. </p>
                        <p>This number is multiplied by 10 for every number you add to your PIN. A six digit numeric PIN, would increase resistance to 6.277101735×10⁶³ seconds.</p>
                        <p>If you want an even higher security standard, we recommend using your PIN as a second password (like 2 private keys). </p>
                        <p><strong>$ openssl rand -base64 64</strong></p>
                        <p>VPVaqjNxQgJucekY4+kBYyJgkF/0g64R4SYc9GYqsC0ntYLSisQbs+hHZB2+AKaD</p>
                        <p>i0yQCBF9U32WKCozEhuAeA==</p>
                        <p><strong>$ openssl rand -base64 64</strong></p>
                        <p>dCStGOhTbTqtSp1UQ1j34SS9l3vBPtA1aSocXMpheRof9a5UFPa47Tv5UjUCydO0</p>
                        <p>hf4Wj8gYMVRIuae5MKbojg==</p>
                        <p>This will give security properties of 7.762590462×10²³⁰ seconds to break into a SigChain. Which, if you don’t know, is a lot. 2^123 is the maximum amount of iterations possible with all the known energy in the universe, so this many seconds is well beyond resistant to attack.</p>
                        <p><strong>Note: These iterations are based on the assumption that an attacker already knows your username, if they do not, this complexity only increases exponentially. </strong></p>
                        <p>The above figure describes a resistance that would take an attacker 2.461501288×10²²³ years to break. </p>
                        <p><strong>YOU ARE SOLELY RESPONSIBLE FOR KEEPING YOUR ACCOUNT SECURE</strong></p>
                    </div>
                  </div>


                  <div class="customTab tab-pane fade" id="receiving" role="tabpanel" aria-labelledby="receiving-tab">
                    <div class="titleCol headingCol">
                        <h2>Receive NXS or a Token</h2>
                        <p>To receive NXS from another sender or an exchange such as Binance or Bittrex, or to receive a Token, go to the User module, and please follow the below instructions:</p>
                        <ol>
                           <li>Go to the Account page.</li>
                           <li>Choose the recipient account</li>
                           <li>Select the Copy to clipboard icon</li>
                           <li>Send the copied address to the sender, or paste the address into your exchange Wallet.</li>
                        </ol>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_21.png" /></p>
                    </div>
                  </div>


                  <div class="customTab tab-pane fade" id="sending" role="tabpanel" aria-labelledby="sending-tab">
                    <div class="titleCol headingCol">
                        <h2>Send NXS or a Token</h2>
                        <p>To send NXS or a Token to another address, or to move NXS between your personal accounts, go to the Send module, and please follow the below instructions:</p>
                        <ol>
                           <li><i><strong>Send From:</i></strong> Select the account that you wish to send from.</li>
                        </ol>
                        <li><i><strong>Send To</i></strong>: Select one of your personal accounts, or contacts saved in your address book, or copy and paste a new payee address.</li>
                        </ol>
                        <li><i><strong>Amount:</i></strong> Enter the NXS or Token quantity you would like to send. </li>
                        </ol>
                        <li><i><strong>Reference Number:</i></strong> Add an optional reference, invoice or order number.</li>
                        </ol>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_22.png" /></p>
                    </div>
                  </div>


                  <div class="customTab tab-pane fade" id="create-token" role="tabpanel" aria-labelledby="create-token-tab">
                    <div class="titleCol headingCol">
                        <h2>Create a Token</h2>
                        <p>To create a new Token, go to the User module, and please follow the below instructions:</p>
                        <ol>
                           <li>Click this button to create a new token.</li>
                        </ol>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_23.png" /></p>
                        <li>Choose a Token Name.</li>
                        <li>Choose the total number of Tokens to be created.</li>
                        <li>Choose the amount of significant digits the Token will have.</li>
                        <li>At the top of the box, the fee will be displayed in NXS for creating your supply of tokens. </li>
                        <li>Create Token</li>
                        <li>Pay Fees</li>
                        </ol>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_24.png" /></p>
                    </div>
                  </div>


                  <div class="customTab tab-pane fade" id="create-account" role="tabpanel" aria-labelledby="create-account-tab">
                    <div class="titleCol headingCol">
                        <h2>Create an Account</h2>
                        <p>You can create as many accounts as you wish within your main user account, for the use of NXS or any other Token issued on the Nexus blockchain. Accounts are free to create, however if you choose to give your account a name (so that you can give out an easy readable address, rather than a hexadecimal address), then a fee of 1 NXS is applied. </p>
                        <p>To create a new Named account, please follow these steps:</p>
                        <ol>
                           <li>Go to the User module</li>
                           <li>Accounts tab</li>
                           <li>Create new account</li>
                        </ol>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_25.png" /></p>
                        <p>A new page will open up</p>
                        <li>Choose an Account Name</li>
                        <li>Choose whether the account is for NXS or for a Token</li>
                        <li>Create Account</li>
                        </ol>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_26.png" /></p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_27.png" /></p>
                    </div>
                  </div>


                  <div class="customTab tab-pane fade" id="staking" role="tabpanel" aria-labelledby="staking-tab">
                    <div class="titleCol headingCol">
                        <h2>What is Staking?</h2>
                        <p> Staking is an energy efficient form of mining that provides security to the Nexus network. You are not required to Stake. However, if you choose to Stake, you will be provided with a return for doing so. In order to Stake, your Wallet <strong>MUST</strong> be left open and running with an internet connection 24/7. For an introduction to Staking, please read the following web page <u>Stake</u>. </p>
                    </div>
                  </div>


                  <div class="customTab tab-pane fade" id="stake-settings" role="tabpanel" aria-labelledby="stake-settings-tab">
                    <div class="titleCol headingCol">
                        <h2>Stake Settings</h2>
                        <p>Once you have created a Username, Password and PIN, the Wallet will automatically enable Staking. You can check this in the Settings module, as seen below. </p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_15.png" /></p>
                        <p>When this setting is enabled (the default), your Wallet is enabled for Staking and will stake the NXS in your Trust Account whenever you log in. You must also have ‘ Staking Enabled’ in order for your Wallet to receive stake rewards. This is to prevent users from unintentionally Staking coins. </p>
                    </div>
                  </div>


                  <div class="customTab tab-pane fade" id="stake-amount" role="tabpanel" aria-labelledby="stake-amount-tab">
                    <div class="titleCol headingCol">
                        <h2>Decide How Much to Stake</h2>
                        <p>When you stake your NXS, you commit a portion of your balance to be used for Proof of Stake. As long as it remains committed to stake, this NXS is generally unavailable for other uses.</p>
                        <p>How much you choose to commit to Staking is up to you. Although your committed stake amount is not locked, any request to change it requires that you mine a Proof of Stake block to implement the change. Doing so may take some time, especially for smaller balances that find blocks infrequently. Therefore, you may wish to keep some NXS in your Default Account (like a Current Account), if you require access to NXS.</p>
                    </div>
                  </div>


                  <div class="customTab tab-pane fade" id="stake-begin" role="tabpanel" aria-labelledby="stake-begin-tab">
                    <div class="titleCol headingCol">
                        <h2>Begin Staking</h2>
                        <p>When you first create a new user login, the system will automatically create two accounts for you: Default and Trust. The Trust Account is used for Staking. At this point, though, the account is new and you have not committed any amount of NXS for Staking. Thus, the first step to begin Staking is to commit the initial amount you choose to stake. This is known as stake Genesis.</p>
                        <p>All you have to do to begin Staking for Genesis is to send NXS to your Trust Account, either by transferring from another account such as your Default Account or by sending it directly from any other source. After you have NXS in your Trust Account, there is a 72 hour hold before your Wallet begins to stake for Genesis. When the hold is complete, your Wallet automatically begins attempting to mine its first Proof of Stake block as long as it remains running.
                           While Staking for Genesis, none of the NXS in your Trust Account is committed to stake. You can freely add or remove balance by simply sending it. However, if you change the Trust Account balance before it mines the initial stake Genesis, the 72 hour hold period starts over, so it works best if you decide up front how much you want to commit to stake and allow it to remain unchanged until it mines that first Proof of Stake block.
                        </p>
                        <p>When it finds the first stake block, your Wallet moves your balance to a special Staking balance that only appears in your Trust Account and not in other accounts. This commits that balance for Staking. After the initial move, you must create a specific request to add or remove any NXS from the committed stake amount.</p>
                        <p>To do this, go to the User module, and click on Accounts on the left side to see the balance of your Trust Account.</p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_16.png" /></p>
                        <p>
                           Then click on Staking on the left side of the User module, and you can see your current Staking metrics.
                        </p>
                        <p style="width: 100%; text-align: center">
                           <img src="images/guide/Image_17.png" />
                        </p>
                        <p>Note that there is currently 0 NXS for the Stake amount, and the Unstaked amount is 10,000NXS. This is because this Trust Account is new and has not completed Staking genesis, yet.
                           At this point, there is a 72 hour period before the account will start Staking. As long as you don’t add/remove any NXS from the Trust Account, it will begin Staking automatically at the end of this 72 hour period.
                        </p>
                        <p>Remember that your Wallet has to be left open and logged into. Also, note that the time it takes to mine your first stake block varies based on the current level of Staking difficulty on the network. However, the size of your balance affects the time it will take.</p>
                        <p>When your Wallet mines its first Proof of Stake block, it will move your balance from ‘Unstaked amount’ to ‘Stake amount’. The corresponding stake reward for finding the block will appear in your transaction history (see Transaction module) as a Genesis transaction. </p>
                        <p>The stake reward is paid to your trust account, and will show as a balance in the ‘Unstaked amount’. This balance is currently unstaked.</p>

                        <p style="width: 100%; text-align: center">Here is an image of the same Trust Account after it has mined its first Proof of Stake block.</p>
                           <img src="images/guide/Image_18.png" />
                        </p>
                        <p>Note that the ‘Unstaked amount’ has moved to ‘Stake amount’. This will only happen when your Wallet mines your Proof of Stake genesis. Also note that the stake reward was paid to the ‘Unstaked amount’. This balance is spendable (you can choose to send the NXS to another account, such as your Default Account, without affecting your Trust Score), or you can later choose the NXS to your Stake amount, which will be discussed below.</p>
                    </div>
                  </div>


                  <div class="customTab tab-pane fade" id="stake-trust" role="tabpanel" aria-labelledby="stake-trust-tab">
                    <div class="titleCol headingCol">
                        <h2>Build Trust</h2>
                        <p>After your Wallet has mined Stake Genesis once, it never needs to do so again. From that point forward, whenever the Wallet mines a Proof of Stake block, it will generate a Stake Reward that will appear in your Transaction History as a Trust transaction.</p>
                        <p>As long as your Wallet is contributing to the network by mining at least one Proof of Stake block every 72 hours, it will accumulate Trust, which increases both the Trust Weight and the Stake Rate associated with your Staking. The Stake Rate can reach a maximum of 3.0% with a full year of accumulated Trust. </p>
                        <p>After Genesis, Nexus Proof of Stake will only use the ‘Stake amount’ for Staking. The ‘Unstaked amount’ in your Trust Account and the balances of all other accounts will not be staked. ...and can be withdrawn from the trust account without negatively impacting your Trust score.</p>
                    </div>
                  </div>


                  <div class="customTab tab-pane fade" id="stake-amount-change" role="tabpanel" aria-labelledby="stake-amount-change-tab">
                    <div class="titleCol headingCol">
                        <h2>Changing Stake Amount</h2>
                        <p>The NXS in the Stake Amount of your Trust Account is committed for Staking and is used towards mining stake blocks. The amount of your Stake affects your Stake Rewards. Although it is committed to Staking, it is possible to change the amount. To do so, use the ‘Adjust stake amount’ button on the Staking view of your User module. </p>
                        <p style="width: 100%; text-align: center">
                           <img src="images/guide/Image_19.png" />
                        </p>
                        <p>This button will open a dialog where you can select how much you wish to stake. Note that you enter (or set via the slider) the total amount that you want to commit to Staking, not how much to add to or remove from the current amount. This is determined automatically. </p>
                        <p>The Adjust stake dialog will also display a message similar to this:</p>
                        <p>
                           <i>Note: This change will not take effect immediately, but will stay pending until you get the next Trust transaction. The pending change will be recorded locally in the device you are using, therefore if you switch to another machine for Staking, the change will not take effect</i><i>.</i>
                        </p>
                        <p>As noted earlier and also by this message, your stake change <strong>is not implemented until your Wallet mines its next stake block</strong>. In other words, you cannot change your committed Stake Amount at will. You have to mine a block to do so. </p>
                        <p>After you create a stake change request, your Staking view will show the pending change. </p>
                        <ul>
                           <li>You can revise this anytime before the Wallet mines its next stake block. </li>
                           <li>Setting the Stake Amount back to its current value will cancel the change entirely. </li>
                        </ul>
                        <p>Things to know about adding stake:</p>
                        <ol>
                           <li>To add NXS to your Stake amount, you must first send it to your Trust Account where it will display as Unstaked Amount. </li>
                           <li>You cannot add more NXS to your Stake amount than your current Unstaked Amount.</li>
                           <li>Your Stake Rewards accumulate as Unstaked Amount. You can use the ‘Adjust Stake amount’ button to add the NXS back into stake if you wish. Otherwise, you can send the NXS elsewhere. </li>
                           <li>When you create a request to increase stake, the increase is included immediately in attempts to mine a stake block. This can help the Wallet find your next block faster.</li>
                       </ol>

                        <p>Things to know about removing stake:</p>
                        <ul>
                           <li>When you remove stake, there is an associated cost. You can think of your current level of Trust as spread across the NXS in your committed stake. Therefore, if you remove a portion of that committed stake, it also reduces your Trust by an equivalent amount. For example, if you remove 10% of your committed stake, it costs 10% of your accumulated Trust. </li>
                           <li>The purpose for having a Trust cost to remove stake is to reward those who consistently stake long term and do not frequently reduce their committed Stake amount.</li>
                           <li>As stated before, if you require frequent access to a portion of your NXS, consider keeping it in another account (such as your Default Account) and not committing it to stake. </li>
                           <li>The Trust cost for removing stake is not processed until your stake change request is implemented by mining a Proof of Stake block. If you change your mind, you can update the request anytime before then. </li>
                           <li>Using the ‘Adjust stake amount’ button to set committed stake to zero will remove all stake and reset your Trust.</li>
                           <li>Stake that is removed from ‘Stake amount’ is moved to the ‘Unstaked amount’ in your Trust account. From there, you can send it to wherever you would like to.</li>
                        </ul>
                    </div>
                  </div>


                  <div class="customTab tab-pane fade" id="stake-trust-decay" role="tabpanel" aria-labelledby="stake-trust-decay-tab">
                    <div class="titleCol headingCol">
                        <h2>Trust Decay</h2>
                        <p>To continue to grow your level of Trust and Stake Rate, your Wallet must mine a new Proof of Stake block every 72 hours or less. After 72 hours, your current level of Trust begins to decay. Your Trust decays at a rate of 3:1 (three times faster than you earn it). Thus, 3 weeks of Trust will decay fully in one week, and one year of Trust will decay fully in 4 months.
                           If your Trust has decayed fully, the Wallet will display a minimum Trust Weight of 1.11% and the minimum stake rate of 0.5%. These values will remain at this level until your Wallet mines a new stake block.
                           As soon as your Wallet mines a new Proof of Stake block, your level of trust and Stake Rate will begin growing again, and continue growing as long as it meets the 72 hour requirement going forward.
                        </p>
                        <p>To check whether your Wallet is Staking, hover the cursor over the Nexus logo icon in the top right hand corner:</p>
                        <p style="width: 100%; text-align: center"><img src="images/guide/Image_20.png" /></p>
                    </div>
                  </div>


                  <div class="customTab tab-pane fade" id="stake-trust" role="tabpanel" aria-labelledby="stake-trust-tab">
                    <div class="titleCol headingCol">
                        <h2></h2>
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
  <!-- nexus layout close -->

  <?php
  require_once("./footer.php");
  ?>
