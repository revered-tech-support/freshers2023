define([
    'jquery'
], function ($) {
    "use strict";
    return function () {
        $(document).ready(function(){
            var initialGoalMessage = $('#sparsh_free_shipping_bar_entity_initial_goal_message');
            var achieveGoalMessage = $('#sparsh_free_shipping_bar_entity_achieve_goal_message');
            var clickAble = $('#sparsh_free_shipping_bar_entity_is_clickable');
            var linkUrl = $('#sparsh_free_shipping_bar_entity_bar_link_url');
            var openInNewPage = $('#sparsh_free_shipping_bar_entity_is_link_open_in_new_page');
            var barBackgroundColor =  $('#sparsh_free_shipping_bar_entity_bar_background_color');
            var barTextColor = $('#sparsh_free_shipping_bar_entity_bar_text_color');
            var goalTextColor = $('#sparsh_free_shipping_bar_entity_goal_text_color');
            var fontSize = $('#sparsh_free_shipping_bar_entity_bar_font_size');
            var barContainer = $('.sparsh-free-shipping-bar');
            var barLink = $('.sparsh-free-shipping-bar a');
            var initialGoalText = $('.sparsh-free-shipping-bar .initial-message');
            var achieveGoalText = $('.sparsh-free-shipping-bar .achieve-message');
            var goalTextValue = initialGoalText.text().replace(200, "<span id='goal'>{{goal}}</span>");

            barContainer.css({"background-color": barBackgroundColor.val(), "font-size": fontSize.val()+'px'});
            barLink.css("color", barTextColor.val());
            initialGoalText.html(goalTextValue);
            initialGoalText.find('#goal').css("color", goalTextColor.val());
            if (clickAble.val() === '1' && linkUrl.val()) {
                barLink.attr("href", linkUrl.val());
            }

            initialGoalMessage.change(function() {
                initialGoalText.html(initialGoalMessage.val().replace(200, "<span id='goal'>{{goal}}</span>"));
                initialGoalText.find('#goal').css("color", goalTextColor.css('backgroundColor'));
            });

            achieveGoalMessage.change(function() {
                achieveGoalText.html(achieveGoalMessage.val());
            });


            clickAble.on("change", function () {
                if (clickAble.val() === '1') {
                    if(linkUrl.val()){
                        barLink.attr("href", linkUrl.val());
                    }
                    if (openInNewPage.val() === '1') {
                        barLink.attr("target", '_blank');
                    } else {
                        barLink.attr("target", '_self');
                    }
                }
                else{
                    barLink.removeAttr("href");
                    barLink.removeAttr("target");
                }
            });

            linkUrl.on("change", function () {
                if (linkUrl.val()) {
                    barLink.attr("href", linkUrl.val());
                }
            });

            openInNewPage.on("change", function () {
                if (openInNewPage.val() === '1') {
                    barLink.attr("target", '_blank');
                } else {
                    barLink.attr("target", '_self');
                }
            });

            barBackgroundColor.change(function() {
                barContainer.css("background-color", barBackgroundColor.css('backgroundColor'));
            });

            barTextColor.change(function() {
                barLink.css("color", barTextColor.css('backgroundColor'));
            });

            goalTextColor.change(function() {
                initialGoalText.find('#goal').css("color", goalTextColor.css('backgroundColor'));
            });

            fontSize.change(function() {
                barContainer.css("font-size", fontSize.val()+'px');
            });
        });
    }
});