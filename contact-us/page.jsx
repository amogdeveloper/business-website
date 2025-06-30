// app/contact/page.jsx
'use client';

import { useEffect, useRef } from 'react';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

export default function ContactPage() {
  const particlesRef = useRef(null);
  
  useEffect(() => {
    // Register GSAP plugins
    gsap.registerPlugin(ScrollTrigger);
    
    // Create particles
    const particleCount = 50;
    
    for (let i = 0; i < particleCount; i++) {
      const particle = document.createElement('div');
      particle.classList.add('particle');
      
      // Random size, position and color
      const size = Math.random() * 5 + 2;
      const posX = Math.random() * 100;
      const posY = Math.random() * 100;
      const opacity = Math.random() * 0.5 + 0.1;
      
      particle.style.width = `${size}px`;
      particle.style.height = `${size}px`;
      particle.style.left = `${posX}%`;
      particle.style.top = `${posY}%`;
      particle.style.background = `rgba(59, 130, 246, ${opacity})`;
      particle.style.animationDelay = `${Math.random() * 5}s`;
      
      particlesRef.current.appendChild(particle);
      
      // Animate particles
      gsap.to(particle, {
        x: Math.random() * 100 - 50,
        y: Math.random() * 100 - 50,
        duration: Math.random() * 20 + 10,
        repeat: -1,
        yoyo: true,
        ease: "sine.inOut"
      });
    }
    
    // Animate elements on scroll
    gsap.utils.toArray('.animate-in').forEach((el, index) => {
      gsap.to(el, {
        scrollTrigger: {
          trigger: el,
          start: 'top 90%',
          toggleActions: 'play none none none'
        },
        y: 0,
        opacity: 1,
        duration: 0.8,
        delay: index * 0.1,
        ease: "back.out(1.7)"
      });
    });
    
    // Form animation
    const inputs = document.querySelectorAll('input, textarea');
    inputs.forEach(input => {
      input.addEventListener('focus', () => {
        gsap.to(input, {
          scale: 1.02,
          duration: 0.3
        });
      });
      
      input.addEventListener('blur', () => {
        gsap.to(input, {
          scale: 1,
          duration: 0.3
        });
      });
    });
    
    // Button animations
    const buttons = document.querySelectorAll('.btn-glow');
    buttons.forEach(btn => {
      btn.addEventListener('mouseenter', () => {
        gsap.to(btn, {
          boxShadow: '0 0 20px rgba(59, 130, 246, 0.7)',
          duration: 0.3
        });
      });
      
      btn.addEventListener('mouseleave', () => {
        gsap.to(btn, {
          boxShadow: '0 0 10px rgba(59, 130, 246, 0.3)',
          duration: 0.3
        });
      });
    });
    
    // Cleanup function
    return () => {
      ScrollTrigger.getAll().forEach(trigger => trigger.kill());
    };
  }, []);

  return (
    <div className="min-h-screen relative">
      {/* Particles Background */}
      <div ref={particlesRef} className="fixed inset-0 z-0" />
      
      {/* Hero Section */}
      <section className="relative min-h-[70vh] flex items-center justify-center overflow-hidden hero-bg">
      
        
        <div className="container mx-auto px-4 py-16 relative z-10">
          <div className="text-center max-w-4xl mx-auto">
            <h1 className="text-5xl md:text-7xl font-bold mb-6 glitch" data-text="CONTACT US">
              <span className="gradient-text">CONTACT US</span>
            </h1>
            <p className="text-xl md:text-2xl text-slate-300 mb-10 max-w-2xl mx-auto">
              Reach out to our team and let's build something amazing together
            </p>
            
            <div className="flex flex-wrap justify-center gap-4">
              <a href="#contact-form" className="px-8 py-3 bg-gradient-to-r from-blue-500 to-cyan-500 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:scale-105 btn-glow">
                Send a Message
              </a>
              <a href="tel:+1234567890" className="px-8 py-3 bg-transparent border-2 border-white text-white rounded-full font-bold text-lg hover:bg-white hover:text-gray-900 transition-all">
                <i className="fas fa-phone mr-2"></i> Call Now
              </a>
            </div>
          </div>
        </div>
      </section>

      {/* Contact Information */}
      <section className="py-16 relative z-10">
        <div className="container mx-auto px-4">
          <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
            {/* Contact Card 1 */}
            <div className="section-card animate-in p-8 text-center">
              <div className="bg-gradient-to-r from-blue-500 to-purple-500 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 glow contact-icon">
                <i className="fas fa-map-marker-alt text-3xl text-white"></i>
              </div>
              <h3 className="text-2xl font-bold mb-4">Our Location</h3>
              <p className="text-slate-300 mb-4">
                123 Tech Avenue<br />
                Silicon Valley, CA 94043<br />
                United States
              </p>
              <a href="#" className="text-blue-400 hover:text-blue-300 transition">
                Get Directions <i className="fas fa-arrow-right ml-1"></i>
              </a>
            </div>
            
            {/* Contact Card 2 */}
            <div className="section-card animate-in p-8 text-center">
              <div className="bg-gradient-to-r from-purple-500 to-pink-500 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 glow contact-icon">
                <i className="fas fa-phone-alt text-3xl text-white"></i>
              </div>
              <h3 className="text-2xl font-bold mb-4">Call Us</h3>
              <p className="text-slate-300 mb-4">
                +1 (555) 123-4567<br />
                Mon-Fri: 9am - 6pm<br />
                Sat: 10am - 4pm
              </p>
              <a href="tel:+15551234567" className="text-purple-400 hover:text-purple-300 transition">
                Call Now <i className="fas fa-phone ml-1"></i>
              </a>
            </div>
            
            {/* Contact Card 3 */}
            <div className="section-card animate-in p-8 text-center">
              <div className="bg-gradient-to-r from-cyan-500 to-blue-500 p-4 rounded-full w-20 h-20 flex items-center justify-center mx-auto mb-6 glow contact-icon">
                <i className="fas fa-envelope text-3xl text-white"></i>
              </div>
              <h3 className="text-2xl font-bold mb-4">Email Us</h3>
              <p className="text-slate-300 mb-4">
                info@ocentra.tech<br />
                support@ocentra.tech<br />
                careers@ocentra.tech
              </p>
              <a href="mailto:info@ocentra.tech" className="text-cyan-400 hover:text-cyan-300 transition">
                Send Email <i className="fas fa-paper-plane ml-1"></i>
              </a>
            </div>
          </div>
        </div>
      </section>

      {/* Contact Form & Map */}
      <section id="contact-form" className="py-16 relative z-10">
        <div className="container mx-auto px-4">
          <div className="grid grid-cols-1 lg:grid-cols-2 gap-12">
            {/* Contact Form */}
            <div className="section-card animate-in p-8">
              <h2 className="text-3xl font-bold mb-2 gradient-text">Send Us a Message</h2>
              <p className="text-slate-400 mb-8">We'll get back to you as soon as possible</p>
              
              <form className="space-y-6">
                <div>
                  <label htmlFor="name" className="block text-slate-300 mb-2">Full Name</label>
                  <input type="text" id="name" className="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none input-glow" placeholder="John Doe" />
                </div>
                
                <div>
                  <label htmlFor="email" className="block text-slate-300 mb-2">Email Address</label>
                  <input type="email" id="email" className="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none input-glow" placeholder="john@example.com" />
                </div>
                
                <div>
                  <label htmlFor="phone" className="block text-slate-300 mb-2">Phone Number</label>
                  <input type="tel" id="phone" className="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none input-glow" placeholder="+1 (555) 123-4567" />
                </div>
                
                <div>
                  <label htmlFor="subject" className="block text-slate-300 mb-2">Subject</label>
                  <input type="text" id="subject" className="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none input-glow" placeholder="How can we help you?" />
                </div>
                
                <div>
                  <label htmlFor="message" className="block text-slate-300 mb-2">Your Message</label>
                  <textarea id="message" rows="5" className="w-full bg-slate-800 border border-slate-700 rounded-lg px-4 py-3 text-white focus:outline-none input-glow" placeholder="Tell us about your project..."></textarea>
                </div>
                
                <button type="submit" className="w-full py-4 bg-gradient-to-r from-blue-500 to-purple-500 rounded-lg font-bold text-lg shadow-lg hover:shadow-xl transition-all btn-glow pulse">
                  Send Message <i className="fas fa-paper-plane ml-2"></i>
                </button>
              </form>
            </div>
            
            {/* Map */}
            <div className="section-card animate-in overflow-hidden p-0">
              <div className="map-container h-full">
                <iframe 
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d101453.17164994384!2d-122.15020499999999!3d37.413299999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb7495bec0189%3A0x7c17d44a466baf9b!2sMountain%20View%2C%20CA%2C%20USA!5e0!3m2!1sen!2s!4v1690834321231!5m2!1sen!2s" 
                  className="w-full h-full border-0" 
                  allowFullScreen="" 
                  loading="lazy" 
                  referrerPolicy="no-referrer-when-downgrade">
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* FAQ Section */}
      <section className="py-16 relative z-10">
        <div className="container mx-auto px-4">
          <div className="max-w-4xl mx-auto text-center mb-16">
            <h2 className="text-4xl md:text-5xl font-bold mb-6">
              Frequently <span className="gradient-text">Asked Questions</span>
            </h2>
            <p className="text-xl text-slate-300 max-w-3xl mx-auto">
              Find answers to common questions about our services and processes
            </p>
          </div>
          
          <div className="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto">
            {/* FAQ 1 */}
            <div className="section-card animate-in p-6">
              <h3 className="text-xl font-bold mb-3 flex items-center">
                <i className="fas fa-question-circle text-blue-400 mr-3"></i>
                How quickly do you respond to inquiries?
              </h3>
              <p className="text-slate-300">
                We typically respond to all inquiries within 24 hours during business days. For urgent matters, please call our support line directly.
              </p>
            </div>
            
            {/* FAQ 2 */}
            <div className="section-card animate-in p-6">
              <h3 className="text-xl font-bold mb-3 flex items-center">
                <i className="fas fa-question-circle text-purple-400 mr-3"></i>
                What industries do you specialize in?
              </h3>
              <p className="text-slate-300">
                We have expertise across multiple sectors including FinTech, HealthTech, E-commerce, AI & Machine Learning, and IoT solutions.
              </p>
            </div>
            
            {/* FAQ 3 */}
            <div className="section-card animate-in p-6">
              <h3 className="text-xl font-bold mb-3 flex items-center">
                <i className="fas fa-question-circle text-cyan-400 mr-3"></i>
                Do you offer custom development services?
              </h3>
              <p className="text-slate-300">
                Yes, we specialize in custom software development tailored to your specific business needs and requirements.
              </p>
            </div>
            
            {/* FAQ 4 */}
            <div className="section-card animate-in p-6">
              <h3 className="text-xl font-bold mb-3 flex items-center">
                <i className="fas fa-question-circle text-pink-400 mr-3"></i>
                What are your working hours?
              </h3>
              <p className="text-slate-300">
                Our standard office hours are 9:00 AM to 6:00 PM PST, Monday through Friday. Support is available 24/7 for critical issues.
              </p>
            </div>
          </div>
        </div>
      </section>

      {/* Call to Action */}
      <section className="py-20 relative overflow-hidden">
        <div className="absolute inset-0 bg-gradient-to-r from-blue-500/10 to-purple-500/10 z-0"></div>
        <div className="container mx-auto px-4 relative z-10">
          <div className="max-w-4xl mx-auto text-center">
            <h2 className="text-4xl md:text-5xl font-bold mb-6">Ready to Start Your Project?</h2>
            <p className="text-xl text-slate-300 mb-10 max-w-2xl mx-auto">
              Let's discuss how we can help you achieve your business goals with our technology solutions.
            </p>
            <div className="flex flex-wrap justify-center gap-4">
              <a href="#contact-form" className="px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-500 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transition-all transform hover:scale-105 btn-glow pulse">
                Get in Touch
              </a>
              <a href="tel:+15551234567" className="px-8 py-4 bg-transparent border-2 border-white text-white rounded-full font-bold text-lg hover:bg-white hover:text-gray-900 transition-all">
                <i className="fas fa-phone mr-2"></i> Call Us Now
              </a>
            </div>
          </div>
        </div>
      </section>

    
    </div>
  );
}