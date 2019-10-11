<?php 
  $url = '.';
?>
<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="https://www.facebook.com/2008/fbml">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/responsive.css">
  <link rel="icon" href="images/logo-icon.png">
  <title>Nexus</title>
  <?php
  $social_img = 'home.jpg';
  $social_title = 'Nexus';
  $social_description = 'Developing open-source technology to support decentralization, innovative applications and responsible values, to build a world where there is greater trust and connection between one another.';
  $social_url = '';

  $page = str_replace(".php", "", basename($_SERVER['PHP_SELF']));
  switch ($page) {
    case 'three-d-chain':
      $social_title = 'Three-Dimensional Chains';  
      $social_img = '3dc.jpg';
      $social_url = '3dc';
      break;
    case 'apps':
      $social_title = 'Decentralized Applications';
      $social_img = 'app.jpg';
      $social_url = 'apps';
      break;
    case 'assets':
      $social_title = 'Assets';
      $social_img = 'assets.jpg';
      $social_url = 'assets';
      break;
    case 'buy-nxs':
      $social_title = 'Purchase';
      $social_img = 'purchase.jpg';
      $social_url = 'buy-nxs';
      break;
    case 'dao':
      $social_title = 'DAO Technology';
      $social_url = 'dao';
      break;
    case 'decentralization':
      $social_title = 'Decentralization';
      $social_img = 'decentralization.jpg';
      $social_url = 'decentralization';
      break;
    case 'assets':
      $social_title = 'Assets';
      $social_img = 'assets.jpg';
      $social_url = 'assets';
      break;
      case 'digital-identity':
      $social_title = 'Digital Identity';
      $social_img = 'digital-identity.jpg';
      $social_url = 'digital-identity';
      break;
      case 'digital-rights':
      $social_title = 'Digital Rights Management';
      $social_img = 'digital-rights.jpg';
      $social_url = 'digital-rights';
      break;
      case 'economics':
      $social_title = 'Economics';
      $social_img = 'eco.jpg';
      $social_url = 'economics';
      break;
      case 'embassies':
      $social_title = 'Nexus Embassies';
      $social_img = 'Nexus-Embassies.jpg';
      $social_url = 'embassies';
      break;
      case 'faq':
      $social_title = 'FAQ';
      $social_img = 'FAQ.jpg';
      $social_url = 'faq';
      break;
      case 'lisp':
      $social_title = 'LISP';
      $social_img = 'LISP.jpg';
      $social_url = 'lisp';
      break;
      case 'mine':
      $social_title = 'Mine';
      $social_img = 'mine.jpg';
      $social_url = 'mine';
      break;
      case 'nexus-currency':
      $social_title = 'Cryptocurrency';
      $social_img = 'cryptocurrency.jpg';
      $social_url = 'cryptocurrency';
      break;
      case 'nexus-wallet':
      $social_title = 'Nexus Wallet';
      $social_img = 'wallet.jpg';
      $social_url = 'wallet';
      break;
      case 'our-team':
      $social_title = 'Nexus Team';
      $social_img = 'bannerteam.jpg';
      $social_url = 'team';
      break;
      case 'privacy':
      $social_title = 'Privacy';
      $social_img = 'FAQ.jpg';
      $social_url = 'privacy';
      break;
      case 'quantum-resistance':
      $social_title = 'Quantum Resistance';
      $social_img = 'Quantum-Resistance.jpg';
      $social_url = 'quantum-resistance';
      break;
      case 'roadmap':
      $social_title = 'Roadmap';
      $social_img = 'roadmap.jpg';
      $social_url = 'roadmap';
      break;
      case 'signature-chains':
      $social_title = 'Signature Chains';
      $social_img = 'sigchain.jpg';
      $social_url = 'signature-chains';
      break;
      case 'software-stack':
      $social_title = 'Software Stack';
      $social_img = 'software-stack.jpg';
      $social_url = 'software-stack';
      break;
      case 'stake':
      $social_title = 'Stake';
      $social_img = 'stack.jpg';
      $social_url = 'stake';
      break;
      case 'stos':
      $social_title = 'Securitized Token Offerings';
      $social_img = 'stos.jpg';
      $social_url = 'stos';
      break;
      case 'supply-chains':
      $social_title = 'Supply Chains';
      $social_img = 'supply-chains.jpg';
      $social_url = 'supply-chains';
      break;
      case 'terms':
      $social_title = 'Terms of Use';
      $social_img = 'FAQ.jpg';
      $social_url = 'terms';
      break;
      case 'tokens':
      $social_title = 'Tokens';
      $social_img = 'token.jpg';
      $social_url = 'tokens';
      break;
      case 'trust':
      $social_title = 'Trust';
      $social_img = 'trust.jpg';
      $social_url = 'trust';
      break;
      case 'wallet-guide':
      $social_title = 'Wallet Guide';
      $social_img = 'wallet-copy.jpg';
      $social_url = 'wallet-guide';
      break;
      case 'what-blockchain':
      $social_title = 'What is Blockchain';
      $social_img = 'what-blockchain.jpg';
      $social_url = 'what-blockchain';
      break;
      case 'what-nexus':
      $social_title = 'What is Nexus?';
      $social_img = 'what-is-nexus.jpg';
      $social_url = 'what-nexus';
      break;
      case 'whitepapers':
      $social_title = 'White Papers';
      $social_img = 'white-paper.jpg';
      $social_url = 'whitepapers';
      break;
      case 'working-groups':
      $social_title = 'Working Groups';
      $social_img = 'working-group.jpg';
      $social_url = 'working-groups';
      break;
    default:
      $social_title = 'Homepage';
  }
