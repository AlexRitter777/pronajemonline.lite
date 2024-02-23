class Validator {

    pausalniNaklad = [];
    servicesCost = [];
    appMeters = [];
    initialValue = [];
    endValue = [];
    meterNumber = [];
    coefficientValue = [];
    depositItems = [];
    depositItemsPrice = [];
    itemsStartDate = [];
    itemsFinishDate = [];
    damageDesc = [];
    itemsStartDateStyle = [];
    itemsFinishDateStyle = [];
    damageDescStyle = [];
    formData;



    constructor() {

        let pausalniNaklad = [];
        $('[name="pausalniNaklad[]"]').each(function(){pausalniNaklad.push($(this).val());})
        this.pausalniNaklad = pausalniNaklad;

        let servicesCost = [];
        $('[name="servicesCost[]"]').each(function (){servicesCost.push($(this).val());});
        this.servicesCost = servicesCost;

        let appMeters = [];
        $('[name="appMeters[]"]').each(function(){appMeters.push($(this).val());});
        this.appMeters = appMeters;

        let initialValue = [];
        $('[name="initialValue[]"]').each(function (){initialValue.push($(this).val());});
        this.initialValue = initialValue;

        let endValue = [];
        $('[name="endValue[]"]').each(function(){endValue.push($(this).val());});
        this.endValue = endValue;

        let meterNumber = [];
        $('[name="meterNumber[]"]').each(function(){meterNumber.push($(this).val());});
        this.meterNumber = meterNumber;

        let coefficientValue = [];
        $('[name="coefficientValue[]"]').each(function (){coefficientValue.push($(this).val());});
        this.coefficientValue = coefficientValue;

        let depositItems = [];
        $('[name="depositItems[]"]').each(function (){depositItems.push($(this).val());});
        this.depositItems =  depositItems;

        let depositItemsPrice = [];
        $('[name="depositItemsPrice[]"]').each(function (){depositItemsPrice.push($(this).val());});
        this.depositItemsPrice =  depositItemsPrice;

        let itemsStartDate = [];
        $('[name="itemsStartDate[]"]').each(function (){itemsStartDate.push($(this).val());});
        this.itemsStartDate =  itemsStartDate;

        let itemsStartDateStyle = [];
        $('[name="itemsStartDate[]"]').each(function (){itemsStartDateStyle.push($(this).parent('div').attr('style'));});
        this.itemsStartDateStyle =  itemsStartDateStyle;

        let itemsFinishDate = [];
        $('[name="itemsFinishDate[]"]').each(function (){itemsFinishDate.push($(this).val());});
        this.itemsFinishDate =  itemsFinishDate;

        let itemsFinishDateStyle = [];
        $('[name="itemsFinishDate[]"]').each(function (){itemsFinishDateStyle.push($(this).parent('div').attr('style'));});
        this.itemsFinishDateStyle =  itemsFinishDateStyle;

        let damageDesc = [];
        $('[name="damageDesc[]"]').each(function (){damageDesc.push($(this).val());});
        this.damageDesc =  damageDesc;

        let damageDescStyle = [];
        $('[name="damageDesc[]"]').each(function (){damageDescStyle.push($(this).parent('div').attr('style'));});
        this.damageDescStyle =  damageDescStyle;

    }

    createRequestServices () {

        this.formData = {
            landlordName: $("#landlordName").val(), //S, E, D, U, T, ES
            landlordAddress: $("#landlordAddress").val(), //S, E, D, U, T, ES
            accountNumber: $("#accountNumber").val(), //S, E, D, U, T, ES
            propertyAddress: $("#propertyAddress").val(), //S, E, D, U, T, ES
            propertyType: $('#propertyType').val(), //S, E, D, U, T, ES
            tenantName: $('#tenantName').val(), //S, E, D, U, T, ES
            tenantAddress: $('#tenantAddress').val(), //S, E, D, U, T, ES
            adminName: $('#adminName').val(), //S, ES
            universalCalcType: $('#universalCalcType').val(), //U
            supplierName: $('#supplierName').val(), //E
            universalSupplierName: $("#universalSupplierName").val(), //U
            calcStartDate: $("#calcStartDate").val(), //S
            calcFinishDate: $("#calcFinishDate").val(), //S
            rentStartDate: $("#rentStartDate").val(), //S, E, U
            rentFinishDate: $("#rentFinishDate").val(), //S, E, U
            rentYearDate: $("#rentYearDate").val(),//ES
            contractStartDate: $("#contractStartDate").val(),// D
            contractFinishDate: $("#contractFinishDate").val(),// D
            rentFinishReason: $("#rentFinishReason").val(), //D
            initialValueOne: $("#initialValueOne").val(), //E
            endValueOne: $("#endValueOne").val(), //E
            meterNumberOne: $("#meterNumberOne").val(), //E
            initialValueUniversal: $("#initialValueUniversal").val(), //U
            endValueUniversal: $("#endValueUniversal").val(), //U
            meterNumberUniversal: $("#meterNumberUniversal").val(), //U
            electroPriceKWh: $("#electroPriceKWh").val(), //E
            electroPriceMonth: $("#electroPriceMonth").val(), //E
            electroPriceAdd: $("#electroPriceAdd").val(), //E
            electroPriceAddDesc: $("#electroPriceAddDesc").val(),//E
            universalPriceOne: $("#universalPriceOne").val(),//U
            universalPriceMonth: $("#universalPriceMonth").val(), //U
            universalPriceAdd: $("#universalPriceAdd").val(), //U
            universalPriceAddDesc: $("#universalPriceAddDesc").val(),//U
            servicesCostCorrection: $("#servicesCostCorrection").val(),//S
            hotWaterCorrection: $("#hotWaterCorrection").val(),//S
            heatingCorrection: $("#heatingCorrection").val(),//S
            coldWaterCorrection: $("#coldWaterCorrection").val(),//S
            pausalniNaklad: this.pausalniNaklad, //S
            servicesCost: this.servicesCost, //S
            appMeters: this.appMeters, //S
            initialValue: this.initialValue, //S
            endValue: this.endValue, //S
            meterNumber: this.meterNumber, //S
            depositItems: this.depositItems, //D, T
            depositItemsPrice: this.depositItemsPrice, //D, T
            itemsStartDate: this.itemsStartDate, //D, T
            itemsStartDateStyle: this.itemsStartDateStyle, //D, T
            itemsFinishDate: this.itemsFinishDate, //D, T
            itemsFinishDateStyle: this.itemsFinishDateStyle, //D, T
            damageDesc: this.damageDesc, //D, T
            damageDescStyle: this.damageDescStyle, //D, T
            coefficientValue: this.coefficientValue, //S
            constHotWaterPrice: $("#constHotWaterPrice").val(), //S
            constHeatingPrice: $("#constHeatingPrice").val(), //S
            hotWaterPrice: $("#hotWaterPrice").val(), //S
            coldWaterPrice: $("#coldWaterPrice").val(), //S
            coldForHotWaterPrice: $("#coldForHotWaterPrice").val(), //S
            heatingPrice: $("#heatingPrice").val(), //S
            changedHeatingCosts: $('#changedHeatingCosts').val(), //S
            heatingYearSum: $('#heatingYearSum').val(), //S
            advancedPayments: $('#advancedPayments').val(), //S, E, U, ES
            advancedPaymentsDesc: $('#advancedPaymentsDesc').val(), //S, E, U, ES
            deposit: $('#deposit').val(), //D
            contactName: $('#contactName').val(), //C
            contactEmail: $('#contactEmail').val(), //C
            contactMessage: $('#contactMessage').val(), //C


        };
    //console.log(this.formData);
    }


    ajaxValidation(name, form, recaptchaResult){
        this.createRequestServices();


        $.ajax({
            type: "POST",
            url: `/validator/${name}-validation`,
            data: this.formData,
            dataType: "json",
            encode: true,
        })
            .done((data) => {
                //console.log(data); //vypnout v produkcnim provozu!

                this.data = data;
                if (!data.success) {
                    $(".errors_field").append(
                        '<ul class = "errors" id = "errors"></ul>'
                    );
                    switch (name) {
                        case "services":
                            this.validateServicesForm();
                            break;
                        case  "electro":
                            this.validateElectroForm();
                            break;
                        case  "deposit":
                            this.validateDepositForm();
                            break;
                        case "total":
                            this.validateTotalForm();
                            break;
                        case "universal":
                            this.validateUniversalForm();
                            break;
                        case "contact":
                            this.validateContactForm();
                            break;
                        case "easyservices":
                            this.validateEasyServicesForm();
                    }

                } else {
                    if (name !== "contact") {
                        form.attr('action', `/applications/${name}-calc`).off('submit').submit();
                    } else {
                        form.attr('action', `/send-message`).off('submit').submit();
                        /*--------------contact-page - loader-active------------------*/
                        $('#opacity').addClass('opacity');
                        $('.loader-wrapper').removeAttr('style');
                        $('#contact-submit').attr('disabled', 'disabled').removeClass('submit_button').addClass('submit_button_pushed');

                    }

                }
            })
            .fail(function(data){
                //console.log("error");
                $(".errors_field").append(
                    '<p class = "errors">Server connection error! Please try later!</p>'
                );
            })

    }



   validateServicesForm(){

        this.processResponse('landlordName');
        this.processResponse('landlordAddress');
        this.processResponse('accountNumber');
        this.processResponse('propertyAddress');
        this.processResponse('propertyType');
        this.processResponse('tenantName');
        this.processResponse('tenantAddress');
        this.processResponse('adminName');
        this.processResponse('calcStartDate');
        this.processResponse('calcFinishDate');
        this.processResponse('rentStartDate');
        this.processResponse('rentFinishDate');
        this.processResponse('constHotWaterPrice');
        this.processResponse('constHeatingPrice');
        this.processResponse('hotWaterPrice');
        this.processResponse('coldWaterPrice');
        this.processResponse('coldForHotWaterPrice');
        this.processResponse('heatingPrice');
        this.processResponse('changedHeatingCosts');
        this.processResponse('heatingYearSum');
        this.processResponse('servicesCostCorrection');
        this.processResponse('hotWaterCorrection');
        this.processResponse('heatingCorrection');
        this.processResponse('coldWaterCorrection');
        this.processResponse('advancedPayments');
        this.processResponse('advancedPaymentsDesc');


        this.processTwoDatesResponse('calcDiffDates', 'calcStartDate', 'calcFinishDate');
        this.processTwoDatesResponse('rentDiffDates', 'rentStartDate', 'rentFinishDate');
        this.processTwoDatesResponse('calcIntervalDates','calcStartDate', 'calcFinishDate');

        this.processAddedRowsSelect2Response('pausalniNaklad', 'test', ['Value','Char','Length']);
        this.processAddedRowsSelect2Response('appMeters', 'load_php_meters', ['Value']);

        this.processAddedRowsResponse('servicesCost', 'servicesCost', ['Value','Length','Zero']);
        this.processAddedRowsResponse('initialValue', 'initialValue', ['Value','Length','Zero']);
        this.processAddedRowsResponse('endValue', 'endValue', ['Value','Length','Zero']);
        this.processAddedRowsResponse('meterNumber', 'meterNumber', ['Value','Length','Zero']);
        this.processAddedRowsResponse('coefficientValue', 'coefficientValue', ['Value','Length','Zero']);

        this.processTwoAddedValuesResponse('diffValues','initialValue', 'endValue' );
    }




    validateElectroForm(){

        this.processResponse('landlordName');
        this.processResponse('landlordAddress');
        this.processResponse('accountNumber');
        this.processResponse('propertyAddress');
        this.processResponse('propertyType');
        this.processResponse('tenantName');
        this.processResponse('tenantAddress');
        this.processResponse('supplierName');
        this.processResponse('rentStartDate');
        this.processResponse('rentFinishDate');
        this.processResponse('initialValueOne');
        this.processResponse('endValueOne');
        this.processResponse('meterNumberOne');
        this.processResponse('electroPriceKWh');
        this.processResponse('electroPriceMonth');
        this.processResponse('electroPriceAdd');
        this.processResponse('electroPriceAddDesc');
        this.processResponse('advancedPayments');

        this.processTwoValuesResponse('diffValues', 'initialValueOne', 'endValueOne');

        this.processTwoDatesResponse('rentDiffDates', 'rentStartDate', 'rentFinishDate');


    }


    validateDepositForm() {

        this.processResponse('landlordName');
        this.processResponse('landlordAddress');
        this.processResponse('accountNumber');
        this.processResponse('propertyAddress');
        this.processResponse('propertyType');
        this.processResponse('tenantName');
        this.processResponse('tenantAddress');
        this.processResponse('contractStartDate');
        this.processResponse('contractFinishDate');
        this.processResponse('deposit');

        this.processTwoDatesResponse('contractDiffDates', 'contractStartDate', 'contractFinishDate');

        this.processAddedRowsSelect2Response('depositItems', 'load_php_deposit_items', ['Value']);

        this.processAddedRowsResponse('depositItemsPrice', 'deposit_items_price', ['Value','Length','Zero']);
        this.processAddedRowsResponse('itemsStartDate', 'itemsStartDate', ['Value']);
        this.processAddedRowsResponse('itemsFinishDate', 'itemsFinishDate', ['Value']);
        this.processAddedRowsResponse('damageDesc', 'damageDesc', ['Value', 'Length', 'Char']);

    }


    validateTotalForm(){

        this.processResponse('landlordName');
        this.processResponse('landlordAddress');
        this.processResponse('accountNumber');
        this.processResponse('propertyAddress');
        this.processResponse('propertyType');
        this.processResponse('tenantName');
        this.processResponse('tenantAddress');

        this.processAddedRowsSelect2Response('depositItems', 'load_php_deposit_items', ['Value']);

        this.processAddedRowsResponse('depositItemsPrice', 'deposit_items_price', ['Value','Length','Zero']);
        this.processAddedRowsResponse('itemsStartDate', 'itemsStartDate', ['Value']);
        this.processAddedRowsResponse('itemsFinishDate', 'itemsFinishDate', ['Value']);
        this.processAddedRowsResponse('damageDesc', 'damageDesc', ['Value', 'Length', 'Char']);

    }

    validateUniversalForm(){

        this.processResponse('landlordName');
        this.processResponse('landlordAddress');
        this.processResponse('accountNumber');
        this.processResponse('propertyAddress');
        this.processResponse('propertyType');
        this.processResponse('tenantName');
        this.processResponse('tenantAddress');
        this.processResponseSelect2('universalCalcType');
        this.processResponse('universalSupplierName');
        this.processResponse('rentStartDate');
        this.processResponse('rentFinishDate');
        this.processResponse('initialValueUniversal');
        this.processResponse('endValueUniversal');
        this.processResponse('meterNumberUniversal');
        this.processResponse('universalPriceOne');
        this.processResponse('universalPriceMonth');
        this.processResponse('universalPriceAdd');
        this.processResponse('universalPriceAddDesc');
        this.processResponse('advancedPayments');

        this.processTwoValuesResponse('diffValues', 'initialValueUniversal', 'endValueUniversal');

        this.processTwoDatesResponse('rentDiffDates', 'rentStartDate', 'rentFinishDate');


    }

    validateContactForm() {

        this.processResponse('contactName');
        this.processResponse('contactEmail');
        this.processResponse('contactMessage');
    }


    validateEasyServicesForm(){

        this.processResponse('landlordName');
        this.processResponse('landlordAddress');
        this.processResponse('accountNumber');
        this.processResponse('propertyAddress');
        this.processResponse('propertyType');
        this.processResponse('tenantName');
        this.processResponse('tenantAddress');
        this.processResponse('adminName');
        this.processResponse('advancedPayments');

        this.processAddedRowsSelect2Response('pausalniNaklad', 'test', ['Value','Char','Length']);
        this.processAddedRowsResponse('servicesCost', 'servicesCost', ['Value','Length','Zero']);

        this.processResponseSelect2('rentYearDate');

    }








    processResponse(name) {

        if (this.data['errors'][name]){
            $("#errors").append(
                '<li id="er">' + this.data['errors'][name] + '</li>'
            );
            $('#' + name).addClass("error_field_form");
        } else {
            $('#' + name).removeClass("error_field_form");
        }
   }

    processResponseSelect2(name) {

        if (this.data['errors'][name]){
            $("#errors").append(
                '<li id="er">' + this.data['errors'][name] + '</li>'
            );

            $("[aria-controls='select2-" + name + "-container']").attr('style', 'border: 1.5px solid #c00!important');
        } else {

            $("[aria-controls='select2-" + name + "-container']").attr('style', '');

        }
    }


    processTwoDatesResponse(name, startDateName, finishDateName){
        if (this.data['errors'][name]){
            $("#errors").append(
                '<li id="er">' + this.data['errors'][name] + '</li>'
            );
            $('#' + startDateName).addClass("error_field_form");
            $('#' + finishDateName).addClass("error_field_form");
        } /*else {
              $('#' + startDateName).removeClass("error_field_form");
              $('#' + finishDateName).removeClass("error_field_form");
            }*/
    }


    processTwoAddedValuesResponse(name, startValues, finishValues) {

        if (this.data['errors'][name]) {
            $("#errors").append(
                '<li id="er">' + this.data['errors'][name] + '</li>'
            );
        }

        for (let i=1; i <= this[startValues].length; i++) {
            if (this.data['errorsBool'][name][i]) {

                $("#" + startValues + i).addClass("error_field_form");
                $("#" + finishValues + i).addClass("error_field_form");

            }
        }

    }

    processTwoValuesResponse(name, startValue, finishValue) {

        if (this.data['errors'][name]) {
            $("#errors").append(
                '<li id="er">' + this.data['errors'][name] + '</li>'
            );
            $("#" + startValue).addClass("error_field_form");
            $("#" + finishValue).addClass("error_field_form");
        }

    }

    processAddedRowsSelect2Response(name, ID, errors = []) {

        errors.forEach((item) => {

            if (this.data['errors'][name + item]) {

                $("#errors").append(
                    '<li id="er">' + this.data['errors'][name + item] + '</li>'
                );
            }

        })


        for (var i = 1; i <= this[name].length; i++) {
            errors.forEach((item) => {

                if (this.data['errorsBool'][name + item][i] || $("#" + ID + i).hasClass('val_err')) {

                    $("[aria-controls='select2-" + ID + i + "-container']").attr('style', 'border: 1.5px solid #c00!important');
                    $("#" + ID + i).addClass("val_err");

                } else {
                    $("[aria-controls='select2-" + ID + i + "-container']").attr('style', '');
                    $("#" + ID + i).removeClass("val_err");

                }

            })
            $("#" + ID + i).removeClass("val_err");
        }
    }

    processAddedRowsResponse(name, ID, errors = []) {

        errors.forEach((item) => {

            if (this.data['errors'][name + item]) {

                $("#errors").append(
                    '<li id="er">' + this.data['errors'][name + item] + '</li>'
                );
            }

        })


        for (let i = 1; i <= this[name].length; i++) {
            errors.forEach((item) => {

                if (this.data['errorsBool'][name + item][i] || $("#" + ID + i).hasClass('val_err')) {

                    $("#" + ID + i).addClass("error_field_form");
                    $("#" + ID + i).addClass("val_err");

                } else {
                    $("#" + ID + i).removeClass("error_field_form");
                    $("#" + ID + i).removeClass("val_err");

                }

            })
            $("#" + ID + i).removeClass("val_err");

        }
    }









}