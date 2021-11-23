
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$("#cep").blur(function() {
    var cep = $('#cep').val();
    var cepRequest = "https://viacep.com.br/ws/" + cep + "/json/";
    var request = new XMLHttpRequest();
    request.open('GET', cepRequest);
    request.responseType = 'json';
    request.send();
    request.onload = function() {
        var returninformation = request.response;
        $('#address').val(returninformation.logradouro);
        $('#district').val(returninformation.bairro);
        $('#city').val(returninformation.localidade);
        $('#state').val(returninformation.uf);
    }
});
</script>
