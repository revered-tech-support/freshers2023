define([
    'Magento_Ui/js/form/element/abstract',
    'Revered_Attributes/js/components/visible-on-option/strategy'
], function (Element, strategy) {
    'use strict';

    return Element.extend(strategy);
});
