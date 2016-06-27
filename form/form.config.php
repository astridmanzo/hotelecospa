<?php
/**

Copyright 2016 JQueryForm.com
License: http://www.jqueryform.com/license.php

FormID:  jqueryform-28b171
Date:    2016-01-25 22:42:51
Version: v1.0-rc13
Generated by http://www.jqueryform.com

PHP 5.3+ is required.
If mailgun is used AND the form has file upload field, PHP 5.5+ is required.

*/

namespace JF;

class Config {

    public static function getConfig( $decode = true ){
        ob_start();
        // ---------------------------------------------------------------------
        // JSON format config
        // Note: please make a copy before you edit config manually
        // ---------------------------------------------------------------------

/**JSON_START**/ ?>
{
    "formId": "jqueryform-28b171",
    "email": {
        "to": "astridmanzo@gmail.com",
        "cc": "",
        "bcc": "",
        "subject": "Solicitud de Reservaci\u00f3n Hotel Eco Spa Luz y Vida",
        "template": ""
    },
    "admin": {
        "users": "admin:91999",
        "dataDelivery": "emailAndFile"
    },
    "thankyou": {
        "url": "",
        "message": "Tu solicitud ha sido enviada! Te contactaremos lo m\u00e1s pronto posible.",
        "seconds": "10"
    },
    "seo": {
        "trackerId": "",
        "title": "",
        "description": "",
        "keywords": "",
        "author": ""
    },
    "mailer": "local",
    "smtp": {
        "host": "",
        "user": "",
        "password": ""
    },
    "mailgun": {
        "domain": "",
        "apiKey": "",
        "fromEmail": "",
        "fromName": ""
    },
    "styles": {
        "iCheck": {
            "enabled": true,
            "skin": "flat",
            "colorScheme": "black"
        },
        "Select2": {
            "enabled": true
        }
    },
    "logics": [

    ],
    "fields": [
        {
            "label": "Nombre Completo",
            "field_type": "name",
            "field_options": {
                "size": "small",
                "sender": "fullname",
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "required": {
                        "enabled": true,
                        "msg": "Por favor, rellena las campos requeridos."
                    }
                },
                "placeholder": "",
                "addon": {
                    "leftIcon": "glyphicon glyphicon-user"
                }
            },
            "cid": "c1"
        },
        {
            "label": "Email",
            "field_type": "email",
            "field_options": {
                "size": "small",
                "sender": true,
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "validators": {
                    "email": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true,
                        "msg": "Por favor, rellena los campos requeridos."
                    }
                },
                "addon": {
                    "leftIcon": "glyphicon glyphicon-envelope",
                    "leftText": ""
                }
            },
            "cid": "c2"
        },
        {
            "label": "N\u00famero de T\u00e9lefono",
            "field_type": "number",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "numSpinner": {
                    "enabled": false
                },
                "validators": {
                    "number": {
                        "enabled": true
                    },
                    "required": {
                        "enabled": true,
                        "msg": "Por favor, rellena los campos requeridos."
                    }
                }
            },
            "cid": "c28"
        },
        {
            "label": "Fecha de Llegada",
            "field_type": "date",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "addon": {
                    "rightIcon": "glyphicon glyphicon-th",
                    "rightText": ""
                },
                "date": {
                    "format": "dd\/mm\/yyyy"
                }
            },
            "cid": "c33"
        },
        {
            "label": "Fecha de Salida",
            "field_type": "date",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "addon": {
                    "rightIcon": "glyphicon glyphicon-th",
                    "rightText": ""
                },
                "validators": {
                    "required": {
                        "enabled": true,
                        "msg": "Por favor, rellena los campos requeridos."
                    }
                },
                "date": {
                    "format": "dd\/mm\/yyyy"
                }
            },
            "cid": "c38"
        },
        {
            "label": "",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Selecciona -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "1 habitaci\u00f3n",
                        "checked": true,
                        "value": ""
                    },
                    {
                        "label": "2 habitaciones",
                        "checked": false,
                        "value": ""
                    },
                    {
                        "label": "3+ habitaciones",
                        "checked": false,
                        "value": ""
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true,
                        "msg": "Por favor, rellena los campos requeridos."
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "cid": "c43"
        },
        {
            "label": "",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Selecciona -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "1 adulto",
                        "checked": true
                    },
                    {
                        "label": "2 adultos",
                        "checked": false
                    },
                    {
                        "label": "3+ adultos",
                        "checked": false
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "cid": "c49"
        },
        {
            "label": "",
            "field_type": "dropdown",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "options": [
                    {
                        "label": "- Selecciona -",
                        "value": "#novalue",
                        "checked": false
                    },
                    {
                        "label": "0 ni\u00f1os",
                        "checked": true
                    },
                    {
                        "label": "1 ni\u00f1os",
                        "checked": false
                    },
                    {
                        "label": "2+ ni\u00f1os",
                        "checked": false
                    }
                ],
                "include_blank_option": false,
                "validators": {
                    "minlength": {
                        "msg": "Please select at least {0} option(s)",
                        "enabled": false
                    },
                    "maxlength": {
                        "msg": "Please select no more than {0} option(s)",
                        "enabled": false
                    },
                    "required": {
                        "enabled": true
                    }
                },
                "presetJson": "",
                "multiple": false
            },
            "cid": "c56"
        },
        {
            "label": "Mensaje",
            "field_type": "paragraph",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                },
                "size": "small",
                "description": "\u00bfTienes alguna pregunta?"
            },
            "cid": "c73"
        },
        {
            "label": "Submit Button",
            "field_type": "submit",
            "required": true,
            "field_options": {
                "images": {
                    "urls": "",
                    "slideshow": false
                }
            },
            "labelHide": true,
            "submit": {
                "label": "Enviar",
                "icon": "",
                "checkRequiredFields": ""
            },
            "cid": "c100"
        }
    ]
}
<?php /**JSON_END**/

	    $json = ob_get_clean() ;

        return $decode ? json_decode( trim($json), true ) : $json;
    } // end of getConfig()

} // end of Config class