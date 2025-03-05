<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        'dark-primary': '#121212',
                        'dark-secondary': '#1E1E1E',
                        'dark-accent': '#BB86FC',
                        'dark-text': '#E0E0E0',
                        'cyber-green': '#03DAC6'
                    },
                    boxShadow: {
                        'neon': '0 0 15px rgba(187, 134, 252, 0.5)',
                        'cyber': '0 0 20px rgba(3, 218, 198, 0.3)'
                    }
                }
            }
        }
    </script>
    <style>
        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
        .animate-pulse-soft {
            animation: pulse 3s infinite;
        }
        .skill-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .skill-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body class="bg-dark-primary text-dark-text font-sans selection:bg-dark-accent selection:text-black">
    <!-- Navigation -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-dark-secondary/80 backdrop-blur-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-4">
                <h1 class="text-2xl font-bold text-dark-accent">Portfolio</h1>
            </div>
            <div class="hidden md:flex space-x-6">
                <a href="#home" class="nav-link text-dark-text hover:text-dark-accent transition-colors">Home</a>
                <a href="#about" class="nav-link text-dark-text hover:text-dark-accent transition-colors">About</a>
                <a href="#skills" class="nav-link text-dark-text hover:text-dark-accent transition-colors">Skills</a>
                <a href="#projects" class="nav-link text-dark-text hover:text-dark-accent transition-colors">Projects</a>
                <a href="#certifications" class="nav-link text-dark-text hover:text-dark-accent transition-colors">Certifications</a>
            </div>
            <div class="flex items-center space-x-4">
                <a href="https://t.me/KisanakOfficial" class="px-4 py-2 bg-dark-accent text-black rounded-full hover:bg-opacity-80 transition-all text-white">
                    Contact
                </a>
                <button id="mobileMenuToggle" class="md:hidden">
                    <i data-feather="menu" class="text-dark-text"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header id="home" class="min-h-screen flex items-center relative overflow-hidden pt-20">
        <div class="absolute inset-0 bg-gradient-to-br from-dark-primary to-dark-secondary opacity-75"></div>
        <div class="container mx-auto px-4 relative z-10 grid md:grid-cols-2 items-center">
            <div>
                <div class="space-y-4">
                    <span class="text-cyber-green text-lg font-mono">Hello, I'm Niko Surya Adi Prananta</span>
                    <h1 class="text-5xl font-bold text-dark-accent animate-pulse-soft">
                    Backend Developer & 
                    <br>Junior Cyber Security

                    </h1>
                    <p class="text-dark-text max-w-xl leading-relaxed">
                        Passionate about creating secure, scalable backend solutions and uncovering vulnerabilities to protect digital ecosystems.
                    </p>
                    <div class="flex space-x-4 pt-6">
                        <a href="#projects" class="px-6 py-3 bg-dark-accent text-black rounded-full hover:scale-105 transition-transform">
                            View Projects
                        </a>
                        <a href="https://t.me/KisanakOfficial" class="px-6 py-3 border border-dark-accent text-dark-accent rounded-full hover:bg-dark-accent hover:text-black transition-all">
                            Hire Me
                        </a>
                    </div>
                </div>
            </div>
            <div class="hidden md:flex justify-center">
                <img src="https://i.pinimg.com/736x/cc/e8/2f/cce82fa23accfa5a040a205d163b9f3d.jpg" alt="Profile" class="rounded-full border-4 border-dark-accent shadow-neon" style="max-width: 320px; max-height: 320px; object-fit: cover;">
            </div>
        </div>
    </header>

    <!-- About Section -->
    <section id="about" class="py-20 bg-dark-secondary">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-dark-accent mb-4">About Me</h2>
                <p class="text-dark-text max-w-2xl mx-auto">
                    A dedicated backend developer with a laser focus on cybersecurity. With years of experience in building robust web applications and identifying security vulnerabilities, I transform complex challenges into elegant, secure solutions.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-dark-primary p-6 rounded-lg text-center skill-card">
                    <i data-feather="code" class="mx-auto mb-4 text-dark-accent" stroke-width="1.5" width="48" height="48"></i>
                    <h3 class="text-xl font-semibold text-dark-accent mb-2">Backend Development</h3>
                    <p>Expertise in creating scalable and efficient server-side applications using modern technologies.</p>
                </div>
                <div class="bg-dark-primary p-6 rounded-lg text-center skill-card">
                    <i data-feather="shield" class="mx-auto mb-4 text-dark-accent" stroke-width="1.5" width="48" height="48"></i>
                    <h3 class="text-xl font-semibold text-dark-accent mb-2">Cyber Security</h3>
                    <p>Specialized in penetration testing, vulnerability assessment, and developing secure system architectures.</p>
                </div>
                <div class="bg-dark-primary p-6 rounded-lg text-center skill-card">
                    <i data-feather="database" class="mx-auto mb-4 text-dark-accent" stroke-width="1.5" width="48" height="48"></i>
                    <h3 class="text-xl font-semibold text-dark-accent mb-2">Database Management</h3>
                    <p>Proficient in designing and optimizing database structures for performance and security.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="py-20 bg-dark-primary">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-dark-accent mb-12">Technical Skills</h2>
            <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-dark-secondary p-6 rounded-lg">
    <h3 class="text-2xl font-semibold text-cyber-green mb-4">Backend Technologies</h3>
    <ul class="space-y-2">
        <li class="flex items-center">
            <i data-feather="check-circle" class="mr-2 text-dark-accent" width="20" height="20"></i>
            PHP (Laravel)
        </li>
        <li class="flex items-center">
            <i data-feather="check-circle" class="mr-2 text-dark-accent" width="20" height="20"></i>
            MySQL
        </li>
        <li class="flex items-center">
            <i data-feather="check-circle" class="mr-2 text-dark-accent" width="20" height="20"></i>
            API Development (Laravel & Postman)
        </li>
        <li class="flex items-center">
            <i data-feather="check-circle" class="mr-2 text-dark-accent" width="20" height="20"></i>
            Payment Gateway Integration (Xendit)
        </li>
    </ul>
