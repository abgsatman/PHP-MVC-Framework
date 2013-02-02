<?php
#
# htmlquery library file
# Copyright (C) 2013 A.Gokhan SATMAN <abgsatman@gmail.com>
# This file is a part of htmlquery project.
#
# This program is free software: you can redistribute it and/or modify
# it under the terms of the GNU General Public License as published by
# the Free Software Foundation, either version 3 of the License, or
# (at your option) any later version.
#
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
# You should have received a copy of the GNU General Public License
# along with this program.  If not, see <http://www.gnu.org/licenses/>.

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