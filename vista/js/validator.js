//EJERCICIO 1 - TP1
$(document).ready(function() {
    $('#eje1tp1').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            enteredNumber: {
                message: ' Número no valido',
                validators: {
                    notEmpty: {
                        message: ' Ingrese un número por favor'
                    }
                }
            }
        },
    });
});

//EJERCICIO 2 - TP1
$(document).ready(function() {
    $('#eje2tp1').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            horaInicioLunes: {
                message: ' Hora no valida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese una hora por favor'
                    },
                    regexp: {
                        regexp: /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message: ' Debe ser entre 08:00 y 00:00.'
                    }
                }
            },
            horaFinLunes: {
                message: ' Hora no valida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese una hora por favor'
                    },
                    regexp: {
                        regexp: /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message: ' Debe ser entre 08:00 y 00:00.'
                    }
                }
            },
            horaInicioMartes: {
                message: ' Hora no valida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese una hora por favor'
                    },
                    regexp: {
                        regexp: /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message: ' Debe ser entre 08:00 y 00:00.'
                    }
                }
            },
            horaFinMartes: {
                message: ' Hora no valida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese una hora por favor'
                    },
                    regexp: {
                        regexp: /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message: ' Debe ser entre 08:00 y 00:00.'
                    }
                }
            },
            horaInicioMiercoles: {
                message: ' Hora no valida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese una hora por favor'
                    },
                    regexp: {
                        regexp: /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message: ' Debe ser entre 08:00 y 00:00.'
                    }
                }
            },
            horaFinMiercoles: {
                message: ' Hora no valida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese una hora por favor'
                    },
                    regexp: {
                        regexp: /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message: ' Debe ser entre 08:00 y 00:00.'
                    }
                }
            },
            horaInicioJueves: {
                message: ' Hora no valida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese una hora por favor'
                    },
                    regexp: {
                        regexp: /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message: ' Debe ser entre 08:00 y 00:00.'
                    }
                }
            },
            horaFinJueves: {
                message: ' Hora no valida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese una hora por favor'
                    },
                    regexp: {
                        regexp: /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message: ' Debe ser entre 08:00 y 00:00.'
                    }
                }
            },
            horaInicioViernes: {
                message: ' Hora no valida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese una hora por favor'
                    },
                    regexp: {
                        regexp: /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message: ' Debe ser entre 08:00 y 00:00.'
                    }
                }
            },
            horaFinViernes: {
                message: ' Hora no valida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese una hora por favor'
                    },
                    regexp: {
                        regexp: /^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/,
                        message: ' Debe ser entre 08:00 y 00:00.'
                    }
                }
            }
        },
    });
});

//EJERCICIO 3 - TP1
$(document).ready(function() {
    $('#eje3tp1').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                message: ' Nombre no valido',
                validators: {
                    notEmpty: {
                        message: ' Ingrese el nombre, por favor.'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            apellido: {
                message: ' Apellido no valido',
                validators: {
                    notEmpty: {
                        message: ' Ingrese el apellido, por favor.'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            edad: {
                message: ' Edad no valida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese la edad, por favor.'
                    }
                }
            },
            direccion: {
                message: 'Dirección invalida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese la dirección, por favor.'
                    }
                }
            }
        },

    });
});

//EJERCICIO 4 - TP1
$(document).ready(function() {
    $('#eje4tp1').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                message: ' Nombre no valido',
                validators: {
                    notEmpty: {
                        message: ' Ingrese el nombre, por favor.'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            apellido: {
                message: ' Apellido no valido',
                validators: {
                    notEmpty: {
                        message: ' Ingrese el apellido, por favor.'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            edad: {
                message: ' Edad no valida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese la edad, por favor.'
                    }
                }
            },
            direccion: {
                message: ' Dirección invalida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese la dirección, por favor.'
                    }
                }
            }
        },

    });
});

//EJERCICIO 5 - TP1
$(document).ready(function() {
    $('#eje5tp1').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                message: ' Nombre no valido',
                validators: {
                    notEmpty: {
                        message: ' Ingrese el nombre, por favor.'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            apellido: {
                message: ' Apellido no valido',
                validators: {
                    notEmpty: {
                        message: ' Ingrese el apellido, por favor.'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            edad: {
                message: ' Edad no valida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese la edad, por favor.'
                    }
                }
            },
            direccion: {
                message: ' Dirección invalida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese la dirección, por favor.'
                    }
                }
            },
            estudio: {
                validators: {
                    notEmpty: {
                        message: ' Seleccione, al menos, una opción.'
                    }
                }
            },
            sexo: {
                validators: {
                    notEmpty: {
                        message: ' Seleccione, al menos, una opción.'
                    }
                }
            }
        },

    });
});

