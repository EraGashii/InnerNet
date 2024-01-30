<?php 
session_start();

include 'Include/header4.php';

include 'loginController.php';

?>

    <!-- login -->
  <form name="RegForm" onsubmit="return validateForm()" action="<?php echo $_SERVER['PHP_SELF'] ?>"   action="loginController.php"  method="post">
            <div class="login-wrap">
           <div class="login-html">
              <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
               <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab" >Sign Up</label>
             <div class="login-form">
                 <div class="sign-in-htm">
                     <div class="group"> 
                         <label for="signInName" class="label" name="name">Username</label>
                         <input id="signInName" type="text" name="signInName" class="input" autocomplete="username">
                     </div>
                     <div class="group">
                         <label for="signInPass" class="label" name="password" >Password</label>
                         <input id="signInPass" type="password" class="input" name="password" data-type="password" autocomplete="current-password">
                     </div>
                     <div class="group">
                         <input id="check" type="checkbox" class="check" checked>
                         <label for="check"><span class="icon"></span> Keep me Signed in</label>
                     </div>
                     <div class="group">
                         <input type="submit" name="sign-in" class="button" value="Sign In">
                     </div>
                     <div class="hr"></div>
                     <div class="foot-lnk">
                         <a href="#forgot">Forgot Password?</a>
                     </div>
                 </div>
             <div class="sign-up-htm">
                     <div class="group">
                         <label for="username" class="label">Username</label>
                         <input id="user" type="text" class="input" name="username" autocomplete="username">
                     </div>
                     <div class="group">
                         <label for="signUpPass" class="label">Password</label>
                         <input id="signUpPass" type="password" class="input" name="password" data-type="password" autocomplete="new-password">
                     </div>
                     <div class="group">
                         <label for="passRepeat" class="label" >Repeat Password</label>
                         <input id="passRepeat" type="password" class="input" data-type="password" name="passRepeat" autocomplete="new-password" >
                     </div>
                     <div class="group">
                         <label for="signUpAddress" class="label" required>Email Address</label>
                         <input id="signUpAddress" type="text" name="email" class="input" autocomplete="email" >
                     </div>
                     <div class="group">
                         <input type="submit" name="signup" class="button" value="Sign Up">
                     </div>
                     <div class="hr"></div>
                     <div class="foot-lnk">
                         <label for="tab-1">Already Member?</a>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </form>

 <?php include 'controller/registerController.php'?>



<!-- footer-->

<?php include 'Include/footer.php'?>

    <script>
          const nav = document.querySelector(".nav"),
     navOpenBtn = document.querySelector(".navOpenBtn"),
     navCloseBtn = document.querySelector(".navCloseBtn");
   
   navOpenBtn.addEventListener("click", () => {
     nav.classList.add("openNav");
   });
   navCloseBtn.addEventListener("click", () => {
     nav.classList.remove("openNav");
    });

// login
function validateForm() {
    function trimValue(element) {
        return element.value.trim();
    }

    function checkValidity(value, regex, errorMessage) {
        if (!regex.test(value)) {
            alert(errorMessage);
            return false;
        }
        return true;
    }

    var signInName = trimValue(document.getElementById('signInName'));
    var signInPass = trimValue(document.getElementById('signInPass'));
    var signUpUsername = trimValue(document.getElementById('user'));
    var signUpPass = trimValue(document.getElementById('signUpPass'));
    var passRepeat = trimValue(document.getElementById('passRepeat'));
    var signUpAddress = trimValue(document.getElementById('signUpAddress'));

    var regAlphanumeric = /^[a-zA-Z0-9_]+$/;
    var regPassword = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/; 
    var regEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (signInName && signInPass) {
        // Sign In Validation
        return (
            checkValidity(signInName, regAlphanumeric, "Please enter a valid alphanumeric username for sign-in.") &&
            checkValidity(signInPass, regPassword, "Please enter a valid and strong password for sign-in.")
        );
    } else if(signUpPass !== passRepeat){
    alert("Passwords do not match.");
    return false;
    }
    else {
        // Sign Up Validation
        return (
            checkValidity(signUpUsername, regAlphanumeric, "Please enter a valid alphanumeric username for sign-up.") &&
            checkValidity(signUpPass, regPassword, "Please enter a valid and strong password for sign-up.") &&
            checkValidity(signUpAddress, regEmail, "Please enter a valid email address for sign-up.") &&
            checkValidity(signUpAddress.includes('@'), true, "Please enter a valid email address for sign-up.")
        );
    }
}
...
 </script> 
