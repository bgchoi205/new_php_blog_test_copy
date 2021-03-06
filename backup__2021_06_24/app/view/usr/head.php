<?php
global $application;
$envCode = $application->getEnvCode();
$prodSiteDomain = $application->getProdSiteDomain();
$isLogined = $_REQUEST['App__isLogined'];
$loginedMemberId = $_REQUEST['App__loginedMemberId'];
$loginedMember = $_REQUEST['App__loginedMember'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$pageTitle?></title>

  <!-- 제이쿼리 불러오기 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- 폰트어썸 불러오기 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

  <!-- 테일윈드 불러오기 -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1/dist/tailwind.min.css" rel="stylesheet" type="text/css" />
  <!-- 데이지UI 불러오기, 테일윈드 필요 -->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@1.3.2/dist/full.css" rel="stylesheet" type="text/css" />

  <link rel="stylesheet" href="/resource/common.css">

  <?php if ( $envCode == 'prod' ) { ?>
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-DL3EPB6BMB"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-DL3EPB6BMB');
  </script>
  <?php }?>


  <?php
  $siteName = "dola2 BLOG";
  $siteCanonicalUrl = $_SERVER['REQUEST_URI'];
  $siteKeywords = "IT, Java, PHP, HTML, CSS, Javascript, MySQL, Linux";
  $pageGenDate = date("Y-m-d") . 'T' . date("H:i:s") . 'Z';
  $siteSubject = "IT 전문 블로그 플랫폼, dola2 BLOG";
  $siteDescription = "IT 전문 블로그 플랫폼, dola2 BLOG 입니다. 멋진 IT 블로그를 만들 수 있습니다.";
  $siteDomain = $prodSiteDomain;
  $siteMainUrl = "https://{$siteDomain}";
  $siteMetaImgUrl = "/resource/img/logo/logo_meta.png";
  ?>

  <meta name="apple-mobile-web-app-title" content="<?=$siteName?>" />
  <!-- 메타태그정보 //-->
  <!-- META -->
  <link rel="canonical" href="<?=$siteCanonicalUrl?>" />
  <meta name="subject" content="<?=$siteSubject?>"/>
  <meta name="title" content="<?=$siteName?>" />
  <meta name="keywords" content="<?=$siteKeywords?>" />
  <meta name="copyright" content="<?=$siteName?>" />
  <meta name="pubdate" content="<?=$pageGenDate?>" />
  <meta name="lastmod" content="<?=$pageGenDate?>" />
  <!-- OPENGRAPH -->
  <meta property="og:site_name" content="<?=$siteName?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?=$siteSubject?>" />
  <meta property="og:description" content="<?=$siteDescription?>" />
  <meta property="og:locale" content="ko_KR" />
  <meta property="og:image" content="<?=$siteMainUrl?><?=$siteMetaImgUrl?>" />
  <meta property="og:image:alt" content="<?=$siteDomain?>" />
  <meta property="og:image:width" content="486" />
  <meta property="og:image:height" content="254" />
  <meta property="og:updated_time" content="<?=$pageGenDate?>"/>
  <meta property="og:pubdate" content="<?=$pageGenDate?>" />
  <meta property="og:url" content="<?=  $siteCanonicalUrl?>" />
  <!-- TWITTER -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:title" content="<?=$siteSubject?>" />
  <meta name="twitter:site" content="<?=$siteName?>" />
  <meta name="twitter:creator" content="<?=$siteName?>" />
  <meta name="twitter:image" content="<?=$siteMetaImgUrl?>">
  <meta name="twitter:description" content="<?=$siteDescription?>" />
  <!-- GOOGLE+ -->
  <meta itemprop="headline" content="<?=$siteName?>" />
  <meta itemprop="name" content="<?=$siteName?>" />
  <meta itemprop="description" content="<?=$siteDescription?>" />
  <meta itemprop="image" content="<?=$siteMetaImgUrl?>" />

</head>
<body>
  <div class="site-wrap min-h-screen flex flex-col pt-10">
    <header class="top-bar fixed top-0 inset-x-0 bg-indigo-900 text-white h-10">
      <div class="container mx-auto h-full flex">
        <a href="/" class="top-bar__logo px-5 flex items-center">
          <span><i class="fas fa-laptop-code"></i></span>
          <span class="ml-2 font-bold hidden sm:inline">CBG BLOG</span>
        </a>

        <div class="flex-grow"></div>

        <nav class="menu-box-1">
          <ul class="flex h-full">
            <li class="hover:bg-white hover:text-black">
              <a href="/" class="h-full flex items-center px-5">
                <span><i class="fas fa-home"></i></span>
                <span class="ml-2 font-bold hidden sm:inline">HOME</span>
              </a>
            </li>
            <li class="hover:bg-white hover:text-black">
              <a href="/usr/article/aboutme" class="h-full flex items-center px-5">
                <span><i class="far fa-id-card"></i></span>
                <span class="ml-2 font-bold hidden sm:inline">ABOUT ME</span>
              </a>
            </li>
            <?php if ( $isLogined ) { ?>
            <li class="hover:bg-white hover:text-black">
              <a href="/usr/member/doLogout" class="h-full flex items-center px-5">
                <span><i class="fas fa-sign-out-alt"></i></span>
                <span class="ml-2 font-bold hidden sm:inline">LOGOUT</span>
              </a>
            </li>
            <?php } else { ?>
            <li class="hover:bg-white hover:text-black">
              <a href="/usr/member/login" class="h-full flex items-center px-5">
                <span><i class="fas fa-sign-in-alt"></i></span>
                <span class="ml-2 font-bold hidden">LOGIN</span>
              </a>
            </li>
            <?php } ?>
          </ul>
        </nav>
      </div>
    </header>

    <main class="flex-grow">
      <section class="section-title mt-5 text-2xl font-bold">
        <h1 class="container mx-auto">
          <div class="con-pad">
            <span><?=$pageTitleIcon?></span>
            <span><?=$pageTitle?></span>
          </div>
        </h1>
      </section>