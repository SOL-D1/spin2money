    <!DOCTYPE html>
    <html lang="zxx" class="js">
<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./assets/images/favicon.png">
    <!-- Page Title  -->
    <title>Register</title>

    <!-- StyleSheets  -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-226686868-1"></script>
    <script> window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        gtag('config', 'UA-226686868-1');

        function clearAllCookie() {
            var keys = document.cookie.match(/[^ =;]+(?=\=)/g);
            if(keys) {
                for(var i = keys.length; i--;)
                    document.cookie = keys[i] + '=0;expires=' + new Date(0).toUTCString()
            }
        }
    </script>


</div>

    <script>
        function countTimediscount() {

            var date = new Date();
            var now = date.getTime();
            var end = (1659214424)*1000;

            var leftTime = end-now;
            var d,h,m,s;
            if (leftTime>=0) {
                d = Math.floor(leftTime/1000/60/60/24);
                h = Math.floor(leftTime/1000/60/60%24);
                m = Math.floor(leftTime/1000/60%60);
                s = Math.floor(leftTime/1000%60);
            }
            d = checkTime(d);
            h = checkTime(h);
            m = checkTime(m);
            s = checkTime(s);
            function checkTime(i){
                if (i<10) {
                    i = "0"+i;
                }
                return i;
            }

            document.getElementById("up_h").innerHTML = h+":";
            document.getElementById("up_m").innerHTML = m+":";
            document.getElementById("up_s").innerHTML = s;
            setTimeout(countTimediscount,1000);

        }
        countTimediscount()

    </script>



    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=2.4.0">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=2.4.0">
</head>

<link rel="stylesheet" href="assets/telinput/css/intlTelInput.css">
<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="./assets/images/logo.png" srcset="./assets/images/logo2x.png 2x" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="./assets/images/logo-dark.png" srcset="./assets/images/logo-dark2x.png 2x" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Register</h4>
                                        <div class="nk-block-des">
                                            <p>Create New spin2money Account</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="" method='post' id='register_form'>
                                    <div class="form-group">
                                        <label class="form-label" for="name">Username</label>
                                        <input type="text" class="form-control form-control-md" id="username" name='username' placeholder="Enter your username">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" class="form-control form-control-md" id="email" name='email' placeholder="Enter your email address">
                                    </div>
                                    <div class="form-group" style="display:none;">
                                        <label class="form-label" for="verifycode">Verification code</label>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control" required class="form-control form-control-lg" required id="verifycode" name='verifycode' value="889912" placeholder="Enter your verification code sent to your email">
                                            <div class="input-group-append">
                                                <button type='button' class="input-group-text btn-primary" id="basic-addon2">Send code</button>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="form-group">
                                                        <label class="form-label" for="default-01">Enter Your Phone</label>
                                                        <div class="form-control-wrap">
                                                        <input type="tel" class="form-control form-control-md" id="phone" name='phone' style="width:300px" value=''  placeholder="Enter Your Phone">
                                                        </div>
                                                    </div>
                                                    
                                    <input type="hidden" name="a" value="a">
                                    <div class="form-group">
                                        <label class="form-label" for="password">Password</label>
                                        <div class="form-control-wrap">
                                            <input type="password" class="form-control form-control-md" name='password' id="password" placeholder="Create password">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="repassword">Confirm Password</label>
                                        <div class="form-control-wrap">
                                            <input type="password" class="form-control form-control-md" name='repassword' id="repassword" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                <!--    <div class="h-captcha" data-sitekey="0801a428-90fb-4b90-b884-6252866036b4"></div>
                                  <script src="https://js.hcaptcha.com/1/api.js" async defer></script> -->
                                    <div class="form-group">
                                        <div class="custom-control custom-control-xs custom-checkbox">
                                            <input type="checkbox" required name='checkbox' checked class="custom-control-input" id="checkbox">
                                            <label class="custom-control-label" for="checkbox">I agree to spin2money <a href="privacy.php">Privacy Policy</a> &amp; <a href="terms.php" > Terms.</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type='button' id='load' style='display: none' class='btn btn-lg btn-primary btn-block'>
                                        <div class="spinner-grow spinner-grow-sm" role="status">
                                            <span class="sr-only">Loading...</span>
                                            </div>
                                        </button>
                                        <button name='register' id='register' type='button' class="btn btn-lg btn-primary btn-block">Register</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4"> Already have an account? <a href="login.php"><strong>Sign in instead</strong></a>
                                </div>
                                

<link rel="stylesheet" href="assets/css/toastr.min.css">
<link rel="stylesheet" href="assets/css/ext-component-toastr.css">
<script src="assets/js/vendors.min.js"></script>
<script src="assets/js/toastr.min.js"></script>
<style>
.fw-bolder {
  font-weight: 600 !important;
}
.text-success {
  color: #28c76f !important;
}
.p-25 {
  padding: 0.25rem !important;
}
.text-uppercase {
  text-transform: uppercase !important;
}
.text-primary {
  color: #7367f0 !important;
}
</style>