</div>

<div class="bg-dark-secondary p-6 rounded-lg">
    <h3 class="text-2xl font-semibold text-cyber-green mb-4">Security Tools</h3>
    <ul class="space-y-2">
        <li class="flex items-center">
            <i data-feather="check-circle" class="mr-2 text-dark-accent" width="20" height="20"></i>
            Nmap
        </li>
        <li class="flex items-center">
            <i data-feather="check-circle" class="mr-2 text-dark-accent" width="20" height="20"></i>
            Burp Suite
        </li>
        <li class="flex items-center">
            <i data-feather="check-circle" class="mr-2 text-dark-accent" width="20" height="20"></i>
            Metasploit
        </li>
        <li class="flex items-center">
            <i data-feather="check-circle" class="mr-2 text-dark-accent" width="20" height="20"></i>
            Wireshark
        </li>
        <li class="flex items-center">
            <i data-feather="check-circle" class="mr-2 text-dark-accent" width="20" height="20"></i>
            SQLMap
        </li>
        
    </ul>
</div>

                <div class="bg-dark-secondary p-6 rounded-lg">
                    <h3 class="text-2xl font-semibold text-cyber-green mb-4">Databases</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <i data-feather="check-circle" class="mr-2 text-dark-accent" width="20" height="20"></i>
                            MySQL
                        </li>
                        <li class="flex items-center">
                            <i data-feather="check-circle" class="mr-2 text-dark-accent" width="20" height="20"></i>
                            PostgreSQL
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-dark-secondary">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-center text-dark-accent mb-12">Notable Projects</h2>
            <div class="grid md:grid-cols-3 gap-8">
            <div class="bg-dark-primary p-6 rounded-lg skill-card">
    <img src="https://b.top4top.io/p_3351vw6ak1.jpg" alt="Project 1" class="rounded-lg mb-4">
    <h3 class="text-xl font-semibold text-cyber-green mb-2">POS Cashier Web App</h3>
    <p class="mb-4">Developed a comprehensive web-based cashier application with CRUD features, salary management, sales reports, profit and loss reports, and attendance tracking.</p>
    <div class="flex space-x-2">
        <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">Laravel</span>
        <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">MySQL</span>
        <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">API</span>
    </div>
</div>

<div class="bg-dark-primary p-6 rounded-lg skill-card">
    <img src="https://k.top4top.io/p_335166xg91.jpg" alt="Project 2" class="rounded-lg mb-4" style="height:240px;">
    <h3 class="text-xl font-semibold text-cyber-green mb-2">Preloved.co.id Security Assessment</h3>
    <p class="mb-4">Conducted penetration testing on Preloved.co.id, discovering IDOR vulnerability allowing unauthorized access to user data and business logic flaws enabling shipping price manipulation.</p>
    <div class="flex space-x-2">
        <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">IDOR</span>
        <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">Business Logic</span>
        <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">Bug Bounty</span>
    </div>
</div>

<div class="bg-dark-primary p-6 rounded-lg skill-card">
    <img src="https://a.top4top.io/p_3351ivple1.jpg" alt="Project 3" class="rounded-lg mb-4" style="height:240px;">
    <h3 class="text-xl font-semibold text-cyber-green mb-2">Sejahtera.co.id Security Assessment</h3>
    <p class="mb-4">Performed security testing on Sejahtera.co.id, uncovering IDOR vulnerability in transaction details endpoint, allowing unauthorized access to sensitive transaction information.</p>
    <div class="flex space-x-2">
        <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">IDOR</span>
        <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">Pentesting</span>
        <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">Bug Bounty</span>
    </div>
