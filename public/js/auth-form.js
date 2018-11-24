//Run all functions
jQuery(($) => {
	formFunctions(); // Run form functions
	nextStepButton(); // Run next step button function
});

//Next step button function
const nextStepButton = () => {
	jQuery(($) => {

		const firstStep = $('#auth-form #first-step'); // const first step variable
		const registerStep = $('#auth-form #register-step'); // const register step variable
		const loader = $('#auth-form #first-step #loader'); // const loader variable
		const btn = $('#auth-form #first-step #continue'); // const button variable

		const documentType = $('#auth-form #document-type'); // const document type field
		const documentId = $('#auth-form #document'); // const document id field

		//Errors variables
		let firstStepError = $('#auth-form #first-step-error');
		let errors = [];
		let msgError = '';

		btn.on('click', () => {

			let flag = true;

			if(documentType.val() === '' || documentType.val() === ' ' || documentType.val() == 0) {
				let index = errors.indexOf('TIPO DE DOCUMENTO');
				if(index === -1 && !firstStepError.hasClass('show')) {
					errors.push('TIPO DE DOCUMENTO');
				}
				flag = false;
			}

			if(documentId.val() === '' || documentId.val() === ' ' || documentId.val() == 0) {
				let index = errors.indexOf('NÚMERO DE DOCUMENTO');
				if(index === -1 && !firstStepError.hasClass('show')) {
					errors.push('NÚMERO DE DOCUMENTO');
				}
				flag = false;
			}

			if(!flag) {

				//If isset anyone error in form
				msgError = `Los campos: <b>${errors.join(',')}</b> son obligatorios.`;
				firstStepError.html(msgError);

				if(!firstStepError.hasClass('show')) {
					firstStepError.addClass('show');
				}

			} else {

				//Next step in form

				btn.css('display', 'none'); // Hidde button

				if(!loader.hasClass('active')) {
					loader.addClass('active');
				}

				if(documentType.val() === 'CEDULA_CIUDADANIA' && documentId.val() === '12345') {
					console.log('Bien')
					firstStep.fadeOut('slow');
					$('#register-step #document-id').html(documentId.val());

					setTimeout(() => {
						registerStep.fadeIn('slow');
					}, 500);
				}
			}

		});

		documentType.on('change', () => {
			if(documentType.val() !== 0 && documentType.val() !== '' && documentType.val() !== ' ') {
				let index = errors.indexOf('TIPO DE DOCUMENTO');
				if(index !== -1) {
					errors.splice(index, 1);
					msgError = `Los campos: <b>${errors.join(',')}</b> son obligatorios.`;
					firstStepError.html(msgError);
				}
				if(firstStepError.hasClass('show')) {
					firstStepError.removeClass('show');
				}
			}
		});

		documentId.on('keyup change', () => {
			if(documentId.val() !== 0 && documentId.val() !== '' && documentId.val() !== ' ') {
				let index = errors.indexOf('NÚMERO DE DOCUMENTO');
				if(index !== -1) {
					errors.splice(index, 1);
					msgError = `Los campos: <b>${errors.join(',')}</b> son obligatorios.`;
					firstStepError.html(msgError);
				}

				if(firstStepError.hasClass('show')) {
					firstStepError.removeClass('show');
				}
			}
		});

	});
}

//Form functions
const formFunctions = () => {
	jQuery(($) => {

		const frm = $('#auth-form'); // const form variable

		frm.on('submit', (e) => {
			//e.preventDefault();
		});

	});
}