<?php
require_once("./header.php");
?>

  <!-- bannerSection starts -->
  <section>
    <div class="bannerSection inner_bg mine_bg">
      <canvas class="background"></canvas>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="bannerText">
              <h2>Mine</h2>
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
                        <a class="nav-link active overview" id="over-tab" data-toggle="tab" href="#over" role="tab" aria-controls="over" aria-selected="true">Mine</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="hashing-tab" data-toggle="tab" href="#hashing" role="tab" aria-controls="hashing" aria-selected="false">Mine NXS on the Hashing Channel</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub1-tab" data-toggle="tab" href="#sub1" role="tab" aria-controls="sub1" aria-selected="false">Download Hashing Channel Miner</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub2-tab" data-toggle="tab" href="#sub2" role="tab" aria-controls="sub2" aria-selected="false">Configure Wallet for Solo Mining</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub3-tab" data-toggle="tab" href="#sub3" role="tab" aria-controls="sub3" aria-selected="false">Configure Hashing Channel Miner</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub4-tab" data-toggle="tab" href="#sub4" role="tab" aria-controls="sub4" aria-selected="false">Hashing Channel Pools</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="prime-tab" data-toggle="tab" href="#prime" role="tab" aria-controls="prime" aria-selected="false">Mine Nexus on the Prime Channel</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub5-tab" data-toggle="tab" href="#sub5" role="tab" aria-controls="sub5" aria-selected="false">Download Prime Channel Miner</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub6-tab" data-toggle="tab" href="#sub6" role="tab" aria-controls="sub6" aria-selected="false">Configure Wallet for Solo Mining</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link subMenu" id="sub7-tab" data-toggle="tab" href="#sub7" role="tab" aria-controls="sub7" aria-selected="false">Configure Prime Channel Miner</a>
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
                      <!-- <h3>MINE NXS</h3> -->
                      <p>Two Proof of Work (PoW) channels (Prime and Hashing) and one Proof of Stake (PoS) channel are used to secure the network. Consensus is balanced between all three channels, making the network more resistant to 51% attacks. The prime algorithm is optimized for use by your computer’s central processing unit (CPU), while the hashing algorithm runs optimally on the graphics processing unit (GPU).</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="hashing" role="tabpanel" aria-labelledby="hashing-tab">
                    <div class="titleCol">
                      <h3>HASHING CHANNEL</h3>
                      <p>A GPU contains dedicated processing hardware housed on-board your graphics card. A GPU can perform certain tasks much more efficiently than a CPU, including the ability to mine Nexus on the hashing channel. Nexus supports both AMD and Nvidia GPU mining and works best on newer models. Officially, Nexus does not support GPU pool mining, but there are 3rd party miners with this capability.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub1" role="tabpanel" aria-labelledby="sub1-tab">
                    <div class="titleCol">
                      <h3>Download Hashing Channel Miner</h3>
                    </div>
                    <div class="heading mt-4">
                      <p class="mt-4"><strong>GPU Solo Miners (AMD):</strong></p>
                      <ul class="ul-upper-latin">
                      <li><a href="http://nexusminingpool.com/downloads/wolf0miner64.zip">Windows x64 Solo Miner</a></li>
                      </ul>
                      <p class="mt-4"><strong>GPU Solo Miners (Nvidia):</strong></p>
                      <ul class="ul-upper-latin">
                      <li><a href="https://nexusearth.com/miners/SKMiner-v.0.1.3_optimized_by_Mumus.rar">SK-Miner Windows</a></li>
                      <li><a href="https://github.com/BitSlapper/SKMiner" target="_blank" rel="noopener noreferrer">SK-Miner GitHub</a></li>
                      </ul>
                      <p class="mt-4"><strong>GPU Pool Miners:</strong></p>
                      <ul class="ul-upper-latin">
                      <li>Links to pool miners should be available on the pool website. Different pools may use different miners.</li>
                      </ul>
                      </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub2" role="tabpanel" aria-labelledby="sub2-tab">
                    <div class="titleCol">
                      <h3>Configure Wallet for Solo Mining</h3>
                    </div>
                    <div class="heading mt-4">
                      <p >If you plan to solo mine Nexus, you will mine directly to your Nexus wallet. Before you can do so, you must add a small configuration change to the wallet itself.</p>
                      <p >First, close your Nexus wallet.</p>
                      <p >Navigate to %appdata%Nexus (~/Library/Application Support/Nexus on macOS) and open the <code>nexus.conf</code> file. Depending on your wallet, you may or may not have this file. If not, please create a new text file and save it as <code>nexus.conf</code></p>
                      <p >You will need to add the following lines to the <code>nexus.conf</code> file before restarting your wallet:</p>
                      <ul class="ul-upper-latin">
                        <li ><code>llpallowip=127.0.0.1:9325</code></li>
                        <li ><code>mining=1</code></li>
                      </ul>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub3" role="tabpanel" aria-labelledby="sub3-tab">
                    <div class="titleCol">
                      <h3>Configure Hashing Channel Miner</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>This guide covers the basic steps to set up a Hash Channel miner. Each miner is different, though, so refer to that miner’s documentation (readme file, GitHub page, or similar) for detail.</p>
                      <p><strong>Step 1</strong> – Extract the archive file to a folder.</p>
                      <p><strong>Step 2</strong> – Open the the mining configuration file (<code>miner.conf</code>). For some miners, such as <code>skminer</code>, this is found in <code>/resources/config</code>. Edit the connection settings.</p>
                      <p>For solo mining:</p>
                      <ul class="ul-upper-latin">
                      <li><code>"url": 127.0.0.1:9325</code> (mines to your Nexus wallet, which must be running)</li>
                      <li><code>"user": "x"</code></li>
                      <li><code>"password": "x"</code></li>
                      </ul>
                      <p>For pool mining:</p>
                      <ul class="ul-upper-latin">
                      <li><code>"url":</code> pool hostname or IP address and port, provided by pool</li>
                      <li><code>"user":</code> NXS address you are mining to (typically in your Nexus wallet, pool may or may not allow exchange address)</li>
                      <li><code>"password":</code> only if pool requires, otherwise use <code>"x"</code></li>
                      </ul>
                      <p>Other settings can be adjusted or tuned per the miner documentation. Tuning a miner for GPU mining is as much an art as a science, and settings will vary based on your hardware setup. They can even vary from one graphics card to another, even if they are exactly the same brand and model.</p>
                      <p><strong>Step 3</strong> – Run the miner. Most miners include a <code>.bat</code> or similar file for this purpose.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub4" role="tabpanel" aria-labelledby="sub4-tab">
                    <div class="titleCol">
                      <h3>Hashing Channel Pools</h3>
                    </div>
                    <div class="heading mt-4">
                      <p>Nexus does not officially support pool mining on the Hashing channel. Hashing pools are developed and operated by third parties. Any questions or issues with a pool should be directed to the pool operators.</p>
                      <p><strong>NXS Hashing Pools:</strong></p>
                      <ul class="ul-upper-latin">
                        <li><a href="https://nexuspool.ru/" target="_blank" rel="noopener noreferrer">https://nexuspool.ru/&nbsp;</a></li>
                        <li><a target="_blank" class="c-link" href="http://pool.blackminer.com/" rel="noopener noreferrer">http://pool.blackminer.com/</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="prime" role="tabpanel" aria-labelledby="prime-tab">
                    <div class="titleCol">
                      <h3>PRIME CHANNEL</h3>
                      <p>Almost every machine with CPU can mine Nexus blocks on this channel. The most effective method of mining is to join a mining pool and receive a share of the rewards based on the contribution you make. To create your own mining facility, you need the CPU mining software and a NXS address. This address cannot be on an exchange. You create an address when you install your Nexus wallet.</p>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub5" role="tabpanel" aria-labelledby="sub5-tab">
                    <div class="titleCol">
                      <h3>Download Prime Channel Miner</h3>
                    </div>
                    <div class="heading mt-4">
                      To mine Nexus on the Prime channel, it is highly recommended that you use a mining pool to improve results.<p></p>
                      <p><strong>Prime Solo Miners:</strong></p>
                      <ul class="ul-upper-latin">
                      <li><a href="https://github.com/Nexusoft/PrimeSoloMiner" target="_blank" rel="noopener noreferrer">Source Code [GitHub]</a></li>
                      <li><a href="http://nexusoft.io/platform/binaries/miners/solominer.zip">Windows Binary x86</a></li>
                      <li><a href="http://nexusoft.io/platform/binaries/miners/solominer-x64.zip">Windows Binary x64</a></li>
                      </ul>
                      <p><strong>Prime Pool Miners:</strong></p>
                      <ul class="ul-upper-latin">
                        <li>Official Nexus Prime miner: <a href="https://github.com/Nexusoft/PrimePoolMiner" target="_blank" rel="noopener noreferrer">Source Code [GitHub]</a></li>
                        <li>Third party tuned Prime miner (faster): <a href="https://github.com/hg5fm/PrimePoolMiner/releases" target="_blank" rel="noopener noreferrer">Releases [GitHub]</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub6" role="tabpanel" aria-labelledby="sub6-tab">
                    <div class="titleCol">
                      <h3>Configure Wallet for Solo Mining</h3>
                    </div>
                    <div class="heading mt-4">
                      For Prime channel mining, it is recommended that you use a mining pool. If, however, you prefer to solo mine Nexus, you will mine directly to your Nexus wallet. Before you can do so, you must add a small configuration change to the wallet itself.<p></p>
                      <p>First, close your Nexus wallet.</p>
                      <p>Navigate to %appdata%Nexus (~/Library/Application Support/Nexus on macOS) and open the <code>nexus.conf</code> file. Depending on your wallet, you may or may not have this file. If not, please create a new text file and save it as <code>nexus.conf</code></p>
                      <p>You will need to add the following lines to the <code>nexus.conf</code> file before restarting your wallet:</p>
                      <ul class="ul-upper-latin">
                        <li><code>llpallowip=127.0.0.1:9325</code></li>
                        <li><code>mining=1</code></li>
                      </ul>
                    </div>
                  </div>
                  <div class="customTab tab-pane fade" id="sub7" role="tabpanel" aria-labelledby="sub7-tab">
                    <div class="titleCol">
                      <h3>Configure Prime Channel Miner</h3>
                    </div>
                    <div class="heading mt-4">
                      This guide covers the basic steps to get the Prime miner up and running.<p></p>
                      <p><strong>Step 1</strong> – Extract the archive file to a folder.</p>
                      <p><strong>Step 2</strong> – Open the <code>miner.conf</code> file. Edit the following items:</p>
                      <ul class="ul-upper-latin">
                      <li><code>"host":</code> pool hostname or IP address, for solo this should be an address in your NXS wallet</li>
                      <li><code>"port":</code> use “9549” for pool, “9325” for solo</li>
                      <li><code>"nxs_address":</code> NXS address for pool payout, empty (<code>""</code>) for solo mode</li>
                      </ul>
                      <p>It is also recommended to add this item to the .conf file, if not already present:</p>
                      <ul class="ul-upper-latin">
                      <li><code>"experimental" : "true"</code></li>
                      </ul>
                      <p>This option enables the miner to use an improved sieve algorithm which will enable your miner to find primes at a faster rate.</p>
                      <p><strong>Step 3</strong> – Run the nexus_cpuminer. On Windows builds, you should run the <code>start.bat</code> file, which will automatically restart the miner if it shuts down for some reason.</p>
                      <p><strong>Step 4 </strong> – Tune the miner.</p>
                      <p>There are two additional items in the <code>miner.conf</code> that you can adjust to tune your miner:</p>
                      <ul class="ul-upper-latin">
                      <li><code>"sieve_threads":</code> number of CPU threads to use for sieving</li>
                      <li><code>"ptest_threads":</code> number of CPU threads to use for primality testing</li>
                      </ul>
                      <p>If you have a more powerful CPU with more cores, it can run faster (higher WPS – the Prime mining equivalent to hash rate) with higher settings for these values. As a rule of thumb, the number of threads used for the sieve should be around 75% of the threads used for testing. It will likely require trying different settings for these to determine what gives the best results.</p>
                      <p>You can leave most of the remaining items in the miner.conf file set to their default values.
                      </p>
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
