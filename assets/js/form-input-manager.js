/**
 * Created by oscarsanchez on 4/19/19.
 */


/**
 * Sets the value to an element in the country select element
 * @param countryElementId
 * @param codeElementId
 * @param OTPElementId
 */
function populateCountryCode(countryElementId, codeElementId, OTPElementId) {

    var selectedCountryIndex = document.getElementById(countryElementId).selectedIndex;
    var selectedCountryCode = document.getElementById(countryElementId).options[selectedCountryIndex].getAttribute('data-code');
    document.getElementById(codeElementId).value = selectedCountryCode;

    if (OTPElementId) {
        populateOTP(OTPElementId);
    }


}


/**
 * Populates the countries dropdown, with the values in the given array.
 * @param countryElementId
 * @param codeElementId
 * @param OTPElementId
 */
function populateCountries(countryElementId, codeElementId, OTPElementId) {

    var country_arr = new Array("Argentina~~Argentina~", "Chile~~Chile~", "Colombia~~Colombia~", "Costa Rica~~Costa Rica~", "Ecuador~~Ecuador~", "El Salvador~~El Salvador~", "United States~~Estados Unidos~", "Spain~~España~", "Guatemala~~Guatemala~", "Honduras~~Honduras~", "Mexico~~México~", "Nicaragua~~Nicaragua~", "Panama~~Panama~", "Paraguay~~Paraguay~", "Peru~~Perú");

    // given the id of the <select> tag as function argument, it inserts <option> tags
    var countryElement = document.getElementById(countryElementId);
    countryElement.length = 0;
    countryElement.options[0] = new Option('', '');
    countryElement.selectedIndex = 0;
    for (var i = 0; i < country_arr.length; i++) {
        arrCD = country_arr[i].split('~');

        var option = document.createElement("option");
        option.setAttribute("value", arrCD[0].trim());
        option.setAttribute("data-code", arrCD[1].trim());
        option.text = (arrCD[2].trim());
        countryElement.appendChild(option);
    }

    // Assigned all countries. Now assign event listener for the states.

    if (codeElementId) {
        countryElement.onchange = function () {
            populateCountryCode(countryElementId, codeElementId, OTPElementId);
        };
    }
}


jQuery(document).ready(function () {

    jQuery("#fordesk")[0].reset();

    // Calling the function that will populate the form.
    populateCountries("country");

    // ---------------------------------------------------
    // To include the GDPR requirements in the form ------
    // ---------------------------------------------------
    //var excludeCountry = ['Austria', 'Bélgica', 'Bulgaria', 'Croacia', 'Chipre', 'República Checa', 'República Checa', 'Dinamarca', 'Estonia', 'Finlandia', 'Francia', 'Alemania', 'Grecia', 'Hungría', 'Irlanda', 'Italia', 'Letonia', 'Lituania', 'Luxemburgo', 'Malta', 'Países Bajos', 'Polonia', 'Portugal', 'Rumania', 'Romainia', 'Eslovaquia', 'Eslovenia', 'España', 'Suecia', 'Reino Unido', 'Reino Unido' ]
    var excludeCountry = ['Spain'];

    $("#country").change(function () {

        if ($(this).val() != "" && $(this).val() != -1) {

            var checkFlg = excludeCountry.indexOf($(this).val());
            $('#agree').prop('checked', false);
            if (checkFlg != -1) {
                $('#gdpr-consent').show();
                $('#agree').prop('required', true);

            }
            else {
                $('#gdpr-consent').hide();
                $('#agree').prop('required', false);

            }
        }

    });


});