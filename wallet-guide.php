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
                    <a class="nav-link active" id="intro-tab" data-toggle="tab" href="#intro" role="tab" aria-controls="intro" aria-selected="true">WALLET SUPPORT</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="system-tab" data-toggle="tab" href="#system" role="tab" aria-controls="system" aria-selected="false">System Requirements</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="getting-tab" data-toggle="tab" href="#getting" role="tab" aria-controls="getting" aria-selected="false">Getting started</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link subMenu" id="download-tab" data-toggle="tab" href="#download" role="tab" aria-controls="download" aria-selected="false">Downloading</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link subMenu" id="install-tab" data-toggle="tab" href="#install" role="tab" aria-controls="install" aria-selected="false">Installing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link subMenu" id="t-c-tab" data-toggle="tab" href="#t-c" role="tab" aria-controls="t-c" aria-selected="false">T&Cs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link subMenu" id="synchronizing-tab" data-toggle="tab" href="#synchronizing" role="tab" aria-controls="synchronizing" aria-selected="false">Synchronizing</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link subMenu" id="encrypting-tab" data-toggle="tab" href="#encrypting" role="tab" aria-controls="encrypting" aria-selected="false">Encrypting</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link subMenu" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link subMenu" id="enable-staking-tab" data-toggle="tab" href="#enable-staking" role="tab" aria-controls="enable-staking" aria-selected="false">Enable Staking</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link subMenu" id="back-wallet-tab" data-toggle="tab" href="#back-wallet" role="tab" aria-controls="back-wallet" aria-selected="false">Backup Your Wallet</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="wallet-feat-tab" data-toggle="tab" href="#wallet-feat" role="tab" aria-controls="wallet-feat" aria-selected="false">Wallet features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link subMenu" id="overview-tab" data-toggle="tab" href="#overview" role="tab" aria-controls="overview" aria-selected="false">Overview</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link subMenu" id="send-NXS-tab" data-toggle="tab" href="#send-NXS" role="tab" aria-controls="send-NXS" aria-selected="false">Send NXS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link subMenu" id="transactions-tab" data-toggle="tab" href="#transactions" role="tab" aria-controls="transactions" aria-selected="false">Transactions</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link subMenu" id="market-data-tab" data-toggle="tab" href="#market-data" role="tab" aria-controls="market-data" aria-selected="false">Market Data</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link subMenu" id="address-book-tab" data-toggle="tab" href="#address-book" role="tab" aria-controls="address-book" aria-selected="false">Address Book</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link subMenu" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false">Settings</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link subMenu" id="console-tab" data-toggle="tab" href="#console" role="tab" aria-controls="download" aria-selected="false">Console</a>
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
              <div class="intro-Wrapper customTab tab-pane fade<?php echo isset($_REQUEST['s'])?'':' active show';?>" id="intro" role="tabpanel" aria-labelledby="intro-tab">
                <!-- <div class="titleCol">
                  <h3>WALLET</h3>
                </div> -->
                <div class="mainBox">
                  <div class="column">
                    <div class="heading">
                      <h5>WALLET SUPPORT</h5>
                    </div>
                    <p>If you have any wallet related issues, or any general questions please join one of the Nexus Community Channels and post a message asking for help. The Nexus community consists of a diverse array of friendly and helpful
                      individuals – one of which will point you in the right direction whatever your query.</p>
                  </div>
                  <div class="column">
                    <div class="heading">
                      <h5>Disclaimer and loss of password</h5>
                    </div>
                    <p>NXS is a peer-to-peer digital currency that provides fast, low-cost, borderless, and secure transactions without the requirement of a bank or third-party intermediary. You personally own your NXS and Nexus Wallet, they are not
                      owned or governed by a central authority. This is in direct contrast to a personal bank, in which the money held inside an account is legal property of the bank rather than the account holder. Nexus provides individuals with
                      economic freedom, and with this freedom comes true responsibility for the safety of your own finances.</p>
                    <p>The Nexus Wallet is the safest place to store NXS. If coins are stored on a centralized exchange or a mining pool, then that entity has full custody. Third party custody comes with a multitude of risks. To ensure you maintain
                      ownership, we recommend that NXS is held in an encrypted Nexus Wallet. Nexus is a decentralized organization and our software is licensed under an MIT/X11 open source license. You are the sole custodian of your coins,<strong>we
                        can not help you if you lose or forget your encryption password.</strong></p>
                    <p><strong>Please make sure to keep your password and private keys extremely safe, and backed up.</strong></p>
                    <p>Disclaimers out of the way, now we can get started.</p>
                  </div>
                </div>
              </div>
              <div class="system-Wrapper customTab tab-pane fade" id="system" role="tabpanel" aria-labelledby="system-tab">
                <div class="titleCol">
                  <h3>SYSTEM REQUIREMENTS</h3>
                  <p>What are the minimum system requirements to run the Nexus Wallet?</p>
                </div>
                <div class="mainBox">
                  <div class="column">
                    <div class="circle-List">
                      <ul>
                        <li>Mac OS X Yosemite 10.10 or later</li>
                        <li>Windows 7 or later</li>
                        <li>Linux 64 Bit</li>
                        <li>512MB of RAM (1 GB Recommended)</li>
                        <li>7GB of disk space</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="getting-Wrapper customTab tab-pane fade" id="getting" role="tabpanel" aria-labelledby="getting-tab">
                <div class="titleCol">
                  <h3>Getting Started</h3>
                  <p>The Nexus Wallet can be accessed from any Mac, Windows or Linux computer simply by downloading and installing the desktop application.</p>
                </div>
              </div>
              <div class="download-Wrapper customTab tab-pane fade<?php echo $_REQUEST['s']=='download'?' active show':'';?>" id="download" role="tabpanel" aria-labelledby="download-tab">
                <div class="heading">
                  <h5>Step 1 – Downloading</h5>
                  <p>Download the wallet from <a href="https://github.com/Nexusoft/NexusInterface/releases" class="themeColor">Github</a>.</p>
                  <h6 style="color:#0ca4fb">How to verify installer's integrity</h6>
                  <div class="circle-List" style="display: block;">
                    <p>For better security, you can verify the integrity of the installer you’ve downloaded to make sure it’s original and hasn’t been tampered with. In order to do so, check the SHA-512 hash of the installer by following the instructions and compare the result you got with the correct hash provided below. If the hashes don’t match, please let Nexus team know about that.</p>
                    <p>&nbsp;</p>
                    <h6>How to get SHA-512 hash of a file</h6>
                    <p><b>On Windows</b></p>
                    <ol>
                    <li>Open Command Prompt (press <em>Windows + R</em>, type <strong>cmd</strong> into the textbox, then press <em>Enter</em>)</li>
                    <li>Type this command:
                    <pre><code>certUtil -hashfile pathToFile&nbsp;SHA512</code></pre>
                    <p>and press <em>Enter</em> (replace&nbsp;<code>pathToFile</code>&nbsp;with the path to the file that you’ve downloaded)</p>
                    </li>
                    </ol>
                    <p><b>On MacOS (OS X) and Linux</b></p>
                    <ol>
                    <li>Open Terminal</li>
                    <li>Type this command:&nbsp;<code>shasum -a512 pathToFile</code>&nbsp;and press <em>Enter</em>&nbsp;(replace&nbsp;<code>pathToFile</code>&nbsp;with the path to the file that you’ve downloaded)</li>
                    </ol>
                    <p>&nbsp;</p>

                    <?php
                        /* Request latest information from github. */
                        $ch = curl_init();
                        curl_setopt($ch, CURLOPT_URL, "https://api.github.com/repos/Nexusoft/NexusInterface/releases/latest");
                        curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1');
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                        /* Cleanup resources. */
                        $output = curl_exec($ch);
                        curl_close($ch);

                        /* Parse JSON data. */
                        $json = json_decode($output);

                        /* Echo the version. */
                        echo "<h6>SHA-512 Hashes –&nbsp;Nexus Wallet ".$json->tag_name."</h6><ul>";

                        /* Keyword searches (for the hashes). */
                        $array = array();
                        $items = array("Windows Installer", "Windows Zip", "Mac OSX Installer", "Mac OSX Unpacked", "Linux Deb", "Linux AppImage", "Linux Snap");

                        /* Search for hashes and update in associative container. */
                        $split = explode("- ", $json->body);
                        foreach($split as $key=>$value)
                        {
                            /* We want to check for occurances of our keywords. */
                            foreach($items as $item)
                            {
                                /* Check for keyword entry to find the appropriate hash */
                                if(strpos($value, $item) !== false)
                                {
                                    $array[$item] = explode("\r\n", $split[$key + 1])[0];
                                }
                            }
                        }

                        /* Add a list item for each hash that is found. */
                        foreach($array as $key=>$value)
                        {
                            echo "<li>".$key."<br><code>".$value."</code></li>";
                        }

                        /* Close the unordered list. */
                        echo "</ul>";
                    ?>
                  </div>
                </div>
              </div>
              <div class="installing customTab tab-pane fade" id="install" role="tabpanel" aria-labelledby="install-tab">
                <div class="heading">
                  <h5>Step 2 – Installing</h5>
                  <p>After downloading the wallet, follow the instructions to install the application. This will be a pop up tab when clicking on the downloaded wallet file. This file is likely to appear in your most recent downloads.</p>
                </div>
                <div class="img-items">
                  <p>Mac -> Simply drag the Nexus logo into the Application file, and follow the instructions.</p>
                  <span class="imgbox">
                    <img src="images/mac-install.png" alt="mac-install" />
                  </span>
                </div>
                <div class="img-items">
                  <p>Windows -> Simply save and then run the .exe file.</p>
                  <span class="imgbox">
                    <img src="images/windows-run1.png" alt="windows-run1" />
                  </span>
                </div>
                <div class="img-items">
                  <p><strong>Linux</strong>-> Simply click install and type in your password when prompted.</p>
                  <span class="imgbox">
                    <img src="images/linux-install.png" alt="linux-install" />
                  </span>
                </div>
              </div>
              <div class="t&Cs customTab tab-pane fade" id="t-c" role="tabpanel" aria-labelledby="t-c-tab">
                <div class="heading">
                  <h5>Step 3 – T&Cs</h5>
                  <p>The Nexus Wallet terms are under an MIT/X11 licence. They constitute a legally binding agreement and govern the use of the Nexus Wallet. These terms and conditions must be accepted prior to use :</p>
                  <p>The MIT License (MIT) <br> Copyright 2019 Nexus</p>
                  <p>Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the “Software”), to deal in the Software without restriction, including without limitation the
                    rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions :</p>
                  <p>The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.</p>
                  <p class="text-uppercase">THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN
                    NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
                    DEALINGS IN THE SOFTWARE.</p>
                  <p class="text-uppercase">IMPROPER USE OF THIS SOFTWARE COULD LEAD TO PERMANENT LOSS OF COIN.</p>
                </div>
              </div>
              <div class="synch synchronizing customTab tab-pane fade" id="synchronizing" role="tabpanel" aria-labelledby="synchronizing-tab">
                <div class="heading">
                  <h5>Step 4 – Synchronizing and QT Migration</h5>
                </div>
                <p>Before the wallet can be used, it needs to be synchronized with the Nexus Blockchain.</p>
                <p>There are two ways in which the wallet can be synchronized:</p>
                <div class="count-list">
                  <ul>
                    <li>Letting the wallet catch up with blocks on its own by just leaving the wallet open : approx 10 hours.</li>
                    <li>‘Bootstrapping’ the wallet (downloading the recent database) : approx 1-2 hours. To download the recent database please follow these instructions :</li>
                  </ul>
                </div>
                <div class="img-items">
                  <p>Click the top banner option ‘File’, and click on ‘Download Recent Database’.</p>
                  <span class="imgbox">
                    <img src="images/backupimage.png" alt="backupimage" />
                  </span>
                  <span class="databaseImg">
                    <img src="images/recentdb.png" alt="recentdb" />
                  </span>
                </div>
                <div class="img-items">
                  <p>Click, ‘Yes, let’s bootstrap it’. This will automatically download the database.</p>
                  <span class="databaseImg">
                    <img src="images/botstrap.png" alt="botstrap" />
                  </span>
                  <p>Please leave the wallet open while bootstrapping. Selecting the ‘Abort’ option will completely stop any progress which has been made with the download so far, and is not therefore advised.</p>

