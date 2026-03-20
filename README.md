🎵 CodePilot — AI Music & Sound Therapy Studio
CodePilot is a next-generation AI-powered music and sound therapy platform. It allows users to hum a melody and have AI transform it into a professional musical track, while also providing immersive sound therapy modes for mental wellness.

🚀 Overview
Built for the PS-11 Hackathon 2026, CodePilot decouples musical intent from technical skill. The studio uses real-time pitch detection to listen to your voice and generates a personalized melody that can be played back across various instruments or therapeutic soundscapes.

✨ Key Features
Voice-to-Melody: Hum any tune and the AI detects your notes in real time to compose a full melody.

Sound Therapy: Includes three clinically-inspired modes: Tibetan Bowls, Binaural Beats, and Sound Bath.

Interactive Piano: A fully functional 3-octave interactive piano keyboard with professional synthesis.

Melody Library: Automatically saves every generated melody for replay, download, or deletion.

Export Options: Download melodies as audio files with full reverb and mastering effects.

Persistence: Saves user preferences, themes, and session data using cookies and local storage.

🛠️ Tech Stack
Frontend: HTML5, CSS3 (Custom Theme System), Vanilla JavaScript

Audio Engine: Tone.js & Web Audio API

AI Integration: Claude AI (via backend proxy)

Backend: PHP (Session management and contact form handling)

Database: MySQL (Database: CodePilotAU)

📂 Project Structure
index.html: The main studio interface and multi-page layout.

save_session.php: Manages user sessions and name persistence in the database.

save_contact.php: Handles contact form submissions and stores messages.

style.css: Implements the "Space Grotesk" and "Orbitron" aesthetic with dynamic themes.

script.js: Contains the core logic for pitch detection and AI synthesis.

🏁 Getting Started
Database Setup
Create a MySQL database named CodePilotAU.

Create the following tables:

user_sessions: Columns for session_token and user_name.

contact_messages: Columns for session_token, name, email, subject, and message.

Local Deployment
Host the project folder on a PHP-enabled server (e.g., XAMPP, WAMP, or Apache).

Ensure the database connection in the .php files matches your local credentials (127.0.0.1, root, etc.).

Open index.html in a modern web browser.

👥 Team CodePilot (BCA 4th Semester)
Ajay Kushwaha - Project Lead & Full-Stack Developer

Foram Upadhyay - UI/UX & Frontend Developer

Kaushal Zala - UI Designer & Visual Creative

Riya Sakariya - AI Integration & Research
