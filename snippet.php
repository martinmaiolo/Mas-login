add_filter( 'auth_cookie_expiration', 'logueado_1_year' );
function logueado_1_year( $expire ) {
  return 31556926; // 1 año en segundos
};