</p>If the bootstrapping pop up is minimised (by clicking off the pop up) then you will see that the wallet will still be syncing with the blockchain on its own (this can be seen from the Synching arrows in the top right hand corner and the Block Count number increasing on the Overview page). When the bootstrap file is downloaded this will override any progress the wallet has made syncing on its own.</p>

</p>After your wallet has downloaded the Recent Database, you will see the notification ‘Extracting Database’. You will need to wait for this to complete. Again, if you click ‘Abort’ all progress will be lost.</p>

</p>Once the extraction has finished, you will see the notification ‘Rescanning Database’, which will ensure that your wallet is up to date with the most recent transaction records.</p>

</p>Upon completing the bootstrap, the wallet will show 'Synchronising 99%' (if you hover over the left icon in the top right menu). This is perfectly normal, and highlights that the final 1% of ‘catching up’ is taking place which takes place automatically. This should take 10-15 minutes.</p>

</p>It is also important to remember that if you restart your core (when enabling staking for example) or close your wallet or if your device loses internet connection for even a minute, then you are likely to see that 'Synchronising 99%' in the top right icon menu again. Just wait for your device to catch up. You DO NOT need to re-download the database again (the database is only for when you initially install your wallet, or if your wallet has been closed for a considerable period of time, a year for example).</p>

