<?php
function usuarioOk($usuario, $contrasena) :bool {
    
    $usuario= array();
    
    $usuario[0]='guille';
    
    $usuario[1]='pepe';
    
    $usuario[2]='dani';
    
    
    
    
    $contrasena= array();
    
    $contrasena[0]='guille';
    
    $contrasena[1]='pepe';
    
    $contrasena[2]='dani'; 
    
    return(($usuario="guille" && $contrasena="guille")||($usuario="pepe" && $contrasena="pepe")||($usuario="dani" && $contrasena="dani"));    
   
    
}
