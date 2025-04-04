<!-- Header -->
<?php include 'header.php'; ?>

<!-- Session Check -->
<?php include '../../controllers/sessions.php'; ?>

<!-- Sidebar -->
<?php include 'sidebar.php'; ?>

<style>
    /* Gamification styles scoped to exam cards only */
    .exam-list-container .exam-card {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        height: 100%;
    }

    .exam-list-container .exam-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }

    .exam-list-container .card-header {
        position: relative;
        padding: 0.75rem 1.25rem;
    }

    .exam-list-container .exam-badge {
        position: absolute;
        top: -10px;
        right: -10px;
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
        z-index: 1;
    }

    .exam-list-container .take-exam-btn {
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .exam-list-container .take-exam-btn:hover {
        transform: scale(1.05);
    }

    /* Sound control positioned safely */
    .exam-sound-control {
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

    /* Achievement notification */
    .exam-achievement-notification {
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

    .exam-achievement-notification.show {
        transform: translateX(0);
    }

    /* Level indicator positioned safely */
    .exam-level-indicator {
        position: absolute;
        top: 90px;
        right: 30px;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 0.8rem;
        z-index: 1;
    }

    /* Animation keyframes */
    @keyframes examCardBounce {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-5px);
        }
    }

    @keyframes examPulse {
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
</style>

<!-- Main Content -->
<div class="main-content">
    <!-- Top Navbar -->
    <?php include 'top-navbar.php'; ?>

    <!-- Dashboard Content -->
    <div class="container-fluid exam-list-container">
        <!-- Level Indicator -->
        <div class="exam-level-indicator">
            <i class="fas fa-trophy mr-1"></i>
            <span id="examLevelDisplay">Level 1</span>
            <span id="examXpDisplay">(0/100 XP)</span>
        </div>

        <!-- Exams Table -->
        <div class="row mt-4">
            <?php include '../../controllers/get-student-exam.php'; ?>
        </div>
    </div>
</div>

<!-- Sound Control -->
<div class="exam-sound-control" id="examSoundControl" onclick="toggleExamSound()">
    <i class="fas fa-volume-up" id="examSoundIcon"></i>
</div>

<!-- Achievement Notification -->
<div class="exam-achievement-notification" id="examAchievementNotification">
    <i class="fas fa-trophy mr-2"></i>
    <span id="examAchievementText">Achievement Unlocked!</span>
</div>

<!-- Audio Elements -->
<audio id="examBackgroundMusic" loop>
    <source src="../assets/sounds/game-music-loop-6.mp3" type="audio/mpeg">
</audio>
<audio id="examAchievementSound">
    <source src="../assets/sounds/small-win.mp3" type="audio/mpeg">
</audio>
<audio id="examHoverSound">
    <source src="../assets/sounds/win-chime.mp3" type="audio/mpeg">
</audio>
<audio id="examClickSound">
    <source src="../assets/sounds/click.mp3" type="audio/mpeg">
</audio>

<script>
    // Exam Game State
    const examGameState = {
        soundEnabled: true,
        xp: 0,
        level: 1,
        xpToNextLevel: 100,
        examsCompleted: 0
    };

    // DOM Elements
    const examSoundControl = document.getElementById('examSoundControl');
    const examSoundIcon = document.getElementById('examSoundIcon');
    const examBackgroundMusic = document.getElementById('examBackgroundMusic');
    const examAchievementSound = document.getElementById('examAchievementSound');
    const examHoverSound = document.getElementById('examHoverSound');
    const examClickSound = document.getElementById('examClickSound');
    const examLevelDisplay = document.getElementById('examLevelDisplay');
    const examXpDisplay = document.getElementById('examXpDisplay');
    const examAchievementNotification = document.getElementById('examAchievementNotification');
    const examAchievementText = document.getElementById('examAchievementText');
    const examCards = document.querySelectorAll('.exam-card');

    // Initialize
    document.addEventListener('DOMContentLoaded', function() {
        // Load saved game state
        loadExamGameState();

        // Update UI
        updateExamGameUI();

        // Initialize sound
        initExamSound();

        // Add hover effects to exam cards
        addExamCardHoverEffects();
    });

    // Initialize sound system
    function initExamSound() {
        // Set volume levels
        examBackgroundMusic.volume = 0.3;
        examAchievementSound.volume = 0.6;
        examHoverSound.volume = 0.2;
        examClickSound.volume = 0.5;

        // Try to play background music
        if (examGameState.soundEnabled) {
            const playPromise = examBackgroundMusic.play();

            if (playPromise !== undefined) {
                playPromise.catch(error => {
                    console.log("Autoplay prevented, waiting for user interaction");
                    document.body.addEventListener('click', () => {
                        examBackgroundMusic.play().catch(e => console.log("Still unable to play:", e));
                    }, {
                        once: true
                    });
                });
            }
        }

        // Update sound icon
        examSoundIcon.className = examGameState.soundEnabled ? 'fas fa-volume-up' : 'fas fa-volume-mute';
    }

    // Toggle sound
    function toggleExamSound() {
        examGameState.soundEnabled = !examGameState.soundEnabled;

        if (examGameState.soundEnabled) {
            examSoundIcon.className = 'fas fa-volume-up';
            examBackgroundMusic.play().catch(e => console.log("Play failed:", e));
        } else {
            examSoundIcon.className = 'fas fa-volume-mute';
            examBackgroundMusic.pause();
        }

        saveExamGameState();
    }

    // Play click sound
    function playExamClickSound() {
        if (examGameState.soundEnabled) {
            examClickSound.currentTime = 0;
            examClickSound.play().catch(e => console.log("Click sound error:", e));

            // Award XP for attempting exam
            awardExamXP(10, "Exam Attempt Started!");
        }
    }

    // Add hover effects to cards
    function addExamCardHoverEffects() {
        examCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                if (examGameState.soundEnabled) {
                    examHoverSound.currentTime = 0;
                    examHoverSound.play().catch(e => console.log("Hover sound error:", e));
                }
            });
        });
    }

    // Load game state
    function loadExamGameState() {
        const savedState = localStorage.getItem('examGameState');
        if (savedState) {
            Object.assign(examGameState, JSON.parse(savedState));
        }
    }

    // Save game state
    function saveExamGameState() {
        localStorage.setItem('examGameState', JSON.stringify(examGameState));
    }

    // Update game UI
    function updateExamGameUI() {
        examLevelDisplay.textContent = `Level ${examGameState.level}`;
        examXpDisplay.textContent = `(${examGameState.xp}/${examGameState.xpToNextLevel} XP)`;
    }

    // Award XP
    function awardExamXP(amount, message) {
        examGameState.xp += amount;
        examGameState.examsCompleted += 1;

        // Check for level up
        while (examGameState.xp >= examGameState.xpToNextLevel) {
            examGameState.xp -= examGameState.xpToNextLevel;
            examGameState.level++;
            examGameState.xpToNextLevel = Math.floor(examGameState.xpToNextLevel * 1.2);

            showExamAchievement(`Level Up! Now Level ${examGameState.level}`);
        }

        if (message) {
            showExamAchievement(message);
        }

        updateExamGameUI();
        saveExamGameState();
    }

    // Show achievement
    function showExamAchievement(message) {
        if (examGameState.soundEnabled) {
            examAchievementSound.currentTime = 0;
            examAchievementSound.play().catch(e => console.log("Achievement sound error:", e));
        }

        examAchievementText.textContent = message;
        examAchievementNotification.classList.add('show');

        setTimeout(() => {
            examAchievementNotification.classList.remove('show');
        }, 3000);
    }
</script>

<!-- Footer -->
<?php include 'footer.php'; ?>