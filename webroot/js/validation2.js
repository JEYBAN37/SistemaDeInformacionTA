




	
	document.addEventListener('DOMContentLoaded', function() {
        var condicioncronicaSelect = document.getElementById('condicioncronica');
        var desparasitacionSelect = document.getElementById('desparasitacion');
    
        // Función para aplicar la validación de color rojo
        function applyRedValidation(selectElement) {
            var selectedValue = selectElement.value;
    
            if (selectedValue !== 'No' && selectedValue !== 'SD' && selectedValue !== '') {
                selectElement.style.color = 'red';
            } else {
                selectElement.style.color = '';
            }
        }
    
        // Agrega eventos de cambio para los campos condicioncronica y desparasitacion
        condicioncronicaSelect.addEventListener('change', function() {
            applyRedValidation(condicioncronicaSelect);
        });
    
		desparasitacionSelect.addEventListener('change', function() {
            applyRedValidation(desparasitacionSelect);
        });
    
        // Aplica la validación cuando se carga la página
        applyRedValidation(condicioncronicaSelect);
        applyRedValidation(	desparasitacionSelect);
    });

	document.addEventListener('DOMContentLoaded', function() {
		var saludoralSelect = document.getElementById('saludoral');  
		var vacunacionSelect = document.getElementById('esquemavacunacion'); 
		var cydSelect = document.getElementById('crecimientoydesarrollo'); 
	
		// Función para aplicar la validación de color rojo
		function applyRedValidation(selectElement) {
			var selectedValue = selectElement.value;
			if (selectedValue === 'No' || selectedValue === 'Incompleto' || selectedValue === 'No inscrito en CYD' ) {
				selectElement.style.color = 'red';
			} else {
				selectElement.style.color = '';
			}
		}
	
		// Agrega eventos de cambio para los campos salud oral y vacunación
		saludoralSelect.addEventListener('change', function() {
			applyRedValidation(saludoralSelect);
		});
	
		vacunacionSelect.addEventListener('change', function() {
			applyRedValidation(vacunacionSelect);
		});

		cydSelect.addEventListener('change', function() {
			applyRedValidation(cydSelect);
		});
	
		// Aplica la validación cuando se carga la página
		applyRedValidation(saludoralSelect);
		applyRedValidation(vacunacionSelect);
		applyRedValidation(cydSelect);
	});
	document.addEventListener('DOMContentLoaded', function() {   
			var maltratoSelect = document.getElementById('sopechamaltrato');
        // Función para aplicar la validación de color rojo
        function applyRedValidation(selectElement) {
            var selectedValue = selectElement.value;
			
    
            if (selectedValue !== 'No' ) {
                selectElement.style.color = 'red';
            } else {
                selectElement.style.color = '';
            }
        }
    
        // Agrega eventos de cambio para los campos maltrato, riesgo 
       
		
		 maltratoSelect.addEventListener('change',function(){
			applyRedValidation(maltratoSelect);
		 });
		

        // Aplica la validación cuando se carga la página        
		
				
		
		applyRedValidation(maltratoSelect);		
		
		
      
    });

