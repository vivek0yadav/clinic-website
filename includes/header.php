<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Sucheta Clinic | Expert Care</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <style>
        /* Custom underline animation for Nav */
        .nav-link {
            position: relative;
            padding-bottom: 4px;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: #10b981; /* emerald-500 (Sea Green) */
            transition: width 0.3s ease;
        }
        .nav-link:hover::after {
            width: 100%;
        }
    </style>
</head>
<body class="bg-slate-50 font-sans antialiased">

    <header class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-sky-100 shadow-sm animate__animated animate__fadeInDown">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center">
            
            <div class="flex items-center gap-4">
                <img src="images/logo.png" alt="Dr. Sucheta Clinic Logo" class="h-14 w-auto object-contain animate__animated animate__zoomIn">
                
                <div class="border-l-2 border-sky-100 pl-4">
                    <h1 class="text-xl md:text-2xl font-bold text-sky-700 leading-tight">
                        Dr. Sucheta's <span class="text-emerald-600 italic font-medium text-lg block md:inline">Gynaecology & Cosmetology</span>
                    </h1>
                    <p class="text-[10px] uppercase tracking-[0.2em] text-slate-400 font-semibold">Compassionate Care for Women</p>
                </div>
            </div>

            <nav class="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600">
                <a href="index.php" class="nav-link hover:text-sky-600 transition-colors">Home</a>
                <a href="about.php" class="nav-link hover:text-sky-600 transition-colors">About</a>
                <a href="services.php" class="nav-link hover:text-sky-600 transition-colors">Services</a>
                <a href="gallery.php" class="nav-link hover:text-sky-600 transition-colors">Gallery</a>
                <a href="review.php" class="nav-link hover:text-sky-600 transition-colors">Reviews</a>
                <a href="contact.php" class="ml-4 px-6 py-2.5 bg-gradient-to-r from-sky-500 to-emerald-500 text-white rounded-full hover:shadow-lg hover:scale-105 transition-all duration-300 shadow-md">
                    Book Appointment
                </a>
            </nav>

            <div class="md:hidden text-sky-600">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
            </div>
        </div>
    </header>

    <main class="relative overflow-hidden bg-white">
        <div class="absolute top-0 right-0 -translate-y-1/2 translate-x-1/4 w-96 h-96 bg-sky-50 rounded-full blur-3xl opacity-50"></div>
        
        
    </main>

</body>
</html>