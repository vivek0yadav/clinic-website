<?php include("includes/header.php"); ?>

<section class="py-20 px-6 bg-gradient-to-b from-white to-sky-50/30 overflow-hidden">
    <div class="container mx-auto max-w-7xl">
        
        <div class="text-center mb-16 animate__animated animate__fadeIn">
            <span class="inline-block px-4 py-1.5 mb-4 text-xs font-bold tracking-[0.2em] text-emerald-600 uppercase bg-emerald-50 rounded-full">
                Our Clinic & Results
            </span>
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-4">
                Visual <span class="text-sky-600">Gallery</span>
            </h1>
            <p class="text-slate-500 max-w-lg mx-auto leading-relaxed">
                Explore our state-of-the-art facility and the journey of excellence in care.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">

            <?php
            for ($i = 1; $i <= 12; $i++) {
                // Alternating entrance animations for a dynamic feel
                $animation = ($i % 2 == 0) ? 'animate__fadeInUp' : 'animate__fadeInDown';
                
                echo '
                <div class="relative group overflow-hidden rounded-[2.5rem] bg-white border border-slate-100 shadow-xl shadow-sky-100/20 animate__animated '.$animation.' transition-all duration-700">
                    
                    <div class="relative overflow-hidden h-72">
                        <img src="images/image'.$i.'.png" 
                             alt="Dr. Sucheta Clinic Gallery '.$i.'" 
                             class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-sky-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex flex-col justify-end p-8">
                            <div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                <span class="text-emerald-400 text-[10px] font-black uppercase tracking-widest">Clinic Excellence</span>
                                <p class="text-white text-sm font-bold mt-1">Specialized Care View '.$i.'</p>
                            </div>
                        </div>
                    </div>

                    <div class="absolute inset-0 border-2 border-emerald-400/0 group-hover:border-emerald-400/30 rounded-[2.5rem] transition-all duration-500 pointer-events-none"></div>
                </div>
                ';
            }
            ?>

        </div>
    </div>
</section>

<section class="pb-24 px-6 bg-sky-50/20">
    <div class="container mx-auto max-w-4xl text-center">
        <div class="p-1 shadow-2xl rounded-[3rem] bg-gradient-to-r from-sky-400 via-emerald-400 to-sky-400 animate-gradient-x">
            <div class="bg-white rounded-[2.9rem] py-12 px-8">
                <h3 class="text-2xl font-black text-slate-800 mb-4">Experience the Care Firsthand</h3>
                <p class="text-slate-500 mb-8 max-w-md mx-auto">Schedule a visit to our Kalwa clinic for a personal consultation with Dr. Sucheta.</p>
                <a href="contact.php" class="inline-block bg-sky-600 text-white px-10 py-4 rounded-2xl font-bold uppercase tracking-widest text-xs hover:bg-emerald-600 hover:-translate-y-1 transition-all shadow-lg shadow-sky-100">
                    Book Visit
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Custom Gradient Animation for the CTA border */
    @keyframes gradient-x {
        0%, 100% { background-position: 0% 50%; }
        50% { background-position: 100% 50%; }
    }
    .animate-gradient-x {
        background-size: 200% 200%;
        animation: gradient-x 5s ease infinite;
    }
</style>

<?php include("includes/footer.php"); ?>