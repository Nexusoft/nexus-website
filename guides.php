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
    <div class="bannerSection inner_bg guides_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="bannerText">
          <h2>Guides</h2>
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
                        <a class="nav-link active overview" id="intro-tab" data-toggle="tab" href="#intro" role="tab" aria-controls="intro" aria-selected="true">Introduction</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="assets-tab" data-toggle="tab" href="#assets" role="tab" aria-controls="assets" aria-selected="false">Assets</a>
                      </li>
			                   <li class="nav-item">
                        <a class="nav-link" id="tokens-tab" data-toggle="tab" href="#tokens" role="tab" aria-controls="tokens" aria-selected="false">Tokens</a>
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
                        <h2>Introduction</h2>
                        <p>Here you will find a list of advanced guides to help you use the <a href=/wallet>Nexus Wallet</a> for purposes such as registering Assets, creating Tokens and Namespaces. If you have any further questions please join one of the Nexus Community Channels found in the footer, and post a message asking for help.</p>
                    </div>
		              </div>
                  <div class="customTab tab-pane fade" id="assets" role="tabpanel" aria-labelledby="assets-tab">
                    <div class="titleCol headingCol">
                        <h2>What is an Asset?</h2>
                        <p>In its simplest form, an Asset is nothing more than arbitrary data stored on the Nexus blockchain in a state register. You as the user can decide what data is stored in that Asset, and depending on the way the Asset is created, whether or not the data in the Asset can ever be changed (is mutable / immutable). Think of it like writing on a piece of paper. You can choose to write what you want on that piece of paper. If you write it in ink then it is permanent. If you write some of it in pencil, then you can erase it and change it to something else.</p>

                        <h2>What is a State Register?</h2>
                        <p>The Nexus architecture uses state registers for storing many different types of data including Accounts, Tokens, Names, and Assets. A state register sounds fancy, but it is really just a space where information can be stored.</p>
                        <p>With the Nexus API, you can make special kinds of transactions to create these registers or update / append to the data in them. When the data in a register changes, it is said that the register is 'changing state' from what it was previously to what you are now changing it to - hence the name state register.</p>
                        <p>Every register on the Nexus blockchain has two main properties: An address (referred to as a register address) which is used to determine the location of the data in the register database, and an owner, which is the genesis hash of the Signature Chain that currently owns the register.</p>

                        <h2>What can Assets be used for?</h2>
                        <p>Allowing users to store arbitrary data in a blockchain is not a new concept - we've been able to do that since the early days of Bitcoin. What's unique about Nexus' register-based blockchain is that all changes to a register - including changes to the data and to the ownership of it - are captured in the transactions recorded on the blockchain. Not only does this allow us to validate data changes via consensus rules, but it also allows us to view the entire history of changes to the data in a register and its ownership.</p>
                        <p>It becomes an audit log for data, allowing users to see what that data looked like and who owned it at any point in time. That's a hugely powerful concept and opens the door to many use cases where a history of the data is required, e.g. supply chains, postal tracking, land/real estate deeds, certificates of authenticity, art watermarking, wills, etc. Each Asset is owned by a Signature Chain, which is great for situations where there is one single owner of an Asset. However, what about those use cases where partial ownership is required, for example where a piece of real estate is owned by two or more investors and they want to prove their ownership via a public blockchain? Nexus solves this by allowing an Asset to be tokenized, which means that the ownership of an Asset is transferred to a token rather than a Signature Chain. Once tokenized, any users that hold the tokens in their Signature Chain become partial owners of the Asset, much like owning shares in a company.</p>
                        <p>Furthermore, tokenized Assets provide the ability for shared revenue to be automatically distributed in the form of NXS payments to the partial owners of the Asset, based on the percentage of tokens held. This is useful for use cases such as the automatic payment of dividends for Security Token Offerings (STO's), and for the distribution of royalties from revenue earned from an Asset such as a music album.</p>

                        <h2>How do I create an Asset?</h2>
                        <p>The Nexus API provides a straightforward and intuitive interface for users to create, update, and transfer Assets. To create a basic Asset you can use the Wallet console or Nexus command line interface (CLI) and issue a simple command:</p>
                        <p>assets/create/asset name=myfirstasset data=this_is_some_data</p>
                        <p>The create/asset API method allows the Asset to be defined in several different formats. Shown above is the basic format, which is the default. In the basic format the data is supplied in key=value pairs, all data is treated internally as a string (a series of alphanumeric characters), and all data is immutable (cannot be changed). The create/asset API alternatively allows complex Assets to be defined using JSON format.</p>
                        <p>The following example shows how an Asset might be used to store the title deeds to a property:</p>
                        <p>assets/create/asset<br><br>
                        name=deed1A<br>
                        address=1640 Riversdale Drive, CA<br>
                        deed-id=494563494<br>
                        certificate-url=http://www.property.com/deeds/494563494.pdf<br>
                        certificate-md5-hash=67ac5a9362efdef5a52e5438c4ad7bda
                        </p>

                        <h2>What does it cost to create an Asset?</h2>
                        <p>The fee charged for creating Assets depends on the amount of data you are storing. The charge is 0.01 NXS ber byte, with a minimum fee of 1 NXS. This means that the cost of an Asset will be between 1 and 10 NXS depending on how much data it contains.</p>

                        <h2>How much data can I store in an Asset?</h2>
                        <p>Currently all registers are limited to a maximum of 1Kb, which is about 1000 characters of text.</p>

                        <h2>How do I transfer an Asset?</h2>
                        <p>You can transfer ownership of an Asset to another Signature Chain with a simple API command specifying the name/address of the Asset you own, and the username/genesis of the recipient:</p>
                        <p>assets/transfer/asset name=myasset username=bob</p>

                        <h2>How do I define which fields are editable?</h2>
                        <p>In order to update data in an Asset, you have to initially create them using a JSON format, as opposed to the basic format shown above. Using the JSON format allows you to specify field type, length, mutability, and an initial value for each data field in the Asset.</p>
 		                 </div>
		              </div>
		              <div class="customTab tab-pane fade" id="tokens" role="tabpanel" aria-labelledby="tokens-tab">
                    <div class="titleCol headingCol">
                       <h2>What is Token?</h2>
	                     <p>In the broader sense, tokens can be thought of as virtual currencies that exist on a blockchain.</p>

                       <h2>What can Tokens be used for?</h2>
	                     <p>They can be used for a variety of uses such as:</p>
                      <ol>
                       <li>Representing ownership in an Asset:</p>
                        <ul>
                            <li>a company</li>
                            <li>property / land title</li>
                            <li>rights to a book / album / film / piece of art</li>
                            <li>patents</li>
                       </ul>
                         <li>Utilities</li>
                         <li>Loyalty programs</li>
                         <li>Gaming tokens</li>
                         <li>DAO voting rights</li>
                       </ol>

                       <h2>How does a Token created on the Nexus blockchain differ to tokens created on Ethereum, Waves, NEO, NEM, Stellar, etc?</h2>
                       <p>The primary difference is simplicity.  To create a token on Ethereum, or most other token platforms, users must write a smart contract - code written in a specific programming language - to define the token and how it will be used/distributed.  This requires the user to have programming skills and the task can often be quite complicated.  Nexus has taken a different approach by simplifying the process, allowing users to create a token in one short console command / API request.  The wallet interface goes a step further providing a simple interface to guide users through the process.</p>

                       <h2>Are there any limitations to this simplified approach?</h2>
                       <p>The tradeoff for simplicity is flexibility.  A token created from a traditional smart contract allows developers to define any rules they wish for the distribution and use of a token,  which are encoded in the token definition contract.  This flexibility is certainly useful, but is overly complex for people without programming skills.</p>
                       <p>Nexus decouples the contract rules from the token definition allowing the token creation to be far simpler, though provides further steps if more complex rules are needed. For those use cases that require more complex token utility, Nexus users can add contract rules as conditions to token debit transactions.</p>
                       <p>If the rules are too complex to be supported by a transaction condition, developers can write these rules into their application layer.</p>

                       <h2>What properties does a token have?</h2>
                       <p>When you first create a token you must specify the supply (the maximum number of whole tokens that will be available) and decimals (the number of decimal places that a token amount can have).</p>
                       <p>The combination of these two values gives the number of token divisible units that will be available (the equivalent of Bitcoin’s Satoshi’s property).  For example a decimals value of 3 means that each token can be divided into 10^3 (1,000) parts.  Therefore a token created with a supply of 1,000,000 and decimals of 3 would result in 1,000,000,000 (1,000,000 x 1,000) token divisible units.  This is important, as this figure is what is used to calculate the fee applied when creating the token.</p>

                       <p>Once created, the token has three important properties:</p>
                       <ul>
                            <li>maxsupply - the maximum number of tokens that will exist</li>
                            <li>currentsupply - the number of circulating tokens that have been distributed to token accounts</li>
                            <li>balance - the number of tokens that have not yet been distributed (maxsupply - currentsupply)</li>
                        </ul>

                        <h2>How do I create a token?</h2>
                        <p>Tokens can easily be created through the Nexus Wallet or the console/CLI. The user defines  a new token so that it can be distributed, traded, or used to tokenize an asset.</p>
                        <p>In the wallet interface, go to the User module, click on Tokens, then Create New Token:</p>
                        <p>Give the token a name (optional), supply, and decimals values and click Create token!</p>
                        <p>To achieve the same using the console use the following command:</p>
                        <p>tokens/create/token name=My Token supply=100 decimals=2</p>

                        <h2>How much does it cost to create?</h2>
                        <p>The fee is based on the number of token divisible units you define (the combination of supply and decimals).  There is a minimum fee of 1 NXS and the calculation is linear thereafter, so that each additional significant digit costs an additional 100 NXS. E.g.</p>
                        <p>100 units 		= 1 NXS</p>
                        <p>1000 units 		= 100 NXS</p>
                        <p>1000000 units	= 400 NXS</p>
                        <p>10000000000 units	= 800 NXS</p>

                        <h2>How do I distribute my token?</h2>
                        <p>Initially all of the token supply is held in the balance of the token.  Distributing your token to other users is then very similar to how you send  NXS.  The first step is that the receiving users must create a new account for your token type and then provide you with the account name/address.  Then you can use the wallet interface to send them just like you would send NXS, choosing the token from the Send From list.   Alternatively, you can use the console with the following command:</p>
                        <p>tokens/debit/token name=My Token name_to=paul:tokenaccount amount=1000</p>

                        <h2>Can I increase the supply once I have created my token?</h2>
                        <p>At the time of writing, no the maximum supply cannot be changed once the token has been created.  However, this ability is planned for a future release. How do I use a token to represent partial ownership of a digital or real-world asset?</p>
                        <p>One of the most significant use cases for tokens is the ability to tokenize an asset. Tokenized Assets provide the ability for shared revenue to be automatically distributed in the form of NXS payments to the partial owners of the Asset, based on the percentage of tokens held. This is useful for use cases such as the automatic payment of dividends for Security Token Offerings (STO’s), and for the distribution of royalties from revenue earned from an Asset such as a music album.</p>
		                </div>
		             </div>

  		           <div class="textRight directContainer">
                   <a class="prev directBtn" href="javascript:;">Prev Topic</a>&nbsp;|&nbsp;<a class="next directBtn" href="javascript:;">Next Topic</a>
                </div>
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
