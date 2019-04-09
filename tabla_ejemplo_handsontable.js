$(function() {
    function cargarInformacion(tabla) {
        var datos = [];
        var url = "getdata.php";
        $.getJSON(url, function (vinos) {
            $.each(vinos, function (i, vino) {
                datos.push([
                    vino.acidezFija,
                    vino.acidezVolatil,
                    vino.acidoCítrico,
                    vino.azucarResidual,
                    vino.cloruros,
                    vino.dioxidoAzufreLibre,
                    vino.dioxidoAzufreTotal,
                    vino.densidad,
                    vino.ph,
                    vino.sulfatos,
                    vino.alcohol,
                    vino.fecha,
                    vino.calidad
                ]);
            });
            tabla.loadData(datos);
            console.log("vinos: ", datos.length);
        });

    }
    
    var campo_busqueda = document.getElementById('id_contenedor_buscar'),
        contenedor = document.getElementById('id_contenedor_tabla'),
        tabla;

    tabla = new Handsontable(contenedor, {
        colWidths: 100,
        width: '100%',
        height: 350,
        rowHeights: 23,
        colHeaders: true,
        rowHeaders: true,
        colHeaders: [
            'acidez fija',
            'acidez volátil',
            'ácido cítrico',
            'azúcar residual',
            'cloruros',
            'dióxido de azufre libre',
            'dióxido de azufre total',
            'densidad',
            'pH',
            'sulfatos',
            'alcohol',
            'fecha',
            'calidad'
        ],
        dropdownMenu: true,
        filters: true,
        search: true,
        columns: [{}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {}, {
                type: 'date',
                dateFormat: 'YYYY-MM-DD',
                correctFormat: true,
                defaultDate: '1900-01-01',
                datePickerConfig: {
                    firstDay: 0,
                    showWeekNumber: true,
                    numberOfMonths: 1,
                    disableDayFn: function (date) {
                        // Deshabilitar el sábado y domingo
                        return date.getDay() === 0 || date.getDay() === 6;
                    }
                }
            },
            {}
        ],
        licenseKey: 'non-commercial-and-evaluation'
    });

    Handsontable.dom.addEvent(campo_busqueda, 'keyup', function (event) {
        var search = tabla.getPlugin('search');
        var resultado_consulta = search.query(this.value);
        console.log(resultado_consulta);
        tabla.render();
    });

    cargarInformacion(tabla);

});