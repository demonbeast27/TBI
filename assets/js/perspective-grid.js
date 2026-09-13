// Perspective Grid Implementation using vanilla Three.js
// Inspired by React Bits "Perspective Grid"

document.addEventListener("DOMContentLoaded", () => {
    const canvas = document.getElementById("perspective-grid-canvas");
    if (!canvas || typeof THREE === 'undefined') return;

    // Setup scene
    const scene = new THREE.Scene();

    // Camera setup for perspective grid
    const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 1, 1000);
    camera.position.y = 5;
    camera.position.z = 20;
    camera.lookAt(0, 0, 0);

    // Renderer
    const renderer = new THREE.WebGLRenderer({ canvas: canvas, alpha: true, antialias: true });
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.setSize(window.innerWidth, canvas.parentElement.clientHeight);
    renderer.setClearColor(0x000000, 0); // Transparent background

    // Create Grid Helper
    const gridHelper = new THREE.GridHelper(200, 100, 0x00dfd8, 0x0070f3);
    gridHelper.position.y = -5;
    scene.add(gridHelper);

    // Fog for depth fading effect
    scene.fog = new THREE.Fog(0x061c38, 10, 50); // Matches theme dark blue color

    // Animation Loop
    const clock = new THREE.Clock();

    function animate() {
        requestAnimationFrame(animate);

        const delta = clock.getDelta();
        
        // Move grid towards camera to simulate infinite scrolling
        gridHelper.position.z += 5 * delta;
        
        // Reset position to create infinite loop
        if (gridHelper.position.z > 2) { // 200/100 = 2 units per square
            gridHelper.position.z = 0;
        }

        renderer.render(scene, camera);
    }

    animate();

    // Resize handler
    window.addEventListener('resize', () => {
        const width = window.innerWidth;
        const height = canvas.parentElement.clientHeight;
        
        renderer.setSize(width, height);
        camera.aspect = width / height;
        camera.updateProjectionMatrix();
    });
});
