<?php

try {
    throw new Exception("Erro que eu criei pra isso", 1);
} catch (Exception $e) {
   echo $e->getMessage().' - '. $e->getCode();
}