</p>If you open your wallet and on all pages it says 'Loading/syncing, please wait...' for longer than 5 minutes, your core is not loading. In this scenario, we recommend restarting the wallet, and if that does not solve the problem, then please restart your device.</p>

</p>NOTE: If you previously had a wallet on the computer that you are using, it will AUTOMATICALLY import your wallet.dat into the new wallet. You do not need to do anything but sync your wallet.</p>

</p>Without a fully synchronised wallet, incoming transactions will not show up, balances will be missing, and you will be unable to send NXS. The wallet can be thought of as a window to view the blockchain - if your wallet is behind, and not in sync, it will not display the true status of your wallet on the blockchain.</p>
                </div>
                <div class="img-items">
                  <p>‘Synchronizing’, indicates that the wallet is catching up with the Nexus Blockchain, which can take some time. </p>
                  <span class="imgbox">
                    <img src="images/sync.png" alt="sync" />
                  </span>
                </div>
                <div class="img-items">
                  <p>When your wallet is ‘synchronized’ with the Nexus Blockchain, you will see a tick at the top right hand of your wallet. It is now ready to use.</p>
                  <span class="imgbox">
                    <img src="images/sync.png" alt="sync" />
                  </span>
                </div>
              </div>
              <div class="encrypting customTab tab-pane fade" id="encrypting" role="tabpanel" aria-labelledby="encrypting-tab">
                <div class="heading">
                  <h5>Step 5 – Encrypting</h5>
                  <p>By encrypting, we mean password protecting your Nexus Wallet.</p>
                </div>
                <div class="img-items">
                  <p>A newly downloaded wallet is unencrypted. The lock icon in the top right hand corner of your wallet will look like this as soon as you download the application:</p>
                  <span class="imgbox">
                    <img src="images/unecrypted.png" alt="backupimage" />
                  </span>
                  <p>Encrypting your wallet is recommended, as without encryption, NXS can be sent from your wallet without requiring password approval.</p>
                  <p>To encrypt your wallet, please follow these instructions :</p>
                  <p>Settings -> Security -> enter password -> re-enter password -> Encrypt and Restart</p>
                  <p><strong>It is imperative that your encryption password is both remembered and kept safe. </strong></p>
                  <p>If you lose your encryption password, you will not be able to withdraw any NXS from your wallet, essentially making your coins worthless. Since the encryption of your wallet is based on the password that you chose, and the
                    encryption process is facilitated by Nexus which is a decentralized system, there is no central authority to reset your password for you. So please ensure you keep your password safe. After encrypting your wallet, close and
                    re-open the application. Upon re-opening your wallet, the lock icon in the top right hand corner will look like this :</p>
                  <span class="d-inline-block">
                    <img src="images/lock-icon.png" alt="lock-icon" />
                  </span>
                </div>
              </div>
              <div class="login customTab tab-pane fade" id="login" role="tabpanel" aria-labelledby="login-tab">
                <div class="heading">
                  <h5>Step 6 – Login</h5>
                </div>
                <div class="img-items">
                  <p><strong>Login</strong></p>
                  <p>
                    <img src="images/not-logged-in.png" alt="not-logged-in" />
                  </p>
                  <p>The locked wallet icon in the top right hand corner highlights that the wallet has previously been encrypted, but you are not currently logged in.</p>
                  <p>To login, go to Settings -> Security page (or just click on the lock icon itself above) and enter your encryption password from Step 5.</p>
                  <p>
                    <img src="images/password-security.png" alt="password-security" />
                  </p>
                  <p>Once you are logged in, the wallet is unlocked and now ready to send NXS. Please note that you will be logged into the wallet indefinitely, unless you ‘Set timeout for login’ or manually log out. The following image will be
                    displayed on the top right hand corner of the ‘Overview’ page to show you are Logged in.</p>
                  <p>
                    <img src="images/logged-in.png" alt="logged-in" />
                  </p>
                  <p>There are 2 additional login options on the Security page:</p>
                  <div class="count-list">
                    <ul>
                      <li>
                        <span><strong>Login for staking & mining only</strong></span>
                        <p>With this login setting enabled, the wallet will be unable to send NXS. However, the wallet will be able to stake or mine (which is not the case when the wallet status is ‘Not Logged in’). The following image will be displayed on the top right hand corner of the ‘Overview’ page.</p>
                        <p>
                          <img src="images/staking-login.png" alt="staking-login" />
                        </p>
                      </li>
                      <li>
                        <span> <strong>Set timeout for login</strong></span>
                        <p>This login setting enables you to set the time period that you will be logged in to the wallet. The wallet will lock again after this date and time are reached, or if your wallet is restarted. </p>
                        <p>
                          <img src="images/timed-login.png" alt="timed-login" />
                        </p>
                        <p>The top right hand corner lock icon will now show this when the mouse is hovered over it :</p>
                        <p>
                          <img src="images/staking-login-1.png" alt="staking-login-1" />
                        </p>
                        <p>It is recommended that users only unlock your wallet when sending NXS, and keep your wallet as ‘Logged in for staking and mining only’ otherwise.</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="enable customTab tab-pane fade" id="enable-staking" role="tabpanel" aria-labelledby="enable-staking-tab">
                <div class="heading">
                  <h5>Step 7 – Enable staking</h5>
                 <p>What is Staking?</p>
                 </div>
		<p>Proof of stake is an energy efficient form of mining based on ownership of a digital currency. This ownership represents a ‘stake’ in the sense of an interest in something. By staking, NXS holders can earn a ‘stake rate’ between 0.5% and 3.0% per year on their holdings. NXS can only be staked inside the official Nexus Wallet when in ‘staking mode’ and with a continuous internet connection (24 hours a day, 7 days a week). In return stakers are rewarded for operating the wallet (a Nexus node) and mining Proof of Stake blocks, which provides security to the network.</p>
		<p>What is the ‘Stake Rate’?</p>
		<p>This value represents your current annual NXS rate of return (%).</p>
		<p>The rate starts at 0.5%, and can increase to 3.0% after 12 months of consistent staking. The rate increase is non linear, slowing in terms of its increase over time. It takes several weeks of consistent staking to reach 1.0%, and around four months to reach 2.0%. With this rate, you can calculate the average amount of NXS you can expect to receive each day for staking.</p>
		<p>Is there a minimum amount of NXS required to stake?
		<p>It is possible to stake with any amount of NXS at a rate of 0.5%. However, as of the 6th of June 2019 it takes around ten 10,000 NXS to be able to reach the maximum stake rate of 3.0%.</p>
     		<p>Similar to other forms of mining, ‘Proof of Stake’ mining has a level of ‘difficulty’. As more people successfully stake on the network, the difficulty of staking increases. This results in an increasing amount of NXS required to increase the stake rate. Furthermore, a larger balance of NXS in your wallet will increase the frequency of NXS rewards.</p>
		<p>Enable Staking<p>
