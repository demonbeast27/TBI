import React from 'react';
import { Server, SlidersHorizontal, Layers, Box } from 'lucide-react';

export default function CTASection() {
  return (
    <section className="py-20 bg-[#F7F7F5] relative z-10 overflow-hidden">
      <div className="max-w-6xl mx-auto px-6 sm:px-10 lg:px-12">
        {/* Main CTA Card */}
        <div className="relative rounded-3xl p-12 sm:p-16 lg:p-20 text-center overflow-hidden bg-gradient-to-br from-[#1E40AF] to-[#2563EB] shadow-2xl shadow-blue-500/30">
          {/* Subtle Dotted Grid Overlay */}
          <div
            className="absolute inset-0 pointer-events-none opacity-90"
            style={{
              backgroundImage: 'radial-gradient(rgba(255, 255, 255, 0.35) 1.25px, transparent 1.25px)',
              backgroundSize: '16px 16px'
            }}
            aria-hidden="true"
          />

          {/* Soft Bottom Blue Glow */}
          <div
            className="absolute -bottom-12 left-1/2 -translate-x-1/2 w-[680px] max-w-[92%] h-48 rounded-t-full pointer-events-none filter blur-xl"
            style={{
              background: 'radial-gradient(ellipse 65% 100% at 50% 100%, rgba(191, 219, 254, 0.75) 0%, rgba(96, 165, 250, 0.4) 40%, rgba(30, 64, 175, 0) 80%)'
            }}
            aria-hidden="true"
          />

          {/* Four Diamond Floating Badges */}
          {/* Top-Left */}
          <div
            className="absolute top-[14%] left-[5%] w-12 h-12 rounded-xl rotate-45 border border-dashed border-white/40 bg-white/10 backdrop-blur-sm hidden sm:flex items-center justify-center shadow-lg shadow-black/5 pointer-events-none"
            aria-hidden="true"
          >
            <div className="-rotate-45 text-white flex items-center justify-center">
              <Server className="w-5 h-5" />
            </div>
          </div>

          {/* Bottom-Left */}
          <div
            className="absolute top-[55%] left-[3%] w-12 h-12 rounded-xl rotate-45 border border-dashed border-white/40 bg-white/10 backdrop-blur-sm hidden sm:flex items-center justify-center shadow-lg shadow-black/5 pointer-events-none"
            aria-hidden="true"
          >
            <div className="-rotate-45 text-white flex items-center justify-center">
              <SlidersHorizontal className="w-5 h-5" />
            </div>
          </div>

          {/* Top-Right */}
          <div
            className="absolute top-[14%] right-[5%] w-12 h-12 rounded-xl rotate-45 border border-dashed border-white/40 bg-white/10 backdrop-blur-sm hidden sm:flex items-center justify-center shadow-lg shadow-black/5 pointer-events-none"
            aria-hidden="true"
          >
            <div className="-rotate-45 text-white flex items-center justify-center">
              <Layers className="w-5 h-5" />
            </div>
          </div>

          {/* Bottom-Right */}
          <div
            className="absolute top-[55%] right-[3%] w-12 h-12 rounded-xl rotate-45 border border-dashed border-white/40 bg-white/10 backdrop-blur-sm hidden sm:flex items-center justify-center shadow-lg shadow-black/5 pointer-events-none"
            aria-hidden="true"
          >
            <div className="-rotate-45 text-white flex items-center justify-center">
              <Box className="w-5 h-5" />
            </div>
          </div>

          {/* Content Block */}
          <div className="relative z-10 max-w-2xl mx-auto">
            {/* Heading: Serif font, bold, dark navy #1A1A2E */}
            <h2 className="font-serif text-3xl sm:text-4xl lg:text-5xl font-extrabold text-[#1A1A2E] mb-4 sm:mb-5 tracking-tight leading-tight">
              Ready to Launch Your Startup?
            </h2>

            {/* Subtext: Light / white text */}
            <p className="font-sans text-base sm:text-lg text-white/90 leading-relaxed mb-8 sm:mb-10 max-w-lg mx-auto">
              Join RCOEM TBI and get access to co-working spaces, expert mentors, funding connections, and a thriving startup community.
            </p>

            {/* Buttons */}
            <div className="flex flex-wrap gap-4 justify-center items-center">
              {/* Primary Button */}
              <a
                href="https://forms.gle/hzaZ7GbYGFqg2V3fA"
                target="_blank"
                rel="noopener noreferrer"
                className="px-8 py-3.5 bg-white text-[#1A1A2E] font-bold text-sm sm:text-base rounded-full shadow-lg shadow-black/10 hover:shadow-xl hover:bg-white/95 transition-all duration-200"
              >
                Apply for Incubation Now
              </a>

              {/* Secondary Button */}
              <a
                href="/services"
                className="px-7 py-3.5 bg-white/20 text-white font-semibold text-sm sm:text-base rounded-full border border-white/30 hover:bg-white/25 transition-all duration-200 backdrop-blur-xs"
              >
                Explore Services
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