?>
  <meta name="description" content="<?php echo $social_description;?>" />
  <link rel="canonical" href="https://nexus.io" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="article" />
  <meta property="og:description" content="<?php echo $social_description;?>" />
  <meta property="og:url" content="https://nexus.io/<?php echo $social_url;?>" />
  <meta property="og:image" content="https://nexus.io/images/social/<?php echo $social_img;?>" />
  <meta property="og:image:secure_url" content="https://nexus.io/images/social/<?php echo $social_img;?>" />
  <meta property="og:title" content="<?php echo $social_title;?>" />
  <meta property="og:site_name" content="Nexus" />
  <meta property="article:publisher" content="https://www.facebook.com/nxsearth/" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:description" content="<?php echo $social_description;?>" />
  <meta name="twitter:title" content="<?php echo $social_title;?>" />
  <meta name="twitter:image" content="https://nexus.io/images/social/<?php echo $social_img;?>" />

</head>

<body>
  <!-- headerSection starts -->
  <header>
    <div class="headerSeciton" id="myHeader">
      <div class="container">
        <div class="row align-items-center">
          <div class="col">
            <div class="logo">
              <a href="<?php echo $url;?>/"><img class="white_logo" src="images/logo.png" alt="logo.png"></a>
              <a href="<?php echo $url;?>/"><img class="blue_logo" src="images/blue-logo.png" alt="logo.png"></a>
            </div>
          </div>
          <div class="col-auto">
              <!-- toggle div starts -->
              <div class="toggle d-lg-none d-md-block">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
              </div>
                <!-- toggle div starts -->
                <div class="navMenu">
                <ul>
                  <li>
                    <a href="JavaScript:void(0)">Cryptocurrency</a>
                    <ul class="d-submenu">
                      <li>
                        <a href="<?php echo $url;?>/cryptocurrency">Cryptocurrency</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/wallet">Wallet</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/stake">Stake</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/mine">Mine</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/buy-nxs">Purchase</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/economics">Economics</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="JavaScript:void(0)">Technology</a>
                    <ul class="d-submenu">
                      <li>
                        <a href="<?php echo $url;?>/apps">Applications</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/software-stack">Software Stack</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/signature-chains">Signature Chains</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/3dc">3DC</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/trust">Trust</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/quantum-resistance">Quantum Resistance</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/lisp">LISP</a>
                      </li>
                      <!-- <li>
                        <a href="<?php echo $url;?>/quantum-resistance" disabled>Safe Net</a>
                      </li> -->
                      <!-- <li>
                        <a href="<?php echo $url;?>/quantum-resistance" disabled>Satellites & Mesh networks</a>
                      </li> -->
                    </ul>
                  </li>
                  <li>
                    <a href="JavaScript:void(0)">Solutions</a>
                    <ul class="d-submenu">
                      <li>
                        <a href="<?php echo $url;?>/digital-identity">Digital Identity</a>
                      </li>
                      <!-- <li>
                        <a href="<?php echo $url;?>/" disabled>Assets</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/" disabled>Tokens</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/" disabled>TNS</a>
                      </li>-->
                      <li>
                        <a href="<?php echo $url;?>/stos">STOs</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/digital-rights">Digital Rights Management</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/supply-chains">Supply Chains</a>
                      </li>
                      <!--<li>
                        <a href="<?php echo $url;?>/" disabled>Personal Finances</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/" disabled>Business & Legal Admin</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/" disabled>DAOs & Voting</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/" disabled>Education</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/" disabled>Web Services</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/" disabled>Fees</a>
                      </li> -->
                    </ul>
                  </li>
                  <li>
                    <a href="JavaScript:void(0)">Governance</a>
                    <ul class="d-submenu">
                      <li>
                        <a href="<?php echo $url;?>/decentralization">Decentralization</a>
                      </li>
                      <!-- <li>
                        <a href="<?php echo $url;?>/dao">DAO Technology</a>
                      </li> -->
                      <li>
                        <a href="<?php echo $url;?>/embassies">Embassies</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="JavaScript:void(0)">About</a>
                    <ul class="d-submenu">
                      <li>
                        <a href="<?php echo $url;?>/what-nexus">Nexus</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/team">Team</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/working-groups">Working Groups</a>
                      </li>
                      <!-- <li>
                        <a href="<?php echo $url;?>/" disabled>History</a>
                      </li> -->
                    </ul>
                  </li>
                  <li>
                    <a href="JavaScript:void(0)">Resources</a>
                    <ul class="d-submenu">
                      <!-- <li>
                        <a href="<?php echo $url;?>/" disabled>What is Blockchain?</a>
                      </li> -->
                      <li>
                        <a href="<?php echo $url;?>/wallet-guide">Wallet Guide</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/faq">FAQ</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/whitepapers">White Papers</a>
                      </li>
                      <li>
                        <a href="<?php echo $url;?>/roadmap">Roadmap</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- headerSection ends -->
