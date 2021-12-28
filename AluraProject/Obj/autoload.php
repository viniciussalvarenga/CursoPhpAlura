<?php
spl_autoload_register(function($classe) {
   $caminho = __DIR__ . '\\' . $classe;
   $caminhoconc = str_replace( '\\', DIRECTORY_SEPARATOR, $caminho );
   $caminhocompleto = $caminhoconc . '.php';

   require_once $caminhocompleto;


});