
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
    </div>

    <div class="col-md-12">
        <?php if(isset($student)) : ?>
        <form action="<?= base_url() ?>students/update/<?= $student['student_id'] ?>" method="POST"
            enctype="multipart/form-data">
            <?php else : ?>
            <form action="<?= base_url() ?>students/store" method="POST" enctype="multipart/form-data">
                <?php endif; ?>

                <div class='col-md-12'>
                    <div class='row'>
                        <div class="col-md-6">
                            <div class='row'>
                                <div class='col-md-12'>
                                    <div class="form-group">
                                        <label for="name">Nome:</label>
                                        <input type="text" class="form-control" name="name" id="name" placeholder="Nome"
                                            value="<?= isset($student) ? $student['name'] : "" ?>" maxlength="50"
                                            required>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-md-12'>
                                    <img src="<?= isset($student['photo_id']) ? base_url('public/students/'.$student['photo_id'].'.jpg') : base_url('public/students/default.png') ?>"
                                        class="rounded mx-auto d-block" alt="..." style="width:225px; height:225px">
                                    <div class="form-group">
                                        <label for="exampleFormControlFile1">Escolha o arquivo da foto</label>
                                        <input type="file" class="form-control-file" id="photo_student"
                                            name="photo_student" accept=".jpg" onchange="validate_fileupload(this);">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class='row'>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="cep">CEP:</label>
                                        <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP"
                                            value="<?= isset($student) ? $student['cep'] : "" ?>" maxlength="8"></input>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="address">Endereço:</label>
                                        <input type="text" class="form-control" name="address" id="address"
                                            placeholder="Endereço"
                                            value="<?= isset($student) ? $student['address'] : "" ?>" maxlength="60"
                                            required></input>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="number">Número:</label>
                                        <input type="text" class="form-control" name="number" id="number"
                                            placeholder="Número"
                                            value="<?= isset($student) ? $student['number'] : "" ?>" maxlength="5">
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="district">Bairro:</label>
                                        <input type="text" class="form-control" name="district" id="district"
                                            placeholder="Bairro"
                                            value="<?= isset($student) ? $student['district'] : "" ?>"
                                            maxlength="20"></input>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="complement">Complemento:</label>
                                        <input type="text" class="form-control" name="complement" id="complement"
                                            value="<?= isset($student) ? $student['complement'] : "" ?>"
                                            placeholder="Complemento" maxlength="30">
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="city">Cidade:</label>
                                        <input type="text" class="form-control" name="city" id="city"
                                            placeholder="Cidade" value="<?= isset($student) ? $student['city'] : "" ?>"
                                            maxlength="60"></input>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="state">Estado:</label>
                                        <input type="text" class="form-control" name="state" id="state"
                                            placeholder="Estado" value="<?= isset($student) ? $student['state'] : "" ?>"
                                            maxlength="2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Salvar</button>
                    <a href="<?= base_url() ?>students" class="btn btn-danger btn-xs"><i class="fas fa-times"></i>
                        Cancelar</a>
                </div>
    </div>
    </form>
    </div>

</main>
</div>
</div>

<script>
var valid = false;

function validate_fileupload(file) {
    var el = document.getElementById("photo_student");
    var fileName = file.value;
    var filesize = file.files[0].size;
    var allowed_extensions = "jpg";
    var extension = fileName.split('.').pop();

        if (allowed_extensions != extension) {
            alert("Formado de arquivo invalido");
            document.getElementById("photo_student").value = "";
        }
        if(filesize > 800000){
            alert('Tamanho do arquivo maior que o permitido');
            document.getElementById("photo_student").value = "";
        }
}
</script>