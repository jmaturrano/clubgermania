
<?php
if (has_category() || has_tag()) {
    if (has_category()) {
        _e('Categoría en: ', 'simple-business-wp'); 
        the_category(', ');
    }//end if
}//end if
?>
