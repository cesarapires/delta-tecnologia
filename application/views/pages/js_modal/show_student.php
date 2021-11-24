
<script>
$('#showStudent').on('shown.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var modal = $(this);
    var student_id = button.data('student');
    var url = "<?= base_url() ?>students/show/"+student_id;
    var request = new XMLHttpRequest();
    request.open('GET', url);
    request.responseType = 'json';
    request.send();
    request.onload = function() {
        var student = request.response;
        $('#name').val(student.name);
        if(student.photo_id != null){
            var url_photo = "<?= base_url() ?>public/students/"+student.photo_id+".jpg" 
        }
        else{
            var url_photo = "<?= base_url() ?>public/students/default.png"
        }
        $('#photo').attr('src', url_photo);
        $('#cep').val(student.cep);
        $('#address').val(student.address);
        $('#number').val(student.number);
        $('#district').val(student.district);
        $('#complement').val(student.complement);
        $('#city').val(student.city);
        $('#state').val(student.state);
        $('#deleteButton').attr('href', "<?= base_url()?>students/delete/"+student_id);
    }
});