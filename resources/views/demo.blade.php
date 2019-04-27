@extends('layouts.app')
@section('content')

  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EDGE">
    <title>Restaurants and Restaurant Reservations| OpenTable</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="//components.otstatic.com/components/favicon/1.0.5/favicon/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="//components.otstatic.com/components/favicon/1.0.5/favicon/favicon-16.png" sizes="16x16" />
    <link rel="icon" href="//components.otstatic.com/components/favicon/1.0.5/favicon/favicon-32.png" sizes="32x32" />
    <link rel="icon" href="//components.otstatic.com/components/favicon/1.0.5/favicon/favicon-48.png" sizes="48x48" />
    <link rel="icon" href="//components.otstatic.com/components/favicon/1.0.5/favicon/favicon-64.png" sizes="64x64" />
    <link rel="icon" href="//components.otstatic.com/components/favicon/1.0.5/favicon/favicon-128.png" sizes="128x128" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="//components.otstatic.com/components/favicon/1.0.5/favicon/apple-touch-icon-152x152-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="//components.otstatic.com/components/favicon/1.0.5/favicon/apple-touch-icon-144x144-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="//components.otstatic.com/components/favicon/1.0.5/favicon/apple-touch-icon-120x120-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="//components.otstatic.com/components/favicon/1.0.5/favicon/apple-touch-icon-114x114-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="//components.otstatic.com/components/favicon/1.0.5/favicon/apple-touch-icon-76x76-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="//components.otstatic.com/components/favicon/1.0.5/favicon/apple-touch-icon-72x72-precomposed.png" />
    <link rel="apple-touch-icon-precomposed" href="//components.otstatic.com/components/favicon/1.0.5/favicon/apple-touch-icon-144x144-precomposed.png" />
    <script>
      window.oc = window.oc || {};
      oc.renderedComponents = oc.renderedComponents || {};
      oc.renderedComponents["favicon"] = "1.0.5";
    </script>
    <link rel="stylesheet" href='//media.otstatic.com/css/app-db37187b2780a9e52c26e1a7a17ffaca.css._gz' />
    <link rel="stylesheet" href='//media.otstatic.com/css/controllers/home-43ad7d19bfc940efbb91369a1da8ecf1.css._gz' />
    <!--[if lte IE 8]><link rel="stylesheet" href="//media.otstatic.com/css/controllers/home_ie8-891867b8d5523407fc32b151e1d56c32.css"/><![endif]-->
    <link rel="stylesheet" href='//media.otstatic.com/css/experiments/rush-1503-67e75db74c148a918cf3d420a34ff38f.css._gz' />
    <link rel="stylesheet" href='//media.otstatic.com/css/experiments/rush-1504-3400ef69a1c2341da3d0dff27b80111c.css._gz' />
    <link rel="stylesheet" href='//media.otstatic.com/css/experiments/rush-1506-f0d2a3e8028f703fc8a2fc7f85a2114f.css._gz' />
    <link rel="stylesheet" href='//media.otstatic.com/css/experiments/rush-1976-6b7a19e4d9e25f9f78d201adb41fdd6b.css._gz' />
    <style type="text/css">
      .location-picker-metro {
        display: none;
      }
</style><link rel="stylesheet" href='//media.otstatic.com/home/index-bc9040c195a2b0aa19991113679c7a30.css._gz' /><script>window.OTCurrentPage = 'home';
window.OTCurrentPageArch = 'new_architecture';
</script><script>window.OTExperiments = {"rush-2730":0,"rush-2864":0,"rush-2038":0,"rush-1503":1,"rush-1506":1,"rush-1976":2,"rush-2180":1,"no-more-mdot-it":0,"no-more-mdot-ca":1,"rush-2598":1,"rush-2663":1,"rush-2734":1,"rush-2751":0,"rush-2755":0,"rush-2897":0,"rush-2940":1,"rush-3002":1,"sfx-895":0,"rush-1504":2,"rush-2074":0,"rush-2044":0};
window.GAExperimentEvents = {"rush-2864":"rush-2864_3335v0","rush-2038":"rush-2038_3033v0","rush-1503":"rush-1503_1988v1","rush-1506":"rush-1506_1956v1","rush-1976":"rush-1976_2393v2","rush-2180":"rush-2180_2436v1","no-more-mdot-ca":"no-more-mdot-ca_2938v1","rush-2598":"rush-2598_3112v1","rush-2663":"rush-2663_3118v1","rush-2734":"rush-2734_3131v1","rush-2751":"rush-2751_3332v0","rush-2755":"rush-2755_3196v0","rush-2940":"rush-2940_3363v1","rush-3002":"rush-3002_3361v1","sfx-895":"sfx-895_3275v0","rush-1504":"rush-1504_1957v2","rush-2074":"rush-2074_2540v0"};
</script><script>window.OTDataLayer = [{"domain":8,"platform":"Full Web","visitor_status":"Logged Out","user_type":"anonymous","seo_vertical":"restaurants","seo_page_type":"home","seo_page_subtype":"unknown","ref_id":"16276","language":"en-ca","page_name":"cai18nhome","experiments_on_page":"3335v0,3033v0,1988v1,1956v1,2393v2,2436v1,2938v1,3112v1,3118v1,3131v1,3332v0,3196v0,3363v1,3361v1,3275v0,1957v2"}];</script><script>window.OT = window.OT || {};
window.OT.SRS = {
  abTestingAnalytics: {"account":"2d65a94551a4a1caddd5a825a88698a89e19f2d5","hostname":"ac.opentable.ca"},
  disableRaven: false,
  domainId: 8,
  jsHeadVersion: "1.0.90",
  lang: "en",
  ocUrl: window.location.protocol + '//oc-registry.opentable.com/v2/',
  requestId: "d0f6b200-0d8f-43cb-bfd5-f945cdc9c2d1"
};





window.OT.searchAutoComplete = {};
window.OT.searchAutoComplete.ticketedRids = [681,1537,3334,7055,11065,29995,47119,53716,89905,100033,112846,114886,118765,140968,160504,185560,185773,210868,211918,212878,233239,252232,263128,267508,268867,270751,335149,347206,349942,984418,986635,986725];

window.oc = window.oc || {};
window.oc.conf = { globalParameters: { __ot_conservedHeaders: 'x2YPvT6POzqVVB9+77Ms1NwJY1Bl+vgHbCRFCOem0+5GI13K6SmI2OW5AbdHiiLunCCGmDVx9n+UP0qCsFPd0AhLAsbZVebit0t+WZjsnQRDCB1CzBzsSGuzgJ/nw8+aAT066pVAiCvCd0bGK7M/V5SMESYGzca+LRdHReibCwXJ4uaumbj2F6RB9WdKcjQ2h8elkJgFgHk=' }};
</script><!--[if lte IE 8]> <script src="//components.otstatic.com/components/js-head/1.0.90/min/ie8_compat.js"></script> <![endif]-->
<!--[if IE 9]> <script src="//components.otstatic.com/components/js-head/1.0.90/min/ie9_compat.js"></script> <![endif]--><script src="//components.otstatic.com/components/js-head/1.0.90/min/bundle_head.js" crossorigin="anonymous"></script><script>window.oc=window.oc||{};oc.conf=oc.conf||{};oc.conf.templates=(oc.conf.templates||[]).concat([{"type":"oc-template-es6","version":"1.0.1","externals":[]},{"type":"oc-template-jade","version":"6.0.12","externals":[{"global":"jade","url":"https://unpkg.com/jade-legacy@1.11.1/runtime.js","name":"jade"}]},{"type":"oc-template-handlebars","version":"6.0.13","externals":[{"global":"Handlebars","url":"https://unpkg.com/handlebars@4.0.11/dist/handlebars.runtime.min.js","name":"handlebars"}]},{"type":"oc-template-react","version":"2.0.16","externals":[{"global":["Object","assign"],"url":"https://unpkg.com/es6-object-assign@1.1.0/dist/object-assign-auto.min.js","name":"Object.assign"},{"global":"PropTypes","url":"https://unpkg.com/prop-types@15.7.2/prop-types.min.js","name":"prop-types"},{"global":"React","url":"https://unpkg.com/react@16.8.5/umd/react.production.min.js","name":"react"},{"global":"ReactDOM","url":"https://unpkg.com/react-dom@16.8.5/umd/react-dom.production.min.js","name":"react-dom"}]},{"type":"ot-oc-template-react-email","version":"0.0.2","externals":[{"global":"PropTypes","url":"https://unpkg.com/prop-types@15.6.1/prop-types.min.js","name":"prop-types"},{"global":"React","url":"https://unpkg.com/react@16.2.0/umd/react.production.min.js","name":"react"},{"global":"ReactDOM","url":"https://unpkg.com/react-dom@16.2.0/umd/react-dom.production.min.js","name":"react-dom"}]}]);</script><script src="//components.otstatic.com/components/oc-client/0.44.11/src/oc-client.min.js" type="text/javascript"></script>
<!--[if lte IE 9]> <script src="//components.otstatic.com/components/js-head/1.0.90/min/ie_jquery.js"></script> <![endif]--><script>window.optimizely = window.optimizely || [];</script><script>window.oc=window.oc||{};oc.renderedComponents=oc.renderedComponents||{};oc.renderedComponents["js-head"]="1.0.90";</script><link rel="alternate" href="https://www.opentable.com/" hreflang="en-US"><link rel="alternate" href="https://www.opentable.com/?lang=fr" hreflang="fr-US"><link rel="alternate" href="https://www.opentable.com/?lang=de" hreflang="de-US"><link rel="alternate" href="https://www.opentable.com/?lang=es" hreflang="es-US"><link rel="alternate" href="https://www.opentable.com/?lang=ja" hreflang="ja-US"><link rel="alternate" href="https://www.opentable.com/?lang=nl" hreflang="nl-US"><link rel="alternate" href="https://www.opentable.com/?lang=it" hreflang="it-US"><link rel="alternate" href="https://www.opentable.jp/" hreflang="ja-JP"><link rel="alternate" href="https://www.opentable.jp/?lang=en" hreflang="en-JP"><link rel="alternate" href="https://www.opentable.jp/?lang=fr" hreflang="fr-JP"><link rel="alternate" href="https://www.opentable.jp/?lang=de" hreflang="de-JP"><link rel="alternate" href="https://www.opentable.jp/?lang=es" hreflang="es-JP"><link rel="alternate" href="https://www.opentable.jp/?lang=nl" hreflang="nl-JP"><link rel="alternate" href="https://www.opentable.jp/?lang=it" hreflang="it-JP"><link rel="alternate" href="https://www.opentable.de/" hreflang="de-DE"><link rel="alternate" href="https://www.opentable.de/?lang=en" hreflang="en-DE"><link rel="alternate" href="https://www.opentable.de/?lang=fr" hreflang="fr-DE"><link rel="alternate" href="https://www.opentable.de/?lang=es" hreflang="es-DE"><link rel="alternate" href="https://www.opentable.de/?lang=ja" hreflang="ja-DE"><link rel="alternate" href="https://www.opentable.de/?lang=nl" hreflang="nl-DE"><link rel="alternate" href="https://www.opentable.de/?lang=it" hreflang="it-DE"><link rel="alternate" href="https://www.opentable.es/" hreflang="es-ES"><link rel="alternate" href="https://www.opentable.es/?lang=en" hreflang="en-ES"><link rel="alternate" href="https://www.opentable.es/?lang=de" hreflang="de-ES"><link rel="alternate" href="https://www.opentable.es/?lang=fr" hreflang="fr-ES"><link rel="alternate" href="https://www.opentable.es/?lang=ja" hreflang="ja-ES"><link rel="alternate" href="https://www.opentable.es/?lang=nl" hreflang="nl-ES"><link rel="alternate" href="https://www.opentable.es/?lang=it" hreflang="it-ES"><link rel="alternate" href="https://www.opentable.com.mx/" hreflang="es-MX"><link rel="alternate" href="https://www.opentable.com.mx/?lang=en" hreflang="en-MX"><link rel="alternate" href="https://www.opentable.com.mx/?lang=fr" hreflang="fr-MX"><link rel="alternate" href="https://www.opentable.com.mx/?lang=de" hreflang="de-MX"><link rel="alternate" href="https://www.opentable.com.mx/?lang=ja" hreflang="ja-MX"><link rel="alternate" href="https://www.opentable.com.mx/?lang=nl" hreflang="nl-MX"><link rel="alternate" href="https://www.opentable.com.mx/?lang=it" hreflang="it-MX"><link rel="alternate" href="https://www.opentable.ca/" hreflang="en-CA"><link rel="alternate" href="https://www.opentable.ca/?lang=fr" hreflang="fr-CA"><link rel="alternate" href="https://www.opentable.ca/?lang=de" hreflang="de-CA"><link rel="alternate" href="https://www.opentable.ca/?lang=es" hreflang="es-CA"><link rel="alternate" href="https://www.opentable.ca/?lang=ja" hreflang="ja-CA"><link rel="alternate" href="https://www.opentable.ca/?lang=nl" hreflang="nl-CA"><link rel="alternate" href="https://www.opentable.ca/?lang=it" hreflang="it-CA"><link rel="alternate" href="https://www.opentable.hk/" hreflang="en-HK"><link rel="alternate" href="https://www.opentable.hk/?lang=ja" hreflang="ja-HK"><link rel="alternate" href="https://www.opentable.hk/?lang=fr" hreflang="fr-HK"><link rel="alternate" href="https://www.opentable.hk/?lang=de" hreflang="de-HK"><link rel="alternate" href="https://www.opentable.hk/?lang=es" hreflang="es-HK"><link rel="alternate" href="https://www.opentable.hk/?lang=nl" hreflang="nl-HK"><link rel="alternate" href="https://www.opentable.hk/?lang=it" hreflang="it-HK"><link rel="alternate" href="https://www.opentable.ie/" hreflang="en-IE"><link rel="alternate" href="https://www.opentable.ie/?lang=fr" hreflang="fr-IE"><link rel="alternate" href="https://www.opentable.ie/?lang=de" hreflang="de-IE"><link rel="alternate" href="https://www.opentable.ie/?lang=es" hreflang="es-IE"><link rel="alternate" href="https://www.opentable.ie/?lang=ja" hreflang="ja-IE"><link rel="alternate" href="https://www.opentable.ie/?lang=nl" hreflang="nl-IE"><link rel="alternate" href="https://www.opentable.ie/?lang=it" hreflang="it-IE"><link rel="alternate" href="https://www.opentable.sg/" hreflang="en-SG"><link rel="alternate" href="https://www.opentable.sg/?lang=ja" hreflang="ja-SG"><link rel="alternate" href="https://www.opentable.sg/?lang=fr" hreflang="fr-SG"><link rel="alternate" href="https://www.opentable.sg/?lang=de" hreflang="de-SG"><link rel="alternate" href="https://www.opentable.sg/?lang=es" hreflang="es-SG"><link rel="alternate" href="https://www.opentable.sg/?lang=nl" hreflang="nl-SG"><link rel="alternate" href="https://www.opentable.sg/?lang=it" hreflang="it-SG"><link rel="alternate" href="https://www.opentable.nl/" hreflang="nl-NL"><link rel="alternate" href="https://www.opentable.nl/?lang=en" hreflang="en-NL"><link rel="alternate" href="https://www.opentable.nl/?lang=fr" hreflang="fr-NL"><link rel="alternate" href="https://www.opentable.nl/?lang=de" hreflang="de-NL"><link rel="alternate" href="https://www.opentable.nl/?lang=es" hreflang="es-NL"><link rel="alternate" href="https://www.opentable.nl/?lang=ja" hreflang="ja-NL"><link rel="alternate" href="https://www.opentable.nl/?lang=it" hreflang="it-NL"><link rel="alternate" href="https://www.opentable.co.uk/" hreflang="en-GB"><link rel="alternate" href="https://www.opentable.co.uk/?lang=fr" hreflang="fr-GB"><link rel="alternate" href="https://www.opentable.co.uk/?lang=de" hreflang="de-GB"><link rel="alternate" href="https://www.opentable.co.uk/?lang=es" hreflang="es-GB"><link rel="alternate" href="https://www.opentable.co.uk/?lang=ja" hreflang="ja-GB"><link rel="alternate" href="https://www.opentable.co.uk/?lang=nl" hreflang="nl-GB"><link rel="alternate" href="https://www.opentable.co.uk/?lang=it" hreflang="it-GB"><link rel="alternate" href="https://www.opentable.com.au/" hreflang="en-AU"><link rel="alternate" href="https://www.opentable.com.au/?lang=fr" hreflang="fr-AU"><link rel="alternate" href="https://www.opentable.com.au/?lang=de" hreflang="de-AU"><link rel="alternate" href="https://www.opentable.com.au/?lang=es" hreflang="es-AU"><link rel="alternate" href="https://www.opentable.com.au/?lang=ja" hreflang="ja-AU"><link rel="alternate" href="https://www.opentable.com.au/?lang=nl" hreflang="nl-AU"><link rel="alternate" href="https://www.opentable.com.au/?lang=it" hreflang="it-AU"><link rel="alternate" href="https://www.opentable.ae/" hreflang="en-AE"><link rel="alternate" href="https://www.opentable.ae/?lang=fr" hreflang="fr-AE"><link rel="alternate" href="https://www.opentable.ae/?lang=de" hreflang="de-AE"><link rel="alternate" href="https://www.opentable.ae/?lang=es" hreflang="es-AE"><link rel="alternate" href="https://www.opentable.ae/?lang=ja" hreflang="ja-AE"><link rel="alternate" href="https://www.opentable.ae/?lang=nl" hreflang="nl-AE"><link rel="alternate" href="https://www.opentable.ae/?lang=it" hreflang="it-AE"><link rel="alternate" href="https://www.opentable.co.th/" hreflang="en-TH"><link rel="alternate" href="https://www.opentable.co.th/?lang=ja" hreflang="ja-TH"><link rel="alternate" href="https://www.opentable.co.th/?lang=fr" hreflang="fr-TH"><link rel="alternate" href="https://www.opentable.co.th/?lang=de" hreflang="de-TH"><link rel="alternate" href="https://www.opentable.co.th/?lang=es" hreflang="es-TH"><link rel="alternate" href="https://www.opentable.co.th/?lang=nl" hreflang="nl-TH"><link rel="alternate" href="https://www.opentable.co.th/?lang=it" hreflang="it-TH"><link rel="alternate" href="https://www.opentable.it/" hreflang="it-IT"><link rel="alternate" href="https://www.opentable.it/?lang=fr" hreflang="fr-IT"><link rel="alternate" href="https://www.opentable.it/?lang=en" hreflang="en-IT"><link rel="alternate" href="https://www.opentable.it/?lang=de" hreflang="de-IT"><link rel="alternate" href="https://www.opentable.it/?lang=es" hreflang="es-IT"><link rel="alternate" href="https://www.opentable.it/?lang=ja" hreflang="ja-IT"><link rel="alternate" href="https://www.opentable.it/?lang=nl" hreflang="nl-IT"><meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="apple-itunes-app" content="app-id=296581815" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="pragma" content="no-cache" />
<meta name="msApplication-ID" content="OpenTable.OpenTable"/>
<meta name="msApplication-PackageFamilyName" content="OpenTable.OpenTable_r44en0zefym0a"/><meta name="Description" content="Make a reservation online, read restaurant reviews from diners, and earn points towards free meals. OpenTable is a real-time online reservation network for fine dining restaurants.
"><meta name="Keywords" content="restaurant reservations, online restaurant reservations, restaurant management software, opentable, open table"><meta name="ot:page_type" content="restaurants,home,unknown"><link rel="canonical" href="https://www.opentable.ca/"/><link rel="alternate" href="android-app://com.opentable/vnd.opentable.deeplink/opentable.ca?refId=12415"/><link rel="alternate" href="ios-app://296581815/reservetable-com.contextoptional.OpenTable-1/?refid=12415"/><script async="async" src="https://www.googletagservices.com/tag/js/gpt.js"></script><script>var googletag = googletag || {};
googletag.cmd = googletag.cmd || [];
</script><script>googletag.cmd.push(function() {
  var mapping = googletag.sizeMapping().addSize([1600, 100], [1208, 302]).build();
  var placementSize = [952, 238];
  if(OTExperiments['rush-2897']) {
    placementSize = [[1200,150],[952,150],[728,90]];
  }
  googletag.defineSlot('/12907657/opentable/en-ca/restaurant/frontdoor', placementSize, 'div-gpt-ad-1543258230638-0').defineSizeMapping(mapping).setCollapseEmptyDiv(true).addService(googletag.pubads());
  googletag.pubads().enableSingleRequest();
  googletag.enableServices();
});
</script></head>

