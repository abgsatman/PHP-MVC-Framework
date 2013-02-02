<?php

class HQ {
    
    public function label($str) {
        return $str;
    }

    public function br( $lineCount ) {
        
        if( !is_numeric( $lineCount ) || ( $lineCount<1 ) )
            return false;
        
        for( $i=1; $i<=$lineCount; $i++) {
            print "<br>";
        }

    }
}

?>