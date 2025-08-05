document.addEventListener('DOMContentLoaded', function(){

    const form = document.getElementById('meuFormulario');

    form.addEventListener('submit',function(event){
        const mensagem = document.getElementById('mensagem').value.trim()

        if (mensagem ===""){
            alert("Por favor, digite uma mensagem antes de enviar.");
            event.preventDefault();
            return;
        }

        const confirmar = confirm("Deseja realmente envviar esta mensagem?");
        if (!confirmar){
            event.preventDefault();
        };
    });
});