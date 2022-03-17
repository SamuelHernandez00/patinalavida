<!DOCTYPE html>
<html>
<head>
    <title>Patina La Vida</title>
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">

    <script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
</head>
<body style="background-color: #666666;">

    @yield('registro')

	<script type="text/javascript">
                function evaluar(obj){
                    var pass = obj.value;               //Recibe variable de input
                    var conteo = obj.value.length;      //Cuenta la cadena string|Conraseña
                    var cadena = pass.split("");        //Divide la cadena String|Contraseña
                    var cont = 0;                       //Cuenta los caracteres especiales
                    var let_a = 0;                      //Cuenta las letras minusculas
                    var let_b = 0;                      //Cuenta las letras mayusculas
                    var let_c = 0;                      //Cuenta n     los numeros
                    var let_d = 0;                        //Caracter
                    if(conteo > 3){
                            if(cadena[0].search(/[A-Z]/g)+1 > 0){
                                let_a = 0;
                                let_b = 0;
                                let_c = 0;
                                let_d = 0;
                                cont = 0;

                                 //-------------------Evaluar: caracter x caracter
                                 for(var i=0; i < cadena.length; i++){
                                     var letra = cadena[i];
                                     if(letra.search(/[a-z]/g)+1 > 0){ let_a = let_a+1; }
                                     else{
                                            if(letra.search(/[A-Z]/g)+1 > 0){ let_b = let_b+1;}
                                            else{
                                                    if(letra.search(/[0-9]/g)+1 > 0){let_c = let_c+1;}
                                                    else{
                                                        if(letra.search(/[%&#$]/g)+1 > 0){let_d = let_d+1; }
                                                        else{ cont = cont+1; }
                                                    }
                                            }
                                     }
                                 }
                                 //------------------Evaluar: Canitdad de caracteres

                                 if(conteo >=8){
                                    document.getElementById("nivel").style.cssText = 'color: #000; background-color: #0D8E1A;';
                                    document.getElementById("nivel").innerHTML = "Segura";
                                 }else{
                                        if(conteo >=6 ){
                                            document.getElementById("nivel").style.cssText = 'color: #000; background-color: #EFDD0F;';
                                            document.getElementById("nivel").innerHTML = "Pocosegura";
                                        }
                                        else{
                                            document.getElementById("nivel").style.cssText = 'color: #000; background-color: #F00; ';
                                            document.getElementById("nivel").innerHTML = "Insegura";
                                        }
                                 }
                                 
                                 //-------------------Indicar Errores: Si existen letras y numeros
                                 if(let_a < 1 || let_b < 1 || let_c < 1 || let_d < 1){
                                     if(let_a < 1){let_a = "una letra minuscula"; }else{ let_a = " ";}
                                     if(let_b < 1){let_b = "una letra mayuscula"; }else{ let_b = " ";}
                                     if(let_c < 1){let_c = "un numero"; }else{ let_c = " ";}
                                     if(let_d < 1){let_d = "un caracter = (%&#$)"; }else{ let_d = " ";}
                                     document.getElementById("error").innerHTML = "Error: la contraseña debe de contener al menos " + let_a + " " + let_b + " " + let_c  + " " + let_d; 
                                 }else{
                                     document.getElementById("error").innerHTML = " ";
                                 }
                                 // ---------------------- Indica Errores: Si existen caracteres especiales
                                 if(cont > 0){
                                    
                                    document.getElementById("password").style.cssText = 'color: #F00; border: solid 1 px #F00';
                                    document.getElementById("nivel").innerHTML = " ";
                                 }
                                 else{
                                     document.getElementById("password").style.cssText = 'color: #000; border: solid 1px #000';
                                 }
                            }
                            else{ 
                                document.getElementById("password").style.cssText = 'color: #F00; border: solid 1px #F00';
                                document.getElementById("nivel").style.cssText = 'border-style: none;';
                                document.getElementById("nivel").innerHTML = " ";
                                document.getElementById("error").innerHTML = "Error: El primer caracter debe ser una letra mayuscula";
                            }
                    }
                    else{
                        document.getElementById("password").style.cssText = 'color: #000; border: solid 1px #000';
                        document.getElementById("nivel1").innerHTML = " ";
                        document.getElementById("error").innerHTML = " ";
                    }
                }

               
                
            </script>
				
    
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{ asset('js/main.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>