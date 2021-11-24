
$('#deleteStudent').on('shown.bs.modal', function (event) {
    var button = $(event.relatedTarget); // Button that triggered the modal
    var modal = $(this);
    var student_id = button.data('student');

    $('#deleteButton').attr('href', "<?= base_url()?>students/delete/"+student_id);
});
</script>