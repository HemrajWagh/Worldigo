"use client";

import { Button } from "@/components/ui/button";
import { useCart } from "@/store/cartStore";

export default function BuyNowCard() {
  const addToCart = useCart((s) => s.addToCart);

  return (
    <div className="border rounded-2xl p-6 space-y-4 shadow-sm">

      <div className="text-2xl font-semibold text-green-600">
        ₹999
      </div>

      <Button
        className="w-full"
        onClick={() =>
          addToCart({
            id: 1,
            name: "World i Go Game",
            price: 999,
          })
        }
      >
        Add to Cart
      </Button>

      <Button variant="secondary" className="w-full">
        Buy Now
      </Button>

    </div>
  );
}