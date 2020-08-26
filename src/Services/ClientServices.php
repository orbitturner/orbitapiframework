<?php
namespace Orbit\Services;

use Orbit\Models\ClientPhysiqueModel;
use Orbit\System\Services;

class ClientServices extends Services{

    
    public function __construct($entityManager, $requestMethod, $methodParams)
    {
        // Defining The Service Model
        $modelClass = new ClientPhysiqueModel($entityManager);
        // Constructing Parent with Necessary Params
        parent::__construct($modelClass, $entityManager, $requestMethod, $methodParams);
        
    }
    
}