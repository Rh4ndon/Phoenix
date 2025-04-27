<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../models/functions.php';
try {
    $records = getAllRecords('sections', 'ORDER BY section_name ASC');
    if (!empty($records)) {
        foreach ($records as $section) {

?>
            <tr class="exam-card">
                <td><?php echo $section['section_name']; ?></td>

                <td>

                    <!-- View Records -->
                    <a href="teacher-section-records.php?id=<?php echo $section['section_id']; ?>" class="btn btn-sm btn-outline-primary">View Records</a>
                    <a href="teacher-edit-section.php?id=<?php echo $section['section_id']; ?>" class="btn btn-sm btn-outline-primary">Edit</a>


                    <!-- Delete Confirmation Modal -->
                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $section['section_id']; ?>">
                        Delete
                    </button>




                </td>
            </tr>

            <div class="modal fade" id="deleteModal<?php echo $section['section_id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo $section['section_id']; ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel<?php echo $section['section_id']; ?>">Confirm Delete</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this section?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="../../controllers/delete-section.php?id=<?php echo $section['section_id']; ?>" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
<?php
        }
    } else {
        echo '<tr><td colspan="5" class="text-center">No records found</td></tr>';
    }
} catch (Exception $e) {
    echo '<tr><td colspan="5" class="text-center text-danger">Error: ' . $e->getMessage() . '</td></tr>';
}
?>