<p>To enable staking - the wallet MUST be left open to stake. NXS Stake is earned by helping to operate and provide security to the network, and for that to happen the wallet must be left open and running with an internet connection 24/7.</p>
                <p>You must be ‘logged in’ to the wallet or have the wallet ‘logged in for staking and mining only’, in order to stake your NXS.</p>
                <p>You must have ‘staking enabled’ in order for your wallet to receive trust payments. This is to prevent people from unintentionally staking coins.</p>
                <p><strong>Step 1</strong></p>
                <p>Once logged in, you can enable staking by following these instructions :</p>
                <p>Settings -> Core -> ‘Enable staking’</p>
                <p>
                  <img src="images/enable-staking.png" alt="enable-staking" />
                </p>
                <p>When this setting is enabled, the following will be displayed when hovering your mouse over the Nexus logo icon in the top right hand corner (essentially the values will no longer be zero):</p>
                <p><strong>Step 2</strong></p>
                <p>A wallets first Proof of stake block is referred to as a ‘Genesis’ transaction. This may take three days or more to receive, and will require the wallet to be open and connected to the internet.</p>
                <p>The receipt of a Genesis NXS transaction will be indicated in the page named ‘Transactions’.</p>
                <p>After receiving a Genesis transaction, a staking wallet will receive ongoing ‘Trust Transactions’, as further staking rewards. Please note that your Genesis transaction is likely to be larger than that of subsequent Trust Transactions, and these will vary in size.</p>
                <p><strong>How do I unlock my Wallet to send NXS while staking?</strong></p>
                <p>If you wish to send NXS, and your wallet is logged in for ‘staking and mining only’, please do the following :</p>
                <div class="count-list">
                  <ul>
                    <li>Settings -> Security -> Log Out</li>
                    <li>Settings -> Security -> Log in (with the ‘Login for staking only’ mode disabled (circle is grey and to the left).</li>
                  </ul>
                </div>
                <p>By hovering your mouse over the Nexus logo an overview of your staking values are displayed. These values are also on the right hand side of the Overview page, and explained in the wallet features section.</p>
              </div>
              <div class="backup-wallet customTab tab-pane fade" id="back-wallet" role="tabpanel" aria-labelledby="back-wallet-tab">
                <div class="heading">
                  <h5>Step 8 – Backup Your wallet</h5>
                  <p>IMPORTANT – After you receive a Genesis transaction, please backup your wallet immediately. For extra security, we recommend storing this backup file on one or more devices. To backup your wallet, please follow these
                    instructions :</p>
                </div>
                <div class="img-items">
                  <p>File -> Backup Wallet</p>
                  <p>
                    <img src="images/backup-file.png" alt="backup-file" />
                  </p>
                  <p>
                    <img src="images/backup-location.png" alt="backup-location" />
                  </p>
                  <p>or</p>
                  <p>Settings -> Application -> ‘Backup Wallet’ (Button)</p>
                  <p>
                    <img src="images/app-backup.png" alt="app-backup" />
                  </p>
                  <p>YYou will notice the files are saved as .dat files - this is what is termed ‘backing up your wallet.dat’.</p>
                  <p>A wallet without a backup could lead to a loss of access to your wallet if you were to experience a hard drive failure, or lose possession of your device. In addition to backing up your wallet after receiving a Genesis
                    transaction, it is also recommended that you periodically backup your wallet every few weeks.</p>
                </div>
              </div>
              <div class="wallet-feat customTab tab-pane fade" id="wallet-feat" role="tabpanel" aria-labelledby="wallet-feat-tab">
                <div class="titleCol">
                  <h3>WALLET FEATURES</h3>
                </div>
                <p>The bottom menu highlights the different pages of the wallet. These are comparable to the default applications of a smartphone – they cannot be removed :</p>
                <div class="circle-List">
                  <ul>
                    <li>Overview</li>
                    <li>Send NXS</li>
                    <li>Transactions</li>
                    <li>Market Data</li>
                    <li>Address book</li>
                    <li>Settings</li>
                    <li>Console</li>
                  </ul>
                </div>
              </div>
              <div class="overview customTab tab-pane fade" id="overview" role="tabpanel" aria-labelledby="overview-tab">
                <div class="heading">
                  <h5>Overview</h5>
                </div>
                <p>The overview is the wallet home page. The purpose of the globe is to show a selection of nodes which your wallet is connected to.</p>
                <p><strong>The figures on the left hand side of the Overview page : </strong></p>
                <p><strong>Balance (NXS) : </strong> Your NXS balance inside of your wallet.</p>
                <p><strong>Balance (USD) : </strong>The USD value of your wallet – calculated by multiplying Balance (NXS) x Market Price (USD). The wallet comes with USD as the default currency, to change currency do the following : Settings ->
                  Application -> Fiat Currency.</p>
                <p><strong>Transactions : </strong>The total number of transactions you have made inside the wallet. These transactions include incoming payments, outgoing payments, and stake Reward related transactions (Genesis and Trust
                  transactions).</p>
                <p><strong>Market Price (USD) : </strong>The value of 1NXS in your chosen default currency (in this case USD). </p>
                <p><strong>Market Cap (USD) :</strong>The total value of all NXS. This is calculated by multiplying the Market Price (USD) x Total NXS Circulating Supply.</p>
                <p><strong>24HR Change (USD%) : </strong>The value change in NXS over the last 24 hours.</p>
                <p><strong>The figures on the right hand side of the Overview page: </strong></p>
                <p><strong>Connections: </strong>This refers to the amount of random ‘nodes’ which are connected to yours. Sixteen is the maximum number of connections. More connections generally means your transactions and blocks will relay across the network more reliably. The max value here is 16 connections, but 16 connections are not required. Anything above 4 is adequate.</p>
            	<p><strong>Block Count: </strong>The block count is the ‘height’ of the blockchain. This number allows you to check with one of the Nexus Explorer applications to see if the block you are on is the current block (meaning you are
                  up to date). If the block value on your wallet does not match that of a Nexus Explorer, then you are not in sync with the Nexus Blockchain and need to ‘Download the Recent Database’ to catch up with the Nexus Blockchain
                  (Settings -> Download Recent Database). Another way to tell if you are in sync or not, an easier way, is to look at the far left icon in the top right hand corner of the wallet. Synchronizing : not up to date. vs. Synchronized :
                  up to date.</p>
		<p><strong>The values below relate to Staking.</strong></p>
                <p><strong>Block Weight : </strong>Upon receipt of a Genesis transaction, this value will begin increasing slowly, reaching 100% in 3 days time. Every time you receive a staking transaction, the block weight resets.</p>
                <div class="circle-List">
                  <ul>
                    <li>Your wallet must mine a stake block and generate a transaction before it reaches 100% for trust weight and stake rate to keep increasing. </li>
                    <li>If your block weight reaches 100%, it will stay at 100% and both your trust weight and stake rate will begin to decay.</li>
                  </ul>
                </div>
                <p><strong>Trust Weight : </strong>An indication of how much the network trusts your node. It starts at 1.11% and increases in a nonlinear manner like stake rate does. Your level of trust increases your stake weight (below), thus
                  increasing your chances of mining stake blocks and receiving staking rewards. It becomes easier to maintain trust as this value increases.</p>
                <div class="circle-List">
                  <ul>
                    <li>For new wallets staking Genesis, trust weight is based on coin age with a maximum of 11%.</li>
                    <li>After Genesis, trust weight is a measure of the overall trust score you have accrued. It is displayed as a percentage of the maximum possible trust score.</li>
                    <li>The time investment needed to build trust increases network security.</li>
                    <li>Trust score takes 84 days of successful staking to reach 50% trust weight, and 364 days to reach 100%.</li>
                  </ul>
                </div>
                <p><strong>Stake Weight: </strong>The higher your stake weight, the greater your chances of receiving a trust transaction. The exact value is derived from your trust weight and block weight.</p>
                <div class="circle-List">
                  <ul>
                    <li>stake weight is a derivative value calculated from trust weight and block weight. It indicates their combined impact on chances to generate a staking transaction.</li>
                    <li>The value will change as trust weight and block weight change.</li>
                    <li>It is for display only as a metric, and is not directly used. Trust weight and block weight values are used.</li>
                  </ul>
                </div>
                </p>
              </div>
              <div class="send-nxs customTab tab-pane fade" id="send-NXS" role="tabpanel" aria-labelledby="send-NXS-tab">
                <div class="heading">
                  <h5>Send NXS</h5>
                </div>
                <p>Features</p>
                <p><strong>Send From : </strong>Select the address you wish to send NXS from. The list contains the contacts you have saved in ‘My Addresses’.</p>
                <p><strong>Send To : </strong>Either copy and paste the payee address in this box, or save the payee as a new contact in your Address Book, and select them in the Send To dropdown. </p>
                <p><strong>Fee : </strong>This transaction fee is the one saved in Settings -> Core -> Optional transaction fee</p>
                <p><strong>Message : </strong>Enter a message for your transaction.</p>
                <p>Move NXS between accounts :</p>
                <p>If you wish to see the NXS balance for your different accounts, click on the top right hand corner wallet icon :</p>
              </div>
              <div class="transactions customTab tab-pane fade" id="transactions" role="tabpanel" aria-labelledby="transactions-tab">
                <div class="heading">
                  <h5>Transactions</h5>
                </div>
                <p>The transactions page displays all the wallet transactions, and breaks them down by type :</p>
                <p><strong>Receive : </strong>A Transaction that has been sent from another address to your wallet</p>
                <p><strong>Sent : </strong>A Transaction sent to another address</p>
                <p><strong>Genesis : </strong>The Genesis transaction for staking</p>
                <p><strong>Trust : </strong>Stake reward transactions</p>
                <p><strong>Pending : </strong>An unconfirmed transaction set by the user’s settings (default 3 confirmations)</p>
                <p><strong>Immature : </strong>Generated blocks that have not been confirmed by the network (10 confirmations)</p>
                <p><strong>Generate : </strong>NXS Generated by the network</p>
		<p>Click on any transaction to see more details, such as the address, transaction ID, hash and number of confirmations:</p>
              </div>
              <div class="market-data customTab tab-pane fade" id="market-data" role="tabpanel" aria-labelledby="market-data-tab">
                <div class="heading">
                  <h5>Market Data</h5>
                </div>
                <p>This page provides market data from two digital currency exchanges : Binance & Bittrex.</p>
                <p>By clicking on the exchange logos, you will be directed to the respective NXS order books.</p>
              </div>
              <div class="address-book customTab tab-pane fade" id="address-book" role="tabpanel" aria-labelledby="address-book-tab">
                <div class="heading">
                  <h5>Address Book</h5>
                </div>
                <div class="circle-List">
                  <ul>
                    <li>The first icon, representing My Addresses (also in the top right hand corner of the wallet) displays your saved NXS addresses. Here you can also create new NXS addresses.</li>
                    <li>The second icon, New Contact, allows you to add new addresses to your Address Book. Addresses saved in your Address Book will appear in the ‘Send To’ section of the Send NXS page.</li>
                    <li>The third icon, ‘Export Contacts’, allows you to export your contacts in a .csv file.</li>
                    <li>This icon on the top right corner will take you to your NXS addresses. </li>
                  </ul>
                </div>
              </div>
              <div class="setting customTab tab-pane fade" id="setting" role="tabpanel" aria-labelledby="setting-tab">
                <div class="heading">
                  <h5>Settings</h5>
                </div>
                <p>There are 5 tabs within settings : Application, Core, Security, Style, Modules.</p>
                <p>By clicking on the exchange logos, you will be directed to the respective NXS order books.</p>
                <div class="heading">
                  <h6>A) Application</h6>
                </div>
                <p><strong>Language</strong></p>
                <p>Select your language of choice. The default language is English. </p>
                <p>Minimize on close</p>
                <p>With this enabled, even though the wallet disappears, it is still open in the background. To re-open your Nexus Wallet do the following :</p>
                <p>Mac : Click on the Nexus logo in the top right hand corner, and then click ‘Show Nexus Wallet’</p>
                <p>Windows : Click on the Nexus logo in the bottom right hand corner menu, and then click ‘X’</p>
                <p>With this enabled, your wallet (node) will still be online; this is therefore advisable. If your wallet application is closed fully (Minimize on Close setting Disabled), then you will not be in sync with the Nexus Blockchain
                  when you next open the application, and will therefore need to catch up to the current block.</p>
                <p><strong>Auto update</strong></p>
                <p>Rather than having to manually download a new wallet each time a new update is released, which is a common necessity with many digital currency wallets, the Nexus Wallet notifies you of an update to be accepted, comparable to
                  regular computer software updates.</p>
                <p>We recommend this setting remains enabled. This setting enabled will automatically check for new versions and notify you if a new version is available. If automatic updates are not enabled, you will be required to manually download the new wallet version either from github.com/Nexusoft/NexusInterface or our website.</p>
                <p>Any wallet updates will show in a pop up box. These updates must be installed as soon as possible. Not having your wallet on the newest version update will put your coins at risk, and could mean you are no longer synchronised
                  with the Nexus Blockchain.<p>
		<p>Please ensure you update your wallet as soon as you are notified of an update.</p>
                <p><strong>Send anonymous usage data</strong></p>
                <p>Send anonymous data usage to allow the Nexus developers to improve the wallet.</p>
                <p><strong>Fiat Currency</strong></p>
                <p>The option selected will be the currency in which the Balance, Market Price, Market Cap & 24hr is displayed in. The default currency is USD.</p>
                <p><strong>Minimum Confirmations</strong></p>
                <p>Minimum amount of confirmations before a block is accepted. The minimum number of confirmations is 1, but you are allowed to customize how many you require to wait before your wallet sees the transaction as valid. 3 to 6
                  confirmations are recommended to maintain high levels of security. </p>
                <p><strong>Backup Directory</strong></p>
                <p>This is where your Nexus Wallet Backups are stored. When you click ‘Backup Wallet’, you are prompted with a dialogue box that allows you to select a custom directory other than the default ‘Nexus Backups’ directory.</p>
                <p><strong>Developer Mode</strong></p>
                <p>Development mode enables advanced features to aid in development. After enabling, the wallet must be closed and reopened to enable those features.</p>
                <p><strong>Backup Wallet</strong></p>
                <p><strong>IMPORTANT</strong> – Backing up your wallet regularly is recommended. For extra security, we recommend storing this backup file on one or more devices. Weekly, bi-weekly or monthly backups are recommended, but for
                  maximum security we recommend the following : </p>
                <div class="count-list">
                  <ul>
                    <li>Back up after encryption</li>
                    <li>Back up after Genesis transaction</li>
                    <li>Back up periodically (aim for weekly, but at least monthly).</li>
                  </ul>
                </div>
                <p>To backup your wallet, please follow these instructions :</p>
                <p>Click on Settings and then go to the Application Tab (or File > Backup Wallet) and click Backup Wallet. </p>
                <p>This will copy your wallet.dat file with the date and time in the NexusBackups folder created in your home directory. It is recommended to also save the wallet.dat file on a device off of your computer, creating a backup by
                  copying the file onto a flash drive. Make sure to have multiple backups of your wallet.dat file.<strong>DO NOT LOSE OR DELETE YOUR WALLET.DAT FILE.</strong></p>
                <p>or</p>
                <p>Settings -> Application -> ‘Backup Wallet’ (Button) </p>
                <p>A wallet without a backup could lead to a loss of access to your wallet if you were to experience a hard drive failure, or lose possession of your device. </p>
                <div class="heading">
                  <h6>B) Core</h6>
                </div>
                <p><strong>Enable mining</strong></p>
                <p>With mining enabled, your wallet will run a special server called the ‘Mining LLP’, which will allow you to connect an external miner to your wallet for producing blocks on the Prime or Hash channels. </p>
                <p><strong>Enable staking</strong></p>
                <p>You must be ‘logged in’ to the wallet or have the wallet ‘logged in for staking and mining only’, in order to stake.</p>
                <p>You must also have ‘staking enabled’ in order for your wallet to receive trust payments. This is to prevent people from unintentionally staking coins. </p>
                <div class="heading">
                  <h6>Step 1 - Enable Staking</h6>
                </div>
                <p>Settings -> Core -> ‘Enable staking’</p>
                <p>Add image</p>
 <p>This will reset the core of the wallet.</p>
 <p>Now the wallet has staking enabled, you need to log in.</p>
  		<div class="heading">
               <h6>Step 2 Login:</h6>
                </div>
		<p>Settings -> Core -> Security -> Login (normally or for ‘staking and mining only’)</p>
		<p>You can tell your wallet is staking by looking at the Nexus logo in the top right hand corner of the wallet:</p>
		<p>If your wallet is not staking, this could be due to one or more of the following:</p>
		<p>Staking disabled (see step 1)</p>
		<p>Not logged in (see step 2)</p>
		<p>Not enough NXS in the wallet (can be checked by clicking on mining display setting)</p>
		<p>A wallets first Proof of stake block is referred to as a ‘Genesis’ transaction. This may take three days or more to receive, and will require the wallet to be open and connected to the internet.</p>
	<p>The receipt of a Genesis NXS transaction will be indicated in the page named ‘Transactions’.</p>
	<p>After receiving a Genesis transaction, a staking wallet will receive ongoing ‘Trust Transactions’, as further staking rewards. Please note that your Genesis transaction is likely to be larger than that of subsequent Trust Transactions, and these will vary in size.</p>
	<p>How do I unlock my Wallet to send NXS while staking?
