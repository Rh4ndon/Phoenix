<?php
    $select_students = $conn->prepare("SELECT * FROM `students` ");
    $select_students->execute([]);
    while($row_students = $select_students->fetch(PDO::FETCH_ASSOC)){
        $student_id = $row_students['student_id'];
        ?>

        <tr>
            <td class="text-bold-500"><?= $row_students['name']; ?></td>
            <?php
            $select_easy = $conn->prepare("SELECT SUM(score) AS score_sum FROM `test_results` WHERE student_id = ? AND test_language = ? AND test_level = ?");
            $select_easy->execute([$student_id, $language, 'easy']);
            $row_easy = $select_easy->fetch(PDO::FETCH_ASSOC);

            $select_average = $conn->prepare("SELECT SUM(score) AS score_sum FROM `test_results` WHERE student_id = ? AND test_language = ? AND test_level = ?");
            $select_average->execute([$student_id, $language, 'average']);
            $row_average = $select_average->fetch(PDO::FETCH_ASSOC);

            $select_difficult = $conn->prepare("SELECT SUM(score) AS score_sum FROM `test_results` WHERE student_id = ? AND test_language = ? AND test_level = ?");
            $select_difficult->execute([$student_id, $language, 'difficult']);
            $row_difficult = $select_difficult->fetch(PDO::FETCH_ASSOC);

            ?>
            <td>
            <?php 
            if($select_easy->rowCount() > 0){
                echo $row_easy['score_sum'].' / 18';
            }else{
                echo '0 / 18';
            }
            ?>
            </td>
            <td>
            <?php 
            if($select_average->rowCount() > 0){
                echo $row_average['score_sum'].' / 27';
            }else{
                echo '0 / 27';
            }
            ?>
            </td>
            <td>
            <?php 
            if($select_difficult->rowCount() > 0){
                echo $row_difficult['score_sum'] .' / 36';
            }else{
                echo '0 / 36';
            }
            ?>
            </td>

        </tr>



 <?php   }  ?>