<body class="home domain-ca rush-1504-2 ">
  <div class="master-container"><style>.icon-font{font-family:icons;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.breadcrumb li.icon-visible a:before{font-family:icons;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.breadcrumb{background-color:#fff!important;height:2rem;line-height:1.9rem;font-size:.75rem;border-top:1px solid rgba(0,0,0,.08)!important;border-bottom:none!important;padding:0 1.25rem}.breadcrumb:after,.breadcrumb:before{content:" ";display:table}.breadcrumb:after{clear:both}@media only screen and (min-width:64.0625em){.breadcrumb{padding:0 2.25rem}}.breadcrumb li{position:relative;display:block;float:left;margin:0 1rem 0 .35rem}.breadcrumb li.hidden{display:none}@media only screen and (min-width:40.0625em){.breadcrumb li.hidden{display:block}}.breadcrumb li.icon-visible{margin-left:0;height:100%;width:1.25rem}@media only screen and (min-width:40.0625em){.breadcrumb li.icon-visible{margin-left:.35rem;width:auto}}.breadcrumb li.icon-visible a{display:block;width:100%;height:100%}.breadcrumb li.icon-visible a span{display:none}@media only screen and (min-width:40.0625em){.breadcrumb li.icon-visible a span{display:block}}.breadcrumb li.icon-visible a:before{content:"a";display:block;width:1.5rem;height:2rem;line-height:2rem;text-align:center;position:absolute;font-size:1rem}@media only screen and (min-width:40.0625em){.breadcrumb li.icon-visible a:before{display:none}}.breadcrumb li:first-child{margin-left:0}.breadcrumb li:last-child{margin-right:0}.breadcrumb li:last-child:after,.breadcrumb li:last-child:before{display:none}.breadcrumb li:after,.breadcrumb li:before{content:'';position:absolute;left:100%;margin-left:.25rem}.breadcrumb li:before{top:-1px;border-top:1rem solid transparent;border-bottom:1rem solid transparent;border-left:.6rem solid rgba(0,0,0,.2)}.breadcrumb li:after{top:0;border-top:.96rem solid transparent;border-bottom:.96rem solid transparent;border-left:.56rem solid #fff}.domain-comau .top-bar-nav-link.icon-location{line-height:55px}.domain-comau .top-bar-nav-link.icon-location:before{color:rgba(0,0,0,.12);font-size:18px;position:relative;top:4px;left:-2px}.domain-comau .with-location-picker .tab-bar-logo{margin-left:48px}.domain-comau .hamburger-menu .top-bar-nav-link{line-height:50px}.menu-drawer-left.sliding-menu .menu-close:after{font-family:icons;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.menu-drawer-left.sliding-menu{position:fixed;background-color:unset;top:0;left:0;width:100%;height:100%;pointer-events:none;transition:background-color .25s ease-out}.menu-drawer-left.sliding-menu.menu-opened{background-color:rgba(0,0,0,.5);pointer-events:auto}.menu-drawer-left.sliding-menu.menu-opened:before{content:none}.menu-drawer-left.sliding-menu.menu-opened .menu-container{transform:translate3d(0,0,0)}.menu-drawer-left.sliding-menu .menu-container{width:220px;height:100%;max-height:initial;transition:transform .5s ease-out;transform:translate3d(-220px,0,0);opacity:1}.menu-drawer-left.sliding-menu .menu-container .menu-main{border-radius:0;box-shadow:none;width:100%;height:100%;margin:0;padding:3rem 0 .25rem 0}.menu-drawer-left.sliding-menu .menu-list-link{transition:color .15s ease-out;font-size:.875rem;padding:.5rem 1rem .5rem 1.5rem}.menu-drawer-left.sliding-menu .menu-list-link-primary{color:#60b2d0!important;border-bottom:1px solid rgba(0,0,0,.08);font-size:1rem;padding:.75rem 1rem .75rem 1.5rem}.menu-drawer-left.sliding-menu .menu-list-link-primary:hover{color:#356273!important}.menu-drawer-left.sliding-menu .menu-list-link-primary.sign-out-link{color:#da3743!important}.menu-drawer-left.sliding-menu .menu-list-link-primary.sign-out-link:hover{color:#811520!important}.menu-drawer-left.sliding-menu .menu-list-link.help-link{margin-top:3rem}.menu-drawer-left.sliding-menu .menu-close{position:absolute;top:1rem;right:1rem;z-index:10;color:#60b2d0;transition:color .15s ease-out}.menu-drawer-left.sliding-menu .menu-close:hover{color:#356273}.menu-drawer-left.sliding-menu .menu-close:after{content:"U";display:block;font-size:1.2rem}#hamburger-overlay{background:#333;background:rgba(0,0,0,.2);height:100%;width:100%;position:absolute;opacity:0;z-index:110;left:-900000px;transition:.3s opacity ease-in-out}#hamburger-overlay.isActive{left:0;opacity:1}#hamburger-pane{background:#fff;height:100%;width:220px;position:absolute;z-index:120;right:900000px;top:-900000px;opacity:0;transition:.15s right ease-in-out,.15s right ease-in-out}#hamburger-pane.isActive{right:0;top:0;opacity:1}.hamburger-pane__header{border-bottom:1px solid rgba(0,0,0,.12)}#hamburger-pane .languageSelectorIcon,#hamburger-pane .languageSelectorLabel{display:inline}#hamburger-pane .language-selector .menu-main{box-shadow:none;margin:0;border-radius:0}#hamburger-pane .language-selector__link{float:none}#hamburger-pane .language-selector__link:after{right:1rem}#hamburger-pane .language-selector .language-selector__link{display:none}#hamburger-pane .language-selector .language-selector__menu{position:relative;display:block}#hamburger-pane .language-selector .menu-container{opacity:1;max-height:100%;position:relative}#hamburger-pane .hamburger-menu{float:right}#hamburger-pane .top-bar{padding-right:.75rem}#hamburger-pane.isActive{animation:fadeInFromNone .3s ease-out;animation-fill-mode:forwards}@keyframes fadeInFromNone{0%{opacity:0;right:-1.5rem}100%{opacity:1;right:0}}.hamburger-pane__body .top-bar-nav-li{float:none}.hamburger-pane__body .top-bar-nav-li a.top-bar-nav-button,.hamburger-pane__body .top-bar-nav-li a.top-bar-nav-link{border-bottom:1px solid rgba(0,0,0,.12);padding:.75rem 1rem;line-height:inherit;color:#60b2d0}.hamburger-pane__body .top-bar-nav-li a.top-bar-nav-button:hover,.hamburger-pane__body .top-bar-nav-li a.top-bar-nav-link:hover{background:rgba(0,0,0,.2)}.languageSelectorLink{padding:1rem 1rem 1.5rem}.languageSelectorLink a{color:#999}.languageSelectorLabel{vertical-align:super;padding-left:.5rem}.icon-list{vertical-align:sub}.tab-bar .icon-list{vertical-align:bottom}.tab-bar .tab-bar-logo{margin-left:1rem}.tab-bar .location-picker{left:150px;margin-left:0;right:auto}.tab-bar .location-picker .top-bar-nav-link{padding-left:.75rem}.tab-bar .location-picker a.icon-location{color:#999}.tab-bar .location-picker a.icon-location:before{margin-right:.3rem}.tab-bar .location-picker:after{content:"";background:rgba(0,0,0,.06);width:1px;position:absolute;top:25%;left:0;height:50%}.tab-bar .top-bar-nav{top:0;position:absolute;right:1rem}.tab-bar .top-bar-search{top:0;position:absolute;right:3rem}.top-bar .top-bar-search-link{line-height:3.575rem}@media only screen and (min-width:40.0625em){.location-picker:after,.location-picker:before{content:"";background:rgba(0,0,0,.06);width:1px;position:absolute;top:0;height:100%}.location-picker:before{left:0}.location-picker:after{left:auto;right:0}}.menu-footer.gpt-427{display:none;background-color:#eff7fa;border-top:1px solid #b0d9e8;background-position:16px 16px;padding-left:60px;margin-bottom:-4px;border-radius:0 0 3px 3px;background-image:url('data:image/svg+xml;utf8, <svg width="27px" height="33px" viewBox="24906 4647 27 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Group-4" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(24908.000000, 4648.000000)" stroke-linecap="round" stroke-linejoin="round"><path d="M20.3279,13.5484 C20.3279,19.0714 15.7769,23.5484 10.1639,23.5484 C4.5509,23.5484 -0.000100000001,19.0714 -0.000100000001,13.5484 C-0.000100000001,8.0254 4.5509,3.5484 10.1639,3.5484 C15.7769,3.5484 20.3279,8.0254 20.3279,13.5484 Z" id="Stroke-1" stroke="#60B2D0" stroke-width="2"></path><path d="M4.082,30 L15.885,30" id="Stroke-3" stroke="#60B2D0" stroke-width="2"></path><path d="M10.2295,30 L10.2295,23.71" id="Stroke-5" stroke="#60B2D0" stroke-width="2"></path><path d="M10.2295,3.3871 L10.2295,9.99999993e-05" id="Stroke-7" stroke="#60B2D0" stroke-width="2"></path><path d="M10.2867,0 C17.8607,0 23.9997,6.066 23.9997,13.548 C23.9997,21.031 17.8607,27.097 10.2867,27.097" id="Stroke-9" stroke="#60B2D0" stroke-width="2"></path><path d="M10.2295,2.9032 L10.2295,26.1292" id="Stroke-11" stroke="#60B2D0" stroke-width="2"></path></g></svg>');color:#6a6a6a;background-repeat:no-repeat}.gpt-427 .menu-footer__title{font-size:14px;font-weight:700;text-transform:uppercase;margin-bottom:4px}.gpt-427 .menu-footer__actions{display:table;width:100%}.gpt-427 .menu-footer__actions__right{display:table-cell;text-align:right}.gpt-427 .menu-footer__actions__left{display:table-cell}.site-header{z-index:102}.top-bar.utility-bar{background-color:#f7f7f7;border-bottom:none;font-size:13px}.utility-bar .language-selector__link,.utility-bar .top-bar-nav-link{height:1.75rem;line-height:1.75rem}.utility-bar .language-selector:after{content:none}.utility-bar .language-name,.utility-bar .top-bar-nav-link{color:#717171}.utility-bar .language-name:hover,.utility-bar .top-bar-nav-link:hover{color:#333}.utility-bar .language-selector .language-selector--main .language-icon{padding-top:3px}.utility-bar .language-selector__link:after{right:.3rem}.utility-bar .top-bar-nav-link.with-arrow:after{right:0}.utility-bar .top-bar-nav-link.with-arrow{padding-right:1rem}.utility-bar section.top-bar-nav.utility-bar,body.platform-mobile .site-header{height:auto;min-height:auto}@media only screen and (min-width:48.0625rem){.utility-bar .show-for-medium-2-up{display:block!important}.hide-for-medium-2-up{display:none!important}}@media only screen and (max-width:48rem){.utility-bar .hide-for-medium-2-down{display:none!important}}@media only screen and (max-width:64em) and (min-width:40.0625em){.utility-bar .top-bar-nav-link{padding:0 1rem}}@media all and (device-width:768px) and (device-height:1024px) and (orientation:landscape){.top-bar.utility-bar{display:none!important}li.top-bar-nav-li.hamburger-menu.hide-for-medium-2-up{display:block!important}}.top-bar-nav-link.without-right-padding{padding-right:0}.icon-font{font-family:icons;speak:none;font-style:normal;font-weight:400;font-variant:normal;text-transform:none;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.language-selector:after{content:"";background:rgba(0,0,0,.06);width:1px;position:absolute;top:25%;left:0;height:50%}.language-selector__link{margin-left:0;float:left;display:block;color:#333;padding:0 20px 0 1rem;line-height:3.375rem;position:relative;height:3.375rem}.language-selector__link:hover{color:#000}.language-selector__link:after{content:"S";font-family:icons;position:absolute;right:0;top:52.5%;line-height:0;color:#999;font-size:.8rem}.language-selector__menu__list a.selected:after{font-family:icons;content:"x";display:block;position:absolute;top:.85rem;right:1.2rem;font-size:.875rem}.language-selector .language-selector--main .language-icon{padding-top:5px;float:left}.language-selector .language-selector--main .language-name{float:left;display:block;padding-left:5px}.iconLanguageSelector{background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg width=%2721px%27 height=%2721px%27 viewBox=%270 0 21 21%27 version=%271.1%27 xmlns=%27http://www.w3.org/2000/svg%27 xmlns:xlink=%27http://www.w3.org/1999/xlink%27%3E%3Cg stroke=%27none%27 stroke-width=%271%27 fill=%27none%27 fill-rule=%27evenodd%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3E%3Cg id=%27language-selector__icon%27 transform=%27translate(1.000000, 1.000000)%27 stroke=%27#999%27%3E%3Cpath d=%27M9.00033103,18.0001986 C4.02947095,18.0001986 0.000331034484,13.9710587 0.000331034484,9.00019862 C0.000331034484,4.02933853 4.02947095,0.00019862069 9.00033103,0.00019862069 C13.9705561,0.00019862069 18.000331,4.02933853 18.000331,9.00019862 C18.000331,13.9710587 13.9705561,18.0001986 9.00033103,18.0001986 Z%27 id=%27Stroke-1%27 stroke-width=%272%27%3E%3C/path%3E%3Cpath d=%27M12.6,9.00019862 C12.6,13.9710587 10.98809,18.0001986 8.999746,18.0001986 C7.01190997,18.0001986 5.4,13.9710587 5.4,9.00019862 C5.4,4.02933853 7.01190997,0.00019862069 8.999746,0.00019862069 C10.98809,0.00019862069 12.6,4.02933853 12.6,9.00019862 L12.6,9.00019862 Z%27 id=%27Stroke-3%27 stroke-width=%271.3%27%3E%3C/path%3E%3Cpath d=%27M0.887106207,6.78 L16.8,6.78%27 id=%27Stroke-5%27 stroke-width=%271.3%27%3E%3C/path%3E%3Cpath d=%27M0.887106207,11.58 L16.8,11.58%27 id=%27Stroke-7%27 stroke-width=%271.3%27%3E%3C/path%3E%3C/g%3E%3C/g%3E%3C/svg%3E");width:21px;height:21px;display:inline-block}.utility-bar .iconLanguageSelector{background-size:100%;width:16px;height:18px;background-position-y:2px;background-repeat:no-repeat}.header-search-box__container{visibility:hidden;opacity:0;transform-origin:top;transition:opacity .3s linear;position:absolute;background-color:#fff;width:100%;z-index:1}.header-search-box__container.visible{visibility:visible;opacity:1;padding-bottom:64px;box-shadow:0 2px 8px rgba(153,153,153,.4)}.header-privacy-banner{display:inline-block;vertical-align:middle;position:relative;width:100%;background-color:#f1f2f4}.header-privacy-banner.hide{display:none}.header-privacy-banner__inner{display:flex;height:70px;flex-direction:row;justify-content:center;-ms-flex-align:center;align-items:center;width:100%;max-width:800px;margin:0 auto;padding:5px 12px}.header-privacy-banner__text{margin:0 25px 0 0;font-size:12px;line-height:16px;font-weight:700;color:#212b36}.header-privacy-banner__text a{color:#da3743}.header-privacy-banner__text a:hover{color:#b8222d;cursor:pointer}.header-privacy-banner__text a:visited{color:#b8222d}.header-privacy-banner__button{padding:6px 18px;border-radius:4px;border:1px solid #d8d9db;text-align:center;white-space:nowrap;font-size:12px;line-height:20px;font-weight:500;background:#fff;color:#2d333f;cursor:pointer}@media only screen and (min-width:768px){.header-privacy-banner__button,.header-privacy-banner__text{font-size:14px;line-height:20px}}@media only screen and (min-width:1024px){.header-privacy-banner__button,.header-privacy-banner__text{font-size:16px;line-height:24px}.header-privacy-banner__text{margin:0 40px 0 0}}</style><div id="hamburger-pane" class="hamburger-pane"><div class="hamburger-pane__header"><div class="top-bar show-for-medium-up"><ul class="hamburger-menu"><li class="top-bar-nav-li"></li><a href="#" data-target="hamburger-pane" class="top-bar-nav-link js-toggle-hamburger"><i class="icon-list font-size-medium"></i></a></ul></div><div class="tab-bar hide-for-medium-up"><ul class="hamburger-menu"><li class="top-bar-nav-li"></li><a href="#" data-target="hamburger-pane" class="top-bar-nav-link js-toggle-hamburger"><i class="icon-list font-size-medium"></i></a></ul></div></div><div class="hamburger-pane__body"><ul class="hide-for-medium-up location-search-adjusted-hide-for-medium-up"><a href="/my/registerpopup?rp=https%3A%2F%2Fwww.opentable.ca%2F%3Fref%3D16276%26SP%3Dppc_g_ca_tm%26LS%3Dgglppc%26MID%3Dca_tm%26gclid%3DEAIaIQobChMI2vv60Mfu4QIVUAOGCh3rbQlPEAAYASAAEgI0VvD_BwE%26gclsrc%3Daw.ds&amp;srs=1" id="mobile_nav_sign_up" class="menu-list-link menu-list-link-primary">Sign up</a><a href="/my/loginpopup?rp=https%3A%2F%2Fwww.opentable.ca%2F%3Fref%3D16276%26SP%3Dppc_g_ca_tm%26LS%3Dgglppc%26MID%3Dca_tm%26gclid%3DEAIaIQobChMI2vv60Mfu4QIVUAOGCh3rbQlPEAAYASAAEgI0VvD_BwE%26gclsrc%3Daw.ds&amp;srs=1" id="mobile_nav_sign_in" title="Sign in" class="menu-list-link menu-list-link-primary">Sign in</a></ul><div class="languageSelectorLink"><a href="#"><div class="languageSelectorIcon"><div class="iconLanguageSelector"></div></div><div class="languageSelectorLabel">Language</div></a></div><div class="language-selector"><a href="#" class="language-selector__link"><div class="language-icon"><div class="iconLanguageSelector"></div></div></a><div class="language-selector__menu menu menu-right"><div class="menu-container"><div class="menu-main"><div class="menu-section"><div class="language-selector__menu__list menu-list-selectors"><a href="https://www.opentable.ca/start/home/?lang=de" data-lang="de" class="js-languages-list__link menu-list-link">Deutsch</a><a aria-selected="true" href="https://www.opentable.ca/start/home/?lang=en" data-lang="en" class="js-languages-list__link menu-list-link  selected ">English</a><a href="https://www.opentable.ca/start/home/?lang=es" data-lang="es" class="js-languages-list__link menu-list-link">Español</a><a href="https://www.opentable.ca/start/home/?lang=fr" data-lang="fr" class="js-languages-list__link menu-list-link">Français</a><a href="https://www.opentable.ca/start/home/?lang=it" data-lang="it" class="js-languages-list__link menu-list-link">Italiano</a><a href="https://www.opentable.ca/start/home/?lang=nl" data-lang="nl" class="js-languages-list__link menu-list-link">Nederlands</a><a href="https://www.opentable.ca/start/home/?lang=ja" data-lang="ja" class="js-languages-list__link menu-list-link">日本語</a></div></div></div></div></div></div><a href="https://help.opentable.com/s/?language=en_CA" target="_blank" class="menu-list-link">Help</a><a href="https://opentable.tlnk.io/serve?action=click&amp;publisher_id=354660&amp;site_id=13216&amp;my_site=ca&amp;my_keyword=en" target="_blank" class="menu-list-link app-link">iOS App</a><a href="https://jjb-o.tlnk.io/serve?action=click&amp;publisher_id=354660&amp;site_id=13212&amp;my_site=ca&amp;my_keyword=en" target="_blank" class="menu-list-link app-link">Android App</a></div></div><div id="hamburger-overlay" class="js-toggle-hamburger"></div><div id="header" class="site-header"><div class="top-bar show-for-medium-up utility-bar"><section class="top-bar-nav show-for-medium-up utility-bar"><ul><li class="top-bar-nav-li hide-for-medium-2-down"><a href="https://restaurant.opentable.ca/en/get-started/?utm_source=dinersite&amp;utm_medium=referral&amp;utm_campaign=topnav&amp;Lead.LeadSource=DinerSite&amp;Lead.Marketing_ID__c=topnav_CA" target="_blank" onClick="window.forRestaurateursLink.onClick();return false;" class="top-bar-nav-link without-right-padding">For Restaurateurs</a></li><li class="top-bar-nav-li hide-for-xsmall-only hide-for-small-only hide-for-medium-only show-for-medium-2-up"><a href="#" data-target="header-mobile-menu" class="top-bar-nav-link js-toggle-menu with-arrow">Mobile</a><div id="header-mobile-menu" class="menu menu-right"><div class="menu-container"><div class="menu-main"><div class="menu-section"><div class="menu-list"><a href="https://opentable.tlnk.io/serve?action=click&amp;publisher_id=354660&amp;site_id=13216&amp;my_site=ca&amp;my_keyword=en" target="_blank" class="menu-list-link app-link">iOS App</a><a href="https://jjb-o.tlnk.io/serve?action=click&amp;publisher_id=354660&amp;site_id=13212&amp;my_site=ca&amp;my_keyword=en" target="_blank" class="menu-list-link app-link">Android App</a></div></div></div></div></div></li><li class="top-bar-nav-li hide-for-medium-2-down"><a href="https://help.opentable.com/s/?language=en_CA" target="_blank" class="top-bar-nav-link">Help</a></li><li class="top-bar-nav-li hide-for-medium-2-down"></li><li class="top-bar-nav-li hide-for-xsmall-only hide-for-small-only hide-for-medium-2-down"><div class="language-selector"><a href="#" class="language-selector__link js-toggle-menu language-selector--main"><div><div class="language-icon"><div class="iconLanguageSelector"></div></div><div class="language-name">EN</div></div></a><div class="js-language-selector__menu language-selector__menu menu menu-right menu-target"><div class="menu-container"><div class="menu-main"><div class="menu-section"><div class="language-selector__menu__list menu-list-selectors"><a href="https://www.opentable.ca/start/home/?lang=de" data-lang="de" class="js-languages-list__link menu-list-link">Deutsch</a><a aria-selected="true" href="https://www.opentable.ca/start/home/?lang=en" data-lang="en" class="js-languages-list__link menu-list-link  selected ">English</a><a href="https://www.opentable.ca/start/home/?lang=es" data-lang="es" class="js-languages-list__link menu-list-link">Español</a><a href="https://www.opentable.ca/start/home/?lang=fr" data-lang="fr" class="js-languages-list__link menu-list-link">Français</a><a href="https://www.opentable.ca/start/home/?lang=it" data-lang="it" class="js-languages-list__link menu-list-link">Italiano</a><a href="https://www.opentable.ca/start/home/?lang=nl" data-lang="nl" class="js-languages-list__link menu-list-link">Nederlands</a><a href="https://www.opentable.ca/start/home/?lang=ja" data-lang="ja" class="js-languages-list__link menu-list-link">日本語</a></div></div></div></div></div></div></li></ul></section></div><div class="top-bar show-for-medium-up"><div class="top-bar-logo"><a href="/start/home" class="top-bar-logo-link"><div class="top-bar-logo-name">OpenTable</div></a></div><nav id="location-picker" role="navigation" class="location-picker"><a href="#" data-target="location-menu" id="location-picker-link" class="location-picker-link js-toggle-menu"><div class="location-picker-metro light">Choose your location</div></a><div id="location-menu" class="location-picker-menu menu"><div class="menu-container"><div class="menu-main"><div class="menu-header"><div class="row"><div class="column small-4 location-picker-menu-country-header location-picker-menu-header hide">Country</div><div class="column small-6 location-picker-menu-header">Location</div><div class="column small-6 location-picker-menu-header">Region</div></div></div><div class="menu-body"><div class="location-picker-menu-column location-picker-menu-country-column menu-section js-lionbars hide"><div id="location-picker-country-list" class="location-picker-menu-list menu-list menu-list-selectors with-arrows"></div></div><div class="location-picker-menu-column menu-section js-lionbars"><div id="location-picker-metro-list" class="location-picker-menu-list menu-list menu-list-selectors with-arrows"><a href="/montreal-restaurants" data-metro="75" class="menu-list-link selected">Montreal / Quebec</a><a href="/toronto-restaurants" data-metro="74" class="menu-list-link">Toronto</a><a href="/vancouver-restaurants" data-metro="73" class="menu-list-link">Vancouver</a></div></div><div class="location-picker-menu-column menu-section js-lionbars"><div id="city-list" class="location-picker-menu-list menu-list menu-list-selectors with-meta"><a href="/montreal-restaurants" data-macro="0" class="menu-list-link selected">All Montreal / Quebec<span class="menu-list-link-meta">3955</span></a><a href="/i/montreal/montreal-restaurants" data-macro='166' class="menu-list-link">Montreal<span class="menu-list-link-meta">1953</span></a><a href="/g/montreal/quebec-city-trois-rivieres-restaurants" data-macro='1540' class="menu-list-link">Quebec City / Trois-Rivieres<span class="menu-list-link-meta">459</span></a><a href="/g/montreal/laval-restaurants" data-macro='2110' class="menu-list-link">Laval<span class="menu-list-link-meta">164</span></a><a href="/g/montreal/south-shore-restaurants" data-macro='1720' class="menu-list-link">South Shore<span class="menu-list-link-meta">172</span></a><a href="/g/montreal/saguenay-lac-saint-jean-restaurants" data-macro='2113' class="menu-list-link">Saguenay–Lac-Saint-Jean<span class="menu-list-link-meta">136</span></a><a href="/g/montreal/eastern-townships-restaurants" data-macro='2119' class="menu-list-link">Eastern Townships<span class="menu-list-link-meta">358</span></a><a href="/g/montreal/the-laurentians-restaurants" data-macro='2548' class="menu-list-link">The Laurentians<span class="menu-list-link-meta">349</span></a><a href="/g/montreal/ormstown-restaurants" data-macro='2551' class="menu-list-link">Ormstown<span class="menu-list-link-meta">6</span></a><a href="/montreal-restaurants?mn=3259" data-macro='3259' class="menu-list-link">Bas-Saint-Laurent<span class="menu-list-link-meta">1</span></a><a href="/montreal-restaurants?mn=3007" data-macro='3007' class="menu-list-link">Gatineau<span class="menu-list-link-meta">97</span></a><a href="/g/montreal/ile-perrot-hudson-restaurants" data-macro='2740' class="menu-list-link">Ile Perrot / Hudson<span class="menu-list-link-meta">61</span></a><a href="/g/montreal/lanaudiere-restaurants" data-macro='2599' class="menu-list-link">Lanaudiere<span class="menu-list-link-meta">128</span></a><a href="/g/montreal/western-quebec-restaurants" data-macro='3064' class="menu-list-link">Western Quebec<span class="menu-list-link-meta">71</span></a></div></div></div><div class="menu-footer"><a href="/start/home" class="secondary">Full List of Locations</a></div></div></div></div></nav><section class="top-bar-nav show-for-medium-up"><ul><li id="recently-viewed" class="top-bar-nav-li top-bar-nav-recently-viewed hide location-search-adjusted-show-for-medium-up"></li><li class="top-bar-nav-li has-button location-search-adjusted-show-for-medium-up"><a href="/my/registerpopup?rp=https%3A%2F%2Fwww.opentable.ca%2F%3Fref%3D16276%26SP%3Dppc_g_ca_tm%26LS%3Dgglppc%26MID%3Dca_tm%26gclid%3DEAIaIQobChMI2vv60Mfu4QIVUAOGCh3rbQlPEAAYASAAEgI0VvD_BwE%26gclsrc%3Daw.ds&amp;srs=1" data-modal-trigger="register" data-modal-trigger-overrides='{"useElementHref": true}' class="top-bar-nav-button button small secondary" id="global_nav_sign_up" title="">Sign up</a></li><li class="top-bar-nav-li location-search-adjusted-show-for-medium-up"><a href="" data-modal-trigger="login" data-modal-trigger-overrides='{"useElementHref": true}' class="top-bar-nav-link" id="global_nav_sign_in" title="Sign in">Sign in</a></li><li class="top-bar-nav-li hamburger-menu hide-for-medium-2-up"><a href="#" data-target="hamburger-pane" class="top-bar-nav-link js-toggle-hamburger"><i class="icon-list font-size-medium"></i></a></li></ul></section></div><div class="tab-bar hide-for-medium-up"><div class="tab-bar-logo"><a href="/start/home" data-target="mobile-menu" class="top-bar-logo-small-link js-toggle-menu"><div class="top-bar-logo-name">OpenTable</div></a></div><section class="top-bar-nav new-hamburger"><ul><li class="top-bar-nav-li hamburger-menu hide-for-large-only"><a href="#" data-target="hamburger-pane" class="top-bar-nav-link js-toggle-hamburger"><i class="icon-list font-size-medium"></i></a></li></ul></section></div><div role="banner" class="header-privacy-banner hide"><div class="header-privacy-banner__inner"><div class="header-privacy-banner__text"></div></div><script>$(".header-privacy-banner__button").click(function(){OT.Common.Cookies.set({"oc-updated-privacy-banner":!0},432e6),$(".header-privacy-banner").addClass("hide")}),$().ready(function(){window.location.href.toLowerCase().includes("/my/login")||"true"===OT.Common.Cookies.get("oc-updated-privacy-banner")||$(".header-privacy-banner").removeClass("hide")});</script></div><script>window.abtestGoalTracked = {};
  window.displaySearchFormHeader = false
  window.trackGoal = function trackGoal(goalName) {
    if(window.analytics) {
      if (window.debug_abtest_tracking) { console.log('Tracking goal: ', goalName); }

      window.analytics.track(
        'track_goal',
        { goal_name: goalName },
        function (err) { if(err) console.log(err); }
        );
      }
    };

    window.trackGoalOnce = function trackGoalOnce(goalName) {
      if (!window.abtestGoalTracked[goalName]) {
        window.abtestGoalTracked[goalName] = true;
        window.trackGoal(goalName);
      }
    }
window.pageData = window.pageData || {};
window.pageData.countriesEnabled = false;
window.pageData.serialisedMetros = [{"n":"Montreal /
Quebec","d":"Montreal","m":75,"cn":"Canada","cid":"CA","did":8,"l":"en","u":"/montreal-restaurants","r":3955,"lat":45.53742,"lon":-73.57055,"ma":[{"n":"Montreal","m":166,"u":"/i/montreal/montreal-restaurants","r":1953},{"n":"Quebec City /
Trois-Rivieres","m":1540,"u":"/g/montreal/quebec-city-trois-rivieres-restaurants","r":459},{"n":"Laval","m":2110,"u":"/g/montreal/laval-restaurants","r":164},{"n":"South
Shore","m":1720,"u":"/g/montreal/south-shore-restaurants","r":172},{"n":"Saguenay–Lac-Saint-Jean","m":2113,"u":"/g/montreal/saguenay-lac-saint-jean-restaurants","r":136},{"n":"Eastern
Townships","m":2119,"u":"/g/montreal/eastern-townships-restaurants","r":358},{"n":"The
Laurentians","m":2548,"u":"/g/montreal/the-laurentians-restaurants","r":349},{"n":"Ormstown","m":2551,"u":"/g/montreal/ormstown-restaurants","r":6},{"n":"Bas-Saint-Laurent","m":3259,"u":"/montreal-restaurants?mn=3259","r":1},{"n":"Gatineau","m":3007,"u":"/montreal-restaurants?mn=3007","r":97},{"n":"Ile
Perrot / Hudson","m":2740,"u":"/g/montreal/ile-perrot-hudson-restaurants","r":61},{"n":"Lanaudiere","m":2599,"u":"/g/montreal/lanaudiere-restaurants","r":128},{"n":"Western
Quebec","m":3064,"u":"/g/montreal/western-quebec-restaurants","r":71}],"f":true},{"n":"Toronto /
Ontario","d":"Toronto","m":74,"cn":"Canada","cid":"CA","did":8,"l":"en","u":"/toronto-restaurants","r":7408,"lat":43.66997,"lon":-79.44815,"ma":[{"n":"Toronto","m":164,"u":"/i/toronto/toronto-restaurants","r":2856},{"n":"Southern
Ontario","m":1309,"u":"/g/toronto/southern-ontario-restaurants","r":1301},{"n":"York","m":328,"u":"/g/toronto/york-restaurants","r":743},{"n":"Halton","m":329,"u":"/g/toronto/halton-restaurants","r":232},{"n":"Niagara","m":250,"u":"/g/toronto/niagara-restaurants","r":329},{"n":"Muskoka","m":1312,"u":"/g/toronto/muskoka-restaurants","r":112},{"n":"Peel
Region","m":1714,"u":"/g/toronto/peel-region-restaurants","r":503},{"n":"Simcoe
County","m":249,"u":"/g/toronto/simcoe-county-restaurants","r":339},{"n":"Windsor","m":1240,"u":"/g/toronto/windsor-restaurants","r":195},{"n":"Kingston","m":359,"u":"/g/toronto/kingston-restaurants","r":108},{"n":"Durham","m":1537,"u":"/g/toronto/durham-restaurants","r":243},{"n":"Northern
Ontario","m":1723,"u":"/g/toronto/northern-ontario-restaurants","r":217},{"n":"Bruce County","m":9261,"u":"/toronto-restaurants?mn=9261","r":1},{"n":"Central Ontario","m":3181,"u":"/g/toronto/central-ontario-restaurants","r":115},{"n":"Manitoulin
Island","m":9239,"u":"/toronto-restaurants?mn=9239","r":1},{"n":"Southwestern Ontario","m":3085,"u":"/g/toronto/southwestern-ontario-restaurants","r":1},{"n":"Thunder
Bay","m":2578,"u":"/g/toronto/thunder-bay-restaurants","r":112}],"f":true},{"n":"Vancouver / British
Columbia","d":"Vancouver","m":73,"cn":"Canada","cid":"CA","did":8,"l":"en","u":"/vancouver-restaurants","r":4575,"lat":49.263268,"lon":-123.065441,"ma":[{"n":"Vancouver","m":165,"u":"/i/vancouver/vancouver-restaurants","r":969},{"n":"Vancouver
Suburbs","m":253,"u":"/g/vancouver/vancouver-suburbs-restaurants","r":1087},{"n":"Victoria","m":191,"u":"/g/vancouver/victoria-restaurants","r":273},{"n":"Okanagan / Wine
Country","m":1117,"u":"/g/vancouver/okanagan-wine-country-restaurants","r":272},{"n":"Salt Spring Island","m":2227,"u":"/g/vancouver/salt-spring-island-restaurants","r":33},{"n":"Whistler /
Blackcomb","m":193,"u":"/g/vancouver/whistler-blackcomb-restaurants","r":70},{"n":"Kamloops","m":2050,"u":"/g/vancouver/kamloops-restaurants","r":81},{"n":"Squamish","m":1384,"u":"/g/vancouver/squamish-restaurants","r":11},{"n":"Cariboo","m":2965,"u":"/g/vancouver/cariboo-restaurants","r":12},{"n":"Castlegar","m":2647,"u":"/g/vancouver/castlegar-restaurants","r":24},{"n":"Columbia-Shuswap","m":3160,"u":"/g/vancouver/columbia-shuswap-restaurants","r":25},{"n":"Gibsons","m":2902,"u":"/g/vancouver/gibsons-restaurants","r":6},{"n":"Kootenays","m":9195,"u":"/vancouver-restaurants?mn=9195","r":38},{"n":"North
Coast","m":2983,"u":"/g/vancouver/north-coast-restaurants","r":78},{"n":"Peace River Country","m":2839,"u":"/g/vancouver/peace-river-country-restaurants","r":58},{"n":"Prince
George","m":2545,"u":"/g/vancouver/prince-george-restaurants","r":52},{"n":"Quadra Island","m":2617,"u":"/g/vancouver/quadra-island-restaurants","r":9},{"n":"Vancouver
Island","m":192,"u":"/g/vancouver/vancouver-island-restaurants","r":1477}],"f":true}];
window.pageData.metroId = 0;
window.pageData.words = {
all: 'All {0}',
table: '',
usernameWelcome: 'Hello!'
};
window.pageData.headerSignedIn = false;
window.forRestaurateursLink = {
onClick: function forRestaurateursLinkClicked() {
var url = 'https://restaurant.opentable.ca/en/get-started/?utm_source=dinersite&utm_medium=referral&utm_campaign=topnav&Lead.LeadSource=DinerSite&Lead.Marketing_ID__c=topnav_CA';
window.trackGoal('header_forRestaurateursLink_click');
window.open(url, '_blank');
}
};
</script>
<script>
  $(".breadcrumb-link").click(function(c) {
    window.trackGoal && window.trackGoal("breadcrumb_link_clicked")
  });
</script>
<script>
  window.oc = window.oc || {};
  oc.renderedComponents = oc.renderedComponents || {};
  oc.renderedComponents["header"] = "1.4.98";
</script>



<section class="page-container" role="main">
  <div class="page-header">
    <div class="page-header-hero-img">
      <div class="content-block dtp-block">
        <div class="dtp-title">
          <div class="content-block-header">
            <h1 class="page-header-title">OPEN TABLE DEMO APP</h1>
          </div>
          <div class="content-block-body no-padding-top">
            <oc-component
              href="https://oc-registry.opentable.com/v2/dtp/^1.0.25?showSearch=true&showLargerParty=true&theme=ca&otKit=true&dateTime=2019-04-25T20%3A07&searchPlaceholder=Location%2C%20Restaurant%20or%20Cuisine&spotlightButton=false&showLoader=false&eventPrefix="
              data-hash="dfb7896907d9e483cc69715bf30447d4ce702f47" data-name="dtp" data-rendered="true" data-version="1.8.4">
              <link rel="stylesheet" href="//components.otstatic.com/components/dtp/1.8.4/dist/style.css" />
              <style>
                @media(min--moz-device-pixel-ratio: 1.5),
                (-o-min-device-pixel-ratio: 3 / 2),
                (-webkit-min-device-pixel-ratio: 1.5),
                (min-device-pixel-ratio: 1.5),
                (min-resolution: 144dpi),
                (min-resolution: 1.5dppx) {
                  .tt-dropdown-menu:before {
                    background-image: url('//components.otstatic.com/components/dtp/1.8.4/img/menu-arrow@2x.png') !important;
                    background-size: 100%;
                  }
                }
              </style>

              <div id="dtp-picker-7" data-event-prefix="" class="dtp-picker hide dtp-lang-en  with-search single-search ">


                <form id="main_form" class=" otkit" action="/demo" method="POST">
                  {{ csrf_field() }}
                  <input id="city_input" type="hidden" name="city" value="">
                  <input type="hidden" name="timezoneOffset" title="timezoneOffset" value="-240" />
                  <div class="dtp-picker-selectors-container">
                    <select class="party-size-picker hide">
                      <option value="1">1 person</option>
                      <option value="2">2 people</option>
                      <option value="3">3 people</option>
                      <option value="4">4 people</option>
                      <option value="5">5 people</option>
                      <option value="6">6 people</option>
                      <option value="7">7 people</option>
                      <option value="8">8 people</option>
                      <option value="9">9 people</option>
                      <option value="10">10 people</option>
                      <option value="11">11 people</option>
                      <option value="12">12 people</option>
                      <option value="13">13 people</option>
                      <option value="14">14 people</option>
                      <option value="15">15 people</option>
                      <option value="16">16 people</option>
                      <option value="17">17 people</option>
                      <option value="18">18 people</option>
                      <option value="19">19 people</option>
                      <option value="20">20 people</option>
                      <option value="21">Larger party</option>
                    </select><input value="2019-04-25" type="text" title="datePicker" class="date-picker dtp-picker-selector" /><select class="time-picker hide">
                      <option value="00:00">12:00 AM</option>
                      <option value="00:30">12:30 AM</option>
                      <option value="01:00">1:00 AM</option>
                      <option value="01:30">1:30 AM</option>
                      <option value="02:00">2:00 AM</option>
                      <option value="02:30">2:30 AM</option>
                      <option value="03:00">3:00 AM</option>
                      <option value="03:30">3:30 AM</option>
                      <option value="04:00">4:00 AM</option>
                      <option value="04:30">4:30 AM</option>
                      <option value="05:00">5:00 AM</option>
                      <option value="05:30">5:30 AM</option>
                      <option value="06:00">6:00 AM</option>
                      <option value="06:30">6:30 AM</option>
                      <option value="07:00">7:00 AM</option>
                      <option value="07:30">7:30 AM</option>
                      <option value="08:00">8:00 AM</option>
                      <option value="08:30">8:30 AM</option>
                      <option value="09:00">9:00 AM</option>
                      <option value="09:30">9:30 AM</option>
                      <option value="10:00">10:00 AM</option>
                      <option value="10:30">10:30 AM</option>
                      <option value="11:00">11:00 AM</option>
                      <option value="11:30">11:30 AM</option>
                      <option value="12:00">12:00 PM</option>
                      <option value="12:30">12:30 PM</option>
                      <option value="13:00">1:00 PM</option>
                      <option value="13:30">1:30 PM</option>
                      <option value="14:00">2:00 PM</option>
                      <option value="14:30">2:30 PM</option>
                      <option value="15:00">3:00 PM</option>
                      <option value="15:30">3:30 PM</option>
                      <option value="16:00">4:00 PM</option>
                      <option value="16:30">4:30 PM</option>
                      <option value="17:00">5:00 PM</option>
                      <option value="17:30">5:30 PM</option>
                      <option value="18:00">6:00 PM</option>
                      <option value="18:30">6:30 PM</option>
                      <option value="19:00">7:00 PM</option>
                      <option value="19:30">7:30 PM</option>
                      <option value="20:00">8:00 PM</option>
                      <option value="20:30">8:30 PM</option>
                      <option value="21:00">9:00 PM</option>
                      <option value="21:30">9:30 PM</option>
                      <option value="22:00">10:00 PM</option>
                      <option value="22:30">10:30 PM</option>
                      <option value="23:00">11:00 PM</option>
                      <option value="23:30">11:30 PM</option>
                    </select></div>

                  <div class="dtp-picker-search-container">
                    <div class="dtp-picker-search-icon icon-search"></div>
                    <input id="dtp-search-single-box" type="text" name="searchText" title="Location, Restaurant or Cuisine" value="" placeholder="Location, Restaurant or Cuisine" class="dtp-picker-search" />
                  </div>


                  <input id="send_data" type="submit" value="Find a Table" class="button" />
                </form>




                <style media="screen">
                  .party-size-picker {
                    width: 33% !important;
                  }

                  .date-picker {
                    width: 33% !important;
                  }

                  .time-picker {
                    width: 34% !important;
                  }

                  .dtp-picker-search-container {
                    width: 100% !important;
                  }
                </style>


                <script>
                  window.OT = window.OT || {};
                  window.dtp_data = {
                    theme: 'ca',
                    lang: 'en',
                    ocUrl: 'na-srs.opentable.com/v2/',
                    allowYesterday: false
                  };
                </script>

                <script src="//components.otstatic.com/components/dtp/1.8.4/dist/dtp.js?dtpId=dtp-picker-7"></script>

              </div>
              <script>
                window.oc = window.oc || {};
                oc.renderedComponents = oc.renderedComponents || {};
                oc.renderedComponents["dtp"] = "1.8.4";
              </script>
            </oc-component>
            <script>
              (function($) {
                if (OTExperiments['rush-1976'] == 2 && $('html').attr('lang').indexOf('en') > -1) {
                  // Changing copy depending on if language is English here because
                  // 1. as translations would not be ready in time to test
                  // 2. if test wins, OC DTP will be completely rewritten and will
                  //    make change then. Keeping in our repo for sake of test.
                  // $('.dtp-picker-button').val("Let's go");
                }
                $('.dtp-picker input[name="timezoneOffset"]').val(-1 * new Date().getTimezoneOffset());
              })(jQuery);
            </script>
            <div class="recently-viewed-locations"></div>
          </div>
        </div>
        <div id="quick-searches-react-root">


          <script>
            window.quickSearchesProps = {
              "translationLanguage": "en",
              "translationLocale": "en-ca"
            };
          </script>
        </div>
      </div>
    </div>
  </div>

  @if (isset($data))




  <div id="restaurant_container" class="container">
    <div class="row">
      <div class="col-12">
        <br>
        <div class="f75b57cb">
          <div class="_77744cb0">
            <h2 class="_050040ce _5ce7f008">Popular restaurants in {{$city}}</h2>
            <span>
            </span>
          </div>
          <span class="_612bf073 _40f1eb59">
            <a target="_blank" rel="noopener" href="/s/?latitude=43.85&amp;longitude=-79.02&amp;dateTime=2019-04-26T16%3A15%3A00&amp;covers=2&amp;intersperseavailability=true" class="_8d8dff4b f3bf9165 ">
              <span>View all</span>
            </a>
          </span>

        </div>
      </div>

    </div>

    <div class="row">


      @foreach ($data as $d)


      <div class=" col-12 col-sm-6 col-md-4 col-lg-3">

        <div class="row">
          <div class="col-12 photo_holder">
            <img class="photo_image" border="0" alt="Restaurant Image: {{$d->name}}" src="{{$d->image_url}}" width="100" height="100">
          </div>
          <div class="col-12 r_text">

            <div class="_5e8d5397 _70be0f0d r_name">{{$d->name}}</div>
            <div class="_5e8d5397 _70be0f0d"> <i>{{$d->address}} </i></div>
            <div id="r_price">
              @for ($i=0; $i < $d->price; $i++)$
                @endfor</div>

            </div>

          </div>


        </div>

        @endforeach


      </div>

    </div>

    <style media="screen">
      .r_text {
        margin-top: 5px;
        margin-bottom: 10%;
        overflow: hidden;
      }

      .r_name {
        word-wrap: break-word;
      }


      .photo_image {
        /* width: 100%!important;
        max-width: none!important; */
        border-radius: 5px;
        height: auto;
        width: 400px;
      }

      .photo_holder {
        height: 200px;
        overflow: hidden;
        text-align: center;
      }


      @mediascreen and (max-width: 992px) {
        .photo_holder {
          height: 158px;

        }
      }



      }
    </style>


    <div class="max-width-wrapper">
      <div class="page-main">
        <div class="page-main-content">
          <div class="row page-content-row">
            <div class="column page-content-column">
              <div class="f75b57cb">
                <div class="_77744cb0">
                  <br>





                </div>


              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
    @endif





    <div class="max-width-wrapper">
      <div class="page-main">
        <div class="page-main-content">
          <div class="row page-content-row">
            <div class="column page-content-column">
              <div id="react-root">
                <div class="df7528fb">
                  <div class="a8d73ee7 _40f1eb59">
                    <div class="_3420b8e9">
                      <span class="_821bf829">
                        <span>It looks like you&#x27;re in Durham. Not correct?</span></span>
                      <a target="_self" rel="" href="javascript:void(0)" class="_8d8dff4b f3bf9165 ">
                        <div class="_1e864f49">
                          <div class="e38c4fa0">
                            <div class="_3ea29ffa">
                              <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <title>universal / icon / action / medium / ic_report</title>
                                <desc>Created with Sketch.</desc>
                                <defs></defs>
                                <g id="universal-/-icon-/-action-/-medium-/-ic_report" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                  <polygon id="location_services" fill="#DA3743" points="20 4 4 12.3476174 10.320316 13.680484 11.6539827 20.0008"></polygon>
                                </g>
                              </svg></div>
                          </div>
                          <div class="_199894c6">
                            <div class="_252cc398 _40f1eb59"><span>Get current location</span>
                            </div>
                          </div>
                        </div>
                      </a></div>
                    <div class="_1fc38976"><span>Your location has now been set to .</span>
                    </div>
                  </div>
                </div>
                <section>

                  <div class="f75b57cb">
                    <div class="_77744cb0">
                      <h2 class="_050040ce _5ce7f008">Popular restaurants in Durham</h2>
                      <span>
                      </span>
                    </div>
                    <span class="_612bf073 _40f1eb59">
                      <a target="_blank" rel="noopener" href="/s/?latitude=43.85&amp;longitude=-79.02&amp;dateTime=2019-04-26T16%3A15%3A00&amp;covers=2&amp;intersperseavailability=true" class="_8d8dff4b f3bf9165 ">
                        <span>View all</span>
                      </a>
                    </span>

                  </div>



                  <div class="_65705ad6">
                    <div class="bb4cc72b d1b8a197">
                      <div class="_45f61e97" data-correlationid="7a3c726a-f259-4cce-a09d-4e44a72acda0">
                        <div class="_1e2b81ee">
                          <div class="_6420ae2a">
                            <a href="/360-the-restaurant-at-the-cn-tower?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0" target="_blank" rel="noopener noreferrer" class="_29c56785 restaurant-scroller-item" data-rid="40507" data-index="1">
                              <div class="_22221ac4">
                                <div class="_25d456c1" style="background-image:url(https://resizer.otstatic.com/v2/photos/medium/25883856.jpg)"></div>
                                <div class="ffef9d58 _1f1541e1">
                                  <h3 class="_5e8d5397 _70be0f0d">360 The Restaurant at the CN Tower</h3>
                                  <div class="_944fb8bd">
                                    <div class="_8162dcda">
                                      <div class="_4e5a981b"><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i>
                                        <i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-quarter</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-quarter" fill-rule="nonzero">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_1_" fill="#E1E1E1"></path>
                                                <path
                                                  d="M6,3.982 L5.465,5.14 L0.209,5.924 C0.104,5.965 0.042,6.018 0.021,6.08 C-0.021,6.164 -7.97972799e-17,6.247 0.083,6.331 L3.869,10.217 L2.993,15.733 C2.951,15.817 2.983,15.89 3.087,15.952 C3.108,15.973 3.15,15.983 3.212,15.983 C3.274,15.983 3.316,15.973 3.337,15.952 L6,14.485 L6,3.982 Z"
                                                  id="Shape" fill="#DA3743"></path>
                                              </g>
                                            </g>
                                          </svg></i></div>
                                    </div><span class="_62104053 _40f1eb59"><span>21182 reviews</span></span>
                                  </div>
                                  <div class="adbc8b53"><span class="b28c82d3">Continental</span><span class="b28c82d3"><span class="_27818379 _1f1541e1">$$$$</span></span><span class="b28c82d3">Downtown / Entertainment District</span></div>
                                  <div class="_8847555a">
                                    <div class="_1e864f49">
                                      <div class="e38c4fa0"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="background:#FFFFFF">
                                          <title>icon/ic_social_proof</title>
                                          <desc>Created with Sketch.</desc>
                                          <defs>
                                            <polygon id="path-5" points="0 0 24 0 24 24 0 24"></polygon>
                                          </defs>
                                          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="icon/ic_social_proof">
                                              <g id="ic_booked">
                                                <mask id="mask-2" fill="white">
                                                  <use xlink:href="#path-5"></use>
                                                </mask>
                                                <g id="Shape"></g>
                                                <path
                                                  d="M15.5,5 C15.2239,5 15,5.223846 15,5.5 L15,6.5 C15,6.77615 15.2239,7 15.5,7 L17.5858,7 L14,10.58578 L12.70711,9.29291 L12.35355,8.93933 C12.15829,8.74408 11.84171,8.74408 11.64645,8.93933 L11.29289,9.29291 L5,15.5858 L5,7 L11.5,7 C11.77614,7 12,6.77615 12,6.5 L12,5.5 C12,5.22385 11.77614,5 11.5,5 L5,5 C3.89543,5 3,5.89542 3,7 L3,17 C3,18.1046 3.89543,19 5,19 L19,19 C20.1046,19 21,18.1046 21,17 L21,14.5 C21,14.2238 20.7761,14 20.5,14 L19.5,14 C19.2239,14 19,14.2238 19,14.5 L19,17 L6.4142,17 L12,11.41422 L13.2929,12.70709 L13.6464,13.06067 C13.8417,13.25592 14.1583,13.25592 14.3536,13.06067 L14.7071,12.70709 L19,8.41422 L19,10.5 C19,10.77615 19.2239,11 19.5,11 L20.5,11 C20.7761,11 21,10.77615 21,10.5 L21,6 L21,5.5 C21,5.223846 20.7761,5 20.5,5 L20,5 L15.5,5 Z"
                                                  id="path0_fill" fill="#333333" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </svg></div>
                                      <div class="_199894c6">
                                        <div class="_252cc398 _40f1eb59"><span>Booked 252 times today</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a></div>
                          <div class="_6420ae2a"><a href="/miku-restaurant-toronto?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0" target="_blank" rel="noopener noreferrer" class="_29c56785 restaurant-scroller-item" data-rid="170182" data-index="2">
                              <div class="_22221ac4">
                                <div class="_25d456c1" style="background-image:url(https://resizer.otstatic.com/v2/photos/medium/24010766.jpg)"></div>
                                <div class="ffef9d58 _1f1541e1">
                                  <h3 class="_5e8d5397 _70be0f0d">Miku Restaurant - Toronto</h3>
                                  <div class="_944fb8bd">
                                    <div class="_8162dcda">
                                      <div class="_4e5a981b"><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-threequarter</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-threequarter" fill-rule="nonzero">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_4_" fill="#E1E1E1"></path>
                                                <path
                                                  d="M5.465,5.14 L0.209,5.924 C0.104,5.965 0.042,6.018 0.021,6.08 C-0.021,6.164 3.6429193e-16,6.247 0.083,6.331 L3.869,10.217 L2.993,15.733 C2.951,15.817 2.983,15.89 3.087,15.952 C3.108,15.973 3.15,15.983 3.212,15.983 C3.274,15.983 3.316,15.973 3.337,15.952 L8,13.383 L10,14.478 L10,3.931 L8.219,0.125 C8.177,0.042 8.104,0 8,0 C7.937,0 7.864,0.042 7.781,0.125 L5.465,5.14 Z"
                                                  id="Shape" fill="#DA3743"></path>
                                              </g>
                                            </g>
                                          </svg></i></div>
                                    </div><span class="_62104053 _40f1eb59"><span>1424 reviews</span></span>
                                  </div>
                                  <div class="adbc8b53"><span class="b28c82d3">Japanese</span><span class="b28c82d3"><span class="_27818379 _1f1541e1">$$$$</span></span><span class="b28c82d3">Downtown / Financial District</span></div>
                                  <div class="_8847555a">
                                    <div class="_1e864f49">
                                      <div class="e38c4fa0"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="background:#FFFFFF">
                                          <title>icon/ic_social_proof</title>
                                          <desc>Created with Sketch.</desc>
                                          <defs>
                                            <polygon id="path-5" points="0 0 24 0 24 24 0 24"></polygon>
                                          </defs>
                                          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="icon/ic_social_proof">
                                              <g id="ic_booked">
                                                <mask id="mask-2" fill="white">
                                                  <use xlink:href="#path-5"></use>
                                                </mask>
                                                <g id="Shape"></g>
                                                <path
                                                  d="M15.5,5 C15.2239,5 15,5.223846 15,5.5 L15,6.5 C15,6.77615 15.2239,7 15.5,7 L17.5858,7 L14,10.58578 L12.70711,9.29291 L12.35355,8.93933 C12.15829,8.74408 11.84171,8.74408 11.64645,8.93933 L11.29289,9.29291 L5,15.5858 L5,7 L11.5,7 C11.77614,7 12,6.77615 12,6.5 L12,5.5 C12,5.22385 11.77614,5 11.5,5 L5,5 C3.89543,5 3,5.89542 3,7 L3,17 C3,18.1046 3.89543,19 5,19 L19,19 C20.1046,19 21,18.1046 21,17 L21,14.5 C21,14.2238 20.7761,14 20.5,14 L19.5,14 C19.2239,14 19,14.2238 19,14.5 L19,17 L6.4142,17 L12,11.41422 L13.2929,12.70709 L13.6464,13.06067 C13.8417,13.25592 14.1583,13.25592 14.3536,13.06067 L14.7071,12.70709 L19,8.41422 L19,10.5 C19,10.77615 19.2239,11 19.5,11 L20.5,11 C20.7761,11 21,10.77615 21,10.5 L21,6 L21,5.5 C21,5.223846 20.7761,5 20.5,5 L20,5 L15.5,5 Z"
                                                  id="path0_fill" fill="#333333" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </svg></div>
                                      <div class="_199894c6">
                                        <div class="_252cc398 _40f1eb59"><span>Booked 114 times today</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a></div>
                          <div class="_6420ae2a"><a href="/restaurant/profile/1008433?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0" target="_blank" rel="noopener noreferrer" class="_29c56785 restaurant-scroller-item" data-rid="1008433" data-index="3">
                              <div class="_22221ac4">
                                <div class="_25d456c1" style="background-image:url(https://resizer.otstatic.com/v2/photos/medium/25308963.jpg)"></div>
                                <div class="ffef9d58 _1f1541e1">
                                  <h3 class="_5e8d5397 _70be0f0d">KŌST</h3>
                                  <div class="_944fb8bd">
                                    <div class="_8162dcda">
                                      <div class="_4e5a981b"><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-half</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-half" fill-rule="nonzero">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_2_" fill="#E1E1E1"></path>
                                                <path
                                                  d="M7.781,0.125 L5.465,5.14 L0.209,5.924 C0.104,5.965 0.042,6.018 0.021,6.08 C-0.021,6.164 -7.97972799e-17,6.247 0.083,6.331 L3.869,10.217 L2.993,15.733 C2.951,15.817 2.983,15.89 3.087,15.952 C3.108,15.973 3.15,15.983 3.212,15.983 C3.274,15.983 3.316,15.973 3.337,15.952 L8,13.383 L8,0 C7.937,0 7.864,0.042 7.781,0.125 Z"
                                                  id="Shape" fill="#DA3743"></path>
                                              </g>
                                            </g>
                                          </svg></i></div>
                                    </div><span class="_62104053 _40f1eb59"><span>676 reviews</span></span>
                                  </div>
                                  <div class="adbc8b53"><span class="b28c82d3">Californian</span><span class="b28c82d3"><span class="_27818379 _1f1541e1">$$</span></span><span class="b28c82d3">Downtown / Entertainment District</span></div>
                                  <div class="_8847555a">
                                    <div class="_1e864f49">
                                      <div class="e38c4fa0"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="background:#FFFFFF">
                                          <title>icon/ic_social_proof</title>
                                          <desc>Created with Sketch.</desc>
                                          <defs>
                                            <polygon id="path-5" points="0 0 24 0 24 24 0 24"></polygon>
                                          </defs>
                                          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="icon/ic_social_proof">
                                              <g id="ic_booked">
                                                <mask id="mask-2" fill="white">
                                                  <use xlink:href="#path-5"></use>
                                                </mask>
                                                <g id="Shape"></g>
                                                <path
                                                  d="M15.5,5 C15.2239,5 15,5.223846 15,5.5 L15,6.5 C15,6.77615 15.2239,7 15.5,7 L17.5858,7 L14,10.58578 L12.70711,9.29291 L12.35355,8.93933 C12.15829,8.74408 11.84171,8.74408 11.64645,8.93933 L11.29289,9.29291 L5,15.5858 L5,7 L11.5,7 C11.77614,7 12,6.77615 12,6.5 L12,5.5 C12,5.22385 11.77614,5 11.5,5 L5,5 C3.89543,5 3,5.89542 3,7 L3,17 C3,18.1046 3.89543,19 5,19 L19,19 C20.1046,19 21,18.1046 21,17 L21,14.5 C21,14.2238 20.7761,14 20.5,14 L19.5,14 C19.2239,14 19,14.2238 19,14.5 L19,17 L6.4142,17 L12,11.41422 L13.2929,12.70709 L13.6464,13.06067 C13.8417,13.25592 14.1583,13.25592 14.3536,13.06067 L14.7071,12.70709 L19,8.41422 L19,10.5 C19,10.77615 19.2239,11 19.5,11 L20.5,11 C20.7761,11 21,10.77615 21,10.5 L21,6 L21,5.5 C21,5.223846 20.7761,5 20.5,5 L20,5 L15.5,5 Z"
                                                  id="path0_fill" fill="#333333" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </svg></div>
                                      <div class="_199894c6">
                                        <div class="_252cc398 _40f1eb59"><span>Booked 93 times today</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a></div>
                          <div class="_6420ae2a"><a href="/canoe-restaurant-and-bar?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0" target="_blank" rel="noopener noreferrer" class="_29c56785 restaurant-scroller-item" data-rid="3870" data-index="4">
                              <div class="_22221ac4">
                                <div class="_25d456c1" style="background-image:url(https://resizer.otstatic.com/v2/photos/medium/23684405.jpg)"></div>
                                <div class="ffef9d58 _1f1541e1">
                                  <h3 class="_5e8d5397 _70be0f0d">Canoe Restaurant and Bar</h3>
                                  <div class="_944fb8bd">
                                    <div class="_8162dcda">
                                      <div class="_4e5a981b"><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-threequarter</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-threequarter" fill-rule="nonzero">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_4_" fill="#E1E1E1"></path>
                                                <path
                                                  d="M5.465,5.14 L0.209,5.924 C0.104,5.965 0.042,6.018 0.021,6.08 C-0.021,6.164 3.6429193e-16,6.247 0.083,6.331 L3.869,10.217 L2.993,15.733 C2.951,15.817 2.983,15.89 3.087,15.952 C3.108,15.973 3.15,15.983 3.212,15.983 C3.274,15.983 3.316,15.973 3.337,15.952 L8,13.383 L10,14.478 L10,3.931 L8.219,0.125 C8.177,0.042 8.104,0 8,0 C7.937,0 7.864,0.042 7.781,0.125 L5.465,5.14 Z"
                                                  id="Shape" fill="#DA3743"></path>
                                              </g>
                                            </g>
                                          </svg></i></div>
                                    </div><span class="_62104053 _40f1eb59"><span>4090 reviews</span></span>
                                  </div>
                                  <div class="adbc8b53"><span class="b28c82d3">Continental</span><span class="b28c82d3"><span class="_27818379 _1f1541e1">$$$$</span></span><span class="b28c82d3">Downtown / Financial District</span></div>
                                  <div class="_8847555a">
                                    <div class="_1e864f49">
                                      <div class="e38c4fa0"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="background:#FFFFFF">
                                          <title>icon/ic_social_proof</title>
                                          <desc>Created with Sketch.</desc>
                                          <defs>
                                            <polygon id="path-5" points="0 0 24 0 24 24 0 24"></polygon>
                                          </defs>
                                          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="icon/ic_social_proof">
                                              <g id="ic_booked">
                                                <mask id="mask-2" fill="white">
                                                  <use xlink:href="#path-5"></use>
                                                </mask>
                                                <g id="Shape"></g>
                                                <path
                                                  d="M15.5,5 C15.2239,5 15,5.223846 15,5.5 L15,6.5 C15,6.77615 15.2239,7 15.5,7 L17.5858,7 L14,10.58578 L12.70711,9.29291 L12.35355,8.93933 C12.15829,8.74408 11.84171,8.74408 11.64645,8.93933 L11.29289,9.29291 L5,15.5858 L5,7 L11.5,7 C11.77614,7 12,6.77615 12,6.5 L12,5.5 C12,5.22385 11.77614,5 11.5,5 L5,5 C3.89543,5 3,5.89542 3,7 L3,17 C3,18.1046 3.89543,19 5,19 L19,19 C20.1046,19 21,18.1046 21,17 L21,14.5 C21,14.2238 20.7761,14 20.5,14 L19.5,14 C19.2239,14 19,14.2238 19,14.5 L19,17 L6.4142,17 L12,11.41422 L13.2929,12.70709 L13.6464,13.06067 C13.8417,13.25592 14.1583,13.25592 14.3536,13.06067 L14.7071,12.70709 L19,8.41422 L19,10.5 C19,10.77615 19.2239,11 19.5,11 L20.5,11 C20.7761,11 21,10.77615 21,10.5 L21,6 L21,5.5 C21,5.223846 20.7761,5 20.5,5 L20,5 L15.5,5 Z"
                                                  id="path0_fill" fill="#333333" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </svg></div>
                                      <div class="_199894c6">
                                        <div class="_252cc398 _40f1eb59"><span>Booked 91 times today</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a></div>
                          <div class="_6420ae2a"><a href="/cafe-boulud?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0" target="_blank" rel="noopener noreferrer" class="_29c56785 restaurant-scroller-item" data-rid="82399" data-index="5">
                              <div class="_22221ac4">
                                <div class="_25d456c1" style="background-image:url(https://resizer.otstatic.com/v2/photos/medium/24005600.jpg)"></div>
                                <div class="ffef9d58 _1f1541e1">
                                  <h3 class="_5e8d5397 _70be0f0d">Café Boulud</h3>
                                  <div class="_944fb8bd">
                                    <div class="_8162dcda">
                                      <div class="_4e5a981b"><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-half</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-half" fill-rule="nonzero">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_2_" fill="#E1E1E1"></path>
                                                <path
                                                  d="M7.781,0.125 L5.465,5.14 L0.209,5.924 C0.104,5.965 0.042,6.018 0.021,6.08 C-0.021,6.164 -7.97972799e-17,6.247 0.083,6.331 L3.869,10.217 L2.993,15.733 C2.951,15.817 2.983,15.89 3.087,15.952 C3.108,15.973 3.15,15.983 3.212,15.983 C3.274,15.983 3.316,15.973 3.337,15.952 L8,13.383 L8,0 C7.937,0 7.864,0.042 7.781,0.125 Z"
                                                  id="Shape" fill="#DA3743"></path>
                                              </g>
                                            </g>
                                          </svg></i></div>
                                    </div><span class="_62104053 _40f1eb59"><span>2204 reviews</span></span>
                                  </div>
                                  <div class="adbc8b53"><span class="b28c82d3">French</span><span class="b28c82d3"><span class="_27818379 _1f1541e1">$$$</span></span><span class="b28c82d3">Yorkville</span></div>
                                  <div class="_8847555a">
                                    <div class="_1e864f49">
                                      <div class="e38c4fa0"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="background:#FFFFFF">
                                          <title>icon/ic_social_proof</title>
                                          <desc>Created with Sketch.</desc>
                                          <defs>
                                            <polygon id="path-5" points="0 0 24 0 24 24 0 24"></polygon>
                                          </defs>
                                          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="icon/ic_social_proof">
                                              <g id="ic_booked">
                                                <mask id="mask-2" fill="white">
                                                  <use xlink:href="#path-5"></use>
                                                </mask>
                                                <g id="Shape"></g>
                                                <path
                                                  d="M15.5,5 C15.2239,5 15,5.223846 15,5.5 L15,6.5 C15,6.77615 15.2239,7 15.5,7 L17.5858,7 L14,10.58578 L12.70711,9.29291 L12.35355,8.93933 C12.15829,8.74408 11.84171,8.74408 11.64645,8.93933 L11.29289,9.29291 L5,15.5858 L5,7 L11.5,7 C11.77614,7 12,6.77615 12,6.5 L12,5.5 C12,5.22385 11.77614,5 11.5,5 L5,5 C3.89543,5 3,5.89542 3,7 L3,17 C3,18.1046 3.89543,19 5,19 L19,19 C20.1046,19 21,18.1046 21,17 L21,14.5 C21,14.2238 20.7761,14 20.5,14 L19.5,14 C19.2239,14 19,14.2238 19,14.5 L19,17 L6.4142,17 L12,11.41422 L13.2929,12.70709 L13.6464,13.06067 C13.8417,13.25592 14.1583,13.25592 14.3536,13.06067 L14.7071,12.70709 L19,8.41422 L19,10.5 C19,10.77615 19.2239,11 19.5,11 L20.5,11 C20.7761,11 21,10.77615 21,10.5 L21,6 L21,5.5 C21,5.223846 20.7761,5 20.5,5 L20,5 L15.5,5 Z"
                                                  id="path0_fill" fill="#333333" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </svg></div>
                                      <div class="_199894c6">
                                        <div class="_252cc398 _40f1eb59"><span>Booked 83 times today</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a></div>
                          <div class="_6420ae2a"><a href="/r/piano-piano-toronto?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0" target="_blank" rel="noopener noreferrer" class="_29c56785 restaurant-scroller-item" data-rid="212452" data-index="6">
                              <div class="_22221ac4">
                                <div class="_25d456c1" style="background-image:url(https://resizer.otstatic.com/v2/photos/medium/24398097.jpg)"></div>
                                <div class="ffef9d58 _1f1541e1">
                                  <h3 class="_5e8d5397 _70be0f0d">Piano Piano</h3>
                                  <div class="_944fb8bd">
                                    <div class="_8162dcda">
                                      <div class="_4e5a981b"><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-threequarter</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-threequarter" fill-rule="nonzero">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_4_" fill="#E1E1E1"></path>
                                                <path
                                                  d="M5.465,5.14 L0.209,5.924 C0.104,5.965 0.042,6.018 0.021,6.08 C-0.021,6.164 3.6429193e-16,6.247 0.083,6.331 L3.869,10.217 L2.993,15.733 C2.951,15.817 2.983,15.89 3.087,15.952 C3.108,15.973 3.15,15.983 3.212,15.983 C3.274,15.983 3.316,15.973 3.337,15.952 L8,13.383 L10,14.478 L10,3.931 L8.219,0.125 C8.177,0.042 8.104,0 8,0 C7.937,0 7.864,0.042 7.781,0.125 L5.465,5.14 Z"
                                                  id="Shape" fill="#DA3743"></path>
                                              </g>
                                            </g>
                                          </svg></i></div>
                                    </div><span class="_62104053 _40f1eb59"><span>1070 reviews</span></span>
                                  </div>
                                  <div class="adbc8b53"><span class="b28c82d3">Contemporary Italian</span><span class="b28c82d3"><span class="_27818379 _1f1541e1">$$$</span></span><span class="b28c82d3">The Annex</span></div>
                                  <div class="_8847555a">
                                    <div class="_1e864f49">
                                      <div class="e38c4fa0"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="background:#FFFFFF">
                                          <title>icon/ic_social_proof</title>
                                          <desc>Created with Sketch.</desc>
                                          <defs>
                                            <polygon id="path-5" points="0 0 24 0 24 24 0 24"></polygon>
                                          </defs>
                                          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="icon/ic_social_proof">
                                              <g id="ic_booked">
                                                <mask id="mask-2" fill="white">
                                                  <use xlink:href="#path-5"></use>
                                                </mask>
                                                <g id="Shape"></g>
                                                <path
                                                  d="M15.5,5 C15.2239,5 15,5.223846 15,5.5 L15,6.5 C15,6.77615 15.2239,7 15.5,7 L17.5858,7 L14,10.58578 L12.70711,9.29291 L12.35355,8.93933 C12.15829,8.74408 11.84171,8.74408 11.64645,8.93933 L11.29289,9.29291 L5,15.5858 L5,7 L11.5,7 C11.77614,7 12,6.77615 12,6.5 L12,5.5 C12,5.22385 11.77614,5 11.5,5 L5,5 C3.89543,5 3,5.89542 3,7 L3,17 C3,18.1046 3.89543,19 5,19 L19,19 C20.1046,19 21,18.1046 21,17 L21,14.5 C21,14.2238 20.7761,14 20.5,14 L19.5,14 C19.2239,14 19,14.2238 19,14.5 L19,17 L6.4142,17 L12,11.41422 L13.2929,12.70709 L13.6464,13.06067 C13.8417,13.25592 14.1583,13.25592 14.3536,13.06067 L14.7071,12.70709 L19,8.41422 L19,10.5 C19,10.77615 19.2239,11 19.5,11 L20.5,11 C20.7761,11 21,10.77615 21,10.5 L21,6 L21,5.5 C21,5.223846 20.7761,5 20.5,5 L20,5 L15.5,5 Z"
                                                  id="path0_fill" fill="#333333" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </svg></div>
                                      <div class="_199894c6">
                                        <div class="_252cc398 _40f1eb59"><span>Booked 67 times today</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a></div>
                          <div class="_6420ae2a"><a href="/the-keg-steakhouse-and-bar-ajax?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0" target="_blank" rel="noopener noreferrer" class="_29c56785 restaurant-scroller-item" data-rid="189073"
                              data-index="7">
                              <div class="_22221ac4">
                                <div class="_25d456c1" style="background-image:url(https://resizer.otstatic.com/v2/photos/medium/24010688.jpg)"></div>
                                <div class="ffef9d58 _1f1541e1">
                                  <h3 class="_5e8d5397 _70be0f0d">The Keg Steakhouse + Bar - Ajax</h3>
                                  <div class="_944fb8bd">
                                    <div class="_8162dcda">
                                      <div class="_4e5a981b"><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-quarter</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-quarter" fill-rule="nonzero">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_1_" fill="#E1E1E1"></path>
                                                <path
                                                  d="M6,3.982 L5.465,5.14 L0.209,5.924 C0.104,5.965 0.042,6.018 0.021,6.08 C-0.021,6.164 -7.97972799e-17,6.247 0.083,6.331 L3.869,10.217 L2.993,15.733 C2.951,15.817 2.983,15.89 3.087,15.952 C3.108,15.973 3.15,15.983 3.212,15.983 C3.274,15.983 3.316,15.973 3.337,15.952 L6,14.485 L6,3.982 Z"
                                                  id="Shape" fill="#DA3743"></path>
                                              </g>
                                            </g>
                                          </svg></i></div>
                                    </div><span class="_62104053 _40f1eb59"><span>625 reviews</span></span>
                                  </div>
                                  <div class="adbc8b53"><span class="b28c82d3">Steakhouse</span><span class="b28c82d3"><span class="_27818379 _1f1541e1">$$$</span></span><span class="b28c82d3">Ajax</span></div>
                                  <div class="_8847555a">
                                    <div class="_1e864f49">
                                      <div class="e38c4fa0"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="background:#FFFFFF">
                                          <title>icon/ic_social_proof</title>
                                          <desc>Created with Sketch.</desc>
                                          <defs>
                                            <polygon id="path-5" points="0 0 24 0 24 24 0 24"></polygon>
                                          </defs>
                                          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="icon/ic_social_proof">
                                              <g id="ic_booked">
                                                <mask id="mask-2" fill="white">
                                                  <use xlink:href="#path-5"></use>
                                                </mask>
                                                <g id="Shape"></g>
                                                <path
                                                  d="M15.5,5 C15.2239,5 15,5.223846 15,5.5 L15,6.5 C15,6.77615 15.2239,7 15.5,7 L17.5858,7 L14,10.58578 L12.70711,9.29291 L12.35355,8.93933 C12.15829,8.74408 11.84171,8.74408 11.64645,8.93933 L11.29289,9.29291 L5,15.5858 L5,7 L11.5,7 C11.77614,7 12,6.77615 12,6.5 L12,5.5 C12,5.22385 11.77614,5 11.5,5 L5,5 C3.89543,5 3,5.89542 3,7 L3,17 C3,18.1046 3.89543,19 5,19 L19,19 C20.1046,19 21,18.1046 21,17 L21,14.5 C21,14.2238 20.7761,14 20.5,14 L19.5,14 C19.2239,14 19,14.2238 19,14.5 L19,17 L6.4142,17 L12,11.41422 L13.2929,12.70709 L13.6464,13.06067 C13.8417,13.25592 14.1583,13.25592 14.3536,13.06067 L14.7071,12.70709 L19,8.41422 L19,10.5 C19,10.77615 19.2239,11 19.5,11 L20.5,11 C20.7761,11 21,10.77615 21,10.5 L21,6 L21,5.5 C21,5.223846 20.7761,5 20.5,5 L20,5 L15.5,5 Z"
                                                  id="path0_fill" fill="#333333" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </svg></div>
                                      <div class="_199894c6">
                                        <div class="_252cc398 _40f1eb59"><span>Booked 14 times today</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a></div>
                          <div class="_6420ae2a"><a href="/r/brothers-ristorante-whitby?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0" target="_blank" rel="noopener noreferrer" class="_29c56785 restaurant-scroller-item" data-rid="846268"
                              data-index="8">
                              <div class="_22221ac4">
                                <div class="_25d456c1" style="background-image:url(https://resizer.otstatic.com/v2/photos/medium/25545647.jpg)"></div>
                                <div class="ffef9d58 _1f1541e1">
                                  <h3 class="_5e8d5397 _70be0f0d">Brothers Ristorante</h3>
                                  <div class="_944fb8bd">
                                    <div class="_8162dcda">
                                      <div class="_4e5a981b"><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-threequarter</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-threequarter" fill-rule="nonzero">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_4_" fill="#E1E1E1"></path>
                                                <path
                                                  d="M5.465,5.14 L0.209,5.924 C0.104,5.965 0.042,6.018 0.021,6.08 C-0.021,6.164 3.6429193e-16,6.247 0.083,6.331 L3.869,10.217 L2.993,15.733 C2.951,15.817 2.983,15.89 3.087,15.952 C3.108,15.973 3.15,15.983 3.212,15.983 C3.274,15.983 3.316,15.973 3.337,15.952 L8,13.383 L10,14.478 L10,3.931 L8.219,0.125 C8.177,0.042 8.104,0 8,0 C7.937,0 7.864,0.042 7.781,0.125 L5.465,5.14 Z"
                                                  id="Shape" fill="#DA3743"></path>
                                              </g>
                                            </g>
                                          </svg></i></div>
                                    </div><span class="_62104053 _40f1eb59"><span>128 reviews</span></span>
                                  </div>
                                  <div class="adbc8b53"><span class="b28c82d3">Italian</span><span class="b28c82d3"><span class="_27818379 _1f1541e1">$$</span></span><span class="b28c82d3">Whitby</span></div>
                                  <div class="_8847555a">
                                    <div class="_1e864f49">
                                      <div class="e38c4fa0"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="background:#FFFFFF">
                                          <title>icon/ic_social_proof</title>
                                          <desc>Created with Sketch.</desc>
                                          <defs>
                                            <polygon id="path-5" points="0 0 24 0 24 24 0 24"></polygon>
                                          </defs>
                                          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="icon/ic_social_proof">
                                              <g id="ic_booked">
                                                <mask id="mask-2" fill="white">
                                                  <use xlink:href="#path-5"></use>
                                                </mask>
                                                <g id="Shape"></g>
                                                <path
                                                  d="M15.5,5 C15.2239,5 15,5.223846 15,5.5 L15,6.5 C15,6.77615 15.2239,7 15.5,7 L17.5858,7 L14,10.58578 L12.70711,9.29291 L12.35355,8.93933 C12.15829,8.74408 11.84171,8.74408 11.64645,8.93933 L11.29289,9.29291 L5,15.5858 L5,7 L11.5,7 C11.77614,7 12,6.77615 12,6.5 L12,5.5 C12,5.22385 11.77614,5 11.5,5 L5,5 C3.89543,5 3,5.89542 3,7 L3,17 C3,18.1046 3.89543,19 5,19 L19,19 C20.1046,19 21,18.1046 21,17 L21,14.5 C21,14.2238 20.7761,14 20.5,14 L19.5,14 C19.2239,14 19,14.2238 19,14.5 L19,17 L6.4142,17 L12,11.41422 L13.2929,12.70709 L13.6464,13.06067 C13.8417,13.25592 14.1583,13.25592 14.3536,13.06067 L14.7071,12.70709 L19,8.41422 L19,10.5 C19,10.77615 19.2239,11 19.5,11 L20.5,11 C20.7761,11 21,10.77615 21,10.5 L21,6 L21,5.5 C21,5.223846 20.7761,5 20.5,5 L20,5 L15.5,5 Z"
                                                  id="path0_fill" fill="#333333" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </svg></div>
                                      <div class="_199894c6">
                                        <div class="_252cc398 _40f1eb59"><span>Booked 9 times today</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a></div>
                          <div class="_6420ae2a"><a href="/r/moxies-grill-and-bar-pickering?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0" target="_blank" rel="noopener noreferrer" class="_29c56785 restaurant-scroller-item" data-rid="731065"
                              data-index="9">
                              <div class="_22221ac4">
                                <div class="_25d456c1" style="background-image:url(https://resizer.otstatic.com/v2/photos/medium/25056482.jpg)"></div>
                                <div class="ffef9d58 _1f1541e1">
                                  <h3 class="_5e8d5397 _70be0f0d">Moxie&#x27;s Grill &amp; Bar - Pickering</h3>
                                  <div class="_944fb8bd">
                                    <div class="_8162dcda">
                                      <div class="_4e5a981b"><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-empty</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-empty" fill-rule="nonzero" fill="#E1E1E1">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star"></path>
                                              </g>
                                            </g>
                                          </svg></i></div>
                                    </div><span class="_62104053 _40f1eb59"><span>113 reviews</span></span>
                                  </div>
                                  <div class="adbc8b53"><span class="b28c82d3">Contemporary American</span><span class="b28c82d3"><span class="_27818379 _1f1541e1">$$</span></span><span class="b28c82d3">Pickering</span></div>
                                  <div class="_8847555a">
                                    <div class="_1e864f49">
                                      <div class="e38c4fa0"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="background:#FFFFFF">
                                          <title>icon/ic_social_proof</title>
                                          <desc>Created with Sketch.</desc>
                                          <defs>
                                            <polygon id="path-5" points="0 0 24 0 24 24 0 24"></polygon>
                                          </defs>
                                          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="icon/ic_social_proof">
                                              <g id="ic_booked">
                                                <mask id="mask-2" fill="white">
                                                  <use xlink:href="#path-5"></use>
                                                </mask>
                                                <g id="Shape"></g>
                                                <path
                                                  d="M15.5,5 C15.2239,5 15,5.223846 15,5.5 L15,6.5 C15,6.77615 15.2239,7 15.5,7 L17.5858,7 L14,10.58578 L12.70711,9.29291 L12.35355,8.93933 C12.15829,8.74408 11.84171,8.74408 11.64645,8.93933 L11.29289,9.29291 L5,15.5858 L5,7 L11.5,7 C11.77614,7 12,6.77615 12,6.5 L12,5.5 C12,5.22385 11.77614,5 11.5,5 L5,5 C3.89543,5 3,5.89542 3,7 L3,17 C3,18.1046 3.89543,19 5,19 L19,19 C20.1046,19 21,18.1046 21,17 L21,14.5 C21,14.2238 20.7761,14 20.5,14 L19.5,14 C19.2239,14 19,14.2238 19,14.5 L19,17 L6.4142,17 L12,11.41422 L13.2929,12.70709 L13.6464,13.06067 C13.8417,13.25592 14.1583,13.25592 14.3536,13.06067 L14.7071,12.70709 L19,8.41422 L19,10.5 C19,10.77615 19.2239,11 19.5,11 L20.5,11 C20.7761,11 21,10.77615 21,10.5 L21,6 L21,5.5 C21,5.223846 20.7761,5 20.5,5 L20,5 L15.5,5 Z"
                                                  id="path0_fill" fill="#333333" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </svg></div>
                                      <div class="_199894c6">
                                        <div class="_252cc398 _40f1eb59"><span>Booked 7 times today</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a></div>
                          <div class="_6420ae2a"><a href="/the-keg-steakhouse-and-bar-oshawa?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0" target="_blank" rel="noopener noreferrer" class="_29c56785 restaurant-scroller-item" data-rid="189127"
                              data-index="10">
                              <div class="_22221ac4">
                                <div class="_25d456c1" style="background-image:url(https://resizer.otstatic.com/v2/photos/medium/24011163.jpg)"></div>
                                <div class="ffef9d58 _1f1541e1">
                                  <h3 class="_5e8d5397 _70be0f0d">The Keg Steakhouse + Bar - Oshawa</h3>
                                  <div class="_944fb8bd">
                                    <div class="_8162dcda">
                                      <div class="_4e5a981b"><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-threequarter</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-threequarter" fill-rule="nonzero">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_4_" fill="#E1E1E1"></path>
                                                <path
                                                  d="M5.465,5.14 L0.209,5.924 C0.104,5.965 0.042,6.018 0.021,6.08 C-0.021,6.164 3.6429193e-16,6.247 0.083,6.331 L3.869,10.217 L2.993,15.733 C2.951,15.817 2.983,15.89 3.087,15.952 C3.108,15.973 3.15,15.983 3.212,15.983 C3.274,15.983 3.316,15.973 3.337,15.952 L8,13.383 L10,14.478 L10,3.931 L8.219,0.125 C8.177,0.042 8.104,0 8,0 C7.937,0 7.864,0.042 7.781,0.125 L5.465,5.14 Z"
                                                  id="Shape" fill="#DA3743"></path>
                                              </g>
                                            </g>
                                          </svg></i></div>
                                    </div><span class="_62104053 _40f1eb59"><span>486 reviews</span></span>
                                  </div>
                                  <div class="adbc8b53"><span class="b28c82d3">Steakhouse</span><span class="b28c82d3"><span class="_27818379 _1f1541e1">$$$</span></span><span class="b28c82d3">Oshawa</span></div>
                                  <div class="_8847555a">
                                    <div class="_1e864f49">
                                      <div class="e38c4fa0"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="background:#FFFFFF">
                                          <title>icon/ic_social_proof</title>
                                          <desc>Created with Sketch.</desc>
                                          <defs>
                                            <polygon id="path-5" points="0 0 24 0 24 24 0 24"></polygon>
                                          </defs>
                                          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="icon/ic_social_proof">
                                              <g id="ic_booked">
                                                <mask id="mask-2" fill="white">
                                                  <use xlink:href="#path-5"></use>
                                                </mask>
                                                <g id="Shape"></g>
                                                <path
                                                  d="M15.5,5 C15.2239,5 15,5.223846 15,5.5 L15,6.5 C15,6.77615 15.2239,7 15.5,7 L17.5858,7 L14,10.58578 L12.70711,9.29291 L12.35355,8.93933 C12.15829,8.74408 11.84171,8.74408 11.64645,8.93933 L11.29289,9.29291 L5,15.5858 L5,7 L11.5,7 C11.77614,7 12,6.77615 12,6.5 L12,5.5 C12,5.22385 11.77614,5 11.5,5 L5,5 C3.89543,5 3,5.89542 3,7 L3,17 C3,18.1046 3.89543,19 5,19 L19,19 C20.1046,19 21,18.1046 21,17 L21,14.5 C21,14.2238 20.7761,14 20.5,14 L19.5,14 C19.2239,14 19,14.2238 19,14.5 L19,17 L6.4142,17 L12,11.41422 L13.2929,12.70709 L13.6464,13.06067 C13.8417,13.25592 14.1583,13.25592 14.3536,13.06067 L14.7071,12.70709 L19,8.41422 L19,10.5 C19,10.77615 19.2239,11 19.5,11 L20.5,11 C20.7761,11 21,10.77615 21,10.5 L21,6 L21,5.5 C21,5.223846 20.7761,5 20.5,5 L20,5 L15.5,5 Z"
                                                  id="path0_fill" fill="#333333" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </svg></div>
                                      <div class="_199894c6">
                                        <div class="_252cc398 _40f1eb59"><span>Booked 6 times today</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a></div>
                          <div class="_6420ae2a"><a href="/jack-astors-pickering?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0" target="_blank" rel="noopener noreferrer" class="_29c56785 restaurant-scroller-item" data-rid="186772" data-index="11">
                              <div class="_22221ac4">
                                <div class="_25d456c1" style="background-image:url(https://resizer.otstatic.com/v2/photos/medium/25857244.jpg)"></div>
                                <div class="ffef9d58 _1f1541e1">
                                  <h3 class="_5e8d5397 _70be0f0d">Jack Astor&#x27;s - Pickering</h3>
                                  <div class="_944fb8bd">
                                    <div class="_8162dcda">
                                      <div class="_4e5a981b"><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-quarter</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-quarter" fill-rule="nonzero">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_1_" fill="#E1E1E1"></path>
                                                <path
                                                  d="M6,3.982 L5.465,5.14 L0.209,5.924 C0.104,5.965 0.042,6.018 0.021,6.08 C-0.021,6.164 -7.97972799e-17,6.247 0.083,6.331 L3.869,10.217 L2.993,15.733 C2.951,15.817 2.983,15.89 3.087,15.952 C3.108,15.973 3.15,15.983 3.212,15.983 C3.274,15.983 3.316,15.973 3.337,15.952 L6,14.485 L6,3.982 Z"
                                                  id="Shape" fill="#DA3743"></path>
                                              </g>
                                            </g>
                                          </svg></i></div>
                                    </div><span class="_62104053 _40f1eb59"><span>118 reviews</span></span>
                                  </div>
                                  <div class="adbc8b53"><span class="b28c82d3">Canadian</span><span class="b28c82d3"><span class="_27818379 _1f1541e1">$$</span></span><span class="b28c82d3">Pickering</span></div>
                                  <div class="_8847555a">
                                    <div class="_1e864f49">
                                      <div class="e38c4fa0"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="background:#FFFFFF">
                                          <title>icon/ic_social_proof</title>
                                          <desc>Created with Sketch.</desc>
                                          <defs>
                                            <polygon id="path-5" points="0 0 24 0 24 24 0 24"></polygon>
                                          </defs>
                                          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="icon/ic_social_proof">
                                              <g id="ic_booked">
                                                <mask id="mask-2" fill="white">
                                                  <use xlink:href="#path-5"></use>
                                                </mask>
                                                <g id="Shape"></g>
                                                <path
                                                  d="M15.5,5 C15.2239,5 15,5.223846 15,5.5 L15,6.5 C15,6.77615 15.2239,7 15.5,7 L17.5858,7 L14,10.58578 L12.70711,9.29291 L12.35355,8.93933 C12.15829,8.74408 11.84171,8.74408 11.64645,8.93933 L11.29289,9.29291 L5,15.5858 L5,7 L11.5,7 C11.77614,7 12,6.77615 12,6.5 L12,5.5 C12,5.22385 11.77614,5 11.5,5 L5,5 C3.89543,5 3,5.89542 3,7 L3,17 C3,18.1046 3.89543,19 5,19 L19,19 C20.1046,19 21,18.1046 21,17 L21,14.5 C21,14.2238 20.7761,14 20.5,14 L19.5,14 C19.2239,14 19,14.2238 19,14.5 L19,17 L6.4142,17 L12,11.41422 L13.2929,12.70709 L13.6464,13.06067 C13.8417,13.25592 14.1583,13.25592 14.3536,13.06067 L14.7071,12.70709 L19,8.41422 L19,10.5 C19,10.77615 19.2239,11 19.5,11 L20.5,11 C20.7761,11 21,10.77615 21,10.5 L21,6 L21,5.5 C21,5.223846 20.7761,5 20.5,5 L20,5 L15.5,5 Z"
                                                  id="path0_fill" fill="#333333" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </svg></div>
                                      <div class="_199894c6">
                                        <div class="_252cc398 _40f1eb59"><span>Booked 2 times today</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a></div>
                          <div class="_6420ae2a"><a href="/r/boston-pizza-ajax?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0" target="_blank" rel="noopener noreferrer" class="_29c56785 restaurant-scroller-item" data-rid="225709" data-index="12">
                              <div class="_22221ac4">
                                <div class="_25d456c1" style="background-image:url(https://resizer.otstatic.com/v2/photos/medium/25636418.jpg)"></div>
                                <div class="ffef9d58 _1f1541e1">
                                  <h3 class="_5e8d5397 _70be0f0d">Boston Pizza - Ajax</h3>
                                  <div class="_944fb8bd">
                                    <div class="_8162dcda">
                                      <div class="_4e5a981b"><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-quarter</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-quarter" fill-rule="nonzero">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_1_" fill="#E1E1E1"></path>
                                                <path
                                                  d="M6,3.982 L5.465,5.14 L0.209,5.924 C0.104,5.965 0.042,6.018 0.021,6.08 C-0.021,6.164 -7.97972799e-17,6.247 0.083,6.331 L3.869,10.217 L2.993,15.733 C2.951,15.817 2.983,15.89 3.087,15.952 C3.108,15.973 3.15,15.983 3.212,15.983 C3.274,15.983 3.316,15.973 3.337,15.952 L6,14.485 L6,3.982 Z"
                                                  id="Shape" fill="#DA3743"></path>
                                              </g>
                                            </g>
                                          </svg></i></div>
                                    </div><span class="_62104053 _40f1eb59"><span>2 reviews</span></span>
                                  </div>
                                  <div class="adbc8b53"><span class="b28c82d3">Pizzeria</span><span class="b28c82d3"><span class="_27818379 _1f1541e1">$$</span></span><span class="b28c82d3">Ajax</span></div>
                                  <div class="_8847555a">
                                    <div class="_1e864f49">
                                      <div class="e38c4fa0"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="background:#FFFFFF">
                                          <title>icon/ic_social_proof</title>
                                          <desc>Created with Sketch.</desc>
                                          <defs>
                                            <polygon id="path-5" points="0 0 24 0 24 24 0 24"></polygon>
                                          </defs>
                                          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="icon/ic_social_proof">
                                              <g id="ic_booked">
                                                <mask id="mask-2" fill="white">
                                                  <use xlink:href="#path-5"></use>
                                                </mask>
                                                <g id="Shape"></g>
                                                <path
                                                  d="M15.5,5 C15.2239,5 15,5.223846 15,5.5 L15,6.5 C15,6.77615 15.2239,7 15.5,7 L17.5858,7 L14,10.58578 L12.70711,9.29291 L12.35355,8.93933 C12.15829,8.74408 11.84171,8.74408 11.64645,8.93933 L11.29289,9.29291 L5,15.5858 L5,7 L11.5,7 C11.77614,7 12,6.77615 12,6.5 L12,5.5 C12,5.22385 11.77614,5 11.5,5 L5,5 C3.89543,5 3,5.89542 3,7 L3,17 C3,18.1046 3.89543,19 5,19 L19,19 C20.1046,19 21,18.1046 21,17 L21,14.5 C21,14.2238 20.7761,14 20.5,14 L19.5,14 C19.2239,14 19,14.2238 19,14.5 L19,17 L6.4142,17 L12,11.41422 L13.2929,12.70709 L13.6464,13.06067 C13.8417,13.25592 14.1583,13.25592 14.3536,13.06067 L14.7071,12.70709 L19,8.41422 L19,10.5 C19,10.77615 19.2239,11 19.5,11 L20.5,11 C20.7761,11 21,10.77615 21,10.5 L21,6 L21,5.5 C21,5.223846 20.7761,5 20.5,5 L20,5 L15.5,5 Z"
                                                  id="path0_fill" fill="#333333" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </svg></div>
                                      <div class="_199894c6">
                                        <div class="_252cc398 _40f1eb59"><span>Booked 1 time today</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a></div>
                          <div class="_6420ae2a"><a href="/makimono-ajax?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0" target="_blank" rel="noopener noreferrer" class="_29c56785 restaurant-scroller-item" data-rid="213895" data-index="13">
                              <div class="_22221ac4">
                                <div class="_25d456c1" style="background-image:url(https://resizer.otstatic.com/v2/photos/medium/24333073.jpg)"></div>
                                <div class="ffef9d58 _1f1541e1">
                                  <h3 class="_5e8d5397 _70be0f0d">Makimono - Ajax</h3>
                                  <div class="_944fb8bd">
                                    <div class="_8162dcda">
                                      <div class="_4e5a981b"><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-quarter</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-quarter" fill-rule="nonzero">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_1_" fill="#E1E1E1"></path>
                                                <path
                                                  d="M6,3.982 L5.465,5.14 L0.209,5.924 C0.104,5.965 0.042,6.018 0.021,6.08 C-0.021,6.164 -7.97972799e-17,6.247 0.083,6.331 L3.869,10.217 L2.993,15.733 C2.951,15.817 2.983,15.89 3.087,15.952 C3.108,15.973 3.15,15.983 3.212,15.983 C3.274,15.983 3.316,15.973 3.337,15.952 L6,14.485 L6,3.982 Z"
                                                  id="Shape" fill="#DA3743"></path>
                                              </g>
                                            </g>
                                          </svg></i></div>
                                    </div><span class="_62104053 _40f1eb59"><span>40 reviews</span></span>
                                  </div>
                                  <div class="adbc8b53"><span class="b28c82d3">Sushi</span><span class="b28c82d3"><span class="_27818379 _1f1541e1">$$</span></span><span class="b28c82d3">Ajax</span></div>
                                  <div class="_26302193">
                                    <div class="_1e864f49">
                                      <div class="e38c4fa0"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="background:#FFFFFF">
                                          <title>icon/ic_social_proof</title>
                                          <desc>Created with Sketch.</desc>
                                          <defs>
                                            <polygon id="path-5" points="0 0 24 0 24 24 0 24"></polygon>
                                          </defs>
                                          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="icon/ic_social_proof">
                                              <g id="ic_booked">
                                                <mask id="mask-2" fill="white">
                                                  <use xlink:href="#path-5"></use>
                                                </mask>
                                                <g id="Shape"></g>
                                                <path
                                                  d="M15.5,5 C15.2239,5 15,5.223846 15,5.5 L15,6.5 C15,6.77615 15.2239,7 15.5,7 L17.5858,7 L14,10.58578 L12.70711,9.29291 L12.35355,8.93933 C12.15829,8.74408 11.84171,8.74408 11.64645,8.93933 L11.29289,9.29291 L5,15.5858 L5,7 L11.5,7 C11.77614,7 12,6.77615 12,6.5 L12,5.5 C12,5.22385 11.77614,5 11.5,5 L5,5 C3.89543,5 3,5.89542 3,7 L3,17 C3,18.1046 3.89543,19 5,19 L19,19 C20.1046,19 21,18.1046 21,17 L21,14.5 C21,14.2238 20.7761,14 20.5,14 L19.5,14 C19.2239,14 19,14.2238 19,14.5 L19,17 L6.4142,17 L12,11.41422 L13.2929,12.70709 L13.6464,13.06067 C13.8417,13.25592 14.1583,13.25592 14.3536,13.06067 L14.7071,12.70709 L19,8.41422 L19,10.5 C19,10.77615 19.2239,11 19.5,11 L20.5,11 C20.7761,11 21,10.77615 21,10.5 L21,6 L21,5.5 C21,5.223846 20.7761,5 20.5,5 L20,5 L15.5,5 Z"
                                                  id="path0_fill" fill="#333333" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </svg></div>
                                      <div class="_199894c6">
                                        <div class="_252cc398 _40f1eb59"><span>Booked 0 times today</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a></div>
                          <div class="_6420ae2a"><a href="/makimono-pickering?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0" target="_blank" rel="noopener noreferrer" class="_29c56785 restaurant-scroller-item" data-rid="213898" data-index="14">
                              <div class="_22221ac4">
                                <div class="_25d456c1" style="background-image:url(https://resizer.otstatic.com/v2/photos/medium/24383145.jpg)"></div>
                                <div class="ffef9d58 _1f1541e1">
                                  <h3 class="_5e8d5397 _70be0f0d">Makimono - Pickering</h3>
                                  <div class="_944fb8bd">
                                    <div class="_8162dcda">
                                      <div class="_4e5a981b"><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>Star_8_</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-full" fill-rule="nonzero" fill="#DA3743">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star_8_"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-empty</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-empty" fill-rule="nonzero" fill="#E1E1E1">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star"></path>
                                              </g>
                                            </g>
                                          </svg></i></div>
                                    </div><span class="_62104053 _40f1eb59"><span>69 reviews</span></span>
                                  </div>
                                  <div class="adbc8b53"><span class="b28c82d3">Sushi</span><span class="b28c82d3"><span class="_27818379 _1f1541e1">$$</span></span><span class="b28c82d3">Pickering</span></div>
                                  <div class="_26302193">
                                    <div class="_1e864f49">
                                      <div class="e38c4fa0"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="background:#FFFFFF">
                                          <title>icon/ic_social_proof</title>
                                          <desc>Created with Sketch.</desc>
                                          <defs>
                                            <polygon id="path-5" points="0 0 24 0 24 24 0 24"></polygon>
                                          </defs>
                                          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="icon/ic_social_proof">
                                              <g id="ic_booked">
                                                <mask id="mask-2" fill="white">
                                                  <use xlink:href="#path-5"></use>
                                                </mask>
                                                <g id="Shape"></g>
                                                <path
                                                  d="M15.5,5 C15.2239,5 15,5.223846 15,5.5 L15,6.5 C15,6.77615 15.2239,7 15.5,7 L17.5858,7 L14,10.58578 L12.70711,9.29291 L12.35355,8.93933 C12.15829,8.74408 11.84171,8.74408 11.64645,8.93933 L11.29289,9.29291 L5,15.5858 L5,7 L11.5,7 C11.77614,7 12,6.77615 12,6.5 L12,5.5 C12,5.22385 11.77614,5 11.5,5 L5,5 C3.89543,5 3,5.89542 3,7 L3,17 C3,18.1046 3.89543,19 5,19 L19,19 C20.1046,19 21,18.1046 21,17 L21,14.5 C21,14.2238 20.7761,14 20.5,14 L19.5,14 C19.2239,14 19,14.2238 19,14.5 L19,17 L6.4142,17 L12,11.41422 L13.2929,12.70709 L13.6464,13.06067 C13.8417,13.25592 14.1583,13.25592 14.3536,13.06067 L14.7071,12.70709 L19,8.41422 L19,10.5 C19,10.77615 19.2239,11 19.5,11 L20.5,11 C20.7761,11 21,10.77615 21,10.5 L21,6 L21,5.5 C21,5.223846 20.7761,5 20.5,5 L20,5 L15.5,5 Z"
                                                  id="path0_fill" fill="#333333" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </svg></div>
                                      <div class="_199894c6">
                                        <div class="_252cc398 _40f1eb59"><span>Booked 0 times today</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a></div>
                          <div class="_6420ae2a"><a href="/r/cineplex-cinemas-pickering-and-vip-pickering-2?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0" target="_blank" rel="noopener noreferrer" class="_29c56785 restaurant-scroller-item"
                              data-rid="1037404" data-index="15">
                              <div class="_22221ac4">
                                <div class="_25d456c1" style="background-image:url(https://images.otstatic.com/prod/26241792/2/medium.jpg)"></div>
                                <div class="ffef9d58 _1f1541e1">
                                  <h3 class="_5e8d5397 _70be0f0d">Cineplex Cinemas Pickering &amp; VIP</h3>
                                  <div class="_944fb8bd">
                                    <div class="_8162dcda">
                                      <div class="_4e5a981b"><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-empty</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-empty" fill-rule="nonzero" fill="#E1E1E1">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-empty</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-empty" fill-rule="nonzero" fill="#E1E1E1">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-empty</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-empty" fill-rule="nonzero" fill="#E1E1E1">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-empty</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-empty" fill-rule="nonzero" fill="#E1E1E1">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star"></path>
                                              </g>
                                            </g>
                                          </svg></i><i class="_068830be"><svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1">
                                            <title>star-empty</title>
                                            <desc>Created with Sketch.</desc>
                                            <defs></defs>
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                              <g id="star-empty" fill-rule="nonzero" fill="#E1E1E1">
                                                <path
                                                  d="M3.213,15.984 C3.15,15.984 3.109,15.974 3.088,15.953 C2.984,15.89 2.952,15.817 2.994,15.734 L3.87,10.218 L0.083,6.331 C-5.27355937e-16,6.247 -0.021,6.164 0.021,6.08 C0.042,6.017 0.104,5.965 0.209,5.923 L5.465,5.14 L7.781,0.125 C7.864,0.042 7.937,0 8,0 C8.104,0 8.177,0.042 8.219,0.125 L10.566,5.14 L15.792,5.924 C15.875,5.945 15.938,5.997 15.98,6.081 C16.021,6.164 16,6.247 15.917,6.331 L12.131,10.217 L13.038,15.733 C13.038,15.817 13.007,15.89 12.944,15.952 C12.84,16.015 12.756,16.015 12.694,15.952 L8,13.383 L3.338,15.953 C3.317,15.974 3.275,15.984 3.213,15.984 L3.213,15.984 Z"
                                                  id="Star"></path>
                                              </g>
                                            </g>
                                          </svg></i></div>
                                    </div><span class="_62104053 _40f1eb59"></span>
                                  </div>
                                  <div class="adbc8b53"><span class="b28c82d3">American</span><span class="b28c82d3"><span class="_27818379 _1f1541e1">$$$</span></span><span class="b28c82d3">Pickering</span></div>
                                  <div class="_26302193">
                                    <div class="_1e864f49">
                                      <div class="e38c4fa0"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" style="background:#FFFFFF">
                                          <title>icon/ic_social_proof</title>
                                          <desc>Created with Sketch.</desc>
                                          <defs>
                                            <polygon id="path-5" points="0 0 24 0 24 24 0 24"></polygon>
                                          </defs>
                                          <g id="Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g id="icon/ic_social_proof">
                                              <g id="ic_booked">
                                                <mask id="mask-2" fill="white">
                                                  <use xlink:href="#path-5"></use>
                                                </mask>
                                                <g id="Shape"></g>
                                                <path
                                                  d="M15.5,5 C15.2239,5 15,5.223846 15,5.5 L15,6.5 C15,6.77615 15.2239,7 15.5,7 L17.5858,7 L14,10.58578 L12.70711,9.29291 L12.35355,8.93933 C12.15829,8.74408 11.84171,8.74408 11.64645,8.93933 L11.29289,9.29291 L5,15.5858 L5,7 L11.5,7 C11.77614,7 12,6.77615 12,6.5 L12,5.5 C12,5.22385 11.77614,5 11.5,5 L5,5 C3.89543,5 3,5.89542 3,7 L3,17 C3,18.1046 3.89543,19 5,19 L19,19 C20.1046,19 21,18.1046 21,17 L21,14.5 C21,14.2238 20.7761,14 20.5,14 L19.5,14 C19.2239,14 19,14.2238 19,14.5 L19,17 L6.4142,17 L12,11.41422 L13.2929,12.70709 L13.6464,13.06067 C13.8417,13.25592 14.1583,13.25592 14.3536,13.06067 L14.7071,12.70709 L19,8.41422 L19,10.5 C19,10.77615 19.2239,11 19.5,11 L20.5,11 C20.7761,11 21,10.77615 21,10.5 L21,6 L21,5.5 C21,5.223846 20.7761,5 20.5,5 L20,5 L15.5,5 Z"
                                                  id="path0_fill" fill="#333333" fill-rule="nonzero" mask="url(#mask-2)"></path>
                                              </g>
                                            </g>
                                          </g>
                                        </svg></div>
                                      <div class="_199894c6">
                                        <div class="_252cc398 _40f1eb59"><span>Booked 0 times today</span></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
                <section>
                  <div class="f75b57cb">
                    <div class="_796e1726">
                      <h2 class="_050040ce _5ce7f008">Top Cuisines Near You</h2><span></span>
                    </div>
                  </div>
                  <div class="_65705ad6">
                    <div class="bb4cc72b b0839e5c">
                      <div class="_45f61e97" data-correlationid="">
                        <div class="_1e2b81ee">
                          <div class="_2a62300b" data-type="cuisine" data-name="8afc7adc-de3b-439d-91f2-ce568c1a653b"><a
                              href="/s/?covers=2&amp;dateTime=2019-04-27%2019%3A00&amp;latitude=43.85&amp;longitude=-79.02&amp;cuisineids=8afc7adc-de3b-439d-91f2-ce568c1a653b">
                              <div style="background-image:url(//cdn.otstatic.com/start-page-rush-654/8AFC7ADC-DE3B-439D-91F2-CE568C1A653B.jpg)" class="_3e06b544">
                                <h5 class="_7284e3ea _70be0f0d"><span>Best American Restaurants Around You</span></h5>
                              </div>
                            </a></div>
                          <div class="_2a62300b" data-type="cuisine" data-name="73289f47-fe6d-4b16-94ea-f24dc1fdfc26"><a
                              href="/s/?covers=2&amp;dateTime=2019-04-27%2019%3A00&amp;latitude=43.85&amp;longitude=-79.02&amp;cuisineids=73289f47-fe6d-4b16-94ea-f24dc1fdfc26">
                              <div style="background-image:url(//cdn.otstatic.com/start-page-rush-654/73289F47-FE6D-4B16-94EA-F24DC1FDFC26.jpg)" class="_3e06b544">
                                <h5 class="_7284e3ea _70be0f0d"><span>Best Asian Restaurants Around You</span></h5>
                              </div>
                            </a></div>
                          <div class="_2a62300b" data-type="cuisine" data-name="48e9d049-40cf-4cb9-98d9-8c47d0d58986"><a
                              href="/s/?covers=2&amp;dateTime=2019-04-27%2019%3A00&amp;latitude=43.85&amp;longitude=-79.02&amp;cuisineids=48e9d049-40cf-4cb9-98d9-8c47d0d58986">
                              <div style="background-image:url(//cdn.otstatic.com/start-page-rush-654/48E9D049-40CF-4CB9-98D9-8C47D0D58986.jpg)" class="_3e06b544">
                                <h5 class="_7284e3ea _70be0f0d"><span>Best Italian Restaurants Around You</span></h5>
                              </div>
                            </a></div>
                          <div class="_2a62300b" data-type="cuisine" data-name="029cd931-4a83-4572-b87a-2b0ce7abcb1e"><a
                              href="/s/?covers=2&amp;dateTime=2019-04-27%2019%3A00&amp;latitude=43.85&amp;longitude=-79.02&amp;cuisineids=029cd931-4a83-4572-b87a-2b0ce7abcb1e">
                              <div style="background-image:url(//cdn.otstatic.com/start-page-rush-654/029CD931-4A83-4572-B87A-2B0CE7ABCB1E.jpg)" class="_3e06b544">
                                <h5 class="_7284e3ea _70be0f0d"><span>Best Steakhouse Restaurants Around You</span></h5>
                              </div>
                            </a></div>
                          <div class="_2a62300b" data-type="cuisine" data-name="6c913b35-ffd3-498c-93f0-a3e7086ebe25"><a
                              href="/s/?covers=2&amp;dateTime=2019-04-27%2019%3A00&amp;latitude=43.85&amp;longitude=-79.02&amp;cuisineids=6c913b35-ffd3-498c-93f0-a3e7086ebe25">
                              <div style="background-image:url(//cdn.otstatic.com/start-page-rush-654/6C913B35-FFD3-498C-93F0-A3E7086EBE25.jpg)" class="_3e06b544">
                                <h5 class="_7284e3ea _70be0f0d"><span>Best Chinese Restaurants Around You</span></h5>
                              </div>
                            </a></div>
                          <div class="_2a62300b" data-type="cuisine" data-name="e0c16bdd-c1ff-403c-969d-5c446e50f84e"><a
                              href="/s/?covers=2&amp;dateTime=2019-04-27%2019%3A00&amp;latitude=43.85&amp;longitude=-79.02&amp;cuisineids=e0c16bdd-c1ff-403c-969d-5c446e50f84e">
                              <div style="background-image:url(//cdn.otstatic.com/start-page-rush-654/E0C16BDD-C1FF-403C-969D-5C446E50F84E.jpg)" class="_3e06b544">
                                <h5 class="_7284e3ea _70be0f0d"><span>Best Gastro Pub Restaurants Around You</span></h5>
                              </div>
                            </a></div>
                          <div class="_2a62300b" data-type="cuisine" data-name="0f638df5-84ce-4fea-a025-5973fef392d6"><a
                              href="/s/?covers=2&amp;dateTime=2019-04-27%2019%3A00&amp;latitude=43.85&amp;longitude=-79.02&amp;cuisineids=0f638df5-84ce-4fea-a025-5973fef392d6">
                              <div style="background-image:url(//cdn.otstatic.com/start-page-rush-654/0F638DF5-84CE-4FEA-A025-5973FEF392D6.jpg)" class="_3e06b544">
                                <h5 class="_7284e3ea _70be0f0d"><span>Best Latin American Restaurants Around You</span></h5>
                              </div>
                            </a></div>
                          <div class="_2a62300b" data-type="cuisine" data-name="955432df-6ebd-4e08-b569-0be06b2bac2f"><a
                              href="/s/?covers=2&amp;dateTime=2019-04-27%2019%3A00&amp;latitude=43.85&amp;longitude=-79.02&amp;cuisineids=955432df-6ebd-4e08-b569-0be06b2bac2f">
                              <div style="background-image:url(//cdn.otstatic.com/start-page-rush-654/955432DF-6EBD-4E08-B569-0BE06B2BAC2F.jpg)" class="_3e06b544">
                                <h5 class="_7284e3ea _70be0f0d"><span>Best European Restaurants Around You</span></h5>
                              </div>
                            </a></div>
                          <div class="_2a62300b" data-type="cuisine" data-name="38bb060a-2dac-4837-b93f-3124b7b679be"><a
                              href="/s/?covers=2&amp;dateTime=2019-04-27%2019%3A00&amp;latitude=43.85&amp;longitude=-79.02&amp;cuisineids=38bb060a-2dac-4837-b93f-3124b7b679be">
                              <div style="background-image:url(//media.otstatic.com/img/hero_images/hero1-dd3a5f05deb70bb351a7766c2001ad73.jpg)" class="_3e06b544">
                                <h5 class="_7284e3ea _70be0f0d"><span>Best Dining Bar Restaurants Around You</span></h5>
                              </div>
                            </a></div>
                          <div class="_2a62300b" data-type="cuisine" data-name="f9d537b4-fe3f-4f8b-8c7c-e0e0d21829e3"><a
                              href="/s/?covers=2&amp;dateTime=2019-04-27%2019%3A00&amp;latitude=43.85&amp;longitude=-79.02&amp;cuisineids=f9d537b4-fe3f-4f8b-8c7c-e0e0d21829e3">
                              <div style="background-image:url(//cdn.otstatic.com/start-page-rush-654/F9D537B4-FE3F-4F8B-8C7C-E0E0D21829E3.jpg)" class="_3e06b544">
                                <h5 class="_7284e3ea _70be0f0d"><span>Best Canadian Restaurants Around You</span></h5>
                              </div>
                            </a></div>
                          <div class="_2a62300b" data-type="cuisine" data-name="198890b4-395f-4b92-aecd-71d3372419d0"><a
                              href="/s/?covers=2&amp;dateTime=2019-04-27%2019%3A00&amp;latitude=43.85&amp;longitude=-79.02&amp;cuisineids=198890b4-395f-4b92-aecd-71d3372419d0">
                              <div style="background-image:url(//cdn.otstatic.com/start-page-rush-654/198890B4-395F-4B92-AECD-71D3372419D0.jpg)" class="_3e06b544">
                                <h5 class="_7284e3ea _70be0f0d"><span>Best Burgers Restaurants Around You</span></h5>
                              </div>
                            </a></div>
                          <div class="_2a62300b" data-type="cuisine" data-name="8e344800-43c7-4dac-8b56-6c49c460d491"><a
                              href="/s/?covers=2&amp;dateTime=2019-04-27%2019%3A00&amp;latitude=43.85&amp;longitude=-79.02&amp;cuisineids=8e344800-43c7-4dac-8b56-6c49c460d491">
                              <div style="background-image:url(//cdn.otstatic.com/start-page-rush-654/8E344800-43C7-4DAC-8B56-6C49C460D491.jpg)" class="_3e06b544">
                                <h5 class="_7284e3ea _70be0f0d"><span>Best Fusion / Eclectic Restaurants Around You</span></h5>
                              </div>
                            </a></div>
                          <div class="_2a62300b" data-type="cuisine" data-name="c0399c40-bef1-40c2-a7b0-933eb6cde21b"><a
                              href="/s/?covers=2&amp;dateTime=2019-04-27%2019%3A00&amp;latitude=43.85&amp;longitude=-79.02&amp;cuisineids=c0399c40-bef1-40c2-a7b0-933eb6cde21b">
                              <div style="background-image:url(//cdn.otstatic.com/start-page-rush-654/C0399C40-BEF1-40C2-A7B0-933EB6CDE21B.jpg)" class="_3e06b544">
                                <h5 class="_7284e3ea _70be0f0d"><span>Best Comfort Food Restaurants Around You</span></h5>
                              </div>
                            </a></div>
                          <div class="_2a62300b" data-type="cuisine" data-name="e3bbeb10-af3b-407f-85da-7f573623038d"><a
                              href="/s/?covers=2&amp;dateTime=2019-04-27%2019%3A00&amp;latitude=43.85&amp;longitude=-79.02&amp;cuisineids=e3bbeb10-af3b-407f-85da-7f573623038d">
                              <div style="background-image:url(//cdn.otstatic.com/start-page-rush-654/E3BBEB10-AF3B-407F-85DA-7F573623038D.jpg)" class="_3e06b544">
                                <h5 class="_7284e3ea _70be0f0d"><span>Best Global, International Restaurants Around You</span></h5>
                              </div>
                            </a></div>
                          <div class="_2a62300b" data-type="cuisine" data-name="0735c10c-6ab6-46f6-87aa-8fe54397744d"><a
                              href="/s/?covers=2&amp;dateTime=2019-04-27%2019%3A00&amp;latitude=43.85&amp;longitude=-79.02&amp;cuisineids=0735c10c-6ab6-46f6-87aa-8fe54397744d">
                              <div style="background-image:url(//cdn.otstatic.com/start-page-rush-654/0735C10C-6AB6-46F6-87AA-8FE54397744D.jpg)" class="_3e06b544">
                                <h5 class="_7284e3ea _70be0f0d"><span>Best Seafood Restaurants Around You</span></h5>
                              </div>
                            </a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <script>
                window.props = {
                  "translationLanguage": "en",
                  "translationLocale": "en-ca",
                  "experiments": {
                    "rush-2730": 0,
                    "rush-2864": 0,
                    "rush-2038": 0,
                    "rush-1503": 1,
                    "rush-1506": 1,
                    "rush-1976": 2,
                    "rush-2180": 1,
                    "no-more-mdot-it": 0,
                    "no-more-mdot-ca": 1,
                    "rush-2598": 1,
                    "rush-2663": 1,
                    "rush-2734": 1,
                    "rush-2751": 0,
                    "rush-2755": 0,
                    "rush-2897": 0,
                    "rush-2940": 1,
                    "rush-3002": 1,
                    "sfx-895": 0,
                    "rush-1504": 2,
                    "rush-2074": 0,
                    "rush-2044": 0
                  },
                  "macroName": "Durham",
                  "topCuisines": {
                    "id": "top-cuisines",
                    "componentName": "top-cuisines",
                    "title": "Top Cuisines Near You",
                    "cuisines": [{
                      "id": "8afc7adc-de3b-439d-91f2-ce568c1a653b",
                      "name": "American",
                      "count": 80,
                      "imgUrl": "//cdn.otstatic.com/start-page-rush-654/8AFC7ADC-DE3B-439D-91F2-CE568C1A653B.jpg",
                      "imgFallback": "//media.otstatic.com/img/hero_images/hero4-ebbb96b03e7df8fad0867feb63bc57ce.jpg",
                      "cardText": "Best American Restaurants Around You",
                      "targetUrl": "/s/?covers=2&dateTime=2019-04-27%2019%3A00&latitude=43.85&longitude=-79.02&cuisineids=8afc7adc-de3b-439d-91f2-ce568c1a653b"
                    }, {
                      "id": "73289f47-fe6d-4b16-94ea-f24dc1fdfc26",
                      "name": "Asian",
                      "count": 35,
                      "imgUrl": "//cdn.otstatic.com/start-page-rush-654/73289F47-FE6D-4B16-94EA-F24DC1FDFC26.jpg",
                      "imgFallback": "//media.otstatic.com/img/hero_images/hero4-ebbb96b03e7df8fad0867feb63bc57ce.jpg",
                      "cardText": "Best Asian Restaurants Around You",
                      "targetUrl": "/s/?covers=2&dateTime=2019-04-27%2019%3A00&latitude=43.85&longitude=-79.02&cuisineids=73289f47-fe6d-4b16-94ea-f24dc1fdfc26"
                    }, {
                      "id": "48e9d049-40cf-4cb9-98d9-8c47d0d58986",
                      "name": "Italian",
                      "count": 18,
                      "imgUrl": "//cdn.otstatic.com/start-page-rush-654/48E9D049-40CF-4CB9-98D9-8C47D0D58986.jpg",
                      "imgFallback": "//media.otstatic.com/img/hero_images/hero4-ebbb96b03e7df8fad0867feb63bc57ce.jpg",
                      "cardText": "Best Italian Restaurants Around You",
                      "targetUrl": "/s/?covers=2&dateTime=2019-04-27%2019%3A00&latitude=43.85&longitude=-79.02&cuisineids=48e9d049-40cf-4cb9-98d9-8c47d0d58986"
                    }, {
                      "id": "029cd931-4a83-4572-b87a-2b0ce7abcb1e",
                      "name": "Steakhouse",
                      "count": 15,
                      "imgUrl": "//cdn.otstatic.com/start-page-rush-654/029CD931-4A83-4572-B87A-2B0CE7ABCB1E.jpg",
                      "imgFallback": "//media.otstatic.com/img/hero_images/hero1-dd3a5f05deb70bb351a7766c2001ad73.jpg",
                      "cardText": "Best Steakhouse Restaurants Around You",
                      "targetUrl": "/s/?covers=2&dateTime=2019-04-27%2019%3A00&latitude=43.85&longitude=-79.02&cuisineids=029cd931-4a83-4572-b87a-2b0ce7abcb1e"
                    }, {
                      "id": "6c913b35-ffd3-498c-93f0-a3e7086ebe25",
                      "name": "Chinese",
                      "count": 12,
                      "imgUrl": "//cdn.otstatic.com/start-page-rush-654/6C913B35-FFD3-498C-93F0-A3E7086EBE25.jpg",
                      "imgFallback": "//media.otstatic.com/img/hero_images/hero4-ebbb96b03e7df8fad0867feb63bc57ce.jpg",
                      "cardText": "Best Chinese Restaurants Around You",
                      "targetUrl": "/s/?covers=2&dateTime=2019-04-27%2019%3A00&latitude=43.85&longitude=-79.02&cuisineids=6c913b35-ffd3-498c-93f0-a3e7086ebe25"
                    }, {
                      "id": "e0c16bdd-c1ff-403c-969d-5c446e50f84e",
                      "name": "Gastro Pub",
                      "count": 10,
                      "imgUrl": "//cdn.otstatic.com/start-page-rush-654/E0C16BDD-C1FF-403C-969D-5C446E50F84E.jpg",
                      "imgFallback": "//media.otstatic.com/img/hero_images/hero4-ebbb96b03e7df8fad0867feb63bc57ce.jpg",
                      "cardText": "Best Gastro Pub Restaurants Around You",
                      "targetUrl": "/s/?covers=2&dateTime=2019-04-27%2019%3A00&latitude=43.85&longitude=-79.02&cuisineids=e0c16bdd-c1ff-403c-969d-5c446e50f84e"
                    }, {
                      "id": "0f638df5-84ce-4fea-a025-5973fef392d6",
                      "name": "Latin American",
                      "count": 10,
                      "imgUrl": "//cdn.otstatic.com/start-page-rush-654/0F638DF5-84CE-4FEA-A025-5973FEF392D6.jpg",
                      "imgFallback": "//media.otstatic.com/img/hero_images/hero3-de7b79da4154ccc3ed44b515b78ad270.jpg",
                      "cardText": "Best Latin American Restaurants Around You",
                      "targetUrl": "/s/?covers=2&dateTime=2019-04-27%2019%3A00&latitude=43.85&longitude=-79.02&cuisineids=0f638df5-84ce-4fea-a025-5973fef392d6"
                    }, {
                      "id": "955432df-6ebd-4e08-b569-0be06b2bac2f",
                      "name": "European",
                      "count": 8,
                      "imgUrl": "//cdn.otstatic.com/start-page-rush-654/955432DF-6EBD-4E08-B569-0BE06B2BAC2F.jpg",
                      "imgFallback": "//media.otstatic.com/img/hero_images/hero4-ebbb96b03e7df8fad0867feb63bc57ce.jpg",
                      "cardText": "Best European Restaurants Around You",
                      "targetUrl": "/s/?covers=2&dateTime=2019-04-27%2019%3A00&latitude=43.85&longitude=-79.02&cuisineids=955432df-6ebd-4e08-b569-0be06b2bac2f"
                    }, {
                      "id": "38bb060a-2dac-4837-b93f-3124b7b679be",
                      "name": "Dining Bar",
                      "count": 7,
                      "imgUrl": "",
                      "imgFallback": "//media.otstatic.com/img/hero_images/hero1-dd3a5f05deb70bb351a7766c2001ad73.jpg",
                      "cardText": "Best Dining Bar Restaurants Around You",
                      "targetUrl": "/s/?covers=2&dateTime=2019-04-27%2019%3A00&latitude=43.85&longitude=-79.02&cuisineids=38bb060a-2dac-4837-b93f-3124b7b679be"
                    }, {
                      "id": "f9d537b4-fe3f-4f8b-8c7c-e0e0d21829e3",
                      "name": "Canadian",
                      "count": 6,
                      "imgUrl": "//cdn.otstatic.com/start-page-rush-654/F9D537B4-FE3F-4F8B-8C7C-E0E0D21829E3.jpg",
                      "imgFallback": "//media.otstatic.com/img/hero_images/hero3-de7b79da4154ccc3ed44b515b78ad270.jpg",
                      "cardText": "Best Canadian Restaurants Around You",
                      "targetUrl": "/s/?covers=2&dateTime=2019-04-27%2019%3A00&latitude=43.85&longitude=-79.02&cuisineids=f9d537b4-fe3f-4f8b-8c7c-e0e0d21829e3"
                    }, {
                      "id": "198890b4-395f-4b92-aecd-71d3372419d0",
                      "name": "Burgers",
                      "count": 5,
                      "imgUrl": "//cdn.otstatic.com/start-page-rush-654/198890B4-395F-4B92-AECD-71D3372419D0.jpg",
                      "imgFallback": "//media.otstatic.com/img/hero_images/hero2-bc516ca10cf5add15f6bcb092a24fe7a.jpg",
                      "cardText": "Best Burgers Restaurants Around You",
                      "targetUrl": "/s/?covers=2&dateTime=2019-04-27%2019%3A00&latitude=43.85&longitude=-79.02&cuisineids=198890b4-395f-4b92-aecd-71d3372419d0"
                    }, {
                      "id": "8e344800-43c7-4dac-8b56-6c49c460d491",
                      "name": "Fusion / Eclectic",
                      "count": 5,
                      "imgUrl": "//cdn.otstatic.com/start-page-rush-654/8E344800-43C7-4DAC-8B56-6C49C460D491.jpg",
                      "imgFallback": "//media.otstatic.com/img/hero_images/hero4-ebbb96b03e7df8fad0867feb63bc57ce.jpg",
                      "cardText": "Best Fusion / Eclectic Restaurants Around You",
                      "targetUrl": "/s/?covers=2&dateTime=2019-04-27%2019%3A00&latitude=43.85&longitude=-79.02&cuisineids=8e344800-43c7-4dac-8b56-6c49c460d491"
                    }, {
                      "id": "c0399c40-bef1-40c2-a7b0-933eb6cde21b",
                      "name": "Comfort Food",
                      "count": 4,
                      "imgUrl": "//cdn.otstatic.com/start-page-rush-654/C0399C40-BEF1-40C2-A7B0-933EB6CDE21B.jpg",
                      "imgFallback": "//media.otstatic.com/img/hero_images/hero3-de7b79da4154ccc3ed44b515b78ad270.jpg",
                      "cardText": "Best Comfort Food Restaurants Around You",
                      "targetUrl": "/s/?covers=2&dateTime=2019-04-27%2019%3A00&latitude=43.85&longitude=-79.02&cuisineids=c0399c40-bef1-40c2-a7b0-933eb6cde21b"
                    }, {
                      "id": "e3bbeb10-af3b-407f-85da-7f573623038d",
                      "name": "Global, International",
                      "count": 4,
                      "imgUrl": "//cdn.otstatic.com/start-page-rush-654/E3BBEB10-AF3B-407F-85DA-7F573623038D.jpg",
                      "imgFallback": "//media.otstatic.com/img/hero_images/hero1-dd3a5f05deb70bb351a7766c2001ad73.jpg",
                      "cardText": "Best Global, International Restaurants Around You",
                      "targetUrl": "/s/?covers=2&dateTime=2019-04-27%2019%3A00&latitude=43.85&longitude=-79.02&cuisineids=e3bbeb10-af3b-407f-85da-7f573623038d"
                    }, {
                      "id": "0735c10c-6ab6-46f6-87aa-8fe54397744d",
                      "name": "Seafood",
                      "count": 3,
                      "imgUrl": "//cdn.otstatic.com/start-page-rush-654/0735C10C-6AB6-46F6-87AA-8FE54397744D.jpg",
                      "imgFallback": "//media.otstatic.com/img/hero_images/hero3-de7b79da4154ccc3ed44b515b78ad270.jpg",
                      "cardText": "Best Seafood Restaurants Around You",
                      "targetUrl": "/s/?covers=2&dateTime=2019-04-27%2019%3A00&latitude=43.85&longitude=-79.02&cuisineids=0735c10c-6ab6-46f6-87aa-8fe54397744d"
                    }],
                    "visible": true
                  },
                  "dineAgain": {
                    "visible": false,
                    "title": "Dine Again",
                    "restaurants": []
                  },
                  "recommendedRestaurants": {
                    "visible": true,
                    "title": "Popular restaurants in Durham",
                    "correlationId": "7a3c726a-f259-4cce-a09d-4e44a72acda0",
                    "componentName": "recommended-restaurants",
                    "searchResultsUrl": "/s/?latitude=43.85&longitude=-79.02&dateTime=2019-04-26T16%3A15%3A00&covers=2&intersperseavailability=true",
                    "restaurants": [{
                      "rid": 40507,
                      "name": "360 The Restaurant at the CN Tower",
                      "photo": "https://resizer.otstatic.com/v2/photos/medium/25883856.jpg",
                      "rating": 4.3,
                      "reviewsCount": 21182,
                      "price": "$$$$",
                      "neighborhood": "Downtown / Entertainment District",
                      "primaryCuisine": "Continental",
                      "restaurantProfileUrl": "/360-the-restaurant-at-the-cn-tower?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0",
                      "recentReservationCount": 252,
                      "infatuationRating": false,
                      "timeSlots": {
                        "now": "2019-04-26T16:15:00",
                        "lunch": "2019-04-27T12:00:00",
                        "dinner": "2019-04-26T19:00:00"
                      }
                    }, {
                      "rid": 170182,
                      "name": "Miku Restaurant - Toronto",
                      "photo": "https://resizer.otstatic.com/v2/photos/medium/24010766.jpg",
                      "rating": 4.7,
                      "reviewsCount": 1424,
                      "price": "$$$$",
                      "neighborhood": "Downtown / Financial District",
                      "primaryCuisine": "Japanese",
                      "restaurantProfileUrl": "/miku-restaurant-toronto?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0",
                      "recentReservationCount": 114,
                      "infatuationRating": false,
                      "timeSlots": {
                        "now": "2019-04-26T16:15:00",
                        "lunch": "2019-04-27T12:00:00",
                        "dinner": "2019-04-26T19:00:00"
                      }
                    }, {
                      "rid": 1008433,
                      "name": "KŌST",
                      "photo": "https://resizer.otstatic.com/v2/photos/medium/25308963.jpg",
                      "rating": 4.5,
                      "reviewsCount": 676,
                      "price": "$$",
                      "neighborhood": "Downtown / Entertainment District",
                      "primaryCuisine": "Californian",
                      "restaurantProfileUrl": "/restaurant/profile/1008433?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0",
                      "recentReservationCount": 93,
                      "infatuationRating": false,
                      "timeSlots": {
                        "now": "2019-04-26T16:15:00",
                        "lunch": "2019-04-27T12:00:00",
                        "dinner": "2019-04-26T19:00:00"
                      }
                    }, {
                      "rid": 3870,
                      "name": "Canoe Restaurant and Bar",
                      "photo": "https://resizer.otstatic.com/v2/photos/medium/23684405.jpg",
                      "rating": 4.7,
                      "reviewsCount": 4090,
                      "price": "$$$$",
                      "neighborhood": "Downtown / Financial District",
                      "primaryCuisine": "Continental",
                      "restaurantProfileUrl": "/canoe-restaurant-and-bar?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0",
                      "recentReservationCount": 91,
                      "infatuationRating": false,
                      "timeSlots": {
                        "now": "2019-04-26T16:15:00",
                        "lunch": "2019-04-27T12:00:00",
                        "dinner": "2019-04-26T19:00:00"
                      }
                    }, {
                      "rid": 82399,
                      "name": "Café Boulud",
                      "photo": "https://resizer.otstatic.com/v2/photos/medium/24005600.jpg",
                      "rating": 4.5,
                      "reviewsCount": 2204,
                      "price": "$$$",
                      "neighborhood": "Yorkville",
                      "primaryCuisine": "French",
                      "restaurantProfileUrl": "/cafe-boulud?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0",
                      "recentReservationCount": 83,
                      "infatuationRating": false,
                      "timeSlots": {
                        "now": "2019-04-26T16:15:00",
                        "lunch": "2019-04-27T12:00:00",
                        "dinner": "2019-04-26T19:00:00"
                      }
                    }, {
                      "rid": 212452,
                      "name": "Piano Piano",
                      "photo": "https://resizer.otstatic.com/v2/photos/medium/24398097.jpg",
                      "rating": 4.6,
                      "reviewsCount": 1070,
                      "price": "$$$",
                      "neighborhood": "The Annex",
                      "primaryCuisine": "Contemporary Italian",
                      "restaurantProfileUrl": "/r/piano-piano-toronto?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0",
                      "recentReservationCount": 67,
                      "infatuationRating": false,
                      "timeSlots": {
                        "now": "2019-04-26T16:15:00",
                        "lunch": "2019-04-27T12:00:00",
                        "dinner": "2019-04-26T19:00:00"
                      }
                    }, {
                      "rid": 189073,
                      "name": "The Keg Steakhouse + Bar - Ajax",
                      "photo": "https://resizer.otstatic.com/v2/photos/medium/24010688.jpg",
                      "rating": 4.4,
                      "reviewsCount": 625,
                      "price": "$$$",
                      "neighborhood": "Ajax",
                      "primaryCuisine": "Steakhouse",
                      "restaurantProfileUrl": "/the-keg-steakhouse-and-bar-ajax?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0",
                      "recentReservationCount": 14,
                      "infatuationRating": false,
                      "timeSlots": {
                        "now": "2019-04-26T16:15:00",
                        "lunch": "2019-04-27T12:00:00",
                        "dinner": "2019-04-26T19:00:00"
                      }
                    }, {
                      "rid": 846268,
                      "name": "Brothers Ristorante",
                      "photo": "https://resizer.otstatic.com/v2/photos/medium/25545647.jpg",
                      "rating": 4.6,
                      "reviewsCount": 128,
                      "price": "$$",
                      "neighborhood": "Whitby",
                      "primaryCuisine": "Italian",
                      "restaurantProfileUrl": "/r/brothers-ristorante-whitby?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0",
                      "recentReservationCount": 9,
                      "infatuationRating": false,
                      "timeSlots": {
                        "now": "2019-04-26T16:15:00",
                        "lunch": "2019-04-27T12:00:00",
                        "dinner": "2019-04-26T19:00:00"
                      }
                    }, {
                      "rid": 731065,
                      "name": "Moxie's Grill & Bar - Pickering",
                      "photo": "https://resizer.otstatic.com/v2/photos/medium/25056482.jpg",
                      "rating": 4,
                      "reviewsCount": 113,
                      "price": "$$",
                      "neighborhood": "Pickering",
                      "primaryCuisine": "Contemporary American",
                      "restaurantProfileUrl": "/r/moxies-grill-and-bar-pickering?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0",
                      "recentReservationCount": 7,
                      "infatuationRating": false,
                      "timeSlots": {
                        "now": "2019-04-26T16:15:00",
                        "lunch": "2019-04-27T12:00:00",
                        "dinner": "2019-04-26T19:00:00"
                      }
                    }, {
                      "rid": 189127,
                      "name": "The Keg Steakhouse + Bar - Oshawa",
                      "photo": "https://resizer.otstatic.com/v2/photos/medium/24011163.jpg",
                      "rating": 4.6,
                      "reviewsCount": 486,
                      "price": "$$$",
                      "neighborhood": "Oshawa",
                      "primaryCuisine": "Steakhouse",
                      "restaurantProfileUrl": "/the-keg-steakhouse-and-bar-oshawa?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0",
                      "recentReservationCount": 6,
                      "infatuationRating": false,
                      "timeSlots": {
                        "now": "2019-04-26T16:15:00",
                        "lunch": "2019-04-27T12:00:00",
                        "dinner": "2019-04-26T19:00:00"
                      }
                    }, {
                      "rid": 186772,
                      "name": "Jack Astor's - Pickering",
                      "photo": "https://resizer.otstatic.com/v2/photos/medium/25857244.jpg",
                      "rating": 4.2,
                      "reviewsCount": 118,
                      "price": "$$",
                      "neighborhood": "Pickering",
                      "primaryCuisine": "Canadian",
                      "restaurantProfileUrl": "/jack-astors-pickering?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0",
                      "recentReservationCount": 2,
                      "infatuationRating": false,
                      "timeSlots": {
                        "now": "2019-04-26T16:15:00",
                        "lunch": "2019-04-27T12:00:00",
                        "dinner": "2019-04-26T19:00:00"
                      }
                    }, {
                      "rid": 225709,
                      "name": "Boston Pizza - Ajax",
                      "photo": "https://resizer.otstatic.com/v2/photos/medium/25636418.jpg",
                      "rating": 4.4,
                      "reviewsCount": 2,
                      "price": "$$",
                      "neighborhood": "Ajax",
                      "primaryCuisine": "Pizzeria",
                      "restaurantProfileUrl": "/r/boston-pizza-ajax?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0",
                      "recentReservationCount": 1,
                      "infatuationRating": false,
                      "timeSlots": {
                        "now": "2019-04-26T16:15:00",
                        "lunch": "2019-04-27T12:00:00",
                        "dinner": "2019-04-26T19:00:00"
                      }
                    }, {
                      "rid": 213895,
                      "name": "Makimono - Ajax",
                      "photo": "https://resizer.otstatic.com/v2/photos/medium/24333073.jpg",
                      "rating": 4.1,
                      "reviewsCount": 40,
                      "price": "$$",
                      "neighborhood": "Ajax",
                      "primaryCuisine": "Sushi",
                      "restaurantProfileUrl": "/makimono-ajax?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0",
                      "recentReservationCount": 0,
                      "infatuationRating": false,
                      "timeSlots": {
                        "now": "2019-04-26T16:15:00",
                        "lunch": "2019-04-27T12:00:00",
                        "dinner": "2019-04-26T19:00:00"
                      }
                    }, {
                      "rid": 213898,
                      "name": "Makimono - Pickering",
                      "photo": "https://resizer.otstatic.com/v2/photos/medium/24383145.jpg",
                      "rating": 4,
                      "reviewsCount": 69,
                      "price": "$$",
                      "neighborhood": "Pickering",
                      "primaryCuisine": "Sushi",
                      "restaurantProfileUrl": "/makimono-pickering?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0",
                      "recentReservationCount": 0,
                      "infatuationRating": false,
                      "timeSlots": {
                        "now": "2019-04-26T16:15:00",
                        "lunch": "2019-04-27T12:00:00",
                        "dinner": "2019-04-26T19:00:00"
                      }
                    }, {
                      "rid": 1037404,
                      "name": "Cineplex Cinemas Pickering & VIP",
                      "photo": "https://images.otstatic.com/prod/26241792/2/medium.jpg",
                      "rating": 0,
                      "reviewsCount": 0,
                      "price": "$$$",
                      "neighborhood": "Pickering",
                      "primaryCuisine": "American",
                      "restaurantProfileUrl": "/r/cineplex-cinemas-pickering-and-vip-pickering-2?corrid=7a3c726a-f259-4cce-a09d-4e44a72acda0",
                      "recentReservationCount": 0,
                      "infatuationRating": false,
                      "timeSlots": {
                        "now": "2019-04-26T16:15:00",
                        "lunch": "2019-04-27T12:00:00",
                        "dinner": "2019-04-26T19:00:00"
                      }
                    }]
                  },
                  "recentlyViewed": {
                    "visible": false,
                    "title": "Recently viewed",
                    "restaurants": []
                  }
                };
              </script>
              <script src="https://cdn.polyfill.io/v2/polyfill.min.js?features=Promise,Intl.~locale.undefined"></script>
              <script src='//media.otstatic.com/home/index-c454acbf26f92664e7a6e5f8a5bcb693.js._gz'></script>
              <oc-component href="https://oc-registry.opentable.com/v2/oc-featured-international-metros/~1.1.0?domain=ca&lang=en-CA&anonymousId=B0D3778E-8873-42F6-AB28-4B06CBED4A9C" data-hash="8add9102a5dc868ad4c6ac1d68778d69f05b3f23"
                data-name="oc-featured-international-metros" data-rendered="true" data-version="1.1.4">

                <style type="text/css" data-styled-components="gYPLAk bgvdBG dxAiIk ldILAt kSkhkL fxDZZL hIVaKo gbSdby" data-styled-components-is-local="true">
                  /* sc-component-id: app__LocationBox-sc-13odbdr-0 */
                  .app__LocationBox-sc-13odbdr-0 {}

                  .bgvdBG {
                    float: left;
                  }

                  @mediaonly screen and (min-width:25.0625em) and (max-width:40em) {
                    .bgvdBG {
                      width: 50%;
                    }
                  }

                  @mediaonly screen and (min-width:40.0625em) {
                    .bgvdBG {
                      width: 33.33%;
                    }
                  }

                  /* sc-component-id: app__LocationBoxLink-sc-13odbdr-1 */
                  .app__LocationBoxLink-sc-13odbdr-1 {}

                  .dxAiIk {
                    position: relative;
                    overflow: hidden;
                    display: block;
                    text-align: center;
                  }

                  .dxAiIk:hover .location-box-image:after {
                    background-color: rgba(0, 0, 0, 0.3);
                    -webkit-transition: all 500ms ease;
                    transition: all 500ms ease;
                  }

                  /* sc-component-id: app__LocationBoxImage-sc-13odbdr-2 */
                  .app__LocationBoxImage-sc-13odbdr-2 {}

                  .ldILAt {
                    position: relative;
                    background: #222;
                  }

                  .ldILAt img {
                    opacity: 1;
                    position: relative;
                    top: -25%;
                    left: 0;
                    min-width: 100%;
                  }

                  .ldILAt:after {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    display: block;
                    -webkit-transition: all 500ms ease;
                    transition: all 500ms ease;
                    background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0) 100%) rgba(0, 0, 0, 0.3);
                  }

                  /* sc-component-id: app__LocationBoxText-sc-13odbdr-3 */
                  .app__LocationBoxText-sc-13odbdr-3 {}

                  .kSkhkL {
                    text-shadow: 0px 0px 4px rgba(0, 0, 0, 1);
                    margin-top: -24px;
                    padding: 0;
                    position: absolute;
                    text-align: center;
                    top: 50%;
                    width: 100%;
                  }

                  .domain-jp .kSkhkL {
                    margin-top: -12px;
                  }

                  /* sc-component-id: app__LocationBoxName-sc-13odbdr-4 */
                  .app__LocationBoxName-sc-13odbdr-4 {}

                  .fxDZZL {
                    color: #fff;
                    text-shadow: rgba(0, 0, 0, 0.25) 0px 2px 2px;
                  }

                  /* sc-component-id: app__LocationBoxMeta-sc-13odbdr-5 */
                  .app__LocationBoxMeta-sc-13odbdr-5 {}

                  .hIVaKo {
                    color: rgba(255, 255, 255, 0.8);
                    text-shadow: rgba(0, 0, 0, 0.25) 0px 2px 2px;
                  }

                  .domain-jp .hIVaKo {
                    display: none;
                  }

                  /* sc-component-id: app__LocationBoxes-sc-13odbdr-7 */
                  .app__LocationBoxes-sc-13odbdr-7 {}

                  /* sc-component-id: app__LocationList-sc-13odbdr-8 */
                  .app__LocationList-sc-13odbdr-8 {}

                  .gbSdby {
                    clear: both;
                  }
                </style>
                <div>
                  <div id="page-featured-international-metros" class="content-block">
                    <div class="content-block-header">
                      <h3><span>Featured international areas</span></h3>
                    </div>
                    <div class="no-padding content-block-body">
                      <ul class="app__LocationBoxes-sc-13odbdr-7 gYPLAk location-boxes">
                        <li class="app__LocationBox-sc-13odbdr-0 bgvdBG location-box"><a href="/new-york-city-restaurants" class="app__LocationBoxLink-sc-13odbdr-1 dxAiIk">
                            <div class="app__LocationBoxImage-sc-13odbdr-2 ldILAt"><img src="//components.otstatic.com/components/oc-featured-international-metros/1.1.4/assets/img/metros/us-new-york-city.jpg" alt="New York Area" /></div>
                            <div class="app__LocationBoxText-sc-13odbdr-3 kSkhkL">
                              <h4 class="app__LocationBoxName-sc-13odbdr-4 fxDZZL">New York Area, US</h4>
                              <h5 class="app__LocationBoxMeta-sc-13odbdr-5 hIVaKo"><span><span>35,828</span> Restaurants</span></h5>
                            </div>
                          </a></li>
                        <li class="app__LocationBox-sc-13odbdr-0 bgvdBG location-box"><a href="/london-restaurants" class="app__LocationBoxLink-sc-13odbdr-1 dxAiIk">
                            <div class="app__LocationBoxImage-sc-13odbdr-2 ldILAt"><img src="//components.otstatic.com/components/oc-featured-international-metros/1.1.4/assets/img/metros/uk-london.jpg" alt="London" /></div>
                            <div class="app__LocationBoxText-sc-13odbdr-3 kSkhkL">
                              <h4 class="app__LocationBoxName-sc-13odbdr-4 fxDZZL">London, UK</h4>
                              <h5 class="app__LocationBoxMeta-sc-13odbdr-5 hIVaKo"><span><span>10,884</span> Restaurants</span></h5>
                            </div>
                          </a></li>
                        <li class="app__LocationBox-sc-13odbdr-0 bgvdBG location-box"><a href="/tokyo-restaurants" class="app__LocationBoxLink-sc-13odbdr-1 dxAiIk">
                            <div class="app__LocationBoxImage-sc-13odbdr-2 ldILAt"><img src="//components.otstatic.com/components/oc-featured-international-metros/1.1.4/assets/img/metros/jp-tokyo.jpg" alt="Tokyo" /></div>
                            <div class="app__LocationBoxText-sc-13odbdr-3 kSkhkL">
                              <h4 class="app__LocationBoxName-sc-13odbdr-4 fxDZZL">Tokyo, JP</h4>
                              <h5 class="app__LocationBoxMeta-sc-13odbdr-5 hIVaKo"><span><span>4,148</span> Restaurants</span></h5>
                            </div>
                          </a></li>
                        <li class="app__LocationBox-sc-13odbdr-0 bgvdBG location-box"><a href="/berlin-restaurants" class="app__LocationBoxLink-sc-13odbdr-1 dxAiIk">
                            <div class="app__LocationBoxImage-sc-13odbdr-2 ldILAt"><img src="//components.otstatic.com/components/oc-featured-international-metros/1.1.4/assets/img/metros/de-berlin.jpg" alt="Berlin" /></div>
                            <div class="app__LocationBoxText-sc-13odbdr-3 kSkhkL">
                              <h4 class="app__LocationBoxName-sc-13odbdr-4 fxDZZL">Berlin, DE</h4>
                              <h5 class="app__LocationBoxMeta-sc-13odbdr-5 hIVaKo"><span><span>1,874</span> Restaurants</span></h5>
                            </div>
                          </a></li>
                        <li class="app__LocationBox-sc-13odbdr-0 bgvdBG location-box"><a href="/mexico-city-restaurants" class="app__LocationBoxLink-sc-13odbdr-1 dxAiIk">
                            <div class="app__LocationBoxImage-sc-13odbdr-2 ldILAt"><img src="//components.otstatic.com/components/oc-featured-international-metros/1.1.4/assets/img/metros/mx-mexico-city.jpg" alt="Mexico City" /></div>
                            <div class="app__LocationBoxText-sc-13odbdr-3 kSkhkL">
                              <h4 class="app__LocationBoxName-sc-13odbdr-4 fxDZZL">Mexico City, MX</h4>
                              <h5 class="app__LocationBoxMeta-sc-13odbdr-5 hIVaKo"><span><span>1,677</span> Restaurants</span></h5>
                            </div>
                          </a></li>
                        <li class="app__LocationBox-sc-13odbdr-0 bgvdBG location-box"><a href="/sydney-restaurants" class="app__LocationBoxLink-sc-13odbdr-1 dxAiIk">
                            <div class="app__LocationBoxImage-sc-13odbdr-2 ldILAt"><img src="//components.otstatic.com/components/oc-featured-international-metros/1.1.4/assets/img/metros/au-sydney.jpg" alt="Sydney / NSW" /></div>
                            <div class="app__LocationBoxText-sc-13odbdr-3 kSkhkL">
                              <h4 class="app__LocationBoxName-sc-13odbdr-4 fxDZZL">Sydney / NSW, AU</h4>
                              <h5 class="app__LocationBoxMeta-sc-13odbdr-5 hIVaKo"><span><span>1,606</span> Restaurants</span></h5>
                            </div>
                          </a></li>
                      </ul>
                    </div>
                    <div class=" content-block-body">
                      <div class="app__LocationList-sc-13odbdr-8 gbSdby content-block-link-lists">
                        <div class="small-block-grid-2 medium-block-grid-4">
                          <li class="locations-group">
                            <ul class="no-columns">
                              <li><a href="/sydney-restaurants" class="secondary">Sydney / NSW, AU<span> (<span>1,606</span>)</span></a></li>
                              <li><a href="/melbourne-restaurants" class="secondary">Melbourne / VIC, AU<span> (<span>1,237</span>)</span></a></li>
                              <li><a href="/south-east-queensland-restaurants" class="secondary">South East Queensland, AU<span> (<span>500</span>)</span></a></li>
                              <li><a href="/perth-restaurants" class="secondary">Perth / WA, AU<span> (<span>224</span>)</span></a></li>
                              <li><a href="/berlin-restaurants" class="secondary">Berlin, DE<span> (<span>1,874</span>)</span></a></li>
                              <li><a href="/c/munchen-restaurants" class="secondary">Munich, DE<span> (<span>1,726</span>)</span></a></li>
                              <li><a href="/c/raum-hamburg-restaurants" class="secondary">Hamburg Area, DE<span> (<span>777</span>)</span></a></li>
                              <li><a href="/c/raum-frankfurt-restaurants" class="secondary">Frankfurt Area, DE<span> (<span>699</span>)</span></a></li>
                              <li><a href="/c/raum-stuttgart-restaurants" class="secondary">Stuttgart Area, DE<span> (<span>425</span>)</span></a></li>
                              <li><a href="/c/barcelona-restaurants" class="secondary">Barcelona, ES<span> (<span>959</span>)</span></a></li>
                            </ul>
                          </li>
                          <li class="locations-group">
                            <ul class="no-columns">
                              <li><a href="/c/madrid-restaurants" class="secondary">Madrid, ES<span> (<span>812</span>)</span></a></li>
                              <li><a href="/start/?m=3326" class="secondary">Spain, ES<span> (<span>66</span>)</span></a></li>
                              <li><a href="/dublin-restaurants" class="secondary">Dublin, IE<span> (<span>769</span>)</span></a></li>
                              <li><a href="/c/galway-restaurants" class="secondary">Galway, IE<span> (<span>15</span>)</span></a></li>
                              <li><a href="/tokyo-restaurants" class="secondary">Tokyo, JP<span> (<span>4,148</span>)</span></a></li>
                              <li><a href="/kanagawa-restaurants" class="secondary">Kanagawa, JP<span> (<span>277</span>)</span></a></li>
                              <li><a href="/osaka-restaurants" class="secondary">Osaka, JP<span> (<span>149</span>)</span></a></li>
                              <li><a href="/kyoto-restaurants" class="secondary">Kyoto, JP<span> (<span>72</span>)</span></a></li>
                              <li><a href="/nagoya-restaurants" class="secondary">Nagoya, JP<span> (<span>64</span>)</span></a></li>
                              <li><a href="/mexico-city-restaurants" class="secondary">Mexico City, MX<span> (<span>1,677</span>)</span></a></li>
                            </ul>
                          </li>
                          <li class="locations-group">
                            <ul class="no-columns">
                              <li><a href="/c/cancun-restaurants" class="secondary">Cancun, MX<span> (<span>394</span>)</span></a></li>
                              <li><a href="/c/monterrey-restaurants" class="secondary">Monterrey, MX<span> (<span>244</span>)</span></a></li>
                              <li><a href="/los-cabos-restaurants" class="secondary">Baja California Sur, MX<span> (<span>175</span>)</span></a></li>
                              <li><a href="/london-restaurants" class="secondary">London, UK<span> (<span>10,884</span>)</span></a></li>
                              <li><a href="/yorkshire-restaurants" class="secondary">Yorkshire, UK<span> (<span>1,031</span>)</span></a></li>
                              <li><a href="/edinburgh-restaurants" class="secondary">Edinburgh, UK<span> (<span>965</span>)</span></a></li>
                              <li><a href="/kent-restaurants" class="secondary">Kent, UK<span> (<span>857</span>)</span></a></li>
                              <li><a href="/manchester-restaurants" class="secondary">Manchester, UK<span> (<span>705</span>)</span></a></li>
                              <li><a href="/glasgow-restaurants" class="secondary">Glasgow, UK<span> (<span>641</span>)</span></a></li>
                              <li><a href="/surrey-restaurants" class="secondary">Surrey, UK<span> (<span>482</span>)</span></a></li>
                            </ul>
                          </li>
                          <li class="locations-group">
                            <ul class="no-columns">
                              <li><a href="/new-york-city-restaurants" class="secondary">New York Area, US<span> (<span>35,828</span>)</span></a></li>
                              <li><a href="/los-angeles-restaurants" class="secondary">Los Angeles, US<span> (<span>12,334</span>)</span></a></li>
                              <li><a href="/boston-restaurants" class="secondary">New England, US<span> (<span>12,242</span>)</span></a></li>
                              <li><a href="/chicago-restaurants" class="secondary">Chicago, US<span> (<span>12,057</span>)</span></a></li>
                              <li><a href="/san-francisco-restaurants" class="secondary">San Francisco, US<span> (<span>10,392</span>)</span></a></li>
                              <li><a href="/philadelphia-restaurants" class="secondary">Philadelphia, US<span> (<span>9,633</span>)</span></a></li>
                              <li><a href="/miami-restaurants" class="secondary">Miami, US<span> (<span>7,569</span>)</span></a></li>
                              <li><a href="/seattle-restaurants" class="secondary">Seattle, US<span> (<span>6,922</span>)</span></a></li>
                              <li><a href="/atlanta-restaurants" class="secondary">Atlanta, US<span> (<span>6,919</span>)</span></a></li>
                              <li><a href="/dallas-restaurants" class="secondary">Dallas, US<span> (<span>6,316</span>)</span></a></li>
                            </ul>
                          </li>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <script>
                  window.oc = window.oc || {};
                  oc.renderedComponents = oc.renderedComponents || {};
                  oc.renderedComponents["oc-featured-international-metros"] = "1.1.4";
                </script>
              </oc-component>
              <div class="google-ad" id="div-gpt-ad-1543258230638-0"></div>
              <script>
                googletag.cmd.push(function() {
                  googletag.display('div-gpt-ad-1543258230638-0');
                });
              </script>
              <oc-component href="https://oc-registry.opentable.com/v2/oc-featured-metros/~1.1.0?domain=ca&lang=en-CA&anonymousId=B0D3778E-8873-42F6-AB28-4B06CBED4A9C" data-hash="8add9102a5dc868ad4c6ac1d68778d69f05b3f23"
                data-name="oc-featured-metros" data-rendered="true" data-version="1.1.3">
                <style type="text/css" data-styled-components="kWPzVY dbULYO hGIHQL eSYQlj kDWZjM lkPViO jEaeTX cwHjeV" data-styled-components-is-local="true">
                  /* sc-component-id: app__LocationBox-fosldn-0 */
                  .app__LocationBox-fosldn-0 {}

                  .dbULYO {
                    float: left;
                  }

                  @mediaonly screen and (min-width:25.0625em) and (max-width:40em) {
                    .dbULYO {
                      width: 50%;
                    }
                  }

                  @mediaonly screen and (min-width:40.0625em) {
                    .dbULYO {
                      width: 33.33%;
                    }
                  }

                  /* sc-component-id: app__LocationBoxLink-fosldn-1 */
                  .app__LocationBoxLink-fosldn-1 {}

                  .hGIHQL {
                    position: relative;
                    overflow: hidden;
                    display: block;
                    text-align: center;
                  }

                  .hGIHQL:hover .location-box-image:after {
                    background-color: rgba(0, 0, 0, 0.3);
                    -webkit-transition: all 500ms ease;
                    transition: all 500ms ease;
                  }

                  /* sc-component-id: app__LocationBoxImage-fosldn-4 */
                  .app__LocationBoxImage-fosldn-4 {}

                  .eSYQlj {
                    position: relative;
                    background: #222;
                  }

                  .eSYQlj img {
                    opacity: 1;
                    position: relative;
                    top: -25%;
                    left: 0;
                    min-width: 100%;
                  }

                  .eSYQlj:after {
                    content: '';
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    display: block;
                    -webkit-transition: all 500ms ease;
                    transition: all 500ms ease;
                    background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0) 100%) rgba(0, 0, 0, 0.3);
                  }

                  /* sc-component-id: app__LocationBoxText-fosldn-5 */
                  .app__LocationBoxText-fosldn-5 {}

                  .kDWZjM {
                    z-index: 1;
                    text-shadow: 0px 0px 4px rgba(0, 0, 0, 1);
                    margin-top: -24px;
                    padding: 0;
                    position: absolute;
                    text-align: center;
                    top: 50%;
                    width: 100%;
                  }

                  .domain-jp .kDWZjM {
                    margin-top: -12px;
                  }

                  /* sc-component-id: app__LocationBoxName-fosldn-6 */
                  .app__LocationBoxName-fosldn-6 {}

                  .lkPViO {
                    color: #fff;
                    text-shadow: rgba(0, 0, 0, 0.25) 0px 2px 2px;
                  }

                  /* sc-component-id: app__LocationBoxMeta-fosldn-7 */
                  .app__LocationBoxMeta-fosldn-7 {}

                  .jEaeTX {
                    color: rgba(255, 255, 255, 0.8);
                    text-shadow: rgba(0, 0, 0, 0.25) 0px 2px 2px;
                  }

                  .domain-jp .jEaeTX {
                    display: none;
                  }

                  /* sc-component-id: app__LocationBoxes-fosldn-9 */
                  .app__LocationBoxes-fosldn-9 {}

                  /* sc-component-id: app__LocationList-fosldn-10 */
                  .app__LocationList-fosldn-10 {}

                  .cwHjeV {
                    clear: both;
                  }
                </style>
                <div>
                  <div id="page-featured-metros" class="content-block">
                    <div class="content-block-header">
                      <h3><span>Featured Areas</span></h3>
                    </div>
                    <div class="no-padding content-block-body">
                      <div class="app__LocationBoxes-fosldn-9 kWPzVY"></div>
                    </div>
                    <div class=" content-block-body">
                      <div class="app__LocationList-fosldn-10 cwHjeV content-block-link-lists">
                        <div class="small-block-grid-2 medium-block-grid-4">
                          <li class="locations-group">
                            <ul class="no-columns">
                              <li><a href="/nova-scotia-restaurants" class="secondary">Atlantic Canada<span> (<span>1,055</span>)</span></a></li>
                              <li><a href="/calgary-restaurants" class="secondary">Calgary<span> (<span>1,470</span>)</span></a></li>
                            </ul>
                          </li>
                          <li class="locations-group">
                            <ul class="no-columns">
                              <li><a href="/edmonton-restaurants" class="secondary">Edmonton<span> (<span>1,067</span>)</span></a></li>
                              <li><a href="/winnipeg-restaurants" class="secondary">Manitoba<span> (<span>510</span>)</span></a></li>
                            </ul>
                          </li>
                          <li class="locations-group">
                            <ul class="no-columns">
                              <li><a href="/montreal-restaurants" class="secondary">Montreal<span> (<span>3,954</span>)</span></a></li>
                              <li><a href="/c/ottawa-restaurants" class="secondary">Ottawa<span> (<span>1,004</span>)</span></a></li>
                            </ul>
                          </li>
                          <li class="locations-group">
                            <ul class="no-columns">
                              <li><a href="/c/saskatoon-restaurants" class="secondary">Saskatoon<span> (<span>522</span>)</span></a></li>
                              <li><a href="/toronto-restaurants" class="secondary">Toronto<span> (<span>7,408</span>)</span></a></li>
                            </ul>
                          </li>
                          <li class="locations-group">
                            <ul class="no-columns">
                              <li><a href="/vancouver-restaurants" class="secondary">Vancouver<span> (<span>4,577</span>)</span></a></li>
                              <li><a href="/c/yukon-restaurants" class="secondary">Yukon<span> (<span>7</span>)</span></a></li>
                            </ul>
                          </li>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <script>
                  window.oc = window.oc || {};
                  oc.renderedComponents = oc.renderedComponents || {};
                  oc.renderedComponents["oc-featured-metros"] = "1.1.3";
                </script>
              </oc-component>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
