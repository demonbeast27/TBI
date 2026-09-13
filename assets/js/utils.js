/**
 * Utility helper for merging class names (Vanilla JS / Tailwind)
 */
export function cn(...inputs) {
    return inputs.flat(Infinity).filter(Boolean).join(' ');
}