//EJERCICIO 6 - TP1
$(document).ready(function() {
    $('#eje6tp1').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                message: ' Nombre no valido',
                validators: {
                    notEmpty: {
                        message: ' Ingrese el nombre, por favor.'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            apellido: {
                message: ' Apellido no valido',
                validators: {
                    notEmpty: {
                        message: ' Ingrese el apellido, por favor.'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            edad: {
                message: ' Edad no valida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese la edad, por favor.a'
                    }
                }
            },
            direccion: {
                message: ' Dirección invalida',
                validators: {
                    notEmpty: {
                        message: ' Ingrese la dirección, por favor.'
                    }
                }
            },
            estudios: {
                validators: {
                    notEmpty: {
                        message: ' Seleccione, al menos, una opción.'
                    }
                }
            },
            sexo: {
                validators: {
                    notEmpty: {
                        message: ' Seleccione, al menos, una opción.'
                    }
                }
            }
        },

    });
});

//EJERCICIO 7 - TP1
$(document).ready(function() {
    $('#eje7tp1').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            number1: {
                message: ' Numero no válido.',
                validators: {
                    notEmpty: {
                        message: ' Ingrese un número, por favor.'
                    }
                }
            },
            number2: {
                message: ' Numero no válido.',
                validators: {
                    notEmpty: {
                        message: ' Ingrese un número, por favor.'
                    }
                }
            },
            operacion: {
                validators: {
                    notEmpty: {
                        message: ' Seleccione, al menos, una opción.'
                    }
                }
            }
        },

    });
});

//EJERCICIO 8 - TP1
$(document).ready(function() {
    $('#eje8tp1').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            edad: {
                message: ' Edad no valida.',
                validators: {
                    notEmpty: {
                        message: ' Ingrese la edad, por favor.'
                    }
                }
            },
            estudiante: {
                validators: {
                    notEmpty: {
                        message: ' Seleccione una opción, por favor.'
                    }
                }
            }
        },

    });
});

//EJERCICIO 3 - TP2
$(document).ready(function() {
    $('#eje3tp2').bootstrapValidator({
        message: 'Este valor no es valido',

        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: ' El nombre de usuario es requerido'
                    },
                    stringLength: {
                        min: 4,
                        message: ' Debe superar los 4 caracteres'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: ' Completar campo <br>'
                    },
                    regexp: {
                        regexp: /(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]/,
                        message: ' Debe contener letras y números <br>'
                    },
                    stringLength: {
                        min: 8,
                        message: ' Debe tener mínimo 8 caracteres <br>'
                    },
                    different: {
                        field: 'username',
                        message: ' La contraseña no debe ser igual al nombre del usuario'
                    }
                }
            },
        }
    });
});

//EJERCICIO 4 - TP2 Y EJERCICIO 3 - TP3
$(document).ready(function() {
    $('#eje3tp3').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            titulo: {
                validators: {
                    notEmpty: {
                        message: ' Ingrese un título, por favor.'
                    }
                }
            },
            actores: {
                validators: {
                    notEmpty: {
                        message: ' Ingrese actores, por favor.'
                    }
                }
            },
            director: {
                validators: {
                    notEmpty: {
                        message: ' Ingrese el director, por favor.'
                    }
                }
            },
            imagen: {
                validators: {
                    notEmpty: {
                        message: ' Cargue una imágen, por favor.'
                    },
                    file: {
                        maxSize: 683 * 1024,
                        message: ' ¡Excede el tamaño máximo!'
                    }
                },
                custom: {
                    fileheight: function($el) {
                        if ($el[0].files[0].height / ($el[0].files[0].width) > 1.5) {
                            return "Debe ser una relación de aspecto de 2/3";
                        }
                    }
                }
            },
            guion: {
                validators: {
                    notEmpty: {
                        message: ' Ingrese un guión, por favor.'
                    }
                }
            },
            produccion: {
                validators: {
                    notEmpty: {
                        message: ' Ingrese quien produjo, por favor.'
                    }
                }
            },
            year: {
                validators: {
                    notEmpty: {
                        message: ' Ingrese el año, por favor.'
                    }
                }
            },
            nacion: {
                validators: {
                    notEmpty: {
                        message: ' Ingrese la nacionalidad, por favor.'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: ' La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            minutos: {
                validators: {
                    notEmpty: {
                        message: ' Ingrese la duración, por favor.'
                    }
                }
            },
            edad: {
                validators: {
                    notEmpty: {
                        message: ' Seleccione una opción, por favor.'
                    }
                }
            },
            sinopsis: {
                validators: {
                    notEmpty: {
                        message: ' Ingrese una descripción, por favor.'
                    }
                }
            }
        },
    });
});

//EJERCICIO 1 - TP3
$(document).ready(function() {
    $('#eje1tp3').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            archivo: {
                validators: {
                    notEmpty: {
                        message: ' ¡Cargue un archivo!'
                    },
                    file: {
                        maxSize: 1024 * 1024 * 2,
                        extension: 'doc, pdf',
                        type: 'application/pdf, application/msword',
                        message: ' Solo archivos .pdf o .doc'
                    }
                }
            }
        },
    });
});

//EJERCICIO 2 - TP3
$(document).ready(function() {
    $('#eje2tp3').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            archivo: {
                validators: {
                    notEmpty: {
                        message: ' ¡Cargue un archivo!'
                    },
                    file: {
                        maxSize: 1024 * 1024 * 2,
                        extension: 'txt',
                        type: 'txt',
                        message: ' Solo archivos .txt'
                    }
                }
            }
        },
    });
});

