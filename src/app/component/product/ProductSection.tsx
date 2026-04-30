// import ProductGallery from "./ProductGallery";
import ProductInfo from "./ProductInfo";

export default function ProductSection() {
  return (
    <section className="py-12">
      <div className="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-10">
        {/* <ProductGallery /> */}
        <ProductInfo />
      </div>
    </section>
  );
}