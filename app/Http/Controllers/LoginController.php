<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function log_in(Request $request){
    	//logando no domínio GAPCG  - comentar este bloco caso não queira logar no domínio------------------------------------------------------
// Lembrar de alterar na view login o campo cpf para peslogin
    $srv = "10.152.16.174";
    $usr = $request->get('cpf');
    $pwd = $request->get('password');

    function valida_ldap($srv, $usr, $pwd){
      $ldap_server = $srv;
      $auth_user = $usr;
      $auth_pass = $pwd;

          // Tenta se conectar com o servidor
          if (!($connect = @ldap_connect($ldap_server))) {
          return FALSE;
          }

          // Tenta autenticar no servidor
          if (!($bind = @ldap_bind($connect, $auth_user, $auth_pass))) {
          // se não validar retorna false
          return FALSE;
          } else {
          // se validar retorna true
          return TRUE;
          }

      }
      $server = "10.152.16.174"; //IP ou nome do servidor
      $dominio = "@gapcg.intraer"; //Dominio Ex: @gmail.com
      $user_r = $usr.$dominio;
      $pass = $pwd;

      if (!(valida_ldap($server, $user_r, $pass))) {
        Session::flash('auth', 'Não autenticado no domínio GAPCG. Tente novamente!');
        return redirect()->route('inicio');
      } else {
      	return redirect()->route('/home');
    } 
}
}
