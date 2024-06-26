
<?php    

class cursBnrXML
     {
         /**
         * xml document
         * @var string
         */
         var $xmlDocument = "";
         
         
         /**
         * exchange date
         * BNR date format is Y-m-d
         * @var string
         */
         var $date = "";
         
         
         /**
         * currency
         * @var associative array
         */
         var $currency = array();
         
         
         /**
         * cursBnrXML class constructor
         *
         * @access        public
         * @param         $url        string
         * @return        void
         */
        function __construct($url)
        {
            $this->xmlDocument = file_get_contents($url);
            $this->parseXMLDocument();
        }
         
        /**
         * parseXMLDocument method
         *
         * @access        public
         * @return         void
         */
        function parseXMLDocument()
        {
             $xml = new SimpleXMLElement($this->xmlDocument);
             
             $this->date=$xml->Header->PublishingDate;
             
             foreach($xml->Body->Cube->Rate as $line)    
             {                      
                 $this->currency[]=array("name"=>$line["currency"], "value"=>$line, "multiplier"=>$line["multiplier"]);
             }
        }
        
        /**
         * getCurs method
         * 
         * get current exchange rate: example getExchangeRate("USD")
         * 
         * @access        public
         * @return         double
         */
        function getExchangeRate($currency)
        {
            foreach($this->currency as $line)
            {
                if($line["name"]==$currency)
                {
                    return $line["value"];
                }
            }
            
            return "Incorrect currency!";
        }
     }