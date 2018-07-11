<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>


<!-- Mirrored from p.w3layouts.com/demos/login_animated/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jul 2018 06:02:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>The Login Animated Form Flat Widget Template :: w3layouts</title>
		<meta charset="utf-8">
		<link href="{{url('css/style.css')}}" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!--webfonts-->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
		<!--//webfonts-->
</head>
<body>
<script src='../../../../ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js'></script><script src="../../../../m.servedby-buysellads.com/monetization.js" type="text/javascript"></script>
<body>
	<!---728x90--->
<script src='../../../../publisher.eboundservices.com/dynamicAds/dynamicScript.js'></script>
<div style='margin: 0 auto;text-align: center;margin-top: 5px;'><script>
var allowedNumberOfEboundDynamicAdds = 4;
var sizesEboundDynamicAdsDesktop = ['728x90'];
var sizesEboundDynamicAdsTablet = ['728x90'];
var sizesEboundDynamicAdsMobile = ['320x100'];
eboundAdsTagByDevice(sizesEboundDynamicAdsDesktop,sizesEboundDynamicAdsTablet,sizesEboundDynamicAdsMobile, 'ebound_header_tag');

if(typeof user_tag_config == 'undefined'){
	var user_tag_config = {};
}
user_tag_config['ebound_header_tag'] = {};
user_tag_config['ebound_header_tag']['desktop'] = {};
user_tag_config['ebound_header_tag']['desktop']['cpm'] = '';
user_tag_config['ebound_header_tag']['desktop']['adsCode'] = '';
user_tag_config['ebound_header_tag']['tablet'] = {};
user_tag_config['ebound_header_tag']['tablet']['cpm'] = '';
user_tag_config['ebound_header_tag']['tablet']['adsCode'] = '';
user_tag_config['ebound_header_tag']['mobile'] = {};
user_tag_config['ebound_header_tag']['mobile']['cpm'] = '';
user_tag_config['ebound_header_tag']['mobile']['adsCode'] = '';
</script></div>
				 <!-----start-main---->
				<div class="login-form">

					<div class="head">
						<img src="{{url('images/logo.png')}}" alt=""/>

					</div>
          <form method="POST" action="{{ route('login') }}">
                          {{ csrf_field() }}
					<li{{ $errors->has('email') ? ' has-error' : '' }}>
						<input type="text" class="text" id="email" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'EMAIL';}" name="email"><a href="#" class=" icon user"></a>
            @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
          </li>
					<li{{ $errors->has('password') ? ' has-error' : '' }}>
						<input type="password" id="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}"><a href="#" class=" icon lock"></a>
            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </li>
					<div class="p-container">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember Me</label>
								<input type="submit" onclick="myFunction()" value="SIGN IN" >
							<div class="clear"> </div>
					</div>
				</form>
			</div>
			<!--//End-login-form-->
			<!---728x90--->
<script src='../../../../publisher.eboundservices.com/dynamicAds/dynamicScript.js'></script>
<div style='margin: 0 auto;text-align: center;margin-top: 5px;'><script>
var allowedNumberOfEboundDynamicAdds = 4;
var sizesEboundDynamicAdsDesktop = ['728x90'];
var sizesEboundDynamicAdsTablet = ['728x90'];
var sizesEboundDynamicAdsMobile = ['320x100'];
eboundAdsTagByDevice(sizesEboundDynamicAdsDesktop,sizesEboundDynamicAdsTablet,sizesEboundDynamicAdsMobile, 'ebound_header_tag');

if(typeof user_tag_config == 'undefined'){
	var user_tag_config = {};
}
user_tag_config['ebound_header_tag'] = {};
user_tag_config['ebound_header_tag']['desktop'] = {};
user_tag_config['ebound_header_tag']['desktop']['cpm'] = '';
user_tag_config['ebound_header_tag']['desktop']['adsCode'] = '';
user_tag_config['ebound_header_tag']['tablet'] = {};
user_tag_config['ebound_header_tag']['tablet']['cpm'] = '';
user_tag_config['ebound_header_tag']['tablet']['adsCode'] = '';
user_tag_config['ebound_header_tag']['mobile'] = {};
user_tag_config['ebound_header_tag']['mobile']['cpm'] = '';
user_tag_config['ebound_header_tag']['mobile']['adsCode'] = '';
</script></div>

<script src='../../../../publisher.eboundservices.com/dynamicAds/dynamicScript.js'></script>
<div style='margin: 0 auto;text-align: center;margin-top: 5px;'><script>
var allowedNumberOfEboundDynamicAdds = 4;
var sizesEboundDynamicAdsDesktop = ['728x90'];
var sizesEboundDynamicAdsTablet = ['728x90'];
var sizesEboundDynamicAdsMobile = ['320x100'];
eboundAdsTagByDevice(sizesEboundDynamicAdsDesktop,sizesEboundDynamicAdsTablet,sizesEboundDynamicAdsMobile, 'ebound_header_tag');

if(typeof user_tag_config == 'undefined'){
	var user_tag_config = {};
}
user_tag_config['ebound_header_tag'] = {};
user_tag_config['ebound_header_tag']['desktop'] = {};
user_tag_config['ebound_header_tag']['desktop']['cpm'] = '';
user_tag_config['ebound_header_tag']['desktop']['adsCode'] = '';
user_tag_config['ebound_header_tag']['tablet'] = {};
user_tag_config['ebound_header_tag']['tablet']['cpm'] = '';
user_tag_config['ebound_header_tag']['tablet']['adsCode'] = '';
user_tag_config['ebound_header_tag']['mobile'] = {};
user_tag_config['ebound_header_tag']['mobile']['cpm'] = '';
user_tag_config['ebound_header_tag']['mobile']['adsCode'] = '';
</script></div>
				<!-----//end-copyright---->

</body>

<!-- Mirrored from p.w3layouts.com/demos/login_animated/web/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jul 2018 06:02:18 GMT -->
</html>
