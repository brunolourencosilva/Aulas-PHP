document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('formulario');

    form.addEventListener('submit', function(event) {
        const num1 = document.getElementById('entrada').value.trim();
        const operacao = document.getElementById('operacao').value;

        if (num1=== '') {
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
