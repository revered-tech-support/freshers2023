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
                template: 'Revereds_ReveredCheckout/kuldeep-step',
                form: {'kuldeepField': ''}
            },
            initialize: function () {
                this._super();
                this.form.kuldeepField = ko.observable('');
                stepNavigator.registerStep(
                    'kuldeep-step',
                    'kuldeep-step',
                    'Kuldeep Step',
                    this.isVisible,
                    _.bind(this.navigate, this),
                    15
                );
                return this;
            },
            isVisible: ko.observable(false),
            navigate: function () {
                console.log('Entering kuldeep step');
            },
            navigateToNextStep: function () {
                console.log('Value of kuldeep field: ' + this.form.kuldeepField());
                //$.post("/examplestepcheckout/ajax/post", { exampleField: this.form.exampleField() } );
                stepNavigator.next();
            }
        });
    }
);