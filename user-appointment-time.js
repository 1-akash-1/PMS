const firebaseConfig = {
    apiKey: "AIzaSyDI8p7z3e3TWeC3_KE7MFWROENCdS5gJ0o",
    authDomain: "plastic-management.firebaseapp.com",
    databaseURL: "https://plastic-management-default-rtdb.firebaseio.com",
    projectId: "plastic-management",
    storageBucket: "plastic-management.appspot.com",
    messagingSenderId: "416621997110",
    appId: "1:416621997110:web:d4283e1a48e8de6dc03c97",
    measurementId: "G-00TKXSF7JM"
  };
  
  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  
  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  

function savetimeTofire()
{
    date = document.getElementById("dp1").value
    firebaseConfig.database().ref("/").child(dp1).update({
        Date : date,

    })
    
}