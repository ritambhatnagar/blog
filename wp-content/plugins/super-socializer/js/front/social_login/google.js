function theChampGoogleOnLoad(){theChampDisplayLoginIcon(document,"theChampGoogleButton")}function theChampInitializeGPLogin(){gapi.auth.signIn({callback:theChampGPSignInCallback,clientid:theChampGoogleKey,cookiepolicy:"single_host_origin",requestvisibleactions:"http://schema.org/AddAction",scope:"https://www.googleapis.com/auth/plus.login email"})}function theChampGPSignInCallback(e){if(e["status"]["signed_in"]){gapi.client.load("plus","v1",function(){if(e["access_token"]){theChampGetProfile()}else if(e["error"]){console.log("There was an error: "+e["error"])}})}else{console.log("Sign-in state: "+e["error"])}}function theChampGetProfile(){theChampLoadingIcon();var e=gapi.client.plus.people.get({userId:"me"});e.execute(function(e){if(e.error){if(e.message=="Access Not Configured. Please use Google Developers Console to activate the API for your project."){alert(theChampGoogleErrorMessage);window.open("http://thechamplord.wordpress.com/2013/12/30/getting-google-plus-client-id/")}return}else if(e.id){theChampCallAjax(function(){theChampAjaxUserAuth(e,"google")})}})}(function(){var e=document.createElement("script");e.type="text/javascript";e.async=true;e.src="https://apis.google.com/js/client:platform.js?onload=theChampGoogleOnLoad";var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})()