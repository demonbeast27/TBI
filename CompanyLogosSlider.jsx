import React from 'react';
import { InfiniteSlider } from './components/core/infinite-slider';

const LOGO_BASE = '/wp-content/themes/rbu-tbi/tbi-theme/assets/images/Logos/';

const CompanyCard = ({ name, logo }) => (
  <div className="aspect-square w-[220px] flex items-center justify-center bg-white border border-gray-300 rounded-lg shadow-sm shrink-0 hover:shadow-md transition-all duration-300 overflow-hidden">
    {logo ? (
      <img
        src={LOGO_BASE + logo}
        alt={name}
        className="w-full h-full object-contain p-4"
        style={{ filter: 'drop-shadow(0 1px 2px rgba(0,0,0,0.06))' }}
      />
    ) : (
      <span className="font-serif text-xl text-[#1A1A2E] text-center px-4 leading-snug">
        {name}
      </span>
    )}
  </div>
);

export function CompanyLogosSlider() {
  const columnOne = [
    { name: 'Somebuddy Technologies', logo: null },
    { name: 'Fameximpex Technologies', logo: null },
    { name: 'TESTMAN QA Services', logo: null },
    { name: 'Myuz App', logo: 'MIA.png' },
    { name: 'Agrodia Enterprises LLP', logo: 'AGRODIA.png' },
    { name: 'Foster Reads', logo: 'FOSTEREADS.png' },
    { name: 'Mineral Drop International', logo: null },
    { name: 'School of Outdoor Leadership', logo: null },
    { name: 'Happico India', logo: null },
    { name: 'FoodForU', logo: null },
    { name: 'Alentar Electric LLP', logo: null },
    { name: 'Sigmatronics Innovations', logo: 'SIGMATRONICS.png' },
    { name: 'Empowrclub Pvt. Ltd.', logo: 'EMPOWRCLUB.png' },
    { name: 'Health COCO / Smiling Bird', logo: 'SMILEBIRD.png' },
    { name: 'Unboxing Art', logo: null },
    { name: 'Easywire Technology', logo: 'EASYWIRE.png' },
  ];

  const columnTwo = [
    { name: 'MechHelp Pvt. Ltd.', logo: 'MECHHELP.png' },
    { name: 'Swasthavyas Emergency', logo: null },
    { name: 'Prograssia', logo: 'PROGRESSIA.png' },
    { name: 'Shashtav Charging Bharat', logo: null },
    { name: 'HAWLT Technology', logo: 'HAWLA.png' },
    { name: 'Bio-Spectronics', logo: 'BIOSPECTRONICS.png' },
    { name: 'Rihla Technologies (Yoo CAB)', logo: 'YOO CABS.png' },
    { name: 'Wooferzz Innovations', logo: 'WOOFERZZ.png' },
    { name: 'BeRAM Pvt. Ltd.', logo: 'BERAM.png' },
    { name: 'DVSLA Technologies', logo: null },
    { name: 'Kridun AI Solutions', logo: null },
    { name: 'Wise-Besarv', logo: null },
    { name: 'Pbridge Consultancy', logo: 'PBRIDGE.png' },
    { name: 'Cupda Project', logo: 'Cupda Project.png' },
    { name: 'Parkby', logo: null },
    { name: 'NOVERRA Growth Studio', logo: null },
  ];

  return (
    <div className="relative h-[500px] overflow-hidden">
      {/* Slider Content: Two vertical columns side by side */}
      <div className="flex h-[500px] gap-6 overflow-hidden">
        <InfiniteSlider direction="vertical" duration={50} pauseOnHover={true} className="gap-6">
          {columnOne.map((item) => (
            <CompanyCard key={item.name} name={item.name} logo={item.logo} />
          ))}
        </InfiniteSlider>
        <InfiniteSlider direction="vertical" reverse duration={50} pauseOnHover={true} className="gap-6">
          {columnTwo.map((item) => (
            <CompanyCard key={item.name} name={item.name} logo={item.logo} />
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
