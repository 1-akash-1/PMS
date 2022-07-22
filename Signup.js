//new

function registration()
	{

		var name= document.getElementById("fname").value;
		var email= document.getElementById("eemail").value;
		
		var pwd= document.getElementById("lpassword").value;			
		var cpwd= document.getElementById("rpassword").value;

       // var uname= document.getElementById("t3").value;
		
        //email id expression code
		var pwd_expression = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/;
		var letters = /^[A-Za-z]+$/;
		var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

		if(name=='')
		{
			alert('Please enter your name');
		}
		else if(!letters.test(name))
		{
			alert('Name field required only alphabet characters');
		}
		else if(email=='')
		{
			alert('Please enter your user email id');
		}
		else if (!filter.test(email))
		{
			alert('Invalid email');
		}
		/*else if(uname=='')
		{
			alert('Please enter the user name.');
		}
		else if(!letters.test(uname))
		{
			alert('User name field required only alphabet characters');
		}*/
		else if(pwd=='')
		{
			alert('Please enter Password');
		}
		else if(cpwd=='')
		{
			alert('Enter Confirm Password');
		}
		else if(!pwd_expression.test(pwd))
		{
			alert ('Upper case, Lower case, Special character and Numeric letter are required in Password filed');
		}
		else if(pwd != cpwd)
		{
			alert ('Password not Matched');
		}
		else if(document.getElementById("lpassword").value.length < 6)
		{
			alert ('Password minimum length is 6');
		}
		else if(document.getElementById("lpassword").value.length > 12)
		{
			alert ('Password max length is 12');
		}
		else
		{				                            
               alert('Thank You for Login & You are Redirecting to Website');
			   // Redirecting to other page or webste code. 
			   window.location = ""; 
		}
	}
	function clearFunc()
	{
		document.getElementById("fname").value="";
		document.getElementById("eemail").value="";
		document.getElementById("lpassword").value="";
		document.getElementById("rpassword").value="";
		//document.getElementById("t5").value="";
	}




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





