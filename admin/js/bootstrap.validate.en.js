/**
 * Bootstrap validate
 * English lang module
 */

$.bt_validate.fn = {
  'required' : function(value) { return (value  != null) && (value != '')},
  'email' : function(value) { return /^[a-z0-9-_\.]+@[a-z0-9-_\.]+\.[a-z]{2,4}$/.test(value) },
  'www' : function(value) { return /^(http:\/\/)|(https:\/\/)[a-z0-9\/\.-_]+\.[a-z]{2,4}$/.test(value) },
  'date' : function(value) { return /^[\d]{2}\/[\d]{2}\/[\d]{4}$/.test(value) },
  'time' : function(value) { return /^([01]?[0-9]|2[0-3]):[0-5][0-9]$/.test(value) },
  'datetime' : function(value) { return /^[\d]{2}\/[\d]{2}\/[\d]{4} [\d]{2}:[\d]{2}:{0,1}[\d]{0,2}$/.test(value) },
  'number' : function(value) { return /^[\d]+$/.test(value) },
  'float' : function(value) { return /^([\d]+)|(\d]+\.[\d]+)$/.test(value) },
  'equal' : function(value, eq_value) { return (value == eq_value); },
  'min' : function(value, min) { return Number(value) >= min },
  'max' : function(value, max) { return Number(value) <= max },
  'between' : function(value, min, max) { return (Number(value) >= min) && (Number(value) <= max)},
  'length_min' : function(value, min) { return value.length >= min },
  'length_max' : function(value, max) { return value.length <= max },
  'length_between' : function(value, min, max) { return (value.length >= min) && (value.length <= max)}
}

$.bt_validate.text = {
  'required' : 'Ce champ est requis.',
  'email' : 'Veuillez saisir une adresse mail valide.',
  'www' : 'Veuillez saisir une URL valide.',
  'date' : 'Veuillez saisir une date valide.',
  'time' : 'Veuillez saisir une heure valide.',
  'datetime' : 'Veuillez saisir une date/heure valide.',
  'number' : 'Veuillez saisir un nombre.',
  'float' : 'Veuillez saisir un nombre.',
  'equal' : 'The value must be equal to "%1"',
  'min' : 'Veuillez saisir une valeur supérieure ou égale à %1',
  'max' : 'Veuillez saisir une valeur inférieure ou égale à %1',
  'between' : 'The value must be between %1 and %2',
  'length_min' : 'The length of the value must be equal or greater than %1',
  'length_max' : 'The length of the value must be equal or less than %1',
  'length_between' : 'The length of the value must be between %1 and %2'
}

/*
required			: "Ce champ est requis.",
			email				: "Veuillez saisir une adresse mail valide.",
			url					: "Veuillez saisir une URL valide.",
			creditcard			: "Veuillez saisir un numéro de carte de crédit valide.",
			date				: "Veuillez saisir une date valide.",
			datetime			: "Veuillez saisir une date/heure valide.(aaaa-mm-jjThh:mm:ssZ)",
			'datetime-local'	: "Veuillez saisir une date/heure locale valide.(aaaa-mm-jjThh:mm:ss)",
			time				: "Veuillez saisir une heure valide.",
			alphabetic			: "Veuillez ne saisir que des lettres.",
			alphanumeric		: "Veuillez ne saisir que des lettres, souligné et chiffres.",
			color				: "Veuillez saisir une couleur valide. (nommée, hexadecimale ou rvb)",
			month				: "Veuillez saisir une année et un mois. (ex.: 1974-03)",
			week				: "Veuillez saisir une année et une semaine. (ex.: 1974-W43)",
			number				: "Veuillez saisir un nombre.(ex.: 12,-12.5,-1.3e-2)",
			integer				: "Veuillez saisir un nombre sans decimales.",
			zipcode				: "Veuillez saisir un code postal valide.",
			minlength			: "Veuillez saisir au moins {0} caractères.",
			maxlength			: "Veuillez ne pas saisir plus de {0} caractères.",
			min					: "Veuillez saisir une valeur supérieure ou égale à {0}.",
			max					: "Veuillez saisir une valeur inférieure ou égale à {0}.",
			mustmatch			: "Veuillez resaisir la même valeur.",
			captcha				: "Votre réponse ne correspond pas au texte de l'image. Réesayez.",
			personnummer		: "Veuillez saisir un personnummer valide. (aaaammjj-aaaa)",
			organisationsnummer	: "Veuillez saisir un organisationsnummer valide. (xxyyzz-aaaa)",
			ipv4				: "Veuillez saisir une adresse IP valide (version 4).",
			ipv6				: "Veuillez saisir une adresse IP valide (version 6).",
			tel					: "Veuillez saisir un numéro de téléphone valide.",
			remote				: "Veuillez vérifier ce champ." // ? why?
			*/