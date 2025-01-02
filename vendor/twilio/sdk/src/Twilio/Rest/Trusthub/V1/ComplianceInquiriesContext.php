<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Trusthub
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Trusthub\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;


class ComplianceInquiriesContext extends InstanceContext
    {
    /**
     * Initialize the ComplianceInquiriesContext
     *
     * @param Version $version Version that contains the resource
     * @param string $customerId The unique CustomerId matching the Customer Profile/Compliance Inquiry that should be resumed or resubmitted. This value will have been returned by the initial Compliance Inquiry creation call.
     */
    public function __construct(
        Version $version,
        $customerId
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'customerId' =>
            $customerId,
        ];

        $this->uri = '/ComplianceInquiries/Customers/' . \rawurlencode($customerId)
        .'/Initialize';
    }

    /**
     * Update the ComplianceInquiriesInstance
     *
     * @param string $primaryProfileSid The unique SID identifier of the Primary Customer Profile that should be used as a parent. Only necessary when creating a secondary Customer Profile.
     * @param array|Options $options Optional Arguments
     * @return ComplianceInquiriesInstance Updated ComplianceInquiriesInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(string $primaryProfileSid, array $options = []): ComplianceInquiriesInstance
    {

        $options = new Values($options);

        $data = Values::of([
            'PrimaryProfileSid' =>
                $primaryProfileSid,
            'ThemeSetId' =>
                $options['themeSetId'],
        ]);

        $headers = Values::of(['Content-Type' => 'application/x-www-form-urlencoded' ]);
        $payload = $this->version->update('POST', $this->uri, [], $data, $headers);

        return new ComplianceInquiriesInstance(
            $this->version,
            $payload,
            $this->solution['customerId']
        );
    }


    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Trusthub.V1.ComplianceInquiriesContext ' . \implode(' ', $context) . ']';
    }
}
