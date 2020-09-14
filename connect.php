<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/jquery.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Registration</title>
</head>

<body>
    <div class="d-flex flex-column align-items-center justify-content-center" style="width:100%; min-height: 700px ; background: #C0C0C0">

        <div id="msg" class="alert alert-dismissible fade hidde" role="alert">
            <strong id="msgText"></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="d-flex flex-column" style="width:30%">

            <div class="d-flex flex-column align-items-center justify-content-center" style="background-color:#FFFF; padding-top: 30px">

                <div class="text-center" style="margin-top:5px; margin-bottom:5px;">
                    <h1 style="text-align:center">Student<br>Attendance</h1>
                </div>

                <div style="margin-top:10px; margin-bottom:10px; width:80%">
                    <a href="#" class="btn btn-primary btn-lg btn-block">S'enregistrez avec facebook</a>
                </div>

                <div class="row" style="margin-top:30px; margin-bottom:20px; width:80%">

                    <div class="col-5" style="padding-top:10px">
                        <p style="height: 1.25px; background: lightgray"></p>
                    </div>

                    <div class="col-2 text-center" style="color: lightgray">
                        <strong>OU</strong>
                    </div>

                    <div class="col-5" style="padding-top:10px">
                        <p style="height: 1.25px; background: lightgray"></p>
                    </div>
                </div>

                <div style="width:80%; margin-bottom:20px;">

                    <form action="verif.php" method="POST" enctype="multipart/form-data" id="form" onsubmit="return checkall();">

                        <div class="form-group">
                            <input type="text" class="form-control" name="username" id="UserName" placeholder="Nom complet" require>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="useremail" id="UserEmail" placeholder="Adresse email" require onkeyup="checkemail();">
                            <span id="email_status"></span>
                        </div>
                        <!-- <span id="emailInput"></span> -->
                        <div class="form-group">
                            <input type="tel" class="form-control" name="userphone" id="UserPhone" placeholder="Numéro de téléphone" require onkeyup="checkphone();">
                            <span id="phone_status"></span>
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" name="userpass" id="UserPassword" placeholder="Mot de passe" require>
                        </div>
                        <!-- <span id="passwordInput"></span> -->
                        <div class="form-group">
                            <input type="password" class="form-control" name="userpass2" id="UserPassword2" placeholder=" Confirmez Mot de passe" require onkeyup="checkpass();">
                            <span id="pass_status"></span>
                        </div>
                        <div class="form-group">
                            <input type="file" name="file" />
                        </div>
                        <div class="form-group">
                            <input type="radio" name="sex" id="agree-term" class="agree-term" value="Homme" checked />
                            <label for="agree-term" class="label-agree-term">Homme</label>

                            <input type="radio" name="sex" id="agree-term" class="agree-term" value="Femme" />
                            <label for="agree-term" class="label-agree-term">Femme</label>

                            <input type="radio" name="sex" id="agree-term" class="agree-term" value="autre" />
                            <label for="agree-term" class="label-agree-term">Autre</label>
                        </div>

                        <input type="submit" class="btn btn-primary btn-lg btn-block" name="submit_form" value="Enregistrez">
                    </form>

                </div>

            </div>
        </div>

        <div class="d-flex flex-column align-items-center justify-content-center" style="background-color:#FFFF; margin-top: 10px; text-align:center; border-style: solid; border-width: 1px; border-color: lightgray; height:60px; width:30%">
            <div>
                <p> Vous êtes déjà enregistré ? <a href="sign.php">Signez maintenant</a></p>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        function checkphone() //Fonction qui vérifie si le téléphone existe ou pas
        {
            var phone = document.getElementById("UserPhone").value;

            if (phone) {
                $.ajax({
                    type: 'post',
                    url: 'verif.php',
                    data: {
                        user_phone: phone,
                    },
                    success: function(response) {
                        $('#phone_status').html(response);
                        if (response == "OK") {
                            return true;
                        } else {
                            return false;
                        }
                    }
                });
            } else {
                $('#phone_status').html("");
                return false;
            }
        }

        function checkemail() //Fonction qui vérifie si le mail existe ou pas
        {
            var email = document.getElementById("UserEmail").value;

            if (email) {
                $.ajax({
                    type: 'post',
                    url: 'verif.php',
                    data: {
                        user_email: email,
                    },
                    success: function(response) {
                        $('#email_status').html(response);
                        if (response == "OK") {
                            return true;
                        } else {
                            return false;
                        }
                    }
                });
            } else {
                $('#email_status').html("");
                return false;
            }
        }

        function checkpass() //Fonction qui vérifie si les mMdp correspondent
        {
            var pass2 = document.getElementById("UserPassword2").value;
            var pass = document.getElementById("UserPassword").value;

            if (pass2) {
                $.ajax({
                    type: 'post',
                    url: 'verif.php',
                    data: {
                        user_pass2: pass2,
                        user_pass: pass,
                    },
                    success: function(response) {
                        $('#pass_status').html(response);
                        if (response == "OK") {
                            return true;
                        } else {
                            return false;
                        }
                    }
                });
            } else {
                $('#pass_status').html("");
                return false;
            }
        }


        function checkall() {
            var namehtml = document.getElementById("phone_status").innerHTML;
            var emailhtml = document.getElementById("email_status").innerHTML;
            var passhtml = document.getElementById("pass_status").innerHTML;

            if ((namehtml && emailhtml && passhtml) == "OK") {
                return true; //On peut s'inscrire
            } else {
                return false; //On ne peut pas s'incrire
            }
        }
    </script>


</body>

</html>