//EJERCICIO 4 - TP 4
$(document).ready(function() {
    $('#tp4ej4').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            patente: {
                validators: {
                    notEmpty: {
                        message: ' Debe ingresar una patente'
                    },
                    regexp: {
                        regexp: /^[A-ZÑ]{3}\s\d{3}$/,
                        message: 'Debe ser con este formato: LLL NNN.'
                    }
                }
            }
        },
    });
});

//EJERCICIO 5 - TP 4
$(document).ready(function() {
    $('#tp4ej5').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nroDni: {
                message: 'Este valor no es valido',
                validators: {
                    notEmpty: {
                        message: 'El DNI es obligatorio'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: 'Debe ingresar 8 dígitos.'
                    }
                }
            }
        }
    })
});

//EJERCICIO 6 - TP 4
$(document).ready(function() {
    $('#tp4ej6').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                message: 'Nombre no valido',
                validators: {
                    notEmpty: {
                        message: 'El nombre es obligatorio'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: 'La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            apellido: {
                message: 'Apellido no valido',
                validators: {
                    notEmpty: {
                        message: 'El apellido es obligatorio'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: 'La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            nroDni: {
                message: 'DNI no valido',
                validators: {
                    notEmpty: {
                        message: 'El Dni es obligatorio'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: 'Debe ingresar 8 dígitos.'
                    }
                }
            },
            domicilio: {
                message: 'Domicilio invalido',
                validators: {
                    notEmpty: {
                        message: 'Se requiere un domicilio'
                    }
                }
            },
            fechaNac: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar una fecha'
                    }
                }
            },
            telefono: {
                validators: {
                    notEmpty: {
                        message: 'Ingrese nro de teléfono'
                    }
                }
            }
        },
    });
});

//EJERCICIO 7 - TP 4
$(document).ready(function() {
    $('#tp4ej7').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            patente: {
                validators: {
                    notEmpty: {
                        message: ' Debe ingresar una patente'
                    },
                    regexp: {
                        regexp: /^[A-ZÑ]{3}\s\d{3}$/,
                        message: 'Debe ser con este formato: LLL NNN.'
                    }
                }
            },
            marca: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar una marca'
                    },
                    regexp: {
                        regexp: /[A-Za-z]+/,
                        message: 'Debe ser una marca valida'
                    }
                }
            },
            modelo: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar un modelo'
                    },
                    regexp: {
                        regexp: /\d{4}/,
                        message: 'Debe ser con el formato: AAAA'
                    }
                }
            },
            dniDuenio: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar un DNI'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: 'Debe ingresar 8 dígitos.'
                    }
                }
            }
        },
    });
});

//EJERCICIO 8 - TP 4
$(document).ready(function() {
    $('#tp4ej8').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nroDni: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar un DNI'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: 'Debe ingresar 8 dígitos.'
                    }
                }
            },
            patente: {
                validators: {
                    notEmpty: {
                        message: ' Debe ingresar una patente'
                    },
                    regexp: {
                        regexp: /^[A-ZÑ]{3}\s\d{3}$/,
                        message: 'Debe ser con este formato: LLL NNN.'
                    }
                }
            }
        }
    });
});

//EJERCICIO 9 - TP4
$(document).ready(function() {
    $('#tp4ej9').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nroDni: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar un DNI'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: 'Debe ingresar 8 dígitos.'
                    }
                }
            }
        }
    });
});

//ACCION EJERCICIO 9 - TP 4
$(document).ready(function() {
    $('#tp4ej9action').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                message: 'Nombre no valido',
                validators: {
                    notEmpty: {
                        message: 'El nombre es obligatorio'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: 'La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            apellido: {
                message: 'Apellido no valido',
                validators: {
                    notEmpty: {
                        message: 'El apellido es obligatorio'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: 'La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            domicilio: {
                message: 'Domicilio invalido',
                validators: {
                    notEmpty: {
                        message: 'Se requiere un domicilio'
                    }
                }
            },
            fechaNac: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar una fecha'
                    }
                }
            },
            telefono: {
                validators: {
                    notEmpty: {
                        message: 'Ingrese nro de teléfono'
                    }
                }
            }
        },
    });
});

$(document).ready(function() {
    $('#tp5ej4-2').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: ' Debe ingresar un nombre de usuario'
                    },
                    regexp: {
                        regexp: /^(?=[a-zA-Z0-9._]{8,20}$)(?!.*[_.]{2})[^_.].*[^_.]$/,
                        message: 'Longitud mínima de 8 caracteres. Al menos una mayúscula. Al menos una minúscula. Al menos un número'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar una contraseña'
                    },
                    regexp: {
                        regexp: /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/,
                        message: ' Longitud minima de 8 caracteres. Al menos una mayúscula o minúscula.\n'
                    },
                    different: {
                        field: 'username',
                        message: 'El nombre de usuario y la contraseña no pueden ser iguales.\n'
                    }
                }
            }
        }
    });
});