<style>
  .footer-base .affiliate-logo.logo-kayak {
    width: 91px !important
  }

  .footer-base .priceline-links {
    margin-top: 16px
  }

  #truste_banners {
    position: fixed;
    bottom: 0;
    width: 100%;
    max-width: 100rem;
    display: flex;
    flex-direction: column-reverse;
    z-index: 999
  }

  #truste_banners #truste-consent-track {
    position: static;
    bottom: auto
  }

  #truste-consent-content .truste-button2,
  #truste-consent-content .truste-messageColumn,
  #truste-consent-content2 .truste-messageColumn2,
  #truste-consent-content2 .truste-please-note {
    font-family: source-sans-pro, "Source Sans Pro", "Helvetica Neue", Helvetica, Arial, sans-serif
  }

  #truste-consent-content .truste-button2 {
    display: inline-block;
    width: auto
  }

  #truste-consent-track,
  #truste-consent-track2 {
    background: rgba(51, 51, 51, .95) !important;
    z-index: 999
  }

  #truste-consent-content .truste-buttonsColumn {
    margin: 0
  }

  #truste-consent-content .truste-messageColumn {
    margin: 23px 0
  }

  @mediascreen and (min-width:1025px) {
    #truste-consent-content .truste-messageColumn {
      margin: 23px 15px
    }
  }

  .footer-link-social {
    float: left;
    margin-right: 8px;
    margin-bottom: 8px;
    height: 24px
  }

  @mediascreen and (min-width:641px) and (max-width:1024px) {
    .footer-link-social {
      margin-right: 4px;
      margin-bottom: 4px
    }
  }

  .footer-link-social svg {
    width: 24px;
    height: 24px
  }

  .footer-link-social .social-icon-cutout {
    fill: #acacac
  }

  .footer-link-social:hover .social-icon-cutout {
    fill: #fff
  }

  .footer-link-social:last-child {
    margin-right: 0
  }

  .footer-block a {
    cursor: pointer
  }
