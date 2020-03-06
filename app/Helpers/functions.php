<?php

use Illuminate\Support\Facades\Auth;

/**
 * Função que seta o local da aplicação de acordo com a url
 */

 function parseLocale(){
     /**Contém o parametro de idioma passado
      * via url
      */
     $locale = Request::segment(1);

     /**Contém os parâmetros válidos */
     $languages = ['pt-br', 'en'];

     /**Verifica se o parâmetro passado via
      * url é válido
      */
      /**Se sim, modifica o local da aplicação
       * Se não, mantém o padrão
       */

     if (in_array($locale, $languages)) {
        App::setLocale($locale);
        return $locale;
     }
     return '/';
 }

