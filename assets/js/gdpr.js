//var excludeCountry = ['Austria', 'Bélgica', 'Bulgaria', 'Croacia', 'Chipre', 'República Checa', 'República Checa', 'Dinamarca', 'Estonia', 'Finlandia', 'Francia', 'Alemania', 'Grecia', 'Hungría', 'Irlanda', 'Italia', 'Letonia', 'Lituania', 'Luxemburgo', 'Malta', 'Países Bajos', 'Polonia', 'Portugal', 'Rumania', 'Romainia', 'Eslovaquia', 'Eslovenia', 'España', 'Suecia', 'Reino Unido', 'Reino Unido' ]
var excludeCountry = ['Spain']

$("#country").change(function(){
	if ($(this).val() != "" && $(this).val() != -1) 
	{
		var checkFlg = excludeCountry.indexOf($(this).val());
		$('#agree').prop('checked', false); 
		if(checkFlg != -1)
		{
			$('#gdpr-consent').show();
			$('#agree').prop('required', true); 
		}
		else{
			$('#gdpr-consent').hide();
			$('#agree').prop('required', false); 
		}
	}

});