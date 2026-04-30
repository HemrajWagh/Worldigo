import { create } from "zustand";

export const useCart = create((set) => ({
  items: [],
  addToCart: (item: any) =>
    set((state: { items: any; }) => ({
      items: [...state.items, item],
    })),
}));