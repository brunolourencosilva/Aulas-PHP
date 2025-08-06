document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('formCalc');

    form.addEventListener('submit', function(event) {
        const num1 = document.getElementById('num1').value.trim();
        const num2 = document.getElementById('num2').value.trim();
        const operacao = document.getElementById('operacao').value;

        if (num1 === '' || num2 === '') {
            alert('Por favor, preencha os dois números.');
            event.preventDefault();
            return;
        }

        if (operacao === '') {
            alert('Por favor, selecione uma operação.');
            event.preventDefault();
        }
    });
});
