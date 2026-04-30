"use client";

import Link from 'next/link';
import { ShoppingCart, Menu, X } from 'lucide-react';
import { Sheet, SheetContent, SheetTrigger } from '@/components/ui/sheet';

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

import { useEffect, useRef, useState } from "react"
import Image from "next/image"
// import { Home, ChevronLeft, ChevronRight } from "lucide-react"
// import gsap from "gsap"
import logo from "/public/img/Final_Logo.png"


export default function Header() {
  const headerRef = useRef<HTMLElement>(null)
  function setIsOpen(arg0: boolean): void {
    throw new Error('Function not implemented.');
  }

  return (
    <>
    {/* const cartCount = useCartStore((state) = state.getCartCount());
    const [isOpen, setIsOpen] = useState(false); */}

    <header className="sticky top-0 z-40 w-full border-b bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
      <div className="container flex h-14 max-w-screen-2xl items-center justify-between">
        <Link href="/" className="flex items-center gap-2 font-bold text-lg">
          {/* <span className="text-primary">Logo</span> */}
          <img  className="flex items-center gap-2 h-12"
            src="/img/Final_Logo.png"
            alt="World I Go"
          />
        </Link>

        {/* Desktop Navigation */}
        <nav className="hidden md:flex items-center gap-6">
          <Link href="/" className="text-sm font-medium hover:text-primary transition-colors">
            Home
          </Link>
          <Link href="/product" className="text-sm font-medium hover:text-primary transition-colors">
            Product
          </Link>
          <Link href="/cart" className="text-sm font-medium hover:text-primary transition-colors">
            Cart
          </Link>
        </nav>

        {/* Cart Icon */}
        {/* <Link
          href="/cart"
          className="relative flex items-center justify-center w-10 h-10 hover:bg-accent rounded-md transition-colors"
        >
          <ShoppingCart className="w-5 h-5" />
          {cartCount > 0 && (
            <span className="absolute -top-2 -right-2 bg-primary text-primary-foreground text-xs font-bold rounded-full w-5 h-5 flex items-center justify-center">
              {cartCount}
            </span>
          )}
        </Link> */}

        {/* Mobile Menu */}
        <Sheet  onOpenChange={setIsOpen}>
          <SheetTrigger asChild className="md:hidden">
            <Button variant="ghost" size="icon">
              <Menu className="w-5 h-5" />
            </Button>
          </SheetTrigger>
          <SheetContent side="right" className="w-[250px]">
            <nav className="flex flex-col gap-4 mt-8">
              <Link
                href="/"
                className="text-sm font-medium hover:text-primary transition-colors"
                onClick={() => setIsOpen(false)}
              >
                Home
              </Link>
              <Link
                href="/product"
                className="text-sm font-medium hover:text-primary transition-colors"
                onClick={() => setIsOpen(false)}
              >
                Product
              </Link>
              <Link
                href="/cart"
                className="text-sm font-medium hover:text-primary transition-colors"
                onClick={() => setIsOpen(false)}
              >
                Cart
              </Link>
            </nav>
          </SheetContent>
        </Sheet>
      </div>
    </header>


{/*
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
    </header> */}
    </>
  )
}