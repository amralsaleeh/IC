/*=========================================================================================
    File Name: pricing.js
    Description: pricing page js
    ----------------------------------------------------------------------------------------
    Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

$(function () {
  'use strict';

  // variables
  var priceSwitch = $('#priceSwitch'),
    priceBasicValue = $('.pricing-basic-value'),
    priceStandardValue = $('.pricing-standard-value'),
    priceEnterpriseValue = $('.pricing-enterprise-value'),
    basicAnnualPricing = $('.basic-pricing .annual-pricing'),
    standardAnnualPricing = $('.standard-pricing .annual-pricing'),
    enterpriseAnnualPricing = $('.enterprise-pricing .annual-pricing'),

    basicAnnualPlan = 240,
    basicMonthlyPlan = 25,
    standardAnnualPlan = 480,
    standardMonthlyPlan = 50,
    enterpriseAnnualPlan = 1200,
    enterpriseMonthlyPlan = 125;

  // price and duration change on switch button toggle
  priceSwitch.on('change', function () {
    if ($(this).is(':checked')) {
      // for basic plan
      var basicMonthValue = basicAnnualPlan / 12;
      priceBasicValue.html(basicMonthValue);
      basicAnnualPricing.removeClass('d-none').html('$ ' + basicAnnualPlan + ' / سنة');
      // for standard plan
      var standardMonthValue = standardAnnualPlan / 12;
      priceStandardValue.html(standardMonthValue);
      standardAnnualPricing.removeClass('d-none').html('$ ' + standardAnnualPlan + ' / سنة');
      // for enterprise plan
      var enterpriseMonthValue = enterpriseAnnualPlan / 12;
      priceEnterpriseValue.html(enterpriseMonthValue);
      enterpriseAnnualPricing.removeClass('d-none').html('$ ' + enterpriseAnnualPlan + ' / سنة');
    } else {
      // for basic plan
      priceBasicValue.html(basicMonthlyPlan);
      basicAnnualPricing.addClass('d-none');
      // for standard plan
      priceStandardValue.html(standardMonthlyPlan);
      standardAnnualPricing.addClass('d-none');
      // for enterprise plan
      priceEnterpriseValue.html(enterpriseMonthlyPlan);
      enterpriseAnnualPricing.addClass('d-none');
    }
  });
});
