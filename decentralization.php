<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg decentralization_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>Decentralization</h2>
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
                        <a class="nav-link active overview" id="over-tab" data-toggle="tab" href="#over" role="tab" aria-controls="over" aria-selected="true">Decentralization</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub1-tab" data-toggle="tab" href="#sub1" role="tab" aria-controls="sub1" aria-selected="false">Political Systems</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub2-tab" data-toggle="tab" href="#sub2" role="tab" aria-controls="sub2" aria-selected="false">Centralized Databases</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub3-tab" data-toggle="tab" href="#sub3" role="tab" aria-controls="sub3" aria-selected="false">Fractional Reserve Banking</a>
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
<p class="customText">Even though decentralization is a fundamental component of the blockchain movement, systems of governance are still largely centralized. The negative results of central decision-making can be seen evidently with Bitcoin Core vs. Bitcoin Cash, and Ethereum vs. Ethereum Classic. Though projects such as EOS have attempted to solve this through the election of twenty-one delegates to operate the protocol, they still lack the ability to maintain a truly decentralized model.</p>
                      <p class="customText">Nexus is building DAO (Decentralized Autonomous Organization) technology based on mathematical regulation to improve the overall network governance model. The DAO technology is being built to enable voting on the allocation of Nexus funds, though it will be able to be used by other organizations.</p>
                      <p class="customText textCenter"><em>“The dilemma is not that people have conflicting value systems, but rather that they are usually required to decide together in one group.”</em></p>
                      <p class="customText">This DAO technology will enable groups that share similar knowledge and interests to vote together on subject matters that they have expertise in. By encapsulating values that are alike into groups that determine a smaller part of the entire decision itself, we can improve the overall reflection of value in a system as a whole. This concept can be observed in the human body: the lungs value certain resources over the stomach, heart, kidneys, liver, although they all work together as components of a decentralized system to form the basis of a healthy body.</p>
              <p class="customText">In the case of Bitcoin, the following voting groups would be desirable:</p>
                       <ul>
                        <li>Miners</li>
                        <li>Traders</li>
                        <li>Merchants</li>
                        <li>Exchanges</li>
                        <li>Developers</li>
                      </ul>
                      <p class="customText">Through the block size debate, the result of the consensus was limited to only the Developers and Miners, resulting in a large portion of the Bitcoin community leaving Bitcoin to support Bitcoin Cash, dividing the community into separate factions. </p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub1" role="tabpanel" aria-labelledby="sub1-tab">
                    <div class="titleCol headingCol">
                      <h3>Political Systems</h3>
<p class="customText">Throughout history, we have seen the models of society move in cycles of varying degrees of centralization, from the formation of monarchies, oligarchies, to democracies, and republics. Our current governance systems are failing, and we believe this is because they are managed as top-down structures. Current voting systems deem their perspective encapsulates the value of the whole system, although it is evident that politicians continue to be heavily influenced by their own values.</p>
                 <p class="customText">It is evident that democracy creates a two-party system, where many people feel unrepresented. Democracy often results in ‘mob rule’, as the majority decides for everyone. It allows the majority to ignore the minorities in decision making, inevitably producing conflict. The traditional approach of voting negates the weight associated with each corresponding value and individuals’ influence on society.</p>
                      <p class="customText">This dualism promotes competition and dominance over collaboration and innovation, and this ethos influences the spirit of most educational systems and businesses. The swing of power from one party to the other creates instability and short-termism, precluding the creation of holistic decision-making for the greater good of humanity. Factions inevitably lead to chaos, which ultimately pave the way to tyranny and dictatorship.</p>
                      
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub2" role="tabpanel" aria-labelledby="sub2-tab">
                    <div class="titleCol">
                      <h3>Centralized Databases</h3>
                      <p class="customText">Today’s societies are organized by centralized databases, with a ‘trusted’ authority in the form of governments, institutions and third parties. Trusted authorities authenticate and process information of these databases in order to determine ownership, legal agreements, and to settle disputes. Centralized databases have provided many useful technologies including government ledgers (e.g. titles and deeds, voting rolls, licenses, customs records, and digital I.Ds), and corporate ledgers (e.g. bank deposits, and stock wealth). Though these databases provide many benefits to society as a whole, they often result in the selling of data to other organizations without the consent of the people. </p>
		      <p class="customText">Other notable issues with centralized databases are the rising number of data breach cases, that at times have affected millions of people. Blockchain can improve database security as there is no central authorization point to hack. Essentially, a decentralized system is difficult to compromise as there is no central point of failure.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade<?php echo $_REQUEST['s']=='sub3'?' active show':'';?>" id="sub3" role="tabpanel" aria-labelledby="sub3-tab">
                    <div class="titleCol">
                      <h3>Fraction Reserve Banking</h3>
                      <p class="customText">The implementation of the world’s monetary systems, some of the oldest centralized systems of today, have become the source of one of today’s biggest challenges. This is due to the many global policies designed to create currencies as debt to be paid back with interest, which only serves to empower central banks. Central Banks have the ability to influence world economies by changing interest rates and issuing new credit.</p>
                      <p class="customText">There are many historical examples of central authorities who have misused this enormous power, knowingly or unknowingly, to the detriment of the people that these institutions exist to serve. These include post-World War I Germany with a hyperinflation of up to 30,000% per month, Zimbabwe during the Great Recession of the last decade with nearly 79 billion percent per month inflation, and post-World War II Hungary, with inflation rates of nearly 13,000,000,000,000% per year.</p>
                      <p class="customText">It is often thought that banks lend out the deposits of savers. However, banks do not simply act as middlemen or intermediaries between savers and borrowers. Banks are the creators of money (bank notes and digital deposits) also known as fiat currency. Central Banks create money by issuing loans and by purchasing government bonds. However, bank lending is only backed by a small fraction of deposits, by a process called ‘Fractional Reserve Banking’. Thus, savers’ deposits only account for a fraction of lending, which always results in the production of new debt that ultimately is required to be paid back to the central bank with interest. Together, banks only hold approximately 10% of the entire money supply that exists, as actual reserves. The other 90%, called ‘Bank Credits’, is synonymous with an IOU. Consequently, if people began to withdraw their deposits all at once, known as a ‘run on the banks’, the banks would only be able to honour 10% of withdrawals.</p>
                      <p class="customText">Today’s debt-based monetary system is structured in a way that the creation of money also encourages cycles of boom and bust, increasing wealth inequality, resulting in an ever increasing amount of money and resources being transferred to a few people. In contrast, the Nexus Economic Model rewards NXS to stakers and miners, and is designed to create a more equal distribution of NXS to the community, whilst mitigating the possibility of unhealthy levels of inflation.</p>
                      <p class="innerText"><a href="./economics" class="btn btn-primary">Economics</a></p>
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
