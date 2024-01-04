<?php require_once('../html/head2.php') ?>

<div class="row">

    <div class="col-lg-8 d-flex align-items-stretch">
        <div class="card w-100">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Lista de Hoteles</h5>

                <div class="table-responsive">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal_hoteles">
                        Nuevo Hotel
                    </button>
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">#</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Nombre</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Ciudad</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Estrellas</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Opciones</h6>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="tabla_hoteles">

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Ventana Modal-->

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="Modal_hoteles" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" id="frm_hoteles">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Hoteles</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <input type="hidden" name="ID_hotel" id="ID_hotel">


                  
                    <div class="form-group">
                        <label for="Hotel">Nombre del Hotel</label>
                        <input type="text" required class="form-control" id="hotel" name="hotel" placeholder="Ingrese el nombre del hotel">
                    </div>
                    <div class="form-group">
                        <label for="Ciudad">Ciudad</label>
                        <input type="text" required class="form-control" id="Ciudad" name="Ciudad" placeholder="Ingrese el nombre de la Ciudad">
                    </div>
                    <div class="form-group">
                        <label for="Estrellas">Estrellas</label>
                        <input type="text" required class="form-control" id="Estrellas" name="Estrellas" placeholder="Numero de Estrellas">
                    </div>
                   

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Grabar</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once('../html/script2.php') ?>

<script src="hoteles.js"></script>