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

    public function getStatus($params)
    {
        $params['targetPath'] = '/checkout/v1/status/'.$params['order']['invoice_number'];
        return PaycodeGenerator::get($params);
    }
}