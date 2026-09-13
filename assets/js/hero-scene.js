document.addEventListener('DOMContentLoaded', () => {
    const container = document.getElementById('hero-canvas-container');
    if (!container || typeof THREE === 'undefined') return;

    // Setup Scene, Camera, Renderer
    const scene = new THREE.Scene();
    
    // Use an Orthographic camera for a 2D plane that fills the screen
    const camera = new THREE.OrthographicCamera(-1, 1, 1, -1, 0, 1);
    
    const renderer = new THREE.WebGLRenderer({ alpha: true, antialias: true });
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
    container.appendChild(renderer.domElement);

    // Shaders from React Bits Silk component
    const vertexShader = `
    varying vec2 vUv;
    varying vec3 vPosition;

    void main() {
      vPosition = position;
      vUv = uv;
      gl_Position = projectionMatrix * modelViewMatrix * vec4(position, 1.0);
    }
    `;

    const fragmentShader = `
    varying vec2 vUv;
    varying vec3 vPosition;

    uniform float uTime;
    uniform vec3  uColor;
    uniform float uSpeed;
    uniform float uScale;
    uniform float uRotation;
    uniform float uNoiseIntensity;

    const float e = 2.71828182845904523536;

    float noise(vec2 texCoord) {
      float G = e;
      vec2  r = (G * sin(G * texCoord));
      return fract(r.x * r.y * (1.0 + texCoord.x));
    }

    vec2 rotateUvs(vec2 uv, float angle) {
      float c = cos(angle);
      float s = sin(angle);
      mat2  rot = mat2(c, -s, s, c);
      return rot * uv;
    }

    void main() {
      float rnd        = noise(gl_FragCoord.xy);
      vec2  uv         = rotateUvs(vUv * uScale, uRotation);
      vec2  tex        = uv * uScale;
      float tOffset    = uSpeed * uTime;

      tex.y += 0.03 * sin(8.0 * tex.x - tOffset);

      float pattern = 0.6 +
                      0.4 * sin(5.0 * (tex.x + tex.y +
                                       cos(3.0 * tex.x + 5.0 * tex.y) +
                                       0.02 * tOffset) +
                               sin(20.0 * (tex.x + tex.y - 0.1 * tOffset)));

      vec4 col = vec4(uColor, 1.0) * vec4(pattern) - rnd / 15.0 * uNoiseIntensity;
      col.a = 1.0;
      gl_FragColor = col;
    }
    `;

    // Hex to Normalized RGB helper
    const hexToNormalizedRGB = hex => {
        hex = hex.replace('#', '');
        return [
            parseInt(hex.slice(0, 2), 16) / 255,
            parseInt(hex.slice(2, 4), 16) / 255,
            parseInt(hex.slice(4, 6), 16) / 255
        ];
    };

    // Configuration
    const config = {
        speed: 5,
        scale: 1,
        color: '#0057B0', // RCOEM TBI brand color
        noiseIntensity: 1.5,
        rotation: 0
    };

    const uniforms = {
        uSpeed: { value: config.speed },
        uScale: { value: config.scale },
        uNoiseIntensity: { value: config.noiseIntensity },
        uColor: { value: new THREE.Color(...hexToNormalizedRGB(config.color)) },
        uRotation: { value: config.rotation },
        uTime: { value: 0 }
    };

    // Plane Geometry to fill the screen
    // Orthographic camera coordinates range from -1 to 1 in both axes
    const geometry = new THREE.PlaneGeometry(2, 2);
    const material = new THREE.ShaderMaterial({
        uniforms: uniforms,
        vertexShader: vertexShader,
        fragmentShader: fragmentShader,
        transparent: true,
        opacity: 0.8 // slight transparency so background color can blend
    });

    const silkPlane = new THREE.Mesh(geometry, material);
    scene.add(silkPlane);

    // Animation Loop
    const clock = new THREE.Clock();

    function animate() {
        requestAnimationFrame(animate);
        const delta = clock.getDelta();
        
        // Update time uniform as per the React component logic
        uniforms.uTime.value += 0.1 * delta;
        
        renderer.render(scene, camera);
    }

    animate();

    // Handle Resize
    window.addEventListener('resize', () => {
        renderer.setSize(window.innerWidth, window.innerHeight);
        // Orthographic camera doesn't need aspect ratio updates for a full screen plane
        // since the plane coordinates exactly match the NDC (-1 to 1)
    });
});
