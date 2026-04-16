<?php include("includes/header.php"); ?>

<section class="py-20 px-6 bg-gradient-to-b from-white to-sky-50/50 overflow-hidden">
    <div class="container mx-auto max-w-6xl">
        
        <div class="text-center mb-16 animate__animated animate__fadeIn">
            <span class="inline-block px-4 py-1.5 mb-4 text-xs font-bold tracking-[0.2em] text-emerald-600 uppercase bg-emerald-50 rounded-full">
                Patient Testimonials
            </span>
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-4">
                Trusted by <span class="text-sky-600">15,000+</span> Patients
            </h1>
            <p class="text-slate-500 max-w-lg mx-auto leading-relaxed">
                Real stories of health, beauty, and care from women who chose excellence.
            </p>
        </div>

        <div class="columns-1 md:columns-2 lg:columns-3 gap-8 space-y-8">

            <?php
            $reviews = [
                "Excellent doctor, very caring and professional.",
                "Best gynecologist I have visited. Highly recommended!",
                "Very friendly and supportive during treatment.",
                "Clinic is clean and well maintained.",
                "Great experience, doctor explains everything clearly.",
                "Highly skilled and knowledgeable doctor.",
                "Very satisfied with the treatment and results.",
                "Staff is polite and helpful.",
                "Best cosmetology treatments available here.",
                "Very comfortable and positive environment.",
                "Amazing service and care.",
                "Doctor listens patiently and gives best advice.",
                "Highly recommended for women’s health.",
                "Very professional and experienced doctor.",
                "Happy with my treatment results."
            ];

            shuffle($reviews);

            // Using a limit to keep the UI clean
            for ($i = 0; $i < 12; $i++) {
                // Staggered animation classes
                $delayClass = ($i % 3 == 0) ? 'animate__delay-1s' : (($i % 3 == 1) ? 'animate__delay-2s' : '');
                
                echo '
                <div class="break-inside-avoid bg-white p-8 rounded-[2rem] border border-slate-100 shadow-xl shadow-sky-100/30 hover:shadow-sky-200/60 hover:-translate-y-2 transition-all duration-500 group animate__animated animate__fadeInUp '.$delayClass.'">
                    
                    <div class="mb-6 opacity-20 group-hover:opacity-100 group-hover:text-emerald-500 transition-all">
                        <svg width="30" height="30" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                        </svg>
                    </div>

                    <p class="text-slate-700 italic leading-relaxed mb-6 font-medium">
                        "'.$reviews[$i].'"
                    </p>

                    <div class="flex items-center justify-between mt-4 pt-6 border-t border-slate-50">
                        <div class="flex items-center gap-2">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-tr from-sky-400 to-emerald-400 flex items-center justify-center text-white text-[10px] font-bold">
                                VP
                            </div>
                            <div>
                                <p class="text-xs font-bold text-slate-800">Verified Patient</p>
                                <div class="flex gap-0.5">
                                    <span class="text-emerald-400 text-[10px]">★</span>
                                    <span class="text-emerald-400 text-[10px]">★</span>
                                    <span class="text-emerald-400 text-[10px]">★</span>
                                    <span class="text-emerald-400 text-[10px]">★</span>
                                    <span class="text-emerald-400 text-[10px]">★</span>
                                </div>
                            </div>
                        </div>
                        <span class="text-[10px] font-bold text-sky-500 bg-sky-50 px-2 py-1 rounded-md uppercase tracking-tighter">Trusted</span>
                    </div>
                </div>
                ';
            }
            ?>

        </div>
    </div>
</section>

<section class="py-16 bg-white">
    <div class="container mx-auto px-6 text-center">
        <div class="bg-gradient-to-r from-sky-600 to-emerald-500 p-12 rounded-[3rem] text-white shadow-2xl shadow-sky-200 animate__animated animate__pulse animate__infinite animate__slow">
            <h2 class="text-3xl font-bold mb-4">Ready for your transformation?</h2>
            <p class="mb-8 opacity-90">Join our community of happy and healthy patients today.</p>
            <a href="contact.php" class="bg-white text-sky-700 px-10 py-4 rounded-full font-black uppercase tracking-widest text-sm hover:scale-110 transition-transform inline-block">
                Book My Appointment
            </a>
        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>