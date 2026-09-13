import React from 'react';
import { InfiniteSlider } from './components/core/infinite-slider';

const CompanyCard = ({ name }) => (
  <div className="aspect-square w-[220px] flex items-center justify-center bg-white border border-gray-300 rounded-lg shadow-sm shrink-0 hover:shadow-md transition-all duration-300">
    <span className="font-serif text-xl text-[#1A1A2E] text-center px-4 leading-snug">
      {name}
    </span>
  </div>
);

export function CompanyLogosSlider() {
  const columnOne = ["Michel", "Ilark", "Same Ad"];
  const columnTwo = ["Michel Woofers", "R1Fer", "and these type of options"];

  return (
    <div className="relative h-[500px] overflow-hidden">
      {/* Slider Content: Two vertical columns side by side */}
      <div className="flex h-[500px] gap-6 overflow-hidden">
        <InfiniteSlider direction="vertical" duration={50} pauseOnHover={true} className="gap-6">
          {columnOne.map((name) => (
            <CompanyCard key={name} name={name} />
          ))}
        </InfiniteSlider>
        <InfiniteSlider direction="vertical" reverse duration={50} pauseOnHover={true} className="gap-6">
          {columnTwo.map((name) => (
            <CompanyCard key={name} name={name} />
          ))}
        </InfiniteSlider>
      </div>

      {/* Top & Bottom Fade-out Masks */}
      <div className="pointer-events-none absolute inset-x-0 top-0 h-16 bg-gradient-to-b from-[#F7F7F5] to-transparent z-10" />
      <div className="pointer-events-none absolute inset-x-0 bottom-0 h-16 bg-gradient-to-t from-[#F7F7F5] to-transparent z-10" />
    </div>
  );
}

export default CompanyLogosSlider;
