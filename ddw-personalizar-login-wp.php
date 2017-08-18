<?php
/*
Plugin Name: Didesweb personal login WP
Plugin URI: https://didesweb.com/
Description: Personaliza el login de Wordpress con tu propio css
Version: 0.1
Author: Roque Arnás
Author URI: https://didesweb.com
License: GPLv2 o posterior
*/

  /* Login personalizado */
  function ddw_custom_login() {
    echo '
      <style type="text/css">
        body.login {
          background:
          radial-gradient(black 15%, transparent 16%) 0 0,
          radial-gradient(black 15%, transparent 16%) 8px 8px,
          radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 0 1px,
          radial-gradient(rgba(255,255,255,.1) 15%, transparent 20%) 8px 9px;
          background-color:#282828;
          background-size:16px 16px;
        }
        body.login a:hover{
          color: #222 !important;
        }
        body.login a:focus{
          color: #222 !important;
          box-shadow: none !important;
        }
        input:focus {
          border-color: #ddd !important;
          box-shadow: none !important;
        }
        #login  {
          background: linear-gradient(to bottom, transparent 0%, transparent 50%, #ffffff 50%, #ffffff 100%);
          padding-bottom: 20px !important;
          border-radius: 5px !important;
        }
        #loginform  {
          background: #fff !important;
          box-shadow: none !important;
          border-radius: 5px !important;
        }
        .login form {
            padding: 26px 24px 0px !important;
        }
        #login h1 a {
          background-image: none !important;
          display: inline;
          color: #fff !important;
          text-shadow: 2px 2px 2px #000 !important;
          text-transform: uppercase !important;
          font-size: 2em;
        }
        .wp-core-ui .button-primary {
            background: #444 !important;
            border-color: transparent !important;
            box-shadow: none !important;
            text-shadow: none !important;
        }
        input[type=checkbox]:checked:before {
            color: #444 !important;
        }
      </style>
    ';
  }
  add_action('login_head', 'ddw_custom_login');
  /* Cambiar url login wordpress */
  function ddw_custom_login_url() {
    return get_bloginfo( 'url' );
  }
  add_filter( 'login_headerurl', 'ddw_custom_login_url' );
  /* Cambiar title login wordpress */
  function ddw_custom_login_url_title() {
    return get_bloginfo( 'name' ) . ' | ' . get_bloginfo( 'description' );
  }
  add_filter( 'login_headertitle', 'ddw_custom_login_url_title' );
