function checkBrowser() {
    c = navigator.userAgent.search("Chrome");
    f = navigator.userAgent.search("Firefox");
    m8 = navigator.userAgent.search("MSIE 8.0");
    m9 = navigator.userAgent.search("MSIE 9.0");
    if (c > -1) {
        browser = "Chrome";
    } else if (f > -1) {
        browser = "Firefox";
    } else if (m9 > -1) {
        browser = "MSIE 9.0";
    } else if (m8 > -1) {
        browser = "MSIE 8.0";
    } else {
        browser = "Unknown";
    }
    return browser;
}

var canSubmit = false;


function callRegisterAjax() {
    // Constructing the values object.
    var dataObject = {
        "first_name": jQuery("#first_name").val(),
        "last_name": jQuery("#last_name").val(),
        "country": jQuery("#country").val(),
        "email": jQuery("#email").val(),
        "work_experience": jQuery("#work_experience").val(),
        "mobile": jQuery("#mobile").val(),
        "browser": jQuery("#browser").val(),
        "lead_source": jQuery("#lead_source").val(),
        "utm_source": jQuery("#utm_source").val(),
        "utm_medium": jQuery("#utm_medium").val(),
        "utm_term": jQuery("#utm_term").val(),
        "utm_content": jQuery("#utm_content").val(),
        "utm_campaign": jQuery("#utm_campaign").val(),
        "course": jQuery("#course").val()
    };

    //var url = "http://localhost:8888/Emeritus?option=com_logs&task=addMKTLogRecord&first_name="+first_name+"&last_name="+last_name+"&country="+country+"&browser="+browser;
    var url = "https://latam.emeritus.org?option=com_logs&task=addMKTLogRecord";
    //var url = "http://localhost:8888/Emeritus?option=com_logs&task=addMKTLogRecord";

    Object.keys(dataObject).forEach(function (key) {

        console.log(key + '=' + dataObject[key]);
        var value = dataObject[key];
        if (value !== "" && value !== undefined) {
            url += "&" + key + "=" + encodeURI(value);
        }

    });

    console.log("URL: " + url);


    jQuery.ajax({
        url: url,
        type: "POST",
        cache: false,
        data: {},
        success: function (result) {
            console.log("success");
            console.log(result);
            canSubmit = true;
            jQuery("#fordesk").submit();

        },
        error: function (xhr, status, error) {
            console.log("error");
            console.log(error);

        }

    });
}


function callRegisterFeeAjax() {

    // Constructing the values object.
    var dataObject = {
        "first_name": jQuery("#firstName").val(),
        "Company": jQuery("#Company").val(),
        "email": jQuery("#Email").val(),
        "email": jQuery("#email").val(),
        "job_title": jQuery("#jobTitle").val(),
        "mobile": jQuery("#mobile").val(),
        "Group_Enrol_No_of_Enrolments": jQuery("#groupEnrol").val(),
        "Group_Enrol_Query": jQuery("#groupEnrolQuery").val(),
        "browser": jQuery("#Browser").val(),
        "lead_source": jQuery("#leadSource").val(),
        "utm_source": jQuery("#utmSource").val(),
        "utm_medium": jQuery("#utmMedium").val(),
        "utm_term": jQuery("#utmTerm").val(),
        "utm_content": jQuery("#utmContent").val(),
        "utm_campaign": jQuery("#utmCampaign").val(),
        "course": jQuery("#Course").val()
    };


    // Appending the form variables to the URL's querystring to be sent as part of the POST request.
    Object.keys(dataObject).forEach(function (key) {

        console.log(key + '=' + dataObject[key]);
        var value = dataObject[key];
        if (value !== "" && value !== undefined) {
            url += "&" + key + "=" + encodeURI(value);
        }

    });


    jQuery.ajax({
        url: url,
        type: "POST",
        cache: false,
        data: {},
        success: function (result) {
            canSubmit = true;
            jQuery("#formSpecialFee").submit();

        },
        error: function (xhr, status, error) {
            console.log("Error calling the logger:");
            console.log(error);

        }

    });
}

jQuery(document).ready(function () {
    jQuery("#browser").val(checkBrowser());         // Retrievin the browser name.

    jQuery("#fordesk").submit(function () {         // Form submit listener.

        if (!canSubmit) {
            callRegisterAjax();
            return false;

        } else {
            return true;

        }


    });

    jQuery("#formSpecialFee").submit(function () {         // Form submit listener.

        if (!canSubmit) {
            callRegisterFeeAjax();
            return false;

        } else {
            return true;

        }


    });

});