import React from 'react';
import { motion, useReducedMotion } from 'framer-motion';
import {
  Globe,
  Rocket,
  Cpu,
  Handshake,
  Network,
  Layers,
  Plus
} from 'lucide-react';

const objectives = [
  {
    icon: Globe,
    title: "Eco-System",
    description: "Nurturing innovation and Startups in the region for sustainable economic growth.",
    tags: "Innovation | Growth"
  },
  {
    icon: Rocket,
    title: "Venture Creation",
    description: "Inculcate entrepreneurship and new venture creation based on innovative technology.",
    tags: "Startups | Innovation"
  },
  {
    icon: Cpu,
    title: "Tech Commercialization",
    description: "Platform for speedy commercialization of technologies from the host institution.",
    tags: "Commercialization | IPR"
  },
  {
    icon: Handshake,
    title: "Interfacing",
    description: "Interfacing between academia, industry, and financial institutions.",
    tags: "Industry | Academia"
  },
  {
    icon: Network,
    title: "Networking",
    description: "Networking between academia, industry and financial institution.",
    tags: "Connect | Collaborate"
  },
  {
    icon: Layers,
    title: "Value Addition",
    description: "Value added services: legal, financial, technical, IPR, and more.",
    tags: "Services | Support"
  }
];

export default function ObjectivesSection() {
  const shouldReduceMotion = useReducedMotion();

  return (
    <section className="w-full bg-white py-24 md:py-32" aria-label="Our objectives">
      <div className="max-w-7xl mx-auto px-6">
        
        {/* Section Header (centered) */}
        <motion.div
          initial={{ y: shouldReduceMotion ? 0 : 24, opacity: 0 }}
          whileInView={{ y: 0, opacity: 1 }}
          viewport={{ once: true, amount: 0.2 }}
          transition={{ duration: 0.6, ease: [0.16, 1, 0.3, 1] }}
          className="text-center max-w-2xl mx-auto"
        >
          <span className="text-xs font-semibold uppercase tracking-widest text-gray-400 block">
            WHAT WE DO
          </span>
          <h2 className="font-serif text-4xl md:text-5xl font-bold text-[#1A1A2E] mt-2 tracking-tight">
            Our Objectives
          </h2>
          <p className="text-gray-500 text-base max-w-xl mx-auto mt-3 leading-relaxed">
            How RCOEM TBI drives innovation, growth, and impact across the startup ecosystem.
          </p>
        </motion.div>

        {/* Card Grid */}
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-14">
          {objectives.map((item, index) => {
            const IconComponent = item.icon;
            return (
              <motion.div
                key={item.title}
                initial={{ y: shouldReduceMotion ? 0 : 32, opacity: 0 }}
                whileInView={{ y: 0, opacity: 1 }}
                viewport={{ once: true, amount: 0.2 }}
                transition={{
                  duration: 0.6,
                  ease: [0.16, 1, 0.3, 1],
                  delay: index * 0.09
                }}
                whileHover={shouldReduceMotion ? {} : { y: -4 }}
                className="h-full"
              >
                <div className="bg-[#F9F9F7] rounded-2xl p-6 border border-gray-100 flex flex-col justify-between h-full hover:shadow-md transition-shadow duration-200">
                  
                  {/* Top Section */}
                  <div>
                    <span className="text-xs font-semibold uppercase tracking-widest text-gray-400 block">
                      Objective
                    </span>
                    <h3 className="text-xl font-bold text-[#1A1A2E] mt-1 tracking-tight">
                      {item.title}
                    </h3>
                    <p className="text-sm text-gray-500 leading-relaxed mt-2">
                      {item.description}
                    </p>
                  </div>

                  {/* Visual Block (Icon Holder) & Tags */}
                  <div>
                    <div className="aspect-[4/3] rounded-xl mt-5 bg-gradient-to-br from-[#F5D716]/25 to-[#F5D716]/10 flex items-center justify-center relative">
                      <IconComponent className="w-10 h-10 text-gray-600" />
                      
                      {/* Circular Button in Bottom-Right Corner */}
                      <button
                        type="button"
                        className="absolute bottom-3 right-3 w-9 h-9 rounded-full bg-[#1A1A2E] text-white flex items-center justify-center shadow-md hover:bg-[#2A2A42] transition-colors"
                        aria-label={`Learn more about ${item.title}`}
                      >
                        <Plus className="w-4 h-4" />
                      </button>
                    </div>

                    {/* Bottom Tags Line */}
                    <div className="text-xs text-gray-400 mt-4 font-medium">
                      {item.tags}
                    </div>
                  </div>

                </div>
              </motion.div>
            );
          })}
        </div>

      </div>
    </section>
  );
}
