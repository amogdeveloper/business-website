// app/layout.jsx
import './globals.css';
import { Inter } from 'next/font/google';
import Head from 'next/head';
import { Header } from './components/Header';
import Footer from './components/Footer';

const inter = Inter({ subsets: ['latin'] });

export const metadata = {
  title: 'Contact Us - Ocentra Technologies',
  description: 'Get in touch with our team for innovative technology solutions',
};

export default function RootLayout({ children }) {
  return (
    <html lang="en">
      <Head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
      </Head>
      <body className={inter.className}>
        <Header/>
        {children}</body>
        <Footer/>
    </html>
  );
}