<?php

acf_add_local_field_group(
    array(
        'key'                   => 'group_styles_tailwind_module',
        'title'                 => __( 'TailwindCSS', 'pilopress' ),
        'fields'                => array(

            // CSS Tab
            array(
                'key'               => 'field_tab_css_tailwind',
                'label'             => __( 'CSS', 'pilopress' ),
                'name'              => '',
                'type'              => 'tab',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'acfe_permissions'  => '',
                'placement'         => 'top',
                'endpoint'          => 0,
            ),

            // CSS message
            array(
                'key'                        => 'field_css_tailwind_message',
                'label'                      => '',
                'name'                       => '',
                'type'                       => 'message',
                'instructions'               => '',
                'required'                   => 0,
                'conditional_logic'          => 0,
                'wrapper'                    => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'acfe_save_meta'             => 0,
                'message'                    => __( 'You can add custom CSS in this tab.', 'pilopress' ),
                'new_lines'                  => 'wpautop',
                'esc_html'                   => 0,
                'acfe_field_group_condition' => 0,
            ),

            // Base section
            array(
                'key'                 => 'field_pip_tailwind_style',
                'label'               => '',
                'name'                => 'pip_tailwind_style_base',
                'type'                => 'group',
                'instructions'        => '',
                'required'            => 0,
                'conditional_logic'   => 0,
                'wrapper'             => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'acfe_permissions'    => '',
                'layout'              => 'row',
                'acfe_seamless_style' => 0,
                'acfe_group_modal'    => 0,
                'sub_fields'          => array(
                    array(
                        'key'               => 'field_add_base_import',
                        'label'             => __( 'Add "base" import', 'pilopress' ),
                        'name'              => 'add_base_import',
                        'type'              => 'true_false',
                        'instructions'      => '',
                        'required'          => 0,
                        'conditional_logic' => 0,
                        'wrapper'           => array(
                            'width' => '20',
                            'class' => '',
                            'id'    => '',
                        ),
                        'acfe_permissions'  => '',
                        'message'           => '',
                        'default_value'     => 1,
                        'ui'                => 1,
                        'ui_on_text'        => '',
                        'ui_off_text'       => '',
                    ),
                    array(
                        'key'               => 'field_tailwind_style',
                        'label'             => '',
                        'name'              => 'tailwind_style_after_base',
                        'type'              => 'acfe_code_editor',
                        'instructions'      => __( 'CSS code after <code>@import "tailwindcss/base";</code> line.', 'pilopress' ),
                        'required'          => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field'    => 'field_add_base_import',
                                    'operator' => '==',
                                    'value'    => '1',
                                ),
                            ),
                        ),
                        'wrapper'           => array(
                            'width' => '',
                            'class' => '',
                            'id'    => '',
                        ),
                        'acfe_permissions'  => '',
                        'default_value'     => '',
                        'placeholder'       => '',
                        'mode'              => 'css',
                        'lines'             => 1,
                        'indent_unit'       => 4,
                        'maxlength'         => '',
                        'rows'              => 4,
                        'max_rows'          => '',
                    ),
                ),
            ),

            // Components section
            array(
                'key'                 => 'field_pip_tailwind_style_components',
                'label'               => '',
                'name'                => 'pip_tailwind_style_components',
                'type'                => 'group',
                'instructions'        => '',
                'required'            => 0,
                'conditional_logic'   => 0,
                'wrapper'             => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'acfe_permissions'    => '',
                'layout'              => 'row',
                'acfe_seamless_style' => 0,
                'acfe_group_modal'    => 0,
                'sub_fields'          => array(
                    array(
                        'key'               => 'field_add_components_import',
                        'label'             => __( 'Add "components" import', '' ),
                        'name'              => 'add_components_import',
                        'type'              => 'true_false',
                        'instructions'      => '',
                        'required'          => 0,
                        'conditional_logic' => 0,
                        'wrapper'           => array(
                            'width' => '20',
                            'class' => '',
                            'id'    => '',
                        ),
                        'acfe_permissions'  => '',
                        'message'           => '',
                        'default_value'     => 1,
                        'ui'                => 1,
                        'ui_on_text'        => '',
                        'ui_off_text'       => '',
                    ),
                    array(
                        'key'               => 'field_tailwind_style_after_components',
                        'label'             => '',
                        'name'              => 'tailwind_style_after_components',
                        'type'              => 'acfe_code_editor',
                        'instructions'      => __( 'CSS code after <code>@import "tailwindcss/components";</code> line.', 'pilopress' ),
                        'required'          => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field'    => 'field_add_components_import',
                                    'operator' => '==',
                                    'value'    => '1',
                                ),
                            ),
                        ),
                        'wrapper'           => array(
                            'width' => '',
                            'class' => '',
                            'id'    => '',
                        ),
                        'acfe_permissions'  => '',
                        'default_value'     => '',
                        'placeholder'       => '',
                        'mode'              => 'css',
                        'lines'             => 1,
                        'indent_unit'       => 4,
                        'maxlength'         => '',
                        'rows'              => 4,
                        'max_rows'          => '',
                    ),
                ),
            ),

            // Utilities section
            array(
                'key'                 => 'field_pip_tailwind_style_utilities',
                'label'               => '',
                'name'                => 'pip_tailwind_style_utilities',
                'type'                => 'group',
                'instructions'        => '',
                'required'            => 0,
                'conditional_logic'   => 0,
                'wrapper'             => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'acfe_permissions'    => '',
                'layout'              => 'row',
                'acfe_seamless_style' => 0,
                'acfe_group_modal'    => 0,
                'sub_fields'          => array(
                    array(
                        'key'               => 'field_add_utilities_import',
                        'label'             => __( 'Add "utilities" import', 'pilopress' ),
                        'name'              => 'add_utilities_import',
                        'type'              => 'true_false',
                        'instructions'      => '',
                        'required'          => 0,
                        'conditional_logic' => 0,
                        'wrapper'           => array(
                            'width' => '20',
                            'class' => '',
                            'id'    => '',
                        ),
                        'acfe_permissions'  => '',
                        'message'           => '',
                        'default_value'     => 1,
                        'ui'                => 1,
                        'ui_on_text'        => '',
                        'ui_off_text'       => '',
                    ),
                    array(
                        'key'               => 'field_tailwind_style_after_utilities',
                        'label'             => '',
                        'name'              => 'tailwind_style_after_utilities',
                        'type'              => 'acfe_code_editor',
                        'instructions'      => __( 'CSS code after <code>@import "tailwindcss/utilities";</code> line.', 'pilopress' ),
                        'required'          => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field'    => 'field_add_utilities_import',
                                    'operator' => '==',
                                    'value'    => '1',
                                ),
                            ),
                        ),
                        'wrapper'           => array(
                            'width' => '',
                            'class' => '',
                            'id'    => '',
                        ),
                        'acfe_permissions'  => '',
                        'default_value'     => '',
                        'placeholder'       => '',
                        'mode'              => 'css',
                        'lines'             => 1,
                        'indent_unit'       => 4,
                        'maxlength'         => '',
                        'rows'              => 4,
                        'max_rows'          => '',
                    ),
                ),
            ),

            // Configuration Tab
            array(
                'key'               => 'field_tab_configuration_tailwind',
                'label'             => __( 'Configuration', 'pilopress' ),
                'name'              => '',
                'type'              => 'tab',
                'instructions'      => '',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'acfe_permissions'  => '',
                'placement'         => 'top',
                'endpoint'          => 0,
            ),

            // Configuration message
            array(
                'key'                        => 'field_configuration_tailwind_message',
                'label'                      => '',
                'name'                       => '',
                'type'                       => 'message',
                'instructions'               => '',
                'required'                   => 0,
                'conditional_logic'          => 0,
                'wrapper'                    => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'acfe_save_meta'             => 0,
                'message'                    => __( 'You can override and customize your TailwindCSS configuration in this tab.<br>Please see <a href="https://tailwindcss.com/docs/theme" target="_blank">TailwindCSS documentation</a> for more details (if you have enabled this module).', 'pilopress' ),
                'new_lines'                  => 'wpautop',
                'esc_html'                   => 0,
                'acfe_field_group_condition' => 0,
            ),

            // Configuration
            array(
                'key'                 => 'field_pip_tailwind_config',
                'label'               => '',
                'name'                => 'pip_tailwind_config',
                'type'                => 'group',
                'instructions'        => '',
                'required'            => 0,
                'conditional_logic'   => 0,
                'wrapper'             => array(
                    'width' => '',
                    'class' => '',
                    'id'    => '',
                ),
                'acfe_permissions'    => '',
                'layout'              => 'row',
                'acfe_seamless_style' => 0,
                'acfe_group_modal'    => 0,
                'sub_fields'          => array(
                    array(
                        'key'               => 'field_override_config',
                        'label'             => __( 'Override configuration', 'pilopress' ),
                        'name'              => 'override_config',
                        'type'              => 'true_false',
                        'instructions'      => '',
                        'required'          => 0,
                        'conditional_logic' => 0,
                        'wrapper'           => array(
                            'width' => '',
                            'class' => '',
                            'id'    => '',
                        ),
                        'acfe_permissions'  => '',
                        'message'           => '',
                        'default_value'     => 0,
                        'ui'                => 1,
                        'ui_on_text'        => '',
                        'ui_off_text'       => '',
                    ),
                    array(
                        'key'               => 'field_tailwind_config',
                        'label'             => '',
                        'name'              => 'tailwind_config',
                        'type'              => 'acfe_code_editor',
                        'instructions'      => '',
                        'required'          => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field'    => 'field_override_config',
                                    'operator' => '==',
                                    'value'    => '1',
                                ),
                            ),
                        ),
                        'wrapper'           => array(
                            'width' => '',
                            'class' => '',
                            'id'    => '',
                        ),
                        'acfe_permissions'  => '',
                        'default_value'     => "module.exports = {\n    theme: {\n\n    },\n    variants: {\n\n    },\n    plugins: [\n\n    ],\n};",
                        'placeholder'       => '',
                        'mode'              => 'javascript',
                        'lines'             => 1,
                        'indent_unit'       => 4,
                        'maxlength'         => '',
                        'rows'              => 8,
                        'max_rows'          => '',
                    ),
                ),
            ),

        ),
        'location'              => array(
            array(
                array(
                    'param'    => 'options_page',
                    'operator' => '==',
                    'value'    => 'pip_styles_tailwind_module',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'normal',
        'style'                 => 'seamless',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen'        => '',
        'active'                => true,
        'description'           => '',
        'acfe_display_title'    => '',
        'acfe_autosync'         => '',
        'acfe_permissions'      => '',
        'acfe_form'             => 0,
        'acfe_meta'             => '',
        'acfe_note'             => '',
        'acfe_categories'       => array(
            'options' => __( 'Options', 'pilopress' ),
        ),
    )
);
