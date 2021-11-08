<?php
 
 $types = array( 'png', 'jpg', 'jpeg', 'gif','xml', 'doc');
if ( $handle = opendir('\\10.163.156.63\Arquivos do Site\wordpress\inpe') ) {
    while ( $entry = readdir( $handle ) ) {
        $ext = strtolower( pathinfo( $entry, PATHINFO_EXTENSION) );
        if( in_array( $ext, $types ) ) echo $entry;
    }
    closedir($handle);
}  

?>