<?php
include "config.php";


if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from funcionarios where LOGIN='".$uname."' and SENHA='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <title>Log In - Admin</title>
    <link href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css" rel="stylesheet">
    <link href="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/jqvmap.css?0" rel="stylesheet">
    <link href="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/flag-icon.min.css?0" rel="stylesheet">
    <!-- Fullcalendar-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/fullcalendar.min.css" rel="stylesheet">
    <!-- Materialize-->
    <link href="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/admin-materialize.min.css?0" rel="stylesheet">
    <!-- Material Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/17758583/digital_wallets/dialog">
<meta name="shopify-checkout-api-token" content="6aacc581eb2b41d74f03c38d3c985dba">
<meta id="in-context-paypal-metadata" data-shop-id="17758583" data-venmo-supported="true" data-environment="production" data-locale="en_US" data-paypal-v4="true" data-currency="USD">
<style media="all">.additional-checkout-button{border:0 !important;border-radius:5px !important;display:inline-block;margin:0 0 10px;padding:0 24px !important;max-width:100%;min-width:150px !important;line-height:44px !important;text-align:center !important}.additional-checkout-button+.additional-checkout-button{margin-left:10px}.additional-checkout-button:last-child{margin-bottom:0}.additional-checkout-button span{font-size:14px !important}.additional-checkout-button img{display:inline-block !important;height:1.3em !important;margin:0 !important;vertical-align:middle !important;width:auto !important}@media (max-width: 500px){.additional-checkout-button{display:block;margin-left:0 !important;padding:0 10px !important;width:100%}}.additional-checkout-button--apple-pay{background-color:#000 !important;color:#fff !important;display:none;font-family:-apple-system, Helvetica Neue, sans-serif !important;min-width:150px !important;white-space:nowrap !important}.additional-checkout-button--apple-pay:hover,.additional-checkout-button--apple-pay:active,.additional-checkout-button--apple-pay:visited{color:#fff !important;text-decoration:none !important}.additional-checkout-button--apple-pay .additional-checkout-button__logo{background:-webkit-named-image(apple-pay-logo-white) center center no-repeat !important;background-size:auto 100% !important;display:inline-block !important;vertical-align:middle !important;width:3em !important;height:1.3em !important}@media (max-width: 500px){.additional-checkout-button--apple-pay{display:none}}.additional-checkout-button--google-pay{line-height:0 !important;padding:0 !important;border-radius:unset !important;width:80px !important}@media (max-width: 500px){.additional-checkout-button--google-pay{width:100% !important}}.gpay-iframe{height:44px !important;width:100%  !important;cursor:pointer;vertical-align:middle !important}.additional-checkout-button--paypal-express{background-color:#ffc439 !important}.additional-checkout-button--paypal,.additional-checkout-button--venmo{vertical-align:top;line-height:0 !important;padding:0 !important}.additional-checkout-button--amazon{background-color:#fad676 !important;position:relative !important}.additional-checkout-button--amazon .additional-checkout-button__logo{-webkit-transform:translateY(4px) !important;transform:translateY(4px) !important}.additional-checkout-button--amazon .alt-payment-list-amazon-button-image{max-height:none !important;opacity:0 !important;position:absolute !important;top:0 !important;left:0 !important;width:100% !important;height:100% !important}.additional-checkout-button-visually-hidden{border:0 !important;clip:rect(0, 0, 0, 0) !important;clip:rect(0 0 0 0) !important;width:1px !important;height:1px !important;margin:-2px !important;overflow:hidden !important;padding:0 !important;position:absolute !important}
</style>
<script async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2017.09.05.1"></script><script id="apple-pay-shop-capabilities" type="application/json">{"shopId":17758583,"countryCode":"US","currencyCode":"USD","merchantCapabilities":["supports3DS"],"merchantId":"gid:\/\/shopify\/Shop\/17758583","merchantName":"Materialize Themes","requiredBillingContactFields":["postalAddress","email"],"requiredShippingContactFields":["postalAddress","email"],"shippingType":"shipping","supportedNetworks":["visa","masterCard","amex","discover"],"total":{"type":"pending","label":"Materialize Themes","amount":"1.00"}}</script>
<script id="shopify-features" type="application/json">{"accessToken":"6aacc581eb2b41d74f03c38d3c985dba","betas":[],"domain":"themes.materializecss.com","predictiveSearch":false,"shopId":17758583,"smart_payment_buttons_url":"https:\/\/cdn.shopifycloud.com\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/cdn.shopifycloud.com\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "materialize-themes.myshopify.com";
Shopify.currency = {"active":"USD","rate":"1.0"};
Shopify.theme = {"name":"debut","id":133945025,"theme_store_id":796,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};</script>
<script>window.ShopifyPay = window.ShopifyPay || {};
window.ShopifyPay.apiHost = "pay.shopify.com";</script>
<script id="__st">var __st={"a":17758583,"offset":-25200,"reqid":"074ad90b-17cd-4ec1-8d8d-6b58cc2ce053","pageurl":"themes.materializecss.com\/pages\/admin-log-in","s":"pages-18650988633","u":"d4658c087bd8","p":"page","rtyp":"page","rid":18650988633};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.Shopify = window.Shopify || {};
window.Shopify.Checkout = window.Shopify.Checkout || {};
window.Shopify.Checkout.apiHost = "materialize-themes.myshopify.com";</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'USD';
var meta = {"page":{"pageType":"page","resourceType":"page","resourceId":18650988633}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {

};
</script>
<script class="analytics">(window.gaDevIds=window.gaDevIds||[]).push('BwiEti');


(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.$) {
      jquery = window.Checkout.$;
    }

    if (jquery) {
      jquery('body').append(content);
    }
  };

  var isDuplicatedThankYouPageView = function() {
    return document.cookie.indexOf('loggedConversion=' + window.location.pathname) !== -1;
  }

  var setCookieIfThankYouPage = function() {
    if (window.location.pathname.indexOf('/checkouts') !== -1 &&
        window.location.pathname.indexOf('/thank_you') !== -1) {

      var twoMonthsFromNow = new Date(Date.now());
      twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

      document.cookie = 'loggedConversion=' + window.location.pathname + '; expires=' + twoMonthsFromNow;
    }
  }

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    'identify',
    'page',
    'ready',
    'track',
    'trackForm',
    'trackLink'
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i < trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config;
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onerror = function(e) {
      (new Image()).src = '//v.shopify.com/internal_errors/track?error=trekkie_load';
    };
    script.async = true;
    script.src = 'https://cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min.js?v=2017.09.05.1';
    var first = document.getElementsByTagName('script')[0];
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":17758583,"isMerchantRequest":null,"themeId":133945025,"themeCityHash":11956486666485001981,"contentLanguage":"en"}},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":0.01},"StorefrontPerformance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":0.01},"Google Analytics":{"trackingId":"UA-56218128-1","domain":"auto","siteSpeedSampleRate":"10","enhancedEcommerce":true,"doubleClick":true,"includeSearch":true},"Session Attribution":{}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;

      ga('require', 'linker');
      function addListener(element, type, callback) {
        if (element.addEventListener) {
          element.addEventListener(type, callback);
        }
        else if (element.attachEvent) {
          element.attachEvent('on' + type, callback);
        }
      }
      function decorate(event) {
        event = event || window.event;
        var target = event.target || event.srcElement;
        if (target && (target.getAttribute('action') || target.getAttribute('href'))) {
          ga(function (tracker) {
            var linkerParam = tracker.get('linkerParam');
            document.cookie = '_shopify_ga=' + linkerParam + '; ' + 'path=/';
          });
        }
      }
      addListener(window, 'load', function(){
        for (var i=0; i < document.forms.length; i++) {
          var action = document.forms[i].getAttribute('action');
          if(action && action.indexOf('/cart') >= 0) {
            addListener(document.forms[i], 'submit', decorate);
          }
        }
        for (var i=0; i < document.links.length; i++) {
          var href = document.links[i].getAttribute('href');
          if(href && href.indexOf('/checkout') >= 0) {
            addListener(document.links[i], 'click', decorate);
          }
        }
      });


    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;

    if (!isDuplicatedThankYouPageView()) {
      setCookieIfThankYouPage();

        window.ShopifyAnalytics.lib.page(
          null,
          {"pageType":"page","resourceType":"page","resourceId":18650988633}
        );


    }
  });


      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "//cdn.shopify.com/s/assets/shop_events_listener-acf771159f9849ef6e5265782c99efe8b99406214c96a4373224ecafe285d7bb.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

})();</script><script async="" src="//cdn.shopify.com/s/assets/shop_events_listener-acf771159f9849ef6e5265782c99efe8b99406214c96a4373224ecafe285d7bb.js"></script>
<script crossorigin="anonymous" defer="defer" src="//cdn.shopify.com/s/assets/shopify_pay/storefront-8ddbd55cc19e1ebbff92d676e1481c8e6b42e0c2714d3fdf6b810b1f193347b8.js?v=20190107"></script>
<script integrity="sha256-ZGMHgi9G7WU+Z7WiP2suSn84yzoN83sGf9nMWJhVHAw=" defer="defer" src="//cdn.shopify.com/s/assets/storefront/express_buttons-646307822f46ed653e67b5a23f6b2e4a7f38cb3a0df37b067fd9cc5898551c0c.js" crossorigin="anonymous"></script>
<script integrity="sha256-qzPTa4Ven/Yc2yyXr9BKZWCTXSrPTCnbGdWsxA7YCw0=" defer="defer" src="//cdn.shopify.com/s/assets/storefront/features-ab33d36b855e9ff61cdb2c97afd04a6560935d2acf4c29db19d5acc40ed80b0d.js" crossorigin="anonymous"></script>
<script defer="defer" src="//cdn.shopify.com/s/assets/themes_support/ga_urchin_forms-99e991855b3d8ddc69e625c68ab0579dd9927b611c2ec4943d396c72e3af0849.js"></script>



  <link rel="canonical" href="https://themes.materializecss.com/pages/admin-log-in">
<style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style></head>
    </head>
    <body>
      <div class="container">
<div class="row">
  <div class="col s8 offset-s2">

    <div class="card card-login">
      <div class="card-login-splash">
        <div class="wrapper">
          <h3>Sigpet</h3>
        </div>

        <img src="//cdn.shopify.com/s/files/1/1775/8583/t/1/assets/geometric-cave.jpg?0" alt="">
      </div>
      <div class="card-content">
        <span class="card-title">Log In</span>
        <form method="post" action="">
          <div class="input-field">

            <i class="material-icons prefix">account_circle</i>
            <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Usuario" >

          </div>
          <div class="input-field">
            <i class="material-icons prefix">lock</i>
            <input input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Senha" class="validate">

          </div>
          <br><br>
          <div>

            <input  type="submit" class="btn right" value="Entrar" name="but_submit" id="but_submit" >

          </div>

        </form>
      </div>
    </div>

  </div>
</div>

</div>
    </body>
</html>
