<?php

/**
 * Description of CompileLESS
 *
 * @author Dale
 */
class CompileLESS {

    /**
     * Compile any LESS files
     * @return boolean
     */
    public static function compile() {

        $options = array('compress' => true);

        $less = new Less_Parser($options);

        //TRY TO COMPILE
        try {
            $less->parseFile('less/style.less');
            $data = file_put_contents("style.css", $less->getCss());
			//echo '<h2>Done</h2>';
        } catch (Exception $e) {

            echo "<h2>Compile Error</h2>";
            echo "<p>" . $e->getMessage() . "</p>";
        }
    }

}
