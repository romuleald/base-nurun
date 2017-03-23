/**
 * init
 */

var emailRegex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
var alphaOnlyRegex = /^[-_'àèìòùáéíóúýâêîôûãñõäëïöüŸ¡¿çœßøåæÞþÐða-z\u00E0-\u00FC ]+$/i;
var alphaNumOnlyRegex = /^[+€àèìòùáéíóúýâêîôûãñõäëïöüŸ¡¿çœßøåæÞþÐða-z\u00E0-\u00FC0-9 ]+$/i;
var numberOnlyRegex = /^[+ ()0-9]*$/i;

var checkRegex = function (val, regex) {
    return regex.test(val);
};

var checkforms = function (e) {
    var error = false;
    var $form = $(this);
    var firstError = false;
    var $formElements = $($(this).prop('elements'));

    /**
     *
     * @param $element
     * @param {String} errorLabel
     * @return {String} error message for the field
     */
    var getErrorMessage = function ($element, errorLabel) {
        return $element.data(errorLabel) || $form.data(errorLabel);
    };

    $formElements.each((i, o) => {
        var $element = $(o); //
        var $formItemParent = $element.parents('.form-item:first');
        var elemError = false;
        var errorMessage = '';
        var isRequired = !!$element.attr('required');
        var isEmail = $element.hasClass('js-valid-email');
        var isAlpha = $element.hasClass('js-only-alpha');
        var isAlphaNum = $element.hasClass('js-only-alphanum');
        var isNumber = $element.hasClass('js-only-number');
        var isNotRequired = $element.hasClass('.is-not-required');
        var value = o.value;
        var isEmpty = value === '';

        if (/radio/i.test($element[0].type)) {
            $formItemParent = $element.parents('.form-item-wrapper:first');
        }

        if (isAlpha && !isEmpty) {
            if (!checkRegex(value, alphaOnlyRegex)) {
                elemError = error = true;
                errorMessage = getErrorMessage($element, 'error-alpha');
            }
        }

        if ((isAlphaNum || isNotRequired) && !isEmpty) {
            if (!checkRegex(value, alphaNumOnlyRegex)) {
                elemError = error = true;
                errorMessage = getErrorMessage($element, 'error-alphanum');
            }
            else if (checkRegex(value, alphaNumOnlyRegex)) {
                $element.addClass('valid');
            }
        }

        if (isNumber && !isEmpty) {
            if (!checkRegex(value, numberOnlyRegex)) {
                elemError = error = true;
                errorMessage = getErrorMessage($element, 'error-number');
            }
        }

        if (isRequired) {
            if (isEmpty) {
                elemError = error = true;
                errorMessage = getErrorMessage($element, 'error-required');
            }
            if (/radio|checkbox/i.test($element[0].type)) {
                let name = $element.prop('name');
                let isChecked = $formElements.filter('[name=' + name + ']:checked').length;
                if (!isChecked) {
                    elemError = error = true;
                    errorMessage = getErrorMessage($element, 'error-required');
                }
            }
        }

        if (isEmail && !isEmpty) {
            var isValidEmail = checkRegex(value, emailRegex);
            if (!isValidEmail) {
                elemError = error = true;
                errorMessage = getErrorMessage($element, 'error-email');
            }
        }

        if (elemError && firstError === false) {
            firstError = true;
            $element.trigger('focus');
        }

        if (elemError) {
            $formItemParent.find('.js-form-label-error').html(errorMessage);
        } else {
            $formItemParent.find('.js-form-label-error').html('');
        }
        $formItemParent.toggleClass('form-item-error', elemError);
        $element.toggleClass('form-error', elemError);
    });

    var $mandatory = $(".js-mandatory");

    $mandatory.removeClass('active');

    if (!$mandatory.hasClass('active')) {
        $mandatory.addClass('active');
    }

    if (error) {
        return false;
    }

};

let formValidate = function (elem) {

    var ready = function () {

        $(elem).on('submit', checkforms);
        
    };

    return {
        ready: ready
    }

};

export default formValidate;