const datos = [
    ['acidez fija',
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
        'calidad'
    ],
    ['7.4', '0.7', '0', '1.9', '0.076', '11', '34', '0.9978', '3.51', '0.56', '9.4', '5'],
    ['7.8', '0.88', '0', '2.6', '0.098', '25', '67', '0.9968', '3.2', '0.68', '9.8', '5'],
    ['7.8', '0.76', '0.04', '2.3', '0.092', '15', '54', '0.997', '3.26', '0.65', '9.8', '5'],
];

const contenedor = document.getElementById('contenedor_tabla');
campo_busqueda = document.getElementById('buscar');

tabla = new Handsontable(contenedor, {
    data: datos,
    colWidths: 100,
    width: '100%',
    height: 320,
    rowHeights: 23,
    colHeaders: false,
    rowHeaders: true,
    dropdownMenu: true,
    filters: true,
    search: true,
    licenseKey: 'non-commercial-and-evaluation'
});

Handsontable.dom.addEvent(campo_busqueda, 'keyup', function (event) {
    var buscar = tabla.getPlugin('search');
    var resultado_consulta = buscar.query(this.value);

    console.log(resultado_consulta);
    tabla.render();
});