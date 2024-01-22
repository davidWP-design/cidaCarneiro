<!-- ARQUIVO QUE VERIFICA E EXECUTA A SIDEBAR DO BLOG -->
<?php 
if (is_active_sidebar( 'sidebar-1' )){
	dynamic_sidebar( 'sidebar-1' );
}
