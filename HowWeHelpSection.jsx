import React, { useEffect, useRef, useState } from 'react';
import { 
  Users, 
  Scale, 
  Handshake, 
  Coins, 
  TrendingUp, 
  Monitor, 
  GraduationCap 
} from 'lucide-react';

const services = [
  {
    icon: Users,
    title: "Mentoring",
    description: "Industry insights, a network of contacts, and strategic decision-making support for navigating startup challenges."
  },
  {
    icon: Scale,
    title: "Advisory Services",
    description: "Legal, regulatory guidance, IP protection, and compliance support for your business operations."
  },
  {
    icon: Handshake,
    title: "Investor Connect",
    description: "Links to potential investors and venture capitalists to secure funding and accelerate growth."
  },
  {
    icon: Coins,
    title: "Funding Facilitation",
    description: "Assistance with MSME hackathons, government grants, and other funding scheme applications. Ongoing: MSME HI/BI Scheme, Govt. of India."
  },
  {
    icon: TrendingUp,
    title: "Business Development",
    description: "Market analysis, strategic planning, partnership building, and customer acquisition strategies."
  },
  {
    icon: Monitor,
    title: "Soft Resources",
    description: "Software subscriptions to reduce operational costs and enable efficient development workflows."
  },
  {
    icon: GraduationCap,
    title: "Coaching & Training",
    description: "Tailored programs equipping startups with business acumen, innovation strategies, and pitching skills."
  }
];

export default function HowWeHelpSection() {
  const svgWrapperRef = useRef(null);
  const listRef = useRef(null);
  const [paths, setPaths] = useState([]);
  const [dimensions, setDimensions] = useState({ w: 0, h: 0 });
  const [isMobile, setIsMobile] = useState(false);

  useEffect(() => {
    const updatePaths = () => {
      if (window.innerWidth <= 992) {
        setIsMobile(true);
        return;
      }
      setIsMobile(false);

      if (!svgWrapperRef.current || !listRef.current) return;

      const wrapperRect = svgWrapperRef.current.getBoundingClientRect();
      const anchors = listRef.current.querySelectorAll('.hwh-row-anchor');
      
      const w = wrapperRect.width;
      const h = wrapperRect.height;
      setDimensions({ w, h });

      const cx = w * 0.75;
      const cy = h / 2;
      const cp1x = cx * 0.4;
      const cp2x = cx * 0.6;

      const newPaths = Array.from(anchors).map(anchor => {
        const anchorRect = anchor.getBoundingClientRect();
        const startY = anchorRect.top - wrapperRect.top + (anchorRect.height / 2);
        return `M 0,${startY} C ${cp1x},${startY} ${cp2x},${cy} ${cx},${cy}`;
      });

      setPaths(newPaths);
    };

    updatePaths();
    window.addEventListener('resize', updatePaths);
    return () => window.removeEventListener('resize', updatePaths);
  }, []);

  return (
    <section className="bg-[#fdfdfa] py-24 overflow-hidden" aria-label="How We Help">
      <div className="max-w-[1200px] mx-auto px-6 lg:px-12">
        
        {/* Section Header */}
        <div className="mb-16">
          <span className="block text-[11px] font-bold tracking-[0.2em] uppercase text-[#0057B0] mb-3">
            OUR SERVICES
          </span>
          <h2 className="font-serif text-3xl md:text-5xl font-extrabold text-[#0d1117] m-0 leading-tight tracking-tight">
            How We Help
          </h2>
        </div>

        {/* Body Layout */}
        <div className="relative flex">
          
          {/* Left Side: List */}
          <div ref={listRef} className="w-full lg:w-[48%] flex flex-col gap-10 relative z-10">
            {services.map((item, index) => {
              const Icon = item.icon;
              return (
                <div key={index} className="flex items-stretch gap-5 relative">
                  
                  {/* Number */}
                  <div className="font-['Oswald'] text-4xl font-bold text-[#0d1117] leading-none pt-1 min-w-[44px]">
                    {String(index + 1).padStart(2, '0')}
                  </div>

                  {/* Vertical Divider */}
                  <div className="w-[3px] bg-[#0057B0] rounded-sm shrink-0"></div>

                  {/* Content */}
                  <div className="flex-1 pb-2">
                    <div className="flex items-center gap-3 mb-2.5">
                      <Icon className="w-[26px] h-[26px] text-[#0057B0] shrink-0" />
                      <h3 className="text-xl font-bold text-[#0d1117] m-0 leading-snug">
                        {item.title}
                      </h3>
                    </div>
                    <p className="text-[15px] text-slate-600 leading-relaxed m-0">
                      {item.description}
                    </p>
                  </div>

                  {/* Anchor Point for SVG lines (hidden) */}
                  <div className="hwh-row-anchor absolute right-[-24px] top-1/2 w-px h-px pointer-events-none"></div>
                </div>
              );
            })}
          </div>

          {/* Right Side: SVG Canvas (Hidden on mobile) */}
          {!isMobile && (
            <div ref={svgWrapperRef} className="absolute top-0 right-0 w-[52%] h-full z-0 pointer-events-none">
              {dimensions.w > 0 && (
                <svg 
                  className="w-full h-full overflow-visible" 
                  viewBox={`0 0 ${dimensions.w} ${dimensions.h}`}
                  preserveAspectRatio="none"
                >
                  <g>
                    {/* Converging Paths */}
                    {paths.map((d, i) => (
                      <path 
                        key={i} 
                        d={d} 
                        fill="none" 
                        stroke="#0057B0" 
                        strokeWidth="2.5" 
                        strokeLinecap="round" 
                      />
                    ))}

                    {/* Final Straight Line */}
                    <path 
                      d={`M ${dimensions.w * 0.75},${dimensions.h / 2} L ${dimensions.w - 10},${dimensions.h / 2}`} 
                      fill="none" 
                      stroke="#0057B0" 
                      strokeWidth="2.5" 
                      strokeLinecap="round" 
                    />

                    {/* Success Figure */}
                    <g transform={`translate(${dimensions.w - 30}, ${dimensions.h / 2})`} className="text-[#0d1117]">
                      {/* Head */}
                      <circle cx="0" cy="-28" r="5" fill="currentColor" />
                      {/* Torso */}
                      <line x1="0" y1="-23" x2="0" y2="-10" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" />
                      {/* Left Arm (Raised) */}
                      <line x1="0" y1="-20" x2="-10" y2="-32" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" />
                      {/* Right Arm (Raised) */}
                      <line x1="0" y1="-20" x2="10" y2="-32" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" />
                      {/* Left Leg */}
                      <line x1="0" y1="-10" x2="-8" y2="0" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" />
                      {/* Right Leg */}
                      <line x1="0" y1="-10" x2="8" y2="0" stroke="currentColor" strokeWidth="2.5" strokeLinecap="round" />
                    </g>
                  </g>
                </svg>
              )}
            </div>
          )}

        </div>
      </div>
    </section>
  );
}
