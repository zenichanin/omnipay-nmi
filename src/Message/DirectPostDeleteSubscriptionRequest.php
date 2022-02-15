<?php
namespace Omnipay\NMI\Message;

/**
 * NMI Direct Post Authorize Request
 */
class DirectPostDeleteSubscriptionRequest extends AbstractRequest
{
    protected $recurring = 'delete_subscription';

    public function getData()
    {
        $this->validate('subscription_id');

        $data = $this->getBaseData();
        $data['subscription_id'] = $this->getSubscriptionId();

        return $data;
    }
}
