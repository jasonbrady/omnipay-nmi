<?php

namespace Omnipay\NMI\Message;

/**
 * NMI Three Step Redirect Void Request
 */
class ThreeStepRedirectVoidRequest extends ThreeStepRedirectAbstractRequest
{
    /**
     * @var string
     */
    protected $type = 'void';

    /**
     * @return array
     */
    public function getData()
    {
        $this->validate('transactionReference');

        $data = array(
            'api-key'        => $this->getApiKey(),
            'transaction-id' => $this->getTransactionReference(),
        );

        if ($this->getMerchantDefinedField_1()) {
            $data['merchant-defined-field-1'] = $this->getMerchantDefinedField_1();
        }

        if ($this->getMerchantDefinedField_2()) {
            $data['merchant-defined-field-2'] = $this->getMerchantDefinedField_2();
        }

        if ($this->getMerchantDefinedField_3()) {
            $data['merchant-defined-field-3'] = $this->getMerchantDefinedField_3();
        }

        if ($this->getMerchantDefinedField_4()) {
            $data['merchant-defined-field-4'] = $this->getMerchantDefinedField_4();
        }

        return $data;
    }
}