</style>
<style>
  .footer-base .affiliate-logo {
    background-image: url(//components.otstatic.com/components/footer/1.0.119/img/affiliate_logos.png) !important;
  }
</style>
<div id="footer" role="contentinfo" class="footer-container">
  <div class="max-width-wrapper">
    <div class="footer-content-container">
      <div class="footer-block">
        <h6>Discover</h6>
        <ul>
          <li><a onclick="onLinkClick('https://help.opentable.com/s/topic/0TO0c000000c8AIGAY/dining-rewards-points?language=en_US&amp;tabset-98c6e=2')">Dining Rewards</a></li>
          <li></li>
          <li><a href="https://www.opentable.com/m/best-restaurants-in-canada-for-2017/">Top 100 Restaurants</a></li>
          <li></li>
          <li><a onclick="onLinkClick('https://help.opentable.com/s/article/How-do-I-make-reservations-for-others-with-an-Administrative-Professional-Account-1505261764797?language=en_US')">Reserve for Others</a></li>
          <li></li>
        </ul>
      </div>
      <div class="footer-block">
        <h6>OpenTable</h6>
        <ul>
          <li><a href="https://www.opentable.com/about/">About Us</a></li>
          <li><a onclick="onLinkClick('https://blog.opentable.com')">Blog</a></li>
          <li><a href="https://www.opentable.com/careers/">Careers</a></li>
          <li><a onclick="onLinkClick('http://press.opentable.com')">Press</a></li>
        </ul>
      </div>
      <div class="footer-block">
        <h6>More</h6>
        <ul>
          <li><a href="https://opentable.tlnk.io/serve?action=click&amp;publisher_id=354661&amp;site_id=13216&amp;my_site=ca&amp;my_keyword=en" target="_blank">OpenTable for iOS</a></li>
          <li><a href="https://jjb-o.tlnk.io/serve?action=click&amp;publisher_id=354661&amp;site_id=13212&amp;my_site=ca&amp;my_keyword=en" target="_blank">OpenTable for Android</a></li>
          <li><a onclick="onLinkClick('https://dev.opentable.com')">Affiliate Program</a></li>
          <li><a onclick="onLinkClick('https://help.opentable.com/s/?language=en_US')">Contact Us</a></li>
        </ul>
      </div>
      <div class="footer-block">
        <h6>Our Sites</h6>
        <ul>
          <li></li>
          <li><a href="https://www.opentable.com">OpenTable.com</a></li>
          <li><a href="https://www.opentable.jp">OpenTable.jp</a></li>
          <li><a href="https://www.opentable.de">OpenTable.de</a></li>
          <li><a href="https://www.opentable.es">OpenTable.es</a></li>
          <li><a href="https://www.opentable.com.mx">OpenTable.com.mx</a></li>
          <li><a href="https://www.opentable.hk">OpenTable.hk</a></li>
          <li><a href="https://www.opentable.ie">OpenTable.ie</a></li>
          <li><a href="https://www.opentable.sg">OpenTable.sg</a></li>
          <li><a href="https://www.opentable.nl">OpenTable.nl</a></li>
          <li><a href="https://www.opentable.co.uk">OpenTable.co.uk</a></li>
          <li><a href="https://www.opentable.com.au">OpenTable.com.au</a></li>
          <li><a href="https://www.opentable.ae">OpenTable.ae</a></li>
          <li><a href="https://www.opentable.co.th">OpenTable.co.th</a></li>
          <li><a href="https://www.opentable.it">OpenTable.it</a></li>
        </ul>
      </div>
      <div class="footer-block">
        <h6>Restaurateurs</h6><a onclick="onLinkClick('https://restaurant.opentable.com/get-started/?utm_source=dinersite&amp;utm_medium=referral&amp;utm_campaign=footer&amp;Lead.LeadSource=DinerSite&amp;Lead.Marketing_ID__c=Footer')"
          class="button small with-arrow text-arrow-right">Delight more diners</a><a onclick="onLinkClick('https://openforbusiness.opentable.com')" class="button small with-arrow text-arrow-right">Open for Business Blog</a>
        <h6>Join us on</h6>
        <div class="footer-social-links"><a onclick="onLinkClick('https://twitter.com/opentablecanada')" title="twitter" class="footer-link-social"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g class="social-icon-cutout" transform="translate(-67.000000, -79.000000)" fill="#D8D8D8">
                  <path
                    d="M79,103 C72.372583,103 67,97.627417 67,91 C67,84.372583 72.372583,79 79,79 C85.627417,79 91,84.372583 91,91 C91,97.627417 85.627417,103 79,103 Z M76.40272,97.375 C81.68576,97.375 84.57536,92.9983565 84.57536,89.202951 C84.57536,89.07864 84.57536,88.954889 84.56696,88.8316979 C85.1291056,88.4251173 85.6143591,87.9216961 86,87.3450054 C85.4757723,87.5772776 84.9196644,87.7296016 84.35024,87.7968927 C84.9498566,87.4379486 85.3986292,86.8733918 85.61304,86.2082876 C85.0492082,86.5428384 84.4323618,86.7786131 83.78912,86.9054372 C82.8987664,85.9587664 81.4840028,85.7270654 80.3381476,86.3402588 C79.1922923,86.9534522 78.600314,88.2590417 78.89416,89.5249277 C76.5846616,89.4091558 74.4329064,88.318396 72.9744,86.5241048 C72.2120287,87.8364509 72.6014332,89.5153297 73.86368,90.3581475 C73.4065751,90.3446007 72.9594364,90.2213007 72.56,89.9986535 C72.56,90.0104126 72.56,90.0227317 72.56,90.0350508 C72.5603742,91.402244 73.5241808,92.5798065 74.8644,92.8505272 C74.441527,92.9658453 73.9978451,92.9827025 73.56744,92.8998037 C73.9437308,94.0697958 75.0220818,94.8713 76.25096,94.8943794 C75.2338516,95.6936835 73.9773933,96.1275937 72.68376,96.1262903 C72.455226,96.1258516 72.2269143,96.1120155 72,96.0848533 C73.3135561,96.9277472 74.8419515,97.3748415 76.40272,97.3727602 L76.40272,97.375 Z"
                    id="twitter"></path>
                </g>
              </g>
            </svg><img alt="twitter" class="hide" /></a><a onclick="onLinkClick('https://www.facebook.com/opentable')" title="facebook" class="footer-link-social"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g class="social-icon-cutout" transform="translate(-99.000000, -79.000000)" fill="#D8D8D8">
                  <path
                    d="M111,103 C104.372583,103 99,97.627417 99,91 C99,84.372583 104.372583,79 111,79 C117.627417,79 123,84.372583 123,91 C123,97.627417 117.627417,103 111,103 Z M111.128985,99 L111.128985,92.1664955 L113.465487,92.1664955 L113.81612,89.4929198 L111.128985,89.4929198 L111.128985,87.7880309 C111.128985,87.0130814 111.345968,86.4892156 112.470194,86.4892156 L113.894737,86.4892156 L113.894737,84.1039211 C113.200025,84.0327917 112.501967,83.9981284 111.80352,84.0000779 C109.739033,84.0000779 108.325496,85.239997 108.325496,87.5245481 L108.325496,89.4929198 L106,89.4929198 L106,92.1664955 L108.328641,92.1664955 L108.328641,99 L111.128985,99 Z"
                    id="facebook"></path>
                </g>
              </g>
            </svg><img alt="facebook" class="hide" /></a><a onclick="onLinkClick('https://www.linkedin.com/company/opentable')" title="linkedin" class="footer-link-social"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g class="social-icon-cutout" transform="translate(-163.000000, -79.000000)" fill="#D8D8D8">
                  <path
                    d="M175,103 C168.372583,103 163,97.627417 163,91 C163,84.372583 168.372583,79 175,79 C181.627417,79 187,84.372583 187,91 C187,97.627417 181.627417,103 175,103 Z M182,97 L182,92.2691991 C182,89.9454731 181.493447,88.16 178.748516,88.16 C177.429853,88.16 176.546684,88.8749926 176.18428,89.5528297 L176.14672,89.5528297 L176.14672,88.3738953 L173.55,88.3738953 L173.55,97 L176.25737,97 L176.25737,92.733141 C176.25737,91.6084335 176.472579,90.5178689 177.881589,90.5178689 C179.272327,90.5178689 179.290599,91.8042531 179.290599,92.8044394 L179.290599,97 L182,97 Z M170.561511,87.12 C171.420846,87.12 172.12,86.420846 172.12,85.5594963 C172.12,84.699154 171.420846,84 170.561511,84 C169.697139,84 169,84.699154 169,85.5594963 C169,86.420846 169.697139,87.12 170.561511,87.12 Z M169.26,97 L171.99,97 L171.99,88.29 L169.26,88.29 L169.26,97 Z"
                    id="linkedin"></path>
                </g>
              </g>
            </svg><img alt="linkedin" class="hide" /></a><a onclick="onLinkClick('https://www.instagram.com/opentable')" title="instagram" class="footer-link-social"><svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1"
              xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g class="social-icon-cutout" transform="translate(-195.000000, -79.000000)" fill="#D8D8D8">
                  <path
                    d="M207,103 C200.372583,103 195,97.627417 195,91 C195,84.372583 200.372583,79 207,79 C213.627417,79 219,84.372583 219,91 C219,97.627417 213.627417,103 207,103 Z M207.000014,84 C205.098914,84 204.860533,84.0080581 204.113909,84.0421244 C203.368841,84.0761073 202.859986,84.1944502 202.414734,84.3675048 C201.954422,84.5463668 201.564049,84.7857201 201.174871,85.1748706 C200.78572,85.564049 200.546367,85.9544221 200.367505,86.414734 C200.19445,86.8599856 200.076107,87.3688406 200.042124,88.113909 C200.008058,88.8605334 200,89.0989141 200,91.0000139 C200,92.9010859 200.008058,93.1394666 200.042124,93.886091 C200.076107,94.6311594 200.19445,95.1400144 200.367505,95.585266 C200.546367,96.0455779 200.78572,96.435951 201.174871,96.8251294 C201.564049,97.2142799 201.954422,97.4536332 202.414734,97.632523 C202.859986,97.8055498 203.368841,97.9238927 204.113909,97.9578756 C204.860533,97.9919419 205.098914,98 207.000014,98 C208.901086,98 209.139467,97.9919419 209.886091,97.9578756 C210.631159,97.9238927 211.140014,97.8055498 211.585266,97.632523 C212.045578,97.4536332 212.435951,97.2142799 212.825129,96.8251294 C213.21428,96.435951 213.453633,96.0455779 213.632523,95.585266 C213.80555,95.1400144 213.923893,94.6311594 213.957876,93.886091 C213.991942,93.1394666 214,92.9010859 214,91.0000139 C214,89.0989141 213.991942,88.8605334 213.957876,88.113909 C213.923893,87.3688406 213.80555,86.8599856 213.632523,86.414734 C213.453633,85.9544221 213.21428,85.564049 212.825129,85.1748706 C212.435951,84.7857201 212.045578,84.5463668 211.585266,84.3675048 C211.140014,84.1944502 210.631159,84.0761073 209.886091,84.0421244 C209.139467,84.0080581 208.901086,84 207.000014,84 Z M207.000014,85.261259 C208.869076,85.261259 209.090479,85.2684002 209.828601,85.3020774 C210.511094,85.3331984 210.881738,85.4472343 211.1284,85.5430979 C211.455142,85.6700824 211.688326,85.8217692 211.933265,86.0667353 C212.178231,86.3116737 212.329918,86.5448584 212.456902,86.8716004 C212.552766,87.1182615 212.666802,87.4889062 212.697923,88.1713993 C212.7316,88.9095211 212.738741,89.1309242 212.738741,91.0000139 C212.738741,92.8690758 212.7316,93.0904789 212.697923,93.8286007 C212.666802,94.5110938 212.552766,94.8817385 212.456902,95.1283996 C212.329918,95.4551416 212.178231,95.6883263 211.933265,95.9332647 C211.688326,96.1782308 211.455142,96.3299176 211.1284,96.4569021 C210.881738,96.5527657 210.511094,96.6668016 209.828601,96.6979226 C209.09059,96.7315998 208.869215,96.738741 207.000014,96.738741 C205.130785,96.738741 204.909438,96.7315998 204.171399,96.6979226 C203.488906,96.6668016 203.118262,96.5527657 202.8716,96.4569021 C202.544858,96.3299176 202.311674,96.1782308 202.066735,95.9332647 C201.821797,95.6883263 201.670082,95.4551416 201.543098,95.1283996 C201.447234,94.8817385 201.333198,94.5110938 201.302077,93.8286007 C201.2684,93.0904789 201.261259,92.8690758 201.261259,91.0000139 C201.261259,89.1309242 201.2684,88.9095211 201.302077,88.1713993 C201.333198,87.4889062 201.447234,87.1182615 201.543098,86.8716004 C201.670082,86.5448584 201.821769,86.3116737 202.066735,86.0667353 C202.311674,85.8217692 202.544858,85.6700824 202.8716,85.5430979 C203.118262,85.4472343 203.488906,85.3331984 204.171399,85.3020774 C204.909521,85.2684002 205.130924,85.261259 207.000014,85.261259 Z M207.000014,93.3333333 C205.71133,93.3333333 204.666667,92.2886704 204.666667,91.0000139 C204.666667,89.7113296 205.71133,88.6666667 207.000014,88.6666667 C208.28867,88.6666667 209.333333,89.7113296 209.333333,91.0000139 C209.333333,92.2886704 208.28867,93.3333333 207.000014,93.3333333 Z M207.000014,87.4054077 C205.014749,87.4054077 203.405408,89.0147487 203.405408,91.0000139 C203.405408,92.9852513 205.014749,94.5945923 207.000014,94.5945923 C208.985251,94.5945923 210.594592,92.9852513 210.594592,91.0000139 C210.594592,89.0147487 208.985251,87.4054077 207.000014,87.4054077 Z M211.576624,87.2633906 C211.576624,86.7994665 211.200534,86.4233756 210.736609,86.4233756 C210.272713,86.4233756 209.896622,86.7994665 209.896622,87.2633906 C209.896622,87.7273148 210.272713,88.1033779 210.736609,88.1033779 C211.200534,88.1033779 211.576624,87.7273148 211.576624,87.2633906 Z"
                    id="instagram"></path>
                </g>
              </g>
            </svg><img alt="instagram" class="hide" /></a></div>
      </div>
    </div>
    <div class="footer-content-container">
      <div class="footer-base"><a href="/legal/privacy-policy" class="footer-base-link">Privacy Policy</a><a href="/legal/terms-and-conditions" class="footer-base-link">Terms of Use</a><a href="/legal/cookie-policy" class="footer-base-link">Cookies
          and Interest-Based Ads</a><br /><span class="footer-copyright">Copyright © 2019 OpenTable, Inc. 1 Montgomery St, Suite 700, San Francisco CA 94104 - All rights reserved.</span></div>
      <div class="footer-base ot-affiliates"><span>OpenTable is part of Booking Holdings, the world leader in online travel and related services.</span><br />
        <div class="priceline-links">
          <div class="affiliate-logo logo-booking"></div>
          <div class="affiliate-logo logo-priceline"></div>
          <div class="affiliate-logo logo-kayak"></div>
          <div class="affiliate-logo logo-agodo"></div>
          <div class="affiliate-logo logo-rentalcars"></div>
          <div class="affiliate-logo logo-opentable"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  window.OT = window.OT || {};
  window.OT.SRS = window.OT.SRS || {};
  var onLinkClick = function(url) {
    window.open(url, '_blank');
  }
</script>

<script async="async" src="//consent.truste.com/notice?domain=opentable.com&amp;c=teconsent&amp;js=bb&amp;noticeType=bb&amp;text=true" crossorigin="localhost"></script>

<script>
  window.oc = window.oc || {};
  oc.renderedComponents = oc.renderedComponents || {};
  oc.renderedComponents["footer"] = "1.0.119";
</script>

<div class="footer-system-info SystemInfo global-footer-system-info" id="global-footer-system-info">

  <script>
    (function() {
      // innerText is IE, textContent is everyone else
      // http://www.quirksmode.org/dom/w3c_html.html
      // http://stackoverflow.com/a/11646618
      function setText(el, content) {
        var text = ('innerText' in el) ? 'innerText' : 'textContent';
        el[text] = content;
      }

      // getElementById has IE support, getElementsByClassName doesn't.
      // http://quirksmode.org/dom/core/
      var el = document.getElementById('global-footer-system-info');
      if (el) {
        setText(el, "(Build Version:start-page-docker_teamcity_2.0.9536.prod-sc) (Machine Name:mesos-slave133-prod-sc.otsql.opentable.com:31033) (Request ID:d0f6b200-0d8f-43cb-bfd5-f945cdc9c2d1)");
      }
    })();
  </script>
</div>

<script id="marketing-data-layer-scripts">
  window.OT = window.OT || {};
  window.OT.MarketingDataLayer = {
    "page_name": "home",
    "language": "en-CA",
    "current_date": "2019-04-26T20:07:00Z",
    "day_type": "weekday",
    "logged_in_status": "logged_out"
  };
</script>


<script id="srs-scripts">
  window.OT = window.OT || {};
  window.OT.SRS = window.OT.SRS || {};

  window.OT.SRS.appcuesAccountId = 43830;
  window.OT.SRS.calendarStartsSunday = true;
  window.OT.SRS.dateFormatJS = "mmm d, yyyy";
  window.OT.SRS.disableAppcues = false;
  window.OT.SRS.disableRecaptchaV3 = true;
  window.OT.SRS.disableSignal = false;
  window.OT.SRS.jsVersion = "1.5.7";
  window.OT.SRS.location = "//components.otstatic.com/components/js/1.5.7/";
  window.OT.SRS.recaptchaV3Key = "6Ldcf5gUAAAAANNm2f66Vs0s7G5muVGh9j17Neex";
  window.OT.SRS.secure_domain = "www.opentable.ca";
  window.OT.SRS.srsUrl = "//na-srs.opentable.com";
  window.OT.SRS.timeFormatJS = "h:mm A";
  window.OT.SRS.today = "Today";
  window.OT.SRS.tomorrow = "Tomorrow";
  window.OT.SRS.datePickerLocalization = null;
  window.OT.SRS.brightTagSrc = "//srsv2.s3.amazonaws.com/components/js/1.5.7/min/brighttag.html";
  window.abGlobal10Variant = 0;
</script>

<script src="//components.otstatic.com/components/js/1.5.7/min/bundle_common.js" crossorigin="anonymous">
</script>

<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJTRF6F" height="0" width="0" display="none" visibility="hidden"></iframe>
</noscript>

<script>
  window.oc = window.oc || {};
  oc.renderedComponents = oc.renderedComponents || {};
  oc.renderedComponents["js"] = "1.5.7";
</script>
</div>

<script src='//media.otstatic.com/js/application-09a398984f6091b33e46e600e764d167.js._gz'></script>

<script src='//media.otstatic.com/js/menus-helper-cab12732f58e3fa9345c24f40a1242ab.js._gz'></script>

<script src='//media.otstatic.com/javascripts/experiments/customGoals-ab31bf6bbfd9c47ab58b068b18683a6f.js._gz'></script>
<script src='//media.otstatic.com/javascripts/experiments/rush-1976-1b5c2bad571ccf12f684acea491dfaf0.js._gz'></script>
<script src="//media.otstatic.com/search-autocomplete-client/js/one-box-search-13.6.0.min.js" type="text/javascript"></script>
{{-- <script>if(OTExperiments['rush-3002']) {
                  OT.Common.Appcues.init({lang: 'en'});
                }

                OTAutocomplete.updatedSearchParameters = {};

                OT.Events.on("dtp:change", function(_, data) {
                  OTAutocomplete.updatedSearchParameters = data;
                });

                OT.Events.on('dtp:rendered', function(e, dtp) {
                  var autoArgs = {"disableFreetext":false,"disableCuisines":false,"disableEmpty":false,"domainId":8,"disableLanguageInPath":true,"latitude":43.85,"locationFormat":"C","longitude":-79.02,"selector":"#dtp-search-single-box","redirectSingleToMulti":true,"metroId":74,"macroId":1537};
                  if (OTExperiments['sfx-895'])
                  autoArgs.onSelect = function() {
                    window.search.submit({
                      dtp: {
                        covers: OTAutocomplete.updatedSearchParameters.covers,
                        datetime: OTAutocomplete.updatedSearchParameters.datetime
                      }
                    })
                  };
                  window.search = OTAutocomplete.init(_.extend(
                    autoArgs,
                    {
                      covers: dtp.covers,
                      dateTime: dtp.datetime
                    },
                    {"IsSpecialOffersOnlyVisible":false,"disableInstructions":true,"freetext":false,"placesAutocomplete":false,"restaurantLocationName":"N,MN","path":"/autocomplete/v1/autocomplete","disableAddresses":false,"showAddressesToolTip":false}
                  ));

                  OT.Events.on('dtp:search', function(e, dtp) {
                    window.search.submit({ dtp: dtp });
                  });
                });

                document.getElementById("dtp-search-single-box").value = 'Durham';
              </script> --}}

<script>
  window.oc = window.oc || {};
  oc.renderedComponents = oc.renderedComponents || {};
  oc.renderedComponents["advert"] = "2.0.8";
</script>



<script type="text/javascript">
  //   $( "#send_data" ).click(function() {
  //     var city = $("#dtp-search-single-box").val();
  //
  //     $("#city_input").val(city)
  //
  //
  //     $.ajax({
  //       type: "POST",
  //       url: "/get_restaurants",
  //       data: $('#submit_form').serialize(),
  //       success: function(data){
  //
  //         console.log("sdfsfdsf");
  //         var form = $("#submit_form");
  //         form.submit();
  //
  //         // console.log(data);
  //         // $("#city_name").text("Popular Restaurants In " + city);
  //         //
  //         // var i;
  //         // for (i = 0; i < data.length; i++) {
  //         //
  //         // }
  //
  //
  //
  //
  //       }
  //     });
  //   });
  //
  //
</script>


@endsection
