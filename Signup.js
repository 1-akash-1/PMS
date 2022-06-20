// For Firebase JS SDK v7.20.0 and later, measurementId is optional
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
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();

// let's code 
var datab  = firebase.database().ref('data');
function UserRegister(){
var email = document.getElementById('eemail').value;
var password = document.getElementById('lpassword').value;
firebase.auth().createUserWithEmailAndPassword(email,password).then(function(){
    
}).catch(function (error){
    var errorcode = error.code;
    var errormsg = error.message;
});
}
const auth = firebase.auth();
function SignIn(){
    var email = document.getElementById('eemail').value;
    var password = document.getElementById('lpassword').value;
    const promise = auth.signInWithEmailAndPassword(email,password);
    promise.catch( e => alert(e.msg));
    alert("Successfully Signed Up");
    console.log("sent");
}
document.getElementById('form').addEventListener('submit', (e) => {
    e.preventDefault();
    var userInfo = datab.push();
    userInfo.set({
        name: getId('fname'),
        email : getId('eemail'),
        password : getId('lpassword'),
        address: getId('faddress'),
        pincode : getId('fpin'),
        housenumber : getId('fhouse'),
        number : getId('fnumber')
        
    });
    alert("Successfully Signed Up");
    console.log("sent");
    document.getElementById('form').reset();
});
function  getId(id){
    return document.getElementById(id).value;
}