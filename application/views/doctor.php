<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="page-titles">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
            </ol>
        </div>

        <div class="form-head d-flex mb-3 mb-md-4 align-items-start">
            <div class="me-auto d-lg-block">
                <!-- "Add New" button and modal -->
                <a href="javascript:void(0);" class="btn btn-rounded" data-bs-toggle="modal"
                    data-bs-target="#addDoctorModal"
                    style="background-color: #ff69b4; border-color: #ff69b4; color: white;">+ Add New</a>

            </div>
            <div class="input-group search-area ms-auto d-inline-flex me-2">
                <input type="text" class="form-control" placeholder="Search here">
                <div class="input-group-append">
                    <button type="button" class="input-group-text"><i class="flaticon-381-search-2"></i></button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table id="example5"
                        class="table shadow-hover doctor-list table-bordered mb-4 dataTablesCard fs-14">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Doctor Name</th>
                                <th>Description</th>
                                <th>Contact</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (isset($doctors) && !empty($doctors)): ?>
                                <?php foreach ($doctors as $doctor): ?>
                                    <tr>
                                        <td><?= $doctor->id; ?></td>
                                        <td><?= $doctor->name; ?></td>
                                        <td><?= $doctor->description; ?></td>
                                        <td><?= $doctor->contact; ?></td>
                                        <td>
                                            <button class="btn btn-warning"
                                                onclick="editDoctor(<?= $doctor->id; ?>)">Edit</button>
                                            <button class="btn btn-danger"
                                                onclick="deleteDoctor(<?= $doctor->id; ?>)">Delete</button>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="5">No doctors found.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->



<!-- Add Doctor Modal -->
<div class="modal fade" id="addDoctorModal" tabindex="-1" aria-labelledby="addDoctorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDoctorLabel">Add New Doctor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="addDoctorForm">
                    <div class="mb-3">
                        <label for="newDoctorName" class="form-label">Doctor Name</label>
                        <input type="text" class="form-control" id="newDoctorName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="newDoctorDescription" class="form-label">Description</label>
                        <input type="text" class="form-control" id="newDoctorDescription" name="description">
                    </div>
                    <div class="mb-3">
                        <label for="newDoctorContact" class="form-label">Contact</label>
                        <input type="text" class="form-control" id="newDoctorContact" name="contact">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal"
                    style="background-color: #ff69b4; border-color: #ff69b4; color: white;">Close</button>
                <button type="button" class="btn" onclick="addDoctor()"
                    style="background-color: #8a2be2; border-color: #8a2be2; color: white;">Save</button>
            </div>


        </div>
    </div>
</div>

<!-- Existing Edit Doctor Modal (unchanged) -->
<div class="modal fade" id="editDoctorModal" tabindex="-1" aria-labelledby="editDoctorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editDoctorLabel">Edit Doctor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="editDoctorForm">
                    <input type="hidden" id="doctor_id">
                    <div class="mb-3">
                        <label for="doctorName" class="form-label">Doctor Name</label>
                        <input type="text" class="form-control" id="doctorName" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="doctorDescription" class="form-label">Description</label>
                        <input type="text" class="form-control" id="doctorDescription" name="description">
                    </div>
                    <div class="mb-3">
                        <label for="doctorContact" class="form-label">Contact</label>
                        <input type="text" class="form-control" id="doctorContact" name="contact">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal"
                    style="background-color: #ff69b4; border-color: #ff69b4; color: white;">Close</button>
                <button type="button" class="btn" onclick="updateDoctor()"
                    style="background-color: #8a2be2; border-color: #8a2be2; color: white;">Save Changes</button>
            </div>

        </div>
    </div>
</div>

<script>
    function deleteDoctor(doctor_id) {
        if (confirm('Are you sure you want to delete this doctor?')) {
            window.location.href = '<?= base_url("admin/deleteDoctor/"); ?>' + doctor_id;
        }
    }

    function editDoctor(doctor_id) {
        $.ajax({
            url: '<?= base_url("admin/getDoctor/"); ?>' + doctor_id,
            method: 'GET',
            dataType: 'json',
            success: function (data) {
                $('#doctor_id').val(data.id);
                $('#doctorName').val(data.name);
                $('#doctorDescription').val(data.description);
                $('#doctorContact').val(data.contact);
                $('#editDoctorModal').modal('show');
            }
        });
    }

    function updateDoctor() {
        var doctor_id = $('#doctor_id').val();
        var formData = $('#editDoctorForm').serialize();

        $.ajax({
            url: '<?= base_url("admin/updateDoctor"); ?>',
            method: 'POST',
            data: formData,
            success: function (response) {
                alert('Doctor updated successfully');
                location.reload(); // Reload the page to reflect the updated changes
            }
        });
    }

    function addDoctor() {
        var formData = $('#addDoctorForm').serialize();

        $.ajax({
            url: '<?= base_url("admin/addDoctor"); ?>',
            method: 'POST',
            data: formData,
            success: function (response) {
                alert('Doctor added successfully');
                location.reload(); // Reload the page to reflect the added doctor
            }
        });
    }
</script>