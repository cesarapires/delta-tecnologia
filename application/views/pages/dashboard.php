    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
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
                        <td>xxx</td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </main>