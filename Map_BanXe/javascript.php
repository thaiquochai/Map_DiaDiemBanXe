<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.6.3/firebase-app.js"></script>

<!-- Firestore -->
<script src="https://www.gstatic.com/firebasejs/8.6.3/firebase-firestore.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.6.3/firebase-analytics.js"></script>

<script>
	// Your web app's Firebase configuration
	// For Firebase JS SDK v7.20.0 and later, measurementId is optional
	// For Firebase JS SDK v7.20.0 and later, measurementId is optional
	var firebaseConfig = {
	  apiKey: "AIzaSyBvvdr0I4SEiBNSPg8LJbo1AwsgLO-a5ko",
	  authDomain: "diadiembanxe.firebaseapp.com",
	  projectId: "diadiembanxe",
	  storageBucket: "diadiembanxe.appspot.com",
	  messagingSenderId: "478620419437",
	  appId: "1:478620419437:web:395b977d760647045a0664",
	  measurementId: "G-R86R2SDTQ3"
	};
	// Initialize Firebase
	firebase.initializeApp(firebaseConfig);
	firebase.analytics();
	var db = firebase.firestore();
</script>