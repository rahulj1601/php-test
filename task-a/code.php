<?php

    /* 
     *  Function    : containsWord()
     * 
     *  Description : Checks whether a sentence contains a specific word, case insensitive.
     *  
     *  Parameters  : (string) word         - The word to find
     *                (string) sentence     - The sentence to search
     * 
     *  Return      : boolean
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */
    
    
    function containsWord(string $word, string $sentence){
        //Split the sentence at each space encountered
        $wordList = explode(" ", $sentence);

        //Remove punctuation from the end of each word (commas, full stops, etc.)
        foreach ($wordList as $currentWord){
            //Trims the given punctuation from the start and end of the word if present
            $updatedWord = trim($currentWord, ',?!.');
            
            //Checks whether the lower case version of the parameter word is identical to 
            //the lower case versions of the current word within the sentence
            if (strtolower($word) == strtolower($updatedWord)) {
                return true;
            }
        }

        //Returns false if given word is not identical to any word within the sentence
        return false;
    }
