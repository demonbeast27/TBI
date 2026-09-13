import React, { useState, useEffect } from 'react';

export default function Navbar() {
  const [isScrolled, setIsScrolled] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setIsScrolled(window.scrollY > 40);
    };
    window.addEventListener('scroll', handleScroll, { passive: true });
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  return (
    <header className="fixed top-0 left-0 right-0 z-50 px-4 md:px-8 pt-4 pointer-events-none">
      <nav
        className={`max-w-7xl mx-auto rounded-2xl px-6 py-3 flex items-center justify-between pointer-events-auto transition-all duration-300 border ${
          isScrolled
            ? 'bg-white/95 backdrop-blur-md shadow-lg border-gray-200/80 py-2.5'
            : 'bg-white/90 backdrop-blur-md shadow-md border-gray-100'
        }`}
      >
        {/* Brand Logo */}
        <a href="/" className="flex items-center gap-3 shrink-0" aria-label="RBU TBI Home">
          <img
            src="/assets/images/Logos/RCOEM TBI logo.jpg"
            alt="RCOEM TBI Logo"
            className="h-10 md:h-12 w-auto object-contain"
          />
        </a>

        {/* Navigation Links & More Action */}
        <div className="flex items-center gap-6">
          <div className="hidden lg:flex items-center gap-7">
            <a
              href="/"
              className="text-sm font-medium text-[#1A1A2E] hover:text-black transition-colors"
            >
              Home
            </a>
            <a
              href="/about"
              className="text-sm font-medium text-[#1A1A2E]/80 hover:text-black transition-colors"
            >
              About
            </a>
            <a
              href="/services"
              className="text-sm font-medium text-[#1A1A2E]/80 hover:text-black transition-colors"
            >
              Services
            </a>
            <a
              href="/ecell"
              className="text-sm font-medium text-[#1A1A2E]/80 hover:text-black transition-colors"
            >
              E-Cell
            </a>
            <a
              href="/contact"
              className="text-sm font-medium text-[#1A1A2E]/80 hover:text-black transition-colors"
            >
              Contact
            </a>
          </div>

          {/* Divider */}
          <span className="hidden lg:inline-block w-px h-5 bg-gray-200" aria-hidden="true" />

          {/* Dark 'More' Pill Button */}
          <button
            type="button"
            className="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-[#1A1A2E] text-white text-xs font-semibold hover:bg-black transition-all shadow-sm active:scale-95"
            aria-label="Open menu"
          >
            <span>More</span>
            <span className="text-sm font-bold leading-none">+</span>
          </button>
        </div>
      </nav>
    </header>
  );
}
