<?php
echo '<pre>';
echo '
&lt;?xml version="1.0"?&rt;
&lt;!--
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE_AFL.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @category    Mage
 * @package     Mage_Customer
 * @copyright   Copyright (c) 2012 Magento Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */
--&rt;
&lt;config&rt;
    &lt;modules&rt;
        &lt;Mage_Customer&rt;
            &lt;version&rt;1.6.2.0.1&lt;/version&rt;
        &lt;/Mage_Customer&rt;
    &lt;/modules&rt;
    &lt;admin&rt;
        &lt;fieldsets&rt;
            &lt;customer_dataflow&rt;
                &lt;store_id&rt;
                    &lt;system&rt;1&lt;/system&rt;
                &lt;/store_id&rt;
                &lt;store&rt;
                    &lt;ignore&rt;1&lt;/ignore&rt;
                &lt;/store&rt;
                &lt;entity_id&rt;
                    &lt;system&rt;1&lt;/system&rt;
                    &lt;ignore&rt;1&lt;/ignore&rt;
                &lt;/entity_id&rt;
                &lt;attribute_set_id&rt;
                    &lt;system&rt;1&lt;/system&rt;
                    &lt;ignore&rt;1&lt;/ignore&rt;
                &lt;/attribute_set_id&rt;
                &lt;attribute_set&rt;
                    &lt;ignore&rt;1&lt;/ignore&rt;
                &lt;/attribute_set&rt;
                &lt;entity_type_id&rt;
                    &lt;system&rt;1&lt;/system&rt;
                &lt;/entity_type_id&rt;
                &lt;increment_id&rt;
                    &lt;system&rt;1&lt;/system&rt;
                    &lt;ignore&rt;1&lt;/ignore&rt;
                &lt;/increment_id&rt;
                &lt;parent_id&rt;
                    &lt;system&rt;1&lt;/system&rt;
                &lt;/parent_id&rt;
                &lt;created_at&rt;
                    &lt;system&rt;1&lt;/system&rt;
                &lt;/created_at&rt;
                &lt;updated_at&rt;
                    &lt;system&rt;1&lt;/system&rt;
                &lt;/updated_at&rt;
                &lt;group_id&rt;
                    &lt;ignore&rt;1&lt;/ignore&rt;
                &lt;/group_id&rt;
                &lt;type_id&rt;
                    &lt;system&rt;1&lt;/system&rt;
                    &lt;ignore&rt;1&lt;/ignore&rt;
                &lt;/type_id&rt;
                &lt;type&rt;
                    &lt;ignore&rt;1&lt;/ignore&rt;
                &lt;/type&rt;
                &lt;created_in&rt;
                    &lt;system&rt;1&lt;/system&rt;
                    &lt;ignore&rt;1&lt;/ignore&rt;
                &lt;/created_in&rt;
                &lt;website_id&rt;
                    &lt;system&rt;1&lt;/system&rt;
                &lt;/website_id&rt;
                &lt;default_billing&rt;
                    &lt;system&rt;1&lt;/system&rt;
                &lt;/default_billing&rt;
                &lt;default_shipping&rt;
                    &lt;system&rt;1&lt;/system&rt;
                &lt;/default_shipping&rt;
                &lt;prefix&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                    &lt;mapped&rt;1&lt;/mapped&rt;
                &lt;/prefix&rt;
                &lt;firstname&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                    &lt;required&rt;1&lt;/required&rt;
                    &lt;mapped&rt;1&lt;/mapped&rt;
                &lt;/firstname&rt;
                &lt;middlename&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                    &lt;mapped&rt;1&lt;/mapped&rt;
                &lt;/middlename&rt;
                &lt;lastname&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                    &lt;required&rt;1&lt;/required&rt;
                    &lt;mapped&rt;1&lt;/mapped&rt;
                &lt;/lastname&rt;
                &lt;suffix&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                    &lt;mapped&rt;1&lt;/mapped&rt;
                &lt;/suffix&rt;
                &lt;street_full&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                &lt;/street_full&rt;
                &lt;street1&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                    &lt;street&rt;1&lt;/street&rt;
                &lt;/street1&rt;
                &lt;street2&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                    &lt;street&rt;1&lt;/street&rt;
                &lt;/street2&rt;
                &lt;street3&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                    &lt;street&rt;1&lt;/street&rt;
                &lt;/street3&rt;
                &lt;street4&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                    &lt;street&rt;1&lt;/street&rt;
                &lt;/street4&rt;
                &lt;street5&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                    &lt;street&rt;1&lt;/street&rt;
                &lt;/street5&rt;
                &lt;street6&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                    &lt;street&rt;1&lt;/street&rt;
                &lt;/street6&rt;
                &lt;street7&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                    &lt;street&rt;1&lt;/street&rt;
                &lt;/street7&rt;
                &lt;street8&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                    &lt;street&rt;1&lt;/street&rt;
                &lt;/street8&rt;
                &lt;city&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                &lt;/city&rt;
                &lt;region&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                &lt;/region&rt;
                &lt;country&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                    &lt;billing_required&rt;1&lt;/billing_required&rt;
                    &lt;shipping_required&rt;1&lt;/shipping_required&rt;
                &lt;/country&rt;
                &lt;postcode&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                    &lt;billing_required&rt;1&lt;/billing_required&rt;
                    &lt;shipping_required&rt;1&lt;/shipping_required&rt;
                &lt;/postcode&rt;
                &lt;telephone&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                &lt;/telephone&rt;
                &lt;company&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                &lt;/company&rt;
                &lt;fax&rt;
                    &lt;billing&rt;1&lt;/billing&rt;
                    &lt;shipping&rt;1&lt;/shipping&rt;
                &lt;/fax&rt;
            &lt;/customer_dataflow&rt;
        &lt;/fieldsets&rt;
    &lt;/admin&rt;
    &lt;global&rt;
        &lt;fieldsets&rt;
            &lt;customer_account&rt;
                &lt;prefix&rt;
                    &lt;create&rt;1&lt;/create&rt;
                    &lt;update&rt;1&lt;/update&rt;
                    &lt;name&rt;1&lt;/name&rt;
                &lt;/prefix&rt;
                &lt;firstname&rt;
                    &lt;create&rt;1&lt;/create&rt;
                    &lt;update&rt;1&lt;/update&rt;
                    &lt;name&rt;1&lt;/name&rt;
                &lt;/firstname&rt;
                &lt;middlename&rt;
                    &lt;create&rt;1&lt;/create&rt;
                    &lt;update&rt;1&lt;/update&rt;
                    &lt;name&rt;1&lt;/name&rt;
                &lt;/middlename&rt;
                &lt;lastname&rt;
                    &lt;create&rt;1&lt;/create&rt;
                    &lt;update&rt;1&lt;/update&rt;
                    &lt;name&rt;1&lt;/name&rt;
                &lt;/lastname&rt;
                &lt;suffix&rt;
                    &lt;create&rt;1&lt;/create&rt;
                    &lt;update&rt;1&lt;/update&rt;
                    &lt;name&rt;1&lt;/name&rt;
                &lt;/suffix&rt;
                &lt;email&rt;
                    &lt;create&rt;1&lt;/create&rt;
                    &lt;update&rt;1&lt;/update&rt;
                &lt;/email&rt;
                &lt;password&rt;
                    &lt;create&rt;1&lt;/create&rt;
                &lt;/password&rt;
                &lt;confirmation&rt;
                    &lt;create&rt;1&lt;/create&rt;
                &lt;/confirmation&rt;
                &lt;dob&rt;
                    &lt;create&rt;1&lt;/create&rt;
                    &lt;update&rt;1&lt;/update&rt;
                &lt;/dob&rt;
                &lt;taxvat&rt;
                    &lt;create&rt;1&lt;/create&rt;
                    &lt;update&rt;1&lt;/update&rt;
                &lt;/taxvat&rt;
                &lt;gender&rt;
                    &lt;create&rt;1&lt;/create&rt;
                    &lt;update&rt;1&lt;/update&rt;
                &lt;/gender&rt;
            &lt;/customer_account&rt;
            &lt;customer_address&rt;
                &lt;vat_id&rt;
                    &lt;to_quote_address&rt;*&lt;/to_quote_address&rt;
                &lt;/vat_id&rt;
                &lt;vat_is_valid&rt;
                    &lt;to_quote_address&rt;*&lt;/to_quote_address&rt;
                &lt;/vat_is_valid&rt;
                &lt;vat_request_id&rt;
                    &lt;to_quote_address&rt;*&lt;/to_quote_address&rt;
                &lt;/vat_request_id&rt;
                &lt;vat_request_date&rt;
                    &lt;to_quote_address&rt;*&lt;/to_quote_address&rt;
                &lt;/vat_request_date&rt;
                &lt;vat_request_success&rt;
                    &lt;to_quote_address&rt;*&lt;/to_quote_address&rt;
                &lt;/vat_request_success&rt;
            &lt;/customer_address&rt;
            &lt;sales_convert_order_address&rt;
                &lt;vat_id&rt;
                    &lt;to_quote_address&rt;*&lt;/to_quote_address&rt;
                &lt;/vat_id&rt;
                &lt;vat_is_valid&rt;
                    &lt;to_quote_address&rt;*&lt;/to_quote_address&rt;
                &lt;/vat_is_valid&rt;
                &lt;vat_request_id&rt;
                    &lt;to_quote_address&rt;*&lt;/to_quote_address&rt;
                &lt;/vat_request_id&rt;
                &lt;vat_request_date&rt;
                    &lt;to_quote_address&rt;*&lt;/to_quote_address&rt;
                &lt;/vat_request_date&rt;
                &lt;vat_request_success&rt;
                    &lt;to_quote_address&rt;*&lt;/to_quote_address&rt;
                &lt;/vat_request_success&rt;
            &lt;/sales_convert_order_address&rt;
            &lt;sales_convert_quote_address&rt;
                &lt;vat_id&rt;
                    &lt;to_order_address&rt;*&lt;/to_order_address&rt;
                    &lt;to_customer_address&rt;*&lt;/to_customer_address&rt;
                &lt;/vat_id&rt;
                &lt;vat_is_valid&rt;
                    &lt;to_order_address&rt;*&lt;/to_order_address&rt;
                    &lt;to_customer_address&rt;*&lt;/to_customer_address&rt;
                &lt;/vat_is_valid&rt;
                &lt;vat_request_id&rt;
                    &lt;to_order_address&rt;*&lt;/to_order_address&rt;
                    &lt;to_customer_address&rt;*&lt;/to_customer_address&rt;
                &lt;/vat_request_id&rt;
                &lt;vat_request_date&rt;
                    &lt;to_order_address&rt;*&lt;/to_order_address&rt;
                    &lt;to_customer_address&rt;*&lt;/to_customer_address&rt;
                &lt;/vat_request_date&rt;
                &lt;vat_request_success&rt;
                    &lt;to_order_address&rt;*&lt;/to_order_address&rt;
                    &lt;to_customer_address&rt;*&lt;/to_customer_address&rt;
                &lt;/vat_request_success&rt;
            &lt;/sales_convert_quote_address&rt;
            &lt;sales_copy_order_billing_address&rt;
                &lt;vat_id&rt;
                    &lt;to_order&rt;*&lt;/to_order&rt;
                &lt;/vat_id&rt;
                &lt;vat_is_valid&rt;
                    &lt;to_order&rt;*&lt;/to_order&rt;
                &lt;/vat_is_valid&rt;
                &lt;vat_request_id&rt;
                    &lt;to_order&rt;*&lt;/to_order&rt;
                &lt;/vat_request_id&rt;
                &lt;vat_request_date&rt;
                    &lt;to_order&rt;*&lt;/to_order&rt;
                &lt;/vat_request_date&rt;
                &lt;vat_request_success&rt;
                    &lt;to_order&rt;*&lt;/to_order&rt;
                &lt;/vat_request_success&rt;
            &lt;/sales_copy_order_billing_address&rt;
        &lt;/fieldsets&rt;
        &lt;customer&rt;
            &lt;address&rt;
                &lt;formats&rt;
                    &lt;text translate="title" module="customer"&rt;
                        &lt;title&rt;Text&lt;/title&rt;
                    &lt;/text&rt;
                    &lt;oneline translate="title" module="customer"&rt;
                        &lt;title&rt;Text One Line&lt;/title&rt;
                    &lt;/oneline&rt;
                    &lt;html translate="title" module="customer"&rt;
                        &lt;title&rt;HTML&lt;/title&rt;
                        &lt;htmlEscape&rt;true&lt;/htmlEscape&rt;
                    &lt;/html&rt;
                    &lt;pdf translate="title" module="customer"&rt;
                        &lt;title&rt;PDF&lt;/title&rt;
                    &lt;/pdf&rt;
                    &lt;js_template template="title" module="customer"&rt;
                        &lt;title&rt;JavaScript Template&lt;/title&rt;
                    &lt;/js_template&rt;
                &lt;/formats&rt;
            &lt;/address&rt;
        &lt;/customer&rt;
        &lt;blocks&rt;
            &lt;customer&rt;
                &lt;class&rt;Mage_Customer_Block&lt;/class&rt;
            &lt;/customer&rt;
        &lt;/blocks&rt;
        &lt;models&rt;
            &lt;customer&rt;
                &lt;class&rt;Mage_Customer_Model&lt;/class&rt;
                &lt;resourceModel&rt;customer_resource&lt;/resourceModel&rt;
            &lt;/customer&rt;
            &lt;customer_resource&rt;
                &lt;class&rt;Mage_Customer_Model_Resource&lt;/class&rt;
                &lt;deprecatedNode&rt;customer_mysql4&lt;/deprecatedNode&rt;
                &lt;entities&rt;
                    &lt;entity&rt;
                        &lt;table&rt;customer_entity&lt;/table&rt;
                    &lt;/entity&rt;
                    &lt;address_entity&rt;
                        &lt;table&rt;customer_address_entity&lt;/table&rt;
                    &lt;/address_entity&rt;
                    &lt;value_prefix&rt;
                        &lt;table&rt;customer_entity&lt;/table&rt;
                    &lt;/value_prefix&rt;
                    &lt;customer_group&rt;
                        &lt;table&rt;customer_group&lt;/table&rt;
                    &lt;/customer_group&rt;
                    &lt;eav_attribute&rt;
                        &lt;table&rt;customer_eav_attribute&lt;/table&rt;
                    &lt;/eav_attribute&rt;
                    &lt;eav_attribute_website&rt;
                        &lt;table&rt;customer_eav_attribute_website&lt;/table&rt;
                    &lt;/eav_attribute_website&rt;
                    &lt;form_attribute&rt;
                        &lt;table&rt;customer_form_attribute&lt;/table&rt;
                    &lt;/form_attribute&rt;
                &lt;/entities&rt;
            &lt;/customer_resource&rt;
        &lt;/models&rt;
        &lt;resources&rt;
            &lt;customer_setup&rt;
                &lt;setup&rt;
                    &lt;module&rt;Mage_Customer&lt;/module&rt;
                    &lt;class&rt;Mage_Customer_Model_Resource_Setup&lt;/class&rt;
                &lt;/setup&rt;
            &lt;/customer_setup&rt;
        &lt;/resources&rt;
        &lt;template&rt;
            &lt;email&rt;
                &lt;customer_create_account_email_template translate="label" module="customer"&rt;
                    &lt;label&rt;New account&lt;/label&rt;
                    &lt;file&rt;account_new.html&lt;/file&rt;
                    &lt;type&rt;html&lt;/type&rt;
                &lt;/customer_create_account_email_template&rt;
                &lt;customer_create_account_email_confirmation_template translate="label" module="customer"&rt;
                    &lt;label&rt;New account confirmation key&lt;/label&rt;
                    &lt;file&rt;account_new_confirmation.html&lt;/file&rt;
                    &lt;type&rt;html&lt;/type&rt;
                &lt;/customer_create_account_email_confirmation_template&rt;
                &lt;customer_create_account_email_confirmed_template translate="label" module="customer"&rt;
                    &lt;label&rt;New account confirmed&lt;/label&rt;
                    &lt;file&rt;account_new_confirmed.html&lt;/file&rt;
                    &lt;type&rt;html&lt;/type&rt;
                &lt;/customer_create_account_email_confirmed_template&rt;
                &lt;customer_password_forgot_email_template translate="label" module="customer"&rt;
                    &lt;label&rt;Forgot Password&lt;/label&rt;
                    &lt;file&rt;account_password_reset_confirmation.html&lt;/file&rt;
                    &lt;type&rt;html&lt;/type&rt;
                &lt;/customer_password_forgot_email_template&rt;
                &lt;customer_password_remind_email_template translate="label" module="customer"&rt;
                    &lt;label&rt;Remind Password&lt;/label&rt;
                    &lt;file&rt;password_new.html&lt;/file&rt;
                    &lt;type&rt;html&lt;/type&rt;
                &lt;/customer_password_remind_email_template&rt;
            &lt;/email&rt;
        &lt;/template&rt;
        &lt;events&rt;
            &lt;customer_address_save_before&rt;
                &lt;observers&rt;
                    &lt;customer_address_before_save_viv_observer&rt;
                        &lt;class&rt;customer/observer&lt;/class&rt;
                        &lt;method&rt;beforeAddressSave&lt;/method&rt;
                    &lt;/customer_address_before_save_viv_observer&rt;
                &lt;/observers&rt;
            &lt;/customer_address_save_before&rt;
            &lt;customer_address_save_after&rt;
                &lt;observers&rt;
                    &lt;customer_addres_after_save_viv_observer&rt;
                        &lt;class&rt;customer/observer&lt;/class&rt;
                        &lt;method&rt;afterAddressSave&lt;/method&rt;
                    &lt;/customer_addres_after_save_viv_observer&rt;
                &lt;/observers&rt;
            &lt;/customer_address_save_after&rt;
        &lt;/events&rt;
    &lt;/global&rt;
    &lt;adminhtml&rt;
        &lt;translate&rt;
            &lt;modules&rt;
                &lt;Mage_Customer&rt;
                    &lt;files&rt;
                        &lt;default&rt;Mage_Customer.csv&lt;/default&rt;
                    &lt;/files&rt;
                &lt;/Mage_Customer&rt;
            &lt;/modules&rt;
        &lt;/translate&rt;
    &lt;/adminhtml&rt;
    &lt;frontend&rt;
        &lt;secure_url&rt;
            &lt;customer&rt;/customer/&lt;/customer&rt;
        &lt;/secure_url&rt;
        &lt;events&rt;
            &lt;controller_action_layout_load_before&rt;
                &lt;observers&rt;
                    &lt;customer_is_logged_in_observer&rt;
                        &lt;class&rt;customer/observer&lt;/class&rt;
                        &lt;method&rt;beforeLoadLayout&lt;/method&rt;
                    &lt;/customer_is_logged_in_observer&rt;
                &lt;/observers&rt;
            &lt;/controller_action_layout_load_before&rt;
            &lt;sales_model_service_quote_submit_after&rt;
                &lt;observers&rt;
                    &lt;restore_customer_group_id&rt;
                        &lt;class&rt;customer/observer&lt;/class&rt;
                        &lt;method&rt;quoteSubmitAfter&lt;/method&rt;
                    &lt;/restore_customer_group_id&rt;
                &lt;/observers&rt;
            &lt;/sales_model_service_quote_submit_after&rt;
        &lt;/events&rt;
        &lt;routers&rt;
            &lt;customer&rt;
                &lt;use&rt;standard&lt;/use&rt;
                &lt;args&rt;
                    &lt;module&rt;Mage_Customer&lt;/module&rt;
                    &lt;frontName&rt;customer&lt;/frontName&rt;
                &lt;/args&rt;
            &lt;/customer&rt;
        &lt;/routers&rt;
        &lt;translate&rt;
            &lt;modules&rt;
                &lt;Mage_Customer&rt;
                    &lt;files&rt;
                        &lt;default&rt;Mage_Customer.csv&lt;/default&rt;
                    &lt;/files&rt;
                &lt;/Mage_Customer&rt;
            &lt;/modules&rt;
        &lt;/translate&rt;
        &lt;layout&rt;
            &lt;updates&rt;
                &lt;customer module="Mage_Customer"&rt;
                    &lt;file&rt;customer.xml&lt;/file&rt;
                &lt;/customer&rt;
            &lt;/updates&rt;
        &lt;/layout&rt;
    &lt;/frontend&rt;
    &lt;default&rt;
        &lt;customer&rt;
            &lt;account_share&rt;
                &lt;scope&rt;1&lt;/scope&rt;
            &lt;/account_share&rt;
            &lt;create_account&rt;
                &lt;confirm&rt;0&lt;/confirm&rt;
                &lt;default_group&rt;1&lt;/default_group&rt;
                &lt;tax_calculation_address_type&rt;billing&lt;/tax_calculation_address_type&rt;
                &lt;email_domain&rt;example.com&lt;/email_domain&rt;
                &lt;email_identity&rt;general&lt;/email_identity&rt;
                &lt;email_template&rt;customer_create_account_email_template&lt;/email_template&rt;
                &lt;email_confirmation_template&rt;customer_create_account_email_confirmation_template&lt;/email_confirmation_template&rt;
                &lt;email_confirmed_template&rt;customer_create_account_email_confirmed_template&lt;/email_confirmed_template&rt;
                &lt;vat_frontend_visibility&rt;0&lt;/vat_frontend_visibility&rt;
            &lt;/create_account&rt;
            &lt;default&rt;
                &lt;group&rt;1&lt;/group&rt;
            &lt;/default&rt;
            &lt;password&rt;
                &lt;forgot_email_identity&rt;support&lt;/forgot_email_identity&rt;
                &lt;forgot_email_template&rt;customer_password_forgot_email_template&lt;/forgot_email_template&rt;
                &lt;remind_email_template&rt;customer_password_remind_email_template&lt;/remind_email_template&rt;
                &lt;reset_link_expiration_period&rt;1&lt;/reset_link_expiration_period&rt;
            &lt;/password&rt;
            &lt;address&rt;
                &lt;street_lines&rt;2&lt;/street_lines&rt;
                &lt;prefix_show/&rt;
                &lt;prefix_options/&rt;
                &lt;middlename_show/&rt;
                &lt;suffix_show/&rt;
                &lt;suffix_options/&rt;
                &lt;dob_show/&rt;
                &lt;gender_show/&rt;
            &lt;/address&rt;
            &lt;startup&rt;
                &lt;redirect_dashboard&rt;1&lt;/redirect_dashboard&rt;
            &lt;/startup&rt;
            &lt;address_templates&rt;
                &lt;text&rt;{{depend prefix}}{{var prefix}} {{/depend}}{{var firstname}} {{depend middlename}}{{var middlename}} {{/depend}}{{var lastname}}{{depend suffix}} {{var suffix}}{{/depend}}
{{depend company}}{{var company}}{{/depend}}
{{if street1}}{{var street1}}
{{/if}}
{{depend street2}}{{var street2}}{{/depend}}
{{depend street3}}{{var street3}}{{/depend}}
{{depend street4}}{{var street4}}{{/depend}}
{{if city}}{{var city}},  {{/if}}{{if region}}{{var region}}, {{/if}}{{if postcode}}{{var postcode}}{{/if}}
{{var country}}
T: {{var telephone}}
{{depend fax}}F: {{var fax}}{{/depend}}
{{depend vat_id}}VAT: {{var vat_id}}{{/depend}}&lt;/text&rt;
                &lt;oneline&rt;{{depend prefix}}{{var prefix}} {{/depend}}{{var firstname}} {{depend middlename}}{{var middlename}} {{/depend}}{{var lastname}}{{depend suffix}} {{var suffix}}{{/depend}}, {{var street}}, {{var city}}, {{var region}} {{var postcode}}, {{var country}}&lt;/oneline&rt;
                &lt;html&rt;{{depend prefix}}{{var prefix}} {{/depend}}{{var firstname}} {{depend middlename}}{{var middlename}} {{/depend}}{{var lastname}}{{depend suffix}} {{var suffix}}{{/depend}}br/&gt;
{{depend company}}{{var company}}br /&gt;{{/depend}}
{{if street1}}{{var street1}}br /&gt;{{/if}}
{{depend street2}}{{var street2}}br /&gt;{{/depend}}
{{depend street3}}{{var street3}}br /&gt;{{/depend}}
{{depend street4}}{{var street4}}br /&gt;{{/depend}}
{{if city}}{{var city}},  {{/if}}{{if region}}{{var region}}, {{/if}}{{if postcode}}{{var postcode}}{{/if}}br/&gt;
{{var country}}br/&gt;
{{depend telephone}}T: {{var telephone}}{{/depend}}
{{depend fax}}br/&gt;F: {{var fax}}{{/depend}}
{{depend vat_id}}br/&gt;VAT: {{var vat_id}}{{/depend}}&lt;/html&rt;
                &lt;pdf&rt;{{depend prefix}}{{var prefix}} {{/depend}}{{var firstname}} {{depend middlename}}{{var middlename}} {{/depend}}{{var lastname}}{{depend suffix}} {{var suffix}}{{/depend}}|
{{depend company}}{{var company}}|{{/depend}}
{{if street1}}{{var street1}}
{{/if}}
{{depend street2}}{{var street2}}|{{/depend}}
{{depend street3}}{{var street3}}|{{/depend}}
{{depend street4}}{{var street4}}|{{/depend}}
{{if city}}{{var city}},|{{/if}}
{{if region}}{{var region}}, {{/if}}{{if postcode}}{{var postcode}}{{/if}}|
{{var country}}|
{{depend telephone}}T: {{var telephone}}{{/depend}}|
{{depend fax}}br/&gt;F: {{var fax}}{{/depend}}|
{{depend vat_id}}br/&gt;VAT: {{var vat_id}}{{/depend}}|&lt;/pdf&rt;
                &lt;js_template&rt;#{prefix} #{firstname} #{middlename} #{lastname} #{suffix}br/&gt;#{company}br/&gt;#{street0}br/&gt;#{street1}br/&gt;#{street2}br/&gt;#{street3}br/&gt;#{city}, #{region}, #{postcode}br/&gt;#{country_id}br/&gt;T: #{telephone}br/&gt;F: #{fax}br/&gt;VAT: #{vat_id}&lt;/js_template&rt;
            &lt;/address_templates&rt;
        &lt;/customer&rt;
    &lt;/default&rt;
&lt;/config&rt;';
echo '</pre>';