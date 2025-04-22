<!-- Header -->
<?php include 'header.php'; ?>

<!-- Session Check -->
<?php include '../../controllers/sessions.php'; ?>

<!-- Sidebar -->
<?php include 'sidebar.php'; ?>

<style>
    /* Scoped gamification styles to prevent interference */
    .teacher-dashboard .stat-card {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .teacher-dashboard .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .teacher-dashboard .card-icon {
        font-size: 2.5rem;
        opacity: 0.3;
        transition: all 0.3s ease;
    }

    .teacher-dashboard .stat-card:hover .card-icon {
        opacity: 0.5;
        transform: scale(1.1);
    }

    .teacher-dashboard .achievement-badge {
        position: absolute;
        top: 5px;
        right: 1px;
        width: 30px;
        height: 30px;
        background: gold;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #333;
        font-weight: bold;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16);
        animation: bounce 2s infinite;
    }

    @keyframes bounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }
    }

    .teacher-dashboard .progress-container {
        height: 6px;
        background: #e9ecef;
        border-radius: 3px;
        margin-top: 10px;
        overflow: hidden;
    }

    .teacher-dashboard .progress-bar {
        height: 100%;
        background: linear-gradient(90deg, #4b6cb7, #182848);
        width: 0%;
        transition: width 1s ease;
    }

    /* Sound Controls */
    .teacher-sound-control {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 1000;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    /* Achievement Notification */
    .teacher-achievement-notification {
        position: fixed;
        bottom: 80px;
        right: 20px;
        background: linear-gradient(135deg, #6e8efb, #a777e3);
        color: white;
        padding: 15px 20px;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        z-index: 1000;
        transform: translateX(200%);
        transition: transform 0.5s ease;
        display: flex;
        align-items: center;
        max-width: 300px;
    }

    .teacher-achievement-notification.show {
        transform: translateX(0);
    }

    /* Level Indicator */
    .teacher-level-indicator {
        position: absolute;
        top: 10px;
        right: 10px;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.8rem;
        z-index: 1;
    }

    /* Table Enhancements */
    .teacher-dashboard tr {
        transition: all 0.3s ease;
    }

    .teacher-dashboard tr:hover {
        background-color: rgba(0, 0, 0, 0.02);
    }

    .teacher-dashboard .graded-row {
        border-left: 4px solid #28a745;
    }

    .teacher-dashboard .pending-row {
        border-left: 4px solid #ffc107;
    }

    @media screen and (max-width: 768px) {
        .teacher-dashboard .progress-container {
            display: none;
        }

        .grading-indicator {
            display: none;
        }

    }
</style>

<!-- Main Content -->
<div class="main-content teacher-dashboard">

    <!-- Top Navbar -->
    <?php include 'top-navbar.php'; ?>

    <!-- Dashboard Content -->
    <?php include '../../controllers/dashboard-controller.php'; ?>

    <div class="container-fluid">
        <!-- Level Indicator -->
        <div class="teacher-level-indicator">
            <i class="fas fa-chalkboard-teacher mr-1"></i>
            <span id="teacherLevelDisplay">Level 1 Teacher</span>
            <span id="teacherXpDisplay">(0/100 XP)</span>
        </div>

        <!-- PE Theme Stats Cards -->
        <div class="row">
            <div class="col-md-3">
                <div class="card stat-card quest-pulse" style="background: linear-gradient(135deg, #2b5876 0%, #4e4376 100%);" id="studentsCard">
                    <div class="achievement-badge" style="background-color: #FFD700; color: #333;">🏆</div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="card-value text-white"><?php echo $total_students; ?></div>
                                <div class="card-title text-white">Active Students</div>
                                <div class="progress-container">
                                    <div class="progress-bar" id="studentsProgress" style="background-color: #FFD700;"></div>
                                </div>
                            </div>
                            <i class="fas fa-running card-icon text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card stat-card" style="background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);" id="examsCard">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="card-value"><?php echo $active_exams; ?></div>
                                <div class="card-title text-white">Active Exams</div>
                                <div class="progress-container">
                                    <div class="progress-bar" id="examsProgress" style="background-color: #FF6B6B;"></div>
                                </div>
                            </div>
                            <i class="fas fa-stopwatch card-icon text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card stat-card" style="background: linear-gradient(135deg, #e65c00 0%, #F9D423 100%);" id="submissionsCard">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="card-value"><?php echo $submissions_today; ?></div>
                                <div class="card-title text-white">Submissions Today</div>
                                <div class="progress-container">
                                    <div class="progress-bar" id="submissionsProgress" style="background-color: #4ECDC4;"></div>
                                </div>
                            </div>
                            <i class="fas fa-dumbbell card-icon text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card stat-card" style="background: linear-gradient(135deg, #4568DC 0%, #B06AB3 100%);" id="gradingCard">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="card-value"><?php echo $pending_grading; ?></div>
                                <div class="card-title text-dark">Pending Grading</div>
                                <div class="progress-container">
                                    <div class="progress-bar" id="gradingProgress" style="background-color: #FFEE58;"></div>
                                </div>
                            </div>
                            <i class="fas fa-clipboard-check card-icon text-white"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <!-- Recent Exam Submissions -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Exam Submissions</h5>
                        <div class="d-flex align-items-center">
                            <span class="badge bg-primary mr-2 grading-indicator">Grading Quest</span>
                            <div class="progress-container" style="width: 100px;">
                                <div class="progress-bar" id="gradingQuestProgress"></div>
                            </div>
                            <a href="teacher-exam-submission.php" class="btn btn-sm btn-outline-primary ml-3">View All</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Student ID</th>
                                        <th>Name</th>
                                        <th>Exam</th>
                                        <th>Section</th>
                                        <th>Submission Time</th>
                                        <th>Status</th>
                                        <th>Score</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($recent_submissions as $submission):
                                        $student = getRecord('users', "user_id = {$submission['student_id']}");
                                        $quiz = getRecord('quizzes', "quiz_id = {$submission['quiz_id']}");
                                        $question = getAllRecords('questions', "WHERE quiz_id = {$submission['quiz_id']}");
                                        $student_answers = getAllRecords('student_answers', "WHERE quiz_id = {$submission['quiz_id']} AND student_id = {$submission['student_id']}");
                                        if ($student['section_id'] != null) {
                                            $student_section = getRecord('sections', "section_id = {$student['section_id']}");
                                        } else {
                                            $student_section = ['section_name' => 'N/A'];
                                        }
                                        $student_grade = 0;
                                        foreach ($student_answers as $answer) {
                                            $student_grade += $answer['points_earned'];
                                        }
                                        $total_points = 0;
                                        foreach ($question as $q) {
                                            $total_points += $q['points'];
                                        }
                                        $status_class = $submission['is_graded'] ? 'bg-success' : 'bg-warning text-dark';
                                        $status_text = $submission['is_graded'] ? 'Graded' : 'Pending';
                                        $row_class = $submission['is_graded'] ? 'graded-row' : 'pending-row';
                                    ?>
                                        <tr class="<?php echo $row_class; ?>">
                                            <td>#<?php echo $submission['student_id']; ?></td>
                                            <td><?php echo "{$student['first_name']} {$student['last_name']}"; ?></td>
                                            <td><?php echo $student_section['section_name']; ?></td>
                                            <td><?php echo $quiz['title']; ?></td>
                                            <td><?php echo date('F j, Y H:i', strtotime($submission['taken_at'])); ?></td>
                                            <td><span class="badge <?php echo $status_class; ?>"><?php echo $status_text; ?></span></td>
                                            <td><?php echo intval($student_grade); ?> / <?php echo intval($total_points); ?></td>
                                            <td>
                                                <a href="teacher-check-exam.php?student_id=<?php echo $submission['student_id']; ?>&id=<?php echo $submission['quiz_id']; ?>"
                                                    class="btn btn-sm btn-outline-primary grade-btn"
                                                    onclick="playClickSound()">
                                                    <?php echo $submission['is_graded'] ? 'Review' : 'Grade'; ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sound Control -->
<div class="teacher-sound-control" id="teacherSoundControl" onclick="toggleTeacherSound()">
    <i class="fas fa-volume-up" id="teacherSoundIcon"></i>
</div>

<!-- Achievement Notification -->
<div class="teacher-achievement-notification" id="teacherAchievementNotification">
    <i class="fas fa-trophy mr-2"></i>
    <span id="teacherAchievementText">Achievement Unlocked!</span>
</div>

<!-- Audio Elements -->
<audio id="teacherBackgroundMusic" loop>
    <source src="../assets/sounds/game-music-loop-6.mp3" type="audio/mpeg">
</audio>
<audio id="teacherAchievementSound">
    <source src="../assets/sounds/small-win.mp3" type="audio/mpeg">
</audio>
<audio id="teacherHoverSound">
    <source src="../assets/sounds/win-chime.mp3" type="audio/mpeg">
</audio>
<audio id="teacherClickSound">
    <source src="../assets/sounds/click.mp3" type="audio/mpeg">
</audio>

<script>
    // Teacher Game State
    const teacherGameState = {
        soundEnabled: true,
        xp: 0,
        level: 1,
        xpToNextLevel: 100,
        studentsHelped: 0,
        examsGraded: 0,
        quests: {
            gradeExams: {
                target: 5,
                current: <?php echo count($recent_submissions); ?>,
                completed: false
            }
        }
    };

    // DOM Elements
    const teacherSoundControl = document.getElementById('teacherSoundControl');
    const teacherSoundIcon = document.getElementById('teacherSoundIcon');
    const teacherBackgroundMusic = document.getElementById('teacherBackgroundMusic');
    const teacherAchievementSound = document.getElementById('teacherAchievementSound');
    const teacherHoverSound = document.getElementById('teacherHoverSound');
    const teacherClickSound = document.getElementById('teacherClickSound');
    const teacherLevelDisplay = document.getElementById('teacherLevelDisplay');
    const teacherXpDisplay = document.getElementById('teacherXpDisplay');
    const teacherAchievementNotification = document.getElementById('teacherAchievementNotification');
    const teacherAchievementText = document.getElementById('teacherAchievementText');
    const statCards = document.querySelectorAll('.stat-card');
    const gradeButtons = document.querySelectorAll('.grade-btn');

    // Initialize
    document.addEventListener('DOMContentLoaded', function() {
        // Load saved game state
        loadTeacherGameState();

        // Update UI
        updateTeacherGameUI();

        // Initialize sound
        initTeacherSound();

        // Add hover effects
        addCardHoverEffects();

        // Check for achievements
        checkTeacherAchievements();
    });

    // Initialize sound system
    function initTeacherSound() {
        // Set volume levels
        teacherBackgroundMusic.volume = 0.3;
        teacherAchievementSound.volume = 0.6;
        teacherHoverSound.volume = 0.2;
        teacherClickSound.volume = 0.5;

        // Try to play background music
        if (teacherGameState.soundEnabled) {
            const playPromise = teacherBackgroundMusic.play();

            if (playPromise !== undefined) {
                playPromise.catch(error => {
                    console.log("Autoplay prevented, waiting for user interaction");
                    document.body.addEventListener('click', () => {
                        teacherBackgroundMusic.play().catch(e => console.log("Still unable to play:", e));
                    }, {
                        once: true
                    });
                });
            }
        }

        // Update sound icon
        teacherSoundIcon.className = teacherGameState.soundEnabled ? 'fas fa-volume-up' : 'fas fa-volume-mute';
    }

    // Toggle sound
    function toggleTeacherSound() {
        teacherGameState.soundEnabled = !teacherGameState.soundEnabled;

        if (teacherGameState.soundEnabled) {
            teacherSoundIcon.className = 'fas fa-volume-up';
            teacherBackgroundMusic.play().catch(e => console.log("Play failed:", e));
        } else {
            teacherSoundIcon.className = 'fas fa-volume-mute';
            teacherBackgroundMusic.pause();
        }

        saveTeacherGameState();
    }

    // Play click sound
    function playClickSound() {
        if (teacherGameState.soundEnabled) {
            teacherClickSound.currentTime = 0;
            teacherClickSound.play().catch(e => console.log("Click sound error:", e));

            // Award XP for grading
            awardTeacherXP(5, "Grading in progress!");
        }
    }

    // Add hover effects to cards
    function addCardHoverEffects() {
        statCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                if (teacherGameState.soundEnabled) {
                    teacherHoverSound.currentTime = 0;
                    teacherHoverSound.play().catch(e => console.log("Hover sound error:", e));
                }
            });
        });
    }

    // Load game state
    function loadTeacherGameState() {
        const savedState = localStorage.getItem('teacherGameState');
        if (savedState) {
            Object.assign(teacherGameState, JSON.parse(savedState));
        }
    }

    // Save game state
    function saveTeacherGameState() {
        localStorage.setItem('teacherGameState', JSON.stringify(teacherGameState));
    }

    // Update game UI
    function updateTeacherGameUI() {
        teacherLevelDisplay.textContent = `Level ${teacherGameState.level} Teacher`;
        teacherXpDisplay.textContent = `(${teacherGameState.xp}/${teacherGameState.xpToNextLevel} XP)`;

        // Update progress bars
        document.getElementById('studentsProgress').style.width =
            `${(<?php echo $total_students; ?> / 100) * 100}%`;
        document.getElementById('examsProgress').style.width =
            `${(<?php echo $active_exams; ?> / 50) * 100}%`; // Assuming max 50 active exams
        document.getElementById('submissionsProgress').style.width =
            `${(<?php echo $submissions_today; ?> / 50) * 100}%`; // Assuming max 50 submissions
        document.getElementById('gradingProgress').style.width =
            `${(<?php echo $pending_grading; ?> / 10) * 100}%`; // Assuming max 10 pending
        document.getElementById('gradingQuestProgress').style.width =
            `${(teacherGameState.quests.gradeExams.current / teacherGameState.quests.gradeExams.target) * 100}%`;
    }

    // Check for achievements
    function checkTeacherAchievements() {
        // Check grading quest
        if (!teacherGameState.quests.gradeExams.completed &&
            teacherGameState.quests.gradeExams.current >= teacherGameState.quests.gradeExams.target) {
            teacherGameState.quests.gradeExams.completed = true;
            awardTeacherXP(50, "Grading Master!");
        }

        saveTeacherGameState();
    }

    // Award XP
    function awardTeacherXP(amount, message) {
        teacherGameState.xp += amount;

        // Check for level up
        while (teacherGameState.xp >= teacherGameState.xpToNextLevel) {
            teacherGameState.xp -= teacherGameState.xpToNextLevel;
            teacherGameState.level++;
            teacherGameState.xpToNextLevel = Math.floor(teacherGameState.xpToNextLevel * 1.2);

            showTeacherAchievement(`Level Up! Now Level ${teacherGameState.level}`);
        }

        if (message) {
            showTeacherAchievement(message);
        }

        updateTeacherGameUI();
        saveTeacherGameState();
    }

    // Show achievement
    function showTeacherAchievement(message) {
        if (teacherGameState.soundEnabled) {
            teacherAchievementSound.currentTime = 0;
            teacherAchievementSound.play().catch(e => console.log("Achievement sound error:", e));
        }

        teacherAchievementText.textContent = message;
        teacherAchievementNotification.classList.add('show');

        setTimeout(() => {
            teacherAchievementNotification.classList.remove('show');
        }, 3000);
    }
</script>

<!-- Footer -->
<?php include 'footer.php'; ?>
