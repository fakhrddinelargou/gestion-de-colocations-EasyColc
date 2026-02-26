 <header
                class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-8 sticky top-0 z-40">
                <div
                    class="text-sm font-bold tracking-widest text-slate-400 uppercase">
                Youcode
                </div>
                <div class="flex items-center gap-3">
                    <div class="text-right hidden sm:block">
                        <p
                            class="text-sm font-bold text-slate-800">{{ Auth()->user()->name }}</p>
                        <div class="flex items-center justify-end gap-1.5">
                            <span
                                class="size-2 bg-emerald-500 rounded-full"></span>
                            <span
                                class="text-[10px] font-bold text-emerald-600 uppercase">En
                                Ligne</span>
                        </div>
                    </div>
                    <div
                        class="size-10 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold overflow-hidden border-2 border-slate-100">
                        <img alt="Profile" class="w-full h-full object-cover"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuBEcijoI9cJLlOGj4fmh8-84g-kuHamLK3KO-ftIhNTsTVpdN87F89mNb7OsUHR5-j3NuDtWVSPfA38oJxi0P8jd0Z-qgOR892bmFyBpMn-VXEyt9uWEd6pmDMu3tQLWWmxNc8SPy5J1UHXx_9Bm0F1mZf8dweuNARYD3NzDBbn4GeEduW-EJLrO7IjuOIJuiL8NsCLrB9VY8pCMn3zILwkjJPfscFEnSucRqiFrryreiDWOtdbr_I3JQ3pf3I0PNXBhTRdMLdfaBw" />
                    </div>
                </div>
            </header>