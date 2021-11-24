    <!-- Modal -->
    <div class="modal fade" id="showStudent" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="showStudentLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="showStudentLabel">Visualizar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class='col-md-12'>
                        <div class='row'>
                            <div class="col-md-6">
                                <div class='row'>
                                    <div class='col-md-12'>
                                        <div class="form-group">
                                            <label for="name">Nome:</label>
                                            <input type="text" class="form-control" name="name" id="name"
                                                placeholder="Nome" value="" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class='col-md-12'>
                                        <img src="<?= base_url('public/students/default.png') ?>"
                                            class="rounded mx-auto d-block" alt="..." style="width:225px; height:225px"
                                            id='photo'>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class='row'>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cep">CEP:</label>
                                            <input type="text" class="form-control" name="cep" id="cep"
                                                placeholder="CEP" value="" readonly></input>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="address">Endereço:</label>
                                            <input type="text" class="form-control" name="address" id="address"
                                                placeholder="Endereço" value="" readonly></input>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="number">Número:</label>
                                            <input type="text" class="form-control" name="number" id="number"
                                                placeholder="Número" value="" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="district">Bairro:</label>
                                            <input type="text" class="form-control" name="district" id="district"
                                                placeholder="Bairro" value="" readonly></input>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="complement">Complemento:</label>
                                            <input type="text" class="form-control" name="complement" id="complement"
                                                value="" placeholder="Complemento" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class='row'>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="city">Cidade:</label>
                                            <input type="text" class="form-control" name="city" id="city"
                                                placeholder="Cidade" value="" readonly></input>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="state">Estado:</label>
                                            <input type="text" class="form-control" name="state" id="state"
                                                placeholder="Estado" value="" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>

                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="deleteStudent" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="deleteStudentLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteStudentLabel">Deletar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Tem certeza que deseja excluir esse aluno?
                </div>
                <div>

                </div>
                <div class="modal-footer">
                    <a type="button" id="deleteButton" class="btn btn-danger">Sim</a>
                    <button type="button" class="btn btn-success" data-dismiss="modal">Não</button>

                </div>
            </div>
        </div>
    </div>