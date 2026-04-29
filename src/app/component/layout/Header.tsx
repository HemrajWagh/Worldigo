"use client";

import React from 'react'
import { Button } from "@/components/ui/button"
import {
  Card,
  CardAction,
  CardContent,
  CardDescription,
  CardFooter,
  CardHeader,
  CardTitle,
} from "@/components/ui/card"
import { Input } from "@/components/ui/input"
import { Label } from "@/components/ui/label"
import Link from 'next/link'

import { useEffect, useRef, useState } from "react"
import Image from "next/image"
// import { Home, ChevronLeft, ChevronRight } from "lucide-react"
// import gsap from "gsap"
import logo from "/public/img/Final_Logo.png"


export default function Header() {
  const headerRef = useRef<HTMLElement>(null)
  return (
<>


      {/* <div className="relative h-screen w-full overflow-hidden">
      <header
        ref={headerRef}
        className="fixed top-0 left-0 right-0 z-50 transition-all duration-300 border-b border-transparent"
      >
        <div className="container mx-auto px-4 py-4">
          <div className="flex items-center justify-between">
            <Link href="/" className="logo" style={{ marginRight: "auto" }}>
            <img
              src="/img/Final_Logo.png"
              alt="World I Go"
              className="img-fluid"
                />
            </Link>
           
            <nav className="hidden md:flex items-center space-x-8">
              <Link href="#" className="text-sm font-medium hover:text-[#f8811b] transition-colors">
                About
              </Link>
              <Link href="#" className="text-sm font-medium hover:text-[#f8811b] transition-colors">
                Aminities
              </Link>
              <Link href="#" className="text-sm font-medium hover:text-[#f8811b] transition-colors">
                Floor Plans
              </Link>
              <Link href="#" className="text-sm font-medium hover:text-[#f8811b] transition-colors">
                Location
              </Link>
              <Link href="#" className="text-sm font-medium hover:text-[#f8811b] transition-colors">
                Price
              </Link>
              <Link href="#" className="text-sm font-medium hover:text-[#f8811b] transition-colors">
                Gallery
              </Link>
            </nav>
          </div>
        </div>
      </header>
      </div> */}



      <header id="header" className="fixed-top">
      <div className="container d-flex align-items-center">
        
        <Link href="/" className="logo" style={{ marginRight: "auto" }}>
          <img
            src="/img/Final_Logo.png"
            alt="World I Go"
            className="img-fluid"
          />
        </Link>

        <nav id="navbar" className="navbar">
          <ul>
            <li>
              <a className="nav-link scrollto active" href="#banner">
                HOME
              </a>
            </li>
            <li>
              <a className="nav-link scrollto" href="#worldigo-section">
                ABOUT US
              </a>
            </li>
          </ul>

          <i className="bi bi-list mobile-nav-toggle" />
        </nav>
      </div>
    </header>
    </>
  )
}