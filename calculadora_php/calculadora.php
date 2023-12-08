<?php
        if($_POST){
            function Sumar (){
                echo "La suma de los números es: ".($_POST['numero1']+$_POST['numero2']);
            }

            function Restar (){
                echo "La resta de los números es: ".($_POST['numero1']-$_POST['numero2']);
            }

            function Multiplicar (){
                echo "La multiplicación de los números es: ".($_POST['numero1']*$_POST['numero2']);
            }

            function Division (){
                if ($_POST['numero2']==0)
                    $d="Error: division por 0";
                else 
                    $d=$_POST['numero1']/$_POST['numero2'];
                    echo "La divison de los números es: ".$d;
            }

            function Potenciacion (){
                echo "La potenciacion de los números es: ".(pow($_POST['numero1'],$_POST['numero2']));
            }

            function Concatenacion (){
                echo "La Concatenación de los números es: ".($_POST['numero1'].$_POST['numero2']);
            }
            switch($_POST['opcion']){
                case 'sumar':
                    Sumar();
                    break;
                case 'restar':
                    Restar();
                    break;
                case 'multiplicar':
                    Multiplicar();
                    break;
                case 'division':
                    Division();
                    break;
                case 'potenciacion':
                    Potenciacion();
                    break;
                case 'concatenacion':
                    Concatenacion();
                    break;
                default:
                    echo "Error en la opción seleccionada";
                    break;
            }

        }
    ?>