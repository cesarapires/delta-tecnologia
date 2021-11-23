<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div
        class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"></h1>
    </div>

    <div class="col-md-12">
        <?php if(isset($student)) : ?>
        <form action="<?= base_url() ?>students/update/<?= $student['student_id'] ?>" method="POST">
        <?php else : ?>
            <form action="<?= base_url() ?>students/store" method="POST">
        <?php endif; ?>
            <div class='row'>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nome"
                            value="<?= isset($student) ? $student['name'] : "" ?>" required>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="cep">CEP:</label>
                        <input type="text" class="form-control" name="cep" id="cep" placeholder="CEP"
                            value="<?= isset($student) ? $student['cep'] : "" ?>" required></input>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class="col-md-6">

                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="address">Endereço:</label>
                        <input type="text" class="form-control" name="address" id="address" placeholder="Endereço"
                            value="<?= isset($student) ? $student['address'] : "" ?>" required></input>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="number">Número:</label>
                        <input type="text" class="form-control" name="number" id="number" placeholder="Número"  value="<?= isset($student) ? $student['number'] : "" ?>"
                            required>
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class="col-md-6">
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="district">Bairro:</label>
                        <input type="text" class="form-control" name="district" id="district" placeholder="Bairro"  value="<?= isset($student) ? $student['district'] : "" ?>"
                            required></input>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="complement">Complemento:</label>
                        <input type="text" class="form-control" name="complement" id="complement"  value="<?= isset($student) ? $student['complement'] : "" ?>"
                            placeholder="Complemento">
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class="col-md-6">
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="city">Cidade:</label>
                        <input type="text" class="form-control" name="city" id="city" placeholder="Cidade"  value="<?= isset($student) ? $student['city'] : "" ?>"
                            required></input>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="state">Estado:</label>
                        <input type="text" class="form-control" name="state" id="state" placeholder="Estado"  value="<?= isset($student) ? $student['state'] : "" ?>"
                            required>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Salvar</button>
                <a href="<?= base_url() ?>students" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancelar</a>
            </div>
    </div>
    </form>
    </div>

</main>
</div>
</div>