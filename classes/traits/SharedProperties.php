<?php

namespace JosephCrowell\MagicForms\Classes\Traits;

use Lang;

trait SharedProperties
{
    public function defineProperties()
    {
        return [
            'group' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.group.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.group.description',
                'type'              => 'string',
                'showExternalParam' => false,
            ],
            'rules' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.rules.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.rules.description',
                'type'              => 'dictionary',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_validation',
                'showExternalParam' => false,
            ],
            'rules_messages' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.rules_messages.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.rules_messages.description',
                'type'              => 'dictionary',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_validation',
                'showExternalParam' => false,
            ],
            'custom_attributes' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.custom_attributes.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.custom_attributes.description',
                'type'              => 'dictionary',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_validation',
                'showExternalParam' => false,
            ],
            'messages_success' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.messages_success.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.messages_success.description',
                'type'              => 'string',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_messages',
                'default'           => Lang::get('josephcrowell.magicforms::lang.components.shared.messages_success.default'),
                'showExternalParam' => false,
                'validation'        => ['required' => ['message' => Lang::get('josephcrowell.magicforms::lang.components.shared.validation_req')]]
            ],
            'messages_errors' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.messages_errors.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.messages_errors.description',
                'type'              => 'string',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_messages',
                'default'           => Lang::get('josephcrowell.magicforms::lang.components.shared.messages_errors.default'),
                'showExternalParam' => false,
                'validation'        => ['required' => ['message' => Lang::get('josephcrowell.magicforms::lang.components.shared.validation_req')]]
            ],
            'messages_partial' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.messages_partial.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.messages_partial.description',
                'type'              => 'string',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_messages',
                'showExternalParam' => false
            ],
            'mail_enabled' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.mail_enabled.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.mail_enabled.description',
                'type'              => 'checkbox',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_mail',
                'showExternalParam' => false
            ],
            'mail_subject' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.mail_subject.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.mail_subject.description',
                'type'              => 'string',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_mail',
                'showExternalParam' => false
            ],
            'mail_recipients' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.mail_recipients.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.mail_recipients.description',
                'type'              => 'stringList',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_mail',
                'showExternalParam' => false
            ],
            'mail_bcc' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.mail_bcc.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.mail_bcc.description',
                'type'              => 'stringList',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_mail',
                'showExternalParam' => false
            ],
            'mail_replyto' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.mail_replyto.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.mail_replyto.description',
                'type'              => 'string',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_mail',
                'showExternalParam' => false
            ],
            'mail_template' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.mail_template.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.mail_template.description',
                'type'              => 'string',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_mail',
                'showExternalParam' => false
            ],
            'mail_resp_enabled' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.mail_resp_enabled.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.mail_resp_enabled.description',
                'type'              => 'checkbox',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_mail_resp',
                'showExternalParam' => false
            ],
            'mail_resp_field' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.mail_resp_field.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.mail_resp_field.description',
                'type'              => 'string',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_mail_resp',
                'showExternalParam' => false
            ],
            'mail_resp_name' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.mail_resp_name.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.mail_resp_name.description',
                'type'              => 'string',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_mail_resp',
                'showExternalParam' => false
            ],
            'mail_resp_from' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.mail_resp_from.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.mail_resp_from.description',
                'type'              => 'string',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_mail_resp',
                'showExternalParam' => false
            ],
            'mail_resp_subject' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.mail_resp_subject.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.mail_resp_subject.description',
                'type'              => 'string',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_mail_resp',
                'showExternalParam' => false
            ],
            'mail_resp_template' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.mail_template.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.mail_template.description',
                'type'              => 'string',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_mail_resp',
                'showExternalParam' => false
            ],
            'reset_form' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.reset_form.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.reset_form.description',
                'type'              => 'checkbox',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_settings',
                'showExternalParam' => false
            ],
            'redirect' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.redirect.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.redirect.description',
                'type'              => 'string',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_settings',
                'showExternalParam' => false
            ],
            'inline_errors' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.inline_errors.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.inline_errors.description',
                'type'              => 'dropdown',
                'options'           => ['disabled' => 'josephcrowell.magicforms::lang.components.shared.inline_errors.disabled', 'display' => 'josephcrowell.magicforms::lang.components.shared.inline_errors.display', 'variable' => 'josephcrowell.magicforms::lang.components.shared.inline_errors.variable'],
                'default'           => 'disabled',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_settings',
                'showExternalParam' => false
            ],
            'js_on_success' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.js_on_success.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.js_on_success.description',
                'type'              => 'text',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_settings',
                'showExternalParam' => false
            ],
            'js_on_error' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.js_on_error.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.js_on_error.description',
                'type'              => 'text',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_settings',
                'showExternalParam' => false
            ],
            'allowed_fields' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.allowed_fields.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.allowed_fields.description',
                'type'              => 'stringList',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_security',
                'showExternalParam' => false
            ],
            'sanitize_data' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.sanitize_data.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.sanitize_data.description',
                'type'              => 'dropdown',
                'options'           => ['disabled' => 'josephcrowell.magicforms::lang.components.shared.sanitize_data.disabled', 'htmlspecialchars' => 'josephcrowell.magicforms::lang.components.shared.sanitize_data.htmlspecialchars'],
                'default'           => 'disabled',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_security',
                'showExternalParam' => false
            ],
            'anonymize_ip' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.anonymize_ip.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.anonymize_ip.description',
                'type'              => 'dropdown',
                'options'           => ['disabled' => 'josephcrowell.magicforms::lang.components.shared.anonymize_ip.disabled', 'partial' => 'josephcrowell.magicforms::lang.components.shared.anonymize_ip.partial', 'full' => 'josephcrowell.magicforms::lang.components.shared.anonymize_ip.full'],
                'default'           => 'disabled',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_security',
                'showExternalParam' => false
            ],
            'recaptcha_enabled' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.recaptcha_enabled.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.recaptcha_enabled.description',
                'type'              => 'checkbox',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_recaptcha',
                'showExternalParam' => false
            ],
            'recaptcha_theme' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.recaptcha_theme.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.recaptcha_theme.description',
                'type'              => 'dropdown',
                'options'           => ['light' => 'josephcrowell.magicforms::lang.components.shared.recaptcha_theme.light', 'dark' => 'josephcrowell.magicforms::lang.components.shared.recaptcha_theme.dark'],
                'default'           => 'light',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_recaptcha',
                'showExternalParam' => false
            ],
            'recaptcha_type' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.recaptcha_type.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.recaptcha_type.description',
                'type'              => 'dropdown',
                'options'           => ['image' => 'josephcrowell.magicforms::lang.components.shared.recaptcha_type.image', 'audio' => 'josephcrowell.magicforms::lang.components.shared.recaptcha_type.audio'],
                'default'           => 'image',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_recaptcha',
                'showExternalParam' => false
            ],
            'recaptcha_size' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.recaptcha_size.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.recaptcha_size.description',
                'type'              => 'dropdown',
                'options'           => [
                    'normal' => 'josephcrowell.magicforms::lang.components.shared.recaptcha_size.normal',
                    'compact' => 'josephcrowell.magicforms::lang.components.shared.recaptcha_size.compact',
                    'invisible' => 'josephcrowell.magicforms::lang.components.shared.recaptcha_size.invisible',
                ],
                'default'           => 'normal',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_recaptcha',
                'showExternalParam' => false
            ],
            'skip_database' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.skip_database.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.skip_database.description',
                'type'              => 'checkbox',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_advanced',
                'showExternalParam' => false
            ],
            'emails_date_format' => [
                'title'             => 'josephcrowell.magicforms::lang.components.shared.emails_date_format.title',
                'description'       => 'josephcrowell.magicforms::lang.components.shared.emails_date_format.description',
                'default'           => 'Y-m-d',
                'group'             => 'josephcrowell.magicforms::lang.components.shared.group_advanced',
                'showExternalParam' => false
            ],
        ];
    }
}
