// "use client";

'use client';

import { useState } from 'react';
import { ShoppingCart, CheckCircle, Shield, Truck } from 'lucide-react';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { useCartStore, Product } from '../../store/cartStore';

interface BuyNowCardProps {
  product: Product;
}

export function BuyNowCard({ product }: BuyNowCardProps) {
  const [quantity, setQuantity] = useState(1);
  const [isAdded, setIsAdded] = useState(false);
  const addToCart = useCartStore((state) => state.addToCart);
  

  const handleAddToCart = () => {
    addToCart(product, quantity);
    setIsAdded(true);
    // toast({
    //   title: 'Added to cart',
    //   description: `${quantity} × ${product.name} added to your cart.`,
    // });
    setTimeout(() => setIsAdded(false), 2000);
  };

  const handleBuyNow = () => {
    addToCart(product, quantity);
    window.location.href = '/checkout';
  };

  const handleQuantityChange = (value: string) => {
    const num = parseInt(value) || 1;
    setQuantity(Math.max(1, Math.min(10, num)));
  };

  return (
    <div className="sticky top-20 bg-card p-6 rounded-lg border">
      {/* Price */}
      <div className="mb-6">
        <div className="flex items-baseline gap-2 mb-2">
          <span className="text-3xl font-bold">₹{product.price.toLocaleString('en-IN')}</span>
          {product.rating && (
            <span className="text-sm text-muted-foreground">
              ({product.rating} ⭐ {product.reviews?.toLocaleString('en-IN')} reviews)
            </span>
          )}
        </div>
      </div>

      {/* Quantity Selector */}
      <div className="mb-6">
        <label className="text-sm font-medium block mb-2">Quantity</label>
        <div className="flex items-center gap-2">
          <Button
            variant="outline"
            size="sm"
            onClick={() => setQuantity(Math.max(1, quantity - 1))}
          >
            -
          </Button>
          <Input
            type="number"
            min="1"
            max="10"
            value={quantity}
            onChange={(e) => handleQuantityChange(e.target.value)}
            className="w-16 text-center"
          />
          <Button
            variant="outline"
            size="sm"
            onClick={() => setQuantity(Math.min(10, quantity + 1))}
          >
            +
          </Button>
        </div>
      </div>

      {/* Action Buttons */}
      <div className="flex flex-col gap-3 mb-6">
        <Button
          size="lg"
          onClick={handleBuyNow}
          className="w-full"
        >
          Buy Now
        </Button>
        <Button
          size="lg"
          variant="outline"
          onClick={handleAddToCart}
          className="w-full"
        >
          <ShoppingCart className="w-4 h-4 mr-2" />
          {isAdded ? 'Added!' : 'Add to Cart'}
        </Button>
      </div>

      {/* Trust Badges */}
      <div className="space-y-3">
        <div className="flex items-center gap-3 text-sm">
          <Shield className="w-4 h-4 text-green-600" />
          <span>Secure checkout with SSL encryption</span>
        </div>
        <div className="flex items-center gap-3 text-sm">
          <Truck className="w-4 h-4 text-blue-600" />
          <span>Free shipping on orders above ₹500</span>
        </div>
        <div className="flex items-center gap-3 text-sm">
          <CheckCircle className="w-4 h-4 text-purple-600" />
          <span>30-day money back guarantee</span>
        </div>
      </div>
    </div>
  );
}



// import { Button } from "@/components/ui/button";
// import {  } from "@/store/cartStore";

// export default function BuyNowCard() {
//   const addToCart = useCart((s) => s.addToCart);

//   return (
//     <div className="border rounded-2xl p-6 space-y-4 shadow-sm">

//       <div className="text-2xl font-semibold text-green-600">
//         ₹999
//       </div>

//       <Button
//         className="w-full"
//         onClick={() =>
//           addToCart({
//             id: 1,
//             name: "World i Go Game",
//             price: 999,
//           })
//         }
//       >
//         Add to Cart
//       </Button>

//       <Button variant="secondary" className="w-full">
//         Buy Now
//       </Button>

//     </div>
//   );
// }