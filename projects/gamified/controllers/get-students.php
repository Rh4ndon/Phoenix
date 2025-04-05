<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../models/functions.php';
try {
    $records = getAllRecords('users', 'WHERE is_admin = 0 ORDER BY last_name ASC');
    if (!empty($records)) {
        foreach ($records as $student) {
            $student['created_at'] = date('F j, Y', strtotime($student['created_at']));
?>
            <tr class="exam-card">
                <td><?php echo $student['last_name']; ?></td>
                <td><?php echo $student['first_name']; ?></td>
                <td><?php echo $student['email']; ?></td>

                <td>





                    <!-- Delete Confirmation Modal -->
                    <button type="button" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $student['user_id']; ?>">
                        Delete
                    </button>




                </td>
            </tr>

            <div class="modal fade" id="deleteModal<?php echo $student['user_id']; ?>" tabindex="-1" aria-labelledby="deleteModalLabel<?php echo $student['user_id']; ?>" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="deleteModalLabel<?php echo $student['user_id']; ?>">Confirm Delete</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Are you sure you want to delete this student?
                            <br>
                            <strong><?php echo $student['first_name'] . ' ' . $student['last_name']; ?></strong>
                            <br>
                            All data associated with this student will be permanently deleted.
                            <br>
                            <strong>This action cannot be undone.</strong>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <a href="../../controllers/delete-student.php?id=<?php echo $student['user_id']; ?>" class="btn btn-danger">Delete</a>
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