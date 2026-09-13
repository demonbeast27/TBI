import React from 'react';

export default function MissionObjectiveCards() {
  return (
    <div className="flex flex-col gap-6">
      {/* Mission Card */}
      <div className="border-t-4 border-[#0057B0] bg-white rounded-2xl shadow-md p-6 md:p-8 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
        <span className="text-xs md:text-sm font-bold uppercase tracking-widest text-[#0057B0] block mb-3">
          Mission
        </span>
        <p className="font-sans text-base md:text-lg leading-relaxed text-gray-700">
          Our mission is to empower startups with comprehensive resources and expert guidance to accelerate their journey from idea to impactful enterprise.
        </p>
      </div>

      {/* Objective Card */}
      <div className="border-t-4 border-[#0057B0] bg-white rounded-2xl shadow-md p-6 md:p-8 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
        <span className="text-xs md:text-sm font-bold uppercase tracking-widest text-[#0057B0] block mb-3">
          Objective
        </span>
        <p className="font-sans text-base md:text-lg leading-relaxed text-gray-700">
          Our objective is to foster a dynamic ecosystem that empowers tech start-ups through tailored &ldquo;Start to Scale&rdquo; support, aimed at catalysing the conversion of innovative research into successful entrepreneurial ventures.
        </p>
      </div>
    </div>
  );
}