If you wish to send NXS, and your wallet is logged in for ‘staking and mining only’, please do the following:</p>
	<p>1. Settings -> Security -> Log Out</p>
	<p>2. Settings -> Security -> Log in (with the ‘Login for staking only’ mode disabled (circle is grey and to the left).</p>
	<p>By hovering your mouse over the Nexus logo an overview of your staking values are displayed. These values are also on the right hand side of the Overview page, and explained in the wallet features section.</p>
	<p><strong>Rescan Wallet</strong></p>
                <p>Used to correct transaction/balance issues, scans over every block in the database. This could take up to 6 minutes depending on your device. Use this tool sparingly.</p>
                <p><strong>Verbose Level</strong></p>
                <p>Verbose level for logs shows more under the hood data on the network. We recommend that you run verbose level 0 if you don’t need to see a lot of logging information. If you experience wallet troubles though, more debug data is important for the developers to use to find bugs and push new releases. Use this setting at your own discretion.</p>
                <p><strong>Manual Daemon Mode</strong></p>
                <p>Enable manual daemon mode if you are running the daemon manually outside of the wallet. This will shut down your daemon. We only recommend this setting for intermediate to advanced users that want to keep their daemon up to date with the newest developments before releases are public. YOUR WALLET WILL NOT WORK if you have this setting enabled, and have failed to launch an external Daemon.<strong>If this doesn’t make sense to you, we recommend you not enable this setting.</strong></p>
                <p><strong>Restart Core</strong></p>
                <p>This button will restart the daemon. Do this if you believe your wallet is frozen, and it needs to be refreshed. Upon doing so, on most pages you will see the following text : ‘Loading daemon, Please Wait…’. It should take less
                  than 30 seconds before the wallet is refreshed. If your daemon doesn’t start back up in this timeframe, restart the wallet application.</p>
                <div class="heading">
                  <h6>C) Security</h6>
                </div>
                <p>Under the security tab, you can change your password, and import private keys from another wallet.</p>
                <p>A private key is what gives you access to your coins, and what is stored in your wallet.dat file. If you are a more advanced user and have made a backup of your wallet private keys, this is the area where you can import them
                  into your wallet. </p>
                <p>PLEASE NOTE : you will need to run ‘rescan’ after importing new keys into your wallet. This is because your wallet needs to keep a list of the transactions that are associated with your private keys, in order to build new transactions and spend your funds. </p>
                <p>Any keys that are imported into an encrypted wallet will automatically be encrypted up import. <strong>You DO NOT need to re-encrypt your wallet after you import new private keys.</strong></p>
                <div class="heading">
                  <h6>D) Style</h6>
                </div>
                <p><strong>Render Globe</strong></p>
                <p>Turn the globe on the Overview page on or off. </p>
                <p><strong>Overview Display</strong></p>
                <p>Standard : The wallet comes with this overview display (Globe displayed on the Overview page).</p>
		<p><strong>Hidden Balance</strong></p>
		</p>This is the same as the standard overview display, except here rather than showing your true balance for the ‘Balance’ and ‘Immature Balance’ fields on the Overview page, a hyphen will replace the Balance value.</p>
