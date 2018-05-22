//use jQuery Datepicker widget in BC Admin, SU, PP instead of the BC one.

//we have these jslang in Admin->top right menu->language selector
var jslangToLocaleMappings = {
	DE: 'de',
	EN: 'en-GB',
	ES: 'es',
	FR: 'fr',
	SE: 'sv',
	NL: 'nl',
	JA: 'ja'
};
function getDatePickerLang(lang) {
	return jslangToLocaleMappings[lang] || jslangToLocaleMappings['EN'];
}

var datePickerInit = 0;
function initDatepickerLocale() {
	if (datePickerInit) {
		return;
	}

	if (typeof dateRangeLocalization == "undefined") {
		if (typeof UIresources != "undefined") {
	        window.dateRangeLocalization = {
	            rangeStartTitle: UIresources.StartDate,
	            rangeEndTitle: UIresources.EndDate,
	            nextLinkText: UIresources.ButtonNext,
	            prevLinkText: UIresources.ButtonPrev,
	            doneButtonText: UIresources.ButtonDone
	        };
		}
	}

	if (!jQuery || !jQuery.ui || !jQuery.ui.datepicker) {
		return;
	}

		try {
			if (jslang.length > 2) {
				// country-culture
				jslang = jslang.substr(0, 2).toUpperCase();
			}
			var locale = getDatePickerLang(jslang);
			if (locale && jQuery.datepicker.regional[locale]) {
				jQuery.datepicker.setDefaults(jQuery.datepicker.regional[locale]);
			datePickerInit = 1;
			}
		} catch (err) { jQuery.datepicker.setDefaults(jQuery.datepicker.regional['en-GB']); }
	}

function displayDatePicker(dateFieldName, pickerFormat) {
	if (!jQuery || !jQuery.ui || !jQuery.ui.datepicker) {
		return;
	}

	initDatepickerLocale();

	var dateFormat = pickerFormat;

	if (typeof pickerFormat == "undefined") {
		dateFormat = "d-M-yy";
	}

	dateFieldName = '#' + dateFieldName;
	if (!jQuery(dateFieldName).hasClass('hasDatepicker')) {
		var opts = {
			showButtonPanel: true,
			closeText: 'Close',
			yearRange: "1900:2099",
			changeMonth: true,
			changeYear: true,
			showAnim: "",
			dateFormat: dateFormat,
			beforeShow: function () {
				//jQuery(document.body).addClass("datepickeronly");
			},
			onClose: function () {
				//jQuery(document.body).removeClass("datepickeronly");
			}
		};
		if (jQuery(dateFieldName).data("mindate")) {
			opts["minDate"] = jQuery(dateFieldName).data("mindate");
		}
		
		jQuery(dateFieldName)
		.removeAttr('onfocus')
		.removeAttr('onclick')
  		.datepicker(opts);
		jQuery(dateFieldName).datepicker("widget").parent().addClass("not");
		jQuery(dateFieldName).focus();
		
		var date = jQuery(dateFieldName).val();
		if (date.substr(date.length - 4, 4) == "9999") {
			jQuery(dateFieldName).datepicker("setDate", new Date(2099, 0, 1, 0, 0, 0, 0));
		}
	}
}