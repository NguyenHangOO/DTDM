

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<!--<script src="js/bootstrap.min.js"></script>-->
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>

<!-- Firestore -->
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-firestore.js"></script>

<!-- Auth -->
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-auth.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.6.5/firebase-analytics.js"></script>

<script>
	// Your web app's Firebase configuration
	// For Firebase JS SDK v7.20.0 and later, measurementId is optional
	var firebaseConfig = {
		apiKey: "AIzaSyBwMFi5wISCRS8cIy6Fa3hTeOC4HsbvJl8",
		authDomain: "qlhanghoa-h2c.firebaseapp.com",
		projectId: "qlhanghoa-h2c",
		storageBucket: "qlhanghoa-h2c.appspot.com",
		messagingSenderId: "886369258952",
		appId: "1:886369258952:web:18a5561b7983151412c4fd",
		measurementId: "G-9YRN9HX1NY"
	};
	// Initialize Firebase
	firebase.initializeApp(firebaseConfig);
	firebase.analytics();
	var db = firebase.firestore();
</script>