<script>
        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
        }
        function showToast() {
            $.get('fetch.php', function(d) {
				console.log(d)
                if(d.success === true) {
                    toastr.remove();
					toastr['success']("<h6 class='p-25'> <span class='fw-bolder text-primary text-uppercase'>" + d.toast.name + "</span> was just paid <strong class='text-success'>$" + d.toast.amount + "</strong> via <strong class='text-primary'>" + d.toast.method + "</strong></h6>", "<h5 class='text-success fw-bolder'>New Payment Sent:</h5>", {
                      "closeButton": true,
                      tapToDismiss: true,
                      progressBar: true,
                      "showDuration": "300",
                      "hideDuration": "1000",
                      "timeOut": "7000",
                      "positionClass": 'toast-bottom-left',
                      "extendedTimeOut": "1000",
                      "showMethod": "slideDown"
                    });
                }
            },"json");
        }
        function doToast(secs) {
            setInterval(function(){ toastr.remove();showToast(); }, secs);
        }
      
        function randomIntFromInterval(min, max) { 
          return Math.floor(Math.random() * (max - min + 1) + min);
        }

        setTimeout(function(){ 
            toastr.remove();
            showToast();
            doToast(randomIntFromInterval(30, 50)*1000);
        }, randomIntFromInterval(5, 15) * 1000);
</script>


                              </div>
                  
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="./assets/js/bundle.js?ver=2.4.0"></script>
    <script src="./assets/js/scripts.js?ver=2.4.0"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    $(document).ready(function(){
        $('#register_form').validate({
        rules: {
            username: {
                required:true,
                rangelength: [6,16],
                //remote: 'html/pages/auths/validate/username.php'
            },
            email: {
                required:true,
                email:true,
                //remote: 'html/pages/auths/validate/email.php'
            },
            phone: {
                required:true,
                number:true,
                minlength:8,
                //remote: 'html/pages/auths/validate/phone.php'
            },
            password: {
                required:true,
                minlength:6
            },
            checkbox: {
                required: true,
            },
            otp: {
                //remote: 'html/pages/auths/validate/matchotp.php'
            }
        },
        messages: {
            username: {
                remote: "Username taken",
            },
            email: {
                remote: "Email already registered",
            },
            phone: {
                remote: "Phone number already registered",
            },
            checkbox: {
                required: ''
            },
            otp: {
                remote: "Incorrect One Time Pin"
            }
        },
        errorPlacement: function (error, element) {               
                    error.insertAfter(element.closest('div'));               
            }
        
        })
        $('#register').click(function () {
            if($('#password').val()!=$('#repassword').val()){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: "The password entered twice is not the same",
                })
                return;
            }
            if($('#register_form').valid()) {
                var formstr = $('#register_form').serialize();
                $('#register').hide();
                $('#load').show();
                var formdata ={};
                var values = $("#register_form").serializeArray();
                for(var index = 0; index < values.length; ++index){
                    formdata[values[index].name] = values[index].value;
                } 
                var num=window.intlTelInputGlobals.getInstance(input).getSelectedCountryData();
				formdata['phone']=num['dialCode']+document.getElementById('phone').value;
				console.log(formdata);
                $.ajax({
                    url: 'api.php?act=register',
                    type: 'post',
                    dataType: 'json',
                    data: JSON.stringify(formdata), 
                    headers: { 
                        'Content-Type': 'application/json' 
                    },           
                    success: function(res){
                        console.log(res);
                        if (res.function === 'redirectPostAlert') {
                              Swal.fire({
                                            icon: 'success',
                                            text: res.parameters[2],
                                            confirmButtonText: 'ok',
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                window.location.href=res.parameters[1];
                                            }
                                        })
                            
                        } else{
                            Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: res.parameters[1],
                            })
                            $('#load').hide();
                            $('#register').show();
                        }  
                    },error: function(e) {
                        console.log(e);
                        $('#load').hide();
                        $('#register').show();
                    }
                });
            }
            return false;
        });
        $('#basic-addon2').click(function(){
           
            if ($('#email').valid()) {
                $('#basic-addon2').hide();
                var email = $('#email').val();
                var username = $('#username').val();
                $.get('send_code.php', {'email': email,'username':username}, sentOtp);
                function sentOtp(data){
                    if (data.indexOf('stats=1')>-1) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            text: "The verification code has been sent successfully, please log in to your email to view it.(If you do not receive the email, please wait a few minutes or check spam)",
                            showConfirmButton: false,
                            timer: 3000
                        })
                    }
                    console.log(data);
                }
            
                setTimeout(() => {
                    $('#basic-addon2').show();
                }, 30000);
            }
        })
    })
</script>

<script src="assets/telinput/js/intlTelInput.js?12"></script>
<script>

 var input = document.querySelector("#phone");
  window.intlTelInput(input);
  
window.intlTelInput(input, {
	initialCountry: "et",
      utilsScript : "/assets/telinput/js/utils.js",
  });
  </script>
<style>
label.error {
 color: #F00;
 font-weight: bold;
}
input.error, select.error, textarea.error {
 border: 1px red solid;
}

</style>
</html>