define([
    'Magento_Ui/js/form/element/select',
    'Revered_Attributes/js/components/visible-on-option/strategy',
    'Revered_Attributes/js/components/disable-on-option/strategy'
], function (Element, visibleStrategy, disableStrategy) {
    'use strict';

    return Element.extend(visibleStrategy).extend(disableStrategy);
});
