define([
    'Magento_Ui/js/form/element/select',
    'Revered_Attributes/js/components/disable-on-option/strategy'
], function (Element, strategy) {
    'use strict';

    return Element.extend(strategy);
});
