import React from 'react';

export default function AboutHeroSection() {
  return (
    <section className="bg-[#F7F7F5] pt-12 md:pt-16 pb-24 md:pb-32 px-6 text-center">
      {/* Main Headline without Eyebrow Badge */}
      <h1 className="font-serif font-normal text-5xl md:text-6xl lg:text-7xl leading-[1.15] text-[#1A1A2E] max-w-4xl mx-auto">
        Empowering innovation, building the{' '}
        <span className="italic bg-[#F5D716] px-2 box-decoration-clone">
          next generation of entrepreneurs
        </span>
      </h1>

      {/* Subtext Paragraph */}
      <p className="font-sans text-gray-600 text-lg leading-relaxed max-w-2xl mx-auto mt-8">
        RCOEM TBI is a technology business incubator built to empower innovators, nurture ambitious ideas, and transform early-stage ventures into impactful entrepreneurial journeys.
      </p>
    </section>
  );
}
