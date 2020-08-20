<?php

namespace igorzeno\parser;
/* 
 * Igor Starozhukov
 */

interface ParserInterface
// commit
    {
    
    /* @param string $url
    *  @param string $tag
    *  @return array
    */
    
    
   public function process(string $url, string $tag): array;    
    
    }
