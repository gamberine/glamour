<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v18/resources/local_services_verification_artifact.proto

namespace Google\Ads\GoogleAds\V18\Resources;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A proto holding information specific to a local services business
 * registration check.
 *
 * Generated from protobuf message <code>google.ads.googleads.v18.resources.BusinessRegistrationCheckVerificationArtifact</code>
 */
class BusinessRegistrationCheckVerificationArtifact extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The type of business registration check (number, document).
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v18.enums.LocalServicesBusinessRegistrationTypeEnum.LocalServicesBusinessRegistrationType registration_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $registration_type = null;
    /**
     * Output only. The id of the check, such as vat_tax_id, representing "VAT Tax
     * ID" requirement.
     *
     * Generated from protobuf field <code>optional string check_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $check_id = null;
    /**
     * Output only. Registration document rejection reason.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v18.enums.LocalServicesBusinessRegistrationCheckRejectionReasonEnum.LocalServicesBusinessRegistrationCheckRejectionReason rejection_reason = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $rejection_reason = null;
    protected $business_registration;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $registration_type
     *           Output only. The type of business registration check (number, document).
     *     @type string $check_id
     *           Output only. The id of the check, such as vat_tax_id, representing "VAT Tax
     *           ID" requirement.
     *     @type int $rejection_reason
     *           Output only. Registration document rejection reason.
     *     @type \Google\Ads\GoogleAds\V18\Resources\BusinessRegistrationNumber $registration_number
     *           Output only. Message storing government issued number for the business.
     *     @type \Google\Ads\GoogleAds\V18\Resources\BusinessRegistrationDocument $registration_document
     *           Output only. Message storing document info for the business.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V18\Resources\LocalServicesVerificationArtifact::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The type of business registration check (number, document).
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v18.enums.LocalServicesBusinessRegistrationTypeEnum.LocalServicesBusinessRegistrationType registration_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getRegistrationType()
    {
        return isset($this->registration_type) ? $this->registration_type : 0;
    }

    public function hasRegistrationType()
    {
        return isset($this->registration_type);
    }

    public function clearRegistrationType()
    {
        unset($this->registration_type);
    }

    /**
     * Output only. The type of business registration check (number, document).
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v18.enums.LocalServicesBusinessRegistrationTypeEnum.LocalServicesBusinessRegistrationType registration_type = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setRegistrationType($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\LocalServicesBusinessRegistrationTypeEnum\LocalServicesBusinessRegistrationType::class);
        $this->registration_type = $var;

        return $this;
    }

    /**
     * Output only. The id of the check, such as vat_tax_id, representing "VAT Tax
     * ID" requirement.
     *
     * Generated from protobuf field <code>optional string check_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getCheckId()
    {
        return isset($this->check_id) ? $this->check_id : '';
    }

    public function hasCheckId()
    {
        return isset($this->check_id);
    }

    public function clearCheckId()
    {
        unset($this->check_id);
    }

    /**
     * Output only. The id of the check, such as vat_tax_id, representing "VAT Tax
     * ID" requirement.
     *
     * Generated from protobuf field <code>optional string check_id = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setCheckId($var)
    {
        GPBUtil::checkString($var, True);
        $this->check_id = $var;

        return $this;
    }

    /**
     * Output only. Registration document rejection reason.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v18.enums.LocalServicesBusinessRegistrationCheckRejectionReasonEnum.LocalServicesBusinessRegistrationCheckRejectionReason rejection_reason = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getRejectionReason()
    {
        return isset($this->rejection_reason) ? $this->rejection_reason : 0;
    }

    public function hasRejectionReason()
    {
        return isset($this->rejection_reason);
    }

    public function clearRejectionReason()
    {
        unset($this->rejection_reason);
    }

    /**
     * Output only. Registration document rejection reason.
     *
     * Generated from protobuf field <code>optional .google.ads.googleads.v18.enums.LocalServicesBusinessRegistrationCheckRejectionReasonEnum.LocalServicesBusinessRegistrationCheckRejectionReason rejection_reason = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setRejectionReason($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V18\Enums\LocalServicesBusinessRegistrationCheckRejectionReasonEnum\LocalServicesBusinessRegistrationCheckRejectionReason::class);
        $this->rejection_reason = $var;

        return $this;
    }

    /**
     * Output only. Message storing government issued number for the business.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.BusinessRegistrationNumber registration_number = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V18\Resources\BusinessRegistrationNumber|null
     */
    public function getRegistrationNumber()
    {
        return $this->readOneof(1);
    }

    public function hasRegistrationNumber()
    {
        return $this->hasOneof(1);
    }

    /**
     * Output only. Message storing government issued number for the business.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.BusinessRegistrationNumber registration_number = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V18\Resources\BusinessRegistrationNumber $var
     * @return $this
     */
    public function setRegistrationNumber($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Resources\BusinessRegistrationNumber::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Output only. Message storing document info for the business.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.BusinessRegistrationDocument registration_document = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Ads\GoogleAds\V18\Resources\BusinessRegistrationDocument|null
     */
    public function getRegistrationDocument()
    {
        return $this->readOneof(2);
    }

    public function hasRegistrationDocument()
    {
        return $this->hasOneof(2);
    }

    /**
     * Output only. Message storing document info for the business.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v18.resources.BusinessRegistrationDocument registration_document = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Ads\GoogleAds\V18\Resources\BusinessRegistrationDocument $var
     * @return $this
     */
    public function setRegistrationDocument($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V18\Resources\BusinessRegistrationDocument::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getBusinessRegistration()
    {
        return $this->whichOneof("business_registration");
    }

}
