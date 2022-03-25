<html>
<head>
    <title>Phone Number Authentication</title>
	
<style>

html {
	background-color: #3e4144;
	
}

</style>

</head>
<body><center>
<h1 style="color:#F5F5F5"> Enter your number</h1>
<form>
    <input type="text" id="number" placeholder="+91 ********">
	<br><br>
    <div id="recaptcha-container"></div>
	<br>
    <button type="button" onclick="phoneAuth();">SendCode</button>
</form><br>
<h1 style="color:#F5F5F5">Enter Verification code</h1>
<form>
    <input type="text" id="verificationCode" placeholder="Enter verification code">
    <button type="button" onclick="codeverify();">Verify code</button>

</form>



<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyBK-juZ6krPJCHHELQgOW9sFUXsS9h3wHI",
        authDomain: "fir-web-b823f.firebaseapp.com",
        databaseURL: "https://fir-web-b823f.firebaseio.com",
        projectId: "fir-web-b823f",
        storageBucket: "fir-web-b823f.appspot.com",
        messagingSenderId: "463332404757",
        appId: "1:463332404757:web:68d04d3fdeeb333f"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>
<script src="NumberAuthentication.js" type="text/javascript"></script>

</center>
</body>
</html>