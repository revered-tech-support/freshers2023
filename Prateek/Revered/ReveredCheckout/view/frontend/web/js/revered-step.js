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
                template: 'Revered_ReveredCheckout/revered-step',
                form: {'prateekField': ''}
            },
            initialize: function () {
                this._super();
                this.form.exampleField = ko.observable('');
                stepNavigator.registerStep(
                    'revered-step',
                    'revered-step',
                    'Revered Step',
                    this.isVisible,
                    _.bind(this.navigate, this),
                    15
                );
                return this;
            },
            isVisible: ko.observable(false),
            navigate: function () {
                console.log('Entering revered step');
            },
            navigateToNextStep: function () {
                console.log('Value of prateek field: ' + this.form.exampleField());
                //$.post("/examplestepcheckout/ajax/post", { exampleField: this.form.exampleField() } );
                stepNavigator.next();
            }
        });
    }
);