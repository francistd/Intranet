// $( document ).ready(function() {
// $('#select_usu_nom').load("../Vistas/Selects/selectEmp.php");
// $('#select_usu_nom').select2();
// });


$( document ).ready(function() {

	$('#select_usu_nom').select2({


		placeholder: 'Seleccione un usuario',

		ajax: {
			url: '../Vistas/Selects/selectEmp.php',
			dataType: 'json',
			delay: 250,
			processResults: function (data) {
				// console.log(data);
				return {
					results: data
				};
			},
			cache: true
		}
	});

});