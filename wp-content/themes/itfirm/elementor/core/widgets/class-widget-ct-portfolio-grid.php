<?php

class CT_CtPortfolioGrid_Widget extends Case_Theme_Core_Widget_Base{
    protected $name = 'ct_portfolio_grid';
    protected $title = 'Case Portfolio Grid';
    protected $icon = 'eicon-posts-justified';
    protected $categories = array( 'case-theme-core' );
    protected $params = '{"sections":[{"name":"layout_section","label":"Layout","tab":"layout","controls":[{"name":"layout","label":"Templates","type":"layoutcontrol","default":"1","options":{"1":{"label":"Layout 1","image":"https:\/\/theosmedcon.com\/wp-content\/themes\/itfirm\/elementor\/templates\/widgets\/ct_portfolio_grid\/layout-image\/layout1.jpg"},"2":{"label":"Layout 2","image":"https:\/\/theosmedcon.com\/wp-content\/themes\/itfirm\/elementor\/templates\/widgets\/ct_portfolio_grid\/layout-image\/layout2.jpg"}}}]},{"name":"source_section","label":"Source","tab":"content","controls":[{"name":"source","label":"Select Categories","type":"select2","multiple":true,"options":{"cloud-services|portfolio-category":"Cloud Services","cyber-security|portfolio-category":"Cyber Security","it-security|portfolio-category":"IT Security","networking|portfolio-category":"Networking"}},{"name":"orderby","label":"Order By","type":"select","default":"date","options":{"date":"Date","ID":"ID","author":"Author","title":"Title","rand":"Random"}},{"name":"order","label":"Sort Order","type":"select","default":"desc","options":{"desc":"Descending","asc":"Ascending"}},{"name":"limit","label":"Total items","type":"number","default":"8"}]},{"name":"grid_section","label":"Grid","tab":"content","controls":[{"name":"img_size","label":"Image Size","type":"text","description":"Enter image size (Example: \"thumbnail\", \"medium\", \"large\", \"full\" or other sizes defined by theme). Alternatively enter size in pixels (Default: 370x300 (Width x Height)).","condition":{"layout":["1"]}},{"name":"filter","label":"Filter on Masonry","type":"select","default":"false","options":{"true":"Enable","false":"Disable"}},{"name":"filter_default_title","label":"Filter Default Title","type":"text","default":"All","condition":{"filter":"true"}},{"name":"pagination_type","label":"Pagination Type","type":"select","default":"false","options":{"pagination":"Pagination","loadmore":"Loadmore","false":"Disable"}},{"name":"item_space","label":"Item Space","type":"select","default":"default-space","options":{"default-space":"Default","no-space":"No Space"}},{"name":"col_xs","label":"Columns XS Devices","type":"select","default":"1","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_sm","label":"Columns SM Devices","type":"select","default":"2","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_md","label":"Columns MD Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_lg","label":"Columns LG Devices","type":"select","default":"4","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_xl","label":"Columns XL Devices","type":"select","default":"4","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"grid_masonry","label":"Grid Masonry","type":"repeater","condition":{"layout":["1","2"]},"controls":[{"name":"col_xs_m","label":"Columns XS Devices","type":"select","default":"1","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_sm_m","label":"Columns SM Devices","type":"select","default":"2","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_md_m","label":"Columns MD Devices","type":"select","default":"3","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_lg_m","label":"Columns LG Devices","type":"select","default":"4","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"col_xl_m","label":"Columns XL Devices","type":"select","default":"4","options":{"1":"1","2":"2","3":"3","4":"4","6":"6"}},{"name":"img_size_m","label":"Image Size","type":"text","description":"Enter image size (Example: \"thumbnail\", \"medium\", \"large\", \"full\" or other sizes defined by theme). Alternatively enter size in pixels (Default: 370x300 (Width x Height))."}]},{"name":"ct_animate","label":"Case Animate","type":"select","options":{"":"None","wow bounce":"bounce","wow flash":"flash","wow pulse":"pulse","wow rubberBand":"rubberBand","wow shake":"shake","wow swing":"swing","wow tada":"tada","wow wobble":"wobble","wow bounceIn":"bounceIn","wow bounceInDown":"bounceInDown","wow bounceInLeft":"bounceInLeft","wow bounceInRight":"bounceInRight","wow bounceInUp":"bounceInUp","wow bounceOut":"bounceOut","wow bounceOutDown":"bounceOutDown","wow bounceOutLeft":"bounceOutLeft","wow bounceOutRight":"bounceOutRight","wow bounceOutUp":"bounceOutUp","wow fadeIn":"fadeIn","wow fadeInDown":"fadeInDown","wow fadeInDownBig":"fadeInDownBig","wow fadeInLeft":"fadeInLeft","wow fadeInLeftBig":"fadeInLeftBig","wow fadeInRight":"fadeInRight","wow fadeInRightBig":"fadeInRightBig","wow fadeInUp":"fadeInUp","wow fadeInUpBig":"fadeInUpBig","wow fadeOut":"fadeOut","wow fadeOutDown":"fadeOutDown","wow fadeOutDownBig":"fadeOutDownBig","wow fadeOutLeft":"fadeOutLeft","wow fadeOutLeftBig":"fadeOutLeftBig","wow fadeOutRight":"fadeOutRight","wow fadeOutRightBig":"fadeOutRightBig","wow fadeOutUp":"fadeOutUp","wow fadeOutUpBig":"fadeOutUpBig","wow flip":"flip","wow flipInX":"flipInX","wow flipInY":"flipInY","wow flipOutX":"flipOutX","wow flipOutY":"flipOutY","wow lightSpeedIn":"lightSpeedIn","wow lightSpeedOut":"lightSpeedOut","wow rotateIn":"rotateIn","wow rotateInDownLeft":"rotateInDownLeft","wow rotateInDownRight":"rotateInDownRight","wow rotateInUpLeft":"rotateInUpLeft","wow rotateInUpRight":"rotateInUpRight","wow rotateOut":"rotateOut","wow rotateOutDownLeft":"rotateOutDownLeft","wow rotateOutDownRight":"rotateOutDownRight","wow rotateOutUpLeft":"rotateOutUpLeft","wow rotateOutUpRight":"rotateOutUpRight","wow hinge":"hinge","wow rollIn":"rollIn","wow rollOut":"rollOut","wow zoomIn":"zoomIn","wow zoomInDown":"zoomInDown","wow zoomInLeft":"zoomInLeft","wow zoomInRight":"zoomInRight","wow zoomInUp":"zoomInUp","wow zoomOut":"zoomOut","wow zoomOutDown":"zoomOutDown","wow zoomOutLeft":"zoomOutLeft","wow zoomOutRight":"zoomOutRight","wow zoomOutUp":"zoomOutUp"},"default":""}]},{"name":"display_section","label":"Display Options","tab":"content","controls":[{"name":"show_title","label":"Show Title","type":"switcher","default":"true","condition":{"layout":["1","2"]}},{"name":"show_category","label":"Show Categories","type":"switcher","default":"true","condition":{"layout":["1"]}},{"name":"show_button","label":"Show Read More","type":"switcher","default":"true","condition":{"layout":["1","2"]}},{"name":"button_text","label":"Button Text","type":"text","condition":{"show_button":"true","layout":"n"}},{"name":"show_excerpt","label":"Show Excerpt","type":"switcher","default":"true","condition":{"layout":["1","2"]}},{"name":"num_words","label":"Number of Words","type":"number","default":25,"condition":{"show_excerpt":"true","layout":["1","2"]},"separator":"after"}]},{"name":"section_style","label":"Style","tab":"content","controls":[{"name":"title_color","label":"Title Color","type":"color","selectors":{"{{WRAPPER}} .ct-portfolio .item--title":"color: {{VALUE}};"},"condition":{"layout":["1","2"]}},{"name":"title_typography","label":"Title Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-portfolio .item--title","condition":{"layout":["1","2"]}},{"name":"content_color","label":"Description Color","type":"color","selectors":{"{{WRAPPER}} .ct-portfolio .item--content":"color: {{VALUE}};"},"condition":{"layout":["1","2"]}},{"name":"content_typography","label":"Description Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-portfolio .item--content","condition":{"layout":["1","2"]}},{"name":"category_color","label":"Category Color","type":"color","selectors":{"{{WRAPPER}} .ct-portfolio .item--category":"color: {{VALUE}};"},"condition":{"layout":["1"]}},{"name":"category_typography","label":"Category Typography","type":"typography","control_type":"group","selector":"{{WRAPPER}} .ct-portfolio .item--category","condition":{"layout":["1"]}},{"name":"color_gr_from","label":"Color Gradient From","type":"color","condition":{"layout":["2"]}},{"name":"color_gr_to","label":"Color Gradient To","type":"color","condition":{"layout":["2"]}}]}]}';
    protected $styles = array(  );
    protected $scripts = array( 'imagesloaded','isotope','ct-post-masonry-widget-js','ct-post-grid-widget-js','ct-inline-css-js' );
}