</p>Miner: Changes the 3 tabs in the bottom right of the Overview page: Prime Difficulty, Hash Difficulty, Stake Difficulty.</p>
                <p>None : Blank overview display.</p>
                <p><strong>Nexus Address Format</strong></p>
                <p>These different address formats are purely for visual purposes only – they do not change the address, and the spaces for ‘Segmented’ format and the ‘…’ in Truncated format are not included when copying and pasting the address.</p>
                </p>
                <p><strong>Theme</strong></p>
                <p>We provide two default themes Dark and Light.</p>
                <p><strong>Background</strong></p>
                <p>We provide two default default backgrounds Twinkling stars and Cosmic Light.</p>
                <p><strong>Color scheme</strong></p>
                <p>Change the colors to customize your own theme. Upon changing a color in one of the default themes you will see that your ‘Theme’ changes from either Dark or Light to ‘Custom theme’. If you were to then revert back from Custom theme to Dark theme for example, and then back to ‘Custom theme’, you will find that your custom theme has been saved.</p>
                <p>– Reset Style Settings : to revert back to the original wallet color theme. Then scroll down and click : ‘Save Settings’ to implement these changes.</p>
                <p><strong>Import Custom Theme :</strong> A variety of custom themes created by the Nexus community can be imported into the wallet. The below link holds a repository of community made themes. The background can be imported from your local machine, or enter a URL and the wallet will download the background for you. Acceptable formats are PNG/JPEG/BMP/TIFF/GIF.</p>
                <a href=https://github.com/KenCorma/Nexus-Wallet-Themes class="btn btn-primary" style="margin: 10px;">Skin Repository</a>
		<p>Export Custom Theme: </p>
 <p>Themes are Json files that are read by the system and apply changes to the interface. When you export a theme, you will be prompted to save the json file to your computer. Below is a link to the theme guide which describes how to develop themes. If you would like to, please request that your theme is included in the official repository for it to be shared with the community. </p>