</div>

            </div>
        </div>
    </section>


    <section id="certifications" class="py-20 bg-dark-secondary">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center text-dark-accent mb-12">My Certifications</h2>
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-dark-primary p-6 rounded-lg skill-card">
                <img src="https://f.top4top.io/p_33511ctg91.jpg" alt="Project 1" class="rounded-lg mb-4">
                <h3 class="text-xl font-semibold text-cyber-green mb-2">LKS IT Software Certification</h3>
                <p class="mb-4">Developed innovative digital solutions, creating a mobile Esports management application and a desktop sales management system. Implemented comprehensive CRUD features with a robust Laravel-powered API backend.</p>
                <div class="flex space-x-2">
                    <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">Laravel</span>
                    <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">SQL</span>
                    <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">Kotlin</span>
                    <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">C#</span>
                    <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">API</span>
                </div>
            </div>
            <div class="bg-dark-primary p-6 rounded-lg skill-card">
                <img src="https://k.top4top.io/p_3351smcwh1.jpg" alt="Project 1" class="rounded-lg mb-4">
                <h3 class="text-xl font-semibold text-cyber-green mb-2">Web Security Professional Certification</h3>
                <p class="mb-4">certification from Build with Angga in web security, specializing in sophisticated penetration testing techniques and comprehensive vulnerability identification strategies for digital systems.</p>
                <div class="flex space-x-2">
                    <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">Penetration Testing</span>
                    <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">Bug Bounty</span>
                    <span class="px-3 py-1 bg-dark-accent/20 text-dark-accent rounded-full text-sm">Web Security</span>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Footer -->
    <footer class="bg-dark-secondary py-12">
        <div class="container mx-auto px-4 text-center">
            <div class="flex justify-center space-x-6 mb-8">
                <a href="https://github.com/infinity-dream-code" class="text-dark-text hover:text-dark-accent transition-colors">
                    <i data-feather="github" width="24" height="24"></i>
                </a>
                <a href="https://linkedin.com/in/niko-surya-adi-prananta-b4a263251" class="text-dark-text hover:text-dark-accent transition-colors">
                    <i data-feather="linkedin" width="24" height="24"></i>
                </a>
                <a href="https://t.me/KisanakOfficial" class="text-dark-text hover:text-dark-accent transition-colors">
                <i class="fa-brands fa-telegram" style="font-size: 24px;"></i>
                </a>
            </div>
            <p class="text-dark-text">&copy; 2025 All Rights Reserved.</p>
        </div>
    </footer>


<script>
        // Initialize Feather Icons
        feather.replace();

        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const mobileMenu = document.createElement('div');
        mobileMenu.innerHTML = `
            <div class="fixed inset-0 bg-dark-primary z-50 md:hidden">
                <div class="flex flex-col items-center justify-center h-full space-y-6">
                    <a href="#home" class="text-2xl text-dark-text hover:text-dark-accent">Home</a>
                    <a href="#about" class="text-2xl text-dark-text hover:text-dark-accent">About</a>
                    <a href="#skills" class="text-2xl text-dark-text hover:text-dark-accent">Skills</a>
                    <a href="#projects" class="text-2xl text-dark-text hover:text-dark-accent">Projects</a>
                    <a href="#certifications" class="text-2xl text-dark-text hover:text-dark-accent">Certifications</a>
                    <a href="#contact" class="text-2xl text-dark-accent font-bold">Contact Me</a>
                    <button id="closeMobileMenu" class="absolute top-10 right-10 text-dark-text">
                        <i data-feather="x" width="32" height="32"></i>
                    </button>
                </div>
            </div>
        `;

        mobileMenuToggle.addEventListener('click', () => {
            document.body.appendChild(mobileMenu.firstElementChild);
            feather.replace();
        });

        document.addEventListener('click', (event) => {
            const mobileMenuElement = document.querySelector('.fixed.inset-0.bg-dark-primary');
            const closeMobileMenuButton = document.getElementById('closeMobileMenu');

            if (event.target === closeMobileMenuButton || 
                (mobileMenuElement && !mobileMenuElement.contains(event.target) && event.target !== mobileMenuToggle)) {
                if (mobileMenuElement) {
                    mobileMenuElement.remove();
                }
            }
        });

        // Smooth Scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const targetElement = document.querySelector(this.getAttribute('href'));
                if (targetElement) {
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
                // Automatically close mobile menu after selecting a section
                const mobileMenuElement = document.querySelector('.fixed.inset-0.bg-dark-primary');
                if (mobileMenuElement) {
                    mobileMenuElement.remove();
                }
            });
        });

        // Optional: Simple form validation
        const contactForm = document.querySelector('form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const nameInput = this.querySelector('input[type="text"]');
                const emailInput = this.querySelector('input[type="email"]');
                const messageInput = this.querySelector('textarea');

                if (!nameInput.value || !emailInput.value || !messageInput.value) {
                    alert('Please fill in all fields');
                    return;
                }

                // Here you would typically send the form data to a server
                alert('Message sent successfully!');
                this.reset();
            });
        }
    </script>
</body>
</html>