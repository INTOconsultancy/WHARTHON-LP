function getParameterByName(name) {
    name = name.replace(/[\[]/, "\[").replace(/[\]]/, "\]");
    var regex = new RegExp("[\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

jQuery(document).ready(function () {

    // Extracting the default value for the required fields on Salesforce and Pardot.
    var utm_source_value = getParameterByName("utm_source");
    
    // List of allowed UTM Source Values.
    var allowedSources = [
        "Google", 
        "Facebook",
        "LinkedIn"
        ];
    
    // If the given utm_source value is not found in the Allowed UTM Sources list, default to Web.
    if(!allowedSources.includes(utm_source_value)){
        utm_source_value =  "Web";

    }

    // Assigning the utm_source_value to the fields.
    jQuery('#lead_source').val( utm_source_value);
    jQuery('#utm_source').val( utm_source_value);
    
    jQuery('#utm_medium').val(getParameterByName("utm_medium"));
    jQuery('#utm_content').val(getParameterByName("utm_content"));
    jQuery('#utm_campaign').val(getParameterByName("utm_campaign"));
    jQuery('#utm_term').val(getParameterByName("utm_term"));
})