    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="h2">Alunos</h2>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group mr-2">
                    <a href="<?= base_url() ?>Students/New" class="btn btn-sm btn-outline-secondary"><i
                            class="fas fa-plus-square"></i> Aluno</a>
                </div>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nome</th>
                        <th>CEP</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Ação</th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($students as $students) : ?>

                    <tr>
                        <td><?= $students['student_id'] ?></td>
                        <td><?= $students['name'] ?></td>
                        <td><?= $students['cep'] ?></td>
                        <td><?= $students['city'] ?></td>
                        <td><?= $students['state'] ?></td>
                        <td>
                            <button typ='button' class="btn btn-outline-success btn-sm" data-toggle="modal"
                                data-target="#showStudent" data-student='<?= $students['student_id'] ?>'>
                                <i class="fas fa-eye">
                                </i>
                            </button>
                            <a class="btn btn-outline-warning btn-sm"
                                href="<?= base_url() ?>students/edit/<?= $students['student_id'] ?>">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                            <a class="btnEdit btn btn-outline-danger btn-sm"
                                href="<?= base_url() ?>students/delete/<?= $students['student_id'] ?>">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php endforeach;?>

                </tbody>
            </table>
        </div>
    </main>