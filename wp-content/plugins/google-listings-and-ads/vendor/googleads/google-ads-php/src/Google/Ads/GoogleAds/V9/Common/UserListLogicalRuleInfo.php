<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/common/user_lists.proto

namespace Google\Ads\GoogleAds\V9\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A user list logical rule. A rule has a logical operator (and/or/not) and a
 * list of user lists as operands.
 *
 * Generated from protobuf message <code>google.ads.googleads.v9.common.UserListLogicalRuleInfo</code>
 */
class UserListLogicalRuleInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The logical operator of the rule.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListLogicalRuleOperatorEnum.UserListLogicalRuleOperator operator = 1;</code>
     */
    protected $operator = 0;
    /**
     * The list of operands of the rule.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.LogicalUserListOperandInfo rule_operands = 2;</code>
     */
    private $rule_operands;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $operator
     *           The logical operator of the rule.
     *     @type \Google\Ads\GoogleAds\V9\Common\LogicalUserListOperandInfo[]|\Google\Protobuf\Internal\RepeatedField $rule_operands
     *           The list of operands of the rule.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V9\Common\UserLists::initOnce();
        parent::__construct($data);
    }

    /**
     * The logical operator of the rule.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListLogicalRuleOperatorEnum.UserListLogicalRuleOperator operator = 1;</code>
     * @return int
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * The logical operator of the rule.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v9.enums.UserListLogicalRuleOperatorEnum.UserListLogicalRuleOperator operator = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOperator($var)
    {
        GPBUtil::checkEnum($var, \Google\Ads\GoogleAds\V9\Enums\UserListLogicalRuleOperatorEnum\UserListLogicalRuleOperator::class);
        $this->operator = $var;

        return $this;
    }

    /**
     * The list of operands of the rule.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.LogicalUserListOperandInfo rule_operands = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRuleOperands()
    {
        return $this->rule_operands;
    }

    /**
     * The list of operands of the rule.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v9.common.LogicalUserListOperandInfo rule_operands = 2;</code>
     * @param \Google\Ads\GoogleAds\V9\Common\LogicalUserListOperandInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRuleOperands($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V9\Common\LogicalUserListOperandInfo::class);
        $this->rule_operands = $arr;

        return $this;
    }

}

