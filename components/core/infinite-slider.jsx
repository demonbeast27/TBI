'use client';
import React, { useRef, useState } from 'react';

/**
 * InfiniteSlider component
 * Supports vertical & horizontal infinite looping with Framer Motion or CSS animation.
 */
export function InfiniteSlider({
  children,
  gap = 24,
  duration = 45,
  direction = 'horizontal',
  reverse = false,
  pauseOnHover = true,
  className = '',
}) {
  const isVertical = direction === 'vertical';

  return (
    <div
      className={`overflow-hidden select-none ${
        isVertical ? 'flex flex-col' : 'flex flex-row'
      } ${className}`}
      style={{
        maskImage: isVertical
          ? 'linear-gradient(to bottom, transparent 0%, black 10%, black 90%, transparent 100%)'
          : 'linear-gradient(to right, transparent 0%, black 10%, black 90%, transparent 100%)',
        WebkitMaskImage: isVertical
          ? 'linear-gradient(to bottom, transparent 0%, black 10%, black 90%, transparent 100%)'
          : 'linear-gradient(to right, transparent 0%, black 10%, black 90%, transparent 100%)',
      }}
    >
      <div
        className={`flex shrink-0 ${
          isVertical ? 'flex-col' : 'flex-row'
        } ${pauseOnHover ? 'hover:[animation-play-state:paused]' : ''}`}
        style={{
          gap: `${gap}px`,
          animation: `${isVertical ? (reverse ? 'infinite-scroll-down' : 'infinite-scroll-up') : (reverse ? 'infinite-scroll-right' : 'infinite-scroll-left')} ${duration}s linear infinite`,
        }}
      >
        {children}
        {children}
      </div>
      <div
        aria-hidden="true"
        className={`flex shrink-0 ${
          isVertical ? 'flex-col' : 'flex-row'
        } ${pauseOnHover ? 'hover:[animation-play-state:paused]' : ''}`}
        style={{
          gap: `${gap}px`,
          animation: `${isVertical ? (reverse ? 'infinite-scroll-down' : 'infinite-scroll-up') : (reverse ? 'infinite-scroll-right' : 'infinite-scroll-left')} ${duration}s linear infinite`,
        }}
      >
        {children}
        {children}
      </div>
    </div>
  );
}

export default InfiniteSlider;