<a href=https://github.com/Nexusoft/NexusInterface/blob/master/docs/Themes.md class="btn btn-primary">Design Your Own Skin</a>
                <div class="heading">
                  <h6>E) Modules</h6>
                </div>
                <p>Security is very important, and therefore modules are sandboxed to prevent any misuse.</p>
                <p>To import a module, simply drag the file into the center of this page.</p>
                <p>Module app icons will appear in the bottom menu to the right of the Console icon.</p>
                <p>Documentation on how to write modules : <a href=https://nexusoft.github.io/nw-modules-documentation/ class="themeColor">https://nexusoft.github.io/nw-modules-documentation/</a></p>
                <p>We recommend using one of these links as a starting point :</p>
                <p>React-Redux Example : <a href=https://nexusoft.github.io/nw-modules-documentation/ class="themeColor">https://github.com/Nexusoft/react_redux_module_example</a></p>
                <p>React Example : <a href=https://github.com/Nexusoft/simple_react_module_example class="themeColor">https://github.com/Nexusoft/simple_react_module_example</a></p>
                <p>HTML Example : <a href=https://github.com/Nexusoft/minimal_module_example class="themeColor">https://github.com/Nexusoft/minimal_module_example</a></p>
          </div>

              <div class="console customTab tab-pane fade" id="console" role="tabpanel" aria-labelledby="console-tab">
                <div class="heading">
                  <h5>Console</h5>
                </div>
                <p>The console area of the wallet is the most ‘technical’ part. We’d recommend only using this if you feel comfortable with CLI (Command Line Interface), or have to.</p>
                <p>Within the Console, a variety of commands can be made that send instructions to the daemon. This is very useful for debugging your wallet, and will be used to develop more functionality as developers extrapolate new modules
                  from the available data on our blockchain :</p>
                <p>Entering the text ‘Help’ into the console and then pressing Execute will provide a complete list of all the console commands as below :</p>
                <p><strong>addmultisigaddress </strong> &lt;nrequired&gt; <‘[“key”,”key”]’> [account] – Add a required-to-sign multisignature address to the wallet each key is a nexus address or hex-encoded public key. If [account] is specified,
                    assign address to [account].</p>
                <p><strong>backupwallet </strong> &lt;destination&gt; – Safely copies wallet.dat to destination, which can be a directory or a path with filename.</p>
                <p><strong>checkwallet </strong> – Check wallet for integrity.</p>
                <p><strong>dumpprivkey </strong> &lt;NexusAddress&gt; – Reveals the private key corresponding to &lt;NexusAddress&gt;</p>
                <p><strong>echo </strong> [param]…[param] – Test function that echo’s back the parameters supplied in the call. </p>
                <p><strong>encryptwallet </strong> &lt;passphrase&gt; – Encrypts the wallet with &lt;passphrase&gt;</p>
                <p><strong>getaccount </strong> &lt;Nexusaddress&gt; – Returns the account associated with the given address.</p>
                <p><strong>getaccountaddress </strong> &lt;account&gt; – Returns the current Nexus address for receiving payments to this account.</p>
                <p><strong>getaddressesbyaccount </strong> &lt;account&gt; – Returns the list of addresses for the given account.</p>
                <p><strong>getbalance </strong> [account] [minconf=1] – If [account] is not specified, returns the server’s total available balance. If [account] is specified, returns the balance in the account. </p>
                <p><strong>getblock </strong> &lt;hash&gt; [txinfo] – txinfo optional to print more detailed tx info. Returns details of a block with given block-hash.</p>
                <p><strong>getblockcount </strong> – Returns the number of blocks in the longest block chain.</p>
                <p><strong>getblockhash </strong> &lt;index&gt; – Returns hash of block in best-block-chain at &lt;index&gt;</p>
                <p><strong>getblocknumber </strong> – Deprecated. Use getblockcount.</p>
                <p><strong>getconnectioncount </strong> – Returns the number of connections to other nodes.</p>
                <p><strong>getdifficulty </strong> – Returns difficulty as a multiple of the minimum difficulty.</p>
                <p><strong>getinfo </strong> – Returns an object containing various state info. </p>
                <p><strong>getmininginfo </strong> – Returns an object containing mining-related information.</p>
                <p><strong>getmoneysupply </strong> &lt;timestamp&gt; – Returns the total supply of Nexus produced by miners, holdings, developers, and ambassadors. Default timestamp is the current Unified timestamp. The timestamp is recorded as
                  a UNIX timestamp </p>
                <p><strong>getnetworkhashps </strong> – Get network hashrate for the hashing channel.</p>
                <p><strong>getnetworkpps </strong> – Get network prime searched per second.</p>
                <p><strong>getnetworktrustkeys </strong> – List all the Trust Keys on the Network</p>
                <p><strong>getnewaddress </strong> [account] – Returns a new Nexus address for receiving payments. If [account] is specified (recommended), it is added to the address book so payments received with the address will be credited to
                  [account]. </p>
                <p><strong>getpeerinfo </strong> – Returns data about each connected network node.</p>
                <p><strong>getrawtransaction </strong> &lt;txid&gt; – Returns a std : :string that is serialized, hex-encoded data for &lt;txid&gt;</p>
                <p><strong>getreceivedbyaccount </strong> &lt;account&gt; [minconf=1] – Returns the total amount received by addresses with &lt;account&gt; in transactions with at least [minconf] confirmations.</p>
                <p><strong>getreceivedbyaddress </strong> &lt;Nexusaddress&gt; [minconf=1] – Returns the total amount received by &lt;Nexusaddress&gt; in transactions with at least [minconf] confirmations.</p>
                <p><strong>getsupplyrates </strong> – Returns an object containing current Nexus production rates in set time intervals. Time Frequency is in base 13 month, 28 day totalling 364 days. This is to prevent error from Gregorian
                  Figures.</p>
                <p><strong>gettransaction </strong> &lt;txid&gt; – Get detailed information about &lt;txid&gt;</p>
                <p><strong>help </strong> [command] – List commands, or get help for a command.</p>
                <p><strong>importprivkey </strong> &lt;PrivateKey&gt; [label] – Adds a private key (as returned by dumpprivkey) to your wallet.</p>
                <p><strong>isorphan </strong> &lt;hash&gt; – Returns whether a block is an orphan or not</p>
                <p><strong>&gt; keypoolrefill </strong> – Fills the keypool, requires wallet passphrase to be set.</p>
                <p><strong>&gt; listaccounts </strong> – Returns object that has account names as keys, account balances as values.</p>
                <p><strong>&gt; listaddresses </strong> [max=100] – Returns list of addresses</p>
                <p><strong>&gt; listreceivedbyaccount </strong> [minconf=1] [includeempty=false] – [minconf] is the minimum number of confirmations before payments are included. [includeempty] whether to include accounts that haven’t received any
                  payments.</p>
                <p>– Returns an array of objects containing :</p>
                <p>“account”  : the account of the receiving addresses</p>
                <p>“amount”  : total amount received by addresses with this account</p>
                <p>“confirmations”  : number of confirmations of the most recent transaction included</p>
                <p><strong>&gt; listreceivedbyaddress </strong> [minconf=1] [includeempty=false] – [minconf] is the minimum number of confirmations before payments are included. [includeempty] whether to include addresses that haven’t received
                  any payments.</p>
                <p>– Returns an array of objects containing :</p>
                <p>“address”  : receiving address</p>
                <p>“account”  : the account of the receiving address</p>
                <p>“amount”  : total amount received by the address</p>
                <p>“confirmations”  : number of confirmations of the most recent transaction included</p>
                <p><strong>&gt; listsinceblock </strong> [blockhash] [target-confirmations] – Get all transactions in blocks since block [blockhash], or all transactions if omitted</p>
                <p><strong>&gt; listtransactions </strong> [account] [count=10] [from=0] – Returns up to [count] most recent transactions skipping the first [from] transactions for account [account].</p>
                <p><strong>&gt; listtrustkeys </strong> – List all the Trust Keys this Node owns.</p>
                <p><strong>&gt; listunspent </strong> [minconf=1] [maxconf=9999999] [“address”,…] – Returns array of unspent transaction outputswith between minconf and maxconf (inclusive) confirmations. Optionally filtered to only include txouts
                  paid to specified addresses.</p>
                <p>– Results are an array of objects, each of which has :{txid, vout, scriptPubKey, amount, confirmations}</p>
                <p><strong>&gt; makekeypair </strong> [prefix] – Make a public/private key pair. [prefix] is optional preferred prefix for the public key.</p>
                <p><strong>&gt; move </strong> &lt;fromaccount&gt; &lt;toaccount&gt; &lt;amount&gt; minconf=1] [comment] – Move from one account in your wallet to another.</p>
                <p><strong>&gt; repairwallet </strong> – Repair wallet if checkwallet reports any problem.</p>
                <p><strong>&gt; rescan </strong> – Rescans the database for relevant wallet transactions.</p>
                <p><strong>&gt; reset </strong> – Restart all node connections</p>
                <p><strong>&gt; sendfrom </strong> &lt;fromaccount&gt; &lt;toNexusaddress&gt; &lt;amount&gt; [minconf=1] [comment] [comment-to] – &lt;amount&gt; is a real and is rounded to the nearest 0.000001 requires wallet passphrase to be set
                  with walletpassphrase first</p>
                <p><strong>&gt; sendmany </strong> &lt;fromaccount&gt; {address :amount,…} [minconf=1] [comment] – amounts are double-precision floating point numbers requires wallet passphrase to be set with walletpassphrase first</p>
                <p><strong>&gt; sendrawtransaction </strong> &lt;hex std : :string&gt; [checkinputs=0] – Submits raw transaction (serialized, hex-encoded) to local node and network. If checkinputs is non-zero, checks the validity of the inputs of
                  the transaction before sending it.</p>
                <p><strong>&gt; sendtoaddress </strong> – &lt;Nexusaddress&gt; &lt;amount&gt; [comment] [comment-to] &lt;amount&gt; is a real and is rounded to the nearest 0.000001 requires wallet passphrase to be set with walletpassphrase first
                </p>
                <p><strong>&gt; setaccount </strong> &lt;Nexusaddress&gt; &lt;amount&gt; – Sets the account associated with the given address.</p>
                <p><strong>&gt; signmessage </strong> &lt;Nexusaddress&gt; &lt;amount&gt; – Sign a message with the private key of an address</p>
                <p><strong>&gt; stop </strong> – Stop Nexus server.</p>
                <p><strong>&gt; unspentbalance </strong> [“address”,…] – Returns the total amount of unspent Nexus for given address. This is a more accurate command than Get Balance.</p>
                <p><strong>&gt; validateaddress </strong> &lt;Nexusaddress&gt; – Return information about &lt;Nexusaddress&gt;</p>
                <p><strong>&gt; verifymessage </strong> &lt;Nexusaddress&gt; &lt;signature&gt; &lt;message&gt;– Verify a signed message</p>
                <p><strong>&gt; walletlock </strong> – Removes the wallet encryption key from memory, locking the wallet. After calling this method, you will need to call walletpassphrase again before being able to call any methods which require
                  the wallet to be unlocked.</p>
                <p><strong>&gt; walletpassphrase </strong> &lt;passphrase&gt; [timeout] [mintonly] – Stores the wallet decryption key in memory for [timeout] seconds. mintonly is optional true/false allowing only block minting. timeout is ignored
                  if mintonly is true / 1</p>
                <p><strong>&gt; walletpassphrasechange </strong> &lt;oldpassphrase&gt; &lt;newpassphrase&gt; – Changes the wallet passphrase from &lt;oldpassphrase&gt; to &lt;newpassphrase&gt;</p>
                <p><strong>Core Output</strong></p>
                <p>Depending on what setting you use for ‘Verbose’, this will show you live output from your actual Nexus Node. We don’t recommend every user watch this closely, as it is more technical information. But if you are ever curious to
                  see what is going on under the hood, this is the place to watch.</p>
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
