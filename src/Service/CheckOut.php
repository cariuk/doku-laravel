<?php

namespace Jawak\DokuLaravel\Service;

use Jawak\DokuLaravel\Common\PaycodeGenerator;

class CheckOut
{
    public function getPaymentCode($params)
    {
        $params['targetPath'] = '/checkout/v1/payment';
        return PaycodeGenerator::post($params);
    }
}