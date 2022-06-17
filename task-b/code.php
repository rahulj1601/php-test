<?php

    /* 
     *  Function    : generateSentence()
     * 
     *  Description : Generate a sentence listing out all items provided in an array.
     *  
     *  Parameters  : (string)               start         - The start of the sentence
     *                (array[string])        items         - The list of items
     *                (string/array[string]) append        - (optional) item types to be appended to each item
     * 
     *  Return      : string
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */

    
    function generateSentence($start, $items, $append = ""){
        //forming the start of the sentence
        $sentence = $start . ": ";

        for ($i = 0; $i < count($items); $i+=1){

            //Obtain the word that needs to be appended if there is one
            $add = "";
            if (is_array($append)) {
                $add = " " . $append[$i];
            }
            elseif (is_string($append) && $append !== "") {
                $add = " " . $append;
            }

            //if item is second from the end of the item list
            if ($i == count($items)-2){
                $sentence = $sentence . $items[$i] . $add . " and ";
            }

            //if item is at the end of the item list
            elseif ($i == count($items)-1){
                $sentence = $sentence . $items[$i] . $add . ".";
            }

            //if item is anywhere from the start of the items list to the 3rd from last item (inclusive)
            else {
                $sentence = $sentence . $items[$i] . $add . ", ";
            }
        }

        return $sentence;
    }