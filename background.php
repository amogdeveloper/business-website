<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Particle Background</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background: linear-gradient(135deg, #05070e 0%, #121924 100%);
            color: #f1f5f9;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
       
        
        h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(90deg, #38bdf8, rgba(126, 10, 101, 0.47));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }
        
        p {
            font-size: 1.25rem;
            line-height: 1.6;
            margin-bottom: 2rem;
            color: #cbd5e1;
        }
        
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background: linear-gradient(to right, #3b82f6, #8b5cf6);
            color: white;
            font-weight: bold;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            margin: 0 0.5rem;
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .btn-outline {
            background: transparent;
            border: 2px solid #3b82f6;
        }
        
        /* Particles container */
        #particles {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }
        
        .particle {
            position: absolute;
            border-radius: 50%;
            background: rgba(59, 130, 246, 0.5);
            box-shadow: 0 0 10px rgba(59, 130, 246, 0.5);
        }
        
        .instructions {
            position: absolute;
            bottom: 20px;
            left: 0;
            right: 0;
            text-align: center;
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.9rem;
            padding: 0 2rem;
        }
        
        .code-block {
            background: rgba(0, 0, 0, 0.4);
            padding: 20px;
            border-radius: 10px;
            margin-top: 30px;
            text-align: left;
            font-family: monospace;
            font-size: 0.9rem;
            max-height: 200px;
            overflow: auto;
        }
    </style>
</head>
<body>
    <!-- Particles Background -->
    <div id="particles"></div>
    
   
        </div>
    </div>
    
   
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Create particles
            const particlesContainer = document.getElementById('particles');
            const particleCount = 100;
            
            function createParticle() {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                
                // Random size, position and color
                const size = Math.random() * 5 + 2;
                const posX = Math.random() * 100;
                const posY = Math.random() * 100;
                const hue = 200 + Math.random() * 60;
                const opacity = Math.random() * 0.5 + 0.1;
                
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.top = `${posY}%`;
                particle.style.background = `rgba(59, 130, 246, ${opacity})`;
                particle.style.animationDelay = `${Math.random() * 5}s`;
                
                particlesContainer.appendChild(particle);
                
                // Animate particles
                gsap.to(particle, {
                    x: Math.random() * 100 - 50,
                    y: Math.random() * 100 - 50,
                    duration: Math.random() * 20 + 10,
                    repeat: -1,
                    yoyo: true,
                    ease: "sine.inOut"
                });
                
                return particle;
            }
            
            // Create initial particles
            for (let i = 0; i < particleCount; i++) {
                createParticle();
            }
            
            // Add more particles on click
            document.addEventListener('click', function() {
                for (let i = 0; i < 5; i++) {
                    createParticle();
                }
            });
        });
    </script>
</body>
</html>