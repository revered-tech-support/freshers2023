define(
    [
        'ko',
        'uiComponent',
        'jquery',
        'underscore',
        'Magento_Checkout/js/model/step-navigator'
    ],
    function (ko,
              Component,
              $,
              _,
              stepNavigator) {
        'use strict';
        return Component.extend({
            defaults: {
                template: 'Magetrend_CustomField/azhar-step',
                form: {'azharField': ''}
            },
            initialize: function () {
                this._super();
                this.form.azharField = ko.observable('');
                stepNavigator.registerStep(
                    'azhar-step',
                    'azhar-step',
                    'Azhar Step',
                    this.isVisible,
                    _.bind(this.navigate, this),
                    15
                );
                return this;
            },
            isVisible: ko.observable(false),
            navigate: function () {
                console.log('Entering azhar step');
            },
            navigateToNextStep: function () {
                console.log('Value of azhar field: ' + this.form.azharField());
                //$.post("/azharstepcheckout/ajax/post", { azharField: this.form.azharField() } );
                stepNavigator.next();
            }
        });
    }
);