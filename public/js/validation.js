$(document).ready(function (){

    $("form").on('submit', function(e) {

        $(".errors").remove();

        e.preventDefault();
        var form = this;
        $form = $(form);

        grecaptcha.ready(() => {

            grecaptcha.execute('6LflMpQgAAAAAMN2q092nkMkkOCUicv4D60lxZc9', {action: 'submit'}).then((token) => {
                //$('#recaptcha').remove();
                //$(form).prepend('<input type="hidden" id="recaptcha" name="g-recaptcha-response" value="' + token + '">');
                //console.log(token);
                $.post (
                    "validator/recaptcha",
                    {token: token},
                    function (result){
                        //console.log('ReCaptcha result = ' + result);//for testing
                        if (result === 'true') {

                            const validator = new Validator();
                            var name = $("form").attr("name");


                            switch(name){
                                case "services":
                                    validator.ajaxValidation('services', $form);
                                    break;
                                case "electro":
                                    validator.ajaxValidation('electro', $form);
                                    break;
                                case "deposit":
                                    validator.ajaxValidation('deposit', $form);
                                    break;
                                case "total":
                                    validator.ajaxValidation('total', $form);
                                    break;
                                case "universal":
                                    validator.ajaxValidation('universal', $form);
                                    break;
                                case "contact":
                                    validator.ajaxValidation('contact', $form);
                                    break;
                                case "easyservices":
                                    validator.ajaxValidation('easyservices', $form);

                            }


                        } else {

                            console.log('Sorry! You are bot!')

                        }
                    }
                )

            })

        })

    })

})