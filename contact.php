<?php include("includes/header.php"); ?>

<section class="py-20 px-6 bg-gradient-to-b from-white to-emerald-50/20">
    <div class="container mx-auto max-w-6xl">
        
        <div class="text-center mb-16 animate__animated animate__fadeIn">
            <h1 class="text-4xl md:text-5xl font-black text-slate-900 mb-4">
                Get In <span class="text-sky-600">Touch</span>
            </h1>
            <p class="text-slate-500 max-w-lg mx-auto">Have questions? We are here to help you with your health and aesthetic journey.</p>
        </div>

        <div class="grid lg:grid-cols-5 gap-12 items-start">
            
            <div class="lg:col-span-2 space-y-8 animate__animated animate__fadeInLeft">
                
                <div class="bg-white p-8 rounded-[2rem] border border-sky-100 shadow-xl shadow-sky-100/50">
                    <div class="w-12 h-12 bg-sky-50 rounded-xl flex items-center justify-center text-sky-600 mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-800 mb-4">Visit Our Clinic</h3>
                    <p class="text-slate-600 leading-relaxed">
                        <strong>Shop No. 7, Ground Floor</strong>,<br>
                        Akshay Apartment, Behind PC Diagnostic Centre,<br>
                        Manisha Nagar, Opposite Pramila Hospital,<br>
                        <span class="text-sky-700 font-semibold text-lg">Kalwa West - 400605</span>
                    </p>
                </div>

                <div class="grid grid-cols-1 gap-4">
                    <div class="flex items-center gap-4 p-4 bg-emerald-50/50 rounded-2xl border border-emerald-100">
                        <span class="text-2xl">📞</span>
                        <div>
                            <p class="text-xs font-bold text-emerald-700 uppercase">Call Now</p>
                            <p class="text-slate-700 font-bold text-lg">9833618725</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-3 bg-white p-8 md:p-12 rounded-[2.5rem] border border-slate-100 shadow-2xl shadow-slate-200/50 animate__animated animate__fadeInRight">
                <form action="backend/contact_handler.php" method="POST" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700 ml-1">Your Name</label>
                            <input type="text" name="name" placeholder="Enter your name" required
                                class="w-full px-5 py-4 bg-slate-50 border border-slate-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-500 focus:bg-white transition-all shadow-sm">
                        </div>
                        <div class="space-y-2">
                            <label class="text-sm font-bold text-slate-700 ml-1">Email Address</label>
                            <input type="email" name="email" placeholder="sucheta@example.com" required
                                class="w-full px-5 py-4 bg-slate-50 border border-slate-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-emerald-500 focus:bg-white transition-all shadow-sm">
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-bold text-slate-700 ml-1">Message</label>
                        <textarea name="message" rows="4" placeholder="How can we help you?"
                            class="w-full px-5 py-4 bg-slate-50 border border-slate-100 rounded-xl focus:outline-none focus:ring-2 focus:ring-sky-500 focus:bg-white transition-all shadow-sm resize-none"></textarea>
                    </div>

                    <button type="submit" 
                        class="w-full py-4 bg-gradient-to-r from-sky-600 to-emerald-500 text-white font-black rounded-xl shadow-lg shadow-sky-200 hover:shadow-sky-300 hover:-translate-y-1 transition-all duration-300 uppercase tracking-widest text-sm">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<?php include("includes/footer.php"); ?>