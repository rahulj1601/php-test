<?php

    /* 
     *  Class       : Counter
     * 
     *  Description : Simple class allowing you to count by X, get the count value, and reset the value.
     * 
     *  Parameters  : (int) count           - (optional) The starting count value [default: 0]
     *  
     *  Variables   : (private:int) count   - The count value
     * 
     *  Functions
     * 
     *      Function        : (public) count()
     * 
     *          Description : Increment the count value
     *              
     *          Parameters  : (int) n       - (optional) The value to increase the count by [default: 1]
     * 
     *          Return      : NULL
     * 
     *      Function        : (public) get()
     * 
     *          Description : Return the current count value
     *  
     *          Parameters  : [NONE]
     * 
     *          Return      : int
     * 
     *      Function        : (public) reset()
     * 
     *          Description : Reset the count value to 0
     *  
     *          Parameters  : [NONE]
     * 
     *          Return      : NULL
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     * 
     */

    
    class Counter {

        //initialises private count variable
        private $count;

        //constructor function initialises count variable
        function __construct($count = 0){
            $this->count = $count;
        }

        //increments count by given amount
        function count($n = 1) {
            $this->count += $n;
        }

        //returns the current count value
        function get() {
            return $this->count;
        }

        //resets the count to 0
        function reset() {
            $this->count = 0;
        }

    }