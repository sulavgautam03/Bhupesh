<?php
require_once 'config/database.php';
require_once 'auth/middleware.php';
checkAuth();
?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhupesh's Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="assets/js/navigation.js" defer></script>
</head>
<body class="bg-gradient-to-br from-gray-900 to-gray-800 text-white antialiased">
    <nav class="fixed w-full top-0 left-0 right-0 bg-gray-900/80 backdrop-blur-md border-b border-white/10 z-50 transition-all duration-300">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex items-center justify-between h-20">
                <!-- Logo with improved gradient -->
                <a href="/" class="relative group">
                    <span class="text-2xl font-bold bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 text-transparent bg-clip-text transition-all duration-300 group-hover:opacity-80">
                        KB™
                    </span>
                    <span class="absolute -inset-1 bg-gradient-to-r from-blue-500 via-purple-500 to-pink-500 rounded-lg opacity-0 group-hover:opacity-20 transition-all duration-300 blur-xl"></span>
                </a>

                <!-- Navigation Links with better hover effects -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="nav-link group">
                        <span class="text-white/80 group-hover:text-white text-sm transition-colors relative">
                            Home
                            <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-purple-400 group-hover:w-full transition-all duration-300"></span>
                        </span>
                    </a>
                    <a href="#about" class="nav-link group">
                        <span class="text-white/80 group-hover:text-white text-sm transition-colors relative">
                            About
                            <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-purple-400 group-hover:w-full transition-all duration-300"></span>
                        </span>
                    </a>
                    <a href="#skills" class="nav-link group">
                        <span class="text-white/80 group-hover:text-white text-sm transition-colors relative">
                            Skills
                            <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-purple-400 group-hover:w-full transition-all duration-300"></span>
                        </span>
                    </a>
                    <a href="#projects" class="nav-link group">
                        <span class="text-white/80 group-hover:text-white text-sm transition-colors relative">
                            Projects
                            <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-purple-400 group-hover:w-full transition-all duration-300"></span>
                        </span>
                    </a>
                    <a href="#contact" class="nav-link group">
                        <span class="text-white/80 group-hover:text-white text-sm transition-colors relative">
                            Contact
                            <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-gradient-to-r from-blue-400 to-purple-400 group-hover:w-full transition-all duration-300"></span>
                        </span>
                    </a>
                </div>

                <!-- Profile & Logout with enhanced styling -->
                <div class="flex items-center space-x-6">
                    <a href="profile.php" class="flex items-center space-x-2 text-white/80 hover:text-white transition-all duration-300 group">
                        <div class="p-2 rounded-lg bg-white/5 group-hover:bg-white/10 transition-all duration-300">
                            <i class="fas fa-user text-sm"></i>
                        </div>
                        <span class="text-sm font-medium">Profile</span>
                    </a>
                    <a href="auth/logout.php" class="px-4 py-2 rounded-lg bg-red-500/10 hover:bg-red-500 text-red-400 hover:text-white text-sm transition-all duration-300 border border-red-500/20">
                        Logout
                    </a>
                </div>

                <!-- Improved Mobile Menu Button -->
                <button class="md:hidden p-2 rounded-lg bg-white/5 hover:bg-white/10 transition-all duration-300" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars text-white/80 hover:text-white"></i>
                </button>
            </div>

            <!-- Enhanced Mobile Menu -->
            <div id="mobileMenu" class="hidden md:hidden py-4 border-t border-white/10 mt-2">
                <div class="flex flex-col space-y-2">
                    <a href="#home" class="p-3 rounded-lg hover:bg-white/5 text-white/80 hover:text-white transition-all duration-300">Home</a>
                    <a href="#about" class="p-3 rounded-lg hover:bg-white/5 text-white/80 hover:text-white transition-all duration-300">About</a>
                    <a href="#skills" class="p-3 rounded-lg hover:bg-white/5 text-white/80 hover:text-white transition-all duration-300">Skills</a>
                    <a href="#projects" class="p-3 rounded-lg hover:bg-white/5 text-white/80 hover:text-white transition-all duration-300">Projects</a>
                    <a href="#contact" class="p-3 rounded-lg hover:bg-white/5 text-white/80 hover:text-white transition-all duration-300">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="space-y-24 pt-16">
        <section id="home" class="min-h-screen flex items-center justify-center">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-600/20 to-purple-600/20 z-0"></div>
            <div class="container mx-auto px-4 text-center relative z-10">
                <h1 class="text-6xl font-bold mb-6 bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-500">
                    Welcome to My Portfolio
                </h1>
                <p class="text-xl text-gray-300">Explore my skills, projects, and more!</p>
            </div>
        </section>

        <section id="about" class="py-24 relative">
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/50 to-gray-800/50 z-0"></div>
            <div class="container mx-auto max-w-6xl px-4 relative z-10">
                <h2 class="text-4xl font-bold text-center mb-16 text-white">
                    About <span class="highlight-text">Me</span>
                </h2>
                <div class="about-container">
                    <div class="flex flex-col lg:flex-row items-center gap-12">
                        <div class="lg:w-1/3">
                            <div class="about-image-container relative">
                                <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 blur-2xl opacity-20"></div>
                                <div class="relative rounded-full p-1 bg-gradient-to-r from-blue-500 to-purple-500">
                                    <img src="IMG/creator.JPG" alt="Creator" class="w-full h-full object-cover rounded-full hover:scale-105 transition-transform duration-300">
                                </div>
                            </div>
                        </div>
                        
                        <div class="lg:w-2/3 space-y-6">
                            <h3 class="text-3xl font-bold mb-4">
                                Hi, I'm <span class="highlight-text">Bhupesh Gautam</span>
                            </h3>
                            <p class="text-gray-300 text-lg leading-relaxed mb-6">
                                A passionate Full Stack Developer who loves to create innovative and user-friendly web solutions. With expertise in modern technologies and a keen eye for design, I transform ideas into reality.
                            </p>
                            
                            <div class="flex flex-wrap gap-3 mb-8">
                                <span class="inline-block px-4 py-2 rounded-full text-sm bg-blue-500/10 border border-blue-500/20 text-blue-300 hover:bg-blue-500/20 transition-all duration-300 hover:-translate-y-0.5">Web Development</span>
                                <span class="inline-block px-4 py-2 rounded-full text-sm bg-blue-500/10 border border-blue-500/20 text-blue-300 hover:bg-blue-500/20 transition-all duration-300 hover:-translate-y-0.5">UI/UX Design</span>
                                <span class="inline-block px-4 py-2 rounded-full text-sm bg-blue-500/10 border border-blue-500/20 text-blue-300 hover:bg-blue-500/20 transition-all duration-300 hover:-translate-y-0.5">Mobile-First</span>
                                <span class="inline-block px-4 py-2 rounded-full text-sm bg-blue-500/10 border border-blue-500/20 text-blue-300 hover:bg-blue-500/20 transition-all duration-300 hover:-translate-y-0.5">API Integration</span>
                                <span class="inline-block px-4 py-2 rounded-full text-sm bg-blue-500/10 border border-blue-500/20 text-blue-300 hover:bg-blue-500/20 transition-all duration-300 hover:-translate-y-0.5">Database Design</span>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-300">
                                <div class="space-y-2">
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-envelope text-blue-400"></i>
                                        <span>sulavgautam16@gmail.com</span>
                                    </div
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-map-marker-alt text-blue-400"></i>
                                        <span>Kathmandu, Nepal</span>
                                    </div>
                                </div>
                                <div class="space-y-2">
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-graduation-cap text-blue-400"></i>
                                        <span>Bachelor in Computer Engineering</span>
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <i class="fas fa-briefcase text-blue-400"></i>
                                        <span>Available for Freelance</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="flex gap-4 mt-8">
                                <a href="#contact" class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                                    Contact Me
                                </a>
                                <a href="#projects" class="px-6 py-3 bg-gray-800 hover:bg-gray-700 text-white rounded-lg transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
                                    View Projects
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="skills" class="py-24 relative overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/30 to-purple-900/30 backdrop-blur-sm"></div>
            <div class="container mx-auto px-4 relative z-10">
                <h2 class="text-4xl font-bold text-center mb-12 text-white">My Skills</h2>
                <div class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white/5 backdrop-blur-xl border border-white/10 p-6 rounded-xl hover:transform hover:scale-105 transition-all duration-300 hover:shadow-xl">
                        <h3 class="text-xl font-semibold text-white">HTML</h3>
                        <p class="text-blue-300 font-bold">90%</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur-xl border border-white/10 p-6 rounded-xl hover:transform hover:scale-105 transition-all duration-300 hover:shadow-xl">
                        <h3 class="text-xl font-semibold text-white">CSS</h3>
                        <p class="text-blue-300 font-bold">85%</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur-xl border border-white/10 p-6 rounded-xl hover:transform hover:scale-105 transition-all duration-300 hover:shadow-xl">
                        <h3 class="text-xl font-semibold text-white">JavaScript</h3>
                        <p class="text-blue-300 font-bold">80%</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur-xl border border-white/10 p-6 rounded-xl hover:transform hover:scale-105 transition-all duration-300 hover:shadow-xl">
                        <h3 class="text-xl font-semibold text-white">React</h3>
                        <p class="text-blue-300 font-bold">75%</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur-xl border border-white/10 p-6 rounded-xl hover:transform hover:scale-105 transition-all duration-300 hover:shadow-xl">
                        <h3 class="text-xl font-semibold text-white">Python</h3>
                        <p class="text-blue-300 font-bold">88%</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur-xl border border-white/10 p-6 rounded-xl hover:transform hover:scale-105 transition-all duration-300 hover:shadow-xl">
                        <h3 class="text-xl font-semibold text-white">Node.js</h3>
                        <p class="text-blue-300 font-bold">70%</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="projects" class="py-24 relative">
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/50 to-gray-800/50 z-0"></div>
            <div class="container mx-auto px-4 relative z-10">
                <h2 class="text-4xl font-bold text-center mb-16">
                    <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 text-transparent bg-clip-text">
                        My Projects
                    </span>
                </h2>
                <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Portfolio Website -->
                    <div class="group bg-white/5 backdrop-blur-xl border border-white/10 rounded-xl p-6 hover:bg-white/10 transition-all duration-300 hover:-translate-y-2">
                        <div class="relative w-full aspect-video mb-4 overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-500 opacity-75"></div>
                            <i class="fas fa-globe text-4xl text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                        </div>
                        <h3 class="text-xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 text-transparent bg-clip-text mb-2">Portfolio Website</h3>
                        <p class="text-gray-300 mb-4">A personal portfolio showcasing my skills and projects built with modern web technologies.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-blue-500/10 text-blue-400 px-2 py-1 rounded-full">HTML</span>
                            <span class="text-xs bg-blue-500/10 text-blue-400 px-2 py-1 rounded-full">CSS</span>
                            <span class="text-xs bg-blue-500/10 text-blue-400 px-2 py-1 rounded-full">JavaScript</span>
                        </div>
                        <a href="#" class="inline-flex items-center text-sm text-blue-400 hover:text-blue-300 transition-colors">
                            <span>View Project</span>
                            <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>

                    <!-- Task Manager -->
                    <div class="group bg-white/5 backdrop-blur-xl border border-white/10 rounded-xl p-6 hover:bg-white/10 transition-all duration-300 hover:-translate-y-2">
                        <div class="relative w-full aspect-video mb-4 overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-pink-500 opacity-75"></div>
                            <i class="fas fa-tasks text-4xl text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                        </div>
                        <h3 class="text-xl font-bold bg-gradient-to-r from-purple-400 to-pink-400 text-transparent bg-clip-text mb-2">Task Manager</h3>
                        <p class="text-gray-300 mb-4">A full-stack task management application with real-time updates and collaboration features.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-purple-500/10 text-purple-400 px-2 py-1 rounded-full">React</span>
                            <span class="text-xs bg-purple-500/10 text-purple-400 px-2 py-1 rounded-full">Node.js</span>
                            <span class="text-xs bg-purple-500/10 text-purple-400 px-2 py-1 rounded-full">MongoDB</span>
                        </div>
                        <a href="#" class="inline-flex items-center text-sm text-purple-400 hover:text-purple-300 transition-colors">
                            <span>View Project</span>
                            <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>

                    <!-- E-commerce Platform -->
                    <div class="group bg-white/5 backdrop-blur-xl border border-white/10 rounded-xl p-6 hover:bg-white/10 transition-all duration-300 hover:-translate-y-2">
                        <div class="relative w-full aspect-video mb-4 overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-green-500 to-teal-500 opacity-75"></div>
                            <i class="fas fa-shopping-cart text-4xl text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                        </div>
                        <h3 class="text-xl font-bold bg-gradient-to-r from-green-400 to-teal-400 text-transparent bg-clip-text mb-2">E-commerce Platform</h3>
                        <p class="text-gray-300 mb-4">A modern e-commerce solution with secure payments and inventory management.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-green-500/10 text-green-400 px-2 py-1 rounded-full">Next.js</span>
                            <span class="text-xs bg-green-500/10 text-green-400 px-2 py-1 rounded-full">Stripe</span>
                            <span class="text-xs bg-green-500/10 text-green-400 px-2 py-1 rounded-full">PostgreSQL</span>
                        </div>
                        <a href="#" class="inline-flex items-center text-sm text-green-400 hover:text-green-300 transition-colors">
                            <span>View Project</span>
                            <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>

                    <!-- Weather App -->
                    <div class="group bg-white/5 backdrop-blur-xl border border-white/10 rounded-xl p-6 hover:bg-white/10 transition-all duration-300 hover:-translate-y-2">
                        <div class="relative w-full aspect-video mb-4 overflow-hidden rounded-lg">
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500 to-blue-500 opacity-75"></div>
                            <i class="fas fa-cloud-sun text-4xl text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                        </div>
                        <h3 class="text-xl font-bold bg-gradient-to-r from-cyan-400 to-blue-400 text-transparent bg-clip-text mb-2">Weather App</h3>
                        <p class="text-gray-300 mb-4">Real-time weather forecasting app with interactive maps and location tracking.</p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="text-xs bg-cyan-500/10 text-cyan-400 px-2 py-1 rounded-full">Vue.js</span>
                            <span class="text-xs bg-cyan-500/10 text-cyan-400 px-2 py-1 rounded-full">Weather API</span>
                            <span class="text-xs bg-cyan-500/10 text-cyan-400 px-2 py-1 rounded-full">Leaflet</span>
                        </div>
                        <a href="#" class="inline-flex items-center text-sm text-cyan-400 hover:text-cyan-300 transition-colors">
                            <span>View Project</span>
                            <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="py-24 relative">
            <div class="absolute inset-0 bg-gradient-to-r from-purple-900/30 to-blue-900/30 backdrop-blur-sm"></div>
            <div class="container mx-auto px-4 relative z-10">
                <h2 class="text-4xl font-bold text-center mb-12 text-white">Services</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    <div class="bg-white/5 backdrop-blur-xl border border-white/10 p-6 rounded-xl text-center transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <i class="fas fa-code text-4xl text-blue-400 mb-4"></i>
                        <h3 class="text-xl font-semibold text-white mb-2">Web Development</h3>
                        <p class="text-gray-300">Custom websites and web applications built with modern technologies.</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur-xl border border-white/10 p-6 rounded-xl text-center transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <i class="fas fa-mobile-alt text-4xl text-purple-400 mb-4"></i>
                        <h3 class="text-xl font-semibold text-white mb-2">Responsive Design</h3>
                        <p class="text-gray-300">Mobile-first designs that work seamlessly across all devices.</p>
                    </div>
                    <div class="bg-white/5 backdrop-blur-xl border border-white/10 p-6 rounded-xl text-center transform transition-all duration-300 hover:-translate-y-2 hover:shadow-xl">
                        <i class="fas fa-server text-4xl text-green-400 mb-4"></i>
                        <h3 class="text-xl font-semibold text-white mb-2">Backend Development</h3>
                        <p class="text-gray-300">Robust server-side solutions and API development.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="experience" class="py-24 relative">
            <div class="absolute inset-0 bg-gradient-to-b from-gray-900/50 to-gray-800/50"></div>
            <div class="container mx-auto px-4 relative z-10">
                <h2 class="text-4xl font-bold text-center mb-16">
                    <span class="bg-gradient-to-r from-blue-400 via-purple-400 to-pink-400 text-transparent bg-clip-text">
                        Experience
                    </span>
                </h2>
                <div class="max-w-3xl mx-auto">
                    <!-- Timeline items with improved styling -->
                    <div class="space-y-12">
                        <div class="relative pl-10 md:pl-12">
                            <!-- Timeline line -->
                            <div class="absolute left-0 top-0 h-full w-0.5 bg-gradient-to-b from-blue-500 via-purple-500 to-pink-500"></div>
                            
                            <!-- Timeline dot -->
                            <div class="absolute left-[-8px] top-2 w-4 h-4 rounded-full bg-gray-900 border-2 border-blue-400 shadow-lg shadow-blue-500/20"></div>
                            
                            <!-- Content -->
                            <div class="bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/10 transform transition-all duration-300 hover:translate-x-1 hover:bg-white/10">
                                <h3 class="text-xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 text-transparent bg-clip-text">
                                    Full Stack Developer
                                </h3>
                                <p class="text-blue-400 text-sm mt-1">2023 - Present</p>
                                <p class="text-gray-300 mt-3">Working on web applications using modern technologies like React, Node.js, and PHP.</p>
                            </div>
                        </div>
                        
                        <div class="relative pl-10 md:pl-12">
                            <!-- Timeline line -->
                            <div class="absolute left-0 top-0 h-full w-0.5 bg-gradient-to-b from-blue-500 via-purple-500 to-pink-500"></div>
                            
                            <!-- Timeline dot -->
                            <div class="absolute left-[-8px] top-2 w-4 h-4 rounded-full bg-gray-900 border-2 border-blue-400 shadow-lg shadow-blue-500/20"></div>
                            
                            <!-- Content -->
                            <div class="bg-white/5 backdrop-blur-sm rounded-xl p-6 border border-white/10 transform transition-all duration-300 hover:translate-x-1 hover:bg-white/10">
                                <h3 class="text-xl font-bold bg-gradient-to-r from-blue-400 to-purple-400 text-transparent bg-clip-text">
                                    Frontend Developer Intern
                                </h3>
                                <p class="text-blue-400 text-sm mt-1">2022 - 2023</p>
                                <p class="text-gray-300 mt-3">Developed responsive user interfaces and improved website performance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonials" class="py-24 relative">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/30 to-purple-900/30 backdrop-blur-sm"></div>
            <div class="container mx-auto px-4 relative z-10">
                <h2 class="text-4xl font-bold text-center mb-12 text-white">Client Testimonials</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-xl p-6 transition-all duration-300 hover:bg-white/10">
                        <p class="text-gray-300 mb-4">"Outstanding work on our website redesign. The attention to detail and modern design elements really made our brand stand out."</p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-blue-500 rounded-full flex items-center justify-center text-white font-bold mr-4">JD</div>
                            <div>
                                <h4 class="text-white font-semibold">John Doe</h4>
                                <p class="text-blue-400">CEO, Tech Corp</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white/5 backdrop-blur-xl border border-white/10 rounded-xl p-6 transition-all duration-300 hover:bg-white/10">
                        <p class="text-gray-300 mb-4">"Exceptional development skills and great communication throughout the project. Would definitely recommend!"</p>
                        <div class="flex items-center">
                            <div class="w-12 h-12 bg-purple-500 rounded-full flex items-center justify-center text-white font-bold mr-4">JS</div>
                            <div>
                                <h4 class="text-white font-semibold">Jane Smith</h4>
                                <p class="text-blue-400">Marketing Director</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="py-24 relative">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/50 to-gray-800/50 z-0"></div>
            <div class="container mx-auto px-4 relative z-10">
                <h2 class="text-4xl font-bold text-center mb-4 text-white">Get in Touch</h2>
                <p class="text-gray-400 text-center mb-12 max-w-xl mx-auto">Have a project in mind? Let's create something amazing together.</p>
                
                <div class="contact-minimal max-w-3xl mx-auto">
                    <div class="grid md:grid-cols-2 gap-8">
                        <!-- Contact Info -->
                        <div class="bg-white/5 backdrop-blur-xl rounded-2xl p-8 space-y-6">
                            <a href="mailto:sulavgautam16@gmail.com" class="flex items-center gap-4 p-4 rounded-lg bg-white/5 hover:bg-white/10 transition-all duration-300">
                                <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-blue-500/10 text-blue-400">
                                    <i class="fas fa-envelope text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-sm text-gray-400">Email</h4>
                                    <p class="text-white">sulavgautam16@gmail.com</p>
                                </div>
                            </a>

                            <a href="#" class="flex items-center gap-4 p-4 rounded-lg bg-white/5 hover:bg-white/10 transition-all duration-300">
                                <div class="w-12 h-12 flex items-center justify-center rounded-lg bg-blue-500/10 text-blue-400">
                                    <i class="fas fa-map-marker-alt text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="text-sm text-gray-400">Location</h4>
                                    <p class="text-white">Kathmandu, Nepal</p>
                                </div>
                            </a>
                        </div>

                        <div class="social-links-minimal">
                            <h4 class="text-lg font-medium text-white mb-6">Connect With Me</h4>
                            <div class="grid grid-cols-2 gap-4">
                                <a href="https://www.instagram.com/kashyap.bhari/" class="flex items-center justify-center p-4 rounded-lg bg-white/5 hover:bg-white/10 transition-all duration-300 text-white hover:-translate-y-1" aria-label="Instagram">
                                    <i class="fab fa-instagram text-xl"></i>
                                </a>
                                <a href="https://www.facebook.com/kashyap.bhari.3/" class="flex items-center justify-center p-4 rounded-lg bg-white/5 hover:bg-white/10 transition-all duration-300 text-white hover:-translate-y-1" aria-label="Facebook">
                                    <i class="fab fa-facebook"></i>
                                </a>
                                <a href="#" class="flex items-center justify-center p-4 rounded-lg bg-white/5 hover:bg-white/10 transition-all duration-300 text-white hover:-translate-y-1" aria-label="Twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="flex items-center justify-center p-4 rounded-lg bg-white/5 hover:bg-white/10 transition-all duration-300 text-white hover:-translate-y-1" aria-label="LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-gray-800/50 backdrop-blur-sm text-white text-center py-4">
        <p>&copy; 2025 Bhupesh G. All rights reserved.</p>
    </footer>
</body>
</html>
