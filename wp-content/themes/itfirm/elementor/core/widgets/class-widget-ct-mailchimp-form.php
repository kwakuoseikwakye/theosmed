<?php

class CT_CtMailchimpForm_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_mailchimp_form';
    protected $title = 'Case Mailchimp Form';
    protected $icon = 'eicon-email-field';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"source_section","label":"Color Settings","tab":"style","controls":[{"name":"style","label":"Layout","type":"select","options":{"style1":"Style 1","style2":"Style 2"},"default":"style1"},{"name":"input_color","label":"Input Color","type":"color","selectors":{"{{WRAPPER}} .ct-mailchimp.ct-mailchimp1 .mc4wp-form .mc4wp-form-fields input[type=\"email\"]":"color: {{VALUE}};"}},{"name":"input_bg_color","label":"Input Background Color","type":"color","selectors":{"{{WRAPPER}} .ct-mailchimp.ct-mailchimp1 .mc4wp-form .mc4wp-form-fields input[type=\"email\"]":"background-color: {{VALUE}};"}},{"name":"btn_gradient_from","label":"Button Color Gradient From","type":"color","condition":{"style":["style1"]}},{"name":"btn_gradient_to","label":"Button Color Gradient To","type":"color","condition":{"style":["style1"]}},{"name":"btn_bg_color","label":"Button Background Color","type":"color","selectors":{"{{WRAPPER}} .ct-mailchimp1.style2 form [type=\"submit\"]":"background: {{VALUE}};"},"condition":{"style":["style2"]}},{"name":"btn_bg_color_hover","label":"Button Background Color Hover","type":"color","selectors":{"{{WRAPPER}} .ct-mailchimp1.style2 form [type=\"submit\"]:hover":"background: {{VALUE}};"},"condition":{"style":["style2"]}}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'ct-inline-css-js' );
}