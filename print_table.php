
<?php

    $layout = $_GET['layout'] ?? 'table';      
    $output = $_GET['output'] ?? 0;             

    function printTable( $layout , $output ) {

        //@ print > table layout
        function print_table_rows( $out_start , $out_end ) {

            // print > first row of multipliers
            echo "<tr class = 'mults'>";
            for($i = 1 ; $i < 10 ; $i++) {
                echo "<td><a href = 'index.php?output=$i'>$i</a></td>";
            }
            echo "</tr>";

            // print > rest table
            echo "<tr>";
            for($i = $out_start ; $i < $out_end ; $i++) {   //: i - rows
                $multiplier = 'mult';

                for($j = 1 ; $j < 10 ; $j++) {              //: j - columns
                    $m = $i * $j;
                    if( $multiplier ) {
                        echo "<td class = '$multiplier'><a href = 'index.php?output=$m'>$m</a></td>";
                    } else {
                        echo "<td>$m</td>";
                    }
                    $multiplier = '';
                }
            }
            echo "</tr>";

        }
        //@ print > block layout
        function print_block_rows( $out_start , $out_end ) {

            // print > first row of multipliers
            echo "<div class = 'row mults'>";
            for($i = 1 ; $i < 10 ; $i++) {
                echo "<div class = 'cell'><a href = 'index.php?output=$i'>$i</a></div>";
            }
            echo "</div>";

            // print > rest table
            echo "<div class = 'row'>";
            for($i = $out_start ; $i < $out_end ; $i++) {   //: i - rows
                $multiplier = 'mult';

                for($j = 1 ; $j < 10 ; $j++) {              //: j - columns
                    $m = $i * $j;
                    if( $multiplier ) {
                        echo "<div class = 'cell $multiplier'><a href = 'index.php?output=$m'>$m</a></div>";    
                    } else {
                        echo "<div class = 'cell'>$m</div>";
                    }
                    $multiplier = '';
                }
            }
            echo "</div>";

        }

        // [ table layout ]
        if( $layout == 'table' ) {
            echo "<table class = 'mult-table'>";

            if($output == 0) print_table_rows(1 , 10);
            else print_table_rows($output , ++$output);

            echo "</table>";
        }
        // [ block layout ]
        if( $layout == 'block' ) {
            echo "<div class = 'mult-table'>";

            if($output == 0) print_block_rows(1 , 10);
            else print_block_rows($output , ++$output);

            echo "</div>";
        }

    }

    return printTable( $layout , $output );

?>