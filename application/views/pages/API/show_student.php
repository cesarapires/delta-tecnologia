<script>
$('#showStudent').on('shown.bs.modal', function () {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var modal = $(this);
    var student_id = button.data('student');

    var request = new XMLHttpRequest();
    request.open('GET', "<?= base_url() ?>students/show/"+student_id);
    request.responseType = 'json';
    request.send();
    request.onload = function() {
        var student = request.response;
        $('#name').val(student.name);
        $('#cep').val(student.cep);
        $('#address').val(student.address);
        $('#number').val(student.number);
        $('#district').val(student.district);
        $('#complement').val(student.complement);
        $('#city').val(student.city);
        $('#state').val(student.state);
    }
});
</script>