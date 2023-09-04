<?php

class CT_CtCounter_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_counter';
    protected $title = 'Case Counter';
    protected $icon = 'eicon-counter-circle';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","prefix_class":"ct-counter-layout","default":"1","options":{"1":{"label":"Layout 1","image":"https:\/\/theosmedcon.com\/wp-content\/themes\/itfirm\/elementor\/templates\/widgets\/ct_counter\/layout-image\/layout1.jpg"},"2":{"label":"Layout 2","image":"https:\/\/theosmedcon.com\/wp-content\/themes\/itfirm\/elementor\/templates\/widgets\/ct_counter\/layout-image\/layout2.jpg"}}}]},{"name":"section_counter","label":"Counter","tab":"content","controls":[{"name":"style_l1","label":"Style","type":"select","options":{"style1":"Style 1","style2":"Style 2","style3":"Style 3"},"default":"style1","condition":{"layout":"1"}},{"name":"ct_icon_type","label":"Icon Type","type":"select","options":{"icon":"Icon","image":"Image"},"default":"icon"},{"name":"counter_icon","label":"Icon","type":"icons","fa4compatibility":"icon","condition":{"ct_icon_type":"icon"}},{"name":"icon_image","label":"Icon Image","type":"media","description":"Select image icon.","condition":{"ct_icon_type":"image"}},{"name":"starting_number","label":"Starting Number","type":"number","default":1},{"name":"ending_number","label":"Ending Number","type":"number","default":100},{"name":"prefix","label":"Number Prefix","type":"text","default":""},{"name":"suffix","label":"Number Suffix","type":"text","default":""},{"name":"duration","label":"Animation Duration","type":"number","default":2000,"min":100,"step":100},{"name":"thousand_separator","label":"Thousand Separator","type":"switcher","default":"false"},{"name":"thousand_separator_char","label":"Separator","type":"select","condition":{"thousand_separator":"true"},"options":{",":"Default",".":"Dot"," ":"Space","":"None"},"default":","},{"name":"title","label":"Title","type":"text","label_block":true},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""},{"name":"ct_animate_delay","label":"Animate Delay","type":"text","default":"0","description":"Enter number. Default 0ms"}]},{"name":"section_icon","label":"Icon","tab":"style","controls":[{"name":"icon_color","label":"Color","type":"color","selectors":{"{{WRAPPER}} .ct-counter .ct-counter-icon i":"color: {{VALUE}};"}},{"name":"icon_color_gr","label":"Color Gradient","type":"color","condition":{"layout":"2"}},{"name":"icon_typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-counter .ct-counter-icon i"},{"name":"icon_box_color","label":"Box Color","type":"color","selectors":{"{{WRAPPER}} .ct-counter-layout2 .ct-counter-hexagon.hexagon-main::before, {{WRAPPER}} .ct-counter-layout2 .ct-counter-hexagon.hexagon-bg::before":"background: {{VALUE}};"},"condition":{"layout":"2"}}]},{"name":"section_number","label":"Number","tab":"style","controls":[{"name":"number_color","label":"Color","type":"color","selectors":{"{{WRAPPER}} .ct-counter  .ct-counter-number-value":"color: {{VALUE}};"}},{"name":"number_typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-counter  .ct-counter-number-value"},{"name":"prefix_color","label":"Prefix + Suffix Color","type":"color","selectors":{"{{WRAPPER}} .ct-counter-number .ct-counter-number-prefix":"color: {{VALUE}};","{{WRAPPER}} .ct-counter-number .ct-counter-number-suffix":"color: {{VALUE}};"}},{"name":"suffix_typography","type":"typography","control_type":"group","label":"Prefix + Suffix Typography","selector":"{{WRAPPER}} .ct-counter .ct-counter-number .ct-counter-number-suffix, {{WRAPPER}} .ct-counter .ct-counter-number .ct-counter-number-prefix"},{"name":"number_space_Top","label":"Top Spacer","type":"slider","control_type":"responsive","size_units":["px"],"default":{"size":0},"range":{"px":{"min":0,"max":300}},"selectors":{"{{WRAPPER}} .ct-counter-layout1 .ct-counter-number":"margin-top: {{SIZE}}{{UNIT}};"},"condition":{"layout":"1"}}]},{"name":"section_title","label":"Title","tab":"style","controls":[{"name":"title_color","label":"Color","type":"color","selectors":{"{{WRAPPER}} .ct-counter-title":"color: {{VALUE}};"}},{"name":"typography_title","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-counter-title"},{"name":"title_space_top","label":"Top Spacer","type":"slider","control_type":"responsive","size_units":["px"],"default":{"size":0},"range":{"px":{"min":0,"max":300}},"selectors":{"{{WRAPPER}} .ct-counter .ct-counter-title":"margin-top: {{SIZE}}{{UNIT}};"}},{"name":"title_space_bottom","label":"Bottom Spacer","type":"slider","control_type":"responsive","size_units":["px"],"default":{"size":0},"range":{"px":{"min":0,"max":300}},"selectors":{"{{WRAPPER}} .ct-counter .ct-counter-title":"margin-bottom: {{SIZE}}{{UNIT}};"}}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'elementor-waypoints','jquery-numerator','ct-counter-widget-js','ct-inline-css-js' );
}