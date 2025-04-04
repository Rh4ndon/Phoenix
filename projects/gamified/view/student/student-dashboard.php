<!-- Header -->
<?php include 'header.php'; ?>

<!-- Session Check -->
<?php include '../../controllers/sessions.php'; ?>

<!-- Sidebar -->
<?php include 'sidebar.php'; ?>

<style>
    /* Gamification Styles */
    .stat-card {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .stat-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .card-icon {
        font-size: 2.5rem;
        opacity: 0.3;
        transition: all 0.3s ease;
    }

    .stat-card:hover .card-icon {
        opacity: 0.5;
        transform: scale(1.1);
    }

    /* XP Progress Bar */
    .xp-progress {
        height: 6px;
        background: #e9ecef;
        border-radius: 3px;
        margin-top: 10px;
        overflow: hidden;
    }

    .xp-progress-bar {
        height: 100%;
        background: linear-gradient(90deg, #ffd700, #ff8c00);
        width: 0%;
        transition: width 1s ease;
    }

    /* Achievement Badges */
    .badge-container {
        position: absolute;
        top: -10px;
        right: -10px;
    }

    .achievement-badge {
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

    /* Quest Animation */
    .quest-pulse {
        animation: pulse 2s infinite;
    }

    @keyframes pulse {
        0% {
            box-shadow: 0 0 0 0 rgba(0, 123, 255, 0.7);
        }

        70% {
            box-shadow: 0 0 0 10px rgba(0, 123, 255, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(0, 123, 255, 0);
        }
    }

    /* Sound Controls */
    .sound-control {
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


    /* Table Animations */
    tr {
        transition: all 0.3s ease;
    }

    tr:hover {
        background-color: rgba(0, 0, 0, 0.02);
    }

    /* Level Indicator - Now positioned inside container */
    .level-indicator-container {
        margin-bottom: 20px;
        background: linear-gradient(135deg, #6e8efb, #a777e3);
        color: white;
        padding: 10px 15px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .level-display {
        font-weight: bold;
        font-size: 1.1rem;
    }

    .xp-display {
        font-size: 0.9rem;
        opacity: 0.9;
    }

    /* Quest Indicator */
    .quest-indicator {
        background: rgba(0, 0, 0, 0.1);
        padding: 5px 10px;
        border-radius: 20px;
        display: inline-flex;
        align-items: center;
    }

    @media screen and (max-width: 768px) {
        .sound-control {

            bottom: 10px;
            right: 10px;

        }

        .quest-indicator {
            font-size: 0.8rem;
            width: 50%;
        }



    }
</style>

<!-- Main Content -->
<div class="main-content">
    <!-- Top Navbar -->
    <?php include 'top-navbar.php'; ?>

    <!-- Dashboard Content -->
    <?php include '../../controllers/student-dashboard-controller.php'; ?>

    <div class="container-fluid">
        <!-- Level Indicator - Now inside container -->
        <div class="level-indicator-container">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <div class="level-display">
                        <i class="fas fa-trophy mr-2"></i>
                        <span id="levelDisplay">Level 1 Student</span>
                    </div>
                    <div class="xp-display">
                        <span id="xpDisplay">0 XP</span> •
                        <span id="xpToNext">100 XP to next level</span>
                    </div>
                </div>
                <div class="xp-progress" style="width: 200px;">
                    <div class="xp-progress-bar" id="levelProgress"></div>
                </div>
            </div>
        </div>

        <!-- Stats Cards with Gamification -->
        <div class="row">
            <div class="col-md-3">
                <div class="card stat-card bg-success text-white quest-pulse" id="activeExamsCard">
                    <div class="badge-container">
                        <div class="achievement-badge">!</div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="card-value"><?php echo $active_exams; ?></div>
                                <div class="card-title text-white">Active Exams</div>
                                <div class="xp-progress">
                                    <div class="xp-progress-bar" id="examProgress"></div>
                                </div>
                            </div>
                            <i class="fas fa-clipboard-list card-icon"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card stat-card bg-info text-white" id="submissionsCard">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="card-value"><?php echo $submissions_today; ?></div>
                                <div class="card-title text-white">My Submissions</div>
                                <div class="xp-progress">
                                    <div class="xp-progress-bar" id="submissionProgress"></div>
                                </div>
                            </div>
                            <i class="fas fa-file-upload card-icon"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card stat-card bg-warning text-dark" id="gradingCard">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="card-value"><?php echo $pending_grading; ?></div>
                                <div class="card-title text-dark">My Pending Grading</div>
                                <div class="xp-progress">
                                    <div class="xp-progress-bar" id="gradingProgress"></div>
                                </div>
                            </div>
                            <i class="fas fa-check-double card-icon"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Exam Submissions with Animations -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">Recent Exam Submissions</h5>
                        <div class="quest-indicator">
                            <span class="badge bg-primary">Quest: Complete <?php echo $submissions_today; ?> exams</span>
                            <div class="xp-progress mt-1" style="width: 100px; display: inline-block; margin-left: 10px;">
                                <div class="xp-progress-bar" id="questProgress" style="width: 0%"></div>
                            </div>
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
                                        <th>Submission Time</th>
                                        <th>Status</th>
                                        <th>Score</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="submissionsTable">
                                    <?php foreach ($recent_submissions as $submission):
                                        $student = getRecord('users', "user_id = {$submission['student_id']}");
                                        $quiz = getRecord('quizzes', "quiz_id = {$submission['quiz_id']}");
                                        $question = getAllRecords('questions', "WHERE quiz_id = {$submission['quiz_id']}");
                                        $student_answers = getAllRecords('student_answers', "WHERE quiz_id = {$submission['quiz_id']} AND student_id = {$submission['student_id']}");
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
                                    ?>
                                        <tr class="submission-row">
                                            <td>#<?php echo $submission['student_id']; ?></td>
                                            <td><?php echo "{$student['first_name']} {$student['last_name']}"; ?></td>
                                            <td><?php echo $quiz['title']; ?></td>
                                            <td><?php echo date('F j, Y H:i', strtotime($submission['taken_at'])); ?></td>
                                            <td><span class="badge <?php echo $status_class; ?>"><?php echo $status_text; ?></span></td>
                                            <td><?php echo intval($student_grade); ?> / <?php echo intval($total_points); ?></td>
                                            <td>
                                                <a href="student-review-exam.php?student_id=<?php echo $submission['student_id']; ?>&id=<?php echo $submission['quiz_id']; ?>" class="btn btn-sm btn-outline-primary">Review</a>
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
<div class="sound-control" id="soundControl" onclick="toggleSound()">
    <i class="fas fa-volume-up" id="soundIcon"></i>
</div>

<!-- Footer -->
<?php include 'footer.php'; ?>

<!-- Background Music -->
<audio id="backgroundMusic" loop>
    <source src="../assets/sounds/game-music-loop-6.mp3" type="audio/mpeg">
</audio>

<!-- Sound Effects -->
<audio id="achievementSound">
    <source src="../assets/sounds/small-win.mp3" type="audio/mpeg">
</audio>

<audio id="hoverSound">
    <source src="../assets/sounds/win-chime.mp3" type="audio/mpeg">
</audio>

<script>
    // Game State
    const gameState = {
        soundEnabled: true,
        xp: 0,
        level: 1,
        xpToNextLevel: 100,
        quests: {
            completeExams: {
                target: 5,
                current: <?php echo count($recent_submissions); ?>,
                completed: false
            },
            activeExams: {
                target: 3,
                current: <?php echo $active_exams; ?>,
                completed: false
            }
        }
    };

    // DOM Elements
    const soundControl = document.getElementById('soundControl');
    const soundIcon = document.getElementById('soundIcon');
    const backgroundMusic = document.getElementById('backgroundMusic');
    const achievementSound = document.getElementById('achievementSound');
    const hoverSound = document.getElementById('hoverSound');
    const levelDisplay = document.getElementById('levelDisplay');
    const xpDisplay = document.getElementById('xpDisplay');
    const xpToNext = document.getElementById('xpToNext');
    const levelProgress = document.getElementById('levelProgress');
    const examProgress = document.getElementById('examProgress');
    const submissionProgress = document.getElementById('submissionProgress');
    const gradingProgress = document.getElementById('gradingProgress');
    const questProgress = document.getElementById('questProgress');
    const activeExamsCard = document.getElementById('activeExamsCard');
    const submissionsCard = document.getElementById('submissionsCard');
    const gradingCard = document.getElementById('gradingCard');

    // Initialize
    document.addEventListener('DOMContentLoaded', function() {
        // Load saved game state
        loadGameState();

        // Update UI
        updateGameUI();

        // Check for achievements
        checkAchievements();

        // Add hover effects
        addHoverEffects();

        // Animate table rows
        animateTableRows();

        // Initialize sound
        initSound();
    });

    // Initialize sound system
    function initSound() {
        // Set volume levels
        backgroundMusic.volume = 0.3;
        achievementSound.volume = 0.6;
        hoverSound.volume = 0.2;

        // Try to play background music (with user interaction fallback)
        if (gameState.soundEnabled) {
            const playPromise = backgroundMusic.play();

            if (playPromise !== undefined) {
                playPromise.catch(error => {
                    // Autoplay was prevented - wait for user interaction
                    console.log("Autoplay prevented, waiting for user interaction");
                    document.body.addEventListener('click', () => {
                        backgroundMusic.play().catch(e => console.log("Still unable to play:", e));
                    }, {
                        once: true
                    });
                });
            }
        }

        // Update sound icon based on current state
        soundIcon.className = gameState.soundEnabled ? 'fas fa-volume-up' : 'fas fa-volume-mute';
    }

    // Toggle sound
    function toggleSound() {
        gameState.soundEnabled = !gameState.soundEnabled;

        if (gameState.soundEnabled) {
            soundIcon.className = 'fas fa-volume-up';
            backgroundMusic.play().catch(e => console.log("Play failed:", e));
        } else {
            soundIcon.className = 'fas fa-volume-mute';
            backgroundMusic.pause();
        }

        saveGameState();
    }

    // Load game state from localStorage
    function loadGameState() {
        const savedState = localStorage.getItem('gameState');
        if (savedState) {
            Object.assign(gameState, JSON.parse(savedState));
        }
    }

    // Save game state to localStorage
    function saveGameState() {
        localStorage.setItem('gameState', JSON.stringify(gameState));
    }

    // Update game UI
    function updateGameUI() {
        // Update level and XP
        levelDisplay.textContent = `Level ${gameState.level} Student`;
        xpDisplay.textContent = `${gameState.xp} XP`;
        xpToNext.textContent = `${gameState.xpToNextLevel - gameState.xp} XP to next level`;
        levelProgress.style.width = `${(gameState.xp / gameState.xpToNextLevel) * 100}%`;

        // Update progress bars
        examProgress.style.width = `${(gameState.quests.activeExams.current / gameState.quests.activeExams.target) * 100}%`;
        submissionProgress.style.width = `${(gameState.quests.completeExams.current / gameState.quests.completeExams.target) * 100}%`;
        questProgress.style.width = `${(gameState.quests.completeExams.current / gameState.quests.completeExams.target) * 100}%`;

        // Update grading progress (example - could be based on pending/total)
        gradingProgress.style.width = `${(<?php echo $pending_grading; ?> / 10) * 100}%`; // Assuming max 10 pending
    }

    // Check for achievements
    function checkAchievements() {
        // Check active exams quest
        if (!gameState.quests.activeExams.completed &&
            gameState.quests.activeExams.current >= gameState.quests.activeExams.target) {
            gameState.quests.activeExams.completed = true;
            awardXP(50);
            showAchievement("Active Exams Master!");
        }

        // Check complete exams quest
        if (!gameState.quests.completeExams.completed &&
            gameState.quests.completeExams.current >= gameState.quests.completeExams.target) {
            gameState.quests.completeExams.completed = true;
            awardXP(100);
            showAchievement("Exam Champion!");
        }

        saveGameState();
    }

    // Award XP
    function awardXP(amount) {
        gameState.xp += amount;

        // Check for level up
        while (gameState.xp >= gameState.xpToNextLevel) {
            gameState.xp -= gameState.xpToNextLevel;
            gameState.level++;
            gameState.xpToNextLevel = Math.floor(gameState.xpToNextLevel * 1.2);

            // Play level up sound
            if (gameState.soundEnabled) {
                achievementSound.currentTime = 0;
                achievementSound.play().catch(e => console.log("Achievement sound error:", e));
            }

            showAchievement(`Level Up! Now Level ${gameState.level}`);
        }

        updateGameUI();
        saveGameState();
    }

    // Show achievement notification
    function showAchievement(message) {
        const notification = document.createElement('div');
        notification.className = 'floating-feedback show';
        notification.innerHTML = `<i class="fas fa-trophy mr-2"></i> ${message}`;
        notification.style.position = 'fixed';
        notification.style.bottom = '80px';
        notification.style.right = '20px';
        notification.style.zIndex = '1000';

        document.body.appendChild(notification);

        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => notification.remove(), 300);
        }, 3000);
    }

    // Add hover effects to cards
    function addHoverEffects() {
        const cards = [activeExamsCard, submissionsCard, gradingCard];

        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                if (gameState.soundEnabled) {
                    hoverSound.currentTime = 0;
                    hoverSound.play().catch(e => console.log("Hover sound error:", e));
                }
            });
        });
    }

    // Animate table rows on load
    function animateTableRows() {
        const rows = document.querySelectorAll('.submission-row');

        rows.forEach((row, index) => {
            row.style.opacity = '0';
            row.style.transform = 'translateX(-20px)';

            setTimeout(() => {
                row.style.transition = 'all 0.5s ease';
                row.style.opacity = '1';
                row.style.transform = 'translateX(0)';
            }, index * 100);
        });
    }

    // Play sound on window load (with fallback for autoplay policies)
    window.addEventListener('load', function() {
        if (gameState.soundEnabled) {
            // Modern browsers require user interaction for audio playback
            // We'll try to play but have fallbacks in place
            const playPromise = backgroundMusic.play();

            if (playPromise !== undefined) {
                playPromise.catch(error => {
                    // Autoplay was prevented - show UI indication
                    console.log("Autoplay prevented on window load");

                    // Add a visual indicator that sound is muted due to browser policy
                    const soundNotice = document.createElement('div');
                    soundNotice.className = 'alert alert-info sound-notice';
                    soundNotice.style.position = 'fixed';
                    soundNotice.style.bottom = '80px';
                    soundNotice.style.right = '20px';
                    soundNotice.style.zIndex = '1000';
                    soundNotice.innerHTML = '<i class="fas fa-volume-mute mr-2"></i> Click anywhere to enable sound';
                    document.body.appendChild(soundNotice);

                    // Enable on first user interaction
                    const enableSound = () => {
                        backgroundMusic.play().then(() => {
                            soundNotice.remove();
                        }).catch(e => {
                            console.log("Still unable to play:", e);
                        });
                        document.body.removeEventListener('click', enableSound);
                    };

                    document.body.addEventListener('click', enableSound);
                });
            }
        }
    });
</script>