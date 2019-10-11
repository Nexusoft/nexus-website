<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg purchase_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>Purchase</h2>
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
                        <a class="nav-link active overview" id="over-tab" data-toggle="tab" href="#over" role="tab" aria-controls="over" aria-selected="true">Process</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="buy-tab" data-toggle="tab" href="#buy" role="tab" aria-controls="buy" aria-selected="false">Purchase BTC</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="coinbase-tab" data-toggle="tab" href="#coinbase" role="tab" aria-controls="coinbase" aria-selected="false">Coinbase</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="gdax-tab" data-toggle="tab" href="#gdax" role="tab" aria-controls="gdax" aria-selected="false">GDAX</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="buy-nxs-tab" data-toggle="tab" href="#buy-nxs" role="tab" aria-controls="buy-nxs" aria-selected="false">Purchase NXS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="binance-tab" data-toggle="tab" href="#binance" role="tab" aria-controls="binance" aria-selected="false">Binance</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="bittrex-tab" data-toggle="tab" href="#bittrex" role="tab" aria-controls="bittrex" aria-selected="false">Bittrex</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="bcbitcoin-tab" data-toggle="tab" href="#bcbitcoin" role="tab" aria-controls="bcbitcoin" aria-selected="false">BC Bitcoin</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="sending-tab" data-toggle="tab" href="#sending" role="tab" aria-controls="sending" aria-selected="false">Sending NXS to Your Wallet</a>
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
                      <h3>Process</h3>
                      <p>The basic process for buying NXS involves two simple steps:</p>
                    </div>
                    <div class="count-list">
                      <ul>
                        <li>Purchase BTC with fiat currency ($, €, £ ).</li>
                        <li>Transfer BTC to an exchange to purchase NXS.</li>
                      </ul>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="buy" role="tabpanel" aria-labelledby="buy-tab">
                    <div class="titleCol">
                      <h3>1: Purchase BTC</h3>
                    </div>
                    <div class="heading mt-4">
                      <h5>Coinbase</h5>
                      <p>You can access the Coinbase exchange via this link:&nbsp;&nbsp;<a href="https://www.coinbase.com" class="themeColor">https://www.coinbase.com</a>.</p>
                    </div>
                    <div class="heading mt-4">
                      <h5>GDAX</h5>
                      <p>While Coinbase is simple, and useful for people new to crypto, this process has a some drawbacks:</p>
                      <div class="circle-List mb-1">
                        <ul>
                          <li>Buying on Coinbase costs more. You will pay more market fees on Coinbase than on other exchanges, plus you may pay a higher price for BTC. This is the cost of simplicity.</li>
                          <li>Transferring BTC is slow. You might spend hours wondering when your transfer is going to show up.</li>
                          <li>Transferring BTC is expensive. As Bitcoin has grown, its transfer fee has increased. It is not unusual to spend $20-50 to transfer BTC now.</li>
                        </ul>
                      </div>
                      </p>
                      <p>If you have done any past trading in either cryptocurrencies or financial markets, and are familiar with placing Limit orders, then you may wish to use this GDAX to buy your BTC. It is much faster, saves on fees, and will likely get you a bit more NXS in the end. The process uses GDAX instead of Coinbase. The basic steps are: fund your account, buy Litecoin (LTC) on GDAX, send the LTC to an exchange (Binance, Bittrex etc), sell it for BTC, then use that BTC to buy NXS. This part of the guide is intended for people more familiar with how to trade.</p>
                      <p>You can access the GDAX exchange via this link: <a href="https://www.gdax.com">https://www.gdax.com</a>. The GDAX exchange is actually part of Coinbase. It uses a different and more advanced interface that provides you with advanced features. When you create your Coinbase account, it also gives you access to GDAX. Your GDAX account uses the same login, bank account links, deposit/withdrawal limits, and 2FA as your Coinbase account does because, in reality, they are the same account.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="coinbase" role="tabpanel" aria-labelledby="coinbase-tab">
                    <div class="titleCol">
                      <h3>Coinbase</h3>
                    </div>
                    <div class="heading">
                      <h5>Step 1 – Set Up Account</h5>
                      <p>Setting up a Coinbase account is simple. Just click the “Sign Up” button at the top of the page and fill in the required information. Although you don’t need to provide identification to create an account, you can avoid potential verification problems if you enter your name and other required information consistent with your ID. After completing the signup process you will have created a basic Coinbase account.</p>
                      <h5>Step 2 – Link Your Bank Account</h5>
                      <p>There are three primary ways to purchase cryptocurrency on Coinbase.</p>
                      <div class="circle-List mb-1">
                        <ul>
                          <li>Bank Transfers (ACH) – free transfer, usually available within 5 business days</li>
                          <li>Wire Transfers – wire fee, usually available within 2 business days</li>
                          <li>Credit/debit card purchase – 3-5% fee, usually available within 1 day</li>
                        </ul>
                      </div>
                      <p>In most cases, the ACH bank transfer is the cheapest and best option.  This requires that you link your bank account to your Coinbase account. Click on Settings in the Coinbase menu. Then click on Linked Accounts. Finally, click the Link a New Account button. Follow the instructions to link your bank account. For some banks, linking your account requires sending microtransactions to your account. You will have to log out of Coinbase and wait to receive two small deposits. After they arrive, return to Coinbase and enter the amounts to complete your bank account setup.</p>
                      <h5>Step 3 – Verification</h5>
                      <p>Coinbase does not require you to provide much information or confirm your identity. It also has relatively low limits for deposits and withdrawals. If necessary, you can increase these limits by completing the identity verification process. KYC (Know Your Customer) regulations have become more stringent over time. It is a good idea to complete verification on most exchanges where you register accounts. For Coinbase, you can access the verification process by clicking on Settings in the menu. Then click on Limits and follow the instructions for increasing your limits.</p>
                      <h5>Step 4 – Two-Factor Authorization (recommended)</h5>
                      <p>For security purposes, you should always set up two-factor authorization (2FA) on your exchange accounts. This helps prevent someone potentially accessing your account using a stolen/hacked password. Security is of utmost importance with cryptocurrencies, so you should not take any shortcuts. There are multiple ways to do 2FA. For example, your bank may send you a text message with a code when you attempt to perform certain actions such as changing your password. While more secure than no verification, text verification can be compromised if your cell phone is compromised. The most secure method for setting up 2FA is to use an app such as Google Authenticator on your cell phone. You can set up and link your authenticator app with Coinbase by clicking on Settings in the menu, then on Security. Coinbase will show you a screen with a QR code that you can scan using the authenticator app on your phone. Print out this screen, or otherwise save it. Store this in a secure place. Then, if you get a new phone, having that allows you to easily re-create your authenticator settings.
                      </p>
                      <h5>Step 5 – Purchase Bitcoin</h5>
                      <p>The simplest way to purchase BTC (Bitcoin) on Coinbase is to do an instant buy, at the current price, using your bank account as the form of payment. To do this</p>
                      <div class="circle-List mb-1">
                        <ul>
                          <li>Click Buy/Sell in the Coinbase menu.</li>
                          <li>Verify your bank account is selected as the payment method.</li>
                          <li>Enter how much you want to buy.</li>
                          <li>Press the “Buy Bitcoin Instantly” button.</li>
                        </ul>
                        <p>Coinbase will execute your buy, then transfer the payment from your bank account. This will take 4-5 business days. Until then, your BTC balance will be marked as “Pending”. It will become available after your payment is processed. This process is similar to the settlement process when you buy stocks in the financial markets which can also take up to 5 days.  The instant buy locks the price at time of purchase. Your BTC then needs to be transferred to an exchange which lists NXS.</p>
                        <h5>Step 6 – Transfer Bitcoin to an exchange</h5>
                        <p>When you have set up an account on an exchange (Binance, Bittrex, etc), you will then be able to transfer your BTC.</p>
                      </div>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="gdax" role="tabpanel" aria-labelledby="gdax-tab">
                    <div class="titleCol">
                      <h3>GDAX</h3>
                    </div>
                    <div class="heading">
                      <h5>Step 1 – Fund Your Account</h5>
                      <p>Before you can buy cryptocurrency with fiat currency on GDAX, you must fund your account. GDAX does not support the “Instant Buy” function that Coinbase has. Nor does it allow you to purchase with a credit/debit card. The Coinbase interface is easy to use, though, and the two exchanges share your account, so it is simple to perform a transfer from your linked bank account. To do this:</p>
                      <div class="circle-List mb-1">
                        <ul>
                          <li>Log into Coinbase.</li>
                          <li>Click on Accounts in the menu.</li>
                          <li>Click the Deposit button on your fiat wallet (USD wallet).</li>
                        </ul>
                      </div>
                      <p>When you become more familiar with the GDAX interface, you can also create this transfer there, and skip Step 2.</p>
                      <h5>Step 2 – Move Your Funds to GDAX</h5>
                      <p>After your transfer completes (4-5 business days), your money is available in Coinbase. You can’t use it in GDAX, yet. First you must transfer it over. There is no cost to do this and it is instant.</p>
                      <div class="circle-List mb-1">
                        <ul>
                          <li>Log into GDAX (same credentials as Coinbase). It will load straight into the trading page.</li>
                          <li>Near the upper left, click on Deposit.</li>
                          <li>Click on the Coinbase Account tab.</li>
                          <li>Enter the amount and click Deposit Funds.</li>
                        </ul>
                      </div>
                      <p>Your funds will immediately transfer to GDAX and appear under Balance on the page.</p>
                      <h5>Step 3 – Purchase Litecoin</h5>
                      <p>The trick to buying on GDAX is in how you place your order. You can place Limit or Market orders. If you place a Market order, you will pay exchange fees. If you place a Limit order, you pay zero fee. This is called a “Maker/Taker” fee structure. By using a Limit order, you can take advantage of this and save on fees. To buy Litecoin:</p>
                      <div class="circle-List">
                        <ul>
                          <li>Check the top of the screen for the current market. If it does not say “LTC/USD” then click the dropdown and select that market from the list.</li>
                          <li>Click on the Limit tab in the order box and on the Buy button.</li>
                          <li>You can enter any price below the lowest current Ask, then click your USD balance to enter that amount. It will compute the amount of LTC you will receive.</li>
                          <li>Click Place Buy Order.</li>
                        </ul>
                      </div>
                      <p>Limit orders do not necessarily execute immediately. Sometimes, if the market price moves away from you, they won’t execute at all. You can, if necessary, cancel your order and enter a new one at a different price.</p>
                      <p>When you have set up an account on an exchange (Binance, Bittrex, etc), you will then be able to transfer your BTC.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="buy-nxs" role="tabpanel" aria-labelledby="buy-nxs-tab">
                    <div class="titleCol">
                      <h3>2: Purchase NXS</h3>
                      <p>Exchanges usually list NXS as part of a BTC-NXS trading pair. Once you own BTC, you will need to identify a preferred exchange that allows NXS trading and transfer your BTC to fund your new Nexus trading account.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="binance" role="tabpanel" aria-labelledby="binance-tab">
                    <div class="titleCol">
                      <h3>Binance</h3>
                      <p>You can access the Binance exchange here: <a href="https://www.binance.com/en/trade/NXS_BTC" target="_blank" class="themeColor">https://www.binance.com</a></p>
                      <h5>Step 1 – Set Up Account</h5>
                      <p>To create an account, follow these instructions:</p>
                      <div class="circle-List mb-1">
                        <ul>
                          <li>Top right hand corner click ‘Login or Register’</li>
                          <li>Enter your details, and press ‘Register’</li>
                          <li>You will then be sent an email to the one used in the Registration form. On the email, click ‘Verify email’. Now you can login to Binance.</li>
                        </ul>
                      </div>
                      <h5>Step 2 – Two-Factor Authorization (recommended)</h5>
                      <p>Upon signing in, you will be prompted to set up Two Factor Authentication (2FA) – we strongly recommend you follow the steps in setting this up, as it improves the security of your account.</p>
                      <p>The instructions to set up 2FA are clearly displayed on your profile home screen. Follow the 4 steps, and keep a note of the 16 digit value.</p>
                      <p>There are 3 exchange ‘settings’ which determine your 24 hour withdrawal limits:</p>
                      <p>Level 1: 24h withdrawal limit of 2BTC</p>
                      <p>Level 2: 24h withdrawal limit of 100 BTC (Submit Verification Documents to activate)</p>
                      <p>Level 3: 24h withdrawal ‘Higher Limit’ (requires contacting Binance).</p>
                      <h5>Step 3 – Transfer Bitcoin to Binance</h5>
                      <p>After you have you have purchased your BTC, you can then to send it to Binance. </p>
                      <div class="circle-List">
                        <ul>
                          <li>In Binance, hover over ‘Funds’ in the top banner, and click on ‘Balances’.</li>
                          <li>Then in the top left hand search box, search ‘Bitcoin’ or ‘BTC, and click on ‘Deposit’ on the left.</li>
                          <li>Your Bitcoin address displays in the ‘BTC Deposit Address’ box. It is a long string of numbers and characters, known as a “public key.” This key is similar to an account number and provides the address of your Bitcoin wallet on the Binance exchange. Copy the entire address.</li>
                        </ul>
                        <p>Here, as an example, we will explain a transfer from  Coinbase. </p>
                        <ul>
                          <li>Click on Accounts in the Coinbase menu. In the “Your Accounts” list, your BTC wallet should show your Bitcoin balance. Click the Send button, which opens the Send BTC window.</li>
                          <li>Under Recipient, paste the BTC address you copied from your exchange.</li>
                          <li>IMPORTANT – Verify that the address you pasted on Coinbase exactly matches the address in the deposit window on the exchange  Always double check before you send. If you send BTC to the wrong address you could send cash to a random person, or it could get completely lost.</li>
                          <li>In the Amount section, you can click in the BTC box then click Send Max to send all your Bitcoin to the exchange.</li>
                          <li>Finally, click Continue to execute the transfer of BTC from Coinbase.</li>
                        </ul>
                      </div>
                      <p>When you send your Bitcoin, it will take at least 30-40 minutes to arrive on Binance. During times of heavy transaction volume, it may take several hours. This is still much faster than a bank transfer. After your Bitcoin transfer arrives on Binance and is confirmed, your BTC balance will display on the ‘Funds -> Balances’ page.</p>
                      <h5>Step 4 – Preparing to Buy Nexus</h5>
                      <p>Now you have your Bitcoin on the Biannce exchange, and are ready to buy Nexus (NXS). First, you must access the BTC-NXS market. The easiest way is to hover over ‘Funds’ in the top right hand corner, and click on ‘Balances’. This will take you to the list of all the coins on Binance. Just underneath the word ‘Balances’ in the top left hand corner there is a search box, search ‘NXS’ or ‘Nexus’ and click on the far right rectangle named ‘Trade’. Then choose which cross you wish to trade NXS with, assuming you have followed the steps above, and are using BTC to purchase NXS, please click on the ‘NXS/BTC’ option.</p>
                      <p>Before entering your buy order, take a moment to look at the prices. These are listed in Bitcoin (BTC). The BTC currency has 8 decimal places – the smallest Bitcoin unit is 0.00000001 BTC. This is called a “Satoshi” after the creator of Bitcoin. Satoshis are to Bitcoin as cents are to dollars.</p>
                      <p>The top left hand list of transactions shows the NXS for sale, the ‘cheapest’ of which being at the bottom of the list. The opposite goes for the buy order book below in green, the highest number being the highest price offered to buy NXS for.</p>
                      <div class="circle-List">
                        <ul>
                          <li>The first column is the BTC price per NXS in that row</li>
                          <li>The second column is the total amount of NXS for sale at that BTC price</li>
                          <li>The third column is the total BTC value of the NXS on that specific row.</li>
                        </ul>
                      </div>
                      <h5>Step 5 – Buy Nexus</h5>
                      <p>Underneath the large chat in the top middle of your page, there are two boxes, one to buy NXS, the other to sell NXS. You will use the Buy Nexus box.</p>
                      <div class="circle-List">
                        <ul>
                          <li>You can click on any price in the order book, and it will automatically be loaded into the Buy Nexus box under Trading. This way, you do not have to manually enter the price.</li>
                          <li>Assuming you wish to use all your BTC to buy Nexus, click the Max button in the Buy Nexus box. This will calculate how much NXS you can get for the price you selected and enter it for you.</li>
                          <li>Click the Buy Nexus button to create your order. </li>
                        </ul>
                      </div>
                      <p>Depending on market conditions, your order may or may not execute immediately using this method. If it is not immediately filled, or is only partially filled, it will display under “Open Orders” below the Order Book section. After it is completely filled, it will move to the “Order History” section at the bottom of the page. You have now purchased your first NXS currency. Hover your mouse over ‘Funds’ in the top menu and click on ‘Balances’ to see your NXS balance.</p>
                      <p>Note on dust: The amount of BTC you own probably will not exactly match the cost of purchasing your NXS. Often, there is a very small amount of BTC (usually at most a few cents worth) left over. This is known as “dust” and there isn’t much you can do with it other than leaving it in your Binance wallet to apply towards any future purchases.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="bittrex" role="tabpanel" aria-labelledby="bittrex-tab">
                    <div class="titleCol">
                      <h3>Bittrex</h3>
                      <p>You can access the Bittrex exchange via this link: <a href="https://bittrex.com/Market/Index?MarketName=BTC-NXS" target="_blank" class="themeColor">https://www.bittrex.com</a> The steps for setting up a Bittrex account are similar to setting up Coinbase, except that it doesn’t allow you to link a bank account.</p>
                      <h5>Step 1 – Set Up Account</h5>
                      <p>On the main Bittrex page, click Log In at the top. The login page has a link to sign up for a new account. As with Coinbase, take care to enter your name, address, etc. exactly as they appear on your ID. This is more important with Bittrex, because this exchange requires verification and has been known to reject verification requests for a small difference between the name on the account and the name on an ID. After completing the signup process you have created a Bittrex account.</p>
                      <h5>Step 2 – Verification</h5>
                      <p>Bittrex requires that you verify your account. You may be able to operate for a short time with a basic account, but if not verified your withdrawals could be blocked or your account could be suspended. Completing verification involves two steps.</p>
                      <p>1. Click on Settings. Then click on Basic Verification. If your account is not already verified at this level, complete the process.</p>
                      <p>2. In Settings, click on Enhanced Verification. You will need to upload a scan or photo image of your ID along with a profile image.</p>
                      <p>After your verification request is approved, your Bittrex account is ready to use.</p>
                      <h5>Step 3 – Two-Factor Authorization (recommended)</h5>
                      <p>For security purposes, you should set up 2FA for Bittrex in the same manner as for Coinbase. To reiterate, this is an important security measure to help protect your account from unauthorized access. To access 2FA setup, click on Settings at the top of the page, then on Two-Factor Authorization.</p>
                      <h5>Step 4 – Transfer Bitcoin to Bittrex</h5>
                      <p>After you have purchased your BTC, you can then send it to Bittrex. </p>
                      <div class="circle-List">
                        <ul>
                          <li>In Bittrex, click on Wallets in the menu. This page lists all the different coins you can own on the Bittrex exchange. BTC is probably already listed, but you can enter BTC in the Search box to see it easily.</li>
                          <li>Click the “+” button next to where it lists Bitcoin to open the deposit window. It should say “Deposit Bitcoin (BTC)” at the top. If any other coin name is shown, this is not the correct wallet. Close the dialog and click the “+” button again, ensuring you click the one next to “Bitcoin” in the list.</li>
                          <li>Your Bitcoin address displays in the Address box. It is a long string of numbers and characters, known as a “public key.” This key is similar to an account number and provides the address of your Bitcoin wallet on the Bittrex exchange. Copy the entire address.</li>
                        </ul>
                        <p>Here, as an example, we will explain a transfer from Coinbase. </p>
                        <ul>
                          <li>Click on Accounts in the Coinbase menu. In the “Your Accounts” list, your BTC wallet should show your Bitcoin balance. Click the Send button, which opens the Send BTC window.</li>
                          <li>Under Recipient, paste the BTC address you copied from Bittrex.</li>
                          <li>IMPORTANT – Verify that the address you pasted on Coinbase exactly matches the address in the deposit window on Bittrex. Always double check before you send. If you send BTC to the wrong address you could send cash to a random person</li>
                          <li>In the Amount section, you can click in the BTC box then click Send Max to send all your Bitcoin to Bittrex.</li>
                          <li>Finally, click Continue to execute the transfer of BTC from Coinbase to Bittrex.</li>
                        </ul>
                      </div>
                      <p>When you send your Bitcoin, it will take at least 30-40 minutes to arrive on Bittrex. During times of heavy transaction volume, it may take several hours. This is still much faster than a bank transfer. After your Bitcoin transfer arrives on Bittrex and is confirmed, your BTC balance will display on the Wallets page.</p>
                      <h5>Step 5 – Preparing to Buy Nexus</h5>
                      <p>Now you have your Bitcoin on the Bittrex exchange, and are ready to buy Nexus. First, you must access the BTC-NXS market. The easiest way is to click on the word “Bittrex” in the upper left of any Bittrex page. This goes to the list of Bittrex markets. Above the section titled “Bitcoin Markets” there is a search box (not labeled). Type NXS in this box to find the Nexus market. Then, click the BTC-NXS link. Before entering your buy order, take a moment to look at the prices. These are listed in Bitcoin. The Bitcoin currency has 8 decimal places, so the smallest Bitcoin unit is 0.00000001 BTC. This is called a “Satoshi” after the creator of Bitcoin. Satoshis are to Bitcoin as cents are to dollars. In the upper right of the Nexus market page, there is information about prices. The “Bid” is the current price for selling NXS. The “Ask” is the current price for buying NXS. These are shown both in BTC/Satoshis and their corresponding current fiat value (dollars).</p>
                      <h5>Step 6 – Buy Nexus</h5>
                      <p>Under “Trading” there are two boxes, one to buy NXS, the other to sell NXS. You will use the Buy Nexus box.</p>
                      <div class="circle-List">
                        <ul>
                          <li>Below the Trading section is the Order Book. This shows current orders from people looking to buy or sell. On the right side, it shows the current Asks. You can click on any price in the Ask column, and it will automatically be loaded into the Buy Nexus box under Trading. This way, you do not have to manually enter the price.</li>
                          <li>Assuming you wish to use all your BTC to buy Nexus, click the Max button in the Buy Nexus box. This will calculate how much NXS you can get for the price you selected and enter it for you.</li>
                          <li>Click the Buy Nexus button to create your order.</li>
                        </ul>
                      </div>
                      <p>Depending on market conditions, your order may or may not execute immediately using this method. If it is not immediately filled, or is only partially filled, it will display under “Open Orders” below the Order Book section. After it is completely filled, it will move to the “Order History” section at the bottom of the page. You have now purchased your first NXS currency. Click on Wallets at the top of the page to see your Nexus wallet balance in Bittrex. Note on dust: The amount of BTC you own probably will not exactly match the cost of purchasing your NXS. Often, there is a very small amount of BTC (usually at most a few cents worth) left over. This is known as “dust” and there isn’t much you can do with it other than leaving it in your Bittrex wallet to apply towards any future purchases.</p>
                      <h5>Logging Into Your Exchange Accounts</h5>
                      <p>Whenever you log into Coinbase, Bittrex, or GDAX, it is normal for you to receive a warning message, especially if you use a VPN (Virtual Private Network). Even if you don’t, you may still see this message sometimes because your internet provider has changed your internet address. This message states that you are accessing your account from a new device or new IP address and you need to confirm this. The exchange will send a message to the email address you used to register. The message contains a link to confirm your account access. After you confirm, the exchange will allow your access. Exchanges also send other email messages, which vary by exchange. These are sent for security purposes, so you can identify if there is any suspicious activity on your account.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="bcbitcoin" role="tabpanel" aria-labelledby="bcbitcoin-tab">
                    <div class="titleCol">
                      <h3>BC Bitcoin</h3>
                      <p>BC Bitcoin is a UK based cryptocurrency broker, not an exchange. NXS can therefore be purchased without needing to buy BTC first.</p>
                      <h5>Setting Up BC Bitcoin</h5>
                      <p>You can access BC Bitcoin via the following link: <a href="javascript:;" class="themeColor">https://www.bcbitcoin.co.uk/</a></p>
                      <h5>Step 1 – Set Up an Account</h5>
                      <p>On the main BC Bitcoin page, click ‘Register’ on the top right and ‘Register for an account’.</p>
                      <p>Take care to enter your email address and set a strong but memorable password to keep your account secure.</p>
                      <h5>Step 2 – Account Verification</h5>
                      <p>BC Bitcoin requires KYC (Know Your Customer) verification to be completed for your account to be approved. When you register an account, you will be asked to provide your name, contact information and the following documents which will be used to verify your identity.</p>
                      <p>You will need to upload a scan or photo image of a valid ID. You will also need to submit a picture of yourself holding a note. This process is designed to be quick and easy and example pictures are provided to guide you through the process. Once your account is approved you will have full access to all BC Bitcoin services.</p>
                      <h5>Step 3 – Buy NXS</h5>
                      <p>To purchase Nexus, go to the BC Bitcoin website and log into your verified account. Navigate to ‘Buy Coins’ and select Nexus (NXS). Choose the currency you would like to pay with and complete your order by submitting a valid Nexus wallet address.</p>
                      <p>The company bank details will then be displayed, and you will need to complete an online bank</p>
                      <p>transfer to the details provided. As soon as your payment has been received, Nexus (NXS) will be purchased and transferred to your wallet.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sending" role="tabpanel" aria-labelledby="sending-tab">
                    <div class="titleCol">
                      <h3>Sending NXS to Your Wallet</h3>
                    </div>
                    <div class="heading">
                      <h5>Install the Nexus Wallet</h5>
                      <p>Some people keep their NXS balance on the exchange. This involves some risk. The exchange could go offline, the exchange could go out of business, your account could become inaccessible, or, in the worst case, your account could be compromised and your currency lost. To have personal control of your funds, you can use the Nexus wallet. Please follow the instructions <a href="javascript:;" class="themeColor">here</a> to download and install the wallet. and sync it to the Nexus network.</p>
                      <h5>Send NXS to Your Wallet</h5>
                      <p>After your wallet is installed and synced up, you are ready to withdraw your NXS currency to it.</p>
                      <div class="circle-List">
                        <ul>
                          <li>In Bittrex, click on Wallets in the menu. Enter NXS in the Search box to view your Nexus balance.</li>
                          <li>Click the “–” button next to Nexus to open the withdraw window. It should say “Withdraw Nexus” at the top.</li>
                          <li>In the Nexus wallet interface, click on the Receive tab. If you do not have any addresses listed, click on Add Address at the bottom to create a new one. You can enter any description you want for the Label.</li>
                          <li>Right-click on the Receive Address (double finger tap on touchpad on Mac) to pull up the context menu, then select Copy Address</li>
                          <li>Back on Bittrex, paste the Receive address you copied from your wallet into the Address box.</li>
                          <li>IMPORTANT – Verify that the address you pasted in Bittrex exactly matches the Receive address from your wallet. Always double check before you send. If you send NXS to the wrong address, you probably won’t get it back.</li>
                          <li>In the Quantity section, you can click on the button to send your all your Nexus to your wallet.</li>
                          <li>Click the Withdrawal button.</li>
                        </ul>
                      </div>
                      <p>Bittrex will process your withdrawal and you should shortly receive it in your Nexus wallet. Now you both own and have full control of your Nexus currency. Be sure to review the relevant <a href="javascript:;" class="themeColor">Wallet</a> and <a href="javascript:;" class="themeColor">FAQ</a> sections on wallet security and making backups. You may also want to review <a href="javascript:;" class="themeColor">Mining and Minting</a> to learn about how to stake your coins. By staking, you can earn some additional NXS for helping operate the Nexus network. Note: If you send NXS to your wallet before it is fully synchronized to the network, your transaction may not show up. Rest assured, you still have it. It will appear when the wallet completes the syncing process.</p>
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
