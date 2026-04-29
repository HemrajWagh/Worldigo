import type { Metadata } from "next";
import { Geist, Geist_Mono, Figtree } from "next/font/google";
import "./globals.css";
import { cn } from "@/lib/utils";
import Footer from './component/layout/Footer'
import Header from './component/layout/Header'
import Content from "./component/layout/Content";
import Mission from "./component/Mission";

import Link from 'next/link'

const figtree = Figtree({subsets:['latin'],variable:'--font-sans'});

const geistSans = Geist({
  variable: "--font-geist-sans",
  subsets: ["latin"],
});

const geistMono = Geist_Mono({
  variable: "--font-geist-mono",
  subsets: ["latin"],
});

export const metadata: Metadata = {
  title: "World I Go",
  description: "Explore The world through strategy,storytelling and play.",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    
    <html
      lang="en"
      className={cn("h-full", "antialiased", geistSans.variable, geistMono.variable, "font-sans", figtree.variable)}
    > 
  
  <link
    href="/components/bootstrap/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link
    href="/components/bootstrap-icons/bootstrap-icons.css"
    rel="stylesheet"
  />
  <link
    href="/components/glightbox/css/glightbox.min.css"
    rel="stylesheet"
  />
  <link href="/css/style.css" rel="stylesheet" />
  <link href="/css/responsive.css" rel="stylesheet" />

  <link
    rel="stheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
  />

    {/* <html lang="en">
      <body className="bg-white text-black">
        <Header />
        <main>{children}</main>
        <Footer />
      </body>
    </html> */}

      <Header />
      <body className="min-h-full flex flex-col">{children}</body>
      <Mission />
      <Content/>
      <Footer />
    </html>
  );
}
