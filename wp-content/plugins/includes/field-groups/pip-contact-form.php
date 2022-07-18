<?php
if ( function_exists( 'acf_add_local_field_group' ) ) :

    acf_add_local_field_group(
        array(
            'key'                   => 'group_contact_form',
            'title'                 => 'Formulaire : Contact',
            'fields'                => array(
                array(
                    'key'                        => 'field_6080019288848',
                    'label'                      => 'Objet',
                    'name'                       => 'objet',
                    'type'                       => 'text',
                    'instructions'               => '',
                    'required'                   => 1,
                    'conditional_logic'          => 0,
                    'wrapper'                    => array(
                        'width' => '',
                        'class' => 'mt-0',
                        'id'    => '',
                    ),
                    'hide_field'                 => '',
                    'hide_label'                 => 'all',
                    'hide_instructions'          => '',
                    'hide_required'              => '',
                    'instruction_placement'      => '',
                    'acfe_permissions'           => '',
                    'required_message'           => '',
                    'acfe_save_meta'             => 0,
                    'default_value'              => '',
                    'placeholder'                => 'Objet*',
                    'prepend'                    => '',
                    'append'                     => '',
                    'maxlength'                  => '',
                    'acfe_settings'              => '',
                    'acfe_validate'              => '',
                    'acfe_field_group_condition' => 0,
                ),
                array(
                    'key'                        => 'field_contact_form_first_name',
                    'label'                      => 'Prénom',
                    'name'                       => 'first_name',
                    'type'                       => 'text',
                    'instructions'               => '',
                    'required'                   => 1,
                    'conditional_logic'          => 0,
                    'wrapper'                    => array(
                        'width' => '',
                        'class' => 'mt-0 col-span-2 md:col-span-1',
                        'id'    => '',
                    ),
                    'hide_field'                 => '',
                    'hide_label'                 => 'all',
                    'hide_instructions'          => '',
                    'hide_required'              => '',
                    'instruction_placement'      => '',
                    'acfe_permissions'           => '',
                    'required_message'           => '',
                    'acfe_save_meta'             => 0,
                    'default_value'              => '',
                    'placeholder'                => 'Prénom*',
                    'prepend'                    => '',
                    'append'                     => '',
                    'maxlength'                  => '',
                    'acfe_settings'              => '',
                    'acfe_validate'              => '',
                    'acfe_field_group_condition' => 0,
                ),
                array(
                    'key'                        => 'field_contact_form_name',
                    'label'                      => 'Nom',
                    'name'                       => 'name',
                    'type'                       => 'text',
                    'instructions'               => '',
                    'required'                   => 1,
                    'conditional_logic'          => 0,
                    'wrapper'                    => array(
                        'width' => '',
                        'class' => 'mt-0 col-span-2 md:col-span-1',
                        'id'    => '',
                    ),
                    'hide_field'                 => '',
                    'hide_label'                 => 'all',
                    'hide_instructions'          => '',
                    'hide_required'              => '',
                    'instruction_placement'      => '',
                    'acfe_permissions'           => '',
                    'required_message'           => '',
                    'acfe_save_meta'             => 0,
                    'default_value'              => '',
                    'placeholder'                => 'Nom*',
                    'prepend'                    => '',
                    'append'                     => '',
                    'maxlength'                  => '',
                    'acfe_settings'              => '',
                    'acfe_validate'              => '',
                    'acfe_field_group_condition' => 0,
                ),
                array(
                    'key'                        => 'field_contact_form_',
                    'label'                      => 'Email',
                    'name'                       => 'email',
                    'type'                       => 'email',
                    'instructions'               => '',
                    'required'                   => 1,
                    'conditional_logic'          => 0,
                    'wrapper'                    => array(
                        'width' => '',
                        'class' => 'mt-0 col-span-2 md:col-span-1',
                        'id'    => '',
                    ),
                    'hide_field'                 => '',
                    'hide_label'                 => 'all',
                    'hide_instructions'          => '',
                    'hide_required'              => '',
                    'instruction_placement'      => '',
                    'acfe_permissions'           => '',
                    'required_message'           => '',
                    'acfe_save_meta'             => 0,
                    'default_value'              => '',
                    'placeholder'                => 'Email*',
                    'prepend'                    => '',
                    'append'                     => '',
                    'acfe_settings'              => '',
                    'acfe_validate'              => '',
                    'acfe_field_group_condition' => 0,
                ),
                array(
                    'key'                        => 'field_contact_form_phone',
                    'label'                      => 'Téléphone',
                    'name'                       => 'phone',
                    'type'                       => 'text',
                    'instructions'               => '',
                    'required'                   => 0,
                    'conditional_logic'          => 0,
                    'wrapper'                    => array(
                        'width' => '',
                        'class' => 'mt-0 col-span-2 md:col-span-1',
                        'id'    => '',
                    ),
                    'hide_field'                 => '',
                    'hide_label'                 => 'all',
                    'hide_instructions'          => '',
                    'hide_required'              => '',
                    'instruction_placement'      => '',
                    'acfe_permissions'           => '',
                    'acfe_save_meta'             => 0,
                    'default_value'              => '',
                    'placeholder'                => 'Téléphone',
                    'prepend'                    => '',
                    'append'                     => '',
                    'maxlength'                  => '',
                    'acfe_settings'              => '',
                    'acfe_validate'              => '',
                    'acfe_field_group_condition' => 0,
                ),
                array(
                    'key'                        => 'field_contact_form_message',
                    'label'                      => 'Message',
                    'name'                       => 'message',
                    'type'                       => 'textarea',
                    'instructions'               => '',
                    'required'                   => 1,
                    'conditional_logic'          => 0,
                    'wrapper'                    => array(
                        'width' => '',
                        'class' => 'mt-0',
                        'id'    => '',
                    ),
                    'hide_field'                 => '',
                    'hide_label'                 => 'all',
                    'hide_instructions'          => '',
                    'hide_required'              => '',
                    'instruction_placement'      => '',
                    'acfe_permissions'           => '',
                    'required_message'           => '',
                    'acfe_save_meta'             => 0,
                    'default_value'              => '',
                    'placeholder'                => 'Votre message*',
                    'maxlength'                  => '',
                    'rows'                       => '',
                    'new_lines'                  => '',
                    'acfe_textarea_code'         => 0,
                    'acfe_settings'              => '',
                    'acfe_validate'              => '',
                    'acfe_field_group_condition' => 0,
                ),
                array(
                    'key'               => 'field_contact_form_opt_in',
                    'label'             => 'Opt-in',
                    'name'              => 'opt-in',
                    'type'              => 'checkbox',
                    'instructions'      => '',
                    'required'          => 0,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
                        'class' => 'mt-0',
                        'id'    => '',
                    ),
                    'acfe_save_meta'    => 0,
                    'acfe_permissions'  => '',
                    'choices'           => array(
                        'rgpd' => 'Les informations recueillies dans ce formulaire sont utilisées par MONSITE pour répondre à votre demande. Pour plus d\'informations et pour faire valoir votre droit de rétractation, rendez-vous sur notre page <a href=\'#\'>politique de confidentialité</a>',
                    ),
                    'allow_custom'      => 0,
                    'default_value'     => array(),
                    'layout'            => 'vertical',
                    'toggle'            => 0,
                    'return_format'     => 'value',
                    'translations'      => 'copy_once',
                    'acfe_settings'     => array(
                        'opt-in_settings_1' => array(
                            'acfe_settings_location' => 'front',
                            'acfe_settings_settings' => array(
                                'opt-in_settings_1_setting_1' => array(
                                    'acfe_settings_setting_type' => 'hide_label',
                                    'acfe_settings_setting_operator' => 'true',
                                ),
                            ),
                        ),
                    ),
                    'acfe_validate'     => '',
                    'save_custom'       => 0,
                    'acfe_form'         => true,
                ),
                array(
                    'key'               => 'field_contact_form_captcha',
                    'label'             => 'Captcha',
                    'name'              => 'captcha',
                    'type'              => 'acfe_recaptcha',
                    'instructions'      => '',
                    'required'          => 1,
                    'conditional_logic' => 0,
                    'wrapper'           => array(
                        'width' => '',
                        'class' => 'mt-0 flex justify-center',
                        'id'    => '',
                    ),
                    'acfe_save_meta'    => 0,
                    'acfe_permissions'  => '',
                    'version'           => 'v2',
                    'v2_theme'          => 'light',
                    'v2_size'           => 'normal',
                    'site_key'          => '',
                    'secret_key'        => '',
                    'translations'      => 'copy_once',
                    'acfe_settings'     => array(
                        'captcha_settings_1' => array(
                            'acfe_settings_location' => 'front',
                            'acfe_settings_settings' => array(
                                'captcha_settings_1_setting_1' => array(
                                    'acfe_settings_setting_type' => 'hide_label',
                                    'acfe_settings_setting_operator' => 'true',
                                ),
                            ),
                        ),
                        'captcha_settings_2' => array(
                            'acfe_settings_location' => 'admin',
                            'acfe_settings_settings' => array(
                                'captcha_settings_2_setting_1' => array(
                                    'acfe_settings_setting_type' => 'hide_field',
                                    'acfe_settings_setting_operator' => 'true',
                                ),
                            ),
                        ),
                    ),
                    'acfe_validate'     => '',
                    'disabled'          => 0,
                    'readonly'          => 0,
                    'v3_hide_logo'      => false,
                    'acfe_form'         => true,
                ),
            ),
            'location'              => array(
                array(
                    array(
                        'param'    => 'post_type',
                        'operator' => '==',
                        'value'    => 'all',
                    ),
                ),
            ),
            'menu_order'            => 0,
            'position'              => 'normal',
            'style'                 => 'default',
            'label_placement'       => 'left',
            'instruction_placement' => 'label',
            'hide_on_screen'        => '',
            'active'                => false,
            'description'           => '',
            'acfe_autosync'         => array(
                0 => 'json',
            ),
            'acfe_form'             => 1,
            'acfe_display_title'    => '',
            'acfe_permissions'      => '',
            'acfe_meta'             => '',
            'acfe_note'             => '',
        )
    );

endif;