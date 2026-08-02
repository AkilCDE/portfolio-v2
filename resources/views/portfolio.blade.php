<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Akil Cyrylle Dangel — Full Stack Developer using AI. Building modern, intelligent web experiences.">
    <title>Akil Cyrylle Dangel — Full Stack Developer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <style>
        /* ===== CSS Reset & Custom Properties ===== */
        *, *::before, *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --bg-primary: #0a0a0f;
            --bg-secondary: #12121a;
            --bg-card: rgba(255, 255, 255, 0.03);
            --bg-card-hover: rgba(255, 255, 255, 0.06);
            --border: rgba(255, 255, 255, 0.06);
            --border-hover: rgba(255, 255, 255, 0.12);
            --text-primary: #f0f0f5;
            --text-secondary: #8a8a9a;
            --text-tertiary: #5a5a6a;
            --accent: #6c63ff;
            --accent-glow: rgba(108, 99, 255, 0.15);
            --accent-hover: #7b73ff;
            --accent-soft: rgba(108, 99, 255, 0.08);
            --success: #22c55e;
            --success-bg: rgba(34, 197, 94, 0.08);
            --success-border: rgba(34, 197, 94, 0.2);
            --gradient-1: linear-gradient(135deg, #6c63ff 0%, #a855f7 50%, #ec4899 100%);
            --gradient-2: linear-gradient(135deg, rgba(108, 99, 255, 0.1) 0%, rgba(168, 85, 247, 0.05) 100%);
            --font-sans: 'Inter', -apple-system, BlinkMacSystemFont, system-ui, sans-serif;
            --font-mono: 'JetBrains Mono', 'Fira Code', monospace;
            --radius-sm: 8px;
            --radius-md: 12px;
            --radius-lg: 20px;
            --radius-xl: 28px;
            --shadow-glow: 0 0 60px rgba(108, 99, 255, 0.08);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: var(--font-sans);
            background: var(--bg-primary);
            color: var(--text-primary);
            min-height: 100vh;
            overflow-x: hidden;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        /* ===== Ambient Background ===== */
        .ambient-bg {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            overflow: hidden;
        }

        .ambient-bg .orb {
            position: absolute;
            border-radius: 50%;
            filter: blur(120px);
            opacity: 0.4;
            animation: orbFloat 20s ease-in-out infinite;
        }

        .ambient-bg .orb-1 {
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(108, 99, 255, 0.15), transparent 70%);
            top: -200px;
            left: -100px;
            animation-delay: 0s;
        }

        .ambient-bg .orb-2 {
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(168, 85, 247, 0.1), transparent 70%);
            bottom: -150px;
            right: -100px;
            animation-delay: -7s;
        }

        .ambient-bg .orb-3 {
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(236, 72, 153, 0.08), transparent 70%);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation-delay: -14s;
        }

        @keyframes orbFloat {
            0%, 100% { transform: translate(0, 0) scale(1); }
            25% { transform: translate(30px, -40px) scale(1.05); }
            50% { transform: translate(-20px, 20px) scale(0.95); }
            75% { transform: translate(40px, 30px) scale(1.02); }
        }

        /* ===== Grid Overlay ===== */
        .grid-overlay {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            background-image:
                linear-gradient(rgba(255, 255, 255, 0.015) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, 0.015) 1px, transparent 1px);
            background-size: 80px 80px;
            mask-image: radial-gradient(ellipse 60% 50% at 50% 50%, black, transparent);
        }

        /* ===== Noise Texture ===== */
        .noise {
            position: fixed;
            inset: 0;
            z-index: 0;
            pointer-events: none;
            opacity: 0.03;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E");
        }

        /* ===== Main Container ===== */
        .container {
            position: relative;
            z-index: 1;
            max-width: 720px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* ===== Navigation ===== */
        .nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 100;
            padding: 16px 24px;
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            background: rgba(10, 10, 15, 0.7);
            border-bottom: 1px solid var(--border);
            transition: var(--transition);
        }

        .nav-inner {
            max-width: 720px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nav-logo {
            font-weight: 700;
            font-size: 1.1rem;
            letter-spacing: -0.03em;
            background: var(--gradient-1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-status {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.8rem;
            color: var(--text-tertiary);
            font-family: var(--font-mono);
        }

        .nav-status .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--success);
            box-shadow: 0 0 8px rgba(34, 197, 94, 0.5);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        /* ===== Hero Section ===== */
        .hero {
            padding-top: 140px;
            padding-bottom: 80px;
            text-align: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 16px;
            border-radius: 100px;
            background: var(--accent-soft);
            border: 1px solid rgba(108, 99, 255, 0.15);
            color: var(--accent);
            font-size: 0.78rem;
            font-weight: 500;
            letter-spacing: 0.02em;
            margin-bottom: 32px;
            animation: fadeInUp 0.8s ease-out;
        }

        .hero-badge .badge-icon {
            font-size: 0.85rem;
        }

        .hero-name {
            font-size: clamp(2.8rem, 7vw, 4.2rem);
            font-weight: 900;
            letter-spacing: -0.04em;
            line-height: 1.05;
            margin-bottom: 20px;
            animation: fadeInUp 0.8s ease-out 0.1s both;
        }

        .hero-name .gradient-text {
            background: var(--gradient-1);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .hero-title {
            font-size: clamp(1.1rem, 3vw, 1.35rem);
            font-weight: 400;
            color: var(--text-secondary);
            margin-bottom: 12px;
            letter-spacing: -0.01em;
            animation: fadeInUp 0.8s ease-out 0.2s both;
        }

        .hero-subtitle {
            font-size: 0.95rem;
            color: var(--text-tertiary);
            line-height: 1.7;
            max-width: 500px;
            margin: 0 auto 40px;
            animation: fadeInUp 0.8s ease-out 0.3s both;
        }

        .hero-tech {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            animation: fadeInUp 0.8s ease-out 0.4s both;
        }

        .tech-tag {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 6px 14px;
            border-radius: 100px;
            background: var(--bg-card);
            border: 1px solid var(--border);
            color: var(--text-secondary);
            font-size: 0.78rem;
            font-weight: 500;
            font-family: var(--font-mono);
            transition: var(--transition);
        }

        .tech-tag:hover {
            border-color: var(--border-hover);
            background: var(--bg-card-hover);
            color: var(--text-primary);
            transform: translateY(-1px);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* ===== Divider ===== */
        .divider {
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--border), transparent);
            margin: 0 0 60px;
        }

        /* ===== About Section ===== */
        .section {
            margin-bottom: 60px;
        }

        .section-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-size: 0.72rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.12em;
            color: var(--accent);
            margin-bottom: 20px;
            font-family: var(--font-mono);
        }

        .section-label::before {
            content: '';
            width: 20px;
            height: 1px;
            background: var(--accent);
            opacity: 0.5;
        }

        .about-text {
            font-size: 1.05rem;
            line-height: 1.8;
            color: var(--text-secondary);
            max-width: 600px;
        }

        .about-text strong {
            color: var(--text-primary);
            font-weight: 600;
        }

        /* ===== Skills Grid ===== */
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }

        .skill-card {
            padding: 20px;
            border-radius: var(--radius-md);
            background: var(--bg-card);
            border: 1px solid var(--border);
            transition: var(--transition);
            cursor: default;
        }

        .skill-card:hover {
            border-color: var(--border-hover);
            background: var(--bg-card-hover);
            transform: translateY(-2px);
            box-shadow: var(--shadow-glow);
        }

        .skill-icon {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .skill-title {
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 4px;
        }

        .skill-desc {
            font-size: 0.78rem;
            color: var(--text-tertiary);
            line-height: 1.5;
        }

        /* ===== Message Section ===== */
        .message-section {
            margin-bottom: 80px;
        }

        .message-card {
            padding: 36px;
            border-radius: var(--radius-lg);
            background: var(--bg-card);
            border: 1px solid var(--border);
            position: relative;
            overflow: hidden;
            transition: var(--transition);
        }

        .message-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: var(--gradient-1);
            opacity: 0.5;
        }

        .message-card:hover {
            border-color: var(--border-hover);
            box-shadow: var(--shadow-glow);
        }

        .message-heading {
            font-size: 1.25rem;
            font-weight: 700;
            letter-spacing: -0.02em;
            margin-bottom: 8px;
        }

        .message-desc {
            font-size: 0.88rem;
            color: var(--text-tertiary);
            margin-bottom: 24px;
            line-height: 1.6;
        }

        .form-group {
            position: relative;
        }

        .form-textarea {
            width: 100%;
            min-height: 120px;
            padding: 16px;
            border-radius: var(--radius-md);
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid var(--border);
            color: var(--text-primary);
            font-family: var(--font-sans);
            font-size: 0.92rem;
            line-height: 1.6;
            resize: vertical;
            transition: var(--transition);
            outline: none;
        }

        .form-textarea::placeholder {
            color: var(--text-tertiary);
        }

        .form-textarea:focus {
            border-color: var(--accent);
            box-shadow: 0 0 0 3px var(--accent-glow);
            background: rgba(108, 99, 255, 0.02);
        }

        .form-footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 16px;
        }

        .char-count {
            font-size: 0.75rem;
            color: var(--text-tertiary);
            font-family: var(--font-mono);
        }

        .btn-submit {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 24px;
            border-radius: var(--radius-sm);
            background: var(--accent);
            color: #fff;
            font-family: var(--font-sans);
            font-size: 0.85rem;
            font-weight: 600;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            letter-spacing: -0.01em;
        }

        .btn-submit:hover {
            background: var(--accent-hover);
            transform: translateY(-1px);
            box-shadow: 0 4px 20px rgba(108, 99, 255, 0.3);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .btn-submit .arrow {
            transition: transform 0.2s ease;
        }

        .btn-submit:hover .arrow {
            transform: translateX(3px);
        }

        /* ===== Success Toast ===== */
        .toast {
            position: fixed;
            bottom: 32px;
            right: 32px;
            z-index: 200;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 14px 20px;
            border-radius: var(--radius-md);
            background: var(--success-bg);
            border: 1px solid var(--success-border);
            color: var(--success);
            font-size: 0.85rem;
            font-weight: 500;
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            animation: toastIn 0.4s ease-out, toastOut 0.4s ease-in 3.6s forwards;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
        }

        @keyframes toastIn {
            from {
                opacity: 0;
                transform: translateY(20px) scale(0.95);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        @keyframes toastOut {
            from {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
            to {
                opacity: 0;
                transform: translateY(20px) scale(0.95);
            }
        }

        /* ===== Validation Error ===== */
        .error-text {
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: 8px;
        }

        /* ===== Footer ===== */
        .footer {
            padding: 32px 0;
            border-top: 1px solid var(--border);
            text-align: center;
        }

        .footer-text {
            font-size: 0.78rem;
            color: var(--text-tertiary);
            font-family: var(--font-mono);
        }

        .footer-text .heart {
            display: inline-block;
            color: #ef4444;
            animation: heartbeat 1.5s ease-in-out infinite;
        }

        @keyframes heartbeat {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.15); }
        }

        /* ===== Scroll Animations ===== */
        .reveal {
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.7s ease-out, transform 0.7s ease-out;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ===== Responsive ===== */
        @media (max-width: 640px) {
            .container {
                padding: 0 16px;
            }

            .hero {
                padding-top: 120px;
                padding-bottom: 60px;
            }

            .message-card {
                padding: 24px;
            }

            .form-footer {
                flex-direction: column;
                gap: 12px;
                align-items: stretch;
            }

            .btn-submit {
                justify-content: center;
            }

            .skills-grid {
                grid-template-columns: 1fr;
            }

            .toast {
                left: 16px;
                right: 16px;
                bottom: 16px;
            }
        }
    </style>
</head>
<body>
    <!-- Ambient Background -->
    <div class="ambient-bg">
        <div class="orb orb-1"></div>
        <div class="orb orb-2"></div>
        <div class="orb orb-3"></div>
    </div>
    <div class="grid-overlay"></div>
    <div class="noise"></div>

    <!-- Navigation -->
    <nav class="nav">
        <div class="nav-inner">
            <div class="nav-logo">ACD</div>
            <div class="nav-status">
                <span class="dot"></span>
                Available for work
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container">

        <!-- Hero -->
        <section class="hero">
            <div class="hero-badge">
                <span class="badge-icon">⚡</span>
                Full Stack Developer × AI
            </div>
            <h1 class="hero-name">
                <span class="gradient-text">Akil Cyrylle</span><br>
                Dangel
            </h1>
            <p class="hero-title">Building intelligent digital experiences</p>
            <p class="hero-subtitle">
                I craft modern web applications powered by artificial intelligence — blending clean code with smart automation to deliver solutions that actually matter.
            </p>
            <div class="hero-tech">
                <span class="tech-tag">Laravel</span>
                <span class="tech-tag">React</span>
                <span class="tech-tag">Node.js</span>
                <span class="tech-tag">Python</span>
                <span class="tech-tag">AI/ML</span>
                <span class="tech-tag">MySQL</span>
            </div>
        </section>

        <div class="divider"></div>

        <!-- About -->
        <section class="section reveal">
            <div class="section-label">About</div>
            <p class="about-text">
                I'm <strong>Akil Cyrylle Dangel</strong>, a full stack developer who leverages <strong>AI tools and methodologies</strong> to build faster, smarter, and more efficiently. From backend APIs to polished frontends, I handle the entire stack — and I use AI as my co-pilot to push the boundaries of what's possible.
            </p>
        </section>

        <!-- Skills -->
        <section class="section reveal">
            <div class="section-label">What I Do</div>
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-icon">🧠</div>
                    <div class="skill-title">AI-Powered Dev</div>
                    <div class="skill-desc">Integrating AI models and tools into real-world applications</div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">🛠️</div>
                    <div class="skill-title">Full Stack</div>
                    <div class="skill-desc">End-to-end development from database to deployment</div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">🎨</div>
                    <div class="skill-title">UI/UX Design</div>
                    <div class="skill-desc">Clean, modern interfaces that feel premium</div>
                </div>
                <div class="skill-card">
                    <div class="skill-icon">⚙️</div>
                    <div class="skill-title">API Architecture</div>
                    <div class="skill-desc">Scalable RESTful APIs and system design</div>
                </div>
            </div>
        </section>

        <div class="divider"></div>

        <!-- Message Form -->
        <section class="message-section reveal">
            <div class="section-label">Get in Touch</div>
            <div class="message-card">
                <h2 class="message-heading">Drop me a message</h2>
                <p class="message-desc">Have an idea, a project, or just want to say hello? Leave a message below — it goes straight to my database.</p>

                <form action="{{ route('message.store') }}" method="POST" id="messageForm">
                    @csrf
                    <div class="form-group">
                        <textarea
                            name="content"
                            id="messageContent"
                            class="form-textarea"
                            placeholder="Write your message here..."
                            maxlength="2000"
                            required
                        >{{ old('content') }}</textarea>
                        @error('content')
                            <p class="error-text">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-footer">
                        <span class="char-count"><span id="charCount">0</span> / 2000</span>
                        <button type="submit" class="btn-submit" id="submitBtn">
                            Send Message
                            <span class="arrow">→</span>
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <footer class="footer">
            <p class="footer-text">
                © {{ date('Y') }} Akil Cyrylle Dangel · Built with <span class="heart">♥</span> and AI
            </p>
        </footer>
    </div>

    <!-- Success Toast -->
    @if(session('success'))
        <div class="toast" id="successToast">
            <span>✓</span>
            {{ session('success') }}
        </div>
    @endif

    <script>
        // Character counter
        const textarea = document.getElementById('messageContent');
        const charCount = document.getElementById('charCount');

        textarea.addEventListener('input', () => {
            charCount.textContent = textarea.value.length;
        });

        // Initialize count on page load (in case of old input)
        charCount.textContent = textarea.value.length;

        // Scroll reveal animation
        const revealElements = document.querySelectorAll('.reveal');

        const revealObserver = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });

        revealElements.forEach((el) => revealObserver.observe(el));

        // Auto-remove toast after animation
        const toast = document.getElementById('successToast');
        if (toast) {
            setTimeout(() => toast.remove(), 4000);
        }
    </script>
</body>
</html>
